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
* @version   GIT: Open-AudIT_4.2.0
* @link      http://www.open-audit.org
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('generate_token')) {
    function generate_token()
    {
        $command = '';
        // Load and parse opConfig.json
        $files = array ('/usr/local/omk/conf/opCommon.json', 'c:\\omk\\conf\\opCommon.json', '/usr/local/opmojo/conf/opCommon.json');
        foreach ($files as $file) {
            if (file_exists($file)) {
                $json = file_get_contents($file);
                break;
            }
        }
        if (empty($json)) {
            return false;
        }
        $json = json_decode($json);
        $bin = $json->{'directories'}->{'<omk_base>'} . '/bin/';
        $token = $json->{'authentication'}->{'auth_token_key'}[0];
        if (empty($token)) {
            return false;
        }
        $files = array($bin.'generate_auth_token.exe', $bin.'generate_auth_token.pl');
        foreach ($files as $file) {
            if (file_exists($file)) {
                $command = $file;
                break;
            }
        }
        if (!empty($command)) {
            $command .= " '" . $token . "' admin";
            exec($command, $output, $return_var);
            if (!empty($output)) {
                $token = trim($output[0]);
            }
        }
        return $token;
    }
}

if (!function_exists('integrations_pre')) {
    function integrations_pre($integration)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        // Get our devices
        $url = $integration->attributes->attributes->url;
        $url .= 'admin';

        // Create temp file to store cookies
        $ckfile = tempnam("/tmp", "CURLCOOKIE");

        // Post login form and follow redirects
        $ch = curl_init();

        // Using token auth for local NMIS
        if (empty($integration->attributes->attributes->username) and empty($integration->attributes->attributes->password) and (stripos($url, 'localhost') or strpos($url, '127.0.0.1') or strpos($url, '127.0.1.1'))) {
            $token = generate_token();
            $login_url = $url . '/login/' . $token;
        } else {
            $form_fields = array(
                'username' => $integration->attributes->attributes->username,
                'password' => $integration->attributes->attributes->password,
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $form_fields);
            $login_url = $url . '/login';
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $login_url);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $output = curl_exec($ch);
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', 'Logged on to NMIS (pre).', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, check Username and Password.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            } else if (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, check URL.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            } else if (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, check URL.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            } else {
                // Something went awry
                $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, output: " . (string)$output . ".', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            }
        }
        # Location List
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/locations.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        $external_locations = @json_decode($output);

        if (empty($external_locations)) {
            $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', 'No locations returned from NMIS, output: " . (string)$output . ".', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        } else {
            $message = count($external_locations) . " locations returned from NMIS.";
            $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        $location_ids = array();
        $org_list = $CI->m_orgs->get_descendants($integration->attributes->org_id);
        $org_list[] = $integration->attributes->org_id;

        $sql = "/* integrations_nmis_helper::pre */ " . "SELECT * FROM locations WHERE org_id IN (" . implode(',', $org_list) . ")";
        $query = $CI->db->query($sql);
        $locations = $query->result();
        foreach ($external_locations as $external_location) {
            $exists = false;
            unset($ext_location);
            foreach ($locations as $location) {
                if ($external_location->_id === 'default') {
                    $external_location->_id = 'Default Location';
                }
                if ($external_location->_id === $location->name) {
                    // Matching location exists
                    $exists = true;
                    $location_ids[] = intval($location->id);
                    break;
                }
            }
            if (!$exists) {
                // Need to create a new location
                $address = $external_location->Address1;
                if ($external_location->Address2) {
                    $address .= ' ' . $external_location->Address2;
                }
                $type = 'Office';
                if ($external_location->_id === 'Cloud') {
                    $type = 'Cloud';
                }
                if ($external_location->_id === 'DataCenter') {
                    $type = 'Data Center';
                }

                $data = array(  'id' => null,
                                'name' => $external_location->_id,
                                'org_id' => intval($integration->attributes->org_id),
                                'description' => 'Imported from NMIS',
                                'type' => $type,
                                'room' => $external_location->Room,
                                'level' => $external_location->Floor,
                                'address' => $address,
                                'suburb' => $external_location->Suburb,
                                'city' => $external_location->City,
                                'district' => '',
                                'region' => '',
                                'area' => '',
                                'state' => $external_location->State,
                                'postcode' => $external_location->Postcode,
                                'country' => $external_location->Country,
                                'tags' => '',
                                'phone' => '',
                                'picture' => '',
                                'external_ident' => '',
                                'options' => '',
                                'latitude' => $external_location->Latitude,
                                'longitude' => $external_location->Longitude,
                                'geo' => $external_location->Geocode,
                                'cloud_id' => '',
                                'edited_by' => 'system',
                                'edited_date' => $CI->config->config['timestamp']
                            );
                $sql = $CI->db->insert_string('locations', $data);
                $query = $CI->db->query($sql);
                $location_ids[] = $CI->db->insert_id();

                $message = 'Created new location: ' . $external_location->_id;
                $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $CI->db->query($sql, $data);
            }
        }

        $sql = "/* integrations_nmis_helper::pre */ " . "UPDATE integrations set locations = ? WHERE id = ?";
        $data = array(json_encode($location_ids), $integration->id);
        $query = $CI->db->query($sql, $data);

        // Store any pollers
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/pollers.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        $pollers = @json_decode($output);

        if (empty($pollers)) {
            $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', 'No pollers returned from NMIS.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return true;
        } else {
            $message = count($pollers) . " pollers returned from NMIS.";
            $sql = "/* integrations_nmis_helper::pre */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        $sql = "/* integrations_nmis_helper::pre */ " . 'UPDATE integrations SET additional_items = ? WHERE id = ?';
        $additional_items = new stdClass();
        $additional_items->pollers = $pollers;
        $data = array(json_encode($additional_items), $integration->id);
        $query = $CI->db->query($sql, $data);

        return true;
    }
}

