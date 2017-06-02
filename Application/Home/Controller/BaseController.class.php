<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/27
 * Time: 16:50
 */

namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $config["view_public"]="Application/Home/View/Public/";
        $this->assign("config",$config);
    }
}