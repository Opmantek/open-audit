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
                        <div class="col-7">
                            <?php $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('baselinesRead', $resource->{'baseline_id'}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>"; ?>
                            <?= read_field('Baseline Name', html_entity_decode($resource->{'baselines.name'}), '', '', '', $link) ?>
                            <?= read_field('name', html_entity_decode($resource->name), $dictionary->columns->name, $update) ?>

                            <?php if ($resource->table === 'netstat') {
                                foreach ($resource->tests as $test) {
                                    echo read_field('tests.' . $test->column, html_entity_decode($test->value), '', $update, ucwords(__($test->column)));
                                }
                            } ?>

                            <?php if ($resource->table === 'software') {
                                foreach ($resource->tests as $test) {
                                    if ($test->column === 'name') {
                                        echo read_field('tests.name', html_entity_decode($test->value), '', $update, __('Name'));
                                    }
                                }
                                foreach ($resource->tests as $test) {
                                    if ($test->column === 'version') { ?>
                                        <div class="row" style="padding-top:16px;">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <label for="tests.operator" class="form-label"><?= __('Condition') ?></label>
                                                <div class="input-group">
                                                    <select class="form-select" id="tests.operator" name="tests.operator" value='<?= html_entity_decode($test->operator) ?>' data-original-value="<?= html_entity_decode($test->operator) ?>" disabled>
                                                        <option value='='  ><?= __('Equal To') ?></option>
                                                        <option value='>=' ><?= __('Equal To or Greater Than') ?></option>
                                                        <option value='>'  ><?= __('Greater Than') ?></option>
                                                        <option value='<=' ><?= __('Equal To or Less Than') ?></option>
                                                        <option value='<'  ><?= __('Less Than') ?></option>
                                                    </select>
                                                    <?php if ($update) { ?>
                                                    <div class="float-end" style="padding-left:4px;">
                                                        <div data-attribute="tests.operator" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                        <div data-attribute="tests.operator" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                        <div data-attribute="tests.operator" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo read_field('tests.version', html_entity_decode($test->value), '', $update, __('Version'));
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
                                    <label for="notes" class="form-label"><?= __('Notes') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="sql" name="notes" data-original-value="<?= $resource->notes ?>" disabled><?= $resource->notes ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="notes" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="notes" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="notes" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="notes" data-dictionary="<?= $dictionary->columns->notes ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="documentation" class="form-label"><?= __('Documentation') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="documentation" name="documentation" data-original-value="<?= $resource->documentation ?>" disabled><?= $resource->documentation ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="documentation" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="documentation" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="documentation" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="documentation" data-dictionary="<?= $dictionary->columns->documentation ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-5">
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
                                    <?php $fields = array('notes', 'documentation', 'table', 'tests') ?>
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
        <?php if ($resource->table === 'software') { ?>
        $("#tests\\.operator").val("<?= html_entity_decode($test_operator) ?>");
        <?php } ?>
    });
}
</script>
