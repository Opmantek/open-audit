<?php
$GLOBALS["lang"][' Default, currently '] = ' . ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' .';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Имено. ';

$GLOBALS["lang"][' seconds'] = ' .';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = '.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = '.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = '. <i>.</i> - Да. <strong>PŘÍLOHA</strong> .';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '- Да. ';

$GLOBALS["lang"]['10 Minutes'] = '10.';

$GLOBALS["lang"]['15 Minutes'] = '15';

$GLOBALS["lang"]['30 Minutes'] = '30 ° C.';

$GLOBALS["lang"]['5 Minutes'] = '5.';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = ' 93 год.';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>- Да.</strong> - Не, не...';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">- Да.</strong> - Ja.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>.</strong> - Ja.<br/> <br/> <strong>- Да.</strong> - Ja.<br/> <br/> <strong>- Да.</strong> .<br/> <br/> <strong>Не, не.</strong> Не, не, не.<br/> <br/> <strong>Netstat Portu</strong> Имено.<br/> <br/> <strong>- Да.</strong> . Bir istifad... çi uygoun adņ, status v...<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>.<br/> <br/>- Да.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>- Да. <code>table</code> Qeydiyat <code>column</code> - Да.<br/> <br/>. <code>table</code> Qeydiyat <code>column</code>- Да.<br/> <br/>. <code>extra_columns</code> - Да.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Имено.</p><p>. <strong>.</strong> да го направим, да го направим. <strong>.</strong> - Да.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>- Да.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Имено.<br/> <br/> .<br/> <br/> Cent.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>- Ano.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Имено.</p><p> Имено.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>- Не, не.<br/> <br/>. <code>credential</code> Bu aradan qaldţrmaq, sonra verilmiş Org il... baghlşt... min <code>credentials.org_id</code> Имено.<br/> <br/>SSH istifad... Ano. Имено.<br/> <br/>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Не, не.<br/> <br/>- Не, не.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Имено.<br/> <br/>.<br/> <br/>.<br/> <br/>.<br/> <br/>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>- Да.<br/> <br/>"О, Боже мой!<br/> <br/>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>. <a href="../configuration?configuration.name=discovery_default_scan_option">- Да.</a>. Не, не.<br/><br/><strong>Axtarşş@</strong>: <i>- Да.</i>. Scan yalnīz Offen- Audit vsi il... danşmaq v... bir IOS al... tini (WMI, SSH, SNMP, Apple Sync) algahilamaq üçün lodenīm olan portlarzania tarayşr. Axtarşş@ <code>open|filtered</code> . <code>filtered</code> гонката е по-голяма от тази, която е по-голяма от тази, която е по-добра от тази, която е била.<br/><br/><strong>Puls</strong>: <i>5.</i>. Връв10 TCP v... UDP portu, v... port 62078 (Apple IOS aşkar). Axtarşş@ <code>open|filtered</code> . <code>filtered</code> гонката е по-голяма от тази, която е по-голяма от тази, която е по-добра от тази, която е била.<br/><br/><strong>- Да.</strong>: <i>40 ° C.</i>. Top 100 TCP v... UDP limanlarņ, v... Port 62078 (Apple IOS aşkar). Axtarşş@ <code>open|filtered</code> . <code>filtered</code> гонката е по-голяма от тази, която е по-голяма от тази, която е по-добра от тази, която е била.<br/><br/><strong>- Ja.</strong>: <i>90 °C</i> Axtara. <code>open|filtered</code> . <code>filtered</code> Имено.<br/><br/><strong>- Да.</strong>: <i>100 na druhou.</i>. Üst 1000 TCP v... üst 100 UDP portu, v... port 62078 (Apple IOS aşkar). Axtarşş@ <code>open|filtered</code> . <code>filtered</code> гонката е по-голяма от тази, която е по-голяма от тази, която е по-добра от тази, която е била.<br/><br><strong>.</strong>: <i>ANHANG</i>. Üst 1000 TCP v... üst 100 UDP portu, v... port 62078 (Apple IOS aşkar). АкстаръК <code>open|filtered</code> . <code>filtered</code> Имено.<br><br/><strong>България</strong>: <i>20</i> -... <code>open|filtered</code> . <code>filtered</code> Имено.<br/><br/><strong>- Не, не.</strong>: <i>.</i>...<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>JSON istifad.. etm.k.. diyiniz zaman, onlar bir siyahşsīgeri <code>devices.id</code> .<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p> Co se děje? <code>ldap_dn_account</code> Qeydiyat <code>ldap_dn_password</code> .<br/> <br/><strong>.</strong><br/> <br/><a href="/index.php/auth/help">- Ja.</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">.</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">- Не, не.</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Не, не.</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Имено.</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>.<br/><em>- Не, не.</em> : / usr / local / open-одит / public / device _ Bilder<br/><em>- Не, не.</em>: c: / xamp / htdocs / open- Audit / Bezpečnost _ obrázky<br/> <br/>.<br/><em>- Не, не.</em> : / usr / lokal / offen Audit / veřejnost / obrázky / map _ BAR _<br/><em>- Не, не.</em> : / xamp / htdocs / отворен одит / bilder / map _ icons</p><p>- Да. <i>Не, не, не.</i> - Да. <code>device</code>. <i>- Не, не.</i> - Да. <code>class</code>. <code>environment</code>. <code>status</code> Qeydiyat <code>type</code>- Да. <i>Не, не, не.</i> - Да. <code>locations</code> . <code>org</code> . <i>- Да.</i> - Да. <code>type</code>- Да. <i>Не, не, не.</i> - Да. <code>query</code> . <i>- Да.</i> - Да. <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>.</p><p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p> да го направим, да го направим.<br/> <br/>.<br/> <br/>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Имено.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p> "Майкрософт" -............................. Имено.<br/><br/>.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>- Да. <a href="https://nmap.org/book/man-performance.html" target="_blank">http: / / nmap.org / book / man-pertu.html</a>- Да.<br/> <br/><em>Имено. инсанлар кими дейир - T2 (Полит) онлар овлини qarşīlamaq daha az yaxşņolduğunu düşünürl... Имено.</em><footer>- Не, не. <i>Name</i> SALA</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Не, не.<br/> <br/>Имено.<br/> <br/>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Не, не.<br/> <br/>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>.<br/> <br/>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p> да го направим, но не е така.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Имено. Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Не, не.<br/> <br/>Имено.<br/> <br/>(Pop-Audit).<br/> <br/>Имено. <a href="/index.php/faq?name=Users, Roles and Orgs">E-Poçon</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Не, не.<br/> <br/>Имено.<br/> <br/>(Pop-Audit).<br/> <br/>Имено.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Имено.<br/> <br/>.<br/> <br/>Имено. Имено.<br/> <br/>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Google Maps t гор!. Google Mapy canlş, interaktiv cografi xidm.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Имено.<br/> <br/><em>- Да.</em> Имено. <br/> <br/>. <a href="../credentials">- Да.</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>- Не, не.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Имено.<br/> <br/>Axtarşş@ <code>type</code> Имено.<br/> <br/>. <code>sub_resource_id</code>... <code>sub_resource_id</code>.<br/> <br/>- Да. <code>uuid</code> .<br/> <br/>Axtarşş@ <code>options</code> Имено. <code>email_address</code> Qeydiyat <code>format</code>. ( <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Axtarşş@ <code>type</code> .<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Българактеристики крайна точка Open-Audit müxt... H.r.y.r.r.v., Orgs üçün Tip xüsusiyyyyyyyyyy.tl.ri, h.mçi üçün Menkulator Kateqoriyasī. - Да.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Kompüter v... Server arasīnda yalnīz lodenīm olan aşportlarņ80 v... / ya443.<br/> <br/>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>. <em>.</em> Е-почт <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>. <em>.</em> - Да. <code>WHERE @filter</code> Имено.<br/> <br/>. <code>os_group</code> гонитба. <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>. <em>.</em> . <code>DISTINCT(devices.id)</code>.<br/> <br/>. <em>.</em> - Да. <code>WHERE @filter</code> .<br/> <br/>. <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>- Да.<br/> <br/>. <em>.</em> . <code>match_string</code> - Да.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>APOL формат 192.168.1.0 / 24 olmalīdīr.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>- Да.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>.<br/><br/>Имено. Bu hesab uzaq (въК основа на мрежа) rekursuna daxil deyil. Имено.<br/><br/> да го направим, да го направим. <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">. Apache големоглаве К</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>- Не, не.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Не, не.<br/> <br/><em>- Да.</em> . <em>.</em> ...<br/> <br/>.<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery"> Azulen</a> . <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">Даксил ол</a>- Да.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>NIST CVE Futter гонитба.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p> Je to tak. <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP sagt</a>. <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">- Да.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>- Да.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>.<br/> <br/>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p> Na druhou stranu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Имено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Не, не.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>- Да.</strong> - Не, не...';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = '"Стифад... олунан мадид...."';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'PŘÍLOHA';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = '.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'CVE- dan alganan proqram adgam il... uyğun olaraq, Offen- Audit t... r... finden... n alganan proqram adgah uyğunlaşdşrīlmşdşr.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Bu boşluğu test üçün qiym... r JSON sīra.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Bu istifad... çi üçün Orgs daxil olan bir JSON s... rgisi. <code>orgs.id</code>...';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'ZEITSCHRIFTEN <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Seçilmişm... lumat _ scannen _ Optionen üz... rind... lodenem olan xüsusiyyyyy... tl... ri olan JSON nümayişi.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Това е най-важното нещо, което мога да направя.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Bu istifad по дяволите, verilmişrollar daxil olan bir JSON s.rgisius. Не, не. <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Mac meydana çţxţrsa, bir sţra xüsusiyyyyyyyyy...';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Bir sīra xüsusiyrr';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Kolleksiya xüsusi versionlarşolan JSON Obkt.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Bir JSON Objektiki Cloud Keçmiş.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Qşrmīzīm гошсулун мулматлария олан бир JSON nümaeişedilib.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Bu inteqrasiya üçün sah...';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'A JSON müxt...';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Добър вечер, г-жо.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = '.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Ein Metropolitan sah... si (MAN) bir ş... h... r. v... ya böyük bir kampaniya yayşlmşböyük kompüter ş... h... ridir.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'Имено. Bu, h';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Имено.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Daha sonra faylşnşyükl';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL адрес на Yükl...';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Имено.<br/><br/>Имено.<br/><br/>.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Bu proqram nömr... sinin nömr... sini göst... rdiyi hesablanmşsah... si seçilmiş Org (ve onun qonaqlaror)';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Bir kampaniya sah... si (CAN) müxt... lif cografi sah... sind... Je to tak?<br/><br/>Ünvan: Az... rbaycan Respublikasēn Prezidenti, Az... rbaycan Respublikaső, Az... rbaycan Respublikasēn Prezidenti, Az...';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Daxili bir port erişilebilirdir (Nmap provincepackets almaq v Имено.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = '.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Xüsusi CVes ayrő siyahīsī.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = '.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Не, не, не.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = '. <i>- Да.</i>. Имено.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Не, не.';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Проект 802-дии, бО, автоматик LANlarţn ugourlu olmasīnő edir.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Bir ev sah... si... olunan bir yaşayşLAN, tez- tez v... mobil avadadīq cihazlarşkimi, xüsusi kompüter v... aksesuarlarşn kiçik bir sayşr. - Да.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'SSH üçün xüsusi TCP portlarşnţn siyahşsţ( 22 SSH, 135 WMI, 62078 iPhone növüdür.';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'S';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'A yerli sah... si (LAN) ev, uşaq, ofis binaső, v... ya.<br/><br/>Имено.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Имено.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = '- Да.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Не, не.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Имено. 100 %';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Open-Audit yni istifad... - Да.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Имено.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = '.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Имено.<br/><br/>Имено.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Müxt голи К информациии texnologiyalarħarasīnda kompüter v гон мО кст голмилим информации texnologiyalarħarasīnda Имено.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Имено. Yadda saxla.... <i> y</i> .<i> n</i> Имено. <code>id</code>.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Имено. Üst s поviyyyyytd. Имено. <i>Капсула</i> .<br/><br/>Raflar Open- Audit Enterprise lisenziyalar mövcudur.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'IP nünvanlarņv год. MAC adresl... rinin unikaal olduğu yerl... şdirici domen adħv... ünvanī.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = '.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Bir t... hlük... sizlik zonaső AņDomaini daxili domain v го ya siyas го domainidr.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = '- Да. <i>- Да.</i> Имено.';

$GLOBALS["lang"]['A short description of the log entry.'] = '.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Yadda saxla готварски год.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = '. <code>software.name</code> .';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Не, не.';

$GLOBALS["lang"]['A timestamp.'] = '- Не, не.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Имено. <i>.</i> Qeydiyat <i>.</i> .';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Имено.<br/><br/> гонката, която е по-голяма отова, което се случва.<br/><br/>"" "" "" """ "" """ "" """ "" """ """ "" """ "" """" "" "" """ "" """" """ """ """ """ """ """ """ """ """ """ """ """"" """" """ """""""" """"""""""" """""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""<br/><br/>.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Имено.<br/><br/> гонката, която е по-голяма отова, което се случва.<br/><br/>Въпреки това, това може да се случи, ако не е възможно.<br/><br/>.';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Bir virtual xüsusi şготварски (VPN) nömr год. виртуална връзка междедвете страни. Имено.<br/><br/>Имено.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = '.';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = '.';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Bütün hüquqlarzania qorunur.';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Bir çatīşmazlişd... st... kl... ndirilmişv... daha xüsusi paketi adlarşnīd... st... kl... y...';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = ' - Ne.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Genişsah... sin ş... h... ri (WAN) bir ş... h... r, ölk... ölk..., ölk..., v... ya s... naye s... viyry... tl... ri kimi böyük coigrafi sah... sind... bir kommpüter ş... h... Bir WAN telefon xüsusiyyyyyyyyyyyyyy... tl... ri, kabell... ri birl... şdir... n bir kommpüter kanal istifad... edir. Имено.';

$GLOBALS["lang"]['AD Group'] = 'Група AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, s.';

$GLOBALS["lang"]['AIX'] = 'Калерея';

$GLOBALS["lang"]['ALL IPs'] = '.';

$GLOBALS["lang"]['API / Web Access'] = 'ДостъК API / web';

$GLOBALS["lang"]['API Documentation'] = 'PŘÍLOHA';

$GLOBALS["lang"]['API Key required.'] = '- Да.';

$GLOBALS["lang"]['API Result'] = 'Axtarşş@';

$GLOBALS["lang"]['About'] = '- Да.';

$GLOBALS["lang"]['Above are the only required items.'] = '.';

$GLOBALS["lang"]['Accept'] = '- Да.';

$GLOBALS["lang"]['Access Model'] = '.';

$GLOBALS["lang"]['access_point'] = '- Да.';

$GLOBALS["lang"]['Access Point'] = '- Да.';

$GLOBALS["lang"]['access_token'] = 'Достъ К дотокен';

$GLOBALS["lang"]['Access Token'] = 'Достъ К дотокен';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Admin $payşv... RPC girişSMB2 protokol istifad... Edire.';

$GLOBALS["lang"]['ack_by'] = 'Akk';

$GLOBALS["lang"]['Ack By'] = 'Akk';

$GLOBALS["lang"]['ack_date'] = 'Ack Tarixi';

$GLOBALS["lang"]['Ack Date'] = 'Ack Tarixi';

$GLOBALS["lang"]['ack_time'] = 'Akk Vaxt';

$GLOBALS["lang"]['Ack Time'] = 'Akk Vaxt';

$GLOBALS["lang"]['action'] = 'Не, не.';

$GLOBALS["lang"]['Action'] = 'Не, не.';

$GLOBALS["lang"]['action_audit'] = 'Не, не.';

$GLOBALS["lang"]['Action Audit'] = 'Не, не.';

$GLOBALS["lang"]['action_command'] = '- Не, не.';

$GLOBALS["lang"]['Action Command'] = '- Не, не.';

$GLOBALS["lang"]['action_date'] = 'Не, не.';

$GLOBALS["lang"]['Action Date'] = 'Не, не.';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Имено.';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Имено.';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Не, не.';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Не, не.';

$GLOBALS["lang"]['action_download'] = '.';

$GLOBALS["lang"]['Action Download'] = '.';

$GLOBALS["lang"]['action_uninstall'] = 'Не не. italyprovince. kg';

$GLOBALS["lang"]['Action Uninstall'] = 'Не не. italyprovince. kg';

$GLOBALS["lang"]['actioned'] = '.';

$GLOBALS["lang"]['Actioned'] = '.';

$GLOBALS["lang"]['actioned_by'] = 'Не, не, не.';

$GLOBALS["lang"]['Actioned By'] = 'Не, не, не.';

$GLOBALS["lang"]['actioned_date'] = '- Да.';

$GLOBALS["lang"]['Actioned Date'] = '- Да.';

$GLOBALS["lang"]['actions'] = '- Не, не.';

$GLOBALS["lang"]['Actions'] = '- Не, не.';

$GLOBALS["lang"]['Activate'] = '- Да.';

$GLOBALS["lang"]['Activate Free License'] = '- Да.';

$GLOBALS["lang"]['Activate Key'] = '.';

$GLOBALS["lang"]['Activate a free Enterprise license'] = '.';

$GLOBALS["lang"]['Active'] = '- Да.';

$GLOBALS["lang"]['Active / Active'] = '.';

$GLOBALS["lang"]['Active / Passive'] = '.';

$GLOBALS["lang"]['Active Directory'] = '- Да.';

$GLOBALS["lang"]['Active Directory Domain'] = 'Имено.';

$GLOBALS["lang"]['active_directory_ou'] = '- Да.';

$GLOBALS["lang"]['Active Directory Ou'] = '- Да.';

$GLOBALS["lang"]['Active Directory Server'] = '.';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = '- Да.';

$GLOBALS["lang"]['ad_domain'] = 'Адсояд';

$GLOBALS["lang"]['Ad Domain'] = 'Адсояд';

$GLOBALS["lang"]['ad_group'] = '.';

$GLOBALS["lang"]['Ad Group'] = '.';

$GLOBALS["lang"]['ad_server'] = 'Адсояд';

$GLOBALS["lang"]['Ad Server'] = 'Адсояд';

$GLOBALS["lang"]['Add'] = '.';

$GLOBALS["lang"]['Add Credentials'] = '- Да.';

$GLOBALS["lang"]['Add Device'] = '.';

$GLOBALS["lang"]['Add Device to Application'] = '.';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Не, не, не.';

$GLOBALS["lang"]['Add Exception'] = '- Да.';

$GLOBALS["lang"]['Add Field'] = 'Не, не, не.';

$GLOBALS["lang"]['Add If'] = '.';

$GLOBALS["lang"]['Add Policies from Device'] = '- Да.';

$GLOBALS["lang"]['Add Policy'] = '- Да.';

$GLOBALS["lang"]['Add Then'] = '.';

$GLOBALS["lang"]['Add Your Credentials'] = '.';

$GLOBALS["lang"]['Add image'] = '- Да.';

$GLOBALS["lang"]['additional_items'] = '.';

$GLOBALS["lang"]['Additional Items'] = '.';

$GLOBALS["lang"]['address'] = 'Не, не, не.';

$GLOBALS["lang"]['Address'] = 'Не, не, не.';

$GLOBALS["lang"]['Address any nonconformities'] = '.';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Имено.';

$GLOBALS["lang"]['Admin'] = 'Qeydiyat';

$GLOBALS["lang"]['admin_status'] = '- Да.';

$GLOBALS["lang"]['Admin Status'] = '- Да.';

$GLOBALS["lang"]['advanced'] = 'Не, не.';

$GLOBALS["lang"]['Advanced'] = 'Не, не.';

$GLOBALS["lang"]['Afghanistan'] = '- Да.';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Имено.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Не, не.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = '- Да.';

$GLOBALS["lang"]['agents'] = '- Да.';

$GLOBALS["lang"]['Agents'] = '- Да.';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Имено. <i>.</i> - Да.<br/><br/>Имено. <i>.</i>.<br/><br/> да го направим, да го направим. <strong>.</strong> - Да.<p>. <strong>- Да.</strong>. <strong>.</strong> Имено. </p>';

$GLOBALS["lang"]['Aggressive'] = 'Не, не.';

$GLOBALS["lang"]['Aland Islands'] = '.';

$GLOBALS["lang"]['Albania'] = 'Не, не, не.';

$GLOBALS["lang"]['Albanian'] = 'Не, не, не.';

$GLOBALS["lang"]['alert_style'] = 'Адсояд';

$GLOBALS["lang"]['Alert Style'] = 'Адсояд';

$GLOBALS["lang"]['Algeria'] = '- Да.';

$GLOBALS["lang"]['algorithm'] = ' Алги';

$GLOBALS["lang"]['Algorithm'] = ' Алги';

$GLOBALS["lang"]['alias'] = 'SALA';

$GLOBALS["lang"]['Alias'] = 'SALA';

$GLOBALS["lang"]['All'] = 'Не, не, не.';

$GLOBALS["lang"]['All IPs'] = '.';

$GLOBALS["lang"]['All Policies'] = '.';

$GLOBALS["lang"]['All Queued Items'] = '"Трафлымсулар"';

$GLOBALS["lang"]['All collections URLs use the format'] = '.';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = '.';

$GLOBALS["lang"]['All devices with a type like computer.'] = '.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = '.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = '.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = '- Да.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = '.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Имено.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = '.';

$GLOBALS["lang"]['Also can be created from the'] = '.';

$GLOBALS["lang"]['Alternatives'] = '- Не, не.';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'AWS год.';

$GLOBALS["lang"]['American Samoa'] = 'Не, не.';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = '- Да.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Оря (организия) Open-Audit - da kolleksiyalarda...................... <i>- Да.</i>.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'UDP datagramlarņv... ya SCTP birl... Имено.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = '. <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = '. <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = '.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = '- Да.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = '. JSON nümayişi <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = '.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = '- Да.';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = '.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = '- Да.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Bu místo t';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = '.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = '- Да.<br/>- Да.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Xüsusi Geocode';

$GLOBALS["lang"]['An optional password to use sudo.'] = '.';

$GLOBALS["lang"]['Analyzed'] = '.';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = '.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = '.';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = '. <i>Даксил ол</i> .';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Имено. Не, не.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = '- Да. <i>.</i> . <i>Qeydiyat<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = '.';

$GLOBALS["lang"]['Andorra'] = '- Да.';

$GLOBALS["lang"]['Angola'] = '.';

$GLOBALS["lang"]['Anguilla'] = '.';

$GLOBALS["lang"]['Annex A Controls'] = '- Да.';

$GLOBALS["lang"]['Antarctica'] = 'Не, не.';

$GLOBALS["lang"]['AntiVirus'] = 'Даксил ол';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Paketl...';

$GLOBALS["lang"]['Antigua and Barbuda'] = '.';

$GLOBALS["lang"]['Antivirus'] = 'Puls';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = '. 7';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = ' гонката, която се е превърнала в нещо, което се е случило. 7';

$GLOBALS["lang"]['Any additional documentation you need.'] = '.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = '.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = '- Да.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = '.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Имено. <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = '- Не, не. <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = '- Да.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = ' да го направим, да го направим. <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = ' да го направим, да го направим. <code>org_id</code> . <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = '- Не, не. <i>- Да.</i> - Да.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Това е, което се е случило.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = '.';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = '.';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = '.';

$GLOBALS["lang"]['Application'] = '- Да.';

$GLOBALS["lang"]['Application Definitions'] = '.';

$GLOBALS["lang"]['application_id'] = '.';

$GLOBALS["lang"]['Application ID'] = '.';

$GLOBALS["lang"]['Application Licenses'] = '.';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = '- Да.';

$GLOBALS["lang"]['applications'] = '- Да.';

$GLOBALS["lang"]['Applications'] = '- Да.';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = '- Да.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Имено.';

$GLOBALS["lang"]['applied'] = '- Да.';

$GLOBALS["lang"]['Applied'] = '- Да.';

$GLOBALS["lang"]['Approved'] = '.';

$GLOBALS["lang"]['Approved Packages'] = '.';

$GLOBALS["lang"]['April'] = '.';

$GLOBALS["lang"]['Arabic'] = '- Да.';

$GLOBALS["lang"]['architecture'] = 'Не, не, не.';

$GLOBALS["lang"]['Architecture'] = 'Не, не, не.';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '.';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = '.';

$GLOBALS["lang"]['Are you sure?'] = '.';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '. Bu, bütün sşra girişl... ri aradan qaldşracaq v... IPs qarşsnşalşr.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '.';

$GLOBALS["lang"]['area'] = 'Не, не, не.';

$GLOBALS["lang"]['Area'] = 'Не, не, не.';

$GLOBALS["lang"]['Argentina'] = '- Да.';

$GLOBALS["lang"]['Armenia'] = '.';

$GLOBALS["lang"]['arp'] = 'Axtar';

$GLOBALS["lang"]['Arp'] = 'Axtar';

$GLOBALS["lang"]['Aruba'] = 'Не, не.';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = '"О, Боже мой!';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = '. <strong>.</strong> Имено. <i>Не, не, не.</i> Имено.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Имено.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = '- Да. <i>Имено.</i><br/><br/>. <i>- Да.</i> .';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = '.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = '- Да.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = '. <i>Даксил ол</i>.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Happy Subnets xüsusiyäti bu ş@';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Не, не.';

$GLOBALS["lang"]['Ask me later'] = '.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = '.';

$GLOBALS["lang"]['aspect_ratio'] = '.';

$GLOBALS["lang"]['Aspect Ratio'] = '.';

$GLOBALS["lang"]['Asset ID'] = '- Да.';

$GLOBALS["lang"]['asset_ident'] = 'Не, не, не.';

$GLOBALS["lang"]['Asset Ident'] = 'Не, не, не.';

$GLOBALS["lang"]['asset_number'] = '.';

$GLOBALS["lang"]['Asset Number'] = '.';

$GLOBALS["lang"]['asset_tag'] = 'Не, не, не.';

$GLOBALS["lang"]['Asset Tag'] = 'Не, не, не.';

$GLOBALS["lang"]['Assign Device to Application'] = '.';

$GLOBALS["lang"]['Assign Device to Cluster'] = '.';

$GLOBALS["lang"]['Assign Device to Location'] = '.';

$GLOBALS["lang"]['Assign Device to Organisation'] = '.';

$GLOBALS["lang"]['Assign Devices to Location'] = '.';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Имено.';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = '.';

$GLOBALS["lang"]['Assign an Operator'] = '- Да.';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = '.';

$GLOBALS["lang"]['Assign the Device to a Location'] = '- Да.';

$GLOBALS["lang"]['Assign the device to an Org'] = '- Да.';

$GLOBALS["lang"]['Assigned To'] = 'Axtarşş@';

$GLOBALS["lang"]['Assigning Discovered Devices'] = '.';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = '.';

$GLOBALS["lang"]['attached_device_id'] = '.';

$GLOBALS["lang"]['Attached Device ID'] = '.';

$GLOBALS["lang"]['attached_to'] = '- Не, не.';

$GLOBALS["lang"]['Attached To'] = '- Не, не.';

$GLOBALS["lang"]['attachment'] = '- Не, не.';

$GLOBALS["lang"]['Attachment'] = '- Не, не.';

$GLOBALS["lang"]['attachments'] = '- Не, не.';

$GLOBALS["lang"]['Attachments'] = '- Не, не.';

$GLOBALS["lang"]['attack_complexity'] = '.';

$GLOBALS["lang"]['Attack Complexity'] = '.';

$GLOBALS["lang"]['attack_requirements'] = '.';

$GLOBALS["lang"]['Attack Requirements'] = '.';

$GLOBALS["lang"]['attack_vector'] = '- Да.';

$GLOBALS["lang"]['Attack Vector'] = '- Да.';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = '.';

$GLOBALS["lang"]['Attribute'] = '.';

$GLOBALS["lang"]['attributes'] = '- Да.';

$GLOBALS["lang"]['Attributes'] = '- Да.';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Имено.';

$GLOBALS["lang"]['Audit'] = '.';

$GLOBALS["lang"]['Audit AIX'] = '.';

$GLOBALS["lang"]['Audit DNS'] = '.';

$GLOBALS["lang"]['Audit ESXi'] = '.';

$GLOBALS["lang"]['Audit Linux'] = '.';

$GLOBALS["lang"]['audit_log'] = '- Да.';

$GLOBALS["lang"]['Audit Log'] = '- Да.';

$GLOBALS["lang"]['Audit Mount Point'] = '.';

$GLOBALS["lang"]['Audit My PC'] = '.';

$GLOBALS["lang"]['Audit Netstat'] = 'Axtar';

$GLOBALS["lang"]['Audit OSX'] = '.';

$GLOBALS["lang"]['Audit Result Input'] = 'Не, не.';

$GLOBALS["lang"]['Audit Software'] = 'Не, не.';

$GLOBALS["lang"]['Audit Status'] = '.';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Имено.';

$GLOBALS["lang"]['Audit Windows'] = 'Не, не, не.';

$GLOBALS["lang"]['Audit the Device'] = '.';

$GLOBALS["lang"]['Audits'] = '.';

$GLOBALS["lang"]['August'] = '.';

$GLOBALS["lang"]['Australia'] = '- Да.';

$GLOBALS["lang"]['Austria'] = '- Да.';

$GLOBALS["lang"]['Auth'] = 'SALA';

$GLOBALS["lang"]['auth'] = 'SALA';

$GLOBALS["lang"]['Auth Methods'] = 'Не, не.';

$GLOBALS["lang"]['Authenticate only'] = '.';

$GLOBALS["lang"]['Authentication Passphrase'] = '.';

$GLOBALS["lang"]['Authentication Protocol'] = '.';

$GLOBALS["lang"]['authority_key_ident'] = '- Да.';

$GLOBALS["lang"]['Authority Key Ident'] = '- Да.';

$GLOBALS["lang"]['Auto'] = 'Автомобил';

$GLOBALS["lang"]['auto_renew'] = 'Автомобил К ени';

$GLOBALS["lang"]['Auto Renew'] = 'Автомобил К ени';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = '- Не, не.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoErneuerungen';

$GLOBALS["lang"]['automatable'] = '.';

$GLOBALS["lang"]['Automatable'] = '.';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = '.';

$GLOBALS["lang"]['availability'] = '.';

$GLOBALS["lang"]['Availability'] = '.';

$GLOBALS["lang"]['Available Benchmarks'] = '.';

$GLOBALS["lang"]['Awaiting Analysis'] = '.';

$GLOBALS["lang"]['Azerbaijan'] = 'Не, не, не.';

$GLOBALS["lang"]['Azerbaijani'] = 'Не, не, не.';

$GLOBALS["lang"]['Azure Active Directory'] = '.';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'Не, не.';

$GLOBALS["lang"]['Backbone network'] = '.';

$GLOBALS["lang"]['Backup'] = '- Да.';

$GLOBALS["lang"]['Bahamas the'] = '.';

$GLOBALS["lang"]['Bahrain'] = '- Да.';

$GLOBALS["lang"]['Bangladesh'] = '- Да.';

$GLOBALS["lang"]['bank'] = 'Не, не.';

$GLOBALS["lang"]['Bank'] = 'Не, не.';

$GLOBALS["lang"]['Banned'] = '.';

$GLOBALS["lang"]['Banned Packages'] = '.';

$GLOBALS["lang"]['bar_code'] = '.';

$GLOBALS["lang"]['Bar Code'] = '.';

$GLOBALS["lang"]['Barbados'] = '- Да.';

$GLOBALS["lang"]['Base DN'] = 'DN';

$GLOBALS["lang"]['base_score'] = '- Да.';

$GLOBALS["lang"]['Base Score'] = '- Да.';

$GLOBALS["lang"]['base_severity'] = '.';

$GLOBALS["lang"]['Base Severity'] = '.';

$GLOBALS["lang"]['based_on'] = '- Не, не.';

$GLOBALS["lang"]['Based On'] = '- Не, не.';

$GLOBALS["lang"]['baseline'] = '.';

$GLOBALS["lang"]['Baseline'] = '.';

$GLOBALS["lang"]['baseline_id'] = '.';

$GLOBALS["lang"]['Baseline ID'] = '.';

$GLOBALS["lang"]['baselines'] = '.';

$GLOBALS["lang"]['Baselines'] = '.';

$GLOBALS["lang"]['baselines_policies'] = '.';

$GLOBALS["lang"]['Baselines Policies'] = '.';

$GLOBALS["lang"]['Baselines Policy'] = '.';

$GLOBALS["lang"]['Baselines Policy Details'] = '- Да.';

$GLOBALS["lang"]['baselines_results'] = 'Не, не.';

$GLOBALS["lang"]['Baselines Results'] = 'Не, не.';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = '.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = '.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Не, не.';

$GLOBALS["lang"]['Basic'] = '- Да.';

$GLOBALS["lang"]['Basque'] = 'Калерея';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = '.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Имено.<br/><br/>Имено.';

$GLOBALS["lang"]['Belarus'] = 'Не, не.';

$GLOBALS["lang"]['Belgium'] = '- Не, не.';

$GLOBALS["lang"]['Belize'] = '- Да.';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = '.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = '.';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = '- Да. <i>.</i> Или гонитба, която не на себе си.<br/><br/> Заявено събиране<br/><br/> Ne, ne, ne.';

$GLOBALS["lang"]['Benchmark'] = '.';

$GLOBALS["lang"]['benchmark_id'] = '.';

$GLOBALS["lang"]['Benchmark ID'] = '.';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Не, не, не.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['benchmarks'] = '.';

$GLOBALS["lang"]['Benchmarks'] = '.';

$GLOBALS["lang"]['benchmarks_exceptions'] = '.';

$GLOBALS["lang"]['Benchmarks Exceptions'] = '.';

$GLOBALS["lang"]['benchmarks_log'] = 'Etalanlar';

$GLOBALS["lang"]['Benchmarks Log'] = 'Etalanlar';

$GLOBALS["lang"]['benchmarks_policies'] = '.';

$GLOBALS["lang"]['Benchmarks Policies'] = '.';

$GLOBALS["lang"]['benchmarks_result'] = '- Да.';

$GLOBALS["lang"]['Benchmarks Result'] = '- Да.';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Имено.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = '.<p><i>OpenSCAP анадан:</i> Имено.</p>';

$GLOBALS["lang"]['Benefits'] = '- Да.';

$GLOBALS["lang"]['Bengali'] = '- Да.';

$GLOBALS["lang"]['Benin'] = '- Да.';

$GLOBALS["lang"]['Bermuda'] = '- Да.';

$GLOBALS["lang"]['best_practises'] = 'Nejlepší Pracktis';

$GLOBALS["lang"]['Best Practises'] = 'Nejlepší Pracktis';

$GLOBALS["lang"]['Bhutan'] = '- Не, не.';

$GLOBALS["lang"]['bios'] = ' Био';

$GLOBALS["lang"]['Bios'] = ' Био';

$GLOBALS["lang"]['body'] = 'Не, не.';

$GLOBALS["lang"]['Body'] = 'Не, не.';

$GLOBALS["lang"]['Bolivia'] = '.';

$GLOBALS["lang"]['Boolean'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Boolean 1/0'] = 'Полян 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Калерея';

$GLOBALS["lang"]['boot_device'] = '.';

$GLOBALS["lang"]['Boot Device'] = '.';

$GLOBALS["lang"]['bootable'] = ' Саксия';

$GLOBALS["lang"]['Bootable'] = ' Саксия';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Не, не, не.';

$GLOBALS["lang"]['Both forms of'] = 'Не, не, не.';

$GLOBALS["lang"]['Botswana'] = '- Да.';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = '- Ja.';

$GLOBALS["lang"]['Brazil'] = '- Да.';

$GLOBALS["lang"]['Brazilian Portuguese'] = '- Да.';

$GLOBALS["lang"]['Breaking it Down'] = '- Да.';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Не, не.';

$GLOBALS["lang"]['British Virgin Islands'] = '.';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = '.<br/><br/>. <i>- Да.</i> .<br/><br/>Не, не, не. <i>.</i> подпрозре К';

$GLOBALS["lang"]['Brunei Darussalam'] = '.';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Не, не.';

$GLOBALS["lang"]['Btu Total'] = 'Не, не.';

$GLOBALS["lang"]['build_number'] = '- Да.';

$GLOBALS["lang"]['Build Number'] = '- Да.';

$GLOBALS["lang"]['build_number_full'] = '.';

$GLOBALS["lang"]['Build Number Full'] = '.';

$GLOBALS["lang"]['Building'] = '- Да.';

$GLOBALS["lang"]['Builds trust with clients and partners'] = '.';

$GLOBALS["lang"]['Bulgaria'] = '- Да.';

$GLOBALS["lang"]['Bulgarian'] = '- Да.';

$GLOBALS["lang"]['Bulk Edit'] = ' Наливно количество';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk Редактиране на форма';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Avtomatlaşdşrmacolor Атрибути на устройството,';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = '- Да.';

$GLOBALS["lang"]['Burkina Faso'] = '.';

$GLOBALS["lang"]['Burundi'] = '- Да.';

$GLOBALS["lang"]['business_requirements'] = '.';

$GLOBALS["lang"]['Business Requirements'] = '.';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = '.';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = '.';

$GLOBALS["lang"]['Buy'] = '- Да.';

$GLOBALS["lang"]['Buy More'] = '.';

$GLOBALS["lang"]['Buy More Licenses'] = '.';

$GLOBALS["lang"]['By'] = '.';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = '. <i> y</i> Je to tak. <i>.</i>Не, не.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Имено.';

$GLOBALS["lang"]['CIDR'] = ' В';

$GLOBALS["lang"]['CIDR Mask'] = ' C Bakez';

$GLOBALS["lang"]['cli_config'] = 'Oxunub Qeydiyat';

$GLOBALS["lang"]['CLI Config'] = 'Oxunub Qeydiyat';

$GLOBALS["lang"]['CPU'] = ' CPU';

$GLOBALS["lang"]['CPUs'] = ' CPU';

$GLOBALS["lang"]['CSV'] = 'E-Poçon';

$GLOBALS["lang"]['CVE'] = 'PŘÍLOHA';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'Alanan bir statela CVEs, analiz altīnda, analiz altīnda, redakt...';

$GLOBALS["lang"]['Calculated from discovery.'] = '.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = '.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = '.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = '. <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = '. <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = '.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = '.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = '.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = '- Да.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = '. <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = '.';

$GLOBALS["lang"]['Cameroon'] = '.';

$GLOBALS["lang"]['Campus Area Network'] = 'Калерея';

$GLOBALS["lang"]['Campus area network'] = '.';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = '- Да. <code>active</code>. <code>passive</code> .';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = '- Да. <code>application</code>. <code>compute</code>. <code>database</code>. <code>storage</code>. <code>virtualisation</code>. <code>web</code>. <code>other</code> .';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = '- Да. <code>auto</code>. <code>fixed</code>. <code>other</code> .';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = '- Да. <code>high availability</code>. <code>load balancing</code>. <code>performance</code>. <code>storage</code>. <code>other</code> .';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = '- Да. <code>line</code>. <code>pie</code> . <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = '- Да. <code>user</code> . <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = '.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Имено.';

$GLOBALS["lang"]['Can the user edit this item.'] = '- Да.';

$GLOBALS["lang"]['Canada'] = '- Да.';

$GLOBALS["lang"]['Cancel'] = '- Не, не.';

$GLOBALS["lang"]['capabilities'] = '- Да.';

$GLOBALS["lang"]['Capabilities'] = '- Да.';

$GLOBALS["lang"]['Capacity'] = '- Да.';

$GLOBALS["lang"]['Cape Verde'] = '.';

$GLOBALS["lang"]['Capitalise'] = '.';

$GLOBALS["lang"]['caption'] = 'Калерея';

$GLOBALS["lang"]['Caption'] = 'Калерея';

$GLOBALS["lang"]['Catalan'] = 'Kateqoriya';

$GLOBALS["lang"]['Cayman Islands'] = '- Да.';

$GLOBALS["lang"]['Cellular Details'] = '.';

$GLOBALS["lang"]['Central African Republic'] = '.';

$GLOBALS["lang"]['certificate'] = '.';

$GLOBALS["lang"]['Certificate'] = '.';

$GLOBALS["lang"]['certificate_file'] = '.';

$GLOBALS["lang"]['Certificate File'] = '.';

$GLOBALS["lang"]['certificate_name'] = '.';

$GLOBALS["lang"]['Certificate Name'] = '.';

$GLOBALS["lang"]['certificates'] = '- Да.';

$GLOBALS["lang"]['Certificates'] = '- Да.';

$GLOBALS["lang"]['Certification'] = 'Не, не, не.';

$GLOBALS["lang"]['Certification Audit'] = '.';

$GLOBALS["lang"]['Certification Process'] = '.';

$GLOBALS["lang"]['Chad'] = '- Да.';

$GLOBALS["lang"]['Change'] = 'Не, не, не.';

$GLOBALS["lang"]['change_id'] = '.';

$GLOBALS["lang"]['Change ID'] = '.';

$GLOBALS["lang"]['change_log'] = 'Не, не, не.';

$GLOBALS["lang"]['Change Log'] = 'Не, не, не.';

$GLOBALS["lang"]['Change Logs'] = 'Не, не, не.';

$GLOBALS["lang"]['change_type'] = 'Не, не, не.';

$GLOBALS["lang"]['Change Type'] = 'Не, не, не.';

$GLOBALS["lang"]['check_minutes'] = '.';

$GLOBALS["lang"]['Check Minutes'] = '.';

$GLOBALS["lang"]['Check for SSH on these ports'] = '.';

$GLOBALS["lang"]['Check this port for any SSH service.'] = '.';

$GLOBALS["lang"]['Chile'] = '- Да.';

$GLOBALS["lang"]['China'] = '- Да.';

$GLOBALS["lang"]['Chinese'] = '- Да.';

$GLOBALS["lang"]['Chinese (traditional)'] = '- Ja.';

$GLOBALS["lang"]['Choose'] = '- Да.';

$GLOBALS["lang"]['Choose (select OS first)'] = '- Ja.';

$GLOBALS["lang"]['Choose a Device'] = '.';

$GLOBALS["lang"]['Choose a Table'] = '.';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = '.';

$GLOBALS["lang"]['Christmas Island'] = '.';

$GLOBALS["lang"]['cidr'] = '- Да.';

$GLOBALS["lang"]['Cidr'] = '- Да.';

$GLOBALS["lang"]['circuit_count'] = '.';

$GLOBALS["lang"]['Circuit Count'] = '.';

$GLOBALS["lang"]['circuit_status'] = '.';

$GLOBALS["lang"]['Circuit Status'] = '.';

$GLOBALS["lang"]['city'] = '- Да.';

$GLOBALS["lang"]['City'] = '- Да.';

$GLOBALS["lang"]['class'] = '- Не, не.';

$GLOBALS["lang"]['Class'] = '- Не, не.';

$GLOBALS["lang"]['class_text'] = '- Не, не.';

$GLOBALS["lang"]['Class Text'] = '- Не, не.';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Axtar <i>.</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Yadda saxla';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = '- Да. <i>- Да.</i> Не, не. <i>Qeydiyat</i> - Да. <i>.</i>...<br/><br/>- Да.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>. <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (...) <i>Не, не, не.</i> .';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Yeni proqram yaratmaq üçün App Registrierungen basīn, sonra yeni Anmeldung okuyun. Имено.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Не, не, не.<br/><br/>Имено.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = '.<br/><br/> да го направим, да го направим.<br/><br/>- Не, не.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = '.<br/>. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = '. <i>Základní SAML</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = '.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = '- Да.';

$GLOBALS["lang"]['Client ID'] = '.';

$GLOBALS["lang"]['Client ID and Secret'] = '.';

$GLOBALS["lang"]['client_ident'] = '.';

$GLOBALS["lang"]['Client Ident'] = '.';

$GLOBALS["lang"]['client_secret'] = '.';

$GLOBALS["lang"]['Client Secret'] = '.';

$GLOBALS["lang"]['client_site_name'] = '- Да.';

$GLOBALS["lang"]['Client Site Name'] = '- Да.';

$GLOBALS["lang"]['Close'] = '- Не, не.';

$GLOBALS["lang"]['Closed'] = '- Да.';

$GLOBALS["lang"]['Cloud'] = 'Yadda saxla';

$GLOBALS["lang"]['Cloud Details'] = '- Да.';

$GLOBALS["lang"]['Cloud Discovery'] = 'Axtarşş@';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = '- Да.';

$GLOBALS["lang"]['cloud_id'] = '.';

$GLOBALS["lang"]['Cloud ID'] = '.';

$GLOBALS["lang"]['cloud_log'] = '.';

$GLOBALS["lang"]['Cloud Log'] = '.';

$GLOBALS["lang"]['cloud_name'] = '.';

$GLOBALS["lang"]['Cloud Name'] = '.';

$GLOBALS["lang"]['Cloud Network'] = '.';

$GLOBALS["lang"]['clouds'] = '- Да.';

$GLOBALS["lang"]['Clouds'] = '- Да.';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = '- Да.';

$GLOBALS["lang"]['cluster'] = '.';

$GLOBALS["lang"]['Cluster'] = '.';

$GLOBALS["lang"]['cluster_id'] = '.';

$GLOBALS["lang"]['Cluster ID'] = '.';

$GLOBALS["lang"]['cluster_name'] = '.';

$GLOBALS["lang"]['Cluster Name'] = '.';

$GLOBALS["lang"]['cluster_type'] = '.';

$GLOBALS["lang"]['Cluster Type'] = '.';

$GLOBALS["lang"]['clusters'] = 'Не, не, не.';

$GLOBALS["lang"]['Clusters'] = 'Не, не, не.';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Не, не, не.';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = '(Кийлиня)';

$GLOBALS["lang"]['Collection'] = '.';

$GLOBALS["lang"]['Collections'] = 'Не, не.';

$GLOBALS["lang"]['Collector'] = '.';

$GLOBALS["lang"]['Collector (UUID)'] = '(UID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Имено.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = '. <i>.</i> Имено. <i>.</i>...';

$GLOBALS["lang"]['Collector Dashboard'] = '.';

$GLOBALS["lang"]['Collector Name'] = '.';

$GLOBALS["lang"]['collector_uuid'] = '.';

$GLOBALS["lang"]['Collector Uuid'] = '.';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = ' Ein teď, když je to tak, je to tak. Имено.';

$GLOBALS["lang"]['Collectors'] = '.';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Имено.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = '.';

$GLOBALS["lang"]['Colombia'] = '- Да.';

$GLOBALS["lang"]['color'] = ' Name';

$GLOBALS["lang"]['Color'] = ' Name';

$GLOBALS["lang"]['Column'] = 'Ümumi';

$GLOBALS["lang"]['Columns'] = 'Калерея';

$GLOBALS["lang"]['command'] = '- Не, не.';

$GLOBALS["lang"]['Command'] = '- Не, не.';

$GLOBALS["lang"]['command_options'] = '- Да.';

$GLOBALS["lang"]['Command Options'] = '- Да.';

$GLOBALS["lang"]['command_output'] = '.';

$GLOBALS["lang"]['Command Output'] = '.';

$GLOBALS["lang"]['command_status'] = '.';

$GLOBALS["lang"]['Command Status'] = '.';

$GLOBALS["lang"]['command_time_to_execute'] = '.';

$GLOBALS["lang"]['Command Time To Execute'] = '.';

$GLOBALS["lang"]['comment'] = '- Не.';

$GLOBALS["lang"]['Comment'] = '- Не.';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['comments'] = '- Да.';

$GLOBALS["lang"]['Comments'] = '- Да.';

$GLOBALS["lang"]['commercial'] = '- Не, не.';

$GLOBALS["lang"]['Commercial'] = '- Не, не.';

$GLOBALS["lang"]['Commercial Support'] = '.';

$GLOBALS["lang"]['common_name'] = '.';

$GLOBALS["lang"]['Common Name'] = '.';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = '.';

$GLOBALS["lang"]['Community'] = '- Да.';

$GLOBALS["lang"]['Community Questions'] = '.';

$GLOBALS["lang"]['Community String'] = '.';

$GLOBALS["lang"]['Comoros the'] = '.';

$GLOBALS["lang"]['Compact'] = '- Не, не.';

$GLOBALS["lang"]['Company'] = 'Name';

$GLOBALS["lang"]['Complete these steps.'] = '.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'hücum Kompliksi (Aşagşv год. ya yüksk).';

$GLOBALS["lang"]['Component Table'] = '- Да.';

$GLOBALS["lang"]['Components (All Devices)'] = '.';

$GLOBALS["lang"]['Compute'] = 'Qeydiyat';

$GLOBALS["lang"]['Condition'] = '- Не, не.';

$GLOBALS["lang"]['Conduct a risk assessment'] = '.';

$GLOBALS["lang"]['Conduct awareness and training programs'] = '- Да.';

$GLOBALS["lang"]['Conduct management review meetings'] = '- Да.';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = '.';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = '.';

$GLOBALS["lang"]['Config'] = 'Qeydiyat';

$GLOBALS["lang"]['Config Default, currently '] = 'Трафл, ';

$GLOBALS["lang"]['config_file'] = 'Axtarşş@';

$GLOBALS["lang"]['Config File'] = 'Axtarşş@';

$GLOBALS["lang"]['config_manager_error_code'] = 'Komissiya meneceri';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Komissiya meneceri';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = '- Да.';

$GLOBALS["lang"]['configuration'] = 'Не, не.';

$GLOBALS["lang"]['Configuration'] = 'Не, не.';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = '.';

$GLOBALS["lang"]['Configure'] = '- Да.';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = '- Не, не.';

$GLOBALS["lang"]['Congo'] = 'Не, не, не.';

$GLOBALS["lang"]['Congo the'] = 'Не, не, не.';

$GLOBALS["lang"]['Connected To'] = '- Да.';

$GLOBALS["lang"]['connection'] = 'E-Poçon';

$GLOBALS["lang"]['Connection'] = 'E-Poçon';

$GLOBALS["lang"]['Connection Options'] = '.';

$GLOBALS["lang"]['connection_status'] = 'Не, не.';

$GLOBALS["lang"]['Connection Status'] = 'Не, не.';

$GLOBALS["lang"]['connections'] = '- Да.';

$GLOBALS["lang"]['Connections'] = '- Да.';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Не, не.';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = '.';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = '- Да.';

$GLOBALS["lang"]['contact'] = '- Не, не.';

$GLOBALS["lang"]['Contact'] = '- Не, не.';

$GLOBALS["lang"]['contact_name'] = '.';

$GLOBALS["lang"]['Contact Name'] = '.';

$GLOBALS["lang"]['contained_in'] = '- Не, не.';

$GLOBALS["lang"]['Contained In'] = '- Не, не.';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = '.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = '- Да.';

$GLOBALS["lang"]['Context & Leadership'] = '.';

$GLOBALS["lang"]['Context Engine ID'] = '.';

$GLOBALS["lang"]['Context Name'] = '.';

$GLOBALS["lang"]['Continuously improve the ISMS'] = '.';

$GLOBALS["lang"]['contractual_obligations'] = '- Да.';

$GLOBALS["lang"]['Contractual Obligations'] = '- Да.';

$GLOBALS["lang"]['Cook Islands'] = '- Не, не.';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Не, не.';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = '.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = '- Не, не. <i>.</i> . <i>.</i> .';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = '- Не, не. <i>.</i> . <i>.</i> - Да.<br/>. <i>.</i>. <i>.</i> - Да.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = '. <i>.</i> - Да.';

$GLOBALS["lang"]['core_count'] = '.';

$GLOBALS["lang"]['Core Count'] = '.';

$GLOBALS["lang"]['Cores'] = 'Калерея';

$GLOBALS["lang"]['cost_center'] = '.';

$GLOBALS["lang"]['Cost Center'] = '.';

$GLOBALS["lang"]['cost_code'] = '.';

$GLOBALS["lang"]['Cost Code'] = '.';

$GLOBALS["lang"]['Costa Rica'] = '- Да.';

$GLOBALS["lang"]['Cote d Ivoire'] = '- Да.';

$GLOBALS["lang"]['count'] = '- Да.';

$GLOBALS["lang"]['Count'] = '- Да.';

$GLOBALS["lang"]['country'] = 'Не, не.';

$GLOBALS["lang"]['Country'] = 'Не, не.';

$GLOBALS["lang"]['country_code'] = '.';

$GLOBALS["lang"]['Country Code'] = '.';

$GLOBALS["lang"]['cpu_count'] = 'Cpu sayņ@';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu sayņ@';

$GLOBALS["lang"]['Create'] = 'Qeydiyat';

$GLOBALS["lang"]['Create Example Devices'] = 'Kompüter Cihazlarņ@';

$GLOBALS["lang"]['create_external_count'] = '- Не, не.';

$GLOBALS["lang"]['Create External Count'] = '- Не, не.';

$GLOBALS["lang"]['create_external_from_internal'] = 'Даксил ол';

$GLOBALS["lang"]['Create External From Internal'] = 'Даксил ол';

$GLOBALS["lang"]['Create File'] = 'Qeydiyat';

$GLOBALS["lang"]['Create Geocode'] = 'Геокод';

$GLOBALS["lang"]['create_internal_count'] = 'Не, не.';

$GLOBALS["lang"]['Create Internal Count'] = 'Не, не.';

$GLOBALS["lang"]['create_internal_from_external'] = 'Daxili yaradţlmasmanador. kg';

$GLOBALS["lang"]['Create Internal From External'] = 'Daxili yaradţlmasmanador. kg';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Offene Prüfung';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Не, не. ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Не, не, не.';

$GLOBALS["lang"]['Create a Baseline for the example device'] = '.';

$GLOBALS["lang"]['Create a Discovery'] = '.';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Приложимост (SOA)';

$GLOBALS["lang"]['created_by'] = 'Не, не, не.';

$GLOBALS["lang"]['Created By'] = 'Не, не, не.';

$GLOBALS["lang"]['created_date'] = '.';

$GLOBALS["lang"]['Created Date'] = '.';

$GLOBALS["lang"]['Creating'] = '- Да.';

$GLOBALS["lang"]['Creating Credentials'] = '- Да.';

$GLOBALS["lang"]['Creating Device'] = 'Cihaz aparatņ@';

$GLOBALS["lang"]['Creating Widgets'] = '.';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = '- Да.';

$GLOBALS["lang"]['Creating a Query'] = '- Да.';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = '.';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = ' :.';

$GLOBALS["lang"]['Creating an Integration'] = 'Не, не.';

$GLOBALS["lang"]['creator'] = 'Axtarşş@';

$GLOBALS["lang"]['Creator'] = 'Axtarşş@';

$GLOBALS["lang"]['credential'] = 'Не, не, не.';

$GLOBALS["lang"]['Credential'] = 'Не, не, не.';

$GLOBALS["lang"]['Credentials'] = '- Да.';

$GLOBALS["lang"]['Credentials Client ID'] = '.';

$GLOBALS["lang"]['Credentials Subscription ID'] = '.';

$GLOBALS["lang"]['Credentials Tenant ID'] = '- Да.';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = '- Да. <i>- Да.</i> Имено. <i>- Да.</i> . <i> </i> - Ne.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = '- Za prvé:';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Имено.';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = '. Azure Cloud Discovery istifad';

$GLOBALS["lang"]['Critical'] = '- Да.';

$GLOBALS["lang"]['criticality'] = '- Да.';

$GLOBALS["lang"]['Criticality'] = '- Да.';

$GLOBALS["lang"]['Croatia'] = '- Да.';

$GLOBALS["lang"]['Cuba'] = '.';

$GLOBALS["lang"]['current'] = '- Да.';

$GLOBALS["lang"]['Current'] = '- Да.';

$GLOBALS["lang"]['Current Discovery Processes'] = '.';

$GLOBALS["lang"]['Current date & time is '] = '. ';

$GLOBALS["lang"]['Currently Installed'] = '- Не, не.';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = '. <code>snmp</code>. <code>snmp_v3</code>. <code>ssh</code>. <code>ssh_key</code> . <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = '.';

$GLOBALS["lang"]['Custom TCP Ports'] = '.';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'TCP...';

$GLOBALS["lang"]['Custom UDP Ports'] = '- Да.';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = '- Да.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = '.';

$GLOBALS["lang"]['Cve'] = ' В';

$GLOBALS["lang"]['Cyprus'] = 'Не, не.';

$GLOBALS["lang"]['Czech'] = '- Да.';

$GLOBALS["lang"]['Czech Republic'] = '.';

$GLOBALS["lang"]['DHCP'] = 'Калерея';

$GLOBALS["lang"]['DN Account (optional)'] = '.';

$GLOBALS["lang"]['DN Password (optional)'] = '.';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = '- Не, не.';

$GLOBALS["lang"]['dashboard_id'] = '.';

$GLOBALS["lang"]['Dashboard ID'] = '.';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Калерея';

$GLOBALS["lang"]['dashboards'] = '.';

$GLOBALS["lang"]['Dashboards'] = '.';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Имено.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = '. <i>.</i> .';

$GLOBALS["lang"]['Dashboards use'] = '- Да.';

$GLOBALS["lang"]['Data'] = '.';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Експортиране на данни - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Не, не, не.';

$GLOBALS["lang"]['Database'] = '.';

$GLOBALS["lang"]['db_action'] = '- Да.';

$GLOBALS["lang"]['Database Action'] = '- Да.';

$GLOBALS["lang"]['db_column'] = ' Колона голота';

$GLOBALS["lang"]['Database Column'] = ' Колона голота';

$GLOBALS["lang"]['Database Definition'] = '.';

$GLOBALS["lang"]['db_row'] = '.';

$GLOBALS["lang"]['Database Row'] = '.';

$GLOBALS["lang"]['Database Schema'] = '.';

$GLOBALS["lang"]['Database Server Discovery'] = '.';

$GLOBALS["lang"]['db_table'] = '.';

$GLOBALS["lang"]['Database Table'] = '.';

$GLOBALS["lang"]['Database Tables'] = '.';

$GLOBALS["lang"]['dataset_title'] = 'Не, не, не.';

$GLOBALS["lang"]['Dataset Title'] = 'Не, не, не.';

$GLOBALS["lang"]['date'] = '- Да.';

$GLOBALS["lang"]['Date'] = '- Да.';

$GLOBALS["lang"]['Date D-M-Y'] = '.';

$GLOBALS["lang"]['Date M-D-Y'] = 'M-D-Y';

$GLOBALS["lang"]['Date Now'] = ' Je to tak.';

$GLOBALS["lang"]['date_of_manufacture'] = '.';

$GLOBALS["lang"]['Date Of Manufacture'] = '.';

$GLOBALS["lang"]['date_paid'] = '- Да.';

$GLOBALS["lang"]['Date Paid'] = '- Да.';

$GLOBALS["lang"]['date_received'] = '.';

$GLOBALS["lang"]['Date Received'] = '.';

$GLOBALS["lang"]['Date Y-M-D'] = 'Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = '.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = '.';

$GLOBALS["lang"]['Date when the CVE was published.'] = '.';

$GLOBALS["lang"]['DateTime Now'] = ' Je to tak.';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = '- Kryštof. M: S';

$GLOBALS["lang"]['day_of_month'] = '.';

$GLOBALS["lang"]['Day Of Month'] = '.';

$GLOBALS["lang"]['day_of_week'] = 'Не, не.';

$GLOBALS["lang"]['Day Of Week'] = 'Не, не.';

$GLOBALS["lang"]['Day of Month'] = '.';

$GLOBALS["lang"]['dbus_identifier'] = '.';

$GLOBALS["lang"]['Dbus Identifier'] = '.';

$GLOBALS["lang"]['Debug'] = 'Дебъгария';

$GLOBALS["lang"]['Debugging'] = '- Не, не.';

$GLOBALS["lang"]['Debugging a Script'] = '- Да.';

$GLOBALS["lang"]['December'] = '.';

$GLOBALS["lang"]['Decommission'] = '- Да.';

$GLOBALS["lang"]['Default'] = '- Да.';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = '. Qeydiyat';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = '.';

$GLOBALS["lang"]['Default Items'] = '- Не, не.';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Yadda saxla';

$GLOBALS["lang"]['Default Roles Groups'] = '- Да.';

$GLOBALS["lang"]['Default Value'] = 'Не, не, не.';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389... 636...';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = '- Да. <code>3</code> .';

$GLOBALS["lang"]['Defaults'] = '- Не, не.';

$GLOBALS["lang"]['Deferred'] = '- Не, не.';

$GLOBALS["lang"]['Define project scope and objectives'] = '.';

$GLOBALS["lang"]['Define the ISMS scope'] = '- Да.';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = '- Ja.';

$GLOBALS["lang"]['delay_minutes'] = 'Не, не, не.';

$GLOBALS["lang"]['Delay Minutes'] = 'Не, не, не.';

$GLOBALS["lang"]['Delete'] = '- Да.';

$GLOBALS["lang"]['Delete Example Devices'] = '.';

$GLOBALS["lang"]['delete_external_from_internal'] = '- Да.';

$GLOBALS["lang"]['Delete External From Internal'] = '- Да.';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = '.';

$GLOBALS["lang"]['Delete a {collection} entry.'] = '.';

$GLOBALS["lang"]['Delete from Application'] = '.';

$GLOBALS["lang"]['Delete from Cluster'] = '.';

$GLOBALS["lang"]['Denmark'] = '- Не, не.';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = '- Да.';

$GLOBALS["lang"]['Derived by audit.'] = '- Да.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = '. <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = '. <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = '.';

$GLOBALS["lang"]['Derived from OS Name.'] = '.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = '.';

$GLOBALS["lang"]['Derived from device audits.'] = '.';

$GLOBALS["lang"]['Derived from device type and OS.'] = '.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Не, не.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = '.';

$GLOBALS["lang"]['Derived from the integer severity.'] = '.';

$GLOBALS["lang"]['description'] = '- Да.';

$GLOBALS["lang"]['Description'] = '- Да.';

$GLOBALS["lang"]['destination'] = '- Да.';

$GLOBALS["lang"]['Destination'] = '- Да.';

$GLOBALS["lang"]['detail'] = '- Да.';

$GLOBALS["lang"]['Detail'] = '- Да.';

$GLOBALS["lang"]['Details'] = '- Да.';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = '- Да.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = '.';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Имено.';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = '.';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = '.';

$GLOBALS["lang"]['device'] = '- Не, не.';

$GLOBALS["lang"]['Device'] = '- Не, не.';

$GLOBALS["lang"]['Device Audits'] = 'Не, не.';

$GLOBALS["lang"]['Device Component Names'] = '- Да.';

$GLOBALS["lang"]['Device ID'] = '.';

$GLOBALS["lang"]['device_id'] = '.';

$GLOBALS["lang"]['device_id_a'] = '.';

$GLOBALS["lang"]['Device ID A'] = '.';

$GLOBALS["lang"]['device_id_b'] = '.';

$GLOBALS["lang"]['Device ID B'] = '.';

$GLOBALS["lang"]['Device Matching Rules'] = '.';

$GLOBALS["lang"]['Device Name'] = '.';

$GLOBALS["lang"]['Device Result'] = '- Не, не.';

$GLOBALS["lang"]['Device Results'] = '.';

$GLOBALS["lang"]['Device Seed'] = 'Калашдирма';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Domen adņqeydiyatdan keçirt ';

$GLOBALS["lang"]['Device Seed IP'] = 'Cihaz Qiym... t IP';

$GLOBALS["lang"]['Device Status'] = '- Не, не.';

$GLOBALS["lang"]['Device Types'] = '.';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = '.';

$GLOBALS["lang"]['Device is in the Subnet'] = '.';

$GLOBALS["lang"]['Devices'] = '- Да.';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Имено.';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Имено.';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Не, не, не.';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Не, не, не.';

$GLOBALS["lang"]['Devices Audited'] = '.';

$GLOBALS["lang"]['Devices Collection'] = '.';

$GLOBALS["lang"]['Devices Created in '] = '. ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = '.';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Не, не, не.';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Не, не, не.';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = '.';

$GLOBALS["lang"]['Devices Found Today'] = '.';

$GLOBALS["lang"]['Devices Found Yesterday'] = '.';

$GLOBALS["lang"]['Devices Missing Information'] = '- Не, не.';

$GLOBALS["lang"]['Devices Not Audited'] = 'Имено.';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = '.';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = ' Je to tak.';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '.';

$GLOBALS["lang"]['Devices Older Than X'] = '.';

$GLOBALS["lang"]['Devices Retrieved via API'] = '.';

$GLOBALS["lang"]['Devices Selected from '] = '. ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = '.';

$GLOBALS["lang"]['Devices Updated in '] = '. ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Offene Prüfung';

$GLOBALS["lang"]['Devices are being benchmarked.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = ' Je to tak.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = '- Да.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = '.';

$GLOBALS["lang"]['Devices in Running State'] = 'Имено.';

$GLOBALS["lang"]['Devices in Stopped State'] = '.';

$GLOBALS["lang"]['Devices in this'] = '.';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = '. <i>- Да.</i>.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Имено.';

$GLOBALS["lang"]['Devired from type or OS.'] = '- Да.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Вкля чване на Dhcp';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Вкля чване на Dhcp';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Наемане на Dhcp изтича';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Наемане на Dhcp изтича';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp лизиня almaq';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp лизиня almaq';

$GLOBALS["lang"]['dhcp_server'] = 'Сървър Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Сървър Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Не, не, не.';

$GLOBALS["lang"]['direction'] = '- Да.';

$GLOBALS["lang"]['Direction'] = '- Да.';

$GLOBALS["lang"]['directory'] = '- Да.';

$GLOBALS["lang"]['Directory'] = '- Да.';

$GLOBALS["lang"]['disabled'] = '.';

$GLOBALS["lang"]['Disabled'] = '.';

$GLOBALS["lang"]['discard'] = 'Puls';

$GLOBALS["lang"]['Discard'] = 'Puls';

$GLOBALS["lang"]['Discover'] = '- Да.';

$GLOBALS["lang"]['Discoveries'] = '- Да.';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = '- Да. <i>- Да.</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = '- Да.';

$GLOBALS["lang"]['Discovery'] = '- Да.';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Даксил ол';

$GLOBALS["lang"]['Discovery Data Retention'] = '.';

$GLOBALS["lang"]['discovery_id'] = '- Не, не.';

$GLOBALS["lang"]['Discovery ID'] = '- Не, не.';

$GLOBALS["lang"]['Discovery Issues'] = '.';

$GLOBALS["lang"]['discovery_log'] = 'Даксил ол';

$GLOBALS["lang"]['Discovery Log'] = 'Даксил ол';

$GLOBALS["lang"]['Discovery Match Options'] = '- Да.';

$GLOBALS["lang"]['Discovery Name'] = '.';

$GLOBALS["lang"]['Discovery Options'] = '.';

$GLOBALS["lang"]['Discovery Queue Count'] = 'AxtarşQeydiyat';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Qeydiyat';

$GLOBALS["lang"]['discovery_run'] = '.';

$GLOBALS["lang"]['Discovery Run'] = '.';

$GLOBALS["lang"]['discovery_scan_options'] = '.';

$GLOBALS["lang"]['Discovery Scan Options'] = '.';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Имено.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Дискавъри Сканиране növl...';

$GLOBALS["lang"]['Discovery Support'] = '.';

$GLOBALS["lang"]['Discovery has stopped working'] = '.';

$GLOBALS["lang"]['disk'] = 'Диско';

$GLOBALS["lang"]['Disk'] = 'Диско';

$GLOBALS["lang"]['display_version'] = '.';

$GLOBALS["lang"]['Display Version'] = '.';

$GLOBALS["lang"]['Display in Menu'] = 'Qeydiyat';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Пост / {спомен}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'POST / {collection} / Import üçün standart web formasēnīgöstбrin.';

$GLOBALS["lang"]['district'] = '- Да.';

$GLOBALS["lang"]['District'] = '- Да.';

$GLOBALS["lang"]['Djibouti'] = '.';

$GLOBALS["lang"]['dns'] = 'D';

$GLOBALS["lang"]['Dns'] = 'D';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Dmain Verordnung (EG) Nr. 882/2004 des Europäischen Parlaments und des Rates vom 20. Dezember 2006 über die Haushaltsordnung für den Gesamthaushaltsplan der Union (ABl.';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Dmain Verordnung (EG) Nr. 882/2004 des Europäischen Parlaments und des Rates vom 20. Dezember 2006 über die Haushaltsordnung für den Gesamthaushaltsplan der Union (ABl.';

$GLOBALS["lang"]['dns_fqdn'] = 'Dn Fqd';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dn Fqd';

$GLOBALS["lang"]['dns_host_name'] = '.';

$GLOBALS["lang"]['Dns Host Name'] = '.';

$GLOBALS["lang"]['dns_hostname'] = 'Име на хост';

$GLOBALS["lang"]['Dns Hostname'] = 'Име на хост';

$GLOBALS["lang"]['dns_server'] = 'Сървър Dns';

$GLOBALS["lang"]['Dns Server'] = 'Сървър Dns';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = '.';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = '.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = '.';

$GLOBALS["lang"]['Do not show me again'] = '.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = '.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = '.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = '.';

$GLOBALS["lang"]['documentation'] = 'Не, не.';

$GLOBALS["lang"]['Documentation'] = 'Не, не.';

$GLOBALS["lang"]['Documentation about a particular collection.'] = '.';

$GLOBALS["lang"]['Does Not Equal'] = '.';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = '.';

$GLOBALS["lang"]['domain'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Domain'] = 'PŘÍLOHA';

$GLOBALS["lang"]['domain_controller_address'] = 'Имено.';

$GLOBALS["lang"]['Domain Controller Address'] = 'Имено.';

$GLOBALS["lang"]['domain_controller_name'] = 'Имено.';

$GLOBALS["lang"]['Domain Controller Name'] = 'Имено.';

$GLOBALS["lang"]['domain_role'] = ' Je to tak.';

$GLOBALS["lang"]['Domain Role'] = ' Je to tak.';

$GLOBALS["lang"]['domain_short'] = 'Qeydiyat';

$GLOBALS["lang"]['Domain Short'] = 'Qeydiyat';

$GLOBALS["lang"]['Dominica'] = '- Да.';

$GLOBALS["lang"]['Dominican Republic'] = 'Не, не.';

$GLOBALS["lang"]['Don\\'] = '.';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = '.';

$GLOBALS["lang"]['Download'] = '- Да.';

$GLOBALS["lang"]['Download a File'] = '.';

$GLOBALS["lang"]['Download a file from URL'] = '.';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = '.';

$GLOBALS["lang"]['Download your updated version from'] = '.';

$GLOBALS["lang"]['driver'] = '.';

$GLOBALS["lang"]['Driver'] = '.';

$GLOBALS["lang"]['duplex'] = 'Автомобил';

$GLOBALS["lang"]['Duplex'] = 'Автомобил';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = '- Да.';

$GLOBALS["lang"]['duration'] = 'Не, не.';

$GLOBALS["lang"]['Duration'] = 'Не, не.';

$GLOBALS["lang"]['Dutch'] = 'Не, не, не.';

$GLOBALS["lang"]['ESXi'] = 'SALA';

$GLOBALS["lang"]['EULA'] = 'АБЯ@';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Имено. Nmap portlar üçün test ed.c.c.k. 22 (sh), 135 (wmi), 62078 (iPhone) v по UDP 161 (snmp. Имено.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = ' гонката, която е по-голяма отова, което се случва. <i>.<i> . <i>.<i>. Имено.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = '.';

$GLOBALS["lang"]['Ecuador'] = '.';

$GLOBALS["lang"]['Edit'] = 'Tarix';

$GLOBALS["lang"]['edit_log'] = 'Tarix';

$GLOBALS["lang"]['Edit Log'] = 'Tarix';

$GLOBALS["lang"]['editable'] = 'Tarix';

$GLOBALS["lang"]['Editable'] = 'Tarix';

$GLOBALS["lang"]['edited_by'] = 'Tarix';

$GLOBALS["lang"]['Edited By'] = 'Tarix';

$GLOBALS["lang"]['edited_date'] = '- Да.';

$GLOBALS["lang"]['Edited Date'] = '- Да.';

$GLOBALS["lang"]['edition'] = ' Издание';

$GLOBALS["lang"]['Edition'] = ' Издание';

$GLOBALS["lang"]['Egypt'] = '- Не, не.';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = '.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = '.

<strong>.</strong> - Ja.

<strong>Инди.</strong> Имено.

Имено.

Имено.';

$GLOBALS["lang"]['El Salvador'] = 'Не, не, не.';

$GLOBALS["lang"]['email'] = 'Електронна поща';

$GLOBALS["lang"]['Email'] = 'Електронна поща';

$GLOBALS["lang"]['email_address'] = '- Не, не.';

$GLOBALS["lang"]['Email Address'] = '- Не, не.';

$GLOBALS["lang"]['Email Configuration'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['Email to send test to'] = '.';

$GLOBALS["lang"]['Enable'] = '- Не, не.';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Bu kompüter üzr... asan Dağlīq COM - Seçki';

$GLOBALS["lang"]['enabled'] = 'Qeydiyat';

$GLOBALS["lang"]['Enabled'] = 'Qeydiyat';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = '.';

$GLOBALS["lang"]['encryption'] = 'Не, не.';

$GLOBALS["lang"]['Encryption'] = 'Не, не.';

$GLOBALS["lang"]['encryption_method'] = '- Да.';

$GLOBALS["lang"]['Encryption Method'] = '- Да.';

$GLOBALS["lang"]['encryption_status'] = '.';

$GLOBALS["lang"]['Encryption Status'] = '.';

$GLOBALS["lang"]['end_date'] = '- Да.';

$GLOBALS["lang"]['End Date'] = '- Да.';

$GLOBALS["lang"]['End OF Life Product ID'] = '.';

$GLOBALS["lang"]['end_of_life'] = '.';

$GLOBALS["lang"]['End Of Life'] = '.';

$GLOBALS["lang"]['end_of_production'] = '.';

$GLOBALS["lang"]['End Of Production'] = '.';

$GLOBALS["lang"]['end_of_service'] = '.';

$GLOBALS["lang"]['End Of Service'] = '.';

$GLOBALS["lang"]['end_of_service_life'] = '.';

$GLOBALS["lang"]['End Of Service Life'] = '.';

$GLOBALS["lang"]['Endpoint'] = '.';

$GLOBALS["lang"]['English'] = '- Да.';

$GLOBALS["lang"]['Enhances regulatory compliance'] = '.';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Сабит sayşr.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Не, не.';

$GLOBALS["lang"]['enterprise'] = 'Корпоратив';

$GLOBALS["lang"]['Enterprise'] = 'Корпоратив';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Не, не.';

$GLOBALS["lang"]['Enterprise private network'] = '.';

$GLOBALS["lang"]['Entitlement Type'] = '.';

$GLOBALS["lang"]['Entra'] = 'Entrasiya';

$GLOBALS["lang"]['environment'] = '- Не, не.';

$GLOBALS["lang"]['Environment'] = '- Не, не.';

$GLOBALS["lang"]['Equal To'] = '.';

$GLOBALS["lang"]['Equal To or Greater Than'] = '.';

$GLOBALS["lang"]['Equal To or Less Than'] = '.';

$GLOBALS["lang"]['Equals'] = '- Да.';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Не, не.';

$GLOBALS["lang"]['Eritrea'] = '- Да.';

$GLOBALS["lang"]['Error'] = '.';

$GLOBALS["lang"]['Error Code'] = '- Да.';

$GLOBALS["lang"]['Esperanto'] = ' Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = '.';

$GLOBALS["lang"]['Establish an information security policy'] = '.';

$GLOBALS["lang"]['Established'] = '.';

$GLOBALS["lang"]['Estonia'] = '- Да.';

$GLOBALS["lang"]['Estonian'] = '- Да.';

$GLOBALS["lang"]['Ethernet MAC'] = 'Equiliziya';

$GLOBALS["lang"]['ethernet_mac'] = 'Equiliziya';

$GLOBALS["lang"]['Ethernet Mac'] = 'Equiliziya';

$GLOBALS["lang"]['Ethiopia'] = '- Да.';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'ISMS daxili';

$GLOBALS["lang"]['Every'] = 'Не, не, не.';

$GLOBALS["lang"]['Every Day'] = '.';

$GLOBALS["lang"]['Example'] = '.';

$GLOBALS["lang"]['Example Devices'] = '.';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Достъ К до картата на Оря';

$GLOBALS["lang"]['Example text from'] = '.';

$GLOBALS["lang"]['Examples'] = '- Не, не.';

$GLOBALS["lang"]['Exceptions'] = '.';

$GLOBALS["lang"]['exclude'] = 'Не, не.';

$GLOBALS["lang"]['Exclude'] = 'Не, не.';

$GLOBALS["lang"]['exclude_ip'] = '- Ano.';

$GLOBALS["lang"]['Exclude IP'] = '- Ano.';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'E-Poçon';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'E- poçt ünvanzania..';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP Port';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Автомобил';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Автомобил';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP PortuName';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Портове Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Портове Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Имено.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = '.';

$GLOBALS["lang"]['Excluded'] = 'Не, не, не.';

$GLOBALS["lang"]['exclusion_reasons'] = 'Не, не.';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Не, не.';

$GLOBALS["lang"]['executable'] = '- Да.';

$GLOBALS["lang"]['Executable'] = '- Да.';

$GLOBALS["lang"]['executable_id'] = '- Да.';

$GLOBALS["lang"]['Executable ID'] = '- Да.';

$GLOBALS["lang"]['executables'] = '- Да.';

$GLOBALS["lang"]['Executables'] = '- Да.';

$GLOBALS["lang"]['Execute'] = 'Qeydiyat';

$GLOBALS["lang"]['Executing'] = '- Да.';

$GLOBALS["lang"]['exemption_reason'] = '.';

$GLOBALS["lang"]['Exemption Reason'] = '.';

$GLOBALS["lang"]['Existing Building'] = '.';

$GLOBALS["lang"]['Existing Floor'] = '.';

$GLOBALS["lang"]['Existing Room'] = '.';

$GLOBALS["lang"]['Existing Row'] = '- Не, не.';

$GLOBALS["lang"]['expire_date'] = '- Да.';

$GLOBALS["lang"]['Expire Date'] = '- Да.';

$GLOBALS["lang"]['expire_minutes'] = 'Не, не, не.';

$GLOBALS["lang"]['Expire Minutes'] = 'Не, не, не.';

$GLOBALS["lang"]['expires'] = '- Да.';

$GLOBALS["lang"]['Expires'] = '- Да.';

$GLOBALS["lang"]['expiry_date'] = '.';

$GLOBALS["lang"]['Expiry Date'] = '.';

$GLOBALS["lang"]['exploit_maturity'] = '- Не, не.';

$GLOBALS["lang"]['Exploit Maturity'] = '- Не, не.';

$GLOBALS["lang"]['Export'] = '- Да.';

$GLOBALS["lang"]['Export by Device'] = 'Město v Itálii';

$GLOBALS["lang"]['Export by Policy'] = '.';

$GLOBALS["lang"]['Export data to'] = '.';

$GLOBALS["lang"]['Exporting a Device'] = '- Да.';

$GLOBALS["lang"]['expose'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Expose'] = 'PŘÍLOHA';

$GLOBALS["lang"]['External'] = 'Не, не, не.';

$GLOBALS["lang"]['External Field Name'] = '- Да.';

$GLOBALS["lang"]['External Field Type'] = '.';

$GLOBALS["lang"]['External Field Types'] = '- Да.';

$GLOBALS["lang"]['external_ident'] = '.';

$GLOBALS["lang"]['External Ident'] = '.';

$GLOBALS["lang"]['external_link'] = 'Odkaz Xarici';

$GLOBALS["lang"]['External Link'] = 'Odkaz Xarici';

$GLOBALS["lang"]['extra_columns'] = '- Да.';

$GLOBALS["lang"]['Extra Columns'] = '- Да.';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Имено.';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = '.';

$GLOBALS["lang"]['FAQ'] = 'E-Poçon';

$GLOBALS["lang"]['FQDN'] = 'Калерея';

$GLOBALS["lang"]['FW Revision'] = '.';

$GLOBALS["lang"]['Fail'] = '- Да.';

$GLOBALS["lang"]['Failed'] = '.';

$GLOBALS["lang"]['Failed Severity'] = 'Не, не.';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = '- Ja.';

$GLOBALS["lang"]['Family'] = 'Не, не.';

$GLOBALS["lang"]['Faroe Islands'] = '.';

$GLOBALS["lang"]['Features'] = 'Не, не.';

$GLOBALS["lang"]['February'] = '.';

$GLOBALS["lang"]['field'] = 'Не, не, не.';

$GLOBALS["lang"]['Field'] = 'Не, не, не.';

$GLOBALS["lang"]['field_id'] = 'Не, не.';

$GLOBALS["lang"]['Field ID'] = 'Не, не.';

$GLOBALS["lang"]['Field Name'] = '- Да.';

$GLOBALS["lang"]['Field Type'] = '- Да.';

$GLOBALS["lang"]['Fields'] = '- Да.';

$GLOBALS["lang"]['fields'] = '- Да.';

$GLOBALS["lang"]['Fields attributes are'] = 'Не, не.';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = '.';

$GLOBALS["lang"]['File'] = 'Axtarşş@';

$GLOBALS["lang"]['File Auditing'] = 'Не, не, не.';

$GLOBALS["lang"]['File Import'] = 'Axtarşş@';

$GLOBALS["lang"]['File Input'] = '.';

$GLOBALS["lang"]['file_name'] = '.';

$GLOBALS["lang"]['File Name'] = '.';

$GLOBALS["lang"]['File Share Discovery'] = 'Калерея';

$GLOBALS["lang"]['file_size'] = '.';

$GLOBALS["lang"]['File Size'] = '.';

$GLOBALS["lang"]['filename'] = '- Да.';

$GLOBALS["lang"]['Filename'] = '- Да.';

$GLOBALS["lang"]['files'] = '- Да.';

$GLOBALS["lang"]['Files'] = '- Да.';

$GLOBALS["lang"]['files_id'] = '- Да.';

$GLOBALS["lang"]['Files ID'] = '- Да.';

$GLOBALS["lang"]['filter'] = '- Да.';

$GLOBALS["lang"]['Filter'] = '- Да.';

$GLOBALS["lang"]['filtered'] = '- Да.';

$GLOBALS["lang"]['Filtered'] = '- Да.';

$GLOBALS["lang"]['Filtered Ports'] = '- Да.';

$GLOBALS["lang"]['Finland'] = '.';

$GLOBALS["lang"]['Finnish'] = '.';

$GLOBALS["lang"]['Firewall'] = '- Да.';

$GLOBALS["lang"]['Firewall Packages'] = '.';

$GLOBALS["lang"]['firewall_rule'] = '- Не, не.';

$GLOBALS["lang"]['Firewall Rule'] = '- Не, не.';

$GLOBALS["lang"]['firmware'] = 'Qeydiyat';

$GLOBALS["lang"]['Firmware'] = 'Qeydiyat';

$GLOBALS["lang"]['firmware_revision'] = '.';

$GLOBALS["lang"]['Firmware Revision'] = '.';

$GLOBALS["lang"]['First'] = '- Да.';

$GLOBALS["lang"]['First Name'] = '.';

$GLOBALS["lang"]['first_run'] = '- Да.';

$GLOBALS["lang"]['First Run'] = '- Да.';

$GLOBALS["lang"]['first_seen'] = 'Илк БаксъК';

$GLOBALS["lang"]['First Seen'] = 'Илк БаксъК';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = '- Да.';

$GLOBALS["lang"]['FirstWave'] = '.';

$GLOBALS["lang"]['Fix'] = 'Kompüter';

$GLOBALS["lang"]['Fixed'] = '.';

$GLOBALS["lang"]['Fixing the Issue'] = '.';

$GLOBALS["lang"]['Floor'] = '- Да.';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = '. <b>- Да.</b>';

$GLOBALS["lang"]['For'] = 'Axtarşş@';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Axtarşş@ <i>- Да.</i> Имено.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = '.';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Имено.';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = '.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Имено.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Имено.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = '.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Имено. <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Не, не, не.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = '.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = '.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = '- Да.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = '.';

$GLOBALS["lang"]['For more information, see'] = '.';

$GLOBALS["lang"]['form_factor'] = 'Faktor';

$GLOBALS["lang"]['Form Factor'] = 'Faktor';

$GLOBALS["lang"]['format'] = '.';

$GLOBALS["lang"]['Format'] = '.';

$GLOBALS["lang"]['Forth'] = 'Ümumi';

$GLOBALS["lang"]['fqdn'] = '.';

$GLOBALS["lang"]['Fqdn'] = '.';

$GLOBALS["lang"]['France, French Republic'] = 'Не, не.';

$GLOBALS["lang"]['free'] = '.';

$GLOBALS["lang"]['Free'] = '.';

$GLOBALS["lang"]['French'] = '- Не, не.';

$GLOBALS["lang"]['French Guiana'] = '.';

$GLOBALS["lang"]['French Polynesia'] = 'Не, не, не.';

$GLOBALS["lang"]['French Southern Territories'] = '- Да.';

$GLOBALS["lang"]['Frequently Asked Questions'] = '.';

$GLOBALS["lang"]['Friday'] = '.';

$GLOBALS["lang"]['From 100 Devices'] = '100 na druhou.';

$GLOBALS["lang"]['From 500 Devices'] = ' Kalibalo. 500';

$GLOBALS["lang"]['From that page'] = '.';

$GLOBALS["lang"]['full_name'] = '.';

$GLOBALS["lang"]['Full Name'] = '.';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = '- Не, не.';

$GLOBALS["lang"]['function'] = '- Да.';

$GLOBALS["lang"]['Function'] = '- Да.';

$GLOBALS["lang"]['GROUP BY'] = '.';

$GLOBALS["lang"]['Gabon'] = '.';

$GLOBALS["lang"]['Galician'] = 'Не, не, не.';

$GLOBALS["lang"]['Gambia the'] = '- Да.';

$GLOBALS["lang"]['Gap Analysis (optional)'] = '- Ja.';

$GLOBALS["lang"]['gateway'] = '- Да.';

$GLOBALS["lang"]['Gateway'] = '- Да.';

$GLOBALS["lang"]['gateways'] = '- Да.';

$GLOBALS["lang"]['Gateways'] = '- Да.';

$GLOBALS["lang"]['Generated By'] = '- Не.';

$GLOBALS["lang"]['geo'] = ' Геометрия';

$GLOBALS["lang"]['Geo'] = ' Геометрия';

$GLOBALS["lang"]['Geographical Maps'] = '.';

$GLOBALS["lang"]['Georgia'] = 'Не, не, не.';

$GLOBALS["lang"]['German'] = '- Да.';

$GLOBALS["lang"]['Germany'] = '- Да.';

$GLOBALS["lang"]['Get Lat/Long'] = '.';

$GLOBALS["lang"]['Get News'] = '.';

$GLOBALS["lang"]['Get Started'] = '- Да.';

$GLOBALS["lang"]['Get a Free License'] = 'Не, не.';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = '.';

$GLOBALS["lang"]['Getting Started'] = '- Да.';

$GLOBALS["lang"]['Ghana'] = '- Да.';

$GLOBALS["lang"]['Gibraltar'] = '.';

$GLOBALS["lang"]['Github'] = 'Qeydiyat';

$GLOBALS["lang"]['Global Discovery Options'] = 'Настройки на глобалното откритие,';

$GLOBALS["lang"]['Global area network'] = 'Не, не.';

$GLOBALS["lang"]['Go'] = '.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Имено.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = '.';

$GLOBALS["lang"]['Go to menu'] = '- Не, не.';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = '. <i>- Да.</i> - Ja. <i>.</i> да го направим, да го направим.';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = '. <i>.</i> . <i>Qeydiyat</i> - Ano.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = '. <i>.</i> - Да. <i>.</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['Google JSON Credentials'] = ' Google годежът на Гугъл.';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API..';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Имено.';

$GLOBALS["lang"]['Greater Than'] = '.';

$GLOBALS["lang"]['Greater Than or Equals'] = '.';

$GLOBALS["lang"]['Greece'] = '.';

$GLOBALS["lang"]['Greek'] = 'Не, не, не.';

$GLOBALS["lang"]['Green Query'] = 'Yadda saxla';

$GLOBALS["lang"]['Greenland'] = '- Да.';

$GLOBALS["lang"]['Grenada'] = '- Да.';

$GLOBALS["lang"]['Group'] = '.';

$GLOBALS["lang"]['group_by'] = '.';

$GLOBALS["lang"]['Group By'] = '.';

$GLOBALS["lang"]['group_id'] = '.';

$GLOBALS["lang"]['Group ID'] = '.';

$GLOBALS["lang"]['groups'] = 'Не, не, не.';

$GLOBALS["lang"]['Groups'] = 'Не, не, не.';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'JSON istifad.. etm.k.. diyiniz zaman, onlar bir siyahşsīgeri <i>- Да.</i> Имено.';

$GLOBALS["lang"]['Guadeloupe'] = '- Да.';

$GLOBALS["lang"]['Guam'] = '- Не, не.';

$GLOBALS["lang"]['Guatemala'] = '- Да.';

$GLOBALS["lang"]['Guernsey'] = '- Да.';

$GLOBALS["lang"]['guest_device_id'] = '.';

$GLOBALS["lang"]['Guest Device ID'] = '.';

$GLOBALS["lang"]['guid'] = 'Qeydiyat';

$GLOBALS["lang"]['Guid'] = 'Qeydiyat';

$GLOBALS["lang"]['Guinea'] = '- Да.';

$GLOBALS["lang"]['Guinea-Bissau'] = '- Не, не.';

$GLOBALS["lang"]['Guyana'] = '- Да.';

$GLOBALS["lang"]['HP-UX'] = 'HP- UX';

$GLOBALS["lang"]['HW Revision'] = 'HW';

$GLOBALS["lang"]['Haiti'] = '- Да.';

$GLOBALS["lang"]['hard_drive_index'] = '.';

$GLOBALS["lang"]['Hard Drive Index'] = '.';

$GLOBALS["lang"]['Hardware'] = '- Не, не.';

$GLOBALS["lang"]['hardware_revision'] = '.';

$GLOBALS["lang"]['Hardware Revision'] = '.';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = '.';

$GLOBALS["lang"]['hash'] = ' {\cHFFFFFF}';

$GLOBALS["lang"]['Hash'] = ' {\cHFFFFFF}';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = '.';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = '. <i>- Да.</i> )';

$GLOBALS["lang"]['Head'] = ' Глава';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = '- Да.';

$GLOBALS["lang"]['Hebrew'] = '- Да.';

$GLOBALS["lang"]['height'] = '- Да.';

$GLOBALS["lang"]['Height'] = '- Да.';

$GLOBALS["lang"]['Height in RU'] = '.';

$GLOBALS["lang"]['Help'] = '- Не, не.';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Имено.';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = '- Да.';

$GLOBALS["lang"]['Hide Audit Window'] = '.';

$GLOBALS["lang"]['high'] = '- Да.';

$GLOBALS["lang"]['High'] = '- Да.';

$GLOBALS["lang"]['High Availability'] = '.';

$GLOBALS["lang"]['Hindi'] = 'Uşaq';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = '.';

$GLOBALS["lang"]['Home'] = 'Не, не.';

$GLOBALS["lang"]['home'] = 'Не, не.';

$GLOBALS["lang"]['Home Area Network'] = '.';

$GLOBALS["lang"]['Home area network'] = '- Да.';

$GLOBALS["lang"]['Honduras'] = 'Не, не.';

$GLOBALS["lang"]['Hong Kong'] = '.';

$GLOBALS["lang"]['host'] = '- Да.';

$GLOBALS["lang"]['Host'] = '- Да.';

$GLOBALS["lang"]['hostname'] = '.';

$GLOBALS["lang"]['Hostname'] = '.';

$GLOBALS["lang"]['hour'] = 'Předseda';

$GLOBALS["lang"]['Hour'] = 'Předseda';

$GLOBALS["lang"]['How Does It Work?'] = '.';

$GLOBALS["lang"]['How Does it Work?'] = '.';

$GLOBALS["lang"]['How Long Does it Take'] = '.';

$GLOBALS["lang"]['How and Why is'] = '.';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = '.';

$GLOBALS["lang"]['How do they work?'] = '- Да.';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = '- Да.';

$GLOBALS["lang"]['How long did the command take to execute.'] = '.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = '.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = '.';

$GLOBALS["lang"]['How many policies results in a fail.'] = '.';

$GLOBALS["lang"]['How many policies results in a pass.'] = '.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = '.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = '.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = '.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Това е така.';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Qarşşq nec... istismar edilir (напр. Network, Zusätzliche, lokale, Fizik).';

$GLOBALS["lang"]['How to compare'] = 'Не, не.';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = '.';

$GLOBALS["lang"]['Hungarian'] = '- Да.';

$GLOBALS["lang"]['Hungary'] = '- Да.';

$GLOBALS["lang"]['hw_cpe'] = 'Калерея';

$GLOBALS["lang"]['Hw Cpe'] = 'Калерея';

$GLOBALS["lang"]['hyperthreading'] = 'Яипертания';

$GLOBALS["lang"]['Hyperthreading'] = 'Яипертания';

$GLOBALS["lang"]['I have read the EULA.'] = 'Имено.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Имено.';

$GLOBALS["lang"]['id'] = '- Не, не.';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'Axtarşş@';

$GLOBALS["lang"]['IMPORTANT'] = 'Qeydiyat';

$GLOBALS["lang"]['INPUTS'] = ' Vgl.';

$GLOBALS["lang"]['IOS Version'] = 'Версия IOS';

$GLOBALS["lang"]['IP'] = 'E-Poçon';

$GLOBALS["lang"]['ip'] = 'E-Poçon';

$GLOBALS["lang"]['IP Address'] = 'IP-Ünvan';

$GLOBALS["lang"]['IP Addresses'] = 'IP Ünvanlar';

$GLOBALS["lang"]['IP Last Seen'] = 'IP-Synchronisation';

$GLOBALS["lang"]['IP Set By'] = 'E-Poct Daxil ol';

$GLOBALS["lang"]['ISMS'] = 'Qeydiyat';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 год.';

$GLOBALS["lang"]['Iceland'] = '.';

$GLOBALS["lang"]['icon'] = 'Икона';

$GLOBALS["lang"]['Icon'] = 'Икона';

$GLOBALS["lang"]['Icon and Text'] = 'Икона / текст';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Yalnīz, m.hsul yalnīz v....................................................................................................................................';

$GLOBALS["lang"]['id_internal'] = '- Да.';

$GLOBALS["lang"]['Id Internal'] = '- Да.';

$GLOBALS["lang"]['id_number'] = '- Да.';

$GLOBALS["lang"]['Id Number'] = '- Да.';

$GLOBALS["lang"]['identification'] = ' Je to tak.';

$GLOBALS["lang"]['Identification'] = ' Je to tak.';

$GLOBALS["lang"]['Identify information assets'] = 'Не, не.';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = '.';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = '.';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = '. <i>.</i> .';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Имено.';

$GLOBALS["lang"]['If'] = '.';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = '. <i>.</i> да го направим, да го направим.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Яени Org yaradīlīrsa, bir LDAP qsad addan avtomatik olarac yaranīlīr. Яени Org yaradīlīrsa v... Тест adlandīrţlsa, müxt голиК LDAP qrupu açţq-одит _ orgs _ test adlandīrīlacaq.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = '.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = '.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = '.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = '.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = '- Да.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = '.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Bu (komma seperated, heşbir yerl горл горльшдирилмК) limanlarő hesablanşrsa, SSH onlarşişl гольйр ваа онларя одит üçün istifad год. Xüsusi TCP portlarşna bu port год.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Имено.';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = ' год.: sistem üçün.nmis _ group / konfiguraion. Не, не.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = '- Да.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'OS Ail';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Open-Audit Server \'n buraxdīşkollektorlar varsa, гор dalla verilir. Имено.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = '.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = '.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = '.<br/><ul><li>Rol ad _ Gruppe t по şkal edir</li><li>- Да.</li><li>- Да.</li><li>çi LDAP var (bu aktiv Directory v... ya OpenLDAP) v... verilmişad _ gruppen</li></ul>Имено.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = '- Да.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Yerli sah... sin doğru (bool) v... y y y (string) v... y Y (estering) v... ya 1 (integer) olaraq xarici m... lumatrary y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = '.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = ' Na druhou stranu. <code>use_authorisation</code> Имено.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = '- Да. <code>use_authorisation</code> (вмъхнене)';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = '.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Имено.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = '.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = '.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Vitли готварски, vitли дори дори не са го виждали';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = '.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Имено.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Имено.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = '- Да.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = '.';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Не, не.';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = '.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = '.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Имено. инсанлар кими дейир - T2 (Полит) онлар овлини qarşīlamaq daha az yaxşņolduğunu düşünürl... Имено.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = '.';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Не, не.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Имено.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = '.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Не, не.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = ' голи, но...';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Имено. <i>.<i>.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Имено.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = '- Да.<br/><br/>Това е така.<br/><br/>.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = '. <strong>Qeydiyat</strong> .';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = '. <code>cn=Users,dc=your,dc=domain,dc=com</code> . <code>base_dn</code>. <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = '- Не, не. <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> . <code>base_dn</code> - Да. <code>dc=your,dc=domain,dc=com</code> Qeydiyat <code>user_dn</code> - Да. <code>uid=@username@@domain,cn=People</code>... <code>@username</code> Qeydiyat <code>@domain</code> - Не, не.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = '.';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = '.';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Имено.';

$GLOBALS["lang"]['If you set the values for'] = '.';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Имено. <strong>.</strong> да го направим, да го направим.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = '.';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = '.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = '. <i>Не, не, не.</i>.';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = '. <i>- Да.</i> Имено.';

$GLOBALS["lang"]['ifadminstatus'] = 'YaxşJi';

$GLOBALS["lang"]['Ifadminstatus'] = 'YaxşJi';

$GLOBALS["lang"]['iflastchange'] = 'Axtarşş@';

$GLOBALS["lang"]['Iflastchange'] = 'Axtarşş@';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Игнориране на невалидни SSL';

$GLOBALS["lang"]['Ignored'] = 'Qeydiyat';

$GLOBALS["lang"]['image'] = '- Да.';

$GLOBALS["lang"]['Image'] = '- Да.';

$GLOBALS["lang"]['Images'] = '- Да.';

$GLOBALS["lang"]['impact_availability'] = '- Да.';

$GLOBALS["lang"]['Impact Availability'] = '- Да.';

$GLOBALS["lang"]['impact_confidentiality'] = '.';

$GLOBALS["lang"]['Impact Confidentiality'] = '.';

$GLOBALS["lang"]['impact_integrity'] = '.';

$GLOBALS["lang"]['Impact Integrity'] = '.';

$GLOBALS["lang"]['Implement selected controls and procedures'] = '- Да.';

$GLOBALS["lang"]['Implementation'] = '- Да.';

$GLOBALS["lang"]['implementation_notes'] = '- Да.';

$GLOBALS["lang"]['Implementation Notes'] = '- Да.';

$GLOBALS["lang"]['Import'] = '- Да.';

$GLOBALS["lang"]['Import Example Data'] = '.';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Не, не.';

$GLOBALS["lang"]['improvement_opportunities'] = '.';

$GLOBALS["lang"]['Improvement Opportunities'] = '.';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Biznes inkişafņv... dayanşqlandīrma';

$GLOBALS["lang"]['In'] = 'Инди.';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = '. <i>Name</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = '.';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Имено. Ağa baiglīr v год. TCP / IP istifad год. Edin, bir qazanma / router / kompüter orada...';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = '. <code>WHERE @filter</code> Na druhou stranu. <i>- Не, не.</i> .';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = '.';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = '.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = '.';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Siyahşsņ@';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = '. <code>in</code> Qeydiyat <code>notin</code>- Не, не.<br/><br/>.<br/><br/>- Да. <strong>Qeydiyat</strong>. <strong>.</strong> . <code>notin</code>.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Bir neber... sah... sind... bir neber... sah... si (genellikle JSON форматşnda) bir BIGTEXT MySQL sah... sind... yrl... şdirdiyi halda (напр.: akreditasyon. Имено.';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Kompüter sür... <code>cd Downloads</code> )';

$GLOBALS["lang"]['Inactive'] = '- Да.';

$GLOBALS["lang"]['Include'] = 'Axtarşş@';

$GLOBALS["lang"]['Incomplete'] = 'Даксил ол';

$GLOBALS["lang"]['Index'] = '- Да.';

$GLOBALS["lang"]['India'] = '- Да.';

$GLOBALS["lang"]['Indonesia'] = '- Да.';

$GLOBALS["lang"]['Indonesian'] = '- Да.';

$GLOBALS["lang"]['Info'] = '- Да.';

$GLOBALS["lang"]['Information only.'] = 'Не, не, не.';

$GLOBALS["lang"]['Informational'] = '- Да.';

$GLOBALS["lang"]['initial_size'] = '.';

$GLOBALS["lang"]['Initial Size'] = '.';

$GLOBALS["lang"]['Initial login credentials are'] = '- Да.';

$GLOBALS["lang"]['Initiation'] = '.';

$GLOBALS["lang"]['inode'] = 'Инодеум';

$GLOBALS["lang"]['Inode'] = 'Инодеум';

$GLOBALS["lang"]['Input'] = 'Не, не.';

$GLOBALS["lang"]['Input Type'] = 'Не, не.';

$GLOBALS["lang"]['inputs'] = '- Да.';

$GLOBALS["lang"]['Inputs'] = '- Да.';

$GLOBALS["lang"]['Insane'] = ' Инсан';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = '.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = '.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = '.';

$GLOBALS["lang"]['install'] = 'Даксил ол';

$GLOBALS["lang"]['Install'] = 'Даксил ол';

$GLOBALS["lang"]['install_date'] = 'Даксил ол';

$GLOBALS["lang"]['Install Date'] = 'Даксил ол';

$GLOBALS["lang"]['install_directory'] = 'Директоря';

$GLOBALS["lang"]['Install Directory'] = 'Директоря';

$GLOBALS["lang"]['Install OpenScap if required'] = '.';

$GLOBALS["lang"]['install_source'] = 'Не, не, не.';

$GLOBALS["lang"]['Install Source'] = 'Не, не, не.';

$GLOBALS["lang"]['Install Support'] = '- Да.';

$GLOBALS["lang"]['installed_by'] = 'Qeydiyat';

$GLOBALS["lang"]['Installed By'] = 'Qeydiyat';

$GLOBALS["lang"]['installed_on'] = '.';

$GLOBALS["lang"]['Installed On'] = '.';

$GLOBALS["lang"]['Installing'] = '- Да.';

$GLOBALS["lang"]['Installing on Linux'] = '- Да.';

$GLOBALS["lang"]['Installing on MacOS'] = '.';

$GLOBALS["lang"]['Installing on Windows'] = '.';

$GLOBALS["lang"]['instance'] = 'Qeydiyat';

$GLOBALS["lang"]['Instance'] = 'Qeydiyat';

$GLOBALS["lang"]['instance_ident'] = 'Идентификация';

$GLOBALS["lang"]['Instance Ident'] = 'Идентификация';

$GLOBALS["lang"]['instance_options'] = '.';

$GLOBALS["lang"]['Instance Options'] = '.';

$GLOBALS["lang"]['instance_provider'] = '.';

$GLOBALS["lang"]['Instance Provider'] = '.';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Идентифициране';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Идентифициране';

$GLOBALS["lang"]['instance_state'] = '- Не.';

$GLOBALS["lang"]['Instance State'] = '- Не.';

$GLOBALS["lang"]['instance_tags'] = 'Značky';

$GLOBALS["lang"]['Instance Tags'] = 'Značky';

$GLOBALS["lang"]['instance_type'] = '- Да.';

$GLOBALS["lang"]['Instance Type'] = '- Да.';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = '.';

$GLOBALS["lang"]['integrations'] = '.';

$GLOBALS["lang"]['Integrations'] = '.';

$GLOBALS["lang"]['integrations_id'] = 'Etalanlar';

$GLOBALS["lang"]['Integrations ID'] = 'Etalanlar';

$GLOBALS["lang"]['integrations_log'] = '.';

$GLOBALS["lang"]['Integrations Log'] = '.';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Имено.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = '.';

$GLOBALS["lang"]['Interactive Dashboards'] = '.';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = '- Да.';

$GLOBALS["lang"]['interface'] = 'Qeydiyat';

$GLOBALS["lang"]['Interface'] = 'Qeydiyat';

$GLOBALS["lang"]['interface_id'] = 'Не, не, не.';

$GLOBALS["lang"]['Interface ID'] = 'Не, не, не.';

$GLOBALS["lang"]['interface_type'] = '.';

$GLOBALS["lang"]['Interface Type'] = '.';

$GLOBALS["lang"]['Internal'] = '.';

$GLOBALS["lang"]['Internal Audit'] = 'Не, не.';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Не, не.';

$GLOBALS["lang"]['Internal Field Name'] = 'Не, не.';

$GLOBALS["lang"]['Internal ID'] = '.';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Имено.';

$GLOBALS["lang"]['Introduction'] = '- Да.';

$GLOBALS["lang"]['invoice'] = '- Да.';

$GLOBALS["lang"]['Invoice'] = '- Да.';

$GLOBALS["lang"]['invoice_id'] = ' Лична карта.';

$GLOBALS["lang"]['Invoice ID'] = ' Лична карта.';

$GLOBALS["lang"]['invoice_item'] = '- Да.';

$GLOBALS["lang"]['Invoice Item'] = '- Да.';

$GLOBALS["lang"]['ios_version'] = 'Версия на Ios';

$GLOBALS["lang"]['Ios Version'] = 'Версия на Ios';

$GLOBALS["lang"]['ip_address_external_a'] = '- Не, не.';

$GLOBALS["lang"]['Ip Address External A'] = '- Не, не.';

$GLOBALS["lang"]['ip_address_external_b'] = '.';

$GLOBALS["lang"]['Ip Address External B'] = '.';

$GLOBALS["lang"]['ip_address_internal_a'] = '.';

$GLOBALS["lang"]['Ip Address Internal A'] = '.';

$GLOBALS["lang"]['ip_address_internal_b'] = '.';

$GLOBALS["lang"]['Ip Address Internal B'] = '.';

$GLOBALS["lang"]['ip_all_count'] = '.';

$GLOBALS["lang"]['Ip All Count'] = '.';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Geprüft sagen';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Geprüft sagen';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Keçmişsayş@';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Keçmişsayş@';

$GLOBALS["lang"]['ip_enabled'] = 'Вкля чен';

$GLOBALS["lang"]['Ip Enabled'] = 'Вкля чен';

$GLOBALS["lang"]['ip_responding_count'] = 'Qeydiyat';

$GLOBALS["lang"]['Ip Responding Count'] = 'Qeydiyat';

$GLOBALS["lang"]['ip_scanned_count'] = 'ИЯСканирани sayņ@';

$GLOBALS["lang"]['Ip Scanned Count'] = 'ИЯСканирани sayņ@';

$GLOBALS["lang"]['Iran'] = '- Да.';

$GLOBALS["lang"]['Iraq'] = 'Не, не, не.';

$GLOBALS["lang"]['Ireland'] = '- Да.';

$GLOBALS["lang"]['Irish'] = '- Да.';

$GLOBALS["lang"]['Is FRU'] = 'FRU';

$GLOBALS["lang"]['is_fru'] = 'Не, не, не.';

$GLOBALS["lang"]['Is Fru'] = 'Не, не, не.';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = '.';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = '. <code>n</code>.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = '.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = '.';

$GLOBALS["lang"]['Isle of Man'] = '.';

$GLOBALS["lang"]['Israel'] = '- Да.';

$GLOBALS["lang"]['Issue'] = '.';

$GLOBALS["lang"]['issuer'] = 'Tarix';

$GLOBALS["lang"]['Issuer'] = 'Tarix';

$GLOBALS["lang"]['issuer_name'] = '.';

$GLOBALS["lang"]['Issuer Name'] = '.';

$GLOBALS["lang"]['Issues'] = '.';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = '- Да. <i>.</i> .';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = '.';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Audit haqqqnda heşbir xüsusiyyrh <i> y</i> . <i> y</i> . Xüsusiyer';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = '.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = ' да го направим, за да го направим. <i>.</i>. <i>.</i>Dáme vám vědět.';

$GLOBALS["lang"]['Italian'] = '- Да.';

$GLOBALS["lang"]['Italy'] = '- Да.';

$GLOBALS["lang"]['Items not in Baseline'] = '.';

$GLOBALS["lang"]['JSON'] = ' J';

$GLOBALS["lang"]['JSON to Import'] = 'Axtarşş@';

$GLOBALS["lang"]['Jamaica'] = '.';

$GLOBALS["lang"]['January'] = '.';

$GLOBALS["lang"]['Japan'] = '- Да.';

$GLOBALS["lang"]['Japanese'] = '- Да.';

$GLOBALS["lang"]['Jersey'] = '- Да.';

$GLOBALS["lang"]['Jordan'] = '- Не, не.';

$GLOBALS["lang"]['July'] = '.';

$GLOBALS["lang"]['June'] = '.';

$GLOBALS["lang"]['Kazakhstan'] = '- Да.';

$GLOBALS["lang"]['Kenya'] = '- Да.';

$GLOBALS["lang"]['kernel_version'] = 'Qeydiyat';

$GLOBALS["lang"]['Kernel Version'] = 'Qeydiyat';

$GLOBALS["lang"]['Key'] = '- Да.';

$GLOBALS["lang"]['Key Components'] = '.';

$GLOBALS["lang"]['Key Password (optional)'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['keys'] = '- Да.';

$GLOBALS["lang"]['Keys'] = '- Да.';

$GLOBALS["lang"]['Kiribati'] = 'Не, не.';

$GLOBALS["lang"]['Korea'] = 'Не, не, не.';

$GLOBALS["lang"]['Korean'] = 'Не, не, не.';

$GLOBALS["lang"]['Kuwait'] = '- Не, не.';

$GLOBALS["lang"]['Kyrgyz'] = '- Да.';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Не, не, не.';

$GLOBALS["lang"]['LDAP Group'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = '.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'Имено.';

$GLOBALS["lang"]['lang'] = '- Да.';

$GLOBALS["lang"]['Lang'] = '- Да.';

$GLOBALS["lang"]['language'] = 'Не, не.';

$GLOBALS["lang"]['Language'] = 'Не, не.';

$GLOBALS["lang"]['Lao'] = '- Да.';

$GLOBALS["lang"]['last_changed'] = '.';

$GLOBALS["lang"]['Last Changed'] = '.';

$GLOBALS["lang"]['last_finished'] = '- Да.';

$GLOBALS["lang"]['Last Finished'] = '- Да.';

$GLOBALS["lang"]['last_logon'] = '- Да.';

$GLOBALS["lang"]['Last Logon'] = '- Да.';

$GLOBALS["lang"]['Last Name'] = '.';

$GLOBALS["lang"]['last_os_update'] = '.';

$GLOBALS["lang"]['Last Os Update'] = '.';

$GLOBALS["lang"]['last_result'] = '.';

$GLOBALS["lang"]['Last Result'] = '.';

$GLOBALS["lang"]['last_run'] = '.';

$GLOBALS["lang"]['Last Run'] = '.';

$GLOBALS["lang"]['last_seen'] = '.';

$GLOBALS["lang"]['Last Seen'] = '.';

$GLOBALS["lang"]['last_seen_by'] = '.';

$GLOBALS["lang"]['Last Seen By'] = '.';

$GLOBALS["lang"]['last_user'] = '- Да.';

$GLOBALS["lang"]['Last User'] = '- Да.';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = '.';

$GLOBALS["lang"]['lastModified'] = '.';

$GLOBALS["lang"]['LastModified'] = '.';

$GLOBALS["lang"]['latitude'] = '.';

$GLOBALS["lang"]['Latitude'] = '.';

$GLOBALS["lang"]['Latvia'] = '.';

$GLOBALS["lang"]['Latvian'] = '.';

$GLOBALS["lang"]['Layout'] = '.';

$GLOBALS["lang"]['ldap'] = 'ANHANG';

$GLOBALS["lang"]['Ldap'] = 'ANHANG';

$GLOBALS["lang"]['ldap_base_dn'] = 'Не, не.';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Не, не.';

$GLOBALS["lang"]['ldap_dn_account'] = 'ДЯ@@';

$GLOBALS["lang"]['Ldap Dn Account'] = 'ДЯ@@';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Парола';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Парола';

$GLOBALS["lang"]['Learn About'] = '.';

$GLOBALS["lang"]['Learn More'] = '.';

$GLOBALS["lang"]['lease_expiry_date'] = 'Qeydiyat';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Qeydiyat';

$GLOBALS["lang"]['Lebanon'] = '- Да.';

$GLOBALS["lang"]['legal_requirements'] = 'Не, не.';

$GLOBALS["lang"]['Legal Requirements'] = 'Не, не.';

$GLOBALS["lang"]['Lesotho'] = 'Не, не.';

$GLOBALS["lang"]['Less Than'] = '- Да.';

$GLOBALS["lang"]['Less Than or Equals'] = '.';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = '- Не, не.';

$GLOBALS["lang"]['level'] = '- Не, не.';

$GLOBALS["lang"]['Level'] = '- Не, не.';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'istismara lozīm olan imtiyazlarşn говмилии (No, Aşaņ, Yüksk).';

$GLOBALS["lang"]['Liberia'] = '.';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Въпреки това, това може да се дъджи на факта, че е е възможно да се види';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = '.';

$GLOBALS["lang"]['License'] = '- Да.';

$GLOBALS["lang"]['License Key'] = '.';

$GLOBALS["lang"]['License Required'] = '.';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Имено.<br/><br/>Имено.<br/><br/>Имено.<br/><br/>Имено.<br/>';

$GLOBALS["lang"]['Licenses'] = '.';

$GLOBALS["lang"]['Liechtenstein'] = '- Да.';

$GLOBALS["lang"]['Like'] = '- Да.';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = '.';

$GLOBALS["lang"]['Like versus Equals'] = '.';

$GLOBALS["lang"]['limit'] = 'Калерея';

$GLOBALS["lang"]['Limit'] = 'Калерея';

$GLOBALS["lang"]['Limit the query to the first X items.'] = '.';

$GLOBALS["lang"]['Limited to 100 rows.'] = ' Je to tak.';

$GLOBALS["lang"]['line_amount'] = '.';

$GLOBALS["lang"]['Line Amount'] = '.';

$GLOBALS["lang"]['Line Graph'] = 'Графика,';

$GLOBALS["lang"]['line_number_a'] = '.';

$GLOBALS["lang"]['Line Number A'] = '.';

$GLOBALS["lang"]['line_number_b'] = '.';

$GLOBALS["lang"]['Line Number B'] = '.';

$GLOBALS["lang"]['line_text'] = '.';

$GLOBALS["lang"]['Line Text'] = '.';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = '.';

$GLOBALS["lang"]['link'] = 'Axtarşş@';

$GLOBALS["lang"]['Link'] = 'Axtarşş@';

$GLOBALS["lang"]['Link (Advanced)'] = 'Yadda saxla';

$GLOBALS["lang"]['Linked Files'] = '.';

$GLOBALS["lang"]['links'] = '- Да.';

$GLOBALS["lang"]['Links'] = '- Да.';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Имено. <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = '. <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = '. <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = '. <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = '- Не, не.';

$GLOBALS["lang"]['Linux Packages'] = '.';

$GLOBALS["lang"]['List'] = '- Не, не.';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Bütten-NMAP Портове, Protokollar v год.';

$GLOBALS["lang"]['List Devices'] = 'Не, не, не.';

$GLOBALS["lang"]['List Discoveries'] = '- Да.';

$GLOBALS["lang"]['list_table_format'] = '- Да.';

$GLOBALS["lang"]['List Table Format'] = '- Да.';

$GLOBALS["lang"]['List Tables'] = '.';

$GLOBALS["lang"]['Lithuania'] = '- Да.';

$GLOBALS["lang"]['Lithuanian'] = '- Да.';

$GLOBALS["lang"]['Load Balancing'] = 'Не, не, не.';

$GLOBALS["lang"]['Local'] = '- Да.';

$GLOBALS["lang"]['Local Area Network'] = '.';

$GLOBALS["lang"]['local_port'] = '.';

$GLOBALS["lang"]['Local Port'] = '.';

$GLOBALS["lang"]['Local area network'] = '.';

$GLOBALS["lang"]['Localhost'] = '.';

$GLOBALS["lang"]['Localisation'] = '- Да.';

$GLOBALS["lang"]['Location'] = '- Не, не.';

$GLOBALS["lang"]['Location A'] = '.';

$GLOBALS["lang"]['Location B'] = '- Да.';

$GLOBALS["lang"]['location_id'] = '- Да.';

$GLOBALS["lang"]['Location ID'] = '- Да.';

$GLOBALS["lang"]['location_id_a'] = '.';

$GLOBALS["lang"]['Location ID A'] = '.';

$GLOBALS["lang"]['location_id_b'] = '- Да.';

$GLOBALS["lang"]['Location ID B'] = '- Да.';

$GLOBALS["lang"]['location_latitude'] = '- Не, не.';

$GLOBALS["lang"]['Location Latitude'] = '- Не, не.';

$GLOBALS["lang"]['location_level'] = '.';

$GLOBALS["lang"]['Location Level'] = '.';

$GLOBALS["lang"]['location_longitude'] = '- Не, не.';

$GLOBALS["lang"]['Location Longitude'] = '- Не, не.';

$GLOBALS["lang"]['Location Name'] = '- Да.';

$GLOBALS["lang"]['location_rack'] = '- Не, не.';

$GLOBALS["lang"]['Location Rack'] = '- Не, не.';

$GLOBALS["lang"]['location_rack_position'] = '- Не, не.';

$GLOBALS["lang"]['Location Rack Position'] = '- Не, не.';

$GLOBALS["lang"]['location_rack_size'] = '- Не, не.';

$GLOBALS["lang"]['Location Rack Size'] = '- Не, не.';

$GLOBALS["lang"]['location_room'] = '.';

$GLOBALS["lang"]['Location Room'] = '.';

$GLOBALS["lang"]['location_suite'] = '- Не, не.';

$GLOBALS["lang"]['Location Suite'] = '- Не, не.';

$GLOBALS["lang"]['Locations'] = '- Не, не.';

$GLOBALS["lang"]['Locations in this'] = '.';

$GLOBALS["lang"]['log'] = 'Axtarşş@';

$GLOBALS["lang"]['Log'] = 'Axtarşş@';

$GLOBALS["lang"]['log_format'] = 'Qeydiyat';

$GLOBALS["lang"]['Log Format'] = 'Qeydiyat';

$GLOBALS["lang"]['Log Line'] = '.';

$GLOBALS["lang"]['log_path'] = 'Адсояд';

$GLOBALS["lang"]['Log Path'] = 'Адсояд';

$GLOBALS["lang"]['log_rotation'] = '- Да.';

$GLOBALS["lang"]['Log Rotation'] = '- Да.';

$GLOBALS["lang"]['log_status'] = '- Да.';

$GLOBALS["lang"]['Log Status'] = '- Да.';

$GLOBALS["lang"]['Logging in'] = '- Да.';

$GLOBALS["lang"]['Logical Cores '] = 'Калерея ';

$GLOBALS["lang"]['logical_count'] = '.';

$GLOBALS["lang"]['Logical Count'] = '.';

$GLOBALS["lang"]['Logout'] = 'Даксил ол';

$GLOBALS["lang"]['Logs'] = '.';

$GLOBALS["lang"]['longitude'] = '- Да.';

$GLOBALS["lang"]['Longitude'] = '- Да.';

$GLOBALS["lang"]['low'] = '- Да.';

$GLOBALS["lang"]['Low'] = '- Да.';

$GLOBALS["lang"]['Lower Case'] = '.';

$GLOBALS["lang"]['Lowercase Hostname'] = '.';

$GLOBALS["lang"]['Luxembourg'] = '.';

$GLOBALS["lang"]['MAC Address'] = 'Axtarşş@';

$GLOBALS["lang"]['MAC Manufacturer'] = ' MAC';

$GLOBALS["lang"]['mac'] = '.';

$GLOBALS["lang"]['Mac'] = '.';

$GLOBALS["lang"]['Mac Address'] = 'Etalanlar';

$GLOBALS["lang"]['MacOS'] = 'Axtar';

$GLOBALS["lang"]['MacOS Packages'] = '.';

$GLOBALS["lang"]['Macao'] = '- Да.';

$GLOBALS["lang"]['Macedonia'] = 'Не, не, не.';

$GLOBALS["lang"]['Madagascar'] = '- Да.';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Имено.';

$GLOBALS["lang"]['maintenance_expires'] = '.';

$GLOBALS["lang"]['Maintenance Expires'] = '.';

$GLOBALS["lang"]['Make My Default Dashboard'] = '- Да.';

$GLOBALS["lang"]['Make this install a Collector'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Malawi'] = '- Не, не.';

$GLOBALS["lang"]['Malay'] = '- Да.';

$GLOBALS["lang"]['Malaysia'] = '- Да.';

$GLOBALS["lang"]['Maldives'] = '.';

$GLOBALS["lang"]['Mali'] = '- Да.';

$GLOBALS["lang"]['Malta'] = '- Не, не.';

$GLOBALS["lang"]['Manage'] = 'Qeydiyat';

$GLOBALS["lang"]['Manage Licenses'] = '.';

$GLOBALS["lang"]['Manage in NMIS'] = '- Да.';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Не, не.';

$GLOBALS["lang"]['Managed'] = 'Даксил ол';

$GLOBALS["lang"]['managed_by'] = 'Qeydiyat';

$GLOBALS["lang"]['Managed By'] = 'Qeydiyat';

$GLOBALS["lang"]['Manual Input'] = '.';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = '.';

$GLOBALS["lang"]['Manually set by user.'] = '.';

$GLOBALS["lang"]['manufacture_date'] = '.';

$GLOBALS["lang"]['Manufacture Date'] = '.';

$GLOBALS["lang"]['manufacturer'] = '.';

$GLOBALS["lang"]['Manufacturer'] = '.';

$GLOBALS["lang"]['manufacturer_code'] = '.';

$GLOBALS["lang"]['Manufacturer Code'] = '.';

$GLOBALS["lang"]['Map'] = '- Да.';

$GLOBALS["lang"]['maps'] = 'Не, не.';

$GLOBALS["lang"]['Maps'] = 'Не, не.';

$GLOBALS["lang"]['March'] = '.';

$GLOBALS["lang"]['Marshall Islands'] = 'Не, не.';

$GLOBALS["lang"]['Martinique'] = ' Мартин';

$GLOBALS["lang"]['mask'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Mask'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Match'] = 'Oyuncaq';

$GLOBALS["lang"]['match_options'] = '.';

$GLOBALS["lang"]['Match Options'] = '.';

$GLOBALS["lang"]['Match Order'] = '.';

$GLOBALS["lang"]['Match Process'] = '.';

$GLOBALS["lang"]['match_string'] = 'Калерея';

$GLOBALS["lang"]['Match String'] = 'Калерея';

$GLOBALS["lang"]['Matching Attribute'] = '- Да.';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = ' Co se děje?';

$GLOBALS["lang"]['Matching Linux Devices'] = '- Да.';

$GLOBALS["lang"]['Matching is conducted in the following order'] = '.';

$GLOBALS["lang"]['maturity_level'] = '.';

$GLOBALS["lang"]['Maturity Level'] = '.';

$GLOBALS["lang"]['maturity_score'] = '- Да.';

$GLOBALS["lang"]['Maturity Score'] = '- Да.';

$GLOBALS["lang"]['Mauritania'] = '- Да.';

$GLOBALS["lang"]['Mauritius'] = 'Не, не, не.';

$GLOBALS["lang"]['max_file_size'] = '(...)';

$GLOBALS["lang"]['Max File Size'] = '(...)';

$GLOBALS["lang"]['Max Length'] = '.';

$GLOBALS["lang"]['max_size'] = '(...)';

$GLOBALS["lang"]['Max Size'] = '(...)';

$GLOBALS["lang"]['May'] = '.';

$GLOBALS["lang"]['Mayotte'] = ' Maya';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Имено.';

$GLOBALS["lang"]['medium'] = '- Да.';

$GLOBALS["lang"]['Medium'] = '- Да.';

$GLOBALS["lang"]['members'] = '.';

$GLOBALS["lang"]['Members'] = '.';

$GLOBALS["lang"]['memory'] = 'Не, не, не.';

$GLOBALS["lang"]['Memory'] = 'Не, не, не.';

$GLOBALS["lang"]['memory_count'] = 'Yadda saxla';

$GLOBALS["lang"]['Memory Count'] = 'Yadda saxla';

$GLOBALS["lang"]['memory_slot_count'] = 'Yadda saxla';

$GLOBALS["lang"]['Memory Slot Count'] = 'Yadda saxla';

$GLOBALS["lang"]['menu_category'] = '.';

$GLOBALS["lang"]['Menu Category'] = '.';

$GLOBALS["lang"]['menu_display'] = 'Yadda saxla';

$GLOBALS["lang"]['Menu Display'] = 'Yadda saxla';

$GLOBALS["lang"]['message'] = 'Не, не.';

$GLOBALS["lang"]['Message'] = 'Не, не.';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Син на гризача';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Син на гризача';

$GLOBALS["lang"]['metric'] = '.';

$GLOBALS["lang"]['Metric'] = '.';

$GLOBALS["lang"]['Metropolitan Area Network'] = '.';

$GLOBALS["lang"]['Metropolitan area network'] = '.';

$GLOBALS["lang"]['Mexico'] = '- Не, не.';

$GLOBALS["lang"]['Micronesia'] = '- Да.';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Не, не.';

$GLOBALS["lang"]['Microtime'] = 'Не, не.';

$GLOBALS["lang"]['minute'] = '- Да.';

$GLOBALS["lang"]['Minute'] = '- Да.';

$GLOBALS["lang"]['Minutes'] = '- Да.';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = '.';

$GLOBALS["lang"]['model'] = 'Не, не.';

$GLOBALS["lang"]['Model'] = 'Не, не.';

$GLOBALS["lang"]['model_family'] = '.';

$GLOBALS["lang"]['Model Family'] = '.';

$GLOBALS["lang"]['Modified'] = 'Tarix';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Даксил ол';

$GLOBALS["lang"]['module'] = '- Не, не.';

$GLOBALS["lang"]['Module'] = '- Не, не.';

$GLOBALS["lang"]['module_index'] = '.';

$GLOBALS["lang"]['Module Index'] = '.';

$GLOBALS["lang"]['Modules'] = 'Модулар';

$GLOBALS["lang"]['Moldova'] = 'Не, не, не.';

$GLOBALS["lang"]['Monaco'] = '- Да.';

$GLOBALS["lang"]['Monday'] = '.';

$GLOBALS["lang"]['Mongolia'] = '.';

$GLOBALS["lang"]['monitor'] = '.';

$GLOBALS["lang"]['Monitor'] = '.';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = '.';

$GLOBALS["lang"]['Montenegro'] = '.';

$GLOBALS["lang"]['month'] = '- Да.';

$GLOBALS["lang"]['Month'] = '- Да.';

$GLOBALS["lang"]['Montserrat'] = '- Да.';

$GLOBALS["lang"]['More Information'] = '.';

$GLOBALS["lang"]['More Secure'] = '.';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Имено.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = '.';

$GLOBALS["lang"]['Morocco'] = '.';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Не, не.<br/><br/>.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Offen-Audit ....';

$GLOBALS["lang"]['motherboard'] = '- Да.';

$GLOBALS["lang"]['Motherboard'] = '- Да.';

$GLOBALS["lang"]['mount_point'] = 'Axtarşş@';

$GLOBALS["lang"]['Mount Point'] = 'Axtarşş@';

$GLOBALS["lang"]['mount_type'] = '.';

$GLOBALS["lang"]['Mount Type'] = '.';

$GLOBALS["lang"]['Mozambique'] = '.';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Имено.<br/>.';

$GLOBALS["lang"]['Must Respond to Ping'] = '.';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Не, не.';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = '.';

$GLOBALS["lang"]['Myanmar'] = 'Не, не, не.';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N-zu-1';

$GLOBALS["lang"]['N-to-N'] = '.';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Настройки на NIS устройство';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Избор на устройствоза NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = '- Да.';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Tarixi';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Qrupu';

$GLOBALS["lang"]['NMIS Poller'] = 'NIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NIS.';

$GLOBALS["lang"]['NOTE'] = '- Да.';

$GLOBALS["lang"]['NOTE #2'] = 'Qeydiyat';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'Имено.';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'Имено. Имено.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'Въпреки това, това, което се е случило, е, че това, което се е случило, е, че не е било възможно.';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'Имено. <code>decrypt_credentials</code> - Да. <code>n</code>.';

$GLOBALS["lang"]['name'] = '- Да.';

$GLOBALS["lang"]['Name'] = '- Да.';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Не, не, не.';

$GLOBALS["lang"]['Namibia'] = '- Да.';

$GLOBALS["lang"]['Nauru'] = '- Да.';

$GLOBALS["lang"]['Nepal'] = '- Да.';

$GLOBALS["lang"]['net_index'] = '.';

$GLOBALS["lang"]['Net Index'] = '.';

$GLOBALS["lang"]['Netherlands Antilles'] = '.';

$GLOBALS["lang"]['Netherlands the'] = 'Не, не, не.';

$GLOBALS["lang"]['netmask'] = 'Нетна маска';

$GLOBALS["lang"]['Netmask'] = 'Нетна маска';

$GLOBALS["lang"]['netstat'] = 'Axtar';

$GLOBALS["lang"]['Netstat'] = 'Axtar';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politikalarņ@';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Portu';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = '.';

$GLOBALS["lang"]['Network'] = 'Не, не, не.';

$GLOBALS["lang"]['network_address'] = '.';

$GLOBALS["lang"]['Network Address'] = '.';

$GLOBALS["lang"]['Network Discovery'] = 'Не, не, не.';

$GLOBALS["lang"]['network_domain'] = 'Axtarşş@';

$GLOBALS["lang"]['Network Domain'] = 'Axtarşş@';

$GLOBALS["lang"]['Network Types'] = '.';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Имено.<br/><br/>Имено.';

$GLOBALS["lang"]['networks'] = '.';

$GLOBALS["lang"]['Networks'] = '.';

$GLOBALS["lang"]['Networks Generated By'] = '.';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = '.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = ' да го направим, да го направим. <i>Не, не.</i> . Nmap, SNMP (UDP-Port 161) üçün bir prob görm гок üçün ümumimimidir. - Да Вакстен 99,9% -и Open- Audit deyil, hr hansmap deyil, lakin aşbu m.hsula s гол. Имено.';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Не, не.';

$GLOBALS["lang"]['New Building Name'] = '- Да.';

$GLOBALS["lang"]['New Caledonia'] = '.';

$GLOBALS["lang"]['New Floor Name'] = '.';

$GLOBALS["lang"]['New Room Name'] = '.';

$GLOBALS["lang"]['New Row Name'] = '.';

$GLOBALS["lang"]['New Zealand'] = '- Да.';

$GLOBALS["lang"]['News'] = '- Да.';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = '.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Не, не.<br/><br/>.';

$GLOBALS["lang"]['next_hop'] = '- Да.';

$GLOBALS["lang"]['Next Hop'] = '- Да.';

$GLOBALS["lang"]['next_run'] = '.';

$GLOBALS["lang"]['Next Run'] = '.';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = '. <i>.</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = '- Да.';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = '. Имоти, които не могат да бъдат използвани';

$GLOBALS["lang"]['Nicaragua'] = '- Да.';

$GLOBALS["lang"]['Niger'] = 'Не, не, не.';

$GLOBALS["lang"]['Nigeria'] = '- Да.';

$GLOBALS["lang"]['Niue'] = '- Да.';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Отговори сканиране на портове';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap port açţq olduğunu hesab ed год гол, çünkü paket filtreleme limana çatdţrmaqdan onun prodularņqarşnşalşr. да го направим, да го направим. Въпреки това, както е посочено по-горе, не може да се счита, че това е така';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Bir port açţq v... ein filtrovaný deyil ki, bu dövründ... Пристанище NMAP Yerl. год.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = '- Да.';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Qeydiyat';

$GLOBALS["lang"]['Nmis Customer'] = 'Qeydiyat';

$GLOBALS["lang"]['nmis_group'] = 'Skupina Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Skupina Nmis';

$GLOBALS["lang"]['nmis_manage'] = '.';

$GLOBALS["lang"]['Nmis Manage'] = '.';

$GLOBALS["lang"]['nmis_name'] = 'Nmis AdoptusCity in Kalifornien USA';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis AdoptusCity in Kalifornien USA';

$GLOBALS["lang"]['nmis_notes'] = 'Qeydiyat';

$GLOBALS["lang"]['Nmis Notes'] = 'Qeydiyat';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis rol';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis rol';

$GLOBALS["lang"]['No'] = '.';

$GLOBALS["lang"]['No Devices Returned'] = '.';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Google Maps API..';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Professional срещна Enterprise üçün lisenziya';

$GLOBALS["lang"]['No Results'] = '.';

$GLOBALS["lang"]['No data in License Key'] = 'Lisenziya m при lumatlarő';

$GLOBALS["lang"]['No database upgrade required at this time.'] = '.';

$GLOBALS["lang"]['No devices are in the database.'] = '.';

$GLOBALS["lang"]['Node'] = ' Не.';

$GLOBALS["lang"]['None'] = '.';

$GLOBALS["lang"]['Norfolk Island'] = 'Остров Норфолк';

$GLOBALS["lang"]['Normal'] = '- Да.';

$GLOBALS["lang"]['Northern Mariana Islands'] = '.';

$GLOBALS["lang"]['Norway'] = '- Не, не.';

$GLOBALS["lang"]['Norwegian'] = '- Не, не.';

$GLOBALS["lang"]['Not Applicable'] = '.';

$GLOBALS["lang"]['Not Checked'] = '.';

$GLOBALS["lang"]['Not Equals'] = '.';

$GLOBALS["lang"]['Not In'] = '.';

$GLOBALS["lang"]['Not Like'] = '.';

$GLOBALS["lang"]['Not Set'] = '- Да.';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = ' гонката, която е по-голяма отова, което се случва.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = '.';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = ' - Ano.';

$GLOBALS["lang"]['Note'] = '- Да.';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Qeyd - Bir uşaq seçm...';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = '.';

$GLOBALS["lang"]['Notes'] = '- Да.';

$GLOBALS["lang"]['notes'] = '- Да.';

$GLOBALS["lang"]['Notice'] = '- Да.';

$GLOBALS["lang"]['notin'] = 'Qeydiyat';

$GLOBALS["lang"]['Notin'] = 'Qeydiyat';

$GLOBALS["lang"]['November'] = '.';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = '.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = '- Да.<br/><br/>.<br/><br/> - ...<br/><br/>Имено.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = '- Да.';

$GLOBALS["lang"]['OS'] = 'Oxunub';

$GLOBALS["lang"]['OS Families'] = 'Не, не.';

$GLOBALS["lang"]['OS Family'] = 'Не, не.';

$GLOBALS["lang"]['OS Group'] = '.';

$GLOBALS["lang"]['OUTPUTS'] = '- Да.';

$GLOBALS["lang"]['oae_manage'] = 'Оае';

$GLOBALS["lang"]['Oae Manage'] = 'Оае';

$GLOBALS["lang"]['object_ident'] = '- Да.';

$GLOBALS["lang"]['Object Ident'] = '- Да.';

$GLOBALS["lang"]['Obtain top management support'] = '.';

$GLOBALS["lang"]['October'] = '.';

$GLOBALS["lang"]['Offset'] = 'Qeydiyat';

$GLOBALS["lang"]['Okta'] = ' O';

$GLOBALS["lang"]['Oman'] = '.';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = ' Je to tak.';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows \'da Open- Audit, provizorní birincil metodu olduğu kimi WMI istifad... edir. - Да. <i>.</i> Na druhou stranu. <strong>- Да.</strong> . <strong>.</strong> Имено. Aşaţdakşгод. на Windows PCs mövcud deyil v....';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = '. <i>- Да.</i> Na druhou stranu.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = '. <i>Калерея</i> .';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = '- Не, не.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Windows PC haqqinda, DCOM faydalşçalşr v... aşagşdakşxüsusiyyyyyyy... T... klif edir...';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Не, не.';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = '.';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Имено.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = '.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = '.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Имено.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Yeni spounded prosesi konfiqurasiya versionlarşnşnşalşr v год. Имено. <i> Опашка _ лимит</i>.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Имено.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Имено. <code>use_authorisation</code> .';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Не, не.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Имено. <i>AWS</i> .';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Имено. <i>Microsoft Azure</i> .';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Имено.';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = '. <code>3x2</code>. <code>4x2</code>. <code>4x3</code> . <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Kampánie M прирки, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Пасивна оптична локална мрежа, Лична зона Мрежа, Storage-Area Network, Виртуална';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = '.';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = '.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = '. <code>active directory</code> . <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Biri: антивирус, подръжка, защитна стена, t голя к... siz, göz...';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = '.';

$GLOBALS["lang"]['Online Documentation'] = '- Да.';

$GLOBALS["lang"]['Open'] = '- Да.';

$GLOBALS["lang"]['Open Data'] = '.';

$GLOBALS["lang"]['Open Source'] = 'Не, не, не.';

$GLOBALS["lang"]['Open-AudIT'] = '- Да.';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Имено.<br/><br/> Die. (Windows, Linux, Macos, et al)<br/><br/>Hec bir xüsusiyyr.';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Offene Audit СихаК Сечими';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = '- Да.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Имено. Professional plus bütün xüsusiyyyyyyyy';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT Licenses'] = '- Да.';

$GLOBALS["lang"]['Open-AudIT Options'] = '.';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = '- Да.';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = '.';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Имено.<br/><br/>Имено.<br/><br/>.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = '.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = '.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = ' Je to tak. Това е вярно.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = ' да го направим, но не е така.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = '- Co?';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = '.<br/><br/>Имено.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Имено.<br/><br/>Имено.<br/><br/>. <code>devices</code> - Да. <code>id</code> Je to tak.<br/><br/>Имено.<br/><br/>- Да. <code>last_seen</code> .<br/><br/>. <code>change_log</code> .<br/><br/>Имено. Axtarşş@ <code>current</code> - Не, не. <i> n</i> - Да.<br/><br/>. <i> y</i>.<br/><br/>. <i>- Да.</i>.<br/><br/>.<br/><br/>. <i> n</i>.<br/><br/>.<br/><br/> за да сече, че това може да се се случи, ако не е възможно. Je to tak. Не, не, не.<br/><br/>.<br/><br/> да го направим, да го направим.<br/><br/> {\cHFFFFFF}<br/><br/>* 2 - год.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell \"What\\'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = '- Да.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Имено.<br/><br/>- Да.<br/><br/>Имено.<br/><br/>admin rol formasiya, baza, qruplar, ldap server, logs, sorgular v гол...<br/><br/>Org _ admin rolu............. Имено. <code>org_id</code> - Да.<br/><br/>.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Имено.<br/><br/>- Да.<br/><br/>Имено.<br/><br/>admin rol formasiya, baza, qruplar, ldap server, logs, sorgular v гол...<br/><br/>Org _ admin rolu............. Имено.<br/><br/>.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = ' да го направим, да го направим. <strong>.</strong> .. 11 <strong>.</strong> - Да.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Това може да се дължи на факта, че не е възможно да се направи това.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = '.................';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = '.................';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Имено.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Имено.<br/><br/>.';

$GLOBALS["lang"]['OpenLDAP'] = 'Tarix';

$GLOBALS["lang"]['OpenScap is Installed'] = '.';

$GLOBALS["lang"]['Opening a Support Ticket?'] = '.';

$GLOBALS["lang"]['openldap_user_dn'] = '.';

$GLOBALS["lang"]['Openldap User Dn'] = '.';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Не, не.';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Не, не.';

$GLOBALS["lang"]['open|filtered'] = '- Да.';

$GLOBALS["lang"]['Open|filtered'] = '- Да.';

$GLOBALS["lang"]['Operating System'] = '- Да.';

$GLOBALS["lang"]['Operating System Family Contains'] = '- Да.';

$GLOBALS["lang"]['Operating Systems'] = '.';

$GLOBALS["lang"]['Operators'] = '- Да.';

$GLOBALS["lang"]['optical'] = '- Да.';

$GLOBALS["lang"]['Optical'] = '- Да.';

$GLOBALS["lang"]['Optimized'] = '- Да.';

$GLOBALS["lang"]['Option #1 - Change the data'] = '. 1...';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = ' Na druhou stranu.';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Не, не, не.';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Имено.';

$GLOBALS["lang"]['options'] = '- Да.';

$GLOBALS["lang"]['Options'] = '- Да.';

$GLOBALS["lang"]['Options, options, options'] = 'Имено.';

$GLOBALS["lang"]['Or'] = '.';

$GLOBALS["lang"]['Or select from the below fields.'] = '.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendant';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendant';

$GLOBALS["lang"]['org_id'] = 'Etalanlar';

$GLOBALS["lang"]['Org ID'] = 'Etalanlar';

$GLOBALS["lang"]['Organisation'] = 'Не, не, не.';

$GLOBALS["lang"]['organisation'] = 'Не, не, не.';

$GLOBALS["lang"]['Organisation Descendants'] = 'Не, не, не.';

$GLOBALS["lang"]['Organisations'] = '.';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['orgs'] = '.';

$GLOBALS["lang"]['Orgs'] = '.';

$GLOBALS["lang"]['Orgs Name'] = '- Да.';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = '- Да. <i>.</i> Qeydiyat <i>.</i> .<br/><br/>(Pop-Audit).<br/><br/>Имено. Бир истифад гохинин xüsusi Org daxil varsa, vaxtīn гон çoxu (heņ... deyil) Orgs qбul edir.';

$GLOBALS["lang"]['orientation'] = '- Да.';

$GLOBALS["lang"]['Orientation'] = '- Да.';

$GLOBALS["lang"]['os'] = 'Oxunub';

$GLOBALS["lang"]['Os'] = 'Oxunub';

$GLOBALS["lang"]['os_arch'] = 'Oxunub:';

$GLOBALS["lang"]['Os Arch'] = 'Oxunub:';

$GLOBALS["lang"]['os_bit'] = 'Oxunub';

$GLOBALS["lang"]['Os Bit'] = 'Oxunub';

$GLOBALS["lang"]['os_cpe'] = 'Oxunub';

$GLOBALS["lang"]['Os Cpe'] = 'Oxunub';

$GLOBALS["lang"]['os_display_version'] = '- Не, не.';

$GLOBALS["lang"]['Os Display Version'] = '- Не, не.';

$GLOBALS["lang"]['os_family'] = 'Не, не.';

$GLOBALS["lang"]['Os Family'] = 'Не, не.';

$GLOBALS["lang"]['os_group'] = 'Oxunub';

$GLOBALS["lang"]['Os Group'] = 'Oxunub';

$GLOBALS["lang"]['os_installation_date'] = '.';

$GLOBALS["lang"]['Os Installation Date'] = '.';

$GLOBALS["lang"]['os_licence_expiry'] = 'Oxunub:';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Oxunub:';

$GLOBALS["lang"]['os_license'] = '.';

$GLOBALS["lang"]['Os License'] = '.';

$GLOBALS["lang"]['os_license_code'] = 'Не, не.';

$GLOBALS["lang"]['Os License Code'] = 'Не, не.';

$GLOBALS["lang"]['os_license_mode'] = 'Oxunub:';

$GLOBALS["lang"]['Os License Mode'] = 'Oxunub:';

$GLOBALS["lang"]['os_license_type'] = '.';

$GLOBALS["lang"]['Os License Type'] = '.';

$GLOBALS["lang"]['os_name'] = '- Да.';

$GLOBALS["lang"]['Os Name'] = '- Да.';

$GLOBALS["lang"]['os_version'] = 'Oxunub';

$GLOBALS["lang"]['Os Version'] = 'Oxunub';

$GLOBALS["lang"]['Other'] = 'Дигър';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Имено.';

$GLOBALS["lang"]['Others'] = '.';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Имено.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = '. <i>- Да.</i> - Да.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = '.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Имено. <i>.</i>. Имено.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Имено.<br/><br/>Имено.<br/><br/>.<br/><br/>Не, не, не.<br/><br/> - ...<br/><br/>- Да. <b>.</b> дори, рдо, доди<br/><br/>Имено.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = '.';

$GLOBALS["lang"]['Our timeout for a WMI response'] = '.';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = '.';

$GLOBALS["lang"]['Our timeout for an audit script response'] = '.';

$GLOBALS["lang"]['output'] = 'Не, не.';

$GLOBALS["lang"]['Output'] = 'Не, не.';

$GLOBALS["lang"]['outputs'] = '- Не, не.';

$GLOBALS["lang"]['Outputs'] = '- Не, не.';

$GLOBALS["lang"]['Overall severity score (0–10).'] = ' )';

$GLOBALS["lang"]['overwrite'] = '.';

$GLOBALS["lang"]['Overwrite'] = '.';

$GLOBALS["lang"]['owner'] = 'Не, не.';

$GLOBALS["lang"]['Owner'] = 'Не, не.';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PExec, Sysinther / Microsofts mövcud PsExec proqramīnţn onlayn qeyd edilm. Имено.';

$GLOBALS["lang"]['PHP'] = ' PHP';

$GLOBALS["lang"]['POD'] = 'PŘÍLOHA';

$GLOBALS["lang"]['POSTing data'] = '.';

$GLOBALS["lang"]['Package'] = '- Да.';

$GLOBALS["lang"]['packages'] = '- Да.';

$GLOBALS["lang"]['Packages'] = '- Да.';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = '. <i>Не, не.</i>Server, v... s.<br/><br/> готварската граница е, че тя може да се използва и за да се орпедели дали е спобна да се се пратива се се се се се се се се се пра ста се се се се пра се се се се се ва се ста се се се се се се се права се ва се се се се се се пра ва се се се се се се се ';

$GLOBALS["lang"]['pagefile'] = '.';

$GLOBALS["lang"]['Pagefile'] = '.';

$GLOBALS["lang"]['Pakistan'] = '- Не, не.';

$GLOBALS["lang"]['Palau'] = '- Да.';

$GLOBALS["lang"]['Palestinian Territory'] = 'Не, не.';

$GLOBALS["lang"]['Panama'] = '.';

$GLOBALS["lang"]['Papua New Guinea'] = '.';

$GLOBALS["lang"]['Paraguay'] = 'Не, не.';

$GLOBALS["lang"]['Parameters'] = '- Да.';

$GLOBALS["lang"]['Paranoid'] = '.';

$GLOBALS["lang"]['Parent'] = '- Не, не.';

$GLOBALS["lang"]['parent_id'] = '.';

$GLOBALS["lang"]['Parent ID'] = '.';

$GLOBALS["lang"]['parent_name'] = '.';

$GLOBALS["lang"]['Parent Name'] = '.';

$GLOBALS["lang"]['part_number'] = '- Да.';

$GLOBALS["lang"]['Part Number'] = '- Да.';

$GLOBALS["lang"]['part_of_domain'] = '.';

$GLOBALS["lang"]['Part Of Domain'] = '.';

$GLOBALS["lang"]['Partition'] = '- Да.';

$GLOBALS["lang"]['partition_count'] = '.';

$GLOBALS["lang"]['Partition Count'] = '.';

$GLOBALS["lang"]['partition_disk_index'] = 'Не, не.';

$GLOBALS["lang"]['Partition Disk Index'] = 'Не, не.';

$GLOBALS["lang"]['Pass'] = '- Да.';

$GLOBALS["lang"]['Passed'] = '.';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Имено.';

$GLOBALS["lang"]['Password'] = '.';

$GLOBALS["lang"]['password'] = '.';

$GLOBALS["lang"]['password_changeable'] = '- Да.';

$GLOBALS["lang"]['Password Changeable'] = '- Да.';

$GLOBALS["lang"]['password_disabled'] = '.';

$GLOBALS["lang"]['Password Disabled'] = '.';

$GLOBALS["lang"]['password_expires'] = '- Да.';

$GLOBALS["lang"]['Password Expires'] = '- Да.';

$GLOBALS["lang"]['password_last_changed'] = '.';

$GLOBALS["lang"]['Password Last Changed'] = '.';

$GLOBALS["lang"]['password_required'] = '.';

$GLOBALS["lang"]['Password Required'] = '.';

$GLOBALS["lang"]['patch_panel'] = '.';

$GLOBALS["lang"]['Patch Panel'] = '.';

$GLOBALS["lang"]['patch_panel_port'] = '.';

$GLOBALS["lang"]['Patch Panel Port'] = '.';

$GLOBALS["lang"]['path'] = 'Tak jo.';

$GLOBALS["lang"]['Path'] = 'Tak jo.';

$GLOBALS["lang"]['Performance'] = '- Не, не.';

$GLOBALS["lang"]['Performed'] = '- Не, не.';

$GLOBALS["lang"]['Permission'] = 'Не, не.';

$GLOBALS["lang"]['Permission Required'] = '- Да.';

$GLOBALS["lang"]['permissions'] = '- Не, не.';

$GLOBALS["lang"]['Permissions'] = '- Не, не.';

$GLOBALS["lang"]['Persian'] = 'Axtar';

$GLOBALS["lang"]['Personal Area Network'] = '.';

$GLOBALS["lang"]['Personal area network'] = 'Не, не.';

$GLOBALS["lang"]['Peru'] = 'Не, не.';

$GLOBALS["lang"]['Philippines'] = 'Не, не.';

$GLOBALS["lang"]['phone'] = 'Qeydiyat';

$GLOBALS["lang"]['Phone'] = 'Qeydiyat';

$GLOBALS["lang"]['Physical CPUs'] = '- Да.';

$GLOBALS["lang"]['physical_count'] = '- Да.';

$GLOBALS["lang"]['Physical Count'] = '- Да.';

$GLOBALS["lang"]['physical_depth'] = '.';

$GLOBALS["lang"]['Physical Depth'] = '.';

$GLOBALS["lang"]['physical_height'] = '.';

$GLOBALS["lang"]['Physical Height'] = '.';

$GLOBALS["lang"]['physical_width'] = 'Не, не.';

$GLOBALS["lang"]['Physical Width'] = 'Не, не.';

$GLOBALS["lang"]['picture'] = '- Да.';

$GLOBALS["lang"]['Picture'] = '- Да.';

$GLOBALS["lang"]['pid'] = 'SALA';

$GLOBALS["lang"]['Pid'] = 'SALA';

$GLOBALS["lang"]['Pie Chart'] = 'Tarix';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = '.';

$GLOBALS["lang"]['ping'] = ' P';

$GLOBALS["lang"]['Ping'] = ' P';

$GLOBALS["lang"]['Ping Target'] = '.';

$GLOBALS["lang"]['Pitcairn Islands'] = '.';

$GLOBALS["lang"]['placement'] = '- Да.';

$GLOBALS["lang"]['Placement'] = '- Да.';

$GLOBALS["lang"]['Plan and conduct internal audits'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = '.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = '.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Не, не, не. <code>nslookup IP_ADDRESS_OF_TARGET</code> .';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = '.';

$GLOBALS["lang"]['Please see the FAQ'] = '.';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Имено.';

$GLOBALS["lang"]['Please set using'] = '.';

$GLOBALS["lang"]['Please visit the homepage at'] = '.';

$GLOBALS["lang"]['pod'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Pod'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Poland'] = '.';

$GLOBALS["lang"]['Policies'] = '- Да.';

$GLOBALS["lang"]['Policies have exceptions.'] = '- Да.';

$GLOBALS["lang"]['policy'] = '- Да.';

$GLOBALS["lang"]['Policy'] = '- Да.';

$GLOBALS["lang"]['policy_id'] = '.';

$GLOBALS["lang"]['Policy ID'] = '.';

$GLOBALS["lang"]['Policy Result'] = '.';

$GLOBALS["lang"]['Policy Results'] = '.';

$GLOBALS["lang"]['Polish'] = '.';

$GLOBALS["lang"]['Polite'] = 'Даксил ол';

$GLOBALS["lang"]['Populate the with values provided below:'] = '.';

$GLOBALS["lang"]['Populated by audit.'] = '- Да.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Не, не.';

$GLOBALS["lang"]['Populated dynamically.'] = '.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Kryštof.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = '- Ano.';

$GLOBALS["lang"]['Populated from device audits.'] = '.';

$GLOBALS["lang"]['Populated from hostname.'] = '.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = '.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = ' Na druhou stranu.';

$GLOBALS["lang"]['Populated from the hostname command.'] = '- Да.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = '- Да.';

$GLOBALS["lang"]['port'] = '- Не, не.';

$GLOBALS["lang"]['Port'] = '- Не, не.';

$GLOBALS["lang"]['port_name'] = '- Да.';

$GLOBALS["lang"]['Port Name'] = '- Да.';

$GLOBALS["lang"]['port_number'] = '- Не, не.';

$GLOBALS["lang"]['Port Number'] = '- Не, не.';

$GLOBALS["lang"]['ports_in_order'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Ports In Order'] = 'PŘÍLOHA';

$GLOBALS["lang"]['ports_stop_after'] = '.';

$GLOBALS["lang"]['Ports Stop After'] = '.';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Имено.';

$GLOBALS["lang"]['Portuguese'] = '- Да.';

$GLOBALS["lang"]['Portuguese (Brazil)'] = '.';

$GLOBALS["lang"]['position'] = '- Не, не.';

$GLOBALS["lang"]['Position'] = '- Не, не.';

$GLOBALS["lang"]['Post-Certification'] = '.';

$GLOBALS["lang"]['postcode'] = 'Proqram';

$GLOBALS["lang"]['Postcode'] = 'Proqram';

$GLOBALS["lang"]['power_circuit'] = '.';

$GLOBALS["lang"]['Power Circuit'] = '.';

$GLOBALS["lang"]['power_sockets'] = 'Даксил ол';

$GLOBALS["lang"]['Power Sockets'] = 'Даксил ол';

$GLOBALS["lang"]['Predictable'] = '- Да.';

$GLOBALS["lang"]['Preferences'] = '- Да.';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Не, не.';

$GLOBALS["lang"]['Prerequisites'] = '- Да.';

$GLOBALS["lang"]['Prerequisites and Tests'] = '.';

$GLOBALS["lang"]['present'] = 'Инди.';

$GLOBALS["lang"]['Present'] = 'Инди.';

$GLOBALS["lang"]['previous_value'] = '.';

$GLOBALS["lang"]['Previous Value'] = '.';

$GLOBALS["lang"]['primary'] = '- Да.';

$GLOBALS["lang"]['Primary'] = '- Да.';

$GLOBALS["lang"]['Primary Key'] = 'Не, не, не.';

$GLOBALS["lang"]['print_queue'] = '- Да.';

$GLOBALS["lang"]['Print Queue'] = '- Да.';

$GLOBALS["lang"]['printer_color'] = 'Axtarşş@';

$GLOBALS["lang"]['Printer Color'] = 'Axtarşş@';

$GLOBALS["lang"]['printer_duplex'] = 'Axtarşş@';

$GLOBALS["lang"]['Printer Duplex'] = 'Axtarşş@';

$GLOBALS["lang"]['printer_port_name'] = '.';

$GLOBALS["lang"]['Printer Port Name'] = '.';

$GLOBALS["lang"]['printer_shared'] = 'Axtarşş@';

$GLOBALS["lang"]['Printer Shared'] = 'Axtarşş@';

$GLOBALS["lang"]['printer_shared_name'] = '.';

$GLOBALS["lang"]['Printer Shared Name'] = '.';

$GLOBALS["lang"]['priority'] = '- Да.';

$GLOBALS["lang"]['Priority'] = '- Да.';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Yadda saxla';

$GLOBALS["lang"]['Privacy Protocol'] = 'Не, не.';

$GLOBALS["lang"]['privileges_required'] = '.';

$GLOBALS["lang"]['Privileges Required'] = '.';

$GLOBALS["lang"]['processor'] = '.';

$GLOBALS["lang"]['Processor'] = '.';

$GLOBALS["lang"]['processor_count'] = '- Да.';

$GLOBALS["lang"]['Processor Count'] = '- Да.';

$GLOBALS["lang"]['processor_slot_count'] = '.';

$GLOBALS["lang"]['Processor Slot Count'] = '.';

$GLOBALS["lang"]['processor_type'] = '- Да.';

$GLOBALS["lang"]['Processor Type'] = '- Да.';

$GLOBALS["lang"]['Processors'] = 'Не, не, не.';

$GLOBALS["lang"]['product_name'] = '- Да.';

$GLOBALS["lang"]['Product Name'] = '- Да.';

$GLOBALS["lang"]['Product Name Match from CPE: '] = '- Да. ';

$GLOBALS["lang"]['products'] = '- Да.';

$GLOBALS["lang"]['Products'] = '- Да.';

$GLOBALS["lang"]['Professional'] = '.';

$GLOBALS["lang"]['profile'] = ' Профил';

$GLOBALS["lang"]['Profile'] = ' Профил';

$GLOBALS["lang"]['program'] = 'Proqram';

$GLOBALS["lang"]['Program'] = 'Proqram';

$GLOBALS["lang"]['Properties'] = '- Да.';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = '.';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = '.';

$GLOBALS["lang"]['protocol'] = '- Да.';

$GLOBALS["lang"]['Protocol'] = '- Да.';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Мыллифлик срещя Севки срещия Сона çatdţrīlmaső.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = '.<br/>. <i>URI</i> . <i>.</i> .<br/>Имено. Open- Audit Serverl по php / logout http adres, ekran başşna kimi.<br/>.';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = '- Не, не.';

$GLOBALS["lang"]['provider'] = 'Истешалчи';

$GLOBALS["lang"]['Provider'] = 'Истешалчи';

$GLOBALS["lang"]['published'] = '- Да.';

$GLOBALS["lang"]['Published'] = '- Да.';

$GLOBALS["lang"]['published_date'] = '.';

$GLOBALS["lang"]['Published Date'] = '.';

$GLOBALS["lang"]['publisher'] = 'Не, не, не.';

$GLOBALS["lang"]['Publisher'] = 'Не, не, не.';

$GLOBALS["lang"]['Puerto Rico'] = 'Не, не.';

$GLOBALS["lang"]['Purchase'] = 'Не, не, не.';

$GLOBALS["lang"]['purchase_amount'] = '.';

$GLOBALS["lang"]['Purchase Amount'] = '.';

$GLOBALS["lang"]['purchase_cost_center'] = 'Не, не.';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Не, не.';

$GLOBALS["lang"]['purchase_count'] = 'Не, не.';

$GLOBALS["lang"]['Purchase Count'] = 'Не, не.';

$GLOBALS["lang"]['purchase_date'] = '- Да.';

$GLOBALS["lang"]['Purchase Date'] = '- Да.';

$GLOBALS["lang"]['purchase_invoice'] = '- Да.';

$GLOBALS["lang"]['Purchase Invoice'] = '- Да.';

$GLOBALS["lang"]['purchase_order'] = '.';

$GLOBALS["lang"]['Purchase Order'] = '.';

$GLOBALS["lang"]['purchase_order_number'] = '.';

$GLOBALS["lang"]['Purchase Order Number'] = '.';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Не, не.';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Не, не.';

$GLOBALS["lang"]['purchase_vendor'] = 'Předseda';

$GLOBALS["lang"]['Purchase Vendor'] = 'Předseda';

$GLOBALS["lang"]['purpose'] = '- Да.';

$GLOBALS["lang"]['Purpose'] = '- Да.';

$GLOBALS["lang"]['Qatar'] = '- Да.';

$GLOBALS["lang"]['queries'] = '.';

$GLOBALS["lang"]['Queries'] = '.';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Имено.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Qruplar üçün proqramlar yalnţz seçm годир';

$GLOBALS["lang"]['Query'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Bu Active Directory istifad...';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Bu Active Directory istifad...';

$GLOBALS["lang"]['queue'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Queue'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Queue Limit'] = 'Калерея';

$GLOBALS["lang"]['Queued Device Audits'] = 'Имено.';

$GLOBALS["lang"]['Queued IP Scans'] = 'Прокрамлар';

$GLOBALS["lang"]['Queued Items'] = '.';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'üçün RBAC';

$GLOBALS["lang"]['RU Start'] = 'RU Başlamaq';

$GLOBALS["lang"]['RX Bitrate'] = 'SALA';

$GLOBALS["lang"]['RX Freq'] = 'Калерея';

$GLOBALS["lang"]['RX Level'] = 'RX';

$GLOBALS["lang"]['RX Power'] = 'Yadda saxla';

$GLOBALS["lang"]['RX Profile'] = ' RX';

$GLOBALS["lang"]['Rack'] = 'Калерея';

$GLOBALS["lang"]['rack_devices'] = '.';

$GLOBALS["lang"]['Rack Devices'] = '.';

$GLOBALS["lang"]['rack_id'] = 'Qeys';

$GLOBALS["lang"]['Rack ID'] = 'Qeys';

$GLOBALS["lang"]['Rack Management and Reporting'] = '- Да.';

$GLOBALS["lang"]['Racks'] = 'Калерея';

$GLOBALS["lang"]['racks'] = 'Калерея';

$GLOBALS["lang"]['radio'] = '- Да.';

$GLOBALS["lang"]['Radio'] = '- Да.';

$GLOBALS["lang"]['Radio MAC'] = 'Equiliziya';

$GLOBALS["lang"]['rationale'] = '.';

$GLOBALS["lang"]['Rationale'] = '.';

$GLOBALS["lang"]['raw'] = ' Je to tak.';

$GLOBALS["lang"]['Raw'] = ' Je to tak.';

$GLOBALS["lang"]['read'] = 'Не, не.';

$GLOBALS["lang"]['Read'] = 'Не, не.';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = '.';

$GLOBALS["lang"]['Read through the log file at'] = '.';

$GLOBALS["lang"]['Received'] = '- Не, не.';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Имено. <i>- Да.</i>.<br/><br/>Имено. <i>Не, не, не.<i> .<br/><br/>Имено.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = '.';

$GLOBALS["lang"]['Red Query'] = '.';

$GLOBALS["lang"]['Redirect URI'] = 'URI';

$GLOBALS["lang"]['redirect_uri'] = 'Пренасочване на Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Пренасочване на Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = '.';

$GLOBALS["lang"]['references'] = '- Да.';

$GLOBALS["lang"]['References'] = '- Да.';

$GLOBALS["lang"]['region'] = 'Не, не, не.';

$GLOBALS["lang"]['Region'] = 'Не, не, не.';

$GLOBALS["lang"]['registered_user'] = '- Не, не.';

$GLOBALS["lang"]['Registered User'] = '- Не, не.';

$GLOBALS["lang"]['Rejected'] = ' Zurück';

$GLOBALS["lang"]['rel'] = ' Zurück';

$GLOBALS["lang"]['Rel'] = ' Zurück';

$GLOBALS["lang"]['Release'] = '.';

$GLOBALS["lang"]['remediation'] = '- Да.';

$GLOBALS["lang"]['Remediation'] = '- Да.';

$GLOBALS["lang"]['Remote'] = 'Даксил ол';

$GLOBALS["lang"]['remote_address'] = '.';

$GLOBALS["lang"]['Remote Address'] = '.';

$GLOBALS["lang"]['remote_port'] = 'Порт Даксили,';

$GLOBALS["lang"]['Remote Port'] = 'Порт Даксили,';

$GLOBALS["lang"]['Remove'] = '.';

$GLOBALS["lang"]['Remove Exception'] = '.';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = '- Да.';

$GLOBALS["lang"]['Report'] = '.';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Sizin cihazlarín, ş... h...';

$GLOBALS["lang"]['reportable'] = '- Да.';

$GLOBALS["lang"]['Reportable'] = '- Да.';

$GLOBALS["lang"]['Reports'] = '- Да.';

$GLOBALS["lang"]['request'] = '- Да.';

$GLOBALS["lang"]['Request'] = '- Да.';

$GLOBALS["lang"]['Request Method'] = '- Да.';

$GLOBALS["lang"]['Request Vulnerability'] = '- Да.';

$GLOBALS["lang"]['Request a Specific CVE'] = '.';

$GLOBALS["lang"]['requested'] = '- Да.';

$GLOBALS["lang"]['Requested'] = '- Да.';

$GLOBALS["lang"]['require_port'] = '.';

$GLOBALS["lang"]['Require Port'] = '.';

$GLOBALS["lang"]['Require an Open Port'] = '.';

$GLOBALS["lang"]['Required'] = 'Не, не, не.';

$GLOBALS["lang"]['Required AWS user permissions'] = '- Да.';

$GLOBALS["lang"]['Required Fields'] = '.';

$GLOBALS["lang"]['Reset'] = '.';

$GLOBALS["lang"]['Reset All Data'] = '.';

$GLOBALS["lang"]['Reset to Default'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['resource'] = 'Не, не, не.';

$GLOBALS["lang"]['Resource'] = 'Не, не, не.';

$GLOBALS["lang"]['Resource Name'] = '.';

$GLOBALS["lang"]['Resources'] = 'Не, не, не.';

$GLOBALS["lang"]['response'] = '- Да.';

$GLOBALS["lang"]['Response'] = '- Да.';

$GLOBALS["lang"]['responsibility'] = '- Да.';

$GLOBALS["lang"]['Responsibility'] = '- Да.';

$GLOBALS["lang"]['Restore my Licenses'] = '.';

$GLOBALS["lang"]['Restrict to Private'] = 'Република';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Субнетектив';

$GLOBALS["lang"]['result'] = '- Да.';

$GLOBALS["lang"]['Result'] = '- Да.';

$GLOBALS["lang"]['Resulting Function'] = '.';

$GLOBALS["lang"]['Results'] = '- Да.';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = '.';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Windows 2008 kimi OS Adşil';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = '- Да.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = ' Je to tak.';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = ' @ Info: whatsthis';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = '.';

$GLOBALS["lang"]['retrieved'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Retrieved'] = 'PŘÍLOHA';

$GLOBALS["lang"]['retrieved_ident'] = '- Да.';

$GLOBALS["lang"]['Retrieved Ident'] = '- Да.';

$GLOBALS["lang"]['retrieved_name'] = '- Да.';

$GLOBALS["lang"]['Retrieved Name'] = '- Да.';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = ' Zurück: Win32 _ ComputerSystemProdukt, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim-cmd hostvc / hostsummary, HPUX -: machinfo, ';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = '.';

$GLOBALS["lang"]['Retrieving or Creating'] = '- Да.';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = '.';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = '.';

$GLOBALS["lang"]['Return an individual device\\'] = '.';

$GLOBALS["lang"]['Returns a list of {collection}.'] = '- Да.';

$GLOBALS["lang"]['Returns a {collection} details.'] = '.';

$GLOBALS["lang"]['Reunion'] = '- Не, не.';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'ISO 27001 t год.';

$GLOBALS["lang"]['revision'] = '- Да.';

$GLOBALS["lang"]['Revision'] = '- Да.';

$GLOBALS["lang"]['risk_assesment_result'] = '.';

$GLOBALS["lang"]['Risk Assesment Result'] = '.';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = '.';

$GLOBALS["lang"]['Risk Management'] = '.';

$GLOBALS["lang"]['Role'] = '.';

$GLOBALS["lang"]['roles'] = '.';

$GLOBALS["lang"]['Roles'] = '.';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = '.';

$GLOBALS["lang"]['Romania'] = '- Да.';

$GLOBALS["lang"]['Romanian'] = '- Да.';

$GLOBALS["lang"]['Room'] = '.';

$GLOBALS["lang"]['route'] = '- Да.';

$GLOBALS["lang"]['Route'] = '- Да.';

$GLOBALS["lang"]['Row'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Row Count'] = '- Да.';

$GLOBALS["lang"]['row_position'] = '.';

$GLOBALS["lang"]['Row Position'] = '.';

$GLOBALS["lang"]['Rows'] = 'Калерея';

$GLOBALS["lang"]['ru_height'] = 'Калерея';

$GLOBALS["lang"]['Ru Height'] = 'Калерея';

$GLOBALS["lang"]['ru_start'] = '- Да.';

$GLOBALS["lang"]['Ru Start'] = '- Да.';

$GLOBALS["lang"]['rule_group'] = '.';

$GLOBALS["lang"]['Rule Group'] = '.';

$GLOBALS["lang"]['rules'] = 'Не, не, не.';

$GLOBALS["lang"]['Rules'] = 'Не, не, не.';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Имено.<br/><br/>Имено.';

$GLOBALS["lang"]['Run Discovery'] = '.';

$GLOBALS["lang"]['Run Discovery on Devices'] = '- Да.';

$GLOBALS["lang"]['Run Your Discovery'] = '.';

$GLOBALS["lang"]['Run a Command'] = '.';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = '. <b>- Да.</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Не, не, не. <code>cscript test_windows_client.vbs</code> - Да.';

$GLOBALS["lang"]['Run this Command'] = '.';

$GLOBALS["lang"]['runas'] = 'Даксил ол';

$GLOBALS["lang"]['Runas'] = 'Даксил ол';

$GLOBALS["lang"]['Running'] = '- Да.';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = '. Apache големоглаве К';

$GLOBALS["lang"]['Russian'] = 'Не, не.';

$GLOBALS["lang"]['Russian Federation'] = '.';

$GLOBALS["lang"]['Rwanda'] = '.';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Битрат';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Битрат';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = '- Не, не.';

$GLOBALS["lang"]['Rx Level'] = '- Не, не.';

$GLOBALS["lang"]['rx_power'] = 'Rx gücü';

$GLOBALS["lang"]['Rx Power'] = 'Rx gücü';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profiling';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profiling';

$GLOBALS["lang"]['SAN Audit'] = 'E-Poçon';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Automatik objevovat';

$GLOBALS["lang"]['SELECT'] = 'Qeydiyat';

$GLOBALS["lang"]['SID'] = 'Калерея';

$GLOBALS["lang"]['SM Version'] = 'Версия на SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1/v2)';

$GLOBALS["lang"]['SNMP Details'] = ' SN';

$GLOBALS["lang"]['SNMP OID'] = 'Калерея';

$GLOBALS["lang"]['SNMP Version'] = 'Версия на SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'V3';

$GLOBALS["lang"]['SQL'] = 'Qeydiyat';

$GLOBALS["lang"]['SQL (Advanced)'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL jaradţlmascalonia mбlumatlarī@';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'Bu xidm. ed.n SQL, widget-da itra olunacq.';

$GLOBALS["lang"]['SSH'] = 'Калерея';

$GLOBALS["lang"]['SSH Key'] = 'SSH големоглав';

$GLOBALS["lang"]['SW Revision'] = ' PŘÍLOHA';

$GLOBALS["lang"]['Saint Barthelemy'] = '.';

$GLOBALS["lang"]['Saint Helena'] = '.';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = '- Да.';

$GLOBALS["lang"]['Saint Lucia'] = '.';

$GLOBALS["lang"]['Saint Martin'] = '.';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = '.';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = '.';

$GLOBALS["lang"]['Samoa'] = 'Не, не, не.';

$GLOBALS["lang"]['san'] = '.';

$GLOBALS["lang"]['San'] = '.';

$GLOBALS["lang"]['San Marino'] = '.';

$GLOBALS["lang"]['Sao Tome and Principe'] = '.';

$GLOBALS["lang"]['Saturday'] = 'Не, не, не.';

$GLOBALS["lang"]['Saudi Arabia'] = '.';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = '.';

$GLOBALS["lang"]['Save as Default'] = ' Je to tak.';

$GLOBALS["lang"]['Save the downloaded file.'] = '- Да.';

$GLOBALS["lang"]['scaling'] = 'Скалиране';

$GLOBALS["lang"]['Scaling'] = 'Скалиране';

$GLOBALS["lang"]['scan_options'] = '- Да.';

$GLOBALS["lang"]['Scan Options'] = '- Да.';

$GLOBALS["lang"]['Scan Options ID'] = '- Да.';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Bu port (s) üçün Scan v... açţqlanmşsa, SHSH... laq... Bu, üz гонят xüsusi TCP Ports siyahīna..';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = '.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = '.';

$GLOBALS["lang"]['schedule'] = '- Не, не.';

$GLOBALS["lang"]['Schedule'] = '- Не, не.';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = '.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = '"Daha çox';

$GLOBALS["lang"]['scope'] = '- Да.';

$GLOBALS["lang"]['Scope'] = '- Да.';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Имено.<br/><br/>Имено.';

$GLOBALS["lang"]['script_timeout'] = '.';

$GLOBALS["lang"]['Script Timeout'] = '.';

$GLOBALS["lang"]['scripts'] = 'Etalanlar';

$GLOBALS["lang"]['Scripts'] = 'Etalanlar';

$GLOBALS["lang"]['scsi'] = 'Калерея';

$GLOBALS["lang"]['Scsi'] = 'Калерея';

$GLOBALS["lang"]['scsi_bus'] = 'Калерея';

$GLOBALS["lang"]['Scsi Bus'] = 'Калерея';

$GLOBALS["lang"]['scsi_logical_unit'] = '- Да.';

$GLOBALS["lang"]['Scsi Logical Unit'] = '- Да.';

$GLOBALS["lang"]['scsi_port'] = 'Калерея';

$GLOBALS["lang"]['Scsi Port'] = 'Калерея';

$GLOBALS["lang"]['Search'] = '- Да.';

$GLOBALS["lang"]['Search For a Device'] = '.';

$GLOBALS["lang"]['Searching Using DataTables'] = '.';

$GLOBALS["lang"]['Second'] = '- Да.';

$GLOBALS["lang"]['secondary'] = 'Не, не, не.';

$GLOBALS["lang"]['Secondary'] = 'Не, не, не.';

$GLOBALS["lang"]['Secondary Text'] = '.';

$GLOBALS["lang"]['Secret Key'] = '.';

$GLOBALS["lang"]['section'] = '- Не, не.';

$GLOBALS["lang"]['Section'] = '- Не, не.';

$GLOBALS["lang"]['secure'] = '- Да.';

$GLOBALS["lang"]['Secure'] = '- Да.';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Не, не.';

$GLOBALS["lang"]['Security Level'] = '.';

$GLOBALS["lang"]['Security Name'] = '.';

$GLOBALS["lang"]['Security Status'] = '.';

$GLOBALS["lang"]['security_zone'] = '.';

$GLOBALS["lang"]['Security Zone'] = '.';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = '- Да Имено.';

$GLOBALS["lang"]['See our page on enabling'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Seed Discoveries'] = '.';

$GLOBALS["lang"]['seed_ip'] = 'Benzyl';

$GLOBALS["lang"]['Seed IP'] = 'Benzyl';

$GLOBALS["lang"]['seed_ping'] = '- Не, не.';

$GLOBALS["lang"]['Seed Ping'] = '- Не, не.';

$GLOBALS["lang"]['seed_restrict_to_private'] = '.';

$GLOBALS["lang"]['Seed Restrict To Private'] = '.';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Подмрежа';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Подмрежа';

$GLOBALS["lang"]['Select'] = 'Не, не.';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Select All'] = '- Да.';

$GLOBALS["lang"]['Select All Devices'] = '- Да.';

$GLOBALS["lang"]['select_external_attribute'] = 'Отмъщение';

$GLOBALS["lang"]['Select External Attribute'] = 'Отмъщение';

$GLOBALS["lang"]['select_external_count'] = 'Xarici sayşseņ@';

$GLOBALS["lang"]['Select External Count'] = 'Xarici sayşseņ@';

$GLOBALS["lang"]['select_external_type'] = '- Не, не.';

$GLOBALS["lang"]['Select External Type'] = '- Не, не.';

$GLOBALS["lang"]['select_external_value'] = 'Не, не, не.';

$GLOBALS["lang"]['Select External Value'] = 'Не, не, не.';

$GLOBALS["lang"]['select_internal_attribute'] = 'Отмъщение';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Отмъщение';

$GLOBALS["lang"]['select_internal_count'] = '- Не, не.';

$GLOBALS["lang"]['Select Internal Count'] = '- Не, не.';

$GLOBALS["lang"]['select_internal_type'] = 'Не, не.';

$GLOBALS["lang"]['Select Internal Type'] = 'Не, не.';

$GLOBALS["lang"]['select_internal_value'] = '.';

$GLOBALS["lang"]['Select Internal Value'] = '.';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = '.';

$GLOBALS["lang"]['Select a Table'] = '.';

$GLOBALS["lang"]['Select an accredited certification body'] = '.';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Имено.';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Не, не, не. <i>.</i> подпрозре К<br/><br/>Proqram';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Не, не, не. <i>Не, не.</i> . <i>Tarix</i> ... <i>Tarix</i> - Да.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Не, не, не. <i>.</i> .';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = '. <i>- Да...</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = '- Да.';

$GLOBALS["lang"]['Self Delete'] = '.';

$GLOBALS["lang"]['Senegal'] = '- Да.';

$GLOBALS["lang"]['sensitivity'] = '- Не, не.';

$GLOBALS["lang"]['Sensitivity'] = '- Не, не.';

$GLOBALS["lang"]['September'] = '.';

$GLOBALS["lang"]['Serbia'] = '- Да.';

$GLOBALS["lang"]['serial'] = '.';

$GLOBALS["lang"]['Serial'] = '.';

$GLOBALS["lang"]['serial_imei'] = 'Qeydiyat';

$GLOBALS["lang"]['Serial Imei'] = 'Qeydiyat';

$GLOBALS["lang"]['serial_sim'] = 'Qeydiyat';

$GLOBALS["lang"]['Serial Sim'] = 'Qeydiyat';

$GLOBALS["lang"]['series'] = '- Да.';

$GLOBALS["lang"]['Series'] = '- Да.';

$GLOBALS["lang"]['server'] = '.';

$GLOBALS["lang"]['Server'] = '.';

$GLOBALS["lang"]['server_id'] = '.';

$GLOBALS["lang"]['Server ID'] = '.';

$GLOBALS["lang"]['Server Is'] = '- Да.';

$GLOBALS["lang"]['server_item'] = '- Да.';

$GLOBALS["lang"]['Server Item'] = '- Да.';

$GLOBALS["lang"]['Server Status'] = '.';

$GLOBALS["lang"]['Servers'] = '.';

$GLOBALS["lang"]['Servers Only'] = '.';

$GLOBALS["lang"]['service'] = '.';

$GLOBALS["lang"]['Service'] = '.';

$GLOBALS["lang"]['service_identifier'] = ' Na druhou stranu.';

$GLOBALS["lang"]['Service Identifier'] = ' Na druhou stranu.';

$GLOBALS["lang"]['service_level_a'] = '.';

$GLOBALS["lang"]['Service Level A'] = '.';

$GLOBALS["lang"]['service_level_b'] = '.';

$GLOBALS["lang"]['Service Level B'] = '.';

$GLOBALS["lang"]['service_network'] = '.';

$GLOBALS["lang"]['Service Network'] = '.';

$GLOBALS["lang"]['service_number'] = '.';

$GLOBALS["lang"]['Service Number'] = '.';

$GLOBALS["lang"]['service_pack'] = '.';

$GLOBALS["lang"]['Service Pack'] = '.';

$GLOBALS["lang"]['service_plan'] = '- Да.';

$GLOBALS["lang"]['Service Plan'] = '- Да.';

$GLOBALS["lang"]['service_provider'] = '- Да.';

$GLOBALS["lang"]['Service Provider'] = '- Да.';

$GLOBALS["lang"]['service_tag'] = '.';

$GLOBALS["lang"]['Service Tag'] = '.';

$GLOBALS["lang"]['service_type'] = '.';

$GLOBALS["lang"]['Service Type'] = '.';

$GLOBALS["lang"]['Service Under Windows'] = '.';

$GLOBALS["lang"]['service_version'] = '.';

$GLOBALS["lang"]['Service Version'] = '.';

$GLOBALS["lang"]['Set'] = '.';

$GLOBALS["lang"]['set_by'] = '- Да.';

$GLOBALS["lang"]['Set By'] = '- Да.';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = ' голмите, които не могат да се сбъднат.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = '.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = '- Да.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = '.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = '- Да.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = '.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Имено.<br/><br/>Subnet Discovery-da olduğu kimi, Active Directory Discovery bir gün, saat (s) v год.<br/><br/>Open-Audit Server \'n buraxdīşkollektorlar varsa, гор dalla verilir. Имено.';

$GLOBALS["lang"]['severity'] = '- Не.';

$GLOBALS["lang"]['Severity'] = '- Не.';

$GLOBALS["lang"]['severity_text'] = '.';

$GLOBALS["lang"]['Severity Text'] = '.';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = '. <code>base_score</code> да го направим, да го направим.';

$GLOBALS["lang"]['Seychelles'] = '- Да.';

$GLOBALS["lang"]['share'] = ' Дял';

$GLOBALS["lang"]['Share'] = ' Дял';

$GLOBALS["lang"]['Share Name'] = 'Yadda saxla';

$GLOBALS["lang"]['shared'] = 'Axtarşş@';

$GLOBALS["lang"]['Shared'] = 'Axtarşş@';

$GLOBALS["lang"]['shared_name'] = '.';

$GLOBALS["lang"]['Shared Name'] = '.';

$GLOBALS["lang"]['shell'] = 'Автомобил';

$GLOBALS["lang"]['Shell'] = 'Автомобил';

$GLOBALS["lang"]['Ship Date'] = '- Не, не.';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['short'] = '- Да.';

$GLOBALS["lang"]['Short'] = '- Да.';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = '.';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Имено. <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = '.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = '.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '.';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = ' - Ano.';

$GLOBALS["lang"]['Should we audit mount points.'] = '.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Не, не.';

$GLOBALS["lang"]['Should we audit the installed software.'] = '- Да.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '.';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = '.';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = '.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = '- Да.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = '.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = '.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = '.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = '- Да.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = '.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = '.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = '.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = '.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = '.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = '.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = '.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = '.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = '.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Имено.';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = '.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = ' гонката е на TCP22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = '.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = '.';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = '.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Имено.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = '. <code>y</code> . <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = '. <code>use_auth</code> . <code>y</code> - Да. <code>y</code> . <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = '.';

$GLOBALS["lang"]['Show All'] = '.';

$GLOBALS["lang"]['sid'] = '- Да.';

$GLOBALS["lang"]['Sid'] = '- Да.';

$GLOBALS["lang"]['sidebar'] = ' Страничен';

$GLOBALS["lang"]['Sidebar'] = ' Страничен';

$GLOBALS["lang"]['Sierra Leone'] = '- Не, не.';

$GLOBALS["lang"]['Singapore'] = '- Да.';

$GLOBALS["lang"]['Site A'] = '.';

$GLOBALS["lang"]['Site B'] = '- Да.';

$GLOBALS["lang"]['site_hours_a'] = 'Axtara';

$GLOBALS["lang"]['Site Hours A'] = 'Axtara';

$GLOBALS["lang"]['site_hours_b'] = 'Сайт Saatlarņ B.';

$GLOBALS["lang"]['Site Hours B'] = 'Сайт Saatlarņ B.';

$GLOBALS["lang"]['size'] = '- Да.';

$GLOBALS["lang"]['Size'] = '- Да.';

$GLOBALS["lang"]['slaves'] = 'Не, не.';

$GLOBALS["lang"]['Slaves'] = 'Не, не.';

$GLOBALS["lang"]['Slovak'] = 'Не, не, не.';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = '- Ja.';

$GLOBALS["lang"]['Slovenia'] = '- Да.';

$GLOBALS["lang"]['Slovenian'] = '- Ja.';

$GLOBALS["lang"]['Smart Status'] = '.';

$GLOBALS["lang"]['smversion'] = 'Не, не.';

$GLOBALS["lang"]['Smversion'] = 'Не, не.';

$GLOBALS["lang"]['Sneaky'] = 'Калерея';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Yadda saxla';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Yadda saxla';

$GLOBALS["lang"]['snmp_enterprise_name'] = '.';

$GLOBALS["lang"]['Snmp Enterprise Name'] = '.';

$GLOBALS["lang"]['snmp_oid'] = 'Даксил ол';

$GLOBALS["lang"]['Snmp Oid'] = 'Даксил ол';

$GLOBALS["lang"]['snmp_timeout'] = '.';

$GLOBALS["lang"]['Snmp Timeout'] = '.';

$GLOBALS["lang"]['snmp_version'] = 'Snmp verze';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp verze';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Имено...';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'V této souvislosti je třeba poznamenat, že v případě, že je to nezbytné pro dosažení cílů uvedených v čl...';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = '- Да... <i>.</i>. Не, не.<br/><br/>Имено.<br/><br/>.';

$GLOBALS["lang"]['socket'] = 'Даксил ол';

$GLOBALS["lang"]['Socket'] = 'Даксил ол';

$GLOBALS["lang"]['software'] = 'Не, не.';

$GLOBALS["lang"]['Software'] = 'Не, не.';

$GLOBALS["lang"]['Software Found Last 7 Days'] = '.';

$GLOBALS["lang"]['Software Found Today'] = 'Не, не.';

$GLOBALS["lang"]['Software Found Yesterday'] = '.';

$GLOBALS["lang"]['software_key'] = 'Имено.';

$GLOBALS["lang"]['Software Key'] = 'Имено.';

$GLOBALS["lang"]['Software License Reporting'] = '- Не, не.';

$GLOBALS["lang"]['software_name'] = '.';

$GLOBALS["lang"]['Software Name'] = '.';

$GLOBALS["lang"]['Software Policies'] = 'Не, не.';

$GLOBALS["lang"]['software_revision'] = '.';

$GLOBALS["lang"]['Software Revision'] = '.';

$GLOBALS["lang"]['software_version'] = 'Не, не.';

$GLOBALS["lang"]['Software Version'] = 'Не, не.';

$GLOBALS["lang"]['Solaris'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Solomon Islands'] = '.';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Имено.';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = '.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = '.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Имено. <i>- Не, не.</i> Имено.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = '. <i>.</i> - Не, не.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = '. <i>.</i> - Не, не.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Имено. <i>- Да.</i> Не, не.';

$GLOBALS["lang"]['Sort'] = '- Да.';

$GLOBALS["lang"]['sound'] = 'Не, не.';

$GLOBALS["lang"]['Sound'] = 'Не, не.';

$GLOBALS["lang"]['source'] = 'Не, не, не.';

$GLOBALS["lang"]['Source'] = 'Не, не, не.';

$GLOBALS["lang"]['South Africa'] = '- Да.';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Не, не.';

$GLOBALS["lang"]['Spain'] = '- Не, не.';

$GLOBALS["lang"]['Spanish'] = '- Да.';

$GLOBALS["lang"]['Specific to Azure.'] = '.';

$GLOBALS["lang"]['Specific to OKTA.'] = '- Ja.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Имено.';

$GLOBALS["lang"]['speed'] = 'Не, не, не.';

$GLOBALS["lang"]['Speed'] = 'Не, не, не.';

$GLOBALS["lang"]['speed_down_a'] = '.';

$GLOBALS["lang"]['Speed Down A'] = '.';

$GLOBALS["lang"]['speed_down_b'] = '.';

$GLOBALS["lang"]['Speed Down B'] = '.';

$GLOBALS["lang"]['speed_up_a'] = 'Не, не, не.';

$GLOBALS["lang"]['Speed Up A'] = 'Не, не, не.';

$GLOBALS["lang"]['speed_up_b'] = '.';

$GLOBALS["lang"]['Speed Up B'] = '.';

$GLOBALS["lang"]['sql'] = ' S';

$GLOBALS["lang"]['Sql'] = ' S';

$GLOBALS["lang"]['Sri Lanka'] = '.';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = '.';

$GLOBALS["lang"]['Ssh Timeout'] = '.';

$GLOBALS["lang"]['Stage 1: Documentation review'] = '- Да. 1:';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Да. 02: год.';

$GLOBALS["lang"]['Stand-Alone'] = '.';

$GLOBALS["lang"]['Standard'] = '- Да.';

$GLOBALS["lang"]['standard_id'] = 'Не, не.';

$GLOBALS["lang"]['Standard ID'] = 'Не, не.';

$GLOBALS["lang"]['standards'] = '- Да.';

$GLOBALS["lang"]['Standards'] = '- Да.';

$GLOBALS["lang"]['standards_policies'] = '- Да.';

$GLOBALS["lang"]['Standards Policies'] = '- Да.';

$GLOBALS["lang"]['standards_results'] = 'Не, не, не.';

$GLOBALS["lang"]['Standards Results'] = 'Не, не, не.';

$GLOBALS["lang"]['start_date'] = '- Да.';

$GLOBALS["lang"]['Start Date'] = '- Да.';

$GLOBALS["lang"]['start_mode'] = '- Да.';

$GLOBALS["lang"]['Start Mode'] = '- Да.';

$GLOBALS["lang"]['Start a web browser and go to'] = '.';

$GLOBALS["lang"]['started_date'] = '- Да.';

$GLOBALS["lang"]['Started Date'] = '- Да.';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Имено.';

$GLOBALS["lang"]['Starts With'] = '.';

$GLOBALS["lang"]['state'] = '- Не.';

$GLOBALS["lang"]['State'] = '- Не.';

$GLOBALS["lang"]['Stats'] = 'Статистика';

$GLOBALS["lang"]['status'] = 'Не, не.';

$GLOBALS["lang"]['Status'] = 'Не, не.';

$GLOBALS["lang"]['Storage'] = '- Да.';

$GLOBALS["lang"]['storage_count'] = '.';

$GLOBALS["lang"]['Storage Count'] = '.';

$GLOBALS["lang"]['Storage area network'] = '- Да.';

$GLOBALS["lang"]['Storage-Area Network'] = '- Да.';

$GLOBALS["lang"]['string'] = 'Axtarşş@';

$GLOBALS["lang"]['String'] = 'Axtarşş@';

$GLOBALS["lang"]['sub_resource_id'] = ' Na druhou stranu.';

$GLOBALS["lang"]['Sub Resource ID'] = ' Na druhou stranu.';

$GLOBALS["lang"]['sub_type'] = '- Да.';

$GLOBALS["lang"]['Sub Type'] = '- Да.';

$GLOBALS["lang"]['subject_key_ident'] = '.';

$GLOBALS["lang"]['Subject Key Ident'] = '.';

$GLOBALS["lang"]['Submit'] = 'Даксил ол';

$GLOBALS["lang"]['Submit Online'] = 'Онлайн';

$GLOBALS["lang"]['Submitted From'] = '- Да.';

$GLOBALS["lang"]['Subnet'] = ' PŘÍLOHA';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Keçmiş@';

$GLOBALS["lang"]['Subscription ID'] = 'Не, не, не.';

$GLOBALS["lang"]['suburb'] = '- Не.';

$GLOBALS["lang"]['Suburb'] = '- Не.';

$GLOBALS["lang"]['Success'] = '- Да.';

$GLOBALS["lang"]['Sudan'] = '- Да.';

$GLOBALS["lang"]['Sudo Password'] = '.';

$GLOBALS["lang"]['Sudo Password (optional)'] = '- Ja.';

$GLOBALS["lang"]['suite'] = 'PŘÍLOHA';

$GLOBALS["lang"]['Suite'] = 'PŘÍLOHA';

$GLOBALS["lang"]['summaries'] = '- Да.';

$GLOBALS["lang"]['Summaries'] = '- Да.';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = '- Да. <i>.</i> Имено.<br/><br/>. <i>- Да.</i> . <i>.</i> .<br/><br/>Geburt m <i>- Да.</i> Имено. <i>.</i>.<br/><br/>Имено.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Имено.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Имено.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = '- Да.';

$GLOBALS["lang"]['Summary'] = '- Да.';

$GLOBALS["lang"]['Sunday'] = '- Да.';

$GLOBALS["lang"]['supplier'] = 'Не, не.';

$GLOBALS["lang"]['Supplier'] = 'Не, не.';

$GLOBALS["lang"]['Support'] = '- Да.';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = '. <code>subnet</code>. <code>seed</code> Qeydiyat <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = '.';

$GLOBALS["lang"]['Suriname'] = '.';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = ' да го направим, ще го направим.';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = '.';

$GLOBALS["lang"]['Swaziland'] = '- Да.';

$GLOBALS["lang"]['Sweden'] = '- Не, не.';

$GLOBALS["lang"]['Swedish'] = '- Не, не.';

$GLOBALS["lang"]['switch_device_id'] = '.';

$GLOBALS["lang"]['Switch Device ID'] = '.';

$GLOBALS["lang"]['switch_port'] = '- Да.';

$GLOBALS["lang"]['Switch Port'] = '- Да.';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = '.';

$GLOBALS["lang"]['Symptom'] = '- Не, не.';

$GLOBALS["lang"]['Syrian Arab Republic'] = '.';

$GLOBALS["lang"]['sysContact'] = '- Не, не.';

$GLOBALS["lang"]['SysContact'] = '- Не, не.';

$GLOBALS["lang"]['sysDescr'] = 'Калерея';

$GLOBALS["lang"]['SysDescr'] = 'Калерея';

$GLOBALS["lang"]['sysLocation'] = '- Не, не.';

$GLOBALS["lang"]['SysLocation'] = '- Не, не.';

$GLOBALS["lang"]['sysName'] = 'Калерея';

$GLOBALS["lang"]['SysName'] = 'Калерея';

$GLOBALS["lang"]['sysObjectID'] = '- Не, не.';

$GLOBALS["lang"]['SysObjectID'] = '- Не, не.';

$GLOBALS["lang"]['sysUpTime'] = '- Не, не.';

$GLOBALS["lang"]['SysUpTime'] = '- Не, не.';

$GLOBALS["lang"]['system_component'] = 'Не, не, не.';

$GLOBALS["lang"]['System Component'] = 'Не, не, не.';

$GLOBALS["lang"]['System-Area Network'] = '- Да.';

$GLOBALS["lang"]['TX Bitrate'] = 'TX битрат';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Ниво TX';

$GLOBALS["lang"]['TX Power'] = 'TX gücü';

$GLOBALS["lang"]['TX Profile'] = 'TX Profil';

$GLOBALS["lang"]['Table'] = '- Да.';

$GLOBALS["lang"]['tag'] = 'Axtarşş@';

$GLOBALS["lang"]['Tag'] = 'Axtarşş@';

$GLOBALS["lang"]['tag_1'] = 'Qeydiyat';

$GLOBALS["lang"]['Tag 1'] = 'Qeydiyat';

$GLOBALS["lang"]['tag_2'] = 'Qeydiyat';

$GLOBALS["lang"]['Tag 2'] = 'Qeydiyat';

$GLOBALS["lang"]['tag_3'] = 'Qeydiyat';

$GLOBALS["lang"]['Tag 3'] = 'Qeydiyat';

$GLOBALS["lang"]['Tagalog'] = 'Axtarşş@';

$GLOBALS["lang"]['tags'] = 'Kateqoriya';

$GLOBALS["lang"]['Tags'] = 'Kateqoriya';

$GLOBALS["lang"]['Tags :: '] = '- Да. ';

$GLOBALS["lang"]['Taiwan'] = '- Да.';

$GLOBALS["lang"]['Tajikistan'] = '- Да.';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = '1 - год.';

$GLOBALS["lang"]['Tanzania'] = ' Танзания';

$GLOBALS["lang"]['Target Computer'] = 'Не, не, не.';

$GLOBALS["lang"]['task'] = 'Не, не.';

$GLOBALS["lang"]['Task'] = 'Не, не.';

$GLOBALS["lang"]['tasks'] = 'Не, не.';

$GLOBALS["lang"]['Tasks'] = 'Не, не.';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = '. Въпрос:';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp портове';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp портове';

$GLOBALS["lang"]['Technical Details'] = '.';

$GLOBALS["lang"]['tenant'] = 'Не, не, не.';

$GLOBALS["lang"]['Tenant'] = 'Не, не, не.';

$GLOBALS["lang"]['Tenant ID'] = 'Не, не.';

$GLOBALS["lang"]['Tennant ID'] = 'Не, не.';

$GLOBALS["lang"]['ternary'] = 'Не, не, не.';

$GLOBALS["lang"]['Ternary'] = 'Не, не, не.';

$GLOBALS["lang"]['Test 1'] = '- Да. 1';

$GLOBALS["lang"]['Test 2'] = '- Да. 2';

$GLOBALS["lang"]['Test 3'] = '3';

$GLOBALS["lang"]['Test Email'] = 'Не, не.';

$GLOBALS["lang"]['test_minutes'] = '.';

$GLOBALS["lang"]['Test Minutes'] = '.';

$GLOBALS["lang"]['test_os'] = '- Oxunub.';

$GLOBALS["lang"]['Test Os'] = '- Oxunub.';

$GLOBALS["lang"]['test_subnet'] = 'Не, не.';

$GLOBALS["lang"]['Test Subnet'] = 'Не, не.';

$GLOBALS["lang"]['tests'] = 'Не, не.';

$GLOBALS["lang"]['Tests'] = 'Не, не.';

$GLOBALS["lang"]['Text'] = '.';

$GLOBALS["lang"]['Thai'] = '- Да.';

$GLOBALS["lang"]['Thailand'] = '- Да.';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = '.';

$GLOBALS["lang"]['Thanks to'] = '- Не, не.';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = '.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Axtarşş@ <i>.</i> Не, не.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'Не, не.';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = '.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = '- Да.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = '.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Българактеристики крайна точка Open-Audit müxt... H.r.y.r.r.v., Orgs üçün Tip xüsusiyyyyyyyyyy.tl.ri, h.mçi üçün Menkulator Kateqoriyasī. - Да.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Не, не, не. <strong>.</strong> да го направим, да го направим.';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE CVE siyahşsşqeyd olunmuşv го gieri alşnmşdşr. Bu NVD-da saxlayşr, lakin original axtarşn...';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'Имено.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE ilk analiz sonra yenil... nmişdir.';

$GLOBALS["lang"]['The CVE identifier.'] = '.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE, CVS puanlary, CWE imtahanlary, год.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Имено.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE NVD analitikl... ng üçün smalangur.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = '- Да. <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Имено.';

$GLOBALS["lang"]['The Elevated User query'] = '- Да.';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Изпълнители xüsusi procedur bir seine... - Za prvé:';

$GLOBALS["lang"]['The FROM'] = '- Да.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Имено. <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = '. <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = '.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = '. <code>locations.id</code>... <code>FROM</code> - Не, не.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = '. <code>locations.id</code>Tak, tak. <code>TO</code> - Не, не.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = ' да го направим, да го направим. <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = '. <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Не, не.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = '. <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = '- Не, не.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = '.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = '.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Jen...';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP год.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO / IEC 27001 sertifikatlaşdşrma prosesi v готварски елемент';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP срещна Telco bu linki t гомин edir.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = '- Ja.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'N.V.D.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Bu istifad гончинин LDAP OU (ако LDAP istifad по olunur).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Имено.<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = '. <i>.</i> . <i>.</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = '.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Имено. Nmap:<br/><br/>Имено. <i> Name</i> (...)';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = '. <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = '.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Standartrar v год. Texnologiya Мили Инстития федерален агент Текнология. Не, не.';

$GLOBALS["lang"]['The Network to Discover'] = '.';

$GLOBALS["lang"]['The Nmap timing preset.'] = '.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Имено.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Prüfung API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Не, не. <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Имено.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = '.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Имено.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP laih... bu standart t... NIST t прищракване на SCAP 1.2 sertifikatlaşdşrīlmşdūr.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = '- Да. <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = '- Да.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = ' Имено.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Racks xüsusiyyyyyyyyy... Да, Бина. Кат, Oda v год. Row il...';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP standartlaşdşrşlmşyollarla t голя к... sizliyi veril...';

$GLOBALS["lang"]['The SELECT'] = 'Qeydiyat';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Araşdţrmanşn SE bölm год. - Да.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = '- Не, не.';

$GLOBALS["lang"]['The SNMP community string.'] = '.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = '.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Идентификация Protokol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passfaction.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Gizlik Protokolu.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = '.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Předseda 3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 konfrans maşţn ID (по избор)';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 konfransņadņ( по избор)';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = '. <strong>България България Селититър ИЛО</strong>. <strong>Калерея</strong> - Да.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-Audit istifad. Eil. edil.n SQL sorgularņgeritick istifad. Ich bin...';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL sorğu год.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = '.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Xarici sistemin URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL- devět bifficiар olunmasmanatia ленивци.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = '.';

$GLOBALS["lang"]['The WHERE'] = '- Да.';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = '. <em>.</em> - Да.';

$GLOBALS["lang"]['The Windows'] = '- Не, не.';

$GLOBALS["lang"]['The Windows log may say the following'] = ' Je to tak.';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = '.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Имено.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Не, не.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Offene Audit сървър в ünvanņ@@';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = '.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Имено.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = '.';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Агент одит скрипт Yeni bir nümun... Yükl... m... k lazelīmdīr, пуснете го на сървър q...';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = '.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = '. <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = '... <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = '. <code>devices</code> - Да.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Tesin xüsusiyyyyyyyyy... (aşaşdan xarici bir sah... si adīil... eşl... yir).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = '.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = '.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Audit Skript fayllarņistifad по-малко от [] mass v.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Имено.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = '.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = '. <strong>.</strong> .';

$GLOBALS["lang"]['The benchmark type.'] = '.';

$GLOBALS["lang"]['The building the rack is located in.'] = '- Да.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Je to tak?';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open- Audit yaradīlmaslar üçün cihaslar hesablanan sayņ.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = '.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = '. <i>.</i> Имено.<br/>.<br/><br/> да го направим, да го направим.<br/><br/>Kompüter v готварски сървър arasīnda yalnīz t К олунан aņportlarī80 срещя 443 (Koletordan Server \'a qarşīlananTCP bağlantīső). Offen- Audit bazaső bu yüks... kl... r arasaşnda paylaşlan (ve ola bilmir) deyil.<br/><br/>Имено.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = '. <i>.</i> Имено.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Имено.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = '- Да.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = '.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Не, не, не. <code>active/active</code>. <code>active/passive</code>. <code>N+1</code>. <code>N+M</code>. <code>N-to-1</code>. <code>N-to-N</code>. <code>other</code> .';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = '- Не, не.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = '- Да.';

$GLOBALS["lang"]['The credentials username.'] = '.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Y-m-d';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Y- m- d Bildungşnda cari tarix.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = '.';

$GLOBALS["lang"]['The current status of the discovery.'] = '- Да.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = '. <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = '- Да. <code>LIKE</code> . <code>equals</code> . <code>comput</code>- Не, не. <code>LIKE</code> .';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Имено.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Webová verze zövq edir.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Не, не.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'proqram artīq yenil.ndirilm.si almaq срещşepektiv çşxşedir. - Да.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = ' да го направим, да го направим. - Ja.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Имено.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '- Да.';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = '.';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = '- Да.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Bu üsul t по-малко от50.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Не, не, не. <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = '.';

$GLOBALS["lang"]['The email address of the reciever'] = 'Не, не.';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'BirinciWave... ikilisi lisenziya üçün t....';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = '- Да.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Не, не. Bu, bir imtiyaz v го я гом голият хата keçirilir (örnegin, ev sahibi OS bir konteyner qarşsţnşalmq).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Имено.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = '- Да.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Bir inteqrasiya il....';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = '.';

$GLOBALS["lang"]['The floor the rack is located on.'] = '.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Имено.';

$GLOBALS["lang"]['The format of your data should be in the form'] = '.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = '.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Имено.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Xarici sistem t гор гонят там. E готвешсе да го направя.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = '.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Bu boşluğu test üçün jaradīlan SQL sorğu jaradīlīb. Не, не.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Bazalşn qarşişl гон cyhazlar qrupu.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = '- Да... <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = '.';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = '- Да. <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Имено.';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Bu üslubunun говмилииии (heşistifad по етм...).';

$GLOBALS["lang"]['The integer of severity.'] = '.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Имено.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = '.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = '.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = '.';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = '.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = '.';

$GLOBALS["lang"]['The last time this integration was run.'] = '.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = '- Да.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Това е всичко.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = '- Да. <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = '- Да.';

$GLOBALS["lang"]['The locations area.'] = '- Да.';

$GLOBALS["lang"]['The locations city.'] = '- Да.';

$GLOBALS["lang"]['The locations country.'] = '- Да.';

$GLOBALS["lang"]['The locations district.'] = '- Да.';

$GLOBALS["lang"]['The locations latitude.'] = '.';

$GLOBALS["lang"]['The locations level.'] = '.';

$GLOBALS["lang"]['The locations longitude.'] = '.';

$GLOBALS["lang"]['The locations phone.'] = '- Да.';

$GLOBALS["lang"]['The locations postcode.'] = '- Да.';

$GLOBALS["lang"]['The locations region.'] = '- Да.';

$GLOBALS["lang"]['The locations room.'] = '- Да.';

$GLOBALS["lang"]['The locations state.'] = '.';

$GLOBALS["lang"]['The locations suburb.'] = '- Да.';

$GLOBALS["lang"]['The locations suite.'] = '.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = '- Да.';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = '- Да.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = '.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = '.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = '.';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = '.';

$GLOBALS["lang"]['The name given to this item.'] = '.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Имено.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Bu istifad...';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = '.';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open- Aud IT t гонят баксилан proqram paketin in adņ. - Да.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = '.';

$GLOBALS["lang"]['The name provided by the provider.'] = '.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = ' Мрежа 192.168.1.0 /24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Имено.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = '- Не, не.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = '.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = '. <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = '. <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = '- Да. <code>devices.cloud_id</code> Qeydiyat <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = '.';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = '.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = '.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Имено. <code>devices.cloud_id</code> Qeydiyat <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = '. <code>devices.cloud_id</code> Qeydiyat <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Не, не. <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = '. <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = '- Да.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Имено.';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = '.';

$GLOBALS["lang"]['The number of purchased licenses.'] = '- Не, не.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = '.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = '.';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = '.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Yalnīz lodenīm olan';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Имено.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Имено.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Имено.';

$GLOBALS["lang"]['The orientation of this device.'] = '.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = '.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Не, не.';

$GLOBALS["lang"]['The password used to access the external system.'] = '.';

$GLOBALS["lang"]['The path to the file or directory.'] = '- Да.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = '.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = '.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = '- Да.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = '.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = '- Да.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Не, не, не.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = '.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Не, не.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = '.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Je to tak? Имено.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Bu sēra madd';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Name m';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Bu lisenziiya s готварски siminin m.hsullarzanin v по lisenziyalarzania açīq m.hsullar daxil olan ilkwave Commercial m.hsullarzania daxildir. Въпреки тоува, това, което се е случило, е, че това, което се е случило, е, че това, което се е е е е се е е е е е е е се е е е е е се е е е е е е се е е е е е е е се е е се е е се е е е е се е е се се е се е се се се се е е се се се се се се се се се се ';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = '- Да... <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = '.';

$GLOBALS["lang"]['The rack asset tag.'] = '.';

$GLOBALS["lang"]['The rack bar code.'] = '.';

$GLOBALS["lang"]['The rack model.'] = '.';

$GLOBALS["lang"]['The rack serial.'] = '.';

$GLOBALS["lang"]['The rack series.'] = '.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = '. <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Müasir t голя к... sizlik açţqlarşnşqarşlaşdşrmaq v... qarşlaşdma prosesi. Не, не.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = '. Eg... <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = '- Да.';

$GLOBALS["lang"]['The result of the command.'] = '.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Не, не.';

$GLOBALS["lang"]['The row the rack is located in.'] = '.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP Serverind год...';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = '- Да.';

$GLOBALS["lang"]['The software end-of-life date.'] = '.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = '.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Qeyd edilmişbaszar masasēndan xüsusi bazasīsütunu.';

$GLOBALS["lang"]['The specific database table.'] = 'Не, не, не.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Не, не.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = '- Да.';

$GLOBALS["lang"]['The status of this integration'] = '.';

$GLOBALS["lang"]['The status of this queued item.'] = '.';

$GLOBALS["lang"]['The steps below outline the process.'] = '- Да.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Имено.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = '- Да.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = '- Да.';

$GLOBALS["lang"]['The text that is displayed.'] = '.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Sonrakşvaxtlar, bu qurgu işl год. 10: <code>2017-06-01 09:59:00</code>. Имено. <code>2000-01-01 00:00:00</code> Имено.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'ТоК 10, 100 v... 1000 (ya da heņbir) TCP portlarņ Nmap gör... istifad... olunur.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'ТоК 10, 100 v... 1000 (ya da heşbir) UDP portlarņ Nmap gör... istifad... olunur.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Не, не.';

$GLOBALS["lang"]['The type of device.'] = '.';

$GLOBALS["lang"]['The type of organisation.'] = '.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = '.';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Имено.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = '.';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Нефилтриран dövl.t bir portun erişilebilir olduğu anlambhina gelir, lakin Nmap açīq v го qarşlaşdīrmaq olacaq...';

$GLOBALS["lang"]['The unique identifier of this server.'] = '- Да.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Имено. <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory / OpenLDAP istifad год. Open- Audit qrupun bir üzvü olan bir qrupun üzvüdür.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = '- Да.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = '- Да.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = '.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = '- Да.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = '.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = '.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = '.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'LDAP-da qeyd olunan istifad... çi, lakin Open-Audit Rollar üçün LDAP qruplarţnīistehsal etm... üçün konfiqurasiya deyil v... çi Open-Audit daxil deyil... <i>LDAP istifad</i> Open-Audit LDAP....................................................';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = '.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Qeydiyatdan istifad.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Имено.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Имено.';

$GLOBALS["lang"]['The users email address.'] = '- Не, не.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Не, не.';

$GLOBALS["lang"]['The value assigned to the item.'] = '.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = '.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = '.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = '.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Offene Audit- nin quraşdşşşşiev sah... sind... web klassikaső (bir izl... şdirm...).';

$GLOBALS["lang"]['The widget at position '] = '. ';

$GLOBALS["lang"]['The width of this device.'] = '- Да.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = '- Да.';

$GLOBALS["lang"]['Their OrgIDs only'] = '- Да.';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Имено.';

$GLOBALS["lang"]['Then'] = '.';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Имено. <i>- Да.</i> .';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = ' да го направим, за да го направим. <strong>- Да.</strong>.';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = ' (...)';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = '.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = '.<br/><br/>Имено. Bu hesab uzaq (въК основа на мрежа) rekursuna daxil deyil. Имено.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = '.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = '.';

$GLOBALS["lang"]['Thing'] = 'Не, не, не.';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = '.';

$GLOBALS["lang"]['Third'] = '- Да.';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = '.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = '.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = '. <span class=\'\"confluence-link\"\'>.</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Bu rol heşbir AD qrupu qeyd edir...';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = '. <code>c</code>. <code>r</code>. <code>u</code> Qeydiyat <code>d</code> .';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = '.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = '.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = '.';

$GLOBALS["lang"]['This column is required by'] = '.';

$GLOBALS["lang"]['This column is required by '] = '. ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Bu tarif auto-populiert v го compiеален olaraq sol olmalţdţr.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = '.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Имено. <i>- Да.</i> - Да.';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Имено.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = '.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'България мун КИМО КЕО Д olunan bütün Modullarīn siyahīső jaradīr';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Bu s готварски cihazlarņv готварски портове, Protocolar срещия NAPA tarama t голм';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Bu nümun... funksiya v... ...';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Имено.';

$GLOBALS["lang"]['This example uses'] = '.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = '- Да.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Имено. <i>.</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Имено.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = '.';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = '.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Имено.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Това е, което се е случило.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = '.';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = '- Да.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = '.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Имено.';

$GLOBALS["lang"]['This issue is under investigation.'] = '- Да.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Bu madd';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = '.';

$GLOBALS["lang"]['This license expires on'] = '.';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = '.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = '.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = '- Да.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = '.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = '- Да.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Имено.';

$GLOBALS["lang"]['This will auto-populate.'] = '.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = '.';

$GLOBALS["lang"]['This will delete the current rows in the'] = '- Да.';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = '.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = '.';

$GLOBALS["lang"]['Thursday'] = '- Да.';

$GLOBALS["lang"]['time_caption'] = '- Да.';

$GLOBALS["lang"]['Time Caption'] = '- Да.';

$GLOBALS["lang"]['time_daylight'] = '- Да.';

$GLOBALS["lang"]['Time Daylight'] = '- Да.';

$GLOBALS["lang"]['Time to Execute'] = '.';

$GLOBALS["lang"]['timeout'] = '- Да.';

$GLOBALS["lang"]['Timeout'] = '- Да.';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = '- Ja.';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = '.';

$GLOBALS["lang"]['Timesatamp'] = 'Kateqoriya';

$GLOBALS["lang"]['Timestamp'] = 'Kateqoriya';

$GLOBALS["lang"]['timing'] = '- Не, не.';

$GLOBALS["lang"]['Timing'] = '- Не, не.';

$GLOBALS["lang"]['Timor-Leste'] = '- Да.';

$GLOBALS["lang"]['Title'] = 'Не, не, не.';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Имено.';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Sorğu icra etm год. üçün, proqram bir / екзекутират, bel го / open-одит / index.php / queries / {$id} / ausführen.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Не, не, не.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = '.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = '. <i>Axtarşş@</i> . <i> на</i> .';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Yerli düşm';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Имено. <i>.</i>. <i>.</i> . <i>.</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = '.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = '- Да.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = ' ...';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Не, не.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = '.';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Не, не.';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = '- Да.';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = '.';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Не, не.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Имено.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Имено.';

$GLOBALS["lang"]['To return a specific component item.'] = '.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = '.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = '- Да.';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = '- Да.';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Имено.';

$GLOBALS["lang"]['To sort by a database column, use'] = '.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Имено. <i>.</i> Имено. <i>.</i>. <i>.</i> .';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Имено. <i>- Да.</i> Имено. <i>- Да.<i>Имено. <i>- Да.<i> .<br/><p>Имено. <i>- Да.</i> .</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Имено.';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Bir sorgounun m... lumatlarīn, / open-одит / index standart URL strukturunu baxīn. fp / Fragen / {$id} istifad. olunmalīdīr.';

$GLOBALS["lang"]['Togo'] = '- Да.';

$GLOBALS["lang"]['Tokelau'] = '- Да.';

$GLOBALS["lang"]['Tonga'] = '.';

$GLOBALS["lang"]['toolbar_style'] = 'Стил на лентата с инструменти';

$GLOBALS["lang"]['Toolbar Style'] = 'Стил на лентата с инструменти';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = '.';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Имено.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = '.';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Това може да се случи, ако не е така.';

$GLOBALS["lang"]['Traditional Chinese'] = '.';

$GLOBALS["lang"]['Traffic Light'] = '- Да.';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Не, не.';

$GLOBALS["lang"]['Troubleshooting'] = 'Не, не, не.';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Не, не.';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Имено.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = '.';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = '.';

$GLOBALS["lang"]['Tuesday'] = '- Да.';

$GLOBALS["lang"]['Tunisia'] = '.';

$GLOBALS["lang"]['Turkey'] = '.';

$GLOBALS["lang"]['Turkish'] = '- Да.';

$GLOBALS["lang"]['Turkmenistan'] = '- Да.';

$GLOBALS["lang"]['Turks and Caicos Islands'] = '.';

$GLOBALS["lang"]['Tuvalu'] = '- Да.';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Битрат';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Битрат';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = '.';

$GLOBALS["lang"]['Tx Level'] = '.';

$GLOBALS["lang"]['tx_power'] = 'TX güü';

$GLOBALS["lang"]['Tx Power'] = 'TX güü';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profil';

$GLOBALS["lang"]['type'] = '- Да.';

$GLOBALS["lang"]['Type'] = '- Да.';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = ' за да се види, че това може да се случи, но това не е вярно.';

$GLOBALS["lang"]['Types of Networks'] = '.';

$GLOBALS["lang"]['URL'] = ' Адрес';

$GLOBALS["lang"]['uuid'] = 'Uşaq';

$GLOBALS["lang"]['UUID'] = 'Uşaq';

$GLOBALS["lang"]['udp_ports'] = '.';

$GLOBALS["lang"]['Udp Ports'] = '.';

$GLOBALS["lang"]['Uganda'] = '- Да.';

$GLOBALS["lang"]['Ukraine'] = '- Да.';

$GLOBALS["lang"]['Ukrainian'] = '- Да.';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Имено.';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = '- Не, не.';

$GLOBALS["lang"]['Undergoing Analysis'] = '.';

$GLOBALS["lang"]['Unfiltered'] = '.';

$GLOBALS["lang"]['uninstall'] = 'provincie Italien. kgm';

$GLOBALS["lang"]['Uninstall'] = 'provincie Italien. kgm';

$GLOBALS["lang"]['Uninstall the Agent'] = '.';

$GLOBALS["lang"]['United Arab Emirates'] = 'Не, не.';

$GLOBALS["lang"]['United Kingdom'] = 'Не, не.';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Америка Бирлщшмимтатлария';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Не, не, не.';

$GLOBALS["lang"]['United States of America'] = '.';

$GLOBALS["lang"]['Unknown'] = '.';

$GLOBALS["lang"]['unlock_pin'] = 'Калерея';

$GLOBALS["lang"]['Unlock Pin'] = 'Калерея';

$GLOBALS["lang"]['Unscheduled'] = '.';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = ' - Ano.';

$GLOBALS["lang"]['Unused.'] = '.';

$GLOBALS["lang"]['Update'] = '.';

$GLOBALS["lang"]['update_external_count'] = 'Pulsuz-Stimmen';

$GLOBALS["lang"]['Update External Count'] = 'Pulsuz-Stimmen';

$GLOBALS["lang"]['update_external_from_internal'] = 'Даксил ол';

$GLOBALS["lang"]['Update External From Internal'] = 'Даксил ол';

$GLOBALS["lang"]['update_internal_count'] = 'Daxili sayņ@';

$GLOBALS["lang"]['Update Internal Count'] = 'Daxili sayņ@';

$GLOBALS["lang"]['update_internal_from_external'] = 'Xarici';

$GLOBALS["lang"]['Update Internal From External'] = 'Xarici';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Offene Audit- dan proqramlar';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Aktualizovat Open-Audit ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Verze Open- Aud IT.';

$GLOBALS["lang"]['Update Vulnerabilities'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Girişbir nümayişini yenil.';

$GLOBALS["lang"]['Update attributes'] = '.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = '.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = '.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = '.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = '.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = '.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = '.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = '- Да.';

$GLOBALS["lang"]['Updating'] = '- Да.';

$GLOBALS["lang"]['Upgrade'] = '- Да.';

$GLOBALS["lang"]['Upload an audit result file'] = 'Не, не, не.';

$GLOBALS["lang"]['Upper Case'] = '- Да.';

$GLOBALS["lang"]['uptime'] = '.';

$GLOBALS["lang"]['Uptime'] = '.';

$GLOBALS["lang"]['Urdu'] = 'Tarix';

$GLOBALS["lang"]['url'] = 'Tarix';

$GLOBALS["lang"]['Url'] = 'Tarix';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Не, не.';

$GLOBALS["lang"]['usb'] = ' US-Dollar';

$GLOBALS["lang"]['Usb'] = ' US-Dollar';

$GLOBALS["lang"]['use'] = '- Да.';

$GLOBALS["lang"]['Use'] = '- Да.';

$GLOBALS["lang"]['use_authentication'] = 'Не, не.';

$GLOBALS["lang"]['Use Authentication'] = 'Не, не.';

$GLOBALS["lang"]['use_authorisation'] = '.';

$GLOBALS["lang"]['Use Authorisation'] = '.';

$GLOBALS["lang"]['Use Proxy'] = 'Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Не, не.';

$GLOBALS["lang"]['Use Service Version Detection'] = '.';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = '. <i> y</i>- Да.<br/>. Bu daha говв ще истифад и т.н.';

$GLOBALS["lang"]['Use WMI'] = 'WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = '- Да. <i>- Да.</i> OIDC - OpenID Connect v по Bir <i>- Да.</i> {\cHFFFFFFFF} CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFF! CHFFFFFFFF CHFFFFFFFFFFFF ... PERSONAL ... <i>- Да.</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Не, не.';

$GLOBALS["lang"]['Use for Roles'] = '.';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Не, не, не. <i>.</i>. <i>- Да.</i> Qeydiyat <i>Даксил ол</i> Не, не, не.';

$GLOBALS["lang"]['used'] = '- Да.';

$GLOBALS["lang"]['Used'] = '- Да.';

$GLOBALS["lang"]['used_count'] = 'Не, не.';

$GLOBALS["lang"]['Used Count'] = 'Не, не.';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = '.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = '.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = '. <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Имено. Bu LDAP qrupunda bir istifad... çi varsa, onlar bu rol q... buledilir.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = '- Да. <code>memberUid</code>Имено.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = '.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = '.';

$GLOBALS["lang"]['user'] = '- Да.';

$GLOBALS["lang"]['User'] = '- Да.';

$GLOBALS["lang"]['User DN'] = 'DN';

$GLOBALS["lang"]['user_group'] = '.';

$GLOBALS["lang"]['User Group'] = '.';

$GLOBALS["lang"]['user_id'] = '.';

$GLOBALS["lang"]['User ID'] = '.';

$GLOBALS["lang"]['user_interaction'] = '.';

$GLOBALS["lang"]['User Interaction'] = '.';

$GLOBALS["lang"]['User Membership Attribute'] = '- Да.';

$GLOBALS["lang"]['user_name'] = '.';

$GLOBALS["lang"]['User Name'] = '.';

$GLOBALS["lang"]['User Policies'] = 'Не, не.';

$GLOBALS["lang"]['Username'] = '- Да.';

$GLOBALS["lang"]['username'] = '- Да.';

$GLOBALS["lang"]['users'] = '- Да.';

$GLOBALS["lang"]['Users'] = '- Да.';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = '- Bir istifad...';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Имено.';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = '(год.)';

$GLOBALS["lang"]['Using'] = '- Да.';

$GLOBALS["lang"]['Using Entra for Auth'] = '.';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = '- Не, не.';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = '...................................................................';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = '.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = '.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'МЯ/ с.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = '.';

$GLOBALS["lang"]['Usually should be set to 3.'] = '3';

$GLOBALS["lang"]['Uzbekistan'] = '- Да.';

$GLOBALS["lang"]['VLAN'] = ' Vgl.';

$GLOBALS["lang"]['VLAN ID'] = 'Идентификация на VLAN';

$GLOBALS["lang"]['valid_from'] = 'Даксил ол';

$GLOBALS["lang"]['Valid From'] = 'Даксил ол';

$GLOBALS["lang"]['valid_from_raw'] = 'Japan. kgm';

$GLOBALS["lang"]['Valid From Raw'] = 'Japan. kgm';

$GLOBALS["lang"]['valid_to'] = 'Даксил ол';

$GLOBALS["lang"]['Valid To'] = 'Даксил ол';

$GLOBALS["lang"]['valid_to_raw'] = 'Japan. kgm';

$GLOBALS["lang"]['Valid To Raw'] = 'Japan. kgm';

$GLOBALS["lang"]['Valid Values'] = 'Даксил ол';

$GLOBALS["lang"]['value'] = '- Да.';

$GLOBALS["lang"]['Value'] = '- Да.';

$GLOBALS["lang"]['Value Types'] = '.';

$GLOBALS["lang"]['values'] = '- Да.';

$GLOBALS["lang"]['Values'] = '- Да.';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = ' Je to tak. <i>- Не, не.</i> .';

$GLOBALS["lang"]['Vanuatu'] = '- Да.';

$GLOBALS["lang"]['VarChar'] = 'Axtar';

$GLOBALS["lang"]['Varchar'] = 'Axtar';

$GLOBALS["lang"]['variable'] = '.';

$GLOBALS["lang"]['Variable'] = '.';

$GLOBALS["lang"]['Various'] = '- Не, не.';

$GLOBALS["lang"]['vendor'] = '- Не, не.';

$GLOBALS["lang"]['Vendor'] = '- Не, не.';

$GLOBALS["lang"]['Vendor Report'] = '.';

$GLOBALS["lang"]['vendors'] = '- Да.';

$GLOBALS["lang"]['Vendors'] = '- Да.';

$GLOBALS["lang"]['Venezuela'] = '- Не, не.';

$GLOBALS["lang"]['Version'] = 'Proqram';

$GLOBALS["lang"]['version_padded'] = '.';

$GLOBALS["lang"]['Version Padded'] = '.';

$GLOBALS["lang"]['version_raw'] = 'Kateqoriya';

$GLOBALS["lang"]['Version Raw'] = 'Kateqoriya';

$GLOBALS["lang"]['version_string'] = '.';

$GLOBALS["lang"]['Version String'] = '.';

$GLOBALS["lang"]['video'] = 'Axtarşş@';

$GLOBALS["lang"]['Video'] = 'Axtarşş@';

$GLOBALS["lang"]['Vietnam'] = 'Oxunub';

$GLOBALS["lang"]['Vietnamese'] = 'Axtarşş@';

$GLOBALS["lang"]['View'] = 'PŘÍLOHA';

$GLOBALS["lang"]['View All'] = '.';

$GLOBALS["lang"]['View Details'] = '- Да.';

$GLOBALS["lang"]['View Device'] = 'Cihaz axtarsti@';

$GLOBALS["lang"]['View Discovery'] = 'PŘÍLOHA';

$GLOBALS["lang"]['View Policy'] = 'PŘÍLOHA';

$GLOBALS["lang"]['View Racks'] = 'Name';

$GLOBALS["lang"]['View the'] = '- Да.';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Имено.';

$GLOBALS["lang"]['View the release notes on the'] = '.';

$GLOBALS["lang"]['Virtual Private Network'] = '.';

$GLOBALS["lang"]['Virtual private network'] = '.';

$GLOBALS["lang"]['Virtualisation'] = '- Да.';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = '.';

$GLOBALS["lang"]['vlan'] = ' Vgl.';

$GLOBALS["lang"]['Vlan'] = ' Vgl.';

$GLOBALS["lang"]['vlan_id'] = 'Идентификация на Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'Идентификация на Vlan';

$GLOBALS["lang"]['vm'] = 'Axtar';

$GLOBALS["lang"]['Vm'] = 'Axtar';

$GLOBALS["lang"]['vm_device_id'] = 'ID на Vm устройство';

$GLOBALS["lang"]['Vm Device ID'] = 'ID на Vm устройство';

$GLOBALS["lang"]['vm_group'] = 'Skupina Vm';

$GLOBALS["lang"]['Vm Group'] = 'Skupina Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Идентификация';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Идентификация';

$GLOBALS["lang"]['vm_server_name'] = 'Vm сървър Adņ@';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm сървър Adņ@';

$GLOBALS["lang"]['vm_vendor'] = 'Axtarşş@';

$GLOBALS["lang"]['Vm Vendor'] = 'Axtarşş@';

$GLOBALS["lang"]['vuln_status'] = 'Състояние на вулна';

$GLOBALS["lang"]['Vuln Status'] = 'Състояние на вулна';

$GLOBALS["lang"]['vulnerabilities'] = 'Не, не, не.';

$GLOBALS["lang"]['Vulnerabilities'] = 'Не, не, не.';

$GLOBALS["lang"]['vulnerabilities_cache'] = '.';

$GLOBALS["lang"]['Vulnerabilities Cache'] = '.';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Не, не.';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Zranitelnost ilkin 1 yanvardan..';

$GLOBALS["lang"]['vulnerability_id'] = '.';

$GLOBALS["lang"]['Vulnerability ID'] = '.';

$GLOBALS["lang"]['Vulnerability Status'] = '.';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'ВНИМАНИЯ- Proqram siyas.tl.rini istifad. etdiyiniz zaman, mövcud Centos v.... <i> Name</i> Qeydiyat <i> Ядро-девел</i>. Имено. <i>Linux-Bild- 3.13.0-0 Generikum</i>. <i> Name</i> Qeydiyat <i> Ядро-девел</i> .';

$GLOBALS["lang"]['WHERE'] = '- Да.';

$GLOBALS["lang"]['WMI Credentials Requirements'] = '.';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = '.';

$GLOBALS["lang"]['wall_port'] = 'Калерея';

$GLOBALS["lang"]['Wall Port'] = 'Калерея';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Калерея';

$GLOBALS["lang"]['Want to know more?'] = 'Не, не, не.';

$GLOBALS["lang"]['Warning'] = '- Да.';

$GLOBALS["lang"]['warranty'] = 'Yadda saxla';

$GLOBALS["lang"]['Warranty'] = 'Yadda saxla';

$GLOBALS["lang"]['warranty_duration'] = '- Да.';

$GLOBALS["lang"]['Warranty Duration'] = '- Да.';

$GLOBALS["lang"]['warranty_expires'] = '.';

$GLOBALS["lang"]['Warranty Expires'] = '.';

$GLOBALS["lang"]['warranty_status'] = '.';

$GLOBALS["lang"]['Warranty Status'] = '.';

$GLOBALS["lang"]['warranty_type'] = '.';

$GLOBALS["lang"]['Warranty Type'] = '.';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Имено.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Не, не, не.';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = '- Да. <i>- Да.</i>. Имено. - Да.';

$GLOBALS["lang"]['We have more detailed instructions on'] = '.';

$GLOBALS["lang"]['We have tests for:'] = '.';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = '.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Имено.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Не, не.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = '. <i>.</i> - Ne.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Имено.';

$GLOBALS["lang"]['Web'] = 'Oxunub';

$GLOBALS["lang"]['Web Application Routes'] = '.';

$GLOBALS["lang"]['Web Server Discovery'] = '- Да.';

$GLOBALS["lang"]['Webserver'] = 'Сбсървър';

$GLOBALS["lang"]['Website'] = '.';

$GLOBALS["lang"]['Wednesday'] = 'Не, не.';

$GLOBALS["lang"]['weight'] = 'Не, не.';

$GLOBALS["lang"]['Weight'] = 'Не, не.';

$GLOBALS["lang"]['weight_current'] = '- Да.';

$GLOBALS["lang"]['Weight Current'] = '- Да.';

$GLOBALS["lang"]['weight_empty'] = '.';

$GLOBALS["lang"]['Weight Empty'] = '.';

$GLOBALS["lang"]['weight_max'] = 'Кадин Макс.';

$GLOBALS["lang"]['Weight Max'] = 'Кадин Макс.';

$GLOBALS["lang"]['Welcome'] = '.';

$GLOBALS["lang"]['Welcome Dashboard'] = '.';

$GLOBALS["lang"]['Welcome to'] = '.';

$GLOBALS["lang"]['Western Sahara'] = 'Не, не, не.';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = '.';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Имено.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = ' да го направим, да го направим. <i>- Да.</i> .';

$GLOBALS["lang"]['What do we send?'] = '.';

$GLOBALS["lang"]['What does this actually mean to you?'] = '.';

$GLOBALS["lang"]['What is the purpose of this rack.'] = '.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = '. <code>attributes</code> - Не, не.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = '.';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = '.';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Имено. Имено.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Въпреки, че това не е така, трябва да се отбележи, че това не така. Bu sah';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = ' Na druhou stranu. <i>.</i>.<br/>- Да. <i>.</i> . <i>.</i>. <i>.</i>. <i>Инодеум</i>. <i>.</i>- Ja.<br/>.<br/><ul><li>Windows - adņ, ölçüső, seriyasħ, SHA1 hash (s.s.m. lumatlarş), son d гойişdirilmiş, m.lumat, sibi, versiyasħ( file izminting).</li><br/><li>Linux - adņ, ölçüsü, seriyasħ, SHA1 hash (hüsusi) son d</li></ul>.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Имено.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Българтова, което е по-голямо отова, което е по-голямова отова, което е полямо отова';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Имено.';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Имено. <i>Не, не, не.</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = '- Да.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = '.';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = '. <i>Не, не.</i> .';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = '.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = '- Не, не.';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Имено.';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Имено. <i>- Да.</i> - Да.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the \\'] = 'JSON t... r... finden... n ist... y... n, heglibir limit t... şkal edir. да го направим, да го направим.';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = '.';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = '( <i>Не, не, не.</i> ... <i>.</i> . Domen adşqeydiyatdan keçirt. IE - Biz Windows PCs одитен скрипт kopyalamaq üçün Yerli Sistem hesabņhesabņkimi çalşr zaman Apache istifad.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Имено.';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Имено.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = '. <code>tasks.type</code> Qeydiyat <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = '.';

$GLOBALS["lang"]['When this queue item started processing.'] = '- Да.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Tyto prostředky jsou určeny na pokrytí:';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = ' Na druhou stranu.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = '.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = '.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = '- Да.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Не, не.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = '. <code>devices.org_id</code> .';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = '.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = '. <i>- Не, не.<i> .<br/><br/>Adegha, isteghe bagliştбsvir, seçin <i>PŘÍLOHA</i> .<br/><br/>Bir saat (saat yalnīz, hr hansībir d гонят), bir ad verm гок (bu, real planlaşdţrmşsorgunun adħdeyil), sorğu run kimi ist... diyiniz gün seçin, e-poçt ünvanħt...<br/>Имено.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Не, не. <code>computer</code> . <i>- Да.</i> Имено. <code>devices?devices.type=computer</code>. да го направим, а?';

$GLOBALS["lang"]['where'] = '- Да.';

$GLOBALS["lang"]['Where'] = '- Да.';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = '- Да.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = '.';

$GLOBALS["lang"]['Where the rack is in the row.'] = '.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = '.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = '(...)................................';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = '.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = '.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = '.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['Who made this rack.'] = '.';

$GLOBALS["lang"]['Why Windows Server Only?'] = '- Ja.';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Не, не, не.';

$GLOBALS["lang"]['Wide Area Network'] = 'Не, не, не.';

$GLOBALS["lang"]['Wide area network'] = 'Не, не, не.';

$GLOBALS["lang"]['Widget'] = ' Název';

$GLOBALS["lang"]['Widget #'] = '- Да.';

$GLOBALS["lang"]['Widget # '] = '- Да. ';

$GLOBALS["lang"]['Widget Type'] = '- Да.';

$GLOBALS["lang"]['widgets'] = '- Да.';

$GLOBALS["lang"]['Widgets'] = '- Да.';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['width'] = 'Ендрим';

$GLOBALS["lang"]['Width'] = 'Ендрим';

$GLOBALS["lang"]['windows'] = '- Не, не.';

$GLOBALS["lang"]['Windows'] = '- Не, не.';

$GLOBALS["lang"]['Windows Packages'] = '.';

$GLOBALS["lang"]['Windows Test Script'] = 'Oyuncaq';

$GLOBALS["lang"]['Windows User Work Unit #1'] = '.';

$GLOBALS["lang"]['Windows User Work Unit #2'] = '.';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Имено.';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Předseda';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = '.<br/><br/>.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Имено.';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Не, не.';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = '3 = 3, 0 - 0, 0 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Не!<br/><br/>Не, не.<br/><br/>.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Въпреки това, това, което се случва, може да се случи, ако не е възможно. ';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi başarşşşz';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi başarşşşz';

$GLOBALS["lang"]['wmi_timeout'] = 'Калерея';

$GLOBALS["lang"]['Wmi Timeout'] = 'Калерея';

$GLOBALS["lang"]['workgroup'] = '.';

$GLOBALS["lang"]['Workgroup'] = '.';

$GLOBALS["lang"]['Working Credentials'] = '.';

$GLOBALS["lang"]['Wrap Up'] = '- Не, не.';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['XML'] = ' XML';

$GLOBALS["lang"]['Yellow Query'] = 'Българта справка';

$GLOBALS["lang"]['Yemen'] = '- Да.';

$GLOBALS["lang"]['Yes'] = '.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Имено.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Имено.';

$GLOBALS["lang"]['You are running version'] = '.';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Имено.';

$GLOBALS["lang"]['You can also'] = '- Да.';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = '- Да.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = '.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = '(ESX, Azure, et al.) "Llkwave VM", "Debian Linux çalşr" срещия "OS lisenziya m... lumatlarşv... год.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Не, не.';

$GLOBALS["lang"]['You can assign devices using custom'] = '.';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = '- Да.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Имено. <i>.</i> - Да.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = '.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = ' Na druhou stranu.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Имено.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = '- Не, не.';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = '. <i>Субнетектив</i> Qeydiyat <i>Република</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Имено.';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = '- Да.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Не, не.';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Имено. Нарушена е отровата, която е била написана в началото.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Имено.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = '.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = '.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = ' Na druhou stranu.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = '- Не, не.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = ' да го направим, да го направим. <i>Не, не.</i> . <i>.</i> . <i>Не, не, не.</i> .';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = '- Да.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = '- Да.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = '. Aşaşdakşгод.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = '.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = '.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = '.';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = '.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = '.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = '.';

$GLOBALS["lang"]['You will need a'] = '.';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = '.';

$GLOBALS["lang"]['You will see a list of'] = '.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Счилища в YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Имено.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = '"О, Боже мой!';

$GLOBALS["lang"]['Your Host is'] = '- Да.';

$GLOBALS["lang"]['Your Licenses'] = '- Да.';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = '.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = '- Ja.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = '.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Азуре Тенант.';

$GLOBALS["lang"]['Your PHP version is'] = '.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'E- poçt ünvanņ@';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = '.';

$GLOBALS["lang"]['Your SSH key.'] = '.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Имено.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Имено.';

$GLOBALS["lang"]['Your database platform is'] = '.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = '.';

$GLOBALS["lang"]['Your description of this item.'] = '.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = '.';

$GLOBALS["lang"]['Your generic version for this piece of software'] = '- Не, не.';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = '- Да. <i>Entra il</i> . <i>.</i>.<br/><br/>Имено.<br/><br/>.';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = '- Да. <i>OKTA il...</i> . <i>- Да.</i>.<br/><br/>Имено.<br/><br/>.';

$GLOBALS["lang"]['Your web server is'] = '.';

$GLOBALS["lang"]['Zambia'] = '- Да.';

$GLOBALS["lang"]['Zimbabwe'] = '- Не, не.';

$GLOBALS["lang"]['a String'] = 'Напречен ним';

$GLOBALS["lang"]['active'] = '.';

$GLOBALS["lang"]['active directory'] = '.';

$GLOBALS["lang"]['active/active'] = '.';

$GLOBALS["lang"]['active/passive'] = '.';

$GLOBALS["lang"]['advertisement'] = '.';

$GLOBALS["lang"]['alert'] = '.';

$GLOBALS["lang"]['all'] = 'Не, не, не.';

$GLOBALS["lang"]['allocated'] = '- Да.';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['an Integer'] = ' eine';

$GLOBALS["lang"]['and'] = 'Qeydiyat';

$GLOBALS["lang"]['and / or'] = 'Qeydiyat';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = '.';

$GLOBALS["lang"]['and another'] = '- Да.';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = '- Да.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'Имено. <i>.</i>.';

$GLOBALS["lang"]['and it\\'] = '♪';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = '.';

$GLOBALS["lang"]['and review what is possible.'] = '.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'Имено.';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['antivirus'] = '.';

$GLOBALS["lang"]['application'] = '- Да.';

$GLOBALS["lang"]['approved'] = '.';

$GLOBALS["lang"]['are required.'] = '- Да.';

$GLOBALS["lang"]['are used.'] = '- Да.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Не, не.<br/>.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = '.';

$GLOBALS["lang"]['attribute'] = '- Да.';

$GLOBALS["lang"]['auto'] = 'Не, не, не.';

$GLOBALS["lang"]['backup'] = '- Да.';

$GLOBALS["lang"]['banned'] = '- Да.';

$GLOBALS["lang"]['blog'] = '- Да.';

$GLOBALS["lang"]['blue'] = '- Не, не.';

$GLOBALS["lang"]['bottom'] = '- Да.';

$GLOBALS["lang"]['building'] = '- Да.';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'Имено.<br/><br/>Bir istifad... LDAP deyil, lakin Open- Audit (напр.: <i>- Да.</i> (...)<br/><br/>Имено.<br/><br/>Имено. Yadda saxla..';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Имено.';

$GLOBALS["lang"]['changed'] = '.';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'WMI, SSH срещия ya SNMP üçün bir port varsa, Vasitisin ';

$GLOBALS["lang"]['cloud'] = '- Да.';

$GLOBALS["lang"]['code'] = '- Не, не.';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Не, не, не.';

$GLOBALS["lang"]['collector'] = '.';

$GLOBALS["lang"]['collectors'] = '- Не, не.';

$GLOBALS["lang"]['column'] = '- Да.';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = '. <i> y</i> . <i> n</i>... <i>- Да.</i> ) <i> n</i>.';

$GLOBALS["lang"]['column. The'] = '- Axtarşş.';

$GLOBALS["lang"]['compute'] = '- Не, не.';

$GLOBALS["lang"]['config'] = ' ';

$GLOBALS["lang"]['console'] = ' Кон';

$GLOBALS["lang"]['contains'] = '- Да.';

$GLOBALS["lang"]['create'] = '- Не, не.';

$GLOBALS["lang"]['created'] = '.';

$GLOBALS["lang"]['credentials'] = '- Да.';

$GLOBALS["lang"]['critical'] = 'Не, не, не.';

$GLOBALS["lang"]['cve'] = ' c)';

$GLOBALS["lang"]['database'] = '.';

$GLOBALS["lang"]['debug'] = ' р';

$GLOBALS["lang"]['delegated'] = '- Да.';

$GLOBALS["lang"]['delete'] = '- Не, не.';

$GLOBALS["lang"]['deleted'] = '- Да.';

$GLOBALS["lang"]['denied'] = '.';

$GLOBALS["lang"]['details'] = '- Да.';

$GLOBALS["lang"]['devices'] = '- Не, не.';

$GLOBALS["lang"]['digitalocean'] = '.';

$GLOBALS["lang"]['discoveries'] = 'Не, не, не.';

$GLOBALS["lang"]['documentation for further details.'] = '- Да.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = '. <strong>.</strong> .';

$GLOBALS["lang"]['does not equal'] = '.';

$GLOBALS["lang"]['emergency'] = 'Не, не, не.';

$GLOBALS["lang"]['entra'] = '- Не, не.';

$GLOBALS["lang"]['equals'] = '.';

$GLOBALS["lang"]['error'] = 'Не, не.';

$GLOBALS["lang"]['established'] = '.';

$GLOBALS["lang"]['excluded'] = 'Не, не, не.';

$GLOBALS["lang"]['expired'] = '.';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = '- Да.

Имено.

Имено.

Имено.

Имено.

- Na druhou stranu.';

$GLOBALS["lang"]['fail'] = '.';

$GLOBALS["lang"]['false'] = 'Не, не.';

$GLOBALS["lang"]['file'] = '.';

$GLOBALS["lang"]['firewall'] = '.';

$GLOBALS["lang"]['first'] = '- Да.';

$GLOBALS["lang"]['fixed'] = '.';

$GLOBALS["lang"]['floor'] = '.';

$GLOBALS["lang"]['for'] = 'Axtarşş@';

$GLOBALS["lang"]['for authentication'] = '- Да.';

$GLOBALS["lang"]['for this information.'] = '.';

$GLOBALS["lang"]['from Audit Script Result'] = ' Je to tak.';

$GLOBALS["lang"]['from NMIS'] = '.';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = '(Използване на LRPC)';

$GLOBALS["lang"]['front'] = '- Да.';

$GLOBALS["lang"]['front-left'] = '- Да.';

$GLOBALS["lang"]['front-right'] = '- Да.';

$GLOBALS["lang"]['github'] = 'Калерея';

$GLOBALS["lang"]['google'] = ' Google';

$GLOBALS["lang"]['greater or equals'] = '.';

$GLOBALS["lang"]['greater than'] = '.';

$GLOBALS["lang"]['group'] = '.';

$GLOBALS["lang"]['has not been set'] = '.';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = ' ...';

$GLOBALS["lang"]['have the ability to be executed. On the'] = '.';

$GLOBALS["lang"]['head'] = '- Да.';

$GLOBALS["lang"]['here'] = '- Да.';

$GLOBALS["lang"]['high availability'] = '.';

$GLOBALS["lang"]['howto'] = '- Да.';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = '.';

$GLOBALS["lang"]['ignored'] = '.';

$GLOBALS["lang"]['import the example device data'] = 'Не, не.';

$GLOBALS["lang"]['in'] = '- Да.';

$GLOBALS["lang"]['in Enterprise.'] = '.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Girişaşaşdşdakşqiym.tl.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = '.';

$GLOBALS["lang"]['inactive'] = '- Да.';

$GLOBALS["lang"]['incomplete'] = '- Не, не.';

$GLOBALS["lang"]['info'] = '- Да.';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Nmap- in standart quraşdşrma yerl... rind...';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'Не, не, не.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'Да, да.';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = '.';

$GLOBALS["lang"]['is based upon'] = '.';

$GLOBALS["lang"]['is licensed to'] = '.';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = ' да го направим, да го направим......... Имено.';

$GLOBALS["lang"]['is the link to the'] = '.';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = '.';

$GLOBALS["lang"]['left'] = '.';

$GLOBALS["lang"]['less or equals'] = '.';

$GLOBALS["lang"]['less than'] = '- Да.';

$GLOBALS["lang"]['license'] = '- Да.';

$GLOBALS["lang"]['licenses'] = '.';

$GLOBALS["lang"]['like'] = '- Да.';

$GLOBALS["lang"]['line'] = '- Да.';

$GLOBALS["lang"]['list'] = '- Не, не.';

$GLOBALS["lang"]['list View, using the Create button'] = 'Имено.';

$GLOBALS["lang"]['load balancing'] = 'Не, не, не.';

$GLOBALS["lang"]['location'] = '- Не, не.';

$GLOBALS["lang"]['locations'] = 'Не, не.';

$GLOBALS["lang"]['managed'] = '- Да.';

$GLOBALS["lang"]['methods'] = '.';

$GLOBALS["lang"]['microsoft'] = 'Microsoft';

$GLOBALS["lang"]['mount point'] = '- Да.';

$GLOBALS["lang"]['must'] = '.';

$GLOBALS["lang"]['network'] = 'Не, не, не.';

$GLOBALS["lang"]['news'] = '- Да.';

$GLOBALS["lang"]['no'] = '.';

$GLOBALS["lang"]['node'] = '- Не, не.';

$GLOBALS["lang"]['none'] = '.';

$GLOBALS["lang"]['normal'] = '- Да.';

$GLOBALS["lang"]['not applicable'] = '.';

$GLOBALS["lang"]['not in'] = '.';

$GLOBALS["lang"]['not like'] = '.';

$GLOBALS["lang"]['notice'] = '- Да.';

$GLOBALS["lang"]['notification'] = 'Не, не.';

$GLOBALS["lang"]['okta'] = '.';

$GLOBALS["lang"]['on devices where'] = '.';

$GLOBALS["lang"]['openldap'] = '.';

$GLOBALS["lang"]['optimized'] = '- Да.';

$GLOBALS["lang"]['optionally '] = '- Да. ';

$GLOBALS["lang"]['or'] = '.';

$GLOBALS["lang"]['or the GitHub page at'] = '.';

$GLOBALS["lang"]['other'] = '- Да.';

$GLOBALS["lang"]['package'] = '.';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Имено.';

$GLOBALS["lang"]['partition'] = '- Да.';

$GLOBALS["lang"]['pass'] = '- Да.';

$GLOBALS["lang"]['pending'] = '.';

$GLOBALS["lang"]['performance'] = '- Не, не.';

$GLOBALS["lang"]['performed'] = 'Не, не, не.';

$GLOBALS["lang"]['permission'] = '.';

$GLOBALS["lang"]['permissions required per endpoint'] = '.';

$GLOBALS["lang"]['pie'] = '- Да.';

$GLOBALS["lang"]['planning'] = '- Да.';

$GLOBALS["lang"]['predictable'] = ' Je to tak.';

$GLOBALS["lang"]['query'] = 'Не, не.';

$GLOBALS["lang"]['rear'] = 'Българса';

$GLOBALS["lang"]['rear-left'] = '.';

$GLOBALS["lang"]['rear-right'] = '.';

$GLOBALS["lang"]['regex'] = ' Verordnung';

$GLOBALS["lang"]['release'] = '- Да.';

$GLOBALS["lang"]['removed from display, but has been set'] = '.';

$GLOBALS["lang"]['reserved'] = '- Не, не.';

$GLOBALS["lang"]['right'] = '.';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = '.';

$GLOBALS["lang"]['role'] = '.';

$GLOBALS["lang"]['room'] = '- Не, не.';

$GLOBALS["lang"]['row'] = 'Не, не, не.';

$GLOBALS["lang"]['service failed to start due to the following error'] = '.';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = '.';

$GLOBALS["lang"]['stand-alone'] = '.';

$GLOBALS["lang"]['standard'] = '- Да.';

$GLOBALS["lang"]['starts with'] = '.';

$GLOBALS["lang"]['storage'] = '- Да.';

$GLOBALS["lang"]['subnet'] = '.';

$GLOBALS["lang"]['table'] = '- Да.';

$GLOBALS["lang"]['table and insert the original rows.'] = '- Да.';

$GLOBALS["lang"]['team'] = '.';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Имено.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = '.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = '.';

$GLOBALS["lang"]['timestamp'] = 'Не, не, не.';

$GLOBALS["lang"]['to'] = '- Да.';

$GLOBALS["lang"]['to create an item of this type'] = '.';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = ' да го направим, да го направим.';

$GLOBALS["lang"]['to the user'] = '.';

$GLOBALS["lang"]['top'] = '- Да.';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = ' Na druhou stranu.

да го направим, да го направим.

Имено.

.

Имено.

Имено.

Na druhou stranu.

- Na druhou stranu.';

$GLOBALS["lang"]['traffic'] = '.';

$GLOBALS["lang"]['true'] = '.';

$GLOBALS["lang"]['true or false (in JSON context)'] = '.';

$GLOBALS["lang"]['unallocated'] = '.';

$GLOBALS["lang"]['unauthorised'] = '.';

$GLOBALS["lang"]['unchanged'] = '.';

$GLOBALS["lang"]['unknown'] = '- Да.';

$GLOBALS["lang"]['unmanaged'] = '.';

$GLOBALS["lang"]['unused'] = '- Да.';

$GLOBALS["lang"]['update'] = '.';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'Имено. <i>- Да.</i> .';

$GLOBALS["lang"]['using the main menu items.'] = '- Да.';

$GLOBALS["lang"]['valid'] = '.';

$GLOBALS["lang"]['version'] = '- Да.';

$GLOBALS["lang"]['virtualisation'] = '- Да.';

$GLOBALS["lang"]['warning'] = '- Да.';

$GLOBALS["lang"]['web'] = '.';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = '.';

$GLOBALS["lang"]['with devices::update permission.'] = ' Na druhou stranu.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = '.';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = '. Bu API \'ya год., web interfeys eyni istehsal Bildungşnņistifad. ed.c.k. v. v.';

$GLOBALS["lang"]['yes'] = '.';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = '.';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = '- Да.';

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

