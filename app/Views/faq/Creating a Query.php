<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Creating a Query');

$intro = '<p>Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.</p>';

$body = '
<p>A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to \'y\' to enable the query in the GUI (\'n\' to prevent the query from appearing at all). The query would still run if called using it\'s $id, regardless of menu display\'s value.</p>
<p>To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.</p>
<p>To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.<br><br></p>

<h2>Breaking it Down</h2>
<p>The SQL query is essentially broken into three parts.</p>
<h3>The SELECT</h3>
<p>The SELECT section of the query should use full dot notation and also request the field with it\'s full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.</p>
<p>Queries for Groups should select only the <code>devices.id</code> column.</p>
<p><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members`</code>
</p>
<br>

<h3>The FROM</h2>
<p>You should use only those tables that contain attributes you need. I usually use a LEFT JOIN. IE - SELECT devices.id AS `devices.id`, ip.ip AS `ip.ip` FROM devices LEFT JOIN ip ON (devices.id = ip.device_id).</p>
<p>All device sub-tables contain a couple of important columns. <code>$table.device_id</code> and <code>$table.current</code>. <code>$table.device_id</code> is the link to the <code>devices.id</code> column. The <code>$table.current</code> column will contain either \'y\' or \'n\'. This indicates if this row is currently present on the device. For example software may be installed (which would result in software.current = \'y\'), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to \'n\'.</p>
<p><code>FROM user_group LEFT JOIN devices ON (user_group.device_id = devices.id AND user_group.current = \'y\')</code></p>
<br>

<h3>The WHERE</h3>
<p>In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for \'advanced_queries\' has been enavled.</p>
<p>Other than that restriction, you are free to select attributes as required. It\'s a good idea to use the menu -> Admin -> Database -> <a href="' . url_to('databaseCollection') . '">List Tables</a> item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.</p>
<p><code>WHERE @filter AND (user_group.name = \'Administrators\' OR user_group.name = \'Power Users\' OR user_group.name = \'Remote Desktop Users\' OR user_group.name = \'wheel\' OR user_group.name = \'sudo\') AND user_group.members > \'\' GROUP BY devices.id, user_group.name ORDER BY devices.name</code><br><br></p>

<h2>Database Schema</h2>
<p>The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database -> <a href="' . url_to('databaseCollection') . '">List Tables</a>, then clicking on the details button for the table. Device details are stored in the <a href="' . url_to('databaseRead', 'devices') . '">devices</a> table.<br><br></p>

<h2>Examples</h2>
<p><strong>Note</strong> - The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.</p>

<h3>The Elevated User query</h3>
<p><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, user_group.name as `user_group.name`, user_group.members AS `user_group.members` FROM user_group LEFT JOIN devices ON (user_group.device_id = devices.id AND user_group.current = \'y\') WHERE @filter AND (user_group.name = \'Administrators\' OR user_group.name = \'Power Users\' OR user_group.name = \'Remote Desktop Users\' OR user_group.name = \'wheel\' OR user_group.name = \'sudo\') AND user_group.members > \'\' GROUP BY devices.id, user_group.name ORDER BY devices.name</code></p>
<br>

<h3>Devices Older Than X</h3>
<p>This example query retrieves a list of devices OVER 3 years old. The query uses today <code>NOW()</code> and <code>devices.purchase_date</code> as the reference point and filters out all virtual machines via a check of the system.serial field for %VM%.</p>
<p><code>SELECT devices.id AS `devices.id`, devices.purchase_date AS `devices.purchase_date`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.last_seen AS `devices.last_seen`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.description AS `devices.description`, devices.function AS `devices.function`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = \'y\') LEFT JOIN orgs ON (devices.org_id = orgs.id) WHERE @filter AND devices.purchase_date &lt; DATE_SUB(NOW(),INTERVAL 3 YEAR) AND devices.serial NOT LIKE \'%VM%\'</code></p>
<br>

<h3>Devices with Expired Warranties</h3>
<p>This example uses <code>devices.warranty_expires</code> and looks for a warranty expiration date prior to today.</p>
<p><code>SELECT devices.id AS `devices.id`, devices.warranty_expires AS `devices.warranty_expires`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.last_seen AS `devices.last_seen`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.description AS `devices.description`, devices.function AS `devices.function`, locations.name AS `locations.name` FROM devices LEFT JOIN locations ON (devices.location_id = locations.id) LEFT JOIN windows ON (devices.id = windows.device_id AND windows.current = \'y\') LEFT JOIN orgs ON (devices.org_id = orgs.id) WHERE @filter AND devices.warranty_expires &lt;= CURDATE() AND devices.serial NOT LIKE \'%VM%\'</code></p>
<br>

<h3>Devices Missing Information</h3>
<p>This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.</p>
<p><code>SELECT devices.id AS `devices.id`, devices.ip AS `devices.ip`, devices.name AS `devices.name`, devices.description AS `devices.description`, devices.function AS `devices.function`, devices.purchase_date AS `devices.purchase_date`, devices.type AS `devices.type`, locations.name AS `locations.name` FROM system LEFT JOIN locations ON (devices.location_id = locations.id) WHERE @filter AND devices.purchase_date = \'2000-01-01\' OR devices.function = \'\' OR devices.description = \'\'</code></p>
<br>

<h3>List All NMAP Ports, Protocols and Programs for Each Device</h3>
<p>This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.</p>
<p><code>SELECT devices.id AS `devices.id`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, nmap.first_seen AS `nmap.first_seen`, nmap.last_seen AS `nmap.last_seen`, nmap.port AS `nmap.port`, nmap.protocol AS `nmap.protocol`, nmap.program AS `nmap.program` FROM nmap LEFT JOIN devices ON (nmap.device_id = devices.id) WHERE @filter</code></p>
<br>

<h3>Return a list of all Modules installed on Routers</h3>
<p>This example creates a list of all Modules marked as current=\'y\' on devices of type \'router\'.</p>
<p><code>SELECT devices.id AS `devices.id`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.serial AS `devices.serial`, module.description AS `module.description` FROM devices LEFT JOIN module ON (module.device_id = devices.id AND module.current = \'y\') WHERE @filter AND devices.type = \'router\' ORDER BY devices.name</code></p>
    ';
