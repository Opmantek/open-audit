<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@gmail.com>
 * @copyright 2014 Opmantek
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
 * @author   Mark Unwin <mark.unwin@gmail.com>
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
        $this->resp->links = create_links($this->resp->meta, $this->resp->links->self, $this->config->page_size);

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
        $id = $this->{strtolower($this->resp->meta->collection) . "Model"}->create($this->resp->meta->received_data->attributes);
        if (!empty($id)) {
            if ($this->resp->meta->format !== 'screen') {
                $this->resp->data = $this->{strtolower($this->resp->meta->collection) . "Model"}->read($id);
                output($this);
                return true;
            } else {
                \Config\Services::session()->setFlashdata('success', "Item in {$this->resp->meta->collection} created successfully.");
                return redirect()->route($this->resp->meta->collection.'Read', [$id]);
            }
        } else {
            if ($this->resp->meta->format !== 'screen') {
                output($this);
                return true;
            } else {
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
        $this->resp->included = $this->{$this->resp->meta->collection.'Model'}->includedCreateForm();
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        return view('shared/header', [
            'config' => $this->config,
            'dictionary' => $dictionary,
            'included' => $this->resp->included,
            'meta' => filter_response($this->resp->meta),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'orgs' => filter_response($this->orgsUser),
            'user' => filter_response($this->user)]) .
            view($this->resp->meta->collection . ucfirst($this->resp->meta->action));
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
        $this->resp->data = $this->{$this->resp->meta->collection.'Model'}->import($csv);
        return redirect()->route($this->resp->meta->collection.'Collection');
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
     * Read a single item
     *
     * @access public
     * @return void
     */
    public function read($id)
    {
        $this->resp->data = $this->{$this->resp->meta->collection.'Model'}->read($this->resp->meta->id);
        $this->resp->meta->total = count($this->{$this->resp->meta->collection.'Model'}->listUser());
        $this->resp->meta->filtered = count($this->resp->data);
        $this->resp->links = create_links($this->resp->meta, $this->resp->links->self, $this->config->page_size);
        $dictionary = $this->{$this->resp->meta->collection.'Model'}->dictionary();
        if ($this->resp->meta->collection === 'database') {
            $namespace = "\\App\\Models\\" . ucfirst($this->resp->meta->id) . "Model";
            $IdModel = new $namespace;
            $dictionary =  $IdModel->dictionary();
        }
        if ($this->resp->meta->format !== 'screen') {
            output($this);
            return true;
        } else {
            if (empty($this->resp->data)) {
                return redirect()->route($this->resp->meta->collection.'Collection');
            } else {
                $update = false;
                if (strpos($this->user->permissions[$this->resp->meta->collection], 'u') !== false) {
                    $update = true;
                }
                $this->resp->included = $this->{$this->resp->meta->collection.'Model'}->includedRead($this->resp->meta->id);
                return view('shared/header', [
                    'config' => $this->config,
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
            print_r(json_encode($GLOBALS['stash']));
        }
        return;
    }
}
