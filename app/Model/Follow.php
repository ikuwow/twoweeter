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
        $stat = $this->saveAll($data);
        // 重複を削除、うまいやり方はないのか・・・。
        // 入れるときに取り除くor入れてから取り除く。
        // select * from follow where user_id=:user_id group by
        //      following_user_id having count(id) > 1;
        return $stat;
    }

    /*
    public function deleteDuplicateFollowings() {
    }
     */
}
