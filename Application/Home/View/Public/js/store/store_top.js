/**
 * Created by Administrator on 2017/6/1.
 */
$(function() {
    $(document.body).click(function(){
        $(".selectPlace").attr("data-i","0");
        $(".selectPlace").hide();
    });
    $(".selectPlace").click(function(){
        event.stopPropagation();
    });
    //选择城市的字母导航
    $(".zmNav>li").click(function(){
        $(".zmNav>li").removeClass();
        $(this).addClass("current");
        var i=$(this).attr("data-i");
        $(".zmList").hide();
        $(".zmList").eq(i-1).show();
    });
    //选择出发地和目的地
    $(".start").click(function(){
        var i=$(".selectPlace").attr("data-i");
        //选择地址块没有显示
        if(i==0){
            $(".selectPlace").show();
            $(".selectPlace").css("left","200px");
            $(".selectPlace").attr("data-i","1");
        }else if(i==2){
            $(".selectPlace").css("left","200px");
            $(".selectPlace").attr("data-i","1");
        }else{
            $(".selectPlace").hide();
            $(".selectPlace").attr("data-i","0");
        }
        event.stopPropagation();
    });
    $(".end").click(function(){
        var i=$(".selectPlace").attr("data-i");
        //选择地址块没有显示
        if(i==0){
            $(".selectPlace").show();
            $(".selectPlace").css("left","312px");
            $(".selectPlace").attr("data-i","2");
        }else if(i==1){
            $(".selectPlace").css("left","312px");
            $(".selectPlace").attr("data-i","2");
        }else{
            $(".selectPlace").hide();
            $(".selectPlace").attr("data-i","0");
        }
        event.stopPropagation();
    });
    //选择城市块的a标签点击
    $(".selectPlace a").click(function(){
        var i=$(".selectPlace").attr("data-i");
        var cityname=$(this).html();
        if(i==1){
            $("#startCityName").html(cityname);
        }else if(i==2){
            $("#endCityName").html(cityname);
        }
        $(".selectPlace").hide();
        $(".selectPlace").attr("data-i","0");
    });
});