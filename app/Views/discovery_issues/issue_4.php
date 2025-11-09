<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
?>
<h1>ERROR: Connection Failed - NT_STATUS_NO_LOGON_SERVERS</h1>
<br>
<p><?= __('When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use') ?> <a href="https://sourceforge.net/p/winexe/wiki/Home/">Winexe</a>. <?= __('This code relys on the great work done by the') ?> <a hre="https://www.samba.org/">Samba</a> <?= __('team') ?>. <?= __('Winexe page on Samba') ?> <a href="https://www.samba.org/samba/docs/current/man-html/winexe.1.html" target="_blank"><?= __('here') ?></a>.</p>

<p>Winexe <strong><?= __('must') ?></strong> <?= __('have a working reverse DNS resolvable IP to the target Windows PC.') ?><br>
<br>
<?= __('Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.') ?>
</p>

<?php
include('wmi_intro.php');
