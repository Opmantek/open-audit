<span style="margin-top:30px;"></span>
<footer class="mt-auto">
      <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
            <div class="alert alert-secondary" style="margin-bottom: 0px; padding-bottom: 0px;">
                <div class="row">
                    <div class="col-8">
                        <p class="text-start">
                        <?php if (empty($config->license_footer)) { ?>
                        Get a free Enterprise license by clicking <a href="#" id="upgrade_licenses" data-bs-toggle="modal" data-bs-target="#modalCompareLicense" style="color: #064cb3;"><strong>here</strong></a>.
                        <?php } else {
                            echo html_entity_decode($config->license_footer) . '<br>';
                            echo "Purchase a license for more devices by clicking <a href=\"#\" id=\"upgrade_licenses\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCompareLicense\" style=\"color: #064cb3;\"><strong>here</strong></a>.";
                        } ?>
                        </p>
                    </div>
                    <div class="col-4">
                        <p class="text-end"><a style="color: #064cb3;" href="https://firstwave.com">Powered by Firstwave</a><br>
                        <?= $config->device_known ?> devices licensed from <?= $config->device_count ?> total devices.</p>
                    </div>
                </div>
            </div>
      </div>
</footer>