<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1
 * Time: 11:07
 */

namespace Home\Controller;


class CommunityController extends BaseController
{
    public function index(){
        $this->display();
    }

    public function write_yj(){
        $this->display();
    }

    public function write_gl(){
        $this->display();
    }

    public function write_jb(){
        $this->display();
    }

    public function write_discuss(){
        $this->display();
    }

    public function write_question(){
        $this->display();
    }

    // 结伴同行
    public function jbtx(){
        $this->display();
    }

    // 板块
    public function community_bk(){
        $this->display();
    }

    // 回答
    public function question_reply(){
        $this->display();
    }
}