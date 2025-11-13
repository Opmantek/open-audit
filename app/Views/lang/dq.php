<?php
$GLOBALS["lang"][' Default, currently '] = ' Default, currently ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' If something does not work as expected, your first thing to do is check the logs.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' is now supported with a language file. To change your user to use this language, click ';

$GLOBALS["lang"][' seconds'] = ' seconds';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', but will not need to remember a separate set of logon credentials.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. To enable this, edit the configuration item for ';

$GLOBALS["lang"]['10 Minutes'] = '10 Minutes';

$GLOBALS["lang"]['15 Minutes'] = '15 Minutes';

$GLOBALS["lang"]['30 Minutes'] = '30 Minutes';

$GLOBALS["lang"]['5 Minutes'] = '5 Minutes';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 controls grouped into organizational, people, physical, and technological categories';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br><strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>A network is derived from discovery entries and device attributes.<br> <br></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attributes are stored for Open-AudIT to use for particular fields.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Quickly view the status of devices on your network.<br> <br></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Supported clients are Linux only.<br> <br></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The <code>type</code> of the location will assign its icon.<br> <br></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>The network should be in the format 192.168.1.0/24.<br> <br></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>These are the devices that live within a rack.<br> <br></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Your racks help refine exactly where your devices are located.<br> <br></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'A CVE item that does not contain a filter to determine the affected item(s).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'A Google Maps API Key is required for this function.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'A JSON array of device IDs that will have this benchmark executed.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'A JSON array of values to test for this vulnerability.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'A JSON document containing the required attributes depending on <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'A JSON document containing the required attributes overriding the chosen discovery_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'A JSON document containing the required attributes overriding the default device match options.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'A JSON object containing an array of attributes to change if the match occurs.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'A JSON object containing an array of attributes to match.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'A JSON object containing collection specific options.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'A JSON object populated via a Cloud discovery.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'A JSON representation containing the details of the queue item to be executed.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'A JSON representation of the fields for this integration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'A JSON representation of the individual tests and their results on all devices this baseline has been run against.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'A JSON representation of the tests that make up this policy.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'A LAN can be connected to a WAN using a router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'A Subnet discovery will scan the IPs provided.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'A URL provided to the agent which will then download the file and store it on the local disk.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'A URL to a file to download.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'A collector is either in Collector or Stand-Alone mode.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'A comma separated list of applicable CVEs.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'A comma separated list of values, one of which can be selected.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'A command to run. When the agent is Windows based, this command is run from within the powershell agent.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'A filtered port is considered open (and will trigger device detection).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'A list of custom UDP ports to scan (161 is SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'A location name will help you to find these devices in the future.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'A lower number means it will be applied before other rules.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'A lower number means it will be applied before other rules. The default weight is 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'A password (stored as a hash) that enables logon when using application authentication.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'A routing domain or address space where the IP addresses and MAC addresses are unique.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'A sample cron file for Linux is below. This should be placed in';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'A security zone is a administrative domain or policy domain within the Network Domain.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'A short description of the log entry.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'A structured system for managing sensitive information';

$GLOBALS["lang"]['A timestamp.'] = 'A timestamp.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALL IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Documentation';

$GLOBALS["lang"]['API Key required.'] = 'API Key required.';

$GLOBALS["lang"]['API Result'] = 'API Result';

$GLOBALS["lang"]['About'] = 'About';

$GLOBALS["lang"]['Above are the only required items.'] = 'Above are the only required items.';

$GLOBALS["lang"]['Accept'] = 'Accept';

$GLOBALS["lang"]['Access Model'] = 'Access Model';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Access to the admin$ share and RPC uses the SMB2 protocol.';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack Date';

$GLOBALS["lang"]['Ack Date'] = 'Ack Date';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Action';

$GLOBALS["lang"]['Action'] = 'Action';

$GLOBALS["lang"]['action_audit'] = 'Action Audit';

$GLOBALS["lang"]['Action Audit'] = 'Action Audit';

$GLOBALS["lang"]['action_command'] = 'Action Command';

$GLOBALS["lang"]['Action Command'] = 'Action Command';

$GLOBALS["lang"]['action_date'] = 'Action Date';

$GLOBALS["lang"]['Action Date'] = 'Action Date';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Action Devices Assigned To Location';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Action Devices Assigned To Location';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Action Devices Assigned To Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Action Devices Assigned To Org';

$GLOBALS["lang"]['action_download'] = 'Action Download';

$GLOBALS["lang"]['Action Download'] = 'Action Download';

$GLOBALS["lang"]['action_uninstall'] = 'Action Uninstall';

$GLOBALS["lang"]['Action Uninstall'] = 'Action Uninstall';

$GLOBALS["lang"]['actioned'] = 'Actioned';

$GLOBALS["lang"]['Actioned'] = 'Actioned';

$GLOBALS["lang"]['actioned_by'] = 'Actioned By';

$GLOBALS["lang"]['Actioned By'] = 'Actioned By';

$GLOBALS["lang"]['actioned_date'] = 'Actioned Date';

$GLOBALS["lang"]['Actioned Date'] = 'Actioned Date';

$GLOBALS["lang"]['actions'] = 'Actions';

$GLOBALS["lang"]['Actions'] = 'Actions';

$GLOBALS["lang"]['Activate'] = 'Activate';

$GLOBALS["lang"]['Activate Free License'] = 'Activate Free License';

$GLOBALS["lang"]['Activate Key'] = 'Activate Key';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activate a free Enterprise license';

$GLOBALS["lang"]['Active'] = 'Active';

$GLOBALS["lang"]['Active / Active'] = 'Active / Active';

$GLOBALS["lang"]['Active / Passive'] = 'Active / Passive';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory Server';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory and OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Add';

$GLOBALS["lang"]['Add Credentials'] = 'Add Credentials';

$GLOBALS["lang"]['Add Device'] = 'Add Device';

$GLOBALS["lang"]['Add Device to Application'] = 'Add Device to Application';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Add Device to Cluster';

$GLOBALS["lang"]['Add Exception'] = 'Add Exception';

$GLOBALS["lang"]['Add Field'] = 'Add Field';

$GLOBALS["lang"]['Add If'] = 'Add If';

$GLOBALS["lang"]['Add Policies from Device'] = 'Add Policies from Device';

$GLOBALS["lang"]['Add Policy'] = 'Add Policy';

$GLOBALS["lang"]['Add Then'] = 'Add Then';

$GLOBALS["lang"]['Add Your Credentials'] = 'Add Your Credentials';

$GLOBALS["lang"]['Add image'] = 'Add image';

$GLOBALS["lang"]['additional_items'] = 'Additional Items';

$GLOBALS["lang"]['Additional Items'] = 'Additional Items';

$GLOBALS["lang"]['address'] = 'Address';

$GLOBALS["lang"]['Address'] = 'Address';

$GLOBALS["lang"]['Address any nonconformities'] = 'Address any nonconformities';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Address audit findings and corrective actions';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Advanced';

$GLOBALS["lang"]['Advanced'] = 'Advanced';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'After completing the above, uninstall the agent.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agent? Discovery? Credentials?';

$GLOBALS["lang"]['agents'] = 'Agents';

$GLOBALS["lang"]['Agents'] = 'Agents';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for ';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Aland Islands';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['Albanian'] = 'Albanian';

$GLOBALS["lang"]['alert_style'] = 'Alert Style';

$GLOBALS["lang"]['Alert Style'] = 'Alert Style';

$GLOBALS["lang"]['Algeria'] = 'Algeria';

$GLOBALS["lang"]['algorithm'] = 'Algorithm';

$GLOBALS["lang"]['Algorithm'] = 'Algorithm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'All';

$GLOBALS["lang"]['All IPs'] = 'All IPs';

$GLOBALS["lang"]['All Policies'] = 'All Policies';

$GLOBALS["lang"]['All Queued Items'] = 'All Queued Items';

$GLOBALS["lang"]['All collections URLs use the format'] = 'All collections URLs use the format';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'All device sub-tables contain a couple of important columns.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'All devices with a type like computer.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'All devices with a type of computer or router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'All devices without a type of switch and printer.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'All devices without a type of switch and printer. Essentially the same as the above query.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'All regular discovery options are also available for use in Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.';

$GLOBALS["lang"]['Also can be created from the'] = 'Also can be created from the';

$GLOBALS["lang"]['Alternatives'] = 'Alternatives';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Fields';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'An array of <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'An array of <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'An array of object representing external links to more information.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'An educated guess to the identity and type of device';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'An entry can be created using the web interface if the current user logged in has a role that contains the';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'An example widget SQL showing devices counted per location.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'An indication of the level of service required by this site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'An internal field that indicates if the discovery has completed.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of';

$GLOBALS["lang"]['An optional GeoCode'] = 'An optional GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'An optional password to use sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analyzed';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'And finally, click Submit to execute this discovery.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'And if Something Goes Wrong?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.';

$GLOBALS["lang"]['And so much more.'] = 'And so much more.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Annex A Controls';

$GLOBALS["lang"]['Antarctica'] = 'Antarctica';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Packages';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua and Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Any additional documentation you need.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Any additional notes you care to make.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Any devices will be assigned to this Org when they run their audit script (if set).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Any discovered devices will be assigned to this Location when they run their audit script (if set).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Any files found in this manner are stored in the <i>executable</i> table as per any other device component.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Any specific TCP ports you wish tested (comma seperated, no spaces).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Any specific UDP ports you wish tested (comma seperated, no spaces).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Any user uploaded images are placed here.';

$GLOBALS["lang"]['Application'] = 'Application';

$GLOBALS["lang"]['Application Definitions'] = 'Application Definitions';

$GLOBALS["lang"]['application_id'] = 'Application ID';

$GLOBALS["lang"]['Application ID'] = 'Application ID';

$GLOBALS["lang"]['Application Licenses'] = 'Application Licenses';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Application, Operating System or Hardware.';

$GLOBALS["lang"]['applications'] = 'Applications';

$GLOBALS["lang"]['Applications'] = 'Applications';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Applications are an Enterprise only feature.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.';

$GLOBALS["lang"]['applied'] = 'Applied';

$GLOBALS["lang"]['Applied'] = 'Applied';

$GLOBALS["lang"]['Approved'] = 'Approved';

$GLOBALS["lang"]['Approved Packages'] = 'Approved Packages';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['Arabic'] = 'Arabic';

$GLOBALS["lang"]['architecture'] = 'Architecture';

$GLOBALS["lang"]['Architecture'] = 'Architecture';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Are you sure you want to delete this input item?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Are you sure you want to delete this output item?';

$GLOBALS["lang"]['Are you sure?'] = 'Are you sure?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Are you sure? This will reset the queue processing count and could cause load on the server.';

$GLOBALS["lang"]['area'] = 'Area';

$GLOBALS["lang"]['Area'] = 'Area';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'As a reminder of how authorisations works in Open-AudIT, see';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'As per the attributes for device environments. Production, Training, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'As you have Collectors registered, please choose where to execute this discovery.';

$GLOBALS["lang"]['Ask me later'] = 'Ask me later';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Ask the Community for help or contribute answers for others.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Asset ID'] = 'Asset ID';

$GLOBALS["lang"]['asset_ident'] = 'Asset Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Asset Ident';

$GLOBALS["lang"]['asset_number'] = 'Asset Number';

$GLOBALS["lang"]['Asset Number'] = 'Asset Number';

$GLOBALS["lang"]['asset_tag'] = 'Asset Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Asset Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Assign Device to Application';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Assign Device to Cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Assign Device to Location';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Assign Device to Organisation';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Assign Devices to Location';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Assign Devices to Organisation';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Assign an ISMS manager or team';

$GLOBALS["lang"]['Assign an Operator'] = 'Assign an Operator';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Assign the Device to a Location';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Assign the device to an Org';

$GLOBALS["lang"]['Assigned To'] = 'Assigned To';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Assigning Discovered Devices';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'At present we can use netstat_ports, software and users.';

$GLOBALS["lang"]['attached_device_id'] = 'Attached Device ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Attached Device ID';

$GLOBALS["lang"]['attached_to'] = 'Attached To';

$GLOBALS["lang"]['Attached To'] = 'Attached To';

$GLOBALS["lang"]['attachment'] = 'Attachment';

$GLOBALS["lang"]['Attachment'] = 'Attachment';

$GLOBALS["lang"]['attachments'] = 'Attachments';

$GLOBALS["lang"]['Attachments'] = 'Attachments';

$GLOBALS["lang"]['attack_complexity'] = 'Attack Complexity';

$GLOBALS["lang"]['Attack Complexity'] = 'Attack Complexity';

$GLOBALS["lang"]['attack_requirements'] = 'Attack Requirements';

$GLOBALS["lang"]['Attack Requirements'] = 'Attack Requirements';

$GLOBALS["lang"]['attack_vector'] = 'Attack Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Attack Vector';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Attempt to ping the device if we are not auditing localhost.';

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Attributes';

$GLOBALS["lang"]['Attributes'] = 'Attributes';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Audit My PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Result Input';

$GLOBALS["lang"]['Audit Software'] = 'Audit Software';

$GLOBALS["lang"]['Audit Status'] = 'Audit Status';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Product';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audit the Device';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Auth Methods';

$GLOBALS["lang"]['Authenticate only'] = 'Authenticate only';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Authentication Protocol';

$GLOBALS["lang"]['authority_key_ident'] = 'Authority Key Ident';

$GLOBALS["lang"]['Authority Key Ident'] = 'Authority Key Ident';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto populated by the Open-AudIT Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatable'] = 'Automatable';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatically populated based on the Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Availability';

$GLOBALS["lang"]['Availability'] = 'Availability';

$GLOBALS["lang"]['Available Benchmarks'] = 'Available Benchmarks';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Awaiting Analysis';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaijan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaijani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backbone network'] = 'Backbone network';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas the';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Banned';

$GLOBALS["lang"]['Banned Packages'] = 'Banned Packages';

$GLOBALS["lang"]['bar_code'] = 'Bar Code';

$GLOBALS["lang"]['Bar Code'] = 'Bar Code';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Base Score';

$GLOBALS["lang"]['Base Score'] = 'Base Score';

$GLOBALS["lang"]['base_severity'] = 'Base Severity';

$GLOBALS["lang"]['Base Severity'] = 'Base Severity';

$GLOBALS["lang"]['based_on'] = 'Based On';

$GLOBALS["lang"]['Based On'] = 'Based On';

$GLOBALS["lang"]['baseline'] = 'Baseline';

$GLOBALS["lang"]['Baseline'] = 'Baseline';

$GLOBALS["lang"]['baseline_id'] = 'Baseline ID';

$GLOBALS["lang"]['Baseline ID'] = 'Baseline ID';

$GLOBALS["lang"]['baselines'] = 'Baselines';

$GLOBALS["lang"]['Baselines'] = 'Baselines';

$GLOBALS["lang"]['baselines_policies'] = 'Baselines Policies';

$GLOBALS["lang"]['Baselines Policies'] = 'Baselines Policies';

$GLOBALS["lang"]['Baselines Policy'] = 'Baselines Policy';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Baselines Policy Details';

$GLOBALS["lang"]['baselines_results'] = 'Baselines Results';

$GLOBALS["lang"]['Baselines Results'] = 'Baselines Results';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselines can compare netstat ports, users and software.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Baselines for Device Comparison';

$GLOBALS["lang"]['Basic'] = 'Basic';

$GLOBALS["lang"]['Basque'] = 'Basque';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Because we try to be as transparent as possible, here is your actual data that we send.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belgium';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Below is an example of the required csv format.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Tasks are created automatically when a benchmark is created.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Exceptions';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Exceptions';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarks Policies';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarks Policies';

$GLOBALS["lang"]['benchmarks_result'] = 'Benchmarks Result';

$GLOBALS["lang"]['Benchmarks Result'] = 'Benchmarks Result';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks for Best Practise Configuration';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.';

$GLOBALS["lang"]['Benefits'] = 'Benefits';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Best Practises';

$GLOBALS["lang"]['Best Practises'] = 'Best Practises';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Body';

$GLOBALS["lang"]['Body'] = 'Body';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Boot Device';

$GLOBALS["lang"]['Boot Device'] = 'Boot Device';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnia and Herzegovina';

$GLOBALS["lang"]['Both forms of'] = 'Both forms of';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazilian Portuguese';

$GLOBALS["lang"]['Breaking it Down'] = 'Breaking it Down';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'British Indian Ocean Territory (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'British Virgin Islands';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Build Number';

$GLOBALS["lang"]['Build Number'] = 'Build Number';

$GLOBALS["lang"]['build_number_full'] = 'Build Number Full';

$GLOBALS["lang"]['Build Number Full'] = 'Build Number Full';

$GLOBALS["lang"]['Building'] = 'Building';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Builds trust with clients and partners';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgarian';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk Edit Form';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attributes';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk edit selections wont stay selected after clicking next page.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Business Requirements';

$GLOBALS["lang"]['Business Requirements'] = 'Business Requirements';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'But I Only Have Windows Client Machines Available!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'But I do not want to have to change the language file every time I update!';

$GLOBALS["lang"]['Buy'] = 'Buy';

$GLOBALS["lang"]['Buy More'] = 'Buy More';

$GLOBALS["lang"]['Buy More Licenses'] = 'Buy More Licenses';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculated from discovery.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Calculated total number of valid IP addresses for this network.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculated upon completion, the time taken to execute this item.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculated when integration is run and contains the number of devices selected from Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculated when integration is run and contains the number of devices selected the external system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculated when integration is run and contains the number of devices to be updated in the external system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculated when integration is run and contains the number of devices updated in Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Call up a command prompt by clicking Start and searching for <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Cambodia';

$GLOBALS["lang"]['Cameroon'] = 'Cameroon';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Campus area network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Can be  <code>active</code>, <code>passive</code> or blank.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Can be <code>user</code> or <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Can be set by discovery or user.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Can be set by discovery or user. Uses the ID from the locations table.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Can the user edit this item.';

$GLOBALS["lang"]['Canada'] = 'Canada';

$GLOBALS["lang"]['Cancel'] = 'Cancel';

$GLOBALS["lang"]['capabilities'] = 'Capabilities';

$GLOBALS["lang"]['Capabilities'] = 'Capabilities';

$GLOBALS["lang"]['Capacity'] = 'Capacity';

$GLOBALS["lang"]['Cape Verde'] = 'Cape Verde';

$GLOBALS["lang"]['Capitalise'] = 'Capitalise';

$GLOBALS["lang"]['caption'] = 'Caption';

$GLOBALS["lang"]['Caption'] = 'Caption';

$GLOBALS["lang"]['Catalan'] = 'Catalan';

$GLOBALS["lang"]['Cayman Islands'] = 'Cayman Islands';

$GLOBALS["lang"]['Cellular Details'] = 'Cellular Details';

$GLOBALS["lang"]['Central African Republic'] = 'Central African Republic';

$GLOBALS["lang"]['certificate'] = 'Certificate';

$GLOBALS["lang"]['Certificate'] = 'Certificate';

$GLOBALS["lang"]['certificate_file'] = 'Certificate File';

$GLOBALS["lang"]['Certificate File'] = 'Certificate File';

$GLOBALS["lang"]['certificate_name'] = 'Certificate Name';

$GLOBALS["lang"]['Certificate Name'] = 'Certificate Name';

$GLOBALS["lang"]['certificates'] = 'Certificates';

$GLOBALS["lang"]['Certificates'] = 'Certificates';

$GLOBALS["lang"]['Certification'] = 'Certification';

$GLOBALS["lang"]['Certification Audit'] = 'Certification Audit';

$GLOBALS["lang"]['Certification Process'] = 'Certification Process';

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['Change'] = 'Change';

$GLOBALS["lang"]['change_id'] = 'Change ID';

$GLOBALS["lang"]['Change ID'] = 'Change ID';

$GLOBALS["lang"]['change_log'] = 'Change Log';

$GLOBALS["lang"]['Change Log'] = 'Change Log';

$GLOBALS["lang"]['Change Logs'] = 'Change Logs';

$GLOBALS["lang"]['change_type'] = 'Change Type';

$GLOBALS["lang"]['Change Type'] = 'Change Type';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Check for SSH on these ports';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Check this port for any SSH service.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Chinese'] = 'Chinese';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chinese (traditional)';

$GLOBALS["lang"]['Choose'] = 'Choose';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Choose (select OS first)';

$GLOBALS["lang"]['Choose a Device'] = 'Choose a Device';

$GLOBALS["lang"]['Choose a Table'] = 'Choose a Table';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.';

$GLOBALS["lang"]['Christmas Island'] = 'Christmas Island';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Circuit Count';

$GLOBALS["lang"]['Circuit Count'] = 'Circuit Count';

$GLOBALS["lang"]['circuit_status'] = 'Circuit Status';

$GLOBALS["lang"]['Circuit Status'] = 'Circuit Status';

$GLOBALS["lang"]['city'] = 'City';

$GLOBALS["lang"]['City'] = 'City';

$GLOBALS["lang"]['class'] = 'Class';

$GLOBALS["lang"]['Class'] = 'Class';

$GLOBALS["lang"]['class_text'] = 'Class Text';

