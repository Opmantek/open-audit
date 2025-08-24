<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can download, parse and use NIST CVE Vulnerability reports.</p>
<br>
<p>A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE repport, along with enrichment data from FirstWave. These two items are combined, along with user input to produce a suitable query.</p>
<br>

<hr>
<h2>Notes</h2>
<p>A vulnerability will only be displayed by default where its status is either pending or confirmed. Vulnerabilities with other statues can be displayed using the buttons in the panel header.</p>

<p>A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient.</p>

<p>Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version for attributes.</p>

<p><i><span class="text-primary">Open-AudIT does <strong>not</strong> provide vulnerability reports for the following:</span></i>
<li>Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.</li><br>
<li>A CVE item that does not contain a filter to determine the affected item.</li><br>
<li>A CVE initially published before 1st August, 2025.</li><br>
<li>Vulnerabilities initially published 1 week prior to your first request for vulnerabilities from FirstWave. Only those new vulnerabilities from the time of your request, minus one week will be retrieved. We see no sense in returning vulnerabilities from (potentially) years prior.</li>
</ul>

<br>
<br>
<hr>
<h2>Links</h2>
<p><a href="https://www.first.org/cvss/v4-0/specification-document">https://www.first.org/cvss/v4-0/specification-document</a></p>

<br>
<br>
<hr>
<h2>Status</h2>
<p>The Status field is manually set, initially by determining if there are matching items in your database. If so, the status is set to <i>pending</i>. If not, the status is set to <i>unlikely</i>. The user should review these items and if they determine a CVE is relevant to their environment, the status should be changed to <i>confirmed</i>. Conversely, if the CVE is determined to not be applicable, the status should be set to <i>declined</i>. By default on vulnerabilities with a status of pending or confirmed are shown on the initial vulnerability list screen.</p>


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
  <li><strrong>unchanged</strong> — The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.</li>

  <li><strrong>changed</strong> — The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).</li>
</ul>
</p>

<br><br><hr>
';

$body = '';
