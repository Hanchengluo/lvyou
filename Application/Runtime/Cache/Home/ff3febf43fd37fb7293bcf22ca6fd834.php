<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/question_reply.css">
<script type="text/javascript">$("title").html('回答页');</script>
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
        <div class="w820">
            <!--1-->
            <div class="questionB">
                <h1>拿着波兰的一年多次申根签可以直接只入境法国德国等国家吗？</h1>
                <div class="userInfo">
                    <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="30px"></a>
                    <a class="username" href="#">小明</a>
                </div>
                <div class="qDesc">
                    我于2017年初在波兰驻北京大使馆申请到了为期1年的多次入境申根签证，当时申请的时候填写的第一个入境申根国家是波兰。<br />
                        在2017年1月份去过波兰且只去过波兰一个国家。<br />
                        我计划于今年7月份直接入境德国或者法国，应该会在法国长时间停留，而不会去波兰，这样入境的时候会被法国或者德国拒入境吗？<br />
                        谢谢！
                </div>
                <div class="meta">
                    <span><i class="fa fa-eye">&nbsp;132人浏览</i>&nbsp;&nbsp;&nbsp;&nbsp;11个回答</span>
                    <a id="btn_answer">回答</a>
                </div>
            </div>
            <!--1/-->
            <!--2-->
            <div id="gl_comment">
                <ul class="commentList">
                    <?php $__FOR_START_16525__=0;$__FOR_END_16525__=10;for($i=$__FOR_START_16525__;$i < $__FOR_END_16525__;$i+=1){ ?><li>
                        <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                        <div>
                            <div class="comment_mate" style="padding-right: 10px;">
                                <a href="#">浅浅快跑</a><span>2017-01-06 17:53</span>
                            </div>
                            <div class="comment_content">
                                <p>皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香，夏季的小兰花，玫瑰花，秋季冬季都会有五颜六色的花儿在花园里迎接着来自远方的客人！</p>
                            </div>
                        </div>
                    </li><?php } ?>
                </ul>
            </div>
            <div id="comment">
                <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                <div class="clearfix">
                    <div>
                        <textarea cols="30" rows="10" placeholder=""></textarea>
                    </div>
                    <div id="btn_sub">回答</div>
                </div>
            </div>
            <!--2/-->

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

        //回答按钮（问题描述侧边的）点击
        $("#btn_answer").click(function(){
            $("textarea").focus();
        });
    });
</script>
</body>
</html>