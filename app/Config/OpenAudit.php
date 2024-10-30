<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Config\Database;

#[\AllowDynamicProperties]

class OpenAudit extends BaseConfig
{
    # leave for backwards compat $this->displayVersion = '5.6.0';
    public string $displayVersion = '5.6.0';
    public int $appVersion = 20241112;

    public float $microtime = 0;
    public int $collector_connect_timeout = 10;
    public int $collector_inactivity_timeout = 30;
    public int $collector_insecure = 1;
    public int $collector_request_timeout = 240;
    public int $device_count = 0;
    public int $device_known = 0;
    public int $device_license = 0;
    public int $oae_prompt_id = 0;
    public string $enterprise_binary = '';
    public string $homepage = 'summaries';
    public string $nmis = '';
    public string $product = 'community';
    public string $server_os = '';
    public string $server_platform = '';

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
