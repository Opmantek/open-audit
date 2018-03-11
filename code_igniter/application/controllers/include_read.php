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
    if ($this->response->meta->format === 'json') {
        output($this->response);
    } else {
        redirect($this->response->meta->collection);
    }
}

# all
$this->load->model('m_orgs');
$this->response->included = array_merge($this->response->included, $this->m_orgs->collection());

# attributes
if ($this->response->meta->collection == 'attributes') {
}

# configuration
if ($this->response->meta->collection == 'configuration') {
}

# connections
if ($this->response->meta->collection == 'connections') {
}

# credentials
if ($this->response->meta->collection == 'credentials') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->response->meta->id));
}

# dashboards
if ($this->response->meta->collection == 'dashboards') {
    $this->response->included = array_merge($this->response->included, $this->m_dashboards->read_sub_resource($this->response->meta->id));
}

# database
if ($this->response->meta->collection == 'database') {
    if ($this->response->meta->format == 'screen') {
        $table = $this->response->meta->id;
        if ($table === 'devices') {
            $table = 'system';
        }
        include 'include_dictionary.php';
        $this->response->dictionary = $dictionary;
        unset($dictionary);
    }
}

# discoveries
if ($this->response->meta->collection == 'discoveries') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->response->meta->id));
    $this->response->included = array_merge($this->response->included, $this->m_discoveries->read_sub_resource($this->response->meta->id));
}

# fields
if ($this->response->meta->collection == 'fields') {
    $this->load->model('m_groups');
    $this->response->included = array_merge($this->response->included, $this->m_groups->collection());
}

# groups
if ($this->response->meta->collection == 'groups') {
}

# ldap_servers
if ($this->response->meta->collection == 'ldap_servers') {
}

if ($this->response->meta->collection == 'licenses') {
    $this->load->model('m_licenses');
    $temp = $this->m_licenses->execute();
    $this->response->included = array_merge($this->response->included, $temp);
    $this->response->data[0]->attributes->used_count = intval(count($temp));
}

# locations
if ($this->response->meta->collection == 'locations') {
}

# locations
if ($this->response->meta->collection == 'logs') {
}

# networks
if ($this->response->meta->collection == 'networks') {
}

# orgs
if ($this->response->meta->collection == 'orgs') {
    $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->parent_id));
}

# queries
if ($this->response->meta->collection == 'queries') {
}

# scripts
if ($this->response->meta->collection == 'scripts') {
        $this->load->model('m_files');
        $this->response->included = array_merge($this->response->included, $this->m_files->collection());
}

# summaries
if ($this->response->meta->collection == 'summaries') {
}

# tasks
if ($this->response->meta->collection == 'tasks') {
    $this->load->model('m_collection');
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('collectors'));
}

# roles
if ($this->response->meta->collection == 'roles') {
    $this->response->included = array_merge($this->response->included, $this->m_roles->read_sub_resource($this->response->meta->id));
}

# users
if ($this->response->meta->collection == 'users') {
    $this->load->model('m_roles');
    $this->response->included = array_merge($this->response->included, $this->m_roles->collection());
    if (!empty($this->response->data[0]->attributes)) {
        $this->response->data[0]->attributes->org_list = implode(',', $this->m_users->get_orgs($this->response->meta->id));
    }
}

output($this->response);

$log = new stdClass();
$log->object = $this->response->meta->collection;
$log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
$log->severity = 7;
$log->status = 'finish';
$log->type = 'access';
if ($this->config->config['log_level'] == 7) {
    $log->detail = json_encode($this->response->meta);
}
stdLog($log);
