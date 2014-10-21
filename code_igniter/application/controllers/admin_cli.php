<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 * Base Object Admin_cli
 *
 * @access	 public
 * @category Object
 * @package  Open-AudIT
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 * @return	 Admin
 */
class Admin_cli extends CI_Controller
{

	/**
	 * Constructor
	 *
	 * @access	  public
	 * @category  Constructor
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  Admin
	 */
	public function __construct()
	{
		parent::__construct();
		// must be called from the CLI to access this page
		if ( ! $this->input->is_cli_request()) {
			exit();
		}
		$this->log_event();
	}

	/**
	 * Index
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  NULL
	 */
	public function index()
	{
		exit();
	}

	/**
	 * Import all nodes from NMIS
	 *
	 * @access	  public
	 * @category  Function
	 * @package   Open-AudIT
	 * @author    Mark Unwin <marku@opmantek.com>
	 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
	 * @link      http://www.open-audit.org
	 * @return	  NULL
	 */
	public function import_nmis()
	{
		// have to hack this string because code_igniter doesn't like /'s
		// in the variable passed via cli
		$nodes_file = str_replace('/admin_cli/import_nmis/', '', $this->uri->uri_string());

		$log_stamp =  date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis Starting Nodes.nmis import' . PHP_EOL;
		file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);

		$this->load->helper('snmp_oid');
		$this->load->helper('snmp');
		$this->load->library('encrypt');
		$this->load->model('m_system');
		$this->load->model('m_oa_group');

