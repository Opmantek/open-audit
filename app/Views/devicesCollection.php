<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <?php if (!empty(config('Openaudit')->license) and config('Openaudit')->license !== 'none') { ?>
            <div class="card oa-card-advanced">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Resources (All Devices)') ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button" type="button" data-bs-toggle="collapse" data-bs-target="#advanced" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="advanced">
                    <div class="row">
                        <?php $components = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard');
                        foreach ($components as $component) { ?>
                            <div class="col-md-1 text-center"><a class="component_icon" href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>"><img class="img-responsive center-block" src="/open-audit/icons/<?= $component ?>.svg" alt="<?= $component ?>"/><br /><?= ucwords($component) ?></a></div>
                        <?php } ?>
                    </div>
                    <br />
                    <div class="row">
                        <?php $components = array('netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item');
                        foreach ($components as $component) { ?>
                            <div class="col-md-1 text-center"><a class="component_icon" href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>"><img class="img-responsive center-block" src="/open-audit/icons/<?= $component ?>.svg" alt="<?= $component ?>"/><br /><?= ucwords($component) ?></a></div>
                        <?php } ?>
                    </div>
                    <br />
                    <div class="row">
                        <?php $components = array('service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        foreach ($components as $component) { ?>
                            <div class="col-md-1 text-center"><a class="component_icon" href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>"><img class="img-responsive center-block" src="/open-audit/icons/<?= $component ?>.svg" alt="<?= $component ?>"/><br /><?= ucwords($component) ?></a></div>
                        <?php } ?>
                    </div>
                    <br />
                </div>
            </div>
            <?php } ?>

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user) ?>
                </div>
                <div class="card-body">
                    <br />
                    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover dataTable" data-order='[[3,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                        <?php foreach ($meta->data_order as $key) {
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            } ?>
                                            <th><?= collection_column_name($key) ?></th>
                                        <?php } ?>
                                        <?php if (strpos($user->permissions[$meta->collection], 'u') !== false) {
                                            if (!empty($data[0]->id)) {
                                                    echo "            <th data-orderable=\"false\" class=\"text-center\">\n";
                                                    echo "              <button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button>\n";
                                                    echo "              <input aria-label='" . __('Select All') . "' type=\"checkbox\" name=\"select_all\" id=\"select_all\"/>\n";
                                                    echo "            </th>\n";
                                            }
                                        } ?>
                                        <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($data)) {
                                    foreach ($data as $item) {
                                        echo "                                <tr>\n";
                                        echo "                                    " . collection_button_read($meta->collection, $item->id) . "\n";
                                        foreach ($meta->data_order as $key) {
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            }
                                            if ($key === 'icon') {
                                                echo "                                    <td><img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:40px\" alt=\"" . $item->attributes->icon . "\"></td>\n";
                                            } else if ($key === 'ip' and !empty($item->attributes->ip_padded)) {
                                                echo "                                    <td><span style=\"display:none;\">" . $item->attributes->ip_padded . "</span>" . $item->attributes->{$key} . "</td>\n";
                                            } else {
                                                echo "                                    <td>" . $item->attributes->{$key} . "</td>\n";
                                            }
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'u') !== false and !empty($item->id)) {
                                            echo "                                    <td style=\"text-align: center;\"><input aria-label='" . __('Select') . "' type='checkbox' id='ids[" . $item->id . "]' value='" . $item->id . "' name='ids[" . $item->id . "]' /></td>\n";
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                            echo "                                    " . collection_button_delete(intval($item->id)) . "\n";
                                        }
                                        echo "                                </tr>\n";
                                    } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </main>
