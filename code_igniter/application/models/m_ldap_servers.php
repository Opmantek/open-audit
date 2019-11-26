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
* PHP version 5.3.3
* 
* @category  Model
* @package   LDAP_Servers
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model LDAPServers
*
* @access   public
* @category Model
* @package  LDAP_Servers
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_ldap_servers extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
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
        $sql = "INSERT INTO `ldap_servers` VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '0000-00-00 00:00:00', NOW())";
        $data = array(  (string)$CI->response->meta->received_data->attributes->name,
                         intval($CI->response->meta->received_data->attributes->org_id),
                        (string)$CI->response->meta->received_data->attributes->description,
                        (string)$CI->response->meta->received_data->attributes->lang,
                        (string)$CI->response->meta->received_data->attributes->host,
                        (string)$CI->response->meta->received_data->attributes->port,
                        (string)$CI->response->meta->received_data->attributes->secure,
                        (string)$CI->response->meta->received_data->attributes->domain,
                        (string)$CI->response->meta->received_data->attributes->type,
                        (string)$CI->response->meta->received_data->attributes->version,
                        (string)$CI->response->meta->received_data->attributes->base_dn,
                        (string)$CI->response->meta->received_data->attributes->user_dn,
                        (string)$CI->response->meta->received_data->attributes->user_membership_attribute,
                        (string)$CI->response->meta->received_data->attributes->use_auth,
                        (string)$CI->response->meta->received_data->attributes->use_roles,
                        (string)$CI->response->meta->received_data->attributes->dn_account,
                        (string)$CI->response->meta->received_data->attributes->dn_password,
                        (string)$CI->response->meta->received_data->attributes->refresh,
                        (string)$CI->user->full_name);
        $id = intval($this->run_sql($sql, $data));
        return ($id);
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT ldap_servers.*, orgs.name AS `org_name` FROM ldap_servers LEFT JOIN orgs ON (ldap_servers.org_id = orgs.id) WHERE ldap_servers.id = ? AND ldap_servers.org_id IN (" . $CI->user->org_list . ")";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        if (!empty($result)) {
            foreach ($result as $row) {
                if (!empty($row->dn_password)) {
                    $row->dn_password = (string)simpleDecrypt($row->dn_password);
                }
            }
        }
        $result = $this->format_data($result, 'ldap_servers');
        return $result;
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $fields = ' name description org_id lang host domain refresh use_roles ';
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
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
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

    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM ldap_servers WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'ldap_servers');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM ldap_servers LEFT JOIN orgs ON (ldap_servers.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'ldap_servers');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    public function sub_resource($id = '')
    {
        $id = intval($id);
        return array();
    }
}
