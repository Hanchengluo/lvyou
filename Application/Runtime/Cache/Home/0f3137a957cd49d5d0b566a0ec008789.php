<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/index/online_pay.css">
<script type="text/javascript">$("title").html('在线支付');</script>
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
    <div class="onlinePay">
        <!--顶部的step块 start-->
        <div class="stepB w780">
            <ul class="stepList clearfix">
                <li class="step1"><div><i></i></div><p>选择产品</p></li>
                <li class="step2"><div><i></i></div><p>填写订单</p></li>
                <li class="step3"><div><i></i></div><p>在线支付</p></li>
                <li class="step4 h"><div><i></i></div><p>支付成功</p></li>
            </ul>
        </div>
        <div class="orderInfo w780">
            <p style="font-size: 21px;font-weight: bold;">订单已生成！订单号：QYER980343423</p>
            <p style="font-size: 16px;line-height: 32px;">北京直飞冲绳4/5天往返含税机票（赠送单次/三年个人旅游签证+wifi）</p>
            <p style="font-size: 12px;color: #ff0000;">请在57分钟45秒内支付，逾期订单将自动关闭</p>
        </div>
        <div style="padding-top: 40px;width: 800px;margin: 0 auto;">
            <ul class="payNav clearfix">
                <li class="current" data-i="1">支付平台</li>
                <li data-i="2">信用卡</li>
                <li data-i="3">储蓄卡</li>
            </ul>
            <div class="payMode">
                <ul class="payModeList clearfix">
                    <li>支付宝</li>
                    <li>微信支付</li>
                    <li>在线支付</li>

                </ul>
                <ul class="payModeList clearfix nodisplay">
                    <li>支付宝</li>
                    <li>微信支付</li>
                    <li>在线支付</li>
                    <li>支付宝</li>
                    <li>微信支付</li>
                    <li>在线支付</li>
                </ul>
                <ul class="payModeList clearfix nodisplay">
                    <li>支付宝</li>
                    <li>微信支付</li>
                    <li>在线支付</li>
                    <li>支付宝</li>
                    <li>微信支付</li>
                    <li>在线支付</li>
                    <li>支付宝</li>
                    <li>微信支付</li>
                    <li>在线支付3</li>
                </ul>
            </div>
            <div style="height: 48px;line-height: 48px;background-color: #bbb;width: 790px;padding-left: 10px;"><span class="mnum">￥1999</span>
                <div style="float: right;font-size: 16px;line-height: 48px;height: 48px;background-color: #ff7466;padding: 0px 10px;color: #fff;cursor: pointer;">确认支付</div></div>
        </div>
    </div>
< <style>
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
    <script>
        $(function() {
            $(".payNav>li").click(function () {
                $(".payNav>li").removeClass();
                $(this).addClass("current");
                var i = $(this).attr("data-i");
                $(".payModeList").addClass("nodisplay");
                $(".payModeList").eq(i-1).removeClass("nodisplay");
            });
        });
    </script>
</body>
</html>