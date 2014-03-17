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

    public function saveTwitterUserInfos($userinfos) {
        $data = array();
        foreach ($userinfos as $key => $info) {
            $data[$key] = array(
                'User' => array(
                    'id' => $info->id,
                    'screen_name' => $info->screen_name,
                    'name' => $info->name,
                    'icon_url' => $info->profile_image_url,
                    //'is_registered' => $is_registered,
                    'last_login' => date('Y-m-d H:i:s'),
                )
            );
        }
        return $this->saveAll($data);
    }

}
