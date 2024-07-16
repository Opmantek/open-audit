<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Running Open-AudIT Apache Service Under Windows');

$intro = '<p>
<i>If you\'re running an Open-AudIT server on Linux, this doesn\'t affect you.</i><br>
<br>
When running Open-AudIT on Windows the Apache service account must be that of a \'regular\' user (or the Administrator). This is because the "Local System" account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.<br>
<br></p>
<h2>Fixing the Issue</h2>
<p>To make the change, just follow the steps below.<br>
<br>
Select the Start menu and type "services". Click the Services icon.<br><br>
<img src="' . base_url() . 'images/faq_01.png">
<br><br>
Next, right click the Apache2.4 service and select Properties, then click the Log On tab.<br><br>
<img src="' . base_url() . 'images/faq_02.png">
<br><br>
Select the "This Account" checkbox and provide the account name and password.<br>
<br>
Next, click OK, then right click the Apache 2.4 service and click Restart. Done!<br>
<br>


</p>';

$body = '';
