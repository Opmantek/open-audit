<?php
/**
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
*
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.2
* @link      http://www.open-audit.org
*/

/**
* Base Object Discoveries
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
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
        inputRead();
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
        # special case the single device discovery
        # We could have used include_create but then we'd need logic
        # in there to handle this specific case.

        if (!empty($this->response->meta->received_data->attributes->other->single)) {
            $this->load->model('m_collection');
            $attributes = $this->response->meta->received_data->attributes;
            $subnet = $attributes->other->subnet;
            $this->response->meta->received_data->attributes->name = 'Device Discovery for ' . $subnet;
            $this->response->meta->received_data->attributes->org_id = $this->user->org_id;

            if (filter_var($subnet, FILTER_VALIDATE_IP) === false) {
                # User supplied something that is not an IP
                # Check to see if we can resolve it
                $ip = gethostbyname($subnet);
                if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
                    # We cannot resolve the name, throw an error
                    log_error('ERR-0032', $subnet);
                    if ($this->response->meta->format == 'json') {
                        output($this->response);
                    } else {
                        $this->session->set_flashdata('error', 'A hostname or FQDN was supplied that cannot be resolved (' . htmlentities($subnet) . ').');
                        redirect('discoveries');
                    }
                    return;
                } else {
                    $attributes->other->subnet = $ip;
                    $this->response->meta->received_data->attributes->subnet = $ip;
                }
            }

            # create our discovery
            $this->response->meta->id = @$this->m_collection->create();
            if (empty($this->response->meta->id)) {
                # Houston, we have a problem
                output($this->response);
            }

            # create our credential sets
            $data = new stdClass();
            $data->org_id = $this->user->org_id;
            $data->description = 'Discovery ' . $subnet;
            $name = ' credentials for device discovery for ' . $subnet;
            if (!empty($attributes->credentials->windows_username) and !empty($attributes->credentials->windows_password)) {
                $data->type = 'windows';
                $data->name = 'Windows' . $name;
                $data->credentials = new stdClass();
                $data->credentials->username = $attributes->credentials->windows_username;
                $data->credentials->password = $attributes->credentials->windows_password;
                $this->m_collection->create($data, 'credentials');
            }
            if (!empty($attributes->credentials->ssh_username) and !empty($attributes->credentials->ssh_password)) {
                $data->type = 'ssh';
                $data->name = 'SSH' . $name;
                $data->credentials = new stdClass();
                $data->credentials->username = $attributes->credentials->ssh_username;
                $data->credentials->password = $attributes->credentials->ssh_password;
                $this->m_collection->create($data, 'credentials');
            }
            if (!empty($attributes->credentials->snmp_v2_community)) {
                $data->type = 'snmp';
                $data->name = 'SNMP' . $name;
                $data->credentials = new stdClass();
                $data->credentials->community = $attributes->credentials->snmp_v2_community;
                $data->credentials->version = 2;
                $this->m_collection->create($data, 'credentials');
            }
            if (!empty($attributes->credentials->snmp_v1_community)) {
                $data->type = 'snmp';
                $data->name = 'SNMP' . $name;
                $data->credentials = new stdClass();
                $data->credentials->community = $attributes->credentials->snmp_v1_community;
                $data->credentials->version = 1;
                $this->m_collection->create($data, 'credentials');
            }

            if ($this->response->meta->format === 'json') {
                $this->load->model('m_discoveries');
                $this->response->data = $this->m_discoveries->read($this->response->meta->id);
                output($this->response);
            } else {
                redirect('discoveries/' . $this->response->meta->id . '?action=execute');
            }
        } else {
            include 'include_create.php';
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
        $this->test_windows_apache_user();
        include 'include_read.php';
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
        include 'include_collection.php';
    }

    /**
    * Supply a HTML form for the user to create an object
    *
    * @access public
    * @return NULL
    */
    public function create_form()
    {
        $this->load->model('m_help');
        $this->m_help->support();
        $os = $this->response->data[0]->os->version;
        if ((stripos($os, 'redhat') !== false or stripos($os, 'centos') !== false) and stripos($os, 'release 6') !== false) {
            # we have a RH/Centos 6 machine. Insert an attribute for showing the Samba warning
            $this->response->meta->warning = '<strong>WARNING</strong> - Redhat and Centos 6 servers require the Samba4 libraries to be installed.
            Please see <a href="https://community.opmantek.com/display/OA/Auditing+Windows+machines+from+Linux+using+SMB2" target="_blank">this wiki page</a> for more information.<br />
            We very much recommend upgrading to Centos/RedHat 7 as support for Centos/RedHat 6 will be ending very soon.';
        }
        unset($this->response->data);
        $this->response->data = array();
        $temp = @$this->input->get('single');
        if (!empty($temp)) {
            # this is the form for a single device discovery
            $this->response->meta->action = 'create_single';
        }
        include 'include_create_form.php';
    }

    /**
    * Supply a HTML form for the user to update an object
    *
    * @access public
    * @return NULL
    */
    public function update_form()
    {
        include 'include_update_form.php';
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
    * Supply a HTML form for the user to update an object
    *
    * @access public
    * @return NULL
    */
    public function execute()
    {
        if (php_uname('s') != 'Windows NT') {
            $instance = '';
            if ($this->db->database != 'openaudit') {
                $instance = '/' . $this->db->database;
            }
            $command = $this->config->config['base_path'] . '/other/execute.sh url=http://localhost' . $instance . '/open-audit/index.php/util/execute_discovery/' . $this->response->meta->id . ' method=get > /dev/null 2>&1 &';
            if (php_uname('s') == 'Linux') {
                $command = 'nohup ' . $command;
            }
            @exec($command);
        } else {
            $filepath = $this->config->config['base_path'] . '\\other';
            $command = "%comspec% /c start /b cscript //nologo $filepath\\execute.vbs url=http://localhost/open-audit/index.php/util/execute_discovery/" . $this->response->meta->id . " method=post";
            pclose(popen($command, "r"));
        }
        sleep(2);
        if ($this->response->meta->format === 'json') {
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

    private function test_windows_apache_user()
    {
        if ((string) php_uname('s') === 'Windows NT') {
            $user = get_current_user();
            if ($user == 'SYSTEM') {
                $sql = '/* discoveries */ ' . "SELECT COUNT(*) as `count` FROM `discovery_log` WHERE `file` = 'wmi_helper' AND `function` = 'copy_to_windows' AND `message` = 'Net Use' and `command_status` = 'fail'";
                $data = array();
                $data_result = $this->run_sql($sql, $data);
                if ($data_result[0]->count > 0){
                    $this->response->meta->warning = 'WARNING - Windows is running the Apache service as "Local System". This should be changed to a real user (with network access) for optimal discovery results. See the <a href="https://community.opmantek.com/display/OA/Running+Open-AudIT+Apache+Service+under+Windows" target="_blank">Open-AudIT wiki</a> for more details.';
                    $this->session->set_flashdata('warning', $this->response->meta->warning);
                }
            }
        }
    }

    private function discovery_status()
    {
        # Mark any discoveries where status != complete and last_log is greater than 20 minutes ago as Zombie
        $sql = '/* discoveries */ ' . " UPDATE discoveries SET status = 'failed' WHERE last_finished != '2000-01-01 00:00:00' AND last_finished < (NOW() - INTERVAL 20 MINUTE) AND status = 'running'";
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
