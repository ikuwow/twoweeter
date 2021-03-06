<?php
/* MypagesController */
class MypagesController extends AppController {

    public $uses = array(
        'Tweet',
        'User',
        'Follow',
        'UserDetail'
    );

    public $helpers = array(
        'Form'
    );

    public $to;
    public $me;

    // ログインチェック、オブジェクト作成
    public function beforeFilter() {
        $user = $this->Session->read('user');
        if (!isset($user)) {
            $this->redirect(array('controller'=>'pages','action'=>'index'));
        } else {
            $this->to = new TwitterOAuth(
                Configure::read('CONSUMER_KEY'),
                Configure::read('CONSUMER_SECRET'),
                $this->Session->read('user.access_token'),
                $this->Session->read('user.access_token.secret')
            );
        }
        $this->me = $this->Session->read('me');
    }

    public function timeline() {
        $followings = $this->Follow->getFollowingsByUserId($this->me->id);
        $following_userids = array();
        foreach ($followings as $following) {
            $following_userids[] = $following['Follow']['following_user_id'];
        }
        $tweets = $this->Tweet->getTweets2weeksAgoByFollowingUserIds($following_userids);
        $this->set('tweets',$tweets);
        $this->layout = 'mypage';
        $this->set('me',$this->Session->read('me')); 
    }
    

}
