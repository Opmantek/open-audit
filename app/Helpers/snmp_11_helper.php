<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

# Vendor Hewlett Packard

$get_oid_details = function ($ip, $credentials, $oid) {
    $details = new \StdClass();
    $details->manufacturer = 'Hewlett Packard';
    $details->serial = my_snmp_get($ip, $credentials, ".1.3.6.1.4.1.11.2.36.1.1.2.9.0");
    if (!empty($credentials->credentials->version) and intval($credentials->credentials->version) === 1) {
        # model is a hex encoded string in HP Laserjets using snmp v1
        if (empty($details->model)) {
            $temp_model = '';
            $model = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.11.2.3.9.4.2.1.1.3.2.0");
            if (!empty($model)) {
                $model = str_replace(" ", "", $model);
                $model = str_replace("\n", "", $model);
                if (function_exists('hex2bin')) {
                    $details->model = @hex2bin($model);
                } else {
                    $details->model = pack("H*", $model);
                }
                $temp_model = mb_convert_encoding($details->model, "UTF-8", "ASCII");
            }
        }
        # serial is a hex encoded string in HP Laserjets using snmp v1
        $serial = my_snmp_get($ip, $credentials, "1.3.6.1.4.1.11.2.3.9.4.2.1.1.3.3.0");
        if (!empty($serial)) {
            $serial = str_replace(" ", "", $serial);
            $serial = str_replace("\n", "", $serial);
            if (function_exists('hex2bin')) {
                $details->serial = hex2bin($serial);
            } else {
                $details->serial = pack("H*", $serial);
            }
            $details->serial = mb_convert_encoding($details->serial, "UTF-8", "ASCII");
        }
    }

    if ((!empty($details->model) and (stripos($details->model, "laserjet") !== false)) and (!isset($details->type) or $details->type == '' or $details->type == 'unknown')) {
        $details->type = "network printer";
    }

    if (!empty($temp_model)) {
        $details->model = $temp_model;
    }

    if (empty($details->os_version)) {
        $details->os_version = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.47.1.1.1.1.10.1');
    }
    if (empty($details->os_version)) {
        # ProCurve J4903A Switch 2824, revision I.10.107, ROM I.08.07 (/sw/code/build/mako)
        $sysDescr = my_snmp_get($ip, $credentials, '1.3.6.1.2.1.1.1.0');
        if (!empty($sysDescr) and stripos($sysDescr, 'revision ') !== false) {
            $revision = stripos($sysDescr, 'revision');
            $sysDescr = substr($sysDescr, $revision);
            $split = explode(',', $sysDescr);
            $split2 = explode(' ', $split[0]);
            $details->os_version = !empty($split2[1]) ? $split2[1] : '';
        }
    }

    return($details);
};
