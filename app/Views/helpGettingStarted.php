<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('Getting Started') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <br>
                            <p><strong><i>Get familiar with the Open-AudIT platform and explore some of its features.</i></strong><br>
                                <br>
                                Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell "What's On Your Network?", how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.<br>
                                <br>
                                Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.<br>
                                <br>
                                Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.<br>
                                <br>
                                Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.<br>
                                <br>
                                <br>
                                <a href="https://docs.community.firstwave.com/wiki/spaces/OA" target="_blank">Online Docs</a>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa fa-binoculars oa-icon"></span><?= __('Discover') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <br>
                            <p><strong><i>Complete these steps.</i></strong><br>
                                <br>
                                <h4><small>Add Your Credentials</small></h4>
                                Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect. <a href="<?= url_to('credentialsHelp') ?>">More Information</a>.<br>
                                <br>
                                <h4><small>Create a Discovery</small></h4>
                                Discoveries are at the very heart of what Open-AudIT does. How else would you know "What's On Your Network?" <a href="<?= url_to('discoveriesHelp') ?>">More Information</a>.<br>
                                <br>
                                <h4><small>Run Your Discovery</small></h4>
                                Easily run a discovery upon a network in a single click, without entering the details of that network each and every time. <a href="<?= url_to('discoveriesHelp') ?>">More Information</a>.<br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa fa-bar-chart oa-icon"></span><?= __('Report on your devices, networks and more') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <br>
                            <p><strong><i>The below reporting options are available.</i></strong><br>
                                <br>
                                <h4><small>Reports</small></h4>
                                Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats. <a href="<?= url_to('reportsCollection') ?>">More Information</a>.<br>
                                <br>
                                <h4><small>Queries</small></h4>
                                Open-AudIT provides many built-in queries and makes it simple to create your own. <a href="<?= url_to('queriesCollection') ?>">More Information</a>.<br>
                                <br>
                                <h4><small>Summaries</small></h4>
                                Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful. <a href="<?= url_to('summariesCollection') ?>">More Information</a>.<br>
                                <br>
                                <h4><small>Widgets</small></h4>
                                When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards. <a href="<?= url_to('widgetsCollection') ?>">More Information</a>.<br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
