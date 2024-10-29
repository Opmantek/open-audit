<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" class="fa-regular fa-rectangle-list text-primary"></span>' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $fields_button =  '<li class="nav-item" role="presentation"><a href="#fields" class="nav-link" id="fields-tab" ><span style="margin-right:6px;" class="fa fa-comments-o text-success"></span>' . __('Fields') .  '</a></li>';
    $logs_button =    '<li class="nav-item" role="presentation"><a href="#logs" class="nav-link" id="logs-tab"   ><span style="margin-right:6px;" class="fa fa-bars text-primary"></span>' . __('Logs') .    '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa fa-desktop text-primary"></span>' . __('Devices') . '</a></li>';
} elseif ($style === 'icon') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" title="' . __('Summary') . '" class="fa-regular fa-rectangle-list text-primary"></span></a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $fields_button =  '<li class="nav-item" role="presentation"><a href="#fields"  class="nav-link" id="fields-tab" ><span style="margin-right:6px;" title="' . __('Fields') .  '" class="fa fa-comments-o text-success"></span></a></li>';
    $logs_button =    '<li class="nav-item" role="presentation"><a href="#logs"    class="nav-link" id="logs-tab"   ><span style="margin-right:6px;" title="' . __('Logs') .    '" class="fa fa-bars text-primary"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa fa-desktop text-primary"></span></a></li>';
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
if (!empty($resource->attributes->password)) {
    $placeholder = __("removed from display, but has been set");
} else {
    $placeholder = __("has not been set");
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-8 offset-2" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
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
                                    <div class="offset-2 col-8" style="position:relative;"><hr></div>
                                    <?= read_field('select_internal_count', $resource->select_internal_count, '', '', __('Devices Selected from Open-AudIT')) ?>
                                    <?= read_field('create_internal_count', $resource->create_internal_count, '', '', __('Devices Created in Open-AudIT')) ?>
                                    <?= read_field('update_internal_count', $resource->update_internal_count, '', '', __('Devices Updated in Open-AudIT')) ?>
                                    <div class="offset-2 col-8" style="position:relative;"><hr></div>
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
                                    <br>
                                    <div class="offset-2 col-8" style="position:relative;"><hr></div>
                                    <?= read_field('attributes.url', $resource->attributes->url, $dictionary->columns->attributes->url, $update, __('URL')) ?>
                                    <?= read_field('attributes.username', $resource->attributes->username, $dictionary->columns->attributes->username, $update, __('Username')) ?>
                                    <?= read_field('attributes.password', '', $dictionary->columns->attributes->password, $update, __('Password'), '', $placeholder, 'password') ?>
                                    <br>
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
                                        <code>url: </code><?= $dictionary->columns->attributes->url ?><br><br>
                                        <code>username: </code><?= $dictionary->columns->attributes->username ?><br><br>
                                        <code>password: </code><?= $dictionary->columns->attributes->password ?><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-1">
                                    <hr>
                                </div>
                                <div class="col-6">
                                    <?= read_select('create_internal_from_external', $resource->create_internal_from_external, $dictionary->columns->create_internal_from_external, $update, __('Create Open-AudIT Devices from ') . $resource->type) ?>
                                    <?= read_select('update_internal_from_external', $resource->update_internal_from_external, $dictionary->columns->update_internal_from_external, $update, __('Update Open-AudIT Devices from ') . $resource->type) ?>
                                    <?= read_select('discovery_run', $resource->discovery_run, $dictionary->columns->discovery_run, $update, __('Run Discovery')) ?>
                                    <?= read_field('discovery_name', $resource->{'discoveries.name'}, '', $update) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="select_internal_type" class="form-label"><?= __('Select') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="select_internal_type" name="select_internal_type" data-original-value="<?= $resource->select_internal_type ?>" disabled>
                                                    <option value="none" <?php if ($resource->select_internal_type === 'none') { ?>selected<?php } ?>><?= __('None') ?></option>
                                                    <option value="attribute" <?php if ($resource->select_internal_type === 'attribute') { ?>selected<?php } ?>><?= __('Attribute') ?></option>
                                                    <option value="group" <?php if ($resource->select_internal_type === 'group') { ?>selected<?php } ?>><?= __('Group') ?></option>
                                                    <option value="query" <?php if ($resource->select_internal_type === 'query') { ?>selected<?php } ?>><?= __('Query') ?></option>
                                                </select>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="select_internal_type" data-dictionary="<?= $dictionary->columns->select_internal_type ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <?php if ($resource->select_internal_type === 'group') { ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="select_internal_attribute" class="form-label"><?= __('Group') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="select_internal_attribute" name="select_internal_attribute" data-original-value="<?= $resource->select_internal_attribute ?>" disabled>
                                                    <?php foreach ($included['groups'] as $group) { ?>
                                                    <option value="<?= $group->id ?>" <?php if ($resource->select_internal_attribute == $group->id) { ?>selected<?php } ?>><?= $group->attributes->name ?></option>
                                                    <?php } ?>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="select_internal_attribute" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="select_internal_attribute" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="select_internal_attribute" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="select_internal_attribute" data-dictionary="<?= $dictionary->columns->select_internal_attribute ?>"><span><br></span></div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php if ($resource->select_internal_type === 'query') { ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="select_internal_attribute" class="form-label"><?= __('Query') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="select_internal_attribute" name="select_internal_attribute" data-original-value="<?= $resource->select_internal_attribute ?>" disabled>
                                                    <?php foreach ($included['queries'] as $query) { ?>
                                                    <option value="<?= $query->id ?>" <?php if ($resource->select_internal_attribute == $query->id) { ?>selected<?php } ?>><?= $query->attributes->name ?></option>
                                                    <?php } ?>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="select_internal_attribute" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="select_internal_attribute" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="select_internal_attribute" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="select_internal_attribute" data-dictionary="<?= $dictionary->columns->select_internal_attribute ?>"><span><br></span></div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php if ($resource->select_internal_type === 'attribute') { ?>
                                        <?= read_field('select_internal_attribute', $resource->{'select_internal_attribute'}, '', $update, __('Attribute')) ?>
                                        <?= read_field('select_internal_value', $resource->{'select_internal_value'}, '', $update, __('Value')) ?>
                                    <?php } ?>
                                </div>
                                <div class="col-6">
                                    <?= read_select('create_external_from_internal', $resource->create_external_from_internal, $dictionary->columns->create_external_from_internal, $update, __('Create') . ' ' . $resource->type . ' ' . __('Devices from Open-AudIT')) ?>
                                    <?= read_select('update_external_from_internal', $resource->update_external_from_internal, $dictionary->columns->update_external_from_internal, $update, __('Update') . ' ' . $resource->type . ' ' . __('Devices from Open-AudIT')) ?>
                                    <?= read_select('delete_external_from_internal', $resource->delete_external_from_internal, $dictionary->columns->delete_external_from_internal, $update, __('Delete') . ' ' . $resource->type . ' ' . __('Devices from Open-AudIT')) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="select_external_type" class="form-label"><?= __('Select') ?></label>
                                            <div class="input-group">
                                                <select class="form-select" id="select_external_type" name="select_external_type" data-original-value="<?= $resource->select_external_type ?>" disabled>
                                                    <option value="all" <?php if ($resource->select_external_type === 'all') { ?>selected<?php } ?>><?= __('All') ?></option>
                                                    <option value="none" <?php if ($resource->select_external_type === 'none') { ?>selected<?php } ?>><?= __('None') ?></option>
                                                    <option value="attribute" <?php if ($resource->select_external_type === 'attribute') { ?>selected<?php } ?>><?= __('Attribute') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="select_external_type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="select_external_type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="select_external_type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="select_external_type" data-dictionary="<?= $dictionary->columns->select_external_type ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <?= read_field('select_external_attribute', $resource->{'select_external_attribute'}, '', $update) ?>
                                    <?= read_field('select_external_value', $resource->{'select_external_value'}, '', $update) ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="fields" role="tabpanel" tabindex="0">
                            <br>
                            <div class="table-responsive">
                                <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" id="fieldstable" data-order='[[0,"asc"]]'>
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
                                            <td class="text-center"><button type="button" class="field_delete_link btn <?= $GLOBALS['button'] ?> btn-danger" data-internal_field_name="<?= $field->internal_field_name ?>" data-external_field_name="<?= $field->external_field_name ?>" data-external_field_type="<?= $field->external_field_type ?>" data-default_value="<?= $field->default_value ?>" data-priority="<?= $field->priority ?>" data-matching_attribute="<?= $field->matching_attribute ?>" ><i class="fa fa-trash" aria-hidden="true">&nbsp;</i></button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <button type="button" class="field_add btn btn-sm btn-success"><?= __('Add Field') ?></button>
                            </div>
                        </div>

                        <div class="tab-pane" id="logs" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped logsTable dataTable" data-order='[[0,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('ID') ?></th>
                                        <th><?= __('Timestamp') ?></th>
                                        <th class="text-center"><?= __('Severity') ?></th>
                                        <th><?= __('Message') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($included['logs'])) { ?>
                                        <?php foreach ($included['logs'] as $result) { ?>
                                        <tr>
                                            <td class="text-center"><?= $result->attributes->id ?></td>
                                            <td><?= $result->attributes->timestamp ?></td>
                                            <?php
                                            $severity_text = '<span class="badge bg-danger">' . $result->attributes->severity_text . '</span>';
                                            if ($result->attributes->severity_text === 'debug') {
                                                $severity_text = '<span class="badge bg-secondary">debug</span>';
                                            }
                                            if ($result->attributes->severity_text === 'info') {
                                                $severity_text = '<span class="badge bg-info">info</span>';
                                            }
                                            if ($result->attributes->severity_text === 'notice') {
                                                $severity_text = '<span class="badge bg-success">notice</span>';
                                            }
                                            if ($result->attributes->severity_text === 'warning') {
                                                $severity_text = '<span class="badge bg-warning">warning</span>';
                                            }
                                            if ($result->attributes->severity_text === 'error') {
                                                $severity_text = '<span class="badge bg-danger">error</span>';
                                            }
                                            ?>
                                            <td class="text-center"><?= $severity_text ?></td>
                                            <td style="word-wrap:break-word; min-width:160px; max-width:500px;"><?= $result->attributes->message ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="4">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
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
                                            <td><?= $result->attributes->ip ?><br><?= $result->attributes->type ?></td>
                                            <td><?= $result->attributes->name ?><br><?= $result->attributes->fqdn ?></td>
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


<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        $("#select_internal_type").val("<?= $resource->select_internal_type ?>");

        /* Delete integration field */
        $('.field_delete_link').click(function () {
            var $internal_field_name = $(this).attr('data-internal_field_name');
            var $external_field_name = $(this).attr('data-external_field_name');
            var $external_field_type = $(this).attr('data-external_field_type');
            var $default_value = $(this).attr('data-default_value');
            var $priority = $(this).attr('data-priority');
            var $matching_attribute = $(this).attr('data-matching_attribute');
            if (confirm('Are you sure you want to delete this field?') !== true) {
                /* console.log("<?= url_to('integrationsRead', $resource->id) ?>/fields/<?= $resource->id ?>?internal_field_name=" + $internal_field_name + "&external_field_name=" + $external_field_name + "&external_field_type=" + $external_field_type + "&default_value=" + $default_value); */
                return;
            }
            $.ajax({
                type: 'DELETE',
                url: "<?= url_to('integrationsRead', $resource->id) ?>/fields/<?= $resource->id ?>?internal_field_name=" + $internal_field_name + "&external_field_name=" + $external_field_name + "&external_field_type=" + $external_field_type + "&default_value=" + $default_value + "&priority=" + $priority + "&matching_attribute=" + $matching_attribute,
                dataType: 'json',
                success: function (data) {
                    console.log(data.responseText);
                    alert('"' + $internal_field_name + '" has been deleted.\nYou may need to refresh the page to display current items.');
                },
                error: function () {
                    console.log(data.responseText);
                    alert("An error occurred when deleting \"" + $name + '"');
                }
            });
        });



        /* Add integration field */
        field_count = 0;
        $('.field_add').click(function () {
            var row = "\
                                        <tr id=\"fields_" + field_count + "\">\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][internal_field_name]\" name=\"data[attributes][fields][" + field_count + "][internal_field_name]\" value=\"\"><\/td>\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][external_field_name]\" name=\"data[attributes][fields][" + field_count + "][external_field_name]\" value=\"\"><\/td>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][external_field_type]\" id=\"data[attributes][fields][" + field_count + "][external_field_type]\">\
                                                <option value=\"text\" selected><?= __('Text') ?><\/option>\
                                                <option value=\"integer\">      <?= __('Integer') ?><\/option>\
                                                <option value=\"bool\">         <?= __('Boolean') ?><\/option>\
                                                <option value=\"bool_one_zero\"><?= __('Boolean 1/0') ?><\/option>\
                                                <option value=\"capitalise\">   <?= __('Capitalise') ?><\/option>\
                                                <option value=\"lower\">        <?= __('Lower Case') ?><\/option>\
                                                <option value=\"upper\">        <?= __('Upper Case') ?><\/option>\
                                                <option value=\"datetime_now\"> <?= __('DateTime Now') ?><\/option>\
                                                <option value=\"datetime_Y-m-d H:i:s\"><?= __('DateTime Y-M-D H:M:S') ?><\/option>\
                                                <option value=\"date_now\">     <?= __('Date Now') ?><\/option>\
                                                <option value=\"date_Y-m-d\">   <?= __('Date Y-M-D') ?><\/option>\
                                                <option value=\"date_m-d-Y\">   <?= __('Date M-D-Y') ?><\/option>\
                                                <option value=\"date_d-m-Y\">   <?= __('Date D-M-Y') ?><\/option>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][priority]\" id=\"data[attributes][fields][" + field_count + "][priority]\"><option value=\"internal\" selected><?= __('Internal') ?><\/option><option value=\"external\"><?= __('External') ?><\/option><\/select><\/td>\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][default_value]\" name=\"data[attributes][fields][" + field_count + "][default_value]\" value=\"\"><\/td>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][matching_attribute]\" id=\"data[attributes][fields][" + field_count + "][matching_attribute]\"><option value=\"y\"><?= __('Yes') ?><\/option><option value=\"n\" selected><?= __('No') ?><\/option><\/select></td>\
                                            <td class=\"text-center\"><button type=\"button\" data-row=\"" + field_count + "\" class=\"field_submit btn btn-sm btn-success\" title=\"<?= __('Add') ?>\">Add<\/button><\/td>\
                                        <\/tr>";
            $('#fieldstable > tbody:last-child').append(row);
            field_count = field_count + 1;
        });


        /* Submit integration field */
        $(document).on('click', '.field_submit', function (e) {
            var $row = $(this).attr('data-row');
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $resource->id ?>;
            data["data"]["type"] = 'integrations';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]['fields'] = {};
            data["data"]["attributes"]['fields']['internal_field_name'] = $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[internal_field_name\\]").val();
            data["data"]["attributes"]['fields']['external_field_name'] = $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[external_field_name\\]").val();
            data["data"]["attributes"]['fields']['external_field_type'] = $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[external_field_type\\]").val();
            data["data"]["attributes"]['fields']['priority'] = $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[priority\\]").val();
            data["data"]["attributes"]['fields']['default_value'] = $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[default_value\\]").val();
            data["data"]["attributes"]['fields']['matching_attribute'] = $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[matching_attribute\\]").val();
            data = JSON.stringify(data);
            table_data = JSON.parse(data);
            if (table_data["data"]["attributes"]['fields']['priority'] == 'internal') {
                table_data["data"]["attributes"]['fields']['priority'] = '<span class="label label-success">internal</span>';
            } else {
                table_data["data"]["attributes"]['fields']['priority'] = '<span class="label label-info">external</span>';
            }
            console.log(data);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('integrationsRead', $resource->id) ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    console.log(data.responseText);
                    alert('"' + $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[internal_field_name\\]").val() + '" has been added.');
                    $('#fieldstable > tbody > tr:last-child').remove();
                    var row = "\
                                        <tr>\
                                            <td>" + table_data["data"]["attributes"]['fields']['internal_field_name'] + "<\/td>\
                                            <td>" + table_data["data"]["attributes"]['fields']['external_field_name'] + "<\/td>\
                                            <td>" + table_data["data"]["attributes"]['fields']['external_field_type'] + "<\/td>\
                                            <td>" + table_data["data"]["attributes"]['fields']['priority'] + "<\/td>\
                                            <td>" + table_data["data"]["attributes"]['fields']['default_value'] + "<\/td>\
                                            <td>" + table_data["data"]["attributes"]['fields']['matching_attribute'] + "<\/td>\
                                            <td><\/td>\
                                        <\/tr>";
                    console.log(row);
                    $('#fieldstable > tbody:last-child').append(row);
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    console.log(data);
                    alert("An error occurred when adding '" + $("#data\\[attributes\\]\\[fields\\]\\[" + $row + "\\]\\[internal_field_name\\]").val() + "'.");
                }
            });
        });

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
