<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th><?= __('Baseline') ?></th>
                                    <th><?= __('Timestamp') ?></th>
                                    <th><?= __('Group') ?></th>
                                    <th class="text-center"><?= __('Devices') ?></th>
                                    <th class="text-center"><?= __('Pass') ?></th>
                                    <th class="text-center"><?= __('Fail') ?></th>
                                    <th class="text-center"><?= __('Export by Policy') ?></th>
                                    <th class="text-center"><?= __('Export by Device') ?></th>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php echo "<td><a href=\"" . url_to('baselinesCollection') . "?baselines.id=" . $item->attributes->{'baselines.id'} . "\">" . $item->attributes->{'baselines.name'} . "</a></td>\n"; ?>
                                    <?php echo "<td>" . $item->attributes->timestamp . "</td>\n"; ?>
                                    <?php echo "<td>" . $item->attributes->result->group_name . "</td>\n"; ?>
                                    <?php echo "<td class=\"text-center\">" . $item->attributes->result->devices . "</td>\n"; ?>
                                    <?php echo "<td class=\"text-center text-success\">" . $item->attributes->result->pass . "</td>\n"; ?>
                                    <?php echo "<td class=\"text-center text-danger\">" . $item->attributes->result->fail . "</td>\n"; ?>
                                    <?php echo "<td class=\"text-center\"><a class=\"btn " . $GLOBALS['button'] . " btn-primary\" title=\"" . __('Export by Policy') . "\" role=\"button\" href=\"" . url_to('baselines_resultsExportPolicy', $item->attributes->id) . "\"><span style=\"width:1rem;\" class=\"fa fa-arrow-up-right-from-square\" aria-hidden=\"true\"></span></a></td>"; ?>
                                    <?php echo "<td class=\"text-center\"><a class=\"btn " . $GLOBALS['button'] . " btn-primary\" title=\"" . __('Export by Device') . "\" role=\"button\" href=\"" . url_to('baselines_resultsExportDevice', $item->attributes->id) . "\"><span style=\"width:1rem;\" class=\"fa fa-arrow-up-right-from-square\" aria-hidden=\"true\"></span></a></td>"; ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete(intval($item->id)) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_import_csv").remove();
        $("#button_export_csv").remove();
        $("#button_import_json").remove();
        $("#button_export_json").remove();
        $("#button_create").remove();
        $("#button_help").remove();
    });
}
</script>