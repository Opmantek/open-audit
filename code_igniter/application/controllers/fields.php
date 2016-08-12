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
* Base Object Connections.
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
* @return   NULL
 */
class Fields extends MY_Controller
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
		$this->load->model('m_fields');
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
		if ( ! empty($this->response->meta->action)) {
			$this->{$this->response->meta->action}();
		}
		else {
			$this->collection();
		}
		exit();
	}

	/**
	* Process the supplied data and create a new object
	*
	* @access public
	* @return NULL
	*/
	public function create()
	{
		// Only admin's
		if ($this->user->admin !== 'y') {
			log_error('ERR-0008');
			output($this->response);
			exit();
		}
		$this->response->meta->id = $this->m_fields->create();
		if ( ! empty($this->response->meta->id)) {
			if ($this->response->meta->format === 'json') {
				$this->response->data = $this->m_fields->read();
				output($this->response);
			}
			else {
				redirect('/fields');
			}
		}
		else {
			log_error('ERR-0009');
			output($this->response);
			exit();
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
		// Only admin's
		if ($this->user->admin !== 'y') {
			log_error('ERR-0008');
			output($this->response);
			exit();
		}
		$this->load->model('m_groups');
		$this->response->included = array();
		$this->response->included = array_merge($this->response->included, $this->m_groups->collection());
		$this->response->data = $this->m_fields->read();
		$this->response->meta->filtered = count($this->response->data);
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
		// Only admin's
		if ($this->user->admin !== 'y') {
			log_error('ERR-0008');
			output($this->response);
			exit();
		}
		$this->m_fields->update();
		if ($this->response->meta->format === 'json') {
			$this->response->data = $this->m_fields->read();
			output($this->response);
		}
		else {
			redirect('fields');
		}
	}

	/**
	* Delete an existing object
	*
	* @access public
	* @return NULL
	*/
	public function delete()
	{
		// Only admin's
		if ($this->user->admin !== 'y') {
			log_error('ERR-0008');
			output($this->response);
			exit();
		}
		if ($this->m_fields->delete()) {
			$this->response->data = array();
			$temp = new stdClass();
			$temp->type = $this->response->meta->collection;
			$this->response->data[] = $temp;
			unset($temp);
		}
		else {
			log_error('ERR-0013');
		}
		if ($this->response->meta->format === 'json') {
			output($this->response);
		}
		else {
			redirect($this->response->meta->collection);
		}
	}

	/**
	* Collection of objects
	*
	* @access public
	* @return NULL
	*/
	public function collection()
	{
		$this->response->data = $this->m_fields->collection();
		$this->response->meta->filtered = count($this->response->data);
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
		// Only admin's
		if ($this->user->admin !== 'y') {
			log_error('ERR-0008');
			output($this->response);
			exit();
		}
		$this->response->data = array();
		$temp = new stdClass();
		$temp->type = $this->response->meta->collection;
		$this->response->data[] = $temp;
		unset($temp);
		$this->load->model('m_groups');
		$this->response->included = array();
		$this->response->included = array_merge($this->response->included, $this->m_groups->collection());
		output($this->response);
	}

	/**
	* Supply a HTML form for the user to update an object
	*
	* @access public
	* @return NULL
	*/
	public function update_form()
	{
		// Only admin's
		if ($this->user->admin !== 'y') {
			log_error('ERR-0008');
			output($this->response);
			exit();
		}
		$this->load->model('m_groups');
		$this->response->included = array();
		$this->response->included = array_merge($this->response->included, $this->m_groups->collection());
		$this->response->data = $this->m_fields->read();
		$this->response->meta->filtered = count($this->response->data);
		output($this->response);
	}
}
// End of file fields.php
// Location: ./controllers/fields.php
