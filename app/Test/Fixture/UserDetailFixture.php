<?php
/**
 * UserDetailFixture
 *
 */
class UserDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'unique'),
		'access_token' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'access_token_secret' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'timezone_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'key' => 'index'),
		'last_login' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 1),
			'timezone_id' => array('column' => 'timezone_id', 'unique' => 0)
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
			'access_token' => 'Lorem ipsum dolor sit amet',
			'access_token_secret' => 'Lorem ipsum dolor sit amet',
			'timezone_id' => 1,
			'last_login' => '2014-04-27 11:46:27',
			'created' => '2014-04-27 11:46:27',
			'modified' => '2014-04-27 11:46:27'
		),
		array(
			'id' => '2',
			'user_id' => '2',
			'access_token' => 'Lorem ipsum dolor sit amet',
			'access_token_secret' => 'Lorem ipsum dolor sit amet',
			'timezone_id' => 2,
			'last_login' => '2014-04-27 11:46:27',
			'created' => '2014-04-27 11:46:27',
			'modified' => '2014-04-27 11:46:27'
		),
		array(
			'id' => '3',
			'user_id' => '3',
			'access_token' => 'Lorem ipsum dolor sit amet',
			'access_token_secret' => 'Lorem ipsum dolor sit amet',
			'timezone_id' => 3,
			'last_login' => '2014-04-27 11:46:27',
			'created' => '2014-04-27 11:46:27',
			'modified' => '2014-04-27 11:46:27'
		),
	);

}
