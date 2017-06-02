<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/lib/swiper/swiper-3.3.1.min.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/district/dist_city.css">
<script type="text/javascript">$("title").html('目的地城市');</script>
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
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/district/dist_top.css">
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
    <!--目的地顶部 end-->
    <!--介绍块 start-->
    <div id="place_jies">
        <!--3-->
        <div class="plcJieS w980 clearfix">
            <div class="L">
                <div class="place-details-container">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide" href="#">
                            <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" style="width: 680px;height: 400px;"/>
                        </a>
                        <a class="swiper-slide" href="#">
                            <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" style="width: 680px;height: 400px;"/>
                        </a>
                        <a class="swiper-slide" href="#">
                            <img src="<?php echo ($config['view_public']); ?>img/680x400.jpg" style="width: 680px;height: 400px;"/>
                        </a>
                    </div>
                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
            </div>
            <div class="R">
                <div class="plcJiny">
                    <p>城市经验</p>
                    <p>avoir_ici：远看很美，近看很破的著名的五渔村！倒是火车经过的热那亚，让人很是向往</p>
                    <div>
                        <a href="#">全部城市经验</a>
                        <a href="#" style="float: right">分享我的城市经验</a>
                    </div>
                </div>
                <div class="plcJinn">
                    <p>游记锦囊</p>
                    <div style="padding-left: 10px;">
                        <img width="68px" height="98px" src="<?php echo ($config['view_public']); ?>img/tx.jpeg">
                        <div style="float: right;width: 190px;">
                            <div><a href="#">意大利国家概览</a></div>
                            <p>作者：xxx</p>
                            <p>下载次数：261531</p>
                            <div id="btn_download">下载</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--3/-->
    </div>
    <!--介绍块 end-->
    <!--推荐块 start-->
    <div id="place_tuij">
        <!--4-->
        <div class="plcTuiJ w980">
            <div class="T clearfix">
                <h2 style="text-align: center;font-size: 34px;color: #666;">xxx热门目的地</h2>
                <ul class="tuijNav clearfix">
                    <li class="current" data-i="1"><a href="#">最受欢迎</a></li>
                    <li data-i="2"><a href="#">景点</a></li>
                    <li data-i="3"><a href="#">活动</a></li>
                </ul>
                <ul id="tuij_list">
                    <?php $__FOR_START_12846__=1;$__FOR_END_12846__=4;for($i=$__FOR_START_12846__;$i < $__FOR_END_12846__;$i+=1){ ?><li <?php echo ($i>1?"hidden":""); ?>>
                            <div class="tuijList">
                                <ul class="clearfix">
                                        <?php $__FOR_START_22364__=1;$__FOR_END_22364__=9;for($j=$__FOR_START_22364__;$j < $__FOR_END_22364__;$j+=1){ ?><li style="width: 227px;">
                                            <div><a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="227px" height="150px"></a></div>
                                            <div class="item_info" style="padding:5px 10px 10px 10px;border: 1px solid #f5f5f5">
                                                <h3><a href="#">城山日出峰<?php echo ($i); ?>,<?php echo ($j); ?></a></h3>
                                                <div class="clearfix">
                                                    <div style="float: left;color: #ff9d00;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>&nbsp;<span>8.0</span></div>
                                                    <span style="color: #999;float: right;">35人点评</span>
                                                </div>
                                            </div>
                                        </li><?php } ?>
                                </ul>
                            </div>
                        </li><?php } ?>
                </ul>
            </div>
        </div>
        <!--4/-->
    </div>
    <!--推荐块 end-->
    <!--交流区 start-->
    <div id="place_jiaol">
        <div class="plcJiaoL w980">
            <h2 style="text-align: center;font-size: 34px;color: #666;">交流区</h2>
            <div style="margin-top: 20px;" class="clearfix">
                <div style="float:left;width: 680px">
                    <ul class="jiaolNav clearfix">
                        <li class="current" id="jiaol_yjgl"><a>游记攻略</a></li>
                        <li id="jiaol_wd"><a>问答</a></li>
                        <li id="jiaol_jb"><a>结伴</a></li>
                        <li id="jiaol_dp"><a>点评</a></li>
                    </ul>
                    <div class="jiaol_main" style="margin-top: 20px;">
                        <div class="option" id="option">
                            <span class="current">热门</span>
                            <span>最新</span>
                            <span>精华</span>
                        </div>
                        <div id="loading" style="text-align: center;margin-top: 20px;" hidden><img src="Public/img/loading.gif"></div>
                        <ul class="glList" id="glList">

                        </ul>
                    </div>
                </div>
                <div style="float:right;width: 270px">
                    <ul class="toolBtnList clearfix">
                        <li><a href="#" class="tb1">提问</a></li>
                        <li><a href="#" class="tb2">写点评</a></li>
                        <li><a href="#" class="tb3">写新贴</a></li>
                    </ul>
                    <ul class="dpTop5" style="margin-top:40px;">
                        <li style="font-size: 16px;line-height: 32px;">济州岛点评TOP5</li>
                        <?php $__FOR_START_4559__=1;$__FOR_END_4559__=6;for($i=$__FOR_START_4559__;$i < $__FOR_END_4559__;$i+=1){ ?><li class="clearfix"><a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                                <p><a href="#">xiaom</a></p>
                                <p>点评了5个目的地</p>
                            </li><?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--交流区 end-->
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
    <script src="Public/lib/swiper/swiper-3.3.1.min.js"></script>
    <script src="Public/js/new-swiper.js"></script>
    <script src="<?php echo ($config['view_public']); ?>js/district/dist_city.js"></script>
</body>
</html>