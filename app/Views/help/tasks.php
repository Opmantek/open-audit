<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.</p>';

$body = '<h2>Notes</h2>
<p>All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.<br>
<br>
Minute: (0-59)<br>
<br>
Hour: (0-23)<br>
<br>
Day of Month: (1-31)<br>
<br>
Month: (1-12)<br>
<br>
Day of Week: (0-6)<br>
<br>
For a primer on cron, see this Wikipedia page: <a href="https://en.wikipedia.org/wiki/Cron" target="_blank">https://en.wikipedia.org/wiki/Cron</a>.<br>
<br>
On the Tasks List page, click the "Add New" button to configure a task.<br>
<br>
Choose the "type" of the task from the first drop down. This will configure the additional fields required depending on the type of task. <br>
<br>
If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.<br>
<br>

<h5>Baselines</h5>
Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.<br>
<br>
<h5>Collectors</h5>
Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.<br>
<br>

<h5>Benchmarks</h5>
Benchmark Tasks are created automatically when a benchmark is created.<br>
<br>

<h5>Discoveries</h5>
Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br>
<br>
As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br>
<br>
If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.<br>
<br>

<h5>Integrations</h5>
Integrations can be scheduled as desired. This is left to the user.<br>
<br>

<h5>Reports</h5>
When you enable a Report to be run on a schedule, the report is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a "test email" button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled reports can be configured.<br>
<br>
Provide a name, optional description, choose \'Report\' type, select the desired report, provide an email address, choose a format and set the schedule.<br>
<br>
Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled report itself), select which days you would like the report run, choose which report you would like run, supply an email address and choose a report format and you\'re done.<br>
<br>
Reports will be sent with an email body of the report (in html format) and the report attached in the requested format.<br>
<br>

<h5>Queries</h5>
Queries take the same arguments as Reports.<br>
<br>

<h5>Summaries</h5>
Summaries take the same arguments as Reports.</p>
<br>';
