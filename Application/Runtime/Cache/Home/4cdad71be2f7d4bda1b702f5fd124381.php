<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/user/user_index.css">
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
        <input type="file" name="u_pic" id="u_pic" hidden>
    </div>
    <!--1/-->
    <!--2-->
    <div class="u_info w980">
        <div class="u_tx">
            <a><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="120px"></a>
        </div>
        <div class="info">
            <span>里斯</span><span>VIP12</span>
            <a href="#">签到</a><a href="?c=user&a=message">消息</a>
        </div>
    </div>
    <!--2/-->
</div>
<!--顶部 end-->
<!--主体区 start-->
<div class="user_c w980 clearfix">
    <div class="L">
        <ul class="leftNav">
            <li><a href="?c=user&a=collect">我的收藏</a></li>
            <li><a href="?c=user&a=message">我的锦囊</a></li>
            <li><a href="?c=user&a=order">我的订单</a></li>
            <li><a href="?c=user&a=yhq">优惠券</a></li>
            <li><a href="?c=user&a=tie">我的帖子</a></li>
            <li><a href="?c=user&a=jieban">我的结伴</a></li>
            <li><a href="?c=user&a=question">我的提问</a></li>
            <li><a href="?c=user&a=cz">会员充值</a></li>
        </ul>
    </div>
    <div class="R">
        <ul id="nav" class="clearfix">
            <li class="current"><a href="?c=user&a=index">TA的窝</a></li>
            <li><a href="?c=user&a=user_yj">TA的游记</a></li>
            <li><a href="?c=user&a=user_wd">TA的问答</a></li>
            <li><a href="?c=user&a=user_zj">TA的足迹</a></li>
            <li><a href="?c=user&a=user_dp">TA的点评</a></li>
            <li><a href="?c=user&a=user_jb">TA的结伴</a></li>
        </ul>
        <div style="margin-left: -18px;">
        <script type="text/javascript">$("title").html('TA的点评');</script>
    <style>
        body{background-color: #efefef;}
        #yj{margin-top: 20px;width: 682px;margin-left: 18px;}
        .yj_list{margin-left: 1px;margin-right: 1px;margin-top: 12px;background-color: #ffffff;}
        .yj_list>li{padding-bottom: 30px;}
        .yj_list .yj_info{padding: 10px 30px 0 30px;}
        .yj_list .yj_title>.title_info{width: 500px;float: left;}
        .yj_list .yj_title>.zan{float: right;text-align: center;color: #999999;}
        .yj_list .yj_title>.zan:hover{cursor: pointer;}
        .yj_list .yj_title>.zan:hover i{color: #ff8a00;}
        .title_info h3 a{font-size: 18px;color: #ff8a00;}
        .title_info h3 a:hover{text-decoration: underline;}
        .title_info div{margin-top: 10px;color: #999;}
        .yj_word{color: #666666;margin-top: 12px;}
    </style>
    <div id="yj" class="w682">
        <ul class="yj_list">
            <li>
                <div class="yj_img"><a><img src="<?php echo ($config['view_public']); ?>img/yj_img.jpeg"></a></div>
                <div class="yj_info">
                    <div class="yj_title clearfix">
                        <div class="zan"><i class="fa fa-thumbs-o-up" style="font-size: 30px;"></i><p>999</p></div>
                        <div class="title_info">
                            <h3><a href="#">C9计划·秋酷大趴 │ 一次特殊的外太空旅行一次特殊的外太空旅行</a></h3>
                            <div><span>2017-05-06 13:06:09</span><span style="float: right;">预览&nbsp;156</span></div>
                        </div>
                    </div>
                    <div class="yj_word">
                        一个月前，适逢植树节期间，蚂蜂窝携手银杏基金会共同举办公益活动【梭梭行动】，讲述了一个保卫家乡，植树十年的当代苏武老马哥的故事，号召靠谱有爱的蜂蜂们加入到植树防沙，捍卫民勤的环保事业中。回顾一下活动时的热烈场景吧
                    </div>
                </div>
            </li>
            <li>
                <div class="yj_img"><a><img src="<?php echo ($config['view_public']); ?>img/yj_img.jpeg"></a></div>
                <div class="yj_info">
                    <div class="yj_title clearfix">
                        <div class="zan"><i class="fa fa-thumbs-o-up" style="font-size: 30px;"></i><p>999</p></div>
                        <div class="title_info">
                            <h3><a href="#">C9计划·秋酷大趴 │ 一次特殊的外太空旅行一次特殊的外太空旅行</a></h3>
                            <div><span>2017-05-06 13:06:09</span><span style="float: right;">预览&nbsp;156</span></div>
                        </div>
                    </div>
                    <div class="yj_word">
                        一个月前，适逢植树节期间，蚂蜂窝携手银杏基金会共同举办公益活动【梭梭行动】，讲述了一个保卫家乡，植树十年的当代苏武老马哥的故事，号召靠谱有爱的蜂蜂们加入到植树防沙，捍卫民勤的环保事业中。回顾一下活动时的热烈场景吧
                    </div>
                </div>
            </li>
            <li>
                <div class="yj_img"><a><img src="<?php echo ($config['view_public']); ?>img/yj_img.jpeg"></a></div>
                <div class="yj_info">
                    <div class="yj_title clearfix">
                        <div class="zan"><i class="fa fa-thumbs-o-up" style="font-size: 30px;"></i><p>999</p></div>
                        <div class="title_info">
                            <h3><a href="#">C9计划·秋酷大趴 │ 一次特殊的外太空旅行一次特殊的外太空旅行</a></h3>
                            <div><span>2017-05-06 13:06:09</span><span style="float: right;">预览&nbsp;156</span></div>
                        </div>
                    </div>
                    <div class="yj_word">
                        一个月前，适逢植树节期间，蚂蜂窝携手银杏基金会共同举办公益活动【梭梭行动】，讲述了一个保卫家乡，植树十年的当代苏武老马哥的故事，号召靠谱有爱的蜂蜂们加入到植树防沙，捍卫民勤的环保事业中。回顾一下活动时的热烈场景吧
                    </div>
                </div>
            </li>
        </ul>
    </div>
        </div>
    </div>
</div>
<!--主体区 end-->
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
    $(function() {
        var c_href=window.location.href;
        $("#nav>li>a").each(function(){
            var href=$(this).attr("href");
            if(c_href.indexOf(href)!=-1){
//            alert(c_href+"包含"+href);
                $("#nav>li").removeClass();
                $(this).parent().addClass("current");
            }
        });
        //显示/隐藏 上传图片 按钮
        $(".u_banner").hover(function(){
            $("#btn_upload_img").show();
        },function(){
            $("#btn_upload_img").hide();
        });
        // 上传图片 按钮点击
        $("#btn_upload_img").click(function(){
            $("#u_pic").click();
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