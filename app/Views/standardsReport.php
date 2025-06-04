<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/lang.php';

// echo __('Edited By') . $resource->edited_by . '<br>';
// echo '<pre>' . json_encode($resource) . '</pre>';
// echo '<pre>' . json_encode($orgs) . '</pre>';
// echo '<pre>' . json_encode($included) . '</pre>';


?>

<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Open-AudIT">
        <meta name="author" content="Mark Unwin">
        <link rel="shortcut icon" href="<?= base_url('favicon.png') ?>" type="image/x-icon">
        <title>Open-AudIT</title>

        <link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
        <link href="<?= base_url('css/open-audit.css') ?>" rel="stylesheet">
    </head>
    <!-- Need d-flex flex-column h-100 to hold footer in place -->
    <body class="d-flex flex-column h-100" style="font-size: 80%;">
        <?php
        $controls = array('Organizational Controls', 'People Controls', 'Physical Controls', 'Technological Controls');
        foreach ($controls as $control) {
            ?>

        <h1 style="padding-top: 50px;"><?= __($control) ?></h1>
        <table class="table" style="width:100%">
            <thead>
                <tr>
                    <th style="width:10%">Policy Section</th>
                    <th style="width:50%">Policy Name</th>
                    <th style="width:10%" class="text-center">Responsibility</th>
                    <th style="width:10%" class="text-center">Result</th>
                    <th style="width:10%" class="text-center">Maturity Level</th>
                    <th style="width:10%" class="text-center">Edited Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($included['standards_results'] as $item) {
                if (strtolower($item->attributes->{'standards_policies.class'}) !== strtolower($control)) {
                    continue;
                }
                if ($item->attributes->result === '') {
                    $item->attributes->result = 'unanswered';
                }
                if ($item->attributes->result === 'pass') {
                    $item->attributes->result = '<span class="text-success">' . $item->attributes->result . '</span>';
                } else if ($item->attributes->result === 'fail') {
                    $item->attributes->result = '<span class="text-danger">' . $item->attributes->result . '</span>';
                } else if ($item->attributes->result === 'unanswered') {
                    $item->attributes->result = '<span class="text-danger">' . $item->attributes->result . '</span>';
                } else if ($item->attributes->result === 'not applicable') {
                    $item->attributes->result = '<span class="text-success">' . $item->attributes->result . '</span>';
                } else {
                    $item->attributes->result = '<span class="text-warning">' . $item->attributes->result . '</span>';
                }

                if ($item->attributes->maturity_level === 'incomplete') {
                    $item->attributes->maturity_level = '<span class="text-warning">' . $item->attributes->maturity_level . '</span>';
                }
                if ($item->attributes->maturity_level === 'incomplete' and ($item->attributes->result === 'fail' or $item->attributes->result === 'unanswered')) {
                    $item->attributes->maturity_level = '<span class="text-danger">' . $item->attributes->maturity_level . '</span>';
                }
                if ($item->attributes->maturity_level === 'performed' or $item->attributes->maturity_level === 'managed') {
                    $item->attributes->maturity_level = '<span class="text-primary">' . $item->attributes->maturity_level . '</span>';
                }
                if ($item->attributes->maturity_level === 'established' or $item->attributes->maturity_level === 'predictable' or $item->attributes->maturity_level === 'optimized') {
                    $item->attributes->maturity_level = '<span class="text-success">' . $item->attributes->maturity_level . '</span>';
                }

                ?>
                <tr>
                    <td><span style="display:none;"><?= $item->attributes->{'standards_policies.section_padded'} ?></span><?= $item->attributes->{'standards_policies.section'} ?></td>
                    <td><?= $item->attributes->{'standards_policies.name'} ?></td>
                    <td class="text-center"><?= $item->attributes->responsibility ?></td>
                    <td class="text-center"><?= $item->attributes->result ?></td>
                    <td class="text-center"><?= $item->attributes->maturity_level ?></td>
                    <td class="text-center"><?php $date = new DateTime($item->attributes->edited_date); echo $date->format('Y-m-d'); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>

    </body>
</html>