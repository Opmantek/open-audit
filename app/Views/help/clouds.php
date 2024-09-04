<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.<br>
<br>
Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.</p>
<h2>How Does it Work?</h2>
<br>
<p>Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud (<a href="' . url_to('helpFAQ') . '?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="' . url_to('helpFAQ') . '?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br>
<br>
Clouds are a feature available to Open-AudIT Enterprise licensed customers.</p>';

$body = '<h2>Device Matching Rules</h2>
<br>
<p>To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudIT\'s matching rules see HERE: Matching Devices</p>
<br>
';
