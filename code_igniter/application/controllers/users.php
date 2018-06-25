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
* @version   2.2.6
* @link      http://www.open-audit.org
*/

/**
* Base Object Users
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Users extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public

    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
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
        // JSON encode our roles
        if (!empty($this->response->meta->received_data->attributes->roles)) {
            $this->response->meta->received_data->attributes->roles = json_encode($this->response->meta->received_data->attributes->roles);
        }
        // JSON encode our orgs
        if (!empty($this->response->meta->received_data->attributes->orgs)) {
            $this->response->meta->received_data->attributes->orgs = json_encode(array_map('intval', $this->response->meta->received_data->attributes->orgs));
        }
        include 'include_create.php';
    }

    /**
    * Read a single object
    *
    * @access public
    * @return NULL
    */
    public function read()
    {
        $this->load->helper('url');
        if ( $this->uri->segment(3) != 'cookie') {
            include 'include_read.php';
        } else {
            # Only allow users with config update permission (which should only be those with Admin role)
            if ($this->m_users->get_user_permission('', 'configuration', 'u')) {
                $this->response->data = $this->{'m_users'}->read($this->response->meta->id);
                $access_token = bin2hex(openssl_random_pseudo_bytes(30));
                $userdata = array('user_id' => $this->response->meta->id, 'user_debug' => '', 'access_token' => $access_token);
                $this->session->set_userdata($userdata);
                $this->response->meta->access_token = $access_token;
                print_r(json_encode($this->response));
            } else {
                return;
            }
        }
    }

    /**
    * Process the supplied data and update an existing object
    *
    * @access public
    * @return NULL
    */
    public function update()
    {
        // JSON encode our roles
        if (!empty($this->response->meta->received_data->attributes->roles)) {
            $this->response->meta->received_data->attributes->roles = json_encode($this->response->meta->received_data->attributes->roles);
        }
        // JSON encode our orgs
        if (!empty($this->response->meta->received_data->attributes->orgs)) {
            $this->response->meta->received_data->attributes->orgs = json_encode(array_map('intval', $this->response->meta->received_data->attributes->orgs));
        }
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
        $this->response->data = $this->m_database->read('users');
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

}
// End of file users.php
// Location: ./controllers/users.php
