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

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]">
                                            <option value="active directory"><?= __('Active Directory'); ?></option>
                                            <?php if ($config->product === 'enterprise') { ?>
                                            <option value="seed"><?= __('Device Seed'); ?></option>
                                            <?php } ?>
                                            <option value="subnet" selected><?= __('Subnet'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div id="subnet">
                                <?= create_text_field('data[attributes][subnet]', __('Subnet'), $dictionary->attributes->create) ?>
                                </div>

                                <div id="ad" style="display:none;">
                                <?= create_text_field('data[attributes][ad_server]', __('Active Directory Server'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][ad_domain]', __('Active Directory Domain'), $dictionary->attributes->create) ?>
                                </div>

                                <div id="seed" style="display:none;">
                                <?php if ($config->product === 'enterprise') { ?>
                                    <?= create_text_field('data[attributes][seed_ip]', __('Device Seed IP'), $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][seed_restrict_to_subnet]', __('Restrict to Subnet'), [], $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][seed_restrict_to_private]', __('Restrict to Private'), [], $dictionary->attributes->create) ?>
                                <?php } ?>
                                </div>

                                <?php
                                $disabled = 'disabled';
                                if ($config->product === 'enterprise' or $config->product === 'professional') {
                                    $disabled = '';
                                } ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][scan_options][id]"><?= __('Discovery Options'); ?></label>
                                        <select class="form-select" name="data[attributes][scan_options][id]" id="data[attributes][scan_options][id]" <?= $disabled ?>>
                                        <?php foreach ($included['discovery_scan_options'] as $option) {
                                            echo "<option value=\"" . $option->id . "\">" . $option->attributes->name . "</option>\n";
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <?= create_select('data[attributes][devices_assigned_to_org]', __('Assign Devices to Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][devices_assigned_to_location]', __('Assign Devices to Location'), $included['locations'], $dictionary->attributes->create) ?>

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
                                <?php $attributes = array('name', 'subnet', 'org_id', 'type', 'devices_assigned_to_org', 'devices_assigned_to_location', 'ad_server', 'ad_domain'); ?>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    if (in_array($key, $attributes)) {
                                        echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                    }
                                } ?>
                                <br><h4 class="text-center">Discovery Options</h4><br>
                                <p>
                                    Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br>
                                    <strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/>

                                    <strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/>

                                    <strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/>

                                    <strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An 'open|filtered' port is considered open. A 'filtered' port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/>

                                    <strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/>

                                    <strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An 'open|filtered' port is considered open. A 'filtered' port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/>

                                    <strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An 'open|filtered' port is considered open. A 'filtered' port is considered open (and will trigger device detection). Use polite timing.<br/><br/>

                                    <strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br>
                                </p>
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
        <?php if ($config->product === 'enterprise') { ?>
            $("#data\\[attributes\\]\\[seed_restrict_to_subnet\\]").val('y');
            $("#data\\[attributes\\]\\[seed_restrict_to_private\\]").val('y');
        <?php } ?>

        $("#data\\[attributes\\]\\[require_port\\]").val('n');


        $("#data\\[attributes\\]\\[scan_options\\]\\[id\\]").val(<?= $config->discovery_default_scan_option ?>);
        $("#data\\[attributes\\]\\[devices_assigned_to_org\\]").find('option').get(0).remove();
        $("#data\\[attributes\\]\\[devices_assigned_to_org\\]").append($('<option>', { value: '', text: ''}));
        $("#data\\[attributes\\]\\[devices_assigned_to_org\\]").val("");
        $("#data\\[attributes\\]\\[devices_assigned_to_location\\]").find('option').get(0).remove();
        $("#data\\[attributes\\]\\[devices_assigned_to_location\\]").append($('<option>', { value: '', text: ''}));
        $("#data\\[attributes\\]\\[devices_assigned_to_location\\]").val("");


        $('#data\\[attributes\\]\\[type\\]').change(function() {
            var $type = $(this).val();
            if ($type == "subnet") {
                $("#ad").css("display", "none");
                $("#seed").css("display", "none");
                $("#subnet").css("display", "block");
            } else if ($type == "active directory") {
                $("#ad").css("display", "block");
                $("#seed").css("display", "none");
                $("#subnet").css("display", "none");
            } else if ($type == "seed") {
                $("#ad").css("display", "none");
                $("#seed").css("display", "block");
                $("#subnet").css("display", "block");
            }
        });

    });
}
</script>
