<?php

function traffic_widget($widget)
{
    $link = '';
    if (!empty($widget->result->red) and is_numeric($widget->result->red)) {
        $link = '<a href="' . url_to('queriesExecute', $widget->traffic_primary_query_id) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->red . '</span></a>';

    }
    if (!empty($widget->result->yellow) and is_numeric($widget->result->yellow)) {
        if (!empty($link)) {
            $link .= ' / ';
        }
        $link .= '<a href="' . url_to('queriesExecute', intval($widget->traffic_secondary_query_id)) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->yellow . '</span></a>';
    }
    if (!empty($widget->result->green) and is_numeric($widget->result->green)) {
        if (!empty($link)) {
            $link .= ' / ';
        }
        $link .= '<a href="' . url_to('queriesExecute', intval($widget->traffic_ternary_query_id)) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->green . '</span></a>';
    }
    if (empty($link)) {
        $link = '<a href="#"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">0</span></a>';
        if (!empty($widget->link)) {
            $link = '<a href="' . base_url() . 'index.php/' . $widget->link . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">0</span></a>';
        }
        $widget->result->color = 'success';
    }

    $icon = '';
    if (str_contains($widget->icon, 'icon-')) {
        $icon = '<span class="' . $widget->icon . ' widget-icon" title=\"' . $widget->description . '\"></span>';
    }
    if (!str_contains($widget->icon, 'icon-')) {
        $icon = '<img src="' . base_url() . 'icons/' . $widget->icon . '.svg" style="width:32px; height:32px;" title=\"' . $widget->description . '\"/>';
    }

    $widget_link = "&nbsp;&nbsp;<a href=\\'" . url_to('widgetsRead', $widget->id) . "\\'>" . __('Edit') . "</a>";

    $help = '<div class="float-end" style="margin-right: -10px;"><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="focus" data-bs-content="' . nl2br(str_replace('"', '\"', __($widget->help_text))) . $widget_link . '"><i class="icon-circle-question-mark" style="color:#74C0FC;"></i></a></div>';

    $return = '<div class="alert alert-' . $widget->result->color . '" role="alert">
        <div class="row">
            <div class="col-8">
                <span style="color: #65758B">' . $widget->primary_text . '</span><br>
                ' . $link . '
                <br>
            </div>
            <div class="col-4 text-center">
                <div class="float-end text-center" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                    ' . $icon . '
                </div>
            </div>
            <div class="row" id="header_row_' . $widget->id . '">
                <div class="col-12">
            ' . $widget->secondary_text . $help . '
                </div>
            </div>
        </div>
    </div>';
    $return = str_replace(PHP_EOL, "", $return);
    return $return;
}

function status_widget($widget)
{
    $link = '<span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->result . '</span>';
    if (!empty($widget->status_link_query_id) and is_numeric($widget->status_link_query_id)) {
        $link = '<a href="' . url_to('queriesExecute', $widget->status_link_query_id) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->result . '</span></a>';
    } else if (!empty($widget->link)) {
        $link = '<a href="' . base_url() . 'index.php/' . $widget->link . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->result . '</span></a>';
    }

    $icon = '';
    if (str_contains($widget->icon, 'icon-')) {
        $icon = '<span class="' . $widget->icon . ' widget-icon" title=\"' . $widget->description . '\"></span>';
    }
    if (!str_contains($widget->icon, 'icon-')) {
        $icon = '<img src="' . base_url() . 'icons/' . $widget->icon . '.svg" style="width:32px; height:32px;" title=\"' . $widget->description . '\"/>';
    }
    $widget_link = "&nbsp;&nbsp;<a href=\\'" . url_to('widgetsRead', $widget->id) . "\\'>" . __('Edit') . "</a>";

    $help = '<div class="float-end" style="margin-right: -10px;"><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="focus" data-bs-content="' . nl2br(htmlentities($widget->help_text)) . $widget_link . '"><i class="icon-circle-question-mark" style="color:#74C0FC;"></i></a></div>';

    $return = '<div class="alert alert-' . $widget->result->color . '" role="alert">
        <div class="row">
            <div class="col-8">
                <span style="color: #65758B">' . $widget->primary_text . '</span><br>
                ' . $link . '
                <br>
            </div>
            <div class="col-4 text-center">
                <div class="float-end text-center" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                    ' . $icon . '
                </div>
            </div>
            <div class="row" id="header_row_' . $widget->id . '">
                <div class="col-12">
            ' . $widget->secondary_text . $help . '
                </div>
            </div>
        </div>
    </div>';
    $return = str_replace(PHP_EOL, "", $return);
    return $return;
}