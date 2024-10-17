<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$disabled = 'disabled';
if (!empty($config->maps_api_key) and ($config->product === 'professional' or $config->product === 'enterprise')) {
    $disabled = '';
}
if ($user->toolbar_style === 'icontext') {
    $latlong = '<li class="nav-item" role="presentation"><button type="button" id="locations_latlong" name="locations_latlong" class="locations_latlong btn btn-default"><span style="margin-right:6px;" class="fa-solid fa-globe text-success"></span>' . __('Get Lat/Long') . '</button></li>';

    $geocode = '<li class="nav-item" role="presentation"><button type="button" id="locations_geocode" name="locations_geocode" class="locations_geocode btn btn-default"><span style="margin-right:6px;" class="fa-solid fa-map text-success"></span>' . __('Create Geocode') . '</button></li>';

    $devices = '<li class="nav-item" role="presentation"><a type="button" class="btn btn-default" href="' . url_to('devicesCollection') . '?devices.location_id=' . $resource->id . '"><span style="margin-right:6px;" class="fa-solid fa-desktop text-primary"></span>' . __('Devices') . '</a></li>';
} elseif ($user->toolbar_style === 'icon') {
    $latlong = '<li class="nav-item" role="presentation"><button type="button" id="locations_latlong" name="locations_latlong" class="locations_latlong btn btn-default"><span class="fa-solid fa-globe text-success"></span></button></li>';

    $geocode = '<li class="nav-item" role="presentation"><button type="button" id="locations_geocode" name="locations_geocode" class="locations_geocode btn btn-default"><span class="fa-solid fa-map text-success"></span></button></li>';

    $devices = '<li class="nav-item" role="presentation"><a type="button" class="btn btn-default" href="' . url_to('devicesCollection') . '?devices.location_id=' . $resource->id . '"><span class="fa-solid fa-desktop text-primary"></span></a></li>';
} else {
    $latlong = '<li class="nav-item" role="presentation"><button type="button" id="locations_latlong" name="locations_latlong" class="locations_latlong btn btn-default">' . __('Get Lat/Long') . '</button></li>';

    $geocode = '<li class="nav-item" role="presentation"><button type="button" id="locations_geocode" name="locations_geocode" class="locations_geocode btn btn-default">' . __('Create Geocode') . '</button></li>';

    $devices = '<li class="nav-item" role="presentation"><a type="button" class="btn btn-default" href="' . url_to('devicesCollection') . '?devices.location_id=' . $resource->id . '">' . __('Devices') . '</a></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-8 offset-2">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $latlong ?>
                                <?= $geocode ?>
                                <?= $devices ?>
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-4">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_select('type', $resource->type, $dictionary->columns->type, $update, __('Type'), $included['types']) ?>
                            <?php $attributes = array('room', 'suite', 'level', 'address', 'suburb', 'district', 'region', 'area');
                            foreach ($attributes as $attribute) {
                                $link_button = '';
                                if (in_array($attribute, ['suburb', 'district', 'region', 'area'])) {
                                    $link_button = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('locationsCollection') . "?locations." . $attribute . "=" . urlencode($resource->{$attribute}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a></div><div class=\"float-end\" style=\"padding-left:4px;\">
                                    <a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?locations." . $attribute . "=" . urlencode($resource->{$attribute}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-desktop\" aria-hidden=\"true\"></span></a>";
                                }
                                echo read_field($attribute, $resource->{$attribute}, $dictionary->columns->{$attribute}, $update, '', $link_button) . "\n";
                            } ?>
                        </div>
                        <div class="col-4">
                            <?php $attributes = array('latitude', 'longitude', 'geo', 'city', 'state', 'postcode', 'country', 'phone', 'contact', 'external_ident');
                            foreach ($attributes as $attribute) {
                                $link_button = '';
                                if (in_array($attribute, ['city', 'state', 'postcode', 'country'])) {
                                    $link_button = "<a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('locationsCollection') . "?locations." . $attribute . "=" . urlencode($resource->{$attribute}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a></div><div class=\"float-end\" style=\"padding-left:4px;\">
                                    <a role=\"button\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesCollection') . "?locations." . $attribute . "=" . urlencode($resource->{$attribute}) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-desktop\" aria-hidden=\"true\"></span></a>";
                                }
                                echo read_field($attribute, $resource->{$attribute}, $dictionary->columns->{$attribute}, $update, '', $link_button) . "\n";
                            } ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-4">
                            <br>
                            <div class="offset-2 col-8">
                                <?php if ($disabled === 'disabled') { ?>
                                <div class="container-fluid">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= __('No Google Maps API Key present, you will not be able to display the map.') . ' See <a href="' . url_to('helpFAQ') . '?name=Google Maps API Key">here</a>.' ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'description', 'type', 'room', 'suite', 'level', 'address', 'city', 'state', 'postcode', 'country', 'phone', 'contact', 'latitude', 'longitude', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php if ($disabled === '') { ?>
<script src="https://maps.google.com/maps/api/js?key=<?= $config->maps_api_key ?>"></script>

<script {csp-script-nonce}>
window.onload = function () {
    /* Get Lat/Long from Google Maps API on update locations page */
    $(document).ready(function () {
        $(document).on('click', '.locations_latlong', function (e) {
            var address = "";
            if ($('#geo').val() > "") {
                address = $('#geo').val();
            } else {
                address = $('#address').val() + ", " + $('#city').val() + ", " + $('#state').val() + ", " + $('#postcode').val() + ", " + $('#country').val();
            }
            $('#latitude').val('');
            $('#longitude').val('');
            var geocoder = new google.maps.Geocoder();
            if (geocoder) {
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        $('#longitude').val(results[0].geometry.location.lng());
                        $('.edit*[data-attribute="longitude"]').click();
                        $('#latitude').val(results[0].geometry.location.lat());
                        $('.edit*[data-attribute="latitude"]').click();
                    }
                });
            }
        });
    });

    $(document).ready(function () {
        $(document).on('click', '.locations_geocode', function (e) {
            console.log("Clicked locations geocode");
            var address = $('#address').val() + ", " + $('#city').val() + ", " + $('#state').val() + ", " + $('#postcode').val() + ", " + $('#country').val();
            console.log(address);
            $('#geo').val('');
            // $('#geo').attr("disabled", false);
            $('#geo').val(address);
            $('.edit*[data-attribute="geo"]').click();

        });
    });
}
</script>
<?php } ?>

<?php if ($disabled === 'disabled') { ?>
<script {csp-script-nonce}>
window.onload = function () {
    /* Get Lat/Long from Google Maps API on update locations page */
    $(document).ready(function () {
        header = "<?= __('License Required') ?>";
        body = "<?= __('This feature requires a Professional or an Enterprise license.') ?>";
        <?php if (empty($config->maps_api_key)) { ?>
            header = "<?= __('API Key required.') ?>";
            body = "<?= __('A Google Maps API Key is required for this function.') ?>";
        <?php } ?>
        $(document).on('click', '.locations_latlong', function (e) {
            $("#liveToastFailure-header").text(header);
            $("#liveToastFailure-body").text(body);
            var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            });
            toastList.forEach(toast => toast.show());
        });
        $(document).on('click', '.locations_geocode', function (e) {
            $("#liveToastFailure-header").text(header);
            $("#liveToastFailure-body").text(body);
            var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            });
            toastList.forEach(toast => toast.show());
        });
    });
}
</script>
<?php } ?>