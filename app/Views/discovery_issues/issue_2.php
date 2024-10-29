<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<h1>ERROR: Failed to open connection - NT_STATUS_CONNECTION_RESET</h1>
<br>
<p>This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see <a href="../discovery_issues/1">here</a>.</p>

<?php
include('wmi_intro.php');
