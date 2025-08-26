<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class VulnerabilitiesModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('vulnerabilities');
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        $this->builder->select(['count(id) as count'], false);
        $status = true;
        foreach ($resp->meta->filter as $filter) {

            if ($filter->name === 'search') {
                $this->builder->where('(vulnerabilities.name LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.cve LIKE ' . $this->db->escape(ip_address_to_db($filter->value)) .
                    ' OR vulnerabilities.vendor LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.filter LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.nvd_json LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.mitre_json LIKE ' . $this->db->escape($filter->value) .
                    ')');
                $status = false;
                continue;
            }

            if ($filter->name === 'vulnerabilities.status' or $filter->name === 'status') {
                $status = false;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        if ($status) {
            $this->builder->whereIn('status', ['pending', 'confirmed']);
        }
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        $GLOBALS['recordsFiltered'] = (isset($result[0]->count)) ? intval($result[0]->count) : 0;

        $this->builder = $this->db->table('vulnerabilities');
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $properties[] = "'' AS `count`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        $status = true;
        foreach ($resp->meta->filter as $filter) {

            if ($filter->name === 'search') {
                $this->builder->where('(vulnerabilities.name LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.cve LIKE ' . $this->db->escape(ip_address_to_db($filter->value)) .
                    ' OR vulnerabilities.vendor LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.filter LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.nvd_json LIKE ' . $this->db->escape($filter->value) .
                    ' OR vulnerabilities.mitre_json LIKE ' . $this->db->escape($filter->value) .
                    ')');
                $status = false;
                continue;
            }

            if ($filter->name === 'vulnerabilities.status' or $filter->name === 'status') {
                $status = false;
            }
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        if ($status) {
            $this->builder->whereIn('status', ['pending', 'confirmed']);
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);
        $org_list = implode(',', $org_list);
        // Build the SQL and execute it for any with a status of confirmed
        foreach ($result as $row) {
            $row->affected = '';
            if (!empty($row->status) and ($row->status === 'confirmed' or $row->status === 'pending')) {
                $vQuery = $this->generateQuery($row);
                if (!empty($vQuery->sql) and !empty($vQuery->data)) {
                    $vQuery->sql = $vQuery->sql . " AND devices.org_id IN ({$org_list})";
                    $row->affected = count($this->db->query($vQuery->sql, $vQuery->data)->getResult());
                    // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
                }
            }
        }
        return format_data($result, $resp->meta->collection);
    }

    public function includedCollection()
    {
        $included = array();
        $sql = "SELECT status, COUNT(*) AS `count` FROM vulnerabilities GROUP BY status";
        $included['statuses'] = $this->db->query($sql)->getResult();
        return $included;
    }

    public function makeCondition(string $criteria, string $version, string $operator, bool $vulnerable, ?object $products)
    {
        // log_message('debug', 'CRITERIA: ' . $criteria . ', VERSION: ' . $version);
        helper('device');
        helper('components');
        if ($version === '*' or $version === '-') {
            $version = '';
        }
        // log_message('debug', 'Test: ' . $criteria . ' :: ' . $operator);
        $return = new stdClass();
        $return->sql = '';
        $return->sql_raw = '';
        $return->data = array();
        $cpeVendor = cpe_get('vendor', $criteria);
        $cpeProduct = cpe_get('product', $criteria);
        $cpeVersion = cpe_get('version', $criteria);
        if ($cpeVersion === '*' or $cpeVersion === '-') {
            $cpeVersion = '';
        }
        if (cpe_get('part', $criteria) === 'a') {
            $version = version_padded($version);
            if (!empty($products->{$cpeProduct})) {
                $tempSQL = array();
                foreach ($products->{$cpeProduct}->names as $name) {
                    // $tempSQL[] = '(MATCH(software.name) AGAINST(? IN NATURAL LANGUAGE MODE) AND software.version_padded ' . $operator . ' ?)';
                    // $return->sql_raw = '(MATCH(software.name) AGAINST("' . $name . '" IN NATURAL LANGUAGE MODE) AND software.version_padded ' . $operator . ' "' . $version . '")';
                    $tempSQL[] = '(software.name = ? AND software.version_padded ' . $operator . ' ?)';
                    $return->sql_raw = 'software.name = "' . $name . '" AND software.version_padded ' . $operator . ' "' . $version . '")';
                    $return->data[] = $name;
                    $return->data[] = version_padded($version);
                }
                $return->sql = implode(' OR ', $tempSQL);
            } else {
                // $return->sql = '(MATCH(software.name) AGAINST(? IN NATURAL LANGUAGE MODE) AND software.version_padded ' . $operator . ' ?)';
                // $return->sql_raw = '(MATCH(software.name) AGAINST("' . cpe_get('product', $criteria) . '" IN NATURAL LANGUAGE MODE) AND software.version_padded ' . $operator . ' "' . $version . '")';
                $return->sql = '(software.name = ? AND software.version_padded ' . $operator . ' ?)';
                $return->sql_raw = '(software.name = "' . cpe_get('product', $criteria) . '" AND software.version_padded ' . $operator . ' "' . $version . '")';
                $return->data[] = str_replace('_', ' ', cpe_get('product', $criteria));
                $return->data[] = version_padded($version);
            }
        }
        // Operating System based CVEs
        if (cpe_get('part', $criteria) === 'o') {

            // Windows based CVEs
            if (strpos($cpeProduct, 'windows_') !== false) {
                if ($cpeProduct === 'windows_10') {
                    if (strpos($cpeVersion, '10.') === 0 and empty($version)) {
                        $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_10_%\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $cpeVersion;

                    } else if (strpos($cpeVersion, '10.') === 0 and !empty($version)) {
                        $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_10_%\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?))';
                        $return->data[] = $cpeVersion;
                        $return->data[] = $version;

                    } else if (strpos($cpeVersion, '2') === 0 and empty($version)) {
                        $return->sql = '(devices.os_cpe = ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:windows_10_' . $cpeVersion;

                    } else if (strpos($cpeVersion, '2') === 0 and !empty($version)) {
                        $return->sql = '(devices.os_cpe = ? AND devices.os_version = ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:windows_10_' . $cpeVersion;
                        $return->data[] = $version;

                    } else if (empty($cpeVersion) and !empty($version)) {
                        $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_10_%\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $version;

                    } else {
                        $return->sql = '(devices.os_cpe LIKE ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:windows_10_%';
                    }
                }
                if (strpos($cpeProduct, 'windows_10_') === 0) {
                    if (strpos($cpeVersion, '10.') === 0 and empty($version)) {
                        $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $cpeVersion;
                    } else if (strpos($cpeVersion, '10.') === 0 and !empty($version)) {
                        $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?))';
                        $return->data[] = $cpeVersion;
                        $return->data[] = $version;
                    } else if (empty($cpeVersion) and !empty($version)) {
                        $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $version;
                    } else {
                        $return->sql = '(devices.os_cpe = ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:' . $cpeProduct;
                    }
                }


                if ($cpeProduct === 'windows_11') {
                    if (strpos($cpeVersion, '10.') === 0 and empty($version)) {
                        $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_11_%\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $cpeVersion;

                    } else if (strpos($cpeVersion, '10.') === 0 and !empty($version)) {
                        $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_11_%\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?))';
                        $return->data[] = $cpeVersion;
                        $return->data[] = $version;

                    } else if (strpos($cpeVersion, '2') === 0 and empty($version)) {
                        $return->sql = '(devices.os_cpe = ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:windows_11_' . $cpeVersion;

                    } else if (strpos($cpeVersion, '2') === 0 and !empty($version)) {
                        $return->sql = '(devices.os_cpe = ? AND devices.os_version = ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:windows_11_' . $cpeVersion;
                        $return->data[] = $version;

                    } else if (empty($cpeVersion) and !empty($version)) {
                        $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_11_%\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $version;

                    } else {
                        $return->sql = '(devices.os_cpe LIKE ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:windows_11_%';
                    }
                }
                if (strpos($cpeProduct, 'windows_11_') === 0) {
                    if (strpos($cpeVersion, '10.') === 0 and empty($version)) {
                        $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $cpeVersion;

                    } else if (strpos($cpeVersion, '10.') === 0 and !empty($version)) {
                        $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?))';
                        $return->data[] = $cpeVersion;
                        $return->data[] = $version;

                    } else if (empty($cpeVersion) and !empty($version)) {
                        $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';
                        $return->data[] = $version;

                    } else {
                        $return->sql = '(devices.os_cpe = ?)';
                        $return->data[] = 'cpe:2.3:o:microsoft:' . $cpeProduct;
                    }
                }

                if (strpos($cpeProduct, 'windows_server') === 0) {
                    $temp = explode('_', $cpeProduct);
                    $windowsVersion = $temp[2];
                    if ($windowsVersion === '2008') {
                        if (!empty($version)) {
                            $return->sql = '(devices.os_cpe = ? AND devices.os_version ' . $operator . ' ?)';
                            $return->data[] = 'cpe:2.3:o:microsoft:windows_server_2008';
                            $return->data[] = $version;
                        } else {
                            $return->sql = '(devices.os_cpe = ?)';
                            $return->data[] = 'cpe:2.3:o:microsoft:windows_server_2008';
                        }
                    }
                    if ($windowsVersion === '2012') {
                        if (strpos($cpeVersion, '6.') === 0 and empty($version)) {
                            $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:windows_server_2012\' AND devices.os_version ' . $operator . ' ?)';
                            $return->data[] = $cpeVersion;
                        } else if (strpos($cpeVersion, '6.') === 0 and !empty($version)) {
                            $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:windows_server_2012\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?))';
                            $return->data[] = $cpeVersion;
                            $return->data[] = $version;
                        } else if (empty($cpeVersion) and !empty($version)) {
                            $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:windows_server_2012\' AND devices.os_version ' . $operator . ' ?)';
                            $return->data[] = $version;
                        } else {
                            $return->sql = '(devices.os_cpe = ?)';
                            $return->data[] = 'cpe:2.3:o:microsoft:windows_server_2012';
                        }
                    }
                    if (in_array($windowsVersion, ['2016', '2019', '2022', '2025'])) {
                        if ($cpeProduct === 'windows_server_' . $windowsVersion) {
                            if (strpos($cpeVersion, '10.') === 0 and empty($version)) {
                                $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_server_' . $windowsVersion . '%\' AND devices.os_version ' . $operator . ' ?)';
                                $return->data[] = $cpeVersion;

                            } else if (strpos($cpeVersion, '10.') === 0 and !empty($version)) {
                                $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_server_' . $windowsVersion . '%\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?))';
                                $return->data[] = $cpeVersion;
                                $return->data[] = $version;

                            } else if (strpos($cpeVersion, '2') === 0 and empty($version)) {
                                $return->sql = '(devices.os_cpe = ?)';
                                $return->data[] = 'cpe:2.3:o:microsoft:windows_server_' . $windowsVersion . '_' . $cpeVersion;

                            } else if (strpos($cpeVersion, '2') === 0 and !empty($version)) {
                                $return->sql = '(devices.os_cpe = ? AND devices.os_version ' . $operator . ' ?)';
                                $return->data[] = 'cpe:2.3:o:microsoft:windows_server_' . $windowsVersion . '_' . $cpeVersion;
                                $return->data[] = $version;

                            } else if (empty($cpeVersion) and !empty($version)) {
                                $return->sql = '(devices.os_cpe LIKE \'cpe:2.3:o:microsoft:windows_server_' . $windowsVersion . '%\' AND devices.os_version ' . $operator . ' ?)';
                                $return->data[] = $version;

                            } else {
                                $return->sql = '(devices.os_cpe LIKE ?)';
                                $return->data[] = 'cpe:2.3:o:microsoft:windows_server_' . $windowsVersion . '_%';
                            }
                        }
                        if (strpos($cpeProduct, 'windows_server_' . $windowsVersion . '_') === 0) {
                            if (strpos($cpeVersion, '10.') === 0 and empty($version)) {
                                $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';
                                $return->data[] = $cpeVersion;

                            } else if (strpos($cpeVersion, '10.') === 0 and !empty($version)) {
                                $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND (devices.os_version ' . $operator . ' ? OR devices.os_version ' . $operator . ' ?)';
                                $return->data[] = $cpeVersion;
                                $return->data[] = $version;

                            } else if (empty($cpeVersion) and !empty($version)) {
                                $return->sql = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';
                                $return->data[] = $version;
                                $return->sql_raw = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct . '\' AND devices.os_version ' . $operator . ' ?)';

                            } else {
                                $return->sql = '(devices.os_cpe = ?)';
                                $return->data[] = 'cpe:2.3:o:microsoft:' . $cpeProduct;
                                $return->sql_raw = '(devices.os_cpe = \'cpe:2.3:o:microsoft:' . $cpeProduct. '\')';
                            }
                        }
                    }
                }
            } else {
                if ($cpeVersion !== '*' and $cpeVersion !== '-') {
                    $value = 'cpe:2.3:o:' . $cpeVendor . ':' . $cpeProduct . ':' . $cpeVersion . '%';
                } else {
                    $value = 'cpe:2.3:o:' . $cpeVendor . ':' . $cpeProduct . '%';
                }
                if ($vulnerable === false) {
                    $return->sql = '( devices.os_cpe NOT LIKE ? )';
                    $return->sql_raw = '( devices.os_cpe NOT LIKE \'' . $value . '\' )';
                } else {
                    $return->sql = '( devices.os_cpe LIKE ? )';
                    $return->sql_raw = '( devices.os_cpe LIKE \'' . $value . '\' )';
                }
                $return->data[] = $value;
            }
        }
        if (cpe_get('part', $criteria) === 'h') {
            if (cpe_get('version', $criteria) !== '*' and cpe_get('version', $criteria) !== '-') {
                $value = 'cpe:2.3:h:' . cpe_get('vendor', $criteria) . ':' . cpe_get('product', $criteria) . ':' . cpe_get('version', $criteria) . '%';
            } else {
                $value = 'cpe:2.3:h:' . cpe_get('vendor', $criteria) . ':' . cpe_get('product', $criteria) . '%';
            }
            if ($vulnerable === false) {
                $return->sql = '( devices.os_cpe NOT LIKE ? )';
                $return->sql_raw = '( devices.os_cpe NOT LIKE \'' . $value . '\' )';
            } else {
                $return->sql = '( devices.os_cpe LIKE ? )';
                $return->sql_raw = '( devices.os_cpe LIKE \'' . $value . '\' )';
            }
            $return->data[] = $value;
        }
        // log_message('debug', 'RAW: ' . $return->sql_raw);
        // log_message('debug', 'SQL: ' . $return->sql);
        // log_message('debug', 'DATA: ' . json_encode($return->data));
        return $return;
    }

    public function generateQuery($vulnerability)
    {
        helper('components');
        $return = new stdClass();
        $return->sql = '';
        $return->data = array();
        if (is_string($vulnerability)) {
            $vulnerability = json_decode($vulnerability);
        }
        if (is_string($vulnerability->filter)) {
            $vulnerability->filter = json_decode($vulnerability->filter);
        }
        if (is_string($vulnerability->products)) {
            $vulnerability->products = json_decode($vulnerability->products);
        }

        $sql = '';
        $sql_raw = '';
        $types = array();
        $data = array();
        $nodeConditions = array();
        if (!empty($vulnerability->filter) and is_array($vulnerability->filter)) {
            foreach ($vulnerability->filter as $filter) {
                if (!empty($filter->nodes) and is_array($filter->nodes)) {
                    foreach ($filter->nodes as $node) {
                        if (!empty($node->cpeMatch) and is_array($node->cpeMatch)) {
                            $conditions = array();
                            foreach ($node->cpeMatch as $cpeMatch) {
                                if (cpe_get('part', $cpeMatch->criteria) === 'a') {
                                    $types[] = 'a';
                                }
                                if (cpe_get('part', $cpeMatch->criteria) === 'h') {
                                    $types[] = 'h';
                                }
                                if (cpe_get('part', $cpeMatch->criteria) === 'o') {
                                    $types[] = 'o';
                                }
                                if (!isset($cpeMatch->versionStartIncluding) and !isset($cpeMatch->versionStartExcluding) and !isset($cpeMatch->versionEndIncluding) and !isset($cpeMatch->versionEndExcluding)) {
                                    // We should have a 1 to 1 match with the CPE
                                    $operator = '=';
                                    if (!$cpeMatch->vulnerable) { $operator = '!='; }
                                    #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                    $temp = $this->makeCondition($cpeMatch->criteria, cpe_get('version', $cpeMatch->criteria), $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                    $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                    if (!empty($temp->sql)) { $conditions[] = $temp->sql; }

                                } else {
                                    $operator = '=';
                                    if (isset($cpeMatch->versionStartIncluding)) {
                                        $version = $cpeMatch->versionStartIncluding;
                                        $operator = '>=';
                                        if (!$cpeMatch->vulnerable) { $operator = '<'; }
                                        #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                        $temp = $this->makeCondition($cpeMatch->criteria, $version, $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                        $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                        if (!empty($temp->sql)) { $conditions[] = $temp->sql; }
                                    }

                                    if (isset($cpeMatch->versionStartExcluding)) {
                                        $version = $cpeMatch->versionStartExcluding;
                                        $operator = '>';
                                        if (!$cpeMatch->vulnerable) { $operator = '<='; }
                                        #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                        $temp = $this->makeCondition($cpeMatch->criteria, $version, $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                        $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                        if (!empty($temp->sql)) { $conditions[] = $temp->sql; }
                                    }

                                    if (isset($cpeMatch->versionEndIncluding)) {
                                        $version = $cpeMatch->versionEndIncluding;
                                        $operator = '<=';
                                        if (!$cpeMatch->vulnerable) { $operator = '>'; }
                                        #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                        $temp = $this->makeCondition($cpeMatch->criteria, $version, $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                        $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                        if (!empty($temp->sql)) { $conditions[] = $temp->sql; }
                                    }

                                    if (isset($cpeMatch->versionEndExcluding)) {
                                        $version = $cpeMatch->versionEndExcluding;
                                        $operator = '<';
                                        if (!$cpeMatch->vulnerable) { $operator = '>='; }
                                        #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                        $temp = $this->makeCondition($cpeMatch->criteria, $version, $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                        $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                        if (!empty($temp->sql)) { $conditions[] = $temp->sql; }
                                    }

                                    if ($operator === '=' and $cpeMatch->vulnerable === true) {
                                        cpe_get('version', $cpeMatch->criteria);
                                        $operator = '!=';
                                        #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                        $temp = $this->makeCondition($cpeMatch->criteria, $version, $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                        $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                        if (!empty($temp->sql)) { $conditions[] = $temp->sql; }

                                    } else if ($operator === '=' and $cpeMatch->vulnerable === false) {
                                        cpe_get('version', $cpeMatch->criteria);
                                        $operator = '!=';
                                        #log_message('debug', 'Test: ' . $cpeMatch->criteria . ' :: ' . $operator);
                                        $temp = $this->makeCondition($cpeMatch->criteria, $version, $operator, $cpeMatch->vulnerable, $vulnerability->products);
                                        $data = (!empty($temp->data) and is_array($temp->data) and !empty($temp->sql)) ? array_merge($data, $temp->data) : $data;
                                        if (!empty($temp->sql)) { $conditions[] = $temp->sql; }
                                    }
                                }
                            } // CPEMatch loop
                            // log_message('debug', 'Conditions: ' . json_encode($conditions));
                            $o = (!empty($node->operator) and $node->operator === 'OR') ? 'OR' : 'AND';
                            if (count($conditions) > 1) {
                                $nodeConditions[] = '(' . implode(' ' . $o . ' ', $conditions) . ')';
                            } else {
                                $nodeConditions[] = implode(' ' . $o . ' ', $conditions);
                            }
                            // log_message('debug', 'nodeConditions: ' . json_encode($nodeConditions) . "\n");
                            unset($o);
                            unset($conditions);
                        }
                    } // Node loop
                    $o = (!empty($filter->operator) and $filter->operator === 'OR') ? 'OR' : 'AND';
                    $sql = implode(' ' . $o . ' ', $nodeConditions);
                    unset($o);
                }
            }  // Filter loop
        } else {
            log_message('warning', 'Empty filter');
            return $return;
        }
        $types = array_unique($types);
        if (in_array('a', $types)) {
            $sql = 'SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.org_id AS `devices.org_id`, orgs.name AS `orgs.name`, devices.os_family AS `devices.os_family`, software.name AS `software.name`, software.version AS `software.version` FROM `software` LEFT JOIN `devices` ON (software.device_id = devices.id) LEFT JOIN orgs ON (devices.org_id = orgs.id AND software.current = "y") WHERE ' . $sql;
        } else {
            $sql = 'SELECT devices.id AS `devices.id`, devices.name AS `devices.name`, devices.org_id AS `devices.org_id`, orgs.name AS `orgs.name`, devices.os_name AS `devices.os_name`, devices.os_version AS `devices.os_version`, devices.os_cpe AS `devices.os_cpe` FROM `devices` LEFT JOIN orgs ON (devices.org_id = orgs.id) WHERE ' . $sql;
        }

        // log_message('debug', "NodeConditions: " . json_encode($nodeConditions) . "\n");
        // log_message('debug', "data: " . json_encode($data) . "\n");
        // log_message('debug', $sql);
        // exit;
        $return->sql = $sql;
        $return->data = $data;
        return $return;
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        if (empty($data->cve)) {
            log_message('error', 'CVE for inserting, but no CVE ID supplied.');
            return null;
        }
        if (!empty($data->filter)) {
            $filter = $data->filter;
        }
        if (!empty($data->filter) and !is_string($data->filter)) {
            $data->filter = json_encode($data->filter);
        }
        if (!empty($data->links) and !is_string($data->links)) {
            $data->links = json_encode($data->links);
        }
        $data = $this->createFieldData('vulnerabilities', $data);
        if (empty($data)) {
            return null;
        }
        if (empty($filter)) {
            log_message('warning', 'No Filter after createFieldData.');
        }

        // Does this CVE already exist in our database?
        $existing = $this->builder->getWhere(['cve' => $data->cve])->getResult();
        $formattedData = new stdClass();
        foreach ($data as $key => $value) {
            if ($this->db->fieldExists($key, 'vulnerabilities')) {
                $formattedData->{$key} = $value;
            }
        }
        if (!empty($existing[0]->cve)) {
            // We have an existing matching CVE, update it
            // TODO - combine products from feeds with existing from DB so we don't loose any user customisations
            $this->builder->where('cve', $existing[0]->cve);
            $this->builder->update($formattedData);
        } else {
            $this->builder->insert($formattedData);
        }
        // $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        if (!empty($existing[0]->cve)) {
            $id = intval($existing[0]->id);
        } else {
            $id = intval($this->db->insertID());
        }
        // Check if we have any matching packages in the database and set status to unlikely if no result
        $vulnerability = $this->builder->getWhere(['id' => $id])->getResult()[0];
        if ($this->sqlError($this->db->error()) or empty($vulnerability)) {
            log_message('warning', 'Could not read vulnerability with ID: ' . $id . ', after create.');
            return ($id);
        }
        $vQuery = $this->generateQuery($vulnerability);
        $result = false;
        if (!empty($vQuery->sql)) {
            if (stripos($vQuery->sql, 'software.name') !== false) {
                $vQuery->sql = $vQuery->sql . " GROUP BY software.name";
            } else if (stripos($vQuery->sql, 'os_cpe') !== false) {
                $vQuery->sql = $vQuery->sql . " GROUP BY devices.os_cpe";
            } else if (stripos($vQuery->sql, 'hw_cpe') !== false) {
                $vQuery->sql = $vQuery->sql . " GROUP BY devices.hw_cpe";
            }
            if (!empty($vQuery->sql)) {
                if (stripos($vQuery->sql, 'hw_cpe') === false) {
                    $result = $this->db->query($vQuery->sql, $vQuery->data)->getResult();
                    // log_message('debug', str_replace("\n", " ", (string)$this->db->getLastQuery()));
                }
            } else {
                log_message('warning', 'No SQL for ' . $id . ', to test status.');
            }
        }
        if (empty($result) or count($result) === 0) {
            $data = new stdClass();
            $data->status = 'unlikely';
            $this->builder->where('id', intval($id));
            $this->builder->update($data);
        }
        return ($id);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        return true;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);
        $org_list = implode(',', $org_list);

        $included = array();
        $included['devices'] = array();
        $included['software'] = '';
        $vulnerability = $this->builder->getWhere(['id' => intval($id)])->getResult()[0];
        $result = array();
        if (empty($vulnerability->sql)) {
            // Make our SQL
            $vQuery = $this->generateQuery($vulnerability);
            if (!empty($vQuery->sql)) {
                $vQuery->sql = $vQuery->sql . " AND devices.org_id IN ({$org_list})";
                $devices = $this->db->query($vQuery->sql, $vQuery->data)->getResult();
                $included['devices'] = format_data($devices, 'devices');
            }
        } else {
            // Make our SQL
            $sql = $vulnerability->sql . " AND devices.org_id IN ({$org_list})";
            $devices = $this->db->query($sql)->getResult();
            $included['devices'] = format_data($devices, 'devices');
        }
        if (!empty($devices)) {
            if (isset($devices[0]->{'software.name'})) {
                $software = array();
                foreach ($devices as $row) {
                    $software[] = $row->{'software.name'};
                }
                $software = array_unique($software);
                $included['software'] = implode(', ', $software);
            }
        }
        return $included;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'vulnerabilities.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'vulnerabilities.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'vulnerabilities');
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $item = $query->getResult();
        $item[0]->filter = json_decode($item[0]->filter);
        $item[0]->nvd_json = json_decode($item[0]->nvd_json);
        $item[0]->mitre_json = json_decode($item[0]->mitre_json);
        $item[0]->references = json_decode($item[0]->references);
        $item[0]->products = json_decode($item[0]->products);
        $item[0]->generated = 'n';

        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list = array_unique($org_list);
        $org_list = implode(',', $org_list);
        $vQuery = $this->generateQuery($item[0]);
        if (!empty($vQuery->sql)) {
            $vQuery->sql = $vQuery->sql . " AND devices.org_id IN ({$org_list})";
            $vQuery->sql = str_replace(' ( ) ', ' ', $vQuery->sql);
            $devices = $this->db->query($vQuery->sql, $vQuery->data)->getResult();
            $sql = str_replace("\n", " ", (string)$this->db->getLastQuery());
            $sql = str_replace(" AND devices.org_id IN ({$org_list})", '', $sql);
            $item[0]->sql = $sql;
            $item[0]->generated = 'y';
        }

        return format_data($item, 'vulnerabilities');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('vulnerabilities')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        // Accept our client data
        $data = $this->updateFieldData('vulnerabilities', $data);
        if (!empty($data->filter) and !is_string($data->filter)) {
            $data->filter = json_encode($data->filter);
        }
        if (!empty($data->filter) and is_string($data->filter)) {
            $data->filter = json_decode($data->filter);
            $data->filter = json_encode($data->filter);
        }
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'vulnerabilities';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'cve', 'name', 'vendor', 'published', 'affected');
        $dictionary->attributes->create = array('name', 'org_id', 'cve'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Vulnerabilities reporting based on the NIST CVE feed.';

        $dictionary->about = '<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->cve  = 'The CVE identifier.';
        $dictionary->columns->status = 'The user assigned status of pending, confirmed or declined. This should occur after reviewing the <code>filter</code> and generated <code>SQL</code>. If set to declined, this item will not appear on the Vulnerability list by default.';
        $dictionary->columns->attack_complexity = 'Complexity of the attack (Low or High).';
        $dictionary->columns->attack_requirements = '';
        $dictionary->columns->attack_vector = 'How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).';
        $dictionary->columns->automatable = '';
        $dictionary->columns->base_score = 'Overall severity score (0–10).';
        $dictionary->columns->base_severity = 'Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.';
        $dictionary->columns->description  = 'Human-readable explanation of the vulnerability.';
        $dictionary->columns->exploit_maturity = 'Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.';
        $dictionary->columns->impact_availability = 'A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).';
        $dictionary->columns->impact_confidentiality = 'A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).';
        $dictionary->columns->impact_integrity = 'A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).';
        $dictionary->columns->lastModified = 'Date when the CVE was last updated.';
        $dictionary->columns->privileges_required = 'Level of privileges needed to exploit (None, Low, High).';
        $dictionary->columns->published = 'Date and time when the CVE was published.';
        $dictionary->columns->published_date = 'Date when the CVE was published.';
        $dictionary->columns->references = '';
        $dictionary->columns->remediation = '';
        $dictionary->columns->scope = 'Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.';
        $dictionary->columns->type = 'Application, Operating System or Hardware.';
        $dictionary->columns->user_interaction = 'Whether user interaction is required (None, Passive, Active).';
        $dictionary->columns->vendor = '';
        $dictionary->columns->vuln_status = '';
        $dictionary->columns->filter  = 'A JSON array of values to test for this vulnerability.';
        $dictionary->columns->sql  = 'The generated (or manually overridden) SQL to test for this vulnerability.';
        $dictionary->columns->nvd_json  = 'The JSON record from the NVD feed.';
        $dictionary->columns->mitre_json = 'The JSON record from Mitre.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;

        return $dictionary;
    }
}
