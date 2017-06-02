<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/index.css">
<script type="text/javascript">$("title").html('社区');</script>
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
    <div class="community">
        <!--顶部图片区 start-->
        <div>
            <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="400px">
        </div>
        <!--顶部图片区 end-->
        <!--中间主体区 start-->
        <div class="commC clearfix w980">
            <!--左块 start-->
            <div class="L">
                <!--1-->
                <ul class="Nav clearfix">
                    <li class="current" data-i="1"><a>游记攻略</a></li>
                    <li data-i="2"><a>结伴同游</a></li>
                    <li data-i="3"><a>版面列表</a></li>
                </ul>
                <!--1/-->
                <!--2-->
                <ul id="yjgl" class="commentList">
                    <?php $__FOR_START_45__=0;$__FOR_END_45__=5;for($i=$__FOR_START_45__;$i < $__FOR_END_45__;$i+=1){ ?><li class="clearfix">
                        <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                        <div style="width: 430px;float: left;">
                            <div class="comment_mate" style="padding-right: 10px;">
                                <a href="#">浅浅快跑</a>&nbsp;在&nbsp;<a href="#">挪威</a>&nbsp;发布的游记
                                <span><i class="fa fa-thumbs-up"></i>56人赞</span>
                                <span>最后回复于1天前</span>
                            </div>
                            <h3 style="padding-top: 10px;font-size: 16px;"><a href="#">关于旅行摄影分享（前期准备，人文，风光，星空，后期处理，延时摄影等）持续更新</a></h3>
                            <div class="comment_content">
                                <p>皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香</p>
                            </div>
                        </div>
                        <div class="img" style="float: right;margin-left: 0px;padding-top: 5px;">
                            <a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="168px" height="112px"></a>
                        </div>
                    </li><?php } ?>
                </ul>
                <!--2/-->
                <!--2.2/-->
                <ul id="jbty" class="commentList" hidden>
                    <?php $__FOR_START_31074__=0;$__FOR_END_31074__=5;for($i=$__FOR_START_31074__;$i < $__FOR_END_31074__;$i+=1){ ?><li class="clearfix">
                        <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                        <div style="width: 430px;float: left;">
                            <div class="comment_mate" style="padding-right: 10px;">
                                <a href="#">浅浅快跑</a>
                                <span>56人回复</span>
                                <span>最后回复于1天前</span>
                            </div>
                            <h3 style="padding-top: 10px;font-size: 16px;"><a href="#">高加索三国 6月结伴游</a></h3>
                            <div class="ty_info clearfix" style="">
                                <div style="">
                                    <p style="color: #999;">出发&nbsp;<span style="color: #444;">2017-04-03</span></p>
                                    <p style="color: #999;">返程&nbsp;<span style="color: #444;">2017-04-03</span></p>
                                </div>
                                <div style="float: left;padding-left: 10px;"><br />
                                   <span style="">曼谷、清迈</span>
                                </div>
                            </div>
                        </div>
                        <div class="img" style="">
                            <a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="168px" height="112px"></a>
                        </div>
                    </li><?php } ?>
                </ul>
                <!--2.2/-->
                <!--2.3-->
                <ul id="bmlb" hidden>
                    <li class="clearfix">
                        <h3>兴趣小组</h3>
                        <ul class="bmList">
                            <?php $__FOR_START_15091__=0;$__FOR_END_15091__=20;for($i=$__FOR_START_15091__;$i < $__FOR_END_15091__;$i+=1){ ?><li>
                                <a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px" height="60px"></a>
                                <div>
                                    <a href="#">签证</a>
                                    <p>出境旅行的第一步</p>
                                </div>
                            </li><?php } ?>
                        </ul>
                    </li>
                    <li>
                        <h3>亚洲</h3>
                        <ul class="bmList">
                            <li>
                                <a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px" height="60px"></a>
                                <div>
                                    <a href="#">签证</a>
                                    <p>出境旅行的第一步</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--2.3/-->
            </div>
            <!--左块 end-->
            <!--右块 start -->
            <div class="R">
                <!--3-->
                <div class="btn-def btn-issue" style="cursor: pointer;"><a>发新帖</a></div>
                <!--3/-->
                <!--4-->
                <div class="userB">
                    <div class="B1 clearfix">
                        <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="80px"></a>
                        <div style="">
                            <a class="uname" href="#">小明</a>
                            <div class="zan"><span>点赞(99)</span><span>喜欢(99)</span></div>
                        </div>
                    </div>
                    <ul class="B2 clearfix">
                        <li class="current" data-i="1"><span>我的社区</span></li>
                        <li data-i="2"><span>历史游览</span></li>
                    </ul>
                    <ul class="wo">
                        <li><a href="#">我的收藏</a><span>0</span></li>
                        <li><a href="#">我的草稿</a><span>0</span></li>
                        <li><a href="#">我的全部帖子</a><span>0</span></li>
                        <li><a href="#">我的回复</a><span>0</span></li>
                    </ul>
                    <ul class="his" style="display: none;">
                        <?php $__FOR_START_21424__=0;$__FOR_END_21424__=4;for($i=$__FOR_START_21424__;$i < $__FOR_END_21424__;$i+=1){ ?><li><a href="#">西班牙自驾必读，从法规角度解密西班牙自驾，附特色住宿推荐 【标志/规则/导航/儿童座椅/停车/驾照/葡萄牙过路费】</a></li><?php } ?>
                    </ul>
                </div>
                <!--4/-->
                <!--5-->
                <div class="commActivity">
                    <div style=""><a href="#" style="font-size: 21px;">社区活动</a></div>
                    <ul class="activityList">
                        <?php $__FOR_START_29225__=0;$__FOR_END_29225__=3;for($i=$__FOR_START_29225__;$i < $__FOR_END_29225__;$i+=1){ ?><li><a href="#"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="270px" height="150px"></a></li><?php } ?>
                    </ul>
                </div>
                <!--5/-->

            </div>
            <!--右块 end-->
        </div>
        <!--中间主体区 end-->
    </div>
    <div class="issue" hidden>
        <div class="issueB">
            <ul class="issueList clearfix">
                <li><a href="#">写游记</a></li>
                <li><a href="#">写攻略</a></li>
                <li><a href="#">去提问</a></li>
                <li><a href="#">求结伴</a></li>
                <li><a href="#">来讨论</a></li>
            </ul>
            <div class="clearIcon"><i class="fa fa-times-circle"></i></div>
        </div>
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
        //
        $(".B2>li").click(function () {
            $(".B2>li").removeClass();
            $(this).addClass("current");
            var i = $(this).attr("data-i");
            if(i==1){
                $(".wo").css("display","block");
                $(".his").css("display","none");
            }else if(i==2){
                $(".his").css("display","block");
                $(".wo").css("display","none");
            }
        });
        //发新帖按钮点击
        $(".btn-issue").click(function () {
            $(".issue").show();
        });
        $(".clearIcon").click(function () {
            $(".issue").hide();
        });
        //左侧顶部导航点击
        $(".Nav>li").click(function () {
            $(".Nav>li").removeClass();
            $(this).addClass("current");
            var i = $(this).attr("data-i");
            if(i==1){
                $("#yjgl").show();
                $("#jbty").hide();
                $("#bmlb").hide();
            }else if(i==2){
                $("#yjgl").hide();
                $("#jbty").show();
                $("#bmlb").hide();
            }else if(i==3){
                $("#yjgl").hide();
                $("#jbty").hide();
                $("#bmlb").show();
            }
        });
    });
</script>
</body>
</html>