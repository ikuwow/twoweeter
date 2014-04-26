<?php
App::uses('timezone', 'Model');

/**
 * timezone Test Case
 *
 */
class timezoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.timezone',
		'app.user_detail',
		'app.user',
		'app.follow'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->timezone = ClassRegistry::init('timezone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->timezone);

		parent::tearDown();
	}

}
