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
<h2>' . __('Opening a Support Ticket?') . '</h2>

<p>' . __('If you are a supported customer and open a support ticket with FirstWave, please attach these files.') . '<br>
<br><strong>' . __('Install Support') . '</strong>: ' . __('It is available at Menu -> Help ->') . ' <a href="' . url_to('supportCollection') . '">' . __('Support') . '</a>. ' . __('This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.') . '<br>
<br><strong>' . __('Discovery Support') . '</strong>: ' . __('When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->') . ' <a href="' . url_to('discoveriesCollection') . '">' . __('List Discoveries') . '</a>. ' . __('View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.') . '<br><br></p>

<br>
<h2>' . __('My AntiVirus is prompting me to deny/allow things') . '</h2>
<p>' . __('If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.') . '<br><br></p>

<br>
<h2>' . __('Discovery has stopped working') . '</h2>
<p>' . __('If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by') . ':<br>
<pre>chmod u+s /usr/bin/nmap</pre><br><br></p>

<br>
<h2>' . __('My time is off in Open-AudIT') . '</h2>
<p>' . __('This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by') . ':<br>
<strong>' . __('Linux') . '</strong><br>
<code>mysql -u openaudit -popenauditpassword -e "SELECT NOW() as `timestamp`;"</code><br>
<strong>' . __('Windows') . '</strong><br>
<code>c:\xampp\mysql\bin\mysql.exe -u openaudit -popenauditpassword -e "SELECT NOW() as `timestamp`;"</code><br>
<br></p>';

$body = '';
