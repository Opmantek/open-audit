<style type="text/css">

    #overlay {
        position:fixed; 
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:#000;
        opacity:0.5;
        filter:alpha(opacity=50);
    }

    #modal {
        position:absolute;
        background:url(/open-audit/images/tint20.png) 0 0 repeat;
        background:rgba(0,0,0,0.2);
        border-radius:14px;
        padding:8px;
        width:1000px;
    }

    #content {
        border-radius:8px;
        background:#fff;
        padding:20px;
    }

    #close {
        position:absolute;
        background:url(/open-audit/images/close.png) 0 0 no-repeat;
        width:24px;
        height:27px;
        display:block;
        text-indent:-9999px;
        top:-7px;
        right:-7px;
    }

</style>

<script type="text/javascript">

    $('a#buy_more_licenses').click(function(e){
        // get from opmantek.com
        $.get('https://opmantek.com/product_data/oae.json', function(data){
            modal.open({content: data, source: "online"});
            highlightColumn();
        })
        .fail(function() {
            // get from OAC
                $.get('/omk/data/oae.json', function(data){
                modal.open({content: data, source: "offline"});
                highlightColumn();
            })
        });
    });

    var modal = (function(){
        var
        method = {},
        $overlay,
        $modal,
        $content,
        $close;

        // Center the modal in the viewport
        method.center = function () {
            var top, left;
            top = Math.max($(window).height() - $modal.outerHeight(), 0) / 3;
            top = 30;
            left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;
            $modal.css({
                top:top + $(window).scrollTop(),
                left:left + $(window).scrollLeft()
            });
        };

        // Open the modal
       method.open = function (settings) {
            // our generic output container column_variable
            var output = "";
            // setup our highlighting column
            var highlight_column = "";
            var device_count = <?php echo $this->config->config['device_count']; ?>;
            license = "<?php echo $this->config->config['oae_license']; ?>";
            if (device_count < 20 && (license == "none" || license == "")) { highlight_column = "Enterprise 20 Nodes Free"; }
            if (device_count < 20 && license == "free") { highlight_column = "Enterprise 100 Nodes"; }
            if (device_count < 20 && license == "commercial") { highlight_column = "Enterprise 100 Nodes"; }
            if (device_count > 20) { highlight_column = "Enterprise 100 Nodes"; }
            if (device_count > 100) { highlight_column = "Enterprise 500 Nodes"; }
            if (device_count > 500) { highlight_column = "Enterprise X Nodes"; }
            // css from OAE / Bootstrap
            $content.empty().append("<link href=\"/open-audit/css/bootstrap.min.css\" rel=\"stylesheet\" />");
            if (license == "none") {
                $content.append('<h1>'+settings.content["header"][0]["text_nolicense"]+'</h1><span>'+settings.content["top_message_nolicense"]+'</span>');
            } else {
                $content.append('<h1>'+settings.content["header"][0]["text"]+'</h1><span>'+settings.content["top_message"]+'</span>');
            }
            $content.append('<br /><br />');
            // table
            var table = '<div id="modal_content"><table class="table table-bordered" id="nodeTable" width="100%">';
            // table header
            var colCount = 0;
            var count = 0;
            for (var i = 0; i < settings.content["table"]["header"].length; i++) {
                table += "<th style=\"vertical-align:middle;\" class=\""+settings.content["table"]["header"][i]["class"]+"\">"+settings.content["table"]["header"][i]["text"]+"</th>";
                if (settings.content["table"]["header"][i]["text"] == highlight_column) {
                    count = colCount;
                }
                colCount++;
            }
            // table rows
            var tableDataJsonRows = settings.content["table"]["rows"];
            var rowData = "";
            for (var i = 0; i < tableDataJsonRows.length; i++) {
                var row = tableDataJsonRows[i];
                rowData = "<tr>";
                for (var j = 0; j < row.length; j++) {
                    classText = row[j]["class"];
                    classText = classText.replace(" info", "");
                    if (j == count) {
                        classText = classText + " info";
                    }
                    if (row[j].hasOwnProperty("button")) {
                         if (row[j]["button"] === "Activate" && license == "free") {
                            rowData += '<td class="'+classText+'">'+row[j]["text"]+'<form action="/omk/opLicense/delete/Open-AudIT%20Enterprise" method="POST"><button type="submit" class="btn btn-success btn-sm" data-title="Immediately removes this license">Deactivate</button></form></td>';

                        } else if (row[j]["button"] === "Activate" && license == "none") {
                            rowData += '<td class="'+classText+'">'+row[j]["text"]+'<br /><a class="btn btn-success btn-sm" style="color:white;" href="/omk/oae/license_free">'+row[j]["button"]+'</a></td>';

                        } else if (row[j]["button"] === "Activate" && license == "commercial") {
                            rowData += '<td class="'+classText+'">'+row[j]["text"]+'</td>';

                        } else {
                            rowData += '<td class="'+classText+'">';
                            if (settings.source == "online") {
                                rowData += row[j]["text"];
                            }
                            if (row[j]["button_link"] == "/omk/opLicense/") {
                                rowData += '<br /><a class="btn btn-success btn-sm" style="color:white;" href="'+row[j]["button_link"]+'">'+row[j]["button"]+'</a>';
                            } else {
                                if (row[j]["button"] == "Buy") {
                                rowData += '<br /><a class="btn btn-success btn-sm" style="color:white;" href="'+row[j]["button_link"]+'http://'+location.host+'<?php echo $this->config->config['oae_url']; ?>/purchase_complete&cancel_redirect_url='+window.location.href+'">'+row[j]["button"]+'</a>';
                                } else {
                                    rowData += '<br /><a class="btn btn-success btn-sm" style="color:white;" href="'+row[j]["button_link"]+'" target="_blank">'+row[j]["button"]+'</a>';
                                }
                            }
                            rowData += '</td>';
                        }
                    } else {
                        if (row[j].hasOwnProperty("image")) {
                            rowData += '<td class="'+classText+'">'+row[j]["text"]+'<div class="pull-right"><span class="glyphicon glyphicon-camera" aria-hidden="true" onmouseover="imageModal(\''+row[j]["text"]+'\',\''+row[j]["image"]+'\');"></span></div></td>';
                        } else {
                            rowData += '<td class="'+classText+'">'+row[j]["text"]+'</td>';
                        }
                    }
                }
                rowData += "</tr>";
                table += rowData;
            }

            // end of table
            table += "</table></div>";
            $content.append(table);
            // bottom message
            if (settings.content["bottom_message"] != "") {
                $content.append("<span>"+settings.content["bottom_message"]+"</span><br />\n");
            }
            // footer
            var footer = settings.content["footer"];
            var output = "";
            for (var i = 0; i < footer.length; i++) {
                var button_link = footer[i]["button_link"];
                if (button_link == "prompt_never") {
                    button_link = "/open-audit/index.php/admin_config/update_config/oae_prompt/-";
                    output += "<span id=\"button_prompt_never\" style=\""+footer[i]["button_parent_style"]+"\"><a class=\"btn btn-default btn-sm\" href=\""+button_link+"\">"+footer[i]["button"]+"</a></span>\n";
                }
                if (button_link == "prompt_later") {
                    button_link = "/open-audit/index.php/admin_config/update_config/oae_prompt/1";
                    output += "<span id=\"button_prompt_later\"style=\""+footer[i]["button_parent_style"]+"\"><a class=\"btn btn-default btn-sm\" href=\""+button_link+"\">"+footer[i]["button"]+"</a></span>\n";
                }
                //output += "<span style=\""+footer[i]["button_parent_style"]+"\"><a class=\"btn btn-default btn-sm\" href=\""+button_link+"\">"+footer[i]["button"]+"</a></span>\n";
            }
            $content.append(output);
            output = "<br /></dv>\n";
            $content.append(output);
            $modal.css({
                //width: settings.width || 'auto',
                width: settings.width || '1000px',
                height: settings.height || 'auto'
            });
            method.center();
            $(window).bind('resize.modal', method.center);
            $modal.show();
            $overlay.show();
        };

        // Close the modal
        method.close = function () {
            $modal.hide();
            $overlay.hide();
            $content.empty();
            $(window).unbind('resize.modal');
        };

        // Generate the HTML and add it to the document
        $overlay = $('<div id="overlay"></div>');
        $modal = $('<div id="modal"></div>');
        $content = $('<div id="content"></div>');
        $close = $('<a id="close" href="#">close</a>');

        $modal.hide();
        $overlay.hide();
        $modal.append($content, $close);

        $(document).ready(function(){
            $('body').append($overlay, $modal);
        });

        $close.click(function(e){
            e.preventDefault();
            method.close();
        });

        return method;
    }());

    <?php if ($include == 'v_main' and $this->config->config['oae_prompt'] <= date('Y-m-d') and ($license != 'commercial')) { ?>
    // Wait until the DOM has loaded before querying the document
    $(document).ready(function(){
        // get from opmantek.com
        $.get('https://opmantek.com/product_data/oae.json', function(data){
            modal.open({content: data, source: "online"});
        })
        .fail(function() {
            // get from OAE
                $.get('/omk/data/oae.json', function(data){
                modal.open({content: data, source: "offline"});
            })
        });
    });
    <?php } ?>

    // add a keydown even for the escape key to close the modal
    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            modal.close();
        }
    });

