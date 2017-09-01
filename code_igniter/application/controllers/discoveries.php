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
* @version   2.0.6
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
        // log the attempt
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);

        // ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($this->input->server('REQUEST_URI'), '/') === strlen($this->input->server('REQUEST_URI'))-1) {
            redirect(uri_string());
        }
        $this->load->helper('input');
        $this->load->helper('output');
        $this->load->helper('error');
        $this->load->helper('log');
        $this->load->model('m_discoveries');
        $this->load->model('m_orgs');
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
        # special case the single device discovery
        # We could have used include_create but then we'd need logic
        # in there to handle this specific case.

        if (!empty($this->response->meta->received_data->attributes->other->single)) {
            $this->load->model('m_collection');
            $attributes = $this->response->meta->received_data->attributes;
            $subnet = $attributes->other->subnet;
            $this->response->meta->received_data->attributes->name = 'Device Discovery for ' . $subnet;
            $this->response->meta->received_data->attributes->org_id = $this->user->org_id;

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
        #$this->response->data = $this->m_discoveries->read();
        $this->m_discoveries->execute();
        if ($this->response->meta->format === 'json') {
            output($this->response);
        } else {
            redirect('discoveries/'.$this->response->meta->id);
        }
    }

    /**
    * The requested table will have optimize arun upon it and it's autoincrement reset to 1
    *
    * @access public
    * @return NULL
    */
    public function reset()
    {
        include 'include_reset.php';
    }
}
// End of file discoveries.php
// Location: ./controllers/discoveries.php
