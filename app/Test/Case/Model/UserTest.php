<?php
App::uses('user', 'Model');

/**
 * user Test Case
 *
 */
class userTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.user_detail',
		'app.timezone',
		'app.follow'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->user = ClassRegistry::init('user');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->user);

		parent::tearDown();
	}

/**
 * testGetUserById method
 *
 * @return void
 */
	public function testGetUserById() {
	}

/**
 * testSaveTwitterUserInfo method
 *
 * @return void
 */
	public function testSaveTwitterUserInfo() {
	}

/**
 * testSaveTwitterUserInfos method
 *
 * @return void
 */
	public function testSaveTwitterUserInfos() {
	}

}
