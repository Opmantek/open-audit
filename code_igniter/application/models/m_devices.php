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
 * @version 1.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_devices extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getResponse()
    {
        $CI = & get_instance();
        $CI->error->model = __METHOD__;

        # get and validate our subresource
        if (!isset($CI->response->subresource) or $CI->response->subresource == '') {
            $this->subresource = 'system';
        } else {
            $tables = $this->db->list_tables();
            foreach ($tables as $table) {
                if ( $CI->response->subresource == $table) {
                    $this->subresource = $CI->response->subresource;
                }
            }
            if ($this->subresource == '') {
                $this->subresource = 'system';
            }
        }

        # get and validate our properties
        if (!isset($CI->response->properties) or $CI->response->properties == '') {
            $this->properties = '*';
        } else {
            $this->properties = $CI->response->properties;
        }
        if ($this->properties != '*') {
            $fields = $CI->db->list_fields($this->subresource);
            $properties = str_replace(' ', '', $this->properties);
            $properties = explode(',', $properties);
            $approved_properties = array();
            foreach ($fields as $field) {
                foreach ($properties as $property) {
                    if ($property == $field) {
                        $approved_properties[] = $field;
                    }
                }
            }
            if (count($approved_properties) > 0) {
                $this->properties = implode(',', $approved_properties);
            } else {
                $this->properties = '*';
            }
        }

        # get and validate our sort
        if (!isset($CI->response->sort) or $CI->response->sort == '') {
            $this->sort = '';
        } elseif ($CI->response->sort != '') {
            $this->sort = $CI->response->sort;
            $fields = $CI->db->list_fields($this->subresource);
            $properties = explode(',', $this->sort);
            $approved_properties = array();
            foreach ($fields as $field) {
                foreach ($properties as $property) {
                    $each_property = explode(' ', $property);
                    if ($each_property[0] == $field) {
                        if (isset($each_property[1])) {
                            if (strtolower($each_property[1]) == 'asc' or strtolower($each_property[1]) == 'desc') {
                                $approved_properties[] = $field . ' ' . $each_property[1];
                            } else {
                                $approved_properties[] = $field;
                                # should log a warning here about invalid sort order (asc or desc)
                            }
                        } else {
                            $approved_properties[] = $field;
                        }
                    }
                }
            }
            if (count($approved_properties) > 0) {
                $this->sort = implode(',', $approved_properties);
                $this->sort = ' ORDER BY ' . $this->sort;
            } else {
                $this->sort = '';
            }
        }

        # get and validate our filter
        if (!isset($CI->response->filter) or $CI->response->filter == '') {
            if ($this->subresource != 'system') {
                # ensure we have a default of matching on system_id AND current = 'y'
                $this->filter = ' AND current = \'y\'';
            } else {
                $this->filter = '';
            }
        } else {
            $valid_fields = array();
            if ($this->subresource != 'system') {
                $subresource_fields = $CI->db->list_fields($this->subresource);
                foreach ($subresource_fields as $field) {
                    $valid_fields[] = $field;
                    $valid_fields[] = $this->subresource . '.' . $field;
                }
                unset($subresource_fields);
            }
            $system_fields = $CI->db->list_fields('system');
            foreach ($system_fields as $field) {
                $valid_fields[] = $field;
                $valid_fields[] = 'system.' . $field;
            }
            unset($system_fields);
            asort($valid_fields);
            $valid_fields = array_unique($valid_fields);
#echo "Valid Fields Count: " . count($valid_fields) . "\n\n";

            $conditions = array();
            # NOTE - for the word counting below, we need to add an 'AND' to the start of our filter
            $words = explode(' ', 'and ' . $CI->response->filter);

            $count = 0;
            $condition = '';
            foreach ($words AS $key => $value) {
                $condition .= $value . ' ';
                $count++;
                if ($count == 4) {
                    $conditions[] = $condition;
                    $count = 0;
                    $condition = '';
                }
            }
            $approved_conditions = array();

#print_r($conditions);
            foreach ($conditions as $key => $value) {
                $words = explode(' ', $value);
                $match_1 = false;
                $match_2 = false;
                $match_3 = false;
                # the first word should be AND or OR (case insensitive)
                if (stripos($words[0], 'and') !== false or stripos($words[0], 'or') !== false) {
                    $match_1 = true;
                }
                # the second word should be a field name from the system or subrescource table
                # we have a list of these in the $valid_fields array
                foreach ($valid_fields as $field) {
                    if ($words[1] == $field) {
                        $match_2 = true;
                    }
                }
                # the third word should be one of the below
                if (stripos($words[2], '=') !== false or
                    stripos($words[2], '!=') !== false or
                    stripos($words[2], '<>') !== false or
                    stripos($words[2], '>') !== false or
                    stripos($words[2], '>=') !== false or
                    stripos($words[2], '<') !== false or
                    stripos($words[2], '=<') !== false or
                    stripos($words[2], 'like') !== false) {
                    $match_3 = true;
                }
                if ($match_1 and $match_2 and $match_3) {
                    $approved_conditions[] = $conditions[$key];
                }
            }
            $this->filter = implode(' ', $approved_conditions);
        }

        # get and ensure an integer for out limit
        if (!isset($CI->response->limit) or $CI->response->limit == '' or !is_integer($CI->response->limit)) {
            $this->limit = '';
        } else {
            $this->limit = ' LIMIT ' . intval($CI->response->limit);
        }

        # get and ensure an integer for our offset
        if (!isset($CI->response->offset) or $CI->response->offset == '' or !is_integer($CI->response->offset)) {
            $this->offset = '';
        } else {
            $this->offset = ' OFFSET ' . intval($CI->response->offset);
        }

        # populate our user_id
        $this->user_id = $CI->user->user_id;
        #print_r($this);
    }

    public function getUserDeviceAccess($id)
    {
        $CI = & get_instance();
        $sql = "SELECT group_user_access_level as access_level FROM oa_group_user LEFT JOIN oa_group_sys ON (oa_group_user.group_id = oa_group_sys.group_id) WHERE oa_group_sys.system_id = ? AND oa_group_user.user_id = ? ORDER BY group_user_access_level DESC LIMIT 1";
        $data = array(intval($id), intval($CI->user->user_id));
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (!isset($result[0]->access_level) or $result[0]->access_level == '0') {
            return(0);
        }
        return(intval($result[0]->access_level));
    }

    public function readDevice($id)
    {
        $this->getResponse();
        $this->load->model('m_devices_components');
        $sql = "SELECT * FROM system WHERE system_id = ?";
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $document['system'] = $query->result();
        $tables = array('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'optical', 'processor', 'netstat', 'network', 'scsi', 'service', 'server', 'server_item', 'share', 'software', 'software_key', 'sound', 'user', 'video', 'windows');
        foreach ($tables as $table) {
            $sql = "SELECT $this->properties FROM $table WHERE system_id = ? $this->filter $this->sort $this->limit $this->offset";
            $data = array($id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (count($result) > 0) {
                $document[$table] = $result;
            }
        }
        return($document);
    }

    public function readDevices($hostname)
    {
        $this->getResponse();
        if ($this->properties == '*') {
            $this->properties = 'system.*';
        } else {
            if (stripos($this->properties, 'system_id') !== false and stripos($this->properties, 'system.system_id') === false) {
                // we need to explicitly specify this because of a column clash
                $this->properties = str_ireplace("system_id", "system.system_id", $this->properties);
            }
        }
        $sql = "SELECT $this->properties FROM system WHERE system_id IN (SELECT DISTINCT system_id FROM oa_group_sys LEFT JOIN oa_group_user ON (oa_group_sys.group_id = oa_group_user.group_id AND oa_group_user.group_user_access_level > 0) WHERE oa_group_user.user_id = ?) $this->filter $this->sort $this->limit $this->offset";
        $data = array($this->user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (count($result) == 0) {
            $CI->error->code = 'ERR-0001';
            log_error($CI->error);
            return false;
        }
        return ($result);
    }

    public function readDeviceSubresource($id, $subresource)
    {
        $this->getResponse();
        $sql = "SELECT $this->properties FROM $subresource WHERE system_id = ? $this->filter $this->sort $this->limit $this->offset";
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (count($result) == 0) {
            #$CI->error->code = 'ERR-0001';
            #log_error($CI->error);
            return false;
        }
        return ($result);
    }

    public function readDevicesSubresource()
    {
        $this->getResponse();
        $sql = "SELECT $this->properties FROM $this->subresource WHERE system_id IN (SELECT DISTINCT system_id FROM oa_group_sys LEFT JOIN oa_group_user ON (oa_group_sys.group_id = oa_group_user.group_id AND oa_group_user.group_user_access_level > 0) WHERE oa_group_user.user_id = ?) $this->filter $this->sort $this->limit $this->offset";
        $data = array($this->user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (count($result) == 0) {
            return false;
        }
        return ($result);
    }
}
