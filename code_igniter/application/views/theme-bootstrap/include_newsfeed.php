
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        NewsFeed
    </div>
    <div class="panel-body">
        <ul class="fade" id="newsfeed" style="list-style-type: none; opacity: 1;"><li>&nbsp;&nbsp;&nbsp;<img src="../images/oae_sml.png" alt="" />&nbsp;&nbsp;Open-AudIT Community: from the <a target="_blank" href="https://community.opmantek.com/display/OA/Home">Open-AudIT wiki</a>.</li></ul>
    </div>
</div>


<script>
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
            r.css("font-size", t.font_size);
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

var rssurl = "<?php echo htmlspecialchars( $this->config->config['rss_url'] , REPLACE_FLAGS, CHARSET); ?>"
var rssfeed = $.ajax({ url: "<?php echo htmlspecialchars( $this->config->config['rss_url'] , REPLACE_FLAGS, CHARSET); ?>", ifModified: true})
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
        var updatedDate = updateDate.getFullYear() + "/" + month + "/" + updateDate.getDate();
        li.style.display="none";
        li.innerHTML = "&nbsp;&nbsp;&nbsp;<img src=\"../images/oae_sml.png\" />&nbsp;&nbsp;Open-AudIT Community: <a target='_blank' href='" + $this.find("link").attr("href") + "'>" + $this.find("title").text() + "</a> by " + $this.find("author").text() + " on " + updatedDate + ".";
        document.getElementById("newsfeed").appendChild(li);
    })
});

$(document).ready(function() {
    $('.fade').inewsticker({
        speed       : 5000,
        effect      : 'fade',
        dir         : 'ltr',
        font_size   : 13,
        color       : '#000',
        font_family : 'arial',
        delay_after : 1000
    });
});
</script>