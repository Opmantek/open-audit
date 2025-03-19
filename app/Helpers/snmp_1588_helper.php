<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Brocade Foundry

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Brocade Communication Systems';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.1991.1.1.1.1.2.0");
    $sysDescr = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.1.0');
    // Extreme-BR-SLX9240, SLX Operating System Version 18s.1.03e.
    if (stripos($sysDescr, 'SLX Operating System') !== false) {
        $details->os_group = 'Extreme Networks';
        $details->os_family = 'Extreme Networks. SLX.';
        $details->os_name = 'SLX Operating System';
        $details->os_version = substr($sysDescr, (strpos($sysDescr, 'Version ') + 8));
    }
    return($details);
};
