<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Sometimes agentless discovery just doesn\'t fit your use-case. Maybe your PCs have tight firewalls. Maybe they\'re not on the network when your discoveries are scheduled. Maybe they\'re used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will \'check-in\' with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the "all must match" requirement.<br><br>
    You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says "If the agent IP is in this subnet, set the location_id of the device".<br><br>
    Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p>
    <p>We have tests for:
    <ul>
    <li><strong>Minutes</strong>: If this many minutes (or more) have passed since the server last saw the device, pass.</li>
    <li><strong>Subnet</strong>: If the primary IP (as reported by the device) is in this subnet, pass.</li>
    <li><strong>OS</strong>: If the OS Family (as reported by the device) contains this item, pass.</li>
    </ul>
    <br>We also have our action items (which are executed in the order below):<br><br>
    <ul>
    <li><strong>Download a File</strong>: A URL provided to the agent which will then download the file and store it on the local disk.</li>
    <li><strong>Run a Command</strong>: A command to run. When the agent is Windows based, this command is run from within the powershell agent.</li>
    <li><strong>Assign the Device to a Location</strong>: Any discovered devices will be assigned to this Location when they run their audit script (if set).</li>
    <li><strong>Assign the device to an Org</strong>: Any devices will be assigned to this Org when they run their audit script (if set).</li>
    <li><strong>Audit</strong>: The agent should download a fresh copy of the audit script, run it and submit the result to the server.</li>
    <li><strong>Uninstall</strong>: After completing the above, uninstall the agent.</li>
    </ul></p>
    <p>The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).</p>';

$body = '<br>';
