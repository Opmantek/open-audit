<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, false, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                            <?= read_field('expire_date', $resource->expire_date, $dictionary->columns->expire_date, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('action_date', $resource->action_date, $dictionary->columns->action_date, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('auto_renew', $resource->auto_renew, $dictionary->columns->auto_renew, $update, '', [], $meta->collection) ?>
                        </div>
                        <div class="col-6">
                            <?= read_field('active', $resource->active, $dictionary->columns->active, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('serial', $resource->serial, $dictionary->columns->serial, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('managed_by', $resource->managed_by, $dictionary->columns->managed_by, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-desktop oa-icon"></span><?= __('Devices') ?></h6>
                        </div>
                        <div class="col-3 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="device_panel">
                                <div class="page-title-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                        <thead>
                            <tr>
                                <th class="text-center"><?= __('View') ?></th>
                                <th><?= __('Device Name') ?></th>
                                <th><?= __('Webserver') ?></th>
                                <th><?= __('Website') ?></th>
                                <th><?= __('Server Status') ?></th>
                                <th><?= __('Currently Installed') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if (!empty($included['devices'])) {
                                foreach ($included['devices'] as $item) {
                                    if ($item->attributes->{'server_item.current'} === 'y') { ?>
                                <tr>
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                    <td><?= $item->attributes->{'devices.name'} ?></td>
                                    <td><?= $item->attributes->{'server_item.parent_name'} ?></td>
                                    <td><?= $item->attributes->{'server_item.name'} ?></td>
                                    <td><?= $item->attributes->{'server_item.status'} ?></td>
                                    <td><?= $item->attributes->{'server_item.current'} ?></td>
                                </tr>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </main>
