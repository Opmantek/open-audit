        <div class="panel-heading clearfix">
            <div class="panel-title clearfix">
                <div class="pull-left">
                    <?php echo str_replace('_', ' ', ucfirst($this->response->meta->collection)); ?>
                </div>
                <div class="pull-right">
                    <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                        <a class="btn btn-default btn-sm" href="<?php echo $this->config->config['oa_web_index'] . '/' . $this->response->meta->collection; ?>" role="button"><?php echo __('List') . ' ' . str_replace('_', ' ', ucfirst($this->response->meta->collection)); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>