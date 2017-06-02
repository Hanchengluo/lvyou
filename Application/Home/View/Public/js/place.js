/**
 * Created by Administrator on 2017/5/27.
 */
$(function() {
    $.getJSON("Public/nation.js",function(result){
        $.each(result, function(i,field){
            var line1=Math.floor(field.nation.length/3),line2=Math.floor(field.nation.length/3),line3=Math.floor(field.nation.length/3);
            if(field.nation.length%3==1){line1+=1;}
            if(field.nation.length%3==2){line2+=1;line1+=1;}
            $.each(field.nation,function(j,v){
                if(j<line1){
                    var ul=$(".nation_list>ul:nth-child("+(i+1)+") .line1");
                    ul.append("<li>"+v.n+"&nbsp;<span class='nen'>"+ v.nen+"</span></li>");
                }else if(j<line1+line2){
                    var ul=$(".nation_list>ul:nth-child("+(i+1)+") .line2");
                    ul.append("<li>"+v.n+"&nbsp;<span class='nen'>"+ v.nen+"</span></li>");
                }else if(j<line1+line2+line3){
                    var ul=$(".nation_list>ul:nth-child("+(i+1)+") .line3");
                    ul.append("<li>"+v.n+"&nbsp;<span class='nen'>"+ v.nen+"</span></li>");
                }
            });
        });
    });
    $(".rec_nav>li").click(function(){
        $(".rec_nav>.current").removeClass();
        $(this).addClass("current");

        var data_i_1=$(this).attr("data-i");
        var ullist=$(".rec_list>ul");
        for(var i=1;i<=ullist.length;i++){
            var ul=ullist[i-1];
            var data_i_2=ul.getAttribute("data-i");
            if(data_i_1>data_i_2){
                ul.style.left="-980px";
            }
            if(data_i_1==data_i_2){
                ul.style.left="0px";
            }
            if(data_i_1<data_i_2){
                ul.style.left="980px";
            }
        }
    });
    $(".nation_nav>li").click(function(){
        $(".nation_nav>.current").removeClass();
        $(this).addClass("current");

        var data_i_1=$(this).attr("data-i");
        var ullist=$(".nation_list>ul");
        $(".nation_list>ul").removeClass();
        if(data_i_1!=1){
            for(var i=1;i<=ullist.length;i++){
                var ul=ullist[i-1];
                var data_i_2=ul.getAttribute("data-i");
                if(data_i_1!=data_i_2){
                    ul.className="nodisplay";
                }
            }
        }
    });
});