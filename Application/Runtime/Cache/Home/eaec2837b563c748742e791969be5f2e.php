<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/lib/swiper/swiper-3.3.1.min.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/store/goods_list.css">
<script type="text/javascript">$("title").html('商品列表');</script>
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
    <!--顶部搜索和Nav区 start-->
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/store/store_top.css">
<div class="T">
    <!--1-->
    <div class="searchB w1160 clearfix">
        <div class="start" ><span id="startCityName" style="font-size: 16px;">深圳</span>&nbsp;<span>出发</span></div>
        <div class="end"><span id="endCityName" style="font-size: 16px;">深圳</span>&nbsp;<span>目的地</span></div>
        <div class="searchInput"><input type="text"><a class="icon_search"><i class="fa fa-search"></i></a></div>
        <!--选择出发地的块 start-->
        <div class="selectPlace" data-i="0" hidden>
            <div style="padding: 20px;border-bottom:1px solid #ececec; ">
                <p style="color: #999;">热门出发地</p>
                <ul class="hotList clearfix">
                    <!--北京 天津天津 上海 杭州 广州 深圳 成都 重庆 昆明 武汉 西安 香港 澳门-->
                    <li><a >全国</a></li>
                    <?php $__FOR_START_16601__=0;$__FOR_END_16601__=2;for($i=$__FOR_START_16601__;$i < $__FOR_END_16601__;$i+=1){ ?><li><a >北京</a></li><?php } ?>
                </ul>
            </div>
            <div style="">
                <div class="selectInput"><input type="text" placeholder="查找"></div>
                <ul class="zmNav clearfix">
                    <li class="current" data-i="1">ABCDEF</li>
                    <li data-i="2">GHJKLM</li>
                    <li data-i="3">NPQRS</li>
                    <li data-i="4">TWXYZ</li>
                </ul>
                <?php $__FOR_START_27294__=0;$__FOR_END_27294__=4;for($i=$__FOR_START_27294__;$i < $__FOR_END_27294__;$i+=1){ ?><ul class="zmList" <?php echo ($i==0?'':'hidden'); ?>>
                        <?php $__FOR_START_23884__=0;$__FOR_END_23884__=6;for($j=$__FOR_START_23884__;$j < $__FOR_END_23884__;$j+=1){ ?><li>
                                <span class="letter">A</span>
                                <ul class="clearfix">
                                    <?php $__FOR_START_4501__=0;$__FOR_END_4501__=3;for($k=$__FOR_START_4501__;$k < $__FOR_END_4501__;$k+=1){ ?><li><a>深圳</a></li><?php } ?>
                                </ul>
                            </li><?php } ?>
                    </ul><?php } ?>
            </div>
        </div>
        <!--选择出发地的块 end-->
        <div></div>
    </div>
    <!--1/-->
    <!--2-->
    <ul class="Nav clearfix w1160">
        <li><a href="#">首页</a></li>
        <li><a href="#">机加酒</a></li>
        <li><a href="#">出境游</a></li>
        <li><a href="#">国内游</a></li>
        <li><a href="#">签证</a></li>
        <li><a href="#">邮轮</a></li>
        <li><a href="#">海岛游</a></li>
        <li><a href="#">酒店</a></li>
        <li><a href="#">周边游</a></li>
        <li><a href="#">旅游保险</a></li>
    </ul>
    <!--2/-->
</div>
<script src="<?php echo ($config['view_public']); ?>js/store/store_top.js"></script>

    <!--顶部搜索和Nav区 end-->
    <!--顶部筛选条件区 start-->
    <div class="T2 w1160" style="border: 1px solid #bbb;background-color: #fff;margin: 20px auto;">
        <ul class="filtrate">
            <li>
                <span>出发时间：</span>
                <ul class="clearfix">
                    <li><input type="checkbox">不限</li>
                    <li><input type="checkbox">5月</li>
                    <li><input type="checkbox">6月</li>
                    <li><input type="checkbox">7月</li>
                    <li><input type="checkbox">8月</li>
                </ul>
            </li>
            <li>
                <span>行程天数：</span>
                <ul class="clearfix">
                    <li><input type="checkbox">不限</li>
                    <li><input type="checkbox">3天</li>
                    <li><input type="checkbox">4天</li>
                    <li><input type="checkbox">5天</li>
                    <li><input type="checkbox">6天</li>
                </ul>
            </li>
            <li>
                <span>出发港口：</span>
                <ul class="clearfix">
                    <li><input type="checkbox">不限</li>
                    <li><input type="checkbox">香港出港</li>
                    <li><input type="checkbox">三亚出港</li>
                </ul>
            </li>
            <li>
                <span>邮轮航线：</span>
                <ul class="clearfix">
                    <li><input type="checkbox">不限</li>
                    <li><input type="checkbox">西沙群岛</li>
                    <li><input type="checkbox">东南亚</li>
                </ul>
            </li>
        </ul>
    </div>
    <!--顶部筛选条件区 end-->
    <!--商品列表区 start-->
    <div class="goodsListB w1160">
        <ul class="sortnav clearfix">
            <li class="current"><a href="#">综合排名</a></li>
            <li><a href="#">销量优先</a></li>
            <li><a href="#">价格高低</a></li>
        </ul>
        <ul class="goodsList clearfix">
            <?php $__FOR_START_14719__=0;$__FOR_END_14719__=8;for($i=$__FOR_START_14719__;$i < $__FOR_END_14719__;$i+=1){ ?><li>
                <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="275px" height="275px">
                <div class="clearfix shopInfo">
                    <p class="shopName">出国旅游欧洲10天豪华游豪华游豪华游</p>
                    <div class="price"><span class="mnum">￥49999</span><a href="#" class="btn">立即预定</a></div>
                </div>
            </li><?php } ?>
        </ul>
    </div>
    <!--商品列表区 end-->
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