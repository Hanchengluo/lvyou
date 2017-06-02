<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/hot_travel.css">
<script type="text/javascript">$("title").html('推荐线路');</script>
</head>
<body>
 <style>
        .w1000{width: 1000px;margin: 0 auto;}
        #top{background-color: rgba(34,35,36,0.95);;padding: 5px 0;color: #ffffff;}
        #top a{color: #ffffff;font-size: 12px;}
        #top_left{margin-left: 10px;float:left;}
        #top_right{float: right;}
        #top_right>li{float:left;padding: 0 12px;}
        #top_right .red_dot{width: 6px; height: 6px;background: #ff0000;position: absolute;right: -2px;top: 3px;border-radius: 50%;}
    </style>
<div id="top" class="w1000x">
    <div id="top_left">Logo</div>
    <ul id="top_right">
        <li><a href="#">我的首页</a></li>
        <li><a href="#">我的帖子</a></li>
        <li><a href="#">我的足迹</a></li>
        <li><a href="#">我的想去</a></li>
        <li><a href="#">我的问答</a></li>
        <li><a href="#">我的订单&nbsp;<i class="fa fa-angle-down"></i></a></li>
        <li><a href="#">我的行程</a></li>
        <li><a href="#">里斯123&nbsp;<i class="fa fa-caret-down"></i></a></li>
        <li><a href="#" style="position: relative;"><i class="fa fa-envelope-o"></i><div class="red_dot"></div></a></li>
    </ul>
    <div style="clear: both;"></div>
</div>
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/dist_top.css">
<div id="place_top">
    <!--1-->
    <div class="plcTopBar w980 clearfix">
        <div id="plcName">
            <p><a href="#">Cinque terre</a></p>
            <p><a href="#">五渔村</a></p>
        </div>
        <div id="plcMeta">
            <span class="mainc">12435</span>人去过这里, <span class="mainc">958</span>条目的地点评
        </div>
    </div>
    <!--1/-->
    <!--2-->
    <div class="plcTopNav w980 clearfix">
        <ul class="L clearfix">
            <li><a href="#">城市概括</a></li>
            <li><a href="#">热门景点</a></li>
            <li><a href="#">当地美食</a></li>
            <li><a href="#">特惠酒店</a></li>
            <li><a href="#">旅游攻略</a></li>
            <li><a href="#">推荐路线</a></li>
            <li><a href="#">结伴出行</a></li>
            <li><a href="#">地图</a></li>
        </ul>
        <div class="R">
            <input id="search" class="search1" type="text">
            <a class="icon_search"><i class="fa fa-search"></i></a>
        </div>
    </div>
    <!--2/-->
</div>
<script src="Public/js/search.js"></script>
<!--主体区 start-->
<div class="C w980 clearfix">
    <!--1-->
    <div class="L">
        <div class="sortMode"><a class="current" href="#">推荐</a><a href="#">人气</a></div>
        <ul class="travelList">
            <li>
                <a class="pic" href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="227" height="150"></a>
                <div class="info">
                    <h3><a href="#">东京迪士尼度假区<span>&nbsp;&nbsp;Tokyo Disney Resort</span></a></h3>
                    <div class="desc">
                        算是马丘比丘里面的一个代表性建筑了，这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。呈半圆形，由...
                    </div>
                </div>
                <div class="zk"><i class="fa fa-star"></i>
                    <span>优选折扣:</span>
                    <a href="#">【世外桃源】秘鲁马丘比丘一日游 (库斯科往返)</a>
                </div>
            </li>
            <li>
                <a class="pic" href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="227" height="150"></a>
                <div class="info">
                    <h3><a href="#">东京迪士尼度假区<span>&nbsp;&nbsp;Tokyo Disney Resort</span></a></h3>
                    <div class="desc">
                        算是马丘比丘里面的一个代表性建筑了，这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。呈半圆形，由...
                    </div>
                </div>
            </li>
            <li>
                <a class="pic" href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="227" height="150"></a>
                <div class="info">
                    <h3><a href="#">东京迪士尼度假区<span>&nbsp;&nbsp;Tokyo Disney Resort</span></a></h3>
                    <div class="desc">
                        算是马丘比丘里面的一个代表性建筑了，这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。呈半圆形，由...
                    </div>
                </div>
                <div class="zk"><i class="fa fa-star"></i>
                    <span>优选折扣:</span>
                    <a href="#">【世外桃源】秘鲁马丘比丘一日游 (库斯科往返)</a>
                </div>
                <div class="zk"><i class="fa fa-star"></i>
                    <span>优选折扣:</span>
                    <a href="#">【世外桃源】秘鲁马丘比丘一日游 (库斯科往返)</a>
                </div>
            </li>
        </ul>
    </div>
    <!--1/-->
    <!--2-->
    <div class="R">
    </div>
    <!--2/-->
</div>
 <style>
        .w1000{width: 1000px;margin: 0 auto;}
        #footer{height:160px;margin-top: 50px;padding-top: 20px;padding-bottom:20px;background-color: rgba(0,0,0,.4)}
        .link{margin: 0 auto;width:960px;}
        .link>li{width: 160px;float:left;text-align: center;}
        .link>li>span{font-size: 20px;line-height: 38px;height:38px;}
        .linklist>li{line-height: 20px;height:20px;}
        .linklist a{color:#000000;}
    </style>
    <div id="footer">
        <!--底部导航-->
        <ul class="link">
            <li>
                <span>关于我们</span>
                <ul class="linklist">
                    <li><a href="#">网站介绍</a></li>
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">合作伙伴</a></li>
                </ul>
            </li>
            <li>
                <span>加入我们</span>
                <ul class="linklist">
                    <li><a href="#">职位招聘</a></li>
                </ul>
            </li>
            <li>
                <span>网站条款</span>
                <ul class="linklist">
                    <li><a href="#">会员条款</a></li>
                    <li><a href="#">社区指南</a></li>
                    <li><a href="#">版权声明</a></li>
                    <li><a href="#">免责声明</a></li>
                </ul>
            </li>
            <li>
                <span>帮助中心</span>
                <ul class="linklist">
                    <li><a href="#">新手上路</a></li>
                    <li><a href="#">使用帮助</a></li>
                    <li><a href="#">网站地图</a></li>
                    <li><a href="#">旅游工具</a></li>
                </ul>
            </li>
            <li>
                <img src="<?php echo ($config['view_public']); ?>img/wxQRCode.jpg" style="width: 130px;height: 130px;"><br />微信公众号
            </li>
            <li>
                <img src="<?php echo ($config['view_public']); ?>img/wxQRCode.jpg" style="width: 130px;height: 130px;"><br />旅游网app下载
            </li>
        </ul>
 </div>
 </body>
 </html>
<!--主体区 end-->
<script>
    $(function() {
    });
</script>
</body>
</html>