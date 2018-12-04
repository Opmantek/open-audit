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
* @version   2.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Input
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Input extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public

    */
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] = 'Open-AudIT';
        $this->load->helper('url');
        $this->load->helper('network');
        $this->load->helper('output');
        $this->load->helper('ssh');
        $this->load->helper('wmi');
        $this->load->library('session');
        $this->load->model('m_configuration');
        $this->load->model('m_networks');
        $this->m_configuration->load();
        $timestamp = $this->config->config['timestamp'];
        // log the attempt
        $this->load->helper('log');
        $log = new stdClass();
        $log->type = 'system';
        $log->object = 'input';
        $log->severity = 7;
        stdlog($log);

        if ($_SERVER['REMOTE_ADDR'] == '::1') {
            $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
        }

        if (!$this->m_networks->check_ip($_SERVER['REMOTE_ADDR']) and stripos($this->config->config['ip'], $_SERVER['REMOTE_ADDR']) === false) {
            $log->severity = 3;
            $log->summary = 'Unauthorized';
            $log->message = 'Unauthorized input for ' . $this->uri->segment(2, 0) . ' from ' . $_SERVER['REMOTE_ADDR'] . '. Not in list of blessed subnets.';
            if ($this->uri->segment(2, 0) == 'discoveries' and !empty($_POST['data'])) {
                $xml_input = $_POST['data'];
                $xml = new SimpleXMLElement($xml_input);
                if (!empty($xml->device->discovery_id)) {
                    $log->message = 'Unauthorized input for discoveries from ' . $_SERVER['REMOTE_ADDR'] . ' for discovery #' . intval($xml->device->discovery_id) . '. Not in list of blessed subnets.';
                    $log->discovery_id = intval($xml->device->discovery_id);
                    echo "=====================\n" . $log->message . "\n======================\n";
                    discovery_log($log);
                } else {
                    echo "=====================\n" . $log->message . "\n======================\n";
                    stdlog($log);
                }
            } else {
                echo "=====================\n" . $log->message . "\n======================\n";
                stdlog($log);
            }
            exit;
        }

        $this->response = new stdClass();
        $this->response->meta = new stdClass();
        $this->response->meta->collection = 'input';
        $this->response->meta->action = '';

        if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
            $this->response->meta->format = 'json';
        } else {
            $this->response->meta->format = 'screen';
        }
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        # Unused
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        if (strtoupper($this->input->server('REQUEST_METHOD')) == 'GET') {
            $this->load->model('m_users');
            $this->m_users->validate();
            $this->user->org_list = $this->org_list = implode(',', $this->m_users->get_orgs($this->user->id));
            $this->response = new stdClass();
            $this->response->meta = new stdClass();
            $this->response->meta->collection = '';
            $this->response->meta->query_string = '';
            $this->load->model('m_roles');
            $this->roles = $this->m_roles->collection();
            $this->response->meta->collection = 'input';
            $this->response->data = array();
            $this->response->meta->id = null;
            $this->response->meta->action = $this->uri->segment(2, 0) . '_create_form';
            $this->response->meta->total = 0;
            $this->response->meta->format = 'screen';
            $this->response->meta->header = 'Input';
            $this->response->meta->heading = 'Input';
            $this->response->links = array();
            output($this->response);
            #$this->data['include'] = 'v_input_discoveries_create_form';
            #$this->load->view('v_template', $this->data);
        } else {
            $temp = $this->uri->segment(2, 0);
            if (empty($temp)) {
                $temp = 'discoveries';
            }
            $this->{$temp}();
        }
    }

    public function discoveries()
    {
        $this->response->meta->action = 'discoveries';
        include "include_input_discoveries.php";
    }

    public function devices()
    {
        $log = new stdClass();
        $log->type = 'system';
        $log->severity = 6;
        $log->status = 'processing';
        $log->collection = 'input';
        $log->action = 'devices';
        $log->function = strtolower($log->collection) . '::' . strtolower($log->action);
        $log->summary = 'processing submitted data';
        stdlog($log);
        $discovery_id = null;
        include "include_input_devices.php";
    }

    public function logs()
    {
        if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1' and $_SERVER['REMOTE_ADDR'] != '::1') {
            return;
        }
        include "include_input_logs.php";
    }

    public function queue()
    {
        # Our processing queue's
        include "include_input_queue.php";
    }
}
// End of file input.php
// Location: ./controllers/input.php
