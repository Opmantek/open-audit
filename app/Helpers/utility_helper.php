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

function prereqCheck()
{
    if (php_uname('s') !== 'Windows NT') {
        $prereq = dirPermLinux();
    }
    $prereq['nmap_installed'] = nmapInstalled();
    $prereq['nmap_suid'] = nmapSuid();
    return $prereq;
}

function nmapInstalled($setNotice = false)
{
    if (function_exists('get_instance')) {
        $instance = & get_instance();
    } else {
        $instance = new stdClass();
        $instance->config = config('Openaudit');
    }

    if (!empty($instance->config->discovery_override_nmap) && $instance->config->discovery_override_nmap === 'y') {
        return 'y';
    }
    $nmap_installed = 'n';
    if (php_uname('s') === 'Windows NT') {
        // check the obvious Windows install locations
        $test_path = 'c:\\Program Files\\Nmap\\Nmap.exe';
        if ($nmap_installed === 'n' and file_exists($test_path)) {
            $nmap_installed = 'y';
        }
        $test_path = 'c:\\Program Files (x86)\\Nmap\\Nmap.exe';
        if ($nmap_installed === 'n' and file_exists($test_path)) {
            $nmap_installed = 'y';
        }
        unset($test_path);
        if ($nmap_installed === 'n' and $setNotice) {
            \Config\Services::session()->setFlashdata('error', "WARNING - Nmap not detected. Get it from <a style='color:#729FCF;' target='_blank' href='http://nmap.org/download.html'>http://nmap.org/download.html</a>.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.");
        }
    }
    if (php_uname('s') !== 'Windows NT') {
        $command_string = 'which nmap 2>/dev/null';
        exec($command_string, $output);
        if (isset($output[0]) && strpos($output[0], 'nmap')) {
            $nmap_installed = 'y';
        }
        if (isset($output[1]) && strpos($output[1], 'nmap')) {
            $nmap_installed = 'y';
        }
        if ($nmap_installed === 'n') {
            if (file_exists('/usr/local/bin/nmap')) {
                $nmap_installed = 'y';
            }
        }
        if ($nmap_installed === 'n') {
            if (file_exists('/usr/bin/nmap')) {
                $nmap_installed = 'y';
            }
        }
        if ($nmap_installed === 'n' and $setNotice) {
            \Config\Services::session()->setFlashdata('error', "WARNING - Nmap not detected. Please install it using your package manager.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.");
        }
    }
    return $nmap_installed;
}

function nmapSuid($setNotice = false)
{
    if (php_uname('s') === 'Windows NT') {
        return 'y';
    }
    if (function_exists('get_instance')) {
        $instance = & get_instance();
    } else {
        $instance = new stdClass();
        $instance->config = config('Openaudit');
    }
    if (!empty($instance->config->discovery_override_nmap) && $instance->config->discovery_override_nmap === 'y') {
        return 'y';
    }
    $suid = 'n';
    $command_string = 'which nmap 2>/dev/null';
    $output = shell_exec($command_string);
    if (!empty($output)) {
        $command_string = 'ls -lh `which nmap` | cut -d" " -f1 | cut -c4';
        exec($command_string, $output);
        if (isset($output[0]) and $output[0] === 's') {
            $suid = 'y';
        }
    } else if (file_exists('/usr/bin/nmap')) {
        $command_string = 'ls -lh /usr/bin/nmap | cut -d" " -f1 | cut -c4';
        exec($command_string, $output);
        if (isset($output[0]) and $output[0] === 's') {
            $suid = 'y';
        }
    } else if (file_exists('/usr/local/bin/nmap')) {
        $command_string = 'ls -lh /usr/local/bin/nmap | cut -d" " -f1 | cut -c4';
        exec($command_string, $output);
        if (isset($output[0]) and $output[0] === 's') {
            $suid = 'y';
        }
    }
    if ($suid === 'n' and $setNotice) {
        \Config\Services::session()->setFlashdata('error', "WARNING - Nmap SUID not set.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to configure it.");
    }
    return $suid;
}

