<?php
/* TopsController */

class TopsController extends AppController {


    public function index() {
        if ($this->Session->read('me')) {
            $this->redirect(array('controller'=>'mypages','action'=>'timeline'));
        }
        $this->layout = 'toplayout';
    }

}
