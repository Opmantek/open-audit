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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_ldap_servers extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT ldap_servers.*, oa_org.name AS `org_name` FROM ldap_servers LEFT JOIN oa_org ON (ldap_servers.org_id = oa_org.id) WHERE ldap_servers.id = ? AND ldap_servers.org_id IN (" . $CI->user->org_list . ")";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'ldap_servers');
        return $result;
    }

    public function sub_resource($id = '')
    {
        return array();
    }

    public function create()
    {
        $CI = & get_instance();
        if (empty($CI->response->meta->received_data->attributes->org_id)) {
            $CI->response->meta->received_data->attributes->org_id = 1;
        }
        # check to see if we already have an ldap server with the same name
        $sql = "SELECT COUNT(id) AS count FROM `ldap_servers` WHERE `name` = ?";
        $data = array((string)$CI->response->meta->received_data->attributes->name);
        $result = $this->run_sql($sql, $data);
        if (intval($result[0]->count) != 0) {
            log_error('ERR-0010', 'm_ldap_servers::create_network');
            return false;
        }
        $sql = "INSERT INTO `ldap_servers` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, '0000-00-00 00:00:00', NOW())";
        $data = array(  (string)$CI->response->meta->received_data->attributes->name,
                         intval($CI->response->meta->received_data->attributes->org_id),
                        (string)$CI->response->meta->received_data->attributes->description,
                        (string)$CI->response->meta->received_data->attributes->lang,
                        (string)$CI->response->meta->received_data->attributes->host,
                        (string)$CI->response->meta->received_data->attributes->domain,
                        (string)$CI->response->meta->received_data->attributes->use_roles,
                        (string)$CI->response->meta->received_data->attributes->refresh,
                        (string)$CI->user->full_name);
        $this->run_sql($sql, $data);
        return $this->db->insert_id();
    }

    public function collection()
    {
        $CI = & get_instance();
        $sql = $this->collection_sql('ldap_servers', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'ldap_servers');
        return ($result);
    }

    public function update()
    {
        $CI = & get_instance();
        $sql = '';
        $fields = ' name description org_id lang host domain ';
        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "UPDATE `ldap_servers` " . $sql . ", `edited_by` = '" . $CI->user->full_name . "', `edited_date` = NOW() WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql, array());
        return;
    }

    public function delete($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $CI = & get_instance();
        $sql = "DELETE FROM `ldap_servers` WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

}
