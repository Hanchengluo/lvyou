<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/write_gl.css">
<script type="text/javascript">$("title").html('写攻略');</script>
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
    <div class="contentInput editable" style="margin-top: 20px;" contenteditable="true">正文...</div>
</div>
<!--中间主体区 end-->
<script>
    $(function() {
        //标题内容输入框
        $(".titInput").focus(function () {
            if($(this).html()=="请输入标题..."){
                $(this).html("<br />");
            }
        });
        $(".titInput").blur(function () {
            if($(this).html()==""||$(this).html()=="<br>"){
                $(this).html("请输入标题...");
            }
        });
        $(".contentInput").focus(function () {
            if($(this).html()=="正文..."){
                $(this).html("<br />");
            }
        });
        $(".contentInput").blur(function () {
            if($(this).html()==""||$(this).html()=="<br>"){
                $(this).html("正文...");
            }
        });
    });
</script>

</body>
</html>