<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, 'Support') ?>
                </div>
                <div class="card-body">
                    <br />
                    <div class="row">
                        <div class="col-6">

                            <div class="card">
                                <div class="card-header">
                                    <?= __('Application') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->app);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Stats') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->stats);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Operating System') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->os);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Database') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->database);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Webserver') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->webserver);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('PHP') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->php);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Prerequisites') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->prereq);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Permissions') ?>
                                </div>
                                <div class="card-body">
                                    <?php echo "<pre>";
                                    print_r($data[0]->permissions);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <?= __('Configuration') ?>
                                </div>
                                <div class="card-body">
                                    <?php  echo "<pre>";
                                    print_r($data[0]->config);
                                    echo "</pre>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script>
window.onload = function () {
    $(document).ready(function() {
        $("#button_export_csv").remove();
        $("#button_help").remove();
    });
}
</script>
