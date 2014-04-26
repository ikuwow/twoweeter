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
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
		array(
			'id' => '',
			'user_id' => '',
			'tweet' => 'Lorem ipsum dolor sit amet',
			'is_tweeted' => 1,
			'tweet_date' => '2014-04-26 20:21:14',
			'created' => '2014-04-26 20:21:14',
			'modified' => '2014-04-26 20:21:14'
		),
	);

}
