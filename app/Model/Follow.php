<?php
/* Follow Model */
class Follow extends AppModel {

    public function getFollowingsByUserId($id) {
        $options = array(
            'conditions' => array(
                'user_id' => $id,
            ),
            'fields' => 'following_user_id',
            'limit' => 1000
        );

        return $this->find('all',$options);
    }

    public function saveFollowings($me,$followings) {
        $data = array();
        foreach ($followings->ids as $following) {
            $data[] = array(
                'Follow' => array(
                    'user_id' => $me->id,
                    'following_user_id' => $following,
                )
            );
        }
        return $this->saveAll($data);
    }
}
