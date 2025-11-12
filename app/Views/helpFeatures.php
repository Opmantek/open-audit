<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$this->db = db_connect();
$operating_system = $config->server_platform;

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
    $message = __('Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.');
    $btnEntText = __('Buy More');
}

if ($product === 'professional') {
    $highlightEnt = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnEnt = 'btn-success';
    $btnEntStyle = 'style="color:white;"';
    $message = __('Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.');
    $btnProText = __('Buy More');
}

if ($license === 'free' and $product === 'enterprise') {
    $highlightPro = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnPro = 'btn-success';
    $btnProStyle = 'style="color:white;"';
    $message = __('Open-AudIT Professional. The world\'s most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.');
}

if ($product === 'community') {
    $highlightFre = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnFre = 'btn-success';
    $btnFreStyle = 'style="color:white;"';
    $message = __('Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.');
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
                    <h6 style="padding-top:10px;"><span class="icon-section oa-icon"></span><?= __('Features') ?></h6>
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
                                        <th class="text-center"><?= __('Community') ?></th>
                                        <th class="text-center"><?= __('Professional') ?></th>
                                        <th class="text-center"><?= __('Enterprise') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('discoveriesHelp') ?>"><?= __('Network Discovery') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('scriptsHelp') ?>"><?= __('Device and Software and Hardware Auditing') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('componentsHelp') ?>"><?= __('Database Server Discovery') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('componentsHelp') ?>"><?= __('Web Server Discovery') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('componentsHelp') ?>"><?= __('File Share Discovery') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="#"><?= __('Configuration Change Detection and Reporting') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('licensesHelp') ?>"><?= __('Software License Reporting') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('fieldsHelp') ?>"><?= __('Custom Fields') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="#"><?= __('Data Export - CSV, XML, JSON') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('mapsHelp') ?>"><?= __('Geographical Maps') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('clustersHelp') ?>"><?= __('Clusters and Reporting') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('dashboardsHelp') ?>"><?= __('Interactive Dashboards') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('api') ?>">JSON API</a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f;; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('tasksHelp') ?>"><?= __('Scheduling - discovery, reporting &amp; more') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('queriesHelp') ?>"><?= __('Extra and Time based Reporting') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('agentsHelp') ?>"><?= __('Optional Agent Based Auditing') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('applicationsHelp') ?>"><?= __('Application Definitions') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('baselinesHelp') ?>"><?= __('Baselines for Device Comparison') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('benchmarksHelp') ?>"><?= __('Benchmarks for Best Practise Configuration') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('cloudsHelp') ?>"><?= __('Cloud Discovery and Auditing') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('collectorsHelp') ?>"><?= __('Collectors for Remote Discovery') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('rolesHelp') ?>"><?= __('Configurable Role Based Access Control (RBAC)') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('authHelp') ?>"><?= __('RBAC for Active Directory and openLDAP') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('widgetsHelp') ?>"><?= __('Dashboard Widgets') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('discovery_scan_optionsHelp') ?>"><?= __('Customisable Scanning Options per Discovery') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('filesHelp') ?>"><?= __('File Auditing') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('racksHelp') ?>"><?= __('Rack Management and Reporting') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('supportHelp') ?>"><?= __('Commercial Support') ?></a></td>
                                        <td class="text-center" style="<?= $highlightCom ?>"><i class="icon-x" style="color:#d9534f; opacity: 0.5;"></i></td>
                                        <td class="text-center" style="<?= $highlightPro ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                        <td class="text-center" style="<?= $highlightEnt ?>"><i class="icon-check" style="color:#5cb85c;"></i></td>
                                    </tr>
                                    <tr>
                                        <td class=" "><a href="<?= url_to('devicesHelp') ?>"><?= __('Devices') ?></a></td>
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
