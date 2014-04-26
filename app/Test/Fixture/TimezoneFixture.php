<?php
/**
 * TimezoneFixture
 *
 */
class TimezoneFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'key' => 'unique', 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'utc_offset' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'name' => array('column' => 'name', 'unique' => 1)
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
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 1,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 2,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 3,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 4,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 5,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 6,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 7,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 8,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 9,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'utc_offset' => 10,
			'created' => '2014-04-26 20:17:52',
			'modified' => '2014-04-26 20:17:52'
		),
	);

}
