<?php
/* MypagesController */
class MypagesController extends AppController {

    public $uses = array(
        'Tweet',
        'User',
        'Follow'
    );

    public $to;
    public $me;

    // ログインチェック、オブジェクト作成
    public function beforeFilter() {
        $user = $this->Session->read('user');
        if (!isset($user)){
            $this->redirect(array('controller'=>'tops','action'=>'index'));
        } else {
            $this->to = new TwitterOAuth(
                CONSUMER_KEY,
                CONSUMER_SECRET,
                $this->Session->read('user.access_token'),
                $this->Session->read('user.access_token.secret')
            );
        }
        $this->me = $this->Session->read('me');
    }

    public function timeline() {
        $followings = $this->Follow->getFollowingsByUserId($this->me->id);
        $following_userid = array();
        foreach ($followings as $following) {
            $following_userid[] = $following['Follow']['following_user_id'];
        }
        $tweets = $this->Tweet->getTweetsByFollowingUserIds($following_userid);
        $this->set('tweets',$tweets);
        $this->layout = 'mypage';
        $this->set('me',$this->Session->read('me')); 
    }
    

}
