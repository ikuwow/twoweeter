<?php
/* MypagesController */
class MypagesController extends AppController {

    public $uses = array(
        'Tweet',
        'User',
        'Follow'
    );

    // ログインチェック、オブジェクト作成
    public function beforeFilter() {
        $user = $this->Session->read('user');
        if (!isset($user)){
            $this->redirect(array('controller'=>'tops','action'=>'index'));
        } else {
            $to = new TwitterOAuth(
                CONSUMER_KEY,
                CONSUMER_SECRET,
                $this->Session->read('user.access_token'),
                $this->Session->read('user.access_token.secret')
            );
        }
        // beforeFilterでは変数は受け継がれないようだ。
        $me = $this->Session->read('me');
    }

    public function timeline() {
        $me = $this->Session->read('me');
        $followings = $this->Follow->getFollowingsByUserId($me->id);
        $following_userid = array();
        foreach ($followings as $following) {
            $following_userid[] = $following['Follow']['following_user_id'];
        }
        $tweets = $this->Tweet->getTweetsByFollowingUserIds($following_userid);
        //debug($tweets);
        $this->set('tweets',$tweets);
        $this->layout = 'mypage';
        $this->set('me',$this->Session->read('me')); 
    }
    

}
