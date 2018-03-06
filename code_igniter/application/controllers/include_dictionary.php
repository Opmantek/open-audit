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

$dictionary = new stdClass();
$dictionary->table = $table;
$dictionary->about = '';
$dictionary->marketing = '';
$dictionary->notes = '';
$dictionary->columns = new stdClass();

$link = 'For more detailed information, here is a link to the <em>' . $table . '</em> page on the Open-AudIT Knowledgebase <a href="https://community.opmantek.com/display/OA/' . $table . '">LINK</a>.';
$link = 'For more detailed information, check the Open-AudIT <a href="https://community.opmantek.com/display/OA/' . $table . '">Knowledge Base</a>.';
$purchase_link = '<strong>To upgrade to an Enterprise License, click <a href="#" id="buy_more_licenses" data-toggle="modal" data-target="#myModalLicense">HERE</a>.</strong>';

$id = 'The internal identifier column in the database (read only).';
$name = 'The name given to this item. Ideally it should be unique.';
$org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
$description = 'Your description of this item.';
$edited_by = 'The name of the user who last changed or added this item (read only).';
$edited_date = 'The date this item was changed or added (read only).';
$system_id = 'The id of the linked device. Links to <code>system.id</code>';

if ($table == 'attachments') {
    $dictionary->about = '<p>Files can be attached to individual devices.</p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->system_id = $system_id;
    $dictionary->columns->name = $name;
    $dictionary->columns->filename = 'The full path and name of the file.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'attributes') {
    $dictionary->sentence = 'Open-AudIT enables you to create and use your own values for certain stored fields. For example, if you have another status than those provided, just add it and use it. Simple.';
    $dictionary->marketing = '<p>Attributes are stored for Open-AudIT to use for particular fields.<br /><br />Currently, the attributes you can edit are associated with the following columns: Class, Environment, Status &amp; Type.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Attributes are stored for Open-AudIT to use for particular fields.<br /><br />
    At present all fields are based on the devices (system) table.<br /><br />
    The attributes you can edit are associated with the following columns: Class, Environment, Status &amp; Type.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br />
    <em>Linux</em>: /usr/local/open-audit/www/open-audit/device_images<br />
    <em>Windows</em>: c:\xampplite\htdocs\open-audit\device_images<br /><br />
    If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br />
    <em>Linux</em>: /usr/local/open-audit/www/open-audit/images/map_icons<br />
    <em>Windows</em>: c:\xampplite\htdocs\open-audit\images\map_icons<br /><br />
    </p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->resource = 'Currently only "devices" is a valid value.';
    $dictionary->columns->value = 'The value for this particular item.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'audit_log') {
    $dictionary->about = '<p>A log of all the audit processing attempts.</p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->system_id = $system_id;
    $dictionary->columns->username = '';
    $dictionary->columns->type = '';
    $dictionary->columns->ip = '';
    $dictionary->columns->debug = '';
    $dictionary->columns->wmi_fails = '';
    $dictionary->columns->timestamp = '';
}

if ($table == 'availability') {
    $dictionary->sentence = 'Open-AudIT can use industry standard toolsets to increase availability.';
    $dictionary->marketing = '<p>Open-AudIT uses a model that does not require tight coupling of the application, web and database components. Availability can be increased using industry standard toolsets such as a front end Apache proxy and MySQL replication.<br /><br />
    <br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table == 'baselines') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes Baselines, a light-weight compliance system that compares software, users, and netstat data against your required standard.';
    $dictionary->about = '<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br /><br />
        Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br /><br />
        For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you\'re unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Get the complete Open-AudIT Enterprise experience. Track your devices and see if they deviate from your required standard.<br /><br />
Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br /><br />
For example - you might create a baseline from a device running Centos 6 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you\'re unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.<br /><br />
You can create a baseline, run it against a group of devices and view the results. You can implement your baselines to be executed on a schedule. All results are kept and can be viewed and exported.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br /><br />
        <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br /><br />
        <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br /><br />
        <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br /><br />
        <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br /><br />
        <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br /><br /></p>';
}