$GLOBALS["lang"]['Class Text'] = 'Class Text';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Click <i>New client secret</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Click Submit to Execute';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Click the Edit button for <i>Basic SAML Configuration</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Click the Import button below to populate Open-AudIT with example device data.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.';

$GLOBALS["lang"]['Client ID'] = 'Client ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Client ID and Secret';

$GLOBALS["lang"]['client_ident'] = 'Client Ident';

$GLOBALS["lang"]['Client Ident'] = 'Client Ident';

$GLOBALS["lang"]['client_secret'] = 'Client Secret';

$GLOBALS["lang"]['Client Secret'] = 'Client Secret';

$GLOBALS["lang"]['client_site_name'] = 'Client Site Name';

$GLOBALS["lang"]['Client Site Name'] = 'Client Site Name';

$GLOBALS["lang"]['Close'] = 'Close';

$GLOBALS["lang"]['Closed'] = 'Closed';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud Details';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery and Auditing';

$GLOBALS["lang"]['cloud_id'] = 'Cloud ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Cloud Name';

$GLOBALS["lang"]['Cloud Name'] = 'Cloud Name';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Clouds';

$GLOBALS["lang"]['Clouds'] = 'Clouds';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Clouds are a feature available to Open-AudIT Enterprise licensed customers.';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Cluster ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster ID';

$GLOBALS["lang"]['cluster_name'] = 'Cluster Name';

$GLOBALS["lang"]['Cluster Name'] = 'Cluster Name';

$GLOBALS["lang"]['cluster_type'] = 'Cluster Type';

$GLOBALS["lang"]['Cluster Type'] = 'Cluster Type';

$GLOBALS["lang"]['clusters'] = 'Clusters';

$GLOBALS["lang"]['Clusters'] = 'Clusters';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Clusters and Reporting';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Islands';

$GLOBALS["lang"]['Collection'] = 'Collection';

$GLOBALS["lang"]['Collections'] = 'Collections';

