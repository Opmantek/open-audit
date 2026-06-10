<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
include 'shared/collection_functions.php';
$self_update = $update;
if ($resource->id === $user->id) {
    $self_update = true;
}
$path = 'c:\\xampp\\open-audit\\app\\Views\\lang';
if (php_uname('s') !== 'Windows NT') {
    $path = '/usr/local/open-audit/app/Views/lang';
}
$files = array_diff(scandir($path), array('.', '..', '.DS_Store'));

$lang = [
    'sq' => 'Albanian',
    'ar' => 'Arabic',
    'az' => 'Azerbaijani',
    'bg' => 'Bulgarian',
    'zh-CN' => 'Chinese',
    'cs' => 'Czech',
    'da' => 'Danish',
    'nl' => 'Dutch',
    'en' => 'English',
    'eo' => 'Esperanto',
    'et' => 'Estonian',
    'fi' => 'Finnish',
    'fr' => 'French',
    'de' => 'German',
    'el' => 'Greek',
    'hi' => 'Hindi',
    'hu' => 'Hungarian',
    'id' => 'Indonesian',
    'ga' => 'Irish',
    'it' => 'Italian',
    'ja' => 'Japanese',
    'ko' => 'Korean',
    'lv' => 'Latvian',
    'lt' => 'Lithuanian',
    'pl' => 'Polish',
    'pa' => 'Punjabi',
    'ru' => 'Russian',
    'es' => 'Spanish',
    'tr' => 'Turkish',
    'uk' => 'Ukrainian',
];

