<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
@include 'faq/'. $name . '.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa fa-regular fa-circle-question oa-icon"></span><?= __('Frequently Asked Questions') ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <h2><?= $title ?></h2>
                            <br>
                            <div class="row">
                                <?= @$intro ?>
                            </div>

                            <div class="row">
                                <?= @$body ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
