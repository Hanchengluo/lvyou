/**
 * Created by DELL on 2017/5/8.
 */
var mySwiper = new Swiper('.place-details-container', {
    //autoplay: 2000,//可选选项，自动滑动
    autoplayDisableOnInteraction : false,//用户操作轮播图后，false为继续滑动 -->
    speed:600,     //开始到结束时间300毫秒
    loop : true,   //首尾连接循环轮播图
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
});

var storeIndexContainer = new Swiper('.store-index-container', {
    autoplay: 8000,//可选选项，自动滑动
    autoplayDisableOnInteraction : false,//用户操作轮播图后，false为继续滑动 -->
    speed:600,     //开始到结束时间300毫秒
    loop : true,   //首尾连接循环轮播图
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
});


var indexSwiper = new Swiper('.index-swiper-container', {
    autoplay: 6000,//可选选项，自动滑动
    autoplayDisableOnInteraction : false,//用户操作轮播图后，false为继续滑动 -->
    speed:1000,     //开始到结束时间300毫秒
    loop : true,   //首尾连接循环轮播图
    pagination : '.swiper-pagination',  //分页器
    paginationClickable :true,      //可点击
});
var indexSwiper2 = new Swiper('.index-container-1', {
    autoplay: 3000,//可选选项，自动滑动
    autoplayDisableOnInteraction : false,//用户操作轮播图后，false为继续滑动 -->
    speed:600,     //开始到结束时间300毫秒
    loop : true,   //首尾连接循环轮播图
    pagination : '.swiper-pagination',//添加分页器
});