    <div class="panel panel-default pull-right">
      <div class="panel-body">
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->first; ?>"><?php echo __('first'); ?></a></button>
          <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->prev; ?>"><?php echo __('prev'); ?></a></button>
          <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->next; ?>"><?php echo __('next'); ?></a></button>
          <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->last; ?>"><?php echo __('last'); ?></a></button>
        </div>
      </div>
    </div>
    <?php
    if (count($this->response->meta->filter) > 0) {
      echo '<div class="panel panel-default pull-left">';
      echo '<div class="panel-body">';
      foreach ($this->response->meta->filter as $item) {
        if ($item->operator == '=') {
          $label = 'label-success';
        } else if ($item->operator == '!=') {
          $label = 'label-danger';
        } else {
          $label = 'label-info';
        }
        if ($item->operator == '=') {
          $operator = '';
        } else {
          $operator = $item->operator;
        }
        $link = str_replace($item->name . '=' . $operator . $item->value, '', $_SERVER["REQUEST_URI"]);
        $link = str_replace($item->name . '=' . $operator . urlencode($item->value), '', $_SERVER["REQUEST_URI"]);
        if ($item->name == 'status' and $item->operator == '=' and $item->value == 'production') {
          $link = $refine_link . 'status=!=""';
        }
        $label = 'label-info';
        echo '<big><span class="label ' . $label . '">' . $item->name . ' ' . $item->operator . ' ' . urldecode($item->value) . '&nbsp;&nbsp;<a href="' . $link . '">&times;</a></span></big>&nbsp;';
      }
      echo '</div>';
      echo '</div>';
    } ?>
