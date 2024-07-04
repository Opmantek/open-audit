<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$class = '';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('Application Licenses') ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <?php if (!empty($license)) { ?>
                            <h1 class="text-center"><?= strtoupper($license) ?></h1>
                            <?php } ?>
                            <br>
                            <pre class="<?= $class ?>" style="white-space: pre-wrap;">
<?php if (!empty($license_contents)) { ?>
    <?= $license_contents ?>
<?php } else { ?>
The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.

Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.

Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:
</pre>

<table style="width:100%;">
    <thead>
        <tr>
            <th style="width:50%;"><?= __('Program') ?></th>
            <th><?= __('License') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Open-AudIT</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=agpl">aGPL</a></td>
        </tr>
        <tr>
            <td>Open-AudIT Enterprise / Professional</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=eula">Proprietory</a></td>
        </tr>
        <tr>
            <td>CodeIgniter</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=mit">MIT</a></td>
        </tr>
        <tr>
            <td>Bootstrap</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=mit">MIT</a></td>
        </tr>
        <tr>
            <td>DataTables</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=mit">MIT</a></td>
        </tr>
        <tr>
            <td>jQuery</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=mit">MIT</a></td>
        </tr>
        <tr>
            <td>Popper JS</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=mit">MIT</a></td>
        </tr>
        <tr>
            <td>ApexCharts</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=mit">MIT</a></td>
        </tr>
        <tr>
            <td>Newaita Reborn Icons</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=gpl">GPL</a></td>
        </tr>
        <tr>
            <td>Map Icons</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=cc-sa-3">CC BY SA 3.0</a></td>
        </tr>
        <tr>
            <td>Font Awesome Free</td>
            <td><a href="<?= url_to('appLicenses') ?>?license=font-awesome">SIL Open Font License</a></td>
        </tr>
        <tr>
            <td>HighCharts</td>
            <td>Proprietary. If you want to modify HighCharts you may require a <a target="_blank" href="https://shop.highcharts.com">license</a>, you do not require a HighCharts license to use Firstwave products. License <a href="https://shop.highcharts.com/license" target="_blank">details</a>.</td>
        </tr>
    </tbody>
</table>
<?php } ?>






                        </div>
                    </div>
                </div>
            </div>
        </main>
