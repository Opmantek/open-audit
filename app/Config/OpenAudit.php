<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

use Config\Database;

class OpenAudit extends BaseConfig
{
    public function __construct()
    {
        $this->appVersion = 20230615;
        $this->displayVersion = '5.0.0';
        $this->microtime = microtime(true);

        parent::__construct();
        $db = Database::connect();
        $query = $db->query('SELECT * FROM `configuration`');
        $result = $query->getResult();
        foreach ($result as $row) {
            if ($row->type === 'number') {
                $this->{$row->name} = intval($row->value);
            } else {
                $this->{$row->name} = $row->value;
            }
        }

        if (stripos($this->product, 'enterprise')) {
            $this->product = 'enterprise';
        } else if (stripos($this->product, 'professional')) {
            $this->roduct = 'professional';
        } else {
            $this->product = 'community';
        }

        if (!empty($this->servers)) {
            $this->servers = json_decode($this->servers);
        }

        if (empty($this->page_size)) {
            $this->page_size = 1000;
        }

        if (!empty($this->discovery_linux_script_directory) && substr($this->discovery_linux_script_directory, -1) !== '/') {
            $this->discovery_linux_script_directory .= '/';
        }

        $this->oa_web_index = site_url();

        $temp = explode('/', base_url());
        unset($temp[0], $temp[1], $temp[2]);
        $this->oa_web_folder =  '/' . implode('/', $temp);

        $query = $db->query('SELECT NOW() as `timestamp`');
        $result = $query->getRow();
        $this->timestamp = $result->timestamp;

        $query = $db->query("SELECT TIME_FORMAT(TIMEDIFF(NOW(),CONVERT_TZ(NOW(),@@session.time_zone,'+00:00')),'%H%i') AS `tz`");
        $result = $query->getRow();
        $this->timezone = $result->tz;
        if ($this->timezone >= 0) {
            $this->timezone = 'UTC +' . $this->timezone;
        } else {
            $this->timezone = 'UTC ' . $this->timezone;
        }

        // get the server OS
        $this->server_os = php_uname('s');

        // get the total number of devices
        if ($this->internal_version > 20230614) {
            $query = $db->query('SELECT count(*) as device_count FROM `devices`');
            if (!empty($query)) {
                $result = $query->getRow();
                $this->device_count = @intval($result->device_count);
            }
        }

        $this->enterprise_collections = array('applications' => 'cud', 'baselines' => 'crud', 'baselines_policies' => 'crud', 'baselines_results' => 'crud', 'clouds' => 'crud', 'collectors' => 'crud', 'dashboards' => 'cud', 'discovery_scan_options' => 'cud', 'files' => 'crud', 'integrations' => 'crud', 'racks' => 'crud', 'roles' => 'cu');

        $this->professional_collections = array('applications' => 'r', 'clusters' => 'crud', 'dashboards' => 'r', 'discovery_scan_options' => 'r', 'maps' => 'crud', 'rules' => 'crud', 'tasks' => 'crud', 'widgets' => 'crud');

        # We cannot change the threshold after creation.
        # Leaving the below, but it won't have any effect.
        # config('Logger')->threshold = intval($this->log_level);
    }
}
