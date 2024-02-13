<?php
$body = '
<h5>Notes</h5>
<p>
A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br>
<br>
When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.<br>
</p>

<br>
<h5>Roles</h5>
<p>Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br>
<br>
Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br>
<br>
A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br>
<br>
The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br>
<br>
The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br>
<br>
The user role generally allows read only access to all items with an org_id column.<br>
<br>
</p>

<h5>Orgs</h5>
<p>
A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br>
<br>
All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br>
<br>
As at 3.3.2 we have also allowed a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br>
<br>
Don\'t forget you have granular control over what users can see and do using <a href="' . url_to('rolesHelp') . '">Roles</a> in Enterprise.<br></p><br>';
