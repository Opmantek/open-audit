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
if ($collection !== 'devices') {
    $this->load->model('m_collection');
} else {
    $this->load->model('m_devices');
}

$this->response->meta->flash = new stdClass();
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
foreach ($csv as $key => $value) {
    $item = new stdClass();
    for ($i=0; $i < count($value); $i++) {
        $item->{$header[$i]} = $value[$i];
    }
    $item->org_id = @intval($item->org_id);
    if ($item->org_id == 0 and $this->response->meta->collection != 'orgs') {
        log_error('ERR-0011');
    } else {
        // Check user is auth on org_id
        unset($test);
        if ($this->response->meta->collection != 'orgs') {
            $test = $this->m_users->user_org($item->org_id);
        } else {
            if (!empty($item->parent_id)) {
                $test = $this->m_users->user_org($item->parent_id);
            } else {
                $test = $this->m_users->user_org('1');
            }
        }
        if (!$test) {
            break;
        }
        unset($test);
        unset($id);
        if (!empty($item->id)) {
            $id = $item->id;
            if ($collection !== 'devices') {
                $this->{'m_collection'}->update($item, $this->response->meta->collection);
            } else {
                $this->{'m_devices'}->update($item, $this->response->meta->collection);
            }
        } else {
            if ($collection !== 'devices') {
                $id = $this->{'m_collection'}->create($item, $this->response->meta->collection);
            } else {
                $id = $this->{'m_devices'}->create($item, $this->response->meta->collection);
            }
        }
        if (!empty($id)) {
            // set a flash
            $this->response->meta->flash->status = 'success';
            $this->response->meta->flash->message = 'New object(s) in ' . $this->response->meta->collection . ' created.';
            $this->response->data = array_merge($this->response->data, $this->{'m_'.$this->response->meta->collection}->read($id));
        } else {
            // set an error
            $this->response->meta->flash = new stdClass();
            $this->response->meta->flash->status = 'danger';
            if (!empty($this->response->errors[0]->detail)) {
                $this->response->meta->flash->message = $this->response->errors[0]->detail;
            } else {
                $this->response->meta->flash->message = 'Error creating ' . $this->response->meta->collection;
            }
            #unset($this->response->errors);
        }
    }
}
if ($this->response->meta->format === 'json') {
    #$this->response->data = $this->{'m_'.$this->response->meta->collection}->read();
    output($this->response);
} else {
    #$this->response->meta->action = 'collection';
    #redirect($this->response->meta->collection);
    echo "";
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
