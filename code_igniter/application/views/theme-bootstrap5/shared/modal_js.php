        <?php
        $free_style = '';
        $comm_style = '';
        $prof_style = '';
        $ente_style = '';
        $clou_style = '';
        $column = 1;
        # oae_license = none || free || commercial
        # oae_product = Open-AudIT Community || Open-AudiT Professional || Open-AudIT Enterprise
        $license = strtolower(str_replace('Open-AudIT ', '', $this->config->config['oae_product']));

        if ($license === 'enterprise') {
            $ente_style = 'active';
            $column = 4;
        } else if ($license === 'professional') {
            $prof_style = 'active';
            $column = 3;
        } else if ($license === 'community') {
            $comm_style = 'active';
            $column = 1;
        }
        if (strtolower($this->config->config['oae_license']) === 'free') {
            $license = 'free';
            $free_style = 'active';
            $column = 2;
        }
        if (empty($this->config->config['oae_license']) or strtolower($this->config->config['oae_license']) === 'none') {
            $license = 'none';
            $free_style = 'active';
            $column = 1;
        }
        ?>

        <script>
        var cancel_redirect_url = window.location.href;

        $(document).ready(function () {
            $('a.buy_more_licenses').click(function(e) {
                e.preventDefault();
                $.get("https://opmantek.com/product_data/open-audit_abi4.json", function(data) {
                    $("#myModalLicense").modal('show');
                    update_modal(data);
                }).fail(function() {
                    $.get("/omk/data/open-audit_abi4.json", function(data){
                    update_modal(data);
                    })
                });
            });

            function update_modal(data) {
                output = "<tr>";
                for (var i = 0; i < data["table"]["header"].length; i++) {
                    output = output + "<th class=\"" + data["table"]["header"][i].class + "\">" + data["table"]["header"][i].text + "</th>";
                }
                output = output + "</tr>";
                $('#feature_table > thead').append(output); 

                output = "";
                for (var i = 0; i < data["table"]["rows"].length; i++) {
                    var row = data["table"]["rows"][i];
                    var class_highlight = '';
                    output = output + "<tr>";
                    for (var j = 0; j < row.length; j++) {
                        if (j === 2) {
                            class_highlight = 'active';
                        } else {
                            class_highlight = '';
                        }
                        output = output + "<td class=\"" + row[j].class + " " + class_highlight + "\">";
                        if (row[j].url) { output = output + "<a href=\"" + row[j].url + "\">"; }
                        output = output + row[j].text;
                        if (row[j].url) { output = output + "</a>"; }
                        output = output + "</td>";
                    }
                    output = output + "</tr>\n";
                }
                $('#feature_table > tbody').append(output);

                $("#modal_text").text(data["modal_text"]);
                $("#modal_header").text(data["modal_header"]);

                $("#com_price_text").text(data["table"]["footer"][1].text);
                $("#fre_price_text").text(data["table"]["footer"][2].text);
                $("#pro_price_text").text(data["table"]["footer"][3].text);
                $("#ent_price_text").text(data["table"]["footer"][4].text);

                $("#pro_price_button").attr("href", data["table"]["footer"][3].button_link + "&return_to_app_name=Open-AudIT" + "&redirect_url=" + window.location.href + "/../purchase_complete" + "&cancel_redirect_url=" + window.location.href + "/../dashboards/execute");
                $("#ent_price_button").attr("href", data["table"]["footer"][4].button_link);
            }
        });
        </script>