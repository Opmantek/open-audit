<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>' . __('The license endpoint allows you to track the number of licenses found on your devices.') . '</p>

<br>
<h2>' . __('How Does it Work?') . '</h2>

<p>Open-AudIT ' . __('uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.') . '</p>';

$body = '<h2>' . __('Notes') . '</h2>

<p>' . __('On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.') . '</p>

</br>';
