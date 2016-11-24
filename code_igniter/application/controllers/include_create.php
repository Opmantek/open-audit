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


$this->response->meta->id = $this->{'m_'.$this->response->meta->collection}->create();
if (! empty($this->response->meta->id)) {
    if ($this->response->meta->format === 'json') {
        $this->response->data = $this->{'m_'.$this->response->meta->collection}->read();
        output($this->response);
    } else {
        $this->response->meta->flash = new stdClass();
        $this->response->meta->flash->status = 'success';
        $this->response->meta->flash->message = 'New object in ' . $this->response->meta->collection . ' created.';
        $this->response->meta->action = 'collection';
        include 'include_collection.php';
    }
} else {
    if ($this->response->meta->format === 'json') {
        output($this->response);
    } else {
        $this->response->meta->flash = new stdClass();
        $this->response->meta->flash->status = 'danger';
        $this->response->meta->flash->message = @$this->response->errors[0]->detail;
        unset($this->response->errors);
        $this->response->meta->action = 'collection';
        include 'include_collection.php';
    }
    exit();
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