if (!function_exists('integrations_collection')) {
    function integrations_collection($integration)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        // Restrict the device select if required
        if ($integration->attributes->select_external_type === 'none') {
            return array();
        }

        // Get our devices
        $url = $integration->attributes->attributes->url;
        $url .= 'admin';

        // Create temp file to store cookies
        $ckfile = tempnam("/tmp", "CURLCOOKIE");

        // Post login form and follow redirects
        $ch = curl_init();

        // Using token auth for local NMIS
        if (empty($integration->attributes->attributes->username) and empty($integration->attributes->attributes->password) and (stripos($url, 'localhost') or strpos($url, '127.0.0.1') or strpos($url, '127.0.1.1'))) {
            $token = generate_token();
            $login_url = $url . '/login/' . $token;
        } else {
            $form_fields = array(
                'username' => $integration->attributes->attributes->username,
                'password' => $integration->attributes->attributes->password,
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $form_fields);
            $login_url = $url . '/login';
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $login_url);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $output = curl_exec($ch);

        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', 'Logged on to NMIS (collection).', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_collection] Could not logon to NMIS, check Username and Password.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            } else if (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_collection] Could not logon to NMIS, check URL.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            } else if (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_collection] Could not logon to NMIS, check URL.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            } else {
                // Something went awry
                $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_collection] Could not logon to NMIS, output: " . (string)$output . ".', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return false;
            }
        }

        // Get the external devices list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/nodes.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);

        if (!is_string($output) || !strlen($output)) {
            $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could not retrieve devices from NMIS, output: " . (string)$output . ".', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return array();
        }
        $external_devices = json_decode($output);
        if (empty($external_devices)) {
            $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'No devices returned from NMIS.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return array();
        } else {
            $count = count($external_devices);
            $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$count devices returned from NMIS.', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }
        if ($integration->attributes->select_external_type === 'attribute') {
            foreach ($external_devices as $key => $value) {
                $value = array_reduce(explode('.', $integration->attributes->select_external_attribute), function ($previous, $current) {
                    return isset($previous->$current) && !empty($previous->$current)? $previous->$current: null;
                }, $value);
                if ((string)$value !== (string)$integration->attributes->select_external_value) {
                    unset($external_devices[$key]);
                }
            }
            $count = count($external_devices);
            $sql = "/* integrations_nmis_helper::collection */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', '$count devices filtered from NMIS.', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }
        foreach ($external_devices as $device) {
            $device->configuration->systemStatus = @strtolower($device->configuration->systemStatus);
            if (empty($device->configuration->location) or $device->configuration->location === 'default') {
                $device->configuration->location = 'Default Location';
            }
        }
        return $external_devices;
    }
}

