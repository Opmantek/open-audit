<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<h1>ERROR: StartService failed. NT_STATUS_CANT_WAIT</h1>
<br>

<p>This issue is under investigation.</p>

<p>The Windows log may say the following: <br>

The <i>reevert Communication Agent</i> service failed to start due to the following error: <code>Access is denied</code>.<br>

The machine-default permission settings do not grant Local Activation permission for the COM Server application with CLSID {C2F03A33-21F5-47FA-B4BB-156362A2F239} and APPID {316CDED5-E4AE-4B15-9113-7055D84DCC97}
 to the user HELPAR\opDev SID (S-1-5-21-3343678625-1228429338-2497688395-1001) from address LocalHost (Using LRPC) running in the application container Microsoft.Windows.ShellExperienceHost_10.0.19041.1023_neutral_neutral_cw5n1h2txyewy SID (S-1-15-2-155514346-2573954481-755741238-1654018636-1233331829-3075935687-2861478708). This security permission can be modified using the Component Services administrative tool.</p>

<?php
include('wmi_intro.php');
include('wmi_dcom.php');
