<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('scripts_options')) {
    function scripts_options()
    {

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
        }

        $options = array();

        $options['audit_dns'] = new \stdClass();
        $options['audit_dns']->name = 'audit_dns';
        $options['audit_dns']->default = 'n';
        $options['audit_dns']->help = 'Should we retrieve all DNS names.';
        $options['audit_dns']->type = 'select';
        $options['audit_dns']->values = 'y,n';

        $options['audit_mount_point'] = new \stdClass();
        $options['audit_mount_point']->name = 'audit_mount_point';
        $options['audit_mount_point']->default = 'y';
        $options['audit_mount_point']->help = 'Should we audit mount points.';
        $options['audit_mount_point']->type = 'select';
        $options['audit_mount_point']->values = 'y,n';

        $options['audit_netstat'] = new \stdClass();
        $options['audit_netstat']->name = 'audit_netstat';
        $options['audit_netstat']->default = 's';
        $options['audit_netstat']->help = 'Should we audit netstat ports (yes, no, servers only).';
        $options['audit_netstat']->type = 'select';
        $options['audit_netstat']->values = 'y,n,s';

        $options['audit_software'] = new \stdClass();
        $options['audit_software']->name = 'audit_software';
        $options['audit_software']->default = 'y';
        $options['audit_software']->help = 'Should we audit the installed software.';
        $options['audit_software']->type = 'select';
        $options['audit_software']->values = 'y,n';

        $options['audit_win32_product'] = new \stdClass();
        $options['audit_win32_product']->name = 'audit_win32_product';
        $options['audit_win32_product']->default = 'n';
        $options['audit_win32_product']->help = 'Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.';
        $options['audit_win32_product']->type = 'select';
        $options['audit_win32_product']->values = 'y,n';

        $options['create_file'] = new \stdClass();
        $options['create_file']->name = 'create_file';
        $options['create_file']->default = 'n';
        $options['create_file']->help = 'Should we create a file based on the audit result.';
        $options['create_file']->type = 'select';
        $options['create_file']->values = 'y,n';

        $options['debugging'] = new \stdClass();
        $options['debugging']->name = 'debugging';
        $options['debugging']->default = '1';
        $options['debugging']->help = 'The debug level (will output to command prompt window). Lower means less output with 0 being no output.';
        $options['debugging']->type = 'select';
        $options['debugging']->values = '0,1,2,3';

        $options['details_to_lower'] = new \stdClass();
        $options['details_to_lower']->name = 'details_to_lower';
        $options['details_to_lower']->default = 'y';
        $options['details_to_lower']->help = 'Should we convert the hostname to lower.';
        $options['details_to_lower']->type = 'select';
        $options['details_to_lower']->values = 'y,n';

        $options['hide_audit_window'] = new \stdClass();
        $options['hide_audit_window']->name = 'hide_audit_window';
        $options['hide_audit_window']->default = 'n';
        $options['hide_audit_window']->help = 'Should we hide the audit script window when executing.';
        $options['hide_audit_window']->type = 'select';
        $options['hide_audit_window']->values = 'y,n';

        $options['ignore_invalid_ssl'] = new \stdClass();
        $options['ignore_invalid_ssl']->name = 'ignore_invalid_ssl';
        $options['ignore_invalid_ssl']->default = 'y';
        $options['ignore_invalid_ssl']->help = 'Should we ignore an invalid or self signed SSL certificate and submit the result anyway.';
        $options['ignore_invalid_ssl']->type = 'select';
        $options['ignore_invalid_ssl']->values = 'y,n';

        $options['ldap'] = new \stdClass();
        $options['ldap']->name = 'ldap';
        $options['ldap']->default = '';
        $options['ldap']->help = 'Set by the audit_domain or discover_domain scripts. Do not set.';
        $options['ldap']->type = 'text';
        $options['ldap']->values = '';

        $options['ldap_seen_date'] = new \stdClass();
        $options['ldap_seen_date']->name = 'ldap_seen_date';
        $options['ldap_seen_date']->default = '2012-06-30';
        $options['ldap_seen_date']->help = 'Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.';
        $options['ldap_seen_date']->type = 'date';
        $options['ldap_seen_date']->values = '';

        $options['ldap_seen_days'] = new \stdClass();
        $options['ldap_seen_days']->name = 'ldap_seen_days';
        $options['ldap_seen_days']->default = 0;
        $options['ldap_seen_days']->help = 'Set this if you wish to insert systems from AD that have only been seen in the last X days.';
        $options['ldap_seen_days']->type = 'number';
        $options['ldap_seen_days']->values = '';

        $options['org_id'] = new \stdClass();
        $options['org_id']->name = 'org_id';
        $options['org_id']->default = '';
        $options['org_id']->help = 'Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).';
        $options['org_id']->type = 'number';
        $options['org_id']->values = '';

        $options['ping_target'] = new \stdClass();
        $options['ping_target']->name = 'ping_target';
        $options['ping_target']->default = 'n';
        $options['ping_target']->help = 'Attempt to ping the device if we are not auditing localhost.';
        $options['ping_target']->type = 'select';
        $options['ping_target']->values = 'y,n';

        $options['san_audit'] = new \stdClass();
        $options['san_audit']->name = 'san_audit';
        $options['san_audit']->default = 'y';
        $options['san_audit']->help = 'Should we audit a SAN if the management software is detected.';
        $options['san_audit']->type = 'select';
        $options['san_audit']->values = 'y,n';

        $options['san_discover'] = new \stdClass();
        $options['san_discover']->name = 'san_discover';
        $options['san_discover']->default = 'n';
        $options['san_discover']->help = 'If we detect the san management software, should we run an auto-discover before the query.';
        $options['san_discover']->type = 'select';
        $options['san_discover']->values = 'y,n';

        $options['self_delete'] = new \stdClass();
        $options['self_delete']->name = 'self_delete';
        $options['self_delete']->default = 'n';
        $options['self_delete']->help = 'If the script is running on a target, should the script delete itself upon completion?';
        $options['self_delete']->type = 'select';
        $options['self_delete']->values = 'y,n';

        $options['strcomputer'] = new \stdClass();
        $options['strcomputer']->name = 'strcomputer';
        $options['strcomputer']->default = '.';
        $options['strcomputer']->help = 'The target computer to audit. "." means localhost.';
        $options['strcomputer']->type = 'text';
        $options['strcomputer']->values = '';

        $options['strpass'] = new \stdClass();
        $options['strpass']->name = 'strpass';
        $options['strpass']->default = '';
        $options['strpass']->help = 'The password (if not using the user running the script).';
        $options['strpass']->type = 'text';
        $options['strpass']->values = '';

        $options['struser'] = new \stdClass();
        $options['struser']->name = 'struser';
        $options['struser']->default = '';
        $options['struser']->help = 'The username (if not using the user running the script).';
        $options['struser']->type = 'text';
        $options['struser']->values = '';

        $options['submit_online'] = new \stdClass();
        $options['submit_online']->name = 'submit_online';
        $options['submit_online']->default = 'y';
        $options['submit_online']->help = 'Should we submit the completed audit result to the Open-AudIT server.';
        $options['submit_online']->type = 'select';
        $options['submit_online']->values = 'y,n';

        $options['system_id'] = new \stdClass();
        $options['system_id']->name = 'system_id';
        $options['system_id']->default = '';
        $options['system_id']->help = 'Set by the Discovery function - do not normally set this manually.';
        $options['system_id']->type = 'number';
        $options['system_id']->values = '';

        $options['url'] = new \stdClass();
        $options['url']->name = 'url';
        $options['url']->default = $instance->config->default_network_address . 'index.php/input/devices';
        $options['url']->help = 'The address of the Open-AudIT server "submit" page.';
        $options['url']->type = 'url';
        $options['url']->values = '';

        $options['use_proxy'] = new \stdClass();
        $options['use_proxy']->name = 'use_proxy';
        $options['use_proxy']->default = 'n';
        $options['use_proxy']->help = 'Should we use the system or user level proxy to submit the audit result.';
        $options['use_proxy']->type = 'select';
        $options['use_proxy']->values = 'y,n';

        $options['windows_user_work_1'] = new \stdClass();
        $options['windows_user_work_1']->name = 'windows_user_work_1';
        $options['windows_user_work_1']->default = 'physicalDeliveryOfficeName';
        $options['windows_user_work_1']->help = 'Query this Active Directory attribute first to determine the users work unit.';
        $options['windows_user_work_1']->type = 'text';
        $options['windows_user_work_1']->values = '';

        $options['windows_user_work_2'] = new \stdClass();
        $options['windows_user_work_2']->name = 'windows_user_work_2';
        $options['windows_user_work_2']->default = 'company';
        $options['windows_user_work_2']->help = 'Query this Active Directory attribute second to determine the users work unit.';
        $options['windows_user_work_2']->type = 'text';
        $options['windows_user_work_2']->values = '';

        return $options;
    }
}

if (!function_exists('scripts_collectios_options')) {
    function scripts_collections_options()
    {
            $options_scripts = array();
            $options_scripts['audit_aix.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
            $options_scripts['audit_esxi.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
            $options_scripts['audit_hpux.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
            $options_scripts['audit_linux.sh'] = array('create_file', 'debugging', 'ignore_invalid_ssl', 'org_id', 'self_delete', 'submit_online', 'system_id', 'url');
            $options_scripts['audit_osx.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id');
            $options_scripts['audit_solaris.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
            $options_scripts['audit_windows.vbs'] = array('audit_dns', 'audit_mount_point', 'audit_netstat', 'audit_software', 'audit_win32_product', 'create_file', 'debugging', 'details_to_lower', 'hide_audit_window', 'ignore_invalid_ssl', 'ldap', 'ldap_seen_date', 'ldap_seen_days', 'org_id', 'ping_target', 'san_audit', 'san_discover', 'self_delete', 'strcomputer', 'strpass', 'struser', 'submit_online', 'system_id', 'url', 'use_proxy', 'windows_user_work_1', 'windows_user_work_2');
            $options_scripts['audit_windows.ps1'] = array();

            return $options_scripts;
    }
}
