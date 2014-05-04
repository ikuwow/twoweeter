<?php
/* TopsController */

class TopsController extends AppController {


    public function index() {
        $this->layout = 'toplayout';
    }

    public function login() {
        if ($this->Session->read('me')) {
            $this->redirect(array(
                'controller'=>'mypages','action'=>'timeline'
            ));
        } else {
            $this->redirect(array(
                'controller' => 'users',
                'action' => 'register'
            ));
        }
    }

}
