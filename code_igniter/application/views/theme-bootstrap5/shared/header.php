<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Open-AudIT">
        <meta name="author" content="Mark Unwin">
        <link rel="shortcut icon" href="<?php echo $this->config->config['oa_web_folder']; ?>favicon.png" type="image/x-icon" />
        <title>Open-AudIT</title>

        <!-- JS -->
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/jquery.min.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/popper.min.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/jquery.dataTables.min.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/dataTables.bootstrap5.min.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/fontawesome-all.min.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/fa-v4-shims.js"></script>
        <script src="<?php echo $this->config->config['oa_web_folder']; ?>js5/open-audit.js"></script>

        <?php if ($meta->action == 'read') { ?>
            <script src="<?php echo $this->config->config['oa_web_folder'] . 'index.php/' . $meta->collection . '/' . $meta->id . '?format=js'; ?>"></script>
        <?php } ?>

        <!-- CSS -->
        <link href="<?php echo $this->config->config['oa_web_folder']; ?>css5/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $this->config->config['oa_web_folder']; ?>css5/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="<?php echo $this->config->config['oa_web_folder']; ?>css5/font-awesome.css" rel="stylesheet" >
        <link href="<?php echo $this->config->config['oa_web_folder']; ?>css5/open-audit.css" rel="stylesheet" >

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
            var web_folder = '<?php echo $this->config->config['oa_web_folder']; ?>';
            var device_auto_delete = '<?php echo $this->config->config['device_auto_delete']; ?>';
        </script>

        <?php # include 'modal_js.php'; ?>
        <?php $this->config->config['oae_product'] = 'Open-AudIT Enterprise'; ?>
        <?php #$instance->config->config['oae_product'] = 'enterprise'; ?>
        <?php #$this->config->config['oae_license'] = 'none'; ?>
        <?php $theme = '1'; ?>

        <?php if (!empty($orgs) and is_array($orgs) and !empty($data[0]->attributes->org_id)) { ?>
        <!-- Orgs Dropdown -->
        <script>
        // $(document).ready(function () {
        //     $(document).on('click', '.edit_org', function (e) {
        //         var org_id = $(this).attr("data-original_value");
        //         $("#org_id").html("<div class='input-group' style='margin: 0 0 4px 0;'>\
        //             <select class='form-select form-select-sm' data-attribute=\"org_id\">\
        //             <?php
        //             foreach ($orgs as $org) {
        //                 $selected = '';
        //                 if ($org->id === $data[0]->attributes->org_id) {
        //                     $selected = ' selected';
        //                 }
        //                 echo '<option value=\'' . $org->id . '\'' . $selected . '>' . $org->attributes->name . '</option>';
        //             } ?>\
        //             </select>\
        //             <div data-attribute='org_id' class='btn btn-success submit'><i class='fa fa-check'></i></div>\
        //             <div data-attribute='org_id' class='btn btn-danger cancel_org' ><i class='fa fa-remove'></i></div></div>");
        //     });

        //     $(document).on('click', '.cancel_org', function (e) {
        //         var attribute = $(this).attr("data-attribute");
        //         console.log("Attribute: " + attribute);
        //         console.log("Original Value: " + $("#"+attribute).attr("data-original-value"));
        //         $("#"+attribute).html('<a href="<?php echo $this->config->config['oa_web_index'] . '/orgs/' . $data[0]->attributes->{'orgs.id'}; ?> ">' + $("#"+attribute).attr("data-original-value") + "</a>");
        //     });
        // });
        </script>
        <?php } ?>
    </head>
    <!-- Need d-flex flex-column h-100 to hold footer in place -->
    <body class="d-flex flex-column h-100">
        
        <?php #include 'modal_html.php'; ?>

        <!-- Menu -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-image: linear-gradient(180deg, #485563 2%, #29323C 97%);">
            <div class="container-fluid">
                <img class="rounded-circle border border-white border-0" style="background: white; width:25px; margin-right:6px;" src="<?php echo $this->config->config['oa_web_folder']; ?>images/Open-AudIT.svg" alt="">
                <a class="navbar-brand" href="#">Open-AudIT Enterprise <?php echo $this->config->config['display_version'] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarView" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo __('View') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarView">
                                <?php foreach ($dashboards as $dashboard) {
                                if ($dashboard->type === 'dashboards') {
                                    if ($this->config->config['oae_product'] === 'enterprise' or $this->config->config['oae_product'] === 'professional') {
                                        echo "                                <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oae_url'] . "/dashboards/" . $dashboard->id . "/execute\">" . $dashboard->attributes->name . "</a></li>\n";
                                    } else {
                                        echo "                                <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">" . $dashboard->attributes->name . "</a></li>\n";
                                    }
                                }
                            } ?>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDiscover" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                Discover
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDiscover">
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Clouds') ?></a>
                                    <?php echo enterprise_menu_item('clouds') ?>
                                </li>

                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Credentials') ?></a>
                                    <?php echo community_menu_item('credentials') ?>
                                </li>

                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Discoveries') ?></a>
                                    <ul class="dropdown-menu">
                                        <!-- Discoveries List -->
                                        <?php if ($this->m_users->get_user_permission('', 'discoveries', 'r')) { ?>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/discoveries"><?php echo __('List') . ' ' . __('Discoveries') ?></a></li>
                                        <?php } else { ?>
                                            <li><a class="dropdown-item greyout toastPermission" href="#">List Discoveries') ?></a></li>
                                        <?php } ?>
                                        <!-- Discoveries Create -->
                                        <?php if ($this->m_users->get_user_permission('', 'discoveries', 'c')) { ?>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/discoveries/create"><?php echo __('Create') . ' ' . __('Discoveries') ?></a></li>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/discoveries/import"><?php echo __('Import') . ' ' . __('Discoveries') ?></a></li>
                                        <?php } else { ?>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Create Discoveries') ?></a></li>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Import Discoveries') ?></a></li>
                                        <?php } ?>
                                            <li><hr class="dropdown-divider" /></li>
                                        <!-- Discoveries Configure -->
                                        <?php if ($this->m_users->get_user_permission('', 'configuration', 'u')) { ?>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/configuration?configuration.name=likediscovery_"><?php echo __('Global Discovery Options') ?></a></li>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/configuration?configuration.name=likematch_"><?php echo __('Discovery Match Options') ?></a></li>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/configuration?configuration.name=likecreate_change_log"><?php echo __('Discovery Change Logs') ?></a></li>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/configuration?configuration.name=likedelete_noncurrent"><?php echo __('Discovery Data Retention') ?></a></li>
                                        <?php } else { ?>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Global Discovery Options') ?></a></li>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Discovery Match Options') ?></a></li>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Discovery Change Logs') ?></a></li>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Discovery Data Retention') ?></a></li>
                                        <?php } ?>
                                        <!-- Discovery Scan Options -->
                                            <li><a class="dropdown-item dropdown-toggle second-level-dropdown-toggle" href="#"><?php echo __('Discovery Scan Options') ?></a>
                                                <ul class="dropdown-menu">
                                                    <?php if ($this->config->config['oae_product'] === 'enterprise' && $this->m_users->get_user_permission('', 'discovery_scan_options', 'r')) { ?>
                                                    <li><a class="dropdown-item" href="<?php echo $this->config->config['oae_url']; ?>/discovery_scan_options/create"><?php echo __('List') . ' ' . __('Discovery Scan Options') ?></a></li>
                                                        <?php
                                                    } else if ($this->config->config['oae_product'] === 'enterprise') { ?>
                                                    <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('List') . ' ' . __('Discovery Scan Options') ?></a></li>
                                                        <?php
                                                    } else { ?>
                                                    <li><a class="dropdown-item greyout toastEnterprise" href="#"><?php echo __('List') . ' ' . __('Discovery Scan Options') ?></a></li>
                                                        <?php
                                                    } ?>
                                                <?php if ($this->config->config['oae_product'] === 'enterprise' && $this->m_users->get_user_permission('', 'discovery_scan_options', 'c')) { ?>
                                                    <li><a class="dropdown-item" href="<?php echo $this->config->config['oae_url']; ?>/discovery_scan_options"><?php echo __('Create Discovery Scan Options') ?></a></li>
                                                <?php } else if ($this->config->config['oae_product'] === 'enterprise') { ?>
                                                    <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Create') . ' ' . __('Discovery Scan Options') ?></a></li>
                                                <?php } else { ?>
                                                    <li><a class="dropdown-item greyout toastEnterprise" href="#"><?php echo __('Create') . ' ' . __('Discovery Scan Options') ?></a></li>
                                                <?php } ?>
                                                <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/features/discovery_scan_options"><?php echo __('Learn About') . ' ' . __('Discovery Scan Options') ?></a></li>
                                                </ul>
                                            </li>
                                            <li><hr class="dropdown-divider" /></li>
                                        <!-- Discoveries Schedule -->
                                        <?php if ($this->config->config['oae_license'] === 'commercial' && $this->m_users->get_user_permission('', 'tasks', 'c')) { ?>
                                            <li><a class="dropdown-item" href="<?php echo $this->config->config['oae_url']; ?>/tasks/create?type=discoveries"><?php echo __('Schedule') . ' ' . __('Discoveries') ?></a></li>
                                        <?php } else if ($this->config->config['oae_license'] === 'commercial') { ?>
                                            <li><a class="dropdown-item greyout toastPermission" href="#"><?php echo __('Schedule') . ' ' . __('Discoveries') ?></a></li>
                                        <?php } else { ?>
                                            <li><a class="dropdown-item greyout toastEnterprise" href="#"><?php echo __('Schedule') . ' ' . __('Discoveries') ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Files') ?></a>
                                    <?php echo professional_menu_item('files') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Scripts') ?></a>
                                    <?php echo community_menu_item('scripts') ?>
                                </li>
                            </ul>
                        </li>

                        <?php # sort our queries, summaries and reports
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
                        ?>

                        <!-- The Report menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo __('Report') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarReport">
                            <?php
                            foreach ($categories as $category) {
                                echo "
                            <li><a class=\"dropdown-item dropdown-toggle first-level-dropdown-toggle\" href=\"#\">" . $category . "</a>\n                            <ul class=\"dropdown-menu\">\n";
                                foreach ($reports as $report) {
                                    if ($report->{'attributes'}->{'menu_category'} === $category) {
                                        if ($report->{'attributes'}->{'menu_category'} === 'Discovery') {
                                            if ($this->config->config['oae_license'] !== 'commercial') {
                                                echo "                                <li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">" . $report->{'attributes'}->{'name'} . "</a></li>\n";
                                            } else {
                                                echo "                                <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oae_url'] . "/reports/" . $report->{'id'} . "/execute\">" . $report->{'attributes'}->{'name'} . "</a></li>\n";
                                            }
                                        } else {
                                            echo "                                <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/" . $report->{'type'} . "/" . $report->{'id'} . "\">" . $report->{'attributes'}->{'name'} . "</a></li>\n";
                                        }
                                    }
                                }
                                echo "                            </ul>\n";
                            } ?>
<?php if ($this->config->config['oae_license'] == 'none') { ?>
                                <li><a class="dropdown-item greyout toastProfessional" href="#"><?php echo __('Schedule Reports'); ?></a></li>
                                <li><a class="dropdown-item greyout toastProfessional" href="#"><?php echo __('MultiReport'); ?></a></li>
<?php } else { ?>
                                <li><a href="<?php echo $this->config->config['oae_url']; ?>/tasks"><?php echo __('Schedule Reports'); ?></a></li>
                                <li><a href="<?php echo $this->config->config['oae_url']; ?>/multi_report"><?php echo __('MultiReport'); ?></a></li>
<?php } ?>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarManage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo __('Manage') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarManage">
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Applications') ?></a>
                                    <?php echo enterprise_menu_item('applications') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Attributes') ?></a>
                                    <?php echo community_menu_item('attributes', 'y', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Baselines') ?></a>
                                    <?php echo enterprise_menu_item('baselines', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Clusters') ?></a>
                                    <?php echo professional_menu_item('clusters', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Connections') ?></a>
                                    <?php echo community_menu_item('connections') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Dashboards') ?></a>
                                    <?php echo enterprise_menu_item('dashboards', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Devices') ?></a>
                                    <!-- Community -->
                                    <ul class="dropdown-menu">
                                        <!-- Devices List -->
                                        <?php if ($this->m_users->get_user_permission('', 'devices', 'r')) {
                                            echo "<li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/devices\">" . __('List Devices') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/devices?format=csv\">" . __('Export Devices to CSV') . "</a></li>\n";
                                        } else {
                                            echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('List Devices') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Export Devices to CSV') . "</a></li>\n";
                                        }
                                        echo "                                      <!-- Devices Create -->\n";
                                        if ($this->m_users->get_user_permission('', 'devices', 'c')) {
                                            echo "                                      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/devices/create\">" . __('Import Devices from Audit Script Result') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/nmis/create\">" . __('Import Devices from NMIS') . "</a></li>\n";
                                        } else {
                                            echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Import Devices from Audit Script Result') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Import Devices from NMIS') . "</a></li>\n";
                                        } ?>
                                        <li><hr class="dropdown-divider" /></li>
                                        <?php if (($this->config->config['oae_product'] === 'enterprise' or $this->config->config['oae_product'] === 'professional') && $this->m_users->get_user_permission('', 'devices', 'c')) {
                                            echo "<li><a class=\"dropdown-item\" href=\"" . $this->config->config['oae_url'] . "/example_data/create\">" . __('Import Example Devices') . "</a></li>\n";
                                            echo "                              <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oae_url'] . "/example_data/delete\">" . __('Delete Example Devices') . "</a></li>\n";
                                        } else if ($this->config->config['oae_product'] === 'enterprise' or $this->config->config['oae_product'] === 'professional') {
                                            echo "<li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Import Example Devices') . "</a></li>\n";
                                            echo "                              <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Delete Example Devices') . "</a></li>\n";
                                        } else {
                                            echo "<li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">" . __('Import Example Devices') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">" . __('Delete Example Devices') . "</a></li>\n";
                                        } ?>
                                        <li><hr class="dropdown-divider" /></li>
                                        <!-- Devices Configure -->
                                        <?php if ($this->m_users->get_user_permission('', 'configuration', 'u')) {
                                            echo "<li><a class=\"dropdown-item\" href=\"configuration?configuration.name=likecreate_change_log\">" . __('Configure Change logs') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item\" href=\"configuration?configuration.name=likedelete_non_current\">" . __('Configure Data Retention') . "</a></li>\n";
                                        } else {
                                            echo "<li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Configure Change logs') . "</a></li>\n";
                                            echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('Configure Data Retention') . "</a></li>\n";
                                        } ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Fields') ?></a>
                                    <?php echo community_menu_item('fields') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Groups') ?></a>
                                    <?php echo community_menu_item('groups', 'n', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Integrations') ?></a>
                                    <?php echo professional_menu_item('integrations', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Licenses') ?></a>
                                    <?php echo community_menu_item('licenses') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Locations') ?></a>
                                    <?php echo community_menu_item('locations', 'y', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Map') ?></a>
                                    <!-- Professional -->
                                    <ul class="dropdown-menu">
                                <?php if ($this->config->config['oae_product'] === 'enterprise' or $this->config->config['oae_product'] === 'professional') {
                                    echo "<li><a class=\"dropdown-item\" href=\"" . $this->config->config['oae_url'] . "/map\">" . __('View Map') . "</a></li>\n";
                                } else {
                                    echo "<li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">" . __('View Map') . "</a></li>\n";
                                } ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Networks') ?></a>
                                    <?php echo community_menu_item('networks') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Orgs') ?></a>
                                    <?php echo community_menu_item('orgs', 'y', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Queries') ?></a>
                                    <?php echo community_menu_item('queries', 'y', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Racks') ?></a>
                                    <?php echo enterprise_menu_item('racks', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Roles') ?></a>
                                    <?php echo enterprise_menu_item('roles', 'n', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Rules') ?></a>
                                    <?php echo enterprise_menu_item('rules', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Summaries') ?></a>
                                    <?php echo community_menu_item('summaries', 'n', 'y') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Users') ?></a>
                                    <?php echo community_menu_item('users', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Widgets') ?></a>
                                    <?php echo enterprise_menu_item('widgets', 'n', 'y') ?>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarAdmin" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo __('Admin') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarAdmin">
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Configuration') ?></a>
                                    <!-- Community -->
                                    <ul class="dropdown-menu">
                                <?php if ($this->m_users->get_user_permission('', 'configuration', 'r')) {
                                    echo "      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/configuration\">" . __('List Configuration') . "</a></li>\n";
                                } else {
                                    echo "      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('List Configuration') . "</a></li>\n";
                                } ?>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Database') ?></a>
                                    <!-- Community -->
                                    <ul class="dropdown-menu">
                                <?php if ($this->m_users->get_user_permission('', 'database', 'r')) {
                                    echo "      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/configuration\">" . __('View Tables') . "</a></li>\n";
                                } else {
                                    echo "      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('View Tables') . "</a></li>\n";
                                } ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('LDAP Servers') ?></a>
                                    <?php echo community_menu_item('ldap_servers', 'n') ?>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Logs') ?></a>
                                    <!-- Community -->
                                    <ul class="dropdown-menu">
                                <?php if ($this->m_users->get_user_permission('', 'logs', 'r')) {
                                    echo "                                      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/logs?logs.type=access\">" . __('View Access Logs') . "</a></li>\n";
                                    echo "                                      <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oa_web_index'] . "/logs?logs.type=system\">" . __('View System Logs') . "</a></li>\n";
                                } else {
                                    echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('View Access Logs') . "</a></li>\n";
                                    echo "                                      <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">" . __('View System Logs') . "</a></li>\n";
                                } ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarHelp" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Help</a>
                            <!-- Community -->
                            <ul class="dropdown-menu" aria-labelledby="navbarHelp">
                                <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help"><?php echo __('About') ?></a></li>
                                <li><a class="dropdown-item" href="https://community.opmantek.com/display/OA/Home"><?php echo __('Documentation') ?></a></li>
                                <li><a class="dropdown-item" href="https://community.opmantek.com/display/OA/Getting+Started"><?php echo __('Getting Started') ?></a></li>
                                <li><a class="dropdown-item" href="https://community.opmantek.com/display/OA/Open-AudIT+FAQ"><?php echo __('FAQ') ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/features"><?php echo __('Features') ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/support"><?php echo __('Support') ?></a></li>
                                <li><a class="dropdown-item dropdown-toggle first-level-dropdown-toggle" href="#"><?php echo __('Defaults') ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/attributes"><?php echo __('Attributes') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/configuration"><?php echo __('Configuration') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/groups"><?php echo __('Groups') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/locations"><?php echo __('Locations') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/orgs"><?php echo __('Orgs') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/queries"><?php echo __('Queries') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/roles"><?php echo __('Roles') ?></a></li>
                                        <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/help/summaries"><?php echo __('Summaries') ?></a></li>
                                    </ul>
                                </li>
                            </ul>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarModules" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo __('Modules') ?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarModules">
<?php
if (!empty($this->config->config['modules'])) {
    $modules = json_decode($this->config->config['modules']);
    foreach ($modules as $modules) {
        if (!empty($modules->installed)) {
            $url = $modules->link;
        } else {
            $url = $modules->url;
        }
        echo "                              <li><a class=\"dropdown-item\" href=\"" . $url . "\">" . $modules->name . "</a></li>\n";
    }
} else {
    echo "                              <li><a href=\"#\">No modules installed<br />(log out and back in to refresh)</a></li>\n";
} ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLicenses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">Licenses</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarLicenses">
<?php if ($this->config->config['oae_license'] == 'none') { ?>
                                <li><a class="dropdown-item" href='<?php echo $this->config->config['oae_url'] ?>/license_free'><?php echo __('Activate Free License')?></a></li>
<?php } ?>
                                <li><a class="dropdown-item" href='<?php echo $this->config->config['oae_url'] ?>/../opLicense'><?php echo __('Manage Licenses')?></a></li>
                                <li><a class="dropdown-item buy_more_licenses" href='#'><?php echo __('Buy More Licenses')?></a></li>
                            </ul>
                        </li>

                        <li style="padding-top:6px;"><a href="/omk/open-audit/" style="padding-top:5px; padding-left:5px; padding-right:5px;" title="Open-AudIT Enterprise"><img style="width:20px;" src="<?php echo $this->config->config['oa_web_folder']; ?>images/Open-AudIT.svg" alt=""></a></li>

                        <!-- User -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">User: <?php echo htmlentities($this->user->name) ?></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $this->config->config['oa_web_index'] ?>/users/<?php echo intval($this->user->id) ?>"><?php echo __('Preferences'); ?></a></li>
                                <li><a class="dropdown-item" onclick="logout();" href="<?php echo $this->config->config['oa_web_index']; ?>/logon/logoff" role="button"><?php echo __('Logout'); ?></a></li>
                                <li><a class="dropdown-item debug" href="#"><?php echo __('Debug'); ?></a></li>
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
                                <li class="breadcrumb-item"><a href="<?php echo $this->config->config['oa_web_index']; ?>" class="link-secondary" style="text-decoration: none;">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo $this->config->config['oa_web_index']; ?>/<?php echo $meta->collection ?>" class="link-secondary" style="text-decoration: none;"><?php echo @ucfirst($meta->collection) ?></a></li>
                            <?php if ($meta->action === 'read' and !empty($data[0]->attributes->name)) { ?>
                                <li class="breadcrumb-item"><a href="<?php echo $this->config->config['oa_web_index']; ?>/<?php echo $meta->collection ?>/<?php echo $meta->id ?>" class="link-secondary" style="text-decoration: none;"><?php echo $data[0]->attributes->name ?></a></li>
                            <?php } ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-9 clearfix" style="padding-bottom: 2px; padding-top: 10px;">
                        <form class="float-end" method="post" action="<?php echo $this->config->config['oa_web_index']; ?>/search">
                            <div class="btn-group" role="group">
                                <input type="hidden" id="data[access_token]"        name="data[access_token]"        value="<?php echo $meta->access_token; ?>" />
                                <input type="text"   id="data[attributes][value]"   name="data[attributes][value]"   class="form-control form-control-sm" placeholder="Device Name or full IP" />
                                <input type="hidden" id="data[attributes][tables]"  name="data[attributes][tables]"  value='["system"]' />
                                <input type="hidden" id="data[attributes][columns]" name="data[attributes][columns]" value='["name","ip","hostname","dns_hostname","sysName","domain","dns_domain"]' />
                                <button class="btn btn-sm btn-success" type="submit">Search</button>
                            </div>
                            <div class="btn-group" role="group">
                                <div class="dropdown float-end">
                                    <button class="btn btn-sm dropdown-toggle btn-outline-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dashboards
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<?php
                                    foreach ($dashboards as $dashboard) {
                                        if ($dashboard->type === 'dashboards') {
                                            if ($this->config->config['oae_product'] === 'Open-AudIT Enterprise' or $this->config->config['oae_product'] === 'Open-AudIT Professional') {
                                                echo "                                    <li><a class=\"dropdown-item\" href=\"" . $this->config->config['oae_url'] . "/dashboards/" . $dashboard->id . "/execute\">" . $dashboard->attributes->name . "</a></li>\n";
                                            } else {
                                                echo "                                    <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">" . $dashboard->attributes->name . "</a></li>\n";
                                            }
                                        }
                                    } ?>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <br />
        </div>

        <div class="toast-container">
            <div class="position-fixed end-0 top-0 p-3" style="z-index: 5">
                <div id="liveToastEnterprise" class="toast toast-ent hide" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header" style="background-color: #FFCE54;">
                        <strong class="me-auto">Enterprise Feature</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        This feature is limited to Enterprise licenses only. Please contact <a href="https://www.firstwave.com" target="_blank">Firstwave</a> for a license.
                    </div>
                </div>
            </div>
            <div class="position-fixed end-0 top-0 p-3" style="z-index: 5">
                <div id="liveToastProfessional" class="toast toast-pro hide" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Professional Feature</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        This feature is limited to Professional licenses only. Please contact <a href="https://www.firstwave.com" target="_blank">Firstwave</a> for a license.
                    </div>
                </div>
            </div>
            <div class="position-fixed end-0 top-0 p-3" style="z-index: 5">
                <div id="liveToastPermission" class="toast toast-perm hide" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Not Authorized</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Your user account does not have permission to perform this function.
                    </div>
                </div>
            </div>
        </div>


<?php


function community_menu_item($collection, $import = 'y', $defaults = 'n')
{
    if (empty($collection)) {
        return;
    }
    $instance = & get_instance();
    $collection_formatted = str_replace('_', ' ', $collection);
    $collection_formatted = ucwords($collection_formatted);
    $human_collection = $collection_formatted;
    if ($collection_formatted === 'Ldap Servers') {
        $human_collection = 'LDAP Servers';
    }
    $list = __('List') . ' ' . __($human_collection);
    $create = __('Create') . ' ' . __($human_collection);
    $import_string = __('Import') . ' ' . __($human_collection);
    $link = $instance->config->config['oa_web_index'] . '/' . $collection;
    $return_string = "<!-- Community -->
                                    <ul class=\"dropdown-menu\">
                                        <!-- " . ucwords($collection) . " List -->\n";
    // read
    if ($instance->m_users->get_user_permission('', $collection, 'r')) {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}\">{$list}</a></li>\n";
    } else {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$list}</a></li>\n";
    }
    // create
    $return_string .= "                                     <!-- " . ucwords($collection) . " Create -->\n";
    if ($instance->m_users->get_user_permission('', $collection, 'c')) {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/create\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/import\">{$import_string}</a></li>\n";
        }
    } else {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$import_string}</a></li>\n";
        }
    }
    // about
    $return_string .= "                                     <!-- " . ucwords($collection) . " Help -->\n";
    if ($defaults === 'y') {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/../help/{$collection}\">" . __('Default') . " " . __($human_collection) . "</a></li>\n";
    }
    $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/../help/features/{$collection}\">" . __('Learn About') . " " . __($human_collection) . "</a></li>\n";
    $return_string .= "                                 </ul>\n";
    return $return_string;
}

function professional_menu_item($collection, $import = 'y')
{
    if (empty($collection)) {
        return;
    }
    $instance = & get_instance();
    $collection_formatted = str_replace('_', ' ', $collection);
    $collection_formatted = ucwords($collection_formatted);
    $list = __('List') . ' ' . __($collection_formatted);
    $create = __('Create') . ' ' . __($collection_formatted);
    $import_string = __('Import') . ' ' . __($collection_formatted);
    $link = $instance->config->config['oae_url'] . "/" . $collection;
    $community_link = $instance->config->config['oa_web_index'];
    $return_string = "<!-- Professional -->
                                    <ul class=\"dropdown-menu\">
                                        <!-- " . ucwords($collection) . " List -->\n";
    // read
    if (($instance->config->config['oae_product'] === 'Open-AudIT Enterprise' or $instance->config->config['oae_product'] === 'Open-AudIT Professional') && $instance->m_users->get_user_permission('', $collection, 'r')) {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}\">{$list}</a></li>\n";
    } else if ($instance->config->config['oae_product'] === 'Open-AudIT Enterprise') {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$list}</a></li>\n";
    } else {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">{$list}</a></li>\n";
    }
    // create
    $return_string .= "                                     <!-- " . ucwords($collection) . " Create -->\n";
    if (($instance->config->config['oae_product'] === 'Open-AudIT Enterprise' or $instance->config->config['oae_product'] === 'Open-AudIT Professional') && $instance->m_users->get_user_permission('', $collection, 'c')) {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/create\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/import\">{$import_string}</a></li>\n";
        }
    } else if ($instance->config->config['oae_product'] === 'Open-AudIT Enterprise' or $instance->config->config['oae_product'] === 'Open-AudIT Professional') {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$import_string}</a></li>\n";
        }
    } else {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item greyout toastProfessional\" href=\"#\">{$import_string}</a></li>\n";
        }
    }
    // about
    $return_string .= "                                     <!-- " . ucwords($collection) . " Help -->\n";
    $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$community_link}/help/features/{$collection}\">" . __('Learn About') . " " . __($collection_formatted) . "</a></li>\n";
    $return_string .= "                                 </ul>\n";
    return $return_string;
}

function enterprise_menu_item($collection, $import = 'y')
{
    if (empty($collection)) {
        return;
    }
    $instance = & get_instance();
    $collection_formatted = str_replace('_', ' ', $collection);
    $collection_formatted = ucwords($collection_formatted);
    $list = __('List') . ' ' . __($collection_formatted);
    $create = __('Create') . ' ' . __($collection_formatted);
    $import = __('Import') . ' ' . __($collection_formatted);
    $link = $instance->config->config['oae_url'] . "/" . $collection;
    $community_link = $instance->config->config['oa_web_index'];
    $return_string = "<!-- Enterprise -->
                                    <ul class=\"dropdown-menu\">
                                        <!-- " . ucwords($collection) . " List -->\n";
    // read
    if ($instance->config->config['oae_product'] === 'Open-AudIT Enterprise' && $instance->m_users->get_user_permission('', $collection, 'r')) {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}\">{$list}</a></li>\n";
    } else if ($collection === 'roles' && $instance->m_users->get_user_permission('', $collection, 'r')) {
        // special case - we don't need for Enterprise to 'read' roles.
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"" . $instance->config->config['oa_web_index'] . "/" . $collection . "\">{$list}</a></li>\n";
    } else if ($instance->config->config['oae_product'] === 'Open-AudIT Enterprise') {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$list}</a></li>\n";
    } else {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">{$list}</a></li>\n";
    }
    // create
    $return_string .= "                                     <!-- " . ucwords($collection) . " Create -->\n";
    if ($instance->config->config['oae_product'] === 'Open-AudIT Enterprise' && $instance->m_users->get_user_permission('', $collection, 'c')) {
        $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/create\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$link}/import\">{$import}</a></li>\n";
        }
    } else if ($instance->config->config['oae_product'] === 'Open-AudIT Enterprise') {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item greyout toastPermission\" href=\"#\">{$import}</a></li>\n";
        }
    } else {
        $return_string .= "                                     <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">{$create}</a></li>\n";
        if ($import === 'y') {
            $return_string .= "                                     <li><a class=\"dropdown-item greyout toastEnterprise\" href=\"#\">{$import}</a></li>\n";
        }
    }
    // about
    $return_string .= "                                     <!-- " . ucwords($collection) . " Help -->\n";
    $return_string .= "                                     <li><a class=\"dropdown-item\" href=\"{$community_link}/help/features/{$collection}\">" . __('Learn About') . " " . __($collection_formatted) . "</a></li>\n";
    $return_string .= "                                 </ul>\n";
    return $return_string;
}
