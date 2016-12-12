<?php
$export_link = $this->response->links->self;
if (strpos($this->response->links->self, '?') !== false) {
    $export_link .= '&';
} else {
    $export_link .= '?';
}
?>
        <h3 class="panel-title">
            <span class="text-left"><?php echo ucwords(str_replace('_', ' ', ($this->response->meta->collection))); ?></span>
            <span class="pull-right" style="padding-left:10px;">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-xs btn-default"><a href="<?php echo $export_link; ?>format=csv">csv</a></button>
                    <button type="button" class="btn btn-xs btn-default"><a href="<?php echo $export_link; ?>format=json">json</a></button>
                    <button type="button" class="btn btn-xs btn-default"><a href="<?php echo $export_link; ?>format=xml">xml</a></button>
                </div>
            </span>
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
        </h3>