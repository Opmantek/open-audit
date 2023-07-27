<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection.'ImportNMIS') ?>" accept-charset="utf-8">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_select('data[attributes][location_id]', __('Assign Devices to Location'), $included['locations'], ['location_id']) ?>
                                <?= create_select('data[attributes][org_id]', __('Assign Devices to Organisation'), $orgs, ['org_id']) ?>
                                <?= create_select('data[attributes][run_discovery]', __('Run Discovery on Devices'), null, ['run_discovery']) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary" aria-label="<?= __('Submit') ?>"><?= __('Submit') ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br>";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br>";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
