<?php
/* Tweet Model */
class Tweet extends AppModel {

    public $belongsTo = array(
        'User'
    );

    public function getTweets($me) {
        $options = array(
            'conditions' => array(
                //'user_id' => $me->id
                'user_id' => 118995622
            ),
            'limit' => 100
        );
        $tweets = $this->find('all',$options);
        //$tweets = $this->find('all');
        return $tweets;
    }

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
