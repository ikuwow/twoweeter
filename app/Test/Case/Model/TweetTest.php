<?php
App::uses('tweet', 'Model');

/**
 * tweet Test Case
 *
 */
class tweetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tweet',
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
		$this->tweet = ClassRegistry::init('tweet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->tweet);

		parent::tearDown();
	}

/**
 * testGetTweets method
 *
 * @return void
 */
	public function testGetTweets() {
	}

/**
 * testGetTweetsByFollowingUserIds method
 *
 * @return void
 */
	public function testGetTweetsByFollowingUserIds() {
	}

/**
 * testGetTweets2weeksAgoByFollowingUserIds method
 *
 * @return void
 */
	public function testGetTweets2weeksAgoByFollowingUserIds() {
	}

/**
 * testSaveTweetByUserId method
 *
 * @return void
 */
	public function testSaveTweetByUserId() {
	}

/**
 * testSaveTweetsByUserId method
 *
 * @return void
 */
	public function testSaveTweetsByUserId() {
	}

}
