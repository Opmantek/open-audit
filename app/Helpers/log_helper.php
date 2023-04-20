<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

if (! function_exists('log_error')) {

    function log_error($error_code, $model = '', $message = '')
    {
        $CI = & get_instance();
        // ensure we have an array in the $response object to hold our error
        if (! empty($CI->response)) {
            if (! isset($CI->response->errors) or is_null($CI->response->errors)) {
                $CI->response->errors = array();
            }
        }

        // this object will hold this specific error data and be added to the above array at the end
        $error = new stdClass();
        $error->code = $error_code;
        $error->model = $model;
        if (function_exists('getError')) {
            $error = getError($error->code, $model);
            $error->summary = $error->title;
        }

        if (! empty($message)) {
            $error->message = $message;
        }

        // log the details of the error to the log file
        $error->file = 'system';
        stdlog($error);

        if (! empty($error->controller) && ! empty($error->function)) {
            $error->controller = $error->controller . '::' . $error->function;
        } else {
            $error->controller = '';
        }
        unset($error->function);
        if (empty($error->status)) {
            $error->status = '';
        }

        error_reporting(E_ALL);
        unset($error->file); // we don't care about where this was logged (into which file)
        $error->link = $CI->config->config['oa_web_folder'] . '/index.php/errors/' . $error->code;
        if (! empty($CI->response)) {
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
        if (! isset($log->pid) or $log->pid == '') {
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

        if (! empty($log->message) && stripos($log->message, 'Collector - Starting discovery') === 0 && ! empty($log->discovery_id)) {
            // Special clear of local discovery logs if start of a Collector discovery
            $sql = 'DELETE from discovery_log WHERE discovery_id = ?';
            $data = array(intval($log->discovery_id));
            $query = $CI->db->query($sql, $data);
        }

        if (! is_null($log->id)) {
            $sql = '/* log_helper::discovery_log */ ' . 'UPDATE discovery_log SET command = ?, command_status = ?, command_time_to_execute = ?, command_output = ? WHERE id = ?';
            $data = array((string)$log->command, (string)$log->command_status, $log->command_time_to_execute, (string)$log->command_output, $log->id);
            $query = $CI->db->query($sql, $data);
            $return_id = intval($log->id);
        } else {
            $sql = '/* log_helper::discovery_log */ ' . 'INSERT INTO discovery_log VALUES (NULL, ?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
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

        // If we are a collector, forward the log
        if ($CI->config->config['servers'] !== '') {
            $post_items = array();
            $post_items[] = 'type=discovery';
            $log->message = str_replace('Collector - ', '', $log->message);
            $log->message = 'Collector - ' . $log->message;
            if (stripos($log->command, 'Rules Match - ') === 0 && stripos($log->command, ', ID: ') !== false) {
                $original_command = $log->command;
                $temp = explode(':', $log->command);
                $log->command = str_replace(', ID', '', $temp[0]);
            }
            foreach ($log as $key => $value) {
                if ($key !== 'id' && $key !== 'system_id') {
                    $post_items[] = $key . '=' . urlencode($value);
                }
            }
            $post = implode('&', $post_items);
            $server = json_decode($CI->config->config['servers']);
            if (! empty($server->host) and ! empty($server->community)) {
                $connection = curl_init($server->host . $server->community . '/index.php/input/logs');
                curl_setopt($connection, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($connection, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)');
                curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($connection, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($connection, CURLOPT_POSTFIELDS, $post);
                curl_exec($connection);
                curl_close($connection);
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
            }
            $log->command = $original_command;
            $log->message = str_replace('Collector - ', '', $log->message);
        }

        // Note - Would not normally use @, but we want to ensure the discovery queue does not stop
        if (strpos($log->message, 'Total IPs count: ') !== false) {
            $temp = @intval(@str_replace('Total IPs count: ', '', $log->message));
            $sql = '/* log_helper::discovery_log */ ' . 'UPDATE `discoveries` SET `ip_all_count` = ? WHERE id = ?';
            $data = array($temp, $log->discovery_id);
            $CI->db->query($sql, $data);
        }

        // Note - Would not normally use @, but we want to ensure the discovery queue does not stop
        if (strpos($log->message, 'Responding IPs count: ') !== false) {
            $temp = @intval(@str_replace('Responding IPs count: ', '', $log->message));
            $sql = '/* log_helper::discovery_log */ ' . 'UPDATE `discoveries` SET `ip_responding_count` = ? WHERE id = ?';
            $data = array($temp, $log->discovery_id);
            $CI->db->query($sql, $data);
        }

        if (strpos($log->message, 'IP scan finish on device ') !== false) {
            $sql = '/* log_helper::discovery_log */ ' . 'UPDATE `discoveries` SET `ip_scanned_count` = `ip_scanned_count` + 1 WHERE id = ?';
            $data = array($log->discovery_id);
            $CI->db->query($sql, $data);
        }

        if (strpos($log->message, 'Discovered device at ') !== false) {
            $sql = '/* log_helper::discovery_log */ ' . 'UPDATE `discoveries` SET `ip_discovered_count` = `ip_discovered_count` + 1 WHERE id = ?';
            $data = array($log->discovery_id);
            $CI->db->query($sql, $data);
        }

        if (strpos($log->message, 'Audited device at ') !== false) {
            $sql = '/* discoveries_helper::ip_audit */ ' . 'UPDATE `discoveries` SET `ip_audited_count` = `ip_audited_count` + 1 WHERE id = ?';
            $data = array($log->discovery_id);
            $CI->db->query($sql, $data);
        }

        // If we have this string, mark the discovery as complete (think Collector marking a discovery as complete on the Server)
        if (stripos($log->message, 'Discovery has finished') !== false && ! empty($log->discovery_id)) {
            $sql = '/* log_helper::discovery_log */ ' . "UPDATE `discoveries` SET `status` = 'complete', `last_finished` = NOW(), `duration` = TIMEDIFF(`last_finished`, `last_run`) WHERE `id` = ?";
            $data = array($log->discovery_id);
            $query = $CI->db->query($sql, $data);
        }


        return $return_id;
    }
}


if (! function_exists('stdlog')) {
    /**
     * The standard log function for Open-AudIT. Writes logs to a text file in the desired format (json or syslog).
     * @param  object $log_details An object containing details you wish to log
     * @return NULL                Logs the provided string to the log file
     */
    function stdlog(object $log_details = null)
    {
        $log = array();

        if (!empty($log_details->code)) {
            $logError = getErrorCode($log_details->code);
        }

        if (!empty($log_details->severity)) {
            $log['severity'] = $log_details->severity;
        } else if (!empty($logError->severity)) {
            $log['severity'] = $logError->severity;
        } else {
            $log['severity'] = 7;
        }

        if ($log['severity'] > intval(config('OpenAudit')->log_level)) {
            // log called but log severity level not met
            return;
        }

        $router = \Config\Services::router();

        $log['request_microtime'] = config('OpenAudit')->microtime;
        $log['type'] = (!empty($log_details->type)) ? $log_details->type : 'access';
        $log['severity_text'] = (!empty($log_details->severity_text)) ? $log_details->severity_text : '';
        $log['pid'] = getmypid();
        $log['user'] = get_instance()->user->name;
        $log['server'] = php_uname('n');
        $log['ip'] = (! empty($_SERVER['REMOTE_ADDR'])) ? (! empty($_SERVER['REMOTE_ADDR'])) : '127.0.0.1';
        if ($log['ip'] === true) {
            $log['ip'] = '127.0.0.1';
        }
        $log['collection'] = (!empty($log_details->collection)) ? $log_details->collection : strtolower(str_replace('\App\Controllers\\', '', $router->controllerName()));
        $log['action'] = (!empty($log_details->action)) ? $log_details->action : $router->methodName();
        $log['function'] = debug_backtrace()[1]['function'];

        if (!empty($log_details->status)) {
            $log['status'] = $log_details->status;
        } else if (!empty($logError->status)) {
            $log['status'] = $logError->status;
        } else {
            $log['status'] = '';
        }

        if (!empty($log_details->summary)) {
            $log['summary'] = $log_details->summary;
        } else if (!empty($logError->summary)) {
            $log['summary'] = $logError->summary;
        } else {
            $log['summary'] = '';
        }

        if (!empty($log_details->detail)) {
            $log['detail'] = $log_details->detail;
        } else if (!empty($logError->detail)) {
            $log['detail'] = $logError->detail;
        } else {
            $log['detail'] = '';
        }

        if (!empty($log['severity']) and empty($log['severity_text'])) {
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
                    $log['severity_text'] = 'notice';
                    break;
            }
        }

        $db = \Config\Database::connect();
        $builder = $db->table('logs');
        $builder->insert($log);
        log_message($log['severity_text'], json_encode($log));
        $instance = & get_instance();
        if (!empty($instance->resp->errors) and is_array($instance->resp->errors)) {
            $instance->resp->errors[] = $log;
        } else {
            $instance->resp->errors = array();
            $instance->resp->errors[] = $log;
        }
    }


    if (! function_exists('getErrorCode')) {
        function getErrorCode($code)
        {
            $error = new \stdClass();
            
            if ($code === 'ERR-0001') {
                $error->code = 'ERR-0001';
                $error->status = 'HTTP/1.1 404 Not Found';
                $error->severity = 3;
                $error->summary = "No groups returned for user";
                $error->detail = 'When requesting the list of groups the user is assigned access to, no groups were returned. This usually indicates either (rightly) that the user has no permissions on any groups (which will result in this user not being able to access any device data in Open-AudIT) or that something has gone wrong inside Open-AudIT. You might go to menu -> Resources -> Users -> List Users, click on edit for this user and make sure they have an access level on at least one group.';
            }

            if ($code === 'ERR-0002') {
                $error->code = 'ERR-0002';
                $error->status = 'HTTP/1.1 404 Not Found';
                $error->severity = 3;
                $error->summary = "No object could be retrieved";
                $error->detail = "When calling this function an identifier (usually but not always an integer based id) should be supplied. The supplied item was either blank, not an integer based id or we could not determine the corresponding object based on the details provided. Please check the log file for the controller and model this occurred on and report the issue to Firstwave.";
            }

            if ($code === 'ERR-0003') {
                $error->code = 'ERR-0003';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 3;
                $error->summary = "No group columns could be retrieved";
                $error->detail = "When requesting the columns for a group, no group columns either for the original group id, nor group id #1 were found.";
            }

            if ($code === 'ERR-0004') {
                $error->code = 'ERR-0004';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 4;
                $error->summary = "Name, not id passed";
                $error->detail = "Controllers should pass an integer based id as a first preference. Controllers should determine (where possible) the id if supplied a name.";
            }

            if ($code === 'ERR-0005') {
                $error->code = 'ERR-0005';
                $error->status = 'HTTP/1.1 404 Not Found';
                $error->severity = 5;
                $error->summary = "No data returned";
                $error->detail = 'A request was made to a model, but no data was retrieved from the database.';
            }

            if ($code === 'ERR-0006') {
                $error->code = 'ERR-0006';
                $error->status = 'HTTP/1.1 403 Forbidden';
                $error->severity = 5;
                $error->summary = "User is not authorised to view group";
                $error->detail = 'A user attempted to view the details of a group he is not authorised to. To enable this user to view this group, edit the user via menu -> Resources -> Users -> List Users and allow at least View Group level of access.';
            }

            if ($code === 'ERR-0007') {
                $error->code = 'ERR-0007';
                $error->status = 'HTTP/1.1 404 Not Found';
                $error->severity = 5;
                $error->summary = "Resource does not exist";
                $error->detail = 'A user attempted to view a resource which does not exist.';
            }

            if ($code === 'ERR-0008') {
                $error->code = 'ERR-0008';
                $error->status = 'HTTP/1.1 403 Forbidden';
                $error->severity = 5;
                $error->summary = 'User insufficient access.';
                $error->detail = 'A user attempted to access a resource for which they do not have authorisation.';
            }

            if ($code === 'ERR-0009') {
                $error->code = 'ERR-0009';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Parameters you have provided failed use";
                $error->detail = 'Parameters you have provided failed use.';
            }

            if ($code === 'ERR-0010') {
                $error->code = 'ERR-0010';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 3;
                $error->summary = "Cannot create resource with supplied data";
                $error->detail = 'Cannot create resource with supplied data. Likely a reserved word has been used for a field name or there is already a field with this name or an invalid value for a field has been supplied.';
            }

            if ($code === 'ERR-0011') {
                $error->code = 'ERR-0011';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 3;
                $error->summary = "Cannot create read uploaded file.";
                $error->detail = 'Cannot create read uploaded file.';
            }

            if ($code === 'ERR-0012') {
                $error->code = 'ERR-0012';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 3;
                $error->summary = "Uploaded XML is invalid.";
                $error->detail = 'Uploaded XML is invalid.';
            }

            if ($code === 'ERR-0013') {
                $error->code = 'ERR-0013';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 3;
                $error->summary = "Could not delete specified resource.";
                $error->detail = 'Could not delete specified resource.';
            }

            if ($code === 'ERR-0014') {
                $error->code = 'ERR-0014';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Cannot delete default resource.";
                $error->detail = 'Cannot delete default resource.';
            }

            if ($code === 'ERR-0015') {
                $error->code = 'ERR-0015';
                $error->status = 'HTTP/1.1 403 Forbidden';
                $error->severity = 5;
                $error->summary = "User not authorised";
                $error->detail = 'User attempted to perform an operation for which they are not authorised';
            }

            if ($code === 'ERR-0016') {
                $error->code = 'ERR-0016';
                $error->status = 'HTTP/1.1 404 Not Found';
                $error->severity = 4;
                $error->summary = "File does not exist";
                $error->detail = 'A user attempted to access an file which does not exist, could not be read or is incorrectly formatted.';
            }

            if ($code === 'ERR-0017') {
                $error->code = 'ERR-0017';
                $error->status = 'HTTP/1.1 404 Not Found';
                $error->severity = 4;
                $error->summary = "File not writable";
                $error->detail = 'A user attempted to write to an file which does not have write permissions set.';
            }

            if ($code === 'ERR-0018') {
                $error->code = 'ERR-0018';
                $error->status = 'HTTP/1.1 403 Forbidden';
                $error->severity = 5;
                $error->summary = "User not authorised to use Org";
                $error->detail = 'A user attempted to write to an org_id to an object for which they do not have permission.';
            }

            if ($code === 'ERR-0019') {
                $error->code = 'ERR-0019';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 4;
                $error->summary = "Could not connect to LDAP";
                $error->detail = 'When attempting to connect to LDAP for Active Directory, could not.';
            }

            if ($code === 'ERR-0020') {
                $error->code = 'ERR-0020';
                $error->status = 'HTTP/1.1 401 Unauthorized';
                $error->severity = 6;
                $error->summary = "User not authorised, credentials required";
                $error->detail = 'When attempting to access a resource, credentials are required.';
            }

            if ($code === 'ERR-0021') {
                $error->code = 'ERR-0021';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Required attributes not supplied";
                $error->detail = 'When attempting to create a resource, some attributes are required but missing.';
            }

            if ($code === 'ERR-0022') {
                $error->code = 'ERR-0022';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Required attributes not supplied (WHERE @filter)";
                $error->detail = 'When attempting to create a query, the supplied SQL did not contain the required WHERE @filter.';
            }

            if ($code === 'ERR-0023') {
                $error->code = 'ERR-0023';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 3;
                $error->summary = '';
                $error->detail = 'SQL command failed.';
            }

            if ($code === 'ERR-0024') {
                $error->code = 'ERR-0024';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Cannot create resource with supplied data";
                $error->detail = 'Cannot create resource with supplied data. A required field is missing.';
            }

            if ($code === 'ERR-0025') {
                $error->code = 'ERR-0025';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = '';
                $error->detail = 'Update did not supply PATCH data.';
            }

            if ($code === 'ERR-0026') {
                $error->code = 'ERR-0026';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 3;
                $error->summary = "Could not search LDAP";
                $error->detail = 'When attempting to search LDAP, something went wrong. Check user_dn and base_dn.';
            }

            if ($code === 'ERR-0027') {
                $error->code = 'ERR-0027';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 3;
                $error->summary = "Could not retrieve entries from LDAP";
                $error->detail = 'When attempting to retrieve the search data entries from LDAP, something went wrong.';
            }

            if ($code === 'ERR-0028') {
                $error->code = 'ERR-0028';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 3;
                $error->summary = "Could not bind to LDAP using dn_account";
                $error->detail = 'When attempting to bind to LDAP, failed. Check dn_account and dn_password.';
            }

            if ($code === 'ERR-0029') {
                $error->code = 'ERR-0029';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 3;
                $error->summary = "Could not bind to LDAP using user credentials";
                $error->detail = 'When attempting to bind to LDAP, failed. Check user credentials.';
            }

            if ($code === 'ERR-0030') {
                $error->code = 'ERR-0030';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Required attributes not supplied (collector UUID)";
                $error->detail = 'When attempting logon with a collector account, you must supply a UUID.';
            }

            if ($code === 'ERR-0031') {
                $error->code = 'ERR-0031';
                $error->status = 'HTTP/1.1 403 Forbidden';
                $error->severity = 4;
                $error->summary = "Collector attempting to logon from unassociated ip address.";
                $error->detail = 'A collector can only log in from a single IP address. Supplied IP does not match IP on record.';
            }

            if ($code === 'ERR-0032') {
                $error->code = 'ERR-0032';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 6;
                $error->summary = "A hostname or FQDN was supplied that cannot be resolved.";
                $error->detail = 'A hostname or FQDN was supplied that cannot be resolved.';
            }

            if ($code === 'ERR-0033') {
                $error->code = 'ERR-0033';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 4;
                $error->summary = "Decoding JSON failed.";
                $error->detail = 'Decoding JSON failed.';
            }

            if ($code === 'ERR-0034') {
                $error->code = 'ERR-0034';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "No access token supplied.";
                $error->detail = 'A valid access token was not supplied when submitting data. This is required as at version 2.2.1 because of cross site request forgery protections. Access Tokens are configurable in the Configuration.';
            }

            if ($code === 'ERR-0035') {
                $error->code = 'ERR-0035';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = "Invalid access token supplied.";
                $error->detail = 'An invalid access token was supplied when submitting data. Access Tokens have been configured and the token you have supplied is not among the last X valid tokens. Access Tokens are configurable in the Configuration.';
            }

            if ($code === 'ERR-0036') {
                $error->code = 'ERR-0036';
                $error->status = 'HTTP/1.1 403 Forbidden';
                $error->severity = 4;
                $error->summary = "Invalid user supplied.";
                $error->detail = 'A user was supplied in the request header that does not exist within Open-AudIT. Please specify a valid user.';
            }

            if ($code === 'ERR-0037') {
                $error->code = 'ERR-0037';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 4;
                $error->summary = "Directory does not exist and could not be created";
                $error->detail = 'A required directory does not exist and could not be created.';
            }

            if ($code === 'ERR-0038') {
                $error->code = 'ERR-0038';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 4;
                $error->summary = "Permissions do not allow writing file.";
                $error->detail = 'Attempting to write to a file has been denied because of filesystem permissions.';
            }

            if ($code === 'ERR-0039') {
                $error->code = 'ERR-0039';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 4;
                $error->summary = "Permissions do not allow deleting file.";
                $error->detail = 'Attempting to delete a file has been denied because of filesystem permissions.';
            }

            if ($code === 'ERR-0040') {
                $error->code = 'ERR-0040';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 6;
                $error->summary = "Invalid filetype for upload.";
                $error->detail = 'Invalid filetype supplied.';
            }

            if ($code === 'ERR-0041') {
                $error->code = 'ERR-0041';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 5;
                $error->summary = 'Windows Apache service user.';
                $error->detail = '<strong>ERROR</strong> - Windows is running the Apache service as "Local System". As at v3.3.0 this <b>must</b> be changed to a normal user account (with network access). See the <a href="https://community.opmantek.com/display/OA/Running+Open-AudIT+Apache+Service+under+Windows" target="_blank">Open-AudIT wiki</a> for more details.';
            }

            if ($code === 'ERR-0042') {
                $error->code = 'ERR-0042';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 5;
                $error->summary = 'Old Redhat / Centos and Samba.';
                $error->detail = '<strong>WARNING</strong> - Redhat and Centos 6 servers require the Samba4 libraries to be installed. Please see <a href="https://community.opmantek.com/display/OA/Auditing+Windows+machines+from+Linux+using+SMB2" target="_blank">this wiki page</a> for more information.<br />We very much recommend upgrading to Centos/RedHat 8 as support for Centos/RedHat 6 will be ending very soon.';
            }

            if ($code === 'ERR-0043') {
                $error->code = 'ERR-0043';
                $error->status = 'HTTP/1.1 500 Internal Server Error';
                $error->severity = 5;
                $error->summary = 'Nmap not found.';
                if (php_uname('s') === 'Windows NT') {
                        $error->detail = "<strong>ERROR</strong> - Nmap <strong>must</strong> be installed. Get it from <a style='color:#729FCF;' target='_blank' href='http://nmap.org/download.html'>http://nmap.org/download.html</a>.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.";
                } else {
                        $error->detail = "<strong>ERROR</strong> - Nmap <strong>must</strong> be installed. Please install it using your package manager. See <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.";
                }
            }

            
            if ($code === 'ERR-0044') {
                $error->code = 'ERR-0044';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 5;
                $error->summary = 'Bad Configuration value supplied';
                $error->detail = 'The configuration value supplied is invalid for this item.';
            }

            if ($code === 'ERR-0045') {
                $error->code = 'ERR-0045';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 5;
                $error->summary = 'Invalid value supplied for attribute';
                $error->detail = 'The value as passed cannot be used for this attribute.';
            }

            if ($code === 'ERR-0046') {
                $error->code = 'ERR-0046';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 5;
                $error->summary = 'Invalid value supplied for ID';
                $error->detail = 'The value as passed is not an integer, assuming a name, but not found.';
            }

            if ($code === 'ERR-0047') {
                $error->code = 'ERR-0047';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = 'Nmap SUID not set.';
                $error->detail = 'The Nmap SUID bit needs to be set. Please run "sudo chmod u+s `which nmap`" to resolve this issue. If this issue persists and is a false positive, please set discovery_override_nmap in the configuration to y.';
            }

            if ($code === 'ERR-0048') {
                $error->code = 'ERR-0048';
                $error->status = 'HTTP/1.1 400 Bad Request';
                $error->severity = 4;
                $error->summary = 'Could not determine Nmap SUID status.';
                $error->detail = 'The SUID status of the Nmap binary could not be determined. Please run "sudo chmod u+s `which nmap`" to resolve this issue. If this issue persists and is a false positive, please set discovery_override_nmap in the configuration to y.';
            }

            $temp = explode(' ', $error->status);
            $error->status_code = intval($temp[1]);

            if ($error->severity === 0) {
                $error->severity_text = 'emergency';
            }
            if ($error->severity === 1) {
                $error->severity_text = 'alert';
            }
            if ($error->severity === 2) {
                $error->severity_text = 'critical';
            }
            if ($error->severity === 3) {
                $error->severity_text = 'error';
            }
            if ($error->severity === 4) {
                $error->severity_text = 'warning';
            }
            if ($error->severity === 5) {
                $error->severity_text = 'notice';
            }
            if ($error->severity === 6) {
                $error->severity_text = 'informational';
            }
            if ($error->severity === 7) {
                $error->severity_text = 'debug';
            }

            return $error;
        }
    }
}
/* End of file log_helper.php */
/* Location: ./app/Helpers/log_helper.php */
