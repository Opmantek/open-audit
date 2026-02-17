<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$test = '';
if (!str_contains(base_url(), 'https:')) {
    $test = '<p><strong class="text-danger">' . __('IMPORTANT') . '</strong>' . __(', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.') . '</p>';
}

$title = __('Using Entra for Auth');

$intro = '<p>' . __('Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned') . ' <a href="' . url_to('rolesHelp') . '">' . __('Roles') . '</a> ' . __('and') . ' <a href="' . url_to('orgsHelp') . '">' . __('Orgs') . '</a>)' . __(', but will not need to remember a separate set of logon credentials.') . '<br></p>';

$body = '<p>' . __('To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.') . '<br></p>' . $test . '



<p>' . __('Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.') . '</p>
<img src="' . base_url() . 'images/auth_az_14.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('In a second tab or window sign-on to your') . ' <a href="https://entra.microsoft.com/#home" target="_blank">Entra ' . __('console') . ' <i class="icon-square-arrow-out-up-right"></i></a> ' . __('and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.') . '</p>
<img src="' . base_url() . 'images/auth_az_01.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Next click <i>Create your own application</i>.') . '</p>
<img src="' . base_url() . 'images/auth_az_02.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.') . '</p>
<img src="' . base_url() . 'images/auth_az_03.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.') . '</p>
<img src="' . base_url() . 'images/auth_az_04.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.') . '</p>

<img src="' . base_url() . 'images/auth_az_05.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.') . '</p>
<img src="' . base_url() . 'images/auth_az_15.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Click the Edit button for <i>Basic SAML Configuration</i>.') . '</p>
<img src="' . base_url() . 'images/auth_az_06.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Populate the with values provided below:') . '<br>
<strong>Identifier (Entity ID):</strong> <code>' . base_url() . 'index.php</code><br>
<strong>Reply URL (Assertion Consumer Service URL):</strong> <code>' . base_url() . 'index.php/logon/entra/auth</code><br>
' . $test . '
<img src="' . base_url() . 'images/auth_az_07.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).') . '</p>
<img src="' . base_url() . 'images/auth_az_08.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.') . '</p>
<img src="' . base_url() . 'images/auth_az_09.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Click <i>New client secret</i>.') . '</p>
<img src="' . base_url() . 'images/auth_az_10.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Provide a description and select and expires duration.') . '</p>
<img src="' . base_url() . 'images/auth_az_11.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.') . '</p>
<img src="' . base_url() . 'images/auth_az_12.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.') . '</p>
<img src="' . base_url() . 'images/auth_az_13.png" class="img-thumbnail img-fluid">

<p><br><br><br>' . __('Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email') . ' <a href="mailto:support.nmis@firstwavecloud.com">support.nmis@firstwavecloud.com</a> ' . __('and a support ticket will be created and actioned.') . '</p>
';
