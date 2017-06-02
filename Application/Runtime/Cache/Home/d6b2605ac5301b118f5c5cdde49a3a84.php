<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/community_bk.css">
<script type="text/javascript">$("title").html('欧洲板块');</script>
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
<div class="jbtx">
    <!--顶部滑动图片 start-->
    <div class="T_img">
        <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="320px">
    </div>
    <!--顶部滑动图片 end-->
    <!--顶部标题区 start-->
    <div class="bkTopBar w980 clearfix">
        <div id="bkName">
            <p><a href="#">Cinque terre</a></p>
            <p><a href="#">五渔村</a></p>
        </div>
        <div id="buttons">
            <div class="btn_new">
                <span>发新帖&nbsp;&nbsp;<i class="fa fa-caret-down"></i></span>
                <ul hidden>
                    <li><a href="#">游记</a></li>
                    <li><a href="#">攻略</a></li>
                    <li><a href="#">结伴</a></li>
                </ul>
            </div>
            <a class="btn_q" href="#">提问题</a>
        </div>
    </div>
    <!--顶部标题区 end-->
    <!--主体区 start-->
    <div class="C">
        <div class="w680">
            <!--1-->
            <ul class="Nav clearfix">
                <li class="current" data-i="1"><a>游记攻略</a></li>
                <li data-i="2"><a>结伴同游</a></li>
                <li data-i="3"><a>问题列表</a></li>
            </ul>
            <!--1/-->
            <!--2-->
            <ul id="yjgl" class="commentList">
                <?php $__FOR_START_12470__=0;$__FOR_END_12470__=5;for($i=$__FOR_START_12470__;$i < $__FOR_END_12470__;$i+=1){ ?><li class="clearfix">
                        <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                        <div style="width: 430px;float: left;">
                            <div class="comment_mate" style="padding-right: 10px;">
                                <a href="#">浅浅快跑</a>&nbsp;在&nbsp;<a href="#">挪威</a>&nbsp;发布的游记
                                <span><i class="fa fa-thumbs-up"></i>56人赞</span>
                                <span>最后回复于1天前</span>
                            </div>
                            <h3 style="padding-top: 10px;font-size: 16px;"><a href="#">关于旅行摄影分享（前期准备，人文，风光，星空，后期处理，延时摄影等）持续更新</a></h3>
                            <div class="comment_content">
                                <p>皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香</p>
                            </div>
                        </div>
                        <div class="img" style="float: right;margin-left: 0px;padding-top: 5px;">
                            <a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="168px" height="112px"></a>
                        </div>
                    </li><?php } ?>
            </ul>
            <!--2/-->
            <!--2.2/-->
            <ul id="jbty" class="commentList" hidden>
                <?php $__FOR_START_25015__=0;$__FOR_END_25015__=3;for($i=$__FOR_START_25015__;$i < $__FOR_END_25015__;$i+=1){ ?><li class="clearfix">
                    <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                    <div style="width: 430px;float: left;">
                        <div class="comment_mate" style="padding-right: 10px;">
                            <a href="#">浅浅快跑</a>
                            <span>56人回复</span>
                            <span>最后回复于1天前</span>
                        </div>
                        <h3 style="padding-top: 10px;font-size: 16px;"><a href="#">高加索三国 6月结伴游</a></h3>
                        <div class="ty_info clearfix" style="">
                            <div style="">
                                <p style="color: #999;">出发&nbsp;<span style="color: #444;">2017-04-03</span></p>
                                <p style="color: #999;">返程&nbsp;<span style="color: #444;">2017-04-03</span></p>
                            </div>
                            <div style="float: left;padding-left: 10px;"><br />
                                <span style="">曼谷、清迈</span>
                            </div>
                        </div>
                    </div>
                    <div class="img" style="">
                        <a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="168px" height="112px"></a>
                    </div>
                </li><?php } ?>
            </ul>
            <!--2.2/-->
            <!--2.3-->
            <ul id="wtlb" class="commentList" hidden>
            <?php $__FOR_START_3364__=0;$__FOR_END_3364__=3;for($i=$__FOR_START_3364__;$i < $__FOR_END_3364__;$i+=1){ ?><li class="clearfix">
                    <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                    <div style="width: 430px;float: left;">
                        <div class="comment_mate" style="padding-right: 10px;">
                            <a href="#">浅浅快跑</a>
                            <span>56人赞</span>
                            <span>最后回复于1天前</span>
                        </div>
                        <h3 style="padding-top: 10px;font-size: 16px;"><a href="#">高加索三国 6月结伴游</a></h3>
                    </div>
                    <div class="btnB" style="">
                        <span>9个答案</span>
                        <a href="#">回答</a>
                    </div>
                </li><?php } ?>
            </ul>
            <!--2.3/-->
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
        //发新帖
        $(".btn_new").hover(function(){
            $(this).find("ul").show();
        },function(){
            $(this).find("ul").hide();
        });
        //左侧顶部导航点击
        $(".Nav>li").click(function () {
            $(".Nav>li").removeClass();
            $(this).addClass("current");
            var i = $(this).attr("data-i");
            if(i==1){
                $("#yjgl").show();
                $("#jbty").hide();
                $("#wtlb").hide();
            }else if(i==2){
                $("#yjgl").hide();
                $("#jbty").show();
                $("#wtlb").hide();
            }else if(i==3){
                $("#yjgl").hide();
                $("#jbty").hide();
                $("#wtlb").show();
            }
        });
    });
</script>
</body>
</html>