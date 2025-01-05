<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$instance = & get_instance();
$query_string = url_to('devicesCollection') . '?';
if (!empty($meta->query_string)) {
    $query_string .= $meta->query_string . '&';
}
?>
        <main class="container-fluid">
            <?php if (!empty($config->license) and $config->license !== 'none') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Components (All Devices)') ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button c_change_primary" type="button" data-bs-toggle="collapse" data-bs-target="#advanced" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down text-primary"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="advanced">
                    <div class="row">
                        <?php $components = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard');
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

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <?php if (empty($data)) { ?>
                        <div class="container-fluid">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= __('No Devices Returned') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php } else {
                        $count = count($data);
                        $rowcount = 0;
                        echo "<div class='row'>\n";
                        for ($i = 0; $i < $count; $i++) {
                            $name = $data[$i]->attributes->name;
                            if (strlen($data[$i]->attributes->name) > 20) {
                                $name = substr($data[$i]->attributes->name, 0, 17) . '...';
                            }
                            $name = "<a href='" . url_to('devicesRead', $data[$i]->id) . "'>" . $name . "</a>";
                            $manufacturer = '';
                            if (!empty($data[$i]->attributes->manufacturer)) {
                                $manufacturer = $data[$i]->attributes->manufacturer;
                                if (strlen($data[$i]->attributes->manufacturer) > 20) {
                                    $manufacturer = substr($data[$i]->attributes->manufacturer, 0, 17) . '...';
                                }
                                $manufacturer = " by <a href='" . $query_string . "devices.manufacturer=" . $data[$i]->attributes->manufacturer . "'>" . $manufacturer . "</a>";
                            }
                            if ($i > 1 and ($i % 4) === 0) {
                                echo "</div><br><br><div class='row'>\n";
                            }
                            echo "<div class='col-3 clearfix'><div class='float-start'><img style='padding-top:6px; width:80px;' src='" . base_url() . "device_images/" . $data[$i]->attributes->icon . ".svg' class='img-fluid' /></div><div class='float-md-start' style='padding-left:10px'>" . $name . "<br>" . $data[$i]->attributes->ip . "<br><a href='" . $query_string . "devices.type=" . $data[$i]->attributes->type . "'>" . $data[$i]->attributes->type . "</a>" . $manufacturer . "<br><a href='" . $query_string . "devices.model=" . $data[$i]->attributes->model . "'>" . $data[$i]->attributes->model . "</a></div></div>\n";
                        }
                    } ?>
                </div>
            </div>
        </main>


