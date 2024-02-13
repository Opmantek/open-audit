<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>The collector is essentially a full install of Open-AudIT in ‘collector’ mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about it\'s local networks and devices, where firewall and/or network traversal is an issue from the server.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.</p>';

$body = '<h2>Notes</h2>
<br>
<p>Collector / Server is designed so that you can have a remote or \'collector\'  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the \'server\'.  This means you only need an HTTP or HTTPS connection from that Collector to the Server. <br>
<br>
Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.</p>
<br>
<h2>Details</h2>
<br>
The collector is essentially a full install of Open-AudIT in ‘collector’ mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be "one collector per subnet" where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>
When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br>
<br>
Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br>
<br>
The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br>
<br>
By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.</p>
<br>';