if ($table == 'changes') {
    $dictionary->sentence = 'Open-AudIT can tell you what changed, what was added or removed and when it occurred.';
    $dictionary->about = '<p>Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br /><br />
        <br /><br />
        <br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br /><br />
    <br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table == 'cmdb') {
    $dictionary->sentence = 'Open-AudIT enables a CMDB - import to another or use Open-AudIT directly, the choice is yours. It\'s your data, afterall.';
    $dictionary->marketing = '<p>Open-AudIT can be used as your CMDB or as the data source for another application.<br /><br />
As at v2.0, Open-AudIT supports a complete JSON restful API.<br /><br />
Define a query and have your external program call the API and retrieve the data.<br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table == 'collectors') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes Collectors. Have a single Open-AudIT server control many other servers that perform discovery and collect device information.';
    $dictionary->about = '<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br /><br />
        It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br /><br />
        It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = 'Your description of this collector.';
    $dictionary->columns->ip = 'The IP address of this collector used to communicate with the server.';
    $dictionary->columns->status = 'Unused.';
    $dictionary->columns->check_minutes = 'How often should the collector ask the server for a task.';
    $dictionary->columns->user_id = 'The <code>users.id</code> of the user account this collector uses.';
    $dictionary->columns->uuid = 'This collectors universally unique identifier.';
    $dictionary->columns->network_address = 'The collectors internal IP used when it runs a discovery.';
    $dictionary->columns->options = 'Unused.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'connections') {
    $dictionary->sentence = 'Track your connections to branch offices, the internet, where-ever else you need to. Simple, easy, intuitive.';
    $dictionary->marketing = '<p>Attributes such as the locations, the speed, provider, connected devices, type of connection and more are available.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->provider = 'The ISP or Telco providing this link.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'credentials') {
    $dictionary->sentence = 'Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.';
    $dictionary->marketing = '<p>Credentials are used to access devices.<br /><br />The only supplied credential is that of SNMP public.<br /><br />Configuring credentials should be one of the first things you do after installing Open-AudIT.<br /><br /></p>';
    $dictionary->about = '<p>Credentials are used to access devices.<br /><br />
    The only supplied credential is that of SNMP public.<br /><br />
    Configuring credentials should be one of the first things you do after installing Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>Credentials are encrypted when stored in the database.<br /><br />
    When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br /><br />
    SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br /><br /></p>
        ';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->type = 'Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.';
    $dictionary->columns->credentials = 'An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'dashboards') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprises\' interactive Dashboard provides a single point of access to audit status and results.';
    $dictionary->marketing = '<p>Simple, intuitive, dynamic - just some of the words used to describe Open-AudIT Enterprises\' interactive dashboard. The dashboard provides a single point of access to audit status, new software installs, device breakdowns, and fast access to missing devices.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Quickly view the status of devices on your network.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '                                <br /><br />
                                <h4 class="text-center">Layout</h4>
                                <br />
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Widget #1</td>
                                            <td>Widget #2</td>
                                            <td>Widget #3</td>
                                        </tr>
                                        <tr>
                                            <td>Widget #4</td>
                                            <td>Widget #5</td>
                                            <td>Widget #6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->sidebar = 'Do you wish to see the dtandard sidebar on the left.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;

}

if ($table == 'devices') {
    $dictionary->sentence = 'Open-AudIT tracks every device on your network. Change a device - see it. Move a device - see it. Remove a device - see it.';
    $dictionary->marketing = '<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br /><br />
    Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br /><br />
    Expand on the stored fields easily with your own custom attributes.<br /><br />
    Even add devices that aren\'t connected to your network or those devices your Open-AudIT server cannot reach.<br /><br />
    Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br /><br />
    Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br /><br />
    Expand on the stored fields easily with your own custom attributes.<br /><br />
    Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->last_seen = 'The last time that Open-AudIT retrieved details of this device.';
    $dictionary->columns->last_seen_by = 'The process that was used last to retrieve details about the device';
}

