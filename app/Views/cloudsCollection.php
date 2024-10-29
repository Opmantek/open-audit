<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$advanced_button_color = '';
if (intval($included['devices_not_audited']) > 0 or
    intval($included['devices_retrieved']) > 0 or
    intval($included['devices_audited']) > 0 or
    intval($included['devices_stopped']) > 0 or
    intval($included['devices_running']) > 0) {
    $advanced_button_color = 'text-primary';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Advanced') ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button c_change_primary" type="button" data-bs-toggle="collapse" data-bs-target="#advanced" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down <?= $advanced_button_color ?>"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="advanced">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="devices_not_audited" class="form-label"><?= __('Devices Not Audited') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Devices Not Audited') ?>" type="text" class="form-control" id="devices_not_audited" name="devices_not_audited" value="<?= $included['devices_not_audited'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('devicesCollection') ?>?devices.cloud_id=!=&devices.serial=" role="button" class="btn btn-danger" title="<?= __('Devices') ?>"><span style="width:1rem;" class="fa fa-desktop" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>

                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="devices_retrieved_via_api" class="form-label"><?= __('Devices Retrieved via API') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Devices Retrieved via API') ?>" type="text" class="form-control"  id="devices_retrieved_via_api" name="devices_retrieved_via_api" value="<?= $included['devices_retrieved'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('devicesCollection') ?>?devices.cloud_id=!=" role="button" class="btn btn-warning" title="<?= __('Devices') ?>"><span style="width:1rem;" class="fa fa-desktop" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>

                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="devices_audited" class="form-label"><?= __('Devices Audited') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Devices Audited') ?>" type="text" class="form-control"  id="devices_audited" name="devices_audited" value="<?= $included['devices_audited'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('devicesCollection') ?>?devices.cloud_id=!=&devices.serial=!=" role="button" class="btn btn-success" title="<?= __('Devices') ?>"><span style="width:1rem;" class="fa fa-desktop" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="devices_stopped" class="form-label"><?= __('Devices in Stopped State') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Devices in Stopped State') ?>" type="text" class="form-control" id="devices_stopped" name="devices_stopped" value="<?= $included['devices_stopped'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('devicesCollection') ?>?devices.cloud_id=!=&devices.instance_state=!LIKErunning" role="button" class="btn btn-warning" title="<?= __('Devices') ?>"><span style="width:1rem;" class="fa fa-desktop" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>
                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="devices_running" class="form-label"><?= __('Devices in Running State') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Devices in Running State') ?>" type="text" class="form-control" id="devices_running" name="devices_running" value="<?= $included['devices_running'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('devicesCollection') ?>?devices.cloud_id=!=&devices.instance_state=LIKErunning" role="button" class="btn btn-success" title="<?= __('Devices') ?>"><span style="width:1rem;" class="fa fa-desktop" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>
                        </div>


                        <div class="col-4">

                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="locations" class="form-label"><?= __('Locations') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Locations') ?>" type="text" class="form-control" id="locations" name="locations" value="<?= $included['locations'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('locationsCollection') ?>?locations.cloud_id=!=" role="button" class="btn btn-primary" title="<?= __('Locations') ?>"><span style="width:1rem;" class="fa fa-building" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>
                            <div class="row">
                                <div class="offset-3 col-6">
                                    <label for="networks" class="form-label"><?= __('Networks') ?></label>
                                    <div class="input-group">
                                        <input disabled title="<?= __('Networks') ?>" type="text" class="form-control" id="networks" name="networks" value="<?= $included['networks'] ?>">
                                        <span class="pull-right">
                                            <a href="<?= url_to('networksCollection') ?>?networks.cloud_id=!=" role="button" class="btn btn-info" title="<?= __('Networks') ?>"><span style="width:1rem;" class="fa fa-wifi" aria-hidden="true"></span></a>
                                        </span>
                                    </div>
                                </div>
                                <span><br></span>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Execute') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?= collection_button_execute($meta->collection, intval($item->id)) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'orgs.name' and !empty($item->attributes->{'orgs.id'})) {
                                            echo "<td><a href=\"" . url_to($meta->collection . 'Collection') . "?" . $meta->collection . ".org_id=" . $item->attributes->{'orgs.id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete(intval($item->id)) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            if (count($data) === 0) {
                @include 'help/' . $meta->collection . '.php';
                echo collection_intro_header('Introduction to ' . $meta->heading, $meta->collection, $meta->icon, @$intro, @$body);
            }
            ?>
        </main>
