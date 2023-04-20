<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
$header = "
    connect-src 'self' opmantek.com community.opmantek.com services.opmantek.com;
    font-src 'self' fonts.gstatic.com;
    form-action 'self';
    frame-ancestors 'none';
    frame-src 'none';
    img-src 'self' data:;
    manifest-src 'none';
    media-src 'none';
    object-src 'none';
    script-src 'self' 'unsafe-inline' maps.googleapis.com maps.google.com;
    style-src 'self' 'unsafe-inline' fonts.googleapis.com;
    worker-src 'self';
    ";
    # prefetch-src 'self'; # removed as still marked as experimental and not supported in any browsers
    # https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/prefetch-src#browser_compatibility
$header = str_replace(PHP_EOL, "", $header);
header("Content-Security-Policy: {$header}");
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
// if (intval($config->internal_version) < intval($config->web_internal_version) && $meta->include !== 'v_database_update' && $meta->include !== 'v_database_update_form') {
//     redirect('database?action=update');
// }
// Define our constans for use in htmlspecialchars
if (!defined('CHARSET')) {
    define('CHARSET', 'UTF-8');
    define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
}
include('lang_en.inc');
// lang translation function
if (!function_exists('__')) {
    function __($word)
    {
        // Learning-Mode
        // Only for Developers !!!!
        $language_learning_mode = 0;
        $language_file = APPPATH . 'views/lang/en.inc';

        $word = (string) $word;

        if (isset($GLOBALS['lang'][$word])) {
            return $GLOBALS['lang'][$word];
        } else {
            // Learning-Mode
            if ($language_learning_mode === 1 && isset($word) && $word !== '') {
                if (is_writable($language_file)) {
                    // Deleting
                    $buffer = '';
                    $handle = fopen($language_file, 'r');
                    while (!feof($handle)) {
                        $line = fgets($handle, 4096);
                        if (!preg_match('/\?>/', $line)) {
                            $buffer .= $line;
                        }
                    }
                    fclose($handle);
                    // Writing new Variables
                    $handle = fopen($language_file, 'w+');
                    fwrite($handle, $buffer.''."\$GLOBALS[\"lang\"][\"$word\"]=\"$word\";\n?>");
                    fclose($handle);
                } else {
                    die("Language-Learning-Mode, but $language_file not writeable");
                }
            }

            return $word;
        }
    }
}

