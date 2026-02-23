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
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th><?= __('Application') ?></th>
                                    <th><?= __('Attribute') ?></th>
                                    <th><?= __('Value') ?></th>
                                    <th><?= __('Component') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?php
                                    echo collection_button_read($meta->collection, $item->application_id);
                                    echo "<td>" . $item->application_name . "</td>\n";
                                    echo "<td>" . $item->attribute . "</td>\n";
                                    echo "<td>" . $item->value . "</td>\n";
                                    echo "<td>" . html_entity_decode($item->description) . "</td>\n";
                                    ?>
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
        $("#oa_panel_buttons").append('<form style="padding-left:4px;" method="post" action="<?= url_to('applicationsSearch') ?>"><div class="input-group"><input type="text" class="form-control mb-2" id="search" name="search" placeholder="Search for a component."><div class="float-end" style="padding-left:4px;"><button class="btn btn-primary mb-2" title="Submit">Search</button></div></div></form>');
    });
}
</script>