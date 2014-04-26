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
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
		array(
			'id' => '',
			'user_id' => '',
			'following_user_id' => ''
		),
	);

}
