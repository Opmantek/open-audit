<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.<br></p>';

if (empty(config('maps_api_key'))) {
    $intro .= '<p>Google Maps API key required to retrieve lat/long and display map. See <a href="' . url_to('helpFAQ') . '?name=Google+Maps+API+Key">here</a>.</p>';
}

$intro .= '<p>You can assign devices to a location automatically using <a href="' . url_to('discoveriesHelp') . '">discoveries</a>. You can manually assign devices using <a href="' . url_to('helpFAQ') . '?name=Bulk Editing Device Attributes">Bulk Edit</a>. You can assign devices using custom <a href="' . url_to('rulesHelp') . '">Rules</a>.';

$body = '</br>';
