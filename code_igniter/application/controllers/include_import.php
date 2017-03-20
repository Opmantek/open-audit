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

$this->load->model('m_users');
$this->load->helper('file');
$this->load->helper('log');
$this->load->helper('error');
if ($this->response->meta->collection !== 'devices') {
    $this->load->model('m_collection');
} else {
    $this->load->model('m_devices');
}

$this->response->meta->flash = new stdClass();
$this->response->meta->flash->status = '';
$this->response->meta->flash->message = '';

$csv = @array_map('str_getcsv', file($_FILES['file_import']['tmp_name']));
if (!$csv) {
    log_error('ERR-0011');
    if ($this->response->meta->format === 'json') {
        output($this->response);
    } else {
        redirect($this->response->meta->collection);
    }
    exit();
}
$header = $csv[0];
unset($csv[0]);
$this->response->data = array();
$flashdata_success = '';
$flashdata_error = '';
$count_all = 0;
$count_good = 0;
$count_bad = 0;
$count_update = 0;
$count_create = 0;
foreach ($csv as $key => $value) {
    $item = new stdClass();
    for ($i=0; $i < count($value); $i++) {
        $item->{$header[$i]} = $value[$i];
    }
    $item->org_id = @intval($item->org_id);
    if ($item->org_id === 0 and $this->response->meta->collection != 'roles') {
        log_error('ERR-0011');
        break;
    } else {
        // Check user is auth on org_id
        $test = false;
        $count_all += 1;

        if ($this->response->meta->collection === 'roles') {
            $test = $this->m_users->has_role('admin');

        } elseif ($this->response->meta->collection !== 'roles' and $this->response->meta->collection !== 'orgs') {
            $test = $this->m_users->user_org($item->org_id);

        } elseif ($this->response->meta->collection === 'orgs') {
            $test = $this->m_users->user_org($item->parent_id);
        }

        if ($test === false) {
            $count_bad += 1;
        } else {
            $test = false;
            if (!empty($item->id)) {
                # UPDATE
                $id = $item->id;
                if ($this->response->meta->collection !== 'devices') {
                    $test = $this->{'m_collection'}->update($item, $this->response->meta->collection);
                } else {
                    $test = $this->{'m_devices'}->update($item, $this->response->meta->collection);
                }
                if ($test !== false) {
                    $count_update += 1;
                }
            } else {
                # CREATE
                if ($this->response->meta->collection !== 'devices') {
                    $test = $this->{'m_collection'}->create($item, $this->response->meta->collection);
                } else {
                    $test = $this->{'m_devices'}->create($item, $this->response->meta->collection);
                }
                if ($test !== false) {
                    $count_create += 1;
                    $id = $test;
                }
            }
            if ($test !== false) {
                $this->response->data = array_merge($this->response->data, $this->{'m_'.$this->response->meta->collection}->read($id));
            } else {
                $count_bad += 1;
            }
        }
    }
}

$flash_message = 'Total <strong>' . $this->response->meta->collection . '</strong> uploaded: ' . $count_all . '<br />';
$flash_message .= 'Total Created: ' . $count_create . '<br />';
$flash_message .= 'Total Updated: ' . $count_update . '<br />';
$flash_message .= 'Total Errors: ' . $count_bad;
if ($count_bad !== 0) {
    $flash_message .= '<br />Check your user has permission on the supplied organisation and/or the supplied ' . $this->response->meta->collection . ' id exists.';
}
if ($count_bad === 0) {
    $flash_status = 'success';
} else {
    $flash_status = 'danger';
}
$this->session->set_flashdata('success','');
$this->session->set_flashdata($flash_status, $flash_message);

$this->response->meta->flash->status = $flash_status;
$this->response->meta->flash->message = $flash_message;

if ($this->response->meta->format === 'json') {
    output($this->response);
} else {
    redirect($this->response->meta->collection);
    #$this->response->meta->collection = 'collection';
    #output($this->response);
}

$log = new stdClass();
$log->object = $this->response->meta->collection;
$log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
if ($this->config->config['log_level'] < 6) {
    $log->severity = 5;
    $log->status = 'finish';
    $log->type = 'access';
} else {
    $log->severity = 5;
    $log->status = 'finish';
    $log->detail = json_encode($this->response->meta); 
}
stdLog($log);
