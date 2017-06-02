<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/index/goods_details.css">
<script type="text/javascript">$("title").html('商品详情');</script>
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
    <div class="goodsDet">
        <!--商品详情顶部 start-->
        <div class="goodsDetTop">
            <!--1-->
            <div class="goodsTopBar w980 clearfix">
                <div class="searchB">
                    <input id="search" class="search1" type="text">
                    <a class="icon_search"><i class="fa fa-search"></i></a>
                </div>
                <div class="collectB">
                    <a href="#"><i class="fa fa-heart"></i>&nbsp;我的订单</a>&nbsp;|&nbsp;
                    <a href="#"><i class="fa fa-heart"></i>&nbsp;我的收藏</a>
                </div>
            </div>
            <!--1/-->
            <!--2-->
            <div class="goodsTopNav w980">
                <ul class="clearfix navList">
                    <li><a href="#">热门目的地</a></li>
                    <li><a href="#">首页</a></li>
                    <li><a href="#">城市玩乐</a></li>
                    <li><a href="#">签证</a></li>
                    <li><a href="#">海岛游</a></li>
                    <li><a href="#">限时特卖</a></li>
                    <li><a href="#">特色线路</a></li>
                    <li><a href="#">城市路线</a></li>
                </ul>
            </div>
            <!--2/-->
        </div>
        <!--商品详情顶部 end-->
        <!--中间主体部分 start-->
        <div class="goodsDetC w980">
            <!--3-->
            <div class="topTitleB clearfix">
                <div class="L">
                    <h1>【端午/国庆假期】北京/天津直飞日本东京/大阪/冲绳/北海道/名古屋4-7天往返含税机票（+99元得日本三年多次旅游签证）（+99元得日本三年多次旅游签证）（+99元得日本三年多次旅游签证）</h1>
                </div>
                <div class="R"><p><span class="mnum" style="font-size: 32px">￥989</span><span class="c-999">元起</span></p></div>
            </div>
            <!--3/-->
            <div class="goodsBuyB">
                <!--4-->
                <div class="goodsImg">
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="980px" height="420px">
                    <div class="clearfix">
                        <div><i class="fa fa-share-alt"></i>分享</div>
                        <div><i class="fa fa-heart"></i>收藏</div>
                    </div>
                </div>
                <!--4/-->
                <!--5-->
                <div class="selectOrBuy clearfix">
                    <div class="L">
                        <h4>产品类型</h4>
                        <ul class="cateList">
                            <li><p>香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对晚</p></li>
                            <li class="active"><p>香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对晚</p></li>
                            <li><p>香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对晚</p></li>
                            <li><p>香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对晚</p></li>
                            <li><p>香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对晚</p></li>
                            <li><p>香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对晚</p></li>
                        </ul>
                    </div>
                    <div class="R">
                        <h4>出行日期</h4>
                        <div style="width: 420px;">
                            <ul class="monthList">
                                <li data-y="2017" data-m="06">2017年06月</li>
                                <li data-y="2017" data-m="07">2017年07月</li>
                                <li data-y="2017" data-m="08">2017年08月</li>
                                <li data-y="2017" data-m="09">2017年09月</li>
                            </ul>
                            <ul>
                                <li>
                                    <ul class="weekList">
                                        <li>日</li>
                                        <li>一</li>
                                        <li>二</li>
                                        <li>三</li>
                                        <li>四</li>
                                        <li>五</li>
                                        <li>六</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dayList clearfix">

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h4>数量</h4>
                        <div class="goods_num_select">
                            <div class="jian disabled" data-min="1">-</div>
                            <div class="val" data-v="1">1</div>
                            <div class="jia" data-max="5">+</div>
                        </div>
                        <div class="btn-def" style="margin-top: 20px;float: right;margin-right: 30px;"><a href="#">立即预定</a></div>
                    </div>
                </div>
                <!--5/-->
            </div>
            <div class="goodsDescB">
                <!--6-->
                <div class="descNav">
                    <ul class="clearfix navList">
                        <li><a href="#">产品介绍</a></li>
                        <li><a href="#">费用说明</a></li>
                        <li><a href="#">购买须知</a></li>
                        <li><a href="#">成交记录</a></li>
                    </ul>
                </div>
                <!--6/-->
                <!--7-->
                <div class="descC" style="padding: 20px 20px;">
                    <p>这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。太阳神庙呈半圆形，由于独特的地理位置和构造，它能完美地捕捉太阳的运动。每年6月22日南半球的冬至时，太阳会通过一个小的梯形状的窗口直射到神殿中央一块大的花岗岩的中央。有天文和考古学家推测这块大花岗岩起着印加日历的作用。如 果从神殿里这个窗口往外看，对星座比较了解的人会留意到昴宿星，这个星座代表着五谷丰收。另另外，有考古学家揣测太阳神庙下面的洞穴(Royal Tomb)曾经存放着印加文明史上最著名的统治者Pachacútec的木乃伊。但是宾汉姆在1919年来到这里时没有在洞穴里找到木乃伊或人骨遗骸。</p>
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="160px">
                    <p>这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。太阳神庙呈半圆形，由于独特的地理位置和构造，它能完美地捕捉太阳的运动。每年6月22日南半球的冬至时，太阳会通过一个小的梯形状的窗口直射到神殿中央一块大的花岗岩的中央。有天文和考古学家推测这块大花岗岩起着印加日历的作用。如 果从神殿里这个窗口往外看，对星座比较了解的人会留意到昴宿星，这个星座代表着五谷丰收。另另外，有考古学家揣测太阳神庙下面的洞穴(Royal Tomb)曾经存放着印加文明史上最著名的统治者Pachacútec的木乃伊。但是宾汉姆在1919年来到这里时没有在洞穴里找到木乃伊或人骨遗骸。</p>
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="160px">
                    <p>这个建在一个小型洞穴顶部的神庙是古印加人对天文和建筑学造诣的最佳代表。太阳神庙呈半圆形，由于独特的地理位置和构造，它能完美地捕捉太阳的运动。每年6月22日南半球的冬至时，太阳会通过一个小的梯形状的窗口直射到神殿中央一块大的花岗岩的中央。有天文和考古学家推测这块大花岗岩起着印加日历的作用。如 果从神殿里这个窗口往外看，对星座比较了解的人会留意到昴宿星，这个星座代表着五谷丰收。另另外，有考古学家揣测太阳神庙下面的洞穴(Royal Tomb)曾经存放着印加文明史上最著名的统治者Pachacútec的木乃伊。但是宾汉姆在1919年来到这里时没有在洞穴里找到木乃伊或人骨遗骸。</p>
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="160px">
                </div>
                <!--7/-->
            </div>
        </div>
        <!--中间主体部分 end-->
        <!--用户评价 start-->
        <div class="comment w980" style="margin-top: 40px;background-color: #fff;padding: 20px 0 40px 0;">
            <h2 style="padding-left: 20px;">用户评价</h2>
            <ul class="commentList" style="width: 680px;padding-left:20px; ">
                <?php $__FOR_START_17275__=1;$__FOR_END_17275__=4;for($i=$__FOR_START_17275__;$i < $__FOR_END_17275__;$i+=1){ ?><li>
                    <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                    <div>
                        <div class="comment_mate" style="padding-right: 10px;">
                            <a href="#">浅浅快跑</a><span>2017-01-06 17:53</span>
                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                        </div>
                        <div class="comment_content">
                            <p>皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香，夏季的小兰花，玫瑰花，秋季冬季都会有五颜六色的花儿在花园里迎接着来自远方的客人！</p>
                        </div>
                    </div>
                </li><?php } ?>
            </ul>
        </div>
        <!--用户评价 end-->
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
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="<?php echo ($config['view_public']); ?>js/index/goods_details.js"></script>
</body>
</html>