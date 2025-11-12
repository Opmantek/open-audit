<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Searching Using DataTables');

$intro = '<p>' . __('Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.') . '<br><br></p>';

$body = '<h2>' . __('Like versus Equals') . '</h2>

<p>' . __('When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard') . ' <a href="' . url_to('api') . '">Open-AudIT API</a>. ' . __('The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.') . '</p>

<br><br>

<h2>' . __('Options, options, options') . '</h2>

<p>' . __('So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are') . ' <code>=</code>, <code>!=</code>, <code>></code>, <code>>=</code>, <code><</code>, <code><=</code>, <code>like</code>, <code>!like</code>, <code>in()</code> ' . __('and') . ' <code>notin()</code>. ' . __('In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.') . '
</p>

<h2>' . __('Examples') . '</h2>
<p>' . __('Our examples will use the <i>type</i> column.') . '<br><br></p>
<table>
    <thead>
        <tr>
            <th>' . __('Column') . '</th>
            <th>' . __('Input') . '</th>
            <th>' . __('Result') . '</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>' . __('Type') . '</td>
            <td>computer</td>
            <td>' . __('All devices with a type like computer.') . '</td>
        </tr>
        <tr>
            <td>' . __('Type') . '</td>
            <td>in(computer,router)</td>
            <td>' . __('All devices with a type of computer or router.') . '</td>
        </tr>
        <tr>
            <td>' . __('Type') . '</td>
            <td>notin(switch,printer)</td>
            <td>' . __('All devices without a type of switch and printer.') . '</td>
        </tr>
        <tr>
            <td>' . __('Type') . '</td>
            <td>!=switch&devices.type!=printer</td>
            <td>' . __('All devices without a type of switch and printer. Essentially the same as the above query.') . '</td>
        </tr>
    </tbody>
</table>

<br><br>';
