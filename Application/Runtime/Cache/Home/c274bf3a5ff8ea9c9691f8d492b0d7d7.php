<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/user/order_details.css">
<script type="text/javascript">$("title").html('查看订单');</script>
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
<div class="qReply">
    <!--顶部的返回按钮 start-->
    <div class="backB">
        <a id="back" title="返回"><i class="fa fa-angle-left"></i></a>
    </div>
    <!--顶部的返回按钮 start-->
    <!--主体区域 start-->
    <div class="C w980">
        <!--1-->
        <div class="c_b1">
            <span>未支付</span><span class="hint">请在57分钟46秒内支付，逾时订单将自动关闭</span>
            <a href="#">立即支付</a>
        </div>
        <!--1/-->
        <!--2-->
        <div class="c_b2">
            <h3>订单信息</h3>
            <div class="order_info">
                <p class="order_no">订单号：5321348934987834</p>
                <p class="order_name">【五一/端午假期】石家庄直飞台湾8天往返含税机票(含7天无限流量上网卡)</p>
                <div class="order_meta">
                    <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="227" height="140">
                    <div>
                        <p>产品类型：五天往返机票</p>
                        <p>出行日期：2017-05-06</p>
                        <p>购票数量：1</p>
                        <p class="mnum">￥999.00</p>
                    </div>
                </div>
            </div>
        </div>
        <!--2/-->
        <!--3-->
        <div class="c_b3">
            <h3>旅客信息</h3>
            <div class="lkInfoB">
                <!--<p>旅客1</p>-->
                <ul class="infoList clearfix">
                    <li>
                        <p>中文姓</p>
                        <p>程</p>
                    </li>
                    <li>
                        <p>中文名</p>
                        <p>里斯</p>
                    </li>
                    <li>
                        <p>拼音姓</p>
                        <p>chen</p>
                    </li>
                    <li>
                        <p>拼音名</p>
                        <p>lisi</p>
                    </li>
                    <li>
                        <p>性别</p>
                        <p>男</p>
                    </li>
                    <li>
                        <p>国籍</p>
                        <p>中国</p>
                    </li>
                    <li>
                        <p>出生日期</p>
                        <p>2018-01-01</p>
                    </li>
                    <li>
                        <p>出生日期</p>
                        <p>2018-01-01</p>
                    </li>
                    <li>
                        <p>出生日期</p>
                        <p>2018-01-01</p>
                    </li>
                    <li>
                        <p>出生日期</p>
                        <p>2018-01-01</p>
                    </li>
                    <li>
                        <p>出生日期</p>
                        <p>2018-01-01</p>
                    </li>
                    <li>
                        <p>出生日期</p>
                        <p>2018-01-01</p>
                    </li>
                </ul>
            </div>
            <h3>联系人信息</h3>
            <div class="lxrInfoB">
                <ul class="infoList clearfix">
                    <li>
                        <p>中文姓</p>
                        <p>程</p>
                    </li>
                    <li>
                        <p>中文名</p>
                        <p>里斯</p>
                    </li>
                    <li>
                        <p>拼音姓</p>
                        <p>chen</p>
                    </li>
                    <li>
                        <p>拼音名</p>
                        <p>lisi</p>
                    </li>
                </ul>
            </div>
        </div>
        <!--3/-->

    </div>
    <!--主体区域 end-->
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
<script>
    $(function() {
        //返回按钮点击
        $("#back").click(function(){
            history.back(-1);
        });
    });
</script>
</body>
</html>