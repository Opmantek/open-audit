<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

function match_columns($table)
{
    $match_columns = array();
    if ($table === 'access_point') {
            $match_columns = array('mac', 'serial', 'software_version', 'ios_version', 'location');
    }
    if ($table === 'antivirus') {
            $match_columns = array('name');
    }
    if ($table === 'bios') {
            $match_columns = array('manufacturer', 'model', 'serial', 'smversion', 'version');
    }
    if ($table === 'certificate') {
            $match_columns = array('name', 'issuer', 'serial', 'valid_from_raw', 'valid_to_raw');
    }
    if ($table === 'disk') {
            $match_columns = array('model', 'serial', 'hard_drive_index', 'size');
    }
    if ($table === 'dns') {
            $match_columns = array('ip', 'name', 'fqdn');
    }
    if ($table === 'executable') {
            $match_columns = array('full_name', 'hash', 'inode', 'last_changed');
    }
    if ($table === 'file') {
            $match_columns = array('full_name', 'hash', 'inode', 'last_changed');
    }
    if ($table === 'firewall') {
            $match_columns = array('name');
    }
    if ($table === 'firewall_rule') {
            $match_columns = array('name', 'profile', 'enabled', 'direction', 'action', 'local_port', 'remote_port', 'firewall');
    }
    if ($table === 'log') {
            $match_columns = array('name', 'file_name', 'overwrite');
    }
    if ($table === 'memory') {
            $match_columns = array('bank', 'size', 'serial');
    }
    if ($table === 'module') {
            $match_columns = array('description', 'module_index', 'serial');
    }
    if ($table === 'monitor') {
            $match_columns = array('model', 'manufacturer', 'serial');
    }
    if ($table === 'motherboard') {
            $match_columns = array('model', 'manufacturer', 'serial');
    }
    if ($table === 'netstat') {
            $match_columns = array('protocol', 'ip', 'port', 'program');
    }
    if ($table === 'network') {
            $match_columns = array('mac');
    }
    if ($table === 'nmap') {
            $match_columns = array('protocol', 'ip', 'port', 'program');
    }
    if ($table === 'ip') {
            $match_columns = array('ip', 'mac', 'netmask');
    }
    if ($table === 'optical') {
            $match_columns = array('model', 'mount_point');
    }
    if ($table === 'pagefile') {
            $match_columns = array('name', 'initial_size', 'max_size');
    }
    if ($table === 'partition') {
            // $match_columns = array('name', 'hard_drive_index', 'mount_point', 'size');
            $match_columns = array('serial', 'hard_drive_index', 'mount_point', 'size');
    }
    if ($table === 'policy') {
            $match_columns = array('type', 'name', 'value', 'guid');
    }
    if ($table === 'print_queue') {
            $match_columns = array('device');
    }
    if ($table === 'processor') {
            $match_columns = array('description');
    }
    if ($table === 'radio') {
            $match_columns = array('name');
    }
    if ($table === 'route') {
            $match_columns = array('destination', 'next_hop');
    }
    if ($table === 'san') {
            $match_columns = array('serial');
    }
    if ($table === 'scsi') {
            $match_columns = array('model', 'manufacturer', 'device');
    }
    if ($table === 'server') {
            $match_columns = array('name', 'type', 'full_name', 'version');
    }
    if ($table === 'server_item') {
            $match_columns = array('name', 'type', 'instance', 'port');
    }
    if ($table === 'service') {
            // $match_columns = array('description', 'name', 'executable');
            $match_columns = array('name', 'executable');
    }
    if ($table === 'share') {
            $match_columns = array('name', 'path');
    }
    if ($table === 'software') {
            $match_columns = array('name', 'version');
    }
    if ($table === 'software_key') {
            $match_columns = array('name', 'string', 'rel', 'edition');
    }
    if ($table === 'sound') {
            $match_columns = array('model', 'manufacturer');
    }
    if ($table === 'task') {
            $match_columns = array('name', 'task');
    }
    if ($table === 'usb') {
            $match_columns = array('device');
    }
    if ($table === 'user') {
            $match_columns = array('name', 'sid', 'keys');
    }
    if ($table === 'user_group') {
            $match_columns = array('name', 'sid');
    }
    if ($table === 'variable') {
            $match_columns = array('program', 'name', 'value');
    }
    if ($table === 'video') {
            $match_columns = array('model');
    }
    if ($table === 'vm') {
            $match_columns = array('uuid');
    }
    if ($table === 'windows') {
            $match_columns = array('service_pack', 'build_number');
    }
    return($match_columns);
}

function version_padded($version)
{
    if (empty($version)) {
        return '';
    }
    $version = (string)$version;
    $version_padded = '';
    $pieces = array();
    $pieces = preg_split("/[\s,\+\-\_\.\\\+\~]+/", $version);
    foreach ($pieces as $piece) {
        $array = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $piece);
        foreach ($array as $item) {
            $p2 = preg_split('/([a-z]+)([0-9]+)/i', $item, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
            foreach ($p2 as $p) {
                if (strlen($p) > 10) {
                    $version_padded .= $p;
                } else {
                    $version_padded .= mb_substr("00000000000000000000" . $p, -10);
                }
            }
        }
    }
    return $version_padded;
}


