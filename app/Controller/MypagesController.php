<?php
/* MypagesController */
class MypagesController extends AppController {

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
    }


    public function timeline() {
       $this->layout = 'mypage';
       $this->set('me',$this->Session->read('me')); 
    }

}
