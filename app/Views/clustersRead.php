<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'description', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />

            <?php if ($resource->purpose !== 'virtualisation') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-desktop oa-icon"></span><?= __('Devices') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped dataTable" data-order='[[1,"asc"]]'>
                            <thead>
                                <tr>
                                    <th class="text-center"><?= __('View') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('IP') ?></th>
                                    <th><?= __('Description') ?></th>
                                    <th class="text-center"><?= __('Delete from Cluster') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($included['devices'] as $item) { ?>
                                <tr>
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                    <td><?= $item->attributes->{'devices.name'} ?></td>
                                    <td><?= $item->attributes->{'devices.ip'} ?></td>
                                    <td><?= $item->attributes->{'devices.description'} ?></td>
                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger subresource_delete_link" data-device-id="<?= $item->id ?>" data-collection="devices" data-sub-resource-id="<?= $item->attributes->{'cluster.id'} ?>" data-sub-resource="cluster" data-name="<?= $item->attributes->{'devices.name'} ?> from <?= $resource->{'name'} ?>"><span class="fa fa-trash"></span></button></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <?php } ?>

            <?php if ($resource->purpose === 'virtualisation') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa-solid fa-server oa-icon"></span><?= __('Hosts') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th class="text-center"><?= __('View') ?></th>
                                    <th><?= __('Icon') ?></th>
                                    <th><?= __('Role') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('IP') ?></th>
                                    <th><?= __('Memory') ?></th>
                                    <th><?= __('Physical CPUs') ?></th>
                                    <th><?= __('Cores') ?></th>
                                    <th><?= __('Logical Cores ') ?></th>
                                    <th><?= __('Hyperthreading') ?></th>
                                    <th><?= __('OS Family') ?></th>
                                    <th class="text-center"><?= __('Delete from Cluster') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($included['members'] as $item) { ?>
                                    <?php $memory = round(($item->attributes->{'devices.memory_count'} / 1024 / 1024), 2) . ' GB'; ?>
                                <tr>
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                    <td class="text-center"><img src="/open-audit/device_images/<?= $item->attributes->{'devices.icon'} ?>.svg" style="border-width:0px; width:24px; height:24px" title="<?= __('Icon') ?>" alt="<?= __('Icon') ?>" /></td>
                                    <td><?= $item->attributes->{'cluster.role'} ?></td>
                                    <td><?= $item->attributes->{'devices.name'} ?></td>
                                    <td><span style="display:none;"><?= $item->attributes->{'devices.ip_padded'} ?></span><?= $item->attributes->{'devices.ip'} ?></td>
                                    <td><?= $memory ?></td>
                                    <td><?= $item->attributes->{'processor.physical_count'} ?></td>
                                    <td><?= $item->attributes->{'processor.core_count'} ?></td>
                                    <td><?= $item->attributes->{'processor.logical_count'} ?></td>
                                    <td><?= $item->attributes->{'processor.hyperthreading'} ?></td>
                                    <td><?= $item->attributes->{'devices.os_family'} ?></td>
                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger subresource_delete_link" data-device-id="<?= $item->id ?>" data-collection="devices" data-sub-resource-id="<?= $item->attributes->{'cluster.id'} ?>" data-sub-resource="cluster" data-name="<?= $item->attributes->{'devices.name'} ?> from <?= $resource->{'name'} ?>"><span class="fa fa-trash"></span></button></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <?php } ?>

            <?php if ($resource->purpose === 'virtualisation') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa-solid fa-computer oa-icon"></span><?= __('Guests') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th class="text-center"><?= __('View') ?></th>
                                    <th class="text-center"><?= __('Icon') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('IP') ?></th>
                                    <th><?= __('OS Family') ?></th>
                                    <th><?= __('Host') ?></th>
                                    <th><?= __('Memory') ?></th>
                                    <th><?= __('CPUs') ?></th>
                                    <th><?= __('Status') ?></th>
                                    <th><?= __('Servers') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($included['guests'] as $item) { ?>
                                    <?php $memory = round(($item->attributes->{'vm.memory_count'} / 1024), 2) . ' GB'; ?>
                                    <?php $icon = (!empty($item->attributes->{'guest.icon'})) ? '<img src="/open-audit/device_images/' . $item->attributes->{'guest.icon'} . '.svg" style="border-width:0px; width:24px; height:24px" title="' . __('Icon') . '" alt="' . __('Icon') . '" />' : ''; ?>
                                <tr>
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'vm.guest_device_id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                    <td class="text-center"><?= $icon ?></td>
                                    <td><?= $item->attributes->{'vm.name'} ?></td>
                                    <td><span style="display:none;"><?= $item->attributes->{'guest.ip_padded'} ?></span><?= $item->attributes->{'guest.ip'} ?></td>
                                    <td><?= $item->attributes->{'guest.os_family'} ?></td>
                                    <td><?= $item->attributes->{'host.name'} ?></td>
                                    <td><?= $memory ?></td>
                                    <td><?= $item->attributes->{'vm.cpu_count'} ?></td>
                                    <td><?= $item->attributes->{'vm.status'} ?></td>
                                    <td><?= $item->attributes->{'guest.servers'} ?></td>                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <?php } ?>

        </main>
