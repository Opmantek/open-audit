<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Help and Frequently Asked Questions');
$files = array_diff(scandir(APPPATH . 'Views/faq'), array('.', '..'));

$intro = '<p>Don\'t forget there is a mountain of documentation on the wiki, <a href="https://docs.community.firstwave.com/wiki/spaces/OA/overview" target="_blank">here</a>.<br><br>';
foreach ($files as $file) {
    if ($file !== 'FAQ.php') {
        $intro .= '<a href="' . url_to('helpFAQ') . '?name=' . str_replace('.php', '', $file) . '">' . str_replace('.php', '', $file) . '</a><br>';
    }
}

$intro .= '
<br>

<h2>Opening a Support Ticket?</h2>
<p>If you are a supported customer and open a support ticket with FirstWave, please attach these files.<br>
<br>
<strong>Install Support</strong>: It is available at Menu -> Help -> <a href="' . url_to('supportCollection') . '">Support</a>. This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.<br>
<br>
<strong>Discovery Support</strong>: When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries -> <a href="' . url_to('discoveriesCollection') . '">List Discoveries</a>. View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.<br><br></p>

<h2>My AntiVirus is prompting me to deny/allow things</h2>
<p>If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.<br><br></p>

<h2>Discovery has stopped working</h2>
<p>If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by:<br>
<pre>chmod u+s /usr/bin/nmap</pre><br><br></p>

<h2>My time is off in Open-AudIT</h2>
<p>This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by:<br>
<strong>Linux</strong><br>
<code>mysql -u openaudit -popenauditpassword -e "SELECT NOW() as `timestamp`;"</code><br>
<strong>Windows</strong><br>
<code>c:\xampp\mysql\bin\mysql.exe -u openaudit -popenauditpassword -e "SELECT NOW() as `timestamp`;"</code><br>
<br></p>

<h2>I cannot start the Apache service on Windows</h2>
<p>Have you checked that another program is not already using port 80? If you start a command prompt as an Administrator and type:<br>
<code>netstat -abn</code><br>
You should get an output similar to:<br></p>
<pre>C:\>netstat -abnp tcp
 
Active Connections
 
Proto Local Address Foreign Address State
TCP 0.0.0.0:80 0.0.0.0:0 LISTENING
[httpd.exe]
TCP 0.0.0.0:135 0.0.0.0:0 LISTENING
RpcSs
[svchost.exe]</pre>
<p>Look for a program using port 80. In this case, note the output <br></p>
<pre>TCP 0.0.0.0:80 0.0.0.0:0 LISTENING
[httpd.exe]</pre>
<br>
<p>
That indicates port 80 is being used by the executable httpd.exe (in this case, Apache). You should not see any entries using :80. If there is another program using port 80 either stop and remove it, change it\'s port (if possible) or install Open-AudIT on another machine.<br>
<br>
Skype uses port 80 by default. If it gets in first it prevents Apache using port 80. Completely exit Skype (on a Windows 7 machine you need to go to the taskbar and right click/quit the Skype icon) and then start the Apache service. You can then restart Skype and it will use another port. Alternatively force Skype to not use port 80 and 443: In Skype | options | advanced | connection untick the "use port 80 and 443 as alternatives for incoming connections". This should also solve the problem.<br><br>
</p>

<h2>I Still cannot start the Apache service on Windows</h2>
<p>You may need to download and install the MS Visual C++ redistributable. You can find it here <a href="https://support.microsoft.com/en-au/help/2977003/the-latest-supported-visual-c-downloads">https://support.microsoft.com/en-au/help/2977003/the-latest-supported-visual-c-downloads</a><br><br></p>

';

$body = '';
