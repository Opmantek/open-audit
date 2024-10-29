<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
@include 'help/' . $meta->collection . '.php';
$title = ucwords(str_replace('_', ' ', $meta->collection));
$menu = 'Manage';
if (in_array($meta->collection, ['clouds','credentials','discoveries','files','scripts'])) {
    $menu = 'Discover';
}
if ($meta->collection === 'discovery_scan_options') {
    $menu = 'Discover -> Discoveries';
}
$defaults = false;
if (in_array($meta->collection, ['agents', 'attributes', 'configuration', 'dashboards', 'discovery_scan_options', 'fields', 'groups', 'integrations', 'locations', 'orgs', 'packages', 'queries', 'roles', 'rules', 'scripts', 'summaries', 'users', 'widgets'])) {
    $defaults = true;
}
$execute = false;
if (in_array($meta->collection, ['dashboards', 'discoveries', 'groups', 'integrations', 'queries', 'summaries'])) {
    $execute = true;
}
$instance = & get_instance();
$edition = $instance->collections->{$meta->collection}->edition;
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, 'About ' . $title); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <h2><?= __('Introduction') ?></h2>
                            <br>
                            <div class="row">
                                <div class="col-8">
                                    <?= @$intro ?>
                                </div>
                                <div class="col-4 text-center">
                                    <?php
                                    if ($edition === 'Enterprise') { ?>
                                        <button class="btn btn-success"><?= __('Open-AudIT Enterprise') ?></button>
                                    <?php } elseif ($edition === 'Professional') { ?>
                                        <button class="btn btn-primary"><?= __('Open-AudIT Professional') ?></button>
                                    <?php } else { ?>
                                        <button class="btn btn-warning"><?= __('Open-AudIT Community') ?></button>
                                    <?php } ?>
                                    <br><br>
                                    <img class="img-fluid helpImage" src="<?= base_url() . 'images/' . $meta->collection ?>.png" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                </div>
                            </div>

                            <?= @$body ?>

                            <?php if ($meta->collection !== 'components') { ?>
                            <h2><?= __('Creating') ?></h2>
                            <?php if ($meta->collection !== 'collectors') { ?>
                            <p>An entry can be created using the web interface if the current user logged in has a role that contains the <?= $meta->collection ?>::create permission.<br><br>
                                Go to menu: <?= $menu ?> -> <?= $title ?> -> <a href="<?= url_to($meta->collection . 'CreateForm') ?>">Create <?= $title ?></a>. Also can be created from the Attributes View, using the "Create" button.</p>
                            <?php } else { ?>
                            <p>You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.<br></p>
                            <?php } ?>
                            <br>
                            <?php if ($execute) { ?>
                            <h2><?= __('Executing') ?></h2>
                            <p><?= $title ?> have the ability to be executed. On the <?= $title ?> collections and details pages is an icon to execute.</p>
                            <br>
                            <?php } ?>
                            <h2><?= __('View Details') ?></h2>
                            <p>Go to menu: <?= $menu ?> -> <?= $title ?> -> <a href="<?= url_to($meta->collection . 'Collection') ?>">List <?= $title ?></a>.<br><br>
                            You will see a list of <?= $meta->collection ?>. You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.</p>
                            <br>
                            <h2><?= __('Database Schema') ?></h2>
                            <p>The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database -> <a href="<?= url_to('databaseCollection') ?>">List Tables</a>, then clicking on the details button for the table.</p>
                            <br>
                            <h2><?= __('API / Web Access') ?></h2>
                            <p>You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see <a href="<?= url_to('api') ?>">The Open-AudIT API</a> documentation for further details.</p>
                            <br>
                            <?php if ($defaults) { ?>
                                <h2><?= __('Default Items') ?></h2>
                                <p>Shipped are a set of default items. These can be found by going to menu: Help → Defaults → <a href="<?= url_to($meta->collection . 'Defaults') ?>"><?= $title ?></a>.</p>
                                <br>
                            <?php } ?>
                            <?php if ($meta->collection !== 'reports') { ?>
                            <h2><?= __('Database Definition') ?></h2>
                            <div class="table-responsive">
                                <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td><?= __('Name') ?></td>
                                            <td><?= __('Type') ?></td>
                                            <td><?= __('Default') ?></td>
                                            <td><?= __('Max Length') ?></td>
                                            <td><?= __('Primary Key') ?></td>
                                            <td><?= __('Valid Values') ?></td>
                                            <td class="text-center"><?= __('Required') ?> <span style="color: #dc3545;">*</span></td>
                                            <td><?= __('Description') ?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data[0]->attributes->columns as $column) { ?>
                                        <tr>
                                            <td><?= $column->name ?></td>
                                            <td><?= $column->type ?></td>
                                            <td><?= $column->default ?></td>
                                            <td><?= $column->max_length ?></td>
                                            <td><?= $column->primary_key ?></td>
                                            <td><?php
                                            if (!empty($column->values)) {
                                                (str_replace("','", "', '", $column->values));
                                            } ?></td>
                                            <td class="text-center">
                                                <?php if (in_array($column->name, $dictionary->attributes->create)) { ?>
                                                    <span class="fa fa-check text-success"></span>
                                                <?php } ?>
                                            </td>
                                            <?php if (!empty($dictionary->columns->{$column->name})) { ?>
                                                <?php if (is_string($dictionary->columns->{$column->name})) { ?>
                                                <td><?= $dictionary->columns->{$column->name} ?></td>
                                                <?php } else { ?>
                                                <td><pre><?= json_encode($dictionary->columns->{$column->name}) ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td></td>
                                            <?php } ?>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <p><br><span style="color: #dc3545;">*</span>&nbsp;<?= __('Note') ?> - <?= __('This column is required by Open-AudIT to create an item of this type') ?></p>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<div class="modal fade modal-xl" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p><img class="helpImage" src="<?= base_url() . 'images/' . $meta->collection ?>.png"></p>
      </div>
    </div>
  </div>
</div>
