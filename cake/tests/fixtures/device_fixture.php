<?php
/**
 * Short description for file.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/view/1196/Testing>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/view/1196/Testing CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */

/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class DeviceFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'Device'
 * @access public
 */
	var $name = 'Device';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'device_type_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false),
		'typ' => array('type' => 'integer', 'null' => false),
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('device_type_id' => 1, 'name' => 'Device 1', 'typ' => 1),
		array('device_type_id' => 1, 'name' => 'Device 2', 'typ' => 1),
		array('device_type_id' => 1, 'name' => 'Device 3', 'typ' => 2)
	);
}
