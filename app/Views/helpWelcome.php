<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';

$ips = server_ip();
$ips = explode(',', $ips);
$subnet = '';
foreach ($ips as $ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) and !filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
        $ip = explode('.', $ip);
        $ip[3] = 0;
        $ip = implode('.', $ip);
        $subnet = $ip . '/24';
        break;
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 style="padding-top:10px;"><span class="fa-solid fa-arrows-spin oa-icon"></span><?= __('Welcome') ?></h6>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-8 offset-2 text-center">
                            <h1><?= __('Welcome to FirstWave Open-AudIT') ?></h1>
                            <p>Thank you for starting your journey with the best discovery and inventory tool around.</p>
                        </div>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-10 col-offset-1" style="margin-bottom:30px">
                            <div class="row">
                                <div class="col-12 text-center align-self-center">
                                    <h2><?= __('Want to know more?') ?></h2>
                                    <p><?= __('Follow any of the links below and discover how to use Open-AudIT to find out "What\'s On Your Network?"') ?><br><br></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 offset-4">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Run a discovery and find out What\'s On Your Network?') ?>'
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" id="get_started" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#discoveryModel" href="#"><?= __('Get Started') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Insert example data and discover all that Open-AudIT can tell you.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a role="button" class="btn btn-default btn-lg" href="<?= url_to('devicesExampleForm') ?>"><?= __('Import Example Data') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Visit our YouTube channel for instructional videos.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a target="_blank" role="button" class="btn btn-default btn-lg" href="https://www.youtube.com/playlist?list=PLw8YUAEwGTSVPYKFo7O9FEf0ZwXWqA1vl"><?= __('YouTube Tutorials') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <?= __('Read our online documentation on the Open-AudIT Wiki.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a target="_blank" role="button" class="btn btn-default btn-lg" href="https://docs.community.firstwave.com/wiki/spaces/OA"><?= __('Online Documentation') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <?= __('Ask the Community for help or contribute answers for others.') ?>
                                        </div>
                                        <div class="card-footer">
                                            <a target="_blank" role="button" class="btn btn-default btn-lg" href="https://docs.community.firstwave.com/wiki/display/OA/customcontent/list/ac%3Acom.atlassian.confluence.plugins.confluence-questions%3Aquestion?ac.com.atlassian.confluence.plugins.confluence-questions.path=/questions-bootstrap"><?= __('Community Questions') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row vertical-align justify-content-evenly">
                        <div class="col-8 col-offset-2">
                            <div class="row d-flex align-items-center text-center">
                                <div class="col-1">
                                    <img class="img-fluid" alt="windows" src="<?= base_url() ?>logos/windows.svg" style="width:4rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="redhat" src="<?= base_url() ?>logos/redhat.svg" style="width:5rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="ubuntu" src="<?= base_url() ?>logos/ubuntu.svg" style="width:4rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="osx" src="<?= base_url() ?>logos/osx.svg" style="width:3.5rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="esxi" src="<?= base_url() ?>logos/esxi.svg" style="width:5rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="solaris" src="<?= base_url() ?>logos/solaris.svg" style="width:5rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="hp-ux" src="<?= base_url() ?>logos/hp-ux.svg" style="width:4.5rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="aix" src="<?= base_url() ?>logos/aix.svg" style="width:4rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="centos" src="<?= base_url() ?>logos/centos.svg" style="width:4rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="suse" src="<?= base_url() ?>logos/suse.svg" style="width:4rem;" />
                                </div>
                                <div class="col-1">
                                    <img class="img-fluid" alt="debian" src="<?= base_url() ?>logos/debian.svg" style="width:4rem;" />
                                </div>
                                <div class="col-1">
                                    <span class="text-center"><a target="_blank" href="https://docs.community.firstwave.com/wiki/spaces/OA">And so much more.</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="modal" id="discoveryModel" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Quick Discovery</h2>
                        <button type="button" id="buttonClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="padding-right: 50px; padding-top: 50px;"></button>
                    </div>
                    <div class="modal-body">
                        <p>This form provides a quick and simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create <a href="#">credentials</a>, <a href="#">locations</a> and <a href="#">discoveries</a> using the main menu items.</p>
                        <hr>
                        <h3>Credentials</h3>
                        <p>We need some credentials to be able to effectively talk to the devices on your network.</p><br>
                        <div class="row">
                            <div class="col">
                                <h4>Windows</h4>
                                <label for="windows_username" class="form-label">Windows Username</label>
                                <input type="text" class="form-control" placeholder="username@your.domain" aria-label="windows_username" id="windows_username" name="windows_username">
                                <br>
                                <label for="windows_password" class="form-label">Windows Password</label>
                                <input type="password" class="form-control" placeholder="" aria-label="windows_password" id="windows_password" name="windows_password">
                            </div>

                            <div class="col">
                                <h4>Unix</h4>
                                <label for="ssh_username" class="form-label">SSH Username</label>
                                <input type="text" class="form-control" placeholder="" aria-label="ssh_username" id="ssh_username" name="ssh_username" value="">
                                <br>
                                <label for="ssh_password" class="form-label">SSH Password</label>
                                <input type="password" class="form-control" placeholder="" aria-label="ssh_password" id="ssh_password" name="ssh_password" value="">
                            </div>

                            <div class="col">
                                <h4>SNMP Devices</h4>
                                <label for="snmp_community" class="form-label">SNMP Community String</label>
                                <input type="password" class="form-control" placeholder="" value="public" aria-label="snmp_community" id="snmp_community" name="snmp_community">
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col">
                                <h2>Location</h2>
                                <p>A location name will help you to find these devices in the future.</p>
                                <label for="location_name" class="form-label">Location Name</label>
                                <input type="text" class="form-control" placeholder="Sydney DataCenter" aria-label="location_name" id="location_name" name="location_name">
                            </div>
                            <div class="col">
                                <h2>Network</h2>
                                <p>Which network should we discover. This should be in the format of 1.2.3.4/24</p>
                                <label for="subnet" class="form-label">The Network to Discover</label>
                                <input type="text" class="form-control" value="<?= $subnet ?>" placeholder="This should be in the format of 1.2.3.4/24" aria-label="subnet" id="subnet" name="subnet" required>
                            </div>
                            <div class="col">
                                <h2>Execute</h2>
                                <p>And finally, click Submit to execute this discovery.</p>
                                <label for="submit" class="form-label">Click Submit to Execute</label><br>
                                <button type="submit" class="btn btn-primary" id="submit" name="submit" >Submit</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        <?php
        if ($config->device_count === 0) {
            echo "\n            $('#modalCompareLicense').modal('show');\n";
        } ?>

        $('#submit').click(function (e) {
            e.preventDefault();
            if ($("#subnet").val() !== "") {
                $("#submit").html('Executing');
                $("#submit").removeClass('btn-primary');
                $("#submit").addClass('btn-success').trigger("change");
                requestAnimationFrame(() =>
                requestAnimationFrame(function(){
                     create();
                }));
            }
        });

        function create()
        {
            var data = {};
            var access_token = "<?= $meta->access_token ?>";
            discovery_id = "";
            if ($("#snmp_community").val() !== "" && $("#subnet").val() !== "") {
                data["access_token"] = access_token;
                data["type"] = "credentials";
                data["attributes"] = {};
                data["attributes"]["name"] = "SNMP Quick Credentials";
                data["attributes"]["org_id"] = 1;
                data["attributes"]["type"] = "snmp";
                data["attributes"]["credentials"] = {};
                data["attributes"]["credentials"]["community"] = $("#snmp_community").val();
                $.ajax({
                    type: "POST",
                    async: false,
                    url: "<?= url_to('credentialsCreate') ?>",
                    dataType: "json",
                    data: {data : data},
                    headers: { Accept: "application/json"},
                    success: function (data) {
                        console.log("Credentials for SNMP have been created.");
                        if (data.meta.access_token) {
                            access_token = data.meta.access_token;
                        } else {
                            console.log("Error - could not get access token from CredentialsCreate SNMP.")
                        }
                    },
                    error: function (data) {
                        console.log("Could not create SNMP Credentials.");
                        console.log(data);
                    }
                });
            }

            if ($("#windows_username").val() !== "" && $("#windows_password").val() !== "" && $("#subnet").val() !== "") {
                data["access_token"] = access_token;
                data["type"] = "credentials";
                data["attributes"] = {};
                data["attributes"]["name"] = "Windows Quick Credentials";
                data["attributes"]["org_id"] = 1;
                data["attributes"]["type"] = "windows";
                data["attributes"]["credentials"] = {};
                data["attributes"]["credentials"]["username"] = $("#windows_username").val();
                data["attributes"]["credentials"]["password"] = $("#windows_password").val();
                $.ajax({
                    type: "POST",
                    async: false,
                    url: "<?= url_to('credentialsCreate') ?>",
                    dataType: "json",
                    data: {data : data},
                    headers: { Accept: "application/json"},
                    success: function (data) {
                        console.log("Credentials for Windows have been created.");
                        if (data.meta.access_token) {
                            access_token = data.meta.access_token;
                        } else {
                            console.log("Error - could not get access token from CredentialsCreate Windows.")
                        }
                    },
                    error: function (data) {
                        console.log("Could not create Windows Credentials.");
                        console.log(data);
                    }
                });
            }

            if ($("#ssh_username").val() !== "" && $("#ssh_password").val() !== "" && $("#subnet").val() !== "") {
                data["access_token"] = access_token;
                data["type"] = "credentials";
                data["attributes"] = {};
                data["attributes"]["name"] = "SSH Quick Credentials";
                data["attributes"]["org_id"] = 1;
                data["attributes"]["type"] = "ssh";
                data["attributes"]["credentials"] = {};
                data["attributes"]["credentials"]["username"] = $("#ssh_username").val();
                data["attributes"]["credentials"]["password"] = $("#ssh_password").val();
                $.ajax({
                    type: "POST",
                    async: false,
                    url: "<?= url_to('credentialsCreate') ?>",
                    dataType: "json",
                    data: {data : data},
                    headers: { Accept: "application/json"},
                    success: function (data) {
                        console.log("Credentials for SSH have been created.");
                        if (data.meta.access_token) {
                            access_token = data.meta.access_token;
                        } else {
                            console.log("Error - could not get access token from CredentialsCreate SSH.")
                        }
                    },
                    error: function (data) {
                        console.log("Could not create Unix Credentials.");
                        console.log(data);
                    }
                });
            }

            location_id = "";
            if ($("#location_name").val() !== "" && $("#subnet").val() !== "") {
                data["access_token"] = access_token;
                data["type"] = "locations";
                data["attributes"] = {};
                data["attributes"]["name"] = $("#location_name").val();
                data["attributes"]["org_id"] = 1;
                $.ajax({
                    type: "POST",
                    async: false,
                    url: "<?= url_to('locationsCreate') ?>",
                    dataType: "json",
                    data: {data : data},
                    headers: { Accept: "application/json"},
                    success: function (data) {
                        console.log("Location has been created.");
                        if (data.meta.id) {
                            location_id = data.meta.id;
                        }
                        if (data.meta.access_token) {
                            access_token = data.meta.access_token;
                        } else {
                            console.log("Error - could not get access token from LocationsCreate.")
                        }
                    },
                    error: function (data) {
                        console.log("Could not create Location.");
                        console.log(data);
                    }
                });
            }

            if ($("#subnet").val() !== "") {
                data["access_token"] = access_token;
                data["type"] = "discoveries";
                data["attributes"] = {};
                data["attributes"]["name"] = "Quick Discovery for " + $("#subnet").val();
                data["attributes"]["org_id"] = 1;
                data["attributes"]["type"] = "subnet";
                data["attributes"]["subnet"] = $("#subnet").val();
                if ($("#location_name").val() !== "" && location_id != "") {
                    data["attributes"]["devices_assigned_to_location"] = location_id;
                }
                $.ajax({
                    type: "POST",
                    async: false,
                    url: "<?= url_to('discoveriesCreate') ?>",
                    dataType: "json",
                    data: {data : data},
                    headers: { Accept: "application/json"},
                    success: function (data) {
                        console.log("Discovery has been created.");
                        if (data.meta.id) {
                            discovery_id = data.meta.id;
                        }
                        if (data.meta.access_token) {
                            access_token = data.meta.access_token;
                        } else {
                            console.log("Error - could not get access token from LocationsCreate.")
                        }
                    },
                    error: function (data) {
                        console.log("Could not create Discovery.");
                        console.log(data);
                    }
                });
            }

            if (discovery_id != "") {
                $url = "<?= url_to('discoveriesCollection') ?>/" + discovery_id + "/execute";
                $.ajax({
                    type: "GET",
                    async: false,
                    url: $url,
                    dataType: "json",
                    headers: { Accept: "application/json"},
                    success: function (data) {
                        console.log("Discovery has been executed.");
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
                window.location.replace("<?= url_to('discoveriesCollection') . '/' ?>" + discovery_id + "#all_ips");
            }
        };
    });
}
</script>
