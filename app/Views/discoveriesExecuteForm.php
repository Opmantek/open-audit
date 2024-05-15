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
                            <form class="form-horizontal" method="post" action="<?= url_to('discoveriesExecuteCollector', $meta->id) ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][uuid]"><?= __('Collector'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][uuid]" id="data[attributes][uuid]" required>
                                            <option value="<?= $config->uuid ?>"><?= __('Localhost') ?></option>
                                            <?php foreach ($included['collectors'] as $collector) { ?>
                                                <?php if ($collector->attributes->type === 'collector') { ?>
                                            <option value="<?= $collector->attributes->uuid ?>"><?= $collector->attributes->name ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <h4 class="text-center"><?= __('About') ?></h4><br>
                                <p><?= __('As you have Collectors registered, please choose where to execute this discovery.') ?></p>
                                <p><?= __('If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
