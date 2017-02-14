<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/interestList.css"/>
</head>
<body>
<div id="main">
    <div class="header">
        <h2><a href="<?php echo U('interest',array('phone'=>$_GET['phone'],'uid'=>$_GET['uid']));?>" ><span></span>个人标签</a></h2>
    </div>
    <form action="<?php echo U('add_label');?>" method="post">
        <input type="hidden" value="<?php echo ($_GET['phone']); ?>" name="phone">
        <input type="hidden" value="<?php echo ($_GET['uid']); ?>" name="uid">
        <input type="hidden" value="<?php echo ($best); ?>" name="best">
        <div class="item-con">
            <?php if(is_array($new_list)): foreach($new_list as $key=>$list): if($list['list'] == null): else: ?>
                    <div class="item">
                        <?php if($list['status'] == 1): ?><input type="checkbox" checked="checked" name="label_value[]" value="<?php echo ($list["list"]); ?>"/>
                            <label><?php echo ($list["list"]); ?></label>
                            <i class="cur"></i>
                         <?php else: ?>
                            <input type="checkbox" name="label_value[]" value="<?php echo ($list["list"]); ?>"/>
                            <label><?php echo ($list["list"]); ?></label>
                            <i></i><?php endif; ?>
                    </div><?php endif; endforeach; endif; ?>
        </div>

        <div class="submit">
            <input type="submit" value="提交"/>
        </div>
    </form>
</div>
<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    $(function(){
        $(".item-con .item").click(function(){
            var oInput = $(this).find("input");
            var oI = $(this).find("i");
            if(oInput.attr("checked") == "checked"){
                oInput.removeAttr("checked");
                oI.removeClass("cur");
            }else{
                oInput.attr("checked","checked");
                oI.addClass("cur");
            }

        })
    })
</script>
</body>
</html>