// sort our queries, summaries and reports
$reports = array();
$categories = array();
foreach ($queries as $item) {
    if ($item->{'attributes'}->{'menu_display'} === 'y') {
        $item->name = $item->{'attributes'}->{'name'};
        $reports[] = $item;
        $categories[] = $item->{'attributes'}->{'menu_category'};
    }
}
function my_comparison($asort, $bsort)
{
    return strcmp($asort->name, $bsort->name);
}
usort($reports, 'my_comparison');
asort($categories);
$categories = array_unique($categories);
$config->oae_product = 'Open-AudIT Enterprise';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Open-AudIT Community">
        <meta name="author" content="Mark Unwin">
        <link rel="shortcut icon" href="<?= base_url('favicon.png') ?>" type="image/x-icon">
        <title>Open-AudIT</title>

        <!-- JS -->
        <script src="<?= base_url('js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('js/popper.min.js') ?>"></script>
        <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('js/dataTables.bootstrap5.min.js') ?>"></script>
        <script src="<?= base_url('js/fontawesome-all.min.js') ?>"></script>
        <script src="<?= base_url('js/fa-v4-shims.min.js') ?>"></script>
        <script src="<?= base_url('js/open-audit.js') ?>"></script>

        <!-- CSS -->
        <link href="<?= base_url('css/inter.css') ?>"                     rel="stylesheet">
        <link href="<?= base_url('css/bootstrap.css') ?>"             rel="stylesheet">
        <link href="<?= base_url('css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('css/font-awesome.css') ?>"              rel="stylesheet">
        <link href="<?= base_url('css/open-audit.css') ?>"                rel="stylesheet">

        <!--
        <link href="//fonts.googleapis.com/css?family=Nunito"             rel="stylesheet">
        <link href="<?= base_url('css/google-fonts.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('css/prismjs.bundle.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('css/datatables.bundle.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('css/plugins.bundle.css') ?>" rel="stylesheet" type="text/css"/>
        -->

        <!-- Open-AudIT specific items -->
        <script>
            <?php
            if (isset($meta->id) and !is_null($meta->id)) {
                echo "            var id = '" . $meta->id . "';\n";
            }
            if (!empty($meta->collection)) {
                echo "            var collection = '" . $meta->collection . "';\n";
            }
            if (!empty($meta->baseurl)) {
                echo "            var baseurl = '" . $meta->baseurl . "';\n";
            } else {
                echo "            var baseurl = '';\n";
            }
            ?>
            var web_folder = '<?= base_url() ?>';
            var device_auto_delete = '<?= $config->device_auto_delete; ?>';
        </script>
    </head>
    <!-- Need d-flex flex-column h-100 to hold footer in place -->
    <body class="d-flex flex-column h-100">
        <!-- Menu -->
        <nav class="navbar navbar-expand-md" style="background-color: #1F284F !important;">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: white;" href="/">
                    <img class="rounded-circle border border-white border-0" style="background: white; width:25px; margin-right:6px;" src="<?= base_url('images/Open-AudIT.svg') ?>" alt="Open-AudIT logo">
                    Open-AudIT <?= $config->display_version . "\n" ?>
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarView" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?= __('Dashboards') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarView">
                                <?php if (!empty($dashboards)) { ?>
                                    <?php foreach ($dashboards as $dashboard) {
                                        if ($dashboard->type === 'dashboards') {
                                            if ($config->oae_product === 'enterprise' or $config->oae_product === 'professional') {
                                                echo "                                <li><a class=\"dropdown-item\" href=\"" . url_to('dashboardsExecute', $dashboard->id) . "\">" . $dashboard->attributes->name . "</a></li>\n";
                                            } else {
                                                echo "                                <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">" . $dashboard->attributes->name . "</a></li>\n";
                                            }
                                        }
                                    }
                                } ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDiscover" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?= __('Discover') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDiscover">
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Clouds') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('clouds', 'r', $user, 'cloudsCollection', 'List Clouds') ?>
                                        <?= menuItem('clouds', 'c', $user, 'cloudsCreateForm', 'Create Clouds', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('clouds', '', $user, 'cloudsHelp', 'Learn About Clouds') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Credentials') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('credentials', 'r', $user, 'credentialsCollection', 'List Credentials') ?>
                                        <?= menuItem('credentials', 'c', $user, 'credentialsCreateForm', 'Create Credentials') ?>
                                        <?= menuItem('credentials', '', $user, 'credentialsHelp', 'Learn About Credentials') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Discoveries') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('discoveries', 'r', $user, 'discoveriesCollection', 'List Discoveries') ?>
                                        <?= menuItem('discoveries', 'c', $user, 'discoveriesCreateForm', 'Create Discoveries') ?>
                                        <?= menuItem('discoveries', 'c', $user, 'discoveriesImportForm', 'Import Discoveries') ?>
                                        <li><hr class="dropdown-divider"></li>
                                        <?= menuItem('configuration', 'r', $user, 'configurationCollection', 'Global Discovery Options', '?configuration.name=likediscovery_') ?>
                                        <?= menuItem('configuration', 'r', $user, 'configurationCollection', 'Discovery Match Options', '?configuration.name=likematch_') ?>
                                        <?= menuItem('configuration', 'r', $user, 'configurationCollection', 'Discovery Change Logs', '?configuration.name=likecreate_change_log') ?>
                                        <?= menuItem('configuration', 'r', $user, 'configurationCollection', 'Discovery Data Retention', '?configuration.name=likedelete_noncurrent') ?>
                                        <li><a class="dropdown-item dropdown-toggle second-level-dropdown-toggle" href="#"><?= __('Discovery Scan Options') ?></a>
                                            <ul class="dropdown-menu">
                                                <?= menuItem('discovery_scan_options', 'r', $user, 'discovery_scan_optionsCollection', 'List Discovery Scan Options', '', 'Enterprise', $config->oae_product) ?>
                                                <?= menuItem('discovery_scan_options', 'c', $user, 'discovery_scan_optionsCreate', 'Create Discovery Scan Options', '', 'Enterprise', $config->oae_product) ?>
                                                <li><a class="dropdown-item" href="<?= url_to('discovery_scan_optionsHelp') ?>"><?= __('Learn About') . ' ' . __('Discovery Scan Options') ?></a></li>
                                            </ul>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <?= menuItem('tasks', 'c', $user, 'tasksCreateForm', 'Schedule Discoveries', '?type=discoveries', 'Professional', $config->oae_product) ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Files') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('files', 'r', $user, 'filesCollection', 'List Files') ?>
                                        <?= menuItem('files', 'c', $user, 'filesCreateForm', 'Create Files', '', 'Professional', $config->oae_product) ?>
                                        <?= menuItem('files', '', $user, 'filesHelp', 'Learn About Files') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Scripts') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('scripts', 'r', $user, 'scriptsCollection', 'List Scripts') ?>
                                        <?= menuItem('scripts', 'c', $user, 'scriptsCreateForm', 'Create Scripts') ?>
                                        <?= menuItem('scripts', '', $user, 'scriptsHelp', 'Learn About Scripts') ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- The Report menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?= __('Report') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarReport">
                            <?php
                            foreach ($categories as $category) {
                                echo "
                            <li><a class=\"dropdown-item dropdown-toggle first-level-dropdown-toggle\" href=\"#\">" . $category . "</a>\n                            <ul class=\"dropdown-menu\">\n";
                                foreach ($reports as $report) {
                                    if ($report->{'attributes'}->{'menu_category'} === $category) {
                                        if ($report->{'attributes'}->{'menu_category'} === 'Discovery') {
                                            if ($config->oae_license !== 'commercial') {
                                                echo "                                <li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">" . $report->{'attributes'}->{'name'} . "</a></li>\n";
                                            } else {
                                                echo "                                <li><a class=\"dropdown-item\" href=\"" . url_to('queriesExecute', $report->id) . "\">" . $report->{'attributes'}->{'name'} . "</a></li>\n";
                                            }
                                        } else {
                                            echo "                                <li><a class=\"dropdown-item\" href=\"" . url_to('queriesExecute', $report->id) . "\">" . $report->{'attributes'}->{'name'} . "</a></li>\n";
                                        }
                                    }
                                }
                                echo "                            </ul>\n";
                            } ?>
<?php if ($config->oae_license !== 'commercial') { ?>
                                <li><a class="dropdown-item greyout toastProfessional" href="#"><?= __('Schedule Reports'); ?></a></li>
                                <li><a class="dropdown-item greyout toastProfessional" href="#"><?= __('MultiReport'); ?></a></li>
<?php } else { ?>
                                <li><a class="dropdown-item" href="<?= url_to('tasksCollection') ?>"><?= __('Schedule Reports'); ?></a></li>
                                <li><a class="dropdown-item" href="<?= url_to('home') ?>/multi_report"><?= __('MultiReport'); ?></a></li>
<?php } ?>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarManage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?= __('Manage') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarManage">
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Applications') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('applications', 'r', $user, 'applicationsCollection', 'List Applications', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('applications', 'c', $user, 'applicationsCreateForm', 'Create Applications', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('applications', '', $user, 'applicationsHelp', 'Learn About Applications') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Attributes') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('attributes', 'r', $user, 'attributesCollection', 'List Attributes') ?>
                                        <?= menuItem('attributes', 'c', $user, 'attributesCreateForm', 'Create Attributes') ?>
                                        <?= menuItem('attributes', 'c', $user, 'attributesImportForm', 'Import Attributes') ?>
                                        <?= menuItem('attributes', '', $user, 'attributesDefaults', 'Default Attributes') ?>
                                        <?= menuItem('attributes', '', $user, 'attributesHelp', 'Learn About Attributes') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Baselines') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('baselines', 'r', $user, 'baselinesCollection', 'List Baselines', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('baselines', 'c', $user, 'baselinesCreateForm', 'Create Baselines', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('baselines', '', $user, 'baselinesHelp', 'Learn About Baselines') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Clusters') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('clusters', 'r', $user, 'clustersCollection', 'List Clusters', '', 'Professional', $config->oae_product) ?>
                                        <?= menuItem('clusters', 'c', $user, 'clustersCreateForm', 'Create Clusters', '', 'Professional', $config->oae_product) ?>
                                        <?= menuItem('clusters', '', $user, 'clustersHelp', 'Learn About Clusters') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Connections') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('connections', 'r', $user, 'connectionsCollection', 'List Connections') ?>
                                        <?= menuItem('connections', 'c', $user, 'connectionsCreateForm', 'Create Connections') ?>
                                        <?= menuItem('connections', '', $user, 'connectionsHelp', 'Learn About Connections') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Dashboards') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('dashboards', 'r', $user, 'dashboardsCollection', 'List Dashboards') ?>
                                        <?= menuItem('dashboards', 'c', $user, 'dashboardsCreateForm', 'Create Dashboards', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('dashboards', '', $user, 'dashboardsDefaults', 'Default Dashboards') ?>
                                        <?= menuItem('dashboards', '', $user, 'dashboardsHelp', 'Learn About Dashboards') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Devices') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('devices', 'r', $user, 'devicesCollection', 'List Devices') ?>
                                        <?= menuItem('devices', 'c', $user, 'devicesCreateForm', 'Import Devices from Audit Script Result') ?>
                                        <?= menuItem('devices', 'c', $user, 'nmisCreateForm', 'Import Devices from NMIS') ?>
                                        <li><hr class="dropdown-divider"></li>
                                        <?= menuItem('devices', 'c', $user, 'devicesCreateExampleForm', 'Import Example Devices') ?>
                                        <?= menuItem('devices', 'c', $user, 'devicesDeleteExampleForm', 'Delete Example Devices') ?>
                                        <li><hr class="dropdown-divider"></li>
                                        <?= menuItem('configuration', 'u', $user, 'configurationCollection', 'Configure Change Logs', '?configuration.name=likecreate_change_log') ?>
                                        <?= menuItem('configuration', 'u', $user, 'configurationCollection', 'Configure Data Retention', '?configuration.name=likedelete_non_current') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Fields') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('fields', 'r', $user, 'fieldsCollection', 'List Fields') ?>
                                        <?= menuItem('fields', 'c', $user, 'fieldsCreateForm', 'Create Fields') ?>
                                        <?= menuItem('fields', 'c', $user, 'fieldsImportForm', 'Import Fields') ?>
                                        <?= menuItem('fields', '', $user, 'fieldsDefaults', 'Default Fields') ?>
                                        <?= menuItem('fields', '', $user, 'fieldsHelp', 'Learn About Fields') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Groups') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('groups', 'r', $user, 'groupsCollection', 'List Groups') ?>
                                        <?= menuItem('groups', 'c', $user, 'groupsCreateForm', 'Create Groups') ?>
                                        <?= menuItem('groups', 'c', $user, 'groupsImportForm', 'Import Groups') ?>
                                        <?= menuItem('groups', '', $user, 'groupsDefaults', 'Default Groups') ?>
                                        <?= menuItem('groups', '', $user, 'groupsHelp', 'Learn About Groups') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Integrations') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('integrations', 'r', $user, 'integrationsCollection', 'List Integrations', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('integrations', 'c', $user, 'integrationsCreateForm', 'Create Integrations', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('integrations', '', $user, 'integrationsDefaults', 'Default Integrations') ?>
                                        <?= menuItem('integrations', '', $user, 'integrationsHelp', 'Learn About Integrations') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Licenses') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('licenses', 'r', $user, 'licensesCollection', 'List Licenses') ?>
                                        <?= menuItem('licenses', 'c', $user, 'licensesCreateForm', 'Create Licenses') ?>
                                        <?= menuItem('licenses', 'c', $user, 'licensesImportForm', 'Import Licenses') ?>
                                        <?= menuItem('licenses', '', $user, 'licensesHelp', 'Learn About Licenses') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Locations') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('locations', 'r', $user, 'locationsCollection', 'List Locations') ?>
                                        <?= menuItem('locations', 'c', $user, 'locationsCreateForm', 'Create Locations') ?>
                                        <?= menuItem('locations', 'c', $user, 'locationsImportForm', 'Import Locations') ?>
                                        <?= menuItem('locations', '', $user, 'locationsDefaults', 'Default Locations') ?>
                                        <?= menuItem('locations', '', $user, 'locationsHelp', 'Learn About Locations') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Networks') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('networks', 'r', $user, 'networksCollection', 'List Networks') ?>
                                        <?= menuItem('networks', 'c', $user, 'networksCreateForm', 'Create Networks') ?>
                                        <?= menuItem('networks', 'c', $user, 'networksImportForm', 'Import Networks') ?>
                                        <?= menuItem('networks', '', $user, 'networksHelp', 'Learn About Networks') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Orgs') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('orgs', 'r', $user, 'orgsCollection', 'List Orgs') ?>
                                        <?= menuItem('orgs', 'c', $user, 'orgsCreateForm', 'Create Orgs') ?>
                                        <?= menuItem('orgs', 'c', $user, 'orgsImportForm', 'Import Orgs') ?>
                                        <?= menuItem('orgs', '', $user, 'orgsDefaults', 'Default Orgs') ?>
                                        <?= menuItem('orgs', '', $user, 'orgsHelp', 'Learn About Orgs') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Queries') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('queries', 'r', $user, 'queriesCollection', 'List Queries') ?>
                                        <?= menuItem('queries', 'c', $user, 'queriesCreateForm', 'Create Queries') ?>
                                        <?= menuItem('queries', 'c', $user, 'queriesImportForm', 'Import Queries') ?>
                                        <?= menuItem('queries', '', $user, 'queriesDefaults', 'Default Queries') ?>
                                        <?= menuItem('queries', '', $user, 'queriesHelp', 'Learn About Queries') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Racks') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('racks', 'r', $user, 'racksCollection', 'List Racks') ?>
                                        <?= menuItem('racks', 'c', $user, 'racksCreateForm', 'Create Racks') ?>
                                        <?= menuItem('racks', 'c', $user, 'racksImportForm', 'Import Racks') ?>
                                        <?= menuItem('racks', '', $user, 'racksHelp', 'Learn About Racks') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Roles') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('roles', 'r', $user, 'rolesCollection', 'List Roles') ?>
                                        <?= menuItem('roles', 'c', $user, 'rolesCreateForm', 'Create Roles', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('roles', 'c', $user, 'rolesImportForm', 'Import Roles', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('roles', '', $user, 'rolesDefaults', 'Default Roles') ?>
                                        <?= menuItem('roles', '', $user, 'rolesHelp', 'Learn About Roles') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Rules') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('rules', 'r', $user, 'rulesCollection', 'List Rules') ?>
                                        <?= menuItem('rules', 'c', $user, 'rulesCreateForm', 'Create Rules', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('rules', 'c', $user, 'rulesImportForm', 'Import Rules', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('rules', '', $user, 'rulesDefaults', 'Default Rules') ?>
                                        <?= menuItem('rules', '', $user, 'rulesHelp', 'Learn About Rules') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Summaries') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('summaries', 'r', $user, 'summariesCollection', 'List Summaries') ?>
                                        <?= menuItem('summaries', 'c', $user, 'summariesCreateForm', 'Create Summaries') ?>
                                        <?= menuItem('summaries', 'c', $user, 'summariesImportForm', 'Import Summaries') ?>
                                        <?= menuItem('summaries', '', $user, 'summariesDefaults', 'Default Summaries') ?>
                                        <?= menuItem('summaries', '', $user, 'summariesHelp', 'Learn About Summaries') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Users') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('users', 'r', $user, 'usersCollection', 'List Users') ?>
                                        <?= menuItem('users', 'c', $user, 'usersCreateForm', 'Create Users') ?>
                                        <?= menuItem('users', 'c', $user, 'usersImportForm', 'Import Users') ?>
                                        <?= menuItem('users', '', $user, 'usersDefaults', 'Default Users') ?>
                                        <?= menuItem('users', '', $user, 'usersHelp', 'Learn About Users') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Widgets') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('widgets', 'r', $user, 'widgetsCollection', 'List Widgets') ?>
                                        <?= menuItem('widgets', 'c', $user, 'widgetsCreateForm', 'Create Widgets', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('widgets', 'c', $user, 'widgetsImportForm', 'Import Widgets', '', 'Enterprise', $config->oae_product) ?>
                                        <?= menuItem('widgets', '', $user, 'widgetsDefaults', 'Default Widgets') ?>
                                        <?= menuItem('widgets', '', $user, 'widgetsHelp', 'Learn About Widgets') ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarAdmin" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?= __('Admin') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarAdmin">
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Configuration') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('configuration', 'r', $user, 'configurationCollection', 'List Configuration') ?>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Database') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('database', 'r', $user, 'databaseCollection', 'List Database Tables') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('LDAP Servers') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('ldap_servers', 'r', $user, 'ldap_serversCollection', 'List LDAP Servers') ?>
                                        <?= menuItem('ldap_servers', 'c', $user, 'ldap_serversCreateForm', 'Create LDAP Servers') ?>
                                        <?= menuItem('ldap_servers', '', $user, 'ldap_serversHelp', 'Learn About LDAP Servers') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Logs') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('logs', 'r', $user, 'logsCollection', 'View Access Logs', '?logs.type=access') ?>
                                        <?= menuItem('logs', 'r', $user, 'logsCollection', 'View System Logs', '?logs.type=system') ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Tasks') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('tasks', 'r', $user, 'tasksCollection', 'List Tasks', '', 'Professional', $config->oae_product) ?>
                                        <?= menuItem('tasks', 'x', $user, 'tasksCreateForm', 'Create Tasks', '', 'Professional', $config->oae_product) ?>
                                        <?= menuItem('tasks', '', $user, 'tasksHelp', 'Learn About Tasks') ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarHelp" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Help</a>
                            <!-- Community -->
                            <ul class="dropdown-menu" aria-labelledby="navbarHelp">
                                <li><a class="dropdown-item" href="<?= url_to('about') ?>"><?= __('About') ?></a></li>
                                <li><a class="dropdown-item" href="https://community.opmantek.com/display/OA/Home"><?= __('Documentation') ?></a></li>
                                <li><a class="dropdown-item" href="https://community.opmantek.com/display/OA/Getting+Started"><?= __('Getting Started') ?></a></li>
                                <li><a class="dropdown-item" href="https://community.opmantek.com/display/OA/Open-AudIT+FAQ"><?= __('FAQ') ?></a></li>
                                <li><a class="dropdown-item" href="<?= url_to('features') ?>"><?= __('Features') ?></a></li>
                                <li><a class="dropdown-item" href="<?= url_to('support') ?>"><?= __('Support') ?></a></li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?= __('Defaults') ?></a>
                                    <ul class="dropdown-menu">
                                        <?= menuItem('attributes', '', $user, 'attributesDefaults', 'Attributes') ?>
                                        <?= menuItem('configuration', '', $user, 'configurationDefaults', 'Configuration') ?>
                                        <?= menuItem('groups', '', $user, 'groupsDefaults', 'Groups') ?>
                                        <?= menuItem('integrations', '', $user, 'integrationsDefaults', 'Integrations') ?>
                                        <?= menuItem('locations', '', $user, 'locationsDefaults', 'Locations') ?>
                                        <?= menuItem('orgs', '', $user, 'orgsDefaults', 'Orgs') ?>
                                        <?= menuItem('queries', '', $user, 'queriesDefaults', 'Queries') ?>
                                        <?= menuItem('roles', '', $user, 'rolesDefaults', 'Roles') ?>
                                        <?= menuItem('summaries', '', $user, 'summariesDefaults', 'Summaries') ?>
                                        <?= menuItem('widgets', '', $user, 'widgetsDefaults', 'Widgets') ?>
                                    </ul>
                                </li>
                            </ul>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarModules" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?= __('Modules') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarModules">
<?php
if (!empty($config->modules)) {
    $modules = json_decode($config->modules);
    foreach ($modules as $modules) {
        if (!empty($modules->installed)) {
            $url = $modules->link;
        } else {
            $url = $modules->url;
        }
        echo "                              <li><a class=\"dropdown-item\" href=\"" . $url . "\">" . $modules->name . "</a></li>\n";
    }
} else {
    echo "                              <li><a class=\"dropdown-item\" href=\"#\">No modules installed.</a></li>\n";
} ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLicenses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Licenses</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarLicenses">
<?php if ($config->oae_license === 'none') { ?>
                                <li><a class="dropdown-item" href='<?= $config->oae_url ?>/license_free'><?= __('Activate Free License')?></a></li>
<?php } ?>
                                <li><a class="dropdown-item" href='<?= $config->oae_url ?>/../opLicense'><?= __('Manage Licenses')?></a></li>
                                <li><a class="dropdown-item buy_more_licenses" href='#'><?= __('Buy More Licenses')?></a></li>
                            </ul>
                        </li>

                        <!-- User -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">User: <?= htmlentities($user->name) ?></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= url_to('usersRead', $user->id) ?>"><?= __('Preferences'); ?></a></li>
                                <li><a class="dropdown-item" onclick="logout();" href="<?= url_to('logoff') ?>" role="button"><?= __('Logout'); ?></a></li>
                                <li><a class="dropdown-item debug" href="#"><?= __('Debug'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Breadcrumbs -->

        <div class="container-fluid" style="margin-bottom: -10px;">
                <div class="row second-nav">
                    <div class="col-3" style="padding-bottom: 0px; padding-top: 16px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= url_to('home') ?>" class="link-secondary" style="text-decoration: none;">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= url_to($meta->collection.'Collection') ?>" class="link-secondary" style="text-decoration: none;"><?= @ucfirst($meta->collection) ?></a></li>
                            <?php if ($meta->action === 'read' and !empty($name)) { ?>
                                <li class="breadcrumb-item"><a href="<?= url_to($meta->collection.'Read', $meta->id) ?>" class="link-secondary" style="text-decoration: none;"><?= $name ?></a></li>
                            <?php } ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-9 clearfix" style="padding-bottom: 2px; padding-top: 10px;">
                        <!-- TODO - fix the below search route -->
                        <form class="float-end" method="post" action="#">
                            <div class="btn-group" role="group">
                                <input type="hidden" id="data[access_token]"        name="data[access_token]"        value="<?= $meta->access_token[1]; ?>">
                                <label style="padding-top:5px;" for="data[attributes][value]">Search&nbsp;</label>
                                <input type="text"   id="data[attributes][value]"   name="data[attributes][value]"   class="form-control form-control-sm" placeholder="Device Name or full IP">
                                <input type="hidden" id="data[attributes][tables]"  name="data[attributes][tables]"  value='["system"]'>
                                <input type="hidden" id="data[attributes][columns]" name="data[attributes][columns]" value='["name","ip","hostname","dns_hostname","sysName","domain","dns_domain"]'>
                                <button class="btn btn-sm btn-outline-secondary" type="submit" title="Submit"><span class="fa fa-search" title="<%= l('Search') %>"></span></button>
                            </div>
                            <div class="btn-group" role="group">
                                <div class="dropdown float-end">
                                    <button class="btn btn-sm dropdown-toggle btn-outline-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dashboards
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <?php
                                    if (!empty($dashboards)) {
                                        foreach ($dashboards as $dashboard) {
                                            if ($dashboard->type === 'dashboards') {
                                                if ($config->oae_product === 'Open-AudIT Enterprise' or $config->oae_product === 'Open-AudIT Professional') {
                                                    echo "                                    <li><a class=\"dropdown-item\" href=\"" . url_to('DashboardsExecute', $dashboard->id) . "\">" . $dashboard->attributes->name . "</a></li>\n";
                                                } else {
                                                    echo "                                    <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">" . $dashboard->attributes->name . "</a></li>\n";
                                                }
                                            }
                                        }
                                    } ?>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <br>
        </div>
        <?php if (!empty($_SESSION['error'])) {
            $json = @json_decode($_SESSION['error']); ?>
        <div class="container-fluid">
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                <?php if (!empty($json)) {?>
                    <?= 'Message: ' . $json->message . '<br />SQL: ' . $json->sql ?>
                <?php } else { ?>
                    <?= $_SESSION['error'] ?>
                <?php } ?>
                <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php } ?>
        <?php if (!empty($_SESSION['success'])) { ?>
        <div class="container-fluid">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['success'] ?>
                <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php } ?>

        <!-- Toasts -->

        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container top-0 end-0 p-3">
                <div class="toast toast-ent" role="alert" aria-live="assertive" aria-atomic="true" id="liveToastEnterprise">
                    <div class="toast-header" style="background-color: var(--bs-primary-bg-subtle); --bs-border-color: var(--bs-primary-border-subtle); color: var(--bs-primary-text);">
                        <strong class="me-auto">Enterprise Feature</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        This feature is limited to Enterprise licenses only. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.
                    </div>
                </div>
                <div class="toast toast-pro" role="alert" aria-live="assertive" aria-atomic="true" id="liveToastProfessional">
                    <div class="toast-header" style="background-color: var(--bs-primary-border-subtle); color: var(--bs-primary-text);">
                        <strong class="me-auto">Professional Feature</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        This feature is limited to Professional licenses only. Please contact <a href="https://firstwave.com" target="_blank">FirstWave</a> for a license.
                    </div>
                </div>
                <div class="toast toast-perm" role="alert" aria-live="assertive" aria-atomic="true" id="liveToastPermission">
                    <div class="toast-header" style="background-color: var(--bs-danger-bg-subtle); --bs-border-color: var(--bs-danger-border-subtle); color: var(--bs-danger-text);">
                        <strong class="me-auto">Not Authorized</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Your user account does not have permission to perform this function.
                    </div>
                </div>
                <div class="toast toast-success" role="alert" aria-live="assertive" aria-atomic="true" id="liveToastSuccess">
                    <div class="toast-header" style="background-color: var(--bs-success-bg-subtle); --bs-border-color: var(--bs-success-border-subtle); color: var(--bs-success-text);">
                        <strong id="liveToastSuccess-header" class="me-auto"></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body" id="liveToastSuccess-body">
                    </div>
                </div>
                <div class="toast toast-failure" role="alert" aria-live="assertive" aria-atomic="true" id="liveToastFailure">
                    <div class="toast-header" style="background-color: var(--bs-danger-bg-subtle); --bs-border-color: var(--bs-danger-border-subtle); color: var(--bs-danger-text);">
                        <strong id="liveToastFailure-header" class="me-auto"></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body" id="liveToastFailure-body">
                    </div>
                </div>
            </div>
        </div>
<?php

function menuItem($collection = '', $action = '', $user = null, $route = '', $title = '', $routeExtra = '', $productRequired = '', $productInstalled = '')
{
    $return = "<li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __($title) . "</a></li>\n";
    if (strtolower($productInstalled) === strtolower($productRequired) or
        stripos($productInstalled, 'enterprise') !== false or
        (strtolower(str_replace('Open-AudIT ', '', $productInstalled)) === strtolower($productRequired))) {
        if (get_user_permission($collection, $action, $user)) {
            $return = "<li><a class=\"dropdown-item\" href=\"" . url_to($route) . "{$routeExtra}\">" . __($title) . "</a></li>\n";
        }
    } else {
        # $return = "<li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">" . __($title) . "</a></li>\n";
        $return = "<li><a class=\"dropdown-item greyout toast" . $productRequired . "\" href=\"#\">" . __($title) . "</a></li>\n";
    }
    return $return;
}

function get_user_permission($collection, $action, $user)
{
    if (strpos($user->permissions[$collection], $action) !== false) {
        return true;
    }
    return false;
}
