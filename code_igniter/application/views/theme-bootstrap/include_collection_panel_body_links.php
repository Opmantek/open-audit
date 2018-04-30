<div class="panel panel-default pull-right">
    <div class="panel-body">
        <div class="btn-group" role="group" aria-label="...">
            <a role="button" class="btn btn-default" href="<?php echo $this->response->links->first; ?>"><?php echo __('first'); ?></a>
            <a role="button" class="btn btn-default" href="<?php echo $this->response->links->prev; ?>"><?php echo __('prev'); ?></a>
            <a role="button" class="btn btn-default" href="<?php echo $this->response->links->next; ?>"><?php echo __('next'); ?></a>
            <a role="button" class="btn btn-default" href="<?php echo $this->response->links->last; ?>"><?php echo __('last'); ?></a>
        </div>
    </div>
</div>
<?php
if (count($this->response->meta->filter) > 0) {
    echo '<div class="panel panel-default pull-left">';
    echo '<div class="panel-body"><h4>';
    foreach ($this->response->meta->filter as $item) {
        $query_parameters = $this->response->meta->query_parameters;
        $operator = $item->operator;
        if ($item->operator == '=') {
            $item->operator = '';
        }
        if ($operator == '') {
            $operator = '=';
        }
        for ($i=0; $i < count($query_parameters); $i++) {
            $parameter = $query_parameters[$i];
            if ($parameter === $item) {
                array_splice($query_parameters, $i, 1);
            }
        }
        $link = create_url($query_parameters);
        echo '<span class="label label-info">' . htmlentities($item->name) . ' ' . $operator . ' ' . htmlentities(urldecode($item->value)) . '&nbsp;&nbsp;<a href="' . $link . '">&times;</a></span>&nbsp;';
        unset($query_parameters);
    }
    echo '</h4></div>';
    echo '</div>';
}
?>
