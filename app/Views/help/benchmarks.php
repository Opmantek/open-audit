<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.<br><br>

The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.<br><br>

Security Content Automation Protocol (<a target="_blank" href="https://csrc.nist.gov/projects/security-content-automation-protocol/" data-bs-toggle="popover" data-bs-title="SCAP" data-bs-content="The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting">SCAP</a>) is U.S. standard maintained by National Institute of Standards and Technology (<a target="_blank" href="https://www.nist.gov/" data-bs-toggle="popover" data-bs-title="NIST" data-bs-content="The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.">NIST</a>). The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.</p>

    <br><br>
    <h2>How Does it Work?</h2>
    <p>Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.<br></p>
    <p>You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.<br/></p>
    <p>Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.<br><br></p>';

$body = '<h2>Help</h2>
    <p>Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.<br><br></p>
    <h2>Warning</h2>
    <p>As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, don\'t blindly start "fixing" issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.<br><br></p>';

helper('ssg_helper');
$ssgs = ssg_definitions();
$body .= '<h2>Available Benchmarks</h2><p>
<table class="table">
    <thead>
        <tr>
            <th>OS</th>
            <th>Benchmark</th>
        </tr>
    </thead>
    <tbody>';
$os = 'CentOS7';
foreach ($ssgs as $ssg) {
    if ($ssg->os_family . $ssg->os_version !== $os) {
        $os = $ssg->os_family . $ssg->os_version;
        $body .= "\n        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
    }
    $body .= "\n        <tr><td>" . $ssg->os_family . ' ' . $ssg->os_version . '</td><td>' . $ssg->title . '</td><tr>';
}
$body .= '</tbody></table><br><br>';
