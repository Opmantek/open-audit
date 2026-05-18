<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
<main class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h6 style="padding-top: 10px;">
                <span class="icon-life-buoy oa-icon"></span>
                <?php echo __('Audit My PC'); ?>
            </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="text-center">
                        <button id="audit-button" name="audit" type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#audit-selection">
                            <?= __('Audit My PC') ?>
                        </button>
                        <div id="audit-selection" class="collapse">
                            <div class="row pt-4">
                                <form>
                                    <div class="offset-4 col-4">
                                        <div class="input-group">
                                            <select class="form-select" name="script_type" id="script_type" required>
                                                <option value="aix"><?= __('AIX') ?></option>
                                                <option value="esxi"><?= __('ESXi') ?></option>
                                                <option value="hpux"><?= __('HP-UX') ?></option>
                                                <option value="linux"><?= __('Linux') ?></option>
                                                <option value="osx"><?= __('MacOS') ?></option>
                                                <option value="solaris"><?= __('Solaris') ?></option>
                                                <option value="windows-ps1"><?= __('Windows') ?></option>
                                            </select>
                                            <a href="#" id="go_button" role="button" class="btn btn-success float-end"><?= __('Download') ?></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br>
                            <?= __('The direct link for the script is') ?>&nbsp;<a href="#" id="go_link">#</a><br>
                            <?php if (stripos(base_url(), 'localhost') !== false or stripos(base_url(), '127.0.0') !== false) {
                                echo '<br> ' . __('<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.');
                            } else {
                                echo __('You may want to copy and paste this URL in an email to your staff.');
                            }
                            ?>
                            <br>
                            <br>
                            <div id="help"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script {csp-script-nonce}>
(function($) {
    var windowsInfo = "<?php echo __('To execute the Windows PowerShell script, open a command prompt as Administrator, change directory to where you downloaded this script and use the following command'); ?>:<br><code>powershell.exe -executionpolicy bypass -file .\\audit_windows.ps1 --debugging 1</code>";
    var linuxInfo = "<?php echo __('To execute the audit script, open a terminal and use the following command'); ?>: <code>sudo ./audit_linux.sh</code><br><?php echo __('Note, you may need to make the script executable with'); ?> <code>chmod +x audit_linux.sh</code><br><?php echo __('You may also wish to enable debugging to view the progress in the terminal thus:'); ?> <code>sudo ./audit_linux.sh debugging=1</code>";
    var siteUrl = '<?php echo site_url(); ?>';
    var detectSystems = [
        { regex: /Windows NT/i, value: 'windows-ps1'},
        { regex: /Linux/i, value: 'linux'},
        { regex: /Mac OS X/i, value: 'osx'},
    ];

    function selectSystem(value)
    {
        var link = siteUrl + '/scripts/' + value + '/download';
        var info = value === 'windows-ps1' ? windowsInfo : linuxInfo.replace(/audit_linux/g, 'audit_' + value);

        $('#script_type').val(value);
        $('#go_button').attr('href', link);
        $('#go_link').attr('href', link);
        $('#go_link').html(link);
        $('#help').html(info);
    }

    detectSystems.forEach(function(system) {
        var isMatch = navigator.userAgent.match(system.regex);
        if (isMatch) {
            selectSystem(system.value);
        }
    });

    $('#script_type').on('change', function() {
        selectSystem($(this).val());
    });

})(jQuery);
</script>
