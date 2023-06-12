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
                        <div class="col-12">
                            <?= $data ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>