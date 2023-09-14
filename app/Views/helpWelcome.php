<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('Welcome') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <h1><?= __('Welcome to Open-AudIT') ?></h1>
                            <p>Thank you for starting your journey with the best discovery and inventory tool around.</p>
                        </div>
                    </div>

                    <div class="row justify-content-evenly">
                        <div class="col-10 col-offset-1" style="margin-bottom:30px">
                            <div class="row">
                                <div class="col-12 text-center align-self-center">
                                    <h2><?= __('Want to know more?') ?></h2>
                                    <p><?= __('Follow any of the links below and discover how to use Open-AudIT to find out "What\'s on your network?"') ?><br /><br /></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('View the getting started documentation and find out "What\'s On Your Network?"') ?>'
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" class="btn btn-success btn-lg" href="<?= url_to('getting_started') ?>">G<?= __('etting Started') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('By adding credentials we can discover devices on your network.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" class="btn btn-primary btn-lg" href="<?= url_to('credentialsCreateForm') ?>"><?= __('Insert Credentials') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Run the default discovery and find out "what\'s on your network?".') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" class="btn btn-primary btn-lg" href="<?= url_to('discoveriesCollection') ?>"><?= __('Discover Networks') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Start discovering your cloud and reporting on your instances.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" class="btn btn-primary btn-lg" href="<?= url_to('cloudsCreateForm') ?>"><?= __('Discover Clouds') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Insert example data and discover all that Open-AudIT can tell you.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" class="btn btn-default btn-lg" href="<%= url_for('open-audit_example_create_get') %>"><?= __('Import Example Data') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Visit our YouTube channel for instructional videos.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a target="_blank" role="button" class="btn btn-default btn-lg" href="https://www.youtube.com/playlist?list=PLw8YUAEwGTSVPYKFo7O9FEf0ZwXWqA1vl"><?= __('YouTube Tutorials') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Read our online documentation on the Open-AudIT Wiki.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a target="_blank" role="button" class="btn btn-default btn-lg" href="https://community.opmantek.com/display/OA/Home"><?= __('Online Documentation') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <?= __('Ask the Community for help or contribute answers for others.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a target="_blank" role="button" class="btn btn-default btn-lg" href="https://community.opmantek.com/questions"><?= __('Community Questions') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row vertical-align justify-content-evenly">
                        <div class="col-8 col-offset-2">
                            <div class="row d-flex align-items-center text-center">
                                <div class="col-1">
                                    <img class="img-fluid" alt="windows" src="<?= base_url() ?>logos/windows.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="redhat" src="<?= base_url() ?>logos/redhat.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="ubuntu" src="<?= base_url() ?>logos/ubuntu.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="osx" src="<?= base_url() ?>logos/osx.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="esxi" src="<?= base_url() ?>logos/esxi.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="solaris" src="<?= base_url() ?>logos/solaris.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="hp-ux" src="<?= base_url() ?>logos/hp-ux.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="aix" src="<?= base_url() ?>logos/aix.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="centos" src="<?= base_url() ?>logos/centos.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="suse" src="<?= base_url() ?>logos/suse.svg" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="debian" src="<?= base_url() ?>logos/debian.svg" />
                                </div>
                                <div class="col-1">
                                    <span class="text-center"><a target="_blank" href="https://community.opmantek.com/display/OA/Home">And so much more.</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
