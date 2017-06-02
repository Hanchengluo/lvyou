<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/lib/swiper/swiper-3.3.1.min.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/user/user_index.css">
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
<!--顶部 start-->
<div id="user_top">
    <!--1-->
    <div class="u_banner">
        <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="360px">
        <div id="btn_upload_img" hidden>上传图片</div>
        <input type="file" name="u_pic" hidden>
    </div>
    <!--1/-->
    <!--2-->
    <div class="u_info w980">
        <div class="u_tx">
            <a><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="120px"></a>
        </div>
        <div class="info">
            <span>里斯</span><span>VIP12</span>
            <a href="#">签到</a><a href="#">消息</a>
        </div>
    </div>
    <!--2/-->
</div>
<!--顶部 end-->
<!--主体区 start-->
<div class="user_c w980 clearfix">
    <div class="L">
        <ul class="leftNav">
            <li class="current"><a href="?c=user&a=collect">我的收藏</a></li>
            <li><a href="?c=user&a=message">我的锦囊</a></li>
            <li><a href="?c=user&a=order">我的订单</a></li>
            <li><a href="?c=user&a=yhq">优惠券</a></li>
            <li><a href="?c=user&a=tie">我的帖子</a></li>
            <li><a href="?c=user&a=jieban">我的结伴</a></li>
            <li><a href="?c=user&a=question">我的提问</a></li>
            <li><a href="?c=user&a=cz">会员充值</a></li>
        </ul>
    </div>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/user/user_cz.css">
<script type="text/javascript">$("title").html('会员充值');</script>

    <div class="R">
        <div class="sortMode"><a href="#">会员充值</a></div>
        <div class="czB">
            <div style="text-align: center;">
            <form action="" method="post">
                <input type="text" name="v" id="v" placeholder="输入充值金额"><input type="submit" value="立即充值">
            </form>
            </div>
            <ul class="djList">
                <li><i class="fa fa-question-circle"></i>&nbsp;&nbsp;会员等级介绍</li>
                <li data-v="1000">VIP1 1000元</li>
                <li data-v="2000">VIP2 2000元</li>
                <li data-v="3000">VIP3 3000元</li>
                <li data-v="4000">VIP4 4000元</li>
                <li data-v="5000">VIP5 5000元</li>
                <li data-v="6000">VIP6 6000元</li>
                <li data-v="7000">VIP6 7000元</li>
            </ul>
            <div class="gz">
                <h3>会员规则</h3>
                <dl>
                    <dd>1.机票下单前，请仔细阅读商品详情（价格包含/不含、预定须知、退款政策等），如有疑问可致电商家客服咨询。</dd>
                    <dd>2.订购机票产品，请正确填写个人信息。您的支付时间为下单后60分钟内，请及时支付。如遇到支付问题，可与穷游网（即北京最世界国际旅行社有限公司）客服联系，穷游网（即北京最世界国际旅行社有限公司）客服将会协助您解决遇到的问题。</dd>
                    <dd>3.机票下单预订后，商家会在1个工作日内与您联系并确认出行信息。</dd>
                    <dd>4.穷游网（即北京最世界国际旅行社有限公司）有独立于商家的质控体系，任何商家违约，用户都会获得合理赔偿。具体详见“机票产品保障条例”。</dd>
                    <dd>5.为了不耽误您的行程，请您在国际航班起飞前120分钟到达机场办理登机以及出入境相关手续；如涉及海外国内段行程，请您在航班起飞前60分钟到达机场办理登机手续。</dd>
                    <dd>6.因不可抗力的客观原因（如天灾、战争、罢工等）或航空公司自身问题导致的航班延误或取消，商家将在您提供证明的情况下，根据实际情况，为您全额或部分退款。</dd>
                </dl>
            </div>
        </div>
    </div>


<script>
    $(function() {
        //显示/隐藏 上传图片 按钮
        $(".u_banner").hover(function(){
            $("#btn_upload_img").show();
        },function(){
            $("#btn_upload_img").hide();
        });
        //右侧顶部导航点击
        $("#nav>li").click(function(){
            //alert(1);
            $("#nav>.current").removeClass();
            $(this).addClass("current");
        });
        //选择充值的金额
        $(".djList>li:nth-child(n+2)").click(function(){
            var v = $(this).attr("data-v");
            //TODO
        });
    });
</script>
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
        var c_href=window.location.href;
        $(".leftNav>li>a").each(function(){
            var href=$(this).attr("href");
            if(c_href.indexOf(href)!=-1){
                $(".leftNav>li").removeClass();
                $(this).parent().addClass("current");
            }
        });
        //显示/隐藏 上传图片 按钮
        $(".u_banner").hover(function(){
            $("#btn_upload_img").show();
        },function(){
            $("#btn_upload_img").hide();
        });
        //右侧顶部导航点击
        $("#nav>li").click(function(){
            //alert(1);
            $("#nav>.current").removeClass();
            $(this).addClass("current");
        });
    });
</script>
</body>
</html>