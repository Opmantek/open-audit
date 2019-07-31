<?php
if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
}
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

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.0
* @link      http://www.open-audit.org
 */
if (! function_exists('log_error')) {

    function log_error($error_code, $model = '', $message = '')
    {
        $CI = & get_instance();
        # ensure we have an array in the $response object to hold our error
        if (!empty($CI->response)) {
            if (!isset($CI->response->errors) or is_null($CI->response->errors)) {
                $CI->response->errors = array();
            }
        }

        # this object will hold this specific error data and be added to the above array at the end
        $error = new stdClass();
        $error->code = $error_code;
        $error->model = $model;
        if (function_exists('getError')) {
            $error = getError($error->code, $model);
            $error->summary = $error->title;
        }

        if (!empty($message)) {
            $error->message = $message;
        }

        // log the details of the error to the log file
        $error->file = 'system';
        stdlog($error);

        if (!empty($error->controller) and !empty($error->function)) {
            $error->controller = $error->controller . '::' . $error->function;
        } else {
            $error->controller = '';
        }
        unset($error->function);
        if (empty($error->status)) {
            $error->status = '';
        }

        error_reporting(E_ALL);
        unset($error->file); # we don't care about where this was logged (into which file)
        $error->link = $CI->config->config['oa_web_folder'] . '/index.php/errors/' . $error->code;
        if (!empty($CI->response)) {
            $CI->response->errors[] = $error;
            $CI->response->meta->header = $error->status;
        }
    }

}

