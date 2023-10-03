<footer class="mt-auto">
      <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
            <div class="alert alert-secondary" style="margin-bottom: 0px; padding-bottom: 0px;">
                <div class="row">
                    <div class="col-8">
                        <p class="text-start"><?= (!empty($license_string)) ? html_entity_decode($license_string) . '<br>' : '' ?>
                        Purchase a license for more devices by clicking <a href="#" id="upgrade_licenses" data-bs-toggle="modal" data-bs-target="#myModalLicense" style="color: #064cb3;"><strong>here</strong></a>.
                        </p>
                    </div>
                    <div class="col-4">
                        <p class="text-end"><a style="color: #064cb3;" href="https://firstwave.com">Powered by Firstwave</a></p>
                    </div>
                </div>
            </div>
      </div>
</footer>