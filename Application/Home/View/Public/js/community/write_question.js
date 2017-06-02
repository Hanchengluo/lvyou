var tagnum=0;
//recommend_list中的li点击
function itemClick1(e){
    tagnum+=1;
    $(".tag_list").append("<dd>"+$(e).html()+"</dd>");
    $(".recommend_list").hide();
    $(".addTag_input").val("");
    $(".recommend_list").html("");
    if(tagnum>=5){
        $(".addTag_a").hide();
    }
}
$(function() {
    $(".addTag_a").click(function () {
        $(this).hide();
        $(".addTag_input").show().focus();
    });
    $(".addTag_input").blur(function () {
        $(this).hide();
        $(".addTag_a").show();
    });
    //标签输入框键入值（显示recommend_list）
    $(".addTag_input").keyup(function () {
        var val = $(this).val();
        if(val=="a"){
            $(".recommend_list").append("<li onclick='itemClick1(this)'>aaa</li>");
            $(".recommend_list").append("<li onclick='itemClick1(this)'>abc</li>");
            $(".recommend_list").append("<li onclick='itemClick1(this)'>acd</li>");
            $(".recommend_list").show();
        }
    });

    //标题内容输入框
    $(".titInput").focus(function () {
        if($(this).html()=="一句话描述你的问题"){
            $(this).html("<br>");
        }
    });
    $(".titInput").blur(function () {
        if($(this).html()=="<br>"){
            $(this).html("一句话描述你的问题");
        }
    });
    $(".contentInput").focus(function () {
        if($(this).html()=="详细内容补充..."){
            $(this).html("<br>");
        }
    });
    $(".contentInput").blur(function () {
        if($(this).html()=="<br>"){
            $(this).html("详细内容补充...");
        }
    });
});