<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<h1>ERROR: Failed to open connection - NT_STATUS_LOGON_FAILURE</h1>
<br>
<p>This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.</p>

<?php
include('wmi_intro.php');
include('wmi_credentials_requirements.php');
