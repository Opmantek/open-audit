<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<h1>ERROR: Failed to save ADMIN$/winexesvc.exe - NT_STATUS_ACCESS_DENIED</h1>
<br>
<p>When Open-AudIT on Linux   discovers a Windows machine, in order to execute a remote command we use <a href="https://sourceforge.net/p/winexe/wiki/Home/">Winexe</a>. This code relys on the great work done by the <a hre="https://www.samba.org/">Samba</a> team.</p>

<p>When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use <a href="https://www.poweradmin.com/paexec/">PAExec</a>. PAExec is a freely-redistributable re-implementation of SysInternal/Microsoft's popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariq's RemCom.</p>

<p>Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).<br>
<br>
Access to the admin$ share and RPC uses the SMB2 protocol.<br>
<br>
This is also the way that PAExec works.<br>
<br>As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>
</p>


%= include('open-audit/discovery_issues/wmi_intro'); 
