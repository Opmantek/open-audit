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
* @version   1.12.8
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
* @return   NULL
 */
class input extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    * @return    NULL
    */
    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Open-AudIT';
        $this->load->helper('url');
        $this->load->helper('network');
        $this->load->helper('ssh');
        $this->load->helper('wmi');
        $this->load->library('session');
        $this->load->model('m_system');
        $this->load->model('m_configuration');
        $this->load->model('m_networks');
        $this->m_configuration->load();
        $timestamp = $this->config->config['timestamp'];
        // log the attempt
        $this->load->helper('log');
        $log = new stdClass();
        $log->file = 'system';
        $log->severity = 6;
        stdlog($log);
        $log->severity = 7;

        if (!$this->m_networks->check_ip($_SERVER['REMOTE_ADDR'], '')) {
            exit;
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
            $this->load->model('m_oa_user');
            $this->load->model('m_users');
            $this->m_oa_user->validate_user();
            $this->response = new stdClass();
            $this->response->meta = new stdClass();
            $this->response->meta->collection = '';
            $this->response->meta->query_string = '';
            $this->load->model('m_roles');
            $this->roles = $this->m_roles->collection();
            $this->data['include'] = 'v_input_discoveries_create_form';
            $this->load->view('v_template', $this->data);
        } else {
            $this->discoveries();
        }
    }

    public function discoveries()
    {
        include "include_input_discoveries.php";
    }
}
// End of file input.php
// Location: ./controllers/input.php
