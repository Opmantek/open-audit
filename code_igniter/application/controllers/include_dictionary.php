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

$link = 'For more detailed information, here is a link to the <em>' . $table . '</em> page on the Open-AudIT wiki <a href="https://community.opmantek.com/display/OA/' . $table . '">LINK</a>.';
$purchase_link = '<strong>To upgrade to an Enterprise License, click <a href="#" id="buy_more_licenses" data-toggle="modal" data-target="#myModalLicense">HERE</a>.</strong>';

$id = 'The internal identifer column in the database.';
$name = 'The name given to this item. Ideally it should be unique.';
$org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
$description = 'Your description of this item.';
$edited_by = 'The name of the user who last changed or added this item.';
$edited_date = 'The date this item was changed or added.';
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
    $dictionary->about = '<p>Attributes are stored for Open-AudIT to use for particular fields.<br /><br />
    At present all fields are based on the devices (system) table.<br /><br />
    The attributes you can edit are associated with the following columns: Class, Environment, Status &amp; Type.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br />
    <em>Linux</em>: /usr/local/open-audit/www/open-audit/device_images<br />
    <em>Windows</em>: c:\xampplite\htdocs\open-audit\device_images<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->resource = 'Currently only "devices" is a valid value.';
    $dictionary->columns->value = 'The value for this paricular item.';
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

if ($table == 'baselines') {
    $dictionary->about = '<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br /><br />
        Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br /><br />
        For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you\'re unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Get the complete Open-AudIT Enterprise experience. Track your devices and see if they deviate from your required standard.<br /><br />
    Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br /><br />
    For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you\'re unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br /><br />
    You can create a baseline, run it against a group of devices and view the results. You can implement your baselines to be executed on a schedule. All results are kept and can be viewed and exported.<br /><br />
    ' . $link . '<br /><br />
    ' . $purchase_link . '<br /><br /></p>';
    $dictionary->notes = '<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br /><br />
        <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br /><br />
        <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br /><br />
        <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br /><br />
        <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br /><br />
        <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br /><br /></p>';
}

