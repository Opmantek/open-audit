<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Searching Using DataTables');

$intro = '<p>Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.
<br><br></p>';

$body = '<h2>Like versus Equals</h2>
<p>When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the \'Type\' column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard <a href="' . url_to('api') . '">Open-AudIT API</a>. The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we\'re using a <code>LIKE</code> clause, it is case-insensitive.</p>
<br><br>
<h2>Options, options, options</h2>
<p>So apart from a regular word, what other options are there - I\'m glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are <code>=</code>, <code>!=</code>, <code>></code>, <code>>=</code>, <code><</code>, <code><=</code>, <code>like</code>, <code>!like</code>, <code>in()</code> and <code>notin()</code>. In the case of \'in\' and \'notin\', you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).
<br><br>
With these operators you can filter quite comprehensively.
<br><br>
When you add data and filter on multiple columns, those columns are combined using <code>AND</code>. You cannot filter using an <code>OR</code> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.
</p>

<h2>Examples</h2>
<p>Our examples will use the \'type\' column.<br><br></p>
<table>
    <thead>
        <tr>
            <th>Column</th>
            <th>Input</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Type</td>
            <td>computer</td>
            <td>All devices with a type like %computer%.</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>in(computer,router)</td>
            <td>All devices with a type of computer or router.</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>notin(switch,printer)</td>
            <td>All devices without a type of switch and printer.</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>!=switch&devices.type!=printer</td>
            <td>All devices without a type of switch and printer. Essentially the same as the above query.</td>
        </tr>
    </tbody>
</table>

<br><br>';
