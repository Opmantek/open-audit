        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo str_replace('_', ' ',ucfirst($this->response->meta->collection)); ?></span>
                <span class="pull-right"><a class="btn btn-xs btn-info" href="../<?php echo $this->response->meta->collection; ?>">List <?php echo str_replace('_', ' ',ucfirst($this->response->meta->collection)); ?></a></span>
            </h3>
        </div>