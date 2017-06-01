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
 * @version   2.0a
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_collection extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
        $this->load->library('encrypt');
    }

    public function collection($collection = '')
    {
        $CI = & get_instance();

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::collection (no collection)');
            return false;
        }

        // get a list of Orgs and Locations so we can populate the names
        $sql = "SELECT id, name FROM orgs";
        $result = $this->run_sql($sql, array());
        $orgs = $result;

        // locations
        $sql = "SELECT id, name FROM locations";
        $result = $this->run_sql($sql, array());
        $locations = $result;

        $sql = $this->collection_sql($collection, 'sql');
        $result = $this->run_sql($sql, array());

        for ($i=0; $i < count($result); $i++) {
            foreach ($orgs as $org) {
                if (!empty($result[$i]->org_id) and $org->id == $result[$i]->org_id) {
                    $result[$i]->org_name = $org->name;
                }
            }
        }

        if ($collection == 'connections') {
            if ($result !== false) {
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->location_name_a = '';
                    $result[$i]->location_name_b = '';
                    foreach ($locations as $location) {
                        if ($location->id == $result[$i]->location_id_a) {
                            $result[$i]->location_name_a = $location->name;
                        }
                        if ($location->id == $result[$i]->location_id_b) {
                            $result[$i]->location_name_b = $location->name;
                        }
                    }
                }
            }
        }

        if ($collection == 'configuration' and $CI->response->meta->collection == 'configuration' and count($CI->response->meta->filter) == 0) {
            $item = new stdClass;
            $item->id = 888888;
            $item->name = 'web_internal_version';
            $item->value = $this->config->config['web_internal_version'];
            $item->editable = 'n';
            $item->edited_by = '';
            $item->edited_date = '';
            $item->description = 'The internal numerical version of the Open-AudIT files.';
            $result[] = $item;
        }

        if ($collection == 'licenses' and !empty($result)) {
            foreach ($result as $item) {
                if ($item->org_descendants == 'n') {
                    $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
                    $data = array(intval($item->org_id), (string)$item->match_string);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->count)) {
                        $item->used_count = $data_result[0]->count;
                    }
                    unset($sql, $data, $data_result);
                } else {
                    $children = $CI->m_orgs->get_children($item->org_id);
                    $children[] = $item->org_id;
                    $children = implode(',', $children);
                    $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN (?) AND software.name LIKE ?";
                    $data = array((string)$children, (string)$item->match_string);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->count)) {
                        $item->used_count = $data_result[0]->count;
                    }
                    unset($sql, $data, $data_result);
                }
            }
        }

        $result = $this->format_data($result, $collection);
        return ($result);
    }

    public function create($data = null, $collection = '')
    {
        $CI = & get_instance();

        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
                $collection = $CI->response->meta->collection;
            } else {
                # TODO - is this error being included in the response?
                # testing creating a script from OAE was failing (no ->attributes), but didn't seem to
                # return the error object as part of the response
                log_error('ERR-0010', 'm_collection::create (' . $collection . ') No attributes received.');
                return false;
            }
        }

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::create (no collection)');
            return false;
        } else {
            $db_table = $collection;
        }

        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data (' . $collection . ')';
        stdlog($this->log);

        if ($collection === 'credentials') {
            $data->credentials = (string)$this->encrypt->encode(json_encode($data->credentials));
        }

        if ($collection === 'discoveries') {
            if ($data->type == 'subnet') {
                if (empty($data->other->subnet)) {
                    log_error('ERR-0024', 'm_collection::create (discoveries)');
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be created - no Subnet supplied.');
                    redirect('/discoveries');
                } else {
                    $data->description = 'Subnet - ' . $data->other->subnet;
                }
            } elseif ($data->type == 'active directory') {
                if (empty($data->other->ad_server) or empty($data->other->ad_domain)) {
                    if (empty($data->other->ad_server)) {
                        $temp = "Active Directory Server";
                    } else {
                        $temp = "Active Directory Domain";
                    }
                    log_error('ERR-0024', 'm_collection::create (ad discoveries)');
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be created - no ' . $temp . ' supplied.');
                    redirect('/discoveries');
                } else {
                    $data->description = 'Active Directory - ' . $data->other->ad_domain;
                }
            } else {
                $data->description = '';
            }
            if ($data->type == 'subnet') {
                $this->load->model('m_networks');
                $this->load->helper('network');
                $temp = network_details($data->other->subnet);
                if (!empty($temp->error) and filter_var($data->other->subnet, FILTER_VALIDATE_IP) === false) {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be created - invalid subnet attribute supplied.');
                    log_error('ERR-0010', 'm_collections::create (networks) invalid subnet supplied');
                    return;
                } elseif (strpos($data->other->subnet, '/') !== false) {
                    $network = new stdClass();
                    $network->name = $data->other->subnet;
                    $network->network = $data->other->subnet;
                    $network->org_id = $data->org_id;
                    $network->description = $data->name;
                    $this->m_networks->upsert($network);
                } elseif (filter_var($data->other->subnet, FILTER_VALIDATE_IP) !== false) {
                    $temp = network_details($data->other->subnet.'/30');
                    $network = new stdClass();
                    $network->name = $temp->network.'/'.$temp->network_slash;
                    $network->network = $temp->network.'/'.$temp->network_slash;
                    $network->org_id = $data->org_id;
                    $network->description = $data->name;
                    $this->m_networks->upsert($network);
                }
            }
            $data->other = json_encode($data->other);
        }

        if ($collection === 'ldap_servers') {
            if (!empty($data->dn_password)) {
                $data->dn_password = (string)$this->encrypt->encode($data->dn_password);
            }
        }

        if ($collection === 'orgs') {
            if (!empty($data->name)) {
                $data->ad_group = 'open-audit_orgs_' . strtolower(str_replace(' ', '_', $data->name));
            }
        }

        if ($collection === 'roles') {
            $data->ad_group = 'open-audit_roles_' . strtolower(str_replace(' ', '_', $data->name));
            $permissions = new stdClass();
            if (empty($data->permissions)) {
                $data->permissions = '';
            } else {
                foreach ($data->permissions as $endpoint => $object) {
                    $permissions->{$endpoint} = '';
                    foreach ($object as $key => $value) {
                        $permissions->{$endpoint} .= $key;
                    }
                }
                $data->permissions = json_encode($permissions);
            }
        }

        if ($collection === 'scripts') {
            if (empty($data->options) and !empty($CI->response->meta->received_data->options)) {
                $data->options = $CI->response->meta->received_data->options;
            }
            $data->options = json_encode($data->options);
        }

        if ($collection === 'users') {
            if (!empty($data->password)) {
                // password - get 256 random bits in hex
                $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
                // password - hash
                $hash = hash("sha256", $salt.(string)$data->password);
                // password - prepend the salt
                $data->password = $salt.$hash;
            }
        }

        $mandatory_fields = $this->mandatory_fields($collection);
        foreach ($mandatory_fields as $mandatory_field) {
            if (empty($data->{$mandatory_field})) {
                $this->session->set_flashdata('error', 'Object in ' . $collection . ' could not be created - no ' . $mandatory_field . ' supplied.');
                log_error('ERR-0021', 'm_collection::create (' . $collection . ')', 'Missing field: ' . $mandatory_field);
                return false;
            }
        }

        $data_array = array();
        $sql = "INSERT INTO `" . $db_table . "` (";
        $sql_data = "";
        $update_fields = $this->update_fields($collection);
        foreach ($data as $key => $value) {
            if (strpos($update_fields, ' '.$key.' ') !== false) {
                $sql .= "`" . $key . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$key};
            }
        }

        if ($this->db->field_exists('edited_by', $db_table)) {
            $sql .= '`edited_by`, `edited_date`';    // the user.name and timestamp
            $sql_data .= '?, NOW()';                 // the user.name and timestamp
            $data_array[] = $CI->user->full_name;    // the user.name
        }

        $sql .= ") VALUES (" . $sql_data . ")";
        $id = intval($this->run_sql($sql, $data_array));
        if (!empty($id)) {
            $CI->session->set_flashdata('success', 'New object in ' . $this->response->meta->collection . ' created "' . $data->name . '".');
            return ($id);
        } else {
            return false;
        }
    }


    public function update($data = null, $collection = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();

        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
                $data->id = $CI->response->meta->id;
                $collection = $CI->response->meta->collection;
            } else {
                log_error('ERR-0010', 'm_collection::update');
                return false;
            }
        }

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::update');
            return false;
        } else {
            $db_table = $collection;
        }


        if ($collection === 'credentials') {
            if (!empty($data->credentials)) {
                $received_credentials = new stdClass();
                foreach ($data->credentials as $key => $value) {
                        $received_credentials->$key = $value;
                }
                $select = "SELECT * FROM credentials WHERE id = ?";
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing_credentials = json_decode($this->encrypt->decode($result[0]->credentials));
                $new_credentials = new stdClass();
                foreach ($existing_credentials as $existing_key => $existing_value) {
                    if (!empty($received_credentials->$existing_key)) {
                        $new_credentials->$existing_key = $received_credentials->$existing_key;
                    } else {
                        $new_credentials->$existing_key = $existing_credentials->$existing_key;
                    }
                }
                $data->credentials = (string)$this->encrypt->encode(json_encode($new_credentials));
            }
        }

        if ($collection === 'discoveries') {
            if (!empty($data->other)) {
                $received_other = new stdClass();
                foreach ($data->other as $key => $value) {
                        $received_other->$key = $value;
                }
                $query = $this->db->query("SELECT * FROM discoveries WHERE id = ?", array($data->id));
                $result = $query->result();
                $existing_other = json_decode($result[0]->other);
                $new_other = new stdClass();
                foreach ($existing_other as $existing_key => $existing_value) {
                    if (!empty($received_other->$existing_key)) {
                        $new_other->$existing_key = $received_other->$existing_key;
                    } else {
                        $new_other->$existing_key = $existing_other->$existing_key;
                    }
                }
                unset($data->other);
                $data->other = (string)json_encode($new_other);
                if (!empty($received_other->subnet)) {
                    $data->description = 'Subnet - ' . $received_other->subnet;
                    $this->load->helper('network');
                    $temp = network_details($received_other->subnet);
                    if (!empty($temp->error) and filter_var($received_other->subnet, FILTER_VALIDATE_IP) === false) {
                        $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid subnet attribute supplied.');
                        log_error('ERR-0010', 'm_collections::create (invalid subnet supplied)');
                        return;
                    }
                }
                if (!empty($received_other->ad_domain)) {
                    $data->description = 'Active Directory - ' . $received_other->ad_domain;
                }
            }
        }

        if ($collection === 'ldap_servers') {
            if (!empty($data->dn_password)) {
                $data->dn_password = (string)$CI->encrypt->encode($data->dn_password);
            }
        }

        if ($collection === 'scripts') {
            if (!empty($data->options)) {
                $received = new stdClass();
                foreach ($data->options as $key => $value) {
                        $received->$key = $value;
                }
                $select = "SELECT * FROM scripts WHERE id = ?";
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                if (!empty($this->encrypt->decode($result[0]->options))) {
                    $existing = json_decode($this->encrypt->decode($result[0]->options));
                } else {
                    $existing = new stdClass();
                }
                $new = new stdClass();
                foreach ($existing as $existing_key => $existing_value) {
                    if (!empty($received->$existing_key)) {
                        $new->$existing_key = $received->$existing_key;
                    } else {
                        $new->$existing_key = $existing->$existing_key;
                    }
                }
                $data->options = (string)$this->encrypt->encode(json_encode($new));
            }
        }

        if ($collection === 'users') {
            if (!empty($data->password)) {
                // password - get 256 random bits in hex
                $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
                // password - hash
                $hash = hash("sha256", $salt.(string)$data->password);
                // password - prepend the salt
                $data->password = $salt.$hash;
            }
        }

        $update_fields = $this->update_fields($collection);
        $sql = '';

        foreach ($data as $key => $value) {
            if (strpos($update_fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . str_replace("'", "\'", $value) . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . str_replace("'", "\'", $value) . "'";
                }
            }
        }
        if ($this->db->field_exists('edited_by', $db_table)) {
            $sql .= ", `edited_by` = '" . $CI->user->full_name . "'";
        }
        if ($this->db->field_exists('edited_date', $db_table)) {
            $sql .= ", `edited_date` = NOW()";
        }
        $sql = "UPDATE `" . $db_table . "` " . $sql . " WHERE id = " . intval($data->id);
        $test = $this->run_sql($sql);
        return $test;
    }

    public function update_fields($collection = '')
    {
        if (empty($collection)) {
            return('');
        }
        switch ($collection) {
            case "attributes":
                return(' name org_id resource type value ');
                break;

            case "configuration":
                return(' value ');
                break;

            case "connections":
                return(' name org_id provider service_type product_name service_identifier speed location_id_a location_id_b system_id_a system_id_b line_number_a line_number_b ip_address_external_a ip_address_external_b ip_address_internal_a ip_address_internal_b ');
                break;

            case "credentials":
                return(' name org_id description type credentials ');
                break;

            case "discoveries":
                return(' name org_id description type devices_asssigned_to_org devices_assigned_to_location network_address system_id other discard last_run complete ');
                break;

            case "fields":
                return(' name org_id type values placement group_id ');
                break;

            case "files":
                return(' name org_id description path ');
                break;

            case "groups":
                return(' name org_id description sql ');
                break;

            case "ldap_servers":
                return(' name org_id description lang host port secure domain type version base_dn user_dn user_membership_attribute use_roles dn_account dn_password refresh ');
                break;

            case "licenses":
                return(' name org_id description org_descendants purchase_count match_string ');
                break;

            case "locations":
                return(' name org_id type room suite level address city state postcode country phone geo latitude longitude ');
                break;

            case "networks":
                return(' name org_id description network ');
                break;

            case "orgs":
                return(' name description parent_id ad_group ');
                break;

            case "queries":
                return(' name org_id description sql menu_category menu_display ');
                break;

            case "roles":
                return(' name description permissions ad_group ');
                break;

            case "scripts":
                return(' name org_id description options based_on ');
                break;

            case "summaries":
                return(' name org_id table column menu_category ');
                break;

            case "users":
                return(' name org_id permissions password full_name email lang active roles orgs ');
                break;
        }
    }

    public function mandatory_fields($collection = '')
    {
        if (empty($collection)) {
            return('');
        }
        switch ($collection) {
            case "attributes":
                return(array('name','org_id','type','resource','value'));
                break;

            case "configuration":
                return(array('value'));
                break;

            case "connections":
                return(array('name','org_id'));
                break;

            case "credentials":
                return(array('name','org_id','type','credentials'));
                break;

            case "discoveries":
                return(array('name','org_id','type','network_address','other'));
                break;

            case "fields":
                return(array('name','org_id','type','placement','group_id'));
                break;

            case "files":
                return(array('name','org_id','path'));
                break;

            case "groups":
                return(array('name','org_id','sql'));
                break;

            case "ldap_servers":
                return(array('name','org_id','lang','host','port','secure','domain','type','version','use_roles','refresh'));
                break;

            case "licenses":
                return(array('name','org_id','org_descendants','purchase_count','match_string'));
                break;

            case "locations":
                return(array('name','org_id'));
                break;

            case "networks":
                return(array('name','org_id','network'));
                break;

            case "orgs":
                return(array('name','parent_id'));
                break;

            case "queries":
                return(array('name','org_id','sql','menu_category','menu_display'));
                break;

            case "roles":
                return(array('name','permissions'));
                break;

            case "scripts":
                return(array('name','org_id','options','based_on'));
                break;

            case "summaries":
                return(array('name','org_id','table','column','menu_category'));
                break;

            case "users":
                return(array('name','org_id','lang','active','roles','orgs'));
                break;
        }
    }
}
