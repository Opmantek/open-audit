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
$highlightCom = '';
$btnCom = 'btn-default';
$btnComStyle = '';
$btnComText = __('Get Started');

$highlightFre = '';
$btnFre = 'btn-default';
$btnFreStyle = '';
$btnFreText = __('Activate');

$highlightPro = '';
$btnPro = 'btn-default';
$btnProStyle = '';
$btnProText = __('Buy');

$highlightEnt = '';
$btnEnt = 'btn-default';
$btnEntStyle = '';
$btnEntText = __('Upgrade');

$message = '';
$license = (!empty($config->license)) ? strtolower($config->license) : 'none';
$product = (!empty($config->product)) ? $config->product : 'community';

if ($product === 'enterprise' and $license !== 'free') {
    $highlightEnt = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnEnt = 'btn-success';
    $btnEntStyle = 'style="color:white;"';
    $message = 'Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';
    $btnEntText = __('Buy More');
}

if ($product === 'professional') {
    $highlightEnt = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnEnt = 'btn-success';
    $btnEntStyle = 'style="color:white;"';
    $message = 'Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';
    $btnProText = __('Buy More');
}

if ($license === 'free' and $product === 'enterprise') {
    $highlightPro = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnPro = 'btn-success';
    $btnProStyle = 'style="color:white;"';
    $message = 'Open-AudIT Professional. The world\'s most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.';
}

if ($product === 'community') {
    $highlightFre = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnFre = 'btn-success';
    $btnFreStyle = 'style="color:white;"';
    $message = 'Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.';
}

$button_prompt_never = '';
$button_prompt_later = '';
if (($meta->collection === 'summaries' or $meta->collection === 'groups') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial') {
    $button_prompt_never = '<span id="button_prompt_never"><a class="btn btn-default btn-sm dismiss_modal_button" href="#" data-value="2100-01-01">' . __('Do not show me again') . '</a></span>';
    $button_prompt_later = '<span id="button_prompt_later"><a class="btn btn-default btn-sm dismiss_modal_button" href="#" data-value="' . date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 day')) . '">' . __('Ask me later') . '</a></span>';
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
                            <table class="table">
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
                                        <th class="text-center">Professional</th>
                                        <th class="text-center">Enterprise</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('discoveriesHelp') ?>">Network Discovery</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('scriptsHelp') ?>">Device and Software and Hardware Auditing</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('componentsHelp') ?>">Database Server Discovery</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('componentsHelp') ?>">Web Server Discovery</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('componentsHelp') ?>">File Share Discovery</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="#">Configuration Change Detection and Reporting</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('licensesHelp') ?>">Software License Reporting</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('fieldsHelp') ?>">Custom Fields</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="#">Data Export - CSV, XML, JSON</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('mapsHelp') ?>">Geographical Maps</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('clustersHelp') ?>">Clusters and Reporting</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('dashboardsHelp') ?>">Interactive Dashboards</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('api') ?>">JSON API</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('tasksHelp') ?>">Scheduling - discovery, reporting &amp; more</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('reportsHelp') ?>">Time based Reporting</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('agentsHelp') ?>">Optional Agent Based Auditing</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('applicationsHelp') ?>">Application Definitions</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('baselinesHelp') ?>">Baselines for Device Comparison</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('benchmarksHelp') ?>">Benchmarks for Best Practise Configuration</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('cloudsHelp') ?>">Cloud Discovery and Auditing</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('collectorsHelp') ?>">Collectors for Remote Discovery</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('rolesHelp') ?>">Configurable Role Based Access Control (RBAC)</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('authHelp') ?>">RBAC for Active Directory and openLDAP</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('widgetsHelp') ?>">Dashboard Widgets</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('discovery_scan_optionsHelp') ?>">Customisable Scanning Options per Discovery</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('filesHelp') ?>">File Auditing</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('racksHelp') ?>">Rack Management and Reporting</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('supportHelp') ?>">Commercial Support</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('devicesHelp') ?>">Devices</a></td>
                                        <td class=" ">&nbsp;</td>
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
