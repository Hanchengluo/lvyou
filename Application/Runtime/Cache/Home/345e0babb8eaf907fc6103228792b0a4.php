<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/forget.css">
<script type="text/javascript">$("title").html('忘记密码');</script>
</head>
<body>
<div>
    <img src="<?php echo ($config['view_public']); ?>img/login_bg.jpg" width="100%" height="100%" style="position: fixed;z-index: -10;">
    <div id="center" class="w340">
        <div><a class="logo" href="#"></a></div>
        <div class="input_block">
            <div class="top">
                忘记密码
            </div>
            <div class="center">
                <form method="post" action="#" id="form1">
                    <input type="text" class="form-control" id="email"
                           placeholder="邮箱地址">
                    <div class="line2 clearfix">
                        <input type="text" class="form-control"
                               placeholder="图片验证码">
                        <img src="../img/yzm.png" width="80px" height="30px">
                    </div>
                    <div class="line3 clearfix">
                        <input type="text" class="form-control"
                               placeholder="邮箱验证码">
                        <input type="button" class="btn btn-primary" value="发送验证码">
                    </div>
                    <input type="text" class="form-control" id="password"
                           placeholder="密码">
                    <input type="text" class="form-control" id="repassword"
                           placeholder="确认密码">
                    <input type="submit" class="btn btn-primary" value="确认">
                    <div class="clearfix form_link">
                        <div class="l">已有账号？<a href="login.html">登录</a></div>
                        <div class="r">同意<a href="#">会员条款</a>和<a href="#">免责声明</a></div>
                    </div>
                </form>
            </div>
        </div>
</div>
 <style>
        .w1000{width: 1000px;margin: 0 auto;}
        #footer{height:160px;margin-top: 50px;padding-top: 20px;padding-bottom:20px;background-color: rgba(255,255,255,.6)}
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