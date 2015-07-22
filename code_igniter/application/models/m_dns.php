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
 * @version 1.8.2
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_dns extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_dns($system_id)
    {
        $sql = "SELECT dns_id, dns_name, dns_full_name, dns_ip_address FROM sys_sw_dns, system
			WHERE sys_sw_dns.system_id = system.system_id AND sys_sw_dns.timestamp = system.timestamp AND system.system_id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function create_dns_entries($id = 0)
    {

        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->file = 'system';
        $log_details->severity = 7;
        $sql = "SELECT ip_address_v4 FROM sys_hw_network_card_ip LEFT JOIN system ON (sys_hw_network_card_ip.system_id = system.system_id AND sys_hw_network_card_ip.timestamp = system.timestamp) WHERE system.system_id = ?";
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        #$log_details->message = $this->db->last_sql();
        #stdlog($log_details);
        $dns_entries = array();
        foreach ($result as $row) {
            $ip = $this->ip_address_from_db($row->ip_address_v4);
            if (isset($ip) and $ip != '0.0.0.0' and $ip != '000.000.000.000' and $ip != '' and $ip != '127.0.0.1' and filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                $dns_entry = new stdClass();
                $dns_entry->ip = $ip;
                $dns_entry->fqdn = '';
                $dns_entry->name = '';
                $dns_entry->fqdn = gethostbyaddr($ip);
                if ($dns_entry->fqdn == $dns_entry->ip) {
                    $dns_entry->fqdn = '';
                } else {
                    if (strrpos($dns_entry->fqdn, '.')) {
                        $temp = explode('.', $dns_entry->fqdn);
                        $dns_entry->name = $temp[0];
                        unset($temp);
                    } else {
                        $dns_entry->name = $dns_entry->fqdn;
                        $dns_entry->fqdn = '';
                    }
                }
                $dns_entries[] = $dns_entry;
                unset($dns_entry);
            }
        }
        foreach ($dns_entries as $dns_entry) {
            if ($dns_entry->name != '') {
                $ip = gethostbyname($dns_entry->name);
                if ($ip != $dns_entry->ip and $ip != $dns_entry->name) {
                    foreach ($dns_entries as $dns) {
                        if ($dns->ip == $ip) {
                            $ip = '';
                        }
                        unset($dns);
                    }
                    if ($ip != '') {
                        $new = new stdClass();
                        $new->ip = $ip;
                        $new->name = $dns_entry->name;
                        $new->fqdn = $dns_entry->fqdn;
                        $dns_entries[] = $new;
                    }
                }
            }
        }
        $sql = "SELECT system_audits_time FROM sys_man_audits WHERE system_id = ? ORDER BY system_audits_time DESC LIMIT 2";
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        #$log_details->message = $this->db->last_query();
        #stdlog($log_details);
        if (isset($result)) {
            if (isset($result[0]->system_audits_time)) {
                $timestamp = $result[0]->system_audits_time;
            }
            if (isset($result[1]->system_audits_time)) {
                $last_timestamp = $result[1]->system_audits_time;
            }
        }


        $sql = "DELETE FROM sys_sw_dns WHERE system_id = ?";
        $data = array($id);
        $query = $this->db->query($sql, $data);

        foreach ($dns_entries as $dns_entry) {

            $sql = "INSERT INTO sys_sw_dns VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            $data = array("$id", "$dns_entry->name", "$dns_entry->fqdn", $this->ip_address_to_db("$dns_entry->ip"), "$timestamp", "$timestamp");
            $query = $this->db->query($sql, $data);

            // TODO - fix this for v2 as per the virtual machines.

            // $sql = "SELECT * FROM sys_sw_dns WHERE dns_ip_address = ? AND dns_name = ? AND system_id = ? AND timestamp = ? OR timestamp = ?";
            // $data = array("$dns_entry->ip", "$dns_entry->name", "$id", "$timestamp", "$last_timestamp");
            // $query = $this->db->query($sql, $data);
            // $result = $query->result();
            // if (count($result) > 1) {
            //     $sql = "DELETE FROM sys_sw_dns WHERE dns_ip_address = ? AND dns_name = ? AND system_id = ? AND timestamp = ? OR timestamp = ?";
            //     $data = array("$dns_entry->ip", "$dns_entry->name", "$id", "$timestamp", "$last_timestamp");
            //     $query = $this->db->query($sql, $data);
            //     $sql = "INSERT INTO sys_sw_dns VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            //     $data = array("$id", "$dns_entry->name", "$dns_entry->fqdn", "$dns_entry->ip", "$timestamp", "$timestamp");
            //     $query = $this->db->query($sql, $data);
            // }
            // if (count($result) == 0) {
            //     $sql = "INSERT INTO sys_sw_dns VALUES (NULL, ?, ?, ?, ?, ?, ?)";
            //     $data = array("$id", "$dns_entry->name", "$dns_entry->fqdn", "$dns_entry->ip", "$timestamp", "$timestamp");
            //     $query = $this->db->query($sql, $data);
            // }
            // if (count($result) == 1) {
            //     $sql = "UPDATE sys_sw_dns SET timestamp = ? WHERE dns_id = ?";
            //     $data = array("$timestamp", $result[0]->dns_id);
            //     $query = $this->db->query($sql, $data);
            // }
        }
    }

    public function process_dns($input, $details)
    {
        if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
            # we have only seen this system once, and not via an audit script
            # insert the software and set the first_timestamp == system.first_timestamp
            # otherwise we cause alerts
            $sql = "INSERT INTO sys_sw_dns ( system_id, dns_name, dns_full_name, dns_ip_address, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ? )";
            $sql = $this->clean_sql($sql);
            $data = array(    "$details->system_id", "$input->dns_name", "$input->dns_full_name",
                    "$input->dns_ip_address", "$details->timestamp", "$details->first_timestamp", );
            $query = $this->db->query($sql, $data);
        } else {
            // check for dns changes
            $sql = "SELECT sys_sw_dns.dns_id FROM sys_sw_dns, system WHERE sys_sw_dns.system_id = system.system_id AND
					system.system_id = ? AND system.man_status = 'production' AND dns_name = ? AND
					dns_full_name = ? AND dns_ip_address = ? AND ( sys_sw_dns.timestamp = ? OR sys_sw_dns.timestamp = ? )
				LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$input->dns_name", "$input->dns_full_name",
                    "$input->dns_ip_address", "$details->original_timestamp", "$details->timestamp",    );
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                // the dns entry exists - need to update it
                $sql = "UPDATE sys_sw_dns SET timestamp = ? WHERE dns_id = ? ";
                $data = array("$details->timestamp", "$row->dns_id");
                $query = $this->db->query($sql, $data);
            } else {
                // the dns entry does not exist - insert it
                $sql = "INSERT INTO sys_sw_dns ( system_id, dns_name, dns_full_name, dns_ip_address, timestamp, first_timestamp ) VALUES ( ?, ?, ?, ?, ?, ? )";
                $sql = $this->clean_sql($sql);
                $data = array(    "$details->system_id", "$input->dns_name", "$input->dns_full_name",
                        "$input->dns_ip_address", "$details->timestamp", "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    } // end of function

    public function alert_dns($details)
    {
        // new dns
        $sql = "SELECT dns_id, dns_name, dns_ip_address
			FROM
				sys_sw_dns LEFT JOIN system ON (sys_sw_dns.system_id = system.system_id)
			WHERE
				sys_sw_dns.system_id = ? AND
				sys_sw_dns.first_timestamp = ? AND
				sys_sw_dns.first_timestamp = sys_sw_dns.timestamp AND
				sys_sw_dns.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $myrow) {
            $alert_details = 'dns entry detected - '.$myrow->dns_name." for ".$myrow->dns_ip_address;
            $this->m_alerts->generate_alert($details->system_id, 'sys_sw_dns', $myrow->dns_id, $alert_details, $details->timestamp);
        }
    }
}
