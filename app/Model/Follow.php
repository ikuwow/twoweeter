<?php
/* Follow Model */
class Follow extends AppModel {

    // following_user_idでアソシエーションしていることに注意
    public $belongsTo = array(
        'User' => array(
            'foreignKey' => 'following_user_id'
        )
    );

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

        // 重いが、重複は防げるクエリ。
        foreach ($followings->ids as $id) {
            $condition = array(
                'user_id' => $me->id,
                'following_user_id' => $id
            );
            $data = array();
            if (!$this->hasAny($condition)) {
                $data[] = array(
                    'user_id' => $me->id,
                    'following_user_id' => $id
                );
            }
        }

        $stat = $this->saveMany($data);

        /*
        $data = array();
        foreach ($followings->ids as $following) {
            $data[] = array(
                'Follow' => array(
                    'user_id' => $me->id,
                    'following_user_id' => $following,
                )
            );
        }
        $stat = $this->saveAll($data);
         */
        return $stat;
    }

}