if ($table == 'connections') {
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
    $dictionary->about = '<p>Credentials are used to access devices.<br /><br />
    The only supplied credential is that of SNMP public.<br /><br />
    Configuring credentiials should be one of the first things you do after installing Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>Credentials are encrypted when stored in the database.<br /><br />
    When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no \'s\' in the table name).<br /><br />
    SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.</p>
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

if ($table == 'devices') {
    $dictionary->about = '<p>Open-Audit automatically populates attributes of devices that have been found during the audit process. However, it is possible to add devices manually in 3 different ways.<br /><br />
    <ul><li>Manual input - Fill in the relevant attributes for the device.</li>
    <li>Copy and paste an audit report</li>
    <li>Upload an audit report file</li></ul><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->last_seen = 'The last time that Open-AudIT retrieved details of this device.';
    $dictionary->columns->last_seen_by = 'The process that was used last to retrieve details about the device';
}

if ($table == 'discoveries') {
    $dictionary->about = '<p>Discoveries are at the very heart of what Open-AudIT does.<br /><br />
    How else would you know "What is on my network?"<br /><br />
    Discoveries are preprepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
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
    $dictionary->columns->subnet = 'Stored as a JSON document in the <code>other</code> attribute. The network subnet to execute the discovery on.';
    $dictionary->columns->ad_server = 'Stored as a JSON document in the <code>other</code> attribute. The Active Directory server to retrieve a list of subnets from.';
    $dictionary->columns->ad_domain = 'Stored as a JSON document in the <code>other</code> attribute. The Active Directory domain to retrieve a list of subnets from.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'fields') {
    $dictionary->about = '<p>
    Open-AudIT can store information in additional fields that are associated with each device.<br /><br />
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
    $dictionary->columns->values = 'A comma seperated list of values, one of which can be selected.';
    $dictionary->columns->placement = 'Where on the Device Details screen you would like to see this field appear.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'files') {
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
    $dictionary->about = '<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of system.id\'s only. If requested using the web interface, they return the standard column attribute list.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>Group Creation Rules<br /><br />
The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(system.id)</code>.<br /><br />
The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br /><br />
A example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.os_family = \'Debian\'</code><br /><br /></p>';
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
    $dictionary->columns->lang = 'The default language assigned to any user created by this LDAp server.';
    $dictionary->columns->host = 'The ip address of the LDAP server.';
    $dictionary->columns->port = 'Default of <code>385</code>.';
    $dictionary->columns->secure = 'Do you want to use LDAP or LDAPS. Set to <code>y</code> or <code>n</code>.';
    $dictionary->columns->domain = 'The regular domain notation of your LDAP. Eg - <code>open-audit.lan</code>.';
    $dictionary->columns->type = 'One of either <code>active directory</code> or <code>openldap</code>';
    $dictionary->columns->version = 'Default of <code>3</code>';
    $dictionary->columns->base_dn = '';
    $dictionary->columns->user_dn = 'Used by OpenLDAP only.';
    $dictionary->columns->user_membership_attribute = 'Used when searching OpenLDAP to match a user\'s uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.';
    $dictionary->columns->use_roles = 'Should we use this LDAP server to populate a users roles. Set to <code>y</code> or <code>n</code>.';
    $dictionary->columns->dn_account = '';
    $dictionary->columns->dn_password = 'The password for the dn_account attribute.';
    $dictionary->columns->refresh = 'Not currently used. Default of 24.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'licenses') {
    $dictionary->about = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br /><br />
To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
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

if ($table == 'networks') {
    $dictionary->about = '<p>A network is derived from discovery entries and device attribtes.<br /><br />
    Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configureation and set the attribute <code>blessed_subnets_use</code>.<br /><br />
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
    $dictionary->about = 'Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned \'Roles\' that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users \'orgs\' and \'roles\' define what they can and cannot do within Open-AudIT.<br /><br />
    Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br /><br />
    Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->parent_id = 'Linked to <code>orgs.id</code>';
    $dictionary->columns->description = $description;
    $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'queries') {
    $dictionary->about = 'Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />                
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>Query Creation Rules<br /><br />
The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT system.id AS `system.id`, system.name AS `system.name` ...</code>.<br /><br />
The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br /><br />
An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of \'Linux\' - <br /><code>SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, <br />system.name AS `system.name`, system.os_name AS `system.os_name` FROM<br /> system WHERE @filter AND system.os_group = \'Linux\'</code><br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->description = $description;
    $dictionary->columns->sql = 'Your SQL to select attributes that will populate this query.';
    $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the \'Reports\' menu in the web interface.';
    $dictionary->columns->menu_category = 'Which sub-menu should we diplay this query in.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'roles') {
    $dictionary->about = 'Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned \'Roles\' that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users \'orgs\' and \'roles\' define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->description = $description;
    $dictionary->columns->ad_group = 'Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.';
    $dictionary->columns->permissions = 'This attribute is stored as a JSON object. It is the result of the table above and contained the endpoint name along with \'c\', \'r\', \'u\' and/or \'d\' which represent create, read, update and delete. These are the actions a user can perform on items from the particular endpoint.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'scripts') {
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
    $dictionary->about = 'Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it\'s quite easy to create a new one and load it into Open-AudIT for running.<br /><br />                
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
    $dictionary->columns->menu_display = 'Should we expose this query in the list of reports under the \'Reports\' menu in the web interface.';
    $dictionary->columns->menu_category = 'Which sub-menu should we diplay this query in.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}

if ($table == 'users') {
    $dictionary->about = '<p>A user account within Open-AudIT.<br /><br />
     A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned \'Roles\' that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users \'orgs\' and \'roles\' define what they can and cannot do within Open-AudIT.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '<p>If the following conditions are met:<br />
    <ul><li>a Role has an assigned ad_group</li>
    <li>an Org has an assigned ad_group</li>
    <li>an LDAP Server has use_roles set to \'y\'</li>
    <li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>
    That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br /><br /></p>';
    $dictionary->columns->id = $id;
    $dictionary->columns->name = $name;
    $dictionary->columns->org_id = $org_id;
    $dictionary->columns->password = 'A hashed password that enables logon when using application authentication.';
    $dictionary->columns->full_name = '';
    $dictionary->columns->email = '';
    $dictionary->columns->lang = 'The language to translate the web interface into for the user.';
    $dictionary->columns->active = 'Is this account active? If set to \'n\', the user cannot logon.';
    $dictionary->columns->roles = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';
    $dictionary->columns->orgs = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>.';
    $dictionary->columns->edited_by = $edited_by;
    $dictionary->columns->edited_date = $edited_date;
}
