$(function () {
  $(".header").load("/module/header.html");
  $(".footer").load("/module/footer.html");
  $(".talk").load("/module/talk.html");
});

if (screen.width < 300)
  window.location.href = "/module/toonarrow.html";

console.log("欢迎对本站进行F12调试，Bug反馈，优化建议等请联系我们：maqingshui@outlook.com")

var a_idx = 0;
jQuery(document).ready(function($) {
    $("body").click(function(e) {
        var a = new Array("富强","民主","文明","和谐","自由","平等","公正","法制","爱国","敬业","诚信","友善");
        var $i = $("<span id='click'></span>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
        var x = e.pageX,
        y = e.pageY;
        $i.css({
            "z-index": 100,
            "top": y - 20,
            "left": x,
            "position": "absolute",
            "font-weight": "bold",
            "color": "rgb("+~~(255*Math.random())+","+~~(255*Math.random())+","+~~(255*Math.random())+")"
        });
        $("body").append($i);
        $i.animate({
            "top": y - 180,
            "opacity": 0
        },
        1500,
        function() {
            $i.remove();
        });
    });
});