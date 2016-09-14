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


$this->response->data = $this->{'m_'.$this->response->meta->collection}->read();
$this->response->meta->filtered = count($this->response->data);
if (count($this->response->data) == 0) {
    log_error('ERR-0002', $this->response->meta->collection . ':read');
    $this->session->set_flashdata('error', 'No object could be retrieved when ' . $this->response->meta->collection . ' called update.');
}
$collection = $this->response->meta->collection;
if ($collection == 'credentials' or
    $collection == 'connections' or
    $collection == 'dashboards' or
    $collection == 'discoveries' or
    $collection == 'fields' or
    $collection == 'files' or
    $collection == 'licenses' or
    $collection == 'locations' or
    $collection == 'networks' or
    $collection == 'orgs' or
    $collection == 'queries' or
    $collection == 'scripts' or
    $collection == 'users') {
    $this->load->model('m_orgs');
    $this->response->included = array_merge($this->response->included, $this->m_orgs->collection());
}

if ($collection == 'connections' or
    $collection == 'discoveries') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

if ($collection == 'fields') {
    $this->load->model('m_groups');
    $this->response->included = array_merge($this->response->included, $this->m_groups->collection());
}

if ($collection == 'scripts') {
    $this->load->model('m_files');
    $this->response->included = array_merge($this->response->included, $this->m_files->collection());
}

if ($collection == 'users') {
    $this->load->model('m_roles');
    $this->response->included = array_merge($this->response->included, $this->m_roles->collection());
}

unset($collection);

if ($this->response->meta->format === 'json') {
    output($this->response);
} else {
    if (count($this->response->data) == 0) {
        redirect($this->response->meta->collection);
    } else {
        output($this->response);
    }
}
