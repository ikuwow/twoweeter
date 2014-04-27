<?php
/**
 * TweetFixture
 *
 */
class TweetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'index'),
		'tweet' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'is_tweeted' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'tweet_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '2',
			'user_id' => '2',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '3',
			'user_id' => '3',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '4',
			'user_id' => '1',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '5',
			'user_id' => '4',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '6',
			'user_id' => '1',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '7',
			'user_id' => '2',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '8',
			'user_id' => '3',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '9',
			'user_id' => '2',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '10',
			'user_id' => '2',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
	);

}
