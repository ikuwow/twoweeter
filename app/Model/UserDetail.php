<?php 
class UserDetail extends AppModel {

    public $belongsTo = array(
        'User'
    );

    public function saveAccessTokens($user_id,$at,$atc) {
        $data = array(
            'UserDetail' => array(
                'user_id' => $user_id,
                'access_token' => $at,
                'access_token_secret' => $atc,
            )
        );
        $stat = $this->save($data);
        return $stat;
    }

    public function getAccessTokenByUserId($user_id) {
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
