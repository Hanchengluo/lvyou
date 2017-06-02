<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/27
 * Time: 17:34
 */

namespace Home\Controller;


class DistrictController extends BaseController
{
    public function index(){
        $this->display();
    }
    // 目的地城市
    public function dist_city(){
        $this->display();
    }
    // 详情页
    public function dist_details(){
        $this->display();
    }
    // 城市概括
    public function dist_generalize(){
        $this->display();
    }
    // 热门景点
    public function hot_travel(){
        $this->display();
    }
    // 当地美食
    public function dist_cate(){
        $this->display();
    }
    // 推荐线路
    public function dist_route(){
        $this->display();
    }
    // 特惠酒店
    public function dist_hotel(){
        $this->display();
    }
    // 旅游攻略
    public function dist_gl(){
        $this->display();
    }
    // 地图
    public function dist_map(){
        $this->display();
    }
    // 问答
    public function ajax_wd(){
        for($i=0;$i<10;$i++){
            $data["list"]["{$i}"]["user"]["tx"]="Public/img/tx.jpeg";
            $data["list"]["{$i}"]["user"]["name"]="浅浅快跑";
            $data["list"]["{$i}"]["user"]["link"]="user.php?uid=222";
            $data["list"]["{$i}"]["title"]="【超详细巴士交通攻略】5天4晚济州岛-中文、牛岛、城山日出峰、山君不离、民俗村等";
            $data["list"]["{$i}"]["link"]="?id=111";
            $data["list"]["{$i}"]["date"]="2017-01-06 17:53";
            $data["list"]["{$i}"]["like"]="99";
            $data["list"]["{$i}"]["desc"]="皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香，夏季的小兰花，玫瑰花，秋季冬季都会有五颜六色的花儿在花园里迎接着来自远方的客人！";
        }
        $this->ajaxReturn($data);
    }
    // 游记攻略
    public function ajax_yjgl(){
        for($i=0;$i<10;$i++){
            $data["list"]["{$i}"]["user"]["tx"]="Public/img/tx.jpeg";
            $data["list"]["{$i}"]["user"]["name"]="浅浅快跑";
            $data["list"]["{$i}"]["user"]["link"]="user.php?uid=222";
            $data["list"]["{$i}"]["title"]="【超详细巴士交通攻略】5天4晚济州岛-中文、牛岛、城山日出峰、山君不离、民俗村等";
            $data["list"]["{$i}"]["link"]="?id=111";
            $data["list"]["{$i}"]["date"]="2017-01-06 17:53";
            $data["list"]["{$i}"]["like"]="99";
            $data["list"]["{$i}"]["desc"]="皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香，夏季的小兰花，玫瑰花，秋季冬季都会有五颜六色的花儿在花园里迎接着来自远方的客人！";
            $data["list"]["{$i}"]["pics"][0]="Public/img/tx.jpeg";
        }
        $this->ajaxReturn($data);
    }
    // 结伴
    public function ajax_jb(){
        for($i=0;$i<10;$i++){
            $data["list"]["{$i}"]["user"]["tx"]="Public/img/tx.jpeg";
            $data["list"]["{$i}"]["user"]["name"]="浅浅快跑";
            $data["list"]["{$i}"]["user"]["link"]="user.php?uid=222";
            $data["list"]["{$i}"]["title"]="【超详细巴士交通攻略】5天4晚济州岛-中文、牛岛、城山日出峰、山君不离、民俗村等";
            $data["list"]["{$i}"]["link"]="?id=111";
            $data["list"]["{$i}"]["date"]="2017-01-06 17:53";
            $data["list"]["{$i}"]["like"]="99";
        }
        $this->ajaxReturn($data);
    }
    // 点评
    public function ajax_dp(){
        for($i=0;$i<10;$i++){
            $data["list"]["{$i}"]["user"]["tx"]="Public/img/tx.jpeg";
            $data["list"]["{$i}"]["user"]["name"]="浅浅快跑";
            $data["list"]["{$i}"]["user"]["link"]="user.php?uid=222";
            $data["list"]["{$i}"]["date"]="2017-01-06 17:53";
            $data["list"]["{$i}"]["star"]="4";
            $data["list"]["{$i}"]["desc"]="皇后镇花园处于皇后镇市中心的对面，从湖的这边遥望着皇后镇的那些酒店，住宅，半山坡上的房子，会有不一样的感受。每个季节花园里的花儿都会争相开放，春季的郁金香，夏季的小兰花，玫瑰花，秋季冬季都会有五颜六色的花儿在花园里迎接着来自远方的客人！";
        }
        $this->ajaxReturn($data);
    }

    // 参加结伴
    public function join_jb(){
        $this->display();
    }

    // 锦囊
    public function dist_jn(){
        $this->display();
    }





}