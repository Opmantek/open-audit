<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('What Can I Expect if I Have no Credentials');

$intro = '<p>You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.<br>
<br>
</p>';

$body = '<p>If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices:<br></p>
<ul>
    <li>IP Address</li>
    <li>DNS Hostname and FQDN (assuming working and client populated DNS)</li>
    <li>Open ports</li>
    <li>An educated guess to the identity and type of device</li>
</ul>
<p>If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices:<br></p>
<ul>
    <li>IP Address</li>
    <li>MAC Address</li>
    <li>Manufacturer (derived from Mac Address)</li>
    <li>DNS Hostname and FQDN (assuming working and client populated DNS)</li>
    <li>Open ports</li>
    <li>An educated guess to the identity and type of device</li>
</ul>
<p>If you have working credentials, you can expect the full amount of information possible.<br><br>
Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>
We also have a page on auditing without credentials. <a href="' . url_to('helpFAQ') . '?name=How and Why is Open-AudIT More Secure">How and Why is Open-AudIT More Secure</a>.<br><br>
In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - that\'s just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But that\'s just my personal preference &#128512;.<br><br></p>
';
