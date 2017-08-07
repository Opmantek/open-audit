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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version   2.0.4

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Default Groups"); ?></h3></div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>SQL</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>All Devices</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">All the devices a user is authorised to view.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter</pre></td>
                </tr>

                <tr>
                    <td>Apple Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_family like OSX.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND (os_family LIKE '%osx' OR os_family LIKE '%macos%')</pre></td>
                </tr>

                <tr>
                    <td>Centos Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_family like Centos.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'centos'</pre></td>
                </tr>

                <tr>
                    <td>Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer'</pre></td>
                </tr>

                <tr>
                    <td>Debian Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_family like Debian.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'debian'</pre></td>
                </tr>

                <tr>
                    <td>Linux Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_group like Linux.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_group LIKE 'linux'</pre></td>
                </tr>

                <tr>
                    <td>Open-AudIT Enterprise Managed Devices</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices Managed by Open-AudIT Enterprise.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT distinct(system.id) FROM system WHERE @filter AND system.status = 'production' and oae_manage = 'y'</pre></td>
                </tr>

                <tr>
                    <td>Printers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = printer.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'printer'</pre></td>
                </tr>

                <tr>
                    <td>Public IP Devices</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with a public IP address and a status of production.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT distinct(system.id) FROM system LEFT JOIN ip ON (ip.system_id = system.id AND ip.current = 'y') WHERE @filter AND ((( ip.ip > '000.000.000.000' AND ip.ip < '010.000.000.000' ) OR ( ip.ip > '010.255.255.255' AND ip.ip < '169.254.0.0' ) OR ( ip.ip > '169.254.255.255' AND ip.ip < '172.016.000.000' ) OR ( ip.ip > '172.31.255.255' AND ip.ip < '192.168.000.000' ) OR ip.ip > '192.168.255.255' ) OR ( ( system.ip > '000.000.000.000' AND system.ip < '010.000.000.000' ) OR ( system.ip > '010.255.255.255' AND system.ip < '169.254.0.0' ) OR ( system.ip > '169.254.255.255' AND system.ip < '172.016.000.000' ) OR ( system.ip > '172.31.255.255' AND system.ip < '192.168.000.000' ) OR system.ip > '192.168.255.255' )) AND system.status = 'production'</pre></td>
                </tr>

                <tr>
                    <td>RedHat Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_family like RedHat.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_family LIKE 'redhat'</pre></td>
                </tr>

                <tr>
                    <td>Routers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = router.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'router'</pre></td>
                </tr>

                <tr>
                    <td>Switches</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = switch.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'switch'</pre></td>
                </tr>

                <tr>
                    <td>Virtual Hosts</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with class = hypervisor.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.class = 'hypervisor'</pre></td>
                </tr>

                <tr>
                    <td>Windows Computers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_group like Windows.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_group LIKE 'windows'</pre></td>
                </tr>

                <tr>
                    <td>Windows Servers</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_name like Windows Server.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND os_name LIKE '%windows%server%'</pre></td>
                </tr>

                <tr>
                    <td>Windows Workstations</td>
                    <td style="word-wrap: break-word; white-space: pre-wrap; min-width: 350px;">Devices with type = computer and os_name like Windows and os_name not like Server.</td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;">SELECT DISTINCT(system.id) FROM system WHERE @filter AND system.type = 'computer' AND system.os_name LIKE '%windows%' AND system.os_name NOT LIKE '%server%'</pre></td>
                </tr>



            </tbody>
        </table>
    </div>
</div>