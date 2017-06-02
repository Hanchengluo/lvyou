<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/27
 * Time: 16:24
 */

namespace Home\Controller;

class LoginController extends BaseController
{
    public function __construct(){
        parent::__construct();
    }
    // 登录
    public function login(){
        $this->display();
    }

    // 注册
    public function reg(){
        $this->display();
    }

}