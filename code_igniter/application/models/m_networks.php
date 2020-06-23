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
* @package   Networks
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Networks
*
* @access   public
* @category Model
* @package  Networks
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_networks extends MY_Model
{
    /**
     * [__construct description]
     */
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->severity = 7;
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ($id = $this->insert_collection('networks', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        if ($id === '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = 'SELECT networks.*, COUNT(DISTINCT system.id) as `device_count`, orgs.id AS `orgs.id`, orgs.name AS `org_name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name` FROM networks LEFT JOIN ip ON (networks.network = ip.network) LEFT JOIN system ON (system.id = ip.system_id) LEFT JOIN orgs ON (networks.org_id = orgs.id) LEFT JOIN clouds ON (networks.cloud_id = clouds.id) WHERE networks.id = ?';
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'networks');
        return $result;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $CI = & get_instance();
        $sql = 'DELETE FROM `networks` WHERE id = ?';
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    /**
     * [sub_resource description]
     * @param  string $id [description]
     * @return [type]     [description]
     */
    public function sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = 'SELECT `network` FROM `networks` WHERE `id` = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (count($result) > 0) {
            $network = $result[0]->network;
            if ($network !== '') {
                $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, ip.ip AS `ip.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.network = ?";
                $data = array((string)$network);
                $result = $this->run_sql($sql, $data);
                $result = $this->format_data($result, 'devices');
                return $result;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    /**
     * [upsert description]
     * @param  [type] $network [description]
     * @return [type]          [description]
     */
    public function upsert($network = null)
    {
        $router = & load_class('Router', 'core');
        $model = $router->fetch_class();
        $function = $router->fetch_method();
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'upserting data';
        if (is_null($network)) {
            return false;
        }
        if (empty($network->network) && ! empty($network->name)) {
            $network->network = $network->name;
        }
        if (empty($network->network)) {
            return false;
        }
        if (empty($network->name)) {
            $network->name = $network->network;
        }
        if (empty($network->org_id)) {
            $network->org_id = 1;
        }
        if ( ! empty($this->config->config['internal_version']) && $this->config->config['internal_version'] < 20160904) {
            return;
        }
        $sql = 'SELECT * FROM networks WHERE networks.org_id = ? AND networks.network = ?';
        $data = array(intval($network->org_id), (string)$network->network);
        $result = $this->run_sql($sql, $data);
        // Note we receive false back from run_sql if it's a select and no rows are returned.
        if ($result === false) {
            // the network does not exist. Log it and insert it
            $this->log->summary = "Inserting {$network->name} ({$network->network}) into blessed subnet list.";
            if ( ! empty($network->description)) {
                $description = $network->description;
            } else {
                $description = '';
            }
            $sql = "INSERT INTO `networks` (id, name, network, org_id, type, description, edited_by, edited_date) VALUES (NULL, ?, ?, ?, 'Local Area Network', ?, ?, NOW())";
            $data = array((string)$network->name, (string)$network->network, intval($network->org_id), (string)$description, 'auto-generated by '.@$model.'::'.@$function);
            $result = $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    /**
     * [check_ip description]
     * @param  string $ip_address [description]
     * @return [type]             [description]
     */
    public function check_ip($ip_address = '')
    {
        // supply a standard ip address - 192.168.1.1
        // supply a list of comma separated subnets - 192.168.1.0/24,172.16.0.0/16 or an emptty string to retrieve from the DB
        // returns true if ip is contained in a subnet, false otherwise
        // TODO - we should take an OrgID (or 1 if not exists)
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if (empty($this->config)) {
            $this->load->model('m_configuration');
            $this->m_configuration->load();
        }
        if (empty($this->config->config['blessed_subnets_use']) OR trim(strtolower($this->config->config['blessed_subnets_use'])) !== 'y') {
            return true;
        }
        if (empty($ip_address)) {
            return false;
        }
        if ($ip_address === '127.0.0.1' OR $ip_address === '127.0.1.1') {
            return true;
        }
        if ($ip_address === '::1') {
            return true;
        }
        // TODO - IPv6 support
        if (stripos($ip_address, ':') !== false) {
            return true;
        }
        $sql = '/* m_networks::check_ip */ ' . "SELECT COUNT(id) AS count FROM networks WHERE (-1 << (33 - INSTR(BIN(INET_ATON(cidr_to_mask(SUBSTR(network, LOCATE('/', network)+1)))), '0'))) & INET_ATON(?) = INET_ATON(SUBSTR(network, 1, LOCATE('/', network)-1))";
        $sql = $this->clean_sql($sql);

        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = false;
        $query = $this->db->query($sql, array((string)$ip_address));
        $this->db->db_debug = $temp_debug;

        if ($this->db->_error_message()) {
            // need to log down here for the above so we can use $this->db to get the last insert id
            $db_error = $this->db->_error_message();
            $sqllog = new stdClass();
            $sqllog->function =  'm_networks::check_ip';
            $sqllog->summary = 'check ip failed (allowing submit to continue)';
            $sqllog->type = 'system';
            $sqllog->severity = 3;
            $sqllog->status = 'failure';
            $sqllog->detail = $this->db->last_query();
            $sqllog->detail .= ' - FAILURE - ' . $db_error;
            stdlog($sqllog);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ')'), $db_error);
            return true;
        }

        $result = $query->result();
        if (intval($result[0]->count) > 0) {
            return true;
        } else {
            $this->load->helper('log');
            $log_details = new stdClass();
            $log_details->severity = 5;
            $log_details->file = 'system';
            $log_details->message = 'Audit submission from an IP not in the list of blessed subnets (' . $_SERVER['REMOTE_ADDR'] . ')';
            stdlog($log_details);
            unset($log_details);
            return false;
        }
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM networks WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'networks');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name`, COUNT(DISTINCT system.id) as `device_count` FROM `networks` LEFT JOIN orgs ON (networks.org_id = orgs.id) LEFT JOIN clouds ON (networks.cloud_id = clouds.id) LEFT JOIN ip ON (networks.network = ip.network AND ip.current = 'y') LEFT JOIN system ON (system.id = ip.system_id) {$CI->response->meta->internal->filter} GROUP BY networks.id {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
            // As at 3.4.0, if we have >1,000 networks, exclude the device count
            if ($CI->response->meta->total > 1000) {
                $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name`, 0 `device_count` FROM `networks` LEFT JOIN clouds ON (networks.cloud_id = clouds.id) LEFT JOIN orgs ON (networks.org_id = orgs.id) {$CI->response->meta->internal->filter} GROUP BY networks.id {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
            }
            if ( ! empty($CI->response->meta->requestor) && $CI->response->meta->total < 1001) {
                $sql = "SELECT {$CI->response->meta->internal->properties}, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name`, COUNT(DISTINCT system.id) as `device_count` FROM `networks` LEFT JOIN orgs ON (networks.org_id = orgs.id) LEFT JOIN clouds ON (networks.cloud_id = clouds.id) LEFT JOIN ip ON (networks.network = ip.network AND ip.current = 'y') LEFT JOIN system ON (system.id = ip.system_id AND system.oae_manage = 'y') {$CI->response->meta->internal->filter} GROUP BY networks.id {$CI->response->meta->internal->sort} {$CI->response->meta->internal->limit}";
            }
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'networks');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'networks';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = 'Open-AudIT stores your networks and in addition, provides a secure mechanism for accepting input data.';
        $dictionary->marketing = '<p>A network is derived from discovery entries and device attribtes.<br /><br />
        Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>A network is derived from discovery entries and device attribtes.<br /><br />Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = 'The network should be in the format 192.168.1.0/24.';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->network = 'The network in the format 192.168.1.0/24.';
        $dictionary->columns->type = "Can be 'Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network'.";
        $dictionary->columns->external_ident = 'The ID retrieved from a Cloud discovery.';
        $dictionary->columns->cloud_id = 'The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.';
        $dictionary->columns->options = 'A JSON object populated via a Cloud discovery.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_networks.php
// Location: ./models/m_networks.php
