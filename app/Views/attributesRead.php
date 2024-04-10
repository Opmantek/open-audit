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

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="resource" class="form-label"><?= __('Resource') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="resource" name="resource" data-original-value="<?= $resource->resource ?>" disabled>
                                            <option value="devices"><?= __('Devices') ?></option>
                                            <option value="locations"><?= __('Locations') ?></option>
                                            <option value="orgs"><?= __('Orgs') ?></option>
                                            <option value="queries"><?= __('Queries') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="resource" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="resource" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="resource" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="resource" data-dictionary="<?= $dictionary->columns->resource ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="type" class="form-label"><?= __('Type') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?= read_field('value', $resource->value, $dictionary->columns->value, $update) ?>
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
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'resource', 'type', 'value', 'edited_by', 'edited_date') ?>
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
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#resource").val("<?= $resource->resource ?>");
    });
    $(document).ready(function() {
        $("#type").children().remove();
        if ($("#resource").val() == 'devices') {
            $("#type").append($('<option>', { value: 'class', text: 'Class' }));
            $("#type").append($('<option>', { value: 'environment', text: 'Environment' }));
            $("#type").append($('<option>', { value: 'status', text: 'Status' }));
            $("#type").append($('<option>', { value: 'type', text: 'Type' }));
        }
        if ($("#resource").val() == 'locations') {
            $("#type").append($('<option>', { value: 'type', text: 'Type' }));
        }
        if ($("#resource").val() == 'queries') {
            $("#type").append($('<option>', { value: 'menu_category', text: 'Menu Category' }));
        }
        if ($("#resource").val() == 'orgs') {
            $("#type").append($('<option>', { value: 'type', text: 'Type' }));
        }
        $("#type").val("<?= $resource->type ?>");
    });
    $(document).ready(function () {
        $(document).on('change', "#resource", function () {
            $("#type").children().remove();
            if ($("#resource").val() == 'devices') {
                $("#type").append($('<option>', { value: '', text: 'Choose' }));
                $("#type").append($('<option>', { value: 'class', text: 'Class' }));
                $("#type").append($('<option>', { value: 'environment', text: 'Environment' }));
                $("#type").append($('<option>', { value: 'status', text: 'Status' }));
                $("#type").append($('<option>', { value: 'type', text: 'Type' }));
            }
            if ($("#resource").val() == 'locations') {
                $("#type").append($('<option>', { value: 'type', text: 'Type' }));
            }
            if ($("#resource").val() == 'queries') {
                $("#type").append($('<option>', { value: 'menu_category', text: 'Menu Category' }));
            }
            if ($("#resource").val() == 'orgs') {
                $("#type").append($('<option>', { value: 'type', text: 'Type' }));
            }
        });
    });
}
</script>