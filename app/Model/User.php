<?php
/* User Model */
class User extends AppModel {

    public $hasOne = array(
        'UserDetail'
    );

    public $hasMany = array(
        'Follow'
    );

    public function getUserById($id) {
        $options = array(
            'conditions' => array(
                'id' => $id,
            ),
            'limit'=>1,
        );
        return $this->find('first',$options);
    }
        

    public function saveTwitterUserInfo($me,$is_registered=null) {
        $data = array(
            'User' => array(
                'id' => $me->id,
                'screen_name' => $me->screen_name,
                'name' => $me->name,
                'icon_url' => $me->profile_image_url,
                //'is_registered' => $is_registered,
                'last_login' => date('Y-m-d H:i:s'),
            )
        );
        $stat = $this->save($data);
        return $stat;
    }

}
