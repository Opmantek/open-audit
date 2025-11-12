<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="icon-life-buoy oa-icon"></span><?= __('Getting Started') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <br>
                            <p><strong><i><?= __('Get familiar with the Open-AudIT platform and explore some of its features.') ?></i></strong><br>
                                <br>
                                <?= __('Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell "What\'s On Your Network?", how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.') ?><br>
                                <br>
                                <?= __('Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.') ?><br>
                                <br>
                                <?= __('Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.') ?><br>
                                <br>
                                <?= __('Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.') ?><br>
                                <br>
                                <br>
                                <a href="https://docs.community.firstwave.com/wiki/spaces/OA" target="_blank"><?= __('Online Documentation') ?></a>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="icon-binoculars oa-icon"></span><?= __('Discover') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <br>
                            <p><strong><i><?= __('Complete these steps.') ?></i></strong><br>
                                <br>
                                <h4><small><?= __('Add Your Credentials') ?></small></h4>
                                <?= __('Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.') ?> <a href="<?= url_to('credentialsHelp') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                                <h4><small><?= __('Create a Discovery') ?></small></h4>
                                <?= __('Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>') ?> <a href="<?= url_to('discoveriesHelp') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                                <h4><small><?= __('Run Your Discovery') ?></small></h4>
                                <?= __('Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.') ?> <a href="<?= url_to('discoveriesHelp') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="icon-chart-bar-increasing oa-icon"></span><?= __('Report on your devices, networks and more') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <br>
                            <p><strong><i>The below reporting options are available.</i></strong><br>
                                <br>
                                <h4><small><?= __('Reports') ?></small></h4>
                                <?= __('Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.') ?> <a href="<?= url_to('queriesCollection') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                                <h4><small><?= __('Queries') ?></small></h4>
                                <?= __('Open-AudIT provides many built-in queries and makes it simple to create your own.') ?> <a href="<?= url_to('queriesCollection') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                                <h4><small><?= __('Summaries') ?></small></h4>
                                <?= __('Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.') ?> <a href="<?= url_to('summariesCollection') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                                <h4><small><?= __('Widgets') ?></small></h4>
                                <?= __('When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.') ?> <a href="<?= url_to('widgetsCollection') ?>"><?= __('More Information') ?></a>.<br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
