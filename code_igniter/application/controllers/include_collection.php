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
unset($this->response->data);

if ($this->response->meta->collection === 'database' or
    $this->response->meta->collection === 'logs' or
    $this->response->meta->collection === 'roles' or
    $this->response->meta->collection === 'summaries') {
    $this->response->data = $this->{'m_'.$this->response->meta->collection}->collection();
} else {
    $this->load->model('m_collection');
    $this->response->data = $this->m_collection->collection($this->response->meta->collection);
}

$this->response->meta->filtered = count($this->response->data);

if (empty($this->response->meta->total) and !empty($this->response->meta->filtered)) {
    $this->response->meta->total = $this->response->meta->filtered;
}

if ($this->response->meta->collection === 'licenses') {
    if (count($this->response->meta->total) < 100) {
        for ($i=0; $i < count($this->response->data); $i++) {
            $temp = $this->m_licenses->execute($this->response->data[$i]->attributes->id);
            $this->response->data[$i]->attributes->used_count = intval(count($temp));
        }
    }
}

output($this->response);

$log = new stdClass();
$log->object = $this->response->meta->collection;
$log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);

if ($this->config->config['log_level'] < 7) {
    $log->severity = 5;
    $log->status = 'finish';
    $log->type = 'access';
} else {
    $log->severity = 6;
    $log->status = 'finish';
    $log->detail = json_encode($this->response->meta);
}

stdLog($log);
