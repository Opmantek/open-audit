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
                        <div class="col-7">
                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('baselinesRead', $resource->{'baseline_id'}) . "\"><span title=\"" . __('View') . "\" class=\"icon-link\" aria-hidden=\"true\"></span></a>"; ?>
                            <?= read_field('baselines.name', strtolower(str_replace(' ', '_', html_entity_decode($resource->{'baselines.name'}))), $dictionary->columns->{'baselines_name'}, '', __('Baseline Name'), $link) ?>
                            <?= read_field('name', html_entity_decode($resource->name), $dictionary->columns->name, $update) ?>

                            <?php if ($resource->table === 'netstat') {
                                foreach ($resource->tests as $test) {
                                    echo read_field('tests.' . $test->column, html_entity_decode($test->value), '', $update, ucwords(__($test->column)));
                                }
                            } ?>

                            <?php if ($resource->table === 'software') {
                                foreach ($resource->tests as $test) {
                                    if ($test->column === 'name') {
                                        echo read_field('tests.name', html_entity_decode($test->value), $dictionary->columns->{'tests_name'}, $update, __('Name'));
                                    }
                                }
                                foreach ($resource->tests as $test) {
                                    if ($test->column === 'version') { ?>
                                        <div class="row" style="padding-top:16px;">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <?= read_field_header($meta->collection, 'tests.operator', $dictionary->columns->condition, __('Condition')) ?>
                                                <div class="input-group">
                                                    <select class="form-select" id="tests.operator" name="tests.operator" data-original-value="<?= html_entity_decode($test->operator) ?>" disabled>
                                                        <option value='='  ><?= __('Equal To') ?></option>
                                                        <option value='>=' ><?= __('Equal To or Greater Than') ?></option>
                                                        <option value='>'  ><?= __('Greater Than') ?></option>
                                                        <option value='<=' ><?= __('Equal To or Less Than') ?></option>
                                                        <option value='<'  ><?= __('Less Than') ?></option>
                                                    </select>
                                                    <?php if ($update) { ?>
                                                    <div class="float-end" style="padding-left:4px;">
                                                        <div data-attribute="tests.operator" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                                        <div data-attribute="tests.operator" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                                        <div data-attribute="tests.operator" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo read_field('tests.version', html_entity_decode($test->value), $dictionary->columns->{'tests_version'}, $update, __('Version'));
                                        $test_operator = html_entity_decode($test->operator);
                                    }
                                }
                            } ?>

                            <?php if ($resource->table === 'user') {
                                foreach ($resource->tests as $test) {
                                    echo read_field('tests.' . $test->column, html_entity_decode($test->value), '', $update);
                                }
                            } ?>






                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'notes', $dictionary->columns->notes) ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="notes" name="notes" data-original-value="<?= $resource->notes ?>" disabled><?= $resource->notes ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="notes" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="notes" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="notes" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'documentation', $dictionary->columns->documentation) ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="documentation" name="documentation" data-original-value="<?= $resource->documentation ?>" disabled><?= $resource->documentation ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="documentation" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="documentation" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="documentation" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-5">
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
        <?php if ($resource->table === 'software') { ?>
        $("#tests\\.operator").val("<?= html_entity_decode($test_operator) ?>");
        <?php } ?>
        $("#button_create").remove();
    });
}
</script>
