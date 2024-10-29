<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<br>
<h2>DCOM</h2>
<br>
<p>On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.<br>
<br>
Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br>
<br>
Right click on "My Computer" and select properties<br>
<br>
Select the "Default Properties" tab<br>
<ul>
    <li>Enable Distributed COM on this computer - Option is checked</li>
    <li>Default Authentication Level - Set to Connect</li>
    <li>Default Impersonation Level - Set to Identify</li>
</ul>
<br>
Select the "COM Security" tab<br>
<br>
Click on Access Permissions ' Edit Default<br>
<ul>
    <li>Add "Anonymous", "Everyone", "Interactive", "Network", "System" with Local and Remote access permissions set.</li>
</ul>
<br>
Click on Launch and Activation Permissions ' Edit Default<br>
<ul>
    <li>Add "Anonymous", "Everyone", "Interactive", "Network", "System" with Local and Remote access permissions set.</li>
</ul>
<br>
Click on OK and close the DCOMCNFG window.<br>
<br>
The above changes will require a reboot to take effect.<br>
<br>