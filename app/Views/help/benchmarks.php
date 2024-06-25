<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Benhcmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.<br><br>

The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.<br><br>

Security Content Automation Protocol (<a href="#" data-bs-toggle="popover" data-bs-title="SCAP" data-bs-content="The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting">SCAP</a>) is U.S. standard maintained by National Institute of Standards and Technology (<a href="#" data-bs-toggle="popover" data-bs-title="NIST" data-bs-content="The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.">NIST</a>). The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.</p>

    <br><br>
    <h2>How Does it Work?</h2>
    <p>Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.<br></p>
    ';

$body = '<p>Benchmark execution and processing can take a lengthy amount of time, hence the requirement to schedule them and not run them ad-hoc.<br><br></p>';
