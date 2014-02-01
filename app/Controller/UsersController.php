<?php
/* UsersController */
class UsersController extends AppController {

    public function index(){
    }

    public function register() {

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
            //$_SESSION['access_token'] = $access_token;
    
            $me = $to->get('account/verify_credentials');
            $this->Session->write('me',$me);
    
        // 初回なら、DBに挿入しつつ取得
            /*
        if (!$user) {
            $sql = 'insert into users (
                tw_user_id, tw_screen_name, tw_access_token, tw_access_token_secret, created, modified 
                ) values (
                    :id_str, :screen_name, :access_token, :access_token_secret, now(), now()
                )';
    
            $stmt = $dbh->prepare($sql);
            $params = array(
                ':id_str' => $me->id_str,
                ':screen_name' => $me->screen_name,
                ':access_token'=> $me->oauth_token,
                ':access_token_secret' => $me->oauth_token_secret,
            );
            $stmt->execute($params);
            $myId = $dbh->lastInsertId();
            $sql = 'select * from users where id=:id limit 1';
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array(':id' => $myId));
            $user = $stmt->fetch();
        }
    
        // ログイン処理
        if(!empty($user)) {
            // セッションハイジャック対策
            session_regenerate_id(true);
            $_SESSION['me'] = $me;
        }
    
        // トップへ
        header('Location: index.php');
        die();

             */
            $this->redirect('/');
        }
    
    }
}
