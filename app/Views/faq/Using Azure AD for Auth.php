<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Using Azure AD for Auth');

$intro = '<p>Open-AudIT can use Azure Active Directory (Azure AD) as an authentication method. This means your user in Open-AudIT can click the Logon using Azure button on the logon page and use their Azure AD credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.<br></p>';

$body = '<p>To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Azure AD \'preferred username\' attribute. There is no need for a Full Name or Email - these will be populated from Azure. If you don\'t know your users \'preferred username\', fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Azure and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you\'ll see their \'preferred username\' logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the \'type\' to Azure.</p>
<img src="' . base_url() . 'images/auth_az_14.png" class="img-thumbnail img-fluid">

<p><br><br>In a second tab or window sign-on to your Azure Active Directory console and go to Enterprise Applications, then click \'New application\'.</p>
<img src="' . base_url() . 'images/auth_az_01.png" class="img-thumbnail img-fluid">

<p><br><br><br>Next click \'Create your own application\'.</p>
<img src="' . base_url() . 'images/auth_az_02.png" class="img-thumbnail img-fluid">

<p><br><br><br>And provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for \'Integrate any other application you don\'t find in the gallery (Non-gallery)\' is selected. And then click \'Create\'.</p>
<img src="' . base_url() . 'images/auth_az_03.png" class="img-thumbnail img-fluid">

<p><br><br><br>Copy the \'Application ID\' field and paste it into the Open-AudIT \'Client ID\' field for the new Auth Method.</p>
<img src="' . base_url() . 'images/auth_az_04.png" class="img-thumbnail img-fluid">

<p><br><br><br>Click on \'Properties\' under the \'Manage\' header in the central menu column. Copy the \'User Access URL\'.<br>
Once copied, paste it into yout text editor. You will need to copy one section of this field.<br>
Our example field looks like this<br>
<code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br>
The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the \'Tenant\' field, so paste it in there.
</p>
<img src="' . base_url() . 'images/auth_az_05.png" class="img-thumbnail img-fluid">


<p><br><br><br>Go to the \'Single sign-on\' menu item and click the Edit button for \'Basic SAML Configuration\'.</p>
<img src="' . base_url() . 'images/auth_az_06.png" class="img-thumbnail img-fluid">

<p><br><br><br>Add an \'Identifier\' field (we have simply used the Open-AudIT servers base URL).<br>
From the Open-AudIT form, copy the value for the \'Redirect URI\' field and paste it into the \'reply URL\' field in Azure AD.
<br>The \'Logout URL\' is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT server\'s http address, as per the screenshot.<br>
Normally your Open-AudIT URL will look something like http://YOURSERVER/open-audit/index.php, with the Redirect URI being http://YOURSERVER/open-audit/index.php/logon/azure/auth and the Logout URL being http://YOURSERVER/open-audit/index.php/logout<br></p>
<img src="' . base_url() . 'images/auth_az_07.png" class="img-thumbnail img-fluid">

<p><br><br><br>Go to the \'Applications\' -> \'App registrations\' menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).</p>
<img src="' . base_url() . 'images/auth_az_08.png" class="img-thumbnail img-fluid">

<p><br><br><br>Go to the \'Certificates and secrets\' menu item under \'Manage\' in the center menu.</p>
<img src="' . base_url() . 'images/auth_az_09.png" class="img-thumbnail img-fluid">

<p><br><br><br>Click \'New client secret\'.</p>
<img src="' . base_url() . 'images/auth_az_10.png" class="img-thumbnail img-fluid">

<p><br><br><br>Provide a description and select and expires duration.</p>
<img src="' . base_url() . 'images/auth_az_11.png" class="img-thumbnail img-fluid">

<p><br><br><br>Copy the value and paste it into the Open-AudIT form for the \'Client Secret\' field.</p>
<img src="' . base_url() . 'images/auth_az_12.png" class="img-thumbnail img-fluid">

<p><br><br><br>And lastly click \'Submit\' to create your Open-AudIT Auth method for Azure AD.</p>
<img src="' . base_url() . 'images/auth_az_13.png" class="img-thumbnail img-fluid">

<p><br><br><br>Your user should now be able to logon by clicking the \'Logon with Azure\' button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users \'preferred username\'.
<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!
<br><br>As always, if you have troubles with this feature, please email <a href="mailto:support.nmis@firstwavecloud.com">support.nmis@firstwavecloud.com</a> and a support ticket will be created and actioned.</p>
';
