<?php
/**
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
*
* PHP version 5.3.3
* 
* @category  Controller
* @package   All
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/
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
$this->response->included = array_merge($this->response->included, $this->m_orgs->collection($this->user->id));

# applications
if ($collection == 'applications') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
}

# attributes
if ($this->response->meta->collection == 'attributes') {
}

# buildings
if ($this->response->meta->collection == 'buildings') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
}

// clusters
if ($collection === 'clusters') {
    $this->load->model('m_attributes');
    $attributes = $this->m_attributes->collection($this->user->id);
    foreach ($attributes as $attribute) {
        if ($attribute->attributes->resource === 'devices' && $attribute->attributes->type === 'environment') {
            $this->response->included[] = $attribute;
        }
    }
}

# connections
if ($collection == 'connections') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
}

# credentials
if ($collection == 'credentials') {
}

# dashboards
if ($collection == 'dashboards') {
    $this->load->model('m_widgets');
    $this->response->included = array_merge($this->response->included, $this->m_widgets->collection($this->user->id));
}

# database (not used)
if ($collection == 'database') {
}

# discoveries
if ($collection == 'discoveries') {
    $this->load->model('m_collectors');
    $this->response->included = array_merge($this->response->included, $this->m_collectors->collection($this->user->id));
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));

}

# fields
if ($collection == 'fields') {
        $this->load->model('m_groups');
        $this->response->included = array_merge($this->response->included, $this->m_groups->collection($this->user->id));
}

# floors
if ($this->response->meta->collection == 'floors') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection($this->user->id));
}

# groups
if ($this->response->meta->collection == 'groups') {
}

# integrations
if ($collection == 'integrations') {
    $this->load->model('m_queries');
    $this->response->included = array_merge($this->response->included, $this->m_queries->collection($this->user->id));
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
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
}

# logs
if ($this->response->meta->collection == 'logs') {
}

# nmis
if ($collection == 'nmis') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
}

# orgs
if ($collection == 'orgs') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
}

# queries
if ($collection == 'queries') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
}

# roles
if ($collection == 'roles') {
}

# racks
if ($this->response->meta->collection == 'racks') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection($this->user->id));
    $this->load->model('m_floors');
    $this->response->included = array_merge($this->response->included, $this->m_floors->collection($this->user->id));
    $this->load->model('m_rooms');
    $this->response->included = array_merge($this->response->included, $this->m_rooms->collection($this->user->id));
    $this->load->model('m_rows');
    $this->response->included = array_merge($this->response->included, $this->m_rows->collection($this->user->id));
}

# rack_devices
if ($this->response->meta->collection == 'rack_devices') {
    $this->load->model('m_racks');
    $this->response->included = array_merge($this->response->included, $this->m_racks->collection($this->user->id));
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
}

# rooms
if ($this->response->meta->collection == 'rooms') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection($this->user->id));
    $this->load->model('m_floors');
    $this->response->included = array_merge($this->response->included, $this->m_floors->collection($this->user->id));
}

# rows
if ($this->response->meta->collection == 'rows') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->user->id));
    $this->load->model('m_buildings');
    $this->response->included = array_merge($this->response->included, $this->m_buildings->collection($this->user->id));
    $this->load->model('m_floors');
    $this->response->included = array_merge($this->response->included, $this->m_floors->collection($this->user->id));
    $this->load->model('m_rooms');
    $this->response->included = array_merge($this->response->included, $this->m_rooms->collection($this->user->id));
}

# scripts
if ($collection == 'scripts') {
        $this->load->model('m_files');
        $this->response->included = array_merge($this->response->included, $this->m_files->collection($this->user->id));
}

# summaries
if ($collection == 'summaries') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection($this->user->id));
}

# tasks
if ($collection == 'tasks') {
    $this->load->model('m_baselines');
    $this->response->included = array_merge($this->response->included, $this->m_baselines->collection($this->user->id));
    $this->load->model('m_collectors');
    $this->response->included = array_merge($this->response->included, $this->m_collectors->collection($this->user->id));
    $this->load->model('m_clouds');
    $this->response->included = array_merge($this->response->included, $this->m_clouds->collection($this->user->id));
    $this->load->model('m_discoveries');
    $this->response->included = array_merge($this->response->included, $this->m_discoveries->collection($this->user->id));
    $this->load->model('m_groups');
    $this->response->included = array_merge($this->response->included, $this->m_groups->collection($this->user->id));
    $this->load->model('m_integrations');
    $this->response->included = array_merge($this->response->included, $this->m_integrations->collection($this->user->id));
    $this->load->model('m_queries');
    $this->response->included = array_merge($this->response->included, $this->m_queries->collection($this->user->id));
    $this->load->model('m_summaries');
    $this->response->included = array_merge($this->response->included, $this->m_summaries->collection($this->user->id));
}

if ($collection == 'users') {
        $this->load->model('m_roles');
        $this->response->included = array_merge($this->response->included, $this->m_roles->collection($this->user->id));
        $this->load->model('m_dashboards');
        $this->response->included = array_merge($this->response->included, $this->m_dashboards->collection($this->user->id));
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