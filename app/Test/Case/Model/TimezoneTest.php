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
		$this->Timezone = ClassRegistry::init('Timezone');
	}

    public function test成功すべきもの() {
        $this->Timezone->create(array(
            'Timezone' => array(
                'name' => 'name',
                'utc_offset' => '32400'
            )
        ));
        $this->assertNoErrors();
    }

    public function test名前は入力必須() {

        // nameがないもの
        $this->Timezone->create(array(
            'Timezone' => array(
                'name' => '',
                'utc_offset' => '32400'
            )
        ));
        $this->assertFalse($this->Timezone->validates());
    }

    /**
     * tearDown method
     *
     * @return void
     */
	public function tearDown() {
		unset($this->Timezone);

		parent::tearDown();
	}

}
