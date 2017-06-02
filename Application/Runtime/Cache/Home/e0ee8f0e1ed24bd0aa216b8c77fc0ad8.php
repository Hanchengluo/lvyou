<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/jbtx.css">
<script type="text/javascript">$("title").html('结伴同行');</script>
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
    <div class="jbtx">
        <!--顶部滑动图片 start-->
        <div class="T_img">
            <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="320px">
        </div>
        <!--顶部滑动图片 end-->
        <!--顶部导航区 start-->
        <div style="background-color: #efefef;position: relative;">
            <ul class="T_nav w980 clearfix">
                <li><a href="#">论坛首页</a></li>
                <li class="current"><a href="#">结伴同行</a></li>
                <li class="hasHideB" data-i="1"><a href="javaScript:;">欧洲板块&nbsp;<i class="fa fa-angle-down"></i></a>
                    <div class="bulge" hidden></div>
                </li>
                <li class="hasHideB" data-i="2"><a href="javaScript:;">亚洲板块&nbsp;<i class="fa fa-angle-down"></i></a><div class="bulge" hidden></div></li>
                <li class="hasHideB" data-i="3"><a href="javaScript:;">美洲板块&nbsp;<i class="fa fa-angle-down"></i></a><div class="bulge" hidden></div></li>
                <li class="hasHideB" data-i="4"><a href="javaScript:;">大洋洲板块&nbsp;<i class="fa fa-angle-down"></i></a><div class="bulge" hidden></div></li>
                <li class="hasHideB" data-i="5"><a href="javaScript:;">非洲板块&nbsp;<i class="fa fa-angle-down"></i></a><div class="bulge" hidden></div></li>
                <li class="hasHideB" data-i="6"><a href="javaScript:;">全部板块&nbsp;<i class="fa fa-angle-down"></i></a><div class="bulge" hidden></div></li>
            </ul>
            <ul>
                <?php $__FOR_START_29403__=0;$__FOR_END_29403__=6;for($i=$__FOR_START_29403__;$i < $__FOR_END_29403__;$i+=1){ ?><li>
                        <div class="hideB" data-i="<?php echo ($i); ?>" hidden>
                            <ul class="w980 bk_list">
                                <?php $__FOR_START_28753__=0;$__FOR_END_28753__=5;for($j=$__FOR_START_28753__;$j < $__FOR_END_28753__;$j+=1){ ?><li>
                                    <ul class="bk_item">
                                        <li><a href="#">法国/摩纳哥</a></li>
                                        <li><a href="#">法国/摩纳哥</a></li>
                                        <li><a href="#">法国/摩纳哥/摩纳哥</a></li>
                                    </ul>
                                </li><?php } ?>
                            </ul>
                        </div>
                    </li><?php } ?>
            </ul>
        </div>
        <!--顶部导航区 end-->
        <!--主体区域 1：选择条件块 start-->
        <div class="selectB w980">
            <div class="select1"><span>出发时间：</span>
                <ul class="clearfix">
                    <li><input type="checkbox">不限</li>
                    <li><input type="checkbox">5月</li>
                    <li><input type="checkbox">6月</li>
                    <li><input type="checkbox">7月</li>
                    <li><input type="checkbox">8月</li>
                </ul>
            </div>
            <div class="select2 clearfix"><span>目的地：</span>
                <div style="float: left;">
                    <div>
                        <input id="search" type="text">
                        <a class="icon_search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="tuij">
                        <span>推荐：</span><a href="#">法国</a><a href="#">挪威</a><a href="#">挪威</a><a href="#">挪威</a><a href="#">挪威</a>
                    </div>
                </div>
            </div>
        </div>
        <!--主体区域 1：选择条件块 end-->
        <!--主体区域 2：排序方式和发布结伴btn start-->
        <div class="sortB">
            <div class="w980">
                <div class="L">
                    <a class="current">最新发布</a><a>最近出发</a>
                </div>
                <div class="R">
                    <a href="#">发布结伴</a>
                </div>
            </div>
        </div>
        <!--主体区域 2：排序方式和发布结伴btn end-->
        <!--主体区域 3：内容区 start-->
        <ul class="itemList w980 clearfix">
            <?php $__FOR_START_20856__=0;$__FOR_END_20856__=8;for($i=$__FOR_START_20856__;$i < $__FOR_END_20856__;$i+=1){ ?><li>
                    <a href="#">
                        <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="230px" height="230px">
                    </a>
                    <div class="baseInfo">
                        <p>
                            <a><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="40px"></a>
                            <a>里斯</a>
                        </p>
                        <p><span>目的地：</span><strong>印度</strong></p>
                        <p><span>时间：</span><strong>2017.05.09</strong>-<strong>2017.05.21</strong></p>
                    </div>
                </li><?php } ?>
        </ul>
        <!--主体区域 3：内容区 end-->
        <!--主体区域 4：分页区 start-->
        <div class="pageB">
            <div class="w980">
                <div style="float: right;">
                    <a href="javascript:void(0);">上一页</a>
                    <span>
                        <a class="active" href="javascript:void(0);">1</a>
                        <a href="javascript:void(0);">2</a>
                        <a href="javascript:void(0);">3</a>
                        <span>...</span>
                        <a href="javascript:void(0);">100</a>
                    </span>
                    <a href="javascript:void(0);">下一页</a>
                </div>
            </div>
        </div>
        <!--主体区域 4：分页区 end-->


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
            //移动到有hide块的nav上
            $(".hasHideB").hover(function(){
                var i=$(this).attr("data-i");
                $(this).find(".bulge").show();
                $(".hideB").eq(i-1).show();
            },function(){
                var i=$(this).attr("data-i");
                $(this).find(".bulge").hide();
                $(".hideB").eq(i-1).hide();
            });
            //移动到hide块上
            $(".hideB").hover(function(){
                var i=$(this).attr("data-i");
                $(".bulge").eq(i-1).show();
                $(this).show();
            },function(){
                var i=$(this).attr("data-i");
                $(".bulge").eq(i-1).hide();
                $(this).hide();
            });
        });
    </script>
</body>
</html>