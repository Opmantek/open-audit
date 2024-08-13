<?php

use CodeIgniter\Router\RouteCollection;

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$config_collections = new \Config\Collections();
$collections = array();
foreach ($config_collections as $col => $value) {
    $collections[] = (string)$col;
}

# The default route
$routes->get('/', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'home']);

# These will match and then take precedence over the below route array

$routes->post('agents/execute', 'Agents::execute', ['as' => 'agentsExecuteAll']);
$routes->post('agents/(:num)/execute', 'Agents::execute/$1', ['as' => 'agentsExecute']);
# $routes->get('agents/execute', 'Agents::execute', ['as' => 'agentsExecuteAll']);
# $routes->get('agents/(:num)/execute', 'Agents::execute/$1', ['as' => 'agentsExecute']);
# NOTE - Below is only so we can ask for /download/agent_windows.ps1 and have it save with that name
$routes->get('agents/(:any)/download/(:any)', 'Agents::download/$1');
$routes->get('agents/(:any)/download', 'Agents::download/$1', ['as' => 'agentsDownload']);

$routes->get('baselines/(:num)/execute', 'Baselines::executeForm/$1', ['filter' => \App\Filters\Session::class, 'as' => 'baselinesExecuteForm']);
$routes->post('baselines/(:num)/execute', 'Baselines::execute/$1', ['filter' => \App\Filters\Session::class, 'as' => 'baselinesExecute']);

$routes->get('baselines_results/(:num)/export/device', 'BaselinesResults::export/$1/device', ['filter' => \App\Filters\Session::class, 'as' => 'baselines_resultsExportDevice']);
$routes->get('baselines_results/(:num)/export/policy', 'BaselinesResults::export/$1/policy', ['filter' => \App\Filters\Session::class, 'as' => 'baselines_resultsExportPolicy']);

$routes->get('chart', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'chartsCollection']);
$routes->get('chart/(:any)', 'Charts::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'chartsRead']);

$routes->get('collectors/(:any)/execute', 'Collectors::execute/$1', ['as' => 'collectorsExecute']);

// TODO - Make this URL the same format as the two below (:num)/(:any) not (:any)/(:num)
#$routes->get('components/create/(:any)', 'Components::createForm/$1', ['filter' => \App\Filters\Session::class, 'as' => 'componentsCreateForm']);
$routes->get('components/create/(:any)/(:num)', 'Components::createForm/$1/$2', ['filter' => \App\Filters\Session::class, 'as' => 'componentsCreateForm']);
// TODO - Both below, we have to specify the url thus: components/1/image?components.type=image because we cannot cater to the type (yet) in the response_helper->response_get_permission_id
$routes->delete('components/(:num)/(:any)', 'Components::delete/$1/$2', ['filter' => \App\Filters\Session::class, 'as' => 'componentsDelete']);
$routes->get('components/(:num)/(:any)/download', 'Components::download/$1/$2');

$routes->get('configuration/license_string', 'Configuration::readLicense', ['filter' => \App\Filters\Session::class, 'as' => 'configurationReadLicense']);
$routes->get('configuration/servers', 'Configuration::readServers', ['filter' => \App\Filters\Session::class, 'as' => 'configurationReadServers']);
$routes->get('configuration/email/execute_form', 'Configuration::executeFormEmail', ['filter' => \App\Filters\Session::class, 'as' => 'configurationExecuteFormEmail']);
$routes->post('configuration/email/execute_form', 'Configuration::executeEmail', ['filter' => \App\Filters\Session::class, 'as' => 'configurationExecuteEmail']);
$routes->get('configuration/(:any)', 'Collections::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'configurationRead']);

$routes->get('database/update', 'Database::update/get', ['filter' => \App\Filters\Session::class, 'as' => 'databaseUpdate']);
$routes->post('database/update', 'Database::update/post', ['filter' => \App\Filters\Session::class]);
$routes->get('database/compare', 'Database::compare', ['filter' => \App\Filters\Session::class, 'as' => 'databaseCompare']);
$routes->get('database/help', 'Database::help', ['filter' => \App\Filters\Session::class, 'as' => 'databaseHelp']);

$routes->get('database/(:any)/export', 'Database::export/$1', ['filter' => \App\Filters\Session::class, 'as' => 'databaseExport']);
$routes->get('database/(:any)', 'Collections::read/$1', ['filter' => \App\Filters\Session::class, 'as' => 'databaseRead']);
$routes->get('database', 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => 'databaseCollection']);
$routes->delete('database/(:any)', 'Database::delete/$1', ['filter' => \App\Filters\Session::class, 'as' => 'databaseDelete']);
$routes->delete('database/(:any)/(:any)', 'Database::delete/$1/$2', ['filter' => \App\Filters\Session::class, 'as' => 'databaseDelete']);

$routes->post('devices', 'Devices::create', ['filter' => \App\Filters\Session::class, 'as' => 'devicesCreate']);
$routes->get('devices/example', 'Devices::exampleForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesExampleForm']);
$routes->post('devices/example', 'Devices::example', ['filter' => \App\Filters\Session::class, 'as' => 'devicesExample']);
$routes->get('devices/delete', 'Devices::deleteForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesDeleteForm']);
$routes->post('devices/delete', 'Devices::delete', ['filter' => \App\Filters\Session::class, 'as' => 'devicesDeleteExample']);

$routes->get('devices/importnmis', 'Devices::importNMISForm', ['filter' => \App\Filters\Session::class, 'as' => 'devicesImportNMISForm']);
$routes->post('devices/importnmis', 'Devices::importNMIS', ['filter' => \App\Filters\Session::class, 'as' => 'devicesImportNMIS']);

