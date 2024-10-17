<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Wyse

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Wyse Technology';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.714.1.2.6.2.1.0");
    $details->sysname = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.5.0");
    $details->description = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
    $details->contact = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.4.0");
    if (!empty($details->contact)) {
        $details->description = "Contact: " . $details->contact . ". " . $details->description;
    }
    $details->location = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.6.0");
    if (!empty($details->location)) {
        $details->description = "Location: " . $details->location . ". " . $details->description;
    }
    return($details);
};
