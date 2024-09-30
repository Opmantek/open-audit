<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Scientific-Atlanta, Inc.

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Scientific-atlanta, Inc.';
    if ($oid == '1.3.6.1.4.1.1429.2.2.6.2') {
        $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.1429.2.2.4.1.7.0");
    }
    # attempt to refine the model number
    $temp_model = '';
    $temp_model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.1429.2.2.4.1.6.0");
    if (!empty($temp_model)) {
        $temp_array = explode('_', $temp_model);
        if ($temp_array[0] != '') {
            $details->model = $temp_array[0] . ' Program Receiver';
        }
    }
    unset($temp_model);
    unset($tmp_array);
    return($details);
};
