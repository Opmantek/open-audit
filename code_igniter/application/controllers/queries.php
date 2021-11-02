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
* @package   Queries
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Queries
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Queries extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_queries');
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
        if ($this->response->meta->format === 'screen') {
            $this->load->model('m_attributes');
            $attributes = $this->m_attributes->collection($this->user->id);
            $query_attributes = array();
            if (is_array($attributes)) {
                foreach ($attributes as $attribute) {
                    if ($attribute->attributes->resource === 'queries') {
                        $query_attributes[] = $attribute;
                    }
                }
            }
            $this->response->included = array_merge($this->response->included, $query_attributes);
        }
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
        if ( ! empty($this->response->meta->received_data->attributes->sql) &&
            (stripos($this->response->meta->received_data->attributes->sql, 'where @filter') === false OR
            stripos($this->response->meta->received_data->attributes->sql, 'where @filter or') !== false)) {
            // We don't have the HIGHLY RECOMMENDED @filter in our SQL
            // Ensure the user creating this query has the admin role
            $allowed = false;
            if (in_array('admin', $this->user->roles)) {
                $allowed = true;
            }
            if ($allowed === false) {
                unset($allowed);
                log_error('ERR-0022', 'queries::create');
                redirect('/queries');
            }
            unset($allowed);
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
        $this->response->dictionary = $this->m_queries->dictionary();
        $this->load->model('m_orgs');
        $this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));
        $this->load->model('m_attributes');
        $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
        output($this->response);
    }

    /**
    * Return the result of running a query
    *
    * @access public
    * @return NULL
    */
    public function execute()
    {
        $this->response->meta->total = $this->m_queries->execute_count($this->response->meta->id);
        $this->response->data = $this->m_queries->execute($this->response->meta->id);
        $this->response->meta->filtered = count($this->response->data);
        output();
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
    * Supply a HTML form for the user to upload a collection of objects in CSV
    *
    * @access public
    * @return NULL
    */
    public function import_form()
    {
        $this->load->model('m_database');
        $this->response->data = $this->m_database->read('queries');
        include 'include_import_form.php';
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
// End of file queries.php
// Location: ./controllers/queries.php
