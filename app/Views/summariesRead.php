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
                            <?= read_select('menu_display', $resource->menu_display, $dictionary->columns->menu_display, $update, __('Menu Display'), array(), $meta->collection) ?>
                            <?= read_select('menu_category', $resource->menu_category, $dictionary->columns->menu_category, $update, __('Menu Category'), $included['menu_category'], $meta->collection) ?>
                            <?= read_select('table', $resource->table, $dictionary->columns->menu_category, $update, __('Table'), $included['tables'], $meta->collection) ?>
                            <?= read_field('column', $resource->column, $dictionary->columns->column, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('extra_columns', $resource->extra_columns, $dictionary->columns->extra_columns, $update, '', '', '', '', $meta->collection) ?>
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
        $("#menu_category").val("<?= $resource->menu_category ?>");
        $("#menu_display").val("<?= $resource->menu_display ?>");
        $("#table").val("<?= $resource->table ?>");
    });
}
</script>