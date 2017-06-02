<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController{

    // 网站主页
    public function index(){
//        $this->show("这是首页");
        $this->display();
    }
    // 商品详情页
    public function goods_details(){
        $this->display();
    }

    // 填写订单
    public function write_order(){
        $this->display();
    }

    // 在线支付
    public  function  online_pay(){
        $this->display();
    }

    // 签证详情页
    public function visa_details(){
        $this->display();
    }

    // 签证填写订单页
    public function visa_write_order(){
        $this->display();
    }

    // 游记攻略
    public function yjgl(){
        $this->display();
    }

    // 游记用户页
    public  function  user_wo(){
        layout('user');
        $this->display();
    }

    // TA的游记
    public  function  user_yj(){
        layout('user');
        $this->display();
    }

    // TA的问答
    public  function  user_wd(){
        layout('user');
        $this->display();
    }
    // TA的足迹
    public  function  user_zj(){
        layout('user');
        $this->display();
    }
    // TA的点评
    public  function  user_dp(){
        layout('user');
        $this->display();
    }

    // TA的结伴
    public  function  user_jb(){
        layout('user');
        $this->display();
    }
}