<?php
/* Timezone Model */
class Timezone extends AppModel {

    public $hasMany = array(
        'UserDetail'
    );
}
