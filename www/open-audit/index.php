<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$query_count = 0;
ob_start();

// date_default_timezone_set('YOUR_TIMEZONE');
// http://www.php.net/manual/en/timezones.php

// Get the timezone from the system if not set in php.ini
if (! ini_get('date.timezone') or (string) ini_get('date.timezone') === 'Australia/Brisbane') {
    // Australia/Brisbane is the default on our shipped Windows installer.
    // Consider Australia/Brisbane equivalent to not being set
    $timezone = '';
    $default = 'UTC';

    if ((string) php_uname('s') !== 'Windows NT') {
        // On many systems (Mac, for instance) "/etc/localtime" is a symlink
        // to the file with the timezone info
        if (@is_link('/etc/localtime')) {
            // If it is, that file's name is actually the "Olsen" format timezone
            $temp_file = @readlink('/etc/localtime');
            $temp_pos = strpos($temp_file, 'zoneinfo');
            if ($temp_pos) {
                // When it is, it's in the "/usr/share/zoneinfo/" folder
                $timezone = substr($temp_file, $temp_pos + strlen('zoneinfo/'));
            }
        } else {
            // On other systems, like Ubuntu, there's file with the Olsen time right inside it.
            $timezone = @file_get_contents('/etc/timezone');
            if (! strlen($timezone)) {
                $timezone = $default;
            }
        }
        if ((string) $timezone === '') {
            $timezone = $default;
        }
    } else {
        $wbem_locator = new COM('WbemScripting.SWbemLocator');
        $wbem_services = $wbem_locator->ConnectServer('.', 'root\\cimv2');
        $zones = $wbem_services->ExecQuery('Select * from Win32_TimeZone');
        foreach ($zones as $zone) {
            $wmi_zone_offset = (int) $zone->Bias * 60;
            $wmi_caption = strtok($zone->Caption, ' ');
            $wmi_location = strtok('|');
        }
        // Attempt to match based on the offset and part of the WMI string in the Caption field
        foreach (timezone_abbreviations_list() as $timezone_abbr) {
            foreach ($timezone_abbr as $entry) {
                if ((int) $entry['offset'] === (int) $wmi_zone_offset and strpos($entry['timezone_id'], $wmi_location) !== false) {
                    $timezone = trim($entry['timezone_id']);
                }
            }
        }
        if ((string) $timezone === '') {
            // No match on offset + string, try for simply offset
            foreach (timezone_abbreviations_list() as $timezone_abbr) {
                foreach ($timezone_abbr as $entry) {
                    if ((int) $entry['offset'] === (int) $wmi_zone_offset) {
                        $timezone = trim($entry['timezone_id']);
                    }
                }
            }
        }
        if ((string) $timezone === '') {
            // last resort
            $timezone = $default;
        }
    }
    date_default_timezone_set(trim($timezone));
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE If you change these, also change the error_reporting() code below
 *
 **/
    define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 **/

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            error_reporting(E_ALL);
                        break;

        case 'testing':
        case 'production':
            error_reporting(0);
                        break;

        default:
                        exit('The application environment is not set correctly.');
    }
}

/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 **/
    if ((string) php_uname('s') == 'Windows NT') {
        // windows
        $system_path = 'c:/xampplite/open-audit/code_igniter/system';
    } else {
        // linux
        $system_path = '/usr/local/open-audit/code_igniter/system';
        if ( file_exists('/home/vagrant/Code/open-audit')) {
            $system_path = '/home/vagrant/Code/open-audit/code_igniter/system';
        }
    }

/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * folder then the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server.  If
 * you do, use a full server path. For more info please see the user guide:
 * http://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 *
 **/
    if ((string) php_uname('s') == 'Windows NT') {
        // windows
        $application_folder = 'c:/xampplite/open-audit/code_igniter/application';
    } else {
        // linux
        $application_folder = '/usr/local/open-audit/code_igniter/application';
        if ( file_exists('/home/vagrant/Code/open-audit')) {
            $application_folder = '/home/vagrant/Code/open-audit/code_igniter/application';
        }
    }
/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here.  For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT:  If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller.  Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 *
 **/
    // The directory name, relative to the "controllers" folder.  Leave blank
    // if your controller is not in a sub-folder within the "controllers" folder
    // $routing['directory'] = '';

    // The controller class file name.  Example:  Mycontroller
    // $routing['controller'] = '';

    // The controller function you wish to be called.
    // $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 *
 **/
    // $assign_to_config['name_of_config_item'] = 'value of config item';


// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

    // Set the current directory correctly for CLI requests
    if (defined('STDIN')) {
        chdir(dirname(__FILE__));
    }

    if (realpath($system_path) !== false) {
        $system_path = realpath($system_path).'/';
    }

    // ensure there's a trailing slash
    $system_path = rtrim($system_path, '/').'/';

    // Is the system path correct?
    if (! is_dir($system_path)) {
        exit('Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME));
    }

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 **/
    // The name of THIS file
    define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

    // The PHP file extension
    // this global constant is deprecated.
    define('EXT', '.php');

    // Path to the system folder
    define('BASEPATH', str_replace('\\', '/', $system_path));

    // Path to the front controller (this file)
    define('FCPATH', str_replace(SELF, '', __FILE__));

    // Name of the "system folder"
    define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

    // The path to the "application" folder
    if (is_dir($application_folder)) {
        define('APPPATH', $application_folder.'/');
    } else {
        if (! is_dir(BASEPATH.$application_folder.'/')) {
            exit('Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF);
        }

        define('APPPATH', BASEPATH.$application_folder.'/');
    }

/**
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------.
 *
 * And away we go...
 **/
require_once BASEPATH.'core/CodeIgniter.php';
