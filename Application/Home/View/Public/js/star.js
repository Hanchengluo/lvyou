$(function() {
    function changeHint(v){
        var hint="点击星星为它点评";
        switch(v)
        {
            case "1":
                hint="很差";
                break;
            case "2":
                hint="差";
                break;
            case "3":
                hint="一般";
                break;
            case "4":
                hint="好";
                break;
            case "5":
                hint="很好";
                break;
        }
        $(".hint").html(hint);
    }
    //评分（星星控件）
    $("#commentStar>i").hover(function(){
        var v = $(this).attr("data-v");
        $("#commentStar>i").css("color","#bbb");
        for(var i=0;i<v;i++){
            $("#commentStar>i").eq(i).css("color","#ff9d00");
        }
        changeHint(v);
    },function(){
        var level=$("#commentStar").attr("data-level");
        $("#commentStar>i").css("color","#bbb");
        for(var i=0;i<level;i++){
            $("#commentStar>i").eq(i).css("color","#ff9d00");
        }
        changeHint(level);
    });
    $("#commentStar>i").click(function(){
        var v = $(this).attr("data-v");
        $("#commentStar").attr("data-level",v);
    });
});