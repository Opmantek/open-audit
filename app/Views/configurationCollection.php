<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id') {
                                            continue;
                                        }
                                        if ($item->attributes->name === 'mail_password' and !empty($item->attributes->value)) {
                                            $item->attributes->value = 'removed from display, but has been set';
                                        }
                                        if ($key === 'value') {
                                            if (strlen($item->attributes->value) > 60) {
                                                $item->attributes->value = mb_substr($item->attributes->value, 0, 60) . '...';
                                            }
                                        }
                                        echo "<td>" . $item->attributes->{$key} . "</td>\n";
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
        $("#button_help").remove();
        <?php if (strpos($meta->query_string, 'configuration.name=likemail') !== false) { ?>
            <?php if (empty($user->toolbar_style) or $user->toolbar_style === 'icontext') { ?>
                $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" id=\"button_test_email\" class=\"btn btn-light mb-2\" title=\"<?= __("Test Email") ?>\" href=\"<?= url_to('configurationExecuteFormEmail') ?>\"><span style=\"margin-right:6px;\" class=\"fa-regular fa-envelope text-primary\"></span><?= __("Test Email") ?></a>");
            <?php } elseif ($user->toolbar_style === 'icon') { ?>
                $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" id=\"button_test_email\" class=\"btn btn-light mb-2\" title=\"<?= __("Test Email") ?>\" href=\"<?= url_to('configurationExecuteFormEmail') ?>\"><span class=\"fa-regular fa-envelope text-primary\"></span></a>");
            <?php } elseif ($user->toolbar_style === 'text') { ?>
                $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" id=\"button_test_email\" class=\"btn btn-light mb-2\" title=\"<?= __("Test Email") ?>\" href=\"<?= url_to('configurationExecuteFormEmail') ?>\"><?= __("Test Email") ?></a>");
            <?php } ?>
        <?php } ?>
    });
}
</script>
