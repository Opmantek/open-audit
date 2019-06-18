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
$timer_start = microtime(true);
$this->response->data = array();
$temp = new stdClass();
$temp->type = $this->response->meta->collection;
$this->response->data[] = $temp;
unset($temp);

$table = $this->response->meta->collection;
include 'include_dictionary.php';
$this->response->dictionary = $dictionary;

$collection = $this->response->meta->collection;

# All
$this->load->model('m_orgs');
$this->response->included = array_merge($this->response->included, $this->m_orgs->collection());

# applications
if ($collection == 'applications') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# attributes
if ($this->response->meta->collection == 'attributes') {
}

# buildings
if ($this->response->meta->collection == 'buildings') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

# connections
if ($collection == 'connections') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

# credentials
if ($collection == 'credentials') {
}

# dashboards
if ($collection == 'dashboards') {
    $this->load->model('m_widgets');
    $this->response->included = array_merge($this->response->included, $this->m_widgets->collection());
}

# database (not used)
if ($collection == 'database') {
}

# discoveries
if ($collection == 'discoveries') {
    $this->load->model('m_collection');
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('collectors'));
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

# fields
if ($collection == 'fields') {
        $this->load->model('m_groups');
        $this->response->included = array_merge($this->response->included, $this->m_groups->collection());
}

# floors
if ($this->response->meta->collection == 'floors') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection());
}

# groups
if ($this->response->meta->collection == 'groups') {
}

# integrations
if ($collection == 'integrations') {
    $this->load->model('m_queries');
    $this->response->included = array_merge($this->response->included, $this->m_queries->collection());
}

# ldap_servers
if ($this->response->meta->collection == 'ldap_servers') {
}

# licenses
if ($this->response->meta->collection == 'licenses') {
}

# locations
if ($collection == 'locations') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# logs
if ($this->response->meta->collection == 'logs') {
}

# nmis
if ($collection == 'nmis') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

# orgs
if ($collection == 'orgs') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# queries
if ($collection == 'queries') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# roles
if ($collection == 'roles') {
}

# racks
if ($this->response->meta->collection == 'racks') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection());
    $this->load->model('m_floors');
    $this->response->included = array_merge($this->response->included, $this->m_floors->collection());
    $this->load->model('m_rooms');
    $this->response->included = array_merge($this->response->included, $this->m_rooms->collection());
    $this->load->model('m_rows');
    $this->response->included = array_merge($this->response->included, $this->m_rows->collection());
}

# rack_devices
if ($this->response->meta->collection == 'rack_devices') {
    $this->load->model('m_racks');
    $this->response->included = array_merge($this->response->included, $this->m_racks->collection());
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# rooms
if ($this->response->meta->collection == 'rooms') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection());
    $this->load->model('m_floors');
    $this->response->included = array_merge($this->response->included, $this->m_floors->collection());
}

# rows
if ($this->response->meta->collection == 'rows') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection());
    $this->load->model('m_floors');
    $this->response->included = array_merge($this->response->included, $this->m_floors->collection());
    $this->load->model('m_rooms');
    $this->response->included = array_merge($this->response->included, $this->m_rooms->collection());
}

# scripts
if ($collection == 'scripts') {
        $this->load->model('m_files');
        $this->response->included = array_merge($this->response->included, $this->m_files->collection());
}

# summaries
if ($collection == 'summaries') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# tasks
if ($collection == 'tasks') {
    $this->load->model('m_collection');
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('collectors'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('clouds'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('discoveries'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('groups'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('integrations'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('queries'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('summaries'));
    #$this->load->model('m_reports');
    #$this->response->included = array_merge($this->response->included, $this->m_reports->collection());
}

if ($collection == 'users') {
        $this->load->model('m_roles');
        $this->response->included = array_merge($this->response->included, $this->m_roles->collection());
        $this->load->model('m_dashboards');
        $this->response->included = array_merge($this->response->included, $this->m_dashboards->collection());
}

$timer_end = microtime(true);
$entry = new stdClass();
$entry->time = ($timer_end - $timer_start);
$entry->detail = 'include_create_form::create_form';
$entry->time_now = time();
$GLOBALS['timer_log'][] = $entry;

unset($collection);
output($this->response);

$log = new stdClass();
$log->object = $this->response->meta->collection;
$log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action); 
$log->severity = 7;
$log->status = 'success';
$log->summary = 'finish';
$log->type = 'access';
if ($this->config->config['log_level'] == 7) {
    $log->detail = json_encode($this->response->meta);
}
stdLog($log);