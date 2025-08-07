<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can download, parse and use NIST CVE Vulnerability reports.</p>
<br>
<h2></h2>
<p><a href="https://www.first.org/cvss/v4-0/specification-document">https://www.first.org/cvss/v4-0/specification-document</a></p>



<br>
<hr>
<br>
<h2>The Vuln Status</h2>
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
';

$body = '';
