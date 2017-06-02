<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 15:59
 */

namespace Home\Controller;


class UserController extends BaseController
{
    public function index(){
        layout('user2');
        $this->display('Index:user_wo');
    }
    // TA的游记
    public  function  user_yj(){
        layout('user2');
        $this->display('Index:user_yj');
    }

    // TA的问答
    public  function  user_wd(){
        layout('user2');
        $this->display('Index:user_wd');
    }
    // TA的足迹
    public  function  user_zj(){
        layout('user2');
        $this->display('Index:user_zj');
    }
    // TA的点评
    public  function  user_dp(){
        layout('user2');
        $this->display('Index:user_dp');
    }

    // TA的结伴
    public  function  user_jb(){
        layout('user2');
        $this->display('Index:user_jb');
    }

    // 我的消息
    public  function  message(){
        layout('user21');
        $this->display();
    }
    // 我的收藏
    public  function  collect(){
        layout('user21');
        $this->display();
    }
    // 我的订单
    public  function  order(){
        layout('user21');
        $this->display();
    }
    // 查看订单
    public  function  order_details(){
        $this->display();
    }
    // 我的优惠券
    public  function  yhq(){
        layout('user21');
        $this->display();
    }
    // 我的帖子
    public  function  tie(){
        layout('user21');
        $this->display();
    }
    // 我的结伴
    public  function  jieban(){
        layout('user21');
        $this->display();
    }
    // 查看报名
    public  function  view_jbbm(){
        layout('user21');
        $this->display();
    }
    // 我的提问
    public  function  question(){
        layout('user21');
        $this->display();
    }
    // 会员充值
    public  function  cz(){
        layout('user21');
        $this->display();
    }
}