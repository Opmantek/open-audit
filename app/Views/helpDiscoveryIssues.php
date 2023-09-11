<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('Discovery Issues') ?></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <?php include 'discovery_issues/issue_' . $meta->id . '.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
