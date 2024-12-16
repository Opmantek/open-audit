<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Config\Database;

#[\AllowDynamicProperties]

class OpenAudit extends BaseConfig
{
    # leave for backwards compat $this->displayVersion = '5.6.1';
    public string $displayVersion = '5.6.1';
    public int $appVersion = 20241130;

    public float $microtime = 0;
    public int $collector_connect_timeout = 10;
    public int $collector_inactivity_timeout = 30;
    public int $collector_insecure = 1;
    public int $collector_request_timeout = 240;
    public int $device_count = 0;
    public int $device_known = 0;
    public int $device_license = 0;
    public int $license_string_collector_id;
    public int $license_string_id;
    public int $license_eula_id;
    public int $oae_prompt_id = 0;
    public string $commercial_dir;
    public string $enterprise_binary = '';
    public string $timestamp = '';
    public string $timezone = '';

    public int $access_token_count;
    public bool $access_token_enable;
    public bool $blessed_subnets_use;
    public int $collector_check_minutes;
    public bool $create_change_log;
    public bool $create_change_log_bios;
    public bool $create_change_log_certificate;
    public bool $create_change_log_disk;
    public bool $create_change_log_dns;
    public bool $create_change_log_file;
    public bool $create_change_log_ip;
    public bool $create_change_log_log;
    public bool $create_change_log_memory;
    public bool $create_change_log_module;
    public bool $create_change_log_monitor;
    public bool $create_change_log_motherboad;
    public bool $create_change_log_netstat;
    public bool $create_change_log_netstat_dynamic;
    public bool $create_change_log_netstat_registered;
    public bool $create_change_log_netstat_well_known;
    public bool $create_change_log_network;
    public bool $create_change_log_nmap;
    public bool $create_change_log_optical;
    public bool $create_change_log_pagefile;
    public bool $create_change_log_partition;
    public bool $create_change_log_policy;
    public bool $create_change_log_print_queue;
    public bool $create_change_log_processor;
    public bool $create_change_log_radio;
    public bool $create_change_log_route;
    public bool $create_change_log_san;
    public bool $create_change_log_scsi;
    public bool $create_change_log_server;
    public bool $create_change_log_server_item;
    public bool $create_change_log_service;
    public bool $create_change_log_share;
    public bool $create_change_log_software;
    public bool $create_change_log_software_key;
    public bool $create_change_log_sound;
    public bool $create_change_log_task;
    public bool $create_change_log_usb;
    public bool $create_change_log_user;
    public bool $create_change_log_user_group;
    public bool $create_change_log_variable;
    public bool $create_change_log_video;
    public bool $create_change_log_vm;
    public bool $create_change_log_windows;
    public int $database_show_row_limit;
    public bool $decrypt_credentials;
    public string $default_network_address;
    public bool $delete_noncurrent;
    public bool $delete_noncurrent_bios;
    public bool $delete_noncurrent_certificate;
    public bool $delete_noncurrent_disk;
    public bool $delete_noncurrent_dns;
    public bool $delete_noncurrent_file;
    public bool $delete_noncurrent_ip;
    public bool $delete_noncurrent_log;
    public bool $delete_noncurrent_memory;
    public bool $delete_noncurrent_module;
    public bool $delete_noncurrent_monitor;
    public bool $delete_noncurrent_motherboard;
    public bool $delete_noncurrent_netstat;
    public bool $delete_noncurrent_network;
    public bool $delete_noncurrent_nmap;
    public bool $delete_noncurrent_optical;
    public bool $delete_noncurrent_pagefile;
    public bool $delete_noncurrent_partition;
    public bool $delete_noncurrent_policy;
    public bool $delete_noncurrent_print_queue;
    public bool $delete_noncurrent_processor;
    public bool $delete_noncurrent_radio;
    public bool $delete_noncurrent_route;
    public bool $delete_noncurrent_san;
    public bool $delete_noncurrent_scsi;
    public bool $delete_noncurrent_server;
    public bool $delete_noncurrent_server_item;
    public bool $delete_noncurrent_service;
    public bool $delete_noncurrent_share;
    public bool $delete_noncurrent_software;
    public bool $delete_noncurrent_software_key;
    public bool $delete_noncurrent_sound;
    public bool $delete_noncurrent_task;
    public bool $delete_noncurrent_usb;
    public bool $delete_noncurrent_user;
    public bool $delete_noncurrent_user_group;
    public bool $delete_noncurrent_variable;
    public bool $delete_noncurrent_video;
    public bool $delete_noncurrent_vm;
    public bool $delete_noncurrent_windows;
    public string $devices_default_display_columns;
    public string $devices_default_group_columns;
    public string $devices_default_retrieve_columns;
    public bool $device_auto_delete;
    public int $discovery_default_scan_option;
    public string $discovery_ip_exclude;
    public string $discovery_linux_script_directory;
    public string $discovery_linux_script_permissions;
    public bool $discovery_linux_use_sudo;
    public bool $discovery_override_nmap;
    public int $discovery_pid;
    public int $discovery_route_retrieve_limit;
    public int $discovery_ssh_timeout;
    public string $discovery_sudo_path;
    public bool $discovery_sunos_use_sudo;
    public bool $discovery_use_dns;
    public bool $discovery_use_ipmi;
    public bool $discovery_use_org_id_match;
    public bool $discovery_use_vintage_service;
    public int $discovery_wmi_timeout;
    public string $display_version;
    public bool $download_reports;
    public string $enterprise_env;
    public bool $feature_agents_advanced;
    public bool $feature_executables;
    public bool $feature_feeds;
    public string $feature_feeds_last_request_date;
    public string $feature_feeds_url;
    public string $feature_powershell_audit;
    public bool $feature_queries_advanced;
    public string $firstwave_prompt;
    public int $graph_days;
    public int $gui_trim_characters;
    public string $homepage = 'summaries';
    public int $internal_version;
    public string $license;
    public string $license_eula;
    public string $license_footer;
    public int $license_limit;
    public string $license_string;
    public string $license_string_collector;
    public string $mail_domain;
    public string $mail_from;
    public string $mail_password;
    public string $mail_server;
    public string $mail_server_port;
    public string $mail_user;
    public bool $mail_use_tls;
    public string $maps_api_key;
    public bool $match_dbus;
    public bool $match_dns_fqdn;
    public bool $match_dns_hostname;
    public bool $match_fqdn;
    public bool $match_hostname;
    public bool $match_hostname_dbus;
    public bool $match_hostname_serial;
    public bool $match_hostname_uuid;
    public bool $match_ip;
    public bool $match_ip_no_data;
    public bool $match_mac;
    public bool $match_mac_vmware;
    public bool $match_serial;
    public bool $match_serial_type;
    public bool $match_sysname;
    public bool $match_sysname_serial;
    public bool $match_uuid;
    public $modules;
    public bool $nmis;
    public string $nmis_url;
    public string $oae_prompt;
    public bool $output_escape_csv;
    public int $page_size;
    public bool $process_netstat_windows_dns;
    public string $product = 'community';
    public int $queue_count;
    public int $queue_limit;
    public bool $rss_enable;
    public string $rss_url;
    public string $servers;
    public string $server_ip;
    public string $server_os;
    public string $server_platform;
    public string $uuid;

