<?php
$highlightCom = '';
$btnCom = 'btn-default';
$btnComStyle = '';
$btnComText = __('Get Started');

$highlightFre = '';
$btnFre = 'btn-default';
$btnFreStyle = '';
$btnFreText = __('Activate');

$highlightPro = '';
$btnPro = 'btn-default';
$btnProStyle = '';
$btnProText = __('Buy');

$highlightEnt = '';
$btnEnt = 'btn-default';
$btnEntStyle = '';
$btnEntText = __('Upgrade');

$message = '';
$license = (!empty($config->license)) ? strtolower($config->license) : 'none';
$product = (!empty($config->product)) ? $config->product : 'community';

if ($product === 'enterprise' and $license !== 'free') {
    $highlightEnt = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnEnt = 'btn-success';
    $btnEntStyle = 'style="color:white;"';
    $message = 'Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';
    $btnEntText = __('Buy More');
}

if ($product === 'professional') {
    $highlightEnt = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnEnt = 'btn-success';
    $btnEntStyle = 'style="color:white;"';
    $message = 'Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.';
    $btnProText = __('Buy More');
}

if ($license === 'free' and $product === 'enterprise') {
    $highlightPro = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnPro = 'btn-success';
    $btnProStyle = 'style="color:white;"';
    $message = 'Open-AudIT Professional. The world\'s most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.';
}

if ($product === 'community') {
    $highlightFre = "background: rgba(var(--bs-body-color-rgb), 0.03)";
    $btnFre = 'btn-success';
    $btnFreStyle = 'style="color:white;"';
    $message = 'Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.';
}

$button_prompt_never = '';
$button_prompt_later = '';
if (($meta->collection === 'summaries' or $meta->collection === 'groups') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial') {
    $button_prompt_never = '<span id="button_prompt_never"><a data-bs-dismiss="modal" class="btn btn-default btn-sm dismiss_modal_button" href="#" data-value="2100-01-01">' . __('Do not show me again') . '</a></span>';
    $button_prompt_later = '<span id="button_prompt_later"><a data-bs-dismiss="modal" class="btn btn-default btn-sm dismiss_modal_button" href="#" data-value="' . date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 day')) . '">' . __('Ask me later') . '</a></span>';
}
?>
<div class="modal" id="myModalLicense" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Open-AudIT Community, Professional and Enterprise feature comparison</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="padding-right: 50px; padding-top: 50px;"></button>
            </div>
            <div class="modal-body">
                <br>
                <p><?= $message ?></p>
                <br>
                <div class="row">
                    <div class="col-6 clearfix pull-left">
                        <?php if (($meta->collection === 'summaries' or $meta->collection === 'groups') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial') {
                            echo $button_prompt_later;
                        } ?>
                    </div>
                    <div class="col-6 clearfix pull-right">
                        <div class="float-end">
                            <?php if (($meta->collection === 'summaries' or $meta->collection === 'groups') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial') {
                                echo $button_prompt_never;
                            } ?>
                        </div>
                    </div>
                </div>
                <table class="table" id="feature_table">
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="">Features</th>
                            <th class="text-center">Community</th>
                            <th class="text-center">Free License</th>
                            <th class="text-center">Professional</th>
                            <th class="text-center">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=" "><a href="<?= url_to('discoveriesHelp') ?>">Network Discovery</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('scriptsHelp') ?>">Device and Software and Hardware Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="/omk/open-audit/features/changes">Configuration Change Detection and Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('fieldsHelp') ?>">Custom Fields</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('mapsHelp') ?>">Geographical Maps</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('dashboardsHelp') ?>">Interactive Dashboards</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('tasksHelp') ?>">Scheduling - discovery, reporting &amp; more</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('reportsHelp') ?>">Time based Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('agentsHelp') ?>">Optional Agent Based Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('baselinesHelp') ?>">Baselines for device comparison</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('cloudsHelp') ?>">Cloud Discovery and Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('rolesHelp') ?>">Configurable Role Based Access Control (RBAC)</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('ldap_serversHelp') ?>">RBAC for Active Directory and openLDAP</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('discovery_scan_optionsHelp') ?>">Customisable Scanning Options per Discovery</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('filesHelp') ?>">File Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('racksHelp') ?>">Rack Management and Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('supportHelp') ?>">Commercial Support</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightFre ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('devicesHelp') ?>">Devices</a></td>
                            <td class=" ">&nbsp;</td>
                            <td class="text-center"><?= __('Free for 20 Devices') ?></td>
                            <td class="text-center"><?= __('From 500 Devices') ?></td>
                            <td class="text-center"><?= __('From 100 Devices') ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><a class="btn btn-default" target="_blank" href="<?= url_to('configurationReadLicense') ?>"><?= __('Restore my Licenses') ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnCom ?>"  data-bs-dismiss="modal" <?= $btnComStyle ?> href="<?= $meta->baseurl ?>index.php"><?= $btnComText ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnFre ?>" <?= $btnFreStyle ?> href="<?= url_to('configurationReadLicense') ?>"><?= $btnFreText ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnPro ?>" <?= $btnProStyle ?> href="https://firstwave.com/products/network-discovery-and-inventory-software/"><?= $btnProText ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnEnt ?>" <?= $btnEntStyle ?> href="https://firstwave.com/products/network-discovery-and-inventory-software/"><?= $btnEntText ?></a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script {csp-script-nonce}>
/* inline edit */
window.onload = function () {
    $(document).ready(function () {

        <?php
        if (($meta->collection === 'summaries' or $meta->collection === 'groups') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial') {
            echo "\n            $('#myModalLicense').modal('show');\n";
        } ?>

        $(document).on('click', '.dismiss_modal_button', function (e) {
            var value = $(this).attr("data-value");
            //alert("Value is:"+value);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = "<?= $config->oae_prompt_id ?>";
            data["data"]["type"] = "configuration";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["value"] = value;
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: "<?= base_url() ?>index.php/configuration/<?= $config->oae_prompt_id ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    /* alert( 'success' ); */
                },
                error: function (data) {
                    console.log(data.responseText);
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail);
                }
            });
        });
    });
}
</script>