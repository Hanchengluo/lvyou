var currentdate = new Date();
var cm=currentdate.getMonth()+1;
var cd=currentdate.getDate();
var currentdate =currentdate.getFullYear()+"-"+(cm<10?"0"+cm:cm)+"-"+(cd<10?"0"+cd:cd);
$("#start_datepicker").val(currentdate);
updateTb(currentdate);
var html='<tr class="table_tr2">'+
    '<td>'+
    '<span class="d">4</span>'+
    '<div>'+
    '<p class="m">5月</p>'+
    '<p class="w">星期四</p>'+
    '</div>'+
    '</td>'+
    '<td contenteditable="true" style="width: 100px;"></td>'+
    '<td contenteditable="true"></td>'+
    '<td contenteditable="true"></td>'+
    '<td><i class="fa fa-cog"  onclick="settingBtnClick(this)"></i>'+
    '<ul class="settingMenu" hidden>'+
    '<li class="insert1" onclick="insert1Click(this)"  data-i="2">之前插入一行</li>'+
    '<li class="insert2" onclick="insert2Click(this)"  data-i="2">之后插入一行</li>'+
    '<li class="delete" onclick="deleteClick(this)"  data-i="2">删除该行</li></ul>'+
    '</td></tr>';
//每一行的设置按钮
function settingBtnClick(e){
    $(e).parent().find(".settingMenu").toggle();
}
//之前插入一行
function insert1Click(e){
    var i=$(e).attr("data-i");
    $(".table_tr2").eq(i-1).before(html);
    $(e).parent().toggle();
    var currentTime=$("#start_datepicker").val();
    updateTb(currentTime);
}
//之后插入一行
function insert2Click(e){
    var i=$(e).attr("data-i");
    $(".table_tr2").eq(i-1).after(html);
    $(e).parent().toggle();
    var currentTime=$("#start_datepicker").val();
    updateTb(currentTime);
}
//新增一行
function addClick(){
    $(".xcd_table").append(html);
    var currentTime=$("#start_datepicker").val();
    updateTb(currentTime);
}
//删除一行
function deleteClick(e){
    var i=$(e).attr("data-i");
    $(".table_tr2").eq(i-1).remove();
    $(e).parent().toggle();
    var currentTime=$("#start_datepicker").val();
    updateTb(currentTime);
}
// 更新行程单的那张表格
function updateTb(currentTime){
    var mydate = new Date(currentTime);
    //当前时间的时间戳
    var mytime = mydate.getTime();
    for(var i=0;i<$(".table_tr2").length;i++){
        var mydate = new Date(mytime);
        //日
        var d= mydate.getDate();
        //月
        var m=mydate.getMonth()+1;
        //星期
        var w=toZH(mydate.getDay());
        mytime=mytime+24*60*60*1000;
        $(".table_tr2").eq(i).find(".d").html(d);
        $(".table_tr2").eq(i).find(".m").html(m+"月");
        $(".table_tr2").eq(i).find(".w").html("星期"+w);
        $(".insert1").eq(i).attr("data-i",i+1);
        $(".insert2").eq(i).attr("data-i",i+1);
        $(".delete").eq(i).attr("data-i",i+1);
    }
}
// 0-6 ==》 星期日-星期六
function toZH(n){
    var zh="一";
    switch(n)
    {   case 0:
        zh="日";
        break;
        case 1:
            zh="一";
            break;
        case 2:
            zh="二";
            break;
        case 3:
            zh="三";
            break;
        case 4:
            zh="四";
            break;
        case 5:
            zh="五";
            break;
        case 6:
            zh="六";
            break;
    }
    return zh;
}
$(function() {
    $( "#start_datepicker" ).datepicker({
            onSelect: function (dateText, inst) {
                updateTb(dateText);
            },
            onClose: function( selectedDate ) {
                $( "#end_datepicker" ).datepicker( "option", "minDate", selectedDate );
            }
        }
    );
    $( "#end_datepicker" ).datepicker({
        // 根据开始时间设置结束时间的最小时间
        minDate:$("#start_datepicker").val(),
        onClose: function( selectedDate ) {
            // 根据结束时间设置开始时间的最大时间
            $( "#start_datepicker" ).datepicker( "option", "maxDate", selectedDate );
            // 开始结束时间相差的天数
            var date1 = new Date(selectedDate);
            var date2 = new Date($("#start_datepicker").val());
            var time_difference=(date1.getTime()-date2.getTime())/(24*60*60*1000);
            // 改变行程单行数
            if(!isNaN(time_difference)){
                $(".table_tr2").remove();
                for(var i=0;i<=time_difference;i++){
                    addClick();
                }
            }
        }
    });

    // 标题输入框
    $(".titInput").focus(function () {
        if($(this).html()=="请输入标题..."){
            $(this).html("<br />");
        }
    });
    $(".titInput").blur(function () {
        if($(this).html()=="<br>"||$(this).html()==""){
            $(this).html("请输入标题...");
        }
    });

    // “发布”、“存草稿”点击
    $("#btn_cg").click(function(){
        // 获取提交数据
        get_form_data();
    });
    $("#btn_fb").click(function(){

    });
    function get_form_data(){
        //

    }

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
});