if ($table == 'discoveries') {
    $dictionary->sentence = 'Open-AudIT Enterprise discovers every device on your network.';
    $dictionary->marketing = '<p>Discoveries are at the very heart of what Open-AudIT does. How else would you know "What is on my network?"<br /><br />
    Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.<br /><br />
    Use Open-AudIT Professional and Enterprise to schedule your Discoveries to run automatically whenever you like.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Discoveries are at the very heart of what Open-AudIT does.<br /><br />
    How else would you know "What is on my network?"<br /><br />
    Discoveries are preprepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = 'Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br /><br />
    <b>NOTE</b> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. If you use a single IP or a range, please ensure that before you run the Discovery you have added a corresponding <a href="../networks">network</a> so Open-AudIT will accept audit results from those targets.<br /><br /><br />';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->type = 'Currently supported types are <code>subnet</code> and <code>active directory</code>.';
    $dictionary->columns->devices_assigned_to_org = 'Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery.';
    $dictionary->columns->devices_assigned_to_location = 'Any discovered devices will be assigned to this Location if set.';
    $dictionary->columns->network_address = 'The URL the audit_* scripts should submit their result to.';
    $dictionary->columns->last_run = 'A calculated field that is updated each time the discovery has been executed.';
    $dictionary->columns->complete = 'A internal field that indicates if the discovery has completed.';
    $dictionary->columns->other = 'A JSON document containing the required attributes depending on the <code>discoveries.type</code>.';
    $dictionary->columns->subnet = 'The network subnet to execute the discovery on.';
    $dictionary->columns->ad_server = 'The Active Directory server to retrieve a list of subnets from.';
    $dictionary->columns->ad_domain = 'The Active Directory domain to retrieve a list of subnets from.';
    $dictionary->columns->system_id = 'Used internally when discovering a single device.';
    $dictionary->columns->device_count = 'The number of devices found by this discovery.';
    $dictionary->columns->limit = 'The number of devices to limit this discovery to.';
    $dictionary->columns->discard = 'Used internally when discovering a single device.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'export') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise include fast and easy exporting of detailed device-level information in multiple formats.';
    $dictionary->marketing = '<p>Quickly and easily select which device details you want to view and export. Select your format; screen or csv file, and the level of data you want.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>With the click of a button export some or all of your data into a CSV for Excel, a JSON or XML document for processing or importing into another program. You can filter your data before export, or just export everything. Select specific sections of one or more devices. Any way you want it, Open-AudIT can export it.<br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table == 'fields') {
    $dictionary->sentence = 'Open-AudIT is extensible with custom fields. If you have a particular attribute you need to record, easily add it to the database and use it to report or even group devices.';
    $dictionary->marketing = '<p>Open-AudIT can store information in custom fields that are associated with each device.<br /><br />
    Once a Field has been created it can be used in queries and groups just like any other attribute in the database.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Open-AudIT can store information in custom fields that are associated with each device.<br /><br />
    Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br /><br />
    Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br /><br />
    You can edit the value of the Field for each individual device in the group you have assigned the field to. View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->group_id = 'The group of devices this field applies to. To apply it to all devices, use the All Devices group. Linked to groups.id.';
    $dictionary->columns->type = 'This can be either a varchar (a text field) or a list (a list of values that can be selected).';
    $dictionary->columns->values = 'A comma separated list of values, one of which can be selected.';
    $dictionary->columns->placement = 'Where on the Device Details screen you would like to see this field appear.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'files') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes Files, providing change control monitoring of individual files and folders on both Linux and Windows servers.';
    $dictionary->about = '<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br /><br />
This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br /><br />
Supported clients are Windows and Linux.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Get the complete Open-AudIT Enterprise experience. Audit your computers and ensure any changed files are recorded. Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br /><br />
    Details such as name, directory, size, hash, last changed and permissions are all recorded. This feature works on both Windows and Linux target machines.<br /><br />
    This is ideal for monitoring configuration files in /etc on Linux machines (for example).<br /><br />
    ' . $link . '<br /><br />
    ' . $purchase_link . '<br /><br /></p>';
    $dictionary->notes = '<p>See the note about enabling this feature when running a Windows Open-AudIT server on the wiki, here - <a href="https://community.opmantek.com/display/OA/files#Files-EnablingtheFeatureUnderWindows">https://community.opmantek.com/display/OA/files#Files-EnablingtheFeatureUnderWindows</a>.<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->path = 'The path to the file or directory.';
    $dictionary->columns->description = $description;
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'groups') {
    $dictionary->sentence = 'Easily group together devices for simple reporting. Open-AudIT provides more than a dozen groups out of the box and makes it simple to create more.';
    $dictionary->marketing = '<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of system.id\'s only. If requested using the web interface, they return the standard column attribute list.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of system.id\'s only. If requested using the web interface, they return the standard column attribute list.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(system.id)</code>.<br /><br />
The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br /><br />
An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.os_family = \'Debian\'</code><br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->sql = 'Your SQL to select devices that will populate this group.';
    $dictionary->columns->link = 'Unused at present. Leave blank.';
    $dictionary->columns->expose = 'Should we expose this group in the web interface.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'ldap_servers') {
    $dictionary->about = '<p>Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate a user and in addition, to create a user account using assigned roles and orgs based on LDAP group membership.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>If using Active Directory, you do not need to populate the <code>user_dn</code> or <code>user_membership_attribute</code> attributes. These are used by OpenLDAP only.<br /><br />
    If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access. Use the <code>dn_account</code> and <code>dn_password</code> to configure this.<br /><br />
    <strong>Examples</strong><br /><br />
    If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set base_dn to <code>dc=your,dc=domain,dc=com</code> and user_dn to <code>uid=@username@@domain,cn=People</code>. The special words @username and @domain will be replaced by the login details provided by your user on the login page.<br /><br />
    If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your base_dn. here is no need to set user_dn.<br /><br />
    These are only examples. You may need to ajust these attributes to suit your particular LDAP.<br /><br />
    </p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->lang = 'The default language assigned to any user created by this LDAP server.';
    $dictionary->columns->host = 'The ip address of the LDAP server.';
    $dictionary->columns->port = 'Default of <code>385</code>.';
    $dictionary->columns->secure = 'Do you want to use LDAP or LDAPS. Set to <code>y</code> or <code>n</code>.';
    $dictionary->columns->domain = 'The regular domain notation of your LDAP. Eg - <code>open-audit.lan</code>.';
    $dictionary->columns->type = 'One of either <code>active directory</code> or <code>openldap</code>';
    $dictionary->columns->version = 'Default of <code>3</code>';
    $dictionary->columns->base_dn = 'The base path from which to search for Users.';
    $dictionary->columns->user_dn = 'Used by OpenLDAP only.';
    $dictionary->columns->user_membership_attribute = 'Used when searching OpenLDAP to match a user\'s uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.';
    $dictionary->columns->use_roles = 'Should we use this LDAP server to populate a users roles. Set to <code>y</code> or <code>n</code>.';
    $dictionary->columns->dn_account = 'If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.';
    $dictionary->columns->dn_password = 'The password for the dn_account attribute.';
    $dictionary->columns->refresh = 'Unused. Default of 24.';
    $dictionary->columns->refreshed = 'Unused.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'licenses') {
    $dictionary->sentence = 'Track your installed software, quickly and easily.';
    $dictionary->marketing = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br /><br />
To create an entry to track your licenses provide a name, an organization, the number of licenses acquired and the name of the software. Those simple pieces of information are all Open-AudIT needs to track and report on your installed software licenses.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br /><br />
To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = 'You can use the percent % sign as a wildcard in the match_string.';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->org_descendants = 'Should we apply this license to the selected Org as well as the Orgs children?';
    $dictionary->columns->purchase_count = 'The number of purchased licenses.';
    $dictionary->columns->used_count = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';
    $dictionary->columns->match_string = 'A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'locations') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location.';
    $dictionary->marketing = '<p>A location is a physical address that can have devices associated with it.<br /><br />
    You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>A location is a physical address that can have devices associated with it.<br /><br />
    You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>The <code>type</code> of the location will assign its icon.<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'maps') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location.';
    $dictionary->marketing = '<p>Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location. Automated conversion of street addresses to geocodes and long/lat along with assignment of devices to locations during discovery make mapping easy and intuitive.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table == 'networks') {
    $dictionary->sentence = 'Open-AudIT stores your networks and in addition, provides a secure mechanism for accepting input data.';
    $dictionary->marketing = '<p>A network is derived from discovery entries and device attribtes.<br /><br />
    Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>A network is derived from discovery entries and device attribtes.<br /><br />
    Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->network = 'The network in the format 192.168.1.0/24.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'orgs') {
    $dictionary->sentence = 'Open-AudIT provides multi-tenancy out of the box!';
    $dictionary->marketing = '<p>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br /><br />
    Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br /><br />
    Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->parent_id = 'Linked to <code>orgs.id</code>';
    $dictionary->columns->description = $description;
    $dictionary->columns->type = 'The type of organisation.';
    $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'queries') {
    $dictionary->sentence = 'Open-AudIT provides many built-in queries and makes it simple to create your own.';
    $dictionary->marketing = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT system.id AS `system.id`, system.name AS `system.name` ...</code>.<br /><br />
The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br /><br />
An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br /><code>SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, <br />system.name AS `system.name`, system.os_name AS `system.os_name` FROM<br /> system WHERE @filter AND system.os_group = "Linux"</code><br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->sql = 'Your SQL to select attributes that will populate this query.';
    $dictionary->columns->link = 'Unused.';
    $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the "Reports" menu in the web interface.';
    $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'reports') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.';
    $dictionary->about = '<p>It\'s easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen "over time". All the devices discovered last week, last month or any other period. New software found. What about devices that <i>haven\'t</i> been seen - where are they? How useful to be able to specify these items <i>"over time\</i>.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Open-AudIT Professional and Enterprise make report creation effortless through Enhanced Reporting features like time-based reports, historical reports, and multi-query based reporting. Reports can be created dynamically and interacted with on screen, or exported to CVS for further analysis.<br /><br />
