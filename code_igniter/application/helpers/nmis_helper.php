<?php
if (!defined('BASEPATH')) {
	 exit('No direct script access allowed');
}
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.4.1
* @link      http://www.open-audit.org
 */
if (! function_exists('external_search')) {
	/**
	 * Search for an external device using $device parameters
	 * @param  object 		$device      The device in external format
	 * @param  object 		$integration The integration containing the details of the service to connect to.
	 * @return object|bool 	$return      The found device (object) or false (bool).
	 */
	function external_search($device, $integration)
	{
		if (empty($device) OR empty($integration)) {
			$instance = & get_instance();
			$sql = "INSERT INTO integrations_log values (null, NOW(), '" . $instance->config->config['microtime'] . "', 'system', 4, 'error', '" . getmypid() . "', '', '" . php_uname('n') . "', '127.0.0.1', 'integrations', 'execute', 'internal error', 'No device &/or integration object passed to nmis_helper::external_search.', '')";
			$instance->db->query($sql);
			return false;
		}
		$return = false;
		// if ( ! empty($device->external_identifier)) {
		//     read the external device using this
		// }

		// if (empty($device->external_identifier)) {
		//     search for the device using our known attributes
		// }

$return = new stdClass();
$return->name = 'hel';
$return->ip = '192.168.88.73';
$return->external_identifier = '12345678901';
		return $return;
	}
}

if (! function_exists('external_update')) {
	/**
	 * Update an external device using $device parameters
	 * @param  object $device      The device in external format
	 * @param  object $integration Details of the service to connect to
	 * @return bool   $return      true for success, false for failure
	 */
	function external_update($device, $integration)
	{
		if (empty($device) OR empty($integration)) {
			$instance = & get_instance();
			$sql = "INSERT INTO integrations_log values (null, NOW(), '" . $instance->config->config['microtime'] . "', 'system', 4, 'error', '" . getmypid() . "', '', '" . php_uname('n') . "', '127.0.0.1', 'integrations', 'execute', 'internal error', 'No device &/or integration object passed to nmis_helper::external_update.', '')";
			$instance->db->query($sql);
			return false;
		}
		$return = false;
$return = true;
		return $return;
	}
}

if (! function_exists('external_create')) {
	/**
	 * Create an external device using $device parameters
	 * @param  object 		$device      The device in external format
	 * @param  object       $integration Details of the service to connect to
	 * @return object|bool 	$return      The created device (object) or false (bool). A good result should return an object. In particular we need the external identifier (as defined in integrations_rules) to update our local device.
	 */
	function external_create($device, $integration)
	{
		if (empty($device) OR empty($integration)) {
			$instance = & get_instance();
			$sql = "INSERT INTO integrations_log values (null, NOW(), '" . $instance->config->config['microtime'] . "', 'system', 4, 'error', '" . getmypid() . "', '', '" . php_uname('n') . "', '127.0.0.1', 'integrations', 'execute', 'internal error', 'No device &/or integration object passed to nmis_helper::external_delete.', '')";
			$instance->db->query($sql);
			return false;
		}
		$return = false;
$return = true;
		return $return;
	}
}

if (! function_exists('external_delete')) {
	/**
	 * Delete an external device using $device parameters
	 * @param  object $device      The device in external format
	 * @param  object $integration Details of the service to connect to
	 * @return bool   $return      true for success, false for failure
	 */
	function external_delete($device, $integration)
	{
		if (empty($device) OR empty($integration)) {
			$instance = & get_instance();
			$sql = "INSERT INTO integrations_log values (null, NOW(), '" . $instance->config->config['microtime'] . "', 'system', 4, 'error', '" . getmypid() . "', '', '" . php_uname('n') . "', '127.0.0.1', 'integrations', 'execute', 'internal error', 'No integration object passed to nmis_helper::external_delete.', '')";
			$instance->db->query($sql);
			return false;
		}
		$return = false;
$return = true;
		return $return;
	}
}

if (! function_exists('external_collection')) {
	/**
	 * Retrieve all devices from an external source
	 * @param  object 		$integration Details of the service to connect to
	 * @return array|bool	$return      A good result should return an array of objects, or false for failure.
	 */
	function external_collection($integration)
	{
		if (empty($integration)) {
			$instance = & get_instance();
			$sql = "INSERT INTO integrations_log values (null, NOW(), '" . $instance->config->config['microtime'] . "', 'system', 4, 'error', '" . getmypid() . "', '', '" . php_uname('n') . "', '127.0.0.1', 'integrations', 'execute', 'internal error', 'No integration object passed to nmis_helper::external_collection.', '')";
			$this->db->query($sql);
			return false;
		}
		$return = false;
$return = array();
$return[0] = new stdClass();
$return[0]->name = 'new thing';
$return[0]->ip = '1.2.3.4';
$return[0]->type = 'router';
$return[0]->external_identifier = '1234567890';
		return $return;
	}
}
/* End of file nmis_helper.php */
/* Location: ./system/application/helpers/nmis_helper.php */
