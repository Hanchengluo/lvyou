<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/lib/swiper/swiper-3.3.1.min.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/user/user_index.css">
<script type="text/javascript">$("title").html('商城主页');</script>
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
<!--顶部 start-->
<div id="user_top">
    <!--1-->
    <div class="u_banner">
        <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="360px">
        <div id="btn_upload_img" hidden>上传图片</div>
        <input type="file" name="u_pic" hidden>
    </div>
    <!--1/-->
    <!--2-->
    <div class="u_info w980">
        <div class="u_tx">
            <a><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="120px"></a>
        </div>
        <div class="info">
            <span>里斯</span><span>VIP12</span>
            <a href="#">签到</a><a href="#">消息</a>
        </div>
    </div>
    <!--2/-->
</div>
<!--顶部 end-->
<!--主体区 start-->
<div class="user_c w980 clearfix">
    <div class="L">
        <ul class="leftNav">
            <li class="current"><a href="#">我的收藏</a></li>
            <li><a href="#">我的锦囊</a></li>
            <li><a href="#">我的订单</a></li>
            <li><a href="#">优惠券</a></li>
            <li><a href="#">我的帖子</a></li>
            <li><a href="#">我的提问</a></li>
            <li><a href="#">会员充值</a></li>
        </ul>
    </div>
    <div class="R">
        <ul id="nav" class="clearfix">
            <li class="current"><a href="#">TA的窝</a></li>
            <li><a href="#">TA的游记</a></li>
            <li><a href="#">TA的问答</a></li>
            <li><a href="#">TA的足迹</a></li>
            <li><a href="#">TA的点评</a></li>
            <li><a href="#">TA的结伴</a></li>
        </ul>

    </div>
</div>
<!--主体区 end-->
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
<script>
    $(function() {
        //显示/隐藏 上传图片 按钮
        $(".u_banner").hover(function(){
            $("#btn_upload_img").show();
        },function(){
            $("#btn_upload_img").hide();
        });
        //右侧顶部导航点击
        $("#nav>li").click(function(){
            //alert(1);
            $("#nav>.current").removeClass();
            $(this).addClass("current");
        });
    });
</script>
</body>
</html>