<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

if (!function_exists('generate_token')) {
    function generate_token()
    {
        $config =  new \Config\OpenAudit();
        $command = '';
        $user_token = '';
        // Load and parse opConfig.json
        $files = array ($config->commercial_dir . '/conf/opCommon.json');
        foreach ($files as $file) {
            if (file_exists($file)) {
                log_message('debug', 'Parsing config file: ' . $file);
                $json = file_get_contents($file);
                break;
            }
        }
        if (empty($json)) {
            log_message('error', 'Could not parse config file.');
            return false;
        }
        try {
            $json = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            return false;
        }

        $bin = (!empty($json->{'directories'}->{'<omk_base>'})) ? $json->{'directories'}->{'<omk_base>'} . '/bin/' : '';
        $token = (!empty($json->{'authentication'}->{'auth_token_key'}[0])) ? $json->{'authentication'}->{'auth_token_key'}[0] : '';
        if (empty($token)) {
            log_message('error', 'Config file attribute auth_token_key is empty');
            return false;
        }
        if ($json->{'authentication'}->{'auth_method_1'} !== 'token' and $json->{'authentication'}->{'auth_method_2'} !== 'token' and $json->{'authentication'}->{'auth_method_3'} !== 'token') {
            $message = 'One of the auth methods must be set to token for NMIS integrations to work without a username and password.';
            log_message('error', $message);
        }
        $files = array(ROOTPATH . 'other/generate_auth_token.pl', $bin . 'generate_auth_token.exe', $bin . 'generate_auth_token.pl');
        foreach ($files as $file) {
            if (file_exists($file)) {
                log_message('debug', 'Using ' . $file . ' to generate token.');
                $command = $file;
                break;
            }
        }
        if (!empty($command)) {
            $command .= " '" . $token . "' admin";
            exec($command, $output, $return_var);
            if (!empty($output)) {
                $user_token = trim((string)$output[0]);
                log_message('debug', 'Token generated is: ' . $user_token);
            } else {
                log_message('error', 'Command to generate token failed. Command: ' . $command);
            }
        }
        return $user_token;
    }
}

