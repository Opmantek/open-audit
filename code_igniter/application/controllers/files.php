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
@version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class files extends MY_Controller
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
        $this->load->model('m_files');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
    }

    public function index()
    {
    }

    public function _remap()
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
        $this->response->data = $this->m_files->collection();
        $this->response->filtered = count($this->response->data);
        output($this->response);
    }

    private function read()
    {
        $this->response->data = $this->m_files->read();
        $this->response->filtered = count($this->response->data);
        output($this->response);
    }

    private function create_form()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        $this->load->model('m_orgs');
        $this->response->orgs = $this->m_orgs->collection();
        output($this->response);
    }

    private function create()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        $this->response->id = $this->m_files->create();
        if (!empty($this->response->id)) {
            redirect('/files');
        } else {
            log_error('ERR-0009');
            output($this->response);
            exit();
        }
    }

    private function update_form()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        $this->response->data = $this->m_files->read();
        output($this->response);
    }

    private function update()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        $this->m_files->update();
        if ($this->response->format == 'json') {
            output($this->response);
        } else {
            redirect('files');
        }
    }

    private function delete()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        $this->m_files->delete();
        if ($this->response->format == 'json') {
            output($this->response);
        } else {
            redirect('files');
        }
    }

    # not implemented
    private function execute()
    {
        $this->response->format = 'json';
        $this->response->debug = true;
        output($this->response);
    }

    # not implemented
    private function bulk_update_form()
    {
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


}