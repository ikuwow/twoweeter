<?php
/* User Model */
class User extends AppModel {

    public function getUserByTwitterUserId($id) {
        $options = array(
            'conditions' => array(
                'tw_user_id' => $id,
            ),
            'limit'=>1,
        );
        return $this->find('first',$options);
    }
}