if (!function_exists('integrations_pre')) {
    function integrations_pre($integration)
    {
        error_reporting(E_ALL);
        $orgsModel = new \App\Models\OrgsModel();
        $locationsModel = new \App\Models\LocationsModel();
        $db = db_connect();

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
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

        # Special case $integration->log for our logon default item
        if (isset($integration->log) and $integration->log === false) {
            # leave it
        } else {
            $integration->log = true;
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
            if ($integration->attributes->debug) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '[integrations_pre] Logged on to NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                if ($integration->log) {
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, check Username and Password.')";
                    $query = $db->query($sql, [$integration->id, microtime(true)]);
                }
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                if ($integration->log) {
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, check URL.')";
                    $db->query($sql, [$integration->id, microtime(true)]);
                }
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                if ($integration->log) {
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_pre] Could not logon to NMIS, check URL.')";
                    $db->query($sql, [$integration->id, microtime(true)]);
                }
                curl_close($ch);
                unlink($ckfile);
                return false;
            } else {
                // Something went awry
                if ($integration->log) {
                    $message = '[integrations_pre] Could not logon to NMIS, output: ' . (string)$output . '.';
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                    $db->query($sql, [$integration->id, microtime(true), $message]);
                }
                curl_close($ch);
                unlink($ckfile);
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
        try {
            $external_locations = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($external_locations)) {
            if ($integration->log) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_pre] No locations returned from NMIS, output: " . (string)$output . ".')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if ($integration->log) {
                $message = "[integrations_pre] " . count($external_locations) . " locations returned from NMIS.";
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
                if ($integration->attributes->debug) {
                    $message = "[integrations_pre] Locations: " . json_encode($external_locations);
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                    $db->query($sql, [$integration->id, microtime(true)]);
                }
            }
        }

        $location_ids = array();
        $org_list = $orgsModel->getDescendants($integration->attributes->org_id);
        $org_list[] = $integration->attributes->org_id;

        $sql = "SELECT * FROM locations WHERE org_id IN (" . implode(',', $org_list) . ")";
        $query = $db->query($sql);
        $locations = $query->getResult();
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
                if (empty($address)) {
                    $address = '';
                }
                $type = 'Office';
                if ($external_location->_id === 'Cloud') {
                    $type = 'Cloud';
                }
                if ($external_location->_id === 'DataCenter') {
                    $type = 'Data Center';
                }

                $attributes = array('Room', 'Floor', 'Suburb', 'City', 'State', 'Postcode', 'Country', 'Latitude', 'Longitude', 'Geocode');
                foreach ($attributes as $attribute) {
                    if (empty($external_location->{$attribute})) {
                        $external_location->{$attribute} = '';
                    }
                }

                // $data = array(  'id' => null,
                //                 'name' => $external_location->_id,
                //                 'org_id' => intval($integration->attributes->org_id),
                //                 'description' => 'Imported from NMIS',
                //                 'type' => $type,
                //                 'room' => $external_location->Room,
                //                 'level' => $external_location->Floor,
                //                 'address' => $address,
                //                 'suburb' => $external_location->Suburb,
                //                 'city' => $external_location->City,
                //                 'district' => '',
                //                 'region' => '',
                //                 'area' => '',
                //                 'state' => $external_location->State,
                //                 'postcode' => $external_location->Postcode,
                //                 'country' => $external_location->Country,
                //                 'tags' => '',
                //                 'phone' => '',
                //                 'picture' => '',
                //                 'external_ident' => '',
                //                 'options' => '',
                //                 'latitude' => $external_location->Latitude,
                //                 'longitude' => $external_location->Longitude,
                //                 'geo' => $external_location->Geocode,
                //                 'cloud_id' => '',
                //                 'edited_by' => 'system',
                //                 'edited_date' => $CI->config->config['timestamp']
                //             );
                // $sql = $CI->db->insert_string('locations', $data);
                // $query = $CI->db->query($sql);
                // $location_ids[] = $CI->db->insert_id();

                $myLocation = new \stdClass();
                $myLocation->name = $external_location->_id;
                $myLocation->org_id = intval($integration->attributes->org_id);
                $myLocation->description = 'Imported from NMIS';
                $myLocation->type = $type;
                $myLocation->room = $external_location->Room;
                $myLocation->level = $external_location->Floor;
                $myLocation->address = $address;
                $myLocation->suburb = $external_location->Suburb;
                $myLocation->city = $external_location->City;
                $myLocation->district = '';
                $myLocation->region = '';
                $myLocation->area = '';
                $myLocation->state = $external_location->State;
                $myLocation->postcode = $external_location->Postcode;
                $myLocation->country = $external_location->Country;
                $myLocation->tags = '';
                $myLocation->phone = '';
                $myLocation->picture = '';
                $myLocation->external_ident = '';
                $myLocation->options = '';
                $myLocation->latitude = $external_location->Latitude;
                $myLocation->longitude = $external_location->Longitude;
                $myLocation->geo = $external_location->Geocode;
                $myLocation->cloud_id = '';
                $myLocation->edited_by = 'system';
                $myLocation->edited_date = $instance->config->timestamp;
                $location_ids[] = $locationsModel->create($myLocation);

                if ($integration->log) {
                    $message = "[integrations_pre] " . 'Created new location: ' . $external_location->_id;
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                    $query = $db->query($sql, [$integration->id, microtime(true), $message]);
                }
            }
        }

        $sql = "UPDATE integrations set locations = ? WHERE id = ?";
        $query = $db->query($sql, [json_encode($location_ids), $integration->id]);

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
        try {
            $pollers = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($pollers)) {
            if ($integration->log) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_pre] No pollers returned from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
            $pollers = array();
        } else {
            if ($integration->log) {
                $message = "[integrations_pre]  " . count($pollers) . " pollers returned from NMIS.";
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
                if ($integration->attributes->debug) {
                    $message = "[integrations_pre] Pollers: " . json_encode($pollers);
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                    $db->query($sql, [$integration->id, microtime(true)]);
                }
            }
        }

        // Store any groups
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/groups.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $groups = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($groups)) {
            if ($integration->log) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_pre] No groups returned from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                $groups = array();
            }
        } else {
            if ($integration->log) {
                $message = "[integrations_pre]  " . count($groups) . " groups returned from NMIS.";
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
                if ($integration->attributes->debug) {
                    $message = "[integrations_pre] Groups: " . json_encode($groups);
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                    $db->query($sql, [$integration->id, microtime(true)]);
                }
            }
        }

        // Store any roles
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/roles.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $roles = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        if (empty($roles)) {
            if ($integration->log) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_pre] No roles returned from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
            $roles = array();
        } else {
            if ($integration->log) {
                $message = "[integrations_pre]  " . count($roles) . " roles returned from NMIS.";
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
                if ($integration->attributes->debug) {
                    $message = "[integrations_pre] Roles: " . json_encode($roles);
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                    $db->query($sql, [$integration->id, microtime(true)]);
                }
            }
        }

        // Store any customers
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/customers.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $customers_retrieved = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $customers = array();

        if (empty($customers_retrieved)) {
            if ($integration->log) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_pre] No customers returned from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if ($integration->log) {
                $message = "[integrations_pre]  " . count($customers_retrieved) . " customers returned from NMIS.";
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
            foreach ($customers_retrieved as $customer) {
                $customers[] = $customer->customer;
            }
            if ($integration->attributes->debug) {
                $message = "[integrations_pre] Customers: " . json_encode($customers_retrieved);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        // Store any business services
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/businessservices.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        try {
            $business_services_retrieved = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $business_services = array();

        if (empty($business_services_retrieved)) {
            if ($integration->log) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_pre] No business_services returned from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if ($integration->log) {
                $message = "[integrations_pre]  " . count($business_services_retrieved) . " business_services returned from NMIS.";
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
            foreach ($business_services_retrieved as $business_service) {
                $business_services[] = $business_service->businessService;
            }
            if ($integration->attributes->debug) {
                $message = "[integrations_pre] Business Services: " . json_encode($business_services_retrieved);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        $sql = 'UPDATE integrations SET additional_items = ? WHERE id = ?';
        $additional_items = new \StdClass();
        $additional_items->pollers = $pollers;
        $additional_items->groups = $groups;
        $additional_items->roles = $roles;
        $additional_items->customers = $customers;
        $additional_items->business_services = $business_services;
        $db->query($sql, [json_encode($additional_items), $integration->id]);

        curl_close($ch);
        unlink($ckfile);
        return true;
    }
}

if (!function_exists('integrations_collection')) {
    function integrations_collection($integration)
    {
        error_reporting(E_ALL);
        $db = db_connect();

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
            if (empty($token)) {
                $message = '[integrations_collection] Could not generate token.';
                log_message('error', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
            }
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
            if ($integration->attributes->debug) {
                $message = '[integrations_collection] Logged on to NMIS.';
                log_message('debug', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
            }
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $message = '[integrations_collection] Could not logon to NMIS, check Username and Password.';
                log_message('error', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $message = '[integrations_collection] Could not logon to NMIS, check URL.';
                log_message('error', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $message = '[integrations_collection] Could not logon to NMIS, check URL.';
                log_message('error', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } else {
                // Something went awry
                log_message('error', $login_url);
                $message = '[integrations_collection] Could not logon to NMIS, output: ' . (string)$output . '.';
                log_message('error', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
                curl_close($ch);
                unlink($ckfile);
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
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_collection] Could not retrieve devices from NMIS, output: " . (string)$output . ".')";
            $db->query($sql, [$integration->id, microtime(true)]);
            curl_close($ch);
            unlink($ckfile);
            return array();
        }
        try {
            $external_devices = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($external_devices)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_collection] No devices returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
            curl_close($ch);
            unlink($ckfile);
            return array();
        } else {
            // Exclude the "global" node
            foreach ($external_devices as $key => $device) {
                if ($device->configuration->host === '__global__.0.0.0') {
                    unset($external_devices[$key]);
                    break;
                }
            }
            $count = count($external_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '[integrations_collection] $count devices returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
        }
        if ($integration->attributes->select_external_type === 'attribute') {
            foreach ($external_devices as $key => $value) {
                $value = array_reduce(explode('.', $integration->attributes->select_external_attribute), function ($previous, $current) {
                    return isset($previous->$current) && !empty($previous->$current) ? $previous->$current : null;
                }, $value);
                if ((string)$value !== (string)$integration->attributes->select_external_value) {
                    unset($external_devices[$key]);
                }
            }
            $count = count($external_devices);
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'notice', '[integrations_collection] $count devices filtered from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
        }
        foreach ($external_devices as $device) {
            $device->configuration->systemStatus = '';
            if (!empty($device->configuration->systemStatus)) {
                $device->configuration->systemStatus = strtolower($device->configuration->systemStatus);
            }
            if (empty($device->configuration->location) or $device->configuration->location === 'default') {
                $device->configuration->location = 'Default Location';
            }
        }
        unlink($ckfile);
        return $external_devices;
    }
}

if (!function_exists('integrations_update')) {
    function integrations_update($integration, $devices)
    {
        error_reporting(E_ALL);
        $db = db_connect();

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
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            if ($integration->attributes->debug) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '[integrations_update] Logged on to NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] Could not logon to NMIS, check Username and Password.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } else {
                // Something went awry
                $message = '[integrations_update] Could not logon to NMIS, output: ' . (string)$output . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            }
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

        // loop over our devices and send them to be updated
        foreach ($devices as $device) {
            curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/nodes/' . $device->uuid);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($device));
            $output = curl_exec($ch);
            if (!is_string($output) || !strlen($output)) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] Could not update device in NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return array();
            }
            if (empty($output)) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_update] No result from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return array();
            } else {
                $message = '[integrations_update] Device ' . $device->name . ' at ' . $device->configuration->host . ' updated in NMIS.';
                $count = count($external_devices);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
            }
        }
        unlink($ckfile);
        curl_close($ch);
    }
}

if (!function_exists('integrations_create')) {
    function integrations_create($integration, $devices)
    {
        error_reporting(E_ALL);
        $db = db_connect();

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
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            if ($integration->attributes->debug) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '[integrations_create] Logged on to NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Could not logon to NMIS, check Username and Password.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } else {
                // Something went awry
                $message = '[integrations_create] Could not logon to NMIS, output: ' . (string)$output . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            }
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
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($device));
            $output = curl_exec($ch);
            if (!is_string($output) || !strlen($output)) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Could not create device in NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                if ($integration->attributes->debug) {
                    $message = '[integrations_create] Sent device data: ' . json_encode($device);
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                    $db->query($sql, [$integration->id, microtime(true), $message]);
                }
                curl_close($ch);
                unlink($ckfile);
                return array();
            }
            try {
                $external_device = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            if (empty($external_device)) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_create] Invalid JSON in result from NMIS. Result: ' . (string)$output)";
                $data = array($integration->id, microtime(true));
                $query = $db->query($sql, $data);
                log_message('error', '[integrations_create] Invalid JSON in result from NMIS. Result: ' . (string)$output);
                curl_close($ch);
                unlink($ckfile);
                return array();
            }
            if (empty($external_device)) {
                $message = '[integrations_create] No JSON in result from NMIS. Result: ' . (string)$output;
                log_message('error', $message);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
                curl_close($ch);
                unlink($ckfile);
                return array();
            }
            if (!empty($external_device->error)) {
                $message = '[integrations_create] Error: ' . $external_device->error;
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
            }
            if (empty($external_device->error)) {
                $external_devices[] = $external_device;
                $message = '[integrations_create] Device ' . $device->configuration->host . ' created in NMIS.';
                $count = count($external_devices);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
                if ($integration->attributes->debug) {
                    $message = '[integrations_create] Received device creation data: ' . $output;
                    $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', ?)";
                    $db->query($sql, [$integration->id, microtime(true), $message]);
                }
            }
        }
        curl_close($ch);
        unlink($ckfile);
        return $external_devices;
    }
}

