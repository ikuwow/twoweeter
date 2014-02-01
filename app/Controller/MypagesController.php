<?php
/* MypagesController */
class MypagesController extends AppController {

    public function timeline() {
       $this->layout = 'mypage';
       $this->set('me',$this->Session->read('me')); 
    }

}
