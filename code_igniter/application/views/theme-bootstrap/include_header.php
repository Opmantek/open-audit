<?php
if (!empty($this->config->config['servers'])) {
    $collector = true;
} else {
    $collector = false;
}
?>
<div class="row">
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- The left side 'header' of the navbar -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $this->config->config['oa_web_folder']; ?>/index.php">
                    <img alt="Brand" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/oac.png">
                </a>
                <a class="navbar-brand" href="<?php echo $this->config->config['oa_web_folder']; ?>/index.php">
                <?php
                if (!empty($this->config->config['oae_product'])) {
                    $product = $this->config->config['oae_product'];
                } else {
                    $product = 'Open-AudIT Community';
                }
                echo $product . ' ' . htmlspecialchars($this->config->item('display_version'), REPLACE_FLAGS, CHARSET);
                ?>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php if (!$collector) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Discover'); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            if ($this->m_users->get_user_permission('', 'credentials', 'r')) { ?>
                                <li class="dropdown-submenu">
                                    <a href="#"><?php echo __('Credentials'); ?></a>
                                    <ul class="dropdown-menu" style="min-width:250px;">
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/credentials'><?php echo __('List Credentials'); ?></a></li>
                                        <?php if ($this->m_users->get_user_permission('', 'credentials', 'c')) { ?>
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/credentials/create'><?php echo __('Create Credentials'); ?></a></li>
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/credentials/import'><?php echo __('Import Credentials from CSV'); ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php
                            } ?>
                            <?php
                            if ($this->m_users->get_user_permission('', 'discoveries', 'r')) { ?>
                                <li class="dropdown-submenu">
                                    <?php if ($this->config->config['oae_license'] == 'none') { ?>
                                        <a href="#"><?php echo __('Discoveries'); ?> <i class="fa fa-lock" aria-hidden="true" style="color: rgba(43, 41, 43, 0.56)"></i></a>
                                    <?php } else { ?>
                                        <a href="#"><?php echo __('Discoveries'); ?></a>
                                    <?php } ?>
                                    <ul class="dropdown-menu" style="min-width:250px;">
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries'><?php echo __('List Discoveries'); ?></a></li>
                                        <?php if ($this->m_users->get_user_permission('', 'discoveries', 'c')) { ?>
                                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries/create'><?php echo __('Create Discovery'); ?></a></li>
                                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries/create?single=y'><?php echo __('Discover a single device'); ?></a></li>
                                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries/import'><?php echo __('Import Discoveries from CSV'); ?></a></li>
                                            <?php if ($this->config->config['oae_license'] == 'none') { ?>
                                                <li class="disabled"><a href='#'><?php echo __('Configure Discoveries'); ?></a></li>
                                                <li class="disabled"><a href='#'><?php echo __('Schedule Discoveries'); ?></a></li>
                                                <li><a style="color: #337ab7;" href='<?php echo $this->config->config['oae_url']; ?>/features/discoveries'><?php echo __('Learn About Discoveries'); ?></a></li>
                                            <?php } else { ?>
                                                <li><a href='<?php echo $this->config->config['oae_url']; ?>/configuration?section=discovery'><?php echo __('Configure Discoveries'); ?></a></li>
                                                <li><a href='<?php echo $this->config->config['oae_url']; ?>/tasks'><?php echo __('Schedule Discoveries'); ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php
                            } ?>
                            <?php
                            if ($this->m_users->get_user_permission('', 'files', 'r')) { ?>
                                <li class="dropdown-submenu">
                                    <?php if ($this->config->config['oae_license'] == 'commercial') { ?>
                                    <a href="#"><?php echo __('Files'); ?></a>
                                    <?php } else { ?>
                                    <a href="#">Files <i class="fa fa-lock" aria-hidden="true" style="color: rgba(43, 41, 43, 0.56)"></i></a>
                                    <?php } ?>
                                    <ul class="dropdown-menu" style="min-width:250px;">
                                        <?php if ($this->config->config['oae_license'] == 'commercial') { ?>
                                            <li><a href='<?php echo $this->config->config['oae_url']; ?>/files'><?php echo __('List Files'); ?></a></li>
                                        <?php } else { ?>
                                            <li class="disabled"><a href="#"><?php echo __('List Files'); ?></a></li>
                                        <?php } ?>
                                        <?php if ($this->m_users->get_user_permission('', 'files', 'c')) { ?>
                                            <?php if ($this->config->config['oae_license'] == 'commercial') { ?>
                                                <li><a href="<?php echo $this->config->config['oae_url']; ?>/files/create"><?php echo __('Create Files'); ?></a></li>
                                                <li><a href="<?php echo $this->config->config['oae_url']; ?>/files/import"><?php echo __('Import Multiple Files'); ?></a></li>
                                            <?php } else { ?>
                                                <li class="disabled"><a href="#"><?php echo __('Create Files'); ?></a></li>
                                                <li class="disabled"><a href="#"><?php echo __('Import Multiple Files'); ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php if ($this->config->config['oae_license'] != 'commercial') { ?>
                                            <li><a style="color: #337ab7;" href='<?php echo $this->config->config['oae_url']; ?>/features/files'><?php echo __('Learn About Files'); ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php
                            } ?>
                            <?php
                            if ($this->m_users->get_user_permission('', 'scripts', 'r')) { ?>
                                <li class="dropdown-submenu">
                                    <a href="#"><?php echo __('Audit Scripts'); ?></a>
                                    <ul class="dropdown-menu" style="min-width:250px;">
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/scripts'><?php echo __('List Scripts'); ?></a></li>
                                        <?php if ($this->m_users->get_user_permission('', 'scripts', 'c')) { ?>
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/scripts/create'><?php echo __('Create Script'); ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php
                            } ?>
                        </ul>
                    </li>

                    <?php # sort our queries, summaries and reports
                    $reports = array();
                    foreach ($this->response->included as $item) {
                        if (($item->type == 'queries' or $item->type == 'summaries' or $item->type == 'reports') and $item->{'attributes'}->{'menu_display'} == 'y') {
                            $item->name = $item->{'attributes'}->{'name'};
                            $reports[] = $item;
                        }
                    }
                    function my_comparison($asort, $bsort) {
                        return strcmp($asort->name, $bsort->name);
                    }
                    usort($reports, 'my_comparison');
                    ?>

                    <!-- The Report menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Report'); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'attributes' and $item->attributes->resource == 'queries' and $item->attributes->type == 'menu_category' and $item->attributes->value != '') {
                                    $category = $item->attributes->value;
                            ?>
                            <li class="dropdown-submenu">
                                <?php if ($this->config->config['oae_license'] == 'none' and $category == 'Discovery') { ?>
                                    <a><?php echo htmlspecialchars($category, REPLACE_FLAGS, CHARSET) ?> <i class="fa fa-lock" aria-hidden="true" style="color: rgba(43, 41, 43, 0.56)"></i></a>
                                <?php } else { ?>
                                    <a><?php echo htmlspecialchars($category, REPLACE_FLAGS, CHARSET) ?></a>
                                <?php } ?>
                                <ul class="dropdown-menu" style="min-width:250px;">
                                <?php
                                foreach ($reports as $item) {
                                    if ($category == $item->{'attributes'}->{'menu_category'}) {
                                        if ($item->{'attributes'}->{'menu_category'} == 'Discovery') {
                                            if ($this->config->config['oae_license'] == 'none') {
                                                $link = '<li class="disabled"><a href="#">';
                                            } else {
                                                $link = '<li><a href="' . $this->config->config['oae_url'] . '/reports/' . $item->id . '/execute">';
                                            }
                                        } else {
                                            $link = '<li><a href="' . $this->config->config['oa_web_index'] . '/' . $item->{'type'} . '/' . $item->{'id'} . '/execute">';
                                        }
                                        echo $link . htmlspecialchars($item->{'attributes'}->{'name'}, REPLACE_FLAGS, CHARSET) . "</a></li>\n";
                                    }
                                }
                                if ($this->config->config['oae_license'] == 'none' and $category == 'Discovery') {
                                    echo "<li><a style=\"color: #337ab7;\" href=\"" . $this->config->config['oae_url'] . "/features/reports\">" . __('Learn About Reports') . "</a></li>\n";
                                } ?>
                                </ul>
                            </li>
                            <?php } ?>
                            <?php } ?>
                            <?php if ($this->config->config['oae_license'] == 'none') { ?>
                                <li><a href="#"><?php echo __('Schedule Reports'); ?> <i class="fa fa-lock" aria-hidden="true" style="color: rgba(43, 41, 43, 0.56)"></i></a></li>
                                <li><a href="#"><?php echo __('MultiReport'); ?> <i class="fa fa-lock" aria-hidden="true" style="color: rgba(43, 41, 43, 0.56)"></i></a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo $this->config->config['oae_url']; ?>/tasks"><?php echo __('Schedule Reports'); ?></a></li>
                                <li><a href="<?php echo $this->config->config['oae_url']; ?>/multi_report"><?php echo __('MultiReport'); ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <?php
                    $collections = array('applications','attributes','baselines','clouds','connections','dashboards','devices','fields','groups','licenses','locations','maps','networks','orgs','queries','roles','summaries','users','widgets');
                    $commercial_collections = array('applications','baselines','clouds','dashboards','maps','roles','widgets');
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Manage'); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <?php
                        foreach ($collections as $collection) {
                            if ($collection == 'maps') { ?>
                                <li class="dropdown-submenu">
                                    <a href="#"><?php echo ucwords(str_replace('_', ' ', $collection)); ?></a>
                                    <ul class="dropdown-menu" style="min-width:250px;">
                                        <li>
                                            <a href='<?php echo $this->config->config['oae_url']; ?>/map'><?php echo __('Map'); ?></a>
                                        </li>
                                    </ul>
                                </li>
                            <?php
                            }
                            if ($this->m_users->get_user_permission('', $collection, 'r')) { ?>
                                <li class="dropdown-submenu">
                                    <?php if ($this->config->config['oae_license'] != 'commercial' and in_array($collection, $commercial_collections)) { ?>
                                    <a href="#"><?php echo ucwords(str_replace('_', ' ', $collection)); ?> <i class="fa fa-lock" aria-hidden="true" style="color: rgba(43, 41, 43, 0.56)"></i></a>
                                    <?php } else { ?>
                                    <a href="#"><?php echo ucwords(str_replace('_', ' ', $collection)); ?></a>
                                    <?php } ?>
                                    <ul class="dropdown-menu" style="min-width:250px;">

                                        <!-- LIST -->
                                        <?php if ($this->config->config['oae_license'] != 'commercial' and in_array($collection, $commercial_collections)) { ?>
                                        <li class="disabled"><a href="#">List <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                        <?php } else if (in_array($collection, $commercial_collections)) { ?>
                                        <li><a href='<?php echo $this->config->config['oae_url']; ?>/<?php echo $collection; ?>'><?php echo __('List').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                        <?php } else { ?>
                                        <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/<?php echo $collection; ?>'><?php echo __('List').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                        <?php } ?>

                                        <!-- CREATE / IMPORT -->
                                        <?php if ($this->m_users->get_user_permission('', $collection, 'c')) { ?>
                                            <?php if ($this->config->config['oae_license'] != 'commercial' and in_array($collection, $commercial_collections)) { ?>
                                                <li class="disabled"><a href="#"><?php echo __('Create').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                                <?php if ($collection == 'roles') { ?>
                                                <li class="disabled"><a href="#"><?php echo __('Import').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                                <?php } ?>
                                            <?php } else if (in_array($collection, $commercial_collections)) {
                                                $link = $this->config->config['oae_url']; ?>
                                                <li><a href='<?php echo $link; ?>/<?php echo $collection; ?>/create'><?php echo __('Create').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>

                                            <?php } else {
                                                $link = $this->config->config['oa_web_index']; ?>
                                                <?php if ($collection == 'devices') { ?>
                                                    <li><a href='<?php echo $link; ?>/<?php echo $collection; ?>/create'><?php echo __('Import Devices from Audit Script Result'); ?></a></li>
                                                    <li><a href='<?php echo $link; ?>/nmis/create'><?php echo __('Import Devices from NMIS'); ?></a></li>
                                                    <li><a href='<?php echo $this->config->config['oae_url']; ?>/device_exports'><?php echo __('Export Devices to CSV'); ?></a></li>
                                                    <li><a href='<?php echo $link; ?>/nmis?system.nmis_manage=y&system.status=production'><?php echo __('Export Devices to NMIS'); ?></a></li>
                                                <?php } else { ?>
                                                    <li><a href='<?php echo $link; ?>/<?php echo $collection; ?>/create'><?php echo __('Create').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                                    <li><a href='<?php echo $link; ?>/<?php echo $collection; ?>/import'><?php echo __('Import').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?> from CSV</a></li>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>

                                        <!-- SCHEDULE -->
                                        <?php
                                        if ($this->m_users->get_user_permission('', $collection, 'c')) {
                                            if ($this->config->config['oae_license'] == 'commercial') {
                                                if ($collection == 'baselines') { ?>
                                                <li><a href='<?php echo $this->config->config['oae_url']; ?>/tasks?tasks.type=baselines'><?php echo __('Schedule').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>

                                        <!-- LEARN -->
                                        <?php if ($this->config->config['oae_license'] != 'commercial' and in_array($collection, $commercial_collections)) { ?>
                                        <li><a style="color: #337ab7;" href='<?php echo $this->config->config['oae_url']; ?>/features/<?php echo $collection; ?>'><?php echo __('Learn About').' '; ?> <?php echo ucwords(str_replace('_', ' ', $collection)); ?></a></li>
                                        <?php } ?>

                                    </ul>
                                </li>
                            <?php
                            }
                        } ?>
                        </ul>
                    </li>
                <?php } ?>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Modules')?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            if (!empty($this->config->config['modules'])) {
                                $modules = json_decode($this->config->config['modules']);
                                foreach ($modules as $modules) {
                                    if (!empty($modules->installed)) {
                                        $url = $modules->link;
                                    } else {
                                        $url = $modules->url;
                                    }
                                ?>
                                <li><a href='<?php echo $url; ?>'><?php echo $modules->name; ?></a></li>
                                <?php
                                }
                            } else {
                                echo "<li><a href=\"#\">No modules installed<br />(log out and back in to refresh)</a></li>\n";
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Licenses')?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php if ($this->config->config['oae_license'] == 'none') { ?>
                                <li><a href='/omk/oae/license_free'><?php echo __('Activate Free License')?></a></li>
                            <?php } ?>
                            <li><a href='/omk/opLicense'><?php echo __('Manage Licenses')?></a></li>
                            <li><a href='#' id='buy_more_licenses'><?php echo __('Buy More Licenses')?></a></li>
                            <li><a href='/omk/opLicense'><?php echo __('Restore Licenses')?></a></li>
                        </ul>
                    </li>

                    <?php
                    if ($this->m_users->get_user_permission('', 'configuration', 'r') !== false or
                        $this->m_users->get_user_permission('', 'database', 'u') !== false or
                        $this->m_users->get_user_permission('', 'ldap_servers', 'u') !== false or
                        $this->m_users->get_user_permission('', 'logs', 'r') !== false) { ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Admin'); ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">

                        <?php
                        if ($this->m_users->get_user_permission('', 'configuration', 'r')) { ?>
                            <li class="dropdown-submenu">
                                <a href="#"><?php echo __('Configuration'); ?></a>
                                <ul class="dropdown-menu" style="min-width:250px;">
                                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/configuration'><?php echo __('List Configuration'); ?></a></li>
                                </ul>
                            </li>
                        <?php
                        } ?>

                        <?php
                        if ($this->m_users->get_user_permission('', 'database', 'u')) { ?>
                            <li class="dropdown-submenu">
                                <a href="#"><?php echo __('Database'); ?></a>
                                <ul class="dropdown-menu" style="min-width:250px;">
                                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/database'><?php echo __('List Tables'); ?></a></li>
                                </ul>
                            </li>
                        <?php
                        } ?>

                        <?php
                        if (!$collector) {
                        if ($this->m_users->get_user_permission('', 'ldap_servers', 'u')) { ?>
                            <li class="dropdown-submenu">
                                <a href="#"><?php echo __('LDAP Servers'); ?></a>
                                <ul class="dropdown-menu" style="min-width:250px;">
                                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/ldap_servers'><?php echo __('List Servers'); ?></a></li>
                                    <?php if ($this->m_users->get_user_permission('', 'ldap_servers', 'c')) { ?>
                                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/ldap_servers/create'><?php echo __('Create LDAP Server'); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php
                        } } ?>

                        <?php
                        if ($this->m_users->get_user_permission('', 'logs', 'r')) { ?>
                            <li class="dropdown-submenu">
                                <a href="#"><?php echo __('Logs'); ?></a>
                                <ul class="dropdown-menu" style="min-width:250px;">
                                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/logs?logs.type=access'><?php echo __('View Access Logs'); ?></a></li>
                                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/logs?logs.type=system'><?php echo __('View System Logs'); ?></a></li>
                                    <?php if ($this->m_users->get_user_permission('', 'logs', 'd')) { ?>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                      </ul>
                    </li>
                    <?php } ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Help'); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help'><?php echo __('About')?></a></li>
                            <li><a href='https://community.opmantek.com/display/OA/Home'><?php echo __('Documentation')?></a></li>
                            <li><a href='https://community.opmantek.com/display/OA/Getting+Started'><?php echo __('Getting Started')?></a></li>
                            <li><a href='https://community.opmantek.com/display/OA/Open-AudIT+FAQ'><?php echo __('FAQ')?></a></li>
                            <li><a href='<?php echo $this->config->config['oae_url']; ?>/features'><?php echo __('Open-AudIT Features')?></a></li>

                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/support'><?php echo __('Support')?></a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/groups'><?php echo __('Default Group List')?></a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/queries'><?php echo __('Default Query List')?></a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/roles'><?php echo __('Default Role List')?></a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/summaries'><?php echo __('Default Summary List')?></a></li>
                        </ul>
                    </li>

                    <li>
                        <a title="Maps" href="/omk/open-audit/map"><img style="width:22px;" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-opmaps.png" alt=""/></a>
                    </li>

                    <?php
                    if (isset($this->config->config['mis_url']) and $this->config->config['nmis_url'] > "") {
                        $link = htmlspecialchars($this->config->item('nmis_url'), REPLACE_FLAGS, CHARSET);
                    } else {
                        $link = "https://opmantek.com";
                    }
                    ?>
                    <li>
                        <a title="NMIS" href="<?php echo $link; ?>"><img style="width:22px;" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-nmis.png" alt=""/></a>
                    </li>

                    <li>
                        <a title="Enterprise" href="/omk/open-audit/"><img style="width:22px;" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/oae_sml.png" alt=""/></a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($this->user->full_name, REPLACE_FLAGS, CHARSET); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a onclick="logout();" href="<?php echo $this->config->config['oa_web_index']; ?>/logon/logoff" role="button"><?php echo __('Logout'); ?></a></li>
                            <li><a href="#" role="button" class="debug"><?php echo __('Debug'); ?></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- /.navbar-collapse -->
</div>

<?php include('include_modal.php'); ?>

<br />