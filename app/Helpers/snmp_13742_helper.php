<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Raritan

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Raritan Computer, Inc.';
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.13742.4.1.1.2.0");
    if (empty($details->model)) {
        $details->model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.13742.4.1.1.12.0");
    }
    if (empty($details->model)) {
        $details->model = 'Raritan PDU';
    }
    if (empty($details->mac_address)) {
        snmp_set_valueretrieval(SNMP_VALUE_LIBRARY);
        $details->mac_address = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.13742.4.1.1.6.0");
        snmp_set_valueretrieval(SNMP_VALUE_PLAIN);
        $details->mac_address = format_mac($details->mac_address);
    }
    if (empty($details->netmask)) {
        $details->netmask = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.13742.4.1.1.4.0");
    }
    $details->type = 'pdu';
    return($details);
};
