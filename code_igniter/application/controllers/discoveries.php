<?php
/**
#  Copyright 2022 Firstwave (www.firstwave.com)
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
*
* PHP version 5.3.3
*
* @category  Controller
* @package   Discoveries
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
*/

/**
* Base Object Discoveries
*
* @access   public
* @category Controller
* @package  Discoveries
* @author   Mark Unwin <mark.unwin@firstwave.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Discoveries extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_discoveries');
        // inputRead();
        $this->response = response_create();
        $this->output->url = $this->config->config['oa_web_index'];
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        $this->{$this->response->meta->action}();
    }


    /**
    * Process the supplied data and create a new object
    *
    * @access public
    * @return NULL
    */
    public function create()
    {
        // special case the single device discovery
        // We could have used include_create but then we'd need logic
        // in there to handle this specific case.

        if ( ! empty($this->response->meta->received_data->attributes->other->single)) {
            $this->load->model('m_collection');
            $this->load->model('m_credentials');
            $attributes = $this->response->meta->received_data->attributes;
            $subnet = $attributes->other->subnet;
            $this->response->meta->received_data->attributes->name = 'Device Discovery for ' . $subnet;
            $this->response->meta->received_data->attributes->org_id = $this->user->org_id;

            if (filter_var($subnet, FILTER_VALIDATE_IP) === false) {
                // User supplied something that is not an IP
                // Check to see if we can resolve it
                $ip_address = gethostbyname($subnet);
                if (filter_var($ip_address, FILTER_VALIDATE_IP) === false) {
                    // We cannot resolve the name, throw an error
                    log_error('ERR-0032', $subnet);
                    if ($this->response->meta->format === 'json') {
                        output($this->response);
                    } else {
                        $this->session->set_flashdata('error', 'A hostname or FQDN was supplied that cannot be resolved (' . htmlentities($subnet) . ').');
                        redirect('discoveries');
                    }
                    return;
                } else {
                    $attributes->other->subnet = $ip_address;
                    $this->response->meta->received_data->attributes->subnet = $ip_address;
                }
            }

            // create our discovery
            $this->response->meta->id = @$this->m_discoveries->create($this->response->meta->received_data->attributes);
            if (empty($this->response->meta->id)) {
                // Houston, we have a problem
                output($this->response);
            }

            // create our credential sets
            $data = new stdClass();
            $data->org_id = $this->user->org_id;
            $data->description = 'Discovery ' . $subnet;
            $name = ' credentials for device discovery for ' . $subnet;
            if ( ! empty($attributes->credentials->windows_username) && ! empty($attributes->credentials->windows_password)) {
                $data->type = 'windows';
                $data->name = 'Windows' . $name;
                $data->credentials = new stdClass();
                $data->credentials->username = $attributes->credentials->windows_username;
                $data->credentials->password = $attributes->credentials->windows_password;
                $this->m_credentials->create($data);
            }
            if ( ! empty($attributes->credentials->ssh_username) && ! empty($attributes->credentials->ssh_password)) {
                $data->type = 'ssh';
                $data->name = 'SSH' . $name;
                $data->credentials = new stdClass();
                $data->credentials->username = $attributes->credentials->ssh_username;
                $data->credentials->password = $attributes->credentials->ssh_password;
                $this->m_credentials->create($data);
            }
            if ( ! empty($attributes->credentials->snmp_v2_community)) {
                $data->type = 'snmp';
                $data->name = 'SNMP' . $name;
                $data->credentials = new stdClass();
                $data->credentials->community = $attributes->credentials->snmp_v2_community;
                $data->credentials->version = 2;
                $this->m_credentials->create($data);
            }
            if ( ! empty($attributes->credentials->snmp_v1_community)) {
                $data->type = 'snmp';
                $data->name = 'SNMP' . $name;
                $data->credentials = new stdClass();
                $data->credentials->community = $attributes->credentials->snmp_v1_community;
                $data->credentials->version = 1;
                $this->m_credentials->create($data);
            }

            if ($this->response->meta->format === 'json') {
                $this->load->model('m_discoveries');
                $this->response->data = $this->m_discoveries->read($this->response->meta->id);
                output($this->response);
            } else {
                redirect('discoveries/' . $this->response->meta->id . '?action=execute');
            }
        } else {
            $this->response->meta->id = $this->{'m_'.$this->response->meta->collection}->create($this->response->meta->received_data->attributes);
            $this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
            $this->response->include = 'v_'.$this->response->meta->collection.'_read';
            output($this->response);
        }
    }

    /**
    * Read a single object
    *
    * @access public
    * @return NULL
    */
    public function read()
    {
        $this->discovery_status();
        $this->test_windows_apache_user();
        $this->test_old_linux();
        $this->test_nmap();
        $this->test_nmap_suid();
        $this->load->model('m_collectors');
        $this->load->model('m_locations');
        $this->load->model('m_discovery_scan_options');

        $this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
        if ( ! empty($this->response->data) && is_array($this->response->data)) {
            $this->response->meta->total = 1;
            $this->response->meta->filtered = 1;
            $this->load->model('m_orgs');
            $this->response->dictionary = $this->{'m_'.$this->response->meta->collection}->dictionary();
            $this->response->included = array_merge($this->response->included, $this->m_collectors->collection($this->user->id));
            if ( ! empty($this->response->data[0]->attributes->scan_options->id)) {
                $this->response->included = array_merge($this->response->included, $this->m_discovery_scan_options->read($this->response->data[0]->attributes->scan_options->id));
            }
            if ($this->response->meta->format === 'screen') {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
                // Discovery log
                $this->response->included = array_merge($this->response->included, $this->m_discoveries->read_sub_resource($this->response->meta->id));
                // All Locations
                $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
            } else {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->org_id));
                // Assign Devices to Location
                $this->load->model('m_locations');
                if ( ! empty($this->response->data[0]->attributes->devices_assigned_to_location)) {
                    $this->response->included = array_merge($this->response->included, $this->m_locations->read($this->response->data[0]->attributes->devices_assigned_to_location));
                }
                // Assign Devices to Org
                if ( ! empty($this->response->data[0]->attributes->devices_assigned_to_org)) {
                    $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->devices_assigned_to_org));
                }
            }
            $this->response->issues = $this->m_discoveries->issues_read($this->response->meta->id);
        } else {
            log_error('ERR-0002', $this->response->meta->collection . ':read');
            $this->session->set_flashdata('error', 'No object could be retrieved when ' . $this->response->meta->collection . ' called m_' . $this->response->meta->collection . '->read.');
            if ($this->response->meta->format !== 'json') {
                redirect($this->response->meta->collection);
            }
        }
        $this->load->helper('discoveries');
        $this->response->meta->nmap_version = get_nmap_version();
        output($this->response);
    }

    /**
    * Process the supplied data and update an existing object
    *
    * @access public
    * @return NULL
    */
    public function update()
    {
        include 'include_update.php';
    }

    /**
    * Delete an existing object
    *
    * @access public
    * @return NULL
    */
    public function delete()
    {
        include 'include_delete.php';
    }

    /**
    * Collection of objects
    *
    * @access public
    * @return NULL
    */
    public function collection()
    {
        $this->discovery_status();
        $this->test_windows_apache_user();
        $this->test_old_linux();
        $this->test_nmap();
        $this->test_nmap_suid();
        if ($this->response->meta->format === 'screen') {
            $this->load->model('m_collectors');
            $this->response->included = array_merge($this->response->included, $this->m_collectors->collection($this->user->id));
        }
        $this->{'m_'.$this->response->meta->collection}->collection(0, 1);
        $this->response->issues = $this->m_discoveries->issues_collection($this->user->id);
        output($this->response);
    }

    /**
    * Supply a HTML form for the user to create an object
    *
    * @access public
    * @return NULL
    */
    public function create_form()
    {
        $this->discovery_status();
        $this->test_windows_apache_user();
        $this->test_old_linux();
        $this->test_nmap();
        $this->test_nmap_suid();
        unset($this->response->data);
        $this->response->data = array();
        $temp = @$this->input->get('single');
        if ( ! empty($temp)) {
            // this is the form for a single device discovery
            $this->response->meta->action = 'create_single';
        }
        $this->response->dictionary = $this->m_discoveries->dictionary();
        $this->load->model('m_orgs');
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
        $this->load->model('m_collectors');
        $this->response->included = array_merge($this->response->included, $this->m_collectors->collection($this->user->id));
        $this->load->model('m_locations');
        $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
        $this->load->model('m_discovery_scan_options');
        $this->response->included = array_merge($this->response->included, $this->m_discovery_scan_options->collection($this->user->id));
        $this->load->helper('discoveries');
        $this->response->meta->nmap_version = get_nmap_version();
        output($this->response);
    }

    /**
    * Supply a HTML form for the user to upload a collection of objects in CSV
    *
    * @access public
    * @return NULL
    */
    public function import_form()
    {
        $this->load->model('m_database');
        $this->response->data = $this->m_database->read('discoveries');
        include 'include_import_form.php';
    }

    /**
    * Process the supplied data and create a new object
    *
    * @access public
    * @return NULL
    */
    public function import()
    {
        include 'include_import.php';
    }

    /**
    * Execute a given discovery
    *
    * @access public
    * @return NULL
    */
    public function execute()
    {
        $this->m_discoveries->queue($this->response->meta->id);
        $this->load->model('m_queue');
        $this->m_queue->start();
        sleep(2);
        if ($this->response->meta->format === 'json') {
            $this->response->meta->format = 'json';
            $this->response->data = $this->m_discoveries->read($this->response->meta->id);
            output($this->response);
        } else {
            redirect('discoveries/'.$this->response->meta->id);
        }
    }

    /**
    * The requested table will have optimize run upon it and it's autoincrement reset to 1
    *
    * @access public
    * @return NULL
    */
    public function reset()
    {
        include 'include_reset.php';
    }

    /**
     * If we're running on Windows and the Apache user is not SYSTEM, set the flash
     * @return null
     */
    private function test_windows_apache_user()
    {
        if ((string) php_uname('s') === 'Windows NT') {
            $user = get_current_user();
            if ($user === 'SYSTEM') {
                log_error('ERR-0041');
            }
        }
    }

    /**
     * Check if we're running old Centos or Redhat and advise about Samba libraries
     * @return [type] [description]
     */
    private function test_old_linux()
    {
        if (php_uname('s') === 'Linux') {
            $this->load->model('m_help');
            $system = $this->m_help->get_os();
            if ( ! empty($system->os_version) && (stripos($system->os_version, 'redhat') !== false OR stripos($system->os_version, 'centos') !== false) && stripos($system->os_version, 'release 6') !== false) {
                // Do not set an error because this would disable the Execute buttons (regardles of Samba 4 being actually installed).
                $this->response->meta->warning = '<strong>WARNING</strong> - Redhat and Centos 6 servers require the Samba4 libraries to be installed. Please see <a href="https://community.opmantek.com/display/OA/Auditing+Windows+machines+from+Linux+using+SMB2" target="_blank">this wiki page</a> for more information.<br /> We very much recommend upgrading to RedHat 8 as support for Centos/RedHat 6 has finished. Open-AudIT no longer supports Redhat / Centos 6 and breakages may occur.';

                $this->session->set_flashdata('danger', '<strong>WARNING</strong> - Redhat and Centos 6 servers require the Samba4 libraries to be installed. Please see <a href="https://community.opmantek.com/display/OA/Auditing+Windows+machines+from+Linux+using+SMB2" target="_blank">this wiki page</a> for more information.<br /> We very much recommend upgrading to RedHat 8 as support for Centos/RedHat 6 has finished. Open-AudIT no longer supports Redhat / Centos 6 and breakages may occur.');
                $this->response->meta->flash = new stdClass();
                $this->response->meta->flash->status = 'danger';
                $this->response->meta->flash->message = '<strong>WARNING</strong> - Redhat and Centos 6 servers require the Samba4 libraries to be installed. Please see <a href="https://community.opmantek.com/display/OA/Auditing+Windows+machines+from+Linux+using+SMB2" target="_blank">this wiki page</a> for more information.<br /> We very much recommend upgrading to RedHat 8 as support for Centos/RedHat 6 has finished. Open-AudIT no longer supports Redhat / Centos 6 and breakages may occur.';
            }
        }
    }

    /**
     * Is Nmap installed?
     * @return [type] [description]
     */
    private function test_nmap()
    {
        if ($this->config->config['oae_product'] === 'Open-AudIT Cloud') {
            return;
        }
        if ( ! empty($this->config->config['discovery_override_nmap']) && $this->config->config['discovery_override_nmap'] === 'y') {
            return;
        }
        $nmap_installed = 'n';
        if (php_uname('s') === 'Windows NT') {
            // check the obvious Windows install locations
            $test_path = 'c:\Program Files\Nmap\Nmap.exe';
            if ($nmap_installed === 'n' && file_exists($test_path)) {
                $nmap_installed = 'y';
            }
            $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
            if ($nmap_installed === 'n' && file_exists($test_path)) {
                $nmap_installed = 'y';
            }
            unset($test_path);
        } else {
            $command_string = 'which nmap 2>/dev/null';
            exec($command_string, $output);
            if (isset($output[0]) && strpos($output[0], 'nmap')) {
                $nmap_installed = 'y';
            }
            if (isset($output[1]) && strpos($output[1], 'nmap')) {
                $nmap_installed = 'y';
            }
            if ($nmap_installed === 'n') {
                if (file_exists('/usr/local/bin/nmap')) {
                    $nmap_installed = 'y';
                }
            }
            if ($nmap_installed === 'n') {
                if (file_exists('/usr/bin/nmap')) {
                    $nmap_installed = 'y';
                }
            }
        }
        if ($nmap_installed === 'n') {
            log_error('ERR-0043');
        }
    }

    private function test_nmap_suid()
    {
        if (php_uname('s') === 'Windows NT') {
            return;
        }
        $command_string = 'ls -lh `which nmap` | cut -d" " -f1 | cut -c4';
        exec($command_string, $output);
        if (! isset($output[0]) or $output[0] !== 's') {
            log_error('ERR-0047');
        } return;
    }

    /**
     * Check and set the discovery status
     * @return [type] [description]
     */
    private function discovery_status()
    {
        // Mark any discoveries where status != complete and last_log is greater than 20 minutes ago as Zombie
        $sql = '/* discoveries */ ' . " UPDATE discoveries SET status = 'failed' WHERE last_finished != '2000-01-01 00:00:00' AND last_finished < (NOW() - INTERVAL 60 MINUTE) AND last_finished > last_run AND status = 'running'";
        $this->db->query($sql);

        $sql = '/* discoveries */ ' . "SELECT COUNT(*) AS `count` FROM `discoveries` WHERE status = 'running'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if (empty($result[0]->count)) {
            $sql = "UPDATE `configuration` SET `value` = 0 WHERE `name` = 'queue_count'";
            $this->db->query($sql);
        }
    }
}
// End of file discoveries.php
// Location: ./controllers/discoveries.php
