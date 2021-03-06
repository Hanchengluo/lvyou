<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/reg.css">
<script type="text/javascript">$("title").html('注册');</script>
</head>
<body>
<div>
    <img src="<?php echo ($config['view_public']); ?>img/login_bg.jpg" width="100%" height="100%" style="position: absolute;z-index: -10;">
    <div id="center" class="w340">
        <div><a class="logo" href="#"></a></div>
        <div class="input_block">
            <div class="top clearfix">
                <div class="current" data-i="form1">邮箱注册</div>
                <div data-i="form2">手机注册</div>
            </div>
            <div class="center">
                <form method="post" action="#" id="form1">
                    <input type="text" class="form-control" id="email"
                           placeholder="邮箱地址">
                    <div class="line2 clearfix">
                        <input type="text" class="form-control"
                               placeholder="图片验证码">
                        <img src="../img/yzm.png" width="80px" height="34px">
                    </div>
                    <div class="line3 clearfix">
                        <input type="text" class="form-control"
                               placeholder="邮箱验证码">
                        <input type="button" value="发送验证码">
                    </div>
                    <input type="text" class="form-control" id="account"
                           placeholder="用户名">
                    <input type="text" class="form-control" id="password"
                           placeholder="密码">
                    <input type="text" class="form-control" id="repassword"
                           placeholder="确认密码">
                    <input type="text" class="form-control" id="referrer"
                           placeholder="推荐人ID">
                    <input type="submit" class="btn btn-primary" value="注册">
                    <div class="clearfix form_link">
                        <div class="l">已有账号？<a href="login.html">登录</a></div>
                        <div class="r">同意<a href="#">会员条款</a>和<a href="#">免责声明</a></div>
                    </div>
                </form>
                <form method="post" action="#" id="form2" class="nodisplay">
                    <div class="line1 clearfix">
                        <select class="form-control">
                            <option>区号</option>
                            <option>86</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <input type="text" class="form-control" id="tel"
                               placeholder="手机号码">
                    </div>
                    <div class="line2 clearfix">
                        <input type="text" class="form-control"
                               placeholder="图片验证码">
                        <img src="../img/yzm.png" width="80px" height="34px">
                    </div>
                    <div class="line3 clearfix">
                        <input type="text" class="form-control"
                               placeholder="手机验证码">
                        <input type="button" class="btn btn-primary" value="发送验证码">
                    </div>
                    <input type="text" class="form-control" id="account"
                           placeholder="用户名">
                    <input type="text" class="form-control" id="password"
                           placeholder="密码">
                    <input type="text" class="form-control" id="repassword"
                           placeholder="确认密码">
                    <input type="text" class="form-control" id="referrer"
                           placeholder="推荐人ID">
                    <input type="submit" class="btn btn-primary" value="注册">
                    <div class="clearfix form_link">
                        <div class="l">已有账号？<a href="login.html">登录</a></div>
                        <div class="r">同意<a href="#">会员条款</a>和<a href="#">免责声明</a></div>
                    </div>
                </form>
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
</body>
</html>