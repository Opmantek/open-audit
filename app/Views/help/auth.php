<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use <a href="' . url_to('helpFAQ') . '?name=Using Azure AD for Auth">Azure Active Directory</a> and <a href="' . url_to('helpFAQ') . '?name=Using OKTA for Auth">OKTA</a> for authentication.</p>
    <br>
    <h2>How Does it Work?</h2>
<p>
To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.<br>
<br>
Select the type of Auth Menthod to create and input the relevant details.<br>
<br>
As a reminder of how authorisations works in Open-AudIT, see <a href="' . url_to('helpFAQ') . '?name=Users, Roles and Orgs">Users, Roles and Orgs</a>.<br>
<br>
Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.<br>
<br>
If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.<br>
<br>
If the user either doesn\'t have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.<br>
<br>
The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.<br>
<br>
If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.<br>
<br>
Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.<br><br>
</p>
<h2>Troubleshooting</h2>
<p>We have more detailed instructions on <a href="' . url_to('helpFAQ') . '?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a>. If something doesn\'t work as expected, your first thing to do is check the logs.<br><br></p>
<h2>Authenticate only</h2>
<p>
You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure "Use for Authentication" is set to Y and "Use for Roles" is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to <a href="' . url_to('helpFAQ') . '?name=Using Azure AD for Auth">Azure Active Directory</a> and <a href="' . url_to('helpFAQ') . '?name=Using OKTA for Auth">OKTA</a> methods.<br><br>
</p>
<h2>Examples</h2>
<p>If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.
<br></p>
<p>
If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.<br>
<br>
If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.<br>
<br>
These are only examples. You may need to adjust these attributes to suit your particular LDAP.</p><br>
<h2>Default Roles Groups</h2>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>LDAP Group</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>admin</td>
            <td>open-audit_roles_admin</td>
        </tr>
        <tr>
            <td>org_admin</td>
            <td>open-audit_roles_org_admin</td>
        </tr>
        <tr>
            <td>user</td>
            <td>open-audit_roles_user</td>
        </tr>
    </tbody>
</table>
<br><br>
<h2>Default Orgs Groups</h2>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>LDAP Group</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Default Organisation</td>
            <td>open-audit_orgs_default_organisation</td>
        </tr>
    </tbody>
</table>';
$body = '<br>';
