<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$panel_add_button = '';
if ($update) {
    if ($user->toolbar_style === 'icontext') {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __('Add Component') . "\" href=\"" . url_to('applications_componentsCreateForm', 'applications', $resource->id) . "?application_id=" . $meta->id . "\"><span style=\"margin-right:6px;\" class=\"icon-plus\"></span>" . __('Add Component') . "</a>";
    } elseif ($user->toolbar_style === 'icon') {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __('Add Component') . "\" href=\"" . url_to('applications_componentsCreateForm', 'applications', $resource->id) . "?application_id=" . $meta->id . "\"><span class=\"icon-plus\"></span></a>";
    } else {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __('Add Component') . "\" href=\"" . url_to('applications_componentsCreateForm', 'applications', $resource->id) . "?application_id=" . $meta->id . "\">" . __('Add Component') . "</a>";
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
                        <div class="col-4">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('owner', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('vendor', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-4">
                            <?= read_field('class', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('environment', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('status', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('replaces', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('replaced_by', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-4">
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="icon-computer oa-icon"></span><?= __('Components') ?></h6>
                        </div>
                        <div class="col-3 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="device_panel">
                                <div class="page-title-right">
                                    <?= $panel_add_button ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[0,"asc"]]'>
                        <thead>
                            <tr>
                                <th class="text-center"><?= __('View') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('IP') ?></th>
                                <th><?= __('Description') ?></th> -->
                                <th><?= __('Component') ?></th>
                                <th><?= __('Relationship') ?></th>
                                <th><?= __('Details') ?></th>
                                <th class="text-center" style="width:120px;"><?= __('Evironment') ?></th>
                                <th><?= __('Owner') ?></th>
                                <th class="text-center" style="width:40px;"><?= __('Delete') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /**
                            <?php foreach ($included['devices'] as $item) { ?>
                            <tr>
                                <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="icon-computer" aria-hidden="true"></i></a></td>
                                <td><?= $item->attributes->{'devices.name'} ?></td>
                                <td><?= $item->attributes->{'devices.ip'} ?></td>
                                <td><?= $item->attributes->{'devices.description'} ?></td>
                                <?php if ($update) { ?>
                                    <td class="text-center" data-orderable="false">
                                        <button type="button" class="btn <?= $GLOBALS['button'] ?>  btn-danger delete_component_link" data-type="application" data-component_type="application" data-id="<?= $item->attributes->{'application.id'} ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="icon-trash-2"></span></button>
                                    </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                            */ ?>
                        </tbody>
                    </table>
                    <pre>
                        <?= json_encode($included['devices'], JSON_PRETTY_PRINT) ?>
                    </pre>

        </main>
