<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class groups extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		// log the attempt
		$log_details = new stdClass();
		$log_details->severity = 6;
		stdlog($log_details);
		unset($log_details);
		// $this->request['request_method'] = $_SERVER['REQUEST_METHOD'];
		// $this->request['http_accept'] = $_SERVER['HTTP_ACCEPT'];

		$this->load->model('m_oa_group');
	}

	# show a list of available groups
	public function index()
	{
		$this->data['query'] = $this->m_oa_group->get_user_groups($this->user->user_id);
		if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
			$response = new stdClass();
			$response->status = "success";
			foreach ($this->data['query'] AS &$group) {
				$group->links = array(array('rel'=>'group', 'href'=> $this->config->item('oa_web_index') . '/' . $group->group_id, 'description'=>'The details of this group.'));
			}
			$response->total = count($this->data['query']);
			$response->groups = $this->data['query'];
			echo json_encode($response);
			header('Content-Type: application/json');
			header('Cache-Control: max-age=0');
		} else {
			$this->data['heading'] = 'Groups';
			$this->data['include'] = 'v_main';
			$this->data['sortcolumn'] = '2';
			$this->data['export_report'] = 'y';
			$this->load->view('v_template', $this->data);
		}
	}

	public function group() {
		// return the details of this group
		$this->group_access();
		$this->data['query'] = $this->m_oa_group->get_group($this->group_id);
		if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
			$response = new stdClass();
			$response->status = "success";
			$response->total = count($this->data['query']);
			$this->data['query'][0]->links = array(
				array('rel'=>'devices', 'href'=> $this->config->item('oa_web_index') . '/' . $this->group_id . '/devices', 'description'=>'The devices in this group.'));
			$response->groups = $this->data['query'];
			echo json_encode($response);
			header('Content-Type: application/json');
			header('Cache-Control: max-age=0');
		} else {
			$this->data['heading'] = 'Groups';
			$this->data['total'] = count($this->data['query']);
			$this->data['include'] = 'v_main';
			$this->data['sortcolumn'] = '2';
			$this->data['export_report'] = 'y';
			$this->load->view('v_template', $this->data);
		}
	}

	public function devices() {
		// return the list of devices in this group
		$this->group_access();
		$this->load->model('m_systems');
		$this->data['query'] = $this->m_systems->get_group_systems($this->group_id);
		if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
			foreach ($this->data['query'] AS &$device) {
				$device->links = array(array('rel'=>'device', 'href'=> $this->config->item('oa_web_index') . '/devices/' . $device->system_id, 'description'=>'The details of this device.'));
			}
			$response = new stdClass();
			$response->status = "success";
			$response->total = count($result);
			$response->devices = $this->data['query'];
			echo json_encode($response);
			header('Content-Type: application/json');
			header('Cache-Control: max-age=0');
		}
		
	}

	public function reports() {
		// return the list of reports
	}

	private function group_access() {
		$this->group_id = $this->uri->segment(2);
		if (isset($this->group_id) AND $this->group_id != '' AND is_numeric($this->group_id)) {
			$this->load->model('m_oa_group');
			$access_level = $this->m_oa_group->get_group_access($this->group_id, $this->user->user_id);
			if ($access_level < 1) {
				if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== FALSE) {
					$response = new stdClass();
					$response->status = "fail";
					$response->message = "No group access";
					echo json_encode($response);
					header('Content-Type: application/json');
					header('Cache-Control: max-age=0');
					header('HTTP/1.1 400 Bad Request');
				} else {
					redirect('main/list_groups');
				}
			}
		}
	}
}
