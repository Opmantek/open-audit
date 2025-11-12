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
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'resource', $dictionary->columns->resource) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="resource" name="resource" data-original-value="<?= $resource->resource ?>" disabled>
                                            <option value="devices"><?= __('Devices') ?></option>
                                            <option value="locations"><?= __('Locations') ?></option>
                                            <option value="orgs"><?= __('Orgs') ?></option>
                                            <option value="queries"><?= __('Queries') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="resource" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="resource" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="resource" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'type', $dictionary->columns->type) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <?= read_field('value', $resource->value, $dictionary->columns->value, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
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