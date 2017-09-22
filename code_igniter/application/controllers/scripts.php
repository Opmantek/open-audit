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
* Base Object Scripts.
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class scripts extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_scripts');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
    }

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
        include 'include_scripts_options.php';
        foreach ($options as $item) {
            $option = new stdClass();
            $option->id = $item->name;
            $option->type = 'option';
            $option->attributes = $item;
            $this->response->included[] = $option;
            unset($option);
        }
        foreach ($options_scripts as $key => $value) {
            $option = new stdClass();
            $option->id = $key;
            $option->type = 'script_option';
            $option->attributes = $value;
            $this->response->included[] = $option;
            unset($option);
        }
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
    private function create_form()
    {
        # include our scripts options
        include 'include_scripts_options.php';
        foreach ($options as $item) {
            $option = new stdClass();
            $option->id = $item->name;
            $option->type = 'option';
            $option->attributes = $item;
            $this->response->included[] = $option;
            unset($option);
        }
        foreach ($options_scripts as $key => $value) {
            $option = new stdClass();
            $option->id = $key;
            $option->type = 'script_option';
            $option->attributes = $value;
            $this->response->included[] = $option;
            unset($option);
        }
        include 'include_create_form.php';
    }

    /**
    * Supply a HTML form for the user to update an object
    *
    * @access public
    * @return NULL
    */
    private function update_form()
    {
        include 'include_scripts_options.php';
        foreach ($options as $item) {
            $option = new stdClass();
            $option->id = $item->name;
            $option->type = 'option';
            $option->attributes = $item;
            $this->response->included[] = $option;
            unset($option);
        }
        foreach ($options_scripts as $key => $value) {
            $option = new stdClass();
            $option->id = $key;
            $option->type = 'script_option';
            $option->attributes = $value;
            $this->response->included[] = $option;
            unset($option);
        }
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
    * Supply a file for download which is the script with the injected configuration
    *
    * @access public
    * @return NULL
    */
    private function download()
    {
        $this->response->meta->format = 'json';
        $script = $this->m_scripts->download($this->response->meta->id);
        $script_details = $this->m_scripts->read($this->response->meta->id);
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=' . $script_details[0]->attributes->name);
        if ($script_details[0]->attributes->based_on == 'audit_windows.vbs') {
            header("Content-Type: text/vbscript");
        } else {
            header("Content-Type: application/x-sh");
        }
        
        header('Content-Transfer-Encoding: binary');
        echo $script;
    }
}
// End of file scripts.php
// Location: ./controllers/scripts.php
