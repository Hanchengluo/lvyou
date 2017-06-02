<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/index/write_order.css">
<script type="text/javascript">$("title").html('填写订单');</script>
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
    <div class="writeOrder">
        <!--顶部的step块 start-->
        <div class="stepB w1080">
            <ul class="stepList clearfix">
                <li class="step1"><div><i></i></div><p>选择产品</p></li>
                <li class="step2"><div><i></i></div><p>填写订单</p></li>
                <li class="step3 h"><div><i></i></div><p>在线支付</p></li>
                <li class="step4 h"><div><i></i></div><p>支付成功</p></li>
            </ul>
        </div>
        <!--顶部的step块 end-->
        <!--主体区 start-->
        <div class="orderC w1080 clearfix">
            <div class="L">
                <!--1-->
                <div class="orderInfo">
                    <h2>北京直飞冲绳4/5天往返含税机票（赠送单次/三年个人旅游签证+wifi）</h2>
                    <div>
                        <div class="goodsCateName">香港4天往返机票&nbsp;&nbsp;早对晚早对晚早对</div>
                        <div style="margin-top: 20px;color: #999;font-weight: bold;">使用时间</div>
                        <div style="padding-left: 12px;"><span style="font-size: 20px;line-height: 28px;">2017-05-11</span><span style="float: right;font-size: 16px;color: #666;line-height: 28px;">星期四</span></div>
                        <div style="margin-top: 20px;color: #999;font-weight: bold;">价格明细</div>
                        <div style="padding-left: 12px;padding-bottom: 20px;"><span style="font-size: 16px;">数量</span><span style="float: right;font-size: 16px;color: #666;">￥199&nbsp;x&nbsp;1</span></div>
                        <div style="line-height: 68px;border-top: 1px solid #efefef;"><span>总价</span><span class="mnum" style="float: right">￥1999</span></div>
                    </div>
                </div>
                <!--1/-->
            </div>
            <div class="R">
                <!--2-->
                <h3>快递信息</h3>
                <div class="B1">
                    <p class="hint">请确保您填写的信息真实准确，否则会影响您的顺利出行。</p>
                    <textarea></textarea>
                </div>
                <!--2/-->
                <!--4-->
                <h3>联系人信息</h3>
                <div class="B2">
                    <ul class="B2InputList">
                        <li><span>姓名</span><input type="text"></li>
                        <li><span>手机号</span><input type="text"></li>
                        <li><span>邮箱</span><input type="text"></li>
                        <li><span>微信</span><input type="text"></li>
                    </ul>
                </div>
                <!--4/-->
                <!--5-->
                <h3>备注</h3>
                <div class="B4">
                    <textarea></textarea>
                </div>
                <!--5/-->
                <!--6-->
                <h3>优惠信息</h3>
                <div class="B5">
                    <select style="width: 680px;line-height: 42px;height: 42px;">
                        <option value="1">选择优惠券</option>
                        <option value="2">满1000减10</option>
                        <option value="3">满2000减30</option>
                    </select>
                </div>
                <!--6/-->
                <!--7-->
                <div style="height: 48px;line-height: 48px;background-color: #bbb;width: 670px;padding-left: 10px;"><span class="mnum">￥1999</span>
                    <div style="float: right;font-size: 16px;line-height: 48px;height: 48px;background-color: #ff7466;padding: 0px 10px;color: #fff;cursor: pointer;">同意以下条款，提交订单</div></div>
                <!--7/-->
                <!--8-->
                <h3>预定须知</h3>
                <div>
                    <dl>
                        <dd>1.机票下单前，请仔细阅读商品详情（价格包含/不含、预定须知、退款政策等），如有疑问可致电商家客服咨询。</dd>
                        <dd>2.订购机票产品，请正确填写个人信息。您的支付时间为下单后60分钟内，请及时支付。如遇到支付问题，可与穷游网（即北京最世界国际旅行社有限公司）客服联系，穷游网（即北京最世界国际旅行社有限公司）客服将会协助您解决遇到的问题。</dd>
                        <dd>3.机票下单预订后，商家会在1个工作日内与您联系并确认出行信息。</dd>
                        <dd>4.穷游网（即北京最世界国际旅行社有限公司）有独立于商家的质控体系，任何商家违约，用户都会获得合理赔偿。具体详见“机票产品保障条例”。</dd>
                        <dd>5.为了不耽误您的行程，请您在国际航班起飞前120分钟到达机场办理登机以及出入境相关手续；如涉及海外国内段行程，请您在航班起飞前60分钟到达机场办理登机手续。</dd>
                        <dd>6.因不可抗力的客观原因（如天灾、战争、罢工等）或航空公司自身问题导致的航班延误或取消，商家将在您提供证明的情况下，根据实际情况，为您全额或部分退款。</dd>
                    </dl>
                </div>
                <!--8/-->
            </div>
        </div>
        <!--主体区 end-->
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
</body>
</html>