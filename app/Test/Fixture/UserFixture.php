<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'screen_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'key' => 'unique', 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'icon_url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'screen_name' => array('column' => 'screen_name', 'unique' => 1)
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
			'screen_name' => 'testuser1',
			'name' => 'Lorem ipsum dolor ',
			'icon_url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-26 20:20:13',
			'modified' => '2014-04-26 20:20:13'
		),
		array(
			'id' => '2',
			'screen_name' => 'testuser2',
			'name' => 'Lorem ipsum dolor ',
			'icon_url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-26 20:20:13',
			'modified' => '2014-04-26 20:20:13'
		),
		array(
			'id' => '3',
			'screen_name' => 'testuser3',
			'name' => 'Lorem ipsum dolor ',
			'icon_url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-26 20:20:13',
			'modified' => '2014-04-26 20:20:13'
		),
		array(
			'id' => '4',
			'screen_name' => 'testuser4',
			'name' => 'Lorem ipsum dolor ',
			'icon_url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-26 20:20:13',
			'modified' => '2014-04-26 20:20:13'
        )
	);

}
