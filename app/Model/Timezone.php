<?php
/* Timezone Model */
class Timezone extends AppModel {

    public $hasMany = array(
        'UserDetail'
    );

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'utc_offset' => array(
            'rule' => 'notEmpty'
        )
    );
}
