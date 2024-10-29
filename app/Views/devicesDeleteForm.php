<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header('devices', 'fa fa-desktop', $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <p class="fs-2 text-center"><?= __('Delete Example Devices') ?></p>
                        <br>
                        <p class="text-center"><?= __('Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. ') ?></p>
                        <br>
                        <br>
                        <div class="text-center">
                            <form action="<?= url_to('devicesDeleteExample') ?>" method="post">
                                <button id="submit" name="submit" type="submit" class="btn btn-danger" aria-label="<?= __('Delete') ?>"><?= __('Delete') ?></button>
                            </form>
                        </div>
                        <div class="text-center" id="statusmsg"></div>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Type') ?></th>
                                        <th><?= __('IP') ?></th>
                                        <th><?= __('Domain') ?></th>
                                        <th><?= __('Manufacturer') ?></th>
                                        <th><?= __('OS Family') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($data)) { ?>
                                    <?php foreach ($data as $item) { ?>
                                    <tr>
                                        <?= collection_button_read($meta->collection, $item->id) ?>
                                        <td><?= $item->attributes->name ?></td>
                                        <td><?= $item->attributes->type ?></td>
                                        <td><?= $item->attributes->ip ?></td>
                                        <td><?= $item->attributes->domain ?></td>
                                        <td><?= $item->attributes->manufacturer ?></td>
                                        <td><?= $item->attributes->os_family ?></td>
                                    </tr>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function(){
        $('#submit').click(function() {
            document.getElementById('statusmsg').innerHTML = '<br>Please wait while we import the devices.<br><br><i class=\'fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom\'></i>';
        });
    });
}
</script>