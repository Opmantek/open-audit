<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-chart-bar oa-icon"></span><?= __('Resources') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $i = 0;
                    foreach ($included['collections'] as $name => $collection) {
                        $i++;
                        $color = 'darkgrey';
                        $link = '#';
                        $pill = 'background:dimgrey';
                        $badge = 'color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important;';
                        $toast = 'toast' . $collection->edition;
                        if ($collection->edition === 'Community') {
                            $link = url_to($name . 'Collection');
                            $color = 'dimgrey';
                            $pill = 'background:#3bafda';
                            $badge = 'color:#3bafda;';
                            $toast = '';
                        }
                        if ($collection->edition === 'Professional' and $config->product === 'professional' or $config->product === 'enterprise') {
                            $link = url_to($name . 'Collection');
                            $color = 'dimgrey';
                            $pill = 'background:#3bafda';
                            $badge = 'color:#3bafda;';
                            $toast = '';
                        }
                        if ($collection->edition === 'Enterprise' and $config->product === 'enterprise') {
                            $link = url_to($name . 'Collection');
                            $color = 'dimgrey';
                            $pill = 'background:#3bafda';
                            $badge = 'color:#3bafda;';
                            $toast = '';
                        }
                        if ($collection->name === 'Discovery Log') {
                            $link = 'discoveries';
                        }
                        if ($collection->name === 'Baselines Policies') {
                            $collection->name = 'Base Policies';
                        }
                        if ($collection->name === 'Baselines Results') {
                            $collection->name = 'Base Results';
                        }
                        ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= $link ?>" class="position-relative <?= $toast ?>">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $name ?>.svg" alt="<?= $name ?>">
                                    <br><?= __($collection->name) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="<?= $pill ?>"><?= $collection->count ?></span>
                                </a>
                            </div>
                        </div>
                        <?php
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo "</div><br><div class=\"row\">";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Execute') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?= collection_button_execute($meta->collection, intval($item->id)) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'orgs.name' and !empty($item->attributes->{'orgs.id'})) {
                                            echo "<td><a href=\"" . url_to($meta->collection . 'Collection') . "?" . $meta->collection . ".org_id=" . $item->attributes->{'orgs.id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete(intval($item->id)) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
