<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

/**
 * [get_user_descendants description]
 * @param  integer $user_id [description]
 * @return [type]           [description]
 */
function get_user_descendants($user_id = 0)
{
    $CI_INSTANCE = get_instance();
    $user_id = intval($user_id);
    $db = db_connect();
    $sql = 'SELECT orgs FROM users WHERE id = ?';
    $query = $db->query($sql, [$user_id]);
    $result = $query->getResult();
    if ( ! empty($result[0])) {
        $user = $result[0];
    } else {
        return array();
    }
    $org_list = json_decode($user->orgs);
    $orgs = array();
    foreach ($org_list as $org_id) {
        $orgs = array_merge($orgs, get_descendants($org_id));
    }

    // for ($i=0; $i < count($orgs); $i++) { 
    //     if (intval($orgs[$i]) === intval($org_id)) {
    //         unset($orgs[$i]);
    //     }
    // }

    $orgs = array_unique($orgs);
    sort($orgs);
    echo "<pre>"; print_r($orgs);
    return $orgs;
}

/**
 * [get_descendants description]
 * @param  integer $id [description]
 * @return [type]      [description]
 */
function get_descendants($id = 0)
{
    $CI_INSTANCE = get_instance();
    $user_id = intval($id);
    $db = db_connect();
    $org_list = array();

    if (empty($CI_INSTANCE->orgs)) {
        $sql = 'SELECT * FROM orgs';
        $query = $db->query($sql);
        $CI_INSTANCE->orgs = $query->getResult();
    }

    $sql = 'SELECT * FROM orgs';
    $query = $db->query($sql);
    $result = $query->getResult();
    foreach ($CI_INSTANCE->orgs as $org) {
        if (intval($org->parent_id) === $id && intval($org->id) !== 1) {
            $org_list[] = intval($org->id);
            foreach (get_descendants($org->id) as $org) {
                $org_list[] = intval($org);
            }
        }
    }
    if ($id === 1) {
        $org_list[] = 1;
    }

    return($org_list);
}

/**
 * [get_user_ascendants description]
 * @param  integer $user_id [description]
 * @return [type]           [description]
 */
function get_user_ascendants($user_id = 0)
{
    // NOTE - Calling function should add org.id 1 itself
    //        because attempting to derive it here results in a circular reference
    $user_id = intval($user_id);
    if ( ! empty($this->user) && intval($this->user->id) === $user_id) {
        $org_list = $this->user->orgs_list;
    } else {
        $sql = '/* m_orgs::get_user_ascendants */ ' . 'SELECT orgs FROM users WHERE id = ?';
        $data = array($user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (empty($result[0])) {
            return array();
        }
        $user = $result[0];
        $org_list = json_decode($user->orgs);
    }
    $orgs = array();
    if ( ! is_array($org_list)) {
        $org_list = explode(',', $org_list);
    }
    foreach ($org_list as $org_id) {
        $orgs = array_merge($orgs, $this->get_ascendant($org_id));
    }
    for ($i=0; $i < count($orgs); $i++) { 
        if (intval($orgs[$i]) === intval($org_id)) {
            unset($orgs[$i]);
        }
    }
    $orgs = array_unique($orgs);
    sort($orgs);
    return $orgs;
}

/**
 * [get_user_all description]
 * @param  integer $user_id [description]
 * @return [type]           [description]
 */
function get_user_all($user_id = 0)
{
    $user_id = intval($user_id);
    if (empty($user_id)) {
        return array();
    }
    $sql = '/* m_orgs::get_user_all */ ' . 'SELECT orgs FROM users WHERE id = ?';
    $data = array($user_id);
    $query = $this->db->query($sql, $data);
    $result = $query->result();
    if (empty($result[0])) {
        return array();
    }
    $user = $result[0];
    $org_list = json_decode($user->orgs);
    $descendants = $this->get_user_descendants($user_id);
    $ascendants = $this->get_user_ascendants($user_id);
    $org_list = array_merge($org_list, $descendants);
    $org_list = array_merge($org_list, $ascendants);
    $org_list = array_unique($org_list);
    return ($org_list);
}