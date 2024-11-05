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
$product = (!empty($config->product)) ? strtolower($config->product) : 'community';

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
    $message = 'Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise.';
}

$button_prompt_never = '';
$button_prompt_later = '';
if (($meta->collection === 'summaries' or $meta->collection === 'groups' or $meta->collection === 'help') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial') {
    // $button_prompt_never = '<span id="button_prompt_never"><a data-bs-dismiss="modal" class="btn btn-default btn-sm dismiss_modal_button" href="#" data-value="2100-01-01">' . __('Do not show me again') . '</a></span>';
    $button_prompt_later = '<span id="button_prompt_later"><a data-bs-dismiss="modal" class="btn btn-default btn-sm dismiss_modal_button" href="#" data-value="' . date('Y-m-d', strtotime(date('Y-m-d') . ' + 30 day')) . '">' . __('Ask me later') . '</a></span>';
}
$countries = array(
    "Afghanistan", "Aland Islands", "Albania", "Algeria", "American Samoa", "Andorra",
    "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia",
    "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
    "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan",
    "Bolivia (Plurinational State of)", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina",
    "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria",
    "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon",
    "Canada", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China",
    "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo",
    "Congo (The Democratic Republic of the)", "Cook Islands", "Costa Rica", "Cote d'Ivoire",
    "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
    "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea",
    "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (The) [Malvinas]", "Faroe Islands",
    "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories",
    "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece",
    "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea",
    "Guinea-Bissau", "Guyana", "Haiti", "Heard Island and McDonald Islands", "Holy See",
    "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)",
    "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan",
    "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, The Democratic People's Republic of",
    "Korea, The Republic of", "Kuwait", "Kyrgyzstan", "Lao People's Democratic Republic",
    "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein",
    "Lithuania", "Luxembourg", "Macao", "Macedonia, The former Yugoslav Republic of",
    "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
    "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia (Federated States of)",
    "Moldova, The Republic of", "Monaco", "Mongolia", "Montenegro",
    "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal",
    "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue",
    "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau",
    "Palestine, State of", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines",
    "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation",
    "Rwanda", "Saint Barthelemy", "Saint Helena, Ascension and Tristan da Cunha", "Saint Kitts and Nevis",
    "Saint Lucia", "Saint Martin (French part)", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines",
    "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles",
    "Sierra Leone", "Singapore", "Sint Maarten (Dutch part)", "Slovakia", "Slovenia", "Solomon Islands",
    "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "South Sudan",
    "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland",
    "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan (Province of China)",
    "Tajikistan", "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo",
    "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands",
    "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom of Great Britain and Northern Ireland",
    "United States Minor Outlying Islands", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu",
    "Venezuela (Bolivarian Republic of)", "Viet Nam", "Virgin Islands (British)", "Virgin Islands (U.S.)",
    "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia", "Zimbabwe");
