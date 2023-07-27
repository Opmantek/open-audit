<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->collections = array('applications','attributes','baselines',
'baselines_policies','baselines_results','clouds','clusters','collectors', 'components',
'configuration','connections','credentials','dashboards','devices',
'discoveries','discovery_log','discovery_scan_options','errors','fields','files',
'groups','integrations','ldap_servers','licenses','locations',
'networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles',
'rules','scripts','summaries','tasks','users',
'widgets');

# The default route
$routes->get('/', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'home']);

# These will match and then take precedence over the below route array

$routes->get('charts', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'chartsCollection']);
$routes->get('charts/(:any)', 'Charts::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'chartsRead']);

// TODO - Make this URL the same format as the two below (:num)/(:any) not (:any)/(:num)
$routes->get('components/create/(:any)/(:num)', 'Components::createForm/$1/$2', ['filter' => \App\Filters\Session::class, 'as' => 'componentsCreateForm']);
// TODO - Both below, we have to specify the url thus: components/1/image?components.type=image because we cannot cater to the type (yet) in the response_helper->response_get_permission_id
$routes->delete('components/(:num)/(:any)', 'Components::delete/$1/$2', ['filter' => \App\Filters\Session::class, 'as' => 'componentsDelete']);
$routes->get('components/(:num)/(:any)/download', 'Components::download/$1/$2');

$routes->get('database/update', 'Database::update/get', ['filter' => \App\Filters\Session::class, 'as' => 'databaseUpdate']);
$routes->post('database/update', 'Database::update/post', ['filter' => \App\Filters\Session::class]);
$routes->get('database/compare', 'Database::compare', ['filter' => \App\Filters\Session::class, 'as' => 'databaseCompare']);
$routes->get('database/help', 'Database::help', ['filter' => \App\Filters\Session::class, 'as' => 'databaseHelp']);
$routes->get('database/(:any)', 'Collections::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'databaseRead']);
$routes->get('database', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'databaseCollection']);

$routes->post('devices', 'Devices::create', ['filter' => \App\Filters\Session::class, 'as' => 'devicesCreate']);
$routes->get('devices/create/example', 'devices::createExampleForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesCreateExampleForm']);
$routes->get('devices/delete/example', 'devices::deleteExampleForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesDeleteExampleForm']);
$routes->post('devices/create/example', 'devices::createExample', ['filter' => \App\Filters\Session::class, 'as' => 'devicesCreateExample']);
$routes->post('devices/delete/example', 'devices::deleteExample', ['filter' => \App\Filters\Session::class, 'as' => 'devicesDeleteExample']);
$routes->delete('devices/delete/example', 'devices::deleteExample', ['filter' => \App\Filters\Session::class]);
$routes->get('devices/importnmis', 'Devices::importNMISForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesImportNMISForm']);
$routes->post('devices/importnmis', 'Devices::importNMIS', ['filter' => \App\Filters\Session::class, 'as' => 'devicesImportNMIS']);

$routes->post('graph/reset', 'Collections::reset', ['filter' => \App\Filters\Session::class, 'as' => 'graphReset']);

$routes->get('about', 'Help::about', ['filter' => \App\Filters\Session::class, 'as' => 'about']);
$routes->get('features', 'Help::features', ['filter' => \App\Filters\Session::class, 'as' => 'features']);
$routes->get('support', 'Help::support', ['filter' => \App\Filters\Session::class, 'as' => 'support']);

$routes->post('input/devices', 'Input::devices');

// TODO - Make the HTML template provide the complete list of fields and update that, rather than loop through and find the provided field and remove it
//        That way we can use the standard 'update' function as per other collections.
$routes->delete('integrations/(:num)/fields/(:num)', 'Integrations::update/$1', ['filter' => \App\Filters\Session::class]);
$routes->post('integrations_log/reset', 'Collections::reset', ['filter' => \App\Filters\Session::class, 'as' => 'integrations_logReset']);

$routes->get('logon', 'Logon::createForm', ['as' => 'logon']);
$routes->get('logoff', 'Logon::delete', ['as' => 'logoff']);
$routes->get('login', 'Logon::createForm');
$routes->post('logon', 'Logon::create');
$routes->get('logout', 'Logon::delete');

$routes->get('reports', 'Reports::Collection', ['filter' => \App\Filters\Session::class, 'as' => 'reportsCollection']);

$routes->get('scripts/(:any)/download', 'Scripts::download/$1');

$routes->post('search', 'Search::create', ['filter' => \App\Filters\Session::class, 'as' => 'searchCreate']);

$routes->post('util/subnet_size', 'Util::subnetSize');
$routes->post('util/google', 'Util::google');

$routes->cli('queue/start', 'Queue::start');
$routes->cli('rotateLogs', 'Cli::rotateLogs', ['as' => 'rotateLogs']);
$routes->cli('test', 'Cli::test', ['as' => 'test']);
# $routes->cli('upgrade', 'Cli::upgrade', ['as' => 'upgrade']);

foreach ($routes->collections as $collection) {
    // Account for users editing the config and including a space character
    $collection = trim($collection);

    // The capitalised controller name
    $controller = ucfirst($collection);

    # execute
    $routes->get($collection . '/(:num)/execute', $controller . '::execute/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Execute']);

    # Below functions are all generic enough to be handled by the Collections controller

    # collection
    $routes->get($collection, 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Collection']);

    # create
    $routes->post($collection, 'Collections::create', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Create']);

    # create form
    $routes->get($collection . '/create', 'Collections::createForm', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'CreateForm']);

    # defaults
    $routes->get($collection . '/defaults', 'Collections::defaults/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Defaults']);

    # delete
    $routes->delete($collection . '/(:num)', 'Collections::delete/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Delete']);

    # dictionary
    $routes->get($collection . '/dictionary', 'Collections::dictionary/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Dictionary']);

    # help
    $routes->get($collection . '/help', 'Collections::help', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Help']);

    # import
    $routes->post($collection . '/import', 'Collections::import', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Import']);

    # import JSON
    $routes->post($collection . '/importjson', 'Collections::importJSON', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'ImportJSON']);

    # import form
    $routes->get($collection . '/import', 'Collections::importForm', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'ImportForm']);

    # import JSON form
    $routes->get($collection . '/importjson', 'Collections::importJSONForm', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'ImportJSONForm']);

    # read
    $routes->get($collection . '/(:num)', 'Collections::read/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Read']);

    # reset
    $routes->post($collection . '/reset', 'Collections::reset', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Reset']);

    # update
    $routes->patch($collection . '/(:num)', 'Collections::update/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Update']);

    # bulk update
    $routes->patch($collection, 'Collections::bulkUpdate/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'BulkUpdate']);
}

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
