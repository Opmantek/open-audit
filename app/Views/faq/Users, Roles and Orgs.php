<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Users, Roles and Orgs');

$intro = '<p>' . __('Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.') . '<br>
<br>
<h2>' . __('How Does It Work?') . '</h2>
<p>' . __('A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.') . '<br></p>

<br>
<h2>' . __('Roles') . '</h2>
<p>' . __('Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.') . '<br><br>
</p>

<h2>' . __('Orgs') . '</h2>
<p>' . __('A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.') . '<br><br></p>
<table class="table">
	<thead>
		<tr>
			<th>' . __('Their OrgIDs and their descendants') . '</th>
			<th>' . __('Their OrgIDs only') . '</th>
			<th>' . __('Their OrgIDs, ascendants and descendants') . '</th>
		</tr>
	</thead>
	<tbody>
		<tr style="vertical-align:top;">
			<td>
				applications<br>
				auth<br>
				baselines<br>
				baselines_policies<br>
				buildings<br>
				clouds<br>
				clusters<br>
				collectors<br>
				connections<br>
				credentials<br>
				devices<br>
				discoveries<br>
				discovery_log<br>
				floors<br>
				integrations<br>
				licenses<br>
				locations<br>
				logs<br>
				networks<br>
				orgs<br>
				rack_devices<br>
				racks<br>
				rooms<br>
				rows<br>
				search<br>
				tasks<br>
				users
			</td>
			<td>
				configuration<br>
				database<br>
				errors<br>
				help<br>
				nmis<br>
				san<br>
				test<br>
				util
			</td>
			<td>
				dashboards<br>
				discovery_scan_options<br>
				fields<br>
				files<br>
				groups<br>
				queries<br>
				roles<br>
				rules<br>
				scripts<br>
				summaries<br>
				widgets
			</td>
	</tbody>
</table>
<br>&nbsp;<br>&nbsp;
<h2>' . __('Active Directory and OpenLDAP') . '</h2>
<p>' . __('Both forms of') . ' <a href="' . url_to('authHelp') . '">LDAP</a> (Active Directory and OpenLDAP) ' . __('can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.') . '<br><br>
</p>

<br>
<h2>' . __('Example Org Chart with Access') . '</h2>

<p>' . __('Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.') . '<br>
<br></p>
<img src="' . base_url() . 'images/faq_08.png" alt="Users Roles and Orgs" style="100%">';

$body = '';
