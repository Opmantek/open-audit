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
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-desktop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('devicesCollection') ?>"><?= __('Devices') ?></a></div>
                                    </div>
                                </li>
                                <?php if (!empty($summary_id)) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-laptop"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('summariesExecute', $summary_id) ?>"><?= __('Device Types') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if (!empty($os_systems_id)) { ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-tags"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('summariesExecute', $os_systems_id) ?>"><?= __('Operating Systems') ?></a></div>
                                    </div>
                                </li>
                                <?php } ?>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-map-o"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('mapsCollection') ?>"><?= __('Map') ?></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item oa-li-hover">
                                    <div class="row">
                                        <div class="col-1"><span class="fa fa-binoculars"></span></div>
                                        <div class="col-10 col-offset-1" style="padding-left:1rem;"><a href="<?= url_to('discoveriesCollection') ?>"><?= __('Discoveries') ?></a></div>
                                    </div>
                                </li>
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

                                <?php if ($display) {
                                    echo "<li class=\"list-group-item\">\n"; ?>
                                    <br /><h5><?= __('Issues') ?></h5>
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
                                    <br /><h5><?= __('News Feed') ?></h5>
                                </li>
                                <li class="list-group-item"></li>
                            </ul>
                            <ul class="list-group list-group-flush fadenews" id="newsfeed">
                                <li class="list-group-item">From the <a style="text-decoration:none;" target="_blank" href="https://community.opmantek.com/display/OA/Home">Open-AudIT wiki</a>.<br />&nbsp;</li>
                            </ul>
                                <?php } ?>
                        </div>
                        <div class="col-9" id="dashboard">
                        <?php } ?>
                        <?php if ($resource->sidebar !== 'y') { ?>
                        <div class="col-12" id="dashboard">
                        <?php } else { ?>
                        <?php } ?>
                            <div class="row">
                            <?php
                            echo "\n";
                            foreach ($resource->options->widgets as $widget) {
                                echo "\n";
                                if ($widget->{'position'} == 1) {
                                    echo "                               <div id=\"widget_" . $widget->widget_id . "\" class=\"col-4\" style=\"padding: 10px 15px;\"></div>";
                                }
                                if ($widget->{'position'} == 2) {
                                    echo "                               <div id=\"widget_" . $widget->widget_id . "\" class=\"col-4\" style=\"padding: 10px 15px;\"></div>";
                                }
                                if ($widget->{'position'} == 3) {
                                    echo "                               <div id=\"widget_" . $widget->widget_id . "\" class=\"col-4\" style=\"padding: 10px 15px;\"></div>";
                                }
                            } ?>
                            </div>
                            <br>
                            <div class="row">
                            <?php
                            echo "\n";
                            foreach ($resource->options->widgets as $widget) {
                                if ($widget->{'position'} == 4) {
                                    echo "                               <div id=\"widget_" . $widget->widget_id . "\" class=\"col-4\" style=\"padding: 10px 15px;\"></div>\n";
                                }
                                if ($widget->{'position'} == 5) {
                                    echo "                               <div id=\"widget_" . $widget->widget_id . "\" class=\"col-4\" style=\"padding: 10px 15px;\"></div>\n";
                                }
                                if ($widget->{'position'} == 6) {
                                    echo "                               <div id=\"widget_" . $widget->widget_id . "\" class=\"col-4\" style=\"padding: 10px 15px;\"></div>\n";
                                }
                            } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce} src="/open-audit/js/highcharts-9.3.1.min.js"></script>

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
                url: "/open-audit/index.php/users/" + <?= $user->id ?>,
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

        $("#button_execute").remove();
        $(".delete_link").remove();


        $('.chart-raw-legend').css('overflow-y','visible');

        <?php
        foreach ($included['widgets'] as $widget) {
            if (!empty($widget->formatted)) {
                echo "\n\tHighcharts.chart(" . html_entity_decode(json_encode($widget->formatted)) . ");\n";
            }
        } ?>

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
                li.innerHTML = "<span><a style='text-decoration:none;' target='_blank' href='" + $this.find("link").attr("href") + "'>" + $this.find("title").text() + "</a> <br />by " + $this.find("author").text() + " on " + updatedDate + ".</span>";
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

