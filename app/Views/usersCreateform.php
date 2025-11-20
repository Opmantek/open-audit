<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
include 'shared/common_functions.php';

$path = 'c:\\xampp\\open-audit\\app\\Views\\lang';
if (php_uname('s') !== 'Windows NT') {
    $path = '/usr/local/open-audit/app/Views/lang';
}
$files = array_diff(scandir($path), array('.', '..', '.DS_Store'));

$lang["sq"] = "Albanian";
$lang["ar"] = "Arabic";
$lang["az"] = "Azerbaijani";
$lang["bg"] = "Bulgarian";
$lang["zh"] = "Chinese";
$lang["cs"] = "Czech";
$lang["da"] = "Danish";
$lang["nl"] = "Dutch";
$lang["en"] = "English";
$lang["eo"] = "Esperanto";
$lang["et"] = "Estonian";
$lang["de"] = "German";
$lang["el"] = "Greek";
$lang["fi"] = "Finnish";
$lang["fr"] = "French";
$lang["ga"] = "Irish";
$lang["hi"] = "Hindi";
$lang["hu"] = "Hungarian";
$lang["id"] = "Indonesian";
$lang["it"] = "Italian";
$lang["ja"] = "Japanese";
$lang["ko"] = "Korean";
$lang["lt"] = "Lithuanian";
$lang["lv"] = "Latvian";
$lang["ms"] = "Malay";
$lang["nb"] = "Norwegian";
$lang["fa"] = "Persian";
$lang["pb"] = "Portuguese (Brazil)";
$lang["pl"] = "Polish";
$lang["pt"] = "Portuguese";
$lang["ro"] = "Romanian";
$lang["ru"] = "Russian";
$lang["sk"] = "Slovak";
$lang["sl"] = "Slovenian";
$lang["es"] = "Spanish";
$lang["sv"] = "Swedish";
$lang["th"] = "Thai";
$lang["tl"] = "Tagalog";
$lang["tr"] = "Turkish";
$lang["uk"] = "Ukrainian";
$lang["ur"] = "Urdu";
$lang["vi"] = "Vietnamese";

?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <input type="hidden" value="1" id="data[attributes][dashboard_id]" name="data[attributes][dashboard_id]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][full_name]', __('Full Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][password]', __('Password'), $dictionary->attributes->create, '', 'password') ?>
                                <?= create_text_field('data[attributes][email]', __('Email'), $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][lang]"><?= __('Language'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][lang]" id="data[attributes][lang]" required>
                                            <option value='en' selected><?= __('English'); ?></option>
                                            <?php foreach ($lang as $key => $value) { ?>
                                            <option value='<?= $key ?>'><?= $value ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][toolbar_style]"><?= __('Toolbar Style'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][toolbar_style]" id="data[attributes][toolbar_style]" required>
                                            <option value=''><?= __('Choose'); ?></option>
                                            <option value='icontext' selected><?= __('Icon and Text'); ?></option>
                                            <option value='icon'><?= __('Icon'); ?></option>
                                            <option value='text'><?= __('Text'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][roles][]"><?= __('Roles'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" multiple size="6" name="data[attributes][roles][]" id="data[attributes][roles][]" required>
                                        <?php foreach ($included['roles'] as $role) { ?>
                                            <option value="<?= $role->attributes->name ?>"><?= $role->attributes->name ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][orgs][]"><?= __('Orgs'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" multiple size="6" name="data[attributes][orgs][]" id="data[attributes][orgs][]" required>
                                        <?php foreach ($included['orgs'] as $org) { ?>
                                            <?php $parent = ($org->id != 1) ? ' (parent: ' . $org->attributes->parent_name . ')' : ''; ?>
                                            <option value="<?= $org->id ?>"><?= $org->attributes->name . $parent ?></option>
                                        <?php } ?>
                                        </select>
                                        <span><?= __('Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).') ?></span>
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
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                <?= fieldsInfoDiv ($dictionary) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
    });
}
</script>
