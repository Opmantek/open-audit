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
'baselines_policies','buildings','clouds','clusters','collectors', 'components',
'configuration','connections','credentials','dashboards','devices',
'discoveries','discovery_log','discovery_scan_options','errors','fields','files',
'floors','groups','help','integrations','ldap_servers','licenses','locations','logs',
'networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles',
'rooms','rows','rules','scripts','search','sessions','summaries','tasks','users',
'widgets');

# The default route
$routes->get('/', 'Orgs::collection', ['filter' => \App\Filters\Session::class, 'as' => 'home']);

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
}

$routes->get('charts', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'chartsCollection']);
$routes->get('charts/(:any)', 'Charts::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'chartsRead']);

$routes->get('devices/create/example', 'devices::createExampleForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesCreateExampleForm']);
$routes->get('devices/delete/example', 'devices::deleteExampleForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesDeleteExampleForm']);
$routes->post('devices/create/example', 'devices::createExample', ['filter' => \App\Filters\Session::class, 'as' => 'devicesCreateExample']);
$routes->post('devices/delete/example', 'devices::deleteExample', ['filter' => \App\Filters\Session::class, 'as' => 'devicesDeleteExample']);
$routes->delete('devices/delete/example', 'devices::deleteExample', ['filter' => \App\Filters\Session::class]);

$routes->get('database/update', 'Database::update', ['filter' => \App\Filters\Session::class, 'as' => 'databaseUpdate']);
$routes->get('database/help', 'Database::help', ['filter' => \App\Filters\Session::class, 'as' => 'databaseHelp']);
$routes->get('database/(:any)', 'Collections::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'databaseRead']);
$routes->get('database', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'databaseCollection']);

$routes->get('logon', 'Logon::createForm', ['as' => 'logon']);
$routes->get('logoff', 'Logon::delete', ['as' => 'logoff']);
$routes->get('login', 'Logon::createForm');
$routes->post('logon', 'Logon::create');
$routes->get('logout', 'Logon::delete');

$routes->post('search', 'Search::search', ['filter' => \App\Filters\Session::class, 'as' => 'search']);

$routes->get('about', 'Help::about', ['filter' => \App\Filters\Session::class, 'as' => 'about']);
$routes->get('features', 'Help::features', ['filter' => \App\Filters\Session::class, 'as' => 'features']);
$routes->get('support', 'Help::support', ['filter' => \App\Filters\Session::class, 'as' => 'support']);

$routes->cli('rotateLogs', 'Cli::rotateLogs', ['as' => 'rotateLogs']);
$routes->cli('test', 'Cli::test', ['as' => 'test']);

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
