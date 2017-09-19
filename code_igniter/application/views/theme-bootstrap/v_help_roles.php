<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.6
* @link      http://www.open-audit.org
 */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Default Roles"); ?></h3></div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo __('Name'); ?></th>
                    <th><?php echo __('Description'); ?></th>
                    <th><?php echo __('AD Group'); ?></th>
                    <th><?php echo __('Permissions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr><td><?php echo __('admin'); ?></td><td>This role can change global options.</td><td>open-audit_roles_admin</td><td><pre style="word-wrap: break-word; white-space: pre-wrap;">{"agents":"crud", "attributes":"crud", "baselines":"crud", "collectors":"crud", "configuration":"crud", "database":"crud", "errors":"r", "groups":"crud", "ldap_servers":"crud", "logs":"crud", "nmis":"crud", "queries":"crud", "reports":"r", "roles":"crud", "search":"crud", "sessions":"crud", "summaries":"crud", "tasks":"crud"}</pre></td></tr>

                <tr><td><?php echo __('org_admin'); ?></td><td>This role is used for administration of endpoints that contain an org_id.</td><td>open-audit_roles_org_admin</td><td><pre style="word-wrap: break-word; white-space: pre-wrap;">{"attributes":"crud", "baselines":"crud", "charts":"crud", "connections":"crud", "credentials":"crud", "errors":"r", "summaries":"crud", "devices":"crud", "discoveries":"crud", "fields":"crud", "files":"crud", "graph":"crud", "groups":"crud", "invoice":"crud", "licenses":"crud", "locations":"crud", "networks":"crud", "orgs":"crud", "queries":"crud", "reports":"r", "scripts":"crud", "search":"crud", "sessions":"crud", "tasks":"crud", "users":"crud"}</pre></td></tr>

                <tr><td><?php echo __('reporter'); ?></td><td>The role used for reading endpoints and creating reports above to the user role.</td><td>open-audit_roles_reporter</td><td><pre style="word-wrap: break-word; white-space: pre-wrap;">{"baselines":"crud", "charts":"r", "connections":"r", "credentials":"r", "errors":"r", "summaries":"r", "devices":"r", "fields":"r", "files":"r", "graph":"r", "groups":"r", "invoice":"r", "licenses":"crud", "locations":"r", "networks":"r", "orgs":"r", "queries":"crud", "reports":"r", "search":"crud", "sessions":"crud"}</pre></td></tr>

                <tr><td><?php echo __('user'); ?></td><td>A standard role that can read all endpoints that contain an org_id.</td><td>open-audit_roles_user</td><td><pre style="word-wrap: break-word; white-space: pre-wrap;">{"baselines":"r", "charts":"r", "connections":"r", "credentials":"r", "summaries":"r", "devices":"r", "errors":"r", "fields":"r", "files":"r", "graph":"r", "groups":"r", "invoice":"r", "licenses":"r", "locations":"r", "networks":"r", "orgs":"r", "queries":"r", "reports":"r", "search":"crud", "sessions":"crud"}</pre></td></tr>

                <tr><td><?php echo __('collector'); ?></td><td>The collector specific role.</td><td>open-audit_roles_collector</td><td><pre style="word-wrap: break-word; white-space: pre-wrap;">{"configuration":"r", "credentials":"r", "devices":"cr", "discoveries":"r", "locations":"r", "networks":"cr", "orgs":"r", "sessions":"crud"}</pre></td></tr>

                <tr><td><?php echo __('agent'); ?></td><td>The agent specific role.</td><td>open-audit_roles_agent</td><td><pre style="word-wrap: break-word; white-space: pre-wrap;">{"configuration":"r", "credentials":"r", "devices":"cr", "discoveries":"r", "locations":"r", "networks":"cr", "orgs":"r", "sessions":"crud"}</pre></td><td>

            </tbody>
        </table>
    </div>
</div>