if (!function_exists('integrations_delete')) {
    function integrations_delete($integration, $devices)
    {
        error_reporting(E_ALL);
        $db = db_connect();

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
        if (strpos($output, 'Set-Cookie') !== false) {
            // Success
            if ($integration->attributes->debug) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '[integrations_delete] Logged on to NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] Could not logon to NMIS, check Username and Password.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } else {
                // Something went awry
                $message = '[integrations_delete] Could not logon to NMIS, output: ' . (string)$output . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            }
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
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] Could not delete device in NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return array();
            }
            if (empty($output)) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_delete] No result from NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return array();
            } else {
                $message = '[integrations_delete] Device ' . $device->configuration->host . ' deleted in NMIS.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }
        curl_close($ch);
        unlink($ckfile);
    }
}

if (!function_exists('integrations_post')) {
    function integrations_post($integration, $devices)
    {
        // NOTE - This function is an exact copy of integrations_pre (except for the log descriptions)
        //        We need to run again as some items may have been created (EG: nmis_group) during the integration
        //        and not running this again to update affects the 'list' items on the devices read template.
        error_reporting(E_ALL);
        $db = db_connect();
        $orgsModel = new \App\Models\OrgsModel();
        $locationsModel = new \App\Models\LocationsModel();

        if (function_exists('get_instance')) {
            $instance = & get_instance();
        } else {
            $instance = new stdClass();
            $instance->config = config('Openaudit');
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
            if ($integration->attributes->debug) {
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '[integrations_post] Logged on to NMIS.')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        } else {
            if (strpos($output, 'HTTP/1.1 403 Forbidden') !== false) {
                // bad credentials
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_post] Could not logon to NMIS, check Username and Password.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'HTTP/1.1 404 Not Found') !== false) {
                // bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_post] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } elseif (strpos($output, 'redirect_url=') !== false) {
                // Likely a bad URL
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', '[integrations_post] Could not logon to NMIS, check URL.')";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
                return false;
            } else {
                // Something went awry
                $message = '[integrations_post] Could not logon to NMIS, output: ' . (string)$output . '.';
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'error', ?)";
                $db->query($sql, [$integration->id, microtime(true)]);
                curl_close($ch);
                unlink($ckfile);
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
        try {
            $external_locations = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        if (empty($external_locations)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_post] No locations returned from NMIS, output: " . (string)$output . ".')";
            $db->query($sql, [$integration->id, microtime(true)]);
        } else {
            $message = "[integrations_post] " . count($external_locations) . " locations returned from NMIS.";
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
            $db->query($sql, [$integration->id, microtime(true)]);
            if ($integration->attributes->debug) {
                $message = "[integrations_post] Locations: " . json_encode($external_locations);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        $location_ids = array();
        $org_list = $orgsModel->getDescendants($integration->attributes->org_id);
        $org_list[] = $integration->attributes->org_id;

        $sql = "SELECT * FROM locations WHERE org_id IN (" . implode(',', $org_list) . ")";
        $locations = $db->query($sql)->getResult();
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
                if (empty($address)) {
                    $address = '';
                }
                $type = 'Office';
                if ($external_location->_id === 'Cloud') {
                    $type = 'Cloud';
                }
                if ($external_location->_id === 'DataCenter') {
                    $type = 'Data Center';
                }

                $attributes = array('Room', 'Floor', 'Suburb', 'City', 'State', 'Postcode', 'Country', 'Latitude', 'Longitude', 'Geocode');
                foreach ($attributes as $attribute) {
                    if (empty($external_location->{$attribute})) {
                        $external_location->{$attribute} = '';
                    }
                }

                // $data = array(  'id' => null,
                //                 'name' => $external_location->_id,
                //                 'org_id' => intval($integration->attributes->org_id),
                //                 'description' => 'Imported from NMIS',
                //                 'type' => $type,
                //                 'room' => $external_location->Room,
                //                 'level' => $external_location->Floor,
                //                 'address' => $address,
                //                 'suburb' => $external_location->Suburb,
                //                 'city' => $external_location->City,
                //                 'district' => '',
                //                 'region' => '',
                //                 'area' => '',
                //                 'state' => $external_location->State,
                //                 'postcode' => $external_location->Postcode,
                //                 'country' => $external_location->Country,
                //                 'tags' => '',
                //                 'phone' => '',
                //                 'picture' => '',
                //                 'external_ident' => '',
                //                 'options' => '',
                //                 'latitude' => $external_location->Latitude,
                //                 'longitude' => $external_location->Longitude,
                //                 'geo' => $external_location->Geocode,
                //                 'cloud_id' => '',
                //                 'edited_by' => 'system',
                //                 'edited_date' => $CI->config->config['timestamp']
                //             );
                // $sql = $CI->db->insert_string('locations', $data);
                // $query = $CI->db->query($sql);
                // $location_ids[] = $CI->db->insert_id();

                $myLocation = new \stdClass();
                $myLocation->name = $external_location->_id;
                $myLocation->org_id = intval($integration->attributes->org_id);
                $myLocation->description = 'Imported from NMIS';
                $myLocation->type = $type;
                $myLocation->room = $external_location->Room;
                $myLocation->level = $external_location->Floor;
                $myLocation->address = $address;
                $myLocation->suburb = $external_location->Suburb;
                $myLocation->city = $external_location->City;
                $myLocation->district = '';
                $myLocation->region = '';
                $myLocation->area = '';
                $myLocation->state = $external_location->State;
                $myLocation->postcode = $external_location->Postcode;
                $myLocation->country = $external_location->Country;
                $myLocation->tags = '';
                $myLocation->phone = '';
                $myLocation->picture = '';
                $myLocation->external_ident = '';
                $myLocation->options = '';
                $myLocation->latitude = $external_location->Latitude;
                $myLocation->longitude = $external_location->Longitude;
                $myLocation->geo = $external_location->Geocode;
                $myLocation->cloud_id = '';
                $myLocation->edited_by = 'system';
                $myLocation->edited_date = $instance->config->timestamp;
                $location_ids[] = $locationsModel->create($myLocation);

                $message = "[integrations_post] " . 'Created new location: ' . $external_location->_id;
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', ?)";
                $db->query($sql, [$integration->id, microtime(true), $message]);
            }
        }

        $sql = "UPDATE integrations set locations = ? WHERE id = ?";
        $db->query($sql, [json_encode($location_ids), $integration->id]);

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
        try {
            $pollers = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        if (empty($pollers)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_post] No pollers returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
            $pollers = array();
        } else {
            $message = "[integrations_post]  " . count($pollers) . " pollers returned from NMIS.";
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
            $db->query($sql, [$integration->id, microtime(true)]);
            if ($integration->attributes->debug) {
                $message = "[integrations_post] Pollers: " . json_encode($pollers);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        // Store any groups
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/groups.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $groups = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        if (empty($groups)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_post] No groups returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
            $groups = array();
            #return true;
        } else {
            $message = "[integrations_post]  " . count($groups) . " groups returned from NMIS.";
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
            $db->query($sql, [$integration->id, microtime(true)]);
            if ($integration->attributes->debug) {
                $message = "[integrations_post] Groups: " . json_encode($groups);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        // Store any roles
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/roles.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $roles = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        if (empty($roles)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_post] No roles returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
            $roles = array();
            #return true;
        } else {
            $message = "[integrations_post]  " . count($roles) . " roles returned from NMIS.";
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
            $db->query($sql, [$integration->id, microtime(true)]);
            if ($integration->attributes->debug) {
                $message = "[integrations_post] Roles: " . json_encode($roles);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        // Store any customers
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/customers.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $customers_retrieved = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $customers = array();

        if (empty($customers_retrieved)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_post] No customers returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
        } else {
            $message = "[integrations_post]  " . count($customers_retrieved) . " customers returned from NMIS.";
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
            $db->query($sql, [$integration->id, microtime(true)]);
            foreach ($customers_retrieved as $customer) {
                $customers[] = $customer->customer;
            }
            if ($integration->attributes->debug) {
                $message = "[integrations_post] Customers: " . json_encode($customers_retrieved);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        // Store any business services
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Accepts all CAs
        curl_setopt($ch, CURLOPT_URL, $url . '/api/v2/businessservices.json');
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile); //Uses cookies from the temp file
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        try {
            $business_services_retrieved = json_decode($output, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $business_services = array();

        if (empty($business_services_retrieved)) {
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'warning', '[integrations_post] No business_services returned from NMIS.')";
            $db->query($sql, [$integration->id, microtime(true)]);
        } else {
            $message = "[integrations_post]  " . count($business_services_retrieved) . " business_services returned from NMIS.";
            $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'info', '$message')";
            $db->query($sql, [$integration->id, microtime(true)]);
            foreach ($business_services_retrieved as $business_service) {
                $business_services[] = $business_service->businessService;
            }
            if ($integration->attributes->debug) {
                $message = "[integrations_post] Business Services: " . json_encode($business_services_retrieved);
                $sql = "INSERT INTO integrations_log VALUES (null, ?, null, ?, 'debug', '$message')";
                $db->query($sql, [$integration->id, microtime(true)]);
            }
        }

        $sql = 'UPDATE integrations SET additional_items = ? WHERE id = ?';
        $additional_items = new \StdClass();
        $additional_items->pollers = $pollers;
        $additional_items->groups = $groups;
        $additional_items->roles = $roles;
        $additional_items->customers = $customers;
        $additional_items->business_services = $business_services;
        $db->query($sql, [json_encode($additional_items), $integration->id]);

        unlink($ckfile);
        return true;
    }
}
