<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_select('ping', $resource->ping, $dictionary->columns->ping, $update, __('Must Respond to Ping')) ?>
                            <?= read_select('service_version', $resource->service_version, $dictionary->columns->service_version, $update, __('Use Service Version Detection')) ?>
                            <?= read_select('open|filtered', $resource->{'open|filtered'}, $dictionary->columns->{'open|filtered'}, $update, __('Consider open|filtered Ports Open')) ?>
                            <?= read_select('filtered', $resource->filtered, $dictionary->columns->filtered, $update, __('Consider filtered Ports Open')) ?>


                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="timing" class="form-label"><?= __('Timing') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="timing" name="timing" data-original-value="<?= $resource->timing ?>" disabled>
                                            <option value="0" <?php if ($resource->{'timing'} == '0') { ?> selected <?php } ?>><?= __('Paranoid') ?></option>
                                            <option value="1" <?php if ($resource->{'timing'} == '1') { ?> selected <?php } ?>><?= __('Sneaky') ?></option>
                                            <option value="2" <?php if ($resource->{'timing'} == '2') { ?> selected <?php } ?>><?= __('Polite') ?></option>
                                            <option value="3" <?php if ($resource->{'timing'} == '3') { ?> selected <?php } ?>><?= __('Normal') ?></option>
                                            <option value="4" <?php if ($resource->{'timing'} == '4') { ?> selected <?php } ?>><?= __('Aggressive') ?></option>
                                            <option value="5" <?php if ($resource->{'timing'} == '5') { ?> selected <?php } ?>><?= __('Insane') ?></option>
                                        </select>
                                        <?php if ($update and $config->product === 'enterprise') { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="timing" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                            <div data-attribute="timing" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                            <div data-attribute="timing" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="timing" data-dictionary="<?= $dictionary->columns->timing ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="nmap_tcp_ports" class="form-label"><?= __('Top Nmap TCP Ports') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="nmap_tcp_ports" name="nmap_tcp_ports" data-original-value="<?= $resource->nmap_tcp_ports ?>" disabled>
                                            <option value="0" <?php if ($resource->{'nmap_tcp_ports'} == '0') { ?> selected <?php } ?>><?= __('None') ?></option>
                                            <option value="10" <?php if ($resource->{'nmap_tcp_ports'} == '10') { ?> selected <?php } ?>>10</option>
                                            <option value="100" <?php if ($resource->{'nmap_tcp_ports'} == '100') { ?> selected <?php } ?>>100</option>
                                            <option value="1000" <?php if ($resource->{'nmap_tcp_ports'} == '1000') { ?> selected <?php } ?>>1000</option>
                                        </select>
                                        <?php if ($update and $config->product === 'enterprise') { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="nmap_tcp_ports" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                            <div data-attribute="nmap_tcp_ports" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                            <div data-attribute="nmap_tcp_ports" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="nmap_tcp_ports" data-dictionary="<?= $dictionary->columns->nmap_tcp_ports ?>"><span><br></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="nmap_udp_ports" class="form-label"><?= __('Top Nmap UDP Ports') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="nmap_udp_ports" name="nmap_udp_ports" data-original-value="<?= $resource->nmap_udp_ports ?>" disabled>
                                            <option value="0" <?php if ($resource->{'nmap_udp_ports'} == '0') { ?> selected <?php } ?>><?= __('None') ?></option>
                                            <option value="10" <?php if ($resource->{'nmap_udp_ports'} == '10') { ?> selected <?php } ?>>10</option>
                                            <option value="100" <?php if ($resource->{'nmap_udp_ports'} == '100') { ?> selected <?php } ?>>100</option>
                                            <option value="1000" <?php if ($resource->{'nmap_udp_ports'} == '1000') { ?> selected <?php } ?>>1000</option>
                                        </select>
                                        <?php if ($update and $config->product === 'enterprise') { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="nmap_udp_ports" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                            <div data-attribute="nmap_udp_ports" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                            <div data-attribute="nmap_udp_ports" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="nmap_udp_ports" data-dictionary="<?= $dictionary->columns->nmap_udp_ports ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?= read_field('tcp_ports', $resource->tcp_ports, $dictionary->columns->tcp_ports, $update, __('Custom TCP Ports')) ?>
                            <?= read_field('udp_ports', $resource->udp_ports, $dictionary->columns->udp_ports, $update, __('Custom UDP Ports')) ?>
                            <?= read_field('timeout', $resource->timeout, $dictionary->columns->timeout, $update, __('Timeout Per Target (Seconds)')) ?>
                            <?= read_field('exclude_tcp_ports', $resource->exclude_tcp_ports, $dictionary->columns->exclude_tcp_ports, $update, __('Exclude TCP Ports')) ?>
                            <?= read_field('exclude_udp_ports', $resource->exclude_udp_ports, $dictionary->columns->exclude_udp_ports, $update, __('Exclude UDP Ports')) ?>
                            <?= read_field('exclude_ip', $resource->exclude_ip, $dictionary->columns->exclude_ip, $update, __('Exclude IP Addresses')) ?>
                            <?= read_field('ssh_ports', $resource->ssh_ports, $dictionary->columns->ssh_ports, $update, __('Check for SSH on these ports')) ?>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($dictionary->columns as $key => $value) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
