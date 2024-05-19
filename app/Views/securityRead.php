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
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="sql" class="form-label"><?= __('Description') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="description" name="description" data-original-value="<?= $resource->description ?>" disabled><?= html_entity_decode($resource->description) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="description" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="description" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="description" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="description" data-dictionary="<?= $dictionary->columns->description ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?= read_field('type', $resource->type, $dictionary->columns->type, false) ?>
                            <?= read_field('os', $resource->os, $dictionary->columns->os, $update) ?>
                            <?= read_field('release_info', $resource->release_info, $dictionary->columns->release_info, $update) ?>
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
                                    <?php $fields = array('name', 'org_id', 'description', 'type', 'os', 'release_info', 'edited_by', 'edited_date') ?>
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
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa-solid fa-file-shield oa-icon"></span><?= __('Policies') ?></h6>
                        </div>
                        <div class="col-3 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="policies_panel">
                                <div class="page-title-right">
                                    <?= $panel_add_button ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                        <thead>
                            <tr>
                                <th class="text-center"><?= __('View') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Description') ?></th>
                                <th class="text-center"><?= __('Delete from Security') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($included['policies'] as $item) { ?>
                            <tr>
                                <td class="text-center"><a href="<?= url_to('security_policiesRead', $item->{'id'}) ?>" role="button" class="btn btn-sm btn-primary" title="<?= __('View') ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                <td><?= $item->{'name'} ?></td>
                                <td><?= $item->{'description'} ?></td>
                                <?php if ($update) { ?>
                                    <td class="text-center" data-orderable="false">
                                        <button type="button" class="btn <?= $GLOBALS['button'] ?>  btn-danger delete_component_link" data-type="application" data-component_type="application" data-id="<?= $item->id ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button>
                                    </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </main>

