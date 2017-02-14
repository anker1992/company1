<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/commonHeader.css">
    <style type="text/css">
        body,html{
            background-color: #f2f2f2;
        }
        .content{
            background-color: #fff;
        }
        .content .content-part1{
            padding: 3rem 2rem 4rem 4rem;
        }
        .content .content-part1 label{
            width: 48%;
            color: #3e3e3e;
            font-size: 1.6rem;
            font-weight: normal;
            margin-bottom: 15px;
        }
        .content .content-part1 input{
            display: none;
        }
        .content .content-part1 i{
            width: 1.4rem;
            height: 1.4rem;
            display: inline-block;
            background: url("/Public/images/myneeds-icon.png") no-repeat;
            background-size: 1.4rem 2.8rem;
            background-position: 0 -1.4rem;
            margin-right: .6rem;
            vertical-align: sub;
        }
        .content .content-part1 i.cur{
            background-position: 0 0;
        }
        .content .content-part2{
            border-top: 1rem solid #f2f2f2;
            width: 100%;
            height: 5rem;
            background-color: #f2f2f2;
        }
        .content .content-part2 input{
            display: block;
            color: #f23030;
            font-size: 1.8rem;
            height: 4rem;
            line-height: 4rem;
            width: 100%;
            text-align: center;
            background-color: #fff;
            -webkit-border: none;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="header clearfix">
    <a href="javascript:history.go(-1);" class="header-left"></a>
    <p class="title-bar-text">我的关注</p>
    <a href="javascript:;" class="header-right"></a>
</div>

<div class="content">
    <form action="<?php echo U('needs');?>" method="post">
        <div class="content-part1">
            <input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>">
            <input type="hidden" id="shuzu" value="<?php echo ($shuzu); ?>">
            <?php if(is_array($list)): foreach($list as $key=>$list): ?><label for="check<?php echo ($list["id"]); ?>"><i></i>
                    <input name="needs[]" id="check<?php echo ($list["id"]); ?>" type="checkbox" value="<?php echo ($list["need_name"]); ?>" <?php if($list['status'] == 1): ?>checked="checked"<?php endif; ?> /><?php echo ($list["need_name"]); ?>
                </label><?php endforeach; endif; ?>
        </div>
        <div class="content-part2">
            <input type="submit" value="保存"/>
        </div>
    </form>
</div>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
<script type="text/javascript">
    $(function(){
        $(".content-part1 label input").click(function(){
            if($(this).attr("checked")=="checked"){
                $(this).prev().removeClass("cur");
                $(this).removeAttr("checked")
            }else{
                $(this).prev().addClass("cur");
                $(this).attr("checked","checked");
            }
        });

//        var needs= $("#shuzu").val();
//        var arr = needs.toString().split(",");
//        console.log(arr);
//        for(var i=0;i<arr.length;i++){
//            $(".content-part1 input[type=checkbox][name=needs][value='"+arr[i]+"']").attr("checked",'checked').prev().addClass("cur");
//            console.log(arr[i]);
//        }
        $(".content-part1 input[type=checkbox][checked=checked]").prev().addClass("cur");
    })

</script>
</body>
</html>