<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use \App\Models\DatabaseModel;
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
 * Base Object Attributes
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Attributes
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Collections extends BaseController
{
    /**
     * Update a list of items
     *
     * @access public
     * @return NULL
     */
    public function bulkUpdate()
    {
        if (empty($this->resp->meta->received_data->ids)) {
            return false;
        }
        $ids = explode(',', $this->resp->meta->received_data->ids);
        foreach ($ids as $id) {
            $status = $this->{$this->resp->meta->collection . 'Model'}->update($id, $this->resp->meta->received_data->attributes);
        }
        if ($status) {
            output($this);
            return;
        }
        $this->response->setStatusCode(400);
        if (!empty($GLOBALS['stash'])) {
            print_r(json_encode($GLOBALS['stash']));
        }
        return;
    }

    /**
     * Collection of items
     *
     * @access public
     * @return NULL
     */
    public function collection(string $export = '')
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->collection($this->resp);
        $this->resp->meta->total = count($this->{strtolower($this->resp->meta->collection) . "Model"}->listUser());
        $this->resp->meta->filtered = count($this->resp->data);

        if (strpos($this->resp->meta->query_string, 'limit=') !== false and $this->resp->meta->filtered < $this->resp->meta->total and empty($_SESSION['warning'])) {
            $_SESSION['success'] = 'Result limited to ' . $this->resp->meta->filtered . ' items as requested. There are actually ' . $this->resp->meta->total . ' ' . $this->resp->meta->collection . '.';
        }

        if (strpos($this->resp->meta->query_string, 'limit=') === false and $this->resp->meta->filtered < $this->resp->meta->total and $this->resp->meta->filtered === $this->config->page_size) {
            $_SESSION['success'] = 'Result limited to ' . $this->config->page_size . ' items as per configuration. There are actually ' . $this->resp->meta->total . ' ' . $this->resp->meta->collection . '. You can change this in the configuration, <a href="' . url_to('configurationRead', 'page_size') . '">here</a>.';
        }

        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        if (empty($this->resp->meta->properties[0]) or $this->resp->meta->properties[0] === $this->resp->meta->collection . '.*') {
            $this->resp->meta->data_order = $dictionary->attributes->collection;
        } else {
            $this->resp->meta->data_order = array();
            foreach ($this->resp->meta->properties as $key) {
                $this->resp->meta->data_order[] = str_replace($this->resp->meta->collection . '.', '', $key);
            }
        }
        if ($this->resp->meta->collection === 'discoveries') {
            $this->resp->included['issues'] = $this->discoveriesModel->issuesCollection(intval($this->user->id));
            nmapInstalled(true);
            nmapSuid(true);
            // $this->collectorsModel = new \App\Models\CollectorsModel;
            // $this->resp->included['collectors'] = $this->collectorsModel->listUser();
        }
        if (
            $this->resp->meta->collection === 'benchmarks' or
            $this->resp->meta->collection === 'clouds' or
            $this->resp->meta->collection === 'devices' or
            $this->resp->meta->collection === 'discoveries' or
            $this->resp->meta->collection === 'networks' or
            $this->resp->meta->collection === 'summaries'
        ) {
            $this->resp->included = array_merge($this->resp->included, $this->{strtolower($this->resp->meta->collection) . "Model"}->includedCollection());
        }

        if ($this->resp->meta->format !== 'html') {
            output($this);
            return;
        }
        $view = $this->resp->meta->collection . ucfirst($this->resp->meta->action);
        if (empty($this->resp->included)) {
            $this->resp->included = array();
        }
        // A special case for the Bulk Update Form
        if ($this->resp->meta->request_method === 'GET' and strpos($this->resp->meta->query_string, 'action=bulkupdateform') !== false) {
            $view = $this->resp->meta->collection . 'BulkUpdateForm';
            $this->resp->included = $this->{strtolower($this->resp->meta->collection) . "Model"}->includedBulkUpdate();
            $this->resp->meta->action = 'bulkupdateform';
        }
        if ($export === 'export') {
            $view = 'collectionExport';
        }
        if ($this->resp->meta->collection === 'maps') {
            # Disable CSP as Google and FontAwesome do not play nice on the template
            $csp = $this->response->getCSP();
            $csp->reportOnly(true);
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view($view, ['data' => filter_response($this->resp->data), 'included' => filter_response($this->resp->included)])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        return true;
    }

    /**
     * Accept a POST and create the item
     *
     * @return void
     */
    public function create()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }

        if (!empty($this->resp->meta->id)) {
            $id = intval($this->resp->meta->id);
        }

        if (empty($this->resp->meta->id) and empty($this->resp->meta->received_data->attributes)) {
            $message = 'You must supply data attributes when creating an item in ' . @$this->resp->meta->collection . '.';
            log_message('error', $message);
            $this->resp->errors = $message;
        }

        if (empty($this->resp->meta->id) and !empty($this->resp->meta->received_data->attributes)) {
            $id = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($this->resp->meta->received_data->attributes);
        }

        if (!empty($id)) {
            if ($this->resp->meta->format !== 'html') {
                $this->resp->meta->header = 201;
                if ($this->resp->meta->collection !== 'components') {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->read($id);
                } else {
                    if ($this->resp->meta->received_data->attributes->component_type === 'discovery') {
                        $this->resp->data = $this->discoveriesModel->read($id);
                        // Sleep for a couple of seconds so some logs get a change happen
                        // and the resulting discovery screen doesn't look empty (as if nothing has happened).
                        sleep(2);
                    }
                }
                $this->resp->meta->id = $id;
                output($this);
                return true;
            } else {
                if ($this->resp->meta->collection !== 'components') {
                    if ($this->resp->meta->collection === 'collectors') {
                        \Config\Services::session()->setFlashdata('success', "This server was registered as a Collector successfully.");
                        return redirect()->route('dashboardCollector');
                    }
                    \Config\Services::session()->setFlashdata('success', "Item in {$this->resp->meta->collection} created successfully.");
                    if ($this->resp->meta->collection === 'baselines_policies') {
                        return redirect()->route('baselinesRead', [$this->resp->meta->received_data->attributes->baseline_id]);
                    }
                    if ($this->resp->meta->collection === 'rack_devices') {
                        return redirect()->route('racksRead', [$this->resp->meta->received_data->attributes->rack_id]);
                    }
                    return redirect()->route($this->resp->meta->collection . 'Read', [$id]);
                } else {
                    $collection = 'device';
                    if (stripos($this->resp->meta->query_string, 'type=') !== false) {
                        if (str_replace('type=', '', $this->resp->meta->query_string) === $this->resp->meta->received_data->attributes->component_type) {
                            $collection = str_replace('type=', '', $this->resp->meta->query_string);
                        }
                    }
                    $id = $this->resp->meta->received_data->attributes->{$collection . '_id'};
                    \Config\Services::session()->setFlashdata('success', ucwords($this->resp->meta->received_data->attributes->component_type) . " created successfully.");
                    return redirect()->route($collection . 'sRead', [$id]);
                }
            }
        } else {
            if ($this->resp->meta->format !== 'html') {
                $this->resp->meta->header = 500;
                if (!empty(\Config\Services::session()->getFlashdata('warning'))) {
                    $this->resp->errors = \Config\Services::session()->getFlashdata('warning');
                }
                if (!empty(\Config\Services::session()->getFlashdata('error'))) {
                    $this->resp->errors = \Config\Services::session()->getFlashdata('error');
                }
                output($this);
                return true;
            } else {
                if ($this->resp->meta->collection === 'collectors') {
                    return redirect()->route('dashboardsExecute', [1]);
                }
                log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                if ($this->resp->meta->collection === 'components') {
                    $this->resp->meta->collection = 'devices';
                }
                return redirect()->route($this->resp->meta->collection . 'Collection');
            }
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function createForm()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $this->resp->included = $this->{strtolower($this->resp->meta->collection) . 'Model'}->includedCreateForm();
        $this->resp->included['orgs'] = $this->orgsModel->listUser();
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        if ($this->resp->meta->format !== 'html') {
            $this->resp->dictionary = $dictionary;
            output($this);
            return true;
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
            view($this->resp->meta->collection . ucfirst($this->resp->meta->action))
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Return the default items as per a new install
     *
     * @return void
     */
    public function defaults()
    {
        $this->baseModel = model('App\Models\BaseModel');
        $defaults = $this->baseModel->tableDefaults($this->resp->meta->collection);
        $this->databaseModel = model('App\Models\DatabaseModel');
        $data = $this->databaseModel->read($this->resp->meta->collection);
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        if ($this->resp->meta->format !== 'html') {
            $this->resp->dictionary_rows = $this->databaseModel->read($this->resp->meta->collection);
            $this->resp->dictionary = $dictionary;
            $this->resp->data = $defaults;
            output($this);
            return true;
        }
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'defaults' => filter_response($defaults),
            'dictionary' => $dictionary,
            'meta' => filter_response($this->resp->meta),
            'queries' => filter_response($this->queriesUser),
            'user' => filter_response($this->user)]) .
            view('collectionDefaults', ['data' => $data])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Delete the item
     *
     * @return void
     */
    public function delete()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        if ($this->{$this->resp->meta->collection . 'Model'}->delete($this->resp->meta->id)) {
            \Config\Services::session()->setFlashdata('success', 'Item in ' . $this->resp->meta->collection . ' deleted.');
            $temp = new stdClass();
            $temp->type = $this->resp->meta->collection;
            $this->resp->data = array();
            $this->resp->data[] = $temp;
        } else {
            $this->resp->meta->header = 500;
            if (!empty(\Config\Services::session()->getFlashdata('error'))) {
                $this->resp->errors = \Config\Services::session()->getFlashdata('error');
            } elseif (!empty(\Config\Services::session()->getFlashdata('warning'))) {
                $this->resp->errors = \Config\Services::session()->getFlashdata('warning');
            } else {
                $this->resp->errors = 'Item in ' . $this->resp->meta->collection . ' not deleted.';
            }
            if (empty(\Config\Services::session()->getFlashdata('error')) and empty(\Config\Services::session()->getFlashdata('warning'))) {
                \Config\Services::session()->setFlashdata('error', 'Item in ' . $this->resp->meta->collection . ' not deleted.');
            }
        }
        output($this);
    }

    public function dictionary($model)
    {
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        echo json_encode($dictionary);
    }

    /**
     * Help
     *
     * @return void
     */
    public function help()
    {
        $this->baseModel = model('App\Models\BaseModel');
        $defaults = $this->baseModel->tableDefaults($this->resp->meta->collection);
        $this->databaseModel = model('App\Models\DatabaseModel');
        $data = $this->databaseModel->read($this->resp->meta->collection);

        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('collectionHelp', ['data' => $data, 'dictionary' => $dictionary, 'defaults' => $defaults])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Import multiple uploaded items
     *
     * @return void
     */
    public function import()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $file = $this->request->getFile('file_import');
        if (!$file->isValid()) {
            \Config\Services::session()->setFlashdata('error', 'File import error. ' . $file->getErrorString() . ' ' . $file->getError());
            log_message('error', 'File import error. ' . $file->getErrorString() . ' ' . $file->getError());
            return redirect()->route($this->resp->meta->collection . 'Collection');
        }
        $csv = @array_map('str_getcsv', file($file->getTempName(), FILE_IGNORE_NEW_LINES));
        if (!$csv) {
            if ($this->response->meta->format === 'json') {
                output($this->resp);
                return;
            }
            \Config\Services::session()->setFlashdata('error', 'CSV error.');
            return redirect()->route($this->resp->meta->collection . 'Collection');
        }
        $attributes = $csv[0];
        $row_count = count($csv);
        $column_count = count($attributes);
        $count_create = 0;
        $count_create_fail = 0;
        $count_update = 0;
        $count_update_fail = 0;
        $id = array();
        $this->locationsModel = model('App\Models\LocationsModel');
        for ($i = 1; $i < $row_count; $i++) {
            $data = new stdClass();
            for ($j = 0; $j < $column_count; $j++) {
                $data->{$attributes[$j]} = $csv[$i][$j];
            }
            if ($this->resp->meta->collection === 'devices' and empty($data->last_seen_by)) {
                $data->last_seen_by = 'user';
            }
            foreach ($data as $key => $value) {
                $data->{$key} = str_replace("\\n", "\n", $value);
                $data->{$key} = str_replace("\\r", "\r", $data->{$key});
            }

            if (!empty($data->{'orgs.name'}) and $this->resp->meta->collection !== 'orgs' and empty($data->{'orgs.id'}) and empty($data->org_id)) {
                // Lookup the Org by name and assign the org_id
                if (empty($orgs)) {
                    $orgs = $this->orgsModel->listUser();
                }
                foreach ($orgs as $org) {
                    if ($data->{'orgs.name'} === $org->attributes->name) {
                        $data->{'org_id'} = $org->id;
                    }
                }
            }

            if (!empty($data->{'orgs.name'}) and $this->resp->meta->collection === 'orgs' and empty($data->{'orgs.id'}) and empty($data->parent_id)) {
                // Lookup the Org by name and assign the org_id
                if (empty($orgs)) {
                    $orgs = $this->orgsModel->listUser();
                }
                foreach ($orgs as $org) {
                    if ($data->{'orgs.name'} === $org->attributes->name) {
                        $data->{'parent_id'} = $org->id;
                    }
                }
            }

            if (!empty($data->{'locations.name'}) and in_array($this->resp->meta->collection, ['devices', 'networks', 'racks']) and empty($data->{'locations.id'}) and empty($data->location_id)) {
                // Lookup the Org by name and assign the org_id
                if (empty($locations)) {
                    $locations = $this->locationsModel->listUser();
                }
                foreach ($locations as $location) {
                    if ($data->{'locations.name'} === $location->attributes->name) {
                        $data->{'location_id'} = $location->id;
                    }
                }
            }

            if (!empty($data->{'locations.name_a'}) and $this->resp->meta->collection === 'connections' and empty($data->location_id_a)) {
                // Lookup the Org by name and assign the org_id
                if (empty($locations)) {
                    $locations = $this->locationsModel->listUser();
                }
                foreach ($locations as $location) {
                    if ($data->{'locations.name_a'} === $location->attributes->name) {
                        $data->{'location_id_a'} = $location->id;
                    }
                }
            }

            if (!empty($data->{'locations.name_b'}) and $this->resp->meta->collection === 'connections' and empty($data->location_id_b)) {
                // Lookup the Org by name and assign the org_id
                if (empty($locations)) {
                    $locations = $this->locationsModel->listUser();
                }
                foreach ($locations as $location) {
                    if ($data->{'locations.name_b'} === $location->attributes->name) {
                        $data->{'location_id_b'} = $location->id;
                    }
                }
            }

            if (($this->resp->meta->collection === 'credential' or $this->resp->meta->collection === 'credentials' or $this->resp->meta->collection === 'clouds') and empty($data->credentials)) {
                $data->credentials = new stdClass();
                foreach ($data as $key => $value) {
                    if (strpos($key, 'credentials.') !== false) {
                        $data->credentials->{str_replace('credentials.', '', $key)} = $value;
                    }
                }
            }

            #if (($this->resp->meta->collection === 'dashboards' or $this->resp->meta->collection === 'scripts' or $this->resp->meta->collection === 'tasks') and empty($data->options)) {
            if (($this->resp->meta->collection === 'dashboards' or $this->resp->meta->collection === 'scripts') and empty($data->options)) {
                $data->options = new stdClass();
                foreach ($data as $key => $value) {
                    if (strpos($key, 'options.') !== false) {
                        $data->options->{str_replace('options.', '', $key)} = $value;
                    }
                }
            }

            if ($this->resp->meta->collection === 'discoveries' and empty($data->scan_options)) {
                $data->options = new stdClass();
                foreach ($data as $key => $value) {
                    if (strpos($key, 'scan_options.') !== false) {
                        $data->options->{str_replace('scan_options.', '', $key)} = $value;
                    }
                }
            }

            if ($this->resp->meta->collection === 'discoveries' and empty($data->match_options)) {
                $data->options = new stdClass();
                foreach ($data as $key => $value) {
                    if (strpos($key, 'match_options.') !== false) {
                        $data->options->{str_replace('match_options.', '', $key)} = $value;
                    }
                }
            }

            if (!empty($data->id)) {
                $test = $this->{strtolower($this->resp->meta->collection) . "Model"}->read(intval($data->id));
                if (empty($test)) {
                    log_message('warning', 'ID provided to JSON import of ' . $data->id . ' for ' . $this->resp->meta->collection . ' but that row does not exist, removing ID and creating, not updating.');
                    unset($data->id);
                }
            }

            if (!empty($data->id)) {
                $test = $this->{$this->resp->meta->collection . 'Model'}->update(intval($data->id), $data);
                if (!empty($test)) {
                    $id[] = $data->id;
                    $count_update += 1;
                } else {
                    $count_update_fail += 1;
                }
            } else {
                $test = $this->{$this->resp->meta->collection . 'Model'}->create($data);
                if (!empty($test)) {
                    $id[] = $test;
                    $count_create += 1;
                } else {
                    $count_create_fail += 1;
                }
            }
        }
        if (!empty($id)) {
            if ($this->resp->meta->format !== 'html') {
                if (count($id) > 1) {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->listUser();
                } else {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->read($id[0]);
                }
                output($this);
                return true;
            } else {
                $this->resp->meta->header = 200;
                if ($this->resp->meta->collection !== 'components') {
                    if (count($id) > 1) {
                        $message = $count_create . ' ' . $this->resp->meta->collection . ' created successfully.<br />';
                        $message .= $count_update . ' ' . $this->resp->meta->collection . ' updated successfully.<br />';
                        $message .= $count_create_fail . ' ' . $this->resp->meta->collection . ' failed to create.<br />';
                        $message .= $count_update_fail . ' ' . $this->resp->meta->collection . ' failed to update.';
                        \Config\Services::session()->setFlashdata('success', $message);
                        return redirect()->route($this->resp->meta->collection . 'Collection');
                    } else {
                        $message = "1 Item in {$this->resp->meta->collection} created successfully.";
                        if ($count_update === 1) {
                            $message = "1 Item in {$this->resp->meta->collection} updated successfully.";
                        }
                        \Config\Services::session()->setFlashdata('success', $message);
                        return redirect()->route($this->resp->meta->collection . 'Read', [$id[0]]);
                    }
                } else {
                    \Config\Services::session()->setFlashdata('success', ucwords($this->resp->meta->received_data->attributes->component_type) . " created successfully.");
                    if (!empty($this->resp->meta->received_data->attributes->device_id)) {
                        return redirect()->route('devicesRead', [$this->resp->meta->received_data->attributes->device_id]);
                    } else {
                        return redirect()->route('devicesCollection');
                    }
                }
            }
        } else {
            if ($this->resp->meta->format !== 'html') {
                $this->resp->meta->header = 500;
                output($this);
                return true;
            } else {
                log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                return redirect()->route($this->resp->meta->collection . 'Collection');
            }
        }
    }

    /**
     * Provide a html form to upload multiple items
     *
     * @return void
     */
    public function importForm()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $this->databaseModel = model('App\Models\DatabaseModel');
        $this->resp->data = $this->databaseModel->read($this->resp->meta->collection);
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'meta' => $this->resp->meta,
            'orgs' => $this->orgsUser,
            'queries' => $this->queriesUser,
            'roles' => $this->roles,
            'user' => $this->user ]) .
            view('collectionImport', ['data' => $dictionary])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        return;
    }

    /**
     * Provide a html form to upload multiple items
     *
     * @return void
     */
    public function importJSONForm()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $this->databaseModel = new \App\Models\DatabaseModel();
        $this->resp->data = $this->databaseModel->read($this->resp->meta->collection);
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'meta' => $this->resp->meta,
            'orgs' => $this->orgsUser,
            'queries' => $this->queriesUser,
            'roles' => $this->roles,
            'user' => $this->user ]) .
            view('collectionImportJsonForm', ['data' => $dictionary])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        return;
    }

    /**
     * Accept a POST, use the JSON to create the item
     *
     * @return void
     */
    public function importJSON()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        // Account for old style collection JSON export
        if (!empty($this->resp->meta->received_data->json->data)) {
            $data = $this->resp->meta->received_data->json->data;
            unset($this->resp->meta->received_data->json->data);
            $this->resp->meta->received_data->json = array();
            foreach ($data as $item) {
                $this->resp->meta->received_data->json[] = $item;
            }
        }
        // Account for old style singular JSON export
        if (!is_array($this->resp->meta->received_data->json)) {
            $this->resp->meta->received_data->json = array($this->resp->meta->received_data->json);
        }
        $id = array();
        $count_create = 0;
        $count_create_fail = 0;
        $count_update = 0;
        $count_update_fail = 0;
        if (empty($this->resp->meta->received_data->json) or json_encode($this->resp->meta->received_data->json) === '[""]') {
            \Config\Services::session()->setFlashdata('error', 'No data (or invalid JSON) provided. No ' . $this->resp->meta->collection . ' created.');
            return redirect()->route($this->resp->meta->collection . 'Collection');
        }
        foreach ($this->resp->meta->received_data->json as $item) {
            if (!empty($item->id)) {
                $test = $this->{strtolower($this->resp->meta->collection) . "Model"}->read(intval($item->id));
                if (empty($test)) {
                    log_message('warning', 'ID provided to JSON import of ' . $item->id . ' for ' . $this->resp->meta->collection . ' but that row does not exist, removing ID and creating, not updating.');
                    unset($item->id);
                }
            }
            if (!empty($item->id)) {
                if (empty($item->attributes)) {
                    // Account for old style individual JSON export
                    $test = $this->{strtolower($this->resp->meta->collection) . "Model"}->update(intval($item->id), $item);
                } else {
                    $test = $this->{strtolower($this->resp->meta->collection) . "Model"}->update(intval($item->id), $item->attributes);
                }
                if (!empty($test)) {
                    $id[] = $item->id;
                    $count_update += 1;
                } else {
                    $count_update_fail += 1;
                }
            } else {
                if (empty($item->attributes)) {
                    // Account for old style individual JSON export
                    $test = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($item);
                } else {
                    $test = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($item->attributes);
                }
                if (!empty($test)) {
                    $id[] = $test;
                    $count_create += 1;
                } else {
                    $count_create_fail += 1;
                }
            }
        }
        if (!empty($id)) {
            if ($this->resp->meta->format !== 'html') {
                if (count($id) > 1) {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->listUser();
                } else {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->read($id[0]);
                }
                output($this);
                return true;
            } else {
                $this->resp->meta->header = 200;
                if ($this->resp->meta->collection !== 'components') {
                    if (count($id) > 1) {
                        $message = $count_create . ' ' . $this->resp->meta->collection . ' created successfully.<br />';
                        $message .= $count_update . ' ' . $this->resp->meta->collection . ' updated successfully.<br />';
                        $message .= $count_create_fail . ' ' . $this->resp->meta->collection . ' failed to create.<br />';
                        $message .= $count_update_fail . ' ' . $this->resp->meta->collection . ' failed to update.';
                        \Config\Services::session()->setFlashdata('success', $message);
                        return redirect()->route($this->resp->meta->collection . 'Collection');
                    } else {
                        $message = "1 Item in {$this->resp->meta->collection} created successfully.";
                        if ($count_update === 1) {
                            $message = "1 Item in {$this->resp->meta->collection} updated successfully.";
                        }
                        \Config\Services::session()->setFlashdata('success', $message);
                        return redirect()->route($this->resp->meta->collection . 'Read', [$id[0]]);
                    }
                } else {
                    \Config\Services::session()->setFlashdata('success', ucwords($this->resp->meta->received_data->attributes->component_type) . " created successfully.");
                    if (!empty($this->resp->meta->received_data->attributes->device_id)) {
                        return redirect()->route('devicesRead', [$this->resp->meta->received_data->attributes->device_id]);
                    } else {
                        return redirect()->route('devicesCollection');
                    }
                }
            }
        } else {
            if ($this->resp->meta->format !== 'html') {
                $this->resp->meta->header = 500;
                output($this);
                return true;
            } else {
                log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                \Config\Services::session()->setFlashdata('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                return redirect()->route($this->resp->meta->collection . 'Collection');
            }
        }
    }


    /**
     * Read a single item
     *
     * @access public
     * @return void
     */
    public function read($id, string $export = '')
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        if ($this->resp->meta->collection !== 'database') {
            $this->resp->meta->id = intval($this->resp->meta->id);
        }
        $this->resp->data = $this->{$this->resp->meta->collection . 'Model'}->read($this->resp->meta->id);
        $this->resp->meta->total = count($this->{$this->resp->meta->collection . 'Model'}->listUser());
        $this->resp->meta->filtered = count($this->resp->data);
        $dictionary = $this->{$this->resp->meta->collection . 'Model'}->dictionary();
        if ($this->resp->meta->collection === 'database') {
            $filename = str_replace(' ', '', ucwords(str_replace('_', ' ', $this->resp->meta->id)));
            if (file_exists(APPPATH . 'Models/' . $filename . 'Model.php')) {
                $namespace = "\\App\\Models\\" . $filename . "Model";
                $IdModel = new $namespace();
                $dictionary =  $IdModel->dictionary();
                if ($this->resp->meta->id === 'integrations') {
                    $dictionary->columns->attributes = 'A JSON encoded set of details for accessing the external system.';
                }
            }
        }

        if ($this->resp->meta->format !== 'html') {
            if ($this->resp->meta->collection === 'devices') {
                $this->resp->included = $this->{$this->resp->meta->collection . 'Model'}->includedRead($this->resp->meta->id);
                $this->resp->dictionary = $dictionary;
                if ($this->resp->meta->format === 'json_data') {
                    // Special case device as an audit result
                    $components_array = array('bios', 'certificate', 'disk', 'dns', 'executable', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows');
                    unset($this->resp->data[0]->attributes->id);
                    unset($this->resp->data[0]->attributes->first_seen);
                    unset($this->resp->data[0]->attributes->last_seen);
                    foreach ($this->resp->data[0]->attributes as $key => $value) {
                        if (empty($value)) {
                            unset($this->resp->data[0]->attributes->{$key});
                        }
                    }
                    $device = new stdClass();
                    $device->sys = $this->resp->data[0]->attributes;
                    $db = db_connect();
                    foreach ($components_array as $table) {
                        $sql = "SELECT * FROM `{$table}` WHERE device_id = ? AND current = 'y'";
                        $result = $db->query($sql, [$this->resp->meta->id])->getResult();
                        if (!empty($result)) {
                            for ($i = 0; $i < count($result); $i++) {
                                unset($result[$i]->id);
                                unset($result[$i]->device_id);
                                unset($result[$i]->current);
                                unset($result[$i]->first_seen);
                                unset($result[$i]->last_seen);
                            }
                            $device->{$table} = $result;
                        }
                    }
                    $this->resp->data = $device;
                }
            }
            output($this);
            return true;
        } else {
            if (empty($this->resp->data)) {
                log_message('warning', 'Invalid ID provided to read function. ID: ' . $this->resp->meta->id . ', collection: ' . $this->resp->meta->collection);
                \Config\Services::session()->setFlashdata('warning', 'Invalid ID provided to ' . $this->resp->meta->collection . ' read function (ID: ' . $this->resp->meta->id . ')');
                return redirect()->route($this->resp->meta->collection . 'Collection');
            }
            if ($this->resp->meta->collection === 'baselines_results') {
                $this->resp->meta->breadcrumbs = array();
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselinesCollection');
                $breadcrumb->name = 'Baselines';
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselinesRead', $this->resp->data[0]->attributes->baseline_id);
                $breadcrumb->name = $this->resp->data[0]->attributes->{'baselines.name'};
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselines_resultsCollection') . '?baselines.id=' . $this->resp->data[0]->attributes->baseline_id;
                $breadcrumb->name = 'Results';
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselines_resultsRead', $this->resp->data[0]->id);
                $breadcrumb->name = $this->resp->data[0]->attributes->name;
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
            }
            if ($this->resp->meta->collection === 'baselines_policies') {
                $this->resp->meta->breadcrumbs = array();
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselinesCollection');
                $breadcrumb->name = 'Baselines';
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselinesRead', $this->resp->data[0]->attributes->baseline_id);
                $breadcrumb->name = $this->resp->data[0]->attributes->{'baselines.name'};
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselines_policiesCollection') . '?baselines.id=' . $this->resp->data[0]->attributes->baseline_id;
                $breadcrumb->name = 'Policies';
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
                $breadcrumb = new stdClass();
                $breadcrumb->url = url_to('baselines_policiesRead', $this->resp->data[0]->id);
                $breadcrumb->name = $this->resp->data[0]->attributes->name;
                $this->resp->meta->breadcrumbs[] = $breadcrumb;
            }
            if ($this->resp->meta->collection === 'discoveries') {
                nmapInstalled(true);
                nmapSuid(true);
            }
            $update = false;
            if (strpos($this->user->permissions[$this->resp->meta->collection], 'u') !== false and strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, 'u') !== false) {
                $update = true;
            }
            $this->resp->included = $this->{$this->resp->meta->collection . 'Model'}->includedRead($this->resp->meta->id);
            $template = $this->resp->meta->collection . ucfirst($this->resp->meta->action);
            if (!empty($export)) {
                $template = 'collectionExport';
            }
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'dictionary' => $dictionary,
                'included' => filter_response($this->resp->included),
                'meta' => filter_response($this->resp->meta),
                'orgs' => filter_response($this->orgsUser),
                'queries' => filter_response($this->queriesUser),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user),
                'name' => @$this->resp->data[0]->attributes->name]) .
                view($template, ['data' => filter_response($this->resp->data), 'resource' => filter_response($this->resp->data[0]->attributes), 'update' => $update])
                . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        }
    }

    /**
     * Delete all items, restore the original items and reset the table
     *
     * @return void
     */
    public function reset()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        $this->{$this->resp->meta->collection . 'Model'}->reset();
        if ($this->resp->meta->format !== 'html') {
            output($this);
            return true;
        } else {
            return redirect()->route($this->resp->meta->collection . 'Collection');
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function update()
    {
        if (strpos($this->collections->{$this->resp->meta->collection}->actions->{$this->config->product}, $this->resp->meta->permission_requested[$this->resp->meta->action]) === false) {
            log_message('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.');
            if ($this->resp->meta->format === 'html') {
                \Config\Services::session()->setFlashdata('error', $this->resp->meta->collection . '::' . $this->resp->meta->action . ' is limited to ' . $this->collections->{$this->resp->meta->collection}->edition . ' licenses. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.');
                header('Location: ' . url_to($this->resp->meta->collection . 'Help'));
                exit();
            }
            $this->resp->meta->errors = $this->resp->meta->collection . '::' . $this->resp->meta->action . ' not permitted with a ' . $this->config->product . ' license.';
            output($this);
            exit();
        }
        if (empty($this->resp->meta->received_data->id)) {
            // Enterprise will have taken care of this
            output($this);
            return;
        }
        if ($this->{$this->resp->meta->collection . 'Model'}->update($this->resp->meta->received_data->id, $this->resp->meta->received_data->attributes)) {
            output($this);
        } else {
            $this->response->setStatusCode(400);
            if (!empty($GLOBALS['stash'])) {
                print_r(json_encode($GLOBALS['stash']));
            }
        }
        return;
    }
}
