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
                            <?= read_field('type', $resource->type, $dictionary->columns->type) ?>
                            <?= read_field('subnet', $resource->subnet, $dictionary->columns->subnet, $update) ?>
                            <?= read_field('scan_options', $resource->scan_options->{'discovery_scan_options.name'}, $dictionary->columns->{'scan_options.id'}) ?>
                            <?= read_select('devices_assigned_to_org', $resource->devices_assigned_to_org, $dictionary->columns->devices_assigned_to_org, $update, __('Assign Devices to Organisation'), $orgs) ?>
                            <?= read_select('devices_assigned_to_location', $resource->devices_assigned_to_location, $dictionary->columns->devices_assigned_to_location, $update, __('Assign Devices to Location'), $included['locations']) ?>
                            <?= read_field('status', $resource->status, '', false) ?>
                            <?= read_field('last_run', $resource->last_run, '', false, __('Started On')) ?>
                            <?= read_field('last_finished', $resource->last_finished, '', false, __('Completed On')) ?>
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
                                    <?php $fields = array('name', 'org_id', 'type', 'edited_by', 'edited_date') ?>
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
            <br>
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;">
                        <span class="fa fa-bars oa-icon"></span>
                        Discovery Log
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th class="text-center"><?= __('ID') ?></th>
                                        <th><?= __('Timestamp') ?></th>
                                        <th><?= __('IP') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Message') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($included['discovery_log'] as $log) { ?>
                                        <tr>
                                            <?= device_component_button_read('discovery_log', $log->id) ?>
                                            <td class="text-center"><?= $log->id ?></td>
                                            <td><?= $log->timestamp ?></td>
                                            <td><span style="display:none;"><?= @$log->ip_padded ?></span><?= $log->ip ?></td>
                                            <td><?= $log->command_status ?></td>
                                            <td><?= $log->message ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


        </main>

<script>
window.onload = function () {
    $(document).ready(function () {
        $("#devices_assigned_to_org").append($('<option>', { value: '', text: ''}));
        $("#devices_assigned_to_location").append($('<option>', { value: '', text: ''}));
        $("#devices_assigned_to_org").val("<?= $resource->devices_assigned_to_org ?>");
        $("#devices_assigned_to_location").val("<?= $resource->devices_assigned_to_location ?>");
    });
}
</script>