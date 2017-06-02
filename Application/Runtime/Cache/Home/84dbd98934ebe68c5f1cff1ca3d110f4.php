<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/dist_details.css">
<script type="text/javascript">$("title").html('详情页');</script>
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
    <!--目的地顶部 start-->
    <div id="mdd_top">
        <!--2-->
        <div class="mddTopNav w980 clearfix">
            <ul class="L clearfix">
                <li><a href="mdd_generalize.html">城市概括</a></li>
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
        <!--1-->
        <div class="mddTopBar w980 clearfix">
            <div id="mddName">
                <p><a href="#">Cinque terre</a></p>
                <p><a href="#">五渔村</a></p>
            </div>
            <ul id="mddMeta">
                <li><i class="fa fa-heart"></i><br /><span>想去</span></li>
                <li><i class="fa fa-heart"></i><br /><span>去过</span></li>
            </ul>
        </div>
        <!--1/-->
    </div>
    <!--目的地顶部 end-->
    <!--主体区 start-->
    <div id="mdd_main">
        <div class="mddMain w980 clearfix">
            <div class="mddMainL">
                <!--3-->
                <div style="background-color: #fff;">
                    <div>
                        <!--TODO:改为滑动图片-->
                        <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" width="680px" height="400px">
                    </div>
                    <div style="padding: 10px 20px;">
                        <div style="padding-bottom: 10px;">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp;<span>8.0</span>
                            &nbsp;&nbsp;&nbsp;<a class="a-def" href="#">30人评价</a>
                            <span style="float: right;">马丘比丘全部景点观光中排&nbsp;<span class="mainc">第一名</span></span>
                        </div>
                        <div class="btn-def"><a href="#">写点评</a></div>
                    </div>
                </div>
                <!--3/-->
                <!--4-->
                <div style="padding: 20px 20px;background-color: #fff;margin: 2px 0 0 0;">
                    <div style="border: 1px solid #ececec">
                        <div style="line-height: 32px;padding: 4px 10px;border-bottom: 1px solid #ececec;"><span style="font-size: 16px;color: #ff7466;">太阳神庙可选折扣</span>
                            <span style="float: right;"><a class="a-def" href="#">查看更多&nbsp;></a></span>
                        </div>
                        <div style="position: relative;padding: 10px 20px;">
                            <p>【世外桃源】秘鲁马丘比丘一日游 (库斯科往返)</p>
                            <p>亮点推荐：1、车马费用全包，省时省力</p>
                            <div style="position: absolute;right: 0;bottom: 0;padding: 10px 20px;"><span class="mnum">2506</span>元起</div>
                        </div>
                    </div>
                </div>
                <!--4/-->
                <!--5-->
                <div class="mddJianj" style="padding: 0 20px 20px 20px;background-color: #fff;">
                    <p>这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。太阳神庙呈半圆形，由于独特的地理位置和构造，它能完美地捕捉太阳的运动。每年6月22日南半球的冬至时，太阳会通过一个小的梯形状的窗口直射到神殿中央一块大的花岗岩的中央。有天文和考古学家推测这块大花岗岩起着印加日历的作用。如 果从神殿里这个窗口往外看，对星座比较了解的人会留意到昴宿星，这个星座代表着五谷丰收。另另外，有考古学家揣测太阳神庙下面的洞穴(Royal Tomb)曾经存放着印加文明史上最著名的统治者Pachacútec的木乃伊。但是宾汉姆在1919年来到这里时没有在洞穴里找到木乃伊或人骨遗骸。</p>
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="160px">
                    <p>这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。太阳神庙呈半圆形，由于独特的地理位置和构造，它能完美地捕捉太阳的运动。每年6月22日南半球的冬至时，太阳会通过一个小的梯形状的窗口直射到神殿中央一块大的花岗岩的中央。有天文和考古学家推测这块大花岗岩起着印加日历的作用。如 果从神殿里这个窗口往外看，对星座比较了解的人会留意到昴宿星，这个星座代表着五谷丰收。另另外，有考古学家揣测太阳神庙下面的洞穴(Royal Tomb)曾经存放着印加文明史上最著名的统治者Pachacútec的木乃伊。但是宾汉姆在1919年来到这里时没有在洞穴里找到木乃伊或人骨遗骸。</p>
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="160px">
                    <p>这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。太阳神庙呈半圆形，由于独特的地理位置和构造，它能完美地捕捉太阳的运动。每年6月22日南半球的冬至时，太阳会通过一个小的梯形状的窗口直射到神殿中央一块大的花岗岩的中央。有天文和考古学家推测这块大花岗岩起着印加日历的作用。如 果从神殿里这个窗口往外看，对星座比较了解的人会留意到昴宿星，这个星座代表着五谷丰收。另另外，有考古学家揣测太阳神庙下面的洞穴(Royal Tomb)曾经存放着印加文明史上最著名的统治者Pachacútec的木乃伊。但是宾汉姆在1919年来到这里时没有在洞穴里找到木乃伊或人骨遗骸。</p>
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="160px">
                </div>
                <!--5/-->
                <!--6-->
                <div class="mddJiaol" style="margin-top: 20px;background-color: #fff;padding: 0 20px 20px 20px;">
                    <ul class="jiaolNav clearfix">
                        <li><a href="#">点评</a></li>
                        <li><a href="#">问答</a></li>
                    </ul>
                    <div>
                        <ul class="comment_list" style="color: #444;">
                            <?php $__FOR_START_9203__=1;$__FOR_END_9203__=7;for($i=$__FOR_START_9203__;$i < $__FOR_END_9203__;$i+=1){ ?><li>
                                    <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                                    <div>
                                        <div class="comment_mate">
                                            <a href="#">浅浅快跑</a><span>2017-01-06 17:53</span>
                                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="comment_content">
                                            <p>皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香，夏季的小兰花，玫瑰花，秋季冬季都会有五颜六色的花儿在花园里迎接着来自远方的客人！</p>
                                        </div>
                                    </div>
                                </li><?php } ?>
                         </ul>
                        <div id="comment">
                            <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                            <div class="clearfix">
                                <div>
                                    <textarea cols="30" rows="10" placeholder="说说你的疑问"></textarea>
                                </div>
                                <div id="commentStar" data-level="0"><i class="fa fa-star" data-v="1"></i><i class="fa fa-star"  data-v="2"></i><i class="fa fa-star"  data-v="3"></i><i class="fa fa-star"  data-v="4"></i><i class="fa fa-star"  data-v="5"></i>
                                <span class="hint">点击星星为它点评</span>
                                </div>
                                <div id="btn_sub">发布</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--6/-->
            </div>
            <div class="mddMainR">
                <!--7-->
                <div style="width: 270px;height: 160px;">
                    <!--TODO:地图-->
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="270px" height="160px">
                </div>
                <!--7/-->
                <!--8-->
                <ul class="dpTop5" style="margin-top:40px;">
                    <li style="font-size: 16px;line-height: 32px;">济州岛点评TOP5</li>
                    <?php $__FOR_START_2224__=1;$__FOR_END_2224__=6;for($i=$__FOR_START_2224__;$i < $__FOR_END_2224__;$i+=1){ ?><li class="clearfix"><a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="120px" height="100px"></a>
                            <p><a href="#">马丘比丘三窗庙</a></p>
                            <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp;<span>8.0</span></p>
                            <p style="font-size: 12px;">20人评价</p>
                            <p style="font-size: 12px;">距离1km</p>
                        </li><?php } ?>
                </ul>
                <!--8/-->
            </div>
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
 </body>
 </html>
    <script src="Public/js/star.js"></script>
    <script src="Public/js/search.js"></script>
</body>
</html>