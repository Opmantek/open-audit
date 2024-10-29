<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include('shared/lang.php');

?>
<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Open-AudIT Community">
        <meta name="author" content="Mark Unwin">
        <link rel="shortcut icon" href="<?= base_url('favicon.png') ?>" type="image/x-icon">
        <title>Open-AudIT</title>

        <!-- JS -->
        <script {csp-script-nonce} src="<?= base_url('js/jquery.min.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/popper.min.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/dataTables.bootstrap5.min.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/fontawesome-all.min.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/fa-v4-shims.js') ?>"></script>
        <script {csp-script-nonce} src="<?= base_url('js/open-audit.js') . '?v=' . time() ?>"></script>

        <!-- CSS -->
        <link href="<?= base_url('css/inter.css') ?>"                     rel="stylesheet">
        <link href="<?= base_url('css/bootstrap.css') ?>"                 rel="stylesheet">
        <link href="<?= base_url('css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('css/font-awesome.css') ?>"              rel="stylesheet">
        <link href="<?= base_url('css/open-audit.css') . '?v=' . time() ?>" rel="stylesheet">

        <script {csp-script-nonce}>
            window.onload = function () {
                $(document).ready(function () {

                    var checkurl = "https://services.opmantek.com/api/versioncheck/Open-AudIT/<?= $config->display_version ?>";
                    $.getJSON(checkurl, function (data) {
                        if(data.status === 1){
                            // console.log("up to date");
                        } else if (data.status === 0){
                            // console.log("request fail");
                        } else {
                            // console.log("out of date");
                            $("#default_text").html("Open-AudIT " + data.version + " was released on " + data.date + ".<br>Download your updated version from <a href=\"https://firstwave.com\">https://firstwave.com</a>.<br>View the release notes on the <a href=\"" + data.releasenotes + "\">wiki</a>.");
                        }
                    });

                    <?php if ($config->device_count === 0) { ?>
                    $("#username").val("admin");
                    $("#password").val("password");
                    <?php } ?>

                    var testWin = navigator.userAgent.match(/Windows NT/i);
                    if (testWin) {
                        $("#script_type").val("windows");
                        $("#go_button").attr("href", "<?= site_url() ?>/scripts/windows/download");
                        $("#go_link").attr("href", "<?= site_url() ?>/scripts/windows/download");
                        $("#go_link").html("<?= site_url() ?>/scripts/windows/download");
                    }

                    var testLin = navigator.userAgent.match(/Linux /i);
                    if (testLin) {
                        $("#go_button").attr("href", "<?= site_url() ?>/scripts/linux/download");
                        $("#go_link").attr("href", "<?= site_url() ?>/scripts/linux/download");
                        $("#go_link").html("<?= site_url() ?>/scripts/linux/download");
                        $("#script_type").val("linux");
                    }

                    var testOsx = navigator.userAgent.match(/Mac OS X/i);
                    if (testOsx) {
                        $("#go_button").attr("href", "<?= site_url() ?>/scripts/osx/download");
                        $("#go_link").attr("href", "<?= site_url() ?>/scripts/osx/download");
                        $("#go_link").html("<?= site_url() ?>/scripts/osx/download");
                        $("#script_type").val("osx");
                    }

                    $( "#script_type" ).change(function() {
                        $("#go_button").attr("href", "<?= site_url() ?>/scripts/" + $(this).val() + "/download");
                        $("#go_link").attr("href", "<?= site_url() ?>/scripts/" + $(this).val() + "/download");
                        $("#go_link").html("<?= site_url() ?>/scripts/" + $(this).val() + "/download");
                    });


                    $(function() {
                        $("#username").trigger("focus");
                    });
                });
            }
        </script>

    </head>
    <body class="d-flex flex-column h-100">
        <br>
        <form class="form-horizontal" id="form" name="form" method="post" action="logon">
            <input type="hidden" name="url" id="url" value="<?= @$_SESSION['url'] ?>" />
            <div class="row">
                <div class="col-8 offset-2 text-center">
                    <br><br>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-12 text-center">
                                        <h1><span class="text-secondary">Open-AudIT</span></h1>
                                    </div>


                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-3 col-6" style="position:relative;">
                                            <label class="form-label text-secondary" for="username">Username</label>
                                            <input class="form-control" type="text" id="username" name="username" />
                                        </div>
                                    </div> 

                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-3 col-6" style="position:relative;">
                                            <label class="form-label text-secondary" for="password">Password</label>
                                            <input class="form-control" type="password" id="password" name="password" />
                                        </div>
                                    </div> 

                                    <?php if (!empty($alert)) { ?>
                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-3 col-6 container-fluid">
                                            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                                <?= $alert ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>


                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-3 col-6" style="position:relative;">
                                            <label class="form-label" for="submit"></label>
                                                <?php $disabled = '';
                                                if (empty($config->internal_version)) {
                                                    $disabled = 'disabled';
                                                }
                                                $class = 'float-center';
                                                if (!empty($methods)) {
                                                    $class = 'float-start';
                                                }
                                                ?>
                                            <button type="submit" class="btn btn-primary <?= $class ?>" id="submit" name="submit" <?= $disabled; ?>>Submit</button>
                                            <?php
                                            if (!empty($methods)) {
                                                foreach ($methods as $method) {
                                                    switch ($method) {
                                                        case 'entra':
                                                            $logo = 'fa-brands fa-microsoft';
                                                            break;

                                                        case 'github':
                                                            $logo = 'fa-brands fa-github';
                                                            break;

                                                        case 'okta':
                                                            $logo = 'fa-solid fa-o';
                                                            break;

                                                        default:
                                                            $logo = '';
                                                            break;
                                                    }
                                                    if ($logo !== '') {
                                                        echo '<a href="' . base_url() . 'index.php/logon/' . $method . '"><button type="button" class="btn btn-primary float-end" style="margin-left:10px;"><i class="' . $logo . '" style="padding-right:10px"></i>Logon with ' . $method . '</button></a>';
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <?php if ($config->device_count === 0) { ?>
                                    <div class="row">
                                        <div class="offset-4 col-4" style="position:relative;">
                                            <div class="well well-sm text-secondary" style="padding:10px; margin:4px; background:#d9edf7;">No devices are in the database.</div>
                                            <div class="well well-sm text-secondary" style="padding:10px; margin:4px; background:#dff0d8;">Initial login credentials are admin / password.</div>
                                            <div class="well well-sm text-secondary" style="padding:10px; margin:4px; background:#f2dede;">Please log in and change these ASAP.</div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <div class="row">
                                        <div class="offset-2 col-8" style="position:relative;">
                                        <br><span id="default_text" class="text-secondary">Don't forget about the Open-AudIT wiki for all your documentation.<br><a target='_blank' href='https://docs.community.firstwave.com/wiki/spaces/OA'>https://docs.community.firstwave.com/wiki/spaces/OA</a></span>
                                        </div>
                                        <span align='center'>
                                            <br>
                                            <button id="audit" name="audit" type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#audit_select"><?= __('Audit My PC') ?></button>
                                            <div class="collapse" id="audit_select">
                                                <div class="row" style="padding-top:16px;">
                                                    <form>
                                                        <div class="offset-4 col-4">
                                                            <div class="input-group">
                                                                <select class="form-select" name="script_type" id="script_type" required>
                                                                    <option value="aix"><?= __('AIX') ?></option>
                                                                    <option value="esxi"><?= __('ESXi') ?></option>
                                                                    <option value="hpux"><?= __('HP-UX') ?></option>
                                                                    <option value="linux"><?= __('Linux') ?></option>
                                                                    <option value="osx"><?= __('MacOS') ?></option>
                                                                    <option value="solaris"><?= __('Solaris') ?></option>
                                                                    <option value="windows"><?= __('Windows') ?></option>
                                                                </select>
                                                                <a href="#" id="go_button" role="button" class="btn btn-success float-end"><?= __('Go') ?></a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <br>
                                                <?= __('The direct link for the script is') ?>&nbsp;<a href="#" id="go_link">#</a><br>
                                                <?php if (stripos(base_url(), 'localhost') !== false or stripos(base_url(), '127.0.0') !== false) {
                                                    echo __('<br><strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.');
                                                } else {
                                                    echo __('You may want to copy and paste this URL in an email to your staff.');
                                                }
                                                ?>
                                            </div>
                                        </span>
                                        <br>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
