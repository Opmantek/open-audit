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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class credentials extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        stdlog();

        # ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($_SERVER['REQUEST_URI'], '/') === strlen($_SERVER['REQUEST_URI'])-1) {
            redirect(uri_string());
        }

        $this->load->helper('input');
        $this->load->helper('output');
        $this->load->helper('error');
        $this->load->model('m_credentials');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
    }

    public function index()
    {
    }

    public function _remap()
    {
        if (!empty($this->response->meta->action)) {
            $this->{$this->response->meta->action}();
        } else {
            $this->collection();
        }
        exit();
    }

    private function collection()
    {
        $this->response->data = $this->m_credentials->collection();
        $this->response->meta->filtered = count($this->response->data);
        output($this->response);
    }

    private function read()
    {
        $this->response->data = $this->m_credentials->read();
        $this->response->meta->filtered = count($this->response->data);
        output($this->response);
    }

    private function delete()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        if ($this->m_credentials->delete()) {
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->collection;
            $this->response->data[] = $temp;
            unset($temp);
        } else {
            log_error('ERR-0013');
        }
        if ($this->response->meta->format == 'json') {
            output($this->response);
        } else {
            redirect($this->response->collection);
        }
    }

    private function create_form()
    {
        output($this->response);
    }

    private function create()
    {
        $this->response->meta->id = $this->m_credentials->create();
        if (!empty($this->response->meta->id)) {
            if ($this->response->meta->format == 'json') {
                $this->response->data = $this->m_credentials->read();
                output($this->response);
            } else {
                redirect('/credentials');
            }
        } else {
            log_error('ERR-0009');
            output($this->response);
            exit();
        }
    }

    private function update_form()
    {
        $this->response->data = $this->m_credentials->read();
        output($this->response);
    }

    private function update()
    {
        $this->m_credentials->update();
        if ($this->response->meta->format == 'json') {
            $this->response->data = $this->m_credentials->read();
            output($this->response);
        } else {
            redirect('credentials');
        }
    }

}