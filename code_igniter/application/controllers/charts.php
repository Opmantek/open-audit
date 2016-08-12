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
class Charts extends MY_Controller
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
		$this->load->model('m_charts');
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
	* Read a single object
	*
	* @access public
	* @return NULL
	*/
	public function read()
	{
		$this->response->data = $this->m_charts->read_chart();
		$this->response->meta->filtered = count($this->response->data);
		output($this->response);
	}

	/**
	* Collection of objects
	*
	* @access public
	* @return NULL
	*/
	public function collection()
	{
		$this->response->data = $this->m_charts->read_charts();
		$this->response->meta->filtered = count($this->response->data);
		output($this->response);
	}
}
// End of file charts.php
// Location: ./controllers/charts.php
