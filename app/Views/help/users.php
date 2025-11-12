<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>' . __('The User endpoint allows you to manage user accounts within Open-AudIT.') . '</p>

<br>
<h2>' . __('How Does it Work?') . '</h2>

<p>' . __('A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.') . '</p>

<p>' . __('For more information, see') . ' <a href="' . url_to('helpFAQ') . '?name=Users, Roles and Orgs">' . __('Users, Roles and Orgs') . '</a>.</p>';

include('users_roles_orgs.php');