Simply Select which types of devices you want to be exported, which queries to run, and the format you want. Export to CSV and analyze offline, or import into your favorite third part data visualizer. The power is in your hands with Open-AudIT Enterprise Enhanced Reporting.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table == 'roles') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes User Roles, full role-based access control (RBAC) allowing fine-grained control over each user\'s experience.';
    $dictionary->about = '<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br /><br />
    The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br /><br />
    Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br /><br />
    ' . $link . '<br /><br />
    ' . $purchase_link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->description = $description;
    $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.';
    $dictionary->columns->permissions = 'This attribute is stored as a JSON object. It is the result of the table above and contained the endpoint name along with "c", "r", "u" and/or "d" which represent create, read, update and delete. These are the actions a user can perform on items from the particular endpoint.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'servers') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes Servers and Collectors.';
    $dictionary->marketing = '<p> ' . $link . '<br /><br /></p>';
    $dictionary->about = '';
    $dictionary->notes = '<p>The server that controls <i>this</i> Open-AudIT will be stored in the configuration under the "servers" attribute as a JSON document.<br /><br /></p>';
    $dictionary->columns->host = 'The IP address or resolvable hostname of the server.';
    $dictionary->columns->user = 'The account name on the server that is used to log on.';
    $dictionary->columns->password = 'A hashed password that enables logon.';
    $dictionary->columns->uuid = 'The local UUID to identify <i>this</i> server.';
}