if (!function_exists('integrations_update')) {
    function integrations_update($integration, $devices)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        if (empty($devices)) {
            return array();
        }

        $external_devices = array();

        // Create our devices
        $url = $integration->attributes->attributes->url;
        $url .= 'admin';

        // Create temp file to store cookies
        $ckfile = tempnam("/tmp", "CURLCOOKIE");

        // Post login form and follow redirects
        $ch = curl_init();

        // Using token auth for local NMIS
        if (empty($integration->attributes->attributes->username) and empty($integration->attributes->attributes->password) and (stripos($url, 'localhost') or strpos($url, '127.0.0.1') or strpos($url, '127.0.1.1'))) {
            $token = generate_token();
            $login_url = $url . '/login/' . $token;
        } else {
            $form_fields = array(
                'username' => $integration->attributes->attributes->username,
                'password' => $integration->attributes->attributes->password,
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $form_fields);
            $login_url = $url . '/login';
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $login_url);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $output = curl_exec($ch);
        if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
            // bad credentials
            $sql = "/* integrations_nmis_helper::update */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] Could not logon to NMIS, check Username and Password.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'redirect_url=') !== false) {
            // Likely a bad URL
            $sql = "/* integrations_nmis_helper::update */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] Could not logon to NMIS, check URL.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            $sql = "/* integrations_nmis_helper::update */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', 'Logged on to NMIS (update).', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

        // loop over our devices and send them to be created
        foreach ($devices as $device) {
            curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/nodes/' . $device->uuid);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($device));
            $output = curl_exec($ch);
            if (!is_string($output) || !strlen($output)) {
                $sql = "/* integrations_nmis_helper::update */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could update device in NMIS.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return array();
            }
            if (empty($output)) {
                $sql = "/* integrations_nmis_helper::update */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'No result from NMIS.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return array();
            } else {
                $message = 'Device ' . $device->configuration->host . ' updated in NMIS.';
                $count = count($external_devices);
                $sql = "/* integrations_nmis_helper::update */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $CI->db->query($sql, $data);
            }
        }
        curl_close($ch);
    }
}

if (!function_exists('integrations_create')) {
    function integrations_create($integration, $devices)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        if (empty($devices)) {
            return array();
        }

        $external_devices = array();

        // Create our devices
        $url = $integration->attributes->attributes->url;
        $url .= 'admin';

        // Create temp file to store cookies
        $ckfile = tempnam("/tmp", "CURLCOOKIE");

        // Post login form and follow redirects
        $ch = curl_init();

        // Using token auth for local NMIS
        if (empty($integration->attributes->attributes->username) and empty($integration->attributes->attributes->password) and (stripos($url, 'localhost') or strpos($url, '127.0.0.1') or strpos($url, '127.0.1.1'))) {
            $token = generate_token();
            $login_url = $url . '/login/' . $token;
        } else {
            $form_fields = array(
                'username' => $integration->attributes->attributes->username,
                'password' => $integration->attributes->attributes->password,
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $form_fields);
            $login_url = $url . '/login';
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $login_url);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $output = curl_exec($ch);
        if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
            // bad credentials
            $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Could not logon to NMIS, check Username and Password.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'redirect_url=') !== false) {
            // Likely a bad URL
            $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Could not logon to NMIS, check URL.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', 'Logged on to NMIS (create).', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/nodes.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_POST, true);

        // loop over our devices and send them to be created
        foreach ($devices as $device) {
            $device->polling_policy = new stdClass();
            $device->polling_policy->collect = 1;
            $device->polling_policy->group = $device->configuration->group;
            $device->polling_policy->netType = $device->configuration->netType;
            $device->polling_policy->ping = 1;
            $device->polling_policy->polling_policy = 'default';
            $device->polling_policy->port = 161;
            $device->polling_policy->roleType = 'default';
            $device->polling_policy->threshold = 1;

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($device));
            $output = curl_exec($ch);
            if (!is_string($output) || !strlen($output)) {
                $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could not create device in NMIS.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return array();
            }
            $external_device = @json_decode($output);
            if (empty($external_device)) {
                $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'No JSON in result from NMIS.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return array();
            } else {
                if (empty($external_device->error)) {
                    $external_devices[] = $external_device;
                    $message = 'Device ' . $device->configuration->host . ' created in NMIS.';
                    $count = count($external_devices);
                    $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                    $data = array($integration->id, microtime(true), $message);
                    $query = $CI->db->query($sql, $data);
                } else {
                    $message = 'Error: ' . $external_device->error;
                    $sql = "/* integrations_nmis_helper::create */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'error')";
                    $data = array($integration->id, microtime(true), $message);
                    $query = $CI->db->query($sql, $data);
                }
            }
        }
        curl_close($ch);
        return $external_devices;
    }
}

