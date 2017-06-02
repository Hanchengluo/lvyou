<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/base.css">
    <script src="Public/lib/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="Public/lib/font-awesome/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php echo ($config['view_public']); ?>css/community/write_question.css">
<script type="text/javascript">$("title").html('提问');</script>
</head>
<body>
<!--中间主体区 start-->
<div class="w600 C">
    <div class="titInput editable" contenteditable="true">一句话描述你的问题</div>
    <div class="contentInput editable" style="margin-top: 20px;" contenteditable="true">详细内容补充...</div>
    <div class="addTag">
        <p style="">添加标签</p>
        <dl class="tag_list">
        </dl>
        <div style="position: relative;float: left;">
            <a class="addTag_a">+添加标签</a>
            <input type="text" class="addTag_input" placeholder="添加标签" hidden>
            <ul class="recommend_list" hidden>
            </ul>
        </div>
    </div>
    <div class="bm-select">
        <select style="">
            <option value="1">选择同时发布的论坛版面</option>
            <?php $__FOR_START_26541__=0;$__FOR_END_26541__=7;for($i=$__FOR_START_26541__;$i < $__FOR_END_26541__;$i+=1){ ?><option value="<?php echo ($i); ?>">欧洲</option><?php } ?>
        </select>
    </div>
    <div class="btnB">
        <div class="btn-def"><a>发表提问</a></div>
        <div class="btn-def cancel"><a>取消</a></div>
    </div>
</div>
<!--中间主体区 end-->
<script src="<?php echo ($config['view_public']); ?>js/community/write_question.js"></script>


</body>
</html>