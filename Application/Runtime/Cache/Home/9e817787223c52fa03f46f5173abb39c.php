<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/lib/swiper/swiper-3.3.1.min.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/mdd_generalize.css">
<script type="text/javascript">$("title").html('目的地城市');</script>
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
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/dist_top.css">
<div id="place_top">
    <!--1-->
    <div class="plcTopBar w980 clearfix">
        <div id="plcName">
            <p><a href="#">Cinque terre</a></p>
            <p><a href="#">五渔村</a></p>
        </div>
        <div id="plcMeta">
            <span class="mainc">12435</span>人去过这里, <span class="mainc">958</span>条目的地点评
        </div>
    </div>
    <!--1/-->
    <!--2-->
    <div class="plcTopNav w980 clearfix">
        <ul class="L clearfix">
            <li><a href="#">城市概括</a></li>
            <li><a href="#">热门景点</a></li>
            <li><a href="#">当地美食</a></li>
            <li><a href="#">特惠酒店</a></li>
            <li><a href="#">旅游攻略</a></li>
            <li><a href="#">推荐路线</a></li>
            <li><a href="#">结伴出行</a></li>
            <li><a href="#">地图</a></li>
        </ul>
        <div class="R">
            <input id="search" class="search1" type="text">
            <a class="icon_search"><i class="fa fa-search"></i></a>
        </div>
    </div>
    <!--2/-->
</div>
<!--主体区 start-->
<div class="generalize_C w980 clearfix">
    <!--1-->
    <div class="L">
        <div class="catalog">
            <dl>
                <dt><a href="#c_1">目的地概况</a></dt>
                <dd><a href="#c_1_1">目的地速写</a></dd>
                <dd><a href="#c_1_2">当地人生活</a></dd>
                <dd><a href="#c_1_3">信仰与禁忌</a></dd>
                <dd><a href="#c_1_4">历史</a></dd>
                <dd><a href="#">环境</a></dd>
                <dd><a href="#">书籍推荐</a></dd>
                <dd><a href="#">电影推荐</a></dd>
                <dd><a href="#">语言帮助</a></dd>
            </dl>
        </div>
    </div>
    <!--1/-->
    <div class="R">
        <ul class="g_content">
            <li>
                <h2><a name="c_1">目的地概况</a></h2>
                <ul>
                    <li>
                        <h3><a name="c_1_1">目的地速写</a></h3>
                        <div>
                            <p>尼泊尔（Nepal）是全世界旅行者心中最重要的旅行目的地之一。在加德满都、帕坦、巴克塔普尔三个古国，遗留了许多世界一流的文化遗产，包括杜巴广场、猴庙、帕斯帕提那神庙（烧尸庙）、博大哈佛塔等。</p>
                            <p>尼泊尔也是徒步者的天堂，博卡拉周边和珠峰地区提供许多成熟徒步路线。尼泊尔还是激流漂流、滑翔伞等运动的天堂。在皇家奇特旺国家公园，旅行者可以在这里探索孟加拉虎和野生犀牛。尼泊尔自然和人文景观的多样性，尼泊尔人的热情友好，都会给游人留下最难忘的经历。</p>
                            <p>当地语言:  尼泊尔语</p>
                            <br />
                            <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="200px">
                            <br />
                        </div>
                    </li>
                    <li>
                        <h3><a name="c_1_2">目的地速写</a></h3>
                        <div>
                            <p>尼泊尔（Nepal）是全世界旅行者心中最重要的旅行目的地之一。在加德满都、帕坦、巴克塔普尔三个古国，遗留了许多世界一流的文化遗产，包括杜巴广场、猴庙、帕斯帕提那神庙（烧尸庙）、博大哈佛塔等。</p>
                            <p>尼泊尔也是徒步者的天堂，博卡拉周边和珠峰地区提供许多成熟徒步路线。尼泊尔还是激流漂流、滑翔伞等运动的天堂。在皇家奇特旺国家公园，旅行者可以在这里探索孟加拉虎和野生犀牛。尼泊尔自然和人文景观的多样性，尼泊尔人的热情友好，都会给游人留下最难忘的经历。</p>
                            <p>当地语言:  尼泊尔语</p>
                            <br />
                            <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="200px">
                            <br />
                        </div>
                    </li>
                    <li>
                        <h3><a name="c_1_3">目的地速写</a></h3>
                        <div>
                            <p>尼泊尔（Nepal）是全世界旅行者心中最重要的旅行目的地之一。在加德满都、帕坦、巴克塔普尔三个古国，遗留了许多世界一流的文化遗产，包括杜巴广场、猴庙、帕斯帕提那神庙（烧尸庙）、博大哈佛塔等。</p>
                            <p>尼泊尔也是徒步者的天堂，博卡拉周边和珠峰地区提供许多成熟徒步路线。尼泊尔还是激流漂流、滑翔伞等运动的天堂。在皇家奇特旺国家公园，旅行者可以在这里探索孟加拉虎和野生犀牛。尼泊尔自然和人文景观的多样性，尼泊尔人的热情友好，都会给游人留下最难忘的经历。</p>
                            <p>当地语言:  尼泊尔语</p>
                            <br />
                            <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="200px">
                            <br />
                        </div>
                    </li>
                    <li>
                        <h3><a name="c_1_4">目的地速写</a></h3>
                        <div>
                            <p>尼泊尔（Nepal）是全世界旅行者心中最重要的旅行目的地之一。在加德满都、帕坦、巴克塔普尔三个古国，遗留了许多世界一流的文化遗产，包括杜巴广场、猴庙、帕斯帕提那神庙（烧尸庙）、博大哈佛塔等。</p>
                            <p>尼泊尔也是徒步者的天堂，博卡拉周边和珠峰地区提供许多成熟徒步路线。尼泊尔还是激流漂流、滑翔伞等运动的天堂。在皇家奇特旺国家公园，旅行者可以在这里探索孟加拉虎和野生犀牛。尼泊尔自然和人文景观的多样性，尼泊尔人的热情友好，都会给游人留下最难忘的经历。</p>
                            <p>当地语言:  尼泊尔语</p>
                            <br />
                            <img src="<?php echo ($config['view_public']); ?>img/tx.jpeg" width="100%" height="200px">
                            <br />
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
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
 </body>
 </html>
<script>
    $(function() {
        $("#search").focus(function () {
            $(this).attr("class", "search2");
        });
        $("#search").blur(function () {
            $(this).attr("class", "search1");
        });
        $(".icon_search").click(function(){
            //TODO
            alert(1);
        });
        $("#search").keydown(function(event){
            if(event.keyCode=="13"){
                //TODO
                alert(1);
            }
        });
        // 滚动条滚动的函数
        $(window).scroll(function(){
            var top = $(document.body).scrollTop();
            var height = document.body.scrollHeight;
            var windowHeight = $(this).height();
            // 滚动条距底部距离
            var bottom = height-top-windowHeight;
            // 底部的高度
            var footerHeight = $("#footer").innerHeight();
            top = top<210?210-top:0;
            $(".catalog").css("top",top);

            bottom = bottom<footerHeight?footerHeight-bottom:0;
            console.log(bottom);
            $(".catalog").css("bottom",bottom);
        });
    });
</script>
</body>
</html>