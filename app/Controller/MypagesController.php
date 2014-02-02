<?php
/* MypagesController */
class MypagesController extends AppController {

    // オブジェクト作成
    public function beforeFilter() {
        $to = new TwitterOAuth(
            CONSUMER_KEY,
            CONSUMER_SECRET,
            $this->Session->read('user.access_token'),
            $this->Session->read('user.access_token.secret')
        );
    }


    public function timeline() {
       $this->layout = 'mypage';
       $this->set('me',$this->Session->read('me')); 
    }

}
