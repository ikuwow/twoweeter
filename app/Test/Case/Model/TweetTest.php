<?php 
App::uses('Tweet','Model');

/**
 *
 * Tweetモデルのテスト
 * @author Ikuo Degawa
 */
class TweetTest extends CakeTestCase {

    public $fixtures = array(
        // 'app.user_detail',
        // 'app.follow'
        'app.user'
    );

    public function setUp() {
        parent::setUp();

        // new TopicではなくClassREgistry。
        // これにするとデータベースが$testの方になる
        $this->Tweet = ClassRegistry::init('Tweet');
    }

    public function tearDown() {
        unset($this->Tweet);
        parent::tearDown();
    }
}
