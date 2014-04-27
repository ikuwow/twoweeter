<?php
App::uses('user_details', 'Model');

/**
 * user_details Test Case
 *
 */
class user_detailTest extends CakeTestCase {

    public $fixtures = array(
        'app.user',
        'app.user_detail'
    );

    /**
     * setUp method
     *
     * @return void
     */
	public function setUp() {
		parent::setUp();
		$this->UserDetail = ClassRegistry::init('UserDetail');
	}

    /**
     * 成功例
     *
     */
    public function testSuccess() {
        $this->UserDetail->create(array(
            'UserDetail' => array(
                'user_id' => '1',
                'access_token' => 'asdfasdfasdfasdfasdf',
                'access_token_secret' => 'adsfasdfasdfasdfasdfasdf',
                'timezone_id' => '2'
            )
        ));
        $this->assertNoErrors();
    }

    /**
     * tearDown method
     *
     * @return void
     */
	public function tearDown() {
		unset($this->UserDetail);

		parent::tearDown();
	}

}
