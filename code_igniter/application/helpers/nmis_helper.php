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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
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

		$defaults[] = (object) ['local_field' => 'system.nmis_manage', 'remote_field' => 'activated.nmis', 'remote_format' => 'int', 'authoritive_source' => 'local', 'transform' => 'yn_to_int', 'empty' => 'use_default', 'default_value' => 1];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.active', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 1];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.authkey', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.snmpv3.authentication_passphrase', 'remote_field' => 'configuration.authpass', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.snmpv3.authentication_protocol', 'remote_field' => 'configuration.authprotocol', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_business_service', 'remote_field' => 'configuration.business_service', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.collect', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 1];

		$defaults[] = (object) ['local_field' => 'credentials.snmp.community', 'remote_field' => 'configuration.community', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_customer', 'remote_field' => 'configuration.customer', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_group', 'remote_field' => 'configuration.group', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'open-audit'];

		$defaults[] = (object) ['local_field' => 'system.ip', 'remote_field' => 'configuration.host', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'ignore', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'locations.name', 'remote_field' => 'configuration.location', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'ignore', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.model', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'automatic'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.netType', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'wan'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.notes', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.ping', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => '1'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.port', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => '161'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.privkey', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.snmpv3.privacy_passphrase', 'remote_field' => 'configuration.privpass', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.snmpv3.privacy_protocol', 'remote_field' => 'configuration.privprotocol', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_role', 'remote_field' => 'configuration.roleType', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'core'];

		$defaults[] = (object) ['local_field' => '', 'remote_field' => 'configuration.threshold', 'remote_format' => 'int', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'use_default', 'default_value' => '0'];

		$defaults[] = (object) ['local_field' => 'credentials.snmpv3.security_name', 'remote_field' => 'configuration.username', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'set_to_blank', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'credentials.version', 'remote_field' => 'configuration.version', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'use_default', 'default_value' => 'snmpv2'];

		$defaults[] = (object) ['local_field' => 'system.name', 'remote_field' => 'name', 'remote_format' => 'string', 'authoritive_source' => 'local', 'transform' => '', 'empty' => 'ignore', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.nmis_name', 'remote_field' => 'name', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'ignore', 'default_value' => ''];

		$defaults[] = (object) ['local_field' => 'system.omk_uuid', 'remote_field' => 'uuid', 'remote_format' => 'string', 'authoritive_source' => 'remote', 'transform' => '', 'empty' => 'ignore', 'default_value' => ''];

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
		$timer_start = microtime(true);
		$instance = & get_instance();
		if (empty($device) && ! empty($integration)) {
			$sql = '/* nmis_helper::external_search */ ' . "INSERT INTO integrations_log values (null, ?, 0, NOW(), 3, 'error', 'No device object passed to nmis_helper::external_search.', '', 'fail', 0, '')";
			$data = array($integration->id);
			$instance->db->query($sql, $data);
			return false;

		}
		$return = false;
		// if ( ! empty($device->external_identifier)) {
		//     read the external device using this
		// }

		// if (empty($device->external_identifier)) {
		//     search for the device using our known attributes
		// }

		// $return = new stdClass();
		// $return->name = 'router';
		// $return->ip = '192.168.1.1';
		// $return->external_identifier = '12345678901';

		if ( ! empty($return)) {
			# success - a list of nodes
			$status = 'success';
			$details = 'Found device ' . $return->name;
		} else {
			# error - something went awry
			$status = 'fail';
			$details = 'Could not find device ' . $return->name;
		}
		$time_to_execute = (microtime(true) - $timer_start);
		$sql = '/* nmis_helper::external_search */ ' . "INSERT INTO integrations_log values (null, ?, 0, NOW(), 5, 'notice', ?, 'nmis::external_search', ?, ?, ?)";
		$data = array($integration->id, $details, $status, $time_to_execute, json_encode($return));
		$instance->db->query($sql, $data);
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
		$instance = & get_instance();
		if (empty($device) && ! empty($integration)) {
			$sql = '/* nmis_helper::external_update */ ' . "INSERT INTO integrations_log values (null, ?, 0, NOW(), 3, 'error', 'No device object passed to nmis_helper::external_update.', '', 'fail', 0, '')";
			$data = array($integration->id);
			$instance->db->query($sql, $data);
			return false;
		}
		$return = false;
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
		$instance = & get_instance();
		if (empty($device) && ! empty($integration)) {
			$sql = '/* nmis_helper::external_create */ ' . "INSERT INTO integrations_log values (null, ?, 0, NOW(), 3, 'error', 'No device object passed to nmis_helper::external_create.', '', 'fail', 0, '')";
			$data = array($integration->id);
			$instance->db->query($sql, $data);
			return false;
		}
		$return = false;
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
		$instance = & get_instance();
		if (empty($device) && ! empty($integration)) {
			$sql = '/* nmis_helper::external_delete */ ' . "INSERT INTO integrations_log values (null, ?, 0, NOW(), 3, 'error', 'No device object passed to nmis_helper::external_delete.', '', 'fail', 0, '')";
			$data = array($integration->id);
			$instance->db->query($sql, $data);
			return false;
		}
		$return = false;
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
		$instance = & get_instance();
		if (empty($integration)) {
			return false;
		}
		$command1 = '/usr/local/nmis9/node_admin.pl act=export keep_ids=1';
		$command = 'cat /usr/local/open-audit/other/nodes.json';
		exec($command, $output);
		if (is_array($output)) {
			$output = implode(' ', $output);
		}
		if ($output = json_decode($output)) {
			# success - a list of nodes
			$status = 'success';
			$return = $output;
			$output = '';
		} else {
			# error - something went awry
			$status = 'fail';
			$return = false;
		}
		$sql = '/* nmis_helper::external_collection */ ' . "INSERT INTO integrations_log values (null, ?, 0, NOW(), 5, 'notice', 'external_collection', ?, ?, 0, ?)";
		$data = array($integration->id, $command1, $status, $output);
		$instance->db->query($sql, $data);
		return $return;
	}
}
/* End of file nmis_helper.php */
/* Location: ./system/application/helpers/nmis_helper.php */
