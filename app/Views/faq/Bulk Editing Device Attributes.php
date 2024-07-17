<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Bulk Editing Device Attributes');

$intro = '<p>Open-AudIT makes it easy to edit the attributes of multiple devices at once.<br>
<br>
The steps below outline the process.<br>
<br>
View the <a href="' . url_to('devicesCollection') . '">devices</a> list.<br>
<br>
You will need a <a href="' . url_to('rolesCollection') . '">role</a> with Devices update permission.<br>
<br>
You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).<br>
<br>
Once you have chosen your devices to edit, click the pencil button on the top right of the table.
</p>
<br>
<img src="' . base_url() . 'images/faq_05.png" alt="Devices Collection" style="width:50%;">
';

$body = '<p><br><br>This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.</p>
<br>
<img src="' . base_url() . 'images/faq_06.png" alt="Bulk Edit Form" style="width:50%;">
<p>
<br>
Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.<br>
<br>
You can also see at the bottom of the page a table showing the devices the changes will be applied to.<br>
<br>
That\'s it! You have just edited the attributes of as many devices as you need to.<br>
<br>
There is absolutely no need to manually edit each individual device.<br>
<br>
<strong>NOTE</strong>: Bulk edit selections won\'t stay selected after clicking next page.<br>
<br>
If this occurs then the issue you\'re seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.<br></p>
<img src="' . base_url() . 'images/faq_07.png" alt="Select All Devices" style="width:20%;">





';
