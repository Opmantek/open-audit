<?php
$export_link = $this->response->links->first;
if (strpos($this->response->links->first, '?') !== false) {
    $export_link .= '&';
} else {
    $export_link .= '?';
}
?>
<div class="panel-title clearfix">
    <div class="pull-left">
        <?php echo ucwords(str_replace('_', ' ', ($this->response->meta->collection))); ?>
    </div>
<!--
                <div class="nav navbar-nav navbar-center">
                    <form id="search_form" name="search_form" class="navbar-form" style="margin-top:0px; margin-bottom:0px;" action="<?php echo $this->config->config['oa_web_folder']; ?>/index.php/search" method="post">
                        <div class="form-group">
                            <input type="text"   id="data[attributes][value]"   name="data[attributes][value]"   class="form-control input-sm" placeholder="Device Name or IP">
                            <input type="hidden" id="data[attributes][tables]"  name="data[attributes][tables]" value='["system"]' />
                            <input type="hidden" id="data[attributes][columns]" name="data[attributes][columns]" value='["name","ip"]' />
                        </div>
                        <button type="submit" class="btn btn-default btn-sm">Submit</button>
                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align" data-container="body" data-toggle="popover" data-placement="left" title="Device Search" data-content="Search the following fields: name, hostname, dns_hostname, sysName, domain, dns_domain, ip.">
                            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>
-->
    <div class="pull-right">
        <div class="btn-group" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                    Export <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo $export_link; ?>format=csv">CSV</a></li>
                    <li><a href="<?php echo $export_link; ?>format=html">HTML</a></li>
                    <li><a href="<?php echo $export_link; ?>format=json">JSON</a></li>
                    <li><a href="<?php echo $export_link; ?>format=xml">XML</a></li>
                </ul>
            </div>
        <?php
        if ($this->m_users->get_user_permission('', $this->response->meta->collection, 'c') and
            $this->response->meta->collection != 'configuration' and
            $this->response->meta->collection != 'database' and
            $this->response->meta->collection != 'logs') { ?>
                <a class="btn btn-default btn-sm" href="<?php echo $this->config->config['oa_web_index'] . '/' . $this->response->meta->collection; ?>/create" role="button"><?php echo __('Create'); ?></a>
        <?php } ?>
        </div>
        &nbsp;&nbsp;&nbsp;<?php echo $this->response->meta->filtered . ' of ' . $this->response->meta->total . ' results'; ?>
    </div>
</div>