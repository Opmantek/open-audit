<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';

if (empty($data[0]->attributes->latitude)) {
    $data[0]->attributes->latitude = '-28.017260';
}
if (empty($data[0]->attributes->longitude)) {
    $data[0]->attributes->longitude = '153.425705';
}
?>
<link type="text/css" rel="stylesheet" href="<?= $meta->baseurl ?>css/map.css" />
<style {csp-style-nonce}>
img[src*="gstatic.com/"] img[src*="googleapis.com/"] {
    max-width: none;
}
</style {csp-style-nonce}>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <div style="padding-left:20px; padding-right:20px; height: calc(100vh - 350px); text-align: center;">
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
        </main>


<script {csp-script-nonce}>
    /**
    * the following are all valid map types
    * ROADMAP (normal, default 2D map)
    * SATELLITE (photographic map)
    * HYBRID (photographic map + roads and city names)
    * TERRAIN (map with mountains, rivers, etc.)
    */
window.onload = function () {
    $(document).ready(function(){

        $("#button_export_csv").remove();
        $("#button_export_json").remove();

        // below accounts for the bootstrap css altering the Google Maps infoWindow
        var css = document.createElement('style');
        css.type = 'text/css';
        var styles = 'img[src*="gstatic.com/"], img[src*="googleapis.com/"] { max-width: none; }';
        if (css.styleSheet) css.styleSheet.cssText = styles;
        else css.appendChild(document.createTextNode(styles));
        document.getElementsByTagName("head")[0].appendChild(css);
        // Fire up the map
        initMap();
    });

    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
        key: "<?= $config->maps_api_key ?>",
        v: "weekly",
        // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
        // Add other bootstrap parameters as needed, using camel case.
    });

    let map;

    async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");

        map = new Map(document.getElementById("map-canvas"), {
            zoom: 4,
            center: { lat: <?= $data[0]->attributes->latitude ?>, lng: <?= $data[0]->attributes->longitude ?> },
            mapTypeId: google.maps.MapTypeId.TERRAIN
        });
        setMarkers(map, oa_locations);
    }

    // we should account for locations that do not have a corresponding group
    // we should test for $key->{group} gt "" and create a table without links
    var oa_locations = [
        <?php $i = 0;
        foreach ($data as $key) {
            $table = '';
            $address = '';
            if (!empty($key->attributes->address)) {
                $address = $key->attributes->address;
            }
            if (!empty($key->attributes->city)) {
                if (!empty($address)) {
                    $address .= ', ' . $key->attributes->city;
                } else {
                    $address = $key->attributes->city;
                }
            }
            // $address =~ s/'/\\'/g;
            if (empty($address)) {
                $address = '-';
            }
            $name = (!empty($key->attributes->name)) ? $key->attributes->name : '-';
            // $name =~ s/'/\\'/g;
            $org_name = (!empty($key->attributes->{'orgs.name'})) ? $key->attributes->{'orgs.name'} : '-';
            // $org_name =~ s/'/\\'/g;
            if ($key->attributes->longitude != '0.000000') {
                $table = "<table width=\"92%\" cellspacing=\"0\"><thead><tr><th style=\"text-align: center;\" colspan=\"3\">" . htmlentities($name) . "</th></tr></thead>";
                $table .= "<tbody>";
                $table .= "<tr><td>" . __('Organisation') . "</td><td><a href=\"" . url_to('orgsRead', $key->attributes->org_id)  . "\">" . htmlentities($org_name)  . "</a></td></tr>";
                $table .= "<tr><td>" . __('Address') . "</td><td><a href=\"" . url_to('locationsRead', $key->attributes->id) . "\">" . htmlentities($address)  . "</a></td></tr>";
                $table .= "<tr><td>" . __('Devices') . "</td><td><a href=\"" . url_to('devicesCollection') . "?devices.location_id=" . $key->attributes->id . "\" >" . $key->attributes->device_count . "</a></td></tr>";
                $table .= '</table>';
                $i += 1;
                $icon = strtolower(str_replace(' ', '_', $key->attributes->type));
                if ($i === 1) { ?>
                    ['<?= $key->attributes->name ?>', <?= $key->attributes->latitude ?>, <?= $key->attributes->longitude ?>, <?= $i ?>, '<?= $table ?>', '<?= $meta->baseurl ?>images/map_icons/32_<?= $icon ?>.png']
                <?php } else { ?>
                    ,['<?= $key->attributes->name ?>', <?= $key->attributes->latitude ?>, <?= $key->attributes->longitude ?>, <?= $i ?>, '<?= $table ?>', '<?= $meta->baseurl ?>images/map_icons/32_<?= $icon ?>.png']
                <?php }
            }
        } ?>
    ];

    function setMarkers(map, locations) {
        var shape = {
            coord: [1, 1,   1, 32,   32, 37,   37, 1],
            type: 'poly'
        };
        var bounds = new google.maps.LatLngBounds();
        for (var i = 0; i < locations.length; i++) {
            var location = locations[i];
            var image = {
                url: location[5],
                size: new google.maps.Size(32, 37),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 37)
            };
            var myLatLng = new google.maps.LatLng(location[1], location[2]);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                shape: shape,
                title: location[0],
                zIndex: location[3],
            });
            bounds.extend(myLatLng);
            popup_message(marker, location[4]);
        }
        map.fitBounds(bounds);
        function popup_message(marker, number) {
            var infowindow = new google.maps.InfoWindow( {
                content: number
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }
    }
}
</script>