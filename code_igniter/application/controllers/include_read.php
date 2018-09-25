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
$this->response->data = $this->{'m_'.$this->response->meta->collection}->read($this->response->meta->id);
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

$table = $this->response->meta->collection;
if ($table == 'database') {
    $table = $this->response->meta->id;
}
include 'include_dictionary.php';
$this->response->dictionary = $dictionary;

$collection = $this->response->meta->collection;

# All
$this->load->model('m_orgs');
$org_id = 1;
if ($this->response->meta->format != 'screen') {
    if (!empty($this->response->data[0]->attributes->org_id)) {
        $org_id = $this->response->data[0]->attributes->org_id;
    }
    $this->response->included = array_merge($this->response->included, $this->m_orgs->read($org_id));
} else {
    $this->response->included = array_merge($this->response->included, $this->m_orgs->collection());
}


# applications
if ($this->response->meta->collection == 'applications') {
    $this->load->model('m_applications');
    # Associated devices
    $this->response->included = array_merge($this->response->included, $this->m_applications->read_sub_resource($this->response->meta->id));
}

# attributes
if ($this->response->meta->collection == 'attributes') {
}


# buildings
if ($this->response->meta->collection == 'buildings') {
    $this->load->model('m_floors');
    $this->load->model('m_rooms');
    $this->load->model('m_rows');
    $this->load->model('m_racks');

    $floors = $this->m_floors->collection($this->response->meta->id);
    $this->response->included = array_merge($this->response->included, $floors);

    if (!empty($floors)) {
        $temp = array();
        foreach ($floors as $floor) {
            $temp[] = $floor->id;
        }
        $temp = implode(',', $temp);
        $rooms = $this->m_rooms->collection($temp);
        $this->response->included = array_merge($this->response->included, $rooms);
        unset($temp);
    }


    if (!empty($rooms)) {
        $temp = array();
        foreach ($rooms as $room) {
            $temp[] = $room->id;
        }
        $temp = implode(',', $temp);
        $rows = $this->m_rows->collection($temp);
        $this->response->included = array_merge($this->response->included, $rows);
        unset($temp);
    }

    if (!empty($rows)) {
        $temp = array();
        foreach ($rows as $row) {
            $temp[] = $row->id;
        }
        $temp = implode(',', $temp);
        $racks = $this->m_racks->collection($temp);
        $this->response->included = array_merge($this->response->included, $racks);
        unset($temp);
    }
}

# collectors
if ($this->response->meta->collection == 'collectors') {
}

# configuration
if ($this->response->meta->collection == 'configuration') {
}

# connections
if ($this->response->meta->collection == 'connections') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

# credentials
if ($this->response->meta->collection == 'credentials') {
}

# dashboards
if ($this->response->meta->collection == 'dashboards') {
    $this->load->model('m_widgets');
    $this->response->included = array_merge($this->response->included, $this->m_widgets->collection());
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
    $this->load->model('m_collection');
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('collectors'));
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection($this->response->meta->id));
    # The discovery log
    $this->response->included = array_merge($this->response->included, $this->m_discoveries->read_sub_resource($this->response->meta->id));
}

# fields
if ($this->response->meta->collection == 'fields') {
    $this->load->model('m_groups');
    $this->response->included = array_merge($this->response->included, $this->m_groups->collection());
}

# floors
if ($this->response->meta->collection == 'floors') {
    $this->load->model('m_rooms');
    $this->load->model('m_rows');
    $this->load->model('m_racks');

    $rooms = $this->m_rooms->collection($this->response->meta->id);
    $this->response->included = array_merge($this->response->included, $rooms);

    if (!empty($rooms)) {
        $temp = array();
        foreach ($rooms as $room) {
            $temp[] = $room->id;
        }
        $temp = implode(',', $temp);
        $rows = $this->m_rows->collection($temp);
        $this->response->included = array_merge($this->response->included, $rows);
        unset($temp);
    }

    if (!empty($rows)) {
        $temp = array();
        foreach ($rows as $row) {
            $temp[] = $row->id;
        }
        $temp = implode(',', $temp);
        $racks = $this->m_racks->collection($temp);
        $this->response->included = array_merge($this->response->included, $racks);
        unset($temp);
    }
}

# groups
if ($this->response->meta->collection == 'groups') {
}

# ldap_servers
if ($this->response->meta->collection == 'ldap_servers') {
}

# licenses
if ($this->response->meta->collection == 'licenses') {
    $this->load->model('m_licenses');
    $temp = $this->m_licenses->execute();
    $this->response->included = array_merge($this->response->included, $temp);
    $this->response->data[0]->attributes->used_count = intval(count($temp));
}

