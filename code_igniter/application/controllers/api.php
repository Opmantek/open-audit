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

        # ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($_SERVER['REQUEST_URI'], '/') === strlen($_SERVER['REQUEST_URI'])-1) {
            redirect(uri_string());
        }

        #$this->load->helper('network');
        #$this->load->helper('output');
        $this->load->helper('error');
        $this->load->helper('input');
        #$this->load->model('m_devices');

        $this->error = new stdClass();
        $this->error->controller = '';

        $this->response = new stdClass();
        inputRead();

        // $this->response->total = 0;
        // $this->response->filtered = 0;
        // if ($this->response->format == 'screen') {
        //     $this->response->heading = 'Devices';
        //     $this->response->include = 'v_devices';
        // }

        // our initial response codes
        // these will change if an error occurs
        // $this->response->header = 'HTTP/1.1 200 OK';
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $this->response->header = 'HTTP/1.1 201 Created';
        // }

        // $this->output->url = $this->config->item('oa_web_index');

        // if ($this->response->id != '') {
        //     $access_level = $this->m_devices->getUserDeviceAccess($this->response->id, $this->user->id);
        //     if ($access_level == 0) {
        //         echo "Insufficient device access.";
        //         exit();
        //     }
        // }
    }

    public function index()
    {
        echo "<pre>\n";
        print_r($this->response);
    }

    public function _remap($method)
    {
        echo "<pre>\n"; print_r($this->response);
        $action = $this->response->action;
        if ($action != '') {
            $this->$action();
        } else {
            $this->collection();
        }
        exit();
    }

    private function read()
    {
        echo "Reading!";
    }

    private function collection()
    {
        echo "Collection!";
    }

    // because we're using JSON API style URLs and not CodeIgniter style
    // JSON style: index.php/{resource}/{id}/{sub_resource}/{sub_resource_id}?{options}
    // CI style: index.php/controller/function/{option name #1}/{option value #1}
    // and because we also need to take the request method (GET/POST/etc) into account (which CodeIgniter does not do)
    // we need to make our own routing table
    // public function _remap($method)
    // {
    //     // the details of this specific device
    //     if ($this->response->id != '' and $this->response->subresource != '') {
    //         $this->readDeviceSubresource();
    //         exit();
    //     }
    //     if ($this->response->subresource != '') {
    //         $this->readDevicesSubresource();
    //         exit();
    //     }
    //     // the details of this specific device
    //     if ($this->response->id != '') {
    //         $this->readDevice($this->response->id);
    //         exit();
    //     }
    //     // the details of this specific group
    //     if ($this->response->action == 'read') {
    //         $this->readDevices();
    //         exit();
    //     }
    // }

    private function readDevices()
    {
        $this->response->data = $this->m_devices->readDevices($this->response->id);
        $this->response->filtered = count($this->response->data);
        $this->response->header = 'HTTP/1.1 200 OK';
        output($this->response);
    }

    private function readDevice()
    {
        $this->response->data = $this->m_devices->readDevice($this->response->id);
        $this->response->total = count($this->response->data);
        unset($this->response->filtered);
        unset($this->response->limit);
        unset($this->response->offset);
        $this->response->include = 'v_display_device';
        $this->response->header = 'HTTP/1.1 200 OK';
        output($this->response);
    }

    private function readDeviceSubresource()
    {
        $this->response->data = $this->m_devices->readDeviceSubresource($this->response->id, $this->response->subresource);
        $this->response->filtered = count($this->response->data);
        $this->response->header = 'HTTP/1.1 200 OK';
        output($this->response);
    }

    private function readDevicesSubresource()
    {
        $this->response->data = $this->m_devices->readDevicesSubresource();
        $this->response->filtered = count($this->response->data);
        $this->response->header = 'HTTP/1.1 200 OK';
        output($this->response);
    }
}