function dirPermLinux()
{
    $perm = array();
    $perm['cron_file_exists'] = 'n';
    if (file_exists('/etc/cron.d/open-audit')) {
        $perm['cron_file_exists'] = 'y';
    }
    $perm['attachments_dir'] = 'n';
    if (is_writable(APPPATH . '/Attachments')) {
        $perm['attachments_dir'] = 'y';
    }
    $perm['uploads_dir'] = 'n';
    if (is_writable(APPPATH . '/../writable/uploads')) {
        $perm['uploads_dir'] = 'y';
    }
    $perm['scripts_dir'] = 'n';
    if (is_writable(APPPATH . '/../other/scripts')) {
        $perm['scripts_dir'] = 'y';
    }
    $perm['custom_images_dir'] = 'n';
    if (is_writable(APPPATH . '/../public/custom_images')) {
        $perm['custom_images_dir'] = 'y';
    }
    return $perm;
}

function format_data($result, $type)
{

    if (empty($result)) {
        // log_message('debug', 'No data provided to format_data function from '. debug_backtrace()[1]['class'] . '::' . debug_backtrace()[1]['function'] . ' for ' . $type);
        return array();
    }

    $return = array();

    if (!is_array($result)) {
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
            $temp = explode('.', (string)$key);
            $column = $temp[0];
            if (in_array($column, $names)) {
                // If we have one of the above named columns, it is an integer
                $item->$key = intval($value);
            } elseif ((strrpos((string)$key, '_id') === strlen((string)$key)-3) or
                        (strrpos((string)$key, '_count') === strlen((string)$key)-6) or
                        (strrpos((string)$key, '_percent') === strlen((string)$key)-8) or
                        (strrpos((string)$key, '_size') === strlen((string)$key)-5)) {
                // If the name of the key ends with any of the above, it is an integer
                $item->$key = intval($value);
            } elseif ((strrpos((string)$key, 'ip') === strlen((string)$key)-2) or
                    (strrpos((string)$key, 'next_hop') === strlen((string)$key)-8) or
                    (strrpos((string)$key, 'destination') === strlen((string)$key)-11)) {
                $temp_name = $key . '_padded';
                $item->$temp_name = ip_address_from_db($value);
                $item->$temp_name = ip_address_to_db($item->$temp_name);
                $item->$key = ip_address_from_db($value);
                if ($item->$temp_name === $item->$key) {
                    unset($item->$temp_name);
                }
            }
            if (strrpos((string)$key, 'device_id') === strlen((string)$key)-9) {
                $item->{'devices.id'} = intval($value);
            }
            if (strrpos((string)$key, 'org_id') === strlen((string)$key)-6) {
                $item->{'orgs.id'} = intval($value);
            }
            if (strrpos((string)$key, 'location_id') === strlen((string)$key)-11) {
                $item->{'locations.id'} = intval($value);
            }
            if ($key === 'ip' or strrpos((string)$key, '.ip') === strlen((string)$key)-3 or strrpos((string)$key, '_ip') === strlen((string)$key)-3) {
                $item->{$key . '_padded'} = $value;
                $item->{$key} = ip_address_from_db($value);
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

    if ($type === 'agents') {
        foreach ($result as $item) {
            if (!empty($item->inputs)) {
                $item->inputs = json_decode($item->inputs);
            }
            if (!empty($item->outputs)) {
                $item->outputs = json_decode($item->outputs);
            }
        }
    }

    if ($type === 'baselines_policies') {
        foreach ($result as $item) {
            if (!empty($item->tests)) {
                $item->tests = json_decode($item->tests);
            }
        }
    }

    if ($type === 'baselines_results') {
        foreach ($result as $item) {
            if (!empty($item->baseline)) {
                $item->baseline = json_decode($item->baseline);
            }
            if (!empty($item->result)) {
                $item->result = json_decode($item->result);
            }
        }
    }

    if ($type === 'dashboards') {
        foreach ($result as $item) {
            if (!empty($item->options)) {
                $item->options = json_decode($item->options);
            }
        }
    }

    if ($type === 'discoveries') {
        foreach ($result as $item) {
            if (!empty($item->scan_options)) {
                $item->scan_options = json_decode($item->scan_options);
            }
            if (!empty($item->match_options)) {
                $item->match_options = json_decode($item->match_options);
            }
            if (!empty($item->command_options)) {
                $item->command_options = json_decode($item->command_options);
            }
        }
    }

    if ($type === 'integrations') {
        foreach ($result as $item) {
            if (!empty($item->additional_items)) {
                $item->additional_items = json_decode($item->additional_items);
            }
            if (!empty($item->attributes)) {
                $item->attributes = json_decode($item->attributes);
            }
            if (!empty($item->fields)) {
                $item->fields = json_decode($item->fields);
            }
        }
    }

    if ($type === 'locations') {
        foreach ($result as $item) {
            if (!empty($item->options)) {
                $item->options = json_decode($item->options);
            }
        }
    }

    if ($type === 'networks') {
        foreach ($result as $item) {
            if (!empty($item->options)) {
                $item->options = json_decode($item->options);
            }
        }
    }

    if ($type === 'roles') {
        foreach ($result as $item) {
            if (!empty($item->permissions)) {
                $item->permissions = json_decode($item->permissions);
            }
        }
    }

    if ($type === 'rules') {
        foreach ($result as $item) {
            if (!empty($item->inputs)) {
                $item->inputs = json_decode($item->inputs);
            }
            if (!empty($item->outputs)) {
                $item->outputs = json_decode($item->outputs);
            }
        }
    }

    if ($type === 'scripts') {
        foreach ($result as $item) {
            if (!empty($item->options)) {
                $item->options = json_decode($item->options);
            }
        }
    }

    if ($type === 'tasks') {
        foreach ($result as $item) {
            if (!empty($item->options)) {
                $item->options = json_decode($item->options);
            }
        }
    }

    if ($type === 'users') {
        foreach ($result as $item) {
            if (!empty($item->roles)) {
                $item->roles = json_decode($item->roles);
            }
            if (!empty($item->orgs)) {
                $item->orgs = json_decode($item->orgs);
            }
        }
    }

    foreach ($result as $entry) {
        $item = new \stdClass();
        $item->id = '';
        if (isset($entry->id) and $entry->id != '') {
            $item->id = intval($entry->id);
        } else if (!empty($entry->{$type.".id"})) {
            $item->id = intval($entry->{$type.".id"});
        } else if (!empty($entry->{'devices.id'})) {
            $item->id = intval($entry->{'devices.id'});
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
        $collections = new \stdClass();

        # FIX ME
        $collections->agents = new \StdClass();
        $collections->agents->icon = 'fa-regular fa-comments';
        $collections->agents->name = 'Agents';
        $collections->agents->edition = 'Enterprise';
        $collections->agents->orgs = 'd';
        $collections->agents->actions = new \stdClass();
        $collections->agents->actions->enterprise = 'crud';
        $collections->agents->actions->professional = 'r';
        $collections->agents->actions->community = '';

        $collections->applications = new \StdClass();
        $collections->applications->icon = 'fa fa-th-list';
        $collections->applications->name = 'Applications';
        $collections->applications->edition = 'Enterprise';
        $collections->applications->orgs = 'd';
        $collections->applications->actions = new \stdClass();
        $collections->applications->actions->enterprise = 'crud';
        $collections->applications->actions->professional = 'r';
        $collections->applications->actions->community = '';


        $collections->attributes = new \StdClass();
        $collections->attributes->icon = 'fa fa-list-ul';
        $collections->attributes->name = 'Attributes';
        $collections->attributes->edition = 'Community';
        $collections->attributes->orgs = 'b';
        $collections->attributes->actions = new \stdClass();
        $collections->attributes->actions->enterprise = 'crud';
        $collections->attributes->actions->professional = 'crud';
        $collections->attributes->actions->community = 'crud';

        $collections->baselines = new \StdClass();
        $collections->baselines->icon = 'fa fa-line-chart';
        $collections->baselines->name = 'Baselines';
        $collections->baselines->edition = 'Enterprise';
        $collections->baselines->orgs = 'd';
        $collections->baselines->actions = new \stdClass();
        $collections->baselines->actions->enterprise = 'crud';
        $collections->baselines->actions->professional = '';
        $collections->baselines->actions->community = '';

        $collections->baselines_policies = new \StdClass();
        $collections->baselines_policies->icon = 'fa fa-area-chart';
        $collections->baselines_policies->name = 'Baselines Policies';
        $collections->baselines_policies->edition = 'Enterprise';
        $collections->baselines_policies->orgs = 'd';
        $collections->baselines_policies->actions = new \stdClass();
        $collections->baselines_policies->actions->enterprise = 'crud';
        $collections->baselines_policies->actions->professional = '';
        $collections->baselines_policies->actions->community = '';

        $collections->baselines_results = new \StdClass();
        $collections->baselines_results->icon = 'fa fa-table';
        $collections->baselines_results->name = 'Baselines Results';
        $collections->baselines_results->edition = 'Enterprise';
        $collections->baselines_results->orgs = 'd';
        $collections->baselines_results->actions = new \stdClass();
        $collections->baselines_results->actions->enterprise = 'crud';
        $collections->baselines_results->actions->professional = '';
        $collections->baselines_results->actions->community = '';

        $collections->clouds = new \StdClass();
        $collections->clouds->icon = 'fa fa-cloud';
        $collections->clouds->name = 'Clouds';
        $collections->clouds->edition = 'Enterprise';
        $collections->clouds->orgs = 'd';
        $collections->clouds->actions = new \stdClass();
        $collections->clouds->actions->enterprise = 'crud';
        $collections->clouds->actions->professional = '';
        $collections->clouds->actions->community = '';

        $collections->clusters = new \StdClass();
        $collections->clusters->icon = 'fa fa-cubes';
        $collections->clusters->name = 'Clusters';
        $collections->clusters->edition = 'Professional';
        $collections->clusters->orgs = 'd';
        $collections->clusters->actions = new \stdClass();
        $collections->clusters->actions->enterprise = 'crud';
        $collections->clusters->actions->professional = 'crud';
        $collections->clusters->actions->community = '';

        $collections->collectors = new \StdClass();
        $collections->collectors->icon = 'fa fa-cogs';
        $collections->collectors->name = 'Collectors';
        $collections->collectors->edition = 'Enterprise';
        $collections->collectors->orgs = 'd';
        $collections->collectors->actions = new \stdClass();
        $collections->collectors->actions->enterprise = 'crud';
        $collections->collectors->actions->professional = '';
        $collections->collectors->actions->community = '';

        $collections->components = new \StdClass();
        $collections->components->icon = 'fa fa-desktop';
        $collections->components->name = 'Components';
        $collections->components->edition = 'Community';
        $collections->components->orgs = 'd';
        $collections->components->actions = new \stdClass();
        $collections->components->actions->enterprise = 'crud';
        $collections->components->actions->professional = 'crud';
        $collections->components->actions->community = 'crud';

        $collections->configuration = new \StdClass();
        $collections->configuration->icon = 'fa fa-sliders';
        $collections->configuration->name = 'Configuration';
        $collections->configuration->edition = 'Community';
        $collections->configuration->orgs = 'u';
        $collections->configuration->actions = new \stdClass();
        $collections->configuration->actions->enterprise = 'crud';
        $collections->configuration->actions->professional = 'crud';
        $collections->configuration->actions->community = 'crud';

        $collections->connections = new \StdClass();
        $collections->connections->icon = 'fa fa-link';
        $collections->connections->name = 'Connections';
        $collections->connections->edition = 'Community';
        $collections->connections->orgs = 'd';
        $collections->connections->actions = new \stdClass();
        $collections->connections->actions->enterprise = 'crud';
        $collections->connections->actions->professional = 'crud';
        $collections->connections->actions->community = 'crud';

        $collections->credentials = new \StdClass();
        $collections->credentials->icon = 'fa fa-shield';
        $collections->credentials->name = 'Credentials';
        $collections->credentials->edition = 'Community';
        $collections->credentials->orgs = 'd';
        $collections->credentials->actions = new \stdClass();
        $collections->credentials->actions->enterprise = 'crud';
        $collections->credentials->actions->professional = 'crud';
        $collections->credentials->actions->community = 'crud';

        $collections->dashboards = new \StdClass();
        $collections->dashboards->icon = 'fa fa-dashboard';
        $collections->dashboards->name = 'Dashboards';
        $collections->dashboards->edition = 'Enterprise';
        $collections->dashboards->orgs = 'b';
        $collections->dashboards->actions = 'crud';
        $collections->dashboards->actions = new \stdClass();
        $collections->dashboards->actions->enterprise = 'crud';
        $collections->dashboards->actions->professional = 'r';
        $collections->dashboards->actions->community = '';

        $collections->database = new \StdClass();
        $collections->database->icon = 'fa fa-database';
        $collections->database->name = 'Database';
        $collections->database->edition = 'Community';
        $collections->database->orgs = 'u';
        $collections->database->actions = new \stdClass();
        $collections->database->actions->enterprise = 'crud';
        $collections->database->actions->professional = 'crud';
        $collections->database->actions->community = 'crud';

        $collections->devices = new \StdClass();
        $collections->devices->icon = 'fa fa-desktop';
        $collections->devices->name = 'Devices';
        $collections->devices->edition = 'Community';
        $collections->devices->orgs = 'd';
        $collections->devices->actions = new \stdClass();
        $collections->devices->actions->enterprise = 'crud';
        $collections->devices->actions->professional = 'crud';
        $collections->devices->actions->community = 'crud';

        $collections->discoveries = new \StdClass();
        $collections->discoveries->icon = 'fa fa-binoculars';
        $collections->discoveries->name = 'Discoveries';
        $collections->discoveries->edition = 'Community';
        $collections->discoveries->orgs = 'd';
        $collections->discoveries->actions = new \stdClass();
        $collections->discoveries->actions->enterprise = 'crud';
        $collections->discoveries->actions->professional = 'crud';
        $collections->discoveries->actions->community = 'crud';

        $collections->discovery_log = new \StdClass();
        $collections->discovery_log->icon = 'fa fa-terminal';
        $collections->discovery_log->name = 'Discovery Log';
        $collections->discovery_log->edition = 'Community';
        $collections->discovery_log->orgs = 'd';
        $collections->discovery_log->actions = new \stdClass();
        $collections->discovery_log->actions->enterprise = 'crud';
        $collections->discovery_log->actions->professional = 'crud';
        $collections->discovery_log->actions->community = 'crud';

        $collections->discovery_scan_options = new \StdClass();
        $collections->discovery_scan_options->icon = 'fa fa-random';
        $collections->discovery_scan_options->name = 'Scan Options';
        $collections->discovery_scan_options->edition = 'Enterprise';
        $collections->discovery_scan_options->orgs = 'b';
        $collections->discovery_scan_options->actions = new \stdClass();
        $collections->discovery_scan_options->actions->enterprise = 'crud';
        $collections->discovery_scan_options->actions->professional = 'r';
        $collections->discovery_scan_options->actions->community = 'r';


        $collections->executables = new \StdClass();
        $collections->executables->icon = 'fa fa-file-code-o';
        $collections->executables->name = 'Executables';
        $collections->executables->edition = 'Enterprise';
        $collections->executables->orgs = 'b';
        $collections->executables->actions = new \stdClass();
        $collections->executables->actions->enterprise = 'crud';
        $collections->executables->actions->professional = '';
        $collections->executables->actions->community = '';

        $collections->fields = new \StdClass();
        $collections->fields->icon = 'fa fa-comments-o';
        $collections->fields->name = 'Fields';
        $collections->fields->edition = 'Community';
        $collections->fields->orgs = 'b';
        $collections->fields->actions = new \stdClass();
        $collections->fields->actions->enterprise = 'crud';
        $collections->fields->actions->professional = 'crud';
        $collections->fields->actions->community = 'crud';

        $collections->files = new \StdClass();
        $collections->files->icon = 'fa fa-file-image-o';
        $collections->files->name = 'Files';
        $collections->files->edition = 'Enterprise';
        $collections->files->orgs = 'b';
        $collections->files->actions = new \stdClass();
        $collections->files->actions->enterprise = 'crud';
        $collections->files->actions->professional = '';
        $collections->files->actions->community = '';

        $collections->groups = new \StdClass();
        $collections->groups->icon = 'fa fa-tags';
        $collections->groups->name = 'Groups';
        $collections->groups->edition = 'Community';
        $collections->groups->orgs = 'b';
        $collections->groups->actions = new \stdClass();
        $collections->groups->actions->enterprise = 'crud';
        $collections->groups->actions->professional = 'crud';
        $collections->groups->actions->community = 'crud';

        $collections->help = new \StdClass();
        $collections->help->icon = 'fa fa-question';
        $collections->help->name = 'Help';
        $collections->help->edition = 'Community';
        $collections->help->orgs = 'u';
        $collections->help->actions = new \stdClass();
        $collections->help->actions->enterprise = 'crud';
        $collections->help->actions->professional = 'crud';
        $collections->help->actions->community = 'crud';

        $collections->integrations = new \StdClass();
        $collections->integrations->icon = 'fa fa-exchange';
        $collections->integrations->name = 'Integrations';
        $collections->integrations->edition = 'Enterprise';
        $collections->integrations->orgs = 'd';
        $collections->integrations->actions = new \stdClass();
        $collections->integrations->actions->enterprise = 'crud';
        $collections->integrations->actions->professional = '';
        $collections->integrations->actions->community = '';

        $collections->ldap_servers = new \StdClass();
        $collections->ldap_servers->icon = 'fa fa-key';
        $collections->ldap_servers->name = 'LDAP Servers';
        $collections->ldap_servers->edition = 'Community';
        $collections->ldap_servers->orgs = 'd';
        $collections->ldap_servers->actions = new \stdClass();
        $collections->ldap_servers->actions->enterprise = 'crud';
        $collections->ldap_servers->actions->professional = 'crud';
        $collections->ldap_servers->actions->community = 'crud';

        $collections->licenses = new \StdClass();
        $collections->licenses->icon = 'fa fa-leanpub';
        $collections->licenses->name = 'Licenses';
        $collections->licenses->edition = 'Community';
        $collections->licenses->orgs = 'd';
        $collections->licenses->actions = new \stdClass();
        $collections->licenses->actions->enterprise = 'crud';
        $collections->licenses->actions->professional = 'crud';
        $collections->licenses->actions->community = 'crud';

        $collections->locations = new \StdClass();
        $collections->locations->icon = 'fa fa-building';
        $collections->locations->name = 'Locations';
        $collections->locations->edition = 'Community';
        $collections->locations->orgs = 'd';
        $collections->locations->actions = new \stdClass();
        $collections->locations->actions->enterprise = 'crud';
        $collections->locations->actions->professional = 'crud';
        $collections->locations->actions->community = 'crud';

        $collections->maps = new \StdClass();
        $collections->maps->icon = 'fa fa-map-o';
        $collections->maps->name = 'Maps';
        $collections->maps->edition = 'Professional';
        $collections->maps->orgs = 'd';
        $collections->maps->actions = new \stdClass();
        $collections->maps->actions->enterprise = 'crud';
        $collections->maps->actions->professional = 'crud';
        $collections->maps->actions->community = '';

        $collections->networks = new \StdClass();
        $collections->networks->icon = 'fa fa-wifi';
        $collections->networks->name = 'Networks';
        $collections->networks->edition = 'Community';
        $collections->networks->orgs = 'd';
        $collections->networks->actions = new \stdClass();
        $collections->networks->actions->enterprise = 'crud';
        $collections->networks->actions->professional = 'crud';
        $collections->networks->actions->community = 'crud';

        $collections->orgs = new \StdClass();
        $collections->orgs->icon = 'fa fa-bank';
        $collections->orgs->name = 'Organisations';
        $collections->orgs->edition = 'Community';
        $collections->orgs->orgs = 'd';
        $collections->orgs->actions = new \stdClass();
        $collections->orgs->actions->enterprise = 'crud';
        $collections->orgs->actions->professional = 'crud';
        $collections->orgs->actions->community = 'crud';

        $collections->queries = new \StdClass();
        $collections->queries->icon = 'fa fa-table';
        $collections->queries->name = 'Queries';
        $collections->queries->edition = 'Community';
        $collections->queries->orgs = 'b';
        $collections->queries->actions = new \stdClass();
        $collections->queries->actions->enterprise = 'crud';
        $collections->queries->actions->professional = 'crud';
        $collections->queries->actions->community = 'crud';

        $collections->rack_devices = new \StdClass();
        $collections->rack_devices->icon = 'fa fa-desktop';
        $collections->rack_devices->name = 'Rack Devices';
        $collections->rack_devices->edition = 'Enterprise';
        $collections->rack_devices->orgs = 'd';
        $collections->rack_devices->actions = new \stdClass();
        $collections->rack_devices->actions->enterprise = 'crud';
        $collections->rack_devices->actions->professional = '';
        $collections->rack_devices->actions->community = '';

        $collections->racks = new \StdClass();
        $collections->racks->icon = 'fa fa-film';
        $collections->racks->name = 'Racks';
        $collections->racks->edition = 'Enterprise';
        $collections->racks->orgs = 'd';
        $collections->racks->actions = new \stdClass();
        $collections->racks->actions->enterprise = 'crud';
        $collections->racks->actions->professional = '';
        $collections->racks->actions->community = '';

        $collections->reports = new \StdClass();
        $collections->reports->icon = 'fa fa-table';
        $collections->reports->name = 'Reports';
        $collections->reports->edition = 'Professional';
        $collections->reports->orgs = 'b';
        $collections->reports->actions = new \stdClass();
        $collections->reports->actions->enterprise = 'crud';
        $collections->reports->actions->professional = 'crud';
        $collections->reports->actions->community = 'crud';

        $collections->roles = new \StdClass();
        $collections->roles->icon = 'fa fa-lock';
        $collections->roles->name = 'Roles';
        $collections->roles->edition = 'Community';
        $collections->roles->orgs = 'b';
        $collections->roles->actions = new \stdClass();
        $collections->roles->actions->enterprise = 'crud';
        $collections->roles->actions->professional = 'r';
        $collections->roles->actions->community = 'r';

        $collections->rules = new \StdClass();
        $collections->rules->icon = 'fa fa-map-signs';
        $collections->rules->name = 'Rules';
        $collections->rules->edition = 'Enterprise';
        $collections->rules->orgs = 'b';
        $collections->rules->actions = new \stdClass();
        $collections->rules->actions->enterprise = 'crud';
        $collections->rules->actions->professional = 'r';
        $collections->rules->actions->community = 'r';

        $collections->scripts = new \StdClass();
        $collections->scripts->icon = 'fa fa-code';
        $collections->scripts->name = 'Scripts';
        $collections->scripts->edition = 'Professional';
        $collections->scripts->orgs = 'b';
        $collections->scripts->actions = new \stdClass();
        $collections->scripts->actions->enterprise = 'crud';
        $collections->scripts->actions->professional = 'crud';
        $collections->scripts->actions->community = 'r';

        $collections->search = new \StdClass();
        $collections->search->icon = 'fa fa-desktop';
        $collections->search->name = 'Search';
        $collections->search->edition = 'Community';
        $collections->search->orgs = 'd';
        $collections->search->actions = new \stdClass();
        $collections->search->actions->enterprise = 'crud';
        $collections->search->actions->professional = 'crud';
        $collections->search->actions->community = 'crud';

        $collections->summaries = new \StdClass();
        $collections->summaries->icon = 'fa fa-pie-chart';
        $collections->summaries->name = 'Summaries';
        $collections->summaries->edition = 'Professional';
        $collections->summaries->orgs = 'b';
        $collections->summaries->actions = new \stdClass();
        $collections->summaries->actions->enterprise = 'crud';
        $collections->summaries->actions->professional = 'crud';
        $collections->summaries->actions->community = 'r';

        $collections->support = new \StdClass();
        $collections->support->icon = 'fa-solid fa-headset';
        $collections->support->name = 'Support';
        $collections->support->edition = 'Professional';
        $collections->support->orgs = 'b';
        $collections->support->actions = new \stdClass();
        $collections->support->actions->enterprise = 'crud';
        $collections->support->actions->professional = 'crud';
        $collections->support->actions->community = 'crud';

        $collections->tasks = new \StdClass();
        $collections->tasks->icon = 'fa fa-clock-o';
        $collections->tasks->name = 'Tasks';
        $collections->tasks->edition = 'Professional';
        $collections->tasks->orgs = 'd';
        $collections->tasks->actions = new \stdClass();
        $collections->tasks->actions->enterprise = 'crud';
        $collections->tasks->actions->professional = 'crud';
        $collections->tasks->actions->community = '';

        $collections->users = new \StdClass();
        $collections->users->icon = 'fa fa-users';
        $collections->users->name = 'Users';
        $collections->users->edition = 'Community';
        $collections->users->orgs = 'd';
        $collections->users->actions = new \stdClass();
        $collections->users->actions->enterprise = 'crud';
        $collections->users->actions->professional = 'crud';
        $collections->users->actions->community = 'crud';

        $collections->widgets = new \StdClass();
        $collections->widgets->icon = 'fa fa-chart-column';
        $collections->widgets->name = 'Widgets';
        $collections->widgets->edition = 'Professional';
        $collections->widgets->orgs = 'b';
        $collections->widgets->actions = new \stdClass();
        $collections->widgets->actions->enterprise = 'crud';
        $collections->widgets->actions->professional = 'crud';
        $collections->widgets->actions->community = 'r';

        return $collections;
    }
}