$GLOBALS["lang"]['Collector'] = 'Collector';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collector (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Collector Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Collector Name';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.';

$GLOBALS["lang"]['Collectors'] = 'Collectors';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Collectors for Remote Discovery';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Color';

$GLOBALS["lang"]['Color'] = 'Color';

$GLOBALS["lang"]['Column'] = 'Column';

$GLOBALS["lang"]['Columns'] = 'Columns';

$GLOBALS["lang"]['command'] = 'Command';

$GLOBALS["lang"]['Command'] = 'Command';

$GLOBALS["lang"]['command_options'] = 'Command Options';

$GLOBALS["lang"]['Command Options'] = 'Command Options';

$GLOBALS["lang"]['command_output'] = 'Command Output';

$GLOBALS["lang"]['Command Output'] = 'Command Output';

$GLOBALS["lang"]['command_status'] = 'Command Status';

$GLOBALS["lang"]['Command Status'] = 'Command Status';

$GLOBALS["lang"]['command_time_to_execute'] = 'Command Time To Execute';

$GLOBALS["lang"]['Command Time To Execute'] = 'Command Time To Execute';

$GLOBALS["lang"]['comment'] = 'Comment';

$GLOBALS["lang"]['Comment'] = 'Comment';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.';

$GLOBALS["lang"]['comments'] = 'Comments';

$GLOBALS["lang"]['Comments'] = 'Comments';

$GLOBALS["lang"]['commercial'] = 'Commercial';

$GLOBALS["lang"]['Commercial'] = 'Commercial';

$GLOBALS["lang"]['Commercial Support'] = 'Commercial Support';

$GLOBALS["lang"]['common_name'] = 'Common Name';

$GLOBALS["lang"]['Common Name'] = 'Common Name';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Commonly referred to as the clientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Commonly referred to as the clientSecret.';

$GLOBALS["lang"]['Community'] = 'Community';

$GLOBALS["lang"]['Community Questions'] = 'Community Questions';

$GLOBALS["lang"]['Community String'] = 'Community String';

$GLOBALS["lang"]['Comoros the'] = 'Comoros the';

$GLOBALS["lang"]['Compact'] = 'Compact';

$GLOBALS["lang"]['Company'] = 'Company';

$GLOBALS["lang"]['Complete these steps.'] = 'Complete these steps.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexity of the attack (Low or High).';

$GLOBALS["lang"]['Component Table'] = 'Component Table';

$GLOBALS["lang"]['Components (All Devices)'] = 'Components (All Devices)';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'Condition';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Conduct a risk assessment';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Conduct awareness and training programs';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Conduct management review meetings';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Conduct regular surveillance audits (usually annually)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Conducted by an accredited body in two stages';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, currently ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Configurable Role Based Access Control (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Configuration Change Detection and Reporting';

$GLOBALS["lang"]['Configure'] = 'Configure';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Configure the agent server-side to perform audits on a schedule';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo the';

$GLOBALS["lang"]['Connected To'] = 'Connected To';

$GLOBALS["lang"]['connection'] = 'Connection';

$GLOBALS["lang"]['Connection'] = 'Connection';

$GLOBALS["lang"]['Connection Options'] = 'Connection Options';

$GLOBALS["lang"]['connection_status'] = 'Connection Status';

$GLOBALS["lang"]['Connection Status'] = 'Connection Status';

$GLOBALS["lang"]['connections'] = 'Connections';

$GLOBALS["lang"]['Connections'] = 'Connections';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Consider filtered Ports Open';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Consider open|filtered Ports Open';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Consulting, implementation and other services are available through';

$GLOBALS["lang"]['contact'] = 'Contact';

$GLOBALS["lang"]['Contact'] = 'Contact';

$GLOBALS["lang"]['contact_name'] = 'Contact Name';

$GLOBALS["lang"]['Contact Name'] = 'Contact Name';

$GLOBALS["lang"]['contained_in'] = 'Contained In';

$GLOBALS["lang"]['Contained In'] = 'Contained In';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contains a JSON object details the associated widgets and their positions.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.';

$GLOBALS["lang"]['Context & Leadership'] = 'Context & Leadership';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Context Name';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Continuously improve the ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Contractual Obligations';

$GLOBALS["lang"]['Contractual Obligations'] = 'Contractual Obligations';

$GLOBALS["lang"]['Cook Islands'] = 'Cook Islands';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copy and paste an audit result';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.';

$GLOBALS["lang"]['core_count'] = 'Core Count';

$GLOBALS["lang"]['Core Count'] = 'Core Count';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Cost Center';

$GLOBALS["lang"]['Cost Center'] = 'Cost Center';

$GLOBALS["lang"]['cost_code'] = 'Cost Code';

$GLOBALS["lang"]['Cost Code'] = 'Cost Code';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'Count';

$GLOBALS["lang"]['Count'] = 'Count';

$GLOBALS["lang"]['country'] = 'Country';

$GLOBALS["lang"]['Country'] = 'Country';

$GLOBALS["lang"]['country_code'] = 'Country Code';

$GLOBALS["lang"]['Country Code'] = 'Country Code';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Create';

$GLOBALS["lang"]['Create Example Devices'] = 'Create Example Devices';

$GLOBALS["lang"]['create_external_count'] = 'Create External Count';

$GLOBALS["lang"]['Create External Count'] = 'Create External Count';

$GLOBALS["lang"]['create_external_from_internal'] = 'Create External From Internal';

$GLOBALS["lang"]['Create External From Internal'] = 'Create External From Internal';

$GLOBALS["lang"]['Create File'] = 'Create File';

$GLOBALS["lang"]['Create Geocode'] = 'Create Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Create Internal Count';

$GLOBALS["lang"]['Create Internal Count'] = 'Create Internal Count';

$GLOBALS["lang"]['create_internal_from_external'] = 'Create Internal From External';

$GLOBALS["lang"]['Create Internal From External'] = 'Create Internal From External';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Create NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Create Open-AudIT Devices from ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Create Open-AudIT Devices from NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Create a Baseline for the example device';

$GLOBALS["lang"]['Create a Discovery'] = 'Create a Discovery';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Create a Statement of Applicability (SoA)';

$GLOBALS["lang"]['created_by'] = 'Created By';

$GLOBALS["lang"]['Created By'] = 'Created By';

$GLOBALS["lang"]['created_date'] = 'Created Date';

$GLOBALS["lang"]['Created Date'] = 'Created Date';

$GLOBALS["lang"]['Creating'] = 'Creating';

$GLOBALS["lang"]['Creating Credentials'] = 'Creating Credentials';

$GLOBALS["lang"]['Creating Device'] = 'Creating Device';

$GLOBALS["lang"]['Creating Widgets'] = 'Creating Widgets';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Creating a Discovery Scan Options entry';

$GLOBALS["lang"]['Creating a Query'] = 'Creating a Query';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Creating a SQL Statement for Groups';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Creating a SQL Statement for Queries';

$GLOBALS["lang"]['Creating an Integration'] = 'Creating an Integration';

$GLOBALS["lang"]['creator'] = 'Creator';

$GLOBALS["lang"]['Creator'] = 'Creator';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Client ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credentials Subscription ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credentials for Amazon AWS used in Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credentials for Microsoft Azure used in Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Critical';

$GLOBALS["lang"]['criticality'] = 'Criticality';

$GLOBALS["lang"]['Criticality'] = 'Criticality';

$GLOBALS["lang"]['Croatia'] = 'Croatia';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Current';

$GLOBALS["lang"]['Current'] = 'Current';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Current Discovery Processes';

$GLOBALS["lang"]['Current date & time is '] = 'Current date & time is ';

$GLOBALS["lang"]['Currently Installed'] = 'Currently Installed';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Custom Fields';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Custom TCP Ports';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Custom UDP Ports';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Customisable Scanning Options per Discovery';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cyprus';

$GLOBALS["lang"]['Czech'] = 'Czech';

$GLOBALS["lang"]['Czech Republic'] = 'Czech Republic';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Account (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'Danish';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboards use';

$GLOBALS["lang"]['Data'] = 'Data';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Data Retention';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Database Action';

$GLOBALS["lang"]['Database Action'] = 'Database Action';

$GLOBALS["lang"]['db_column'] = 'Database Column';

$GLOBALS["lang"]['Database Column'] = 'Database Column';

$GLOBALS["lang"]['Database Definition'] = 'Database Definition';

$GLOBALS["lang"]['db_row'] = 'Database Row';

$GLOBALS["lang"]['Database Row'] = 'Database Row';

$GLOBALS["lang"]['Database Schema'] = 'Database Schema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Database Server Discovery';

$GLOBALS["lang"]['db_table'] = 'Database Table';

$GLOBALS["lang"]['Database Table'] = 'Database Table';

$GLOBALS["lang"]['Database Tables'] = 'Database Tables';

$GLOBALS["lang"]['dataset_title'] = 'Dataset Title';

$GLOBALS["lang"]['Dataset Title'] = 'Dataset Title';

$GLOBALS["lang"]['date'] = 'Date';

$GLOBALS["lang"]['Date'] = 'Date';

$GLOBALS["lang"]['Date D-M-Y'] = 'Date D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Date M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Date Now';

$GLOBALS["lang"]['date_of_manufacture'] = 'Date Of Manufacture';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Date Of Manufacture';

$GLOBALS["lang"]['date_paid'] = 'Date Paid';

$GLOBALS["lang"]['Date Paid'] = 'Date Paid';

$GLOBALS["lang"]['date_received'] = 'Date Received';

$GLOBALS["lang"]['Date Received'] = 'Date Received';

$GLOBALS["lang"]['Date Y-M-D'] = 'Date Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Date and time when the CVE was last updated.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Date and time when the CVE was published.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Date when the CVE was published.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Day Of Month';

$GLOBALS["lang"]['Day Of Month'] = 'Day Of Month';

$GLOBALS["lang"]['day_of_week'] = 'Day Of Week';

$GLOBALS["lang"]['Day Of Week'] = 'Day Of Week';

$GLOBALS["lang"]['Day of Month'] = 'Day of Month';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['Debugging'] = 'Debugging';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugging a Script';

$GLOBALS["lang"]['December'] = 'December';

$GLOBALS["lang"]['Decommission'] = 'Decommission';

$GLOBALS["lang"]['Default'] = 'Default';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Default Authentication Level - Set to Connect';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Default Impersonation Level - Set to Identify';

$GLOBALS["lang"]['Default Items'] = 'Default Items';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Default Orgs Groups';

$GLOBALS["lang"]['Default Roles Groups'] = 'Default Roles Groups';

$GLOBALS["lang"]['Default Value'] = 'Default Value';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Default of 389. Normally 636 used for Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Default of <code>3</code> for LDAP and Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Defaults';

$GLOBALS["lang"]['Deferred'] = 'Deferred';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Define project scope and objectives';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Define the ISMS scope';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Define the context of the organization (internal/external issues)';

$GLOBALS["lang"]['delay_minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delay Minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delete'] = 'Delete';

$GLOBALS["lang"]['Delete Example Devices'] = 'Delete Example Devices';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Delete External From Internal';

$GLOBALS["lang"]['Delete External From Internal'] = 'Delete External From Internal';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Delete NMIS Devices if not in Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Delete a {collection} entry.';

$GLOBALS["lang"]['Delete from Application'] = 'Delete from Application';

$GLOBALS["lang"]['Delete from Cluster'] = 'Delete from Cluster';

$GLOBALS["lang"]['Denmark'] = 'Denmark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Derived by audit or manually set by user.';

$GLOBALS["lang"]['Derived by audit.'] = 'Derived by audit.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derived from <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derived from <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derived from Collector discovery.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Derived from OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Derived from cloud discovery.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Derived from device audits.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Derived from device type and OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Derived from discovery.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Derived from hostname, sysName, dns Hostname and IP in that order.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Derived from the integer severity.';

$GLOBALS["lang"]['description'] = 'Description';

$GLOBALS["lang"]['Description'] = 'Description';

$GLOBALS["lang"]['destination'] = 'Destination';

$GLOBALS["lang"]['Destination'] = 'Destination';

$GLOBALS["lang"]['detail'] = 'Detail';

$GLOBALS["lang"]['Detail'] = 'Detail';

$GLOBALS["lang"]['Details'] = 'Details';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Details of who is usually contactable at this site.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Determine how often you want to run the Baseline check against the database and create a Scheduled Report';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Determine risk treatment options';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Develop a Risk Treatment Plan';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Develop policies, procedures, and controls';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Develop required ISMS documentation (policies, procedures, etc.)';

$GLOBALS["lang"]['device'] = 'Device';

$GLOBALS["lang"]['Device'] = 'Device';

$GLOBALS["lang"]['Device Audits'] = 'Device Audits';

$GLOBALS["lang"]['Device Component Names'] = 'Device Component Names';

$GLOBALS["lang"]['Device ID'] = 'Device ID';

$GLOBALS["lang"]['device_id'] = 'Device ID';

$GLOBALS["lang"]['device_id_a'] = 'Device ID A';

$GLOBALS["lang"]['Device ID A'] = 'Device ID A';

$GLOBALS["lang"]['device_id_b'] = 'Device ID B';

$GLOBALS["lang"]['Device ID B'] = 'Device ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Device Matching Rules';

$GLOBALS["lang"]['Device Name'] = 'Device Name';

$GLOBALS["lang"]['Device Result'] = 'Device Result';

$GLOBALS["lang"]['Device Results'] = 'Device Results';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Device Status';

$GLOBALS["lang"]['Device Types'] = 'Device Types';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Device and Software and Hardware Auditing';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Device is in the Subnet';

$GLOBALS["lang"]['Devices'] = 'Devices';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Devices Assigned To Location';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Devices Assigned To Location';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Devices Assigned To Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Devices Assigned To Org';

$GLOBALS["lang"]['Devices Audited'] = 'Devices Audited';

$GLOBALS["lang"]['Devices Collection'] = 'Devices Collection';

$GLOBALS["lang"]['Devices Created in '] = 'Devices Created in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Devices Created in Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Devices Default Display Columns';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Devices Default Display Columns';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Devices Found Last 7 Days';

$GLOBALS["lang"]['Devices Found Today'] = 'Devices Found Today';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Devices Found Yesterday';

$GLOBALS["lang"]['Devices Missing Information'] = 'Devices Missing Information';

$GLOBALS["lang"]['Devices Not Audited'] = 'Devices Not Audited';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Devices Not Seen 30 Days';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Devices Not Seen 7 Days';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Devices Not Seen 90 Days';

$GLOBALS["lang"]['Devices Older Than X'] = 'Devices Older Than X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Devices Retrieved via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Devices Selected from ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Devices Selected from Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Devices Updated in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Devices Updated in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Devices are being benchmarked.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Devices are not being benchmarked.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Devices could be benchmarked.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Devices from Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Devices in Running State';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Devices in Stopped State';

$GLOBALS["lang"]['Devices in this'] = 'Devices in this';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Devices with Expired Warranties';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Devired from type or OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Did the command complete successfully and return expected data.';

$GLOBALS["lang"]['direction'] = 'Direction';

$GLOBALS["lang"]['Direction'] = 'Direction';

$GLOBALS["lang"]['directory'] = 'Directory';

$GLOBALS["lang"]['Directory'] = 'Directory';

$GLOBALS["lang"]['disabled'] = 'Disabled';

$GLOBALS["lang"]['Disabled'] = 'Disabled';

$GLOBALS["lang"]['discard'] = 'Discard';

$GLOBALS["lang"]['Discard'] = 'Discard';

$GLOBALS["lang"]['Discover'] = 'Discover';

$GLOBALS["lang"]['Discoveries'] = 'Discoveries';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery Data Retention';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery Issues';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery Match Options';

$GLOBALS["lang"]['Discovery Name'] = 'Discovery Name';

$GLOBALS["lang"]['Discovery Options'] = 'Discovery Options';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan Options';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan Options';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan Types';

$GLOBALS["lang"]['Discovery Support'] = 'Discovery Support';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery has stopped working';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Display Version';

$GLOBALS["lang"]['Display Version'] = 'Display Version';

$GLOBALS["lang"]['Display in Menu'] = 'Display in Menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Displays a standard web form for submission to POST /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Displays a standard web form for submission to POST /{collection}/import.';

$GLOBALS["lang"]['district'] = 'District';

$GLOBALS["lang"]['District'] = 'District';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Host Name';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Host Name';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Do not forget about the Open-AudIT wiki for all your documentation.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Do not forget there is a mountain of documentation on the wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Do not scan these TCP ports.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Do not scan these UDP ports.';

$GLOBALS["lang"]['Do not show me again'] = 'Do not show me again';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Do you wish to see the standard sidebar on the left.';

$GLOBALS["lang"]['documentation'] = 'Documentation';

$GLOBALS["lang"]['Documentation'] = 'Documentation';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Documentation about a particular collection.';

$GLOBALS["lang"]['Does Not Equal'] = 'Does Not Equal';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Does the license apply to child Orgs.';

$GLOBALS["lang"]['domain'] = 'Domain';

$GLOBALS["lang"]['Domain'] = 'Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'Domain Controller Address';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domain Controller Address';

$GLOBALS["lang"]['domain_controller_name'] = 'Domain Controller Name';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domain Controller Name';

$GLOBALS["lang"]['domain_role'] = 'Domain Role';

$GLOBALS["lang"]['Domain Role'] = 'Domain Role';

$GLOBALS["lang"]['domain_short'] = 'Domain Short';

$GLOBALS["lang"]['Domain Short'] = 'Domain Short';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominican Republic';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.';

$GLOBALS["lang"]['Download'] = 'Download';

$GLOBALS["lang"]['Download a File'] = 'Download a File';

$GLOBALS["lang"]['Download a file from URL'] = 'Download a file from URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Download the test_windows_client.vbs script directly';

$GLOBALS["lang"]['Download your updated version from'] = 'Download your updated version from';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplicate Devices / Missing Devices';

$GLOBALS["lang"]['duration'] = 'Duration';

$GLOBALS["lang"]['Duration'] = 'Duration';

$GLOBALS["lang"]['Dutch'] = 'Dutch';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Edit';

$GLOBALS["lang"]['edit_log'] = 'Edit Log';

$GLOBALS["lang"]['Edit Log'] = 'Edit Log';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Edited By';

$GLOBALS["lang"]['Edited By'] = 'Edited By';

$GLOBALS["lang"]['edited_date'] = 'Edited Date';

$GLOBALS["lang"]['Edited Date'] = 'Edited Date';

$GLOBALS["lang"]['edition'] = 'Edition';

$GLOBALS["lang"]['Edition'] = 'Edition';

$GLOBALS["lang"]['Egypt'] = 'Egypt';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Either Amazon, Google or Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'Email Address';

$GLOBALS["lang"]['Email Address'] = 'Email Address';

$GLOBALS["lang"]['Email Configuration'] = 'Email Configuration';

$GLOBALS["lang"]['Email to send test to'] = 'Email to send test to';

$GLOBALS["lang"]['Enable'] = 'Enable';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Enable Distributed COM on this computer - Option is checked';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Enabling the Feature Under Windows';

$GLOBALS["lang"]['encryption'] = 'Encryption';

$GLOBALS["lang"]['Encryption'] = 'Encryption';

$GLOBALS["lang"]['encryption_method'] = 'Encryption Method';

$GLOBALS["lang"]['Encryption Method'] = 'Encryption Method';

$GLOBALS["lang"]['encryption_status'] = 'Encryption Status';

$GLOBALS["lang"]['Encryption Status'] = 'Encryption Status';

$GLOBALS["lang"]['end_date'] = 'End Date';

$GLOBALS["lang"]['End Date'] = 'End Date';

$GLOBALS["lang"]['End OF Life Product ID'] = 'End OF Life Product ID';

$GLOBALS["lang"]['end_of_life'] = 'End Of Life';

$GLOBALS["lang"]['End Of Life'] = 'End Of Life';

$GLOBALS["lang"]['end_of_production'] = 'End Of Production';

$GLOBALS["lang"]['End Of Production'] = 'End Of Production';

$GLOBALS["lang"]['end_of_service'] = 'End Of Service';

$GLOBALS["lang"]['End Of Service'] = 'End Of Service';

$GLOBALS["lang"]['end_of_service_life'] = 'End Of Service Life';

$GLOBALS["lang"]['End Of Service Life'] = 'End Of Service Life';

$GLOBALS["lang"]['Endpoint'] = 'Endpoint';

$GLOBALS["lang"]['English'] = 'English';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Enhances regulatory compliance';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Enrichment is complete. The CVE has full metadata and is considered stable.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Ensure documentation is controlled and accessible';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Enterprise private network'] = 'Enterprise private network';

$GLOBALS["lang"]['Entitlement Type'] = 'Entitlement Type';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Environment';

$GLOBALS["lang"]['Environment'] = 'Environment';

$GLOBALS["lang"]['Equal To'] = 'Equal To';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Equal To or Greater Than';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Equal To or Less Than';

$GLOBALS["lang"]['Equals'] = 'Equals';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Equatorial Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Error';

$GLOBALS["lang"]['Error Code'] = 'Error Code';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Establish a project plan and timeline';

$GLOBALS["lang"]['Establish an information security policy'] = 'Establish an information security policy';

$GLOBALS["lang"]['Established'] = 'Established';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Estonian'] = 'Estonian';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Ethiopia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Evaluate the ISMS internally';

$GLOBALS["lang"]['Every'] = 'Every';

$GLOBALS["lang"]['Every Day'] = 'Every Day';

$GLOBALS["lang"]['Example'] = 'Example';

$GLOBALS["lang"]['Example Devices'] = 'Example Devices';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Example Org Chart with Access';

$GLOBALS["lang"]['Example text from'] = 'Example text from';

$GLOBALS["lang"]['Examples'] = 'Examples';

$GLOBALS["lang"]['Exceptions'] = 'Exceptions';

$GLOBALS["lang"]['exclude'] = 'Exclude';

$GLOBALS["lang"]['Exclude'] = 'Exclude';

$GLOBALS["lang"]['exclude_ip'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Addresses';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Exclude any ports listed from being scanned. Comma seperated, no spaces.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Exclude these IP addresses from being Nmap scanned.';

$GLOBALS["lang"]['Excluded'] = 'Excluded';

$GLOBALS["lang"]['exclusion_reasons'] = 'Exclusion Reasons';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Exclusion Reasons';

$GLOBALS["lang"]['executable'] = 'Executable';

$GLOBALS["lang"]['Executable'] = 'Executable';

$GLOBALS["lang"]['executable_id'] = 'Executable ID';

$GLOBALS["lang"]['Executable ID'] = 'Executable ID';

$GLOBALS["lang"]['executables'] = 'Executables';

$GLOBALS["lang"]['Executables'] = 'Executables';

$GLOBALS["lang"]['Execute'] = 'Execute';

$GLOBALS["lang"]['Executing'] = 'Executing';

$GLOBALS["lang"]['exemption_reason'] = 'Exemption Reason';

$GLOBALS["lang"]['Exemption Reason'] = 'Exemption Reason';

$GLOBALS["lang"]['Existing Building'] = 'Existing Building';

$GLOBALS["lang"]['Existing Floor'] = 'Existing Floor';

$GLOBALS["lang"]['Existing Room'] = 'Existing Room';

$GLOBALS["lang"]['Existing Row'] = 'Existing Row';

$GLOBALS["lang"]['expire_date'] = 'Expire Date';

$GLOBALS["lang"]['Expire Date'] = 'Expire Date';

$GLOBALS["lang"]['expire_minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['expires'] = 'Expires';

$GLOBALS["lang"]['Expires'] = 'Expires';

$GLOBALS["lang"]['expiry_date'] = 'Expiry Date';

$GLOBALS["lang"]['Expiry Date'] = 'Expiry Date';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Export'] = 'Export';

$GLOBALS["lang"]['Export by Device'] = 'Export by Device';

$GLOBALS["lang"]['Export by Policy'] = 'Export by Policy';

$GLOBALS["lang"]['Export data to'] = 'Export data to';

$GLOBALS["lang"]['Exporting a Device'] = 'Exporting a Device';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'External';

$GLOBALS["lang"]['External Field Name'] = 'External Field Name';

$GLOBALS["lang"]['External Field Type'] = 'External Field Type';

$GLOBALS["lang"]['External Field Types'] = 'External Field Types';

$GLOBALS["lang"]['external_ident'] = 'External Ident';

$GLOBALS["lang"]['External Ident'] = 'External Ident';

$GLOBALS["lang"]['external_link'] = 'External Link';

$GLOBALS["lang"]['External Link'] = 'External Link';

$GLOBALS["lang"]['extra_columns'] = 'Extra Columns';

$GLOBALS["lang"]['Extra Columns'] = 'Extra Columns';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Extra and Time based Reporting';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra and more verbose logging is generated for troubleshooting.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['Fail'] = 'Fail';

$GLOBALS["lang"]['Failed'] = 'Failed';

$GLOBALS["lang"]['Failed Severity'] = 'Failed Severity';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falkland Islands (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Family';

$GLOBALS["lang"]['Faroe Islands'] = 'Faroe Islands';

$GLOBALS["lang"]['Features'] = 'Features';

$GLOBALS["lang"]['February'] = 'February';

$GLOBALS["lang"]['field'] = 'Field';

$GLOBALS["lang"]['Field'] = 'Field';

$GLOBALS["lang"]['field_id'] = 'Field ID';

$GLOBALS["lang"]['Field ID'] = 'Field ID';

$GLOBALS["lang"]['Field Name'] = 'Field Name';

$GLOBALS["lang"]['Field Type'] = 'Field Type';

$GLOBALS["lang"]['Fields'] = 'Fields';

$GLOBALS["lang"]['fields'] = 'Fields';

$GLOBALS["lang"]['Fields attributes are'] = 'Fields attributes are';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji the Fiji Islands';

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Auditing'] = 'File Auditing';

$GLOBALS["lang"]['File Import'] = 'File Import';

$GLOBALS["lang"]['File Input'] = 'File Input';

$GLOBALS["lang"]['file_name'] = 'File Name';

$GLOBALS["lang"]['File Name'] = 'File Name';

$GLOBALS["lang"]['File Share Discovery'] = 'File Share Discovery';

$GLOBALS["lang"]['file_size'] = 'File Size';

$GLOBALS["lang"]['File Size'] = 'File Size';

$GLOBALS["lang"]['filename'] = 'Filename';

$GLOBALS["lang"]['Filename'] = 'Filename';

$GLOBALS["lang"]['files'] = 'Files';

$GLOBALS["lang"]['Files'] = 'Files';

$GLOBALS["lang"]['files_id'] = 'Files ID';

$GLOBALS["lang"]['Files ID'] = 'Files ID';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Filtered';

$GLOBALS["lang"]['Filtered'] = 'Filtered';

$GLOBALS["lang"]['Filtered Ports'] = 'Filtered Ports';

$GLOBALS["lang"]['Finland'] = 'Finland';

$GLOBALS["lang"]['Finnish'] = 'Finnish';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Firewall Packages';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall Rule';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall Rule';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First'] = 'First';

$GLOBALS["lang"]['First Name'] = 'First Name';

$GLOBALS["lang"]['first_run'] = 'First Run';

$GLOBALS["lang"]['First Run'] = 'First Run';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fixed';

$GLOBALS["lang"]['Fixing the Issue'] = 'Fixing the Issue';

$GLOBALS["lang"]['Floor'] = 'Floor';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['For'] = 'For';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'For a primer on cron, see this Wikipedia page';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'For a seed discovery, should I only discover IPs in the private IP address space.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'For a seed discovery, should I only discover IPs on the chosen subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'For a seed discovery, should I ping the subnet before running the discovery.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'For each spawned process, the below occurs.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'For further details information, see the wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'For licenses that are not perpetual, when does the license expire.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'For more detailed information, check the Open-AudIT Knowledge Base.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'For more information please see the following guide which includes a video. Use';

$GLOBALS["lang"]['For more information, see'] = 'For more information, see';

$GLOBALS["lang"]['form_factor'] = 'Form Factor';

$GLOBALS["lang"]['Form Factor'] = 'Form Factor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'France, French Republic';

$GLOBALS["lang"]['free'] = 'Free';

$GLOBALS["lang"]['Free'] = 'Free';

$GLOBALS["lang"]['French'] = 'French';

$GLOBALS["lang"]['French Guiana'] = 'French Guiana';

$GLOBALS["lang"]['French Polynesia'] = 'French Polynesia';

$GLOBALS["lang"]['French Southern Territories'] = 'French Southern Territories';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Frequently Asked Questions';

$GLOBALS["lang"]['Friday'] = 'Friday';

$GLOBALS["lang"]['From 100 Devices'] = 'From 100 Devices';

$GLOBALS["lang"]['From 500 Devices'] = 'From 500 Devices';

$GLOBALS["lang"]['From that page'] = 'From that page';

$GLOBALS["lang"]['full_name'] = 'Full Name';

$GLOBALS["lang"]['Full Name'] = 'Full Name';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.';

$GLOBALS["lang"]['function'] = 'Function';

$GLOBALS["lang"]['Function'] = 'Function';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galician';

$GLOBALS["lang"]['Gambia the'] = 'Gambia the';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap Analysis (optional)';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generated By';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Geographical Maps';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'German';

$GLOBALS["lang"]['Germany'] = 'Germany';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Get News';

$GLOBALS["lang"]['Get Started'] = 'Get Started';

$GLOBALS["lang"]['Get a Free License'] = 'Get a Free License';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Get familiar with the Open-AudIT platform and explore some of its features.';

$GLOBALS["lang"]['Getting Started'] = 'Getting Started';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Options';

$GLOBALS["lang"]['Global area network'] = 'Global area network';

$GLOBALS["lang"]['Go'] = 'Go';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.';

$GLOBALS["lang"]['Go to menu'] = 'Go to menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Credentials';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Key';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!';

$GLOBALS["lang"]['Greater Than'] = 'Greater Than';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Greater Than or Equals';

$GLOBALS["lang"]['Greece'] = 'Greece';

$GLOBALS["lang"]['Greek'] = 'Greek';

$GLOBALS["lang"]['Green Query'] = 'Green Query';

$GLOBALS["lang"]['Greenland'] = 'Greenland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Group';

$GLOBALS["lang"]['group_by'] = 'Group By';

$GLOBALS["lang"]['Group By'] = 'Group By';

$GLOBALS["lang"]['group_id'] = 'Group ID';

$GLOBALS["lang"]['Group ID'] = 'Group ID';

$GLOBALS["lang"]['groups'] = 'Groups';

$GLOBALS["lang"]['Groups'] = 'Groups';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Guest Device ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Guest Device ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Revision';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Hard Drive Index';

$GLOBALS["lang"]['Hard Drive Index'] = 'Hard Drive Index';

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Has this policy been applied in this organization.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Hebrew';

$GLOBALS["lang"]['height'] = 'Height';

$GLOBALS["lang"]['Height'] = 'Height';

$GLOBALS["lang"]['Height in RU'] = 'Height in RU';

$GLOBALS["lang"]['Help'] = 'Help';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Help and Frequently Asked Questions';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Helps manage and mitigate information security risks';

$GLOBALS["lang"]['Hide Audit Window'] = 'Hide Audit Window';

$GLOBALS["lang"]['high'] = 'High';

$GLOBALS["lang"]['High'] = 'High';

$GLOBALS["lang"]['High Availability'] = 'High Availability';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Holy See (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Home';

$GLOBALS["lang"]['home'] = 'Home';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Home area network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Hour';

$GLOBALS["lang"]['Hour'] = 'Hour';

$GLOBALS["lang"]['How Does It Work?'] = 'How Does It Work?';

$GLOBALS["lang"]['How Does it Work?'] = 'How Does it Work?';

$GLOBALS["lang"]['How Long Does it Take'] = 'How Long Does it Take';

$GLOBALS["lang"]['How and Why is'] = 'How and Why is';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'How and Why is Open-AudIT More Secure';

$GLOBALS["lang"]['How do they work?'] = 'How do they work?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'How does a Device Seed Discovery find known IPs?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'How long did the command take to execute.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'How long should Nmap wait for a response, per device.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'How many circuit feed to this rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'How many policies results in a fail.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'How many policies results in a pass.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'How many power sockets in this rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'How many rack units in height is this rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'How often should the collector ask the server for a task.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'How should we select devices to be integrated (using an Attribute, Query or a Group).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = 'How to compare';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Human-readable explanation of the vulnerability.';

$GLOBALS["lang"]['Hungarian'] = 'Hungarian';

$GLOBALS["lang"]['Hungary'] = 'Hungary';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'I have read the EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'IMPORTANT';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP Address';

$GLOBALS["lang"]['IP Addresses'] = 'IP Addresses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set By';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 only.';

$GLOBALS["lang"]['Iceland'] = 'Iceland';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Icon and Text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icon only, text only or icon and text.';

$GLOBALS["lang"]['id_internal'] = 'Id Internal';

$GLOBALS["lang"]['Id Internal'] = 'Id Internal';

$GLOBALS["lang"]['id_number'] = 'Id Number';

$GLOBALS["lang"]['Id Number'] = 'Id Number';

$GLOBALS["lang"]['identification'] = 'Identification';

$GLOBALS["lang"]['Identification'] = 'Identification';

$GLOBALS["lang"]['Identify information assets'] = 'Identify information assets';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identify interested parties and their requirements';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identify key stakeholders and assign roles';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identifying and evaluating security risks';

$GLOBALS["lang"]['If'] = 'If';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'If a port responds with filtered, should we consider it available.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'If a port responds with open|filtered, should we consider it available.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'If an Open-AudIT device has been changed, should we update the external system.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'If an Open-AudIT device is not on the external system, should we create it.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'If an agent reports its primary IP is in this subnet, perform the actions.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'If the OS Family (as reported by the device) contains this item, pass.</li>';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'If the agent OS family (case insensitive) contains this string, perform the actions.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'If the binary is not found in either of these locations, a warning message will be displayed in the installer.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'If the primary IP (as reported by the device) is in this subnet, pass.</li>';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'If the value is not set, the current timestamp will be used.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'If the value is set, that timestamp value will be used.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'If this many minutes (or more) have passed since the server last saw the device, pass.</li>';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'If this many or more minutes have passed since the device contacted the server, perform the actions.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'If we detect the san management software, should we run an auto-discover before the query.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'If you add a Location Type, add those icons to';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'If you are a supported customer and open a support ticket with FirstWave, please attach these files.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'If you are running an Open-AudIT server on Linux, this does not affect you.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.';

$GLOBALS["lang"]['If you set the values for'] = 'If you set the values for';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignore Invalid SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignored';

$GLOBALS["lang"]['image'] = 'Image';

$GLOBALS["lang"]['Image'] = 'Image';

$GLOBALS["lang"]['Images'] = 'Images';

$GLOBALS["lang"]['impact_availability'] = 'Impact Availability';

$GLOBALS["lang"]['Impact Availability'] = 'Impact Availability';

$GLOBALS["lang"]['impact_confidentiality'] = 'Impact Confidentiality';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Impact Confidentiality';

$GLOBALS["lang"]['impact_integrity'] = 'Impact Integrity';

$GLOBALS["lang"]['Impact Integrity'] = 'Impact Integrity';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implement selected controls and procedures';

$GLOBALS["lang"]['Implementation'] = 'Implementation';

$GLOBALS["lang"]['implementation_notes'] = 'Implementation Notes';

$GLOBALS["lang"]['Implementation Notes'] = 'Implementation Notes';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Import Example Data';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Import multiple {collection} using a CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Improvement Opportunities';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Improvement Opportunities';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Improves business continuity and resilience';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'In a second tab or window sign-on to your';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'In order to use this functionality, it must be enabled in the configuration - click';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'In the (comma seperated) list';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inactive';

$GLOBALS["lang"]['Incomplete'] = 'Incomplete';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Indonesian'] = 'Indonesian';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Information only.';

$GLOBALS["lang"]['Informational'] = 'Informational';

$GLOBALS["lang"]['initial_size'] = 'Initial Size';

$GLOBALS["lang"]['Initial Size'] = 'Initial Size';

$GLOBALS["lang"]['Initial login credentials are'] = 'Initial login credentials are';

$GLOBALS["lang"]['Initiation'] = 'Initiation';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Input';

$GLOBALS["lang"]['Input Type'] = 'Input Type';

$GLOBALS["lang"]['inputs'] = 'Inputs';

$GLOBALS["lang"]['Inputs'] = 'Inputs';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Insert a new {collection} entry.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Insert example data and discover all that Open-AudIT can tell you.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Insert your Purchased license Key';

$GLOBALS["lang"]['install'] = 'Install';

$GLOBALS["lang"]['Install'] = 'Install';

$GLOBALS["lang"]['install_date'] = 'Install Date';

$GLOBALS["lang"]['Install Date'] = 'Install Date';

$GLOBALS["lang"]['install_directory'] = 'Install Directory';

$GLOBALS["lang"]['Install Directory'] = 'Install Directory';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Install OpenScap if required';

$GLOBALS["lang"]['install_source'] = 'Install Source';

$GLOBALS["lang"]['Install Source'] = 'Install Source';

$GLOBALS["lang"]['Install Support'] = 'Install Support';

$GLOBALS["lang"]['installed_by'] = 'Installed By';

$GLOBALS["lang"]['Installed By'] = 'Installed By';

$GLOBALS["lang"]['installed_on'] = 'Installed On';

$GLOBALS["lang"]['Installed On'] = 'Installed On';

$GLOBALS["lang"]['Installing'] = 'Installing';

$GLOBALS["lang"]['Installing on Linux'] = 'Installing on Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installing on MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installing on Windows';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Instance Options';

$GLOBALS["lang"]['Instance Options'] = 'Instance Options';

$GLOBALS["lang"]['instance_provider'] = 'Instance Provider';

$GLOBALS["lang"]['Instance Provider'] = 'Instance Provider';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instance Reservation Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instance Reservation Ident';

$GLOBALS["lang"]['instance_state'] = 'Instance State';

$GLOBALS["lang"]['Instance State'] = 'Instance State';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'Instance Type';

$GLOBALS["lang"]['Instance Type'] = 'Instance Type';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integration';

$GLOBALS["lang"]['integrations'] = 'Integrations';

$GLOBALS["lang"]['Integrations'] = 'Integrations';

$GLOBALS["lang"]['integrations_id'] = 'Integrations ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integrations ID';

$GLOBALS["lang"]['integrations_log'] = 'Integrations Log';

$GLOBALS["lang"]['Integrations Log'] = 'Integrations Log';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrations can be scheduled as desired. This is left to the user.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrations can be scheduled as per Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interactive Dashboards';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface ID';

$GLOBALS["lang"]['interface_type'] = 'Interface Type';

$GLOBALS["lang"]['Interface Type'] = 'Interface Type';

$GLOBALS["lang"]['Internal'] = 'Internal';

$GLOBALS["lang"]['Internal Audit'] = 'Internal Audit';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Internal Audit & Review';

$GLOBALS["lang"]['Internal Field Name'] = 'Internal Field Name';

$GLOBALS["lang"]['Internal ID'] = 'Internal ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Internal JSON array of valid access tokens for this user.';

$GLOBALS["lang"]['Introduction'] = 'Introduction';

$GLOBALS["lang"]['invoice'] = 'Invoice';

$GLOBALS["lang"]['Invoice'] = 'Invoice';

$GLOBALS["lang"]['invoice_id'] = 'Invoice ID';

$GLOBALS["lang"]['Invoice ID'] = 'Invoice ID';

$GLOBALS["lang"]['invoice_item'] = 'Invoice Item';

$GLOBALS["lang"]['Invoice Item'] = 'Invoice Item';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Address External A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Address External A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Address External B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Address External B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Address Internal A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Address Internal A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Address Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Address Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited Count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited Count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding Count';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding Count';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Iraq';

$GLOBALS["lang"]['Ireland'] = 'Ireland';

$GLOBALS["lang"]['Irish'] = 'Irish';

$GLOBALS["lang"]['Is FRU'] = 'Is FRU';

$GLOBALS["lang"]['is_fru'] = 'Is Fru';

$GLOBALS["lang"]['Is Fru'] = 'Is Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Is the NMIS server local (on this Open-AudIT server) or remote?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Is this account active? If set to <code>n</code>, the user cannot logon.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Is this query restricted to licensed customers.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Is this task enabled (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Issue';

$GLOBALS["lang"]['issuer'] = 'Issuer';

$GLOBALS["lang"]['Issuer'] = 'Issuer';

$GLOBALS["lang"]['issuer_name'] = 'Issuer Name';

$GLOBALS["lang"]['Issuer Name'] = 'Issuer Name';

$GLOBALS["lang"]['Issues'] = 'Issues';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'It <i>Just Works</i> with NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'It is available at Menu -> Help ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'Italian';

$GLOBALS["lang"]['Italy'] = 'Italy';

$GLOBALS["lang"]['Items not in Baseline'] = 'Items not in Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Import';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'January';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Japanese'] = 'Japanese';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'July';

$GLOBALS["lang"]['June'] = 'June';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'Key';

$GLOBALS["lang"]['Key Components'] = 'Key Components';

$GLOBALS["lang"]['Key Password (optional)'] = 'Key Password (optional)';

$GLOBALS["lang"]['keys'] = 'Keys';

$GLOBALS["lang"]['Keys'] = 'Keys';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Korean';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kyrgyz';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyz Republic';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Group';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP was searched for this user and their account was found.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Language';

$GLOBALS["lang"]['Language'] = 'Language';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Last Changed';

$GLOBALS["lang"]['Last Changed'] = 'Last Changed';

$GLOBALS["lang"]['last_finished'] = 'Last Finished';

$GLOBALS["lang"]['Last Finished'] = 'Last Finished';

$GLOBALS["lang"]['last_logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Name'] = 'Last Name';

$GLOBALS["lang"]['last_os_update'] = 'Last Os Update';

$GLOBALS["lang"]['Last Os Update'] = 'Last Os Update';

$GLOBALS["lang"]['last_result'] = 'Last Result';

$GLOBALS["lang"]['Last Result'] = 'Last Result';

$GLOBALS["lang"]['last_run'] = 'Last Run';

$GLOBALS["lang"]['Last Run'] = 'Last Run';

$GLOBALS["lang"]['last_seen'] = 'Last Seen';

$GLOBALS["lang"]['Last Seen'] = 'Last Seen';

$GLOBALS["lang"]['last_seen_by'] = 'Last Seen By';

$GLOBALS["lang"]['Last Seen By'] = 'Last Seen By';

$GLOBALS["lang"]['last_user'] = 'Last User';

$GLOBALS["lang"]['Last User'] = 'Last User';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Latitude';

$GLOBALS["lang"]['Latitude'] = 'Latitude';

$GLOBALS["lang"]['Latvia'] = 'Latvia';

$GLOBALS["lang"]['Latvian'] = 'Latvian';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Account';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Account';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'Learn About';

$GLOBALS["lang"]['Learn More'] = 'Learn More';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lebanon'] = 'Lebanon';

$GLOBALS["lang"]['legal_requirements'] = 'Legal Requirements';

$GLOBALS["lang"]['Legal Requirements'] = 'Legal Requirements';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Less Than';

$GLOBALS["lang"]['Less Than or Equals'] = 'Less Than or Equals';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Lets set the logging to debug. Copy the file:';

$GLOBALS["lang"]['level'] = 'Level';

$GLOBALS["lang"]['Level'] = 'Level';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Level of privileges needed to exploit (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'License';

$GLOBALS["lang"]['License Key'] = 'License Key';

$GLOBALS["lang"]['License Required'] = 'License Required';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>';

$GLOBALS["lang"]['Licenses'] = 'Licenses';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Like';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.';

$GLOBALS["lang"]['Like versus Equals'] = 'Like versus Equals';

$GLOBALS["lang"]['limit'] = 'Limit';

$GLOBALS["lang"]['Limit'] = 'Limit';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limit the query to the first X items.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limited to 100 rows.';

$GLOBALS["lang"]['line_amount'] = 'Line Amount';

$GLOBALS["lang"]['Line Amount'] = 'Line Amount';

$GLOBALS["lang"]['Line Graph'] = 'Line Graph';

$GLOBALS["lang"]['line_number_a'] = 'Line Number A';

$GLOBALS["lang"]['Line Number A'] = 'Line Number A';

$GLOBALS["lang"]['line_number_b'] = 'Line Number B';

$GLOBALS["lang"]['Line Number B'] = 'Line Number B';

$GLOBALS["lang"]['line_text'] = 'Line Text';

$GLOBALS["lang"]['Line Text'] = 'Line Text';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Line charts must return date or my_date, description or my_description and count.';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Linked Files';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Links to <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Links to <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Links to <standards_policies.id</code>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux Packages';

$GLOBALS["lang"]['List'] = 'List';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'List All NMAP Ports, Protocols and Programs for Each Device';

$GLOBALS["lang"]['List Devices'] = 'List Devices';

$GLOBALS["lang"]['List Discoveries'] = 'List Discoveries';

$GLOBALS["lang"]['list_table_format'] = 'List Table Format';

$GLOBALS["lang"]['List Table Format'] = 'List Table Format';

$GLOBALS["lang"]['List Tables'] = 'List Tables';

$GLOBALS["lang"]['Lithuania'] = 'Lithuania';

$GLOBALS["lang"]['Lithuanian'] = 'Lithuanian';

$GLOBALS["lang"]['Load Balancing'] = 'Load Balancing';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Local Area Network';

$GLOBALS["lang"]['local_port'] = 'Local Port';

$GLOBALS["lang"]['Local Port'] = 'Local Port';

$GLOBALS["lang"]['Local area network'] = 'Local area network';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Localisation';

$GLOBALS["lang"]['Location'] = 'Location';

$GLOBALS["lang"]['Location A'] = 'Location A';

$GLOBALS["lang"]['Location B'] = 'Location B';

$GLOBALS["lang"]['location_id'] = 'Location ID';

$GLOBALS["lang"]['Location ID'] = 'Location ID';

$GLOBALS["lang"]['location_id_a'] = 'Location ID A';

$GLOBALS["lang"]['Location ID A'] = 'Location ID A';

$GLOBALS["lang"]['location_id_b'] = 'Location ID B';

$GLOBALS["lang"]['Location ID B'] = 'Location ID B';

$GLOBALS["lang"]['location_latitude'] = 'Location Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Location Latitude';

$GLOBALS["lang"]['location_level'] = 'Location Level';

$GLOBALS["lang"]['Location Level'] = 'Location Level';

$GLOBALS["lang"]['location_longitude'] = 'Location Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Location Longitude';

$GLOBALS["lang"]['Location Name'] = 'Location Name';

$GLOBALS["lang"]['location_rack'] = 'Location Rack';

$GLOBALS["lang"]['Location Rack'] = 'Location Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Location Rack Position';

$GLOBALS["lang"]['Location Rack Position'] = 'Location Rack Position';

$GLOBALS["lang"]['location_rack_size'] = 'Location Rack Size';

$GLOBALS["lang"]['Location Rack Size'] = 'Location Rack Size';

$GLOBALS["lang"]['location_room'] = 'Location Room';

$GLOBALS["lang"]['Location Room'] = 'Location Room';

$GLOBALS["lang"]['location_suite'] = 'Location Suite';

$GLOBALS["lang"]['Location Suite'] = 'Location Suite';

$GLOBALS["lang"]['Locations'] = 'Locations';

$GLOBALS["lang"]['Locations in this'] = 'Locations in this';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['Log Line'] = 'Log Line';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Log Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Log Rotation';

$GLOBALS["lang"]['log_status'] = 'Log Status';

$GLOBALS["lang"]['Log Status'] = 'Log Status';

$GLOBALS["lang"]['Logging in'] = 'Logging in';

$GLOBALS["lang"]['Logical Cores '] = 'Logical Cores ';

$GLOBALS["lang"]['logical_count'] = 'Logical Count';

$GLOBALS["lang"]['Logical Count'] = 'Logical Count';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Longitude';

$GLOBALS["lang"]['Longitude'] = 'Longitude';

$GLOBALS["lang"]['low'] = 'Low';

$GLOBALS["lang"]['Low'] = 'Low';

$GLOBALS["lang"]['Lower Case'] = 'Lower Case';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase Hostname';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'MAC Address';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Manufacturer';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS Packages';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Maintain records of risk assessments and treatments';

$GLOBALS["lang"]['maintenance_expires'] = 'Maintenance Expires';

$GLOBALS["lang"]['Maintenance Expires'] = 'Maintenance Expires';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Make My Default Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Make this install a Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Maldives';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'Manage Licenses';

$GLOBALS["lang"]['Manage in NMIS'] = 'Manage in NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Manage incidents and nonconformities';

$GLOBALS["lang"]['Managed'] = 'Managed';

$GLOBALS["lang"]['managed_by'] = 'Managed By';

$GLOBALS["lang"]['Managed By'] = 'Managed By';

$GLOBALS["lang"]['Manual Input'] = 'Manual Input';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manually set by user, defaults to Production.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manually set by user.';

$GLOBALS["lang"]['manufacture_date'] = 'Manufacture Date';

$GLOBALS["lang"]['Manufacture Date'] = 'Manufacture Date';

$GLOBALS["lang"]['manufacturer'] = 'Manufacturer';

$GLOBALS["lang"]['Manufacturer'] = 'Manufacturer';

$GLOBALS["lang"]['manufacturer_code'] = 'Manufacturer Code';

$GLOBALS["lang"]['Manufacturer Code'] = 'Manufacturer Code';

$GLOBALS["lang"]['Map'] = 'Map';

$GLOBALS["lang"]['maps'] = 'Maps';

$GLOBALS["lang"]['Maps'] = 'Maps';

$GLOBALS["lang"]['March'] = 'March';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshall Islands';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Mask';

$GLOBALS["lang"]['Mask'] = 'Mask';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'Match Options';

$GLOBALS["lang"]['Match Options'] = 'Match Options';

$GLOBALS["lang"]['Match Order'] = 'Match Order';

$GLOBALS["lang"]['Match Process'] = 'Match Process';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Matching Attribute';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Matching Devices - Including OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Matching Linux Devices';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Matching is conducted in the following order';

$GLOBALS["lang"]['maturity_level'] = 'Maturity Level';

$GLOBALS["lang"]['Maturity Level'] = 'Maturity Level';

$GLOBALS["lang"]['maturity_score'] = 'Maturity Score';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity Score';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Max File Size';

$GLOBALS["lang"]['Max File Size'] = 'Max File Size';

$GLOBALS["lang"]['Max Length'] = 'Max Length';

$GLOBALS["lang"]['max_size'] = 'Max Size';

$GLOBALS["lang"]['Max Size'] = 'Max Size';

$GLOBALS["lang"]['May'] = 'May';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.';

$GLOBALS["lang"]['medium'] = 'Medium';

$GLOBALS["lang"]['Medium'] = 'Medium';

$GLOBALS["lang"]['members'] = 'Members';

$GLOBALS["lang"]['Members'] = 'Members';

$GLOBALS["lang"]['memory'] = 'Memory';

$GLOBALS["lang"]['Memory'] = 'Memory';

$GLOBALS["lang"]['memory_count'] = 'Memory Count';

$GLOBALS["lang"]['Memory Count'] = 'Memory Count';

$GLOBALS["lang"]['memory_slot_count'] = 'Memory Slot Count';

$GLOBALS["lang"]['Memory Slot Count'] = 'Memory Slot Count';

$GLOBALS["lang"]['menu_category'] = 'Menu Category';

$GLOBALS["lang"]['Menu Category'] = 'Menu Category';

$GLOBALS["lang"]['menu_display'] = 'Menu Display';

$GLOBALS["lang"]['Menu Display'] = 'Menu Display';

$GLOBALS["lang"]['message'] = 'Message';

$GLOBALS["lang"]['Message'] = 'Message';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Metropolitan area network'] = 'Metropolitan area network';

$GLOBALS["lang"]['Mexico'] = 'Mexico';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes'] = 'Minutes';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutes Since last Audit are Greater than';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Model Family';

$GLOBALS["lang"]['Model Family'] = 'Model Family';

$GLOBALS["lang"]['Modified'] = 'Modified';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modifying an Existing Script';

$GLOBALS["lang"]['module'] = 'Module';

$GLOBALS["lang"]['Module'] = 'Module';

$GLOBALS["lang"]['module_index'] = 'Module Index';

$GLOBALS["lang"]['Module Index'] = 'Module Index';

$GLOBALS["lang"]['Modules'] = 'Modules';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Monday';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitor and measure ISMS performance';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Month';

$GLOBALS["lang"]['Month'] = 'Month';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'More Information';

$GLOBALS["lang"]['More Secure'] = 'More Secure';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'More information about debugging this can be found on a helpful Stack Overflow thread';

$GLOBALS["lang"]['Morocco'] = 'Morocco';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Most of Open-AudIT is Licensed with GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Must Respond to Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'My AntiVirus is prompting me to deny/allow things';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'My time is off in Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Customer';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS Device Options';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Device Selection';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Field Name';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Field Type';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Role';

$GLOBALS["lang"]['NOTE'] = 'NOTE';

$GLOBALS["lang"]['NOTE #2'] = 'NOTE #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTE - For more info on DateTime formats, see';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Name';

$GLOBALS["lang"]['Name'] = 'Name';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Name: The name you are giving to this field. Ideally it should be unique.';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Net Index';

$GLOBALS["lang"]['Net Index'] = 'Net Index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Netherlands Antilles';

$GLOBALS["lang"]['Netherlands the'] = 'Netherlands the';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Policies';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Ports';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.';

$GLOBALS["lang"]['Network'] = 'Network';

$GLOBALS["lang"]['network_address'] = 'Network Address';

$GLOBALS["lang"]['Network Address'] = 'Network Address';

$GLOBALS["lang"]['Network Discovery'] = 'Network Discovery';

$GLOBALS["lang"]['network_domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Types'] = 'Network Types';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.';

$GLOBALS["lang"]['networks'] = 'Networks';

$GLOBALS["lang"]['Networks'] = 'Networks';

$GLOBALS["lang"]['Networks Generated By'] = 'Networks Generated By';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Networks using a CIDR Mask of';

$GLOBALS["lang"]['New Building Name'] = 'New Building Name';

$GLOBALS["lang"]['New Caledonia'] = 'New Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'New Floor Name';

$GLOBALS["lang"]['New Room Name'] = 'New Room Name';

$GLOBALS["lang"]['New Row Name'] = 'New Row Name';

$GLOBALS["lang"]['New Zealand'] = 'New Zealand';

$GLOBALS["lang"]['News'] = 'News';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!';

$GLOBALS["lang"]['next_hop'] = 'Next Hop';

$GLOBALS["lang"]['Next Hop'] = 'Next Hop';

$GLOBALS["lang"]['next_run'] = 'Next Run';

$GLOBALS["lang"]['Next Run'] = 'Next Run';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Next click <i>Create your own application</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Next, click OK, then right click the Apache 2.4 service and click Restart. Done!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Next, right click the Apache2.4 service and select Properties, then click the Log On tab.';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap timing details are found on the bottom of this linked page';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Customer';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Customer';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Name';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Name';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'No';

$GLOBALS["lang"]['No Devices Returned'] = 'No Devices Returned';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'No Google Maps API Key present, you will not be able to display the map.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'No License for Professional or Enterprise';

$GLOBALS["lang"]['No Results'] = 'No Results';

$GLOBALS["lang"]['No data in License Key'] = 'No data in License Key';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'No database upgrade required at this time.';

$GLOBALS["lang"]['No devices are in the database.'] = 'No devices are in the database.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'None';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Northern Mariana Islands';

$GLOBALS["lang"]['Norway'] = 'Norway';

$GLOBALS["lang"]['Norwegian'] = 'Norwegian';

$GLOBALS["lang"]['Not Applicable'] = 'Not Applicable';

$GLOBALS["lang"]['Not Checked'] = 'Not Checked';

$GLOBALS["lang"]['Not Equals'] = 'Not Equals';

$GLOBALS["lang"]['Not In'] = 'Not In';

$GLOBALS["lang"]['Not Like'] = 'Not Like';

$GLOBALS["lang"]['Not Set'] = 'Not Set';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Not in the (comma seperated) list';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.';

$GLOBALS["lang"]['Note'] = 'Note';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Note that the 100 device Enterprise license does not include support.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Note, you may need to make the script executable with';

$GLOBALS["lang"]['Notes'] = 'Notes';

$GLOBALS["lang"]['notes'] = 'Notes';

$GLOBALS["lang"]['Notice'] = 'Notice';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Now for the Subscription ID, click All Services, Subscriptions and copy it.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Families';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['OUTPUTS'] = 'OUTPUTS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Object Ident';

$GLOBALS["lang"]['Object Ident'] = 'Object Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Obtain top management support';

$GLOBALS["lang"]['October'] = 'October';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'On the Tasks List page, click the <i>Add New</i> button to configure a task.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'On the next page you will be able to select Access Keys and see your key or create a new key.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, Not Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Once the script has run on a target, should the script delete itself.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Once you have chosen your devices to edit, click the pencil button on the top right of the table.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'One of either <code>active directory</code> or <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'One of: antivirus, backup, firewall, approved, banned, ignored or other.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Online Documentation';

$GLOBALS["lang"]['Open'] = 'Open';

$GLOBALS["lang"]['Open Data'] = 'Open Data';

$GLOBALS["lang"]['Open Source'] = 'Open Source';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Field Name';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT Licenses';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Options';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. The world\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT can download, parse and use NIST CVE Vulnerability reports.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open-AudIT can show in one of several languages. How you can improve this?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open-AudIT can store information in additional fields that are associated with each device.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open-AudIT makes it easy to edit the attributes of multiple devices at once.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT provides many built-in queries and makes it simple to create your own.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap is Installed';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Opening a Support Ticket?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap User Membership Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap User Membership Attribute';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Operating System'] = 'Operating System';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operating System Family Contains';

$GLOBALS["lang"]['Operating Systems'] = 'Operating Systems';

$GLOBALS["lang"]['Operators'] = 'Operators';

$GLOBALS["lang"]['optical'] = 'Optical';

$GLOBALS["lang"]['Optical'] = 'Optical';

$GLOBALS["lang"]['Optimized'] = 'Optimized';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Option #1 - Change the data';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Option #2 - Change the translation file';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Optional Agent Based Auditing';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.';

$GLOBALS["lang"]['options'] = 'Options';

$GLOBALS["lang"]['Options'] = 'Options';

$GLOBALS["lang"]['Options, options, options'] = 'Options, options, options';

$GLOBALS["lang"]['Or'] = 'Or';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Or select from the below fields.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organisations';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.';

$GLOBALS["lang"]['orientation'] = 'Orientation';

$GLOBALS["lang"]['Orientation'] = 'Orientation';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Version';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Version';

$GLOBALS["lang"]['os_family'] = 'Os Family';

$GLOBALS["lang"]['Os Family'] = 'Os Family';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os Installation Date';

$GLOBALS["lang"]['Os Installation Date'] = 'Os Installation Date';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'Os License';

$GLOBALS["lang"]['Os License'] = 'Os License';

$GLOBALS["lang"]['os_license_code'] = 'Os License Code';

$GLOBALS["lang"]['Os License Code'] = 'Os License Code';

$GLOBALS["lang"]['os_license_mode'] = 'Os License Mode';

$GLOBALS["lang"]['Os License Mode'] = 'Os License Mode';

$GLOBALS["lang"]['os_license_type'] = 'Os License Type';

$GLOBALS["lang"]['Os License Type'] = 'Os License Type';

$GLOBALS["lang"]['os_name'] = 'Os Name';

$GLOBALS["lang"]['Os Name'] = 'Os Name';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Other';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu';

$GLOBALS["lang"]['Others'] = 'Others';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Our examples will use the <i>type</i> column.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Our timeout for a SSH response';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Our timeout for a WMI response';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Our timeout for an SNMP response';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Our timeout for an audit script response';

$GLOBALS["lang"]['output'] = 'Output';

$GLOBALS["lang"]['Output'] = 'Output';

$GLOBALS["lang"]['outputs'] = 'Outputs';

$GLOBALS["lang"]['Outputs'] = 'Outputs';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Overall severity score (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Overwrite';

$GLOBALS["lang"]['Overwrite'] = 'Overwrite';

$GLOBALS["lang"]['owner'] = 'Owner';

$GLOBALS["lang"]['Owner'] = 'Owner';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTing data';

$GLOBALS["lang"]['Package'] = 'Package';

$GLOBALS["lang"]['packages'] = 'Packages';

$GLOBALS["lang"]['Packages'] = 'Packages';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinian Territory';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua New Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parameters';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Parent';

$GLOBALS["lang"]['parent_id'] = 'Parent ID';

$GLOBALS["lang"]['Parent ID'] = 'Parent ID';

$GLOBALS["lang"]['parent_name'] = 'Parent Name';

$GLOBALS["lang"]['Parent Name'] = 'Parent Name';

$GLOBALS["lang"]['part_number'] = 'Part Number';

$GLOBALS["lang"]['Part Number'] = 'Part Number';

$GLOBALS["lang"]['part_of_domain'] = 'Part Of Domain';

$GLOBALS["lang"]['Part Of Domain'] = 'Part Of Domain';

$GLOBALS["lang"]['Partition'] = 'Partition';

$GLOBALS["lang"]['partition_count'] = 'Partition Count';

$GLOBALS["lang"]['Partition Count'] = 'Partition Count';

$GLOBALS["lang"]['partition_disk_index'] = 'Partition Disk Index';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partition Disk Index';

$GLOBALS["lang"]['Pass'] = 'Pass';

$GLOBALS["lang"]['Passed'] = 'Passed';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passive Optical Local Area Network';

$GLOBALS["lang"]['Password'] = 'Password';

$GLOBALS["lang"]['password'] = 'Password';

$GLOBALS["lang"]['password_changeable'] = 'Password Changeable';

$GLOBALS["lang"]['Password Changeable'] = 'Password Changeable';

$GLOBALS["lang"]['password_disabled'] = 'Password Disabled';

$GLOBALS["lang"]['Password Disabled'] = 'Password Disabled';

$GLOBALS["lang"]['password_expires'] = 'Password Expires';

$GLOBALS["lang"]['Password Expires'] = 'Password Expires';

$GLOBALS["lang"]['password_last_changed'] = 'Password Last Changed';

$GLOBALS["lang"]['Password Last Changed'] = 'Password Last Changed';

$GLOBALS["lang"]['password_required'] = 'Password Required';

$GLOBALS["lang"]['Password Required'] = 'Password Required';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Path';

$GLOBALS["lang"]['Path'] = 'Path';

$GLOBALS["lang"]['Performance'] = 'Performance';

$GLOBALS["lang"]['Performed'] = 'Performed';

$GLOBALS["lang"]['Permission'] = 'Permission';

$GLOBALS["lang"]['Permission Required'] = 'Permission Required';

$GLOBALS["lang"]['permissions'] = 'Permissions';

$GLOBALS["lang"]['Permissions'] = 'Permissions';

$GLOBALS["lang"]['Persian'] = 'Persian';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

$GLOBALS["lang"]['Personal area network'] = 'Personal area network';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Philippines';

$GLOBALS["lang"]['phone'] = 'Phone';

$GLOBALS["lang"]['Phone'] = 'Phone';

$GLOBALS["lang"]['Physical CPUs'] = 'Physical CPUs';

$GLOBALS["lang"]['physical_count'] = 'Physical Count';

$GLOBALS["lang"]['Physical Count'] = 'Physical Count';

$GLOBALS["lang"]['physical_depth'] = 'Physical Depth';

$GLOBALS["lang"]['Physical Depth'] = 'Physical Depth';

$GLOBALS["lang"]['physical_height'] = 'Physical Height';

$GLOBALS["lang"]['Physical Height'] = 'Physical Height';

$GLOBALS["lang"]['physical_width'] = 'Physical Width';

$GLOBALS["lang"]['Physical Width'] = 'Physical Width';

$GLOBALS["lang"]['picture'] = 'Picture';

$GLOBALS["lang"]['Picture'] = 'Picture';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie charts must return name or my_name, description or my_description and count.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping Target';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn Islands';

$GLOBALS["lang"]['placement'] = 'Placement';

$GLOBALS["lang"]['Placement'] = 'Placement';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Plan and conduct internal audits';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Please have an Open-AudIT administrator logon and upgrade the database.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Please log in and change these ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Please note that the select box will override the text input box.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Please see the FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Please send all three files to your support contact at Opmantek and describe your issue.';

$GLOBALS["lang"]['Please set using'] = 'Please set using';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Please visit the homepage at';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Poland';

$GLOBALS["lang"]['Policies'] = 'Policies';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Policies have exceptions.';

$GLOBALS["lang"]['policy'] = 'Policy';

$GLOBALS["lang"]['Policy'] = 'Policy';

$GLOBALS["lang"]['policy_id'] = 'Policy ID';

$GLOBALS["lang"]['Policy ID'] = 'Policy ID';

$GLOBALS["lang"]['Policy Result'] = 'Policy Result';

$GLOBALS["lang"]['Policy Results'] = 'Policy Results';

$GLOBALS["lang"]['Polish'] = 'Polish';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populate the with values provided below:';

$GLOBALS["lang"]['Populated by audit.'] = 'Populated by audit.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populated by discovery and audit.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populated dynamically.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populated from DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populated from SNMP discovery.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Populated from device audits.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populated from hostname.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populated from machine-id on Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populated from the IP for the default route or the IP detected in discovery.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populated from the hostname command.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populated with additional data from the external system, in a JSON representation.';

$GLOBALS["lang"]['port'] = 'Port';

$GLOBALS["lang"]['Port'] = 'Port';

$GLOBALS["lang"]['port_name'] = 'Port Name';

$GLOBALS["lang"]['Port Name'] = 'Port Name';

$GLOBALS["lang"]['port_number'] = 'Port Number';

$GLOBALS["lang"]['Port Number'] = 'Port Number';

$GLOBALS["lang"]['ports_in_order'] = 'Ports In Order';

$GLOBALS["lang"]['Ports In Order'] = 'Ports In Order';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop After';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop After';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, Portuguese Republic';

$GLOBALS["lang"]['Portuguese'] = 'Portuguese';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portuguese (Brazil)';

$GLOBALS["lang"]['position'] = 'Position';

$GLOBALS["lang"]['Position'] = 'Position';

$GLOBALS["lang"]['Post-Certification'] = 'Post-Certification';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'Power Circuit';

$GLOBALS["lang"]['Power Circuit'] = 'Power Circuit';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Predictable';

$GLOBALS["lang"]['Preferences'] = 'Preferences';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Prepare for recertification every 3 years';

$GLOBALS["lang"]['Prerequisites'] = 'Prerequisites';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Prerequisites and Tests';

$GLOBALS["lang"]['present'] = 'Present';

$GLOBALS["lang"]['Present'] = 'Present';

$GLOBALS["lang"]['previous_value'] = 'Previous Value';

$GLOBALS["lang"]['Previous Value'] = 'Previous Value';

$GLOBALS["lang"]['primary'] = 'Primary';

$GLOBALS["lang"]['Primary'] = 'Primary';

$GLOBALS["lang"]['Primary Key'] = 'Primary Key';

$GLOBALS["lang"]['print_queue'] = 'Print Queue';

$GLOBALS["lang"]['Print Queue'] = 'Print Queue';

$GLOBALS["lang"]['printer_color'] = 'Printer Color';

$GLOBALS["lang"]['Printer Color'] = 'Printer Color';

$GLOBALS["lang"]['printer_duplex'] = 'Printer Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Printer Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Printer Port Name';

$GLOBALS["lang"]['Printer Port Name'] = 'Printer Port Name';

$GLOBALS["lang"]['printer_shared'] = 'Printer Shared';

$GLOBALS["lang"]['Printer Shared'] = 'Printer Shared';

$GLOBALS["lang"]['printer_shared_name'] = 'Printer Shared Name';

$GLOBALS["lang"]['Printer Shared Name'] = 'Printer Shared Name';

$GLOBALS["lang"]['priority'] = 'Priority';

$GLOBALS["lang"]['Priority'] = 'Priority';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passphrase';

$GLOBALS["lang"]['Privacy Protocol'] = 'Privacy Protocol';

$GLOBALS["lang"]['privileges_required'] = 'Privileges Required';

$GLOBALS["lang"]['Privileges Required'] = 'Privileges Required';

$GLOBALS["lang"]['processor'] = 'Processor';

$GLOBALS["lang"]['Processor'] = 'Processor';

$GLOBALS["lang"]['processor_count'] = 'Processor Count';

$GLOBALS["lang"]['Processor Count'] = 'Processor Count';

$GLOBALS["lang"]['processor_slot_count'] = 'Processor Slot Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Processor Slot Count';

$GLOBALS["lang"]['processor_type'] = 'Processor Type';

$GLOBALS["lang"]['Processor Type'] = 'Processor Type';

$GLOBALS["lang"]['Processors'] = 'Processors';

$GLOBALS["lang"]['product_name'] = 'Product Name';

$GLOBALS["lang"]['Product Name'] = 'Product Name';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Product Name Match from CPE: ';

$GLOBALS["lang"]['products'] = 'Products';

$GLOBALS["lang"]['Products'] = 'Products';

$GLOBALS["lang"]['Professional'] = 'Professional';

$GLOBALS["lang"]['profile'] = 'Profile';

$GLOBALS["lang"]['Profile'] = 'Profile';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'Properties';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Proprietary. If you want to modify HighCharts you may require a';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Protects confidentiality, integrity, and availability of information';

$GLOBALS["lang"]['protocol'] = 'Protocol';

$GLOBALS["lang"]['Protocol'] = 'Protocol';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Provide a description and select and expires duration.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Provided you have the correct credentials, Device Seed Discovery works as follows';

$GLOBALS["lang"]['provider'] = 'Provider';

$GLOBALS["lang"]['Provider'] = 'Provider';

$GLOBALS["lang"]['published'] = 'Published';

$GLOBALS["lang"]['Published'] = 'Published';

$GLOBALS["lang"]['published_date'] = 'Published Date';

$GLOBALS["lang"]['Published Date'] = 'Published Date';

$GLOBALS["lang"]['publisher'] = 'Publisher';

$GLOBALS["lang"]['Publisher'] = 'Publisher';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Purchase';

$GLOBALS["lang"]['purchase_amount'] = 'Purchase Amount';

$GLOBALS["lang"]['Purchase Amount'] = 'Purchase Amount';

$GLOBALS["lang"]['purchase_cost_center'] = 'Purchase Cost Center';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Purchase Cost Center';

$GLOBALS["lang"]['purchase_count'] = 'Purchase Count';

$GLOBALS["lang"]['Purchase Count'] = 'Purchase Count';

$GLOBALS["lang"]['purchase_date'] = 'Purchase Date';

$GLOBALS["lang"]['Purchase Date'] = 'Purchase Date';

$GLOBALS["lang"]['purchase_invoice'] = 'Purchase Invoice';

$GLOBALS["lang"]['Purchase Invoice'] = 'Purchase Invoice';

$GLOBALS["lang"]['purchase_order'] = 'Purchase Order';

$GLOBALS["lang"]['Purchase Order'] = 'Purchase Order';

$GLOBALS["lang"]['purchase_order_number'] = 'Purchase Order Number';

$GLOBALS["lang"]['Purchase Order Number'] = 'Purchase Order Number';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Purchase Service Contract Number';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Purchase Service Contract Number';

$GLOBALS["lang"]['purchase_vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['purpose'] = 'Purpose';

$GLOBALS["lang"]['Purpose'] = 'Purpose';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Queries';

$GLOBALS["lang"]['Queries'] = 'Queries';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Queries for Groups should select only the';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Query this Active Directory attribute first to determine the users work unit.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Query this Active Directory attribute second to determine the users work unit.';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Items';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC for Active Directory and openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX Level';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX Profile';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack Devices';

$GLOBALS["lang"]['Rack Devices'] = 'Rack Devices';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management and Reporting';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Raw';

$GLOBALS["lang"]['Raw'] = 'Raw';

$GLOBALS["lang"]['read'] = 'Read';

$GLOBALS["lang"]['Read'] = 'Read';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Read our online documentation on the Open-AudIT Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Read through the log file at';

$GLOBALS["lang"]['Received'] = 'Received';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Recertification:</strong> Required every three years';

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Reduces risk of data breaches and cyber threats';

$GLOBALS["lang"]['references'] = 'References';

$GLOBALS["lang"]['References'] = 'References';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registered User';

$GLOBALS["lang"]['Registered User'] = 'Registered User';

$GLOBALS["lang"]['Rejected'] = 'Rejected';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Release';

$GLOBALS["lang"]['remediation'] = 'Remediation';

$GLOBALS["lang"]['Remediation'] = 'Remediation';

$GLOBALS["lang"]['Remote'] = 'Remote';

$GLOBALS["lang"]['remote_address'] = 'Remote Address';

$GLOBALS["lang"]['Remote Address'] = 'Remote Address';

$GLOBALS["lang"]['remote_port'] = 'Remote Port';

$GLOBALS["lang"]['Remote Port'] = 'Remote Port';

$GLOBALS["lang"]['Remove'] = 'Remove';

$GLOBALS["lang"]['Remove Exception'] = 'Remove Exception';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Repeat until you have a completely discovered and audited Windows PC.';

$GLOBALS["lang"]['Report'] = 'Report';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Report on your devices, networks and more';

$GLOBALS["lang"]['reportable'] = 'Reportable';

$GLOBALS["lang"]['Reportable'] = 'Reportable';

$GLOBALS["lang"]['Reports'] = 'Reports';

$GLOBALS["lang"]['request'] = 'Request';

$GLOBALS["lang"]['Request'] = 'Request';

$GLOBALS["lang"]['Request Method'] = 'Request Method';

$GLOBALS["lang"]['Request Vulnerability'] = 'Request Vulnerability';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Request a Specific CVE';

$GLOBALS["lang"]['requested'] = 'Requested';

$GLOBALS["lang"]['Requested'] = 'Requested';

$GLOBALS["lang"]['require_port'] = 'Require Port';

$GLOBALS["lang"]['Require Port'] = 'Require Port';

$GLOBALS["lang"]['Require an Open Port'] = 'Require an Open Port';

$GLOBALS["lang"]['Required'] = 'Required';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Required AWS user permissions';

$GLOBALS["lang"]['Required Fields'] = 'Required Fields';

$GLOBALS["lang"]['Reset'] = 'Reset';

$GLOBALS["lang"]['Reset All Data'] = 'Reset All Data';

$GLOBALS["lang"]['Reset to Default'] = 'Reset to Default';

$GLOBALS["lang"]['resource'] = 'Resource';

$GLOBALS["lang"]['Resource'] = 'Resource';

$GLOBALS["lang"]['Resource Name'] = 'Resource Name';

$GLOBALS["lang"]['Resources'] = 'Resources';

$GLOBALS["lang"]['response'] = 'Response';

$GLOBALS["lang"]['Response'] = 'Response';

$GLOBALS["lang"]['responsibility'] = 'Responsibility';

$GLOBALS["lang"]['Responsibility'] = 'Responsibility';

$GLOBALS["lang"]['Restore my Licenses'] = 'Restore my Licenses';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrict to Private';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrict to Subnet';

$GLOBALS["lang"]['result'] = 'Result';

$GLOBALS["lang"]['Result'] = 'Result';

$GLOBALS["lang"]['Resulting Function'] = 'Resulting Function';

$GLOBALS["lang"]['Results'] = 'Results';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Retrieve a list of devices in the';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Retrieve a list of devices with OS Name like Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Retrieve all details about the device with id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Retrieve all devices running Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Retrieve all devices with the standard columns';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Retrieve the first 10 devices running Windows ordered by hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Retrieve the properties id, ip, hostname, domain, type from all devices';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved Name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Retrieving a List of Credentials';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Retrieving or Creating';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Return a list of all Modules installed on Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Return an individual device\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Returns a list of {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Returns a {collection} details.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Review current practices against ISO 27001 requirements';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risk Assesment Result';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risk Assesment Result';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Risk Assessment & Treatment';

$GLOBALS["lang"]['Risk Management'] = 'Risk Management';

$GLOBALS["lang"]['Role'] = 'Role';

$GLOBALS["lang"]['roles'] = 'Roles';

$GLOBALS["lang"]['Roles'] = 'Roles';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.';

$GLOBALS["lang"]['Romania'] = 'Romania';

$GLOBALS["lang"]['Romanian'] = 'Romanian';

$GLOBALS["lang"]['Room'] = 'Room';

$GLOBALS["lang"]['route'] = 'Route';

$GLOBALS["lang"]['Route'] = 'Route';

$GLOBALS["lang"]['Row'] = 'Row';

$GLOBALS["lang"]['Row Count'] = 'Row Count';

$GLOBALS["lang"]['row_position'] = 'Row Position';

$GLOBALS["lang"]['Row Position'] = 'Row Position';

$GLOBALS["lang"]['Rows'] = 'Rows';

$GLOBALS["lang"]['ru_height'] = 'Ru Height';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Rule Group';

$GLOBALS["lang"]['Rule Group'] = 'Rule Group';

$GLOBALS["lang"]['rules'] = 'Rules';

$GLOBALS["lang"]['Rules'] = 'Rules';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).';

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery on Devices';

$GLOBALS["lang"]['Run Your Discovery'] = 'Run Your Discovery';

$GLOBALS["lang"]['Run a Command'] = 'Run a Command';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Run a discovery and find out <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.';

$GLOBALS["lang"]['Run this Command'] = 'Run this Command';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Running';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Running Open-AudIT Apache Service Under Windows';

$GLOBALS["lang"]['Russian'] = 'Russian';

$GLOBALS["lang"]['Russian Federation'] = 'Russian Federation';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx Level';

$GLOBALS["lang"]['Rx Level'] = 'Rx Level';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profile';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profile';

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Details';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation Statements';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL not containing this condition will result in the widget failing to be executed.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Key';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts and Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre and Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent and the Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome and Principe';

$GLOBALS["lang"]['Saturday'] = 'Saturday';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudi Arabia';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).';

$GLOBALS["lang"]['Save as Default'] = 'Save as Default';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Save the downloaded file.';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Scan Options';

$GLOBALS["lang"]['Scan Options'] = 'Scan Options';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan Options ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan the Nmap top number of TCP ports.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan the Nmap top number of UDP ports.';

$GLOBALS["lang"]['schedule'] = 'Schedule';

$GLOBALS["lang"]['Schedule'] = 'Schedule';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - discovery, reporting &amp; more';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are';

$GLOBALS["lang"]['script_timeout'] = 'Script Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script Timeout';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'Search';

$GLOBALS["lang"]['Search For a Device'] = 'Search For a Device';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Searching Using DataTables';

$GLOBALS["lang"]['Second'] = 'Second';

$GLOBALS["lang"]['secondary'] = 'Secondary';

$GLOBALS["lang"]['Secondary'] = 'Secondary';

$GLOBALS["lang"]['Secondary Text'] = 'Secondary Text';

$GLOBALS["lang"]['Secret Key'] = 'Secret Key';

$GLOBALS["lang"]['section'] = 'Section';

$GLOBALS["lang"]['Section'] = 'Section';

$GLOBALS["lang"]['secure'] = 'Secure';

$GLOBALS["lang"]['Secure'] = 'Secure';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Security Content Automation Protocol';

$GLOBALS["lang"]['Security Level'] = 'Security Level';

$GLOBALS["lang"]['Security Name'] = 'Security Name';

$GLOBALS["lang"]['Security Status'] = 'Security Status';

$GLOBALS["lang"]['security_zone'] = 'Security Zone';

$GLOBALS["lang"]['Security Zone'] = 'Security Zone';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.';

$GLOBALS["lang"]['See our page on enabling'] = 'See our page on enabling';

$GLOBALS["lang"]['Seed Discoveries'] = 'Seed Discoveries';

$GLOBALS["lang"]['seed_ip'] = 'Seed IP';

$GLOBALS["lang"]['Seed IP'] = 'Seed IP';

$GLOBALS["lang"]['seed_ping'] = 'Seed Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Seed Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Select'] = 'Select';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Select Admin -> Tasks -> Create Task from the menu.';

$GLOBALS["lang"]['Select All'] = 'Select All';

$GLOBALS["lang"]['Select All Devices'] = 'Select All Devices';

$GLOBALS["lang"]['select_external_attribute'] = 'Select External Attribute';

$GLOBALS["lang"]['Select External Attribute'] = 'Select External Attribute';

$GLOBALS["lang"]['select_external_count'] = 'Select External Count';

$GLOBALS["lang"]['Select External Count'] = 'Select External Count';

$GLOBALS["lang"]['select_external_type'] = 'Select External Type';

$GLOBALS["lang"]['Select External Type'] = 'Select External Type';

$GLOBALS["lang"]['select_external_value'] = 'Select External Value';

$GLOBALS["lang"]['Select External Value'] = 'Select External Value';

$GLOBALS["lang"]['select_internal_attribute'] = 'Select Internal Attribute';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Select Internal Attribute';

$GLOBALS["lang"]['select_internal_count'] = 'Select Internal Count';

$GLOBALS["lang"]['Select Internal Count'] = 'Select Internal Count';

$GLOBALS["lang"]['select_internal_type'] = 'Select Internal Type';

$GLOBALS["lang"]['Select Internal Type'] = 'Select Internal Type';

$GLOBALS["lang"]['select_internal_value'] = 'Select Internal Value';

$GLOBALS["lang"]['Select Internal Value'] = 'Select Internal Value';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Select Menu -> Manage -> Baselines -> List Baselines.';

$GLOBALS["lang"]['Select a Table'] = 'Select a Table';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Select an accredited certification body';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Select and apply appropriate controls (Annex A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Select the <i>This Account</i> checkbox and provide the account name and password.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Select the Start menu and type <i>services<.i>. Click the Services icon.';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Select the type of Auth Menthod to create and input the relevant details.';

$GLOBALS["lang"]['Self Delete'] = 'Self Delete';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Sensitivity';

$GLOBALS["lang"]['Sensitivity'] = 'Sensitivity';

$GLOBALS["lang"]['September'] = 'September';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'Series';

$GLOBALS["lang"]['Series'] = 'Series';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'Server ID';

$GLOBALS["lang"]['Server ID'] = 'Server ID';

$GLOBALS["lang"]['Server Is'] = 'Server Is';

$GLOBALS["lang"]['server_item'] = 'Server Item';

$GLOBALS["lang"]['Server Item'] = 'Server Item';

$GLOBALS["lang"]['Server Status'] = 'Server Status';

$GLOBALS["lang"]['Servers'] = 'Servers';

$GLOBALS["lang"]['Servers Only'] = 'Servers Only';

$GLOBALS["lang"]['service'] = 'Service';

$GLOBALS["lang"]['Service'] = 'Service';

$GLOBALS["lang"]['service_identifier'] = 'Service Identifier';

$GLOBALS["lang"]['Service Identifier'] = 'Service Identifier';

$GLOBALS["lang"]['service_level_a'] = 'Service Level A';

$GLOBALS["lang"]['Service Level A'] = 'Service Level A';

$GLOBALS["lang"]['service_level_b'] = 'Service Level B';

$GLOBALS["lang"]['Service Level B'] = 'Service Level B';

$GLOBALS["lang"]['service_network'] = 'Service Network';

$GLOBALS["lang"]['Service Network'] = 'Service Network';

$GLOBALS["lang"]['service_number'] = 'Service Number';

$GLOBALS["lang"]['Service Number'] = 'Service Number';

$GLOBALS["lang"]['service_pack'] = 'Service Pack';

$GLOBALS["lang"]['Service Pack'] = 'Service Pack';

$GLOBALS["lang"]['service_plan'] = 'Service Plan';

$GLOBALS["lang"]['Service Plan'] = 'Service Plan';

$GLOBALS["lang"]['service_provider'] = 'Service Provider';

$GLOBALS["lang"]['Service Provider'] = 'Service Provider';

$GLOBALS["lang"]['service_tag'] = 'Service Tag';

$GLOBALS["lang"]['Service Tag'] = 'Service Tag';

$GLOBALS["lang"]['service_type'] = 'Service Type';

$GLOBALS["lang"]['Service Type'] = 'Service Type';

$GLOBALS["lang"]['Service Under Windows'] = 'Service Under Windows';

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set By';

$GLOBALS["lang"]['Set By'] = 'Set By';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Set by the Discovery function - do not normally set this manually.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Set by the audit_domain or discover_domain scripts. Do not set.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Set the external text to capitalized version of the internal data.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Set the external text to lowercase.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Set the external text to uppercase.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Set the size (normal or compact) of the tables on the List screens.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.';

$GLOBALS["lang"]['severity'] = 'Severity';

$GLOBALS["lang"]['Severity'] = 'Severity';

$GLOBALS["lang"]['severity_text'] = 'Severity Text';

$GLOBALS["lang"]['Severity Text'] = 'Severity Text';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelles';

$GLOBALS["lang"]['share'] = 'Share';

$GLOBALS["lang"]['Share'] = 'Share';

$GLOBALS["lang"]['Share Name'] = 'Share Name';

$GLOBALS["lang"]['shared'] = 'Shared';

$GLOBALS["lang"]['Shared'] = 'Shared';

$GLOBALS["lang"]['shared_name'] = 'Shared Name';

$GLOBALS["lang"]['Shared Name'] = 'Shared Name';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Ship Date';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shipped are a set of default items. These can be found by going to menu';

$GLOBALS["lang"]['short'] = 'Short';

$GLOBALS["lang"]['Short'] = 'Short';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Should I remove all non-current data from this device?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Should this vendor be used when retrieving vulnerabilities from FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Should we add devices from the remote service, locally.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Should we apply this license to the selected Org as well as the Orgs children?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Should we audit a SAN if the management software is detected.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Should we audit mount points.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Should we audit netstat ports (yes, no, servers only).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Should we audit the installed software.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Should we convert the hostname to lowercase.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Should we create a file based on the audit result.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Should we expose this group in the web interface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Should we expose this query in the list of reports under the Report menu in the web interface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Should we expose this query in the list of reports under the Reports menu in the web interface.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Should we hide the audit script window when executing.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Should we ignore an invalid or self signed SSL certificate and submit the result anyway.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Should we install Open-Scap on the target machine.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Should we match a device based mac address even if its a known likely duplicate from VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Should we match a device based on its DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Should we match a device based on its DNS hostname.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Should we match a device based on its UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Should we match a device based on its dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Should we match a device based on its fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Should we match a device based on its hostname and UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Should we match a device based on its hostname and dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Should we match a device based on its hostname and serial.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Should we match a device based on its ip if we have an existing device with no data.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Should we match a device based on its ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Should we match a device based on its mac address.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Should we match a device based on its serial and type.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Should we match a device based on its serial number.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Should we match a device based only on its SNMP sysName and serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Should we match a device based only on its SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Should we match a device based only on its hostname.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Should we populate the external system from our local devices.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Should we retrieve all DNS names';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Should we run an audit and submit it (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Should we test for SNMP using UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Should we test for SSH using TCP port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Should we test for WMI using TCP port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Should we uninstall the agent (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Should we use the system or user level proxy to submit the audit result.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.';

$GLOBALS["lang"]['Show All'] = 'Show All';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapore';

$GLOBALS["lang"]['Site A'] = 'Site A';

$GLOBALS["lang"]['Site B'] = 'Site B';

$GLOBALS["lang"]['site_hours_a'] = 'Site Hours A';

$GLOBALS["lang"]['Site Hours A'] = 'Site Hours A';

$GLOBALS["lang"]['site_hours_b'] = 'Site Hours B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Hours B';

$GLOBALS["lang"]['size'] = 'Size';

$GLOBALS["lang"]['Size'] = 'Size';

$GLOBALS["lang"]['slaves'] = 'Slaves';

$GLOBALS["lang"]['Slaves'] = 'Slaves';

$GLOBALS["lang"]['Slovak'] = 'Slovak';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakia (Slovak Republic)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

$GLOBALS["lang"]['Slovenian'] = 'Slovenian';

$GLOBALS["lang"]['Smart Status'] = 'Smart Status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Found Last 7 Days';

$GLOBALS["lang"]['Software Found Today'] = 'Software Found Today';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software Found Yesterday';

$GLOBALS["lang"]['software_key'] = 'Software Key';

$GLOBALS["lang"]['Software Key'] = 'Software Key';

$GLOBALS["lang"]['Software License Reporting'] = 'Software License Reporting';

$GLOBALS["lang"]['software_name'] = 'Software Name';

$GLOBALS["lang"]['Software Name'] = 'Software Name';

$GLOBALS["lang"]['Software Policies'] = 'Software Policies';

$GLOBALS["lang"]['software_revision'] = 'Software Revision';

$GLOBALS["lang"]['Software Revision'] = 'Software Revision';

$GLOBALS["lang"]['software_version'] = 'Software Version';

$GLOBALS["lang"]['Software Version'] = 'Software Version';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Solomon Islands';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Somali Republic';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Some collections can be executed - queries, etc - see below.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.';

$GLOBALS["lang"]['Sort'] = 'Sort';

$GLOBALS["lang"]['sound'] = 'Sound';

$GLOBALS["lang"]['Sound'] = 'Sound';

$GLOBALS["lang"]['source'] = 'Source';

$GLOBALS["lang"]['Source'] = 'Source';

$GLOBALS["lang"]['South Africa'] = 'South Africa';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'South Georgia and the South Sandwich Islands';

$GLOBALS["lang"]['Spain'] = 'Spain';

$GLOBALS["lang"]['Spanish'] = 'Spanish';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specific to Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specific to OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.';

$GLOBALS["lang"]['speed'] = 'Speed';

$GLOBALS["lang"]['Speed'] = 'Speed';

$GLOBALS["lang"]['speed_down_a'] = 'Speed Down A';

$GLOBALS["lang"]['Speed Down A'] = 'Speed Down A';

$GLOBALS["lang"]['speed_down_b'] = 'Speed Down B';

$GLOBALS["lang"]['Speed Down B'] = 'Speed Down B';

$GLOBALS["lang"]['speed_up_a'] = 'Speed Up A';

$GLOBALS["lang"]['Speed Up A'] = 'Speed Up A';

$GLOBALS["lang"]['speed_up_b'] = 'Speed Up B';

$GLOBALS["lang"]['Speed Up B'] = 'Speed Up B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Stage 1: Documentation review';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Stage 2: Implementation and effectiveness review';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Standard';

$GLOBALS["lang"]['standard_id'] = 'Standard ID';

$GLOBALS["lang"]['Standard ID'] = 'Standard ID';

$GLOBALS["lang"]['standards'] = 'Standards';

$GLOBALS["lang"]['Standards'] = 'Standards';

$GLOBALS["lang"]['standards_policies'] = 'Standards Policies';

$GLOBALS["lang"]['Standards Policies'] = 'Standards Policies';

$GLOBALS["lang"]['standards_results'] = 'Standards Results';

$GLOBALS["lang"]['Standards Results'] = 'Standards Results';

$GLOBALS["lang"]['start_date'] = 'Start Date';

$GLOBALS["lang"]['Start Date'] = 'Start Date';

$GLOBALS["lang"]['start_mode'] = 'Start Mode';

$GLOBALS["lang"]['Start Mode'] = 'Start Mode';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Start a web browser and go to';

$GLOBALS["lang"]['started_date'] = 'Started Date';

$GLOBALS["lang"]['Started Date'] = 'Started Date';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,';

$GLOBALS["lang"]['Starts With'] = 'Starts With';

$GLOBALS["lang"]['state'] = 'State';

$GLOBALS["lang"]['State'] = 'State';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Storage';

$GLOBALS["lang"]['storage_count'] = 'Storage Count';

$GLOBALS["lang"]['Storage Count'] = 'Storage Count';

$GLOBALS["lang"]['Storage area network'] = 'Storage area network';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Network';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Sub Type';

$GLOBALS["lang"]['Sub Type'] = 'Sub Type';

$GLOBALS["lang"]['subject_key_ident'] = 'Subject Key Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Subject Key Ident';

$GLOBALS["lang"]['Submit'] = 'Submit';

$GLOBALS["lang"]['Submit Online'] = 'Submit Online';

$GLOBALS["lang"]['Submitted From'] = 'Submitted From';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Discoveries';

$GLOBALS["lang"]['Subscription ID'] = 'Subscription ID';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Success';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Password';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (optional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Summaries';

$GLOBALS["lang"]['Summaries'] = 'Summaries';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Summaries take the same arguments as Queries.';

$GLOBALS["lang"]['Summary'] = 'Summary';

$GLOBALS["lang"]['Sunday'] = 'Sunday';

$GLOBALS["lang"]['supplier'] = 'Supplier';

$GLOBALS["lang"]['Supplier'] = 'Supplier';

$GLOBALS["lang"]['Support'] = 'Support';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Supports compliance with legal and regulatory requirements';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Surveillance Audits:</strong> Annual audits to maintain certification';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Sweden';

$GLOBALS["lang"]['Swedish'] = 'Swedish';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Device ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Device ID';

$GLOBALS["lang"]['switch_port'] = 'Switch Port';

$GLOBALS["lang"]['Switch Port'] = 'Switch Port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Switzerland, Swiss Confederation';

$GLOBALS["lang"]['Symptom'] = 'Symptom';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Syrian Arab Republic';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'SysLocation';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'System Component';

$GLOBALS["lang"]['System Component'] = 'System Component';

$GLOBALS["lang"]['System-Area Network'] = 'System-Area Network';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX Level';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'TX Profile';

$GLOBALS["lang"]['Table'] = 'Table';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Take note of all output and action each item as appropriate.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Target Computer';

$GLOBALS["lang"]['task'] = 'Task';

$GLOBALS["lang"]['Task'] = 'Task';

$GLOBALS["lang"]['tasks'] = 'Tasks';

$GLOBALS["lang"]['Tasks'] = 'Tasks';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Technical Details';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'Tenant ID';

$GLOBALS["lang"]['Tennant ID'] = 'Tennant ID';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['Test Email'] = 'Test Email';

$GLOBALS["lang"]['test_minutes'] = 'Test Minutes';

$GLOBALS["lang"]['Test Minutes'] = 'Test Minutes';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Tests';

$GLOBALS["lang"]['Tests'] = 'Tests';

$GLOBALS["lang"]['Text'] = 'Text';

$GLOBALS["lang"]['Thai'] = 'Thai';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Thank you for starting your journey with the best discovery and inventory tool around.';

$GLOBALS["lang"]['Thanks to'] = 'Thanks to';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Thats it! You have just edited the attributes of as many devices as you need to.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'The Active Directory domain to retrieve a list of subnets from.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'The Active Directory server to retrieve a list of subnets from.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'The Applications endpoint allows you to define an application which you can then associate to a device (or devices).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'The CVE has been updated after initial analysis. NVD enrichment data may have been revised.';

$GLOBALS["lang"]['The CVE identifier.'] = 'The CVE identifier.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'The Cloud that owns this item. Links to <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.';

$GLOBALS["lang"]['The Elevated User query'] = 'The Elevated User query';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.';

$GLOBALS["lang"]['The FROM'] = 'The FROM';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'The Group used to run the Baseline. Links to <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'The ID from the imported benchmark policy.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'The ID of the associated device (if any). Links to <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'The ID of the associated discovery. Linked to <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'The ID of the item of the associated type.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'The ID of this orgs parent org. Linked to <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'The ID provided by the provider.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'The ID retrieved from a Cloud discovery.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'The IP address of this collector used to communicate with the server.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'The IP of the device to start a seed discovery with.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'The IP of the external interface.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'The IP of the internal interface.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'The ISO/IEC 27001 certification process and its key elements.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'The ISP or Telco providing this link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'The JSON record from Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'The JSON record from the NVD feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'The LDAP OU of this user (if LDAP is used).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'The LDAP server was connected to and the user credentials accepted for bind.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'The Location that contains this network. Links to <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'The NVD assigned base status.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.';

$GLOBALS["lang"]['The Network to Discover'] = 'The Network to Discover';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'The Nmap timing preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'The Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'The Open-AudIT server code was exeucted within this file.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'The Open-AudIT server code was exeucted within this function.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'The Process Identifier of the running associated discovery.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'The RU positon of the top of this device.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting';

$GLOBALS["lang"]['The SELECT'] = 'The SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'The SELECT section of your SQL must contain fully qualified columns and specify certain columns.';

$GLOBALS["lang"]['The SNMP community string.'] = 'The SNMP community string.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'The SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'The SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'The SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'The SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'The SNMP v3 Security Level.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'The SNMP v3 Security Name.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'The SNMPv3 context Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'The SNMPv3 context Name (optional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'The SQL query is essentially broken into three parts.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.';

$GLOBALS["lang"]['The URL of the external system.'] = 'The URL of the external system.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'The URL the audit scripts should submit their result to.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'The User endpoint allows you to manage user accounts within Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'The WHERE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'The WHERE section of your SQL <em>must</em> contain';

$GLOBALS["lang"]['The Windows'] = 'The Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'The Windows log may say the following';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'The account must have a password; WMI does not allow blank passwords.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'The actual full name of this user.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'The address of the Open-AudIT server submit page.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'The administrator supplied credentials that were successfully used to bind to LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'The agent should download a fresh copy of the audit script, run it and submit the result to the server.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'The associated baseline. Links to <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'The associated discovery (if required). Links to <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'The attribute to test (from the <code>devices</code> table).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'The attribute to test (must match an external field name from below).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'The attributes for discovery scan options are as below.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'The audit script upon which to base your customisations.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'The audit script will use the files[ ] array and retrieve the file details.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'The base path from which to search for Users.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'The benchmark type.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'The building the rack is located in.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'The calculated number of devices to be created externally.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'The calculated number of devices to be created in Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'The collectors internal IP used when it runs a discovery.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'The command executed upon the target device or Open-AudIT server code executed during discovery.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'The credentials supplied by the user have failed.';

$GLOBALS["lang"]['The credentials username.'] = 'The credentials username.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'The current date and time in the format: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'The current date in Y-m-d format.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'The current status of the Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'The current status of the discovery.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'The database version and web version are inconsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'The date of license expiration.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'The date/time when this result was created.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'The day of the month when this task should execute (* for every day).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'The day of the week when this task should execute (* for every day).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'The debug level (will output to command prompt window). Lower means less output with 0 being no output.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'The default discovery scan option is the UltraFast set.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'The default language assigned to any user created by this method.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'The device must respond to an Nmap ping before it is considered online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'The device within Open-AudIT. Links to <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'The direct link for the script is';

$GLOBALS["lang"]['The email address of the reciever'] = 'The email address of the reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'The entire associated baseline this result is from.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'The externally referenced location ID. Usually populated by Cloud audits.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'The first time that Open-AudIT retrieved details of this device.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'The floor the rack is located on.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'The foreign table to reference. Should be one of: devices, locations, orgs or queries.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'The format of your data should be in the form';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'The format used for the output to be emailed.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'The group of devices on which the baseline was run against.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'The group that provides a list of devices for the integration. Links to <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'The hour of the day when this task should execute (* for every hour).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'The id of the linked device. Links to <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'The identifier column (integer) in the database (read only).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'The importance of this baseline (not used yet).';

$GLOBALS["lang"]['The integer of severity.'] = 'The integer of severity.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'The internal value, reformatted in this format.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'The ip address of the Auth method.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'The language to translate the web interface into for the user.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'The last date and time this item was executed (read only).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'The last time that Open-AudIT retrieved details of this device.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'The last time this benchmarks was executed.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'The last time this integration was run.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'The license endpoint allows you to track the number of licenses found on your devices.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'The line number assigned by the provider to the line at this end of the connection.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'The location the rack is located in. Links to <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'The locations address.';

$GLOBALS["lang"]['The locations area.'] = 'The locations area.';

$GLOBALS["lang"]['The locations city.'] = 'The locations city.';

$GLOBALS["lang"]['The locations country.'] = 'The locations country.';

$GLOBALS["lang"]['The locations district.'] = 'The locations district.';

$GLOBALS["lang"]['The locations latitude.'] = 'The locations latitude.';

$GLOBALS["lang"]['The locations level.'] = 'The locations level.';

$GLOBALS["lang"]['The locations longitude.'] = 'The locations longitude.';

$GLOBALS["lang"]['The locations phone.'] = 'The locations phone.';

$GLOBALS["lang"]['The locations postcode.'] = 'The locations postcode.';

$GLOBALS["lang"]['The locations region.'] = 'The locations region.';

$GLOBALS["lang"]['The locations room.'] = 'The locations room.';

$GLOBALS["lang"]['The locations state.'] = 'The locations state.';

$GLOBALS["lang"]['The locations suburb.'] = 'The locations suburb.';

$GLOBALS["lang"]['The locations suite.'] = 'The locations suite.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'The machine-default permission settings do not grant Local Activation permission for the COM Server application with';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'The maximum physical weight (in KGs) this rack can hold.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'The maximum total BTUs this rack is rated for.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'The minimum required attributes for attributes are';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'The minute of the hour when this task should execute (* for every minute).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'The month of the year when this task should execute (* for every month).';

$GLOBALS["lang"]['The name given to this item.'] = 'The name given to this item.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'The name given to this item. Ideally it should be unique.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'The name given to this user (used to login). Ideally it should be unique.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'The name of the associated cloud (if required).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'The name of the user who last changed or added this item (read only).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'The name provided by the provider.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'The network in the format 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'The network subnet to execute the discovery on.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'The number of RUs this device occupies.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'The number of associated locations. Links to <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'The number of associated networks. Links to <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'The number of critical severity vulnerabilities held by FirstWave (not in your database).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'The number of devices found by this discovery.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'The number of devices in the associated group.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'The number of devices in this cloud. Links to <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'The number of devices to limit this discovery to.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'The number of high severity vulnerabilities held by FirstWave (not in your database).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'The number of low severity vulnerabilities held by FirstWave (not in your database).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'The number of medium severity vulnerabilities held by FirstWave (not in your database).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'The number of purchased licenses.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'The number of seconds to try and communicate with the target IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'The number of vulnerabilities without a severity held by FirstWave (not in your database).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'The offset is the count of devices you wish to return data from.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'The only required permission / policy name (in our testing) is';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'The optional third column. NOTE: When type = traffic, this represents the green query id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'The order of information retrieval is snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'The orientation of this device.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'The password (if not using the user running the script).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'The password for the dn_account attribute.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'The password used to access the external system.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'The path to the file or directory.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'The path to the file or directory. Directories should end with a trailing slash.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'The physical depth (in CMs) of the rack.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'The physical height (in CMs) of the rack.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'The physical weight (in KGs) of the rack at present.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'The physical weight (in KGs) of the rack when empty.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'The physical width (in CMs) of the rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'The pod (if any) that this rack is part of.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'The power circuit this rack attaches to.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'The primary database table upon which to base this widget.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'The process identifier of this queue item.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'The process that was used last to retrieve details about the device';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'The query that provides a list of devices for the integration. Links to <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'The rack asset number.';

$GLOBALS["lang"]['The rack asset tag.'] = 'The rack asset tag.';

$GLOBALS["lang"]['The rack bar code.'] = 'The rack bar code.';

$GLOBALS["lang"]['The rack model.'] = 'The rack model.';

$GLOBALS["lang"]['The rack serial.'] = 'The rack serial.';

$GLOBALS["lang"]['The rack series.'] = 'The rack series.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'The rack this device is located in. Links to <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'The result of the command.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'The room the rack is located in.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'The row the rack is located in.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'The secret key used in conjunction with your AWS EC2 API key.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'The software end-of-life date.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'The software end-of-service-life date.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'The specific database column from the specified database table.';

$GLOBALS["lang"]['The specific database table.'] = 'The specific database table.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'The standard Nmap timing options. Previously set at T4 (aggressive).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.';

$GLOBALS["lang"]['The status of this integration'] = 'The status of this integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'The status of this queued item.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'The steps below outline the process.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'The target IP this log entry referers to (if any).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'The target computer to audit. \".\" means localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'The template for the link to be generated per result line.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'The text for the bottom of the chart in a line chart (only).';

$GLOBALS["lang"]['The text that is displayed.'] = 'The text that is displayed.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'The total BTU output by this rack.';

$GLOBALS["lang"]['The type of device.'] = 'The type of device.';

$GLOBALS["lang"]['The type of organisation.'] = 'The type of organisation.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'The type of rack (compute, power, network, etc).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'The type of the integration (usually named after the external system).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'The unique identifier of this server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'The user account this collector uses. Links to <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'The user is in the LDAP group that matches this Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'The user is in the LDAP group that matches this Role.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'The user is not in the LDAP group that matches this Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'The user is not in the LDAP group that matches this Role.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'The username (if not using the user running the script).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'The username used to access the external system.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'The users details were not retrieved from LDAP. Check the LDAP server logs.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'The users details were retrieved from LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'The users email address.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'The usual hours of operation at this site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'The value assigned to the item.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'The value that is stored for this particular item.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'The vendor name as per CPE entries.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'The vendor taken from the CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'The web directory on the host that Open-AudIT is installed (requires a trailing slash).';

$GLOBALS["lang"]['The widget at position '] = 'The widget at position ';

$GLOBALS["lang"]['The width of this device.'] = 'The width of this device.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Their OrgIDs and their descendants';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Their OrgIDs only';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Their OrgIDs, ascendants and descendants';

$GLOBALS["lang"]['Then'] = 'Then';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'There is absolutely no need to manually edit each individual device.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'These are only examples. You may need to adjust these attributes to suit your particular LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.';

$GLOBALS["lang"]['Thing'] = 'Thing';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Think of mail.domain1.com and mail.domain2.com - same hostname.';

$GLOBALS["lang"]['Third'] = 'Third';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'This CVE will be retrieved and overwrite the existing CVE if it exists.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'This Org has no AD group specified. Check the roles details within Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'This Role has no AD group specified. Check the roles details within Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'This code relys on the great work done by the';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'This collectors universally unique identifier.';

$GLOBALS["lang"]['This column is required by'] = 'This column is required by';

$GLOBALS["lang"]['This column is required by '] = 'This column is required by ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'This description is auto-populated and should ideally be left as-is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'This example creates a list of all Modules marked as';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'This example query retrieves a list of devices OVER 3 years old. The query uses today';

$GLOBALS["lang"]['This example uses'] = 'This example uses';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'This feature requires a Professional or an Enterprise license.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'This is also the way that PAExec works.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'This is the directory where we store any attachments to devices.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'This issue is under investigation.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'This item must match the value of the attribute selected or contains the ID of the query to be used.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'This item must match the value of the attribute selected.';

$GLOBALS["lang"]['This license expires on'] = 'This license expires on';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'This security permission can be modified using the Component Services administrative tool.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'This should be globally unique, but I have seen instances where it is not.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'This should be set to either 1 or the height of the rack.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.';

$GLOBALS["lang"]['This will auto-populate.'] = 'This will auto-populate.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'This will considerably slow the discovery scan.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'This will delete the current rows in the';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'This will permanently DELETE this license.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.';

$GLOBALS["lang"]['Thursday'] = 'Thursday';

$GLOBALS["lang"]['time_caption'] = 'Time Caption';

$GLOBALS["lang"]['Time Caption'] = 'Time Caption';

$GLOBALS["lang"]['time_daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time Daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time to Execute'] = 'Time to Execute';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (Seconds)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout per Target. Wait for X seconds for a target response.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Title';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'To audit a machine, you must have credentials and administrator level access.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'To create a new entry click the Create button in the upper right hand corner.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'To create a resource, you should POST the required data.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'To execute the Windows powershell script, open a command prompt as Administrator and use the following command';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'To execute the audit script, open a terminal and use the following command';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'To filter by a property value, use the property name. Operators that should precede the value are';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'To install Nmap on Windows, visit the Nmap page at';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'To make the change, just follow the steps below.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'To return a specific component item.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'To return all items for a compnent type for a specific device.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'To return all items for a component type. If you wanted all software you would use';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'To reverse sort, insert a minus, thus';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'To run the test script on the target Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'To sort by a database column, use';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditional Chinese';

$GLOBALS["lang"]['Traffic Light'] = 'Traffic Light';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad and Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Troubleshooting';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Troubleshooting LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.';

$GLOBALS["lang"]['Tuesday'] = 'Tuesday';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turkey';

$GLOBALS["lang"]['Turkish'] = 'Turkish';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks and Caicos Islands';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx Level';

$GLOBALS["lang"]['Tx Level'] = 'Tx Level';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profile';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profile';

$GLOBALS["lang"]['type'] = 'Type';

$GLOBALS["lang"]['Type'] = 'Type';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).';

$GLOBALS["lang"]['Types of Networks'] = 'Types of Networks';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrainian';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Stage 1 audit (documentation review)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergo Stage 2 audit (implementation review)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Undergoing Analysis';

$GLOBALS["lang"]['Unfiltered'] = 'Unfiltered';

$GLOBALS["lang"]['uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Uninstall the Agent';

$GLOBALS["lang"]['United Arab Emirates'] = 'United Arab Emirates';

$GLOBALS["lang"]['United Kingdom'] = 'United Kingdom';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'United States Minor Outlying Islands';

$GLOBALS["lang"]['United States Virgin Islands'] = 'United States Virgin Islands';

$GLOBALS["lang"]['United States of America'] = 'United States of America';

$GLOBALS["lang"]['Unknown'] = 'Unknown';

$GLOBALS["lang"]['unlock_pin'] = 'Unlock Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Unlock Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Unscheduled';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Unused as at 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Unused.';

$GLOBALS["lang"]['Update'] = 'Update';

$GLOBALS["lang"]['update_external_count'] = 'Update External Count';

$GLOBALS["lang"]['Update External Count'] = 'Update External Count';

$GLOBALS["lang"]['update_external_from_internal'] = 'Update External From Internal';

$GLOBALS["lang"]['Update External From Internal'] = 'Update External From Internal';

$GLOBALS["lang"]['update_internal_count'] = 'Update Internal Count';

$GLOBALS["lang"]['Update Internal Count'] = 'Update Internal Count';

$GLOBALS["lang"]['update_internal_from_external'] = 'Update Internal From External';

$GLOBALS["lang"]['Update Internal From External'] = 'Update Internal From External';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Update NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Update Open-AudIT Devices from ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Update Open-AudIT Devices from NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Update Vulnerabilities';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Update an attribute of a {collection} entry.';

$GLOBALS["lang"]['Update attributes'] = 'Update attributes';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Updated each time discovery has been executed with IPs detected to be responding.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Updated each time discovery has been executed with IPs that have been scanned by Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Updated each time discovery has been executed with devices we were able to audit.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Updated each time discovery has been executed with devices we were able to query.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Updated each time discovery has been executed.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Updated each time the discovery has been executed.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Updated each time the discovery has completed execution.';

$GLOBALS["lang"]['Updating'] = 'Updating';

$GLOBALS["lang"]['Upgrade'] = 'Upgrade';

$GLOBALS["lang"]['Upload an audit result file'] = 'Upload an audit result file';

$GLOBALS["lang"]['Upper Case'] = 'Upper Case';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Eastern Republic of';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Use';

$GLOBALS["lang"]['Use'] = 'Use';

$GLOBALS["lang"]['use_authentication'] = 'Use Authentication';

$GLOBALS["lang"]['Use Authentication'] = 'Use Authentication';

$GLOBALS["lang"]['use_authorisation'] = 'Use Authorisation';

$GLOBALS["lang"]['Use Authorisation'] = 'Use Authorisation';

$GLOBALS["lang"]['Use Proxy'] = 'Use Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Use Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Use Service Version Detection';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.';

$GLOBALS["lang"]['Use WMI'] = 'Use WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Use for Authentication';

$GLOBALS["lang"]['Use for Roles'] = 'Use for Roles';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.';

$GLOBALS["lang"]['used'] = 'Used';

$GLOBALS["lang"]['Used'] = 'Used';

$GLOBALS["lang"]['used_count'] = 'Used Count';

$GLOBALS["lang"]['Used Count'] = 'Used Count';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Used by OpenLDAP only.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Used internally when discovering a single device.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Used internally when discovering a single device. Links to <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Used with Integrations and FirstWave monitoring applications.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.';

$GLOBALS["lang"]['user'] = 'User';

$GLOBALS["lang"]['User'] = 'User';

$GLOBALS["lang"]['User DN'] = 'User DN';

$GLOBALS["lang"]['user_group'] = 'User Group';

$GLOBALS["lang"]['User Group'] = 'User Group';

$GLOBALS["lang"]['user_id'] = 'User ID';

$GLOBALS["lang"]['User ID'] = 'User ID';

$GLOBALS["lang"]['user_interaction'] = 'User Interaction';

$GLOBALS["lang"]['User Interaction'] = 'User Interaction';

$GLOBALS["lang"]['User Membership Attribute'] = 'User Membership Attribute';

$GLOBALS["lang"]['user_name'] = 'User Name';

$GLOBALS["lang"]['User Name'] = 'User Name';

$GLOBALS["lang"]['User Policies'] = 'User Policies';

$GLOBALS["lang"]['Username'] = 'Username';

$GLOBALS["lang"]['username'] = 'Username';

$GLOBALS["lang"]['users'] = 'Users';

$GLOBALS["lang"]['Users'] = 'Users';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Users, Roles and Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Uses the CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Using';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Using Entra for Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Using LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Using OKTA for Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Usually Mbs, from Location A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Usually Mbs, from Location B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Usually Mbs, to Location A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Usually Mbs, to Location B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Usually should be set to 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Valid From';

$GLOBALS["lang"]['Valid From'] = 'Valid From';

$GLOBALS["lang"]['valid_from_raw'] = 'Valid From Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Valid From Raw';

$GLOBALS["lang"]['valid_to'] = 'Valid To';

$GLOBALS["lang"]['Valid To'] = 'Valid To';

$GLOBALS["lang"]['valid_to_raw'] = 'Valid To Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Valid To Raw';

$GLOBALS["lang"]['Valid Values'] = 'Valid Values';

$GLOBALS["lang"]['value'] = 'Value';

$GLOBALS["lang"]['Value'] = 'Value';

$GLOBALS["lang"]['Value Types'] = 'Value Types';

$GLOBALS["lang"]['values'] = 'Values';

$GLOBALS["lang"]['Values'] = 'Values';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variable';

$GLOBALS["lang"]['Variable'] = 'Variable';

$GLOBALS["lang"]['Various'] = 'Various';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor Report'] = 'Vendor Report';

$GLOBALS["lang"]['vendors'] = 'Vendors';

$GLOBALS["lang"]['Vendors'] = 'Vendors';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'Version Padded';

$GLOBALS["lang"]['Version Padded'] = 'Version Padded';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamese';

$GLOBALS["lang"]['View'] = 'View';

$GLOBALS["lang"]['View All'] = 'View All';

$GLOBALS["lang"]['View Details'] = 'View Details';

$GLOBALS["lang"]['View Device'] = 'View Device';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['View Racks'] = 'View Racks';

$GLOBALS["lang"]['View the'] = 'View the';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.';

$GLOBALS["lang"]['View the release notes on the'] = 'View the release notes on the';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtual Private Network';

$GLOBALS["lang"]['Virtual private network'] = 'Virtual private network';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisation';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Visit our YouTube channel for instructional videos.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Device ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Device ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Name';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Name';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerabilities';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerabilities';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilities Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilities Cache';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnerabilities and Results';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.';

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Vulnerability Status';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.';

$GLOBALS["lang"]['WHERE'] = 'WHERE';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials Requirements';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Wait for it to complete, then paste in this next line to install the Agent.';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis and Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Want to know more?';

$GLOBALS["lang"]['Warning'] = 'Warning';

$GLOBALS["lang"]['warranty'] = 'Warranty';

$GLOBALS["lang"]['Warranty'] = 'Warranty';

$GLOBALS["lang"]['warranty_duration'] = 'Warranty Duration';

$GLOBALS["lang"]['Warranty Duration'] = 'Warranty Duration';

$GLOBALS["lang"]['warranty_expires'] = 'Warranty Expires';

$GLOBALS["lang"]['Warranty Expires'] = 'Warranty Expires';

$GLOBALS["lang"]['warranty_status'] = 'Warranty Status';

$GLOBALS["lang"]['Warranty Status'] = 'Warranty Status';

$GLOBALS["lang"]['warranty_type'] = 'Warranty Type';

$GLOBALS["lang"]['Warranty Type'] = 'Warranty Type';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'We also have our action items (which are executed in the order below):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'We have more detailed instructions on';

$GLOBALS["lang"]['We have tests for:'] = 'We have tests for:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'We hope you find Open-AudIT as useful as we do.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'We need some credentials to be able to effectively talk to the devices on your network.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Web Application Routes';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Website';

$GLOBALS["lang"]['Wednesday'] = 'Wednesday';

$GLOBALS["lang"]['weight'] = 'Weight';

$GLOBALS["lang"]['Weight'] = 'Weight';

$GLOBALS["lang"]['weight_current'] = 'Weight Current';

$GLOBALS["lang"]['Weight Current'] = 'Weight Current';

$GLOBALS["lang"]['weight_empty'] = 'Weight Empty';

$GLOBALS["lang"]['Weight Empty'] = 'Weight Empty';

$GLOBALS["lang"]['weight_max'] = 'Weight Max';

$GLOBALS["lang"]['Weight Max'] = 'Weight Max';

$GLOBALS["lang"]['Welcome'] = 'Welcome';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Welcome Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Welcome to';

$GLOBALS["lang"]['Western Sahara'] = 'Western Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'What Can I Expect if I Have no Credentials';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.';

$GLOBALS["lang"]['What do we send?'] = 'What do we send?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'What does this actually mean to you?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'What is the purpose of this rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'What is the type of this location. Allowable types held in <code>attributes</code> table.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'When combining devices, which system is the authoritative source for information.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'When complete, close the command window and you are done!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'When retrieve an external device, should we run discovery upon it?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'When this log was created.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'When this queue item started processing.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard';

$GLOBALS["lang"]['where'] = 'Where';

$GLOBALS["lang"]['Where'] = 'Where';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Where $x is a number. This many LDAP entries are in the DB and have been retrieved.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Where on the Device Details screen you would like to see this field appear.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Where the rack is in the row.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Whether user interaction is required (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Which OS this benchmark applies to.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Which network should we discover. This should be in the format of';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Which sub-menu should we display this query in.';

$GLOBALS["lang"]['Who made this rack.'] = 'Who made this rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Why Windows Server Only?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Why do we exclude this policy?';

$GLOBALS["lang"]['Wide Area Network'] = 'Wide Area Network';

$GLOBALS["lang"]['Wide area network'] = 'Wide area network';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Type';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Windows Packages';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows User Work Unit #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows User Work Unit #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe page on Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Wireless Local Area Network';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Working Credentials'] = 'Working Credentials';

$GLOBALS["lang"]['Wrap Up'] = 'Wrap Up';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Written in the PHP scripting language.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Yellow Query';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Yes';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.';

$GLOBALS["lang"]['You are running version'] = 'You are running version';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see';

$GLOBALS["lang"]['You can also'] = 'You can also';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'You can also see at the bottom of the page a table showing the devices the changes will be applied to.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'You can also specify properties using the below format.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'You can assign devices to a location automatically using';

$GLOBALS["lang"]['You can assign devices using custom'] = 'You can assign devices using custom';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'You can manually assign devices using';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'You can override this by providing the format option in the URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'You do not have the PHP MBString extension installed. This extension is required.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'You do not have the PHP SNMP extension installed. This extension is highly recommended.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'You may want to copy and paste this URL in an email to your staff.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'You might have noticed these match rules are for items that might not be globally unique. Some examples:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'You must delete your existing license before adding a new license.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'You should not include the edited_by and edited_date fields. These will be automatically set.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'You should only change the second sentence of text, the';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'You should use a header line containing the names of the columns you wish to populate, then your data lines below that.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'You should use only those tables that contain attributes you need. I usually use a left join. For example';

$GLOBALS["lang"]['You will need a'] = 'You will need a';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per';

$GLOBALS["lang"]['You will see a list of'] = 'You will see a list of';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Your AWS EC2 API key.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Your Google Compute credentials as JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Your Host is';

$GLOBALS["lang"]['Your Licenses'] = 'Your Licenses';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Your Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Your Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Your Microsoft Azure Subscription ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Your Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Your PHP version is';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Your SQL to select attributes that will populate this query.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Your SQL to select devices that will populate this group.';

$GLOBALS["lang"]['Your SSH key.'] = 'Your SSH key.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Your access credentials, as per that clouds native API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.';

$GLOBALS["lang"]['Your database platform is'] = 'Your database platform is';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Your description of the status of this connection (provisioned, retired, etc).';

$GLOBALS["lang"]['Your description of this item.'] = 'Your description of this item.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Your generic name for this piece of software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Your generic version for this piece of software';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email';

$GLOBALS["lang"]['Your web server is'] = 'Your web server is';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a String';

$GLOBALS["lang"]['active'] = 'active';

$GLOBALS["lang"]['active directory'] = 'active directory';

$GLOBALS["lang"]['active/active'] = 'active/active';

$GLOBALS["lang"]['active/passive'] = 'active/passive';

$GLOBALS["lang"]['advertisement'] = 'advertisement';

$GLOBALS["lang"]['alert'] = 'alert';

$GLOBALS["lang"]['all'] = 'all';

$GLOBALS["lang"]['allocated'] = 'allocated';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'an Integer';

$GLOBALS["lang"]['and'] = 'and';

$GLOBALS["lang"]['and / or'] = 'and / or';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'and a support ticket will be created and actioned.';

$GLOBALS["lang"]['and another'] = 'and another';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'and download the Latest Release self-installer. You may need to scroll down the page to find it.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.';

$GLOBALS["lang"]['and its current time is'] = 'and its current time is';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'and looks for a warranty expiration date prior to today.';

$GLOBALS["lang"]['and review what is possible.'] = 'and review what is possible.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'and the Sign-out redirect URI being';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'application';

$GLOBALS["lang"]['approved'] = 'approved';

$GLOBALS["lang"]['are required.'] = 'are required.';

$GLOBALS["lang"]['are used.'] = 'are used.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'as the reference point and filters out all virtual machines via a check of the system.serial field for VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'assuming working and client populated DNS';

$GLOBALS["lang"]['attribute'] = 'attribute';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'banned';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'blue';

$GLOBALS["lang"]['bottom'] = 'bottom';

$GLOBALS["lang"]['building'] = 'building';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.';

$GLOBALS["lang"]['changed'] = 'changed';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using ';

$GLOBALS["lang"]['cloud'] = 'cloud';

$GLOBALS["lang"]['code'] = 'code';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'collections and details pages is an icon to execute.';

$GLOBALS["lang"]['collector'] = 'collector';

$GLOBALS["lang"]['collectors'] = 'collectors';

$GLOBALS["lang"]['column'] = 'column';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'column. The';

$GLOBALS["lang"]['compute'] = 'compute';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'console';

$GLOBALS["lang"]['contains'] = 'contains';

$GLOBALS["lang"]['create'] = 'create';

$GLOBALS["lang"]['created'] = 'created';

$GLOBALS["lang"]['credentials'] = 'credentials';

$GLOBALS["lang"]['critical'] = 'critical';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'delegated';

$GLOBALS["lang"]['delete'] = 'delete';

$GLOBALS["lang"]['deleted'] = 'deleted';

$GLOBALS["lang"]['denied'] = 'denied';

$GLOBALS["lang"]['details'] = 'details';

$GLOBALS["lang"]['devices'] = 'devices';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

$GLOBALS["lang"]['discoveries'] = 'discoveries';

$GLOBALS["lang"]['documentation for further details.'] = 'documentation for further details.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'does <strong>not</strong> provide vulnerability reports for the following';

$GLOBALS["lang"]['does not equal'] = 'does not equal';

$GLOBALS["lang"]['emergency'] = 'emergency';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'equals';

$GLOBALS["lang"]['error'] = 'error';

$GLOBALS["lang"]['established'] = 'established';

$GLOBALS["lang"]['excluded'] = 'excluded';

$GLOBALS["lang"]['expired'] = 'expired';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.';

$GLOBALS["lang"]['fail'] = 'fail';

$GLOBALS["lang"]['false'] = 'false';

$GLOBALS["lang"]['file'] = 'file';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['first'] = 'first';

$GLOBALS["lang"]['fixed'] = 'fixed';

$GLOBALS["lang"]['floor'] = 'floor';

$GLOBALS["lang"]['for'] = 'for';

$GLOBALS["lang"]['for authentication'] = 'for authentication';

$GLOBALS["lang"]['for this information.'] = 'for this information.';

$GLOBALS["lang"]['from Audit Script Result'] = 'from Audit Script Result';

$GLOBALS["lang"]['from NMIS'] = 'from NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'from address LocalHost (Using LRPC) running in the application container';

$GLOBALS["lang"]['front'] = 'front';

$GLOBALS["lang"]['front-left'] = 'front-left';

$GLOBALS["lang"]['front-right'] = 'front-right';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'greater or equals';

$GLOBALS["lang"]['greater than'] = 'greater than';

$GLOBALS["lang"]['group'] = 'group';

$GLOBALS["lang"]['has not been set'] = 'has not been set';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'have a working reverse DNS resolvable IP to the target Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'have the ability to be executed. On the';

$GLOBALS["lang"]['head'] = 'head';

$GLOBALS["lang"]['here'] = 'here';

$GLOBALS["lang"]['high availability'] = 'high availability';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.';

$GLOBALS["lang"]['ignored'] = 'ignored';

$GLOBALS["lang"]['import the example device data'] = 'import the example device data';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'in Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'in Inputs can have the following values.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'in Outputs can have the following values.';

$GLOBALS["lang"]['inactive'] = 'inactive';

$GLOBALS["lang"]['incomplete'] = 'incomplete';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installer will test for the presence of Nmap in its standard install locations of';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), etc';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'is U.S. standard maintained by National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'is based upon';

$GLOBALS["lang"]['is licensed to'] = 'is licensed to';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).';

$GLOBALS["lang"]['is the link to the'] = 'is the link to the';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'key required to retrieve lat/long and display map. See';

$GLOBALS["lang"]['left'] = 'left';

$GLOBALS["lang"]['less or equals'] = 'less or equals';

$GLOBALS["lang"]['less than'] = 'less than';

$GLOBALS["lang"]['license'] = 'license';

$GLOBALS["lang"]['licenses'] = 'licenses';

$GLOBALS["lang"]['like'] = 'like';

$GLOBALS["lang"]['line'] = 'line';

$GLOBALS["lang"]['list'] = 'list';

$GLOBALS["lang"]['list View, using the Create button'] = 'list View, using the Create button';

$GLOBALS["lang"]['load balancing'] = 'load balancing';

$GLOBALS["lang"]['location'] = 'location';

$GLOBALS["lang"]['locations'] = 'locations';

$GLOBALS["lang"]['managed'] = 'managed';

$GLOBALS["lang"]['methods'] = 'methods';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'mount point';

$GLOBALS["lang"]['must'] = 'must';

$GLOBALS["lang"]['network'] = 'network';

$GLOBALS["lang"]['news'] = 'news';

$GLOBALS["lang"]['no'] = 'no';

$GLOBALS["lang"]['node'] = 'node';

$GLOBALS["lang"]['none'] = 'none';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'not applicable';

$GLOBALS["lang"]['not in'] = 'not in';

$GLOBALS["lang"]['not like'] = 'not like';

$GLOBALS["lang"]['notice'] = 'notice';

$GLOBALS["lang"]['notification'] = 'notification';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'on devices where';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimized';

$GLOBALS["lang"]['optionally '] = 'optionally ';

$GLOBALS["lang"]['or'] = 'or';

$GLOBALS["lang"]['or the GitHub page at'] = 'or the GitHub page at';

$GLOBALS["lang"]['other'] = 'other';

$GLOBALS["lang"]['package'] = 'package';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.';

$GLOBALS["lang"]['partition'] = 'partition';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'pending';

$GLOBALS["lang"]['performance'] = 'performance';

$GLOBALS["lang"]['performed'] = 'performed';

$GLOBALS["lang"]['permission'] = 'permission';

$GLOBALS["lang"]['permissions required per endpoint'] = 'permissions required per endpoint';

$GLOBALS["lang"]['pie'] = 'pie';

$GLOBALS["lang"]['planning'] = 'planning';

$GLOBALS["lang"]['predictable'] = 'predictable';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'rear';

$GLOBALS["lang"]['rear-left'] = 'rear-left';

$GLOBALS["lang"]['rear-right'] = 'rear-right';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'release';

$GLOBALS["lang"]['removed from display, but has been set'] = 'removed from display, but has been set';

$GLOBALS["lang"]['reserved'] = 'reserved';

$GLOBALS["lang"]['right'] = 'right';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'rights) you can click on the field value to edit it.';

$GLOBALS["lang"]['role'] = 'role';

$GLOBALS["lang"]['room'] = 'room';

$GLOBALS["lang"]['row'] = 'row';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'service failed to start due to the following error';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'so Open-AudIT knows to restrict your query to the appropriate Orgs.';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'starts with';

$GLOBALS["lang"]['storage'] = 'storage';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'table';

$GLOBALS["lang"]['table and insert the original rows.'] = 'table and insert the original rows.';

$GLOBALS["lang"]['team'] = 'team';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'then clicking on the details button for the table.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'then clicking on the details button for the table. Device details are stored in the';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

$GLOBALS["lang"]['to'] = 'to';

$GLOBALS["lang"]['to create an item of this type'] = 'to create an item of this type';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'to the URL, you will get the full database entry, including all component tables, of a given device.';

$GLOBALS["lang"]['to the user'] = 'to the user';

$GLOBALS["lang"]['top'] = 'top';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.';

$GLOBALS["lang"]['traffic'] = 'traffic';

$GLOBALS["lang"]['true'] = 'true';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'true or false (in JSON context)';

$GLOBALS["lang"]['unallocated'] = 'unallocated';

$GLOBALS["lang"]['unauthorised'] = 'unauthorised';

$GLOBALS["lang"]['unchanged'] = 'unchanged';

$GLOBALS["lang"]['unknown'] = 'unknown';

$GLOBALS["lang"]['unmanaged'] = 'unmanaged';

$GLOBALS["lang"]['unused'] = 'unused';

$GLOBALS["lang"]['update'] = 'update';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.';

$GLOBALS["lang"]['using the main menu items.'] = 'using the main menu items.';

$GLOBALS["lang"]['valid'] = 'valid';

$GLOBALS["lang"]['version'] = 'version';

$GLOBALS["lang"]['virtualisation'] = 'virtualisation';

$GLOBALS["lang"]['warning'] = 'warning';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'with Local and Remote access permissions set.';

$GLOBALS["lang"]['with devices::update permission.'] = 'with devices::update permission.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'with the Sign-On Redirect URI being';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).';

$GLOBALS["lang"]['yes'] = 'yes';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'you do not require a HighCharts license to use Firstwave products. License';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'you will assign any found devices to that Org or Location.';

$GLOBALS["lang"]['AF'] = 'AF';

$GLOBALS["lang"]['AX'] = 'AX';

$GLOBALS["lang"]['AL'] = 'AL';

$GLOBALS["lang"]['DZ'] = 'DZ';

$GLOBALS["lang"]['AS'] = 'AS';

$GLOBALS["lang"]['AD'] = 'AD';

$GLOBALS["lang"]['AO'] = 'AO';

$GLOBALS["lang"]['AI'] = 'AI';

$GLOBALS["lang"]['AQ'] = 'AQ';

$GLOBALS["lang"]['AG'] = 'AG';

$GLOBALS["lang"]['AR'] = 'AR';

$GLOBALS["lang"]['AM'] = 'AM';

$GLOBALS["lang"]['AW'] = 'AW';

$GLOBALS["lang"]['AU'] = 'AU';

$GLOBALS["lang"]['AT'] = 'AT';

$GLOBALS["lang"]['AZ'] = 'AZ';

$GLOBALS["lang"]['BS'] = 'BS';

$GLOBALS["lang"]['BH'] = 'BH';

$GLOBALS["lang"]['BD'] = 'BD';

$GLOBALS["lang"]['BB'] = 'BB';

$GLOBALS["lang"]['BY'] = 'BY';

$GLOBALS["lang"]['BE'] = 'BE';

$GLOBALS["lang"]['BZ'] = 'BZ';

$GLOBALS["lang"]['BJ'] = 'BJ';

$GLOBALS["lang"]['BM'] = 'BM';

$GLOBALS["lang"]['BT'] = 'BT';

$GLOBALS["lang"]['BO'] = 'BO';

$GLOBALS["lang"]['BA'] = 'BA';

$GLOBALS["lang"]['BW'] = 'BW';

$GLOBALS["lang"]['BV'] = 'BV';

$GLOBALS["lang"]['BR'] = 'BR';

$GLOBALS["lang"]['IO'] = 'IO';

$GLOBALS["lang"]['VG'] = 'VG';

$GLOBALS["lang"]['BN'] = 'BN';

$GLOBALS["lang"]['BG'] = 'BG';

$GLOBALS["lang"]['BF'] = 'BF';

$GLOBALS["lang"]['BI'] = 'BI';

$GLOBALS["lang"]['KH'] = 'KH';

$GLOBALS["lang"]['CM'] = 'CM';

$GLOBALS["lang"]['CA'] = 'CA';

$GLOBALS["lang"]['CV'] = 'CV';

$GLOBALS["lang"]['KY'] = 'KY';

$GLOBALS["lang"]['CF'] = 'CF';

$GLOBALS["lang"]['TD'] = 'TD';

$GLOBALS["lang"]['CL'] = 'CL';

$GLOBALS["lang"]['CN'] = 'CN';

$GLOBALS["lang"]['CX'] = 'CX';

$GLOBALS["lang"]['CC'] = 'CC';

$GLOBALS["lang"]['CO'] = 'CO';

$GLOBALS["lang"]['KM'] = 'KM';

$GLOBALS["lang"]['CD'] = 'CD';

$GLOBALS["lang"]['CG'] = 'CG';

$GLOBALS["lang"]['CK'] = 'CK';

$GLOBALS["lang"]['CR'] = 'CR';

$GLOBALS["lang"]['CI'] = 'CI';

$GLOBALS["lang"]['HR'] = 'HR';

$GLOBALS["lang"]['CU'] = 'CU';

$GLOBALS["lang"]['CY'] = 'CY';

$GLOBALS["lang"]['CZ'] = 'CZ';

$GLOBALS["lang"]['DK'] = 'DK';

$GLOBALS["lang"]['DJ'] = 'DJ';

$GLOBALS["lang"]['DM'] = 'DM';

$GLOBALS["lang"]['DO'] = 'DO';

$GLOBALS["lang"]['EC'] = 'EC';

$GLOBALS["lang"]['EG'] = 'EG';

$GLOBALS["lang"]['SV'] = 'SV';

$GLOBALS["lang"]['GQ'] = 'GQ';

$GLOBALS["lang"]['ER'] = 'ER';

$GLOBALS["lang"]['EE'] = 'EE';

$GLOBALS["lang"]['ET'] = 'ET';

$GLOBALS["lang"]['FO'] = 'FO';

$GLOBALS["lang"]['FK'] = 'FK';

$GLOBALS["lang"]['FJ'] = 'FJ';

$GLOBALS["lang"]['FI'] = 'FI';

$GLOBALS["lang"]['FR'] = 'FR';

$GLOBALS["lang"]['GF'] = 'GF';

$GLOBALS["lang"]['PF'] = 'PF';

$GLOBALS["lang"]['TF'] = 'TF';

$GLOBALS["lang"]['GA'] = 'GA';

$GLOBALS["lang"]['GM'] = 'GM';

$GLOBALS["lang"]['GE'] = 'GE';

$GLOBALS["lang"]['DE'] = 'DE';

$GLOBALS["lang"]['GH'] = 'GH';

$GLOBALS["lang"]['GI'] = 'GI';

$GLOBALS["lang"]['GR'] = 'GR';

$GLOBALS["lang"]['GL'] = 'GL';

$GLOBALS["lang"]['GD'] = 'GD';

$GLOBALS["lang"]['GP'] = 'GP';

$GLOBALS["lang"]['GU'] = 'GU';

$GLOBALS["lang"]['GT'] = 'GT';

$GLOBALS["lang"]['GG'] = 'GG';

$GLOBALS["lang"]['GN'] = 'GN';

$GLOBALS["lang"]['GW'] = 'GW';

$GLOBALS["lang"]['GY'] = 'GY';

$GLOBALS["lang"]['HT'] = 'HT';

$GLOBALS["lang"]['HM'] = 'HM';

$GLOBALS["lang"]['VA'] = 'VA';

$GLOBALS["lang"]['HN'] = 'HN';

$GLOBALS["lang"]['HK'] = 'HK';

$GLOBALS["lang"]['HU'] = 'HU';

$GLOBALS["lang"]['IS'] = 'IS';

$GLOBALS["lang"]['IN'] = 'IN';

$GLOBALS["lang"]['IR'] = 'IR';

$GLOBALS["lang"]['IQ'] = 'IQ';

$GLOBALS["lang"]['IE'] = 'IE';

$GLOBALS["lang"]['IM'] = 'IM';

$GLOBALS["lang"]['IL'] = 'IL';

$GLOBALS["lang"]['IT'] = 'IT';

$GLOBALS["lang"]['JM'] = 'JM';

$GLOBALS["lang"]['JP'] = 'JP';

$GLOBALS["lang"]['JE'] = 'JE';

$GLOBALS["lang"]['JO'] = 'JO';

$GLOBALS["lang"]['KZ'] = 'KZ';

$GLOBALS["lang"]['KE'] = 'KE';

$GLOBALS["lang"]['KI'] = 'KI';

$GLOBALS["lang"]['KP'] = 'KP';

$GLOBALS["lang"]['KR'] = 'KR';

$GLOBALS["lang"]['KW'] = 'KW';

$GLOBALS["lang"]['KG'] = 'KG';

$GLOBALS["lang"]['LA'] = 'LA';

$GLOBALS["lang"]['LV'] = 'LV';

$GLOBALS["lang"]['LB'] = 'LB';

$GLOBALS["lang"]['LS'] = 'LS';

$GLOBALS["lang"]['LR'] = 'LR';

$GLOBALS["lang"]['LY'] = 'LY';

$GLOBALS["lang"]['LI'] = 'LI';

$GLOBALS["lang"]['LT'] = 'LT';

$GLOBALS["lang"]['LU'] = 'LU';

$GLOBALS["lang"]['MO'] = 'MO';

$GLOBALS["lang"]['MK'] = 'MK';

$GLOBALS["lang"]['MG'] = 'MG';

$GLOBALS["lang"]['MW'] = 'MW';

$GLOBALS["lang"]['MY'] = 'MY';

$GLOBALS["lang"]['MV'] = 'MV';

$GLOBALS["lang"]['ML'] = 'ML';

$GLOBALS["lang"]['MT'] = 'MT';

$GLOBALS["lang"]['MH'] = 'MH';

$GLOBALS["lang"]['MQ'] = 'MQ';

$GLOBALS["lang"]['MR'] = 'MR';

$GLOBALS["lang"]['MU'] = 'MU';

$GLOBALS["lang"]['YT'] = 'YT';

$GLOBALS["lang"]['MX'] = 'MX';

$GLOBALS["lang"]['FM'] = 'FM';

$GLOBALS["lang"]['MD'] = 'MD';

$GLOBALS["lang"]['MC'] = 'MC';

$GLOBALS["lang"]['MN'] = 'MN';

$GLOBALS["lang"]['ME'] = 'ME';

$GLOBALS["lang"]['MS'] = 'MS';

$GLOBALS["lang"]['MA'] = 'MA';

$GLOBALS["lang"]['MZ'] = 'MZ';

$GLOBALS["lang"]['MM'] = 'MM';

$GLOBALS["lang"]['NA'] = 'NA';

$GLOBALS["lang"]['NR'] = 'NR';

$GLOBALS["lang"]['NP'] = 'NP';

$GLOBALS["lang"]['AN'] = 'AN';

$GLOBALS["lang"]['NL'] = 'NL';

$GLOBALS["lang"]['NC'] = 'NC';

$GLOBALS["lang"]['NZ'] = 'NZ';

$GLOBALS["lang"]['NI'] = 'NI';

$GLOBALS["lang"]['NE'] = 'NE';

$GLOBALS["lang"]['NG'] = 'NG';

$GLOBALS["lang"]['NU'] = 'NU';

$GLOBALS["lang"]['NF'] = 'NF';

$GLOBALS["lang"]['MP'] = 'MP';

$GLOBALS["lang"]['NO'] = 'NO';

$GLOBALS["lang"]['OM'] = 'OM';

$GLOBALS["lang"]['PK'] = 'PK';

$GLOBALS["lang"]['PW'] = 'PW';

$GLOBALS["lang"]['PS'] = 'PS';

$GLOBALS["lang"]['PA'] = 'PA';

$GLOBALS["lang"]['PG'] = 'PG';

$GLOBALS["lang"]['PY'] = 'PY';

$GLOBALS["lang"]['PE'] = 'PE';

$GLOBALS["lang"]['PH'] = 'PH';

$GLOBALS["lang"]['PN'] = 'PN';

$GLOBALS["lang"]['PL'] = 'PL';

$GLOBALS["lang"]['PT'] = 'PT';

$GLOBALS["lang"]['PR'] = 'PR';

$GLOBALS["lang"]['QA'] = 'QA';

$GLOBALS["lang"]['RE'] = 'RE';

$GLOBALS["lang"]['RO'] = 'RO';

$GLOBALS["lang"]['RU'] = 'RU';

$GLOBALS["lang"]['RW'] = 'RW';

$GLOBALS["lang"]['BL'] = 'BL';

$GLOBALS["lang"]['SH'] = 'SH';

$GLOBALS["lang"]['KN'] = 'KN';

$GLOBALS["lang"]['LC'] = 'LC';

$GLOBALS["lang"]['MF'] = 'MF';

$GLOBALS["lang"]['PM'] = 'PM';

$GLOBALS["lang"]['VC'] = 'VC';

$GLOBALS["lang"]['WS'] = 'WS';

$GLOBALS["lang"]['SM'] = 'SM';

$GLOBALS["lang"]['ST'] = 'ST';

$GLOBALS["lang"]['SA'] = 'SA';

$GLOBALS["lang"]['SN'] = 'SN';

$GLOBALS["lang"]['RS'] = 'RS';

$GLOBALS["lang"]['SC'] = 'SC';

$GLOBALS["lang"]['SL'] = 'SL';

$GLOBALS["lang"]['SG'] = 'SG';

$GLOBALS["lang"]['SK'] = 'SK';

$GLOBALS["lang"]['SI'] = 'SI';

$GLOBALS["lang"]['SB'] = 'SB';

$GLOBALS["lang"]['SO'] = 'SO';

$GLOBALS["lang"]['ZA'] = 'ZA';

$GLOBALS["lang"]['GS'] = 'GS';

$GLOBALS["lang"]['ES'] = 'ES';

$GLOBALS["lang"]['LK'] = 'LK';

$GLOBALS["lang"]['SD'] = 'SD';

$GLOBALS["lang"]['SR'] = 'SR';

$GLOBALS["lang"]['SJ'] = 'SJ';

$GLOBALS["lang"]['SZ'] = 'SZ';

$GLOBALS["lang"]['SE'] = 'SE';

$GLOBALS["lang"]['CH'] = 'CH';

$GLOBALS["lang"]['SY'] = 'SY';

$GLOBALS["lang"]['TW'] = 'TW';

$GLOBALS["lang"]['TJ'] = 'TJ';

$GLOBALS["lang"]['TZ'] = 'TZ';

$GLOBALS["lang"]['TH'] = 'TH';

$GLOBALS["lang"]['TL'] = 'TL';

$GLOBALS["lang"]['TG'] = 'TG';

$GLOBALS["lang"]['TK'] = 'TK';

$GLOBALS["lang"]['TO'] = 'TO';

$GLOBALS["lang"]['TT'] = 'TT';

$GLOBALS["lang"]['TN'] = 'TN';

$GLOBALS["lang"]['TR'] = 'TR';

$GLOBALS["lang"]['TM'] = 'TM';

$GLOBALS["lang"]['TC'] = 'TC';

$GLOBALS["lang"]['TV'] = 'TV';

$GLOBALS["lang"]['UG'] = 'UG';

$GLOBALS["lang"]['UA'] = 'UA';

$GLOBALS["lang"]['AE'] = 'AE';

$GLOBALS["lang"]['GB'] = 'GB';

$GLOBALS["lang"]['US'] = 'US';

$GLOBALS["lang"]['UM'] = 'UM';

$GLOBALS["lang"]['VI'] = 'VI';

$GLOBALS["lang"]['UY'] = 'UY';

$GLOBALS["lang"]['UZ'] = 'UZ';

$GLOBALS["lang"]['VU'] = 'VU';

$GLOBALS["lang"]['VE'] = 'VE';

$GLOBALS["lang"]['VN'] = 'VN';

$GLOBALS["lang"]['WF'] = 'WF';

$GLOBALS["lang"]['EH'] = 'EH';

$GLOBALS["lang"]['YE'] = 'YE';

$GLOBALS["lang"]['ZM'] = 'ZM';

$GLOBALS["lang"]['ZW'] = 'ZW';

