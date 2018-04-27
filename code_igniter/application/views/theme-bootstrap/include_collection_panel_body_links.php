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
        if ($item->operator == '=') {
            $operator = '';
        } else {
            $operator = $item->operator;
        }
        for ($i=0; $i < count($query_parameters); $i++) {
            $parameter = $query_parameters[$i];
            if ($parameter === $item) {
                array_splice($query_parameters, $i, 1);
            }
        }
        $link = create_url($query_parameters);
        echo '<span class="label label-info">' . $item->name . ' ' . $item->operator . ' ' . urldecode($item->value) . '&nbsp;&nbsp;<a href="' . $link . '">&times;</a></span>&nbsp;';
        unset($query_parameters);
    }
    echo '</h4></div>';
    echo '</div>';
}

function refine($property, $value, $display = '', $align = 'left')
{
    if ($display == '') {
        $display = $value;
    }
    if (strlen($display) > 28) {
        $display = mb_substr($display, 0, 25) . ' ...';
    }

    $CI = & get_instance();
    $query_parameters = $CI->response->meta->query_parameters;
    $item = new stdClass();
    $item->name = $property;
    $item->operator = '=';
    $item->value = $value;
    $query_parameters[] = $item;
    $include_link = create_url($query_parameters);
    unset($query_parameters);

    $query_parameters = $CI->response->meta->query_parameters;
    $item = new stdClass();
    $item->name = $property;
    $item->operator = '!=';
    $item->value = $value;
    $query_parameters[] = $item;
    $exclude_link = create_url($query_parameters);
    unset($query_parameters);

    echo '            <td class="text-' . $align . '"><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href=\'' . $exclude_link . '\'>Exclude</a><br /><a href=\'' . $include_link . '\'>Include</a>"></span><span title="' . htmlspecialchars($value) . '">' . htmlspecialchars($display, REPLACE_FLAGS, CHARSET) . "</span></td>\n";
}
?>
