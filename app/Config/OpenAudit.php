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
            $this->{$row->name} = $row->value;
            if ($row->type === 'number') {
                $this->{$row->name} = intval($row->value);
            }
            if ($row->name === 'oae_prompt') {
                $this->oae_prompt_id = $row->id;
            }
        }

        if (!empty($this->oae_product)) {
            $this->product = $this->oae_product;
        }
        if (empty($this->product)) {
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

        // get the total number of devices
        $this->device_count = 0;
        if ($this->internal_version < 20230615) {
            $query = $db->query('SELECT count(*) as device_count FROM `system`');
            if (!empty($query)) {
                $result = $query->getRow();
                if (!empty($result->device_count)) {
                    $this->device_count = intval($result->device_count);
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
        }

        $this->enterprise_collections = array('applications' => 'cud', 'baselines' => 'crud', 'baselines_policies' => 'crud', 'baselines_results' => 'crud', 'clouds' => 'crud', 'collectors' => 'crud', 'dashboards' => 'cud', 'discovery_scan_options' => 'cud', 'files' => 'crud', 'integrations' => 'crud', 'racks' => 'crud', 'roles' => 'cu');

        $this->professional_collections = array('applications' => 'r', 'clusters' => 'crud', 'dashboards' => 'r', 'discovery_scan_options' => 'r', 'maps' => 'crud', 'rules' => 'crud', 'tasks' => 'crud', 'widgets' => 'crud');
    }
}
