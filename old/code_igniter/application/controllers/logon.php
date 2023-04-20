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
* @package   Logon
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.4.2
* @link      http://www.open-audit.org
*/

/**
* Base Object Logon
*
* @access   public
* @category Controller
* @package  Logon
* @author   Mark Unwin <mark.unwin@firstwave.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Logon extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('error');
        $this->load->helper('security');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('m_configuration');
        $this->m_configuration->load();

        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'system';
        $log->message = '';

        // get the output format
        $format = '';
        $http_accept = @$_SERVER['HTTP_ACCEPT'];
        $log->function = 'logon';
        $log->summary = 'set format';
        $log->status = 'success';
        $log->detail = '';
        if (strpos($http_accept, 'application/json') !== false) {
            $format = 'json';
            $log->detail = 'Set format to ' . $format . ', according to HEADERS.';
        }
        if (strpos($http_accept, 'html') !== false) {
            $format = 'screen';
            $log->detail = 'Set format to ' . $format . ', according to HEADERS.';
        }
        if (isset($_GET['format'])) {
            $format = $_GET['format'];
            $log->detail = 'Set format to ' . $format . ', according to GET.';
        }
        if (isset($_POST['format'])) {
            $format = $_POST['format'];
            $log->detail = 'Set format to ' . $format . ', according to POST.';
        }
        if ($format == '') {
            $format = 'json';
            $log->detail = 'Set format to ' . $format . ', because default.';
        }
        if (empty($log->detail)) {
            $log->status = 'fail';
            $log->detail = 'Could not set format';
        }
        stdlog($log);
        $log->summary = 'reading data';

        # initialise our properties
        $this->response = new stdClass();
        $this->response->meta = new stdClass();
        $this->response->meta->action = '';
        $this->response->meta->baseurl = $this->config->config['base_url'];
        $this->response->meta->collection = 'logon';
        $this->response->meta->current = 'y';
        $this->response->meta->debug = false;
        $this->response->meta->filtered = '';
        $this->response->meta->format = $format;
        $this->response->meta->groupby = '';
        $this->response->meta->header = 'HTTP/1.1 200 OK';
        $this->response->meta->id = null;
        $this->response->meta->ids = 0;
        $this->response->meta->include = '';
        $this->response->meta->limit = '';
        $this->response->meta->offset = 0;
        $this->response->meta->properties = '';
        $this->response->meta->query_string = '';
        $REQUEST_METHOD = strtoupper($this->input->server('REQUEST_METHOD'));
        $this->response->meta->request_method = $REQUEST_METHOD;
        $this->response->meta->sort = '';
        $this->response->meta->sub_resource = '';
        $this->response->meta->sub_resource_id = 0;
        $this->response->meta->total = 0;
        $this->response->meta->version = 1;
        $this->response->meta->filter = array();
        $this->response->meta->internal = new stdClass();
        $this->response->meta->received_data = array();
        $this->response->meta->sql = array();
        $this->response->links = array();
        $this->response->included = array();
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        $this->response->meta->url = @$this->session->userdata('url');
        if (strtoupper($this->input->server('REQUEST_METHOD')) == 'GET') {
            $temp = @$this->session->userdata('user_id');
            if (!empty($temp)) {
                if ($this->response->meta->format != 'json') {
                    redirect('summaries');
                } else {
                    print_r(json_encode($this->response));
                }
            }
            $this->check_defaults();
            $this->response->meta->action = 'create';
            $this->load->view('v_logon', $this->response);
        } else {
            // NOTE - had to NOT use 'logon' as it confuses PHP checkers that think it's the constructor
            $this->login();
        }
    }

    /**
     * [login description]
     * @return [type] [description]
     */
    public function login()
    {
        $temp = @$this->session->userdata('user_id');
        if (!empty($temp)) {
            if ($this->response->meta->format !== 'json') {
                redirect('summaries');
            } else {
                $this->load->model('m_users');
                $this->m_users->validate();
                if (!empty($this->user->roles)) {
                    $this->user->roles = json_decode($this->user->roles);
                } else {
                    $this->user->roles = array();
                }
                print_r(json_encode($this->user));
                exit();
            }
        }

        $this->load->model('m_logon');
        $this->m_logon->logon();

        if (empty($this->user->id)) {
            // user not validated
            if ($this->response->meta->format != 'json') {
                redirect('logon');
            } else {
                log_error('ERR-0020', current_url());
                header($this->response->meta->header);
                unset($this->response->sql);
                print_r(json_encode($this->response->meta));
                exit();
            }
        } else {
            $this->session->set_flashdata('error', '');
        }

        if ($this->config->config['internal_version'] < $this->config->config['web_internal_version'] and $this->response->meta->format == 'screen') {
            redirect('database');
            exit();
        }

        if (!empty($this->user->type) and $this->user->type == 'collector') {
            // if (@$this->input->post('uuid') == '') {
            //     log_error('ERR-0030', current_url());
            //     header($this->response->meta->header);
            //     print_r(json_encode($this->response));
            //     $this->session->sess_destroy();
            //     exit();
            // }
            $test = @$this->input->post('uuid');
            if (!empty($test)) {
                $this->response->collection = 'collectors';
                $this->load->model('m_collectors');
                $this->m_collectors->upsert();
                header($this->response->meta->header);
                header('Content-Type: application/json');
                print_r(json_encode($this->response));
                exit();
            }
        }

        if ($this->response->meta->format != 'json') {
            $url = @$this->input->post('url');
            if (!empty($url)) {
                redirect($this->session->userdata('url'));
            } else {
                redirect('summaries');
            }
        } else {
            if (!empty($this->user->id)) {
                $this->user->id = intval($this->user->id);
            }
            if (!empty($this->user->org_id)) {
                $this->user->org_id = intval($this->user->org_id);
            }
            if (!empty($this->user->roles)) {
                $this->user->roles = json_decode($this->user->roles);
            }
            print_r(json_encode($this->user));
        }
    }

    /**
     * [logoff description]
     * @return [type] [description]
     */
    public function logoff()
    {
        $this->session->sess_destroy();
        redirect('logon');
    }

    /**
     * [logout description]
     * @return [type] [description]
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('logon');
    }

    /**
     * [check_defaults description]
     * @return [type] [description]
     */
    public function check_defaults()
    {
        if (empty($this->config->config['oae_product']) or $this->config->config['oae_product'] !== 'Open-AudIT Cloud') {
            $oae_url = '';
            if (! empty($this->config->config['oae_url'])) {
                $oae_url = $this->config->config['oae_url'];
            } else {
                $oae_url = '/omk/open-audit';
            }
            if (substr($oae_url, 0, 1) === '/') {
                $oae_url = 'http://localhost' . $oae_url;
            } else {
                $temp = explode('/', $oae_url);
                unset($temp[0], $temp[1], $temp[2]);
                $oae_url = 'http://localhost' . implode('/', $temp);
            }
            if (substr($oae_url, 1, -1) !== '/') {
                $oae_url .= '/';
            }
            $oae_license_url = $oae_url.'license';

            ini_set('default_socket_timeout', 3);

            // Get the license type and set our logo
            $license = '';

            // get the license status from the OAE API
            // license status are: none, free, commercial
            $license = @file_get_contents($oae_license_url, false);
            if (!empty($license) and $license !== false) {
                $license = json_decode($license);
                if (json_last_error()) {
                    $license = new stdClass();
                    $license->license = 'none';
                }
            } else {
                $license = new stdClass();
                $license->license = 'none';
            }

            if ($license->license != 'none' and $license->license != 'commercial' and $license->license != 'free') {
                $license->license = 'none';
            }

            $this->m_configuration->update('oae_license', (string)$license->license, 'system');

            if (!empty($license->product)) {
                $product = $license->product;
            } else {
                $product = 'Open-AudIT Community';
            }
            if ($license->license == 'none') {
                $product = 'Open-AudIT Community';
            }
            if (!empty($this->config->config['internal_version']) and $this->config->config['internal_version'] >= 20170620) {
                $this->m_configuration->update('oae_product', (string)$product, 'system');
            } else {
                $this->config->config['oae_product'] = 'Open-AudIT Community';
            }
        }

        // Set our Server's IP addresses
        # TODO - check we can remove this as it's provided in m_configuration::collection.
        #      - might be required in a ::read.
        $server_ip = server_ip();
        $this->m_configuration->update('server_ip', (string)$server_ip, 'system');

        // If the default_network_address has not been altered by the user, update it.
        if ((empty($this->config->config['oae_product']) or $this->config->config['oae_product'] !== 'Open-AudIT Cloud') && $this->db->table_exists('configuration')) {
            $sql = '/* logon::check_defaults */ ' . "SELECT * FROM configuration WHERE name = 'default_network_address'";
            $query = $this->db->query($sql);
            $result = $query->result();
            $config_item = $result[0];
            if ($config_item->edited_by === 'system') {
                // Build a new default network address
                // $myip = explode(',', $server_ip)[0];
                // fix for above for old PHP
                $temp = explode(',', $server_ip);
                $myip = $temp[0];
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                    $my_network_address = 'https://'.$myip.'/open-audit/';
                } else {
                    $my_network_address = 'http://'.$myip.'/open-audit/';
                }
                $sql = "UPDATE configuration SET value = ?, edited_date = NOW(), edited_by = 'system' WHERE name = 'default_network_address'";
                $data = array($my_network_address);
                $query = $this->db->query($sql, $data);
            }
        }

        // Delete any old sessions stored in the DB
        $sql = "/* logon::check_defaults */ " . "DELETE FROM oa_user_sessions WHERE last_activity < UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY)";
        $query = $this->db->query($sql);

        // Remove any old logs as per config
        if ($this->db->table_exists('logs') and !empty($this->config->config['log_retain_level_0'])) {
            $sql = "/* logon::check_defaults */ " . "DELETE FROM `logs` WHERE 
                (`severity` = 0 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_0']) . " DAY)) OR
                 (`severity` = 1 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_1']) . " DAY)) OR
                 (`severity` = 2 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_2']) . " DAY)) OR
                 (`severity` = 3 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_3']) . " DAY)) OR
                 (`severity` = 4 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_4']) . " DAY)) OR
                 (`severity` = 5 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_5']) . " DAY)) OR
                 (`severity` = 6 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_6']) . " DAY)) OR
                 (`severity` = 7 AND `timestamp` < (NOW() - INTERVAL " . intval($this->config->config['log_retain_level_7']) . " DAY))";
            $query = $this->db->query($sql);
        }

        # Cleanup (delete) any single discoveries older than 1 hour
        if ($this->db->table_exists('discoveries')) {
            $sql = "DELETE FROM `discoveries` WHERE `discard` = 'y' AND `edited_date` < (NOW() - INTERVAL 1 HOUR)";
            $query = $this->db->query($sql);
        }

        // Get the installed application list from Enterprise
        if (empty($this->config->config['oae_product']) or $this->config->config['oae_product'] !== 'Open-AudIT Cloud') {
            $url = str_replace('open-audit/', '', $oae_url);
            $installed = @json_decode(@file_get_contents($url . '.json'));
            # get the available application list from file
            $modules = @json_decode(@file_get_contents(dirname(dirname(dirname(dirname(__FILE__)))).'/other/modules.json'));
            if (!empty($installed) and !empty($modules)) {
                foreach ($installed->products as $ins) {
                    foreach ($modules as $app) {
                        if ($app->name == $ins->name) {
                            $app->installed = true;
                            $app->version = $ins->version;
                        }
                    }
                }
                $modules = json_encode($modules);
                # Update our config item with the new list
                $this->m_configuration->update('modules', $modules, 'system');
            }
        }

        // Upsert the local server subnet into the /networks
        if ($this->config->config['oae_product'] !== 'Open-AudIT Cloud') {
            foreach ($this->m_configuration->read_subnet() as $subnet) {
                $this->load->model('m_networks');
                $network = new stdClass();
                $network->name = $subnet;
                $network->network = $subnet;
                $network->org_id = 1;
                $network->location_id = 1;
                $network->description = 'Auto inserted local server subnet';
                $this->m_networks->upsert($network);
                unset($network);
            }
        }

        // Run an integration for Linux default only to populate the locations, pollers and groups
        if ($this->db->table_exists('integrations') and
            $this->db->table_exists('integrations_log') and
            php_uname('s') !== 'Windows NT' and
            file_exists('/usr/local/nmis9/conf/Config.nmis')) {
            $sql = "SELECT id FROM integrations WHERE name = 'Default NMIS Integration' ORDER BY id LIMIT 1";
            $query = $this->db->query($sql);
            $result = $query->result();
            if (!empty($result[0]->id)) {
                $this->load->model('m_integrations');
                $this->load->model('m_orgs');
                $integration = $this->m_integrations->read($result[0]->id);
                $integration = $integration[0];
                $integration->debug = false;
                $integration->log = false;
                if (!empty($integration->attributes->attributes->url) and
                    (stripos($integration->attributes->attributes->url, 'localhost') !== false or
                    stripos($integration->attributes->attributes->url, '127.0.0.1') !== false or
                    stripos($integration->attributes->attributes->url, '127.0.1.1') !== false) and
                        empty($integration->attributes->attributes->username) and
                        empty($integration->attributes->attributes->password)) {
                    // We should be able to run the integration, assuming config auth_token set
                    $this->load->helper('integrations_nmis');
                    integrations_pre($integration);
                }
            }
        }
    }
}
// End of file logon.php
// Location: ./controllers/logon.php