if ($table == 'scalability') {
    $dictionary->sentence = 'Open-AudIT is incredibly resource efficient. Some customers audit over 30,000 devices on a single instance!';
    $dictionary->about = '<p><br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>You don\'t need a large amount of computing power to run Open-AudIT. A server of no particular importance can be used. Open-AudIT scales incredibly well. Audit 10,000 PCs on a desktop class computer - sure! Give it some more power and Open-AudIT flys! And because we use Open Source components (Apache and MySQL) there\'s no need to be concerned about licensing expensive and proprietory software "by the core".<br /><br />
    Open-AudIT has three main components. The database, the web server and the audit host. Typically in smaller organisations these are installed on the same server, but this doesn\'t need to be the case if a large number of devices are being audited.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table == 'scripts') {
    $dictionary->sentence = 'Open-AudIT utilise powerful auditing scripts to avoid installing an agent while at the same time, gathering an incredible amount of configuration data from your devices.';
    $dictionary->marketing = '<p>The auditing of computers is enabled by utilising powerful audit scripts developed over many years. The scripts are constantly updated to take advantage of and reflect the lastest operaing system features specific to each OS.<br /><br />
    There are scripts to audit Windows, Linux, VMware ESX, OSX, AIX and Solaris.<br /><br />
    Maximum data, minimum install - agentless retrieval of the data that matters the most.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Discoveries are at the very heart of what Open-AudIT does.<br /><br />
    How else would you know "What is on my network?"<br /><br />
    Discoveries are preprepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->based_on = 'The audit script upon which to base your customisations.';
    $dictionary->columns->options = 'A JSON document containing the required attributes depending on <code>scripts.type</code>.';
    $dictionary->columns->hash = 'Not currently used. Intended as a hash of the script when the options are applied.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'summaries') {
    $dictionary->sentence = 'Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.';
    $dictionary->marketing = '<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br /><br />
    When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br /><br />
    If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->table = 'The specific database table.';
    $dictionary->columns->column = 'The specific database column from the specified database table.';
    $dictionary->columns->extra_columns = 'The fully qualified table.column. Multiple may be provided, separated by a comma.';
    $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the "Reports" menu in the web interface.';
    $dictionary->columns->menu_category = 'Which sub-menu should we display this query in.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'support') {
    $dictionary->sentence = 'Amazing support from Opmantek - or the community if you like. It\'s the no excuses, no exceptions, can-do way of thinking that our staff bring to work every day. Your complete satisfaction is our priority. Anything less is simply unacceptable.';
    $dictionary->marketing = '<p>Open-AudIT is supported by Opmantek with an amazing level of support. If you prefer an active community of support givers, there\'s that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No if\'s or but\'s. Great support. Period.<br /><br />
    <br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table == 'tasks') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise include Task Scheduling. Schedule device discovery, report generation, or run a baseline check on any schedule you need, as often as you need, or run them on-demand from one interface.';
    $dictionary->about = '<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br /><br />
Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Open-AudIT can send you a report, run a discovery or test  a baseline on a schedule of your choosing. Have Open-AudIT email you a report of any new devices found for the week, every Friday. Simple, quick and easy.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br /><br />
        The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br /><br />
        If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discovery\'s ID in <code>sub_resource_id</code>.<br /><br />
        The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br /><br />
        The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.
        <br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = 'The description of this task.';
    $dictionary->columns->type = 'The type of task to run.';
    $dictionary->columns->sub_resource_id = 'The ID of the item of type (discoveries, reports, etc).';
    $dictionary->columns->uuid = 'The unique identifier of this server.';
    $dictionary->columns->enabled = 'Is this task enabled (y/n).';
    $dictionary->columns->minute = 'The minute of the hour when this task should execute (* for every minute).';
    $dictionary->columns->hour = 'The hour of the day when this task should execute (* for every hour).';
    $dictionary->columns->day_of_month = 'The day of the month when this task should execute (* for every day).';
    $dictionary->columns->month = 'The month of the year when this task should execute (* for every month).';
    $dictionary->columns->day_of_week = 'The day of the week when this task should execute (* for every day).';
    $dictionary->columns->delay_minutes = 'Delay the start of this task by X minutes (not currently implemented).';
    $dictionary->columns->expire_minutes = 'Do not run for longer than X minutes (not currently implemented).';
    $dictionary->columns->first_run = 'The timestamp after which, this task should run.<br />IE - Run a task after the 1st June 2017 at 10am, set it to "2017-06-01 09:59:00".<br />This value should be zero padded (ie, 09, not 9).<br />This value defaults to "2001-01-01 00:00:00" which means by default, a scheduled task will run at next scheduled execution time.';
    $dictionary->columns->last_run = 'The last date and time this task was executed (read only).';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;

}

