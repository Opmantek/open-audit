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
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"desc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) {
                                    if ($item->actioned === 'y') {
                                        $item->actioned = '<span class="fa fa-check text-success"></span>';
                                    }
                                    if ($item->actioned === 'n') {
                                        $item->actioned = '<span class="fa fa-xmark text-danger"></span>';
                                    }
                                    ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'actioned') {
                                            echo "<td class=\"text-center\">" . $item->{$key} . "</td>\n";
                                        } else {
                                            echo "<td>" . $item->{$key} . "</td>\n";
                                        }
                                        ?>
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
        $("#button_default_items").remove();
        <?php if (empty($user->toolbar_style) or $user->toolbar_style === 'icontext') { ?>
            $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" class=\"btn btn-light mb-2\" title=\"<?= __("Get News") ?>\" href=\"<?= url_to('newsExecuteAll') ?>\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-rss text-primary\"></span><?= __("Get News") ?></a>");
        <?php } elseif ($user->toolbar_style === 'icon') { ?>
            $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" class=\"btn btn-light mb-2\" title=\"<?= __("Get News") ?>\" href=\"<?= url_to('newsExecuteAll') ?>\"><span class=\"fa-solid fa-rss text-primary\"></span></a>");
        <?php } elseif ($user->toolbar_style === 'text') { ?>
            $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" class=\"btn btn-light mb-2\" title=\"<?= __("Get News") ?>\" href=\"<?= url_to('newsExecuteAll') ?>\"><?= __("Get News") ?></a>");
        <?php } ?>
    });
}
</script>