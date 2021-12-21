<script>

    <?php if (($include == 'v_summaries_collection' or $include == 'v_groups_collection') and $this->config->config['oae_prompt'] <= date('Y-m-d') and ($this->config->config['oae_license'] != 'commercial')) { ?>
    // Wait until the DOM has loaded before querying the document
    $(document).ready(function(){
        // get from opmantek.com
        $.get('https://opmantek.com/product_data/open-audit.json', function(data){
            modal.open({content: data, source: "online"});
        })
        .fail(function() {
            // get from OAE
                $.get('/omk/data/open-audit.json', function(data){
                modal.open({content: data, source: "offline"});
            })
        });
    });
    <?php } ?>

    // Menu click response
    $('a#buy_more_licenses').click(function(e){
        // get from opmantek.com
        // $.get('/omk/data/open-audit.json', function(data){
        $.get('https://opmantek.com/product_data/open-audit.json', function(data){
            //console.log(data.version);
            modal.open({content: data, source: "online"});
        })
        .fail(function() {
            // get from OAC
            $.get('/omk/data/open-audit.json', function(data){
            modal.open({content: data, source: "offline"});
            })
        });
    });

    var modal = (function(){
        var
        method = {},
        $overlay,
        $content,
        $data,
        $close;

        // Center the modal in the viewport
        method.center = function () {
            var top, left;
            // top = Math.max($(window).height() - $modal.outerHeight(), 0) / 3;
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
            data = settings.content;
            $content.empty();

output += "<div class=\"modal-header\">\
    <h4>" + data.header[0].text + "</h4>\
</div>\
<div class=\"modal-body\">\
    <span>" + data.top_message + "</span>";


            output += "<div class=\"row market-row\">\
                <div class=\"col-md-12\">\
                    <h4>" + data.promotion.header.text + "</h4>\
                </div>\
            </div>";
            $content.append(output);
            output = "";
            output += "<div class=\"row market-row\">";
                 for (var i = 0; i < data.promotion.rows.length; i++) {
                    output += "<div class=\"" + data['promotion']['columnSize'] + "\">\
                        <div class=\"" + data['promotion']['cellClass'] + "\">\
                            <div class=\"row\">\
                                <div class=\"col-md-6\">\
                                    <h5 class=\"op-site-purple\">" + data.promotion.rows[i].title + "</h5>\
                                </div>\
                                <div class=\"col-md-6\">\
                                    <small class=\"pull-right\">" + data.promotion.rows[i].tag + "</small>\
                                </div>\
                            </div>\
                            <div class=\"row\">\
                                <div class=\"col-md-12\">\
                                    <p class=\"market-cell-text\">" + data.promotion.rows[i].text + "</p>\
                                </div>\
                            </div>\
                            <div class=\"row\">\
                                <div class=\"col-md-12\">\
                                    <a class=\"pull-right\" href=\"" + data.promotion.rows[i].linkURI + "\">" + data.promotion.rows[i].link + "</a>\
                                </div>\
                            </div>\
                        </div>\
                    </div>";
                 }
            output += "</div>";
            $content.append(output);
            output = "";




output += "<div class=\"row market-row\">\
         <div class=\"col-md-8\">\
            <h4>" + data.compare.header.text + "</h4>\
        </div>\
        <div class=\"col-md-4\">\
            <small class=\"pull-right\">" + data.compare.currencies[0].text + "</small>\
        </div>\
    </div>\
    <div class=\"row market-row\">"
        for (var j = 0; j < data.compare.editions.length; j++) {
        output += "<div class=\"" + data.compare.columnSize + "\">\
            <div class=\"panel panel-default market-compare-panel\">\
                <div class=\"panel-heading market-panel-heading " + data.compare.editions[j].headerClass + "\">\
                    <h4>" + data.compare.editions[j].title + "</h4>\
                </div>\
                <div class=\"panel-body\">\
                    <div class=\"row\">\
                        <div class=\"col-md-12\">\
                            <p class=\"market-cell-text\">" + data.compare.editions[j].text + "</p>\
                        </div>\
                    </div>\
                    <div class=\"row\">\
                        <div class=\"col-md-12\">\
                           <h3 class=\"text-center market-compare-price\">" + data.compare.editions[j].packages[0].prices[0].USD + "</h3>\
                        </div>\
                    </div>\
                    <div class=\"row\">\
                        <div class=\"col-md-12\">\
                           <h4 class=\"text-center market-compare-text\">" + data.compare.editions[j].packages[0].text + "</h4>\
                        </div>\
                    </div>\
                    <div class=\"row\">\
                        <div class=\"col-md-12\">";
                          if (data.compare.editions[j].packages[0].url) {
                            output += "<a href=\"" + data.compare.editions[j].packages[0].url + "\" class=\"btn btn-block " + data.compare.editions[j].buttonClass + "\">" + data.compare.editions[j].buttonText + "</a>";
                        } else {
                            output += "<a href=\"" + data.compare.storeURL + "&cart_id=" + data.compare.editions[j].packages[0].productCode + "&return_to_app_name=Open-AudIT&redirect_url=" + location.protocol + "//" + location.host + "/omk/open-audit/purchase_complete&cancel_redirect_url=" + window.location.href + "\" class=\"btn btn-block " + data.compare.editions[j].buttonClass + "\"> " + data.compare.editions[j].buttonText + "</a>";
                        }
                        output += "</div>\
                    </div>\
                </div>";
                if (data.compare.editions[j].packages.length > 1) {
                    output += "<ul class=\"list-group\">";
                        for (var x = 1; x < data.compare.editions[j].packages.length; x++) {
                            if (data.compare.editions[j].packages[x].url) {
                                output += "<li class=\"list-group-item\"><a href=\"" + data.compare.editions[j].packages[x].url + "\"> " + data.compare.editions[j].packages[x].text + " " + data.compare.editions[j].packages[x].prices[0].USD + "</a></li>";
                            } else {
                                output += "<li class=\"list-group-item\"><a href=\"" + data.compare.storeURL + "&cart_id=" + data.compare.editions[j].packages[x].productCode + "&return_to_app_name=Open-AudIT&redirect_url=" + location.protocol + "//" + location.host + "/omk/open-audit/purchase_complete&cancel_redirect_url=" + window.location.href + "\"> " + data.compare.editions[j].packages[x].text + " " + data.compare.editions[j].packages[x].prices[0].USD + "</a></li>";
                            }
                        }
                    output += "</ul>";
                 }
            output += "</div>\
        </div>";
        }
    output += "</div>\
    <div class=\"row market-row\">";
        for (var q = 0; q < data.compare.editions.length; q++) {
            output += "<div class=\"col-md-4\">\
                <ul class=\"fa-ul\">";
                    for (var w = 0; w < data.compare.editions[q].features.length; w++) {
                        if (data.compare.editions[q].features[w].url) {
                            output += "<li><i class=\"fa-li fa fa-check blue-check " + data.compare.editions[q].features[w].class + "\"></i><a class=\"" + data.compare.editions[q].features[w].class + "\" href=\"" + data.compare.editions[q].features[w].url + "\">" + data.compare.editions[q].features[w].text + "</a></li>";
                        } else {
                            output += "<li><i class=\"fa-li fa fa-check blue-check " + data.compare.editions[q].features[w].class + "\"></i><span class=\"" + data.compare.editions[q].features[w].class + "\">" + data.compare.editions[q].features[w].text + "</span></li>";
                        }
                    }
                output += "</ul>\
            </div>";
        }
    output += "</div>";
            $content.append(output);



            // footer
            <?php if (($include == 'v_summaries_collection' or $include == 'v_groups_collection') and $this->config->config['oae_prompt'] <= date('Y-m-d') and ($this->config->config['oae_license'] != 'commercial')) { ?>
            var footer = settings.content["footer"];
            var output = "";
            for (var i = 0; i < footer.length; i++) {
                var button_link = footer[i]["button_link"];
                if (button_link == "prompt_never") {
                    output += "<span id=\"button_prompt_never\" style=\""+footer[i]["button_parent_style"]+"\"><a class=\"btn btn-default btn-sm dismiss_modal_button\" href=\"#\" data-value=\"2100-01-01\">"+footer[i]["button"]+"</a></span>\n";
                }
                if (button_link == "prompt_later") {
                    output += "<span id=\"button_prompt_later\"style=\""+footer[i]["button_parent_style"]+"\"><a class=\"btn btn-default btn-sm dismiss_modal_button\" href=\"#\" data-value=\"<?php echo date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 day')); ?>\">"+footer[i]["button"]+"</a></span>\n";
                }
            }
            $content.append(output);
            output = "<br /></dv>\n";
            $content.append(output);
            <?php } ?>
            $modal.css({
                //width: settings.width || 'auto',
                width: settings.width || '900px',
                height: settings.height || 'auto'
            });
            method.center();
            $(window).bind('resize.modal', method.center);
            $modal.show();
            $overlay.show();
            $overlay.css("z-index", "1499");
            $modal.css("z-index", "1500");
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

    <?php if (($include == 'v_summaries_collection' or $include == 'v_groups_collection') and $this->config->config['oae_prompt'] <= date('Y-m-d') and ($this->config->config['oae_license'] != 'commercial')) { ?>
    // Wait until the DOM has loaded before querying the document
    $(document).ready(function(){
        // get from opmantek.com
        $.get('https://opmantek.com/product_data/open-audit.json', function(data){
            modal.open({content: data, source: "online"});
        })
        .fail(function() {
            // get from OAE
                $.get('/omk/data/open-audit.json', function(data){
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

/* inline edit */
$(document).ready(function () {
    $(document).on('click', '.dismiss_modal_button', function (e) {
        var value = $(this).attr("data-value");
        //alert("Value is:"+value);
        var data = {};
        data["data"] = {};
        data["data"]["id"] = "oae_prompt";
        data["data"]["type"] = "configuration";
        data["data"]["attributes"] = {};
        data["data"]["attributes"]["value"] = value;
        data["data"]["attributes"]["name"] = "oae_prompt";
        data = JSON.stringify(data);
        $.ajax({
            type: "PATCH",
            url: "configuration/oae_prompt",
            contentType: "application/json",
            data: {data : data},
            success: function (data) {
                /* alert( 'success' ); */
            },
            error: function (data) {
                data = JSON.parse(data.responseText);
                alert(data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail);
            }
        });
        modal.close();
    });
});

</script>