<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][host]', __('Host'), $dictionary->attributes->create, 'http://your_open-audit_server') ?>
                                <?= create_text_field('data[attributes][community]', __('Community'), $dictionary->attributes->create, '/open-audit') ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value="collector"><?= __('Collector'); ?></option>
                                            <option value="stand-alone"><?= __('Stand-Alone'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][username]', __('Username'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][password]', __('Password'), $dictionary->attributes->create, '', 'password') ?>
                                <?= create_text_field('data[attributes][os]', __('OS'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][uuid]', __('UUID'), $dictionary->attributes->create) ?>

                                <input type="hidden" value="<?= $config->server_platform ?>" id="data[attributes][os]" name="data[attributes][os]" />
                                <input type="hidden" value="<?= $config->uuid ?>" id="data[attributes][uuid]" name="data[attributes][uuid]" />
                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>


                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br>";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br>";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[name\\]").val("<?= @$_SERVER['SERVER_NAME'] ?>");
        $("#data\\[attributes\\]\\[os\\]").val("<?= $config->server_platform ?>");
        $("#data\\[attributes\\]\\[uuid\\]").val("<?= $config->uuid ?>");
        $("#data\\[attributes\\]\\[community\\]").val("/open-audit");
        $("#data\\[attributes\\]\\[host\\]").val("http://");
    });
}
</script>
