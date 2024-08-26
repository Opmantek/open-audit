<?php

echo "<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

function ssg_definitions()
{
    \$ssg_definitions = array();\n\n";

$dir = '/usr/local/open-audit/other/ssg-definitions/';
$files = scandir($dir);
foreach ($files as $file) {
    if (strpos($file, 'Windows') !== false) {
        continue;
    }
    if (strpos($file, 'xml') !== false) {
        $os = str_replace('ssg-', '', $file);
        $os = str_replace('-ds-1.2.xml', '', $os);
        $os_family = ucfirst(preg_replace("/[^A-Za-z]/", '', $os));
        $os_version = preg_replace("/[^0-9]/", '', $os);
        if ($os_family === 'Centos') {
            $os_family = 'CentOS';
        }
        if ($os_family === 'Ol') {
            $os_family = 'Oracle';
        }
        if ($os_family === 'Rhel') {
            $os_family = 'RedHat';
        }
        if ($os_family === 'Sle') {
            $os_family = 'SLES';
        }
        if ($os_family === 'Ubuntu') {
            if ($os_version === '1604') {
                $os_version = '16.04';
            }
            if ($os_version === '1804') {
                $os_version = '18.04';
            }
            if ($os_version === '2004') {
                $os_version = '20.04';
            }
            if ($os_version === '2204') {
                $os_version = '22.04';
            }
            if ($os_version === '2404') {
                $os_version = '24.04';
            }
        }
        // echo "File: $file   OS: $os    OSFamily: $os_family    Version: $os_version\n";
        
        $output = [];
        exec('oscap info ' . $dir . $file, $output);
        $count = count($output);
        for ($i=0; $i < $count; $i++) {
            if (strpos($output[$i], 'Title:') !== false) {
                $title = trim(str_replace('Title: ', '', $output[$i]));
                $benchmark = trim(str_replace('Id: ', '', $output[$i+1]));
                echo "    \$item = new \\stdClass();\n    \$item->os_family = '$os_family';\n    \$item->os_version = '$os_version';\n    \$item->title = '$title';\n    \$item->file = '$file';\n    \$item->benchmark = '$benchmark';\n    \$ssg_definitions[] = \$item;\n\n";
            }
            $title = '';
            $benchmark = '';
        }
        $count = 0;
    }
}
echo "    return \$ssg_definitions;\n";
echo "}\n";
