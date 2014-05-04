<?php
App::uses('Follow', 'Model');
App::uses('User', 'Model');

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
		'app.follow','app.user'
	);

    /**
     * setUp method
     *
     * @return void
     */
	public function setUp() {
		parent::setUp();
		$this->Follow = ClassRegistry::init('Follow');
		$this->User = ClassRegistry::init('User');
	}

    /**
     * tearDown method
     *
     * @return void
     */
	public function tearDown() {
		unset($this->Follow);
		unset($this->User);
		parent::tearDown();
	}

    /**
     * testGetFollowingsByUserId method
     *
     * @return void
     */
	public function testGetFollowingsByUserId() {
        $id = '1';
        $data = $this->Follow->getFollowingsByUserId($id);

        $this->assertEquals(
            array('Follow' => array(
                    'following_user_id' => '2'
            )),
            $data[0]
        );

	}

    /**
     * testSaveFollowings method
     *
     * @return void
     */
	public function testSaveFollowings() {
        $me->id = 1;
        $followings->ids = array(2,3,4);
        $stat = $this->Follow->saveFollowings($me,$followings);

        $this->assertEquals($stat,true);
	}

}
