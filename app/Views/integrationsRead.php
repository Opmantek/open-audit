<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" class="fa-regular fa-rectangle-list"></span>' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye"                   ></span>' . __('Details') . '</a></li>';
    $fields_button =  '<li class="nav-item" role="presentation"><a href="#fields"  class="nav-link" id="fields-tab" ><span style="margin-right:6px;" class="fa fa-comments-o"            ></span>' . __('Fields') .  '</a></li>';
    $logs_button =    '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   ><span style="margin-right:6px;" class="fa fa-bars"                  ></span>' . __('Logs') .    '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa fa-desktop"               ></span>' . __('Devices') . '</a></li>';
} else if ($style === 'icon') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" title="' . __('Summary') . '" class="fa-regular fa-rectangle-list"></span></a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye"                   ></span></a></li>';
    $fields_button =  '<li class="nav-item" role="presentation"><a href="#fields"  class="nav-link" id="fields-tab" ><span style="margin-right:6px;" title="' . __('Fields') .  '" class="fa fa-comments-o"            ></span></a></li>';
    $logs_button =    '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   ><span style="margin-right:6px;" title="' . __('Logs') .    '" class="fa fa-bars"                  ></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa fa-desktop"               ></span></a></li>';
} else {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab">' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $fields_button =  '<li class="nav-item" role="presentation"><a href="#fields"  class="nav-link" id="fields-tab" >' . __('Fields') .  '</a></li>';
    $logs_button =    '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   >' . __('Logs') .    '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
}
if ($resource->type === 'nmis') {
    $resource->type = 'NMIS';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-4 offset-4" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $summary_button ?>
                                <?= $details_button ?>
                                <?= $fields_button ?>
                                <?= $logs_button ?>
                                <?= $devices_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="summary" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name.orig', $resource->name) ?>
                                    <?= read_field('status', $resource->status) ?>
                                    <?= read_field('last_run', $resource->last_run) ?>
                                    <?= read_field('duration', $resource->duration) ?>
                                    <div class="offset-2 col-8" style="position:relative;"><hr /></div>
                                    <?= read_field('select_internal_count', $resource->select_internal_count, '', '', __('Devices Selected from Open-AudIT')) ?>
                                    <?= read_field('create_internal_count', $resource->create_internal_count, '', '', __('Devices Created in Open-AudIT')) ?>
                                    <?= read_field('update_internal_count', $resource->update_internal_count, '', '', __('Devices Updated in Open-AudIT')) ?>
                                    <div class="offset-2 col-8" style="position:relative;"><hr /></div>
                                    <?= read_field('select_external_count', $resource->select_external_count, '', '', __('Devices Selected from ') . $resource->type) ?>
                                    <?= read_field('create_external_count', $resource->create_external_count, '', '', __('Devices Created in ') . $resource->type) ?>
                                    <?= read_field('update_external_count', $resource->update_external_count, '', '', __('Devices Updated in ') . $resource->type) ?>
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

                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                                    <?= read_field('type', $resource->type, $dictionary->columns->type) ?>
                                    <?= read_select('debug', $resource->debug, $dictionary->columns->debug, $update, __('Debug')) ?>
                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                                    <br />
                                    <div class="offset-2 col-8" style="position:relative;"><hr /></div>
                                    <?= read_field('attributes.url', $resource->attributes->url, $dictionary->columns->attributes->url, $update, __('URL')) ?>
                                    <?= read_field('attributes.username', $resource->attributes->username, $dictionary->columns->attributes->username, $update, __('Username')) ?>
                                    <?= read_field('attributes.password', $resource->attributes->password, $dictionary->columns->attributes->password, $update, __('Password')) ?>
                                    <br />
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
                                            <?php $fields = array('name', 'description', 'type') ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                        <code>url: </code><?= $dictionary->columns->attributes->url ?><br /><br />
                                        <code>username: </code><?= $dictionary->columns->attributes->username ?><br /><br />
                                        <code>password: </code><?= $dictionary->columns->attributes->password ?><br /><br />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <hr />
                                </div>
                                <div class="col-6">
                                    <?= read_select('create_internal_from_external', $resource->create_internal_from_external, $dictionary->columns->create_internal_from_external, $update, __('Create Open-AudIT Devices from ') . $resource->type) ?>
                                    <?= read_select('update_internal_from_external', $resource->update_internal_from_external, $dictionary->columns->update_internal_from_external, $update, __('Update Open-AudIT Devices from ') . $resource->type) ?>
                                    <?= read_select('discovery_run', $resource->discovery_run, $dictionary->columns->discovery_run, $update, __('Run Discovery')) ?>
                                    <?= read_field('discovery_name', $resource->{'discoveries.name'}, '', $update) ?>
                                    <?= read_field('select_internal_type', $resource->{'select_internal_type'}, '', $update) ?>
                                    <?= read_field('select_internal_attribute', $resource->{'select_internal_attribute'}, '', $update) ?>
                                    <?= read_field('select_internal_value', $resource->{'select_internal_value'}, '', $update) ?>
                                </div>
                                <div class="col-6">
                                    <?= read_select('create_external_from_internal', $resource->create_external_from_internal, $dictionary->columns->create_external_from_internal, $update, __('Create') . ' ' . $resource->type . ' ' . __('Devices from Open-AudIT')) ?>
                                    <?= read_select('update_external_from_internal', $resource->update_external_from_internal, $dictionary->columns->update_external_from_internal, $update, __('Update') . ' ' . $resource->type . ' ' . __('Devices from Open-AudIT')) ?>
                                    <?= read_select('delete_external_from_internal', $resource->delete_external_from_internal, $dictionary->columns->delete_external_from_internal, $update, __('Delete') . ' ' . $resource->type . ' ' . __('Devices from Open-AudIT')) ?>
                                    <?= read_field('select_external_type', $resource->{'select_external_type'}, '', $update) ?>
                                    <?= read_field('select_external_attribute', $resource->{'select_external_attribute'}, '', $update) ?>
                                    <?= read_field('select_external_value', $resource->{'select_external_value'}, '', $update) ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="fields" role="tabpanel" tabindex="0">
                            <br>
                            <div class="table-responsive">
                                <table class="table dataTable table-striped" id="fieldstable" data-order='[[0,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th><?= __('Open-AudIT Field Name') ?></th>
                                            <th><?= $resource->type . ' ' . __('Field Name') ?></th>
                                            <th><?= $resource->type . ' ' . __('Field Type') ?></th>
                                            <th><?= __('Priority') ?></th>
                                            <th style="white-space: nowrap;"><?= __('Default Value') ?></th>
                                            <th><?= __('Match') ?></th>
                                            <th><?= __('Delete') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($resource->{'fields'} as $field) {
                                            $priority = '';
                                            if ($field->priority === 'internal') {
                                                $priority = '<span class="v-success">internal</span>';
                                            }
                                            if ($field->priority === 'external') {
                                                $priority = '<span class="badge bg-info">external</span>';
                                            } ?>
                                        <tr>
                                            <td><?= $field->internal_field_name ?></td>
                                            <td><?= $field->external_field_name ?></td>
                                            <td><?= $field->external_field_type ?></td>
                                            <td><?= $priority ?></td>
                                            <td><?= $field->default_value ?></td>
                                            <td>
                                            <?php if ($field->{'matching_attribute'} === 'y') { ?>
                                                <?= $field->matching_attribute  ?>
                                            <?php } ?>
                                            </td>
                                            <td class="text-center"><button type="button" class="field_delete_link btn btn-sm btn-danger" data-internal_field_name="<?= $field->internal_field_name ?>" data-external_field_name="<?= $field->external_field_name ?>" data-external_field_type="<?= $field->external_field_type ?>" data-default_value="<?= $field->default_value ?>" data-priority="<?= $field->priority ?>" data-matching_attribute="<?= $field->matching_attribute ?>" ><i class="fa fa-trash" aria-hidden="true">&nbsp;</i></button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <button type="button" class="field_add btn btn-sm btn-success"><?= __('Add Field') ?></button>
                            </div>
                        </div>

                        <div class="tab-pane" id="logs" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table table-striped logsTable dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('ID') ?></th>
                                        <th><?= __('Timestamp') ?></th>
                                        <th><?= __('Severity') ?></th>
                                        <th><?= __('Message') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($included['logs'])) { ?>
                                        <?php foreach ($included['logs'] as $result) { ?>
                                        <tr>
                                            <td><?= $result->attributes->id ?></td>
                                            <td><?= $result->attributes->timestamp ?></td>
                                            <td><?= $result->attributes->severity ?></td>
                                            <td><?= $result->attributes->message ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="4">
                            <br>
                            <table class="table table-striped logsTable dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('IP') ?></th>
                                        <th><?= __('Name') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($included['devices'])) { ?>
                                        <?php foreach ($included['devices'] as $result) { ?>
                                        <tr>
                                            <td class="text-center"><a title="<?= __('View') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('devicesRead', $result->attributes->id) ?>"><span class="fa fa-desktop" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                            <td><?= $result->attributes->ip ?><br /><?= $result->attributes->type ?></td>
                                            <td><?= $result->attributes->name ?><br /><?= $result->attributes->fqdn ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </main>

<script>
window.onload = function () {
    $(document).ready(function () {

        var hash = window.location.hash;
        if (hash == "") {
            hash = "#summary"
        }
        hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show'); 

        $('ul.nav.nav-pills a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            window.location.hash = this.hash;
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });
    });
}
</script>