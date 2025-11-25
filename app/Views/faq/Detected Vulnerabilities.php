<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Vulnerability Summary for Your Environment');

$intro = '<p>Open-AudIT has detected installed programs that match current CVE records. This is a preview of the full vulnerability insights available in Open-AudIT Enterprise.<br>
<br>
In your environment right now.
<br>
<div class="row">
    <div class="col-4">
        <div class="alert alert-danger" role="alert">
            <div class="row">
                <div class="col-8">
                    <h1>' . $included['severe'] . '</h1>
                </div>
                <div class="col-4 text-center">
                    <div class="float-end text-center" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                        <img src="' . base_url() . 'icons/warning.svg" style="width:32px; height:32px;" title="Detected Severe Vulnerabilities"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span style="color: #65758B">Severe Vulnerabilities Detected</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-high" role="alert">
            <div class="row">
                <div class="col-8">
                    <h1>' . $included['total'] . '</h1>
                </div>
                <div class="col-4 text-center">
                    <div class="float-end text-center" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                        <img src="' . base_url() . 'icons/security-high.svg" style="width:32px; height:32px;" title="All Detected Vulnerabilities"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span style="color: #65758B">Total Vulnerabilities Detected</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-warning" role="alert">
            <div class="row">
                <div class="col-8">
                    <h1>' . $included['device_count'] . '</h1>
                </div>
                <div class="col-4 text-center">
                    <div class="float-end text-center" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                        <img src="' . base_url() . 'icons/devices.svg" style="width:32px; height:32px;" title="Devices with Vulnerabilities"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span style="color: #65758B">Devices Affected</span>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br>

<div class="row">
    <div class="col-8">
        Open-AudIT Enterprise gives you full visibility and remediation guidance for these vulnerabilities.
    </div>

    <div class="col-4">
        <div class="alert alert-success" role="alert">
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-sml btn-success" type="button"><a class="" href="#" data-bs-toggle="modal" data-bs-target="#modalCompareLicense">Upgrade Now</a></button>&nbsp;&nbsp;to Open-AudIT Enterprise
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>';

$body = '<div class="row" style="margin-top:50px;">
<div class="col-12"><h2>A Preview of Vulnerabilities Detected in Your Network</h2><br>
Below are examples of CVEs detected in your installed software. The full list, affected devices, and remediation guidance are available in Open-AudIT Enterprise.<br>
</div></div>
<div class="row"><div class="col-12 text-center">
<table class="table"><thead><tr><th>CVE</th><th>Severity</th><th>Devices Affected</th><th>Products</th><th></th></tr></thead><tbody>';
foreach ($included['top_5'] as $row) {
    $products = array();
    $row->products = json_decode($row->products);
    foreach ($row->products as $key => $value) {
        $products[] = $key;
    }
    $body .= '<tr><td>' . $row->cve . '</td><td>' . $row->base_severity . '</td><td>' . $row->count . '</td><td>' . implode(', ', $products) . '</td><td><a class="" href="#" data-bs-toggle="modal" data-bs-target="#modalCompareLicense">Upgrade to View</a></td></tr>';
}
$body .= '</tbody></table>
And ' . $included['total'] . ' more vulnerabilities in your environment.</div></div>

<div class="row" style="margin-top:50px;">
    <div class="col-12">
        <h2>What You Unlock with Enterprise</h2><br>
    </div>
    <div class="col-4">
        <div class="alert alert-success" role="alert">
            <div class="row">
                <div class="col-12">
                    <h4>Full CVE Inventory</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    See every CVE detected, across every device and program in your network, with filters by vendor, severity, and business impact.
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-primary" role="alert">
            <div class="row">
                <div class="col-12">
                    <h4>Device and Software Mapping</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    Identify exactly which devices and programs are affected, and group vulnerabilities by location, business unit, or owner.
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="alert alert-success" role="alert">
            <div class="row">
                <div class="col-12">
                    <h4>Remediation and Reporting</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    Prioritise by risk, export patch lists, and provide clear vulnerability reports for security, audit, and compliance teams.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-12 text-center">
Enterprise customers also receive continuous CVE updates, dashboard widgets, and email alerts.
</div></div>
<div class="row" style="margin-top:50px;">
    <div class="col-12">
        <h2>Why This Matters</h2><br>
    </div>
    <div class="col=12">
    <ul>
        <li>Known vulnerabilities are a common entry point for attackers.</li>
        <li>Many compliance frameworks (e.g. ISO 27001, NIST, Essential Eight) expect visibility of software vulnerabilities.</li>
        <li>Open-AudIT Enterprise provides the audit trail and reporting your security and compliance teams rely on.</li>
    </ul>
    <br><a href="https://firstwave.com/contact-us/sales/" target="_blank">Talk to our team now</a>.<br><br>
    You already have the data. Open-AudIT Enterprise turns it into clear vulnerability insights and actionable remediation steps.<br>
    </div>
</div>
';


