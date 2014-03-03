<?php
/* UsersController */
class UsersController extends AppController {

    public $uses = array(
        'User',
        'UserDetail',
        'Tweet',
        'Follow',
        'Timezone'
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
            $request_token = $to->getRequestToken(
                'http://'.$_SERVER['SERVER_NAME'].'/users/register'
            );
            // $this->Session->write('request_token',$request_token);
            // debug($request_token);

            if (!isset($request_token)) {
                echo 'Error on request token';
                die();
            }
    
            $this->Session->write(
                'oauth_token',
                $request_token['oauth_token']
            );
            $this->Session->write(
                'oauth_token_secret',
                $request_token['oauth_token_secret']
            );
    
            $authorize_URI = $to->getAuthorizeURL($request_token['oauth_token']);
            header('Location: '.$authorize_URI);
            die();

        } else { // 認証画面から帰ったあと
    
            // トークンが正しくないなら弾く
            if ($this->Session->read('oauth_token') !== $_REQUEST['oauth_token']) {
                echo 'error';
                exit;
            }
    
            // もらったoauth_tokenでオブジェクト作成
            $to = new TwitterOAuth(
                CONSUMER_KEY,
                CONSUMER_SECRET,
                $this->Session->read('oauth_token'),
                $this->Session->read('oauth_token_secret')
            );
    
            // アクセストークンをゲット。基本的にこれで完了
            $access_token = $to->getAccessToken($_REQUEST['oauth_verifier']);
            $this->Session->write('access_token',$access_token);

            // 基本情報me
            $me = $to->get('account/verify_credentials');
            // debug($me);
            $this->Session->write('me',$me);

            // アクセスに必要な情報
            $stat = $this->User->saveTwitterUserInfo($me,true);
            if (!$stat) {
                echo 'error!!';
                die();
            }

            // Timezoneを設定
            $settings = $to->get('account/settings');

            // UserDetailのidを取得（初回判定など）
            $user_detail_id = $this->UserDetail->find('count',array(
                'conditions' => array('user_id'=>$me->id)
            ));

            // 初回ならアクセストークン、timezoneをセーブ
            if (!$user_detail_id) {
                $this->UserDetail->registerImport(
                    $me->id,
                    $access_token['oauth_token'],
                    $access_token['oauth_token_secret'],
                    $settings->time_zone->name,
                    $settings->time_zone->utc_offset
                );
                $user_detail_id = $this->UserDetail->getLastInsertID();
                // ここで、初回のツイート読み込みをさせたい
            }

            // ログイン時刻を更新
            $this->UserDetail->updateLastLoginDateTimeById($user_detail_id);

            // セッション書き込み
            $this->Session->write('user.id',$me->id);
            $this->Session->write('user.access_token',$access_token['oauth_token']);
            $this->Session->write('user.access_token_secret',$access_token['oauth_token_secret']);
    
            // oauth_tokenを削除しておく
            $this->Session->delete('oauth_token');
            $this->Session->delete('oauth_token_secret');

            $this->redirect(array('controller'=>'mypages','action'=>'timeline'));

        }
    
    }

    // つぶやきを読み込む
    public function importTweet() {

        // オブジェクト作成
        $to = new TwitterOAuth(
            CONSUMER_KEY,
            CONSUMER_SECRET,
            $this->Session->read('user.access_token'),
            $this->Session->read('user.access_token_secret')
        );

        $followings = $to->get('friends/ids');
        $stat = $this->Follow->saveFollowings($this->Session->read('me'),$followings);
        
        //debug($followings);
        // $this->Session->write('followings',$followings);
        //$statuses[$key] = $to->get('users/lookup',array('user_id'=>$id));
        $following_userinfos = $to->get(
            'users/lookup',
            array(
                'user_id'=>implode($followings->ids,',')
            )
        );

        $stat = true;
        foreach ($following_userinfos as $key=>$info) {
            $this->User->saveTwitterUserInfo($info);
            $tweets = $to->get(
                'statuses/user_timeline',
                array(
                    'user_id' => $info->id,
                    'count' => Configure::read('NUM_TWEET_TIMELINE'),
                    'include_rts' => true,
                    'trim_user' => true
                )
            );
            $stat = $stat && $this->Tweet->saveTweetsByUserId($info->id,$tweets);
        }
        if (!$stat) {
            echo 'Some error occured in importing tweets.';
            die();
        }

        //$this->Session->setFlash('Reading Tweets Done!');
        $this->redirect(array('controller'=>'mypages','action'=>'timeline'));
    
    }

    public function logout() {
        $this->Session->destroy();
        $this->redirect(array('controller'=>'tops','action'=>'index'));
    }
}
