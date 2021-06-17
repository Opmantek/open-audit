<?php
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.1.2
* @link      http://www.open-audit.org
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
if (!function_exists('integrations_execute')) {
    function integrations_execute($integration)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();
echo "<pre>\n";
        // Get our devices
        $url = $integration->attributes->attributes->url;

        // Create temp file to store cookies
        $ckfile = tempnam("/tmp", "CURLCOOKIE");

        $form_fields = array(
            'username' => $integration->attributes->attributes->username,
            'password' => $integration->attributes->attributes->password,
        );

        // Post login form and follow redirects
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url . '/admin/login');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $form_fields);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $output = curl_exec($ch);
        if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
            // bad credentials
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could not logon to NMIS, check Username and Password.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'redirect_url=') !== false) {
            // Likely a bad URL
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could not logon to NMIS, check URL.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', 'Logged on to NMIS.', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        // Get the external devices list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/admin/api/v2/nodes.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        if (!is_string($output) || !strlen($output)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could not retrieve devices from NMIS.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        $external_devices = json_decode($output);
        if (empty($external_devices)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'No devices returned from NMIS.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        } else {
            $count = count($external_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$count devices returned from NMIS.', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }



        // Restrict the device select if required
        if ($integration->attributes->select_external_type === 'none') {
            unset($external_devices);
            $external_devices = array();
        }
        if ($integration->attributes->select_external_type === 'attribute') {
            foreach ($external_devices as $key => $value) {
                $value = array_reduce(explode('.', $integration->attributes->select_external_attribute), function ($previous, $current) { return isset($previous->$current) && !empty($previous->$current)? $previous->$current: null; }, $value);
                if ((string)$value !== (string)$integration->attributes->select_external_value) {
                    unset($external_devices[$key]);
                }
            }
            $count = count($external_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$count devices filtered from NMIS.', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        $external_formatted_devices = array();

        foreach ($external_devices as $device) {
            $newdevice = new stdClass();            
            foreach ($integration->attributes->fields as $field) {
                if (empty($field->internal_field_name)) {
                    $temp = explode('.', $field->external_field_name);
                    $field->internal_field_name = 'fields.nmis_' . $temp[count($temp)-1];
                }

                if (!empty($field->internal_field_name)) {
                    $int = explode('.', $field->internal_field_name);
                    if (empty($newdevice->{$int[0]})) {
                        $newdevice->{$int[0]} = new stdClass();
                    }
                    if (empty($newdevice->{$int[0]}->{$int[1]})) {

                        $newdevice->{$int[0]}->{$int[1]} = array_reduce(explode('.', $field->external_field_name), function ($previous, $current) { return isset($previous->$current) && !empty($previous->$current)? $previous->$current: null; }, $device);

                        if (is_null($newdevice->{$int[0]}->{$int[1]})) {
                            unset($newdevice->{$int[0]}->{$int[1]});
                        }
                    }
                }
            }
            $external_formatted_devices[] = $newdevice;
        }

        # Ensure we have an IP in system.ip
        foreach ($external_formatted_devices as $device) {
            if (isset($device->system->ip) and !empty($device->system->ip)) {
                if (!filter_var($device->system->ip, FILTER_VALIDATE_IP)) {
                    if (strpos('.', $device->system->ip) !== false) {
                        $device->system->dns_fqdn = $device->system->ip;
                    } else {
                        $device->system->dns_hostname = $device->system->ip;
                    }
                    $device->system->ip = gethostbyname($device->system->ip);
                }
                $fqdn = gethostbyaddr($device->system->ip);
                if (empty($device->system->dns_fqdn) and strpos($fqdn, '.') !== false) {
                    $device->system->dns_fqdn = $fqdn;
                }
            }
        }

        
        // check each retrieved device and see if we already have it
        $CI->load->model('m_devices');
        $CI->load->model('m_device');
        $CI->load->model('m_rules');
        $CI->load->helper('audit');


        $log = new stdClass();
        $log->type = 'system';
        $log->severity = 5;
        $log->user = 'system';
        $log->collection = 'integrations';
        $log->action = 'create device';
        $log->status = '';
        $log->summary = '';
        $log->detail = '';

        foreach ($external_formatted_devices as $device) {
            $device->system->last_seen_by = 'integration';
            $parameters = new stdClass();
            $parameters->details = $device->system;
            $parameters->log = $log;
            $id = $CI->m_device->match($parameters);
            if (!empty($id)) {
                // We matched an existing device
                $message = 'Device match found, ID: ' . $id . ' for ' . $device->system->name;
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $CI->db->query($sql, $data);
                $device->system->id = $id;
                // Should we update it?
                if ($integration->attributes->update_local_from_external === 'y') {

                    $temp_device = new stdClass();
                    $temp_device->id = $device->system->id;
                    $temp_device->last_seen_by = 'integrations';

                    foreach ($integration->attributes->fields as $field) {
                        if ($field->priority = 'external' and strpos($field->internal_field_name, 'system.') === 0) {
                            // a regular field in Open-AudIT that we should update
                            $system_field = str_replace('system.', '', $field->internal_field_name);
                            if (!empty($device->system->{$system_field})) { # TODO - better than not empty
                                $temp_device->{$system_field} = $device->system->{$system_field};
                            }
                        }
                    }


                    $message = 'Updating device ID: ' . $id . ' for ' . $device->system->name;
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                    $data = array($integration->id, microtime(true), $message);
                    $query = $CI->db->query($sql, $data);

                    $CI->m_device->update($temp_device);
                }
            }

            if ($integration->attributes->create_local_from_external === 'y' or $integration->attributes->update_local_from_external === 'y') {
                # Rules
                $parameters = new stdClass();
                $parameters->id = intval($device->system->id);
                $parameters->discovery_id = '';
                $parameters->action = 'update';
                $CI->m_rules->execute($parameters);

                # Custom fields
                foreach ($integration->attributes->fields as $field) {
                    if ($field->priority = 'external' and (strpos($field->internal_field_name, 'fields.') === 0 or $field->internal_field_name === '')) {
                        // a custom field in Open-AudIT that we should update
                        $field_name = str_replace('fields.', '', $field->internal_field_name);
                        if (empty($custom_field_name)) {
                            $external_field = explode('.', $field->external_field_name);
                            $field_name = $integration->attributes->type . '_' . $external_field[count($external_field)-1];
                        }

                        if (!empty($device->fields->{$field_name})) {
                            $temp_device = new stdClass();
                            $temp_device->id = $device->system->id;
                            $temp_device->last_seen_by = 'integrations';
                            $temp_device->{$field_name} = $device->fields->{$field_name};

                            $CI->m_devices->update($temp_device);
                        }
                        
                    }
                }
            }



        }
        



        print_r($external_formatted_devices);
        exit;








    }
}