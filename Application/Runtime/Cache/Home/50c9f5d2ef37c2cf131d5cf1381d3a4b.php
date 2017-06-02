<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/login.css">
<script type="text/javascript">$("title").html('登录');</script>
</head>
<body>
    <div>
        <img src="<?php echo ($config['view_public']); ?>img/login_bg.jpg" width="100%" height="100%" style="position: fixed;z-index: -10;">
        <div id="center" class="w340">
            <div><a class="logo" href="#"></a></div>
            <div class="input_block">
                <div class="top clearfix">
                    <div class="current" data-i="form1">账号登陆</div>
                    <div data-i="form2">付费会员登陆</div>
                </div>
                <div class="center">
                    <form method="post" action="#" id="form1">
                        <input type="text" class="form-control" id="account"
                               placeholder="邮箱、手机号码">
                        <input type="text" class="form-control" id="password"
                               placeholder="密码">
                        <div class="form_link"><a href="#">忘记密码？</a></div>
                        <input type="submit" class="btn btn-primary" value="登陆">
                        <div class="form_link_2">
                            <input id="memberPass" type="checkbox"><label for="memberPass">记住账号</label>
                            <a href="reg.html">立即注册</a>
                        </div>
                    </form>
                    <form method="post" action="#" id="form2" class="nodisplay">
                        <input type="text" id="account2"
                               placeholder="邮箱、手机号码">
                        <input type="text" class="form-control" id="password2"
                               placeholder="密码">
                        <input type="submit" value="登陆">
                    </form>
                </div>
                <div class="bottom">
                    <p>第三方登陆</p>
                    <ul class="clearfix">
                        <li><a class="login_qq" href="#" title="QQ"></a></li>
                        <li><a class="login_wx" href="#" title="微信"></a></li>
                        <li><a class="login_wb" href="#" title="微博"></a></li>
                        <li><a class="login_tb" href="#" title="淘宝"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $(".input_block .top>div").click(function(){
                $(".input_block .top>div").removeClass();
                $(this).addClass("current");
                var formid=$(this).attr("data-i");
                if(formid=="form1"){
                    $("#form1").removeClass();
                    $("#form2").addClass("nodisplay");
                }else if(formid=="form2"){
                    $("#form2").removeClass();
                    $("#form1").addClass("nodisplay");
                }
            });
        });
    </script>
     <style>
        .w1000{width: 1000px;margin: 0 auto;}
        #footer{height:160px;margin-top: 50px;padding-top: 20px;padding-bottom:20px;background-color: rgba(0,0,0,.1);border-top:1px solid rgba(0,0,0,.2) }
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