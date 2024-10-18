<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class ModelsTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use ControllerTestTrait;

    public function testModels()
    {
        $response = $this->setupResponse();
        $response->meta->collection = '';
        $response->meta->action = '';
        $response->meta->id = 1;

        helper('response');
        helper('utility');
        $db = db_connect();

        $orgsModel = new \App\Models\OrgsModel();
        $orgs = $orgsModel->listAll();
        $usersModel = new \App\Models\UsersModel();
        $user = $usersModel->read(1)[0]->attributes;
        $user->org_list = '1,2,3,4,5';

        # Setup a session for user
        $session = \Config\Services::session();
        $temp = bin2hex(openssl_random_pseudo_bytes(30));
        $user->access_token = $temp;
        $access_token[] = $temp;
        $access_token = array_slice($access_token, -intval(config('Openaudit')->access_token_count));
        $userdata = array('user_id' => $user->id, 'access_token' => $access_token);
        $session->set($userdata);

        $response->meta->filter = response_get_query_filter('', 'filter');


        $valid_collections = array('applications','attributes','auth','baselines','baselines_policies','baselines_results','benchmarks','clouds','clusters','connections','credentials','dashboards','devices','discoveries','discovery_log','discovery_scan_options','fields','files','groups','integrations','licenses','locations','networks','orgs','queries','racks','rack_devices','rules','scripts','summaries','tasks','users','widgets');

        $valid_actions = array('collection', 'read');

        foreach ($valid_collections as $collection) {
            # $this->user->org_list = response_get_org_list($this->user, $response->meta->collection);

            $model = $collection;
            $model = str_replace('_', ' ', $model);
            $model = ucwords($model);
            $model = str_replace(' ', '', $model);
            $model .= 'Model';

            unset($response->meta->filter);
            $response->meta->filter = array();

            $response->meta->collection = $collection;

            $response->meta->properties = array($collection . '.id', $collection . '.name');
            if ($response->meta->collection === 'discovery_log') {
                $response->meta->properties = array($collection . '.id', $collection . '.message');
            } else {
                $item = new \StdClass();
                $item->name = 'orgs.id';
                if ($response->meta->collection !== 'orgs') {
                    $item->name = $response->meta->collection . '.' . 'org_id';
                }
                $item->function = 'whereIn';
                $item->operator = 'in';
                if (is_string($user->org_list)) {
                    $item->value = explode(',', $user->org_list);
                } else {
                    $item->value = $user->org_list;
                }
                $response->meta->filter[] = $item;
            }

            $sql = "SELECT count(*) AS `count` FROM $collection";
            $count = intval($db->query($sql)->getResult()[0]->count);

            foreach ($valid_actions as $action) {
                $response->meta->action = $action;

                $collection = ucfirst($response->meta->collection);
                if (strpos($collection, '_') !== false) {
                    $collection = str_replace('_', ' ', $collection);
                    $collection = ucwords($collection);
                    $collection = str_replace(' ', '', $collection);
                }
                $namespace = "\\App\\Models\\" . $collection . "Model";
                ${strtolower($collection) . "Model"} = new $namespace;
                ${$model} = new $namespace;
                $result = ${$model}->collection($response);
                $this->assertIsArray($result, 'The return from ' . $collection . ' (' . $response->meta->action . ') is not an array');
                $this->assertCount($count, $result, "Count of $collection (" . $response->meta->action . ") direct is $count, count via model is " . count($result));
            }
        }
    }

    private function setupResponse()
    {

        $response = new \stdClass();
        $response->meta = new \stdClass();
        $response->links = new \stdClass();
        $response->included = array();
        $response->logs = array();

        $response->meta->action = '';
        $response->meta->collection = '';
        $response->meta->request_method = '';
        $response->meta->format = 'json';
        $response->meta->collection = '';
        $response->meta->action = '';
        $response->meta->id = null;
        $response->meta->access_token = '';
        $response->meta->baseurl = base_url();
        $response->meta->current = '';
        $response->meta->debug = false;
        $response->meta->filtered = '';
        $response->meta->groupby = '';
        $response->meta->header = 200;
        $response->meta->include = '';
        $response->meta->limit = null;
        $response->meta->microtime = config('OpenAudit')->microtime;
        $response->meta->offset = 0;
        $response->meta->properties = '';
        $response->meta->query_string = '';
        $response->meta->requestor = '';
        $response->meta->requestor = '';
        $response->meta->server_app_version = config('Openaudit')->display_version;
        $response->meta->server_platform = php_uname('s');
        $command = 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2';
        exec($command, $output);
        if (!empty($output[0])) {
            $response->meta->server_platform = $output[0];
        }

        $response->meta->sort = '';
        $response->meta->time_start = microtime(true);
        $response->meta->time_end = 0;
        $response->meta->time_elapsed = 0;
        $response->meta->total = 0;
        $response->meta->timestamp = config('OpenAudit')->timestamp;
        $response->meta->timezone = config('OpenAudit')->timezone;
        $response->meta->version = 1;
        $response->meta->filter = array();
        $response->meta->received_data = array();
        $response->meta->sql = array();
        $response->meta->user = 'admin';

        return $response;
    }
}
