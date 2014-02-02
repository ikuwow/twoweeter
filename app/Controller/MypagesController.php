<?php
/* MypagesController */
class MypagesController extends AppController {

    /*
    public function beforefilter() {
        $this->User->getAccessTokenById(1);
    }
     */

    public function timeline() {
       $this->layout = 'mypage';
       $this->set('me',$this->Session->read('me')); 
    }

}
