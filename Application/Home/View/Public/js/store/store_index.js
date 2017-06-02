/**
 * Created by Administrator on 2017/6/1.
 */
$(function() {
    //类别列表
    $(".cateList>li").hover(function(){
        $(this).find("div").show();
    },function(){
        $(this).find("div").hide();
    });
    //商品顶部导航
    $(".ccNav>li").hover(function(){
        var i=$(this).attr("data-i");
        var j=$(this).attr("data-j");
        $(this).parent().find("li").removeClass();
        $(this).addClass("current");
        $(".ccShopsList").eq(j-1).children("li").hide();
        $(".ccShopsList").eq(j-1).children("li").eq(i-1).show();
    },function(){
    });
});