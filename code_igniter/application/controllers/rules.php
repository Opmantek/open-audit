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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.1
* @link      http://www.open-audit.org
 */

/**
* Base Object Agents
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Rules extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rules');
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
    * Delete an existing object
    *
    * @access public
    * @return NULL
    */
    public function sub_resource_delete()
    {

        $rule = $this->m_rules->read($this->response->meta->id);
        if (empty($rule)) {
            return;
        } else {
            $rule = $rule[0];
        }

        $temp = explode('.', $this->response->meta->sub_resource_id);
        $item = new stdClass();

        if ($this->response->meta->sub_resource == 'inputs') {
            $item->table = $temp[0];
            $item->attribute = $temp[1];
            $item->operator = $temp[2];
            $item->value = html_entity_decode(implode(array_slice($temp, 3)));
            $inputs = json_decode($rule->attributes->inputs);
            $newinputs = array();
            foreach ($inputs as $input) {
                if ($input->table != $item->table or $input->attribute != $item->attribute or $input->operator != $item->operator or $input->value != $item->value) {
                    $newinputs[] = $input;
                }
            }
            $rule->attributes->inputs = json_encode($newinputs);
            $sql = "UPDATE rules SET inputs = ? WHERE id = ?";
            $data = array($rule->attributes->inputs, $rule->id);
            $this->db->query($sql, $data);
        }

        if ($this->response->meta->sub_resource == 'outputs') {
            $item->table = $temp[0];
            $item->attribute = $temp[1];
            $item->value_type = $temp[2];
            $item->value = implode(array_slice($temp, 3));
            $outputs = json_decode($rule->attributes->outputs);
            $newoutputs = array();
            foreach ($outputs as $db_output) {
                if ($db_output->table != $item->table or $db_output->attribute != $item->attribute or $db_output->value_type != $item->value_type or $db_output->value != $item->value) {
                    $newoutputs[] = $db_output;
                }
            }
            $rule->attributes->outputs = json_encode($newoutputs);
            $sql = "UPDATE rules SET outputs = ? WHERE id = ?";
            $data = array($rule->attributes->outputs, $rule->id);
            $this->db->query($sql, $data);
        }

        $this->response->data[] = $rule;
        output($this->response);
        $log = new stdClass();
        $log->object = $this->response->meta->collection;
        $log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
        $log->severity = 7;
        $log->status = 'success';
        $log->summary = 'finish';
        $log->type = 'access';
        $log->detail = json_encode($this->response);
        stdLog($log);
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
        $this->response->data = $this->m_database->read('rules');
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
    * The requested table will have optimize run upon it and it's autoincrement reset to 1
    *
    * @access public
    * @return NULL
    */
    public function reset()
    {
        include 'include_reset.php';
    }
}

// End of file rules.php
// Location: ./controllers/rules.php
