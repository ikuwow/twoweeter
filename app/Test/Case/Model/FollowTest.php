<?php
App::uses('follow', 'Model');

/**
 * follow Test Case
 *
 */
class followTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.follow'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->follow = ClassRegistry::init('follow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->follow);

		parent::tearDown();
	}

/**
 * testGetFollowingsByUserId method
 *
 * @return void
 */
	public function testGetFollowingsByUserId() {
	}

/**
 * testSaveFollowings method
 *
 * @return void
 */
	public function testSaveFollowings() {
	}

}
