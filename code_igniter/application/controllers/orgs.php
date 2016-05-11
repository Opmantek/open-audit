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
class orgs extends MY_Controller
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
        $this->load->model('m_orgs');

        $this->error = new stdClass();
        $this->error->controller = 'orgs';

        $this->response = new stdClass();
        inputRead();

        $this->response->total = 0;
        $this->response->filtered = 0;
        if ($this->response->format == 'screen') {
            $this->response->heading = 'Orgs';
            $this->response->include = 'v_orgs';
        }
        $this->output->url = $this->config->item('oa_web_index');

#echo "<pre>\n"; print_r($this->response); echo "</pre>\n";
#$this->response->format = 'json';


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
        $this->response->data = $this->m_orgs->read_orgs();
        $this->response->filtered = count($this->response->data);
        output($this->response);
    }

    private function read()
    {
        if ($this->response->sub_resource != '') {
            $this->response->data = $this->m_orgs->read_org_sub_resource();
        } else {
            $this->response->data = $this->m_orgs->read_org();
        }
        $this->response->filtered = count($this->response->data);
        output($this->response);
    }
}