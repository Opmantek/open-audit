<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>With the release of Open-AudIT 3.2.0 we have introduced a new concept called Rules. Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br>
	<br>
	NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say "Run the rules against all devices" or "Run the rules against these devices". An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.<br>
    <br></p>';




$body = '<h2>Notes</h2>
<br>
<p>Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that doesn\'t match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br>
<br>
When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br>
<br>
Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br>
<br>
An example rule to match an SNMP OID and set the model is below.<br>
<pre>
INPUTS
table = devices
attribute = snmp_oid
operator = eq
value = 1.3.6.1.4.1.9.1.620
 
OUTPUTS
table = devices
attribute = model
value = Cisco 1841
value_type = string
</pre>
</p>

<p><em><strong>Operators</strong></em> in Inputs can have the following values.</p>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>eq</td>
                <td>Equals</td>
            </tr>
            <tr>
                <td>ne</td>
                <td>Does Not Equal</td>
            </tr>
            <tr>
                <td>gt</td>
                <td>Greater Than</td>
            </tr>
            <tr>
                <td>ge</td>
                <td>Greater Than or Equals</td>
            </tr>
            <tr>
                <td>lt</td>
                <td>Less Than</td>
            </tr>
            <tr>
                <td>le</td>
                <td>Less Than or Equals</td>
            </tr>
            <tr>
                <td>st</td>
                <td>Starts With</td>
            </tr>
            <tr>
                <td>li</td>
                <td>Like</td>
            </tr>
            <tr>
                <td>nl</td>
                <td>Not Like</td>
            </tr>
            <tr>
                <td>in</td>
                <td>In the (comma seperated) list</td>
            </tr>
            <tr>
                <td>ni</td>
                <td>Not in the (comma seperated) list</td>
            </tr>
        </tbody>
    </table>
</div>

<p><em><strong>Value Types</strong></em> in Outputs can have the following values.</p>
<div class="table-wrap">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>string</td>
                <td>a String</td>
            </tr>
            <tr>
                <td>integer</td>
                <td>an Integer</td>
            </tr>
            <tr>
                <td>timestamp</td>
                <td>
                    A timestamp.<br>
                    If the value is set, that timestamp value will be used.<br>
                    If the value is not set, the current timestamp will be used.
                </td>
            </tr>
        </tbody>
    </table>
</div>

<p>When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.</p>
<br>
Hit on snmp_enterprise_id 9 eq 9<br>
Hit on manufacturer is empty <br>
<strong>Command:</strong> Rule Match - SNMP Enterprise Number for ciscoSystems, ID: 10 <br>
<strong>Output:</strong> <code>{"manufacturer":"Cisco Systems","snmp_enterprise_name":"ciscoSystems"}</code><br>
<br>
and another<br>
<br>
Hit on snmp_oid 1.3.6.1.4.1.9.1.620 eq 1.3.6.1.4.1.9.1.620 <br>
<strong>Command:</strong> Rule Match - SNMP OID match, ID: 135661 <br>
<strong>Output:</strong> <code>{"model":"Cisco 1841","type":"router"}</code><br>
<br>

</p><br>';
