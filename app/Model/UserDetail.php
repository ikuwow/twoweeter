<?php 
class UserDetail extends AppModel {

    public $belongsTo = array(
        'User',
        'Timezone'
    );

    /**
     */
    public function registerImport($user_id,$at,$atc,$tname,$toffset) {
        $data = array(
            'UserDetail' => array(
                'user_id' => $user_id,
                'access_token' => $at,
                'access_token_secret' => $atc
            ),
            'Timezone' => array(
                'name' => $tname,
                'utc_offset' => $toffset
            ),
        );
        $stat = $this->saveAssociated($data);
        return $stat;
    }


    /**
     */
    public function updateLastLoginDateTimeById ($id) {
        $data = array(
            'UserDetail' => array(
                'id' => $id,
                'last_login' => date('Y-m-d H:i:s')
            )
        );
        return $this->save($data);
    }

    /**
     */
    public function getAccessTokenById($user_id) {
        return $this->find('first',array(
            'conditions' => array(
                'user_id' => $user_id,
            ),
            'fields' => array(
                'access_token','access_token_secret'
            ),
            'limit' => 1
        ));
    }
}