if (!function_exists('integrations_delete')) {
    function integrations_delete($integration, $devices)
    {
        error_reporting(E_ALL);
        $CI = & get_instance();

        if (empty($devices)) {
            return array();
        }

        // Create our connection
        $url = $integration->attributes->attributes->url;
        $url .= 'admin';

        // Create temp file to store cookies
        $ckfile = tempnam("/tmp", "CURLCOOKIE");

        // Post login form and follow redirects
        $ch = curl_init();

        // Using token auth for local NMIS
        if (empty($integration->attributes->attributes->username) and empty($integration->attributes->attributes->password) and (stripos($url, 'localhost') or strpos($url, '127.0.0.1') or strpos($url, '127.0.1.1'))) {
            $token = generate_token();
            $login_url = $url . '/login/' . $token;
        } else {
            $form_fields = array(
                'username' => $integration->attributes->attributes->username,
                'password' => $integration->attributes->attributes->password,
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $form_fields);
            $login_url = $url . '/login';
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $login_url);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $output = curl_exec($ch);
        if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
            // bad credentials
            $sql = "/* integrations_nmis_helper::delete */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] Could not logon to NMIS, check Username and Password.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'redirect_url=') !== false) {
            // Likely a bad URL
            $sql = "/* integrations_nmis_helper::delete */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] Could not logon to NMIS, check URL.', 'fail')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
            return false;
        }
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            $sql = "/* integrations_nmis_helper::delete */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', 'Logged on to NMIS (delete).', 'success')";
            $data = array($integration->id, microtime(true));
            $query = $CI->db->query($sql, $data);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        // loop over our devices and send them to be deleted
        foreach ($devices as $device) {
            curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/nodes/' . $device->uuid);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($device));
            $output = curl_exec($ch);
            if (!is_string($output) || !strlen($output)) {
                $sql = "/* integrations_nmis_helper::delete */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'Could delete device in NMIS.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return array();
            }
            if (empty($output)) {
                $sql = "/* integrations_nmis_helper::delete */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', 'No result from NMIS.', 'fail')";
                $data = array($integration->id, microtime(true));
                $query = $CI->db->query($sql, $data);
                return array();
            } else {
                $message = 'Device ' . $device->configuration->host . ' deleted in NMIS.';
                $sql = "/* integrations_nmis_helper::delete */ " . "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?, 'success')";
                $data = array($integration->id, microtime(true), $message);
                $query = $CI->db->query($sql, $data);
            }
        }
        curl_close($ch);
    }
}

if (!function_exists('integrations_post')) {
    function integrations_post($integration, $devices)
    {
        $CI = & get_instance();
        $groups = array();
        if (empty($devices)) {
            return true;
        }
        foreach ($devices as $device) {
            if (!empty($device->configuration->group)) {
                $groups[] = $device->configuration->group;
            }
        }
        $groups = array_unique($groups);
        $groups = array_values($groups);
        if (!empty($groups)) {
            $sql = "/* integrations_nmis_helper::post */ " . "SELECT additional_items FROM integrations WHERE id = ?";
            $data = array($integration->id);
            $query = $CI->db->query($sql, $data);
            $result = $query->result();
            $additional_items = new stdClass();
            $additional_items = @json_decode($result[0]->additional_items);
            $additional_items->groups = $groups;

            $sql = "/* integrations_nmis_helper::post */ " . 'UPDATE integrations SET additional_items = ? WHERE id = ?';
            $data = array(json_encode($additional_items), $integration->id);
            $query = $CI->db->query($sql, $data);
        }
        return true;
    }
}
