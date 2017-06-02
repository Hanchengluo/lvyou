<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/lib/swiper/swiper-3.3.1.min.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/store/store_index.css">
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
<!--主体的宽度为1160-->
    <div class="storeB">
        <!--顶部搜索和Nav区 start-->
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
                    <?php $__FOR_START_28379__=0;$__FOR_END_28379__=2;for($i=$__FOR_START_28379__;$i < $__FOR_END_28379__;$i+=1){ ?><li><a >北京</a></li><?php } ?>
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
                <?php $__FOR_START_7544__=0;$__FOR_END_7544__=4;for($i=$__FOR_START_7544__;$i < $__FOR_END_7544__;$i+=1){ ?><ul class="zmList" <?php echo ($i==0?'':'hidden'); ?>>
                        <?php $__FOR_START_6436__=0;$__FOR_END_6436__=6;for($j=$__FOR_START_6436__;$j < $__FOR_END_6436__;$j+=1){ ?><li>
                                <span class="letter">A</span>
                                <ul class="clearfix">
                                    <?php $__FOR_START_9104__=0;$__FOR_END_9104__=3;for($k=$__FOR_START_9104__;$k < $__FOR_END_9104__;$k+=1){ ?><li><a>深圳</a></li><?php } ?>
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
        <!--顶部搜索和Nav区 end-->
        <!--滑动图片和分类列表 start-->
        <div class="T2">
            <!--3-->
            <div>
                <div class="store-index-container" style="position: relative;overflow: hidden;">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide" href="#">
                            <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" style="width: 100%;height: 420px;"/>
                        </a>
                        <a class="swiper-slide" href="#">
                            <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" style="width: 100%;height: 420px;"/>
                        </a>
                        <a class="swiper-slide" href="#">
                            <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" style="width: 100%;height: 420px;"/>
                        </a>
                    </div>
                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            </div>
            <!--3/-->
            <!--4-->
            <div class="cate">
                <div class="w1160">
                    <ul class="cateList">
                        <li><h3>国内旅游</h3>
                            <p><a href="#">三亚</a><a href="#">三亚</a><a href="#">三亚</a><a href="#">三亚</a></p>
                            <div class="cityList1" hidden="">
                                <ul class="clearfix">
                                    <?php $__FOR_START_19537__=0;$__FOR_END_19537__=12;for($i=$__FOR_START_19537__;$i < $__FOR_END_19537__;$i+=1){ ?><li><h3>热门</h3>
                                        <ul class="clearfix" style="padding-left: 38px;">
                                            <?php $__FOR_START_23693__=0;$__FOR_END_23693__=12;for($j=$__FOR_START_23693__;$j < $__FOR_END_23693__;$j+=1){ ?><li style=""><a href="#" style="">庐山</a></li><?php } ?>
                                        </ul>
                                    </li><?php } ?>
                                </ul>
                            </div>
                        </li>
                        <?php $__FOR_START_23734__=0;$__FOR_END_23734__=6;for($i=$__FOR_START_23734__;$i < $__FOR_END_23734__;$i+=1){ ?><li>
                            <h3>东南亚 南亚 泰国</h3>
                            <p><a href="#">三亚</a><a href="#">三亚</a><a href="#">三亚</a><a href="#">三亚</a></p>
                            <div class="cityList2" hidden>
                                <ul>
                                    <?php $__FOR_START_3650__=0;$__FOR_END_3650__=3;for($j=$__FOR_START_3650__;$j < $__FOR_END_3650__;$j+=1){ ?><li>
                                        <h3>东南亚</h3>
                                        <ul>
                                            <?php $__FOR_START_13449__=0;$__FOR_END_13449__=12;for($k=$__FOR_START_13449__;$k < $__FOR_END_13449__;$k+=1){ ?><li><a href="#">庐山</a></li><?php } ?>
                                        </ul>
                                    </li><?php } ?>
                                </ul>
                            </div>
                        </li><?php } ?>
                    </ul>

                </div>
            </div>
            <!--4/-->
        </div>
        <!--滑动图片和分类列表 end-->
        <!--主体内容区 start-->
        <div class="C" style="background-color: #fff;">
            <ul class="CT clearfix w1160" style="padding: 20px 0;">
                <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="275px" height="120px"></li>
                <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="275px" height="120px"></li>
                <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="275px" height="120px"></li>
                <li><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="275px" height="120px"></li>
            </ul>
            <ul class="CC">
                <?php $__FOR_START_7607__=0;$__FOR_END_7607__=3;for($k=$__FOR_START_7607__;$k < $__FOR_END_7607__;$k+=1){ ?><li>
                    <div class="w1160">
                        <div class="clearfix">
                            <h3>当地玩法</h3>
                            <ul class="ccNav clearfix">
                                <li class="current" data-i="1" data-j="<?php echo ($k+1); ?>">精品小团</li>
                                <li data-i="2" data-j="<?php echo ($k+1); ?>">发现城市</li>
                                <li data-i="3" data-j="<?php echo ($k+1); ?>">亲子家庭</li>
                                <li data-i="4" data-j="<?php echo ($k+1); ?>">情侣蜜月</li>
                                <li data-i="5" data-j="<?php echo ($k+1); ?>">血拼购物</li>
                                <li data-i="6" data-j="<?php echo ($k+1); ?>">闺蜜同游</li>
                                <li data-i="7" data-j="<?php echo ($k+1); ?>">冒险之旅</li>
                            </ul>
                        </div>
                        <ul class="ccShopsList">
                            <?php $__FOR_START_24147__=0;$__FOR_END_24147__=7;for($j=$__FOR_START_24147__;$j < $__FOR_END_24147__;$j+=1){ ?><li <?php echo ($j==0?"":"hidden"); ?>>
                                <ul class="clearfix">
                                    <?php $__FOR_START_19598__=0;$__FOR_END_19598__=7;for($i=$__FOR_START_19598__;$i < $__FOR_END_19598__;$i+=1){ ?><li>
                                        <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="<?php echo ($i==4?'570px':'275px'); ?>" height="275px">
                                        <div class="clearfix shopInfo">
                                            <p class="shopName">出国旅游欧洲10天豪华游豪华游豪华游</p>
                                            <span class="mnum">￥49999</span>
                                        </div>
                                    </li><?php } ?>
                                </ul>
                            </li><?php } ?>
                        </ul>
                    </div>
                </li><?php } ?>
            </ul>
        </div>
        <!--主体内容区 end-->
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
    <script src="Public/lib/swiper/swiper-3.3.1.min.js"></script>
    <script src="Public/js/new-swiper.js"></script>
    <script src="<?php echo ($config['view_public']); ?>js/store/store_index.js"></script>
</body>
</html>