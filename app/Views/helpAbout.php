<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$db = db_connect();
$operating_system = $config->server_platform;
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="icon-life-buoy oa-icon"></span><?= __('About') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <?php if (!empty($meta->id)) { ?>
                            <h1><?= ucwords(str_replace('_', ' ', $meta->id)) ?></h1>
                            <?php } ?>
                            <br>


                <?= __('You are running version') ?>: <?= $config->display_version ?> of Open-AudIT.<br>
                <?= __('Your Host is') ?>: <?= php_uname('n'); ?>, and it's OS is <?php echo $operating_system; ?>.<br>
                <?= __('Your database platform is') ?>: <?= $db->getPlatform() . " (" . __('version') . " " . $db->getVersion() . ")"; ?>.<br>
                <?= __('Your web server is') ?>: <?= getenv("SERVER_SOFTWARE") ?> .<br>
                <?= __('Your PHP version is') ?>: <?= phpversion(); ?> <?= __('and its current time is') ?> <?= $config->timestamp ?>.<br><br>
                <?php
                if (!extension_loaded('snmp')) {
                    echo "<i>" . __('You do not have the PHP SNMP extension installed. This extension is highly recommended.') . "</i><br>";
                }
                if (!extension_loaded('mbstring')) {
                    echo "<i>" . __('You do not have the PHP MBString extension installed. This extension is required.') . "</i><br>";
                }
                ?>

                <br><br>
                <p>
                    <?= __('Most of Open-AudIT is Licensed with GNU AGPL.') ?><br>
                    <?= __('Written in the PHP scripting language.') ?><br>
                    <?= __('Uses the CodeIgniter PHP Framework.') ?><br>
                    <?= __('Various') ?> <a href="<?= url_to('appLicenses') ?>"><?= __('licenses') ?></a> <?= __('are used.') ?><br>
                </p>
                <br>
                <?= __('Please visit the homepage at') ?> <a target="_blank" href="http://www.open-audit.org">http://www.open-audit.org</a> <?= __('or the GitHub page at') ?> <a target="_blank" href="https://github.com/Opmantek/open-audit">https://github.com/Opmantek/open-audit</a>.<br>
                <?= __('Consulting, implementation and other services are available through') ?> <a target="_blank" href="https://www.firstwave.com">Firstwave</a>.<br><br>
                <?= __('We hope you find Open-AudIT as useful as we do.') ?><br><br><br>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="vertical-align: middle;"><a href="http://www.fsf.org/licensing/licenses/agpl.html"><img src='<?= base_url() ?>images/logo-agpl.png' style='width:120px' alt=''/></a></td>
                                        <td style="vertical-align: middle;"><a href="http://www.php.net"><img src='<?= base_url() ?>images/logo-php.png' style='width:120px' alt=''/></a></td>
                                        <td style="vertical-align: middle;"><a href="http://www.codeigniter.com"><img src='<?= base_url() ?>images/logo-code_igniter.png' style='width:120px' alt=''/></a></td>
                                        <td style="vertical-align: middle;"><a href="http://jquery.com/"><img src='<?= base_url() ?>images/logo-jquery.png' style='width:120px' alt=''/></a></td>
                                        <td style="vertical-align: middle;"><a href="http://www.w3.org/"><img src='<?= base_url() ?>images/logo-w3c.png' style='width:120px' alt=''/></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
