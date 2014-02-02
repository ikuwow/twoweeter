<?php
/* MypagesController */
class MypagesController extends AppController {

    public $uses = array(
        'Tweet'
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

        $me = $this->Session->read('me');
    }


    public function timeline() {
        $tweets = $this->Tweet->getTweets($this->Session->read('me'));
        $this->set('tweets',$tweets);
        $this->layout = 'mypage';
        $this->set('me',$this->Session->read('me')); 
    }
    

}
