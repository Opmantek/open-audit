<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

use Config\Database;

#[\AllowDynamicProperties]

class OpenAudit extends BaseConfig
{
    # leave for backwards compat $this->displayVersion = '5.0.3';
    public string $displayVersion = '5.0.3';
    public int $appVersion = 20231219;

    public array $enterprise_collections = array('applications' => 'cud', 'baselines' => 'crud', 'baselines_policies' => 'crud', 'baselines_results' => 'crud', 'clouds' => 'crud', 'collectors' => 'crud', 'dashboards' => 'cud', 'discovery_scan_options' => 'cud', 'files' => 'crud', 'integrations' => 'crud', 'racks' => 'crud', 'roles' => 'cu');
    public array $professional_collections = array('applications' => 'r', 'clusters' => 'crud', 'dashboards' => 'r', 'discovery_scan_options' => 'r', 'maps' => 'crud', 'rules' => 'crud', 'tasks' => 'crud', 'widgets' => 'crud');
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

        $commercial_dir = array(APPPATH . '../../omk',
            APPPATH . '../../opmojo',
            '/usr/local/omk',
            '/usr/local/opmojo',
            'c:\\omk');

        if (php_uname('s') === 'Windows NT') {
            $commercial_dir = array('c:\\omk');
        }

        $binaries = array(APPPATH . '../other/enterprise.bin', '/usr/local/oac/enterprise.pl');

        if (php_uname('s') === 'Windows NT') {
            $binaries = array(APPPATH . '../other/enterprise.exe');
        }

        $nmis = "/usr/local/nmis9";
        $this->nmis = (!empty(file_exists($nmis))) ? $nmis : '';

        $db = Database::connect();
        $query = $db->query('SELECT * FROM `configuration`');
        $result = $query->getResult();
        foreach ($result as $row) {
            $this->{$row->name} = $row->value;
            if ($row->type === 'number') {
                $this->{$row->name} = intval($row->value);
            }
            if ($row->name === 'oae_prompt') {
                $this->oae_prompt_id = intval($row->id);
            }
            if ($row->name === 'license_string') {
                $this->license_string_id = intval($row->id);
            }
            if ($row->name === 'license_string_collector') {
                $this->license_string_collector_id = intval($row->id);
            }
        }

        if (!empty($this->oae_product)) {
            $this->product = strtolower(str_replace('Open-AudIT ', '', $this->oae_product));
        }
        if (empty($this->product)) {
            $this->product = 'community';
        }

        if (!empty($this->servers)) {
            $this->servers = json_decode($this->servers);
        }

        if (!empty($this->license_eula)) {
            $this->license_eula = json_decode($this->license_eula);
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

        // get the server OS
        $this->server_os = php_uname('s');

        if ($this->server_os === 'Windows NT') {
            $command = 'wmic os get name';
            exec($command, $output);
            if (!empty($output[1])) {
                $os = explode('|', $output[1]);
                $this->server_platform = $os[0];
            }
        } else {
            $command = 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2';
            exec($command, $output);
            if (!empty($output[0])) {
                $this->server_platform = $output[0];
            }
        }

        if ($this->internal_version < 20230615) {
            $query = $db->query('SELECT count(*) as device_count FROM `system`');
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_count = intval($result->device_count);
                }
            }
            $query = $db->query("SELECT count(*) as device_count FROM `system` WHERE `type` NOT IN ('unknown', 'unclassified')");
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_known = intval($result->device_count);
                }
            }
        }
        if ($this->internal_version >= 20230615) {
            $query = $db->query('SELECT count(*) as device_count FROM `devices`');
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_count = intval($result->device_count);
                }
            }
            $query = $db->query("SELECT count(*) as device_count FROM `devices` WHERE `type` NOT IN ('unknown', 'unclassified')");
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_known = intval($result->device_count);
                }
            }
        }

        foreach ($binaries as $binary) {
            if (file_exists($binary)) {
                $this->enterprise_binary = $binary;
            }
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
            if (!empty($omkConfig)) {
                $omkConfig = json_decode($omkConfig);
            }
            if (!empty($omkConfig->omkd->load_applications)) {
                $apps = $omkConfig->omkd->load_applications;
            }
        }

        $opLicense = $this->commercial_dir . "/bin/oplicense-cli.pl";
        $modules[] = (object)array("name" => "Applications", "url" => (file_exists($this->commercial_dir)) ? "/omk" : "");
        $modules[] = (object)array("name" => "opCharts", "url" => (in_array('opCharts', $apps)) ? "/omk/opCharts" : "https://firstwave.com/products/interactive-dashboards-and-charts/");
        $modules[] = (object)array("name" => "opEvents", "url" => (in_array('opEvents', $apps)) ? "/omk/opEvents/" : "https://firstwave.com/products/centralized-log-and-event-management/");
        $modules[] = (object)array("name" => "opConfig", "url" => (in_array('opConfig', $apps)) ? "/omk/opConfig" : "https://firstwave.com/products/network-configuration-management/");
        $modules[] = (object)array("name" => "opHA", "url" => (in_array('opHA', $apps)) ? "/omk/opHA" : "https://firstwave.com/products/distributed-network-management/");
        $modules[] = (object)array("name" => "opReports", "url" => (in_array('opReports', $apps)) ? "/omk/opReports/" : "https://firstwave.com/products/advanced-analysis-and-reporting/");
        $modules[] = (object)array("name" => "opAddress", "url" => (in_array('opAddress', $apps)) ? "/omk/opAddress/" : "https://firstwave.com/products/ip-address-audit-and-management/");
        $modules[] = (object)array("name" => "opLicensing", "url" => (file_exists($opLicense)) ? "/omk/opLicense" : "");
        $modules[] = (object)array("name" => "NMIS", "url" => (file_exists($nmis . '/cgi-bin/nmiscgi.pl')) ? "/cgi-nmis9/nmiscgi.pl" : "https://firstwave.com/products/network-management-information-system/");
        $modules[] = (object)array("name" => "Other Modules", "url" => "https://firstwave.com");
        $this->modules = $modules;
    }
}
