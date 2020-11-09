<!--
xcsoft版权所有 | 盗版必究
http://blog.xsot.cn
V2.2
2020/01/26
-->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <title>星辰表白墙</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico" media="screen" />
  <style>
    a {
      text-decoration:none
    }
    a:hover {
      text-decoration:none
    }
  </style>
</head>
<header class="mdui-appbar mdui-appbar-fixed">
  <body background="./assets/img/background.png" class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-white">
    <div class="mdui-toolbar mdui-color-theme">
      <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer'}">
        <i class="mdui-icon material-icons">menu</i>
      </span>
      <a href="" class="mdui-typo-title">星辰表白墙</a>
    </header>
            
    <script src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>   
    <script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
      

     <div class="mdui-drawer" id="main-drawer">
      <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 68px;">
        <div class="mdui-list">
          <a href="/" class="mdui-list-item">
            <i class="mdui-list-item-icon mdui-icon material-icons">filter_none</i>
            &emsp;主页
          </a>
          <a href="./add.php" class="mdui-list-item">
            <i class="mdui-list-item-icon mdui-icon material-icons">favorite_border</i>
            &emsp;表白
          </a>
        </div>
        <a href="./about.php" class="mdui-list-item">
          <i class="mdui-list-item-icon mdui-icon material-icons">info_outline</i>
          &emsp;关于
        </a>
        <div class="mdui-collapse-item ">
          <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">&#xe80d;</i>
            &emsp;友链
            <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
          </div>
          <div class="mdui-collapse-item-body mdui-list">
            <a href="//blog.xsot.cn" class="mdui-list-item mdui-ripple ">星辰日记</a>
          </div>
        </div>
      </div>
    </div>
    <br />


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css"/>
<script src="https://cdn.jsdelivr.net/gh/stevenjoezhang/live2d-widget/autoload.js"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/live2d-widget@3.0.4/lib/L2Dwidget.min.js"></script>
    <script>
        L2Dwidget.init();
    </script>
</body>
</html>
<script type="text/javascript">
/* 鼠标特效 */
var a_idx = 0;
jQuery(document).ready(function($) {
    $("body").click(function(e) {
        var a = new Array("信心", "决心", "耐心", "苦心", "爱心", "专心", "匠心" );
        var $i = $("<span />").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
        var x = e.pageX,
        y = e.pageY;
        $i.css({
            "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
            "top": y - 20,
            "left": x,
            "position": "absolute",
            "font-weight": "bold",
            "color": "#ff6651"
        });
        $("body").append($i);
        $i.animate({
            "top": y - 180,
            "opacity": 0
        },
        2200,
        function() {
            $i.remove();
        });
    });
});
</script>

