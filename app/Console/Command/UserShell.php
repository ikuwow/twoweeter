<?php 
/**
 * UserShell: Userモデルの操作
 */
class UserShell extends AppShell {

    public $uses = array(
        'User'
    );

    /**
     *
     * mainメソッド
     *
     * 引数が何も指定されなかったらこいつが動く
     */
    public function main() {
        // でもこれをやらなくても大丈夫だな。
        return $this->out($this->OptionParser->help());
    }

    public function getOptionParser() {
        $parser = parent::getOptionParser();
        return $parser->description(
            'User管理プログラム'
        )->addSubcommand('index', array(
            'help' => 'ユーザの一覧表示',
            'parser' => array('description'  => array(
                '登録されているユーザを全て表示します'
            ))
        ));
    }

    /**
     * index
     *
     * idとscreen_nameをすべて表示する
     */
    public function index() {
        foreach ($this->User->find('all') as $user) {
            $this->out($user['User']['id']."\t".$user['User']['screen_name']."\t".$user['User']['created']);
        }
    }
}
