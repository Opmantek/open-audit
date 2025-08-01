<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Fortinet

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Fortinet, Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12356.1.2.0");
    if (empty($details->serial)) {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12356.100.1.1.1.0");
    }
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.12356.101.4.1.1.0");
    $details->os_family = 'FortiOS';
    $details->os_group = 'FortiOS';
    $details->os_name = 'FortiOS';
    $details->os_cpe = 'fortios';
    $sysDescr = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    if (stripos($sysDescr, 'fortimail') !== false) {
        $details->os_name = 'FortiMail';
        $details->os_cpe = 'fortimail';
    }
    if (stripos($sysDescr, 'fortiweb') !== false) {
        $details->os_name = 'FortiWeb';
        $details->os_cpe = 'fortiweb';
    }
    if ($sysDescr === 'SDP ') {
        $details->os_name = 'FortiWeb';
        $details->os_cpe = 'fortiweb';
    }
    $details->type = 'firewall';
    $details->os_cpe = 'cpe:2.3:o:fortinet:' . $details->os_cpe;
    if (!empty($details->os_version)) {
        $details->os_cpe .= ':' . $details->os_version;
    }

    return($details);
};
