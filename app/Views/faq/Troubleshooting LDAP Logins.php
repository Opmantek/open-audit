<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Troubleshooting LDAP Logins');

$intro = '<p><h3>Using LDAPS</h3>
<p>By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below:<br>
<br>
<strong>Linux</strong><br>
<code>/usr/local/open-audit/app/Models/logonModel.php</code><br>
<br>
<strong>Windows</strong><br>
<code>c:\xampp\open-audit\app\Models\logonModel.php</code><br>
<br>
Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.<br>
<code>putenv(\'LDAPTLS_REQCERT=never\');</code><br>
<br>
Once commented out, your certificate will be validated, but may also fail this validation if you\'re using self-signed certificates and haven\'t configured your server correctly.<br>
<br>
More information about debugging this can be found on a helpful Stack Overflow thread - <a href="https://stackoverflow.com/questions/25424622/authenticating-a-self-signed-certificate-for-ldaps-connection">https://stackoverflow.com/questions/25424622/authenticating-a-self-signed-certificate-for-ldaps-connection</a>.<br>
<br>
One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.<br>
<br></p>

<h2>First</h2>
<p>Let\'s set the logging to debug. Copy the file:<br>
<strong>Linux</strong><br>
<code>/usr/local/open-audit/env</code><br>
<strong>Windows</strong><br>
<code>c:\xampp\open-audit\env</code><br>
<br>
To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17):<br>
<code># CI_ENVIRONMENT = development</code><br>
This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.<br><br>
</p>

<h2>Second</h2>
<p>Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.<br><br></p>

<h2>Third</h2>
<p>Read through the log file at open-audit\writable\logs\log-$year-$day.log and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.<br><br></p>
<br><br>
<table class="table">
	<thead>
		<tr>
			<th>Log Line</th>
			<th>Symptom</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>No Roles retrieved from database</td>
			<td>Something has gone seriously wrong. Open-AudIT cannot read the \'roles\' table.</td>
			<td>error</td>
		</tr>

		<tr>
			<td>No Orgs retrieved from database.</td>
			<td>Something has gone seriously wrong. Open-AudIT cannot read the \'orgs\' table.</td>
			<td>error</td>
		</tr>

		<tr>
			<td>$x LDAP servers retrieved from database.</td>
			<td>Where $x is a number. This many LDAP entries are in the DB and have been retrieved.</td>
			<td>debug</td>
		</tr>

		<tr>
			<td>An invalid LDAP server type was supplied $ldap-&gt;type skipping.</td>
			<td>The LDAP server type is invalid. It should be either \'active directory\' or \'openldap\'.</td>
			<td>error</td>
		</tr>

		<tr><td>An invalid LDAP version was supplied $ldap-&gt;version, skipping.</td>
			<td>Usually should be set to 3.</td>
			<td>error</td>
		</tr>
		<tr>
			<td>LDAP connect failed for LDAP server at $ip. Check your host, port and secure settings. Attempted to use $ldap_connect_string</td>
			<td>The LDAP server could not be connected to. At all. Check it\'s pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code></td>
			<td>notice</td>
			</tr>
		<tr>
			<td>LDAP server could not be reached at $ldap-&gt;host, skipping.</td>
			<td>See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.</td>
			<td>notice</td>
			</tr>
		<tr>
			<td>Invalid user supplied credentials for LDAP server at $ldap-&gt;host, skipping.</td>
			<td>The credentials supplied by the user have failed.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>Could not bind to LDAP server at $ldap-&gt;host, skipping.</td>
			<td>Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the \'connect\' above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>Successful bind using credentials for LDAP server at $ldap-&gt;host</td>
			<td>The LDAP server was connected to and the user credentials accepted for bind.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>Invalid DN supplied credentials for LDAP server at $ldap-&gt;host, skipping</td>
			<td>The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>Bound to LDAP using supplied dn details: $ldap-&gt;dn_account</td>
			<td>The administrator supplied credentials that were successfully used to bind to LDAP.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>User $username in LDAP $ldap-&gt;name but not in Open-AudIT and not using LDAP for roles. Trying next LDAP Server.</td>
			<td>The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select "Use LDAP for Roles" on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>LDAP search successful for user $username at $ldap-&gt;host</td>
			<td>LDAP was searched for this user and their account was found.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP entries retrieval successful for user $username at $ldap-&gt;host</td>
			<td>The users details were retrieved from LDAP.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP entries retrieval failed for user $username at $ldap-&gt;host</td>
			<td>The users details were not retrieved from LDAP. Check the LDAP server logs.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>LDAP search failed for user $username at $ldap-&gt;host</td>
			<td>LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user wasn\'t found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>Checking AD group membership for $user-&gt;name</td>
			<td>Information only.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>User $username is a member of LDAP group for Role $role-&gt;ad_group</td>
			<td>The user is in the LDAP group that matches this Role.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>No AD group associated with role $role-&gt;name, skipping.</td>
			<td>This Role has no AD group specified. Check the roles details within Open-AudIT. <a href="/display/OA/Roles">Roles</a></td>
			<td>debug</td>
			</tr>
		<tr>
			<td>User $username is a member of LDAP group for Org $org-&gt;ad_group</td>
			<td>The user is in the LDAP group that matches this Org.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>No AD group associated with org $org-&gt;name, skipping.</td>
			<td>This Org has no AD group specified. Check the roles details within Open-AudIT. <a href="/display/OA/Orgs">Orgs</a></td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP search for role $role-&gt;ad_group succeeded, $username is in group.</td>
			<td>The user is in the LDAP group that matches this Role.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP search for role $role-&gt;ad_group succeeded, $username is NOT in group.</td>
			<td>The user is not in the LDAP group that matches this Role.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP search failed for groups (roles) $user-&gt;name at $ldap-&gt;host</td>
			<td>The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP search for org $org-&gt;ad_group succeeded, $username is in group.</td>
			<td>The user is in the LDAP group that matches this Org.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP search for org $org-&gt;ad_group succeeded, $username is NOT in group.</td>
			<td>The user is not in the LDAP group that matches this Org.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>LDAP search failed for groups (orgs) $user-&gt;name at $ldap-&gt;host</td>
			<td>The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>No AD group associated with org $org-&gt;name, skipping.</td>
			<td>This Org has no AD group specified. Check the roles details within Open-AudIT. <span class="confluence-link">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?</span></td>
			<td>debug</td>
			</tr>
		<tr>
			<td>New user $username logged on (AD account)</td>
			<td>A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.</td>
			<td>notice</td>
			</tr>
		<tr>
			<td>Existing user $username logged on (AD account).</td>
			<td>An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.</td>
			<td>debug</td>
			</tr>
		<tr>
			<td>User $username exists in LDAP $ldap-&gt;name and attempted to logon, but does not belong to any OA groups for Roles or Organisations.</td>
			<td>The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>User $username exists in LDAP $ldap-&gt;name and attempted to logon, but does not belong to any OA groups for Organisations.</td>
			<td>The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.</td>
			<td>info</td>
			</tr>
		<tr>
			<td>User $username exists in LDAP $ldap-&gt;name and attempted to logon, but does not belong to any OA groups for Roles.</td>
			<td>The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.</td>
			<td>info</td>
			</tr>
	</tbody>
</table>
<p><br><br></p>
<h2>Forth</h2>
<p>If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the <a href="' . url_to('supportCollection') . '">Support</a> page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.<br>
<br>
Please send all three files to your support contact at Opmantek and describe your issue.<br><br></p>
';

$body = '';