    public function __set($key, $value)
    {
        $this->$key = $value;
    }

    public function __get($key)
    {
        return $this->$key;
    }

    public function __construct()
    {
        parent::__construct();

        $this->microtime = microtime(true);

        $commercial_dir = array(
            ROOTPATH . '../omk',
            ROOTPATH . '../opmojo',
            '/usr/local/omk',
            '/usr/local/opmojo',
            'c:\\omk');

        if (php_uname('s') === 'Windows NT') {
            $commercial_dir = array('c:\\omk');
        }

        $binaries = array(ROOTPATH . 'other/enterprise.bin', '/usr/local/oac/enterprise.pl');

        if (php_uname('s') === 'Windows NT') {
            $binaries = array(ROOTPATH . 'other/enterprise.exe');
        }

        $nmis = (!empty(file_exists('/usr/local/nmis9'))) ? '/usr/local/nmis9' : '';

        $db = Database::connect();
        $query = $db->query('SELECT * FROM `configuration`');
        $result = $query->getResult();
        foreach ($result as $row) {
            $this->{$row->name} = $row->value;
            if ($row->type === 'number') {
                $this->{$row->name} = (int)$row->value;
            }
            if ($row->name === 'oae_prompt') {
                $this->oae_prompt_id = (int)$row->id;
            }
            if ($row->name === 'license_string') {
                $this->license_string_id = (int)$row->id;
            }
            if ($row->name === 'license_eula') {
                $this->license_eula_id = (int)$row->id;
            }
            if ($row->name === 'license_string_collector') {
                $this->license_string_collector_id = (int)$row->id;
            }
        }

        // Bug fix for a mistyped vbersion in the 5.6.0 release
        if ($this->internal_version === 202411012) {
            $this->internal_version = 20241112;
        }

        if (empty($this->product) or empty($this->license_string)) {
            $this->product = 'community';
            $this->license_footer = '';
        }
        if (!empty($this->servers)) {
            try {
                $this->servers = json_decode($this->servers, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                $this->servers = '';
            }
        }

        if (!empty($this->license_eula)) {
            try {
                $this->license_eula = json_decode($this->license_eula, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                $this->license_eula = '';
            }
        }

        if (empty($this->page_size)) {
            $this->page_size = 1000;
        }

        if (!empty($this->discovery_linux_script_directory) && substr($this->discovery_linux_script_directory, -1) !== '/') {
            $this->discovery_linux_script_directory .= '/';
        }

        $query = $db->query('SELECT NOW() as `timestamp`');
        $result = $query->getRow();
        $this->timestamp = $result->timestamp;

        $query = $db->query("SELECT TIME_FORMAT(TIMEDIFF(NOW(),CONVERT_TZ(NOW(),@@session.time_zone,'+00:00')),'%H%i') AS `tz`");
        $result = $query->getRow();
        if (intval($result->tz) === 0) {
            $this->timezone = 'UTC';
        }
        if (intval($result->tz) > 0) {
            $tz = substr($result->tz, 0, 2) . ':' . substr($result->tz, 2);
            $this->timezone = 'UTC +' . $tz;
            unset($tz);
        }
        if (intval($result->tz) < 0) {
            $tz = substr($result->tz, 0, 2) . ':' . substr($result->tz, 2);
            $this->timezone = 'UTC -' . $tz;
            unset($tz);
        }

        if ($this->internal_version < 20230615) {
            # TODO - remove this and just set both to 0
            $query = $db->query('SELECT count(*) as device_count FROM `system`');
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_count = (int)$result->device_count;
                }
            }
            $query = $db->query("SELECT count(*) as device_count FROM `system` WHERE `type` NOT IN ('unknown', 'unclassified') and ip != '' AND status NOT IN ('deleted', 'retired')");
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_known = (int)$result->device_count;
                }
            }
        }
        if ($this->internal_version >= 20230615) {
            $query = $db->query('SELECT count(*) as device_count FROM `devices`');
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_count = (int)$result->device_count;
                }
            }
            $query = $db->query("SELECT count(*) as device_count FROM `devices` WHERE `type` NOT IN ('unknown', 'unclassified') and ip != '' AND status NOT IN ('deleted', 'retired')");
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_known = (int)$result->device_count;
                }
            }
        }

        foreach ($binaries as $binary) {
            if (file_exists($binary)) {
                $this->enterprise_binary = $binary;
            }
        }

        if (php_uname('s') === 'Darwin') {
            $this->enterprise_binary = '/opt/homebrew/bin/perl /usr/local/oac/enterprise.pl';
        }

        $modules = array();
        $apps = array();
        $this->commercial_dir = '';
        foreach ($commercial_dir as $dir) {
            if (file_exists($dir)) {
                $this->commercial_dir = $dir;
            }
        }
        if (file_exists($this->commercial_dir . '/conf/opCommon.json')) {
            $omkConfig = file_get_contents($this->commercial_dir . '/conf/opCommon.json');
            try {
                $omkConfig = json_decode($omkConfig, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            if (!empty($omkConfig->omkd->load_applications)) {
                $apps = $omkConfig->omkd->load_applications;
            }
        }

        $opLicense = $this->commercial_dir . "/bin/oplicense-cli.pl";
        $modules[] = (object)array("name" => "Applications", "url" => (file_exists($this->commercial_dir)) ? "/omk" : "");
        $modules[] = (object)array("name" => "opCharts", "url" => (in_array('opCharts', $apps, false)) ? "/omk/opCharts" : "https://firstwave.com/products/interactive-dashboards-and-charts/");
        $modules[] = (object)array("name" => "opEvents", "url" => (in_array('opEvents', $apps, false)) ? "/omk/opEvents/" : "https://firstwave.com/products/centralized-log-and-event-management/");
        $modules[] = (object)array("name" => "opConfig", "url" => (in_array('opConfig', $apps, false)) ? "/omk/opConfig" : "https://firstwave.com/products/network-configuration-management/");
        $modules[] = (object)array("name" => "opHA", "url" => (in_array('opHA', $apps, false)) ? "/omk/opHA" : "https://firstwave.com/products/distributed-network-management/");
        $modules[] = (object)array("name" => "opReports", "url" => (in_array('opReports', $apps, false)) ? "/omk/opReports/" : "https://firstwave.com/products/advanced-analysis-and-reporting/");
        $modules[] = (object)array("name" => "opAddress", "url" => (in_array('opAddress', $apps, false)) ? "/omk/opAddress/" : "https://firstwave.com/products/ip-address-audit-and-management/");
        $modules[] = (object)array("name" => "opLicensing", "url" => (file_exists($opLicense)) ? "/omk/opLicense" : "");
        $modules[] = (object)array("name" => "NMIS", "url" => (file_exists($nmis . '/cgi-bin/nmiscgi.pl')) ? "/cgi-nmis9/nmiscgi.pl" : "https://firstwave.com/products/network-management-information-system/");
        $modules[] = (object)array("name" => "Other Modules", "url" => "https://firstwave.com");
        $this->modules = $modules;
    }
}
