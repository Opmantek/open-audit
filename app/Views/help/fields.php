<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can store information in additional fields that are associated with each device.<br>
    <br>
    Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.</p>';

$body = '<h2>Notes</h2>
<br>
Fields attributes are:
<ul>
    <li>Name: The name you are giving to this field. Ideally it should be unique.</li>
    <li>Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).</li>
    <li>Values: In the case of a \'list\' field, this should be a comma separated list of valid values.</li>
</ul>
<br>
<p>If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br>
    <br>
    Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.<br>
    <br>
    You can edit the value of the Additional Field for each individual device on the device\'s details page. View the device details screen, open the section containing the field and (if you have devices::update rights) you can click on the field value to edit it.</p>
<br>';
