<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/widget_functions.php';
if (!empty($included['queries'])) {
    $item = new \stdClass();
    $item->id = 0;
    $item->attributes = new stdClass();
    $item->attributes->name = '';
    array_unshift($included['queries'], $item);
}
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
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'type', $dictionary->columns->type) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                            <option value="line" <?php if ($resource->type === 'line') { echo 'selected'; } ?>><?= __('Line Graph') ?></option>
                                            <option value="pie" <?php if ($resource->type === 'pie') { echo 'selected'; } ?>><?= __('Pie Chart') ?></option>
                                            <option value="status" <?php if ($resource->type === 'status') { echo 'selected'; } ?>><?= __('Status') ?></option>
                                            <option value="traffic" <?php if ($resource->type === 'traffic') { echo 'selected'; } ?>><?= __('Traffic Light') ?></option>
                                        </select>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?php if (in_array('sql', $dictionary->{$resource->type . '_fields'})) { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'sql', $dictionary->columns->sql, 'SQL') ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="14" id="sql" name="sql" data-original-value="<?= $resource->sql ?>" disabled><?= html_entity_decode($resource->sql) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="sql" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="sql" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="sql" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="sql" data-dictionary="<?= $dictionary->columns->sql ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if (in_array('status_secondary_sql', $dictionary->{$resource->type . '_fields'})) { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'status_secondary_sql', $dictionary->columns->sql, 'Secondary SQL') ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="14" id="status_secondary_sql" name="status_secondary_sql" data-original-value="<?= $resource->status_secondary_sql ?>" disabled><?= html_entity_decode($resource->status_secondary_sql) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="status_secondary_sql" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="status_secondary_sql" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="status_secondary_sql" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="status_secondary_sql" data-dictionary="<?= $dictionary->columns->status_secondary_sql ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                            foreach ($dictionary->text_fields as $field) {
                                if (in_array($field, $dictionary->{$resource->type . '_fields'}) and $field !== 'line_table') {
                                    echo '<div class="collapse" id="' . $field . '_details">';
                                    echo read_field($field, $resource->{$field}, $dictionary->columns->{$field}, $update, '', '', '', '', $meta->collection);
                                    echo "</div>";
                                }
                            }

                            if (in_array($field, $dictionary->{$resource->type . '_fields'}) and $field === 'line_table') { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'line_table', $dictionary->columns->line_table) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="line_table" name="line_table" disabled>
                                            <?php $dictionary->valid_tables[] = ""; ?>
                                            <?php foreach ($dictionary->valid_tables as $table) { ?>
                                            <option value="<?= $table ?>" <?php if ($resource->line_table === $table) { echo "selected"; } ?>><?= $table ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="line_table" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="line_table" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="line_table" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                            <?php if (in_array('status_primary_color', $dictionary->{$resource->type . '_fields'})) { ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <?= read_field_header($meta->collection, 'status_primary_color', $dictionary->columns->status_primary_color) ?>
                                        <div class="input-group">
                                            <select class="form-select" id="status_primary_color" name="status_primary_color" data-original-value="<?= $resource->status_primary_color ?>" disabled>
                                                <?php
                                                foreach ($dictionary->colors as $color) {
                                                    echo '<option value="' . $color . '"';
                                                    if ($resource->status_primary_color === $color) {
                                                        echo 'selected';
                                                    }
                                                    echo '>' . $color . "</option>\n";
                                                } ?>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="float-end" style="padding-left:4px;">
                                                <div data-attribute="status_primary_color" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                                <div data-attribute="status_primary_color" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                                <div data-attribute="status_primary_color" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->status_primary_color ?>"><span><br></span></div>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if (in_array('status_secondary_color', $dictionary->{$resource->type . '_fields'})) { ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <?= read_field_header($meta->collection, 'status_secondary_color', $dictionary->columns->status_secondary_color) ?>
                                        <div class="input-group">
                                            <select class="form-select" id="status_secondary_color" name="status_secondary_color" data-original-value="<?= $resource->status_secondary_color ?>" disabled>
                                                <?php
                                                foreach ($dictionary->colors as $color) {
                                                    echo '<option value="' . $color . '"';
                                                    if ($resource->status_secondary_color === $color) {
                                                        echo 'selected';
                                                    }
                                                    echo '>' . $color . "</option>\n";
                                                } ?>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="float-end" style="padding-left:4px;">
                                                <div data-attribute="status_secondary_color" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                                <div data-attribute="status_secondary_color" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                                <div data-attribute="status_secondary_color" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->status_secondary_color ?>"><span><br></span></div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (in_array('traffic_primary_query_id', $dictionary->{$resource->type . '_fields'})) { ?>
                            <?= read_select('traffic_primary_query_id', $resource->traffic_primary_query_id, $dictionary->columns->traffic_primary_query_id, $update, '', $included['queries'], $meta->collection) ?>
                            <?php } ?>

                            <?php if (in_array('traffic_secondary_query_id', $dictionary->{$resource->type . '_fields'})) { ?>
                            <?= read_select('traffic_secondary_query_id', $resource->traffic_secondary_query_id, $dictionary->columns->traffic_secondary_query_id, $update, '', $included['queries'], $meta->collection) ?>
                            <?php } ?>

                            <?php if (in_array('traffic_ternary_query_id', $dictionary->{$resource->type . '_fields'})) { ?>
                            <?= read_select('traffic_ternary_query_id', $resource->traffic_ternary_query_id, $dictionary->columns->traffic_ternary_query_id, $update, '', $included['queries'], $meta->collection) ?>
                            <?php } ?>

                            <?php if (in_array('status_query_id', $dictionary->{$resource->type . '_fields'})) { ?>
                            <?= read_select('status_query_id', $resource->status_query_id, $dictionary->columns->status_query_id, $update, 'Query ID', $included['queries'], $meta->collection) ?>
                            <?php } ?>

                            <?php if (in_array('status_link_query_id', $dictionary->{$resource->type . '_fields'})) { ?>
                            <?= read_select('status_link_query_id', $resource->status_link_query_id, $dictionary->columns->status_link_query_id, $update, 'Link Query ID', $included['queries'], $meta->collection) ?>
                            <?php } ?>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                            </div>
                            <br>
                            <div class="offset-2 col-8">
                                <?php
                                    $dict = new stdClass();
                                    $dict->columns = new stdClass();
                                    foreach ($dictionary->{$resource->type . '_fields'} as $field) {
                                        $dict->columns->{$field} = $dictionary->columns->{$field};
                                    }
                                    echo fieldsInfoDiv($dict);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        <?php foreach ($dictionary->{$resource->type . '_fields'} as $field) {
            echo "\$('#" . $field . "_details').show();\n";
        } ?>
    });
}
</script>





