<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/index/user.css">
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
    <div><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="380"></div>
    <div id="center" class="w980 clearfix">
        <div id="left">
            <div id="left1">
                <div id="tx">
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg">
                </div>
                <div id="name">小明</div>
                <div id="btn">
                    <div style="margin-right: 10px;">关注</div>
                    <div style="margin-left: 10px;">私信</div>
                </div>
                <div id="num" class="clearfix">
                    <div>
                        <strong><a href="#">0</a></strong>
                        <p>关注</p>
                    </div>
                    <div>
                        <strong><a href="#">0</a></strong>
                        <p>粉丝</p>
                    </div>
                </div>
            </div>
            <div id="left2">
                <div class="title">TA的关注</div>
                <ul class="txlist clearfix">
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                </ul>
            </div>
            <div id="left3">
                <div class="title">最近访客</div>
                <ul class="txlist clearfix">
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                    <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></li>
                </ul>
            </div>
        </div>
        <div id="right">
            <ul id="nav" class="clearfix">
                <li class="current"><a href="?c=index&a=user_wo">TA的窝</a></li>
                <li><a href="?c=index&a=user_yj">TA的游记</a></li>
                <li><a href="?c=index&a=user_wd">TA的问答</a></li>
                <li><a href="?c=index&a=user_zj">TA的足迹</a></li>
                <li><a href="?c=index&a=user_dp">TA的点评</a></li>
                <li><a href="?c=index&a=user_jb">TA的结伴</a></li>
            </ul>
            <script type="text/javascript">$("title").html('TA的点评');</script>
    <style>
        body{background-color: #efefef;}
        #wd{margin-top: 20px;width: 682px;margin-left: 18px;}
        .wd_list{margin-left: 1px;margin-right: 1px;}
        .wd_list>li{padding: 10px 30px 10px 30px;background-color: #ffffff;margin-bottom: 1px;}
        .wd_title a{color: #333;font-size: 20px;line-height: 36px;}
        .wd_title a:hover{color: #ff9d00;}
        .wd_desc{color: #666666;}
        .wd_meta{text-align: right;color: #999999;font-size: 12px;}
    </style>
    <div id="wd" class="w682">
        <ul class="wd_list">
            <li>
                <div class="wd_title"><a href="#">我们能抵达的「世界尽头」究竟在哪？</a></div>
                <div class="wd_desc">
                    一个月前，适逢植树节期间，蚂蜂窝携手银杏基金会共同举办公益活动【梭梭行动】，讲述了一个保卫家乡，植树十年的当代苏武老马哥的故事，号召靠谱有爱的蜂蜂们加入到植树防沙，捍卫民勤的环保事业中。回顾一下活动时的热烈场景吧
                </div>
                <div class="wd_meta">139评论&nbsp;&nbsp;2017-03-25 19:06</div>
            </li>
            <li>
                <div class="wd_title"><a href="#">我们能抵达的「世界尽头」究竟在哪？</a></div>
                <div class="wd_desc">
                    一个月前，适逢植树节期间，蚂蜂窝携手银杏基金会共同举办公益活动【梭梭行动】，讲述了一个保卫家乡，植树十年的当代苏武老马哥的故事，号召靠谱有爱的蜂蜂们加入到植树防沙，捍卫民勤的环保事业中。回顾一下活动时的热烈场景吧
                </div>
                <div class="wd_meta">139评论&nbsp;&nbsp;2017-03-25 19:06</div>
            </li>
            <li>
                <div class="wd_title"><a href="#">我们能抵达的「世界尽头」究竟在哪？</a></div>
                <div class="wd_desc">
                    一个月前，适逢植树节期间，蚂蜂窝携手银杏基金会共同举办公益活动【梭梭行动】，讲述了一个保卫家乡，植树十年的当代苏武老马哥的故事，号召靠谱有爱的蜂蜂们加入到植树防沙，捍卫民勤的环保事业中。回顾一下活动时的热烈场景吧
                </div>
                <div class="wd_meta">139评论&nbsp;&nbsp;2017-03-25 19:06</div>
            </li>
        </ul>
    </div>
        </div>
    </div>
 <style>
        .w1000{width: 1000px;margin: 0 auto;}
        #footer{height:160px;margin-top: 50px;padding-top: 20px;padding-bottom:20px;background-color: rgba(0,0,0,.1);border-top:1px solid rgba(0,0,0,.2) }
        .link{margin: 0 auto;width:960px;}
        .link>li{width: 160px;float:left;text-align: center;}
        .link>li>span{font-size: 16px;line-height: 38px;height:38px;}
        .linklist>li{line-height: 20px;height:20px;}
        .linklist a{color:#666;}
        .linklist a:hover{color:#111;}
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
    var c_href=window.location.href;
    $("#nav>li>a").each(function(){
        var href=$(this).attr("href");
        if(c_href.indexOf(href)!=-1){
//            alert(c_href+"包含"+href);
            $("#nav>li").removeClass();
            $(this).parent().addClass("current");
        }
    });

    $(function() {
        $("#nav>li").click(function(){
            //alert(1);
            $("#nav>.current").removeClass();
            $(this).addClass("current");
        });
    });
</script>
</body>
</html>