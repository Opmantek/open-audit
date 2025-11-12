<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header('devices', 'icon-computer', $user); ?>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <p class="fs-2"><?= __('Create Example Devices') ?></p>
                        <br>
                        <p><?= __('Click the Import button below to populate Open-AudIT with example device data.') ?><br>
                        <br>
                        <form action="<?= url_to('devicesExample') ?>" method="post">
                            <button id="submit" name="submit" type="submit" class="btn btn-success" aria-label="<?= __('Import') ?>"><?= __('Import') ?></button>
                        </form>
                        <br>
                        </p>
                        <span id="statusmsg">&nbsp;</span>
                    </div>
                </div>
            </div>
        </main>

<style>
    #spinner {
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
</style>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function(){
        $('#submit').click(function() {
            document.getElementById('statusmsg').innerHTML = '<br>Please wait while we import the devices.<br><br><span id=\'spinner\' class=\'icon-loader\'></i>';

        });
    });
}
</script>
