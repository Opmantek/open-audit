<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Bulk Editing Device Attributes');

$intro = '<p>' . __('Open-AudIT makes it easy to edit the attributes of multiple devices at once.') . '<br>
<br>' . __('The steps below outline the process.') . '<br>
<br>' . __('View the') . ' <a href="' . url_to('devicesCollection') . '">devices</a> ' . __('list') . '.<br>
<br>' . __('You will need a') . ' <a href="' . url_to('rolesCollection') . '">' . __('role') . '</a> ' . __('with devices::update permission.') . '<br>
<br>' . __('You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).') . '<br>
<br>' . __('Once you have chosen your devices to edit, click the pencil button on the top right of the table.') . '
</p>
<br>
<img src="' . base_url() . 'images/faq_05.png" alt="' . __('Devices Collection') . '" style="width:50%;">';

$body = '<p><br><br>' . __('This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.') . '</p>
<br>
<img src="' . base_url() . 'images/faq_06.png" alt="' . __('Bulk Edit Form') . '" style="width:50%;">
<p>
<br>' . __('Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.') . '<br>
<br>' . __('You can also see at the bottom of the page a table showing the devices the changes will be applied to.') . '<br>
<br>' . __('Thats it! You have just edited the attributes of as many devices as you need to.') . '<br>
<br>' . __('There is absolutely no need to manually edit each individual device.') . '<br>
<br><strong>' . __('NOTE') . '</strong>: ' . 
__('Bulk edit selections wont stay selected after clicking next page.') . '<br>
<br>' . __('If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.') . '</p>
<img src="' . base_url() . 'images/faq_07.png" alt="' . __('Select All Devices') . '" style="width:20%;">';
