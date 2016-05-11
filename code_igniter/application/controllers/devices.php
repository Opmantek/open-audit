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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class devices extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);

        # ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($_SERVER['REQUEST_URI'], '/') === strlen($_SERVER['REQUEST_URI'])-1) {
            redirect(uri_string());
        }

        $this->load->helper('network');
        $this->load->helper('output');
        $this->load->helper('error');
        $this->load->helper('input');
        $this->load->model('m_devices');
        $this->load->model('m_orgs');

        $this->response = new stdClass();
        inputRead();

        $this->response->total = 0;
        $this->response->filtered = 0;
        if ($this->response->format == 'screen') {
            $this->response->heading = 'Devices';
            $this->response->include = 'v_devices';
        }
        $this->output->url = $this->config->item('oa_web_index');

        if ($this->response->id != '') {
            $access_level = $this->m_devices->get_user_device_org_access();
            if ($access_level < 1) {
                // we should determine if the device does actually exist or not
                // then we can throw the correct status code of 404 or 403
                $sql = "SELECT system_id FROM system WHERE system_id = ?";
                $data = array($this->response->id);
                $query = $this->db->query($sql, $data);
                $result = $query->result();
                if (count($result) == 0) {
                    $this->response->errors[] = getError('ERR-0007');
                } else {
                    $this->response->errors[] = getError('ERR-0008');
                }
                $this->response->header = $this->response->errors[0]->status;
                output($this->response);
                exit();
            }
        }

        // $this->response->format = 'json';
        // $this->response->debug = true;
        // output($this->response);
        // exit();

    }

    public function index()
    {
    }

    public function _remap($method)
    {
        $action = $this->response->action;
        if ($action != '') {
            $this->$action();
        } else {
            $this->collection();
        }
        exit();
    }

    private function collection()
    {
        if ($this->response->sub_resource != '' and $this->response->sub_resource != 'report') {
            $this->response->data = $this->m_devices->read_devices_sub_resource();
        } else if ($this->response->sub_resource != '' and $this->response->sub_resource == 'report') {
            $this->response->data = $this->m_devices->report();
        } else {
            $this->response->data = $this->m_devices->read_devices();
        }
        $this->response->filtered = count($this->response->data);

        output($this->response);
    }

    private function read()
    {
        if ($this->response->sub_resource != '') {
            $this->response->data = $this->m_devices->read_device_sub_resource();
        } else {
            $this->response->data = $this->m_devices->read_device();
        }
        $this->response->filtered = count($this->response->data);
        output($this->response);
    }







    private function create_form()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        output($this->response);
    }

    private function execute()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        output($this->response);
    }

    private function create()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        output($this->response);
    }

    private function update()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        $this->m_devices->update();
        output($this->response);
    }

    private function update_form()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        output($this->response);
    }

    private function bulk_update_form()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        $this->response->id = '';
        $temp_ids = array();
        foreach ($_POST['ids'] as $temp) {
            $temp_ids[] = $temp;
        }
        $this->response->id = implode(',', $temp_ids);
        output($this->response);
    }

    private function delete()
    {
        #$this->error->controller .= '::'.__FUNCTION__;
        $this->response->format = 'json';
        $this->response->debug = true;
        output($this->response);
    }
}