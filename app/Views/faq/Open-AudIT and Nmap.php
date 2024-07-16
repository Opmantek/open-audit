<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Open-AudIT and Nmap');

$intro = '<p>Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.<br>
<br>
</p>';

$body = '<h2>Linux</h2>
<p>The Linux Open-AudIT installer will test for and if required, install Open-AudIT\'s dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br>
<br>
For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this "chmod" setting).<br>
<code>sudo yum install nmap<br>
sudo chmod u+s `which nmap`</code>
<br>
<br>
For Debian/Ubuntu run (including setting dpkg to remember your override so an apt-get upgrade will not break Open-AudIT).<br>
<code>sudo apt-get install nmap<br>
sudo chmod u+s `which nmap`<br>
sudo dpkg-statoverride --list `which nmap`</code>
<br>
<br>
</p>
<h2>Windows</h2>
<p>The Windows Open-AudIT installer will test for the presence of Nmap in it\'s standard install locations of:</p>
<div>
<ul>
    <li>C:\Program Files\Nmap\nmap.exe</li>
    <li>C:\Program Files (x86)\Nmap\nmap.exe</li>
</ul>
</div>
<br>
<p>
If the binary is not found in either of these locations, a warning message will be displayed in the installer.<br>
<br>
To install Nmap on Windows, visit the Nmap page at <a href="https://nmap.org/download.html" target="+blank">https://nmap.org/download.html</a> and download the Latest Release self-installer. You may need to scroll down the page to find it.<br><br>
<img src="' . base_url() . 'images/faq_03.png" alt="Nmap Download">
<br><br>
Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).
<br><br>
<img src="' . base_url() . 'images/faq_04.png" alt="Nmap Install">
<br><br>
Use the standard install options when displayed and click the "I Agree", "Next" and "Install" buttons to install Nmap.

';