?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('full_name', $resource->full_name, $dictionary->columns->full_name, $self_update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                            <?= ''//read_field('password', '', $dictionary->columns->password, $self_update, '', '', '', 'password', $meta->collection) ?>
                            <?= read_field('email', $resource->email, $dictionary->columns->email, $self_update, '', '', '', '', $meta->collection) ?>
                            <?php
                            $value = $resource->devices_default_display_columns;
                            if (empty($value)) {
                                $value = __('Please set using') . ' ' . __('Manage') . ' -> ' . __('Devices') . ' -> ' . __('List Devices') . '.';
                            }
                            ?>
                            <?= read_field('devices_default_display_columns', $resource->devices_default_display_columns, $dictionary->columns->devices_default_display_columns, $update, '', '', $value, '', $meta->collection) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'lang', $dictionary->columns->lang, 'Language') ?>
                                    <div class="input-group">
                                        <select class="form-select" id="lang" name="lang" data-original-value="<?= $resource->lang ?>" disabled>
                                            <?php 
                                            if (empty($lang[$resource->lang])) {
                                                echo "<option value='" . $resource->lang . "' selected>" . $resource->lang . "</option>";
                                            }
                                            foreach ($lang as $key => $value) {
                                                $fileName = $key === 'en' ? 'default' : $key;
                                                if (file_exists($path . '/' . $fileName . '.php')) {
                                                    echo '<option value="' . $key . '">' . __($value) . ' (' . $value . ')</option>';
                                                } else {
                                                    log_message('debug', $path . '/' . $fileName . '.php does not exist');
                                                }
                                            }
                                            ?>
                                        </select>
                                        <?php if ($self_update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="lang" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'toolbar_style', $dictionary->columns->toolbar_style) ?>
                                    <div class="input-group">
                                        <select class="form-select" id="toolbar_style" name="toolbar_style" data-original-value="<?= $resource->toolbar_style ?>" disabled>
                                        <option value='icontext'><?php echo __('Icon and Text'); ?></option>
                                        <option value='icon'><?php echo __('Icon'); ?></option>
                                        <option value='text'><?php echo __('Text'); ?></option>
                                        </select>
                                        <?php if ($self_update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="toolbar_style" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="toolbar_style" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'list_table_format', $dictionary->columns->list_table_format, 'Table Sizing') ?>
                                    <div class="input-group">
                                        <select class="form-select" id="list_table_format" name="list_table_format" data-original-value="<?= $resource->list_table_format ?>" disabled>
                                        <option value=''><?= __('Standard') ?></option>
                                        <option value='compact'><?= __('Compact') ?></option>
                                        </select>
                                        <?php if ($self_update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="list_table_format" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="list_table_format" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="list_table_format" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'roles', $dictionary->columns->roles) ?>
                                    <div class="input-group">
                                     <select multiple size="6" class="form-select" id="roles" name="roles" disabled>
                                        <?php foreach ($included as $role) {
                                            if ($role->type === 'roles') {
                                                $selected = '';
                                                foreach ($resource->roles as $user_role) {
                                                    if ($role->attributes->name === $user_role) {
                                                        $selected = 'selected';
                                                    }
                                                } ?>
                                                <option value="<?= $role->attributes->name ?>" <?= $selected ?>><?= $role->attributes->name ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="roles" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="roles" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'orgs', $dictionary->columns->orgs) ?>
                                    <div class="input-group">
                                     <select multiple size="6" class="form-select" id="orgs" name="orgs" disabled>
                                        <?php foreach ($orgs as $org) {
                                            $selected = '';
                                            if (in_array(intval($org->id), $resource->orgs)) {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="' . $org->id . "\" $selected >" . __($org->attributes->name) . "</option>\n";
                                        } ?>
                                    </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="orgs" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="orgs" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="orgs" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <?php // TODO - dashboard and default display columns ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>

                            <div class="row pt-3">
                                <div class="offset-2 col-8 position-relative">
                                    <hr class="border-1 border-top" />

                                    <div class="row" id="header_row_current_password">
                                        <div class="col-10 clearfix">
                                            <label for="current_password" class="form-label" title="Current Password">Current Password</label>
                                        </div>
                                        <div class="col-2">
                                            <div class="float-end">
                                                <a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#header_row_current_password" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="&lt;code&gt;users.password&lt;/code&gt;&lt;br&gt;Enter your current password in order to change it."><i class="icon-circle-question-mark" style="color:#74C0FC;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input id="current_password" type="password" class="form-control" value="" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-3">
                                <div class="offset-2 col-8 position-relative">
                                    <div class="row" id="header_row_new_password">
                                        <div class="col-10 clearfix">
                                            <label for="new_password" class="form-label" title="New Password">New Password</label>
                                        </div>
                                        <div class="col-2">
                                            <div class="float-end">
                                                <a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#header_row_new_password" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="&lt;code&gt;users.password&lt;/code&gt;&lt;br&gt;Enter a new password."><i class="icon-circle-question-mark" style="color:#74C0FC;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input id="new_password" type="password" class="form-control" value="" disabled="" placeholder="">
                                        <div class="float-end">
                                            <button id="save-password-btn" class="btn btn-outline-success ms-2" disabled=""><span class="icon-check"></span></button>
                                        </div>
                                    </div>
                                    <div class="password-meter mb-5">
                                        <div class="meter-section rounded me-2"></div>
                                        <div class="meter-section rounded me-2"></div>
                                        <div class="meter-section rounded me-2"></div>
                                        <div class="meter-section rounded"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<style {csp-style-nonce}>
    #save-password-btn:disabled {
        border-color: #6c757d !important;
        color: #6c757d !important;
        background-color: transparent;
    }

    .password-meter {
        display: flex;
        height: 5px;
        margin-top: 10px;
    }

    .meter-section {
        flex: 1;
        background-color: #ddd;
    }

    .weak {
        background-color: #ff4d4d;
    }

    .medium {
        background-color: #ffd633;
    }

    .strong {
        background-color: #00b300;
    }

    .very-strong {
        background-color: #009900;
    }
</style>

<script {csp-script-nonce}>
    function updatePasswordMeter(password) {
        var meterSections = $('.meter-section');
        var strength = calculatePasswordStrength(password);

        meterSections.removeClass('weak', 'medium', 'strong', 'very-strong');

        if (strength >= 1) {
            meterSections.eq(0).addClass('weak');
        }
        if (strength >= 2) {
            meterSections.eq(1).addClass('medium');
        }
        if (strength >= 3) {
            meterSections.eq(2).addClass('strong');
        }
        if (strength >= 4) {
            meterSections.eq(3).addClass('very-strong');
        }
    }

    function calculatePasswordStrength(password) {
        var lengthWeight = 0.2;
        var uppercaseWeight = 0.5;
        var lowercaseWeight = 0.5;
        var numberWeight = 0.7;
        var symbolWeight = 1;
        var strength = 0;

        strength += password.length * lengthWeight;

        if (/[A-Z]/.test(password)) {
            strength += uppercaseWeight;
        }

        if (/[a-z]/.test(password)) {
            strength += lowercaseWeight;
        }

        if (/\d/.test(password)) {
            strength += numberWeight;
        }

        if (/[^A-Za-z0-9]/.test(password)) {
            strength += symbolWeight;
        }

        return strength;
    }
window.onload = function () {
    $(document).ready(function() {
        $("#lang").val("<?= esc($resource->lang, 'js') ?>");
        $("#toolbar_style").val("<?= esc($resource->toolbar_style, 'js') ?>");
        $("#list_table_format").val("<?= esc($resource->list_table_format, 'js') ?>");

        $('#current_password').on('input', function() {
            if ($(this).val() !== '') {
                $('#new_password').attr('disabled', false);
            } else {
                $('#new_password').attr('disabled', true);
                $('#new_password').val('');
            }
        });

        $('#new_password').on('input', function() {
            var password = $(this).val()
            if (password !== '') {
                $('#save-password-btn').attr('disabled', false);
            } else {
                $('#save-password-btn').attr('disabled', true);
            }
            updatePasswordMeter(password);
        });

        $('#save-password-btn').on('click', function() {
            $(this).attr('disabled', true);

            var currentPassword = $('#current_password').val();
            var newPassword = $('#new_password').val();
            var payload = {
                data: {
                    id: "<?php echo esc($meta->id, 'js'); ?>",
                    type: "<?php echo esc($meta->collection, 'js'); ?>",
                    attributes: {
                        current_password: currentPassword,
                        new_password: newPassword
                    }
                }
            };

            $.ajax({
                type: 'PATCH',
                url: window.location.href,
                contentType: 'application/json',
                data: {data: JSON.stringify(payload)},
                success: function (data) {
                    $('#liveToastSuccess-header').text('Update Succeeded');
                    $('#liveToastSuccess-body').text('password has been updated.');
                    $('.toast-success').each(function() {
                        $(this).toast('show');
                    });
                },
                error: function (xhr) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.message) {
                        $('#liveToastFailure-header').text('Update Failed');
                        $('#liveToastFailure-body').text(response.message);
                        $('.toast-failure').each(function() {
                            $(this).toast('show');
                        });
                    }
                },
                complete: function () {
                    $('#current_password').val('');
                    $('#new_password').val('');
                }
            });
        });
    });
}
</script>
