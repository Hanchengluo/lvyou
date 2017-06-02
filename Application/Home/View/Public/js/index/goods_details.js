/**
 * Created by Administrator on 2017/5/31.
 */
// 分隔线的高度
var lineHeight=$(".selectOrBuy>.L").height()>$(".selectOrBuy>.R").height()?$(".selectOrBuy>.L").height():$(".selectOrBuy>.R").height();
$(".selectOrBuy>.line").css("height",lineHeight+"px");
//
function day_select(th){
    $(".dayList>li").removeClass();
    $(th).addClass("current");
}
$(function() {
    // 选择类别
    $(".cateList>li").click(function(){
        $(".cateList>li").removeClass();
        $(this).addClass("active");
    });

    //加减数量
    $(".jian").click(function () {
        var val =parseInt($(".val").attr("data-v"));
        var min =parseInt($(this).attr("data-min"));
        if(val>min){
            $(".val").attr("data-v",val-1);
            $(".val").html(val-1);
        }
        if(val-1==min){
            $(this).addClass("disabled");
        }
        $(".jia").removeClass("disabled");
    });
    $(".jia").click(function () {
        var val = parseInt($(".val").attr("data-v"));
        var max = parseInt($(this).attr("data-max"));
        if(val<max){
            $(".val").attr("data-v",val+1);
            $(".val").html(val+1);
        }
        if(val+1==max){
            $(this).addClass("disabled");
        }
        $(".jian").removeClass("disabled");
    });
    //日期控件
    $.datepicker.regional['zh-CN'] = {
        closeText: '关闭',
        prevText: '<上月',
        nextText: '下月>',
        currentText: '今天',
        monthNames: ['一月','二月','三月','四月','五月','六月',
            '七月','八月','九月','十月','十一月','十二月'],
        monthNamesShort: ['一','二','三','四','五','六',
            '七','八','九','十','十一','十二'],
        dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
        dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
        dayNamesMin: ['日','一','二','三','四','五','六'],
        dateFormat: 'yy-mm-dd', firstDay: 1,
        isRTL: false};
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
    $("#goods_datepicker").datepicker({
        onSelect:function(dateText,inst){
            console.log("onselect, inst",inst);
            $( "#time").html(dateText);
            $("#startTimeSelectB").hide();
            updateTb(dateText);
        }
    });


    function initDatePicker(date){
        date = new Date(date);
        var timestamp = date.getTime();
        var current_m = date.getMonth();
        var current_w = date.getDay();
        var html ="";
        for(var i=0;i<current_w;i++){
            html="<li></li>";
            $(".dayList").append(html);
        }
        while(true){
            date = new Date(timestamp);
            if(date.getMonth()!=current_m){
                break;
            }
            html='<li onclick="day_select(this)">'
                +'<div class="day">'+date.getDate()+'</div>'
                +'<div class="meta">'
                +'<span class="m mc">￥999.00</span><span class="residue">余4</span>'
                +'</div>'
                +'<div class="border"></div>';
            $(".dayList").append(html);
            timestamp+=24*60*60*1000;
        }
    }
    $(".monthList>li").click(function(){
        var y = $(this).attr("data-y");
        var m = $(this).attr("data-m");
        $(".dayList").empty();
        initDatePicker(y+'-'+m+'-01');
        $(".monthList>li").removeClass();
        $(this).addClass("current");
    });
    $(".monthList>li").eq(0).click();
});
