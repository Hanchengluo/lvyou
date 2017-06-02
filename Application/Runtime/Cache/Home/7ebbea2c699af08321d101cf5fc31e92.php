<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/district/district.css">
<script type="text/javascript">$("title").html('目的地_主页');</script>
</head>
<body>
        <style>
        .w1000{width: 1000px;margin: 0 auto;}
        #top a{color: #424242;}
        #top_left{margin-left: 100px;float:left;}
        #top_right{float: right;}
        #top_right>li{float:left;padding: 0 12px;}
        #top_right .red_dot{width: 6px; height: 6px;background: #ff0000;position: absolute;right: -2px;top: 3px;border-radius: 50%;}

        /*"我的订单的隐藏块"*/
        #triangle,#triangle2{width:0px;height:0px;border: 6px solid rgba(255,255,255,0);border-bottom: 6px solid #ddd;position: absolute;
            margin-left: -6px;left: 50%;top: 13px;background-color: #fff;z-index: 10000;}
        #triangle2{top:14px;border-bottom: 6px solid #fff;}
        .orderList{background-color: #fff;margin-top: 6px;border: 1px solid #ddd;box-shadow: 0 1px 2px rgba(0,0,0,.2);
            margin-left: auto;margin-right: auto;}
        .orderList>li{line-height: 32px;border-bottom: 1px solid #ddd;cursor: pointer;font-size: 12px;text-align: center;}
        .orderList>li:last-child{border-bottom: 0px solid #ddd;}
        .orderList>li:hover{background-color: #f8f8f8;}
    </style>
    <div id="top" class="w1000x">
        <div id="top_left"><a href="#">登陆</a>&nbsp;&nbsp;<a href="#">注册</a></div>
        <ul id="top_right">
            <li><a href="#">我的首页</a></li>
            <li><a href="#">我的帖子</a></li>
            <li><a href="#">我的足迹</a></li>
            <li><a href="#">我的想去</a></li>
            <li><a href="#">我的问答</a></li>
            <li id="my_order" style="position: relative;"><a href="#">我的订单&nbsp;<i class="fa fa-angle-down"></i></a>
                <div id="hideB" style="position: absolute" hidden>
                    <div id="triangle"></div>
                    <div id="triangle2"></div>
                    <!--<div style="width: 100%;position:relative;background-color: #0e90d2;">-->
                    <ul class="orderList">
                        <li>11111111</li>
                        <li>222</li>
                        <li>333</li>
                    </ul>
                    <!--</div>-->
                </div>
            </li>
            <li><a href="#">我的行程</a></li>
            <li><a href="#">里斯123</a></li>
            <li><a href="#" style="position: relative;"><i class="fa fa-envelope-o"></i><div class="red_dot"></div></a></li>
            <li><a href="#" title="退出"><i class="fa fa-sign-out"></i></a></li>
        </ul>
        <div style="clear: both;"></div>
    </div>
</body>
<script>
    $(function() {
        //发新帖
        $("#my_order").hover(function(){
            $("#hideB").show();
        },function(){
            $("#hideB").hide();
        });
    });
</script>
</html>
    <div id="center" class="w980">
        <div class="recommend">
            <div class="rec_top clearfix">
                <h2>探索精彩世界</h2>
                <ul class="rec_nav">
                    <li class="current" data-i="1">神秘遗址</li>
                    <li data-i="2">玩转日本</li>
                    <li data-i="3">最爱小镇</li>
                    <li data-i="4">跳蚤市集</li>
                    <li data-i="5">魅力夜色</li>
                    <li data-i="6">怀旧时光</li>
                </ul>
            </div>
            <div class="rec_list">
                <!--192*200-->
                <ul style="left:0px;" data-i="1" class="">
                    <li class="item1">
                        <a href="#">
                            <img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg">
                            <h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div>
                        </a>

                    </li>
                    <li class="item2">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg">
                            <h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item3">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg">
                            <h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item4">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item5">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item6">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item7">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item8">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item9">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                    <li class="item10">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"><h3>五渔村</h3>
                            <div>
                                <p>五渔村</p>
                                <p>秘鲁的马丘比丘古城是已知保存最好的遗迹，它也是世界各地旅行者所关注的焦点。它曾一度被人们所遗忘，1911年被一位名为海勒姆-宾汉姆的考古学家再次发现。</p>
                            </div></a>
                    </li>
                </ul>
                <ul style="left:980px;" data-i="2" class="">
                    <li class="item1">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item2">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item3">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item4">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item5">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item6">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item7">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item8">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item9">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item10">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                </ul>
                <ul style="left:980px;" data-i="3" class="">
                    <li class="item1">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item2">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item3">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item4">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item5">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item6">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item7">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item8">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item9">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item10">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                </ul>
                <ul style="left:980px;" data-i="4" class="">
                    <li class="item1">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item2">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item3">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item4">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item5">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item6">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item7">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item8">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item9">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item10">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                </ul>
                <ul style="left:980px;" data-i="5" class="">
                    <li class="item1">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item2">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item3">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item4">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item5">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item6">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item7">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item8">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item9">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item10">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                </ul>
                <ul style="left:980px;" data-i="6" class="">
                    <li class="item1">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item2">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item3">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item4">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item5">
                        <a href="#"><img width="192px" height="405px" src="<?php echo ($config['view_public']); ?>img/192x405.jpg"></a>
                    </li>
                    <li class="item6">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                    <li class="item7">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item8">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item9">
                        <a href="#"><img width="192px" height="200px" src="<?php echo ($config['view_public']); ?>img/200x192.jpg"></a>
                    </li>
                    <li class="item10">
                        <a href="#"><img width="389px" height="200px" src="<?php echo ($config['view_public']); ?>img/388x200.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nation">
            <div class="nation_top clearfix">
                <h2>国家列表</h2>
                <ul class="nation_nav">
                    <li class="current" data-i="1">全部</li>
                    <li data-i="2">亚洲</li>
                    <li data-i="3">欧洲</li>
                    <li data-i="4">非洲</li>
                    <li data-i="5">北美</li>
                    <li data-i="6">南美</li>
                    <li data-i="7">大洋洲</li>
                    <li data-i="8">南极洲</li>
                </ul>
            </div>
            <div class="nation_list">
                <ul data-i="2">
                    <li><span class="z_title">亚洲 Asia</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>

                </ul>
                <ul data-i="3">
                    <li><span class="z_title">欧洲 Europe</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>
                </ul>
                <ul  data-i="4">
                    <li><span class="z_title">非洲 Africa</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>
                </ul>
                <ul data-i="5">
                    <li><span class="z_title">北美 North America</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>
                </ul>
                <ul data-i="6">
                    <li><span class="z_title">南美 South America</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>
                </ul>
                <ul data-i="7">
                    <li><span class="z_title">大洋洲 Oceania</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>
                </ul>
                <ul data-i="8">
                    <li><span class="z_title">南极洲 Antarctica</span><span style="color: #999;">&nbsp;(拼音首字母排序)</span></li>
                    <li>
                        <ul class="clearfix">
                            <li class="line1"></li>
                            <li class="line2"></li>
                            <li class="line3"></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="<?php echo ($config['view_public']); ?>js/place.js"></script>
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