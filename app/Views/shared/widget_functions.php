<?php

function traffic_widget($widget)
{
            // if (!empty($widget->type) and $widget->type === 'traffic') {
            //     $html = '<div class="row" style="height:140px;"><div class="col-4 text-center ' .  $widget->result->colour . ' h-100"><span class="' . $widget->result->icon . '" style="font-size:5em; padding-top:30px;"></span></div><div class="col-8 h-100" style="padding-top:14px;"><h5>' . $widget->result->title . '</h5><h4>';

            //     if (is_numeric($widget->result->red)) {
            //         $html .= '&nbsp;<a href="' . url_to('queriesExecute', $widget->result->red_id) . '"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $widget->result->red . '</span></button></a>';
            //     }
            //     if (is_numeric($widget->result->yellow)) {
            //         $html .= '&nbsp;<a href="' . url_to('queriesExecute', $widget->result->yellow_id) . '"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $widget->result->yellow . '</span></button></a>&nbsp;';
            //     }
            //     if (is_numeric($widget->result->green)) {
            //         $html .= '<a href="' . url_to('queriesExecute', $widget->result->green_id) . '"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $widget->result->green . '</span></button></a>';
            //     }
            //     $html .= '</h4><p><small class="text-body-secondary">' . $widget->result->secondary_text . '</small><br><br><br></p></div></div>';
            //     echo "$(\"#widget_" . $widget->id . "\").html('" . $html . "');\n";
            // }

    $count = 0;
    $link = '';

    if (!empty($widget->result->red) and is_numeric($widget->result->red)) {
        $link = '<a href="' . url_to('queriesExecute', $widget->result->red_id) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->red . '</span></a>';

    }
    if (!empty($widget->result->yellow) and is_numeric($widget->result->yellow)) {
        if (!empty($link)) {
            $link .= ' / ';
        }
        $link .= '<a href="' . url_to('queriesExecute', intval($widget->result->yellow_id)) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->yellow . '</span></a>';
    }
    if (!empty($widget->result->green) and is_numeric($widget->result->green)) {
        if (!empty($link)) {
            $link .= ' / ';
        }
        $link .= '<a href="' . url_to('queriesExecute', intval($widget->result->green_id)) . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">' . $widget->result->green . '</span></a>';
    }
    if (empty($link)) {
        $link = '<a href="#"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">0</span></a>';
        if (!empty($widget->link)) {
            $link = '<a href="' . base_url() . $widget->link . '"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;">0</span></a>';
            log_message('debug', $widget->link);
            log_message('debug', $link);
        }
        $widget->result->colour = 'success';
    }

    $help = '<div class="float-end" style="margin-right: -10px;"><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="focus" data-bs-content="' . nl2br(str_replace('"', '\"', __($widget->description))) . '"><i class="icon-circle-question-mark" style="color:#74C0FC;"></i></a></div>';

    $return = '<div class="alert alert-' . $widget->result->colour . '" role="alert">
        <div class="row">
            <div class="col-8">
                <span style="color: #65758B">' . $widget->result->title . '</span><br>
                ' . $link . '
                <br>
            </div>
            <div class="col-4 text-center">
                <div class="float-end" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                    <img src="' . base_url() . 'icons/' . $widget->result->icon . '.svg" style="width:32px; height:32px;" title=\"' . $widget->description . '\"/>
                </div>
            </div>
            <div class="row" id="header_row_' . $widget->id . '">
                <div class="col-12">
            ' . $widget->result->secondary_text . $help . '
                </div>
            </div>
        </div>
    </div>';
    $return = str_replace("\n", "", $return);
    return $return;
}