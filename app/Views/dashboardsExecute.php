<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$summary_id = 0;
$os_systems_id = 0;
if (!empty($queries) and $resource->sidebar === 'y') {
    foreach ($queries as $query) {
        if ($query->attributes->name === 'Device Types' and $query->type === 'summaries') {
            $summary_id = $query->id;
        }
        if ($query->attributes->name === 'Operating System Names' and $query->type === 'summaries') {
            $os_systems_id = $query->id;
        }
    }
}
$checks = prereqCheck();
$display = false;
foreach ($checks as $key => $value) {
    if ($value !== 'y') {
        $display = true;
    }
}
$temp = explode('x', $resource->options->layout);
$columns = intval($temp[0]);
$rows = intval($temp[1]);
if ($columns === 4) {
    $colWidth = 'col-3';
}
if ($columns === 3) {
    $colWidth = 'col-4';
}
$message = '';
if ($resource->name === 'Windows Security Dashboard') {
    $message = 'NOTE - The queries for Latest Build must be kept up-to-date by the user. Edit and update the build numbers for the Windows x Latest Build <a href="' . url_to('queriesCollection') . '?queries.name=LIKELatest Build">queries</a> as Microsoft updates them.';
}

?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if ($resource->sidebar === 'y') { ?>
                        <div class="col-3">
                             <ul class="list-group list-group-flush">
                                <?php if (!empty($instance->user->permissions['devices']) and strpos($instance->user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-desktop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>"><?= __('Devices') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($summary_id)) { ?>
                                    <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-laptop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('summariesExecute', $summary_id) ?>"><?= __('Device Types') ?></a></div>
                                    </div>
                                </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if (!empty($os_systems_id)) { ?>
                                    <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-tags"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('summariesExecute', $os_systems_id) ?>"><?= __('Operating Systems') ?></a></div>
                                    </div>
                                </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if (!empty($user->permissions['maps']) and strpos($user->permissions['maps'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-map-o"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('mapsCollection') ?>"><?= __('Map') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($user->permissions['discoveries']) and strpos($user->permissions['discoveries'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-binoculars"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('discoveriesCollection') ?>"><?= __('Discoveries') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($user->permissions['devices']) and strpos($user->permissions['devices'], 'r') !== false) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-television"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 10000) ?>"><?= __('Devices Found Today') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-television"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 10001) ?>"><?= __('Devices Found Yesterday') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-television"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 10002) ?>"><?= __('Devices Found Last 7 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-bar-chart"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 20000) ?>"><?= __('Software Found Today') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-bar-chart"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 20001) ?>"><?= __('Software Found Yesterday') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-bar-chart"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 20002) ?>"><?= __('Software Found Last 7 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-server"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 30000) ?>"><?= __('Devices Not Seen 7 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-server"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 30001) ?>"><?= __('Devices Not Seen 30 Days') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-server"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('reportsExecute', 30002) ?>"><?= __('Devices Not Seen 90 Days') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>

                                <?php if ($display) {
                                    echo "<li class=\"list-group-item\">\n"; ?>
                                    <br><h5><?= __('Issues') ?></h5>
                                </li>
                                    <?php foreach ($checks as $key => $value) {
                                        if ($value === 'n') {
                                            echo "<li class=\"list-group-item\">\n"; ?>
                                    <div class="row">
                                        <div class="col-1"><span class="fa-solid fa-triangle-exclamation text-danger"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><?= $key ?>: <a href="<?= url_to('prereq') . '#' . $key ?>"><?= __('Fix') ?></a></div>
                                    </div>
                                </li>
                                        <?php }
                                    }
                                }
                                echo "</ul>\n";

                                if ($config->rss_enable !== "n") { ?>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <br><h5><?= __('News Feed') ?></h5>
                                </li>
                                <li class="list-group-item"></li>
                            </ul>
                            <ul class="list-group list-group-flush fadenews" id="newsfeed">
                                <li class="list-group-item">From the <a style="text-decoration:none;" target="_blank" href="https://docs.community.firstwave.com/wiki/spaces/OA">Open-AudIT wiki</a>.<br>&nbsp;</li>
                            </ul>
                                <?php } ?>
                        </div>
                        <div class="col-9" id="dashboard">
                        <?php } ?>

                        <?php if ($resource->sidebar !== 'y') { ?>
                        <div class="col-12" id="dashboard">
                        <?php }


                        for ($row = 0; $row < $rows; $row++) {
                            echo "<div class=\"row\">\n";
                            for ($col = 1; $col < ($columns + 1); $col++) {
                                foreach ($resource->options->widgets as $widget) {
                                    if ($widget->position == (($row * $columns) + $col)) {
                                        echo "                               <div data-num=\"col $col, row $row, pos $widget->position\" id=\"widget_" . $widget->widget_id . "\" class=\"$colWidth\" style=\"padding: 10px 15px;\"></div>\n";
                                    }
                                }
                            }
                            echo "</div>\n";
                        }
                        ?>


                    </div>
                </div>
            </div>
            <?php if (!empty($message)) { ?>
                <div class="container-fluid">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $message ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php } ?>
        </main>

<script {csp-script-nonce} defer src="<?= base_url('js/highcharts-9.3.1.min.js') ?>"></script>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        /* Only on the dashboardsExecute template */
        $(document).on('click', '#make_my_dashboard_button', function (e) {
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $user->id ?>;
            data["data"]["type"] = 'users';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]['dashboard_id'] = <?= $meta->id ?>;
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('usersRead', $user->id) ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $("#make_my_dashboard_button").attr("disabled", "disabled");
                    $("#liveToastSuccess-header").text("Default Dashboard Updated");
                    $("#liveToastSuccess-body").text("Your default dashboard has been updated.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        $("#button_export_json").remove();
        $("#button_execute").remove();
        $(".delete_link").remove();

        $('.chart-raw-legend').css('overflow-y','visible');

        Highcharts.generictheme = {
            colors: ['#1f284f', '#4a3165', '#7a3671', '#a83a71', '#d14565', '#ef5c51', '#ff7e35', '#ffa600'],
            chart: {
                backgroundColor: '#fff',
            },
            title: {
                style: {
                    color: '#404040',
                    // font: '16px "Trebuchet MS", Verdana, sans-serif'
                }
            },
            subtitle: {
                style: {
                    color: '#404040',
                    // font: '12px "Trebuchet MS", Verdana, sans-serif'
                }
            },
            legend: {
                itemStyle: {
                    color: '#404040',
                    // font: '9pt Trebuchet MS, Verdana, sans-serif',
                },
                itemHoverStyle: {
                    // color: 'gray'
                }
            }
        };

        Highcharts.darktheme = {
            colors: ['#2162F6', '#50ACF0', '#BA7DF0', '#8462FA', '#BC1EF0','#DF82FA', '#F3A8E8','#FF928C','#FF5465', '#FFAC81'],
            chart: {
                backgroundColor: '#222',
            },
            title: {
                style: {
                    color: '#fff',
                }
            },
            subtitle: {
                style: {
                    color: '#fff',
                }
            },
            legend: {
                itemStyle: {
                color: '#fff'
                },
                itemHoverStyle: {
                    color: 'gray'
                }
            }
        };

        Highcharts.setOptions(Highcharts.generictheme);
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            Highcharts.setOptions(Highcharts.darktheme);
        }

        <?php
        foreach ($included['widgets'] as $widget) {
            if (!empty($widget->formatted) and !empty($widget->type) and $widget->type !== 'traffic') {
                $wf = json_encode($widget->formatted);
                $wf = str_replace('"function(event){location.href = this.options.url;}"', 'function(event){location.href = this.options.url;}', $wf);
                echo "\n\tHighcharts.chart(" . html_entity_decode($wf) . ");\n";
            }
        } ?>

        <?php
        foreach ($included['widgets'] as $widget) {
            if (!empty($widget->type) and $widget->type === 'traffic') {
                $html = '<div class="row" style="height:140px;"><div class="col-4 text-center ' .  $widget->result->colour . ' h-100"><span class="' . $widget->result->icon . '" style="font-size:5em; padding-top:30px;"></span></div><div class="col-8 h-100" style="padding-top:14px;"><h5>' . $widget->result->title . '</h5><h4>';
                if (is_numeric($widget->result->red)) {
                    $html .= '&nbsp;<a href="' . url_to('queriesExecute', $widget->result->red_id) . '"><button class="btn btn-danger" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $widget->result->red . '</span></button></a>';
                }
                if (is_numeric($widget->result->yellow)) {
                    $html .= '&nbsp;<a href="' . url_to('queriesExecute', $widget->result->yellow_id) . '"><button class="btn btn-warning" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $widget->result->yellow . '</span></button></a>&nbsp;';
                }
                if (is_numeric($widget->result->green)) {
                    $html .= '<a href="' . url_to('queriesExecute', $widget->result->green_id) . '"><button class="btn btn-success" style="padding-top: 8px; margin-bottom: 0px; border: var(--bs-border-width) solid var(--bs-border-color);" role="button"><span style="margin-bottom: 0px;" class="h3">' . $widget->result->green . '</span></button></a>';
                }
                $html .= '</h4><p><small class="text-body-secondary">' . $widget->result->secondary_text . '</small><br><br><br></p></div></div>';
                echo "$(\"#widget_" . $widget->id . "\").html('" . $html . "');\n";
            }
        }
        ?>

<?php if ($config->rss_enable !== "n" and $resource->sidebar !== 'n') { ?>
        function getDate(days)
        {
            if (days == "") { days = 0; }
            theDate = new Date();
            theDate.setDate(theDate.getDate() - days);
            dd = theDate.getDate();
            mm = theDate.getMonth()+1; // January is 0
            yyyy = theDate.getFullYear();
            if(dd<10){dd='0'+dd}
            if(mm<10){mm='0'+mm}
            returnDate = yyyy+"-"+mm+"-"+dd;
            return returnDate;
        }

        (function (e) {
            e.fn.inewsticker = function (t) {
                var n = {
                    speed: 200,
                    effect: "fade",
                    dir: "ltr",
                    font_size: null,
                    color: null,
                    font_family: null,
                    delay_after: 3e3
                };
                e.extend(n, t);
                var r = e(this);
                var i = r.children();
                i.not(":first").hide();
                r.css("direction", t.dir);
                /* r.css("font-size", t.font_size); */
                r.css("color", t.color);
                r.css("font-family", t.font_family);
                setInterval(function () {
                    var e = r.children();
                    e.not(":first").hide();
                    var n = e.eq(0);
                    var i = e.eq(1);
                    if (t.effect == "fade") {
                        n.fadeOut(function () {
                            i.fadeIn();
                            n.remove().appendTo(r)
                        })
                    }
                }, t.speed);

            }
        })(jQuery)

        var rssurl = "<?= $config->rss_url ?>";
        var rssfeed = $.ajax({
            url: "<?= $config->rss_url ?>",
            ifModified: true
        })
        .done(function(data) {
            var $xml = $(data);
            $xml.find("entry").each(function() {
                var $this = $(this),
                item = {
                    title: $this.find("title").text(),
                    link: $this.find("link").text(),
                    description: $this.find("description").text(),
                    pubDate: $this.find("pubDate").text(),
                    author: $this.find("author").text()
                }
                var li = document.createElement("li");
                var updateDate = new Date($this.find("updated").text());
                var month = parseInt(updateDate.getMonth()) + 1;
                var updatedDate = updateDate.getFullYear() + " / " + month + " / " + updateDate.getDate();
                li.style.display = "none";
                li.className = "list-group-item";
                li.innerHTML = "<span><a style='text-decoration:none;' target='_blank' href='" + $this.find("link").attr("href") + "'>" + $this.find("title").text() + "</a> <br>by " + $this.find("author").text() + " on " + updatedDate + ".</span>";
                document.getElementById("newsfeed").appendChild(li);
            })
        });

        $('.fadenews').inewsticker({
            speed       : 5000,
            effect      : 'fade',
            dir         : 'ltr',
            font_size   : 13,
            color       : '#000',
            font_family : 'arial',
            delay_after : 1000
        });

<?php } ?>
    });
}
</script>

