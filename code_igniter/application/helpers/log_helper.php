<?php  if (!defined('BASEPATH')) {
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
 * @version 1.12.6
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('log_error')) {

    function log_error($error_code, $model = '')
    {
        $CI = & get_instance();
        # ensure we have an array in the $response object to hold our error
        if (!isset($CI->response->errors) or is_null($CI->response->errors)) {
            $CI->response->errors = array();
        }

        # this object will hold this specific error data and be added to the above array at the end
        $error = new stdClass();
        $error->code = $error_code;
        $error = getError($error->code);
        $error->file = 'system';
        $error->message = $error->title;
        $error->model = $model;

        // log the details of the error to the log file
        stdlog($error);
        $error->controller = $error->controller . '::' . $error->function;
        unset($error->function);
        // if the error is severe enough, set the error in the response object
        if ($error->severity <= 3) {
            error_reporting(E_ALL);
            unset($error->file); # we don't care about where this was logged (into which file)
            unset($error->message); # this is for logging only and is already contained in the $error->title
            $error->link = $CI->config->config['oa_web_folder'] . '/index.php/errors/' . $error->code;
            $CI->response->errors[] = $error;
            $CI->response->header = $error->status;
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
    function stdlog($log_details)
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
            $log->timestamp = date('Y-m-d H:i:s');
            if ($log->style == 'json') {
                $log->timestamp = date('Y-m-d H:i:s');
            }
            if ($log->style == 'syslog') {
                $log->timestamp = date('M d H:i:s');
            }
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
            echo "LOG   - ".$log->message."\n".str_pad("", 1024, " ")."\n";
            ob_flush();
            flush();
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

        if (!isset($log_details->file) or $log_details->file == '') {
            $log->file = 'access';
        } else {
            $log->file = $log_details->file;
        }

        if ((string) php_uname('s') === 'Linux' or (string) php_uname('s') === 'Darwin') {
            $file = "/usr/local/open-audit/other/log_".$log->file.".log";
            //$file = '../../other/log_'.$log->file.'.log';
        } else {
            $file = 'c:\xampplite\open-audit\other\log_'.$log->file.'.log';
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
            if ((string) php_uname('s') === 'Linux' or (string) php_uname('s') === 'Darwin') {
                $file = '/usr/local/open-audit/other/open-audit.log';
            } else {
                $file = 'c:\xampplite\open-audit\other\open-audit.log';
            }
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
