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
class scripts extends MY_Controller
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
        $this->load->model('m_scripts');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
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
        $this->response->data = $this->m_scripts->collection();
        $this->response->meta->filtered = count($this->response->data);
        output($this->response);
    }

    private function read()
    {
        # Only admin's
        if ($this->user->admin != 'y') {
            log_error('ERR-0008');
            output($this->response);
            exit();
        }
        $this->response->data = $this->m_scripts->read();
        $this->response->meta->filtered = count($this->response->data);
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
        $this->response->data = array();
        $temp = new stdClass();
        $temp->type = $this->response->meta->collection;
        $this->response->data[] = $temp;
        unset($temp);
        # include our scripts options
        include 'include_scripts_options.php';
        $this->response->included = array();
        foreach ($options as $item) {
            $option = new stdClass();
            $option->id = $item->name;
            $option->type = 'option';
            $option->attributes = $item;
            $this->response->included[] = $option;
            unset($option);
        }
        foreach ($options_scripts as $key => $value) {
            $option = new stdClass();
            $option->id = $key;
            $option->type = 'script_option';
            $option->attributes = $value;
            $this->response->included[] = $option;
            unset($option);
        }
        # Include a list of Orgs
        $this->load->model('m_orgs');
        $temp = $this->m_orgs->collection();
        if (!empty($temp)) {
            $this->response->included = array_merge($this->response->included, $temp);
        }
        # Include our list of files
        $this->load->model('m_files');
        unset($temp);
        $temp = @$this->m_files->collection();
        if (!empty($temp)) {
            $this->response->included = array_merge($this->response->included, $temp);
        }
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
        $this->response->meta->id = $this->m_scripts->create();
        if (!empty($this->response->meta->id)) {
            if ($this->response->meta->format == 'json') {
                $this->response->data = $this->m_scripts->read();
                output($this->response);
            } else {
                redirect('scripts');
            }
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
        $this->response->data = $this->m_scripts->read();
        $this->load->model('m_files');
        $this->response->data['files'] = $this->m_files->collection();
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
        $this->m_scripts->update();
        if ($this->response->meta->format == 'json') {
            $this->response->data = $this->m_scripts->read();
            output($this->response);
        } else {
            redirect('scripts');
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
        # do not allow deletion of default Scripts
        $script = $this->m_scripts->read();
        if ($script[0]->attributes->name == $script[0]->attributes->based_on) {
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            log_error('ERR-0014');
            if ($this->response->meta->format == 'json') {
                output($this->response);
            } else {
                redirect($this->response->meta->collection);
            }
            exit();
        }
        if ($this->m_scripts->delete()) {
            $this->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
        } else {
            log_error('ERR-0013');
        }
        if ($this->response->meta->format == 'json') {
            output($this->response);
        } else {
            redirect($this->response->meta->collection);
        }
    }

    private function download()
    {
        $this->response->meta->format = 'json';
        $script = $this->m_scripts->download($this->response->meta->id);
        $script_details = $this->m_scripts->read($this->response->meta->id);
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=' . $script_details[0]->attributes->name);
        if ($script_details[0]->attributes->based_on == 'audit_windows.vbs') {
            header("Content-Type: text/vbscript");
        } else {
            header("Content-Type: application/x-sh");
        }
        
        header('Content-Transfer-Encoding: binary');
        echo $script;
    }
}