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



if (! function_exists('external_defaults')) {
	/**
	 * [external_defaults description]
	 * @return array An arrary of default items and values.
	 */
	function external_defaults_nmis()
	{
		$defaults = array();

		$defaults[] = (object) ['local_field' => 'system.manage_in_nmis', 'remote_field' => 'activated.nmis', 'remote_format' => 'int', 'authoritive_source' => 'local', 'transform' => 'yn_to_int', 'empty' => 'use_default', 'default_value' => 1];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.active', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 1];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.authkey', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.authentication_passphrase', 'remote_field' => 'configuration.authpass', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.authentication_protocol', 'remote_field' => 'configuration.authprotocol', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_business_service', 'remote_field' => 'configuration.business_service', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.collect', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 1];

		$defaults[] = (object) ['local_field' => 'credentials.community', 'remote_field' => 'configuration.community', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_customer', 'remote_field' => 'configuration.customer', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_group', 'remote_field' => 'configuration.group', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'open-audit'];

		$defaults[] = (object) ['local_field' => 'system.ip', 'remote_field' => 'configuration.host', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => '', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'location.name', 'remote_field' => 'configuration.location', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => '', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.model', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'automatic'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.netType', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'wan'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.notes', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.ping', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => '1'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.port', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => '161'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.privkey', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.privacy_passphrase', 'remote_field' => 'configuration.privpass', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.privacy_protocol', 'remote_field' => 'configuration.privprotocol', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_role', 'remote_field' => 'configuration.roleType', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'core'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.threshold', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => '0'];

		$defaults[] = (object) ['local_field' => 'credentials.security_name', 'remote_field' => 'configuration.username', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.version', 'remote_field' => 'configuration.version', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'snmpv2'];

		$defaults[] = (object) ['local_field' => 'system.name', 'remote_field' => 'name', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => '', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.omk_uuid', 'remote_field' => 'name', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => '', 'default_value' => ''];

		return $defaults;
	}
}

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

// $return = array();
// $return[0] = new stdClass();
// $return[0]->name = 'new thing';
// $return[0]->ip = '1.2.3.4';
// $return[0]->type = 'router';
// $return[0]->external_identifier = '1234567890';
// return $return;


		$command = '/usr/local/nmis9/node_admin.pl act=export keep_ids=1';
		$command = 'cat /tmp/nodes.json';
		exec($command, $output, $return_var);
		if ($output = json_decode($output)) {
			# success - a list of nodes
			$return = $output;
		} else {
			# error - something went awry
			$return = false;
		}
		return $return;



	}
}
/* End of file nmis_helper.php */
/* Location: ./system/application/helpers/nmis_helper.php */
