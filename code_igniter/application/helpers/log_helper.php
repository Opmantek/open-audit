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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * 
 * @version 1.14
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('log_error')) {

    function log_error($error_code, $model = '')
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

        // log the details of the error to the log file
        $error->file = 'system';
        stdlog($error);

        if (!empty($error->controller) and !empty($eror->function)) {
            $error->controller = $error->controller . '::' . $error->function;
        } else {
            $error->controller = '';
        }
        unset($error->function);
        if (empty($error->status)) {
            $error->status = '';
        }
        // if the error is severe enough, set the error in the response object
        #if (isset($error->severity) and $error->severity <= 3) {
            error_reporting(E_ALL);
            unset($error->file); # we don't care about where this was logged (into which file)
            $error->link = $CI->config->config['oa_web_folder'] . '/index.php/errors/' . $error->code;
            if (!empty($CI->response)) {
                $CI->response->errors[] = $error;
                $CI->response->meta->header = $error->status;
            }
        #}
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
            $log->command_time_to_execute = '';
        }
        if (empty($log->command_output)) {
            $log->command_output = '';
        }

        if (!is_null($log->id)) {
            $sql = "/* log_helper::discovery_log */ " . "UPDATE discovery_log SET command = ?, command_status = ?, command_time_to_execute = ?, command_output = ? WHERE id = ?";
            $data = array((string)$log->command, (string)$log->command_status, $log->command_time_to_execute, (string)$log->command_output, $log->id);
            $query = $CI->db->query($sql, $data);
            return($log->id);
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
            return($CI->db->insert_id());
        }
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
        $log['type'] = 'access';
        $log['severity'] = 7;
        $log['severity_text'] = 'notice';
        $log['pid'] = getmypid();
        $log['user'] = '';
        $log['server'] = php_uname('n');
        $log['ip'] = $_SERVER['REMOTE_ADDR'];
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

        if (!empty($CI->response->meta->action)) {
            $log['action'] = $CI->response->meta->action;
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

        if (intval($CI->config->config['internal_version']) <= 20160810) {
            $sql = "SELECT * FROM information_schema.tables WHERE TABLE_SCHEMA = '" . $CI->db->database . "' AND TABLE_NAME = 'logs'";
            $query = $CI->db->query($sql);
            $result = $query->result();
            if (count($result) == 0) {
                $sql = "CREATE TABLE `logs` (
                      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                      `timestamp` timestamp DEFAULT CURRENT_TIMESTAMP,
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

        $sql = "/* log_helper */" . "INSERT INTO `logs` VALUES (NULL, NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $CI->db->query($sql, $log);
    }
}


if (! function_exists('stdlog1')) {
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
    function stdlog1($log_details = null)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        // log_details:
        //  timestamp - default to current. Format is YYYY-MM-DD HH:II:SS
        //  severity - default to 5
        //  log level - default to 5, default set in config, can be over written
        //  file - the log file to write to. Default to 'access'.
        //         this will log to /other/log_access.log Others used are system (which replaces open-audit.log) and debug.
        //  pid - default to PHP function to retrieve PHP script PID
        //  hostname - default to PHP function to retrieve hostname of current server
        //  user - default to user calling function
        //  style - json or syslog - default to json, default set in config, can be over written
        //  ip address - the address of the client calling the function
        //  display - echo the log entry $message to the screen - n is the default
        //  message

        // setup the default values
        $log = new stdClass();
        $log->timestamp = '';
        $log->severity = '';
        $log->severity_text = '';
        $log->log_level = '';
        $log->file = '';
        $log->pid = '';
        $log->hostname = '';
        $log->user = '';
        $log->style = '';
        $log->controller = '';
        $log->function = '';
        $log->display = '';
        $log->ip_address = '';
        $log->message = '';

        $log->database = '';
        $log->name = '';
        $log->org_id = 0;
        $log->collection = '';
        $log->action = '';
        $log->collection_id = '';
        $log->title = '';
        $log->command = '';
        $log->command_complete = '';
        $log->command_time_to_execute = '';
        $log->command_error_message = '';



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

        // We create a new object instead of simply populating the existing with defaults so we can set the attribute order
        // The original passed object is $log_details, the new object is $log

        $CI->load->model('m_oa_config');

        // set the line ending type
        if (php_uname('s') == 'Windows NT') {
            $line_end = "\r\n";
        } else {
            $line_end = "\n";
        }

        // get the log_style or default to syslog
        if (!isset($log_details->style) or $log_details->style == '' or ($log_details->style != 'json' and $log_details->style != 'syslog')) {
            $log->style = $CI->config->item('log_style');
            if (!isset($log->style) or $log->style != 'json') {
                $log->style = 'syslog';
            }
        } else {
            $log->style = $log_details->style;
        }

        // get the log level or default to 5.
        if (!isset($log_details->log_level) or $log_details->log_level == '') {
            $log->log_level = $CI->config->item('log_level');
            if (!isset($log->log_level) or $log->log_level == '') {
                $log->log_level = '5';
            }
        } else {
            $log->log_level = $log_details->log_level;
        }

        if (!isset($log_details->timestamp) or $log_details->timestamp == '') {
            $log->timestamp = $CI->config->item('timestamp');
        } else {
            $log->timestamp = $log_details->timestamp;
        }

        if (!isset($log_details->severity) or $log_details->severity == '') {
            $log->severity = 5;
        } else {
            $log->severity = $log_details->severity;
        }

        if (!isset($log_details->message) or $log_details->message == '') {
            $log->message = 'Access';
        } else {
            $log->message = $log_details->message;
        }

        if (!isset($log_details->display) or $log_details->display == '' or
        ($log_details->display != 'y' and $log_details->display != 'n')) {
            $log->display = 'n';
        } else {
            $log->display = $log_details->display;
        }
        if ($log->display == 'y') {
            echo "LOG   - ".$log->message."\n";
        }

        // check the requested logging level and if not met, exit
        if (intval($log->severity) > intval($log->log_level)) {
            // log called but log severity level not met
            return;
            // $log->message .= ' Severity:' . $log->severity . ' Level:' . $log->log_level . ' ';
        }

        if (!isset($log_details->severity_text) or $log_details->severity_text == '') {
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
        } else {
            $log->severity_text = $log_details->severity_text;
        }

        if (!isset($log_details->pid) or $log_details->pid == '') {
            $log->pid = getmypid();
        } else {
            $log->pid = $log_details->pid;
        }
        if (!isset($log->pid) or $log->pid == '') {
            $log->pid = '-';
        }

        if (!isset($log_details->hostname) or $log_details->hostname == '') {
            $log->hostname = php_uname('n');
        } else {
            $log->hostname = $log_details->hostname;
        }

        if (!isset($log_details->controller) or $log_details->controller == '') {
            $router = & load_class('Router', 'core');
            $log->controller = $router->fetch_class();
            unset($router);
        } else {
            $log->controller = $log_details->controller;
        }
        if (!isset($log->controller) or $log->controller == '') {
            $log->controller = '-';
        }

        if (!isset($log_details->function) or $log_details->function == '') {
            $router = & load_class('Router', 'core');
            $log->function = $router->fetch_method();
            unset($router);
        } else {
            $log->function = $log_details->function;
        }

        if (!isset($log->function) or $log->function == '') {
            $log->function = '-';
        }

        if (!isset($log_details->user) or $log_details->user == '') {
            if (isset($CI->user->full_name)) {
                $log->user = @$CI->user->full_name;
            } else {
                $log->user = '-';
            }
        } else {
            $log->user = $log_details->user;
        }

        if (isset($_SERVER['REMOTE_ADDR']) and $_SERVER['REMOTE_ADDR'] != '') {
            $log->ip_address = $_SERVER['REMOTE_ADDR'];
        } else {
            $log->ip_address = '-';
        }

        // create the log line depending on style
        if ($log->style == 'json') {
            $log_line = json_encode($log);
        }
        if ($log->style == 'syslog') {
            $log_line = $log->timestamp.' '.$log->hostname.' '.$log->pid.' '.$log->severity.' U:'.$log->user.' C:'.$log->controller.' F:'.$log->function.' I:'.$log->ip_address.' M:'.$log->message;
        }

        if (empty($log_details->file)) {
            $log->file = 'access';
        } else if ($log_details->file == '') {
            $log->file = 'access';
        } else if (strtolower($log_details->file) == 'access') {
            $log->file = 'access';
        } else if (strtolower($log_details->file) == 'system') {
            $log->file = 'system';
        } else {
            $log->file = 'access';
        }

        if (php_uname('s') == 'Windows NT') {
            if (empty($CI->config->config['base_path'])) {
                $file = 'c:\\xampplite\\open-audit\\other\\log_' . $log->file . '.log';
            } else {
                $file = $CI->config->item('base_path') . '\\other\\log_' . $log->file . '.log';
            }
        } else {
            if (empty($CI->config->config['base_path'])) {
                $file = '/usr/local/open-audit/other/log_' . $log->file . '.log';
            } else {
                $file = $CI->config->item('base_path') . '/other/log_' . $log->file . '.log';
            }
        }

        // Our SQL insert, before we attempt to write to the log file (which may fail, permissions, etc).
        if (!isset($log_details->database) or strtolower($log_details->database) != 'y') {
            // TODO - unset this for release
            $log->database = 'n';
        } else {
            $log->database = 'y';
        }

        if (!empty($log_details->name)) {
            $log->name = $log_details->name;
        } else {
            $log->name = $log->file;
        }

        if (!empty($log_details->org_id)) {
            $log->org_id = intval($log_details->org_id);
        }

        if (empty($log_details->collection)) {
            $log->collection = $log->controller;
        } else {
            $log->collection = $log_details->collection;
        }

        if (empty($log_details->action)) {
            $log->action = $log->function;
        } else {
            $log->action = $log_details->action;
        }

        if (!isset($log_details->collection_id) or $log_details->collection_id == '') {
            $log->collection_id = 0;
        } else {
            $log->collection_id = $log_details->collection_id;
        }

        if (!empty($log_details->title)) {
            $log->title = $log_details->title;
        }

        if (!empty($log_details->command)) {
            $log->command = $log_details->command;
        }

        if (!empty($log_details->command_complete)) {
            $log->command_complete = $log_details->command_complete;
        }

        if (!empty($log_details->command_time_to_execute)) {
            $log->command_time_to_execute = $log_details->command_time_to_execute;
        }

        if (!empty($log_details->command_error_message)) {
            $log->command_error_message = $log_details->command_error_message;
        }

        if ($log->database == 'not_yet') {
            $sql = "/* log_helper::stdlog */ INSERT INTO logs VALUES (NULL, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $data = array((string)$log->name,
                            intval($log->org_id),
                            intval($log->severity),
                            (string)$log->severity_text,
                            intval($log->pid),
                            (string)$log->collection,
                            (string)$log->action,
                            intval($log->collection_id),
                            (string)$log->title,
                            (string)$log->message,
                            (string)$log->hostname,
                            (string)$log->ip_address,
                            (string)$log->user);
            $query = $CI->db->query($sql, $data);
        }

        // log the page view
        $handle = @fopen($file, 'a');
        if (!$handle) {
            // some error happend - could not open or create file
            //
            // create an extra log line and attempt to open the traditional
            // log file at open-audit.log
            if (file_exists($file)) {
                $message = 'File exists. Check it\'s permissions are OK for the web server user. Permissions are '.substr(sprintf('%o', fileperms($file)), -3);
            } else {
                $directory = str_replace('log_'.$log->file.'.log', '', $file);
                $message = 'File does not exist and cannot be created. Check the directory permissions are writable for the web server user. They are currently '.substr(sprintf('%o', fileperms($directory)), -3);
            }
            $message = 'Could not open requested log file at '.$file.', opening traditional log file instead. '.$message;
            if ($log->style == 'json') {
                $extra_log_line = $log;
                $extra_log_line->message = $message;
                $extra_log_line = json_encode($extra_log_line);
            }
            if ($log->style == 'syslog') {
                $extra_log_line = $log->timestamp.' '.$log->hostname.' '.$log->severity.' '.$log->user.' '.$log->controller.' '.$log->function.' '.$message;
            }
            $file = $CI->config->item('base_path') . '/other/open-audit.log';
            $handle = @fopen($file, 'a');
        }
        if (!$handle) {
            // ERROR cannot open either the requested or traditional log files.
        } else {
            if (isset($extra_log_line) and $extra_log_line != '') {
                fwrite($handle, $extra_log_line.$line_end);
            }
            fwrite($handle, $log_line.$line_end);
            fclose($handle);
        }
        unset($log);
        unset($log_details);
    }
}
/* End of file log_helper.php */
/* Location: ./system/application/helpers/log_helper.php */
