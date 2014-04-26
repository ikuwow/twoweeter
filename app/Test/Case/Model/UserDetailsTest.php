<?php
App::uses('user_details', 'Model');

/**
 * user_details Test Case
 *
 */
class user_detailsTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->user_details = ClassRegistry::init('user_details');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->user_details);

		parent::tearDown();
	}

}
