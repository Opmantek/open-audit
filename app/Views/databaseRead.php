<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$device_delete = false;
if ($meta->id === 'devices' and !empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'd') !== false) {
    $device_delete = true;
}
if (!in_array($meta->id, ['attributes', 'configuration', 'dashboards', 'fields', 'groups', 'integrations', 'locations', 'orgs', 'queries', 'roles', 'rules', 'summaries', 'users', 'widgets'])) {
    $user->permissions[$meta->id] = '';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->id) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $data[0]->id, '', false) ?>
                            <?= read_field('rowcount', $data[0]->attributes->count, '', false, __('Row Count')) ?>
                            <?php
                            if (isset($data[0]->attributes->current)) {
                                echo read_field('current', $data[0]->attributes->current, '', false);
                            }
                            if (isset($data[0]->attributes->non_current)) {
                                echo read_field('non_current', $data[0]->attributes->non_current, '', false);
                            }
                            ?>

                            <?php if ($data[0]->id === 'devices') { ?>
                                <?php foreach ($data[0]->attributes->status as $status) { ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <form id="status_form" method="post" action="<?= url_to($data[0]->id.'Reset') ?>?status=<?= $status->status ?>">
                                                <label for="<?= $status->status ?>" class="form-label"><?php echo __('Device Status: ' . $status->status); ?></label>
                                                <div class="input-group">
                                                    <input disabled type="text" class="form-control" id="<?= $status->status ?>" value="<?php echo $status->count; ?>">
                                                    <?php if ($device_delete and $status->status != 'production') { ?>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-danger" type="submit" id="status_button_<?= $status->status ?>"><span class="fa fa-trash" aria-hidden="true"></span></button>
                                                    </span>
                                                    <?php } ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>


                            <br><br>
                            <div class="col-8 offset-2">
                                <table class="table">
                                    <tr>
                                        <td class="text-center"><?= __('Export data to') ?></td>
                                        <td class="text-center"><?= __('Export data to') ?></td>
                                        <td class="text-center"><?= __('Export data to') ?></td>
                                        <td class="text-center"><?= __('Export data to') ?></td>
                                        <?php if (!empty($user->permissions[$meta->id]) and strpos($user->permissions[$meta->id], 'd') !== false) { ?>
                                        <td class="text-center"><?= __('Reset All Data') ?></td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a id="export_csv" class="btn btn-sm btn-primary" href="<?= url_to('databaseExport', $data[0]->id) ?>?format=csv"><?= __('CSV') ?></a></td>
                                        <td class="text-center"><a id="export_sql" class="btn btn-sm btn-primary" href="<?= url_to('databaseExport', $data[0]->id) ?>?format=sql"><?= __('SQL') ?></a></td>
                                        <td class="text-center"><a id="export_json" class="btn btn-sm btn-primary" href="<?= url_to('databaseExport', $data[0]->id) ?>?format=json"><?= __('JSON') ?></a></td>
                                        <td class="text-center"><a id="export_xml" class="btn btn-sm btn-primary" href="<?= url_to('databaseExport', $data[0]->id) ?>?format=xml"><?= __('XML') ?></a></td>
                                        <?php if (!empty($user->permissions[$meta->id]) and strpos($user->permissions[$meta->id], 'd') !== false) { ?>
                                        <td class="text-center"><form id="<?= $data[0]->id ?>ResetForm" method="post" action="<?= url_to($data[0]->id.'Reset') ?>"><button id="<?= $data[0]->id ?>Reset" class="btn btn-sm btn-danger" type="submit"><?= __('Reset') ?></button></form></td>
                                        <?php } ?>
                                    </tr>
                                </table>
                            </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <div class="row" style="height:46px;">
                        <div class="col-12 clearfix">
                            <h6 style="padding-top:10px;"><?= __('Columns') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table <?= $GLOBALS['table'] ?> table-striped">
                                <thead>
                                    <tr>
                                        <td><?= __('Name') ?></td>
                                        <td><?= __('Type') ?></td>
                                        <td><?= __('Default') ?></td>
                                        <td><?= __('Max Length') ?></td>
                                        <td><?= __('Primary Key') ?></td>
                                        <td><?= __('Valid Values') ?></td>
                                        <td><?= __('Description') ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data[0]->attributes->columns as $column) { ?>
                                    <tr>
                                        <td><?= $column->name ?></td>
                                        <td><?= $column->type ?></td>
                                        <td><?= $column->default ?></td>
                                        <td><?= $column->max_length ?></td>
                                        <td><?= $column->primary_key ?></td>
                                        <td><?php if (!empty($column->values)) { echo html_entity_decode($column->values); } ?></td>
                                        <td><?= @$dictionary->columns->{$column->name} ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<script {csp-script-nonce}>
window.onload = function () {
    document.getElementById('<?= $data[0]->id ?>ResetForm').addEventListener('submit', function(e){
        if (confirm("Are you sure?\n\nThis will delete the current rows in the <?= $data[0]->id ?> table and insert the original rows.") == true) {
            return;
        }
        e.preventDefault();
    });
    <?php if ($data[0]->id === 'devices') { ?>
    document.getElementById('status_form').addEventListener('submit', function(e){
        if (confirm("Are you sure?\n\nThis will delete the rows in the devices table with this status.") == true) {
            return;
        }
        e.preventDefault();
    });
    <?php } ?>
}
</script>