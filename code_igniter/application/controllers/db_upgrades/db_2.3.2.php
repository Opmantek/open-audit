<?php
/**
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
*
**/

$this->log_db('Upgrade database to 2.3.2 commenced');

# configuration
$sql = "DELETE FROM configuration WHERE name = 'discovery_default_preset'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "INSERT INTO `configuration` VALUES (NULL,'discovery_default_preset','1','number','y','system','2000-01-01 00:00:00','The default discovery preset for Nmap settings.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# re-encode or credentials
$this->load->helper('security');
$sql = "SELECT * FROM `credentials` WHERE (`edited_by` != 'system' or `id` = 1)";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
if (!empty($result)) {
    foreach ($result as $item) {
        $credentials = @json_decode($this->encrypt->decode($item->credentials));
        if (!empty($credentials)) {
            $item->credentials = simpleEncrypt(json_encode($credentials));
            $sql = "UPDATE `credentials` SET `credentials` = ?, `edited_by` = 'system', `edited_date` = NOW() WHERE `id` = ?";
            $data = array($item->credentials, intval($item->id));
            $this->db->query($sql, $data);
            $this->log_db($this->db->last_query());
        }
    }
}

# re-encode the ldap_servers.dn_password
$sql = "SELECT * FROM `ldap_servers` WHERE `edited_by` != 'system'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
if (!empty($result)) {
    foreach ($result as $item) {
        $dn_password = $this->encrypt->decode($item->dn_password);
        if (!empty($dn_password)) {
            $item->dn_password = simpleEncrypt($dn_password);
            $sql = "UPDATE `ldap_servers` SET `dn_password` = ?, `edited_by` = 'system', `edited_date` = NOW() WHERE `id` = ?";
            $data = array($item->dn_password, intval($item->id));
            $this->db->query($sql, $data);
            $this->log_db($this->db->last_query());
        }
    }
}

$sql = "SELECT * FROM `clouds` WHERE `edited_by` != 'system'";
$query = $this->db->query($sql);
$this->log_db($this->db->last_query());
$result = $query->result();
if (!empty($result)) {
    foreach ($result as $item) {
        $credentials = @json_decode($this->encrypt->decode($item->credentials));
        if (!empty($credentials)) {
            $item->credentials = simpleEncrypt(json_encode($credentials));
            $sql = "UPDATE `clouds` SET `credentials` = ?, `edited_by` = 'system', `edited_date` = NOW() WHERE `id` = ?";
            $data = array($item->credentials, intval($item->id));
            $this->db->query($sql, $data);
            $this->log_db($this->db->last_query());
        }
    }
}

# queue
$this->alter_table('queue', 'name', "ADD `name` varchar(100) NOT NULL DEFAULT '' AFTER `id`", 'add');
$this->alter_table('queue', 'status', "ADD `status` varchar(20) NOT NULL DEFAULT '' AFTER `pid`", 'add');
$this->alter_table('queue', 'org_id', "ADD `org_id` int(10) unsigned NOT NULL DEFAULT '1', AFTER `type`", 'add');

$this->load->model('m_roles');
$this->m_roles->update_permissions('admin', 'queue', 'crud');
$this->m_roles->update_permissions('org_admin', 'queue', 'cr');
$this->m_roles->update_permissions('reporter', 'queue', 'r');
$this->m_roles->update_permissions('user', 'queue', 'r');

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20181225' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.3.2' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.3.2 completed");
$this->config->config['internal_version'] = '20181225';
$this->config->config['display_version'] = '2.3.2';
