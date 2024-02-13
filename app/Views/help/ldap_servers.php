<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>If using Active Directory, you do not need to populate the user_dn or user_membership_attribute attributes. These are used by OpenLDAP only.<br>
    If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.<br>
    <br>
    Examples:<br>
    <br>
    If you need to configure OpenLDAP access for your users and a given users access DN is normally uid=username@domain,cn=People,dc=your,dc=domain,dc=com then you should set base_dn to dc=your,dc=domain,dc=com and user_dn to uid=@username@@domain,cn=People. The special words @username and @domain will be replaced by the login details provided by your user on the login page.<br>
    <br>
    If you need to configure Active Directory access, you can usually use the example of cn=Users,dc=your,dc=domain,dc=com for your base_dn. here is no need to set user_dn.<br>
    <br>
    These are only examples. You may need to adjust these attributes to suit your particular LDAP.</p><br>';

$body = '<br>';
