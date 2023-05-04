<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

use Config\Database;

class OpenAudit extends BaseConfig
{
    public function __construct()
    {
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

        if ($this->page_size === 0) {
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
        $query = $db->query('SELECT count(*) as device_count FROM `devices`');
        if (!empty($query)) {
            $result = $query->getRow();
            $this->device_count = @intval($result->device_count);
        }

        // if ((string) php_uname('s') === 'Windows NT') {
        //     $this->config->config['base_path'] = str_replace('\code_igniter\application\models\m_configuration.php', '', __FILE__);
        // } else {
        //     $this->config->config['base_path'] = str_replace('/code_igniter/application/models/m_configuration.php', '', __FILE__);
        // }

        // $this->load->helper('network');
        // $this->config->config['ip'] = server_ip();
        // $this->config->config['is_ssl'] = is_ssl();

        if (isset($_SERVER['HTTP_HOST'])) {
            $is_secure = false;
            if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) === 'on') {
                $is_secure = true;
            } elseif (!empty($_SERVER['HTTPS_X_FORWARDED_PROTO']) && $_SERVER['HTTPS_X_FORWARDED_PROTO'] === 'https') {
                $is_secure = true;
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on') {
                $is_secure = true;
            }
            $this->base_url = $is_secure ? 'https' : 'http';
            $this->base_url .= '://'.$_SERVER['HTTP_HOST'];
            $this->base_url .= isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80' ? ( ':'.$_SERVER['SERVER_PORT'] ) : '';
            $this->base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        } else {
            $this->base_url = 'http://localhost/';
        }
    }
}
