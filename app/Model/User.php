<?php
/* User Model */
class User extends AppModel {

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
    public function updateTwitterUserInfo($me) {
        $data = array(
            'User' => array(
                'id' => $this->getUserIdByTwitterUserId($me->id),
                'tw_user_id' => $me->id,
                'screen_name' => $me->screen_name,
                'icon_url' => $me->profile_image_url,
                'is_registered' => true,
                'last_login' => date('Y-m-d H:i:s'),
            )
        );
        $stat = $this->save($data);
        return $stat;
    }

    public function insertTwitterUserInfo($me,$at,$ats) {
        $data = array(
            'User' => array(
                'tw_user_id' => $me->id,
                'screen_name' => $me->screen_name,
                'icon_url' => $me->profile_image_url,
                'access_token' => $at,
                'access_token_secret' => $ats,
                'is_registered' => true,
                'last_login' => date('Y-m-d H:i:s'),
            )
        );
        $stat = $this->save($data);
        return $stat;
    }


    public function getAccessTokenById($id) {
        return $this->find('first',array(
            'conditions' => array(
                'id' => $id,
            ),
            'fields' => array(
                'access_token','access_token_secret'
            ),
            'limit' => 1
        ));
    }
}
