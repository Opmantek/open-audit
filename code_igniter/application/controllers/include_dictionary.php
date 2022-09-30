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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
*
* PHP version 5.3.3
*
* @category  Controller
* @package   All
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
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
$purchase_link = '<strong>To upgrade to an Enterprise License, click <a href="#" class="buy_more_licenses">here</a>.</strong>';
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

if ($table === 'support') {
    $dictionary->sentence = "Amazing support from Opmantek - or the community if you like. It's the no excuses, no exceptions, can-do way of thinking that our staff bring to work every day. Your complete satisfaction is our priority. Anything less is simply unacceptable.";
    $dictionary->marketing = "<p>Open-AudIT is supported by Opmantek with an amazing level of support. If you prefer an active community of support givers, there\'s that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No if's or but's. Great support. Period.<br /><br />
    <br /><br />
    " . $link . '<br /><br /></p>';
}


if ($table === 'warranties') {
    $dictionary->sentence = 'Record the details of your asset warranties with Open-AudIT and report on them as easily as ever.';
    $dictionary->about = '<p>Warranties are an essential item to track. Open-AudIT makes it easy to record and report on warranties. Easily create reports to tell you what devices have expiring warranties and run have them run automatically. Be able to forecast your replacement equipment purchases for your next purchase period simply and easily.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->marketing = '<p>Warranties are an essential item to track. Open-AudIT makes it easy to record and report on warranties. Easily create reports to tell you what devices have expiring warranties and run have them run automatically. Be able to forecast your replacement equipment purchases for your next purchase period simply and easily.<br /><br />
    ' . $link . '<br /><br /></p>';
    $dictionary->notes = '';
}
