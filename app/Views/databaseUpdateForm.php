<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, '', $meta->icon, $user, '') ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form class="form-horizontal" id="form_update" method="post" action="<?= url_to('databaseUpdate') ?>">
                                <?= read_field('Open-AudIT Current Version', $data->current_version . ' (' . $config->internal_version . ')', '', '') ?>
                                <?php if (intval($config->internal_version) < intval($config->appVersion)) {
                                    echo read_field('Open-AudIT Upgrade to Version', $data->new_version . ' (' . $config->appVersion . ')', '', '');
                                } ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                    <?php if (intval($config->internal_version) < intval($config->appVersion)) {
                                        if (strpos($user->permissions['database'], 'u') === false) { ?>
                                            <br>
                                            <?= __('The database version and web version are inconsistent.') ?>
                                            <br>
                                            <?= __('Please have an Open-AudIT administrator logon and upgrade the database.') ?>
                                        <?php } else { ?>
                                            <label for="submit" class="form-label">Database Upgrade Required</label>
                                            <div class="input-group">
                                                <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Upgrade'); ?></button>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <br><?= __('No database upgrade required at this time.') ?></span>
                                    <?php } ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <?= read_field('Hostname', $data->hostname, '', '') ?>
                            <?= read_field('OS Name', $data->operating_system, '', '') ?>
                            <?= read_field('Database Driver', $data->database_platform, '', '') ?>
                            <?= read_field('Database Version', $data->database_version, '', '') ?>
                            <?= read_field('Web Server', $data->web_server, '', '') ?>
                            <?= read_field('PHP Version', $data->php_version, '', '') ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>