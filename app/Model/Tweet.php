<?php
/* Tweet Model */
class Tweet extends AppModel {

    public $belongsTo = array(
        'User'
    );

    public function getTweets($me) {
        $options = array(
            'conditions' => array(
                'user_id' => $me->id
                //'user_id' => 118995622
            ),
            'limit' => 100
        );
        $tweets = $this->find('all',$options);
        return $tweets;
    }

    public function getTweetsByFollowingUserIds($following_user_ids) {
        $options = array(
            'conditions' => array(
                'Tweet.user_id' => $following_user_ids
            ),
            'limit' => 100,
            'fields' => array(
                'User.screen_name',
                'User.icon_url',
                'Tweet.tweet',
                'Tweet.tweet_date'
            ),
            'order' => 'Tweet.tweet_date DESC'
        );
        $tweets = $this->find('all',$options);
        return $tweets;
    }

    // 一番大事なメソッド
    public function getTweets2weeksAgoByFollowingUserIds ($following_user_ids) {
        $options = array(
            'conditions' => array(
                'Tweet.user_id' => $following_user_ids,
                'Tweet.tweet_date <=' => date('Y-m-d H:i:s',strtotime('-2 week'))
            ),
            'fields' => array(
                'User.screen_name',
                'User.name',
                'User.icon_url',
                'Tweet.tweet',
                'Tweet.tweet_date'
            ),
            'order' => 'Tweet.tweet_date DESC',
            'limit' => Configure::read('NUM_TWEET_TIMELINE'),
        );
        $tweets = $this->find('all',$options);
        return $tweets;
    }
    
    // このアプリで一番重要なメソッド
    /*
    public function getFollowingTweets($me) {
        // Follow => User => Tweetと取ってくる。
        $options = array(
            'conditions' => array(
            ),
            'limit' => 100
            'fields' => array('User.screen_name','Tweet.tweet',
        );
        $tweets = $this->find('all',$options);
        return $tweets;
    }
     */

    public function saveTweetByUserId($user_id,$tweet) {
        // 日本時間に変更
        $td = date('Y-m-d H:i:s',strtotime($tweet->created_at)+32400);
        $data = array(
            'Tweet' => array(
                'id' => $tweet->id,
                'user_id' => $user_id,
                'tweet' => $tweet->text,
                'tweet_date' => $td
            )
        );
        return $this->save($data);
    }

    public function saveTweetsByUserId($user_id,$tweets) {
        $stat = true;
        foreach ($tweets as $tweet) {
            $this->create();
            $stat = $stat && $this->saveTweetByUserId($user_id,$tweet);
        }
        return $stat;
    }
}
