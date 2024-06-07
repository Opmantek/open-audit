<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$panel_add_button = '';
if ($update) {
    if ($user->toolbar_style === 'icontext') {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add Device") . "\" href=\"" . url_to('componentsCreateForm', 'applications', $resource->id) . "?type=application\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Add Device") . "</a>";
    } elseif ($user->toolbar_style === 'icon') {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add Device") . "\" href=\"" . url_to('componentsCreateForm', 'applications', $resource->id) . "?type=application\"><span class=\"fa fa-plus\"></span></a>";
    } else {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add Device") . "\" href=\"" . url_to('componentsCreateForm', 'applications', $resource->id) . "?type=application\">" . __("Add Device") . "</a>";
    }
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
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('external_ident', $resource->external_ident, $dictionary->columns->external_ident, $update) ?>
                            <?= read_field('ident', $resource->ident, $dictionary->columns->ident, $update) ?>
                            <?= read_field('weight', $resource->weight, $dictionary->columns->weight, $update) ?>
                            <?= read_field('severity', $resource->severity, $dictionary->columns->severity, $update) ?>
                            <?= read_field('version', $resource->version, $dictionary->columns->version, $update) ?>
                            <?= read_field('fix_id', $resource->fix_id, $dictionary->columns->fix_id, $update) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-10" style="position:relative;">
                                    <label for="sql" class="form-label"><?= __('Fix Notes') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="fix_notes" name="fix_notes" data-original-value="<?= $resource->fix_notes ?>" disabled><?= html_entity_decode($resource->fix_notes) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="fix_notes" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="fix_notes" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="fix_notes" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="fix_notes" data-dictionary="<?= $dictionary->columns->fix_notes ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-10" style="position:relative;">
                                    <label for="sql" class="form-label"><?= __('Check') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="10" id="check" name="check" data-original-value="<?= $resource->check ?>" disabled><?= html_entity_decode($resource->check) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="check" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="check" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="check" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="check" data-dictionary="<?= $dictionary->columns->notes ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-10" style="position:relative;">
                                    <label for="sql" class="form-label"><?= __('Commands') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="10" id="commands" name="commands" data-original-value="<?= $resource->commands ?>" disabled><?= html_entity_decode($resource->commands) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="commands" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="commands" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="commands" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="commands" data-dictionary="<?= $dictionary->columns->commands ?>"><span><br></span></div>
                                </div>
                            </div>
                            <!--
                            <?= read_field('commands_pass', $resource->commands_pass, $dictionary->columns->commands_pass, $update) ?>
                            -->

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
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
                                    <?php $fields = array('name', 'org_id', 'description', 'edited_by', 'edited_date') ?>
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

