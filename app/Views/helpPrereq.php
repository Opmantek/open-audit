<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$this->db = db_connect();
if (php_uname('s') == "Windows NT") {
    exec("echo. |WMIC OS Get Caption", $output);
    if (isset($output[1])) {
        $operating_system = $output[1];
    } else {
        $operating_system = "unknown (You must run Apache as an administrator on Windows to determine this)";
    }
} else {
    $operating_system = php_uname('s');
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('Prerequisites and Tests') ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <p class="fs-1">Nmap</p>
                            <p><br />Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here - <a href="https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap" target="_blank">Open-AudIT and Nmap</a>. </p><br />
                            <p class="fs-3">Windows</p>
                            <p>Nmap is available for Windows, here - <a href="https://nmap.org/download.html">https://nmap.org/download.html</a>. All other dependencies are packaged with the Open-AudIT download.<br />
                            </p>
                            <br />
                            <p class="fs-3">Linux</p>
                            <p>The Linux Open-AudIT installer will test for and if required, install Open-AudIT's dependencies from your distributions repository. After installing you should run the below to SetUID. This is required for SNMP (UDP 161) detection. This is supported on RedHat/CentOS and Debian/Ubuntu. To enable the Apache user to use Nmap to detect port UDP 161, run the below commands:<br /><br />
                            For Centos / Redhat: (NOTE - if you upgrade using yum, you will need to reapply this "chmod" setting).<br /></p><pre>sudo chmod u+s `which nmap`</pre><p><br />
                            For Debian / Ubuntu:<br /></p><pre>sudo chmod u+s `which nmap`<br />sudo dpkg-statoverride --list `which nmap`</pre><br />
                            <p class="fs-1">Permissions</p>
                            <p><br />Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.</p><br />
                            <p class="fs-3">Linux</p>
                            <p id="cron_file_permission">This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.</p>
                            <pre>chmod 644 /etc/cron.d/open-audit</pre><br />
                            <p>This is the directory where we store any attachments to devices.</p>
                            <pre>chmod 777 <?= APPPATH ?>Attachments</pre><br />
                            <p>Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.</p>
                            <pre>chmod 777 <?= str_replace('/app/', '', APPPATH) ?>/writable/uploads</pre><br />
                            <p>The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.</p>
                            <pre>chmod 777 <?= str_replace('/app/', '', APPPATH) ?>/other/scripts</pre><br />
                            <p>Any user uploaded images are placed here.</p>
                            <pre>chmod 777 <?= str_replace('/app/', '', APPPATH) ?>/public/custom_images</pre><br />
                            <p class="fs-1">Cron</p>
                            <p id="cron_file_exists">A sample cron file for Linux is below. This should be placed in /etc/cron.d/open-audit</p><br />
                            <pre># m h dom month dow user command<br .># run the task checker each minute<br />* * * * *   root    php <?= str_replace('/app/', '', APPPATH) ?>/public/index.php tasks execute >/dev/null 2>&1</pre>
                            <br />

                        </div>
                    </div>
                </div>
            </div>
        </main>