if ($table == 'users') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes Users &amp; Roles, full role-based access control (RBAC) allowing fine-grained control over each user\'s experience.';
    $dictionary->marketing = '<p>Users and Roles in Open-AudIT are key items. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Users and Roles in Open-AudIT are key items. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = 'If the following conditions are met:<br />
    <ul><li>a Role has an assigned ad_group</li>
    <li>an Org has an assigned ad_group</li>
    <li>an LDAP Server has use_roles set to "y"</li>
    <li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>
    That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br /><br />';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->password = 'A hashed password that enables logon when using application authentication.';
    $dictionary->columns->full_name = 'The complete first name, last name fo this user.';
    $dictionary->columns->email = 'The users email address.';
    $dictionary->columns->lang = 'The language to translate the web interface into for the user.';
    $dictionary->columns->active = 'Is this account active? If set to "n", the user cannot logon.';
    $dictionary->columns->roles = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';
    $dictionary->columns->orgs = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>.';
    $dictionary->columns->ldap = 'The LDAP OU of this user (if LDAP is used).';
    $dictionary->columns->type = 'Only \'user\' and \'collector\' are used at present.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'warranties') {
    $dictionary->sentence = 'Record the details of your asset warranties with Open-AudIT and report on them as easily as ever.';
    $dictionary->about = '<p>Warranties are an essential item to track. Open-AudIT makes it easy to record and report on warranties. Easily create reports to tell you what devices have expiring warranties and run have them run automatically. Be able to forecast your replacement equipment purchases for your next purchase period simply and easily.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Warranties are an essential item to track. Open-AudIT makes it easy to record and report on warranties. Easily create reports to tell you what devices have expiring warranties and run have them run automatically. Be able to forecast your replacement equipment purchases for your next purchase period simply and easily.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table == 'widgets') {
    $dictionary->sentence = 'Widgets are used on Dashboards and are completely open to user design.';
    $dictionary->about = '<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Widgets are the building blocks of Open-AudIT Dashboards.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = 'The primary and optional secondary items should be fully qualified - ie, system.type or software.name.';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->description = $description;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->table = 'The primary database table upon which to base this widget.';
    $dictionary->columns->primary = 'The fully qualified column upon which to group by.';
    $dictionary->columns->secondary = 'The optional secondary column.';
    $dictionary->columns->ternary = 'The optional third column.';
    $dictionary->columns->where = 'Any required filter.';
    $dictionary->columns->limit = 'Limit the query to the first X items.';
    $dictionary->columns->group_by = 'This is generally the primary column, unless otherwise configured.';
    $dictionary->columns->type = 'Only "line" and "pie" are used at present.';
    $dictionary->columns->sql = 'For advanced entry of a raw SQL query. As per "queries", you must include "WHERE @filter AND" in your SQL.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}
