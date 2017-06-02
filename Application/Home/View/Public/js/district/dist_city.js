/**
 * Created by Administrator on 2017/5/31.
 */
load_data_1("?a=ajax_yjgl");
function before(th){
    $(".jiaolNav>li").removeClass();
    $(th).addClass("current");
    $("#glList").empty();
    $("#loading").show();
    $("#option").hide();
}
function load_data_1(url){
    $.ajax({
        type: "post",
        url: url,
        dataType: "json",
        success: function(data) {

            var li="";
            for(var i=0;i<data["list"].length;i++){
                var temp=data["list"][i];
                li='<li>'
                    +'<a href="'+temp["user"]["link"]+'"><img class="tx" src="'+temp["user"]["tx"]+'" width="60px"></a>'
                    +'<div>'
                    +'<h3><a href="'+temp["link"]+'">'+temp["title"]+'</a></h3>'
                    +'<div class="comment_mate" style="padding-right: 10px;">'
                    +'<a href="'+temp["user"]["link"]+'">'+temp["user"]["name"]+'</a><span>'+temp["date"]+'</span>'
                    +'<span style="float: right;"><i class="fa fa-heart"></i>&nbsp;'+temp["like"]+'</span>'
                    +'</div>'
                    +'<div class="comment_content">'
                    +'<p>'+temp["desc"]+'</p>'
                    +'<img src="'+temp["pics"][0]+'">'
                    +'</div>'
                    +'</div>'
                    +'</li>'
                console.log(li);
                $("#glList").append(li);
            }
        },
        complete:function(data){
            $("#loading").hide();
            $("#option").show();
        }
    });
}
function load_data_2(url){
    $.ajax({
        type: "post",
        url: url,
        dataType: "json",
        success: function(data) {
            var li="";
            for(var i=0;i<data["list"].length;i++){
                var temp=data["list"][i];
                li='<li>'
                        +'<a href="'+temp["user"]["link"]+'"><img class="tx" src="'+temp["user"]["tx"]+'" width="60px"></a>'
                        +'<div>'
                        +'<h3><a href="'+temp["link"]+'">'+temp["title"]+'</a></h3>'
                        +'<div class="comment_mate" style="padding-right: 10px;">'
                        +'<a href="'+temp["user"]["link"]+'">'+temp["user"]["name"]+'</a><span>'+temp["date"]+'</span>'
                        +'<span style="float: right;"><i class="fa fa-heart"></i>&nbsp;'+temp["like"]+'</span>'
                        +'</div>'
                        +'<div class="comment_content">'
                        +'<p>'+temp["desc"]+'</p>'
                        +'</div>'
                        +'</div>'
                        +'</li>';
                $("#glList").append(li);
            }
        },
        complete:function(data){
            $("#loading").hide();
        }
    });
}
function load_data_3(url){
    $.ajax({
        type: "post",
        url: url,
        dataType: "json",
        success: function(data) {
            var li="";
            for(var i=0;i<data["list"].length;i++){
                var temp=data["list"][i];
                li='<li>'
                    +'<a href="'+temp["user"]["link"]+'"><img class="tx" src="'+temp["user"]["tx"]+'" width="60px"></a>'
                    +'<div>'
                    +'<div class="comment_mate" style="padding-right: 10px;">'
                    +'<a href="'+temp["user"]["link"]+'">'+temp["user"]["name"]+'</a><span>'+temp["date"]+'</span>'
                    +'<span style="float: right;"><i class="fa fa-heart"></i>&nbsp;'+temp["like"]+'</span>'
                    +'</div>'
                    +'<h3 style="margin-top: 10px;"><a href="'+temp["link"]+'">'+temp["title"]+'</a></h3>'
                    +'</div>'
                    +'</li>';
                $("#glList").append(li);
            }
        },
        complete:function(data){
            $("#loading").hide();
        }
    });
}
function load_data_4(url){
    $.ajax({
        type: "post",
        url: url,
        dataType: "json",
        success: function(data) {
            var li="";
            for(var i=0;i<data["list"].length;i++){
                var temp=data["list"][i];
                li='<li>'
                    +'<a href="'+temp["user"]["link"]+'"><img class="tx" src="'+temp["user"]["tx"]+'" width="60px"></a>'
                    +'<div>'
                    +'<div class="comment_mate" style="padding-right: 10px;">'
                    +'<a href="'+temp["user"]["link"]+'">'+temp["user"]["name"]+'</a><span>'+temp["date"]+'</span>'
                    +'<span>';
                for(var n=1;n<=temp["star"];n++){
                    li=li+'<i class="fa fa-star"></i>';
                }
                li=li+'</span>'
                    +'</div>'
                    +'<div class="comment_content">'
                    +'<p>'+temp["desc"]+'</p>'
                    +'</div>'
                    +'</div>'
                    +'</li>';
                $("#glList").append(li);
            }
        },
        complete:function(data){
            $("#loading").hide();
        }
    });
}
$(function() {
    // 推荐nav
    $(".tuijNav>li").hover(function(){
        var i=$(this).attr("data-i");
        $(".tuijNav>li").removeClass();
        $(this).addClass("current");
        $("#tuij_list>li").hide();
        $("#tuij_list>li").eq(i-1).show();
    });
    // 交流区nav
    $("#jiaol_yjgl").click(function(){
        before(this);
        var url="?a=ajax_yjgl";
        load_data_1(url);
    });
    $("#jiaol_wd").click(function(){
        before(this);
        var url="?a=ajax_wd";
        load_data_2(url);
    });
    $("#jiaol_jb").click(function(){
        before(this);
        var url="?a=ajax_jb";
        load_data_3(url);
    });
    $("#jiaol_dp").click(function(){
        before(this);
        var url="?a=ajax_dp";
        load_data_4(url);
    });
    // 排序方式
    $("#option>span").click(function(){
        $("#option>span").removeClass();
        $(this).addClass("current");
        $("#glList").empty();
        $("#loading").show();
        var url="?a=ajax_yjgl";
        load_data_1(url);
    });

});