$routes->get('discoveries/(:any)/download', 'Discoveries::download/$1', ['filter' => \App\Filters\Session::class, 'as' => 'discoveriesDownload']);
$routes->get('discoveries/(:num)/executeForm', 'Discoveries::executeForm/$1', ['filter' => \App\Filters\Session::class, 'as' => 'discoveriesExecuteForm']);
$routes->post('discoveries/(:num)/executeForm', 'Discoveries::executeCollector/$1', ['filter' => \App\Filters\Session::class, 'as' => 'discoveriesExecuteCollector']);

$routes->post('graph/reset', 'Collections::reset', ['filter' => \App\Filters\Session::class, 'as' => 'graphReset']);

$routes->get('about', 'Help::about', ['filter' => \App\Filters\Session::class, 'as' => 'about']);
$routes->get('api', 'Help::api', ['filter' => \App\Filters\Session::class, 'as' => 'api']);
$routes->get('help', 'Help::about', ['filter' => \App\Filters\Session::class, 'as' => 'helpCollection']);
$routes->get('faq', 'Help::faq', ['filter' => \App\Filters\Session::class, 'as' => 'helpFAQ']);
$routes->get('features', 'Help::features', ['filter' => \App\Filters\Session::class, 'as' => 'features']);
$routes->get('prereq', 'Help::prereq', ['filter' => \App\Filters\Session::class, 'as' => 'prereq']);
$routes->get('welcome', 'Help::welcome', ['filter' => \App\Filters\Session::class, 'as' => 'welcome']);
$routes->get('collector', 'Help::collector', ['filter' => \App\Filters\Session::class, 'as' => 'dashboardCollector']);
$routes->get('appLicenses', 'Help::licenses', ['filter' => \App\Filters\Session::class, 'as' => 'appLicenses']);
$routes->get('getting_started', 'Help::gettingStarted', ['filter' => \App\Filters\Session::class, 'as' => 'getting_started']);
$routes->get('discovery_issues/(:num)', 'Help::discoveryIssues/$1', ['filter' => \App\Filters\Session::class, 'as' => 'discoveryIssues']);


$routes->post('input/benchmarks', 'Input::benchmarks');
$routes->post('input/devices', 'Input::devices');
$routes->post('input/logs', 'Input::logs');

// TODO - Make the HTML template provide the complete list of fields and update that, rather than loop through and find the provided field and remove it
//        That way we can use the standard 'update' function as per other collections.
$routes->delete('integrations/(:num)/fields/(:num)', 'Integrations::update/$1', ['filter' => \App\Filters\Session::class]);
$routes->post('integrations_log/reset', 'Collections::reset', ['filter' => \App\Filters\Session::class, 'as' => 'integrations_logReset']);

$routes->get('license', 'Logon::license');

$routes->get('logon', 'Logon::createForm', ['as' => 'logon']);
$routes->get('logon/(:any)/auth', 'Logon::auth/$1', ['as' => 'logonAuth']);
$routes->get('logon/(:any)', 'Logon::redirect/$1', ['as' => 'logonRedirect']);
$routes->get('logoff', 'Logon::delete', ['as' => 'logoff']);
$routes->get('login', 'Logon::createForm');
$routes->post('logon', 'Logon::create');
$routes->get('logout', 'Logon::delete');

$routes->get('scripts/(:any)/download', 'Scripts::download/$1', ['as' => 'scriptsDownload']);

$routes->post('search', 'Search::create', ['filter' => \App\Filters\Session::class, 'as' => 'searchCreate']);

$routes->post('util/subnet_size', 'Util::subnetSize');
$routes->get('util/test_windows_client', 'Util::testWindowsClient');

$routes->cli('queue/start', 'Queue::start');
$routes->cli('rotateLogs', 'Cli::rotateLogs', ['as' => 'rotateLogs']);
$routes->cli('tasks/execute', 'Cli::executeTasks', ['as' => 'executeTasks']);
$routes->cli('benchmarks/(:num)/execute', 'Cli::executeBenchmark/$1', ['as' => 'executeBenchmark']);
#$routes->cli('benchmarks/test', 'Cli::testBenchmarks');
$routes->cli('discoveries/(:num)/execute', 'Cli::executeDiscovery/$1', ['as' => 'executeDiscovery']);
$routes->cli('integrations/(:num)/execute', 'Cli::executeIntegration/$1', ['as' => 'executeIntegration']);
$routes->cli('clouds/(:num)/execute', 'Cli::executeCloud/$1', ['as' => 'executeCloud']);
$routes->cli('devices/(:num)/cloudDevice', 'Cli::cloudDevice/$1', ['as' => 'cloudDevice']);

$routes->patch('devices/(:num)/reset', 'Devices::reset/$1', ['filter' => \App\Filters\Session::class, 'as' => 'DeviceReset']);

foreach ($collections as $collection) {
    // Account for users editing the config and including a space character
    $collection = trim((string)$collection);

    // The capitalised controller name
    $controller = ucfirst($collection);

    # Below functions are all generic enough to be handled by the Collections controller

    # collection
    $routes->get($collection, 'Collections::collection', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Collection']);

    # export all
    $routes->get($collection . '/export', 'Collections::collection/export', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'CollectionExport']);

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

    # execute
    $routes->get($collection . '/(:num)/execute', $controller . '::execute/$1', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Execute']);

    # export individual
    $routes->get($collection . '/(:num)/export', 'Collections::read/$1/export', ['filter' => \App\Filters\Session::class, 'as' => $collection . 'Export']);

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
