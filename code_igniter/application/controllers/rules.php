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
* PHP version 5.3.3
* 
* @category  Controller
* @package   Rules
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.2.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Rules
*
* @access   public
* @category Controller
* @package  Rules
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
        // This endpoint allows all users.orgs children and the users.org_id parents to be permitted
        $this->load->model('m_orgs');
        $this->user->org_list = implode(',', $this->m_orgs->get_user_all($this->user->id));
        unset($this->user->org_parents);
        // inputRead();
        $this->response = response_create();
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
        $this->response->meta->id = $this->{'m_'.$this->response->meta->collection}->create($this->response->meta->received_data->attributes);
        $this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
        $this->response->include = 'v_'.$this->response->meta->collection.'_read';
        output($this->response);
    }

    /**
    * Read a single object
    *
    * @access public
    * @return NULL
    */
    public function read()
    {
        $this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
        if ( ! empty($this->response->data) && is_array($this->response->data)) {
            $this->response->meta->total = 1;
            $this->response->meta->filtered = 1;
            $this->load->model('m_orgs');
            $this->response->dictionary = $this->{'m_'.$this->response->meta->collection}->dictionary();
            if ($this->response->meta->format === 'screen') {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
            } else {
                $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->org_id));
            }
        } else {
            log_error('ERR-0002', $this->response->meta->collection . ':read');
            $this->session->set_flashdata('error', 'No object could be retrieved when ' . $this->response->meta->collection . ' called m_' . $this->response->meta->collection . '->read.');
            if ($this->response->meta->format !== 'json') {
                redirect($this->response->meta->collection);
            }
        }
        output($this->response);
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

        if (empty($this->response->meta->sub_resource_id)) {
            $this->response->meta->sub_resource_id = '';
        }

        $temp = explode('.', $this->response->meta->sub_resource_id);
        $item = new stdClass();

        if ($this->response->meta->sub_resource === 'inputs') {
            $item->table = $temp[0];
            $item->attribute = $temp[1];
            $item->operator = $temp[2];
            $item->value = html_entity_decode(implode(array_slice($temp, 3)));
            $inputs = json_decode($rule->attributes->inputs);
            $newinputs = array();
            foreach ($inputs as $input) {
                if ($input->table !== $item->table OR $input->attribute !== $item->attribute OR $input->operator !== $item->operator OR $input->value !== $item->value) {
                    $newinputs[] = $input;
                }
            }
            $rule->attributes->inputs = json_encode($newinputs);
            $sql = 'UPDATE rules SET inputs = ? WHERE id = ?';
            $data = array($rule->attributes->inputs, $rule->id);
            $this->db->query($sql, $data);
        }

        if ($this->response->meta->sub_resource === 'outputs') {
            $item->table = $temp[0];
            $item->attribute = $temp[1];
            $item->value_type = $temp[2];
            $item->value = implode(array_slice($temp, 3));
            $outputs = json_decode($rule->attributes->outputs);
            $newoutputs = array();
            foreach ($outputs as $db_output) {
                if ($db_output->table !== $item->table OR $db_output->attribute !== $item->attribute OR $db_output->value_type !== $item->value_type OR $db_output->value !== $item->value) {
                    $newoutputs[] = $db_output;
                }
            }
            $rule->attributes->outputs = json_encode($newoutputs);
            $sql = 'UPDATE rules SET outputs = ? WHERE id = ?';
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
        $this->{'m_'.$this->response->meta->collection}->collection(0, 1);
        output($this->response);
    }

    /**
    * Supply a HTML form for the user to create an object
    *
    * @access public
    * @return NULL
    */
    public function create_form()
    {
        $this->response->dictionary = $this->m_rules->dictionary();
        $this->load->model('m_orgs');
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
        output($this->response);
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
