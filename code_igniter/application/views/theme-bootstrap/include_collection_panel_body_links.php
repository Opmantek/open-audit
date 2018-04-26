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
        echo '<span class="label ' . $label . '">' . $item->name . ' ' . $item->operator . ' ' . htmlentities(urldecode($item->value)) . '&nbsp;&nbsp;<a href="' . $link . '">&times;</a></span>&nbsp;';
    }
    echo '</div>';
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
    $refine_link = $_SERVER["REQUEST_URI"];
    if (strpos($refine_link, '?') === false) {
        $refine_link .= '?';
    } else if (strrpos($refine_link, '&') !== strlen($refine_link)-1) {
        $refine_link .= '&';
    }
    echo "            <td class=\"text-" . $align . "\"><span class=\"small glyphicon glyphicon-filter\" aria-hidden=\"true\" data-html=\"true\" data-toggle=\"popover\" title=\"Refine\" data-content=\"<a href='" . $refine_link . $property . "=!=" . urlencode($value) . "'>Exclude</a><br /><a href='" . $refine_link . $property . "=" . urlencode($value) . "'>Include</a><br />\"></span><span title=\"" . htmlspecialchars($value) . "\">" . htmlspecialchars($display, REPLACE_FLAGS, CHARSET) . "</span></td>\n";
}
?>
