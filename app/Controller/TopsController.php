<?php
/* TopsController */

class TopsController extends AppController {

    public function index() {
    }

    public function timeline() {
       $this->set('me',$this->Session->read('me')); 
    }
}
