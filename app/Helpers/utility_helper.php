<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

$CI_INSTANCE = [];  # It keeps a ref to global CI instance

function register_ci_instance(\App\Controllers\BaseController &$_ci)
{
    global $CI_INSTANCE;
    $CI_INSTANCE[0] = &$_ci;
}

function &get_instance() # : \App\Controllers\BaseController
{
    global $CI_INSTANCE;
    return $CI_INSTANCE[0];
}

function format_data($result, $type)
{
    if (empty($result)) {
        log_message('debug', 'No data provided to format_data function from '. debug_backtrace()[1]['class'] . '::' . debug_backtrace()[1]['function'] . ' for ' . $type);
        return array();
    }

    $return = array();

    if (! is_array($result)) {
        $item = $result;
        $result = array($item);
    }

    $item = new \stdClass();
    $item->attributes = new \stdClass();
    $item->type = $type;

    # format the attributes
    // $db = \Config\Database::connect();
    // $fields = $db->getFieldData($type);
    // foreach ($result as $entry) {
    //     foreach ($fields as $field) {
    //         if ($field->type === 'int') {
    //             $entry->{$field->name} = intval($entry->{$field->name});
    //         }
    //         if ($field->type === 'longtext') {
    //             $entry->{$field->name} = @json_decode($entry->{$field->name});
    //         }
    //     }
    // }

    // taken from output_helper::output_convert
    $names = array('id', 'free', 'used', 'size', 'speed', 'total', 'col_order', 'access_level', 'count');
    foreach ($result as $item) {
        foreach ($item as $key => $value) {
            $temp = explode('.', $key);
            $column = $temp[0];
            if (in_array($column, $names)) {
                // If we have one of the above named columns, it is an integer
                $item->$key = intval($value);
            } elseif ((strrpos($key, '_id') === strlen($key)-3) or
                        (strrpos($key, '_count') === strlen($key)-6) or
                        (strrpos($key, '_percent') === strlen($key)-8) or
                        (strrpos($key, '_size') === strlen($key)-5)) {
                // If the name of the key ends with any of the above, it is an integer
                $item->$key = intval($value);
            } elseif ((strrpos($key, 'ip') === strlen($key)-2) or
                    (strrpos($key, 'next_hop') === strlen($key)-8) or
                    (strrpos($key, 'destination') === strlen($key)-11)) {
                $temp_name = $key . '_padded';
                $item->$temp_name = ip_address_from_db($value);
                $item->$temp_name = ip_address_to_db($item->$temp_name);
                $item->$key = ip_address_from_db($value);
                if ($item->$temp_name === $item->$key) {
                    unset($item->$temp_name);
                }
            }
            if (strrpos($key, 'system_id') === strlen($key)-9) {
                $item->{'system.id'} = intval($value);
            }
            if (strrpos($key, 'org_id') === strlen($key)-6) {
                $item->{'orgs.id'} = intval($value);
            }
            if (strrpos($key, 'location_id') === strlen($key)-11) {
                $item->{'locations.id'} = intval($value);
            }
        }
    }

    foreach ($result as $item) {
        foreach ($item as $key => $value) {
            if (is_null($value)) {
                $item->$key = '';
            }
        }
    }

    if ($type === 'dashboards') {
        foreach ($result as $item) {
            $item->options = json_decode($item->options);
        }
    }

    if ($type === 'discoveries') {
        foreach ($result as $item) {
            $item->scan_options = json_decode($item->scan_options);
            $item->match_options = json_decode($item->match_options);
        }
    }

    if ($type === 'roles') {
        foreach ($result as $item) {
            $item->permissions = json_decode($item->permissions);
        }
    }

    if ($type === 'rules') {
        foreach ($result as $item) {
            $item->inputs = json_decode($item->inputs);
            $item->outputs = json_decode($item->outputs);
        }
    }

    if ($type === 'tasks') {
        foreach ($result as $item) {
            $item->options = @json_decode($item->options);
        }
    }

    if ($type === 'users') {
        foreach ($result as $item) {
            $item->roles = json_decode($item->roles);
            $item->orgs = json_decode($item->orgs);
        }
    }

    foreach ($result as $entry) {
        $item = new \stdClass();
        $item->id = '';
        if (isset($entry->id) and $entry->id != '') {
            $item->id = intval($entry->id);
        } else if (!empty($entry->{$type.".id"})) {
            $item->id = intval($entry->{$type.".id"});
        } else if (!empty($entry->{'system.id'})) {
            $item->id = intval($entry->{'system.id'});
        } else if ($type == 'errors') {
            $item->id = $entry->code;
        }
        if ($type == 'widgets' and isset($entry->percent)) {
            $entry->percent = intval($entry->percent);
        }
        $item->type = $type;
        $item->attributes = $entry;
        $return[] = $item;
        unset($item);
    }
    return $return;
}

