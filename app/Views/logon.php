<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
$header = "
    connect-src 'self' opmantek.com community.opmantek.com services.opmantek.com;
    font-src 'self' fonts.gstatic.com;
    form-action 'self';
    frame-ancestors 'none';
    frame-src 'none';
    img-src 'self' data:;
    manifest-src 'none';
    media-src 'none';
    object-src 'none';
    script-src 'self' 'unsafe-inline' maps.googleapis.com maps.google.com;
    style-src 'self' 'unsafe-inline' fonts.googleapis.com;
    worker-src 'self';
    ";
    # prefetch-src 'self'; # removed as still marked as experimental and not supported in any browsers
    # https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/prefetch-src#browser_compatibility
$header = str_replace(PHP_EOL, "", $header);
header("Content-Security-Policy: {$header}");
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
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
        <script src="<?= base_url('js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('js/popper.min.js') ?>"></script>
        <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('js/dataTables.bootstrap5.min.js') ?>"></script>
        <script src="<?= base_url('js/fontawesome-all.min.js') ?>"></script>
        <script src="<?= base_url('js/fa-v4-shims.js') ?>"></script>
        <script src="<?= base_url('js/open-audit.js') ?>"></script>

        <!-- CSS -->
        <link href="<?= base_url('css/inter.css') ?>"                     rel="stylesheet">
        <link href="<?= base_url('css/bootstrap.css') ?>"                 rel="stylesheet">
        <link href="<?= base_url('css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('css/font-awesome.css') ?>"              rel="stylesheet">
        <link href="<?= base_url('css/open-audit.css') ?>"                rel="stylesheet">

        <script type="text/javascript">
            function audit_my_pc()
            {
                var testWin = navigator.userAgent.match(/Windows NT/i);
                if (testWin) {
                    location.href = "<?= $config->oa_web_folder ?>index.php/util/audit_my_pc/windows";
                }
                var testLin = navigator.userAgent.match(/Linux /i);
                if (testLin) {
                    location.href = "<?= $config->oa_web_folder ?>index.php/util/audit_my_pc/linux";
                }
                var testOsx = navigator.userAgent.match(/Mac OS X/i);
                if (testOsx) {
                    location.href = "<?= $config->oa_web_folder ?>index.php/util/audit_my_pc/osx";
                }
            }
            <?php if (intval($config->device_count) === 0) { ?>
            document.getElementById("username").value = "admin";
            document.getElementById("password").value = "password";
            <?php } ?>
        </script>

    </head>
    <body class="d-flex flex-column h-100" onload="document.form.username.focus();">
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
                                        <h1><img class="rounded-circle border border-white border-0" style="background: white; width:80px; padding-right:20px;" src="<?= base_url('images/Open-AudIT.svg') ?>" alt="Open-AudIT logo"> Open-AudIT</h1>
                                    </div>


                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-5 col-2" style="position:relative;">
                                            <label class="form-label" for="username">Username</label>
                                            <input class="form-control" type="text" id="username" name="username" />
                                        </div>
                                    </div> 

                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-5 col-2" style="position:relative;">
                                            <label class="form-label" for="password">Password</label>
                                            <input class="form-control" type="password" id="password" name="password" />
                                        </div>
                                    </div> 

                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-5 col-2" style="position:relative;">
                                            <label class="form-label" for="submit"></label>
                                                <?php $disabled = '';
                                                if (empty($config->internal_version)) {
                                                    $disabled = 'disabled';
                                                } ?>
                                            <button type="submit" class="btn btn-primary" id="submit" name="submit" <?php echo $disabled; ?>>Submit</button>
                                        </div>
                                    </div>

                                    <?php if (intval($config->device_count) === 0) { ?>
                                    <div class="row">
                                        <div class="offset-5 col-2" style="position:relative;">
                                            <div class="well well-sm" style="padding:10px; margin:4px; background:#d9edf7;">No devices are in the database.</div>
                                            <div class="well well-sm" style="padding:10px; margin:4px; background:#dff0d8;">Initial login credentials are admin / password.</div>
                                            <div class="well well-sm" style="padding:10px; margin:4px; background:#f2dede;">Please log in and change these ASAP.</div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <div class="row">
                                        <div class="offset-2 col-8" style="position:relative;">
                                        <br>Don't forget about the Open-AudIT wiki for all your documentation.<br><a target='_blank' href='https://community.opmantek.com/display/OA/Home'>https://community.opmantek.com/display/OA/Home</a>
                                        </div>
                                        <?php if (!empty($config->default_network_address) and strpos($config->default_network_address, '127.0.0.1') === false and strpos($config->default_network_address, 'localhost') === false and !empty($config->default_network_address)) { ?>
                                        <span align='center'>
                                            <br>
                                            <input type="button" class="btn btn-sm btn-primary" name="audit" id="audit" onclick="audit_my_pc()" value="Audit My PC" />
                                        </span>
                                        <?php } ?>
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
