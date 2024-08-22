<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.4.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Roles
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Roles
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Configuration extends BaseController
{

    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function readLicense()
    {
        if (empty($this->config->enterprise_binary)) {
            $_SESSION['error'] = 'The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from <a href="https://firstwave.com">https://firstwave.com</a>.';
            return redirect()->route('summariesCollection');
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

        $eu_countries = array('Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland,  Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia,Spain', 'Sweden', 'United Kingdom of Great Britain and Northern Ireland');

        $display_license_string = $this->resp->meta->license_string;

        $db = db_connect();
        $sql = "SELECT `id`, `name` FROM `configuration` WHERE `name` IN ('license_string', 'license_string_collector')";
        $result = $db->query($sql)->getResult();
        foreach ($result as $item) {
            $this->resp->meta->{$item->name} = $item->id;
        }

        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('configurationReadLicense', ['license' => $this->licenses, 'license_collector' => $this->licenses_collector, 'countries' => $countries, 'eu_countries' => $eu_countries])
            . view('shared/footer', ['license_string' => $display_license_string]);
    }



    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function readServers()
    {
        $db = db_connect();
        $sql = "SELECT * FROM configuration WHERE name = 'servers'";
        $result = $db->query($sql)->getResult();
        $this->resp->data = format_data($result, 'configuration');
        $update = false;
        if (strpos($this->user->permissions['configuration'], 'u') !== false and strpos($this->collections->collectors->actions->{$this->config->product}, 'u') !== false) {
            $update = true;
        }
        $dictionary = $this->configurationModel->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => @$this->resp->data[0]->attributes->name]) .
            view('configurationReadServers', ['data' => filter_response($this->resp->data), 'resource' => filter_response($this->resp->data[0]->attributes), 'update' => $update])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function executeFormEmail()
    {
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => @$this->resp->data[0]->attributes->name]) .
            view('configurationExecuteFormEmail')
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function executeEmail()
    {

        if (empty($this->resp->meta->received_data->attributes->email)) {
            $_SESSION['error'] = 'Email address required.';
            return redirect()->route('configurationExecuteFormEmail');
        }
        $email_to = $this->resp->meta->received_data->attributes->email;
        if (!filter_var($email_to, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'Valid email address required.';
            return redirect()->route('configurationExecuteFormEmail');
        }
        $email_config = array();
        $email_config['SMTPHost'] = $this->config->mail_server;
        $email_config['SMTPUser'] = $this->config->mail_user;
        $email_config['SMTPPass'] = $this->config->mail_password;
        $email_config['SMTPPort'] = intval($this->config->mail_server_port);
        $email_config['SMTPCrypto'] = ($this->config->mail_use_tls === 'y') ? 'tls' : '';
        $email_config['protocol'] = 'smtp';
        $email_config['newline'] = "\r\n";

        $email = service('email', $email_config);
        $email->setFrom($this->config->mail_from);
        $email->setTo($email_to);
        $email->setSubject('Email Test from Open-AudIT');
        $email->setMessage('This is an email test from your Open-AudIT Server.');
        $output = new \stdClass();
        $output->status = 'success';
        $output->message = 'An email was successfully sent.';
        if (!$email->send(false)) {
            $output->status = 'danger';
            $output->message = '';
            foreach ($this->config as $key => $value) {
                if (strpos($key, 'mail') !== false) {
                    if ($key === 'mail_password') {
                        $value = 'removed from display, but has been set';
                    }
                    $output->message .= $key . ': ' . $value . "\n";
                }
            }
            $output->message .= "\n\n" . $email->printDebugger(['headers']);
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => @$this->resp->data[0]->attributes->name]) .
            view('configurationExecuteEmail', ['output' => $output])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
