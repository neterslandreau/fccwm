<?php
class M4dda7a59fb3c4bafa33f284a94793f2e extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'events' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'event_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'title' => array('type' => 'string', 'length' => 255, 'null' => false, 'default' => null),
					'details' => array('type' => 'text', 'null' => false, 'default' => null),
					'start' => array('type' => 'datetime', 'null' => false, 'default' => null),
					'end' => array('type' => 'datetime', 'null' => false, 'default' => null),
					'all_day' => array('type' => 'boolean', 'null' => true, 'default' => true),
					'status' => array('type' => 'string', 'length' => 20, 'null' => false, 'default' => 'Scheduled'),
					'active' => array('type' => 'boolean', 'null' => true, 'default' => true),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
				'event_types' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'length' => 20, 'null' => false, 'default' => null),
					'color' => array('type' => 'string', 'length' => 255, 'null' => false, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
			),
		),
		'down' => array(
			'drop_table' => array('events', 'event_types'),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
?>