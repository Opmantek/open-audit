<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.</p>';

$body = '<h2>Notes</h2>
<br>
If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br>
<pre>
    Linux: /usr/local/open-audit/www/open-audit/device_images
    Windows: c:\xampp\htdocs\open-audit\device_images
</pre>
<br>
If you add a Location Type, add those icons to:<br>
<pre>
    Linux: /usr/local/open-audit/public/images/map_icons
    Windows: c:\xampp\htdocs\open-audit\images\map_icons
</pre>
<br>';
