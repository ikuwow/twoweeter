<?php
/* UsersController */
class UsersController extends AppController {

    public $uses = array(
        'User',
    );

    // これはMypagesControllerに書くべきだな。
    public function beforeFilter() {
        //if (isset($me)) {
            //$at = $this
            //$to = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET);
        //}
    }

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
            $this->Session->write('access_token',$access_token['oauth_token']);
            $this->Session->write('access_token_secret',$access_token['oauth_token_secret']);

            // oauth_tokenを削除しておく
            $this->Session->delete('oauth_token');
            $this->Session->delete('oauth_token_secret');
    
            $me = $to->get('account/verify_credentials');
            $this->Session->write('me',$me);
    
            // 初回なら、基本データをDBに挿入しつつ取得、ほかはアップデート
            $is_saved = $this->User->find('count',array('conditions'=>array('tw_user_id'=>$me->id))); 
            if (!$is_saved) {
                $stat = $this->User->insertTwitterUserInfo($me,$access_token['oauth_token'],$access_token['oauth_token_secret']);
            } else {
                $stat = $this->User->updateTwitterUserInfo($me);
            }
            if (!$stat) {
                echo 'error!!';
                die();
            }

            $this->redirect(array('controller'=>'mypages','action'=>'timeline'));

        }
    
    }

    public function importTweet() {

        // オブジェクト作成
        $to = new TwitterOAuth(
            CONSUMER_KEY,
            CONSUMER_SECRET,
            $this->Session->read('access_token'),
            $this->Session->read('access_token_secret')
        );

        $following = $to->get('friends/ids');
        debug($following);

        $this->set('following',$following);
        //$this->render(array('controller'=>'mypages','action'=>'timeline'));
        //$this->redirect(array('controller'=>'mypages','action'=>'timeline'));
    
    }

    public function logout() {
        $this->Session->destroy();
        $this->redirect(array('controller'=>'tops','action'=>'index'));
    }
}
