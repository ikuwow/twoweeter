<?php
/* UsersController */
class UsersController extends AppController {

    public $uses = array(
        'User',
    );

    // Toppage
    public function index(){
    }

    public function register() {

        // セッションをクリア
        if($this->Session->check('referer')){
           $this->Session->delete('referer');
        }

        if (!isset($_GET['oauth_verifier'])) { // 認証前

            $to = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET);
            $request_token = $to->getRequestToken('http://'.$_SERVER['SERVER_NAME'].'/users/register');

            if (!isset($request_token)) {
                echo 'Error on request token';
                die();
            }
    
            $this->Session->write('oauth_token',$request_token['oauth_token']);
            $this->Session->write('oauth_token_secret',$request_token['oauth_token_secret']);
    
            $authorize_URI = $to->getAuthorizeURL($request_token['oauth_token']);
            header('Location: '.$authorize_URI);
            die();

        } else { // 認証画面から帰ったあと
    
            if ($this->Session->read('oauth_token') !== $_REQUEST['oauth_token']) {
                echo 'error';
                exit;
            }
    
            // もらったoauth_tokenをつかう
            $to = new TwitterOAuth(
                CONSUMER_KEY,
                CONSUMER_SECRET,
                $this->Session->read('oauth_token'),
                $this->Session->read('oauth_token_secret')
            );
    
            // アクセストークンをゲット。基本的にこれで完了
            $access_token = $to->getAccessToken($_REQUEST['oauth_verifier']);
            $this->Session->write('access_token',$access_token);
    
            $me = $to->get('account/verify_credentials');
            $this->Session->write('me',$me);
    
            // 初回なら、DBに挿入しつつ取得
            $is_saved = $this->User->find('count',array('conditions'=>array('tw_user_id'=>$me->id))); 
            if (!$is_saved) {
                $stat = $this->User->insertTwitterUserInfo($me);
            } else {
                $stat = $this->User->updateTwitterUserInfo($me);
            }
            if (!$stat) {
                echo 'error!!';
                die();
            }
            /*
            // ログイン処理
            if(!empty($user)) {
                // セッションハイジャック対策
                session_regenerate_id(true);
                $_SESSION['me'] = $me;
            }
             */
            $this->redirect(array('controller'=>'mypages','action'=>'timeline'));

        }
    
    }
    
    public function logout() {
        $this->Session->destroy();
        $this->redirect(array('controller'=>'tops','action'=>'index'));
    }
}
