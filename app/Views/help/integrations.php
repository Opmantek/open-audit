<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>The Integrations endpoint allows you to define an integration which you can then use to import and export Open-AudIT data to an external system. At present the single supported Integration type is "nmis".<br>
    <br>
    This is as it was prior to 4.2.0. With 4.2.0 an onward we have rewritten the code from the ground up to work in an external system agnostic way. With the 4.2.0 release we ship with a default Integration already created for NMIS. Going forward other external systems will be supported. All that is required is a new file to implement the required functions that an integration needs. There are no external dependencies or prerequisites.<br>
    <br>
    For the purpose or brevity, you can substitute any external system where I refer to NMIS below (when implemented).<br>
    <br>
    NOTE - Redhat 8 users will need to edit the Integration and add credentials. Integrations will not work locally for Redhat 8 at this time (without credentials). We are aiming to address this ASAP. Add credentials, problem solved. Apologies for the inconvenience.</p>';

$body = '<h2>It \'Just Works\' with NMIS</h2>
<p>Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to "just work". If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something isn\'t to your preference, it can easily be changed.<br>
    <br>
    If you are using Open-AudIT on Windows or if your NMIS server isn\'t on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that\'s all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!<br>
</p>
<br>

<h2>Creating an Integration</h2>
<p>
    As usual, go to menu → Manage → Integrations → Create Integration. As above, if you\'re running on Linux and you have NMIS on the same server, you don\'t need to do anything other than click \'Submit\'. I cannot make it easier than that.<br>
    <br>
    If you\'re on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.<br>
    <br>
    Above are the only required items.<br>
    <br>
    If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).<br>
    <br>
    You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.<br>
    <br>
    You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.<br>
    <br>
    If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.<br>
    <br>
    What about fields that I want from NMIS that aren\'t in Open-AudIT? We\'ve got you covered. Any fields in the external system (NMIS) that don\'t exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.<br>
</p>
<br>

<h2>Our Default Integration</h2>
<p>
    By default we integrate all devices with their nmis_manage attribute set to \'y\'. With 4.2.0 we also ship a Rule that says "If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS". Obviously you can disable this if it\'s not what you want.<br>
    <br>
    To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.<br>
    <br>
    Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.<br>
    <br>
    Integrations can be scheduled as per Discoveries, Queries, et al.<br>
</p>
<br>

<h2>Fields</h2>
<p>
    The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes:<br>
    internal_field_name: This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.<br>
    <br>
    external_field_name: The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.<br>
    <br>
    priority: When combining devices, which system is the authoritative source for information.<br>
    <br>
    default_value: If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use Open-AudIT.<br>
    <br>
    matching_attribute: Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.<br>
    <br>
    external_field_type: When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.<br>
</p>
<br>

<h2>External Field Types</h2>
text: a text field<br>
<br>
integer: a number<br>
<br>
bool: true or false (in JSON context)<br>
<br>
bool_one_zero: If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.<br>
<br>
bool_y_n: If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.<br>
<br>
capitalize: Set the external text to capitalized version of the internal data.<br>
<br>
lower: Set the external text to lowercase.<br>
<br>
upper: Set the external text to uppercase.<br>
<br>
datetime_now: The current date and time in the format "Y-m-d H:i:s".<br>
<br>
datetime_Y-m-d H:i:s: The internal value, reformatted in this format.<br>
<br>
date_now: The current date in "Y-m-d" format.<br>
<br>
date_Y-m-d: The internal value, reformatted in this format.<br>
<br>
date_m-d-Y: The internal value, reformatted in this format.<br>
<br>
date_d-m-Y: The internal value, reformatted in this format.<br>
<br>
NOTE - For more info on DateTime formats, see <a href="https://www.php.net/manual/en/datetime.createfromformat.php" target="_blank">https://www.php.net/manual/en/datetime.createfromformat.php</a>.</p>


<h2>Troubleshooting</h2>
<p>
    After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.
</p>





<br>';