?>
<div class="modal" id="modalCompareLicense" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Open-AudIT Community, Professional and Enterprise Feature Comparison</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="padding-right: 50px; padding-top: 50px;"></button>
            </div>
            <div class="modal-body">
                <br>
                <p><?= $message ?></p>
                <br>
                <?php if ($product === 'community') { ?>
                <div class="row">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-4">
                            <label class="form-label" for="data[attributes][first_name]"><?= __('First Name') ?></label>
                            <input class="form-control" type="text" id="data[attributes][first_name]" name="data[attributes][first_name]" required>
                        </div>
                        <div class="col-4">                        
                            <label class="form-label" for="data[attributes][last_name]"><?= __('Last Name') ?></label>
                            <input class="form-control" type="text" id="data[attributes][last_name]" name="data[attributes][last_name]" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="data[attributes][email]"><?= __('Email') ?></label>
                            <input class="form-control" type="email" id="data[attributes][email]" name="data[attributes][email]" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label" for="data[attributes][company]"><?= __('Company') ?></label>
                            <input class="form-control" type="text" id="data[attributes][company]" name="data[attributes][company]" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="data[attributes][country]"><?= __('Country') ?></label>
                            <select class="form-select" name="data[attributes][country]" id="data[attributes][country]" required>
                                <option value="" label=" "></option>
                                <?php foreach ($countries as $country) {
                                    echo "                            <option value=\"" . $country . "\">" . $country . "</option>\n";
                                } ?>
                            </select>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button" id="createFree" class="btn btn-success" style="margin-top: 2em;">Submit</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <br>
                <br>

                <table class="table table-striped" id="feature_table">
                    <thead>
                        <tr>
                            <th class="">Features</th>
                            <th class="text-center">Community</th>
                            <th class="text-center">Professional</th>
                            <th class="text-center">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody style="font-size:0.8em;">
                        <tr>
                            <td class=" "><a href="<?= url_to('discoveriesHelp') ?>">Network Discovery</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('scriptsHelp') ?>">Device and Software and Hardware Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('fieldsHelp') ?>">Custom Fields</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('mapsHelp') ?>">Geographical Maps</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('dashboardsHelp') ?>">Interactive Dashboards</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f;; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('tasksHelp') ?>">Scheduling - discovery, reporting &amp; more</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('reportsHelp') ?>">Time based Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('agentsHelp') ?>">Optional Agent Based Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('baselinesHelp') ?>">Baselines for device comparison</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('cloudsHelp') ?>">Cloud Discovery and Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('rolesHelp') ?>">Configurable Role Based Access Control (RBAC)</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('authHelp') ?>">RBAC for Active Directory and openLDAP</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('discovery_scan_optionsHelp') ?>">Customisable Scanning Options per Discovery</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('filesHelp') ?>">File Auditing</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('racksHelp') ?>">Rack Management and Reporting</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('supportHelp') ?>">Commercial Support</a></td>
                            <td class="text-center" style="<?= $highlightCom ?>"><i class="fa fa-times" style="color:#d9534f; opacity: 0.5;"></i></td>
                            <td class="text-center" style="<?= $highlightPro ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                            <td class="text-center" style="<?= $highlightEnt ?>"><i class="fa fa-check" style="color:#5cb85c;"></i></td>
                        </tr>
                        <tr>
                            <td class=" "><a href="<?= url_to('devicesHelp') ?>">Devices</a></td>
                            <td class=" ">&nbsp;</td>
                            <td class="text-center"><?= __('From 500 Devices') ?></td>
                            <td class="text-center"><?= __('From 100 Devices') ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><a class="btn btn-default" href="<?= url_to('configurationReadLicense') ?>"><?= __('Restore my Licenses') ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnCom ?>"  data-bs-dismiss="modal" <?= $btnComStyle ?> href="<?= base_url() ?>index.php"><?= $btnComText ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnPro ?>" <?= $btnProStyle ?> href="https://firstwave.com/products/network-discovery-and-inventory-software/"><?= $btnProText ?></a></td>
                            <td class="text-center"><a class="btn <?= $btnEnt ?>" <?= $btnEntStyle ?> href="https://firstwave.com/products/network-discovery-and-inventory-software/"><?= $btnEntText ?></a></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="row">
                    <div class="col-6 clearfix pull-left">
                        <?php if (($meta->collection === 'summaries' or $meta->collection === 'groups' or $meta->collection === 'help') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial' and (file_exists(ROOTPATH . 'other/enterprise.bin') or file_exists(ROOTPATH . 'other/enterprise.exe'))) {
                            echo $button_prompt_later;
                        } ?>
                    </div>
                    <div class="col-6 clearfix pull-right">
                        <div class="float-end">
                            <?php if (($meta->collection === 'summaries' or $meta->collection === 'groups' or $meta->collection === 'help') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial' and (file_exists(ROOTPATH . 'other/enterprise.bin') or file_exists(ROOTPATH . 'other/enterprise.exe'))) {
                                echo $button_prompt_never;
                            } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script {csp-script-nonce}>
$(window).on("load", function() {
    $(document).ready(function () {
        <?php
        if (($meta->collection === 'summaries' or $meta->collection === 'groups' or $meta->collection === 'help') and $config->oae_prompt <= date('Y-m-d') and $license !== 'commercial' and (file_exists(ROOTPATH . 'other/enterprise.bin') or file_exists(ROOTPATH . 'other/enterprise.exe'))) {
            echo "\n            $('#modalCompareLicense').modal('show');\n";
        }
        ?>
        // console.log("Collection: <?= $meta->collection ?>");
        // console.log("OAE Prompt: <?= $config->oae_prompt ?>");
        // console.log("Date: <?= date('Y-m-d') ?>");
        // console.log("License: <?= $license ?>");
    });
});
</script>