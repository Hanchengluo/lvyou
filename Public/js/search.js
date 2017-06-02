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