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
 * @version 1.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_network_card extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_network($system_id)
    {
        $sql = "SELECT
				sys_hw_network_card.*
			FROM
				sys_hw_network_card,
				system
			WHERE
				sys_hw_network_card.system_id = system.system_id AND
				sys_hw_network_card.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				net_index, net_connection_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_network_cards($input, $details)
    {

        # added ifadminstatus in 1.6.6
        if (!isset($input->ifadminstatus) or is_null($input->ifadminstatus)) {
            $input->ifadminstatus = '';
        }
        # added iflastchange in 1.6.6
        if (!isset($input->iflastchange) or is_null($input->iflastchange)) {
            $input->iflastchange = '';
        }

        # added net_alias in 1.3.3
        if (!isset($input->net_alias) or is_null($input->net_alias)) {
            $input->net_alias = '';
        }

        # added in 1.5.6
        if (! isset($input->net_slaves) or is_null($input->net_slaves)) {
            $input->net_slaves = '';
        }

        if ((string) $details->first_timestamp == (string) $details->original_timestamp
              and $details->original_last_seen_by != 'audit'
              and $details->original_last_seen_by != 'snmp') {

            # we have only seen this system once, and not via an audit script or snmp
            # insert the row and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_hw_network_card (
					system_id,
					net_mac_address,
					net_description,
					net_manufacturer,
					net_model,
					net_ip_enabled,
					net_index,
					net_connection_id,
					net_alias,
					net_connection_status,
					net_speed,
					net_adapter_type,
					net_dhcp_enabled,
					net_dhcp_server,
					net_dhcp_lease_obtained,
					net_dhcp_lease_expires,
					net_dns_host_name,
					net_dns_domain,
					net_dns_domain_reg_enabled,
					net_dns_server,
					net_slaves,
                    ifadminstatus,
                    iflastchange,
					timestamp,
					first_timestamp ) VALUES ( ?, LOWER(?), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id",
                    "$input->net_mac_address",
                    "$input->net_description",
                    "$input->net_manufacturer",
                    "$input->net_model",
                    "$input->net_ip_enabled",
                    "$input->net_index",
                    "$input->net_connection_id",
                    "$input->net_alias",
                    "$input->net_connection_status",
                    "$input->net_speed",
                    "$input->net_adapter_type",
                    "$input->net_dhcp_enabled",
                    "$input->net_dhcp_server",
                    "$input->net_dhcp_lease_obtained",
                    "$input->net_dhcp_lease_expires",
                    "$input->net_dns_host_name",
                    "$input->net_dns_domain",
                    "$input->net_dns_domain_reg_enabled",
                    "$input->net_dns_server",
                    "$input->net_slaves",
                    "$input->ifadminstatus",
                    "$input->iflastchange",
                    "$details->timestamp",
                    "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            if (!isset($details->os_group)) {
                $details->os_group = '';
            }
            # normal computers
            if ($details->type == 'computer' and $details->os_group != 'VMware') {
                $sql = "SELECT sys_hw_network_card.net_id
            			FROM sys_hw_network_card
            			WHERE sys_hw_network_card.system_id = ? AND
            				LOWER(sys_hw_network_card.net_mac_address) = LOWER(?) AND
            				( sys_hw_network_card.timestamp = ? OR sys_hw_network_card.timestamp = ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$input->net_mac_address", "$details->timestamp", "$details->original_timestamp");
            # specific case for ESX (SNMP matches on net_index, audit matches on net_connection_id)
            } elseif ($details->type == 'computer' and $details->os_group == 'VMware') {
                $sql = "SELECT sys_hw_network_card.net_id
						FROM sys_hw_network_card
						WHERE sys_hw_network_card.system_id = ? AND
							LOWER(sys_hw_network_card.net_mac_address) = LOWER(?) AND
							( LOWER(sys_hw_network_card.net_index) = LOWER(?) OR LOWER(sys_hw_network_card.net_connection_id) = LOWER(?) ) AND
							( sys_hw_network_card.timestamp = ? OR sys_hw_network_card.timestamp = ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$input->net_mac_address", "$input->net_index", "$input->net_connection_id", "$details->timestamp", "$details->original_timestamp");
            # other types of network devices
            } else {
                $sql = "SELECT sys_hw_network_card.net_id
						FROM sys_hw_network_card
						WHERE sys_hw_network_card.system_id = ? AND
							LOWER(sys_hw_network_card.net_mac_address) = LOWER(?) AND
							LOWER(sys_hw_network_card.net_index) = LOWER(?) AND
							( sys_hw_network_card.timestamp = ? OR sys_hw_network_card.timestamp = ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$input->net_mac_address", "$input->net_index", "$details->timestamp", "$details->original_timestamp");
            }

            $query = $this->db->query($sql, $data);

            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the network_card exists - update it
                $sql = "UPDATE sys_hw_network_card SET
						net_description = ?,
						net_manufacturer = ?,
						net_model = ?,
						net_ip_enabled = ?,
						net_index = ?,
						net_connection_id = ?,
						net_alias = ?,
						net_connection_status = ?,
						net_speed = ?,
						net_adapter_type = ?,
						net_dhcp_enabled = ?,
						net_dhcp_server = ?,
						net_dhcp_lease_obtained = ?,
						net_dhcp_lease_expires = ?,
						net_dns_host_name = ?,
						net_dns_domain = ?,
						net_dns_domain_reg_enabled = ?,
						net_dns_server = ?,
						net_wins_primary = ?,
						net_wins_secondary = ?,
						net_wins_lmhosts_enabled = ?,
						net_slaves = ?,
                        ifadminstatus = ?,
                        iflastchange = ?,
						timestamp = ?
					WHERE net_id = ?";
                $data = array("$input->net_description",
                        "$input->net_manufacturer",
                        "$input->net_model",
                        "$input->net_ip_enabled",
                        "$input->net_index",
                        "$input->net_connection_id",
                        "$input->net_alias",
                        "$input->net_connection_status",
                        "$input->net_speed",
                        "$input->net_adapter_type",
                        "$input->net_dhcp_enabled",
                        "$input->net_dhcp_server",
                        "$input->net_dhcp_lease_obtained",
                        "$input->net_dhcp_lease_expires",
                        "$input->net_dns_host_name",
                        "$input->net_dns_domain",
                        "$input->net_dns_domain_reg_enabled",
                        "$input->net_dns_server",
                        "$input->net_wins_primary",
                        "$input->net_wins_secondary",
                        "$input->net_wins_lmhosts_enabled",
                        "$input->net_slaves",
                        "$input->ifadminstatus",
                        "$input->iflastchange",
                        "$details->timestamp",
                        "$row->net_id", );
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql, $data);
            } else {
                // the network_card does not exist - insert it
                $sql = "INSERT INTO sys_hw_network_card (
						system_id,
						net_mac_address,
						net_description,
						net_manufacturer,
						net_model,
						net_ip_enabled,
						net_index,
						net_connection_id,
						net_alias,
						net_connection_status,
						net_speed,
						net_adapter_type,
						net_dhcp_enabled,
						net_dhcp_server,
						net_dhcp_lease_obtained,
						net_dhcp_lease_expires,
						net_dns_host_name,
						net_dns_domain,
						net_dns_domain_reg_enabled,
						net_dns_server,
						net_slaves,
                        ifadminstatus,
                        iflastchange,
						timestamp,
						first_timestamp ) VALUES ( ?, LOWER(?), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->net_mac_address",
                        "$input->net_description",
                        "$input->net_manufacturer",
                        "$input->net_model",
                        "$input->net_ip_enabled",
                        "$input->net_index",
                        "$input->net_connection_id",
                        "$input->net_alias",
                        "$input->net_connection_status",
                        "$input->net_speed",
                        "$input->net_adapter_type",
                        "$input->net_dhcp_enabled",
                        "$input->net_dhcp_server",
                        "$input->net_dhcp_lease_obtained",
                        "$input->net_dhcp_lease_expires",
                        "$input->net_dns_host_name",
                        "$input->net_dns_domain",
                        "$input->net_dns_domain_reg_enabled",
                        "$input->net_dns_server",
                        "$input->net_slaves",
                        "$input->ifadminstatus",
                        "$input->iflastchange",
                        "$details->timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        } // end of if first audit/snmp test
    } // end of function

    public function alert_network_card($details)
    {
        // network_card no longer detected
        $sql = "SELECT net_id, net_model, LOWER(net_mac_address) as net_mac_address FROM sys_hw_network_card WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'network card removed - '.$myrow->net_model.' ('.$myrow->net_mac_address.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_network_card', $myrow->net_id, $alert_details, $details->timestamp);
        }

        // new network card
        $sql = "SELECT net_id, net_model, LOWER(net_mac_address) as net_mac_address
			FROM
				sys_hw_network_card LEFT JOIN system ON (sys_hw_network_card.system_id = system.system_id)
			WHERE
				sys_hw_network_card.system_id = ? AND
				sys_hw_network_card.first_timestamp = ? AND
				sys_hw_network_card.first_timestamp = sys_hw_network_card.timestamp AND
				sys_hw_network_card.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'network card installed - '.$myrow->net_model.' ('.$myrow->net_mac_address.')';
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_network_card', $myrow->net_id, $alert_details, $details->timestamp);
        }
    }
}
