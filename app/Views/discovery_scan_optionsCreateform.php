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
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][ping]', __('Must Respond to Ping'), [], $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][service_version]', __('Use Service Version Detection'), [], $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][open|filtered]', __('Consider open|filtered Ports Open'), [], $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][filtered]', __('Consider filtered Ports Open'), [], $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][timing]"><?= __('Timing'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][timing]" id="data[attributes][timing]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="0"><?= __('Paranoid') ?></option>
                                            <option value="1"><?= __('Sneaky') ?></option>
                                            <option value="2"><?= __('Polite') ?></option>
                                            <option value="3"><?= __('Normal') ?></option>
                                            <option value="4" selected><?= __('Aggressive') ?></option>
                                            <option value="5"><?= __('Insane') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][nmap_tcp_ports]"><?= __('Top Nmap TCP Ports'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][nmap_tcp_ports]" id="data[attributes][nmap_tcp_ports]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="0"><?= __('None') ?></option>
                                            <option value="10" selected>10</option>
                                            <option value="100">100</option>
                                            <option value="1000">1000</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][nmap_udp_ports]"><?= __('Top Nmap UDP Ports'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][nmap_udp_ports]" id="data[attributes][nmap_udp_ports]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="0"><?= __('None') ?></option>
                                            <option value="10" selected>10</option>
                                            <option value="100">100</option>
                                            <option value="1000">1000</option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][tcp_ports]', __('Custom TCP Ports'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][udp_ports]', __('Custom UDP Ports'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][timeout]', __('Timeout Per Target (Seconds)'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][exclude_tcp_ports]', __('Exclude TCP Ports'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][exclude_udp_ports]', __('Exclude UDP Ports'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][exclude_ip]', __('Exclude IP Addresses'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][ssh_ports]', __('Check for SSH on these ports'), $dictionary->attributes->create) ?>





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
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[tcp_ports\\]").val('22,135,62078');
        $("#data\\[attributes\\]\\[udp_ports\\]").val('161');
        $("#data\\[attributes\\]\\[ssh_ports\\]").val('22');

        $("#data\\[attributes\\]\\[ping\\]").val('y');
        $("#data\\[attributes\\]\\[service_version\\]").val('n');
        $("#data\\[attributes\\]\\[org_id\\]").val('1');
        $("#data\\[attributes\\]\\[open\\|filtered\\]").val('y');
        $("#data\\[attributes\\]\\[filtered\\]").val('y');
    });
}
</script>
