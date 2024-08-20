<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>The "Roles" endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>The primary method for authorization (what a user can do) is now based on the users\' Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9% of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br>
    <br></p><p>For more information, see <a href="' . url_to('helpFAQ') . '?name=Users, Roles and Orgs">Users, Roles and Orgs</a>.</p>';

include('users_roles_orgs.php');