		// read in the Nodes.nmis file
		$log_stamp =  date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis - importing nodes from ' . $nodes_file . PHP_EOL;
		file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);

		$file_handle = fopen($nodes_file, 'r');
		$string = fread($file_handle, filesize($nodes_file));
		$string = str_replace(PHP_EOL, ' ', $string);
		$string = str_replace("\r\n", ' ', $string);
		$string = str_replace("\n", ' ', $string);
		$string = str_replace(chr(13), ' ', $string);
		$string = str_replace('%hash = (', '{', $string);
		$string = str_replace(');', '}', $string);
		$string = str_replace('=>', ':', $string);
		$string = str_replace("'undef'", "''", $string);
		$string = str_replace('undef', "''", $string);
		$string = str_replace("'", '"', $string);
		$conf = json_decode($string, TRUE);
		switch (json_last_error()) {
			case JSON_ERROR_NONE:
				// no errors
							break;
			case JSON_ERROR_DEPTH:
				echo "Error importing Nmis.nodes file<br />\n";
				echo 'JSON_ERROR_DEPTH - Maximum stack depth exceeded<br />';
							exit();
				break;
			case JSON_ERROR_STATE_MISMATCH:
				echo "Error importing Nmis.nodes file<br />\n";
				echo 'JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch<br />';
							exit();
				break;
			case JSON_ERROR_CTRL_CHAR:
				echo "Error importing Nmis.nodes file<br />\n";
				echo 'JSON_ERROR_CTRL_CHAR - Unexpected control character found<br />';
							exit();
				break;
			case JSON_ERROR_SYNTAX:
				echo "Error importing Nmis.nodes file<br />\n";
				echo 'JSON_ERROR_SYNTAX - Syntax error, malformed JSON<br />';
							exit();
				break;
			case JSON_ERROR_UTF8:
				echo "Error importing Nmis.nodes file<br />\n";
				echo 'JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded<br />';
							exit();
				break;
			default:
				echo "Error importing Nmis.nodes file<br />\n";
				echo 'Unknown error<br />';
							exit();
				break;
		}

		foreach ($conf as $device) {
			$device = (object) $device;
			$device->ip_address = '';
			$device->hostname = '';
			$device->fqdn = '';

			if ((string)$device->host !== '127.0.0.1') {
				if (filter_var($device->host, FILTER_VALIDATE_IP)) {
					// we have an ip address as opposed to a name or fqdn
					$device->ip_address = $device->host;
				}
				else {
					// we have a name or fqdn
					if (strpos($device->host, '.')) {
						// fqdn - explode it
						$device->fqdn = $device->host;
						$t_array = explode('.', $device->host);
						$device->hostname = $t_array[0];
						unset($t_array);
					}
					else {
						// its just a name
						$device->hostname = $device->host;
					}
				}

				if ((string)$device->ip_address !== '') {
					// lookup the name
					$device->hostname = gethostbyaddr($device->ip_address);
				}
				else {
					// lookup the ip
					if ((string)$device->fqdn !== '') {
						$device->ip_address = gethostbyname($device->fqdn);
					}
					else {
						$device->ip_address = gethostbyname($device->host);
					}
				}

				$log_stamp =  date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis ' . $device->ip_address . ' (' . $device->hostname . ') - scanning' . PHP_EOL;
				file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);

				if ((string)$device->version === 'snmpv2c') {
					$device->version = '2c';
				}

				if (((string)$device->community !== '') AND ((string)$device->version === '2c') AND ((string)$device->ip_address !== '')) {
					$encode['ip_address'] = $device->ip_address;
					$encode['fqdn'] = $device->fqdn;
					$encode['hostname'] = $device->hostname;
					$encode['snmp_version'] = @$device->version;
					$encode['snmp_community'] = @$device->community;
					$encode['snmp_v3_sec_name'] = '';
					$encode['snmp_v3_sec_level'] = '';
					$encode['snmp_v3_auth_protocol'] = @$device->authprotocol;
					$encode['snmp_v3_auth_passphrase'] = @$device->authpassword;
					$encode['snmp_v3_priv_protocol'] = @$device->privprotocol;
					$encode['snmp_v3_priv_passphrase'] = @$device->privpassword;
					$encoded = json_encode($encode);
					$encoded = $this->encrypt->encode($encoded);
					$device->snmp_version = $device->version;
					$device->snmp_community = $device->community;
					$device->snmp_port = '161';

					$temp_array = get_snmp($details);
					$details = $temp_array['details'];
					$network_interfaces = $temp_array['interfaces'];

					$device->access_details = $encoded;
					$device->nmis_group = $device->group;
					$device->nmis_name = $device->name;
					$device->nmis_role = $device->roleType;
				}
				$device->system_key = '';
				$device->system_key = $this->m_system->create_system_key($device);
				$device->system_id = '';
				$device->system_id = $this->m_system->find_system($device);

				if ((isset($device->oid)) AND ((string)$device->oid !== '')) {
					// we received a result from snmp, use this data to update or insert
					if (isset($device->system_id) AND (string)$device->system_id !== '') {
						// update an existing device with snmp
						$device->last_seen_by = 'snmp nmis import';
						$this->m_system->update_system($device);
						$log_stamp =  date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis ' . $device->ip_address . ' (' . $device->hostname . ') - update snmp result' . PHP_EOL;
						file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);
					} 
					else {
						// insert a new device
						$device->last_seen_by = 'snmp nmis import';
						$device->system_id = $this->m_system->insert_system($device);
						$log_stamp = date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis ' . $device->ip_address . ' (' . $device->hostname . ') - insert snmp result' . PHP_EOL;
						file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);
					}
					// update any network interfaces AND ip addresses retrieved by SNMP
					$details->timestamp = $this->m_oa_general->get_attribute('system', 'timestamp', $details->system_id);
					$details->first_timestamp = $this->m_oa_general->get_attribute('system', 'first_timestamp', $details->system_id);
					if (isset($network_interfaces) AND is_array($network_interfaces) AND count($network_interfaces) > 0) {
						foreach ($network_interfaces as $input) {
							$this->m_network_card->process_network_cards($input, $details);
							if (isset($input->ip_addresses) AND is_array($input->ip_addresses)) {
								foreach ($input->ip_addresses as $ip_input) {
									$ip_input = (object)$ip_input;
									$this->m_ip_address->process_addresses($ip_input, $details);
								}
							}
						}
					}
					// and update all groups
					$this->m_oa_group->update_system_groups($device);
				}
				else {
					// just use hat we have from the nodes.nmis file
					if (isset($device->system_id) AND (string)$device->system_id !== '') {
						// update an existing device
						$device->last_seen_by = 'nmis import';
						$this->m_system->update_system($device);
						$log_stamp =  date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis ' . $device->ip_address . ' (' . $device->hostname . ') - update basic result' . PHP_EOL;
						file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);
					}
					else {
						// insert a new device
						$device->last_seen_by = 'nmis import';
						$device->system_id = $this->m_system->insert_system($device);
						$log_stamp =  date('M j H:i:s') . ' ' . gethostname() . ' ' . getmypid() . ' admin_cli/import_nmis ' . $device->ip_address . ' (' . $device->hostname . ') - new basic result' . PHP_EOL;
						file_put_contents('/usr/local/open-audit/other/open-audit.log', $log_stamp, FILE_APPEND | LOCK_EX);
					}
				}
				if (isset($device->system_id) AND (string)$device->system_id !== '') {
					$this->m_oa_group->update_system_groups($device);
				}
			}
		}
	}
}
// End of file admin_cli.php
// Location: ./controllers/admin_cli.php