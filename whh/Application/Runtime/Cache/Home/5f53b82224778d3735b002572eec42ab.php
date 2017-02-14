<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">

    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/commonHeader.css">
    <link rel="stylesheet" href="/Public/css/concern.css">

</head>
<body class="bg-gray">

<div class="header clearfix">
    <a href="<?php echo U('userCenter',array('token'=>$_GET['token']));?>" class="header-left"></a>
    <p class="title-bar-text">我的约见</p>
    <a href="<?php echo U('Project/projectlist',array('token'=>$_GET['token']));?>" class="header-right"></a>
</div>
<section>
    <?php if(is_array($invest)): foreach($invest as $key=>$invest): ?><a href="<?php echo U('Invest/investDetail',array('token'=>$_GET['token'],'inv_id'=>$invest['inv_id']));?>">
        <div class="concern-list-items">
            <img class="concern-list-items-left" src="/admin/<?php echo ($invest["inv_logo"]); ?>" alt="">
            <div class="concern-list-items-right">
                <h5><?php echo ($invest["inv_name"]); ?></h5>
                <p><?php echo ($invest["inv_in_company"]); ?></p>
                <p><?php echo ($invest["inv_type"]); ?></p>
                <h6><img src="/Public/images/collection2.png" alt="">已约见成功</h6>
            </div>
        </div>
    </a><?php endforeach; endif; ?>
    <?php if(is_array($product)): foreach($product as $key=>$product): ?><a href="<?php echo U('Product/productDetail',array('token'=>$_GET['token'],'prod_id'=>$product['prod_id']));?>">
        <div class="concern-list-items">
            <img class="concern-list-items-left" src="/admin/<?php echo ($product["prod_logo"]); ?>" alt="">
            <div class="concern-list-items-right">
                <h5><?php echo ($product["prod_name"]); ?></h5>
                <p>预期收益率：<?php echo ($product["prod_rate"]); ?></p>
                <p>产品期限：<?php echo ($product["prod_term"]); ?></p>
                <p>起投门槛￥<?php echo ($product["prod_money"]); ?>万</p>
                <h6><img src="/Public/images/collection2.png" alt="">已约见成功</h6>
            </div>
        </div>
    </a><?php endforeach; endif; ?>
    <?php if(is_array($project)): foreach($project as $key=>$project): ?><a href="<?php echo U('Project/projectdetail',array('token'=>$_GET['token'],'proj_id'=>$project['proj_id']));?>">
        <div class="concern-list-items">
            <img class="concern-list-items-left" src="/admin/<?php echo ($project["proj_logo"]); ?>" alt="">
            <div class="concern-list-items-right">
                <h5><?php echo ($project["proj_name"]); ?></h5>
                <p class="line-ellipsis"><?php echo ($project["proj_ject"]); ?></p>
                <p><?php echo ($project["proj_area"]); ?>/<?php echo ($project["proj_round"]); ?></p>
                <p>融资金额￥<?php echo ($project["proj_money"]); ?>万</p>
                <h6><img src="/Public/images/collection2.png" alt="">已约见成功</h6>
            </div>
        </div>
    </a><?php endforeach; endif; ?>
</section>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</body>
</html>