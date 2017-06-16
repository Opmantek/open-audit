<?php
$export_link = $this->response->links->self;
if (strpos($this->response->links->self, '?') !== false) {
    $export_link .= '&';
} else {
    $export_link .= '?';
}
?>
<div class="panel-title clearfix">
    <?php echo ucwords(str_replace('_', ' ', ($this->response->meta->collection))); ?>

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
            <a class="btn btn-default btn-sm" role="button" href="<?php echo $this->response->meta->collection; ?>/create" role="button"><?php echo __('Create'); ?></a>
    <?php } ?>
        &nbsp;&nbsp;&nbsp;<?php echo $this->response->meta->filtered . ' of ' . $this->response->meta->total . ' results'; ?>
    </div>
</div>