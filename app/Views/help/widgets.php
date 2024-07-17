<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.</p>';

$body = '<h2>Creating Widgets</h2>
<br>
<p>When creating a widget, if you select the \'Advanced\' button you will have the ability to upload your own custom SQL.<br>
<br>
The SELECT section of your SQL must contain fully qualified columns and specify certain columns.<br>
<br>
Pie charts must return name or my_name, description or my_description and count.<br>
<br>
Line charts must return date or my_date, description or my_description and count.<br>
<br>
The WHERE section of your SQL <em>must</em> contain <strong>WHERE @filter</strong> so Open-AudIT knows to restrict your query to the appropriate Orgs.<br>
<br>
SQL not containing this condition will result in the widget failing to be executed.<br>
<br>
The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.<br>
<br>
An example widget SQL showing devices counted per location.<br>
<code>SELECT locations.name as `name`,<br>
&nbsp;&nbsp;&nbsp;&nbsp;locations.id AS `description`,<br>
&nbsp;&nbsp;&nbsp;&nbsp;count(devices.id) AS `count`<br>
FROM locations LEFT JOIN devices ON (locations.id = devices.location_id)<br>
WHERE @filter<br>
GROUP BY locations.name;<br>
</code>
<br>
More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.<br>
<code>
SELECT IF ( devices.last_seen = "2000-01-01", "unknown", ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 180 day), "180 Days or more",<br>
&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 150 day), "150-180 days", ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 120 day), "120-150 days",<br>
&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 90 day), "90-120 days", ( IF ( devices.last_seen < DATE(NOW() - INTERVAL 60 day), "60-90 days",<br>
&nbsp;&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 30 day), "30-60 days", "7-30 days" ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`,<br>
IF ( devices.last_seen = "2000-01-01", "devices.last_seen=",<br>
&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 180 day), CONCAT("devices.last_seen=<", DATE(NOW() - INTERVAL 180 day)),<br>
&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 150 day), CONCAT("devices.last_seen=>", DATE(NOW() - INTERVAL 180 day), "&devices.last_seen=<", DATE(NOW() - INTERVAL 150 day)),<br>
&nbsp;&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 120 day), CONCAT("devices.last_seen=>", DATE(NOW() - INTERVAL 150 day), "&devices.last_seen=<", DATE(NOW() - INTERVAL 120 day)),<br>
&nbsp;&nbsp;&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 90 day), CONCAT("devices.last_seen=>", DATE(NOW() - INTERVAL 120 day), "&devices.last_seen=<", DATE(NOW() - INTERVAL 90 day)),<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 60 day), CONCAT("devices.last_seen=>", DATE(NOW() - INTERVAL 90 day), "&devices.last_seen=<", DATE(NOW() - INTERVAL 60 day)),<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( IF ( devices.last_seen < DATE(NOW() - INTERVAL 30 day), CONCAT("devices.last_seen=>", DATE(NOW() - INTERVAL 60 day), "&devices.last_seen=<", DATE(NOW() - INTERVAL 30 day)),<br>
&nbsp;CONCAT("devices.last_seen=>", DATE(NOW() - INTERVAL 30 day), "&devices.last_seen=<", DATE(NOW() - INTERVAL 7 day))) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`,<br>
&nbsp;count(devices.id) AS `count`<br>
FROM devices<br>
WHERE @filter AND DATE(devices.last_seen) < DATE(NOW() - INTERVAL 7 day)<br>
GROUP BY `my_name` ORDER BY devices.last_seen;<br>
</code>
<br>';
