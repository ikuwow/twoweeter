<?php
/**
 * FollowFixture
 *
 */
class FollowFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'following_user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'user_id' => '1',
			'following_user_id' => '2'
		),
		array(
			'id' => '2',
			'user_id' => '1',
			'following_user_id' => '3'
		),
		array(
			'id' => '3',
			'user_id' => '2',
			'following_user_id' => '1'
		),
		array(
			'id' => '4',
			'user_id' => '2',
			'following_user_id' => '3'
        )
	);

}
