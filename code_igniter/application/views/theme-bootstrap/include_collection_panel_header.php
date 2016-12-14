<?php
$export_link = $this->response->links->self;
if (strpos($this->response->links->self, '?') !== false) {
    $export_link .= '&';
} else {
    $export_link .= '?';
}
?>
        <div class="panel-title">
            <span class="text-left"><?php echo ucwords(str_replace('_', ' ', ($this->response->meta->collection))); ?></span>
            <div style="padding-left:10px;" class="pull-right btn-group" role="group" aria-label="...">
                <a href="<?php echo $export_link; ?>format=csv" role="button" class="btn btn-xs btn-default">csv</a>
                <a href="<?php echo $export_link; ?>format=html" role="button" class="btn btn-xs btn-default">html</a>
                <a href="<?php echo $export_link; ?>format=json" role="button" class="btn btn-xs btn-default">json</a>
                <a href="<?php echo $export_link; ?>format=xml" role="button" class="btn btn-xs btn-default">xml</a>
            </div>
            <?php
            if ($this->m_users->get_user_permission('', $this->response->meta->collection, 'c') and 
                $this->response->meta->collection != 'configuration' and 
                $this->response->meta->collection != 'database' and
                $this->response->meta->collection != 'logs') { ?>
                <span class="pull-right" style="padding-left:10px;">
                    <a class="btn btn-xs btn-primary" href="<?php echo $this->response->meta->collection; ?>/create" role="button"><?php echo __('Create'); ?></a>
                </span>
            <?php } ?>
            <span class="pull-right">
                <?php echo $this->response->meta->filtered . ' of ' . $this->response->meta->total . ' results'; ?>&nbsp;
            </span>
        </div>