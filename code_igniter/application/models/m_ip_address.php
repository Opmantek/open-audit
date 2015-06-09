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
class M_ip_address extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('network');
    }

    public function get_system_ip($system_id)
    {
        $sql = "SELECT sys_hw_network_card_ip.*,
			sys_hw_network_card.net_description  as net_description,
			sys_hw_network_card.net_connection_id  as net_connection_id
			FROM sys_hw_network_card_ip
			LEFT JOIN system ON (sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp)
			LEFT JOIN sys_hw_network_card ON (sys_hw_network_card_ip.net_index = sys_hw_network_card.net_index AND
				sys_hw_network_card_ip.system_id = sys_hw_network_card.system_id AND
				sys_hw_network_card_ip.timestamp = sys_hw_network_card.timestamp)
			WHERE system.system_id = ? GROUP BY ip_id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function update_missing_interfaces($system_id)
    {
        $sql = "SELECT sys_hw_network_card_ip.ip_id, sys_hw_network_card.net_index
		FROM sys_hw_network_card
		LEFT JOIN sys_hw_network_card_ip ON
		(sys_hw_network_card.system_id = sys_hw_network_card_ip.system_id AND
			sys_hw_network_card.net_mac_address = sys_hw_network_card_ip.net_mac_address)
		WHERE sys_hw_network_card.system_id = ? AND
		sys_hw_network_card_ip.net_index = ''";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $line) {
            $sql = "UPDATE sys_hw_network_card_ip SET net_index = ? WHERE ip_id = ?";
            $data = array("$line->net_index", "$line->ip_id");
            $query = $this->db->query($sql, $data);
        }
    }

    public function process_addresses($input, $details)
    {

        $this->load->model('m_oa_config');
        $this->m_oa_config->load_config();

        # As of 1.3.2 we grab the network card index using SNMP. Need to ensure we have a value here.
        if (!isset($input->net_index)) {
            $input->net_index = '';
        }

        # As at 1.5.6 we pass an additional attribute called 'type' for bonded adapters
        # We use this to test and NOT padd the MAC address if set
        if (!isset($input->type)) {
            $input->type = '';
        }

        # some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
        $input->net_mac_address = strtolower($input->net_mac_address);

        # ensure we have a fully padded mac address
        if ($input->type != 'bonded') {
            if ($input->net_mac_address != '') {
                $mymac = explode(":", $input->net_mac_address);
                for ($i = 0; $i<count($mymac); $i++) {
                    $mymac[$i] = mb_substr("00".$mymac[$i], -2);
                }
                $input->net_mac_address = implode(":", $mymac);
            }
        }

        # ensure we have the correctly padded ip v4 address
        $input->ip_address_v4 = $this->ip_address_to_db($input->ip_address_v4);

        $sql = "SELECT sys_hw_network_card_ip.ip_id FROM sys_hw_network_card_ip, system
			WHERE sys_hw_network_card_ip.system_id = system.system_id AND
				system.system_id = ? AND
				system.man_status = 'production' AND
				sys_hw_network_card_ip.net_mac_address = LOWER(?) AND
				(sys_hw_network_card_ip.ip_address_v4 = ? OR
				sys_hw_network_card_ip.ip_address_v6 = ? ) AND
				sys_hw_network_card_ip.ip_subnet = ? AND
				( sys_hw_network_card_ip.timestamp = ? OR
				sys_hw_network_card_ip.timestamp = ? )";
        $sql = $this->clean_sql($sql);
        $data = array("$details->system_id", "$input->net_mac_address", $this->ip_address_to_db($input->ip_address_v4),
                "$input->ip_address_v6", "$input->ip_subnet", "$details->original_timestamp", "$details->timestamp", );

        // note - removed the IPv6 address, below
        $sql = "SELECT sys_hw_network_card_ip.ip_id FROM sys_hw_network_card_ip, system
			WHERE sys_hw_network_card_ip.system_id = system.system_id AND
			system.system_id = ? AND system.man_status = 'production' AND
			sys_hw_network_card_ip.net_mac_address = LOWER(?) AND sys_hw_network_card_ip.ip_address_v4 = ? AND
			sys_hw_network_card_ip.ip_subnet = ? AND ( sys_hw_network_card_ip.timestamp = ? OR
			sys_hw_network_card_ip.timestamp = ? )";
        $sql = $this->clean_sql($sql);
        $data = array("$details->system_id", "$input->net_mac_address", $this->ip_address_to_db($input->ip_address_v4),
                "$input->ip_subnet", "$details->original_timestamp", "$details->timestamp", );
        $query = $this->db->query($sql, $data);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            // the network_card_ip exists - need to update its timestamp
            $sql = "UPDATE sys_hw_network_card_ip SET timestamp = ?, net_index = ? WHERE ip_id = ?";
            $data = array("$details->timestamp", "$input->net_index", "$row->ip_id");
            $query = $this->db->query($sql, $data);
        } else {
            // the network_card_ip does not exist - insert it
            $sql = "INSERT INTO sys_hw_network_card_ip ( net_mac_address,
					system_id, net_index, ip_address_v4, ip_address_v6, ip_address_version,
					ip_subnet, timestamp, first_timestamp )
					VALUES ( LOWER(?), ?, ?, ?, ?, ?, ?, ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$input->net_mac_address", "$details->system_id", "$input->net_index",
                    $this->ip_address_to_db($input->ip_address_v4),
                    "$input->ip_address_v6", "$input->ip_address_version",
                    "$input->ip_subnet", "$details->timestamp", "$details->timestamp", );
            $query = $this->db->query($sql, $data);
        }

        if ($input->ip_address_v4 != '') {
            $myip = $input->ip_address_v4." ".$input->ip_subnet;
            $ipdetails = network_details($myip);
            # NOTE - below is a hack because a 255.255.255.254 subnet mask produces an error in the network_helper -> network_details function
            # enable the below to see the error (with a 255.255.255.254 mask)
            if ($input->ip_subnet == "255.255.255.254") {
                $start_ip = $this->ip_address_to_db($ipdetails->network);
                $finish_ip = $this->ip_address_to_db($input->ip_address_v4);
            } else {
                if (isset($ipdetails->host_min)) {
                    $start_ip = $this->ip_address_to_db($ipdetails->host_min);
                } else {
                    $start_ip = "0.0.0.0";
                }
                if (isset($ipdetails->host_max)) {
                    $finish_ip = $this->ip_address_to_db($ipdetails->host_max);
                } else {
                    $finish_ip = "0.0.0.0";
                }
            }
            if ($start_ip == "0.0.0.0") {
                // do nothing - we don't have a valid IP
            } else {
                if (isset($this->config->config['network_group_auto_create']) and $this->config->config['network_group_auto_create'] != 'n' and
                    isset($ipdetails->network_slash) and $ipdetails->network_slash < $this->config->config['network_group_subnet']) {
                    $group_dynamic_select = "SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip WHERE ( sys_hw_network_card_ip.ip_address_v4 >= '".$start_ip."' AND sys_hw_network_card_ip.ip_address_v4 <= '".$finish_ip."' AND sys_hw_network_card_ip.ip_subnet = '".$input->ip_subnet."' AND sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp AND system.man_status = 'production') UNION SELECT distinct(system.system_id) FROM system WHERE (system.man_ip_address >= '".$start_ip."' AND system.man_ip_address <= '".$finish_ip."' AND system.man_status = 'production')";
                    $start = explode(' ', microtime());
                    $sql = "SELECT * FROM oa_group WHERE group_dynamic_select = ? ";
                    $data = array($group_dynamic_select);
                    $query = $this->db->query($sql, $data);
                    if ($query->num_rows() > 0) {
                        // group exists - no need to do anything
                    } else {
                        // insert new group
                        $sql = "INSERT INTO oa_group (group_id, group_name, group_padded_name, group_dynamic_select,
    							group_parent, group_description, group_category, group_icon) VALUES
    							(NULL, ?, ?, ?, '1', ?, 'network', 'switch')";
                        $sql = $this->clean_sql($sql);
                        $group_name = "Network - ".$ipdetails->network.' / '.$ipdetails->network_slash;
                        $group_padded_name = "Network - ".$this->ip_address_to_db($ipdetails->network);
                        $data = array("$group_name", "$group_padded_name", "$group_dynamic_select", "$ipdetails->network");
                        $query = $this->db->query($sql, $data);
                        $insert_id = $this->db->insert_id();
                        // We need to insert an entry into oa_group_user for any Admin level user
                        $sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
                        $data = array( $insert_id );
                        $result = $this->db->query($sql, $data);
                        # now we update this specific group
                        # this accounts for if another system has a IP that would fall in this group, but was submitted
                        # without a subnet and no matching network group was previously created.
                        # update the group with all systems that match
                        $ci = & get_instance();
                        $ci->load->model('m_oa_group');
                        $ci->m_oa_group->update_specific_group($insert_id);
                    }
                }
            }
        }
    } // end of function

    public function alert_ip_address($details)
    {
        // ip no longer detected - ONLY for devices not using DHCP
        $sql = "SELECT sys_hw_network_card_ip.ip_id, sys_hw_network_card_ip.ip_address_v4 FROM sys_hw_network_card_ip LEFT JOIN sys_hw_network_card ON sys_hw_network_card_ip.net_mac_address = sys_hw_network_card.net_mac_address WHERE sys_hw_network_card_ip.system_id = ? and sys_hw_network_card_ip.timestamp = ? and LOWER(sys_hw_network_card.net_dhcp_enabled) = 'false'";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'ip address removed - '.$myrow->ip_address_v4;
            $this->m_alerts->generate_alert($details->system_id, 'sys_hw_network_card_ip', $myrow->ip_id, $alert_details, $details->timestamp);
        }

        // new network_card_ip - ONLY for devices not using DHCP
        $sql = "SELECT
					sys_hw_network_card_ip.ip_id,
					sys_hw_network_card_ip.ip_address_v4
				FROM
					sys_hw_network_card_ip
				LEFT JOIN
					sys_hw_network_card ON (sys_hw_network_card_ip.net_mac_address = sys_hw_network_card.net_mac_address)
				LEFT JOIN
					system ON (sys_hw_network_card_ip.system_id = system.system_id)
				WHERE
					sys_hw_network_card_ip.system_id = ? AND
					sys_hw_network_card_ip.first_timestamp = ? AND
					sys_hw_network_card_ip.first_timestamp = sys_hw_network_card_ip.timestamp AND
					sys_hw_network_card_ip.first_timestamp != system.first_timestamp AND
					LOWER(sys_hw_network_card.net_dhcp_enabled) = 'false'";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            $alert_details = 'ip address detected - '.$myrow->ip_address_v4;
            $this->m_alerts->generate_alert("$details->system_id", 'sys_hw_network_card_ip', "$myrow->ip_id", $alert_details, "$details->timestamp");
        }
    }

    public function set_initial_address($system_id, $force = 'n')
    {

        # new logic
        # only set an ip address if we do not already have an existing in system table
        # no unset ('', '0.0.0.0', '000.000.000.000') addresses
        # no localhost ('127.0.0.1', '127.000.000.001') addresses
        # no 169.254.x.x addresses (RFC 3927)
        # prefer non-DHCP address (ORDER BY sys_hw_network_card.net_dhcp_enabled ASC)
        # secondary prefer private to public ip address (pubpriv)

        # get the stored attribute for man_ip_address
        $sql = "SELECT man_ip_address, timestamp FROM system WHERE system_id = ?";
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($force == 'y' or (isset($result) and is_array($result) and ($result[0]->man_ip_address == ''  or $result[0]->man_ip_address == '000.000.000.000'  or $result[0]->man_ip_address == '0.0.0.0'))) {
            # we do not already have an ip address - attempt to set one
            $sql = "SELECT
					sys_hw_network_card.net_dhcp_enabled,
					sys_hw_network_card_ip.ip_address_v4,
					if( (sys_hw_network_card_ip.ip_address_v4 >= '010.000.000.000' AND sys_hw_network_card_ip.ip_address_v4 <= '010.255.255.255') OR
						(sys_hw_network_card_ip.ip_address_v4 >= '172.016.000.000' AND sys_hw_network_card_ip.ip_address_v4 <= '172.031.255.255') OR
						(sys_hw_network_card_ip.ip_address_v4 >= '192.168.000.000' AND sys_hw_network_card_ip.ip_address_v4 <= '192.168.255.255'), 'prv', 'pub') as pubpriv
					FROM
					sys_hw_network_card LEFT JOIN sys_hw_network_card_ip ON
						(sys_hw_network_card.system_id = sys_hw_network_card_ip.system_id AND
						sys_hw_network_card.timestamp = sys_hw_network_card_ip.timestamp AND
						LOWER(sys_hw_network_card_ip.net_mac_address) = LOWER(sys_hw_network_card.net_mac_address))
					WHERE
					sys_hw_network_card.system_id = ? AND
					LOWER(sys_hw_network_card.net_ip_enabled) != 'false' AND
					sys_hw_network_card_ip.timestamp = ? AND
					sys_hw_network_card_ip.ip_address_v4 != '' AND
					sys_hw_network_card_ip.ip_address_v4 != '0.0.0.0' AND
					sys_hw_network_card_ip.ip_address_v4 != '000.000.000.000' AND
					sys_hw_network_card_ip.ip_address_v4 != '127.0.0.1' AND
					sys_hw_network_card_ip.ip_address_v4 != '127.000.000.001' AND
					sys_hw_network_card_ip.ip_address_v4 != '127.0.1.1' AND
					sys_hw_network_card_ip.ip_address_v4 != '127.000.001.001' AND
					sys_hw_network_card_ip.ip_address_v4 NOT LIKE '169.254.%'
					ORDER BY
					sys_hw_network_card.net_dhcp_enabled ASC,
					pubpriv ASC,
					sys_hw_network_card_ip.ip_address_v4 DESC
					LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$system_id", $result[0]->timestamp);
            $query = $this->db->query($sql, $data);
            $result = $query->result();

            if (isset($result[0]->ip_address_v4) and strtolower($result[0]->ip_address_v4) != '') {
                $sql = "UPDATE system SET man_ip_address = ? WHERE system_id = ?";
                $data = array($result[0]->ip_address_v4, "$system_id");
                $query = $this->db->query($sql, $data);
            }
        }
    }
}
