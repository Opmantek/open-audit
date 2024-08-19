<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Using OKTA for Auth');

$intro = '<p>Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.<br></p>';

$body = '<p>To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA \'name\' attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you don\'t know your users \'name\', fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you\'ll see their \'name\' logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the \'type\' to Okta.</p>
<img src="' . base_url() . 'images/auth_ok_01.png" class="img-thumbnail img-fluid">

<p><br><br>In a second tab or window go to your OKTA console and click \'Create App Integration\'.</p>
<img src="' . base_url() . 'images/auth_ok_02.png" class="img-thumbnail img-fluid">

<p><br><br>Use a \'Sign-in method\' of OIDC - OpenID Connect and an \'Application Type\' of Web Application. Click \'Next\'. </p>
<img src="' . base_url() . 'images/auth_ok_03.png" class="img-thumbnail img-fluid">

<p><br><br>Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.
<br>From the Open-AudIT form, copy the value for the \'Redirect URI\' field and paste it into the \'Sign-in redirect URIs\' field in OKTA.
<br>The \'Sign-out redirect URIs\' is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT server\'s http address, as per the screenshot.<br>
Normally your Open-AudIT URL will look something like http://YOURSERVER/open-audit/index.php, with the Sign-On Redirect URI being http://YOURSERVER/open-audit/index.php/logon/azure/auth and the Sign-out redirect URI being http://YOURSERVER/open-audit/index.php/logout<br></p>
<img src="' . base_url() . 'images/auth_ok_04.png" class="img-thumbnail img-fluid">

<p><br><br>Copy the \'Client ID\' and paste it into the Open-AudIT \'Client ID\' field.
<br>If there is no secret, click \'Generate new secret\', then copy the value and paste it into the Open-AudIT \'Client Secret\' field.<br></p>
<img src="' . base_url() . 'images/auth_ok_05.png" class="img-thumbnail img-fluid">


<p><br><br>Select the \'Sign On\' tab and copy the value for \'Issuer\' (just the URL itself). Paste this into the Open-AudIT \'Issuer\' field.<br></p>
<img src="' . base_url() . 'images/auth_ok_06.png" class="img-thumbnail img-fluid">






<p><br><br><br>Your user should now be able to logon by clicking the \'Logon with OKTA\' button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users \'name\'.
<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!
<br><br>As always, if you have troubles with this feature, please email <a href="mailto:support.nmis@firstwavecloud.com">support.nmis@firstwavecloud.com</a> and a support ticket will be created and actioned.</p>
';
