<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<h1>ERROR: StartService failed. NT_STATUS_CANT_WAIT</h1>
<br>

<p>Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).</p>

<img src="<?= $meta->baseurl ?>images/winexesvc_allow_01.png" alt="Allow WinExeSvc to run" /><br>

<?php
include('wmi_intro.php');
include('wmi_dcom.php');
