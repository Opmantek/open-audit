<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can download, parse and use NIST CVE Vulnerability reports.</p>
<br>
<p>A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.</p>
<br>
<p>

How do they work?<br>
<br>
Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br>
<br>
FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we don\'t need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br>
<br>
So, you\'re always up to date!<br>
<br>
In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br>
<br>
In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there\'s no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br>
<br>
This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that\'s just a single CVE. What about determining which CVEs you have and don\'t have? What about adding a vendor to the list later? So many things to consider!<br>
<br>
As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.<br>
<br>
</p>

<hr>
<h2>Notes</h2>

<p>A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL isn\'t quite correct.</p>

<p>Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.</p>

<p><i><span class="text-primary">Open-AudIT does <strong>not</strong> provide vulnerability reports for the following:</span></i>
<ul>
<li>Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.</li><br>

<li>A CVE item that does not contain a filter to determine the affected item(s).</li><br>

<li>Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.</li><br>

<li>CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.</li><br>
</ul>

<br>
<br>
<hr>
<h2>Links</h2>

<p>Thanks to <a href="https://www.first.org" target="_blank">first.org</a> for this information. <a href="https://www.first.org/cvss/v4-0/specification-document" target="_blank">https://www.first.org/cvss/v4-0/specification-document</a></p>

<br>
<br>
<hr>
<h2>Vulnerability Status</h2>
<p></p>
<table class="table">
  <thead>
    <tr>
      <th>vulnStatus</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Received</td>
      <td>The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.</td>
    </tr>
    <tr>
      <td>Awaiting Analysis</td>
      <td>The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.</td>
    </tr>
    <tr>
      <td>Undergoing Analysis</td>
      <td>The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.</td>
    </tr>
    <tr>
      <td>Analyzed</td>
      <td>Enrichment is complete. The CVE has full metadata and is considered stable.</td>
    </tr>
    <tr>
      <td>Modified</td>
      <td>The CVE has been updated after initial analysis. NVD enrichment data may have been revised.</td>
    </tr>
    <tr>
      <td>Deferred</td>
      <td>The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.</td>
    </tr>
    <tr>
      <td>Rejected</td>
      <td>The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.</td>
    </tr>
  </tbody>
</table>

<br>
<hr>
<br>

<h2>Scope</h2>
<p>
Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br>

The only two valid values for this attribute are:<br>
<ul>
  <li><strrong>unchanged</strong> — The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.</li><br>

  <li><strrong>changed</strong> — The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).</li>
</ul>
</p>

<br><br><hr>
';

$body = '';

/*
https://new-support.first.org/support/solutions/articles/158000409737-can-i-use-this-picture-content-application-

By default, FIRST grants permission for standards it develops to be implemented and/or adopted by FIRST members and non-members at no cost in perpetuity. The default license for any standard is Creative Commons CC-BY-SA (Attribution+ShareAlike). Exceptions must be approved by the FIRST Board.

In case you want to use the results of a SIG, group that aims to be a standard, yes, you can use it, including the contents of the standards and any byproducts. We ask for the proper reference (Attribution) and that if you share this material, that it be shared under a similar license.

Publications and presentations from FIRST Events might have a different license applied. In case the license is not explicit, please reach out for clarification.
*/