if (!function_exists('my_json_decode')) {
    function my_json_decode(string $string = '')
    {
        if (empty($string)) {
            # TODO - log an error
            return '';
        }

        if (stripos($string, '\"') !== false) {
            $string = str_replace('\"', '"', $string);
        }

        $json = @json_decode($string);
        $error_message = '';

        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                break; # No errors

            case JSON_ERROR_DEPTH:
                $error_message = 'Maximum stack depth exceeded';
                break;

            case JSON_ERROR_STATE_MISMATCH:
                $error_message = 'Underflow or the modes mismatch';
                break;

            case JSON_ERROR_CTRL_CHAR:
                $error_message = 'Unexpected control character found';
                break;

            case JSON_ERROR_SYNTAX:
                $error_message = 'Syntax error, malformed JSON';
                break;

            case JSON_ERROR_UTF8:
                $error_message = 'Malformed UTF-8 characters, possibly incorrectly encoded';
                break;

            default:
                $error_message = 'Unknown error';
                break;
        }

        if (!empty($error_message)) {
            log_message('error', strtolower(__METHOD__), $error_message);
        }

        if (!empty($json)) {
            return $json;
        } else {
            return '';
        }
    }
}


if (!function_exists('collections_list')) {
    /**
     * Return an object of all valid collections and their attributes
     * @return object
     */
    function collections_list()
    {
        $collections = new stdClass();

        $collections->applications = new stdClass();
        # FIX ME
        $collections->applications->icon = 'fa fa-th-list';
        $collections->applications->name = 'Applications';
        $collections->applications->edition = 'Enterprise';
        $collections->applications->orgs = 'd';

        $collections->attributes = new stdClass();
        $collections->attributes->icon = 'fa fa-list-ul';
        $collections->attributes->name = 'Attributes';
        $collections->attributes->edition = 'Community';
        $collections->attributes->orgs = 'b';

        $collections->baselines = new stdClass();
        $collections->baselines->icon = 'fa fa-line-chart';
        $collections->baselines->name = 'Baselines';
        $collections->baselines->edition = 'Enterprise';
        $collections->baselines->orgs = 'd';

        $collections->baselines_policies = new stdClass();
        $collections->baselines_policies->icon = 'fa fa-area-chart';
        $collections->baselines_policies->name = 'Baselines Policies';
        $collections->baselines_policies->edition = 'Enterprise';
        $collections->baselines_policies->orgs = 'd';

        $collections->buildings = new stdClass();
        $collections->buildings->icon = 'fa fa-building-o';
        $collections->buildings->name = 'Buildings';
        $collections->buildings->edition = 'Enterprise';
        $collections->buildings->orgs = 'd';

        $collections->clouds = new stdClass();
        $collections->clouds->icon = 'fa fa-cloud';
        $collections->clouds->name = 'Clouds';
        $collections->clouds->edition = 'Enterprise';
        $collections->clouds->orgs = 'd';

        $collections->clusters = new stdClass();
        $collections->clusters->icon = 'fa fa-cubes';
        $collections->clusters->name = 'Clusters';
        $collections->clusters->edition = 'Professional';
        $collections->clusters->orgs = 'd';

        $collections->collectors = new stdClass();
        $collections->collectors->icon = 'fa fa-cogs';
        $collections->collectors->name = 'Collectors';
        $collections->collectors->edition = 'Enterprise';
        $collections->collectors->orgs = 'd';

        $collections->components = new stdClass();
        $collections->components->icon = 'fa fa-desktop';
        $collections->components->name = 'Components';
        $collections->components->edition = 'Community';
        $collections->components->orgs = 'd';

        $collections->configuration = new stdClass();
        $collections->configuration->icon = 'fa fa-sliders';
        $collections->configuration->name = 'Configuration';
        $collections->configuration->edition = 'Community';
        $collections->configuration->orgs = 'u';

        $collections->connections = new stdClass();
        $collections->connections->icon = 'fa fa-link';
        $collections->connections->name = 'Connections';
        $collections->connections->edition = 'Community';
        $collections->connections->orgs = 'd';

        $collections->credentials = new stdClass();
        $collections->credentials->icon = 'fa fa-shield';
        $collections->credentials->name = 'Credentials';
        $collections->credentials->edition = 'Community';
        $collections->credentials->orgs = 'd';

        $collections->dashboards = new stdClass();
        $collections->dashboards->icon = 'fa fa-dashboard';
        $collections->dashboards->name = 'Dashboards';
        $collections->dashboards->edition = 'Enterprise';
        $collections->dashboards->orgs = 'b';

        $collections->database = new stdClass();
        $collections->database->icon = 'fa fa-database';
        $collections->database->name = 'Database';
        $collections->database->edition = 'Community';
        $collections->database->orgs = 'u';

        $collections->devices = new stdClass();
        $collections->devices->icon = 'fa fa-desktop';
        $collections->devices->name = 'Devices';
        $collections->devices->edition = 'Community';
        $collections->devices->orgs = 'd';

        $collections->discoveries = new stdClass();
        $collections->discoveries->icon = 'fa fa-binoculars';
        $collections->discoveries->name = 'Discoveries';
        $collections->discoveries->edition = 'Community';
        $collections->discoveries->orgs = 'd';

        $collections->discovery_log = new stdClass();
        $collections->discovery_log->icon = 'fa fa-terminal';
        $collections->discovery_log->name = 'Discovery Log';
        $collections->discovery_log->edition = 'Community';
        $collections->discovery_log->orgs = 'd';

        $collections->discovery_scan_options = new stdClass();
        $collections->discovery_scan_options->icon = 'fa fa-random';
        $collections->discovery_scan_options->name = 'Scan Options';
        $collections->discovery_scan_options->edition = 'Enterprise';
        $collections->discovery_scan_options->orgs = 'b';

        $collections->fields = new stdClass();
        $collections->fields->icon = 'fa fa-comments-o';
        $collections->fields->name = 'Fields';
        $collections->fields->edition = 'Community';
        $collections->fields->orgs = 'b';

        $collections->files = new stdClass();
        $collections->files->icon = 'fa fa-file-image-o';
        $collections->files->name = 'Files';
        $collections->files->edition = 'Enterprise';
        $collections->files->orgs = 'b';

        $collections->floors = new stdClass();
        $collections->floors->icon = 'fa fa-sort-numeric-desc';
        $collections->floors->name = 'Floors';
        $collections->floors->edition = 'Enterprise';
        $collections->floors->orgs = 'd';

        $collections->groups = new stdClass();
        $collections->groups->icon = 'fa fa-tags';
        $collections->groups->name = 'Groups';
        $collections->groups->edition = 'Community';
        $collections->groups->orgs = 'b';

        $collections->help = new stdClass();
        $collections->help->icon = 'fa fa-question';
        $collections->help->name = 'Help';
        $collections->help->edition = 'Community';
        $collections->help->orgs = 'u';

        $collections->integrations = new stdClass();
        $collections->integrations->icon = 'fa fa-exchange';
        $collections->integrations->name = 'Integrations';
        $collections->integrations->edition = 'Enterprise';
        $collections->integrations->orgs = 'd';

        $collections->ldap_servers = new stdClass();
        # FIX ME
        $collections->ldap_servers->icon = 'fa fa-key';
        $collections->ldap_servers->name = 'LDAP Servers';
        $collections->ldap_servers->edition = 'Community';
        $collections->ldap_servers->orgs = 'd';

        $collections->licenses = new stdClass();
        $collections->licenses->icon = 'fa fa-leanpub';
        $collections->licenses->name = 'Licenses';
        $collections->licenses->edition = 'Community';
        $collections->licenses->orgs = 'd';

        $collections->locations = new stdClass();
        $collections->locations->icon = 'fa fa-building';
        $collections->locations->name = 'Locations';
        $collections->locations->edition = 'Community';
        $collections->locations->orgs = 'd';

        $collections->logs = new stdClass();
        $collections->logs->icon = 'fa fa-bars';
        $collections->logs->name = 'Logs';
        $collections->logs->edition = 'Community';
        $collections->logs->orgs = 'd';

        $collections->maps = new stdClass();
        $collections->maps->icon = 'fa fa-map-o';
        $collections->maps->name = 'Maps';
        $collections->maps->edition = 'Professional';
        $collections->maps->orgs = 'd';

        $collections->networks = new stdClass();
        $collections->networks->icon = 'fa fa-wifi';
        $collections->networks->name = 'Networks';
        $collections->networks->edition = 'Community';
        $collections->networks->orgs = 'd';

        $collections->orgs = new stdClass();
        $collections->orgs->icon = 'fa fa-bank';
        $collections->orgs->name = 'Organisations';
        $collections->orgs->edition = 'Community';
        $collections->orgs->orgs = 'd';

        $collections->queries = new stdClass();
        $collections->queries->icon = 'fa fa-table';
        $collections->queries->name = 'Queries';
        $collections->queries->edition = 'Community';
        $collections->queries->orgs = 'b';

        $collections->rack_devices = new stdClass();
        $collections->rack_devices->icon = 'fa fa-desktop';
        $collections->rack_devices->name = 'Rack Devices';
        $collections->rack_devices->edition = 'Enterprise';
        $collections->rack_devices->orgs = 'd';

        $collections->racks = new stdClass();
        $collections->racks->icon = 'fa fa-film';
        $collections->racks->name = 'Racks';
        $collections->racks->edition = 'Enterprise';
        $collections->racks->orgs = 'd';

        $collections->reports = new stdClass();
        $collections->reports->icon = 'fa fa-table';
        $collections->reports->name = 'Reports';
        $collections->reports->edition = 'Professional';
        $collections->reports->orgs = 'b';

        $collections->roles = new stdClass();
        $collections->roles->icon = 'fa fa-lock';
        $collections->roles->name = 'Roles';
        $collections->roles->edition = 'Community';
        $collections->roles->orgs = 'b';

        $collections->rooms = new stdClass();
        $collections->rooms->icon = 'fa fa-plus-square-o';
        $collections->rooms->name = 'Rooms';
        $collections->rooms->edition = 'Enterprise';
        $collections->rooms->orgs = 'd';

        $collections->rows = new stdClass();
        $collections->rows->icon = 'fa fa-hashtag';
        $collections->rows->name = 'Rows';
        $collections->rows->edition = 'Enterprise';
        $collections->rows->orgs = 'd';

        $collections->rules = new stdClass();
        $collections->rules->icon = 'fa fa-map-signs';
        $collections->rules->name = 'Rules';
        $collections->rules->edition = 'Enterprise';
        $collections->rules->orgs = 'b';

        $collections->scripts = new stdClass();
        $collections->scripts->icon = 'fa fa-code';
        $collections->scripts->name = 'Scripts';
        $collections->scripts->edition = 'Professional';
        $collections->scripts->orgs = 'b';

        $collections->summaries = new stdClass();
        $collections->summaries->icon = 'fa fa-pie-chart';
        $collections->summaries->name = 'Summaries';
        $collections->summaries->edition = 'Professional';
        $collections->summaries->orgs = 'b';

        $collections->tasks = new stdClass();
        $collections->tasks->icon = 'fa fa-clock-o';
        $collections->tasks->name = 'Tasks';
        $collections->tasks->edition = 'Professional';
        $collections->tasks->orgs = 'd';

        $collections->users = new stdClass();
        $collections->users->icon = 'fa fa-users';
        $collections->users->name = 'Users';
        $collections->users->edition = 'Community';
        $collections->users->orgs = 'd';

        $collections->widgets = new stdClass();
        $collections->widgets->icon = 'fa fa-bar-chart';
        $collections->widgets->name = 'Widgets';
        $collections->widgets->edition = 'Professional';
        $collections->widgets->orgs = 'b';

        return $collections;
    }
}
