<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Polycom

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Viavideo Communications, Inc.';
    if ($oid == '1.3.6.1.4.1.2684.1.1') {
        $details->type = 'ip phone';
        $temp = my_snmp_get($ip, $credentials, "1.3.6.1.2.1.1.1.0");
        if (!empty($temp)) {
            $details->model = str_replace("STRING: ", "", $temp);
            $details->model = str_replace("\"\\", "", $details->model);
            $details->model = str_replace("\\\"", "", $details->model);
            $details->model = str_replace("\"", "", $details->model);
        }
        unset($temp);
        if (empty($details->model)) {
            $details->model = 'Polycom HD 8000';
        }
    }
    $details->serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.43.47.1.1.3.1.10.1");
    return($details);
};
