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
class logon extends CI_Controller
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
        $this->load->helper('url');
        $this->load->helper('log');
        $this->load->helper('error');
        $this->load->library('session');
        $this->load->model('m_configuration');
        $this->m_configuration->load();

        # initialise our properties
        $this->response = new stdClass();
        $this->response->meta = new stdClass();
        $this->response->meta->action = '';
        $this->response->meta->baseurl = $this->config->config['base_url'];
        $this->response->meta->collection = 'logon';
        $this->response->meta->current = 'y';
        $this->response->meta->debug = false;
        $this->response->meta->filtered = '';
        $this->response->meta->format = '';
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

        // Delete any old sessions stored int he DB
        $sql = "/* logon::constructor */ " . "DELETE FROM oa_user_sessions WHERE last_activity < UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY)";
        $query = $this->db->query($sql);

        // Insert the local server subnet into the /networks
        foreach ($this->m_configuration->read_subnet() as $subnet) {
            $this->load->model('m_networks');
            $network = new stdClass();
            $network->name = $subnet;
            $network->org_id = 0;
            $network->description = 'Auto inserted local server subnet';
            $this->m_networks->upsert($network);
            unset($network);
        }

        // Get the license type and set our logo
        $license = '';
        $oae_url = $this->config->config['oae_url'];
        if ($oae_url > '') {
            if (substr($oae_url, -1, 1) != '/') {
                $oae_url = $oae_url.'/';
            }
            // if we already have http... in the oae_url variable, no need to do anything.
            if (strpos(strtolower($oae_url), 'http') === false) {
                // if we ONLY have a link thus - "/oae/omk" we assume the OAE install is on the same machine.
                // Make sure we have a leading /
                if (substr($oae_url, 0, 1) != '/') {
                    $oae_url = '/'.$oae_url;
                }
                // need to create a link to OAE on port 8042 to check the license
                // we cannot detect and use the browser http[s] as it may being used in the client browser,
                //     but stripped by a https offload or proxy
                $oae_license_url = 'http://localhost'.$oae_url.'license';
                // we create a link for the browser using the same address + the path & file in oae_url
                if (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on') {
                    $oae_url = 'https://'.$_SERVER['HTTP_HOST'].$oae_url;
                } else {
                    $oae_url = 'http://'.$_SERVER['HTTP_HOST'].$oae_url;
                }
            } else {
                // we already have a URL like http://something/omk/oae/ - leave it alone
                $oae_license_url = $oae_url.'license';
            }

            ini_set('default_socket_timeout', 3);
            // get the license status from the OAE API
            // license status are: valid, invalid, expired, none
            $license = @file_get_contents($oae_license_url, false);
            if ($license !== false) {
                $license = json_decode($license);
                if (json_last_error()) {
                    $license = new stdClass();
                    $license->license = 'none';
                }
            } else {
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
        if ($license->license == 'commercial' or $license->license == 'free') {
            $this->m_configuration->update('logo', 'logo-banner-oae', 'system');
        } else {
            $this->m_configuration->update('logo', 'logo-banner-oac-oae', 'system');
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
        if (strtoupper($this->input->server('REQUEST_METHOD')) == 'GET') {
            $this->response->meta->action = 'create';
            $this->load->view('v_logon', $this->response);
        } else {
            // NOTE - had to NOT use 'logon' as it confuses PHP checkers that think it's the constructor
            $this->login();
        }
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function login()
    {
        $this->load->model('m_logon');
        $this->m_logon->logon();
        if ($this->config->config['internal_version'] < $this->config->config['web_internal_version']) {
            redirect('database');
            exit();
        }
        if (!empty($this->session->userdata('url'))) {
            redirect($this->session->userdata('url'));
        } else {
            redirect('summaries');
        }
    }

    public function logoff()
    {
        $this->session->sess_destroy();
        redirect('logon');
    }

}
// End of file input.php
// Location: ./controllers/input.php