# locations
if ($this->response->meta->collection == 'locations') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection('locations'));
    $this->load->model('m_buildings');
    $this->load->model('m_floors');
    $this->load->model('m_rooms');
    $this->load->model('m_rows');
    $this->load->model('m_racks');
    $buildings = $this->m_buildings->collection($this->response->meta->id);
    $this->response->included = array_merge($this->response->included, $buildings);

    if (!empty($buildings)) {
        $temp = array();
        foreach ($buildings as $building) {
            $temp[] = $building->id;
        }
        $temp = implode(',', $temp);
        $floors = $this->m_floors->collection($temp);
        $this->response->included = array_merge($this->response->included, $floors);
        unset($temp);
    }


    if (!empty($floors)) {
        $temp = array();
        foreach ($floors as $floor) {
            $temp[] = $floor->id;
        }
        $temp = implode(',', $temp);
        $rooms = $this->m_rooms->collection($temp);
        $this->response->included = array_merge($this->response->included, $rooms);
        unset($temp);
    }


    if (!empty($rooms)) {
        $temp = array();
        foreach ($rooms as $room) {
            $temp[] = $room->id;
        }
        $temp = implode(',', $temp);
        $rows = $this->m_rows->collection($temp);
        $this->response->included = array_merge($this->response->included, $rows);
        unset($temp);
    }

    if (!empty($rows)) {
        $temp = array();
        foreach ($rows as $row) {
            $temp[] = $row->id;
        }
        $temp = implode(',', $temp);
        $racks = $this->m_racks->collection($temp);
        $this->response->included = array_merge($this->response->included, $racks);
        unset($temp);
    }
}

# logs
if ($this->response->meta->collection == 'logs') {
}

# networks
if ($this->response->meta->collection == 'networks') {
}

# nmis
if ($this->response->meta->collection == 'nmis') {
    $this->load->model('m_locations');
    $this->response->included = array_merge($this->response->included, $this->m_locations->collection());
}

# orgs
if ($this->response->meta->collection == 'orgs') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
    $this->response->included = array_merge($this->response->included, $this->m_orgs->read($this->response->data[0]->attributes->parent_id));
}

# queries
if ($this->response->meta->collection == 'queries') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# racks
if ($this->response->meta->collection == 'racks') {
    $this->load->model('m_rack_devices');
    $this->response->included = array_merge($this->response->included, $this->m_rack_devices->collection($this->response->meta->id));
}


# roles
if ($this->response->meta->collection == 'roles') {
    # Associated users
    $this->response->included = array_merge($this->response->included, $this->m_roles->read_sub_resource($this->response->meta->id));
}

# rooms
if ($this->response->meta->collection == 'rooms') {
    $this->load->model('m_rows');
    $this->load->model('m_racks');

    $rows = $this->m_rows->collection($this->response->meta->id);
    $this->response->included = array_merge($this->response->included, $rows);

    if (!empty($rows)) {
        $temp = array();
        foreach ($rows as $row) {
            $temp[] = $row->id;
        }
        $temp = implode(',', $temp);
        $racks = $this->m_racks->collection($temp);
        $this->response->included = array_merge($this->response->included, $racks);
        unset($temp);
    }
}

# scripts
if ($this->response->meta->collection == 'scripts') {
    $this->load->model('m_files');
    $this->response->included = array_merge($this->response->included, $this->m_files->collection());
}

# summaries
if ($this->response->meta->collection == 'summaries') {
    $this->load->model('m_attributes');
    $this->response->included = array_merge($this->response->included, $this->m_attributes->collection());
}

# tasks
if ($this->response->meta->collection == 'tasks') {
    $this->load->model('m_collection');
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('collectors'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('discoveries'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('groups'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('queries'));
    $this->response->included = array_merge($this->response->included, $this->m_collection->collection('summaries'));
}

# users
if ($this->response->meta->collection == 'users') {
    $this->load->model('m_roles');
    $this->response->included = array_merge($this->response->included, $this->m_roles->collection());
    if (!empty($this->response->data[0]->attributes)) {
        $this->response->data[0]->attributes->org_list = implode(',', $this->m_users->get_orgs($this->response->meta->id));
    }
    $this->load->model('m_dashboards');
    $this->response->included = array_merge($this->response->included, $this->m_dashboards->collection());
}

if ($this->m_users->get_user_permission('', $this->response->meta->collection, 'u')) {
    $this->response->edit = true;
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
