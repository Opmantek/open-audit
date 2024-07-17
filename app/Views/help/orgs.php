<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like \'configuration\', most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users \'orgs\' and \'roles\' define what they can and cannot do within Open-AudIT.<br>
    <br>
    Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br>
    <br>
    Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.</p>
    <p>For more information, see <a href="' . url_to('helpFAQ') . '?name=Users, Roles and Orgs">Users, Roles and Orgs</a>.</p><br>';

include('users_roles_orgs.php');
