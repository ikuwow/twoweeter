<?php
/* User Model */
class User extends AppModel {

    public $hasOne = array(
        'UserDetail'
    );

    // twitterのユーザidからDBのユーザIDを引く
    public function getUserIdByTwitterUserId($tw_user_id) {
        $data = array();
        $data = $this->find(
            'first',
            array(
                'conditions' => array(
                    'tw_user_id' => $tw_user_id,
                ),
                'fields' => 'User.id',
                'limit' => 1
            )
        );
        return $data['User']['id'];
    }


    public function getUserById($id) {
        $options = array(
            'conditions' => array(
                'id' => $id,
            ),
            'limit'=>1,
        );
        return $this->find('first',$options);
    }
        

    // idで引くのは、duplicationを自動で検出して
    // insertかupdateか選択してくれるから。
    public function updateTwitterUserInfo($me,$is_registered=null) {
        $data = array(
            'User' => array(
                'id' => $this->getUserIdByTwitterUserId($me->id),
                'tw_user_id' => $me->id,
                'screen_name' => $me->screen_name,
                'icon_url' => $me->profile_image_url,
                'is_registered' => $is_registered,
                'last_login' => date('Y-m-d H:i:s'),
            )
        );
        $stat = $this->save($data);
        return $stat;
    }

    public function insertTwitterUserInfo($me,$is_registered) {
        $data = array(
            'User' => array(
                'tw_user_id' => $me->id,
                'screen_name' => $me->screen_name,
                'icon_url' => $me->profile_image_url,
                'is_registered' => $is_registered,
            )
        );
        $stat = $this->save($data);
        return $stat;
    }

}
