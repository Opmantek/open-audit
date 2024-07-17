<?php
$logfile = '/usr/local/open-audit/writable/logs/log-' . date('Y-m-d') . '.log';
if (php_uname('s') === 'Windows NT') {
    $logfile = 'c:\\xampp\\open-audit\\writable\\logs\\log-' . date('Y-m-d') . '.log';
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">

    <title><?= lang('Errors.whoops') ?></title>

    <style>
        <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
    </style>
</head>
<body>

    <div class="container text-center">

        <h1 class="headline"><?= lang('Errors.whoops') ?></h1>

        <!-- <p class="lead"><?= lang('Errors.weHitASnag') ?></p> -->

        <p class="lead">Please <a href="mailto:support@firstwave.com">email</a> the file <?= $logfile ?> and (if you can access) the result of the <a href="<?= base_url() ?>support?format=json_data" target="_blank">Support Output<a> along with a description of what you were doing at the time of this error to FirstWave.</p>

    </div>

</body>

</html>
