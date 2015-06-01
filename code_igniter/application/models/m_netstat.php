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
class M_netstat extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_system_netstat($system_id)
    {
        $sql = "SELECT * FROM sys_sw_netstat,
				system
			WHERE
				sys_sw_netstat.system_id = system.system_id AND
				sys_sw_netstat.timestamp = system.timestamp AND
				system.system_id = ?
			GROUP BY
				sys_sw_netstat.id";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function process_netstat($input, $details)
    {
        define('NL_NIX', "\n");
        define('NL_WIN', "\r\n");
        define('NL_MAC', "\r");

        if (strpos($input[0], NL_WIN) !== false) {
            #echo "win\n";
        } elseif (strpos($input[0], NL_MAC) !== false) {
            #echo "mac\n";
        } elseif (strpos($input[0], NL_NIX) !== false) {
            #echo "nix\n";
        }

        $input[0] = str_replace(array(NL_WIN, NL_MAC, NL_NIX), "\n", $input[0]);

        // need to parse the input based on os_group.
        if (strtolower($details->os_group) == "windows") {
            if (strtolower($details->os_family) == "windows 2000" or strtolower($details->os_family) == "windows xp" or strtolower($details->os_family) == "windows 2003") {
                $offset = 4;
            } else {
                $offset = 3;
            }
            $lines = explode("\n", $input);
            $input = null;
            $input_array = array();
            foreach ($lines as $line) {
                $i = new stdClass();
                if (strpos($line, ":") !== false) {
                    $line = trim($line);
                    $line = str_replace("LISTENING", "", $line);
                    $line = preg_replace('/  +/', ' ', $line);
                    $attributes = explode(" ", $line);

                    $t_ar = explode(":", $attributes[1]);
                    $i->port = $t_ar[count($t_ar)-1];
                    if (strpos($t_ar[0], "[") !== false) {
                        $i->protocol = strtolower($attributes[0])."6";
                    } else {
                        $i->protocol = strtolower($attributes[0]);
                    }
                    $i->ip_address = str_replace(":".$i->port, "", $attributes[1]);
                    $i->ip_address = str_replace("[", "", $i->ip_address);
                    $i->ip_address = str_replace("]", "", $i->ip_address);
                    $i->program = "";
                    for ($j = $offset; $j <= (count($attributes)-1); $j++) {
                        $i->program .= $attributes[$j]." ";
                    }
                    $i->program = trim($i->program);
                    if (isset($i->protocol)) {
                        $input_array[] = $i;
                    }
                }
            }
        }
        if (strtolower($details->os_group) == "linux") {
            $lines = explode("\n", $input[0]);
            $input = null;
            $input_array = array();
            foreach ($lines as $line) {
                $i = new stdClass();
                if (strpos($line, ":") !== false) {
                    $offset = 5;
                    $line = trim($line);
                    $line = str_replace("LISTEN", "", $line);
                    $line = preg_replace('/  +/', ' ', $line);
                    $attributes = explode(" ", $line);

                    $t_ar = explode(":", $attributes[3]);
                    $i->port = $t_ar[count($t_ar)-1];
                    $i->protocol = strtolower($attributes[0]);

                    $i->ip_address = str_replace(":".$i->port, "", $attributes[3]);
                    if ((substr_count($i->ip_address, ":") > 1) and (strlen($i->protocol) == 3)) {
                        $i->protocol = $i->protocol."6";
                    }
                    $i->program = "";
                    $t_program = "";
                    for ($j = $offset; $j <= count($attributes)-1; $j++) {
                        $t_program .= $attributes[$j]." ";
                    }
                    $t_program = trim($t_program);
                    $t_explode = explode("/", $t_program);
                    $i->program = @$t_explode[1];
                    if (!isset($i->program)) {
                        $i->program = '';
                    }
                    if ($i->protocol != '') {
                        $input_array[] = $i;
                    }
                }
            }
        }
        if (strtolower($details->os_family) == "ibm aix") {
            $lines = explode("\n", $input[0]);
            $input = null;
            $input_array = array();
            foreach ($lines as $line) {
                if ($line > '') {
                    $i = new stdClass();
                    $attributes = explode(" ", $line);

                    #protocol - tcp, tcp4, udp or udp4
                    $i->protocol = $attributes[0];

                    # ip address and port
                    $port_split = explode(".", $attributes[1]);
                    $i->port = $port_split[count($port_split)-1];
                    if (count($port_split) == 5) {
                        $i->ip_address = $port_split[0].".".$port_split[1].".".$port_split[2].".".$port_split[3];
                    } else {
                        $i->ip_address = "0.0.0.0";
                    }

                    # program (name of the program or unknown)
                    $i->program = "";
                    $t_program = "";
                    for ($j = 2; $j <= count($attributes)-1; $j++) {
                        $t_program .= $attributes[$j]." ";
                    }
                    $i->program = trim($t_program);
                    if ($i->port == intval($i->port) and $i->port != "\t\t") {
                        $input_array[] = $i;
                    }
                }
            }
        }

        foreach ($input_array as $input) {
            if (((string) $details->first_timestamp == (string) $details->original_timestamp) and ($details->original_last_seen_by != 'audit')) {
                # we have only seen this system once, and not via an audit script
                # insert the software and set the first_timestamp == system.first_timestamp
                # otherwise we cause alerts
                $sql = "INSERT INTO sys_sw_netstat
					( 	system_id,
						protocol,
						ip_address,
						port,
						program,
						timestamp,
						first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->protocol",
                        "$input->ip_address",
                        "$input->port",
                        "$input->program",
                        "$details->timestamp",
                        "$details->first_timestamp", );
                $query = $this->db->query($sql, $data);
            } else {
                // need to check for netstat changes
                $sql = "SELECT sys_sw_netstat.id FROM sys_sw_netstat, system
						WHERE
							sys_sw_netstat.system_id 	= system.system_id AND
							system.system_id			= ? AND
							system.man_status 			= 'production' AND
							sys_sw_netstat.protocol 	= ? AND
							sys_sw_netstat.ip_address 	= ? AND
							sys_sw_netstat.port 		= ? AND
							sys_sw_netstat.program 		= ? AND
							( sys_sw_netstat.timestamp = ? OR sys_sw_netstat.timestamp = ? )";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id",
                        "$input->protocol",
                        "$input->ip_address",
                        "$input->port",
                        "$input->program",
                        "$details->original_timestamp",
                        "$details->timestamp", );
                $query = $this->db->query($sql, $data);
                if ($query->num_rows() > 0) {
                    $row = $query->row();
                    // the netstat exists - need to update its timestamp
                    $sql = "UPDATE sys_sw_netstat SET timestamp = ? WHERE id = ?";
                    $data = array("$details->timestamp", "$row->id");
                    $query = $this->db->query($sql, $data);
                } else {
                    // the netstat does not exist - insert it
                    $sql = "INSERT INTO sys_sw_netstat
						( 	system_id,
							protocol,
							ip_address,
							port,
							program,
							timestamp,
							first_timestamp ) VALUES ( ?,?,?,?,?,?,? )";
                    $sql = $this->clean_sql($sql);
                    $data = array("$details->system_id",
                            "$input->protocol",
                            "$input->ip_address",
                            "$input->port",
                            "$input->program",
                            "$details->timestamp",
                            "$details->timestamp", );
                    $query = $this->db->query($sql, $data);
                }
            }
        }
    }

    public function alert_netstat($details)
    {
        // netstat no longer detected
        $sql = "SELECT id, protocol, ip_address, port, program FROM sys_sw_netstat WHERE system_id = ? and timestamp = ?";
        $data = array("$details->system_id", "$details->original_timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            if ($myrow->port <= '1024') {
                $alert_details = 'netstat removed - '.$myrow->protocol." ".$myrow->ip_address.":".$myrow->port." (".$myrow->program.")";
                $this->m_alerts->generate_alert($details->system_id, 'sys_sw_netstat', $myrow->id, $alert_details, $details->timestamp);
            } else {
                // auto ack the change as this is a non priv port
                $alert_details = 'netstat removed - '.$myrow->protocol." ".$myrow->ip_address.":".$myrow->port." (".$myrow->program.")";
                $sql = "INSERT INTO oa_alert_log ( system_id, alert_table, alert_foreign_row, alert_details, user_id, alert_ack_time, alert_note, timestamp )
						VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
                $data = array("$details->system_id", "sys_sw_netstat", $myrow->id, "$alert_details", "1",
                              "$details->timestamp", "Auto acknowledged by system.", "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }

        // new netstat
        $sql = "SELECT sys_sw_netstat.id, sys_sw_netstat.protocol, sys_sw_netstat.ip_address, sys_sw_netstat.port, sys_sw_netstat.program
			FROM
				sys_sw_netstat LEFT JOIN system ON (sys_sw_netstat.system_id = system.system_id)
			WHERE
				sys_sw_netstat.system_id = ? AND
				sys_sw_netstat.first_timestamp = ? AND
				sys_sw_netstat.first_timestamp = sys_sw_netstat.timestamp AND
				sys_sw_netstat.first_timestamp != system.first_timestamp";
        $data = array("$details->system_id", "$details->timestamp");
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $myrow) {
            if ($myrow->port <= '1024') {
                $alert_details = 'netstat added - '.$myrow->protocol." ".$myrow->ip_address.":".$myrow->port." (".$myrow->program.")";
                $this->m_alerts->generate_alert($details->system_id, 'sys_sw_netstat', $myrow->id, $alert_details, $details->timestamp);
            } else {
                // auto ack the change as this is a non priv port
                $alert_details = 'netstat added - '.$myrow->protocol." ".$myrow->ip_address.":".$myrow->port." (".$myrow->program.")";
                $sql = "INSERT INTO oa_alert_log ( system_id, alert_table, alert_foreign_row, alert_details, user_id, alert_ack_time, alert_note, timestamp )
						VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )";
                $data = array("$details->system_id", "sys_sw_netstat", $myrow->id, "$alert_details", "1",
                              "$details->timestamp", "Auto acknowledged by system.", "$details->timestamp", );
                $query = $this->db->query($sql, $data);
            }
        }
    }
}
