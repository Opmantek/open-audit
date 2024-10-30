<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use stdClass;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Components
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Components
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Components extends BaseController
{
    public function createForm(string $type = '', $device_id = 0)
    {
        $this->resp->included = $this->{$this->resp->meta->collection . 'Model'}->includedCreateForm();
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        $this->resp->meta->id = $device_id;
        if ($type === 'applications') {
            $this->applicationsModel = new \App\Models\ApplicationsModel();
            $this->resp->included['applications'] = $this->applicationsModel->listUser();
        }
        if ($type === 'clusters') {
            $this->clustersModel = new \App\Models\ClustersModel();
            $this->resp->included['clusters'] = $this->clustersModel->listUser();
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'included' => $this->resp->included,
            'meta' => filter_response($this->resp->meta),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'orgs' => filter_response($this->orgsUser),
            'user' => filter_response($this->user)]) .
            view($this->resp->meta->collection . ucfirst($this->resp->meta->action) . ucfirst($type))
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    public function delete($id, $type)
    {
        $this->resp->meta->sub_resource = $type;
        $test = $this->{'componentsModel'}->delete($id);
        if ($test) {
            $this->response->setStatusCode(200);
            $temp = new stdClass();
            $temp->type = $type;
            $this->resp->data = array();
            $this->resp->data[] = $temp;
        }
        if (!$test) {
            $this->resp->meta->header = 500;
            $this->response->setStatusCode($this->resp->meta->header);
            if (!empty(\Config\Services::session()->getFlashdata('error'))) {
                $this->resp->errors = \Config\Services::session()->getFlashdata('error');
            }
            if (!empty(\Config\Services::session()->getFlashdata('warning'))) {
                $this->resp->errors = \Config\Services::session()->getFlashdata('warning');
            }
            if (empty($this->resp->errors)) {
                $this->resp->errors = 'Item in ' . $this->resp->meta->collection . ' not deleted.';
                \Config\Services::session()->setFlashdata('error', 'Item in ' . $this->resp->meta->collection . ' not deleted.');
            }
            log_message('error', $this->resp->errors);
        }
        output($this);
    }

    public function download($id, $type)
    {
        if ($type !== 'attachment') {
            $this->resp->meta->header = 500;
            $this->response->setStatusCode($this->resp->meta->header);
            return;
        }
        $filter = new stdClass();
        $filter->name = 'type';
        $filter->value = $type;
        $this->resp->meta->filter[] = $filter;
        $item = $this->componentsModel->read(intval($id));
        return $this->response->download(APPPATH . 'Attachments/' . $item[0]->attributes->filename, null);
    }
}
