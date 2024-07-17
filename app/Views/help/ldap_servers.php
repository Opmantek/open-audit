<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership.</p>
    <br>
    <h2>How Does it Work?</h2>
<p>
To enable this, create a new LDAP Server item by going to menu -> Admin -> LDAP Servers -> Create LDAP Servers.<br>
<br>
Input the relevant details for either Active Directory or OpenLDAP.<br>
<br>
Once you have done this, Open-AudIT will attempt to verify your user logon details against an LDAP server. If the user has valid LDAP credentials, Open-AudIT will ask LDAP for the list of groups (in LDAP) that the user is in. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.<br>
<br>
If the user account does not actually exist within Open-AudIT, it will be created. If it does exist, the details such as email, full name, etc will be updated.<br>
<br>
If the user either doesn\'t have valid LDAP credentials or is not in at least one Open-AudIT Role and Group, Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.<br>
<br>
The user in LDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work (at this stage).<br>
<br>
If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.<br>
<br>
Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.<br><br>
</p>
<h2>Troubleshooting</h2>
<p>We have more detailed instructions on troubleshooting <a href="' . url_to('helpFAQ') . '?name=Troubleshooting LDAP Logins">here</a>.<br><br></p>
<h2>Authenticate only via LDAP</h2>
<p>
You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure "Use LDAP for Authentication" is set to Y and "Use LDAP for Roles" is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT.<br><br>
</p>
<h2>Examples</h2>
<p>If using Active Directory, you do not need to populate the user_dn or user_membership_attribute attributes. These are used by OpenLDAP only.<br>
<br>
If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.
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
