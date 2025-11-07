<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>' . __('A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.') . '</p>';

if (empty(config('maps_api_key'))) {
    $intro .= '<p>Google Maps API ' . __('key required to retrieve lat/long and display map. See') . ' <a href="' . url_to('helpFAQ') . '?name=Google+Maps+API+Key">' . __('here') . '</a>.</p>';
}

$intro .= '<p>' . __('You can assign devices to a location automatically using') . ' <a href="' . url_to('discoveriesHelp') . '">' . __('discoveries') . '</a>. ' . __('You can manually assign devices using') . ' <a href="' . url_to('helpFAQ') . '?name=Bulk Editing Device Attributes">' . __('Bulk Edit') . '</a>. ' . __('You can assign devices using custom') . ' <a href="' . url_to('rulesHelp') . '">' . __('Rules') . '</a>.';

$body = '</br>';
