<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/collection_functions.php';
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
                        </div>
                        <div class="col-4">
                            <?= read_field('vendor', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('class', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('environment', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('status', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-4">
                            <?= read_field('replaces', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('replaced_by', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
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
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                        <thead>
                            <tr>
                                <th data-orderable="false" class="text-center"><?= __('View') ?></th>
                                <th data-orderable="false"></th>
                                <th><?= __('Primary') ?></th>
                                <th><?= __('Relationship') ?></th>
                                <th><?= __('Secondary') ?></th>
                                <th data-orderable="false"></th>
                                <th data-orderable="false" class="text-center" style="width:40px;"><?= __('Delete') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($included['components'] as $component) { ?>
                                <?php $class= getClass($component->relationship); ?>
                            <tr>
                                <td class="align-middle text-center"><a id="read_applications_components_<?= $component->id ?>" title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('applications_componentsRead', $component->id) ?>"><span style="width:1rem;" title="<?= __('View')?>" class="icon-eye" aria-hidden="true"></span></a></td>

                                <td class="align-middle text-center"><?= html_entity_decode($component->primary_icon) ?></td>
                                <td class="align-middle"><?= html_entity_decode($component->primary) ?></td>

                                <td class="align-middle"><div class="alert alert-<?= $class ?> col-md-6 col-md-offset-3" style="margin-bottom: 0px; padding: 0.3rem; font-size: 0.9rem;" align="center"><?= $component->relationship ?></div></td>
                                <td class="align-middle"><?= html_entity_decode($component->secondary) ?></td>
                                <td class="align-middle text-center"><?= html_entity_decode($component->secondary_icon) ?></td>

                                <td class="text-center align-middle" data-orderable="false">
                                    <button type="button" class="btn <?= $GLOBALS['button'] ?>  btn-danger delete_link" data-redirect="applications/<?= $resource->id ?>" data-collection="applications_components" data-id="<?= $component->id ?>">
                                        <span style="width:1rem;" title="<?= __('Delete') ?>" class="icon-trash-2"></span>
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>








                        </tbody>
                    </table>
                    <pre>
                        <?= htmlentities(json_encode($included['components'], JSON_PRETTY_PRINT)) ?>
                    </pre>

        </main>


<?php
function getClass($relationship) {
    /*
    pushes == success
    pulls == warning
    depends == danger
    accessed == primary
    */

    $class = 'primary';
    if ($relationship === 'accessed-via') { $class = 'primary'; }
    if ($relationship === 'authenticates-via') { $class = 'danger'; }
    if ($relationship === 'calls-api') { $class = 'warning'; }
    if ($relationship === 'connected-via') { $class = 'primary'; }
    if ($relationship === 'consumes') { $class = 'warning'; }
    if ($relationship === 'depends-on') { $class = 'danger'; }
    if ($relationship === 'hosted-on') { $class = 'danger'; }
    if ($relationship === 'publishes-to') { $class = 'success'; }
    if ($relationship === 'relies-on') { $class = 'danger'; }
    if ($relationship === 'runs-on') { $class = 'danger'; }
    if ($relationship === 'used-by') { $class = 'primary'; }
    if ($relationship === 'uses-database') { $class = 'warning'; }
    if ($relationship === 'uses-storage') { $class = 'warning'; }
    if ($relationship === 'writes-to') { $class = 'success'; }
    return $class;
}
