<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Mimosa

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Mimosa Networks, Inc';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43356.2.1.2.1.2.0");
    $details->location_longitude = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43356.2.1.2.2.1.0");
    $details->location_latitude = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43356.2.1.2.2.2.0");
    $details->os_version = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43356.2.1.2.1.3.0");
    $details->os_installation_date = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43356.2.1.2.1.4.0");
    return($details);
};