if (! function_exists('discovery_log')) {
      /**
     * The database logging function for Open-AudIT. Writes logs to a table in the DB.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     Object    log     An object containing details you wish to log
     *
     * @return    id - the id of the inserted log entry
     */
    function discovery_log($log = null)
    {
        /*
        All attributes are optional
        $log->discovery_id,            The ID of the discovery being performed (if known)
        $log->system_id,
        $log->severity,
        $log->severity_text,           Will be calculated from int(severity)
        $log->pid,
        $log->ip,
        $log->file,
        $log->function,
        $log->message,                 a user fiendly message
        $log->command,                 the command that was run (usually a command shell or SNMP command)
        $log->command_status,          usually the return error status
        $log->command_time_to_execute, the time the below took to run
        $log->command_output           if a string, the result of the command
        */

        error_reporting(E_ALL);
        $CI = & get_instance();

        if (empty($log)) {
            return;
        }
        if (empty($log->id)) {
            $log->id = null;
        }
        if (empty($log->discovery_id)) {
            $log->discovery_id = null;
        }
        if (empty($log->system_id)) {
            $log->system_id = null;
        }
        // ignored at present, use MySQL NOW() function
        if (empty($log->timestamp)) {
            $log->timestamp = date('Y-m-d H:i:s');
        }
        if (empty($log->severity)) {
            $log->severity = 5;
        } else {
            $log->severity = intval($log->severity);
        }
        if (empty($log->severity_text)) {
            $log->severity_text = 'unknown';
            if ($log->severity == 7) {
                $log->severity_text = 'debug';
            }
            if ($log->severity == 6) {
                $log->severity_text = 'info';
            }
            if ($log->severity == 5) {
                $log->severity_text = 'notice';
            }
            if ($log->severity == 4) {
                $log->severity_text = 'warning';
            }
            if ($log->severity == 3) {
                $log->severity_text = 'error';
            }
            if ($log->severity == 2) {
                $log->severity_text = 'critical';
            }
            if ($log->severity == 1) {
                $log->severity_text = 'alert';
            }
            if ($log->severity == 0) {
                $log->severity_text = 'emergency';
            }
        }
        if (!isset($log->pid) or $log->pid == '') {
            $log->pid = getmypid();
        } else {
            $log->pid = intval($log->pid);
        }
        if (empty($log->ip)) {
            $log->ip = '';
        }
        if (empty($log->file)) {
            $router = & load_class('Router', 'core');
            $log->file = $router->fetch_class();
            unset($router);
        }
        if (empty($log->function)) {
            $router = & load_class('Router', 'core');
            $log->function = $router->fetch_method();
            unset($router);
        }
        if (empty($log->message)) {
            $log->message = '';
        }
        if (empty($log->command)) {
            $log->command = '';
        }
        if (empty($log->command_status)) {
            $log->command_status = '';
        }
        if (empty($log->command_time_to_execute)) {
            $log->command_time_to_execute = '0';
        }
        if (empty($log->command_output)) {
            $log->command_output = '';
        }

        if (!is_null($log->id)) {
            $sql = "/* log_helper::discovery_log */ " . "UPDATE discovery_log SET command = ?, command_status = ?, command_time_to_execute = ?, command_output = ? WHERE id = ?";
            $data = array((string)$log->command, (string)$log->command_status, $log->command_time_to_execute, (string)$log->command_output, $log->id);
            $query = $CI->db->query($sql, $data);
            $return_id = intval($log->id);
        } else {
            $sql = "/* log_helper::discovery_log */ " . "INSERT INTO discovery_log VALUES (NULL, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $data = array($log->discovery_id,
                            $log->system_id,
                            $log->severity,
                            $log->severity_text,
                            $log->pid,
                            (string)$log->ip,
                            $log->file,
                            $log->function,
                            $log->message,
                            $log->command,
                            $log->command_status,
                            $log->command_time_to_execute,
                            $log->command_output);
            $query = $CI->db->query($sql, $data);
            $return_id = intval($CI->db->insert_id());
        }

        # If we are a collector, forward the log
        if ($CI->config->config['servers'] !== '') {
            $post_items = array();
            $post_items[] = 'type=discovery';
            foreach ( $log as $key => $value) {
                if ($key != 'id' and $key != 'system_id') {
                    $post_items[] = $key . '=' . urlencode($value);
                }
            }
            $post = implode('&', $post_items);
            $server = json_decode($CI->config->config['servers']);
            if (!empty($server->host) and !empty($server->community)) {
                $connection = curl_init($server->host . $server->community . '/index.php/input/logs');
                curl_setopt($connection, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
                curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($connection, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($connection, CURLOPT_POSTFIELDS, $post);
                curl_exec($connection);
                // if (curl_errno($connection)) {
                //     $log->message = 'Failed to send log to ' . $server->host;
                //     $log->severity = 4;
                //     $log->command = json_encode(curl_getinfo($connection));
                //     $log->command_output = curl_errno($connection) . ' - ' . curl_error($connection);
                //     discovery_log($log);
                // }
                if (curl_errno($connection)) {
                    $standard_log = new stdClass();
                    $standard_log->action = 'log_helper::discoverylog';
                    $standard_log->function = curl_errno($connection) . ' - ' . curl_error($connection);
                    $standard_log->summary = 'Failed to send log to ' . $server->host . $server->community . '/index.php/input/logs';
                    $standard_log->status = 'fail';
                    $standard_log->detail  = json_encode(curl_getinfo($connection));
                    $standard_log->severity = 4;
                    $standard_log->type = 'system';
                    stdlog($standard_log);
                }
                curl_close($connection);
            }
        }

        # Special case because the log submit may work, but the discovery process may not.
        # If we have this special string, mark the discovery as complete.
        if (stripos($log->message, 'Completed discovery, scanned') !== false and !empty($log->discovery_id)) {
            $sql = "/* log_helper::discovery_log */ " . "UPDATE `discoveries` SET `complete` = 'y' WHERE id = ?";
            $data = array($log->discovery_id);
            $query = $CI->db->query($sql, $data);
        }

        return $return_id;
    }
}


if (! function_exists('stdlog')) {
    /**
     * The standard log function for Open-AudIT. Writes logs to a text file in the desired format (json or syslog).
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     Object    log_details     An object containing details you wish to log
     *
     * @return NULL [logs the provided string to the log file]
     */
    function stdlog($log_details = null)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();
        $router = & load_class('Router', 'core');

        // log_details:
        //  timestamp - default to current. Format is YYYY-MM-DD HH:II:SS
        //  request_microtime - microtime as provided by PHP and store at the start of every request in $CI->config->config['microtime']
        //  severity - default to 5
        //  log level - default to 5, default set in config, can be over written
        //  type - the log file to write to. Default to 'access'.and debug.
        //  pid - default to PHP function to retrieve PHP script PID
        //  hostname - default to PHP function to retrieve hostname of current server
        //  user - default to user calling function
        //  ip - the address of the client calling the function
        //  display - echo the log entry $message to the screen - n is the default
        //  message

        // SEVERITY LEVELS
        // The logging levels described by RFC 5424.
        // DEBUG (7): Detailed debug information.
        // INFO (6): Interesting events. Examples: User logs in, SQL logs.
        // NOTICE (5): Normal but significant events.
        // WARNING (4): Exceptional occurrences that are not errors. Examples: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
        // ERROR (3): Runtime errors that do not require immediate action but should typically be logged and monitored.
        // CRITICAL (2): Critical conditions. Example: Application component unavailable, unexpected exception.
        // ALERT (1): Action must be taken immediately. Example: Entire website down, database unavailable, etc. This should trigger the SMS alerts and wake you up.
        // EMERGENCY (0): Emergency: system is unusable.

        // `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        // `timestamp` timestamp DEFAULT CURRENT_TIMESTAMP,
        // `type` varchar(200) NOT NULL DEFAULT '',
        // `severity` int(10) unsigned NOT NULL DEFAULT 0,
        // `severity_text` varchar(20) NOT NULL DEFAULT '',
        // `pid` int(10) unsigned NOT NULL DEFAULT 0,
        // `user` varchar(200) NOT NULL DEFAULT '',
        // `server` varchar(200) NOT NULL DEFAULT '',
        // `ip` varchar(200) NOT NULL DEFAULT '',
        // `collection` varchar(200) NOT NULL DEFAULT '',
        // `action` varchar(200) NOT NULL DEFAULT '',
        // `function` varchar(200) NOT NULL DEFAULT '',
        // `status` varchar(200) NOT NULL DEFAULT '',
        // `summary` text NOT NULL DEFAULT '',
        // `detail` varchar(200) NOT NULL DEFAULT '',

        // setup the default values
        $log = array();
        $log['request_microtime'] = $CI->config->config['microtime'];
        $log['type'] = 'access';
        $log['severity'] = 7;
        $log['severity_text'] = 'notice';
        $log['pid'] = getmypid();
        $log['user'] = '';
        $log['server'] = php_uname('n');
        $log['ip'] = '127.0.0.1';
        if (!empty($_SERVER['REMOTE_ADDR'])) {
            $log['ip'] = $_SERVER['REMOTE_ADDR'];
        }
        $log['collection'] = '';
        $log['action'] = '';
        $log['function'] = $router->fetch_method();
        $log['status'] = '';
        $log['summary'] = '';
        $log['detail'] = '';

        if (!empty($log_details->file)) {
            $log['type'] = $log_details->file;
        }
        if (!empty($log_details->type)) {
            $log['type'] = $log_details->type;
        }

        if (!empty($log_details->severity)) {
            $log['severity'] = intval($log_details->severity);
        }
        switch ($log['severity']) {
            case 0:
                $log['severity_text'] = 'emergency';
                break;
            case 1:
                $log['severity_text'] = 'alert';
                break;
            case 2:
                $log['severity_text'] = 'critical';
                break;
            case 3:
                $log['severity_text'] = 'error';
                break;
            case 4:
                $log['severity_text'] = 'warning';
                break;
            case 5:
                $log['severity_text'] = 'notice';
                break;
            case 6:
                $log['severity_text'] = 'info';
                break;
            case 7:
                $log['severity_text'] = 'debug';
                break;
            
            default:
                # code...
                break;
        }

        if (!empty($CI->user->full_name)) {
            $log['user'] = $CI->user->full_name;
        }

        if (empty($log_details->log_level)) {
            $log_level = intval($CI->config->item('log_level'));
        } else {
            $log_level = intval($log_details->log_level);
        }
        if ($log['severity'] > $log_level) {
            // log called but log severity level not met
            return;
        }
        unset($log_level);

        if (!empty($log_details->user)) {
            $log['user'] = $log_details->user;
        }

        if (!empty($CI->response->meta->collection)) {
            $log['collection'] = $CI->response->meta->collection;
        }

        if (empty($log_details->action) and !empty($CI->response->meta->action)) {
            $log['action'] = $CI->response->meta->action;
        }

        if (!empty($log_details->action)) {
            $log['action'] = $log_details->action;
        }

        if (!empty($log_details->function)) {
            $log['function'] = $log_details->function;
        }

        if (!empty($log_details->message)) {
            $log['detail'] = $log_details->message;
        }
        if (!empty($log_details->detail)) {
            $log['detail'] = $log_details->detail;
        }

        if (!empty($log_details->title)) {
            $log['title'] = $log_details->title;
        }

        if (!empty($log_details->code)) {
            $log['code'] = $log_details->code;
        }

        if (!empty($log_details->status)) {
            $log['status'] = $log_details->status;
        }

        if (!empty($log_details->summary)) {
            $log['summary'] = $log_details->summary;
        }

        if (!empty($log_details->detail)) {
            $log['detail'] = $log_details->detail;
        }

        if (intval($CI->config->config['internal_version']) <= 20160820) {
            // $sql = "/* log_helper */" . "SELECT * FROM information_schema.tables WHERE TABLE_SCHEMA = '" . $CI->db->database . "' AND TABLE_NAME = 'logs'";
            // $query = $CI->db->query($sql);
            // $result = $query->result();
            // if (count($result) === 0) {
            if (!$CI->db->table_exists('logs')) {
                $sql = "CREATE TABLE `logs` (
                      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                      `timestamp` timestamp DEFAULT CURRENT_TIMESTAMP,
                      `request_microtime` varchar(50) NOT NULL DEFAULT '',
                      `type` varchar(200) NOT NULL DEFAULT '',
                      `severity` int(10) unsigned NOT NULL DEFAULT 0,
                      `severity_text` varchar(20) NOT NULL DEFAULT '',
                      `pid` int(10) unsigned NOT NULL DEFAULT 0,
                      `user` varchar(200) NOT NULL DEFAULT '',
                      `server` varchar(200) NOT NULL DEFAULT '',
                      `ip` varchar(200) NOT NULL DEFAULT '',
                      `collection` varchar(200) NOT NULL DEFAULT '',
                      `action` varchar(200) NOT NULL DEFAULT '',
                      `function` varchar(200) NOT NULL DEFAULT '',
                      `status` varchar(200) NOT NULL DEFAULT '',
                      `summary` text NOT NULL DEFAULT '',
                      `detail` text NOT NULL DEFAULT '',
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
                $query = $CI->db->query($sql);
            }
        }

        if (!$CI->db->field_exists('request_microtime', 'logs')) {
            $sql = "SHOW COLUMNS FROM `logs` WHERE Field = 'request_microtime'";
            $query = $CI->db->query($sql);
            $result = $query->result();
            if (count($result) === 0) {
                $sql = "ALTER TABLE `logs` ADD `request_microtime` varchar(50) NOT NULL DEFAULT '' AFTER `timestamp`";
                $query = $CI->db->query($sql);
            }
        }

        $sql = "/* log_helper */ " . "INSERT INTO `logs` VALUES (NULL, NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $CI->db->query($sql, $log);

        if ($CI->db->_error_message()) {
            return false;
        } else {
            return true;
        }
    }
}

/* End of file log_helper.php */
/* Location: ./system/application/helpers/log_helper.php */
