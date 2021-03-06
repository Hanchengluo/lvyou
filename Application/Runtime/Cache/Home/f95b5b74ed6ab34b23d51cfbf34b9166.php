<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="Public/css/datepicker.css">
<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/write_yj.css">
<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript">$("title").html('写游记');</script>
</head>
<body>
    <!--顶部保存及发布区 start-->
    <div class="top">
        <div class="btn-def"><a href="">发布</a></div>
        <div class="btn-def"><a href="">存草稿</a></div>
        <span style="color: #999;">保存于12:02</span>
    </div>
    <!--顶部保存及发布区 end-->
    <!--中间主体区 start-->
    <div class="w600 C">
        <div class="titInput editable" contenteditable="true">请输入标题...</div>
        <div class="xcd">
            <div class="xcd_top" style="">
                <div id="datepicker" class="startTime" style="">
                    <span>出发时间：<span id="time">2017-05-03</span></span>
                    <div class="icon"><i class="fa fa-calendar"></i></div>
                    <div id="startTimeSelectB"></div>
                </div>
            </div>
            <table class="xcd_table" style="table-layout:fixed;">
                <tr class="table_tr1">
                    <td width="120px;">日期</td>
                    <td width="110px">城市</td>
                    <td width="168px">景点</td>
                    <td width="168px">酒店</td>
                    <td>&nbsp;</td>
                </tr>
                <tr class="table_tr2">
                    <td>
                        <span class="d">4</span>
                        <div>
                            <p class="m">5月</p>
                            <p class="w">星期四</p>
                        </div>
                    </td>
                    <td contenteditable="true" style="width: 100px;"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td><i class="fa  fa-cog" onclick="settingBtnClick(this)"></i>
                        <ul class="settingMenu" hidden>
                            <li class="insert1" onclick="insert1Click(this)" data-i="1">之前插入一行</li>
                            <li class="insert2" onclick="insert2Click(this)" data-i="1">之后插入一行</li>
                            <li class="delete" onclick="deleteClick(this)" data-i="1">删除该行</li>
                        </ul>
                    </td>
                </tr>
                <tr class="table_tr2">
                    <td>
                        <span class="d">4</span>
                        <div>
                            <p class="m">5月</p>
                            <p class="w">星期四</p>
                        </div>
                    </td>
                    <td contenteditable="true" style="width: 100px;"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td><i class="fa fa-cog"  onclick="settingBtnClick(this)"></i>
                        <ul class="settingMenu" hidden>
                            <li class="insert1" onclick="insert1Click(this)" data-i="2">之前插入一行</li>
                            <li class="insert2" onclick="insert2Click(this)" data-i="2">之后插入一行</li>
                            <li class="delete" onclick="deleteClick(this)" data-i="2">删除该行</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="xcd_tail" style="">
                <a onclick="addClick()" id="addOneRow" style="cursor: pointer;color: #666;"><i class="fa fa-plus-circle" style="color: #5cad77"></i>&nbsp;新增一天</a>
            </div>
        </div>
        <div class="contentInput editable" style="margin-top: 20px;" contenteditable="true">正文...</div>
    </div>
    <!--中间主体区 end-->
    <script src="<?php echo ($config['view_public']); ?>js/community/write_yj.js"></script>
</body>
</html>