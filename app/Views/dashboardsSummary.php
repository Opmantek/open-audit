<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$instance = & get_instance();
?>
        <main class="container-fluid">


            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-chart-bar oa-icon"></span><?= __('Device Types') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['devices'] as $os) {
                        $i++;
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('devicesCollection') ?>?devices.type=<?= $os->attributes->type ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>device_images/<?= $os->attributes->icon ?>.svg" alt="<?= $os->attributes->icon ?>">
                                    <br><?= $os->attributes->type ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $os->attributes->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>





            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-chart-bar oa-icon"></span><?= __('OS Families') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['os'] as $os) {
                        $i++;
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('devicesCollection') ?>?devices.os_family=<?= $os->attributes->os_family ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>device_images/<?= $os->attributes->icon ?>.svg" alt="<?= $os->attributes->icon ?>">
                                    <br><?= $os->attributes->os_family ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $os->attributes->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>









            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-chart-bar oa-icon"></span><?= __('Resources') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['collections'] as $name => $collection) {
                        $i++;
                        $color = 'darkgrey';
                        $link = '#';
                        $pill = 'background:dimgrey';
                        $badge = 'color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important;';
                        $toast = 'toast' . $collection->edition;
                        if ($collection->edition === 'Community') {
                            $link = url_to($name . 'Collection');
                        }
                        if ($collection->edition === 'Professional' and $config->product === 'professional' or $config->product === 'enterprise') {
                            $link = url_to($name . 'Collection');
                        }
                        if ($collection->edition === 'Enterprise' and $config->product === 'enterprise') {
                            $link = url_to($name . 'Collection');
                        }
                        if ($collection->name === 'Discovery Log') {
                            $link = 'discoveries';
                        }
                        if ($collection->name === 'Baselines Policies') {
                            $collection->name = 'Base Policies';
                        }
                        if ($collection->name === 'Baselines Results') {
                            $collection->name = 'Base Results';
                        }
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= $link ?>" class="position-relative <?= $toast ?>">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $name ?>.svg" alt="<?= $name ?>">
                                    <br><?= __($collection->name) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $collection->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>




            <?php if (!empty($config->license) and $config->license !== 'none') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Components (All Devices)') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="advanced">
                    <div class="row">
                        <?php
                        $components = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'executable', 'ip', 'log', 'memory', 'module', 'monitor');
                        }
                        foreach ($components as $component) { ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php $components = array('netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server');
                        }
                        foreach ($components as $component) { ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php $components = array('service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('server_item', 'service', 'share', 'software', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        }
                        foreach ($components as $component) { ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <?php } ?>



        </main>
