<?php
/* MypagesController */
class MypagesController extends AppController {

    public function timeline() {
       $this->set('me',$this->Session->read('me')); 
    }

}
