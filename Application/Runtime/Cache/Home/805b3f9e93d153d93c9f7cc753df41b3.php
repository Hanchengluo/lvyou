<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/index/yjgl.css">
<script type="text/javascript">$("title").html('游记攻略');</script>
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
    <div class="img">
        <img src="<?php echo ($config['view_public']); ?>img/top.jpeg" style="width: 100%;vertical-align: bottom;">
    </div>
    <div style="position: relative;top:-90px;">
        <div id="title_bg">
            <div id="gl_title_block" class="w1000 clearfix">
                <div id="gl_title"><h1>听到博斯普鲁斯的忧伤细语--我的伊斯坦布尔小游记我的伊斯坦布尔小游记12我的伊斯坦布尔小游记</h1></div>
                <div id="collect"><i class="fa fa-star"></i><p>收藏（999）</p></div>
                <div id="share"><i class="fa fa-share-alt"></i><p>分享（999）</p></div>
            </div>
        </div>
        <div id="user_info" class="w1000">
            <div id="user_tx"><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg"></div>
            <div id="base_info">
                <span>小明（柳州）</span><span>2017-05-08 10:12:01</span><span>浏览 1231</span><br />
                <span>出发时间/2017-05-01</span><span>出行天数/3天</span><span>人物/一个人</span>
            </div>
        </div>
        <div id="center" class="w1000 clearfix">
            <div class="left">
                <div id="gl_content">
                    <p>去年春的日本廣島及四國之旅，照慣例也描繪了一些人物，拖延了超過半年的時間才完成八張，實在是因為自己的懶散。開始的時候感覺畫得很生疏，筆觸很凌亂，也代表當時的心境吧。很特別的是，選擇了八個人物主題畫完以後，才發現這些主角全都是跟火車或電車有關，應該是那次的旅行因為大量的倚靠當地的公交系統，在那些地方讓我有大量時間觀察到人群所致。</p>
                        <div><img src="<?php echo ($config['view_public']); ?>img/yj_img.jpeg"></div>
                    <p>去年春的日本廣島及四國之旅，照慣例也描繪了一些人物，拖延了超過半年的時間才完成八張，實在是因為自己的懶散。開始的時候感覺畫得很生疏，筆觸很凌亂，也代表當時的心境吧。很特別的是，選擇了八個人物主題畫完以後，才發現這些主角全都是跟火車或電車有關，應該是那次的旅行因為大量的倚靠當地的公交系統，在那些地方讓我有大量時間觀察到人群所致。</p>
                    <div><img src="<?php echo ($config['view_public']); ?>img/yj_img.jpeg"></div>
                    <p>去年春的日本廣島及四國之旅，照慣例也描繪了一些人物，拖延了超過半年的時間才完成八張，實在是因為自己的懶散。開始的時候感覺畫得很生疏，筆觸很凌亂，也代表當時的心境吧。很特別的是，選擇了八個人物主題畫完以後，才發現這些主角全都是跟火車或電車有關，應該是那次的旅行因為大量的倚靠當地的公交系統，在那些地方讓我有大量時間觀察到人群所致。</p>
                    <div><img src="<?php echo ($config['view_public']); ?>img/yj_img.jpeg"></div>
                </div>
                <div id="gl_comment">
                    <ul class="comment_list">
                        <?php $__FOR_START_26008__=1;$__FOR_END_26008__=5;for($i=$__FOR_START_26008__;$i < $__FOR_END_26008__;$i+=1){ ?><li>
                            <a href="#"><img class="tx" src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="60px"></a>
                            <div>
                                <div class="comment_mate">
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
                            <textarea cols="30" rows="10" placeholder="说说你的疑问"></textarea>
                        </div>
                        <div id="btn_sub">发布</div>
                    </div>
                </div>
            </div>
            <div class="right">
                <ul class="xggl">
                    <li>相关攻略</li>
                    <?php $__FOR_START_16881__=1;$__FOR_END_16881__=4;for($i=$__FOR_START_16881__;$i < $__FOR_END_16881__;$i+=1){ ?><li>
                            <a href="#">
                                <div><img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="200px"></div>
                                <div class="gl_title">听到博斯普鲁斯的忧伤细语--我的伊斯坦布尔小游记</div>
                            </a>
                        </li><?php } ?>
                </ul>
            </div>
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
 </body>
 </html>
</body>
</html>