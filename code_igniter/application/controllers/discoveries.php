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
* Base Object discoveries
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
* @return   NULL
 */
class Discoveries extends MY_Controller
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
        // log the attempt
        stdlog();
        // ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($this->input->server('REQUEST_URI'), '/') === strlen($this->input->server('REQUEST_URI'))-1) {
            redirect(uri_string());
        }
        $this->load->helper('input');
        $this->load->helper('output');
        $this->load->helper('error');
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
        $this->load->helper('log');
        $this->response->data = $this->m_discoveries->read();

        $this->m_discoveries->execute();
        if (!empty($this->config->config['discovery_nmap_os'])) {
            $nmap_os = $this->config->config['discovery_nmap_os'];
        } else {
            $nmap_os = 'n';
        }

        if ($this->response->meta->debug) {
            $debugging = 1;
        } else {
            $debugging = 0;
        }

        // Unix based discovery
        if (php_uname('s') != 'Windows NT') {
            $filepath = $this->config->config['base_path'] . '/other';
            $command_string = "$filepath/discover_subnet.sh" .
                                " subnet_range=" .  $this->response->data[0]->attributes->subnet .
                                " url=".            $this->response->data[0]->attributes->network_address . "index.php/input/discoveries" .
                                " submit_online=y" .
                                " echo_output=n" .
                                " create_file=n" .
                                " debugging=" . $debugging .
                                " subnet_timestamp=" . $this->response->data[0]->attributes->id .
                                " os_scan=" . $nmap_os . " > /dev/null 2>&1 &";
            if (php_uname('s') == 'Linux') {
                $command_string = 'nohup ' . $command_string;
            }
            @exec($command_string, $output, $return_var);
            if ($return_var != '0') {
                $message = 'Discovery subnet starting script discover_subnet.sh ('.$this->response->data[0]->attributes->subnet.') has failed';
                $this->session->set_flashdata('error', $message);
            } else {
                $message =  'Discovery subnet starting script discover_subnet.sh ('.$this->response->data[0]->attributes->subnet.') has started';
                $this->session->set_flashdata('success', $message);
                $sql = '/* discoveries::execute */ UPDATE `discoveries` SET `complete` = "n" WHERE id = ?';
                $data = array($this->response->meta->id);
                $query = $this->db->query($sql, $data);
            }
        }

        // Windows based discovery
        if (php_uname('s') == 'Windows NT') {
            $filepath = $this->config->config['base_path'] . '\\other';
        }

        if ($this->response->meta->format === 'json') {
            output($this->response);
        } else {
            redirect($this->response->meta->collection);
            #redirect($this->response->meta->collection . '/' . $this->response->meta->id);
        }

    }
}
// End of file discoveries.php
// Location: ./controllers/discoveries.php
