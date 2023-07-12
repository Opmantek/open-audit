<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.0.0
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
     * Collection of items
     *
     * @access public
     * @return NULL
     */
    public function collection()
    {
        $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->collection($this->resp);
        $this->resp->meta->total = count($this->{strtolower($this->resp->meta->collection) . "Model"}->listUser());
        $this->resp->meta->filtered = count($this->resp->data);
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        if (empty($this->resp->meta->properties[0]) or $this->resp->meta->properties[0] === $this->resp->meta->collection . '.*') {
            $this->resp->meta->data_order = $dictionary->attributes->collection;
        } else {
            $this->resp->meta->data_order = array();
            foreach ($this->resp->meta->properties as $key) {
                $this->resp->meta->data_order[] = str_replace($this->resp->meta->collection . '.', '', $key);
            }
        }
        if ($this->resp->meta->format !== 'screen') {
            output($this);
        } else {
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'meta' => filter_response($this->resp->meta),
                'queries' => filter_response($this->queriesUser),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user)]) .
                view($this->resp->meta->collection . ucfirst($this->resp->meta->action), ['data' => filter_response($this->resp->data)]);
        }
        return true;
    }

    /**
     * Accept a POST and create the item
     *
     * @return void
     */
    public function create()
    {
        if (array_key_exists($this->resp->meta->collection, config('Openaudit')->enterprise_collections)) {
            if (strpos(config('Openaudit')->enterprise_collections[$this->resp->meta->collection], 'c') !== false and config('Openaudit')->oae_product !== 'enterprise') {
                log_message('debug', config('Openaudit')->oae_product);
                log_message('debug', config('Openaudit')->enterprise_collections[$this->resp->meta->collection]);
                log_message('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs an Enterprise license.');
                \Config\Services::session()->setFlashdata('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a commercial license.');
                return redirect()->route($this->config->homepage);
            }
        }
        if (array_key_exists($this->resp->meta->collection, config('Openaudit')->professional_collections)) {
            if (strpos(config('Openaudit')->professional_collections[$this->resp->meta->collection], 'c') !== false and config('Openaudit')->oae_product !== 'enterprise' and config('Openaudit')->oae_product !== 'professional') {
                log_message('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a Professional license.');
                \Config\Services::session()->setFlashdata('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a commercial license.');
                return redirect()->route($this->config->homepage);
            }
        }
        $id = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($this->resp->meta->received_data->attributes);
        if (!empty($id)) {
            if ($this->resp->meta->format !== 'screen') {
                $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->read($id);
                output($this);
                return true;
            } else {
                if ($this->resp->meta->collection !== 'components') {
                    \Config\Services::session()->setFlashdata('success', "Item in {$this->resp->meta->collection} created successfully.");
                    return redirect()->route($this->resp->meta->collection.'Read', [$id]);
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
            if ($this->resp->meta->format !== 'screen') {
                output($this);
                return true;
            } else {
                log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                return redirect()->route($this->resp->meta->collection.'Collection');
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
        if (array_key_exists($this->resp->meta->collection, config('Openaudit')->enterprise_collections)) {
            if (strpos(config('Openaudit')->enterprise_collections[$this->resp->meta->collection], 'c') !== false and config('Openaudit')->oae_product !== 'enterprise') {
                log_message('debug', config('Openaudit')->oae_product);
                log_message('debug', config('Openaudit')->enterprise_collections[$this->resp->meta->collection]);
                log_message('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs an Enterprise license.');
                \Config\Services::session()->setFlashdata('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a commercial license.');
                return redirect()->route($this->config->homepage);
            }
        }
        if (array_key_exists($this->resp->meta->collection, config('Openaudit')->professional_collections)) {
            if (strpos(config('Openaudit')->professional_collections[$this->resp->meta->collection], 'c') !== false and config('Openaudit')->oae_product !== 'enterprise' and config('Openaudit')->oae_product !== 'professional') {
                log_message('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a Professional license.');
                \Config\Services::session()->setFlashdata('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a commercial license.');
                return redirect()->route($this->config->homepage);
            }
        }
        $this->resp->included = $this->{$this->resp->meta->collection.'Model'}->includedCreateForm();
        $this->resp->included['orgs'] = $this->orgsModel->listUser();
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        if ($this->resp->meta->format !== 'screen') {
            $this->resp->dictionary = $dictionary;
            output($this);
            return true;
        } else {
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
                view($this->resp->meta->collection . ucfirst($this->resp->meta->action));
        }
    }

    /**
     * Returnt the default items as per a new install
     *
     * @return void
     */
    public function defaults()
    {
        $this->baseModel = new \App\Models\BaseModel();
        $defaults = $this->baseModel->tableDefaults($this->resp->meta->collection);
        $this->databaseModel = new \App\Models\DatabaseModel();
        $data = $this->databaseModel->read($this->resp->meta->collection);
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'defaults' => filter_response($defaults),
            'dictionary' => $dictionary,
            'meta' => filter_response($this->resp->meta),
            'queries' => filter_response($this->queriesUser),
            'user' => filter_response($this->user)]) .
            view('collectionDefaults', ['data' => $data]);
    }

    /**
     * Delete the item
     *
     * @return void
     */
    public function delete()
    {
        if ($this->{$this->resp->meta->collection.'Model'}->delete($this->resp->meta->id)) {
            \Config\Services::session()->setFlashdata('success', 'Item in ' . $this->resp->meta->collection . ' deleted.');
        } else {
            \Config\Services::session()->setFlashdata('error', 'Item in ' . $this->resp->meta->collection . ' not deleted.');
        }
        output($this);
    }

    public function dictionary($model)
    {
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        echo json_encode($dictionary);
    }

    /**
     * Help
     *
     * @return void
     */
    public function help()
    {
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('collectionHelp', ['data' => $dictionary]);
    }

    /**
     * Import multiple uploaded items
     *
     * @return void
     */
    public function import()
    {
        $file = $this->request->getFile('file_import');
        if (!$file->isValid()) {
            \Config\Services::session()->setFlashdata('error', 'File import error. ' . $file->getErrorString() . ' ' . $file->getError());
        }
        $csv = @array_map('str_getcsv', file($file->getTempName(), FILE_IGNORE_NEW_LINES));
        if (!$csv) {
            if ($this->response->meta->format === 'json') {
                output($this->resp);
                return;
            }
            \Config\Services::session()->setFlashdata('error', 'CSV error.');
            return redirect()->route($this->resp->meta->collection.'Collection');
        }
        $attributes = $csv[0];
        $row_count = count($csv);
        $column_count = count($attributes);
        for ($i=1; $i < $row_count; $i++) {
            $data = new \stdClass();
            for ($j=0; $j < $column_count; $j++) {
                $data->{$attributes[$j]} = $csv[$i][$j];
            }
            if (!empty($data->id)) {
                $this->{$this->resp->meta->collection.'Model'}->update(intval($data->id), $data);
                $this->resp->data[] = $this->{$this->resp->meta->collection.'Model'}->read(intval($data->id));
            } else {
                $id = $this->{$this->resp->meta->collection.'Model'}->create($data);
                $this->resp->data[] = $this->{$this->resp->meta->collection.'Model'}->read($id);
            }
        }
        if ($this->resp->meta->format !== 'screen') {
            output($this);
            return true;
        } else {
            return redirect()->route($this->resp->meta->collection.'Collection');
        }
    }

    /**
     * Provide a html form to upload multiple items
     *
     * @return void
     */
    public function importForm()
    {
        $this->databaseModel = new \App\Models\DatabaseModel();
        $this->resp->data = $this->databaseModel->read($this->resp->meta->collection);
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'meta' => $this->resp->meta,
            'orgs' => $this->orgsUser,
            'queries' => $this->queriesUser,
            'roles' => $this->roles,
            'user' => $this->user ]) .
            view('collectionImport', ['data' => $dictionary]);
        return;
    }

    /**
     * Provide a html form to upload multiple items
     *
     * @return void
     */
    public function importJSONForm()
    {
        $this->databaseModel = new \App\Models\DatabaseModel();
        $this->resp->data = $this->databaseModel->read($this->resp->meta->collection);
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'meta' => $this->resp->meta,
            'orgs' => $this->orgsUser,
            'queries' => $this->queriesUser,
            'roles' => $this->roles,
            'user' => $this->user ]) .
            view('collectionImportJsonForm', ['data' => $dictionary]);
        return;
    }

    /**
     * Accept a POST, use the JSON to create the item
     *
     * @return void
     */
    public function importJSON()
    {
        if (array_key_exists($this->resp->meta->collection, config('Openaudit')->enterprise_collections)) {
            if (strpos(config('Openaudit')->enterprise_collections[$this->resp->meta->collection], 'c') !== false and config('Openaudit')->oae_product !== 'enterprise') {
                log_message('debug', config('Openaudit')->oae_product);
                log_message('debug', config('Openaudit')->enterprise_collections[$this->resp->meta->collection]);
                log_message('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs an Enterprise license.');
                \Config\Services::session()->setFlashdata('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a commercial license.');
                return redirect()->route($this->config->homepage);
            }
        }
        if (array_key_exists($this->resp->meta->collection, config('Openaudit')->professional_collections)) {
            if (strpos(config('Openaudit')->professional_collections[$this->resp->meta->collection], 'c') !== false and config('Openaudit')->oae_product !== 'enterprise' and config('Openaudit')->oae_product !== 'professional') {
                log_message('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a Professional license.');
                \Config\Services::session()->setFlashdata('error', 'Creating an item in ' . $this->resp->meta->collection . ' needs a commercial license.');
                return redirect()->route($this->config->homepage);
            }
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
        foreach ($this->resp->meta->received_data->json as $item) {
            if (!empty($item->id)) {
                if (empty($item->attributes)) {
                    // Account for old style individual JSON export
                    $id[] = $this->{strtolower($this->resp->meta->collection) . "Model"}->update(intval($item->id), $item);
                } else {
                    $id[] = $this->{strtolower($this->resp->meta->collection) . "Model"}->update(intval($item->id), $item->attributes);
                }
            } else {
                if (empty($item->attributes)) {
                    // Account for old style individual JSON export
                    $id[] = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($item);
                } else {
                    $id[] = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($item->attributes);
                }
            }
        }
        if (!empty($id)) {
            if ($this->resp->meta->format !== 'screen') {
                if (count($id) > 1) {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->listUser();
                } else {
                    $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->read($id[0]);
                }
                output($this);
                return true;
            } else {
                if ($this->resp->meta->collection !== 'components') {
                    if (count($id) > 1) {
                        \Config\Services::session()->setFlashdata('success', "Items in {$this->resp->meta->collection} created successfully.");
                        return redirect()->route($this->resp->meta->collection.'Collection');
                    } else {
                        \Config\Services::session()->setFlashdata('success', "Item in {$this->resp->meta->collection} created successfully.");
                        return redirect()->route($this->resp->meta->collection.'Read', [$id[0]]);
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
            if ($this->resp->meta->format !== 'screen') {
                output($this);
                return true;
            } else {
                log_message('error', 'Item in ' . $this->resp->meta->collection . ' not created.');
                return redirect()->route($this->resp->meta->collection.'Collection');
            }
        }
    }


    /**
     * Read a single item
     *
     * @access public
     * @return void
     */
    public function read($id)
    {
        if ($this->resp->meta->collection !== 'database') {
            $this->resp->meta->id = intval($this->resp->meta->id);
        }
        $this->resp->data = $this->{$this->resp->meta->collection.'Model'}->read($this->resp->meta->id);
        $this->resp->meta->total = count($this->{$this->resp->meta->collection.'Model'}->listUser());
        $this->resp->meta->filtered = count($this->resp->data);
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        if ($this->resp->meta->collection === 'database') {
            // $namespace = "\\App\\Models\\" . ucfirst($this->resp->meta->id) . "Model";
            // $IdModel = new $namespace;
            // $dictionary =  $IdModel->dictionary();
        }
        if ($this->resp->meta->collection === 'components' and $this->resp->data[0]->type === 'attachment') {
            return $this->response->download($this->resp->data[0]->attributes->filename, null);
        }

        if ($this->resp->meta->format !== 'screen') {
            if ($this->resp->meta->collection === 'devices' or !empty($this->resp->meta->requestor)) {
                $this->resp->included = $this->{$this->resp->meta->collection.'Model'}->includedRead($this->resp->meta->id);
            }
            output($this);
            return true;
        } else {
            if (empty($this->resp->data)) {
                log_message('warning', 'Invalid ID provided to read function. ID: ' . $this->resp->meta->id . ', collection: ' . $this->resp->meta->collection);
                \Config\Services::session()->setFlashdata('warning', 'Invalid ID provided to ' . $this->resp->meta->collection . ' read function (ID: ' . $this->resp->meta->id . ')');
                return redirect()->route($this->resp->meta->collection.'Collection');
            } else {
                $update = false;
                if (strpos($this->user->permissions[$this->resp->meta->collection], 'u') !== false) {
                    $update = true;
                }
                $this->resp->included = $this->{$this->resp->meta->collection.'Model'}->includedRead($this->resp->meta->id);
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
                    view($this->resp->meta->collection . ucfirst($this->resp->meta->action), ['data' => filter_response($this->resp->data), 'resource' => filter_response($this->resp->data[0]->attributes), 'update' => $update]);
            }
        }
    }

    /**
     * Delete all items, restore the original items and reset the table
     *
     * @return void
     */
    public function reset()
    {
        $this->{$this->resp->meta->collection.'Model'}->reset();
        return redirect()->route($this->resp->meta->collection.'Collection');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function update()
    {
        if ($this->{$this->resp->meta->collection.'Model'}->update($this->resp->meta->received_data->id, $this->resp->meta->received_data->attributes)) {
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