function imageModal(title, image) {
    //document.getElementById("imageModalLabel").innerHTML = title;
    modal_content_original = document.getElementById("modal_content").innerHTML;
    modal_content_image = '<div class="row"><div class="col-md-6"><h3>'+title+'</h3></div>';
    modal_content_image = modal_content_image+'<div class="col-md-6 text-right"><br /><a class="btn btn-default btn-sm" href="#" onclick="removeImageModal();">Back</a></div></div>';
    modal_content_image = modal_content_image+'<a href="#" onclick="removeImageModal();"><img id="modalImage" src="/omk/img/'+image+'" style="width: 800px;" /></a>';
    document.getElementById("modal_content").innerHTML = modal_content_image;
    document.getElementById("button_prompt_later").innerHTML = "<a class=\"btn btn-default btn-sm\" href=\"#\" onclick=\"removeImageModal();\">Back</a>";
    document.getElementById("button_prompt_never").innerHTML = "";
}

function removeImageModal() {
    document.getElementById("modal_content").innerHTML = modal_content_original;
    document.getElementById("button_prompt_later").innerHTML = "<a class=\"btn btn-default btn-sm\" href=\"/open-audit/index.php/admin_config/update_config/oae_prompt/1\">Ask me later</a>";
    document.getElementById("button_prompt_never").innerHTML = "<a class=\"btn btn-default btn-sm\" href=\"/open-audit/index.php/admin_config/update_config/oae_prompt/-\">Do now show me again</a>";
}

</script>