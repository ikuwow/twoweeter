<?php 
class UserDetail extends AppModel {

    public $belongsTo = array(
        'User',
        // 'Timezone'
    );

    public $validate = array(
        'user_id' => array(
            'rule' => 'numeric',
            'message' => 'user_id is required.'
        ),
        'access_token' => array(
            'rule' => 'notEmpty',
            'message' => 'Invalid access_token.'
        ),
        'access_token_secret' => array(
            'rule' => 'notEmpty',
            'message' => 'Invalid access_token_secret.'
        ),
        // これはassociationで定義されるからいいのかな
        'timezone_id' => array(
            'rule' => 'notEmpty',
            'message' => 'Invalid timezone_id.'
        )
    );

    /**
     */
    public function registerImport($user_id,$at,$atc,$tzname,$tzoffset) {
        $data = array(
            'UserDetail' => array(
                'user_id' => $user_id,
                'access_token' => $at,
                'access_token_secret' => $atc
            ),
            /*
            'Timezone' => array(
                'name' => $tzname,
                'utc_offset' => $tzoffset
            ),
             */
        );
        // $stat = $this->saveAssociated($data);
        $stat = $this->save($data);
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
