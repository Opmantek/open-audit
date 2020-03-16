<?php
/**
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
*
* PHP version 5.3.3
*
* @category  Controller
* @package   All
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/
$this->load->model('m_configuration');
$this->m_configuration->load();
$this->load->helper('collections');
$dictionary = new stdClass();
$dictionary->table = $table;
$dictionary->about = '';
$dictionary->marketing = '';
$dictionary->notes = '';
$dictionary->columns = new stdClass();
$db_table = $table;
if ($table === 'devices') {
    $db_table = 'system';
}
$dictionary->attributes = new stdClass();
$dictionary->attributes->fields = array();
$dictionary->attributes->create = mandatory_fields($table);
$dictionary->attributes->update = update_fields($table);

if ($this->db->table_exists($db_table)) {
    $dictionary->attributes->fields = $this->db->list_fields($db_table);
}


$link = 'For more detailed information, here is a link to the <em>' . $table . '</em> page on the Open-AudIT Knowledgebase <a href="https://community.opmantek.com/display/OA/' . $table . '">LINK</a>.';
$link = 'For more detailed information, check the Open-AudIT <a href="https://community.opmantek.com/display/OA/' . $table . '">Knowledge Base</a>.';
$purchase_link = '<strong>To upgrade to an Enterprise License, click <a href="#" id="buy_more_licenses" data-toggle="modal" data-target="#myModalLicense">HERE</a>.</strong>';

$id = 'The internal identifier column in the database (read only).';
$name = 'The name given to this item. Ideally it should be unique.';
$org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
$description = 'Your description of this item.';
$options = 'A JSON object containing collection specific options.';
$edited_by = 'The name of the user who last changed or added this item (read only).';
$edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
$system_id = 'The id of the linked device. Links to <code>system.id</code>';

if ($table === 'attachments') {
    $dictionary->about = '<p>Files can be attached to individual devices.</p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->system_id = $system_id;
    $dictionary->columns->name = $name;
    $dictionary->columns->filename = 'The full path and name of the file.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
    $dictionary->attributes->create = array();
    $dictionary->attributes->update = array();
}

if ($table === 'audit_log') {
    $dictionary->about = '<p>A log of all the audit processing attempts.</p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->system_id = $system_id;
    $dictionary->columns->username = '';
    $dictionary->columns->type = '';
    $dictionary->columns->ip = '';
    $dictionary->columns->debug = '';
    $dictionary->columns->wmi_fails = '';
    $dictionary->columns->timestamp = '';
    $dictionary->attributes->create = array();
    $dictionary->attributes->update = array();
}

if ($table === 'availability') {
    $dictionary->sentence = 'Open-AudIT can use industry standard toolsets to increase availability.';
    $dictionary->marketing = '<p>Open-AudIT uses a model that does not require tight coupling of the application, web and database components. Availability can be increased using industry standard toolsets such as a front end Apache proxy and MySQL replication.<br /><br />
    <br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->attributes->create = array();
    $dictionary->attributes->update = array();
}

if ($table === 'changes') {
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

if ($table === 'cmdb') {
    $dictionary->sentence = "Open-AudIT enables a CMDB - import to another or use Open-AudIT directly, the choice is yours. It's your data, afterall.";
    $dictionary->marketing = '<p>Open-AudIT can be used as your CMDB or as the data source for another application.<br /><br />
As at v2.0, Open-AudIT supports a complete JSON restful API.<br /><br />
Define a query and have your external program call the API and retrieve the data.<br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table === 'export') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise include fast and easy exporting of detailed device-level information in multiple formats.';
    $dictionary->marketing = '<p>Quickly and easily select which device details you want to view and export. Select your format; screen or csv file, and the level of data you want.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>With the click of a button export some or all of your data into a CSV for Excel, a JSON or XML document for processing or importing into another program. You can filter your data before export, or just export everything. Select specific sections of one or more devices. Any way you want it, Open-AudIT can export it.<br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table === 'maps') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location.';
    $dictionary->marketing = '<p>Open-AudIT Professional and Enterprise leverage Google Maps to provide live, interactive geographic mapping of device location. Automated conversion of street addresses to geocodes and long/lat along with assignment of devices to locations during discovery make mapping easy and intuitive.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br /><br />
    ' . $link . '<br /><br /></p>';
}

if ($table === 'reports') {
    $dictionary->sentence = 'Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.';
    $dictionary->about = '<p>It\'s easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen "over time". All the devices discovered last week, last month or any other period. New software found. What about devices that <i>haven\'t</i> been seen - where are they? How useful to be able to specify these items <i>"over time\</i>.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Open-AudIT Professional and Enterprise make report creation effortless through Enhanced Reporting features like time-based reports, historical reports, and multi-query based reporting. Reports can be created dynamically and interacted with on screen, or exported to CVS for further analysis.<br /><br />
Simply Select which types of devices you want to be exported, which queries to run, and the format you want. Export to CSV and analyze offline, or import into your favorite third part data visualizer. The power is in your hands with Open-AudIT Enterprise Enhanced Reporting.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table === 'rows') {

    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table === 'servers') {
    $dictionary->sentence = 'Open-AudIT Enterprise includes Servers and Collectors.';
    $dictionary->marketing = '<p> ' . $link . '<br /><br /></p>';
    $dictionary->about = '';
    $dictionary->notes = '<p>The server that controls <i>this</i> Open-AudIT will be stored in the configuration under the "servers" attribute as a JSON document.<br /><br /></p>';
    $dictionary->columns->host = 'The IP address or resolvable hostname of the server.';
    $dictionary->columns->user = 'The account name on the server that is used to log on.';
    $dictionary->columns->password = 'A hashed password that enables logon.';
    $dictionary->columns->uuid = 'The local UUID to identify <i>this</i> server.';
}

if ($table === 'scalability') {
    $dictionary->sentence = 'Open-AudIT is incredibly resource efficient. Some customers audit over 30,000 devices on a single instance!';
    $dictionary->about = '<p><br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>You don\'t need a large amount of computing power to run Open-AudIT. A server of no particular importance can be used. Open-AudIT scales incredibly well. Audit 10,000 PCs on a desktop class computer - sure! Give it some more power and Open-AudIT flys! And because we use Open Source components (Apache and MySQL) there\'s no need to be concerned about licensing expensive and proprietory software "by the core".<br /><br />
    Open-AudIT has three main components. The database, the web server and the audit host. Typically in smaller organisations these are installed on the same server, but this doesn\'t need to be the case if a large number of devices are being audited.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table === 'scripts') {
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

if ($table === 'summaries') {
    $dictionary->sentence = 'Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.';
    $dictionary->marketing = "<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it's quite easy to create a new one and load it into Open-AudIT for running.<br /><br />
    " . $link . '<br /><br /></p>';
    $dictionary->about = "<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it's quite easy to create a new one and load it into Open-AudIT for running.<br /><br />
    " . $link . '<br /><br /></p>';
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

if ($table === 'support') {
    $dictionary->sentence = "Amazing support from Opmantek - or the community if you like. It's the no excuses, no exceptions, can-do way of thinking that our staff bring to work every day. Your complete satisfaction is our priority. Anything less is simply unacceptable.";
    $dictionary->marketing = "<p>Open-AudIT is supported by Opmantek with an amazing level of support. If you prefer an active community of support givers, there\'s that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No if's or but's. Great support. Period.<br /><br />
    <br /><br />
    " . $link . '<br /><br /></p>';
}

if ($table === 'tasks') {
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

if ($table === 'users') {
    $dictionary->sentence = "Open-AudIT Enterprise includes Users &amp; Roles, full role-based access control (RBAC) allowing fine-grained control over each user's experience.";
    $dictionary->marketing = '<p>Users and Roles in Open-AudIT are key items. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->about = '<p>Users and Roles in Open-AudIT are key items. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = 'If the following conditions are met:<br />
    <ul><li>a Role has an assigned ad_group</li>
    <li>an Org has an assigned ad_group</li>
    <li>an LDAP Server has use_roles set to y</li>
    <li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>
    That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br /><br />';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->dashboard_id = 'The dashboard that will be shown by default for this user.';
    $dictionary->columns->password = 'A hashed password that enables logon when using application authentication.';
    $dictionary->columns->full_name = 'The complete first name, last name fo this user.';
    $dictionary->columns->email = 'The users email address.';
    $dictionary->columns->lang = 'The language to translate the web interface into for the user.';
    $dictionary->columns->active = 'Is this account active? If set to "n", the user cannot logon.';
    $dictionary->columns->roles = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';
    $dictionary->columns->orgs = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>.';
    $dictionary->columns->ldap = 'The LDAP OU of this user (if LDAP is used).';
    $dictionary->columns->type = 'Only user and collector are used at present.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table === 'warranties') {
    $dictionary->sentence = 'Record the details of your asset warranties with Open-AudIT and report on them as easily as ever.';
    $dictionary->about = '<p>Warranties are an essential item to track. Open-AudIT makes it easy to record and report on warranties. Easily create reports to tell you what devices have expiring warranties and run have them run automatically. Be able to forecast your replacement equipment purchases for your next purchase period simply and easily.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Warranties are an essential item to track. Open-AudIT makes it easy to record and report on warranties. Easily create reports to tell you what devices have expiring warranties and run have them run automatically. Be able to forecast your replacement equipment purchases for your next purchase period simply and easily.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}

if ($table === 'widgets') {
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
    $dictionary->columns->dataset_title = 'The text for the bottom of the chart in a line chart (only).';
    $dictionary->columns->sql = 'For advanced entry of a raw SQL query. As per "queries", you must include "WHERE @filter AND" in your SQL.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
    $dictionary->valid_columns = array('bios.current','bios.description','bios.manufacturer','bios.version','disk.current','disk.description','disk.interface_type','disk.manufacturer','disk.model','disk.model_family','disk.partition_count','disk.status','disk.version','ip.cidr','ip.current','ip.netmask','ip.network','ip.version','log.current','log.file_name','log.name','memory.current','memory.detail','memory.form_factor','memory.size','memory.speed','memory.type','module.class_text','module.current','module.description','monitor.aspect_ratio','monitor.current','monitor.description','monitor.manufacturer','monitor.model','monitor.size','motherboard.current','motherboard.manufacturer','motherboard.memory_slot_count','motherboard.model','motherboard.processor_slot_count','network.connection_status','network.current','network.dhcp_enabled','network.dhcp_server','network.dns_domain','network.dns_server','network.manufacturer','network.model','network.type','optical.current','optical.model','optical.mount_point','pagefile.current','pagefile.max_size','pagefile.name','pagefile_initial_size','partition.bootable','partition.current','partition.description','partition.format','partition.mount_point','partition.mount_type','partition.name','partition.type','print_queue.color','print_queue.current','print_queue.duplex','print_queue.location','print_queue.manufacturer','print_queue.model','print_queue.port_name','print_queue.shared','print_queue.status','print_queue.type','processor.architecture','processor.core_count','processor.current','processor.description','processor.logical_count','processor.manufacturer','processor.physical_count','processor.socket','route.current','route.destination','route.mask','route.next_hop','route.type','server.current','server.description','server.edition','server.full_name','server.name','server.status','server.type','server.version','server.version_string','server_item.current','server_item.type','service.current','service.executable','service.name','service.start_mode','service.state','service.user','share.current','share.name','share.path','software.current','software.install_source','software.name','software_key.current','software_key.edition','software_key.name','software_key.rel','software_key.string','sound.current','sound.manufacturer','sound.model','system.class','system.cloud_id','system.contact_name','system.environment','system.form_factor','system.function','system.icon','system.instance_provider', 'system.instance_state', 'system.instance_type','system.invoice_id','system.last_seen_by','system.lease_expiry_date','system.location_id','system.location_latitude','system.location_level','system.location_longitude','system.location_rack','system.location_rack_position','system.location_rack_size','system.location_room','system.location_suite','system.manufacturer','system.memory_count','system.model','system.oae_manage','system.org_id','system.os_bit','system.os_family','system.os_group','system.os_installation_date','system.os_name','system.os_version','system.owner','system.patch_panel','system.printer_color','system.printer_duplex','system.printer_port_name','system.printer_shared','system.printer_shared_name','system.processor_count','system.purchase_amount','system.purchase_cost_center','system.purchase_date','system.purchase_invoice','system.purchase_order_number','system.purchase_service_contract_number','system.purchase_vendor','system.service_network','system.service_number','system.service_plan','system.service_provider','system.service_type','system.snmp_oid','system.status','system.sysContact','system.sysDescr','system.sysLocation','system.sysObjectID','system.type','system.wall_port','system.warranty_duration','system.warranty_expires','system.warranty_type','user.current','user.domain','user.password_changeable','user.password_required','user.status','user.type','user_group.current','user_group.name','video.current','video.manufacturer','video.model','video.size','vm.current','vm.cpu_count','vm.memory_count','vm.status','windows.active_directory_ou','windows.boot_device','windows.build_number','windows.client_site_name','windows.country_code','windows.current','windows.domain_controller_address','windows.domain_controller_name','windows.domain_role','windows.domain_short','windows.id_number','windows.install_directory','windows.language','windows.organisation','windows.part_of_domain','windows.registered_user','windows.service_pack','windows.time_caption','windows.time_daylight','windows.version','windows.workgroup');
    $dictionary->valid_tables = array('bios','disk','dns','ip','log','memory','module','monitor','motherboard','netstat','network','nmap','optical','pagefile','partition','print_queue','processor','route','san','scsi','server','server_item','service','share','software','software_key','sound','system','task','user','user_group','variable','video','vm','warranty','windows');
}
