<?php
$GLOBALS["lang"][' Default, currently '] = ' Default, currently ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' is now supported with a language file. To change your user to use this language, click ';

$GLOBALS["lang"][' seconds'] = ' seconds';

$GLOBALS["lang"]['10 Minutes'] = '10 Minutes';

$GLOBALS["lang"]['15 Minutes'] = '15 Minutes';

$GLOBALS["lang"]['30 Minutes'] = '30 Minutes';

$GLOBALS["lang"]['5 Minutes'] = '5 Minutes';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'A URL to a file to download.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'A collector is either in Collector or Stand-Alone mode.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'A comma separated list of applicable CVEs.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'A comma separated list of values, one of which can be selected.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'A command to run. When the agent is Windows based, this command is run from within the powershell agent.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'A list of custom UDP ports to scan (161 is SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'A lower number means it will be applied before other rules.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'A lower number means it will be applied before other rules. The default weight is 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'A password (stored as a hash) that enables logon when using application authentication.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'A routing domain or address space where the IP addresses and MAC addresses are unique.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'A security zone is a administrative domain or policy domain within the Network Domain.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'A short description of the log entry.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALL IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Documentation';

$GLOBALS["lang"]['API Key required.'] = 'API Key required.';

$GLOBALS["lang"]['API Result'] = 'API Result';

$GLOBALS["lang"]['About'] = 'About';

$GLOBALS["lang"]['Accept'] = 'Accept';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

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

$GLOBALS["lang"]['Add image'] = 'Add image';

$GLOBALS["lang"]['additional_items'] = 'Additional Items';

$GLOBALS["lang"]['Additional Items'] = 'Additional Items';

$GLOBALS["lang"]['address'] = 'Address';

$GLOBALS["lang"]['Address'] = 'Address';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Advanced';

$GLOBALS["lang"]['Advanced'] = 'Advanced';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['agents'] = 'Agents';

$GLOBALS["lang"]['Agents'] = 'Agents';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Aland Islands';

$GLOBALS["lang"]['Albania'] = 'Albania';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Fields';

$GLOBALS["lang"]['American Samoa'] = 'American Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'An array of <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'An array of <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'An array of object representing external links to more information.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'An indication of the level of service required by this site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'An internal field that indicates if the discovery has completed.';

$GLOBALS["lang"]['An optional GeoCode'] = 'An optional GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'An optional password to use sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarctica';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua and Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Any additional documentation you need.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Any additional notes you care to make.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Any specific TCP ports you wish tested (comma seperated, no spaces).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Any specific UDP ports you wish tested (comma seperated, no spaces).';

$GLOBALS["lang"]['Application'] = 'Application';

$GLOBALS["lang"]['application_id'] = 'Application ID';

$GLOBALS["lang"]['Application ID'] = 'Application ID';

$GLOBALS["lang"]['Application Licenses'] = 'Application Licenses';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Application, Operating System or Hardware.';

$GLOBALS["lang"]['applications'] = 'Applications';

$GLOBALS["lang"]['Applications'] = 'Applications';

$GLOBALS["lang"]['applied'] = 'Applied';

$GLOBALS["lang"]['Applied'] = 'Applied';

$GLOBALS["lang"]['Approved'] = 'Approved';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['architecture'] = 'Architecture';

$GLOBALS["lang"]['Architecture'] = 'Architecture';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Are you sure you want to delete this input item?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Are you sure you want to delete this output item?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Are you sure? This will reset the queue processing count and could cause load on the server.';

$GLOBALS["lang"]['area'] = 'Area';

$GLOBALS["lang"]['Area'] = 'Area';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'As per the attributes for device environments. Production, Training, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Assign an Operator';

$GLOBALS["lang"]['Assigned To'] = 'Assigned To';

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

$GLOBALS["lang"]['Attribute'] = 'Attribute';

$GLOBALS["lang"]['attributes'] = 'Attributes';

$GLOBALS["lang"]['Attributes'] = 'Attributes';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit My PC'] = 'Audit My PC';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Result Input';

$GLOBALS["lang"]['Audit Status'] = 'Audit Status';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audit the Device';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

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

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaijan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas the';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Banned';

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

$GLOBALS["lang"]['Basic'] = 'Basic';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'Belgium';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

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

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazilian Portuguese';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'British Indian Ocean Territory (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'British Virgin Islands';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attributes';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Business Requirements';

$GLOBALS["lang"]['Business Requirements'] = 'Business Requirements';

$GLOBALS["lang"]['Buy'] = 'Buy';

$GLOBALS["lang"]['Buy More'] = 'Buy More';

$GLOBALS["lang"]['Buy More Licenses'] = 'Buy More Licenses';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Calculated from discovery.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Calculated total number of valid IP addresses for this network.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Calculated upon completion, the time taken to execute this item.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Calculated when integration is run and contains the number of devices selected from Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Calculated when integration is run and contains the number of devices selected the external system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Calculated when integration is run and contains the number of devices to be updated in the external system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Calculated when integration is run and contains the number of devices updated in Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Cambodia';

$GLOBALS["lang"]['Cameroon'] = 'Cameroon';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

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

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['change_id'] = 'Change ID';

$GLOBALS["lang"]['Change ID'] = 'Change ID';

$GLOBALS["lang"]['change_log'] = 'Change Log';

$GLOBALS["lang"]['Change Log'] = 'Change Log';

$GLOBALS["lang"]['change_type'] = 'Change Type';

$GLOBALS["lang"]['Change Type'] = 'Change Type';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Check for SSH on these ports';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Check this port for any SSH service.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Choose'] = 'Choose';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Choose (select OS first)';

$GLOBALS["lang"]['Choose a Device'] = 'Choose a Device';

$GLOBALS["lang"]['Choose a Table'] = 'Choose a Table';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Click the Import button below to populate Open-AudIT with example device data.';

$GLOBALS["lang"]['Client ID'] = 'Client ID';

$GLOBALS["lang"]['client_ident'] = 'Client Ident';

$GLOBALS["lang"]['Client Ident'] = 'Client Ident';

$GLOBALS["lang"]['client_secret'] = 'Client Secret';

$GLOBALS["lang"]['Client Secret'] = 'Client Secret';

$GLOBALS["lang"]['client_site_name'] = 'Client Site Name';

$GLOBALS["lang"]['Client Site Name'] = 'Client Site Name';

$GLOBALS["lang"]['Close'] = 'Close';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud Details';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Cloud ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Cloud Name';

$GLOBALS["lang"]['Cloud Name'] = 'Cloud Name';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Clouds';

$GLOBALS["lang"]['Clouds'] = 'Clouds';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Islands';

$GLOBALS["lang"]['Collector'] = 'Collector';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collector (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Collector Name';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['collectors'] = 'Collectors';

$GLOBALS["lang"]['Collectors'] = 'Collectors';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Color';

$GLOBALS["lang"]['Color'] = 'Color';

$GLOBALS["lang"]['column'] = 'Column';

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

$GLOBALS["lang"]['comments'] = 'Comments';

$GLOBALS["lang"]['Comments'] = 'Comments';

$GLOBALS["lang"]['commercial'] = 'Commercial';

$GLOBALS["lang"]['Commercial'] = 'Commercial';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexity of the attack (Low or High).';

$GLOBALS["lang"]['Component Table'] = 'Component Table';

$GLOBALS["lang"]['Components (All Devices)'] = 'Components (All Devices)';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'Condition';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, currently ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['configuration'] = 'Configuration';

$GLOBALS["lang"]['Configuration'] = 'Configuration';

$GLOBALS["lang"]['Configure'] = 'Configure';

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

$GLOBALS["lang"]['contact'] = 'Contact';

$GLOBALS["lang"]['Contact'] = 'Contact';

$GLOBALS["lang"]['contact_name'] = 'Contact Name';

$GLOBALS["lang"]['Contact Name'] = 'Contact Name';

$GLOBALS["lang"]['contained_in'] = 'Contained In';

$GLOBALS["lang"]['Contained In'] = 'Contained In';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Contains a JSON object details the associated widgets and their positions.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Context Name';

$GLOBALS["lang"]['contractual_obligations'] = 'Contractual Obligations';

$GLOBALS["lang"]['Contractual Obligations'] = 'Contractual Obligations';

$GLOBALS["lang"]['Cook Islands'] = 'Cook Islands';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Copy and paste an audit result';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Create Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Create Internal Count';

$GLOBALS["lang"]['Create Internal Count'] = 'Create Internal Count';

$GLOBALS["lang"]['create_internal_from_external'] = 'Create Internal From External';

$GLOBALS["lang"]['Create Internal From External'] = 'Create Internal From External';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Create NMIS Devices from Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Create Open-AudIT Devices from ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Create Open-AudIT Devices from NMIS';

$GLOBALS["lang"]['created_by'] = 'Created By';

$GLOBALS["lang"]['Created By'] = 'Created By';

$GLOBALS["lang"]['created_date'] = 'Created Date';

$GLOBALS["lang"]['Created Date'] = 'Created Date';

$GLOBALS["lang"]['Creating'] = 'Creating';

$GLOBALS["lang"]['Creating Device'] = 'Creating Device';

$GLOBALS["lang"]['Creating a Query'] = 'Creating a Query';

$GLOBALS["lang"]['creator'] = 'Creator';

$GLOBALS["lang"]['Creator'] = 'Creator';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Client ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credentials Subscription ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'Custom TCP Ports';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Custom UDP Ports';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cyprus';

$GLOBALS["lang"]['Czech'] = 'Czech';

$GLOBALS["lang"]['Czech Republic'] = 'Czech Republic';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Account (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Database Action';

$GLOBALS["lang"]['Database Action'] = 'Database Action';

$GLOBALS["lang"]['db_column'] = 'Database Column';

$GLOBALS["lang"]['Database Column'] = 'Database Column';

$GLOBALS["lang"]['Database Definition'] = 'Database Definition';

$GLOBALS["lang"]['db_row'] = 'Database Row';

$GLOBALS["lang"]['Database Row'] = 'Database Row';

$GLOBALS["lang"]['Database Schema'] = 'Database Schema';

$GLOBALS["lang"]['db_table'] = 'Database Table';

$GLOBALS["lang"]['Database Table'] = 'Database Table';

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

$GLOBALS["lang"]['December'] = 'December';

$GLOBALS["lang"]['Default'] = 'Default';

$GLOBALS["lang"]['Default Items'] = 'Default Items';

$GLOBALS["lang"]['Default Value'] = 'Default Value';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Default of 389. Normally 636 used for Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Default of <code>3</code> for LDAP and Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Defaults';

$GLOBALS["lang"]['delay_minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delay Minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delete'] = 'Delete';

$GLOBALS["lang"]['Delete Example Devices'] = 'Delete Example Devices';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Delete External From Internal';

$GLOBALS["lang"]['Delete External From Internal'] = 'Delete External From Internal';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Delete NMIS Devices if not in Open-AudIT';

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

$GLOBALS["lang"]['details'] = 'Details';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Details of who is usually contactable at this site.';

$GLOBALS["lang"]['device'] = 'Device';

$GLOBALS["lang"]['Device'] = 'Device';

$GLOBALS["lang"]['Device Audits'] = 'Device Audits';

$GLOBALS["lang"]['Device ID'] = 'Device ID';

$GLOBALS["lang"]['device_id'] = 'Device ID';

$GLOBALS["lang"]['device_id_a'] = 'Device ID A';

$GLOBALS["lang"]['Device ID A'] = 'Device ID A';

$GLOBALS["lang"]['device_id_b'] = 'Device ID B';

$GLOBALS["lang"]['Device ID B'] = 'Device ID B';

$GLOBALS["lang"]['Device Name'] = 'Device Name';

$GLOBALS["lang"]['Device Result'] = 'Device Result';

$GLOBALS["lang"]['Device Results'] = 'Device Results';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Device Status';

$GLOBALS["lang"]['Device Types'] = 'Device Types';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Device is in the Subnet';

$GLOBALS["lang"]['Devices'] = 'Devices';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Devices Assigned To Location';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Devices Assigned To Location';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Devices Assigned To Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Devices Assigned To Org';

$GLOBALS["lang"]['Devices Audited'] = 'Devices Audited';

$GLOBALS["lang"]['Devices Created in '] = 'Devices Created in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Devices Created in Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Devices Default Display Columns';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Devices Default Display Columns';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Devices Found Last 7 Days';

$GLOBALS["lang"]['Devices Found Today'] = 'Devices Found Today';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Devices Found Yesterday';

$GLOBALS["lang"]['Devices Not Audited'] = 'Devices Not Audited';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Devices Not Seen 30 Days';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Devices Not Seen 7 Days';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Devices Not Seen 90 Days';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Devices Retrieved via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Devices Selected from ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Devices Selected from Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Devices Updated in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Devices Updated in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Devices are being benchmarked.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Devices are not being benchmarked.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Devices could be benchmarked.';

$GLOBALS["lang"]['Devices in Running State'] = 'Devices in Running State';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Devices in Stopped State';

$GLOBALS["lang"]['Devices in this'] = 'Devices in this';

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

$GLOBALS["lang"]['discoveries'] = 'Discoveries';

$GLOBALS["lang"]['Discoveries'] = 'Discoveries';

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

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Display Version';

$GLOBALS["lang"]['Display Version'] = 'Display Version';

$GLOBALS["lang"]['Display in Menu'] = 'Display in Menu';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Do not scan these TCP ports.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Do not scan these UDP ports.';

$GLOBALS["lang"]['Do not show me again'] = 'Do not show me again';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Do you wish to see the standard sidebar on the left.';

$GLOBALS["lang"]['documentation'] = 'Documentation';

$GLOBALS["lang"]['Documentation'] = 'Documentation';

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

$GLOBALS["lang"]['Download a file from URL'] = 'Download a file from URL';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Duration';

$GLOBALS["lang"]['Duration'] = 'Duration';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

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

$GLOBALS["lang"]['English'] = 'English';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Entitlement Type'] = 'Entitlement Type';

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

$GLOBALS["lang"]['Established'] = 'Established';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Ethiopia';

$GLOBALS["lang"]['Every'] = 'Every';

$GLOBALS["lang"]['Every Day'] = 'Every Day';

$GLOBALS["lang"]['Exceptions'] = 'Exceptions';

$GLOBALS["lang"]['exclude'] = 'Exclude';

$GLOBALS["lang"]['Exclude'] = 'Exclude';

$GLOBALS["lang"]['exclude_ip'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Addresses';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Exclude UDP Ports';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

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

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'External';

$GLOBALS["lang"]['External Field Name'] = 'External Field Name';

$GLOBALS["lang"]['External Field Type'] = 'External Field Type';

$GLOBALS["lang"]['external_ident'] = 'External Ident';

$GLOBALS["lang"]['External Ident'] = 'External Ident';

$GLOBALS["lang"]['external_link'] = 'External Link';

$GLOBALS["lang"]['External Link'] = 'External Link';

$GLOBALS["lang"]['extra_columns'] = 'Extra Columns';

$GLOBALS["lang"]['Extra Columns'] = 'Extra Columns';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji the Fiji Islands';

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Import'] = 'File Import';

$GLOBALS["lang"]['File Input'] = 'File Input';

$GLOBALS["lang"]['file_name'] = 'File Name';

$GLOBALS["lang"]['File Name'] = 'File Name';

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

$GLOBALS["lang"]['Finland'] = 'Finland';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall Rule';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall Rule';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First Name'] = 'First Name';

$GLOBALS["lang"]['first_run'] = 'First Run';

$GLOBALS["lang"]['First Run'] = 'First Run';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fixed';

$GLOBALS["lang"]['Floor'] = 'Floor';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'For a seed discovery, should I only discover IPs in the private IP address space.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'For a seed discovery, should I only discover IPs on the chosen subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'For a seed discovery, should I ping the subnet before running the discovery.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'For licenses that are not perpetual, when does the license expire.';

$GLOBALS["lang"]['form_factor'] = 'Form Factor';

$GLOBALS["lang"]['Form Factor'] = 'Form Factor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

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

$GLOBALS["lang"]['full_name'] = 'Full Name';

$GLOBALS["lang"]['Full Name'] = 'Full Name';

$GLOBALS["lang"]['function'] = 'Function';

$GLOBALS["lang"]['Function'] = 'Function';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia the';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generated By';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'German';

$GLOBALS["lang"]['Germany'] = 'Germany';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Get Started';

$GLOBALS["lang"]['Get a Free License'] = 'Get a Free License';

$GLOBALS["lang"]['Getting Started'] = 'Getting Started';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global Discovery Options';

$GLOBALS["lang"]['Go'] = 'Go';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Key';

$GLOBALS["lang"]['Greater Than'] = 'Greater Than';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Greater Than or Equals';

$GLOBALS["lang"]['Greece'] = 'Greece';

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

$GLOBALS["lang"]['hardware_revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Has this policy been applied in this organization.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';

$GLOBALS["lang"]['height'] = 'Height';

$GLOBALS["lang"]['Height'] = 'Height';

$GLOBALS["lang"]['Height in RU'] = 'Height in RU';

$GLOBALS["lang"]['Help'] = 'Help';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Help and Frequently Asked Questions';

$GLOBALS["lang"]['high'] = 'High';

$GLOBALS["lang"]['High'] = 'High';

$GLOBALS["lang"]['High Availability'] = 'High Availability';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Holy See (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Home';

$GLOBALS["lang"]['home'] = 'Home';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Hour';

$GLOBALS["lang"]['Hour'] = 'Hour';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'How and Why is Open-AudIT More Secure';

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

$GLOBALS["lang"]['Hungary'] = 'Hungary';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'I have read the EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP Address';

$GLOBALS["lang"]['IP Addresses'] = 'IP Addresses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set By';

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

$GLOBALS["lang"]['If'] = 'If';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'If a port responds with filtered, should we consider it available.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'If a port responds with open|filtered, should we consider it available.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'If an Open-AudIT device has been changed, should we update the external system.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'If an Open-AudIT device is not on the external system, should we create it.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'If an agent reports its primary IP is in this subnet, perform the actions.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'If the agent OS family (case insensitive) contains this string, perform the actions.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'If this many or more minutes have passed since the device contacted the server, perform the actions.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

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

$GLOBALS["lang"]['implementation_notes'] = 'Implementation Notes';

$GLOBALS["lang"]['Implementation Notes'] = 'Implementation Notes';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Import Example Data';

$GLOBALS["lang"]['improvement_opportunities'] = 'Improvement Opportunities';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Improvement Opportunities';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inactive';

$GLOBALS["lang"]['Include'] = 'Include';

$GLOBALS["lang"]['Incomplete'] = 'Incomplete';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Informational';

$GLOBALS["lang"]['initial_size'] = 'Initial Size';

$GLOBALS["lang"]['Initial Size'] = 'Initial Size';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Input Type';

$GLOBALS["lang"]['inputs'] = 'Inputs';

$GLOBALS["lang"]['Inputs'] = 'Inputs';

$GLOBALS["lang"]['Insane'] = 'Insane';

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

$GLOBALS["lang"]['installed_by'] = 'Installed By';

$GLOBALS["lang"]['Installed By'] = 'Installed By';

$GLOBALS["lang"]['installed_on'] = 'Installed On';

$GLOBALS["lang"]['Installed On'] = 'Installed On';

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

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface ID';

$GLOBALS["lang"]['interface_type'] = 'Interface Type';

$GLOBALS["lang"]['Interface Type'] = 'Interface Type';

$GLOBALS["lang"]['Internal'] = 'Internal';

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

$GLOBALS["lang"]['Italy'] = 'Italy';

$GLOBALS["lang"]['Items not in Baseline'] = 'Items not in Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON to Import';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'January';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'July';

$GLOBALS["lang"]['June'] = 'June';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'Key';

$GLOBALS["lang"]['Key Password (optional)'] = 'Key Password (optional)';

$GLOBALS["lang"]['keys'] = 'Keys';

$GLOBALS["lang"]['Keys'] = 'Keys';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyz Republic';

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

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Latitude';

$GLOBALS["lang"]['Latitude'] = 'Latitude';

$GLOBALS["lang"]['Latvia'] = 'Latvia';

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

$GLOBALS["lang"]['level'] = 'Level';

$GLOBALS["lang"]['Level'] = 'Level';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Level of privileges needed to exploit (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'License';

$GLOBALS["lang"]['License Key'] = 'License Key';

$GLOBALS["lang"]['License Required'] = 'License Required';

$GLOBALS["lang"]['licenses'] = 'Licenses';

$GLOBALS["lang"]['Licenses'] = 'Licenses';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Like';

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

$GLOBALS["lang"]['List'] = 'List';

$GLOBALS["lang"]['list_table_format'] = 'List Table Format';

$GLOBALS["lang"]['List Table Format'] = 'List Table Format';

$GLOBALS["lang"]['Lithuania'] = 'Lithuania';

$GLOBALS["lang"]['Load Balancing'] = 'Load Balancing';

$GLOBALS["lang"]['Local'] = 'Local';

$GLOBALS["lang"]['Local Area Network'] = 'Local Area Network';

$GLOBALS["lang"]['local_port'] = 'Local Port';

$GLOBALS["lang"]['Local Port'] = 'Local Port';

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

$GLOBALS["lang"]['locations'] = 'Locations';

$GLOBALS["lang"]['Locations'] = 'Locations';

$GLOBALS["lang"]['Locations in this'] = 'Locations in this';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Log Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Log Rotation';

$GLOBALS["lang"]['log_status'] = 'Log Status';

$GLOBALS["lang"]['Log Status'] = 'Log Status';

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

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'MAC Address';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Manufacturer';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagascar';

$GLOBALS["lang"]['maintenance_expires'] = 'Maintenance Expires';

$GLOBALS["lang"]['Maintenance Expires'] = 'Maintenance Expires';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Make My Default Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Make this install a Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Maldives';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'Manage Licenses';

$GLOBALS["lang"]['Manage in NMIS'] = 'Manage in NMIS';

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

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Matching Attribute';

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

$GLOBALS["lang"]['Mexico'] = 'Mexico';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutes Since last Audit are Greater than';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Model Family';

$GLOBALS["lang"]['Model Family'] = 'Model Family';

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

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Month';

$GLOBALS["lang"]['Month'] = 'Month';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Morocco';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Must Respond to Ping';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Name';

$GLOBALS["lang"]['Name'] = 'Name';

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

$GLOBALS["lang"]['Network'] = 'Network';

$GLOBALS["lang"]['network_address'] = 'Network Address';

$GLOBALS["lang"]['Network Address'] = 'Network Address';

$GLOBALS["lang"]['network_domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Domain'] = 'Network Domain';

$GLOBALS["lang"]['Network Types'] = 'Network Types';

$GLOBALS["lang"]['networks'] = 'Networks';

$GLOBALS["lang"]['Networks'] = 'Networks';

$GLOBALS["lang"]['Networks Generated By'] = 'Networks Generated By';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Networks using a CIDR Mask of';

$GLOBALS["lang"]['New Building Name'] = 'New Building Name';

$GLOBALS["lang"]['New Caledonia'] = 'New Caledonia';

$GLOBALS["lang"]['New Floor Name'] = 'New Floor Name';

$GLOBALS["lang"]['New Room Name'] = 'New Room Name';

$GLOBALS["lang"]['New Row Name'] = 'New Row Name';

$GLOBALS["lang"]['New Zealand'] = 'New Zealand';

$GLOBALS["lang"]['News'] = 'News';

$GLOBALS["lang"]['next_hop'] = 'Next Hop';

$GLOBALS["lang"]['Next Hop'] = 'Next Hop';

$GLOBALS["lang"]['next_run'] = 'Next Run';

$GLOBALS["lang"]['Next Run'] = 'Next Run';

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

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'None';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Northern Mariana Islands';

$GLOBALS["lang"]['Norway'] = 'Norway';

$GLOBALS["lang"]['Not Applicable'] = 'Not Applicable';

$GLOBALS["lang"]['Not Checked'] = 'Not Checked';

$GLOBALS["lang"]['Not Equals'] = 'Not Equals';

$GLOBALS["lang"]['Not In'] = 'Not In';

$GLOBALS["lang"]['Not Like'] = 'Not Like';

$GLOBALS["lang"]['Not Set'] = 'Not Set';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.';

$GLOBALS["lang"]['Note'] = 'Note';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).';

$GLOBALS["lang"]['Notes'] = 'Notes';

$GLOBALS["lang"]['notes'] = 'Notes';

$GLOBALS["lang"]['Notice'] = 'Notice';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Families';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Object Ident';

$GLOBALS["lang"]['Object Ident'] = 'Object Ident';

$GLOBALS["lang"]['October'] = 'October';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'One of either <code>active directory</code> or <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'One of: antivirus, backup, firewall, approved, banned, ignored or other.';

$GLOBALS["lang"]['Online Documentation'] = 'Online Documentation';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT Community';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Field Name';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT Licenses';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Options';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. The world\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT and Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap is Installed';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap User Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap User Membership Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap User Membership Attribute';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtered';

$GLOBALS["lang"]['Operating System'] = 'Operating System';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operating System Family Contains';

$GLOBALS["lang"]['Operating Systems'] = 'Operating Systems';

$GLOBALS["lang"]['optical'] = 'Optical';

$GLOBALS["lang"]['Optical'] = 'Optical';

$GLOBALS["lang"]['Optimized'] = 'Optimized';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.';

$GLOBALS["lang"]['options'] = 'Options';

$GLOBALS["lang"]['Options'] = 'Options';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Or select from the below fields.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisation Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organisations';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

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

$GLOBALS["lang"]['Others'] = 'Others';

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

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Package';

$GLOBALS["lang"]['packages'] = 'Packages';

$GLOBALS["lang"]['Packages'] = 'Packages';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinian Territory';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua New Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

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

$GLOBALS["lang"]['permission'] = 'Permission';

$GLOBALS["lang"]['Permission'] = 'Permission';

$GLOBALS["lang"]['permissions'] = 'Permissions';

$GLOBALS["lang"]['Permissions'] = 'Permissions';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

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

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn Islands';

$GLOBALS["lang"]['placement'] = 'Placement';

$GLOBALS["lang"]['Placement'] = 'Placement';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Please have an Open-AudIT administrator logon and upgrade the database.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Please note that the select box will override the text input box.';

$GLOBALS["lang"]['Please set using'] = 'Please set using';

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

$GLOBALS["lang"]['Polite'] = 'Polite';

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

$GLOBALS["lang"]['position'] = 'Position';

$GLOBALS["lang"]['Position'] = 'Position';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'Power Circuit';

$GLOBALS["lang"]['Power Circuit'] = 'Power Circuit';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Predictable';

$GLOBALS["lang"]['Preferences'] = 'Preferences';

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

$GLOBALS["lang"]['profile'] = 'Profile';

$GLOBALS["lang"]['Profile'] = 'Profile';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['protocol'] = 'Protocol';

$GLOBALS["lang"]['Protocol'] = 'Protocol';

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

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Items';

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

$GLOBALS["lang"]['Red Query'] = 'Red Query';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Redirect Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Redirect Uri';

$GLOBALS["lang"]['references'] = 'References';

$GLOBALS["lang"]['References'] = 'References';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registered User';

$GLOBALS["lang"]['Registered User'] = 'Registered User';

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

$GLOBALS["lang"]['Report'] = 'Report';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Report on your devices, networks and more';

$GLOBALS["lang"]['reportable'] = 'Reportable';

$GLOBALS["lang"]['Reportable'] = 'Reportable';

$GLOBALS["lang"]['Reports'] = 'Reports';

$GLOBALS["lang"]['request'] = 'Request';

$GLOBALS["lang"]['Request'] = 'Request';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Request a Specific CVE';

$GLOBALS["lang"]['requested'] = 'Requested';

$GLOBALS["lang"]['Requested'] = 'Requested';

$GLOBALS["lang"]['require_port'] = 'Require Port';

$GLOBALS["lang"]['Require Port'] = 'Require Port';

$GLOBALS["lang"]['Require an Open Port'] = 'Require an Open Port';

$GLOBALS["lang"]['Required'] = 'Required';

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

$GLOBALS["lang"]['Results'] = 'Results';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved Name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risk Assesment Result';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risk Assesment Result';

$GLOBALS["lang"]['role'] = 'Role';

$GLOBALS["lang"]['Role'] = 'Role';

$GLOBALS["lang"]['roles'] = 'Roles';

$GLOBALS["lang"]['Roles'] = 'Roles';

$GLOBALS["lang"]['Romania'] = 'Romania';

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

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery on Devices';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Run a discovery and find out <b>Whats On Your Network?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Run this Command';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Running Open-AudIT Apache Service Under Windows';

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

$GLOBALS["lang"]['Save as Default'] = 'Save as Default';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Scan Options';

$GLOBALS["lang"]['Scan Options'] = 'Scan Options';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan Options ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan the Nmap top number of TCP ports.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan the Nmap top number of UDP ports.';

$GLOBALS["lang"]['schedule'] = 'Schedule';

$GLOBALS["lang"]['Schedule'] = 'Schedule';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

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

$GLOBALS["lang"]['Search for Device'] = 'Search for Device';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Searching Using DataTables';

$GLOBALS["lang"]['secondary'] = 'Secondary';

$GLOBALS["lang"]['Secondary'] = 'Secondary';

$GLOBALS["lang"]['Secondary Text'] = 'Secondary Text';

$GLOBALS["lang"]['section'] = 'Section';

$GLOBALS["lang"]['Section'] = 'Section';

$GLOBALS["lang"]['secure'] = 'Secure';

$GLOBALS["lang"]['Secure'] = 'Secure';

$GLOBALS["lang"]['Security Name'] = 'Security Name';

$GLOBALS["lang"]['Security Status'] = 'Security Status';

$GLOBALS["lang"]['security_zone'] = 'Security Zone';

$GLOBALS["lang"]['Security Zone'] = 'Security Zone';

$GLOBALS["lang"]['seed_ip'] = 'Seed IP';

$GLOBALS["lang"]['Seed IP'] = 'Seed IP';

$GLOBALS["lang"]['seed_ping'] = 'Seed Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Seed Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Select'] = 'Select';

$GLOBALS["lang"]['Select All'] = 'Select All';

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

$GLOBALS["lang"]['Select a Table'] = 'Select a Table';

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

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set By';

$GLOBALS["lang"]['Set By'] = 'Set By';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Set the size (normal or compact) of the tables on the List screens.';

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

$GLOBALS["lang"]['short'] = 'Short';

$GLOBALS["lang"]['Short'] = 'Short';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Should I remove all non-current data from this device?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Should this vendor be used when retrieving vulnerabilities from FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Should we add devices from the remote service, locally.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Should we apply this license to the selected Org as well as the Orgs children?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Should we expose this group in the web interface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Should we expose this query in the list of reports under the Report menu in the web interface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Should we expose this query in the list of reports under the Reports menu in the web interface.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Should we run an audit and submit it (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Should we test for SNMP using UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Should we test for SSH using TCP port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Should we test for WMI using TCP port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Should we uninstall the agent (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakia (Slovak Republic)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenia';

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

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Found Last 7 Days';

$GLOBALS["lang"]['Software Found Today'] = 'Software Found Today';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software Found Yesterday';

$GLOBALS["lang"]['software_key'] = 'Software Key';

$GLOBALS["lang"]['Software Key'] = 'Software Key';

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

$GLOBALS["lang"]['started_date'] = 'Started Date';

$GLOBALS["lang"]['Started Date'] = 'Started Date';

$GLOBALS["lang"]['state'] = 'State';

$GLOBALS["lang"]['State'] = 'State';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Storage';

$GLOBALS["lang"]['storage_count'] = 'Storage Count';

$GLOBALS["lang"]['Storage Count'] = 'Storage Count';

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

$GLOBALS["lang"]['Submitted From'] = 'Submitted From';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

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

$GLOBALS["lang"]['Summary'] = 'Summary';

$GLOBALS["lang"]['Sunday'] = 'Sunday';

$GLOBALS["lang"]['supplier'] = 'Supplier';

$GLOBALS["lang"]['Supplier'] = 'Supplier';

$GLOBALS["lang"]['Support'] = 'Support';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Sweden';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Device ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Device ID';

$GLOBALS["lang"]['switch_port'] = 'Switch Port';

$GLOBALS["lang"]['Switch Port'] = 'Switch Port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Switzerland, Swiss Confederation';

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

$GLOBALS["lang"]['table'] = 'Table';

$GLOBALS["lang"]['Table'] = 'Table';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tajikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Task';

$GLOBALS["lang"]['Task'] = 'Task';

$GLOBALS["lang"]['tasks'] = 'Tasks';

$GLOBALS["lang"]['Tasks'] = 'Tasks';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['test_minutes'] = 'Test Minutes';

$GLOBALS["lang"]['Test Minutes'] = 'Test Minutes';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Tests';

$GLOBALS["lang"]['Tests'] = 'Tests';

$GLOBALS["lang"]['Text'] = 'Text';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'The Active Directory domain to retrieve a list of subnets from.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'The Active Directory server to retrieve a list of subnets from.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).';

$GLOBALS["lang"]['The CVE identifier.'] = 'The CVE identifier.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'The Cloud that owns this item. Links to <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'The ISP or Telco providing this link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'The JSON record from Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'The JSON record from the NVD feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'The LDAP OU of this user (if LDAP is used).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'The Location that contains this network. Links to <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'The NVD assigned base status.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'The Nmap timing preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'The Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'The Open-AudIT server code was exeucted within this file.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'The Open-AudIT server code was exeucted within this function.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'The Process Identifier of the running associated discovery.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'The RU positon of the top of this device.';

$GLOBALS["lang"]['The SNMP community string.'] = 'The SNMP community string.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'The SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'The SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'The SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'The SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'The SNMP v3 Security Level.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'The SNMP v3 Security Name.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'The SNMPv3 context Engine ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'The SNMPv3 context Name (optional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'The URL of the external system.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'The URL the audit scripts should submit their result to.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'The actual full name of this user.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'The associated baseline. Links to <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'The associated discovery (if required). Links to <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'The attribute to test (from the <code>devices</code> table).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'The attribute to test (must match an external field name from below).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'The audit script upon which to base your customisations.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'The base path from which to search for Users.';

$GLOBALS["lang"]['The benchmark type.'] = 'The benchmark type.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'The building the rack is located in.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'The calculated number of devices to be created externally.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'The calculated number of devices to be created in Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'The collectors internal IP used when it runs a discovery.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'The command executed upon the target device or Open-AudIT server code executed during discovery.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.';

$GLOBALS["lang"]['The credentials username.'] = 'The credentials username.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'The current status of the Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'The current status of the discovery.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'The database version and web version are inconsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'The date of license expiration.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'The date/time when this result was created.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'The day of the month when this task should execute (* for every day).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'The day of the week when this task should execute (* for every day).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'The default language assigned to any user created by this method.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'The device must respond to an Nmap ping before it is considered online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'The device within Open-AudIT. Links to <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'The direct link for the script is';

$GLOBALS["lang"]['The email address of the reciever'] = 'The email address of the reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'The entire associated baseline this result is from.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'The externally referenced location ID. Usually populated by Cloud audits.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'The first time that Open-AudIT retrieved details of this device.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'The floor the rack is located on.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'The foreign table to reference. Should be one of: devices, locations, orgs or queries.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'The format used for the output to be emailed.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'The group of devices on which the baseline was run against.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'The group that provides a list of devices for the integration. Links to <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'The hour of the day when this task should execute (* for every hour).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'The id of the linked device. Links to <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'The identifier column (integer) in the database (read only).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'The importance of this baseline (not used yet).';

$GLOBALS["lang"]['The integer of severity.'] = 'The integer of severity.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'The ip address of the Auth method.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'The language to translate the web interface into for the user.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'The last date and time this item was executed (read only).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'The last time that Open-AudIT retrieved details of this device.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'The last time this benchmarks was executed.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'The last time this integration was run.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'The maximum physical weight (in KGs) this rack can hold.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'The maximum total BTUs this rack is rated for.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'The optional third column. NOTE: When type = traffic, this represents the green query id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'The orientation of this device.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'The process identifier of this queue item.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'The process that was used last to retrieve details about the device';

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

$GLOBALS["lang"]['The result of the command.'] = 'The result of the command.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'The room the rack is located in.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'The row the rack is located in.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'The secret key used in conjunction with your AWS EC2 API key.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'The software end-of-life date.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'The software end-of-service-life date.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'The specific database column from the specified database table.';

$GLOBALS["lang"]['The specific database table.'] = 'The specific database table.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.';

$GLOBALS["lang"]['The status of this integration'] = 'The status of this integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'The status of this queued item.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'The target IP this log entry referers to (if any).';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'The unique identifier of this server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'The user account this collector uses. Links to <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'The username used to access the external system.';

$GLOBALS["lang"]['The users email address.'] = 'The users email address.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'The usual hours of operation at this site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'The value assigned to the item.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'The value that is stored for this particular item.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'The vendor name as per CPE entries.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'The vendor taken from the CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'The web directory on the host that Open-AudIT is installed (requires a trailing slash).';

$GLOBALS["lang"]['The widget at position '] = 'The widget at position ';

$GLOBALS["lang"]['The width of this device.'] = 'The width of this device.';

$GLOBALS["lang"]['Then'] = 'Then';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'This CVE will be retrieved and overwrite the existing CVE if it exists.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'This collectors universally unique identifier.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'This description is auto-populated and should ideally be left as-is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'This feature requires a Professional or an Enterprise license.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'This item must match the value of the attribute selected or contains the ID of the query to be used.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'This item must match the value of the attribute selected.';

$GLOBALS["lang"]['This license expires on'] = 'This license expires on';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'This should be set to either 1 or the height of the rack.';

$GLOBALS["lang"]['This will auto-populate.'] = 'This will auto-populate.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'This will considerably slow the discovery scan.';

$GLOBALS["lang"]['Thursday'] = 'Thursday';

$GLOBALS["lang"]['time_caption'] = 'Time Caption';

$GLOBALS["lang"]['Time Caption'] = 'Time Caption';

$GLOBALS["lang"]['time_daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time Daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time to Execute'] = 'Time to Execute';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Title';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditional Chinese';

$GLOBALS["lang"]['Traffic Light'] = 'Traffic Light';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad and Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Troubleshooting LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Tuesday';

$GLOBALS["lang"]['Tunisia'] = 'Tunisia';

$GLOBALS["lang"]['Turkey'] = 'Turkey';

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

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

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

$GLOBALS["lang"]['Use SNMP'] = 'Use SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Use SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Use Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Use Service Version Detection';

$GLOBALS["lang"]['Use WMI'] = 'Use WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Use for Authentication';

$GLOBALS["lang"]['Use for Roles'] = 'Use for Roles';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Users, Roles and Orgs';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Using Entra for Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Using OKTA for Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Usually Mb/s, from Location A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Usually Mb/s, from Location B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Usually Mb/s, to Location A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Usually Mb/s, to Location B.';

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

$GLOBALS["lang"]['values'] = 'Values';

$GLOBALS["lang"]['Values'] = 'Values';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variable';

$GLOBALS["lang"]['Variable'] = 'Variable';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['vendors'] = 'Vendors';

$GLOBALS["lang"]['Vendors'] = 'Vendors';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Version';

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

$GLOBALS["lang"]['View'] = 'View';

$GLOBALS["lang"]['View All'] = 'View All';

$GLOBALS["lang"]['View Details'] = 'View Details';

$GLOBALS["lang"]['View Device'] = 'View Device';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtual Private Network';

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

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['WHERE'] = 'WHERE';

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

$GLOBALS["lang"]['Web'] = 'Web';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Welcome to FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Western Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'What Can I Expect if I Have no Credentials';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'What is the purpose of this rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'What is the type of this location. Allowable types held in <code>attributes</code> table.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'When retrieve an external device, should we run discovery upon it?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'When this log was created.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'When this queue item started processing.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.';

$GLOBALS["lang"]['where'] = 'Where';

$GLOBALS["lang"]['Where'] = 'Where';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Where on the Device Details screen you would like to see this field appear.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Where the rack is in the row.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Whether user interaction is required (None, Passive, Active).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Which OS this benchmark applies to.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Which sub-menu should we display this query in.';

$GLOBALS["lang"]['Who made this rack.'] = 'Who made this rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Why Windows Server Only?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Why do we exclude this policy?';

$GLOBALS["lang"]['Wide Area Network'] = 'Wide Area Network';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Type';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Wireless Local Area Network';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Workgroup'] = 'Workgroup';

$GLOBALS["lang"]['Working Credentials'] = 'Working Credentials';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Yellow Query';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Yes';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'You may want to copy and paste this URL in an email to your staff.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'You must delete your existing license before adding a new license.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Your AWS EC2 API key.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Your Google Compute credentials as JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Your Licenses';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Your Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Your Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Your Microsoft Azure Subscription ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Your Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Your SQL to select attributes that will populate this query.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Your SQL to select devices that will populate this group.';

$GLOBALS["lang"]['Your SSH key.'] = 'Your SSH key.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Your access credentials, as per that clouds native API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Your description of the status of this connection (provisioned, retired, etc).';

$GLOBALS["lang"]['Your description of this item.'] = 'Your description of this item.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Your generic name for this piece of software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Your generic version for this piece of software';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'active';

$GLOBALS["lang"]['active directory'] = 'active directory';

$GLOBALS["lang"]['active/active'] = 'active/active';

$GLOBALS["lang"]['active/passive'] = 'active/passive';

$GLOBALS["lang"]['advertisement'] = 'advertisement';

$GLOBALS["lang"]['alert'] = 'alert';

$GLOBALS["lang"]['all'] = 'all';

$GLOBALS["lang"]['allocated'] = 'allocated';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'application';

$GLOBALS["lang"]['approved'] = 'approved';

$GLOBALS["lang"]['attribute'] = 'attribute';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'banned';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'bottom';

$GLOBALS["lang"]['browser_lang'] = 'browser_lang';

$GLOBALS["lang"]['building'] = 'building';

$GLOBALS["lang"]['cloud'] = 'cloud';

$GLOBALS["lang"]['code'] = 'code';

$GLOBALS["lang"]['collector'] = 'collector';

$GLOBALS["lang"]['compute'] = 'compute';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'contains';

$GLOBALS["lang"]['create'] = 'create';

$GLOBALS["lang"]['created'] = 'created';

$GLOBALS["lang"]['critical'] = 'critical';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'delegated';

$GLOBALS["lang"]['delete'] = 'delete';

$GLOBALS["lang"]['deleted'] = 'deleted';

$GLOBALS["lang"]['denied'] = 'denied';

$GLOBALS["lang"]['devices'] = 'devices';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

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

$GLOBALS["lang"]['fixed'] = 'fixed';

$GLOBALS["lang"]['floor'] = 'floor';

$GLOBALS["lang"]['front'] = 'front';

$GLOBALS["lang"]['front-left'] = 'front-left';

$GLOBALS["lang"]['front-right'] = 'front-right';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'greater or equals';

$GLOBALS["lang"]['greater than'] = 'greater than';

$GLOBALS["lang"]['group'] = 'group';

$GLOBALS["lang"]['head'] = 'head';

$GLOBALS["lang"]['here'] = 'here';

$GLOBALS["lang"]['high availability'] = 'high availability';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['ignored'] = 'ignored';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['inactive'] = 'inactive';

$GLOBALS["lang"]['incomplete'] = 'incomplete';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), etc';

$GLOBALS["lang"]['is licensed to'] = 'is licensed to';

$GLOBALS["lang"]['left'] = 'left';

$GLOBALS["lang"]['less or equals'] = 'less or equals';

$GLOBALS["lang"]['less than'] = 'less than';

$GLOBALS["lang"]['license'] = 'license';

$GLOBALS["lang"]['like'] = 'like';

$GLOBALS["lang"]['line'] = 'line';

$GLOBALS["lang"]['load balancing'] = 'load balancing';

$GLOBALS["lang"]['location'] = 'location';

$GLOBALS["lang"]['managed'] = 'managed';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'mount point';

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

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimized';

$GLOBALS["lang"]['optionally '] = 'optionally ';

$GLOBALS["lang"]['other'] = 'other';

$GLOBALS["lang"]['package'] = 'package';

$GLOBALS["lang"]['partition'] = 'partition';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'pending';

$GLOBALS["lang"]['performance'] = 'performance';

$GLOBALS["lang"]['performed'] = 'performed';

$GLOBALS["lang"]['pie'] = 'pie';

$GLOBALS["lang"]['planning'] = 'planning';

$GLOBALS["lang"]['predictable'] = 'predictable';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'rear';

$GLOBALS["lang"]['rear-left'] = 'rear-left';

$GLOBALS["lang"]['rear-right'] = 'rear-right';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'release';

$GLOBALS["lang"]['reserved'] = 'reserved';

$GLOBALS["lang"]['right'] = 'right';

$GLOBALS["lang"]['room'] = 'room';

$GLOBALS["lang"]['row'] = 'row';

$GLOBALS["lang"]['stand-alone'] = 'stand-alone';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'starts with';

$GLOBALS["lang"]['storage'] = 'storage';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

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

$GLOBALS["lang"]['unallocated'] = 'unallocated';

$GLOBALS["lang"]['unauthorised'] = 'unauthorised';

$GLOBALS["lang"]['unknown'] = 'unknown';

$GLOBALS["lang"]['unmanaged'] = 'unmanaged';

$GLOBALS["lang"]['unused'] = 'unused';

$GLOBALS["lang"]['update'] = 'update';

$GLOBALS["lang"]['valid'] = 'valid';

$GLOBALS["lang"]['virtualisation'] = 'virtualisation';

$GLOBALS["lang"]['warning'] = 'warning';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'yes';

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

