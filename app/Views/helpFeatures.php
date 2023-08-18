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
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-section oa-icon"></span><?= __('Features') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                <table class="table" id="feature_table">
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="">Features</th>
                            <th class="text-center">Community</th>
                            <th class="text-center">Free License</th>
                            <th class="text-center">Professional</th>
                            <th class="text-center">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" "><a href="<?= url_to('discoveriesHelp') ?>">Network Discovery</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('scriptsHelp') ?>">Device and Software and Hardware Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="/omk/open-audit/features/changes">Configuration Change Detection and Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('fieldsHelp') ?>">Custom Fields</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('mapsHelp') ?>">Geographical Maps</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('dashboardsHelp') ?>">Interactive Dashboards</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('tasksHelp') ?>">Scheduling - discovery, reporting &amp; more</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('reportsHelp') ?>">Time based, Historical and Multi Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('baselinesHelp') ?>">Baselines for device comparison</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('cloudsHelp') ?>">Cloud Discovery and Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('rolesHelp') ?>">Configurable Role Based Access Control (RBAC)</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('ldap_serversHelp') ?>">RBAC for Active Directory and openLDAP</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('discovery_scan_optionsHelp') ?>">Customisable Scanning Options per Discovery</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('filesHelp') ?>">File Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('racksHelp') ?>">Rack Management and Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('supportHelp') ?>">Commercial Support</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('devicesHelp') ?>">Devices</a></td>
                            <td class=" ">&nbsp;</td>
                            <td class="text-center"><?= __('Free for 20 Devices') ?></td>
                            <td class="text-center"><?= __('From 500 Devices') ?></td>
                            <td class="text-center"><?= __('From 100 Devices') ?></td>
                        </tr>
                    </tbody>
                </table>

                        </div>
                    </div>
                </div>
            </div>
        </main>
