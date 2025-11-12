<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Using OKTA for Auth');

$intro = '<p>' . __('Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.') . ' br></p>';

$body = '<p>' . __('To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.') . '</p>
<img src="' . base_url() . 'images/auth_ok_01.png" class="img-thumbnail img-fluid">

<p><br><br>' . __('In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.') . '</p>
<img src="' . base_url() . 'images/auth_ok_02.png" class="img-thumbnail img-fluid">

<p><br><br>' . __('Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.') . '</p>
<img src="' . base_url() . 'images/auth_ok_03.png" class="img-thumbnail img-fluid">

<p><br><br>' . __('Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like') . ' ' . base_url() . 'index.php, ' . __('with the Sign-On Redirect URI being') . ' ' . base_url() . 'index.php/logon/azure/auth ' . __('and the Sign-out redirect URI being') . ' ' . base_url() . 'index.php/logout<br></p>

<img src="' . base_url() . 'images/auth_ok_04.png" class="img-thumbnail img-fluid">

<p><br><br>' . __('Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.') . '<br></p>
<img src="' . base_url() . 'images/auth_ok_05.png" class="img-thumbnail img-fluid">


<p><br><br>' . __('Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.') . '<br></p>
<img src="' . base_url() . 'images/auth_ok_06.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email') . ' <a href="mailto:support.nmis@firstwavecloud.com">support.nmis@firstwavecloud.com</a> ' . __('and a support ticket will be created and actioned.') . '</p>
';