/**
 * [get_sql_server_version_string description]
 * @param  [type] $version [description]
 * @return [type]          [description]
 */
function get_sql_server_version_string($version)
{
    // http://sqlserverbuilds.blogspot.com.au/
    // https://support.microsoft.com/en-au/kb/2936603
    // https://buildnumbers.wordpress.com/sqlserver/

    // find the version string, based on the version integer.
    $version_string = '';

    // SQL 2022
    if (mb_strpos($version, '16.00.4065.3') === 0 or mb_strpos($version, '16.0.4035.4') === 0) {
        $version_string = 'Cumulative update 7 (CU7) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.4055.4') === 0 or mb_strpos($version, '16.0.4035.4') === 0) {
        $version_string = 'Cumulative update 6 (CU6) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.4045.3') === 0 or mb_strpos($version, '16.0.4035.4') === 0) {
        $version_string = 'Cumulative update 5 (CU5) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.4035.4') === 0 or mb_strpos($version, '16.0.4035.4') === 0) {
        $version_string = 'Cumulative update 4 (CU4) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.4025.1') === 0 or mb_strpos($version, '16.0.4025.1') === 0) {
        $version_string = 'Cumulative update 3 (CU3) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.4015.1') === 0 or mb_strpos($version, '16.0.4015.1') === 0) {
        $version_string = 'Cumulative update 2 (CU2) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.4003.1') === 0 or mb_strpos($version, '16.0.4003.1') === 0) {
        $version_string = 'Cumulative update 1 (CU1) for SQL Server 2022';
    }

    if (mb_strpos($version, '16.00.1050.5') === 0 or mb_strpos($version, '16.0.1050.5') === 0) {
        $version_string = 'Security update for SQL Server 2022 GDR: February 14, 2023  CVE-2023-21528 CVE-2023-21704 CVE-2023-21705 CVE-2023-21713 CVE-2023-21718 CVE-2022-41064';
    }

    if (mb_strpos($version, '16.00.1000.6') === 0 or mb_strpos($version, '16.0.1000.6') === 0) {
        $version_string = 'Microsoft SQL Server 2022 RTM  RTM';
    }

    if (mb_strpos($version, '16.00.950.9') === 0 or mb_strpos($version, '16.0.950.9') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Release Candidate 1 (RC1)  Beta';
    }

    if (mb_strpos($version, '16.00.900.6') === 0 or mb_strpos($version, '16.0.900.6') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Release Candidate 0 (RC0)  Beta';
    }

    if (mb_strpos($version, '16.00.700.4') === 0 or mb_strpos($version, '16.0.700.4') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Public Preview 2.1 (CTP 2.1)  Beta';
    }

    if (mb_strpos($version, '16.00.600.9') === 0 or mb_strpos($version, '16.0.600.9') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Public Preview 2.0 (CTP 2.0)  Beta';
    }

    if (mb_strpos($version, '16.00.500.2') === 0 or mb_strpos($version, '16.0.500.2') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Preview 1.5 (CTP 1.5)  Beta';
    }

    if (mb_strpos($version, '16.00.400.2') === 0 or mb_strpos($version, '16.0.400.2') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Preview 1.4 (CTP 1.4)  Beta';
    }

    if (mb_strpos($version, '16.00.300.4') === 0 or mb_strpos($version, '16.0.300.4') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Preview 1.3 (CTP 1.3)  Beta';
    }

    if (mb_strpos($version, '16.00.200.2') === 0 or mb_strpos($version, '16.0.200.2') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Preview 1.2 (CTP 1.2)  Beta';
    }

    if (mb_strpos($version, '16.00.101.1') === 0 or mb_strpos($version, '16.0.101.1') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Preview 1.1 (CTP 1.1)  Beta';
    }

    if (mb_strpos($version, '16.00.100.4') === 0 or mb_strpos($version, '16.0.100.4') === 0) {
        $version_string = 'Microsoft SQL Server 2022 Community Technology Preview 1.0 (CTP 1.0)  Beta';
    }


    // SQL 2019
    if (mb_strpos($version, '15.00.4312.2') === 0 or mb_strpos($version, '15.0.4312.2') === 0) {
        $version_string = '5024276 Cumulative update 20 (CU20) for SQL Server 2019 Latest CU CVE-2015-6420 CVE-2017-15708';
    }
    if (mb_strpos($version, '15.00.4298.1') === 0 or mb_strpos($version, '15.0.4298.1') === 0) {
        $version_string = '5023049 Cumulative update 19 (CU19) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4280.7') === 0 or mb_strpos($version, '15.0.4280.7') === 0) {
        $version_string = '5021124 Security update for SQL Server 2019 CU18: February 14, 2023 CVE-2023-21528 CVE-2023-21704 CVE-2023-21705 CVE-2023-21713 CVE-2023-21718';
    }
    if (mb_strpos($version, '15.00.4261.1') === 0 or mb_strpos($version, '15.0.4261.1') === 0) {
        $version_string = '5017593 Cumulative update 18 (CU18) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4249.2') === 0 or mb_strpos($version, '15.0.4249.2') === 0) {
        $version_string = '5016394 Cumulative update 17 (CU17) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4236.7') === 0 or mb_strpos($version, '15.0.4236.7') === 0) {
        $version_string = '5014353 Security update for SQL Server 2019 CU16: June 14, 2022 CVE-2022-29143';
    }
    if (mb_strpos($version, '15.00.4223.1') === 0 or mb_strpos($version, '15.0.4223.1') === 0) {
        $version_string = '5011644 Cumulative update 16 (CU16) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4198.2') === 0 or mb_strpos($version, '15.0.4198.2') === 0) {
        $version_string = '5008996 Cumulative update 15 (CU15) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4188.2') === 0 or mb_strpos($version, '15.0.4188.2') === 0) {
        $version_string = '5007182 Cumulative update 14 (CU14) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4178.1') === 0 or mb_strpos($version, '15.0.4178.1') === 0) {
        $version_string = '5005679 Cumulative update 13 (CU13) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4153.1') === 0 or mb_strpos($version, '15.0.4153.1') === 0) {
        $version_string = '5004524 Cumulative update 12 (CU12) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4138.2') === 0 or mb_strpos($version, '15.0.4138.2') === 0) {
        $version_string = '5003249 Cumulative update 11 (CU11) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4123.1') === 0 or mb_strpos($version, '15.0.4123.1') === 0) {
        $version_string = '5001090 Cumulative update 10 (CU10) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4102.2') === 0 or mb_strpos($version, '15.0.4102.2') === 0) {
        $version_string = '5000642 Cumulative update 9 (CU9) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4083.2') === 0 or mb_strpos($version, '15.0.4083.2') === 0) {
        $version_string = '4583459 Security update for SQL Server 2019 CU8: January 12, 2021 CVE-2021-1636';
    }
    if (mb_strpos($version, '15.00.4073.23') === 0 or mb_strpos($version, '15.0.4073.23') === 0) {
        $version_string = '4577194 Cumulative update 8 (CU8) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4063.15') === 0 or mb_strpos($version, '15.0.4063.15') === 0) {
        $version_string = 'Withdrawn 4570012 Cumulative update 7 (CU7) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4053.23') === 0 or mb_strpos($version, '15.0.4053.23') === 0) {
        $version_string = '4563110 Cumulative update 6 (CU6) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4043.16') === 0 or mb_strpos($version, '15.0.4043.16') === 0) {
        $version_string = '4552255 Cumulative update 5 (CU5) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4033.1') === 0 or mb_strpos($version, '15.0.4033.1') === 0) {
        $version_string = '4548597 Cumulative update 4 (CU4) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4023.6') === 0 or mb_strpos($version, '15.0.4023.6') === 0) {
        $version_string = '4538853 Cumulative update 3 (CU3) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4013.40') === 0 or mb_strpos($version, '15.0.4013.40') === 0) {
        $version_string = 'Withdrawn 4536075 Cumulative update 2 (CU2) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.4003.23') === 0 or mb_strpos($version, '15.0.4003.23') === 0) {
        $version_string = '4527376 Cumulative update 1 (CU1) for SQL Server 2019';
    }
    if (mb_strpos($version, '15.00.2101.7') === 0 or mb_strpos($version, '15.0.2101.7') === 0) {
        $version_string = '5021125 Security update for SQL Server 2019 GDR: February 14, 2023 CVE-2023-21528 CVE-2023-21704 CVE-2023-21705 CVE-2023-21713 CVE-2023-21718';
    }
    if (mb_strpos($version, '15.00.2095.3') === 0 or mb_strpos($version, '15.0.2095.3') === 0) {
        $version_string = '5014356 Security update for SQL Server 2019 GDR: June 14, 2022 CVE-2022-29143';
    }
    if (mb_strpos($version, '15.00.2090.38') === 0 or mb_strpos($version, '15.0.2090.38') === 0) {
        $version_string = '5010657 Security update for SQL Server 2019 GDR: February 8, 2022 CVE-2022-23276';
    }
    if (mb_strpos($version, '15.00.2080.9') === 0 or mb_strpos($version, '15.0.2080.9') === 0) {
        $version_string = '4583458 Security update for SQL Server 2019 GDR: January 12, 2021 CVE-2021-1636';
    }
    if (mb_strpos($version, '15.00.2070.41') === 0 or mb_strpos($version, '15.0.2070.41') === 0) {
        $version_string = '4517790 Servicing Update (GDR1) for SQL Server 2019 RTM';
    }
    if (mb_strpos($version, '15.00.2000.5') === 0 or mb_strpos($version, '15.0.2000.5') === 0) {
        $version_string = 'Microsoft SQL Server 2019 RTM RTM';
    }
    if (mb_strpos($version, '15.00.1900.47') === 0 or mb_strpos($version, '15.0.1900.47') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Release Candidate Refresh for Big Data Clusters only (RC1.1) Beta';
    }
    if (mb_strpos($version, '15.00.1900.25') === 0 or mb_strpos($version, '15.0.1900.25') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Release Candidate 1 (RC1) Beta';
    }
    if (mb_strpos($version, '15.00.1800.32') === 0 or mb_strpos($version, '15.0.1800.32') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 3.2 (CTP 3.2) Beta';
    }
    if (mb_strpos($version, '15.00.1700.37') === 0 or mb_strpos($version, '15.0.1700.37') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 3.1 (CTP 3.1) Beta';
    }
    if (mb_strpos($version, '15.00.1600.8') === 0 or mb_strpos($version, '15.0.1600.8') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 3.0 (CTP 3.0) Beta';
    }
    if (mb_strpos($version, '15.00.1500.28') === 0 or mb_strpos($version, '15.0.1500.28') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 2.5 (CTP 2.5) Beta';
    }
    if (mb_strpos($version, '15.00.1400.75') === 0 or mb_strpos($version, '15.0.1400.75') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 2.4 (CTP 2.4) Beta';
    }
    if (mb_strpos($version, '15.00.1300.359') === 0 or mb_strpos($version, '15.0.1300.359') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 2.3 (CTP 2.3) Beta';
    }
    if (mb_strpos($version, '15.00.1200.24') === 0 or mb_strpos($version, '15.0.1200.24') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 2.2 (CTP 2.2) Beta';
    }
    if (mb_strpos($version, '15.00.1100.94') === 0 or mb_strpos($version, '15.0.1100.94') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 2.1 (CTP 2.1) Beta';
    }
    if (mb_strpos($version, '15.00.1000.34') === 0 or mb_strpos($version, '15.0.1000.34') === 0) {
        $version_string = 'Microsoft SQL Server 2019 Community Technology Preview 2.0 (CTP 2.0) Beta';
    }

    // SQL 2017
    if (mb_strpos($version, '14.00.3008.27') === 0 or mb_strpos($version, '14.0.3008.27') === 0) {
        $version_string = 'SQL Server 2017 CU 2';
    }
    if (mb_strpos($version, '14.00.3006.16') === 0 or mb_strpos($version, '14.0.3006.16') === 0) {
        $version_string = 'SQL Server 2017 CU 1';
    }
    if (mb_strpos($version, '14.00.1000.169') === 0 or mb_strpos($version, '14.0.1000.169') === 0) {
        $version_string = 'SQL Server 2017';
    }
    if (mb_strpos($version, '14.00.900.75') === 0 or mb_strpos($version, '14.0.900.75') === 0) {
        $version_string = 'SQL Server 2017 RC 2';
    }
    if (mb_strpos($version, '14.00.800.90') === 0 or mb_strpos($version, '14.0.800.90') === 0) {
        $version_string = 'SQL Server 2017 RC 1';
    }
    if (mb_strpos($version, '14.00.600.250') === 0 or mb_strpos($version, '14.0.600.250') === 0) {
        $version_string = 'SQL Server 2017 CTP 2.1';
    }
    if (mb_strpos($version, '14.00.500.272') === 0 or mb_strpos($version, '14.0.500.272') === 0) {
        $version_string = 'SQL Server 2017 CTP 2.0';
    }
    if (mb_strpos($version, '14.00.405.198') === 0 or mb_strpos($version, '14.0.405.198') === 0) {
        $version_string = 'SQL Server 2017 CTP 1.4';
    }
    if (mb_strpos($version, '14.00.304.138') === 0 or mb_strpos($version, '14.0.304.138') === 0) {
        $version_string = 'SQL Server 2017 CTP 1.3';
    }
    if (mb_strpos($version, '14.00.200.24') === 0 or mb_strpos($version, '14.0.200.24') === 0) {
        $version_string = 'SQL Server 2017 CTP 1.2';
    }
    if (mb_strpos($version, '14.00.100.187') === 0 or mb_strpos($version, '14.0.100.187') === 0) {
        $version_string = 'SQL Server 2017 CTP 1.1';
    }
    if (mb_strpos($version, '14.00.1.246') === 0 or mb_strpos($version, '14.0.1.246') === 0) {
        $version_string = 'SQL Server 2017 CTP 1';
    }

    // SQL 2016
    if (mb_strpos($version, '13.0') === 0) {
        $version_string = 'SQL Server 2016';
    }
    if (mb_strpos($version, '13.00.4457.0') === 0 or mb_strpos($version, '13.0.4457.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 CU 6';
    }
    if (mb_strpos($version, '13.00.4451.0') === 0 or mb_strpos($version, '13.0.4451.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 CU 5';
    }
    if (mb_strpos($version, '13.00.4446.0') === 0 or mb_strpos($version, '13.0.4446.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 CU 4';
    }
    if (mb_strpos($version, '13.00.4435.0') === 0 or mb_strpos($version, '13.0.4435.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 CU 3';
    }
    if (mb_strpos($version, '13.00.4422.0') === 0 or mb_strpos($version, '13.0.4422.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 CU 2';
    }
    if (mb_strpos($version, '13.00.4411.0') === 0 or mb_strpos($version, '13.0.4411.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 CU 1';
    }
    if (mb_strpos($version, '13.00.4206.0') === 0 or mb_strpos($version, '13.0.4206.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 GDR Update with Security Update';
    }
    if (mb_strpos($version, '13.00.4202.0') === 0 or mb_strpos($version, '13.0.4202.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 GDR Update';
    }
    if (mb_strpos($version, '13.00.4199.0') === 0 or mb_strpos($version, '13.0.4199.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1 Reporting Services Update';
    }
    if (mb_strpos($version, '13.00.4001.0') === 0 or mb_strpos($version, '13.0.4001.0') === 0) {
        $version_string = 'SQL Server 2016 SP 1';
    }
    if (mb_strpos($version, '13.00.2216.0') === 0 or mb_strpos($version, '13.0.2216.0') === 0) {
        $version_string = 'SQL Server 2016 CU 9';
    }
    if (mb_strpos($version, '13.00.2213.0') === 0 or mb_strpos($version, '13.0.2213.0') === 0) {
        $version_string = 'SQL Server 2016 CU 8';
    }
    if (mb_strpos($version, '13.00.2210.0') === 0 or mb_strpos($version, '13.0.2210.0') === 0) {
        $version_string = 'SQL Server 2016 CU 7';
    }
    if (mb_strpos($version, '13.00.2204.0') === 0 or mb_strpos($version, '13.0.2204.0') === 0) {
        $version_string = 'SQL Server 2016 CU 6';
    }
    if (mb_strpos($version, '13.00.2197.0') === 0 or mb_strpos($version, '13.0.2197.0') === 0) {
        $version_string = 'SQL Server 2016 CU 5';
    }
    if (mb_strpos($version, '13.00.2193.0') === 0 or mb_strpos($version, '13.0.2193.0') === 0) {
        $version_string = 'SQL Server 2016 CU 4';
    }
    if (mb_strpos($version, '13.00.2186.6') === 0 or mb_strpos($version, '13.0.2186.6') === 0) {
        $version_string = 'SQL Server 2016 CU 3';
    }
    if (mb_strpos($version, '13.00.2164.0') === 0 or mb_strpos($version, '13.0.2164.0') === 0) {
        $version_string = 'SQL Server 2016 CU 2';
    }
    if (mb_strpos($version, '13.00.2149.0') === 0 or mb_strpos($version, '13.0.2149.0') === 0) {
        $version_string = 'SQL Server 2016 CU 1';
    }
    if (mb_strpos($version, '13.00.1601.5') === 0 or mb_strpos($version, '13.0.1601.5') === 0) {
        $version_string = 'SQL Server 2016';
    }
    if (mb_strpos($version, '13.00.1400.361') === 0 or mb_strpos($version, '13.0.1400.361') === 0) {
        $version_string = 'SQL Server 2016 RC 3';
    }
    if (mb_strpos($version, '13.00.1300.275') === 0 or mb_strpos($version, '13.0.1300.275') === 0) {
        $version_string = 'SQL Server 2016 RC 2';
    }
    if (mb_strpos($version, '13.0.1200.242') === 0 or mb_strpos($version, '13.0.1200.242') === 0) {
        $version_string = 'SQL Server 2016 RC 1';
    }
    if (mb_strpos($version, '13.00.1100.288') === 0 or mb_strpos($version, '13.0.1100.288') === 0) {
        $version_string = 'SQL Server 2016 RC 0';
    }
    if (mb_strpos($version, '13.00.1000.281') === 0 or mb_strpos($version, '13.0.1000.281') === 0) {
        $version_string = 'SQL Server 2016 CTP 3.3';
    }
    if (mb_strpos($version, '13.00.900.73') === 0 or mb_strpos($version, '13.00.900.73') === 0) {
        $version_string = 'SQL Server 2016 CTP 3.2';
    }
    if (mb_strpos($version, '13.00.800.111') === 0 or mb_strpos($version, '13.0.800.111') === 0) {
        $version_string = 'SQL Server 2016 CTP 3.1';
    }
    if (mb_strpos($version, '13.00.700.1395') === 0 or mb_strpos($version, '13.0.700.1395') === 0) {
        $version_string = 'SQL Server 2016 CTP 3.0';
    }
    if (mb_strpos($version, '13.00.600.65') === 0 or mb_strpos($version, '13.0.600.65') === 0) {
        $version_string = 'SQL Server 2016 CTP 2.4';
    }
    if (mb_strpos($version, '13.00.500.53') === 0 or mb_strpos($version, '13.0.500.53') === 0) {
        $version_string = 'SQL Server 2016 CTP 2.3';
    }
    if (mb_strpos($version, '13.00.407.1') === 0 or mb_strpos($version, '13.0.407.1') === 0) {
        $version_string = 'SQL Server 2016 CTP 2.2';
    }
    if (mb_strpos($version, '13.00.400.91') === 0 or mb_strpos($version, '13.0.400.91') === 0) {
        $version_string = 'SQL Server 2016 CTP 2.2';
    }
    if (mb_strpos($version, '13.00.300.44') === 0 or mb_strpos($version, '13.0.300.44') === 0) {
        $version_string = 'SQL Server 2016 CTP 2.1';
    }
    if (mb_strpos($version, '13.0.200.172') === 0 or mb_strpos($version, '13.0.200.172') === 0) {
        $version_string = 'SQL Server 2016 CTP 2.0';
    }


    // SQL 2014
    if (mb_strpos($version, '12.0') === 0) {
        $version_string = 'SQL Server 2014';
    }
    if (mb_strpos($version, '12.00.5546.0') === 0 or mb_strpos($version, '12.0.5546.0') === 0) {
        $version_string = 'SQL Server 2014 SP 2 CU 5';
    }
    if (mb_strpos($version, '12.00.5540.0') === 0 or mb_strpos($version, '12.0.5540.0') === 0) {
        $version_string = 'SQL Server 2014 SP 2 CU 4';
    }
    if (mb_strpos($version, '12.00.5538.0') === 0 or mb_strpos($version, '12.0.5538.0') === 0) {
        $version_string = 'SQL Server 2014 SP 2 CU 3';
    }
    if (mb_strpos($version, '12.00.5522.0') === 0 or mb_strpos($version, '12.0.5522.0') === 0) {
        $version_string = 'SQL Server 2014 SP 2 CU 2';
    }
    if (mb_strpos($version, '12.00.5203.0') === 0 or mb_strpos($version, '12.0.5203.0') === 0) {
        $version_string = 'SQL Server 2014 SP 2 CU 1';
    }
    if (mb_strpos($version, '12.00.5000.0') === 0 or mb_strpos($version, '12.0.5000.0') === 0) {
        $version_string = 'SQL Server 2014 SP 2';
    }
    if (mb_strpos($version, '12.00.4511.0') === 0 or mb_strpos($version, '12.0.4511.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 12';
    }
    if (mb_strpos($version, '12.00.4502.0') === 0 or mb_strpos($version, '12.0.4502.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 11';
    }
    if (mb_strpos($version, '12.00.4491.0') === 0 or mb_strpos($version, '12.0.4491.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 10';
    }
    if (mb_strpos($version, '12.00.4487.0') === 0 or mb_strpos($version, '12.0.4487.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 9';
    }
    if (mb_strpos($version, '12.00.4468.0') === 0 or mb_strpos($version, '12.0.4468.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 8';
    }
    if (mb_strpos($version, '12.00.4459.0') === 0 or mb_strpos($version, '12.0.4459.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 7';
    }
    if (mb_strpos($version, '12.00.4457.0') === 0 or mb_strpos($version, '12.0.4457.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 6';
    }
    if (mb_strpos($version, '12.00.4449.0') === 0 or mb_strpos($version, '12.0.4449.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 6)';
    }
    if (mb_strpos($version, '12.00.4439.1') === 0 or mb_strpos($version, '12.0.4439.1') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 5';
    }
    if (mb_strpos($version, '12.00.4436.0') === 0 or mb_strpos($version, '12.0.4436.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 4';
    }
    if (mb_strpos($version, '12.00.4427.24') === 0 or mb_strpos($version, '12.0.4427.24') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 3';
    }
    if (mb_strpos($version, '12.00.4422.0') === 0 or mb_strpos($version, '12.0.4422.0') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 2';
    }
    if (mb_strpos($version, '12.00.4416.1') === 0 or mb_strpos($version, '12.0.4416.1') === 0) {
        $version_string = 'SQL Server 2014 SP 1 CU 1';
    }
    if (mb_strpos($version, '12.00.4100.1') === 0 or mb_strpos($version, '12.0.4100.1') === 0) {
        $version_string = 'SQL Server 2014 SP 1';
    }
    if (mb_strpos($version, '12.00.4050') === 0 or mb_strpos($version, '12.0.4050') === 0) {
        $version_string = 'SQL Server 2014 SP 1';
    }
    if (mb_strpos($version, '12.00.2568.0') === 0 or mb_strpos($version, '12.0.2568.0') === 0) {
        $version_string = 'SQL Server 2014 CU 13';
    }
    if (mb_strpos($version, '12.00.2564.0') === 0 or mb_strpos($version, '12.0.2564.0') === 0) {
        $version_string = 'SQL Server 2014 CU 12';
    }
    if (mb_strpos($version, '12.00.2560.0') === 0 or mb_strpos($version, '12.0.2560.0') === 0) {
        $version_string = 'SQL Server 2014 CU 11';
    }
    if (mb_strpos($version, '12.00.2556.4') === 0 or mb_strpos($version, '12.0.2556.4') === 0) {
        $version_string = 'SQL Server 2014 CU 10';
    }
    if (mb_strpos($version, '12.00.2553.0') === 0 or mb_strpos($version, '12.0.2553.0') === 0) {
        $version_string = 'SQL Server 2014 CU 9';
    }
    if (mb_strpos($version, '12.00.2546.0') === 0 or mb_strpos($version, '12.0.2546.0') === 0) {
        $version_string = 'SQL Server 2014 CU 8';
    }
    if (mb_strpos($version, '12.00.2495.0') === 0 or mb_strpos($version, '12.0.2495.0') === 0) {
        $version_string = 'SQL Server 2014 CU 7';
    }
    if (mb_strpos($version, '12.00.2480.0') === 0 or mb_strpos($version, '12.0.2480.0') === 0) {
        $version_string = 'SQL Server 2014 CU 6';
    }
    if (mb_strpos($version, '12.00.2456.0') === 0 or mb_strpos($version, '12.0.2456.0') === 0) {
        $version_string = 'SQL Server 2014 CU 5';
    }
    if (mb_strpos($version, '12.00.2430.0') === 0 or mb_strpos($version, '12.0.2430.0') === 0) {
        $version_string = 'SQL Server 2014 CU 4';
    }
    if (mb_strpos($version, '12.00.2402.0') === 0 or mb_strpos($version, '12.0.2402.0') === 0) {
        $version_string = 'SQL Server 2014 CU 3';
    }
    if (mb_strpos($version, '12.00.2370.0') === 0 or mb_strpos($version, '12.0.2370.0') === 0) {
        $version_string = 'SQL Server 2014 CU 2';
    }
    if (mb_strpos($version, '12.00.2342.0') === 0 or mb_strpos($version, '12.0.2342.0') === 0) {
        $version_string = 'SQL Server 2014 CU 1';
    }
    if (mb_strpos($version, '12.00.2000') === 0 or mb_strpos($version, '12.0.2000') === 0) {
        $version_string = 'SQL Server 2014';
    }
    if (mb_strpos($version, '12.00.1524') === 0 or mb_strpos($version, '12.0.1524') === 0) {
        $version_string = 'SQL Server 2014 CTP 2';
    }
    if (mb_strpos($version, '11.00.9120') === 0 or mb_strpos($version, '11.0.9120') === 0) {
        $version_string = 'SQL Server 2014 CTP 1';
    }

    // SQL 2012
    if (mb_strpos($version, '11.00.6598.0') === 0 or mb_strpos($version, '11.0.6598.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 9';
    }
    if (mb_strpos($version, '11.00.6594.0') === 0 or mb_strpos($version, '11.0.6594.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 8';
    }
    if (mb_strpos($version, '11.00.6579.0') === 0 or mb_strpos($version, '11.0.6579.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 7';
    }
    if (mb_strpos($version, '11.00.6567.0') === 0 or mb_strpos($version, '11.0.6567.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 6';
    }
    if (mb_strpos($version, '11.00.6544.0') === 0 or mb_strpos($version, '11.0.6544.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 5';
    }
    if (mb_strpos($version, '11.00.6540.0') === 0 or mb_strpos($version, '11.0.6540.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 4';
    }
    if (mb_strpos($version, '11.00.6537.0') === 0 or mb_strpos($version, '11.0.6537.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 3';
    }
    if (mb_strpos($version, '11.00.6523.0') === 0 or mb_strpos($version, '11.0.6523.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 2';
    }
    if (mb_strpos($version, '11.00.6518.0') === 0 or mb_strpos($version, '11.0.6518.0') === 0) {
        $version_string = 'SQL Server 2012 SP 3 CU 1';
    }
    if (mb_strpos($version, '11.00.6020') === 0 or mb_strpos($version, '11.0.6020') === 0) {
        $version_string = 'SQL Server 2012 SP 3';
    }
    if (mb_strpos($version, '11.00.5058') === 0 or mb_strpos($version, '11.0.5058') === 0 or mb_strpos($version, '11.2.5058.0') === 0) {
        $version_string = 'SQL Server 2012 SP 2';
    }
    if (mb_strpos($version, '11.00.3000') === 0 or mb_strpos($version, '11.0.3000') === 0) {
        $version_string = 'SQL Server 2012 SP 1';
    }
    if (mb_strpos($version, '11.00.2100') === 0 or mb_strpos($version, '11.0.2100') === 0) {
        $version_string = 'SQL Server 2012';
    }

    // SQL 2008 R2
    if (mb_strpos($version, '10.50.6000') === 0 or mb_strpos($version, '10.53.6000') === 0) {
        $version_string = 'SQL Server 2008 R2 SP 3';
    }
    if (mb_strpos($version, '10.50.4000') === 0 or mb_strpos($version, '10.52.4000') === 0) {
        $version_string = 'SQL Server 2008 R2 SP 2';
    }
    if (mb_strpos($version, '10.50.2500') === 0 or mb_strpos($version, '10.51.2500') === 0) {
        $version_string = 'SQL Server 2008 R2 SP 1';
    }
    if (mb_strpos($version, '10.50.1600') === 0) {
        $version_string = 'SQL Server 2008 R2';
    }

    // SQL 2008
    if (mb_strpos($version, '10.00.6000') === 0 or mb_strpos($version, '10.0.6000') === 0 or mb_strpos($version, '10.4.6000') === 0) {
        $version_string = 'SQL Server 2008 SP 4';
    }
    if (mb_strpos($version, '10.00.5500') === 0 or mb_strpos($version, '10.0.5500') === 0 or mb_strpos($version, '10.3.5500') === 0) {
        $version_string = 'SQL Server 2008 SP 3';
    }
    if (mb_strpos($version, '10.00.4000') === 0 or mb_strpos($version, '10.0.4000') === 0 or mb_strpos($version, '10.2.4000') === 0) {
        $version_string = 'SQL Server 2008 SP 2';
    }
    if (mb_strpos($version, '10.00.2531') === 0 or mb_strpos($version, '10.0.2531') === 0 or mb_strpos($version, '10.1.2531') === 0) {
        $version_string = 'SQL Server 2008 SP 1';
    }
    if (mb_strpos($version, '10.00.1600') === 0 or mb_strpos($version, '10.0.1600') === 0) {
        $version_string = 'SQL Server 2008';
    }

    // SQL 2005
    if (mb_strpos($version, '9.00.5000') === 0 or mb_strpos($version, '9.0.5000') === 0) {
        $version_string = 'SQL Server 2005 SP 4';
    }
    if (mb_strpos($version, '9.00.4035') === 0 or mb_strpos($version, '9.0.4035') === 0) {
        $version_string = 'SQL Server 2005 SP 3';
    }
    if (mb_strpos($version, '9.00.3042') === 0 or mb_strpos($version, '9.0.3042') === 0) {
        $version_string = 'SQL Server 2005 SP 2';
    }
    if (mb_strpos($version, '9.00.2047') === 0 or mb_strpos($version, '9.0.2047') === 0) {
        $version_string = 'SQL Server 2005 SP 1';
    }
    if (mb_strpos($version, '9.00.1399') === 0 or mb_strpos($version, '9.0.1399') === 0) {
        $version_string = 'SQL Server 2005';
    }

    // SQL 2000
    if (mb_strpos($version, '8.00.2039') === 0 or mb_strpos($version, '8.00.2305') === 0) {
        $version_string = 'SQL Server 2000 SP 4';
    }
    if (mb_strpos($version, '8.00.761') === 0) {
        $version_string = 'SQL Server 2000 SP 3a';
    }
    if (mb_strpos($version, '8.00.760') === 0) {
        $version_string = 'SQL Server 2000 SP 3';
    }
    if (mb_strpos($version, '8.00.534') === 0 or mb_strpos($version, '8.00.532') === 0) {
        $version_string = 'SQL Server 2000 SP 2';
    }
    if (mb_strpos($version, '8.00.384') === 0) {
        $version_string = 'SQL Server 2000 SP 1';
    }
    if (mb_strpos($version, '8.00.194') === 0) {
        $version_string = 'SQL Server 2000';
    }

    // SQL 7
    if (mb_strpos($version, '7.00.1063') === 0 or mb_strpos($version, '7.00.1152') === 0) {
        $version_string = 'SQL Server 7 SP 4';
    }
    if (mb_strpos($version, '7.00.961') === 0) {
        $version_string = 'SQL Server 7 SP 3';
    }
    if (mb_strpos($version, '7.00.842') === 0) {
        $version_string = 'SQL Server 7 SP 2';
    }
    if (mb_strpos($version, '7.00.699') === 0) {
        $version_string = 'SQL Server 7 SP 1';
    }
    if (mb_strpos($version, '7.00.623') === 0) {
        $version_string = 'SQL Server 7';
    }
    return ($version_string);
}


if (! function_exists('weight')) {
    function weight($set_by = 'user')
    {
        // We assign a weight to the submitted data and compare it to what we already have for each column
        // Valid weights and the sources are:
        // 1000 - user or import (import should set as user as well)
        // 1500 - rules
        // 2000 - audit, audit_ssh, audit_wmi, windows, wmi
        // 3000 - snmp, ssh, nmis (note - ssh and snmp because they may contain data from nmap)
        // 4000 - ipmi
        // 5000 - ad (active directory)
        // 6000 - nmap
        // The lower the value, the higher the priority is given

        switch ($set_by) {
            case 'user':
                $weight = 1000;
                break;

            case 'rules':
                $weight = 1500;
                break;

            case 'audit':
            case 'audit_ssh':
            case 'audit_wmi':
            case 'windows':
            case 'wmi':
                $weight = 2000;
                break;

            case 'cloud':
            case 'nmis':
            case 'snmp':
            case 'ssh':
                $weight = 3000;
                break;

            case 'ipmi':
            case 'integrations':
                $weight = 4000;
                break;

            case 'ad':
            case 'active directory':
                $weight = 5000;
                break;

            case 'nmap':
                $weight = 6000;
                break;

            default:
                $weight = 10000;
                break;
        }
        return($weight);
    }
}
