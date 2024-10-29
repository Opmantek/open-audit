<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$notes = '';
if (!empty($config->feature_agents_advanced) and $config->feature_agents_advanced === 'y') {
    $request = \Config\Services::request();
    $uri = $request->getUri();
    $notes = '<strong>WARNING</strong>: Enabling advanced agents means an agent can be instructed to download any file and execute any command. This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for ' . $uri->getHost();
    if (!$request->isSecure()) {
        $notes .= '. You do not have https enabled. Advanced agents will not run commands or download files.';
    }
}
?>
        <main class="container-fluid">
            <?php if ($notes !== '') { ?>
            <div class="container-fluid">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $notes ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
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
            <?php
            if (count($data) === 1) {
                @include 'help/' . $meta->collection . '.php';
                echo collection_intro_header('Introduction to ' . $meta->heading, $meta->collection, $meta->icon, @$intro, @$body);
            } else { ?>
            <br>
            <div class="card">
                <div class="card-header" style="height:46px;"><?= __('Installing') ?></div>
                <div class="card-body">
                    <p>Have your user open a command prompt (using 'Run as Administrator'). Paste the below into the prompt to download and run the Agent.<br><code>powershell.exe Invoke-WebRequest -UseBasicParsing <?= base_url()?>index.php/agents/windows/download -Outfile agent.ps1 -Method GET && powershell.exe -executionpolicy bypass -file .\agent.ps1 -install -debug 1</code><br><br>When complete, close the command window and you're done!</p>
                    <p><strong>NOTE</strong>: If your user does not have 'Run as Administrator' rights, they can still download the agent and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.<br><code>powershell.exe Invoke-WebRequest -UseBasicParsing <?= base_url()?>index.php/agents/windows/download -Outfile agent.ps1 -Method GET && powershell.exe -executionpolicy bypass -file .\agent.ps1 -debug 1</code><br></p>
                    <p><strong>NOTE #2</strong>: If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the id of the Agents entry). When this Agent is installed, it will check-in with the server and <strong>only</strong> check that one individual Agent entry's attributes (tests and actions). This may be useful if you're an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.<br>
                    <code>powershell.exe Invoke-WebRequest -UseBasicParsing <?= base_url() ?>index.php/agents/$id/download -Outfile agent.ps1 -Method GET</code><br><br>
                </div>
            </div>
            <?php } ?>
        </main>
