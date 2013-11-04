<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if (!function_exists('get_oid_details')) {

	function get_oid_details($details){

		if ($details->serial == '') {
			$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.4491.2.4.1.1.1.3.0"));
			if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
			if ($details->serial == 'No Such Object available on this agent at this OID') { $details->serial = ''; }
			if ($details->serial == 'No Such Instance currently exists at this OID') { $details->serial = ''; }
		}

	}
}