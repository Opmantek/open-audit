<?php
#
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

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5.6
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class api extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);

        // load our model
        $this->load->model('m_api');

        $this->response = new stdClass();
        $this->response->status = '';
        $this->response->start = 0;
        $this->response->length = 0;
        $this->response->total = 0;
        $this->response->filtered = 0;

        // set the id - this might be a group, device or report id.
        if ($this->uri->segment(3) == intval($this->uri->segment(3))) {
            $this->response->id = intval($this->uri->segment(3));
        } else {
            $this->response->id = '';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (strpos(current_url(), 'parameters') !== false) {
                $split_url = explode('/', current_url());
                for ($i = 0; $i <= count($split_url)-1; $i++) {
                    if (strpos($split_url[$i], 'parameters') !== false) {
                        $temp_parameters = $split_url[$i+1];
                    }
                }
                foreach (explode('&', $temp_parameters) as $parameter) {
                    $temp_parameter = explode('=', $parameter);
                    $this->response->$temp_parameter[0] = $temp_parameter[1];
                }
            }
        }

        // import the request $_POST items into the $this->response object
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->post = $this->input->post(null, true);
            if ($this->post) {
                foreach ($this->post as $key => $value) {
                    $this->response->$key = $value;
                }
            }
        }

        $this->output->url = $this->config->item('oa_web_index');
        $this->response->start = intval($this->response->start);
        $this->response->length = intval($this->response->length);

    }

    public function index()
    {
        # index
    }

    # GROUP routing
    # GET
    # /groups               List all groups
    # /groups/{id}          Show specific Group
    # /groups/{id}/devices  List all Devices in specific Group
    # /groups/{id}/reports  List all Reports for specific Group
    #
    # POST
    # /groups               Add a new Group
    public function groups()
    {
        $this->response->function = 'groups';
        $this->load->model('m_oa_group');
        $this->groupAccess();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->response->id == '') {
                $this->groupsGet();
            } else {
                if ($this->uri->segment(4) == 'devices') {
                    if ($this->uri->segment(5) != '' and $this->uri->segment(5) == intval($this->uri->segment(5))) {
                        $this->groupDevice();
                    } else {
                        $this->groupDevices();
                    }
                } elseif ($this->uri->segment(4) == 'reports') {
                    $this->load->model('m_oa_report');
                    if ($this->uri->segment(5) != '' and $this->uri->segment(5) == intval($this->uri->segment(5))) {
                        $this->groupReport();
                    } else {
                        $this->groupReports();
                    }
                } else {
                    $this->groupGet();
                }
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->groupsPost();
        }
    }

    public function groupsGet()
    {
        $this->response->function = 'groupsGet';
        $this->response->data = $this->m_api->groupsGet($this->user->user_id);
        if ($this->response->data) {
            foreach ($this->response->data as &$group) {
                $group->links = array(array('rel'=>'group', 'href'=> $this->output->url . '/groups/' . $group->group_id, 'description'=>'The details of this group.'));
            }
        }
        $this->response->total = count($this->response->data);
        $this->response->filtered = count($this->response->data);
        $this->response->status = "success";
        echo json_encode($this->response);
        header('Content-Type: application/x-collection+json');
    }

    public function groupGet()
    {
        $this->response->function = 'groupGet';
        // return the details of this group
        $this->response->data = $this->m_oa_group->get_group($this->response->id);
        $this->response->total = count($this->response->data);
        $this->response->filtered = count($this->response->data);
        $this->response->data[0]->links = array(
            array('rel'=>'devices', 'href'=>$this->output->url . '/groups/' . $this->response->id . '/devices', 'description'=>'The devices in this group.'),
            array('rel'=>'reports', 'href'=>$this->output->url . '/groups/' . $this->response->id . '/reports', 'description'=>'The Reports available to this group'));
        $this->response->status = "success";
        unset($this->response->data[0]->group_display_sql);
        unset($this->response->data[0]->group_padded_name);
        echo json_encode($this->response);
        if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
            header('Content-Type: application/x-resource+json');
            header('HTTP/1.1 200 OK');
        } else {
            print_r($this->response);
        }
    }

    public function groupDevices()
    {
        $this->response->function = 'groupDevices';
        // return the list of devices in this group
        $this->m_api->groupDevices($this->response);
        $this->response->status = "success";
        #foreach ($this->response->data as &$device) {
        #    $device->man_ip_address = ip_address_from_db($device->man_ip_address);
        #    $device->links = array(array('rel'=>'device', 'href'=> $this->output->url . '/devices/' . $device->system_id, 'description'=>'The details of this device.'));
        #}
        echo json_encode($this->response);
        header('Content-Type: application/json');
        header('HTTP/1.1 200 OK');
    }

    public function groupDevice()
    {

    }

    public function groupReports()
    {
        $this->response->function = 'groupReports';
        // return the list of reports
        $this->response->data = $this->m_oa_report->list_reports_in_menu();
        foreach ($this->response->data as &$report) {
            $report->links = array(array('rel'=>'report', 'href'=> $this->output->url . '/groups/' . $this->response->input['id'] . '/reports/' . $report->report_id, 'description'=>'Run this report on this group.'));
            unset($report->report_url);
        }
        $this->response->status = "success";
        $this->response->total = count($this->response->data);
        $this->response->filtered = count($this->response->data);
        if ($this->response->length == 0) {
            $this->response->length = $this->response->filtered;
        }
        echo json_encode($this->response);
        header('Content-Type: application/json');
        header('HTTP/1.1 200 OK');
    }

    public function groupReport()
    {
        $this->response->function = 'groupReport';
        // return the list of reports
        $this->response->report_id = intval($this->uri->segment(5));
        $this->m_api->groupReport(@$this->response);
        $this->response->status = "success";
        $this->response->filtered = count($this->response->data);
        #$this->filterIp(@$this->response);
        echo json_encode($this->response);
        header('Content-Type: application/json');
        header('HTTP/1.1 200 OK');
    }










    public function groupsPost()
    {
        $this->response->status = 'success';
        header('Content-Type: application/x-collection+json');
    }









    public function reportsGet()
    {
        // return the list of reports
        $this->groupAccess();
        $this->load->model('m_oa_report');
        $this->response->data = $this->m_oa_report->list_reports_in_menu();
        foreach ($this->response->data as &$report) {
            $report->links = array(array('rel'=>'report', 'href'=> $this->output->url . '/reports/' . $report->report_id . '/groups/' . $this->response->input['group_id'], 'description'=>'Run this report on this group.'));
            unset($report->report_url);
        }
        $this->response->status = "success";
        $this->response->total = count($this->response->data);
        $this->response->filtered = count($this->response->data);
        if ($this->response->length == 0) {
            $this->response->length = $this->response->filtered;
        }
        echo json_encode($this->response);
        header('Content-Type: application/json');
        header('HTTP/1.1 200 OK');
    }

    private function groupAccess()
    {
        if (isset($this->response->input['group_id']) and $this->response->input['group_id'] != '' and is_numeric($this->response->input['group_id'])) {
            $this->load->model('m_oa_group');
            $access_level = $this->m_oa_group->get_group_access($this->response->input['group_id'], $this->user->user_id);
            if ($access_level < 1) {
                if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
                    $this->response = new stdClass();
                    $this->response->status = "fail";
                    $this->response->message = "No group access";
                    echo json_encode($this->response);
                    header('Content-Type: application/json');
                    header('HTTP/1.1 401 Not Authorised');
                } else {
                    redirect('main/list_groups');
                }
            }
        }
    }

    private function filterIp($response)
    {
        # filter the ip address
        $count = 0;
        foreach ($response->data as $row) {
            foreach ($row as $key => $value) {
                if (strpos($key, 'ip_address') !== false) {
                    $response->data[$count]->$key = $this->ip_address_from_db($value);
                }
            }
            $count++;
        }
    }
}
