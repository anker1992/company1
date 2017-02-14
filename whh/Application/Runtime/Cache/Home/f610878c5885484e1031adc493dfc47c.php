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
    <link rel="stylesheet" href="/Public/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/css/commonHeader.css"/>
    <link rel="stylesheet" href="/Public/css/productList.css"/>
</head>
<body>

<div class="header clearfix">
    <a href="javascript:;" class="header-left"></a>
    <a href="<?php echo U('Project/projectlist',array('token'=>$_GET['token']));?>" class="header-right"></a>
    <p class="title-bar-text">智能撮合</p>
</div>
<div class="nav">
    <div class="nav-item">
        <a class="cur" href="javascript:;">产品库</a>
        <ul>
            <li><a href="<?php echo U('Project/projectlist',array('token'=>$_GET['token']));?>">项目库</a></li>
            <li><a href="<?php echo U('Product/productList',array('token'=>$_GET['token']));?>">产品库</a></li>
        </ul>
        <i></i>
    </div>
    <div class="nav-item">
        <a href="<?php echo U('Invest/investList',array('token'=>$_GET['token']));?>">投资人</a>
    </div>
    <div class="nav-item">
        <a href="<?php echo U('Userindex/userCenter',array('token'=>$_GET['token']));?>">我的信息</a>
    </div>
</div>
<section>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list-item">
            <a href="<?php echo U('Product/productDetail',array('token'=>$_GET['token'],'prod_id'=>$list['prod_id']));?>"></a>
            <div class="list-header clearfix">
                <img src="/admin/<?php echo ($list['prod_logo']); ?>" alt=""/>
                <h2><?php echo ($list["prod_name"]); ?></h2>
                <?php if($list['status'] == 1): ?><span class="list-collection" id="<?php echo ($list['prod_id']); ?>">
                        <i class="cur" id="<?php echo ($_GET['token']); ?>"></i>
                        <span>已收藏</span>
                    </span>
                <?php else: ?>
                    <span class="list-collection" id="<?php echo ($list['prod_id']); ?>">
                        <i id="<?php echo ($_GET['token']); ?>"></i>
                        <span>收藏</span>
                    </span><?php endif; ?>
            </div>
            <div class="list-content">
                <div class="list-content-item">
                    <h4 class="red"><span><?php echo ($list["prod_rate"]); ?></span></h4>
                    <p>预期收益率</p>
                </div>
                <div class="list-content-item">
                    <h4><span><?php echo ($list["prod_term"]); ?></span></h4>
                    <p>产品期限</p>
                </div>
            </div>
            <div class="list-money">
                <h3><i></i>起投门槛</h3>
                <p><span><?php echo ($list["prod_money"]); ?></span>万元</p>
            </div>
        </div><?php endforeach; endif; ?>
    <div class="main-heart-fenye">
        <?php echo ($page); ?>
    </div>
    <style type="text/css">
        .main-heart-fenye{
            text-align: center;
        }
        .main-heart-fenye a{
            display: inline-block;
            font-size: 12px;
            /*width: 40px;*/
            padding:0 10px;
            border: 1px solid #999;
            border-radius: 5px;
            margin: 5px;
        }
        .main-heart-fenye .current{
            display: inline-block;
            font-size: 12px;
            /*width: 40px;*/
            padding: 0 10px;
            border: 1px solid #999;
            border-radius: 5px;
            margin: 5px;
            color: #fff;
            background: #999;
        }

    </style>
</section>

<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
<script type="text/javascript">
    $(function(){
        $(".nav-item .cur").click(function(){
            var oUl = $(".nav-item ul");
            if(oUl.css("display") === "none"){
                oUl.css("display","block");
                $(".nav-item i").addClass("cur");
                return false;
            }else{
                oUl.css("display","none");
                $(".nav-item i").removeClass("cur");
                return false;
            }
        });

        //收藏
        $(".list-collection").click(function(){
            var token = $(this).find("i").attr("id");
            var he_id = $(this).attr("id");
            var oI = $(this).find("i");
            var oS = $(this).find("span");
            if(!oI.hasClass("cur")) {
                var status = '1';
            }
            else if(oI.hasClass("cur")) {
                var status = '-1';
            }
            $.ajax({
                cache: true,
                type: "POST",
                url: "<?php echo U('do_heart');?>",
                data: {'token': token, 'he_id': he_id, 'status': status},
                async: false,
                error: function (request) {
                    alert("Connection error");
                },
                success: function (data) {
                    if (data == '1') {
                        oI.addClass("cur");
                        oS.text('已收藏');
                    }
                    else if(data == '-1')
                    {
                        oI.removeClass("cur");
                        oS.text('收藏');
                    }
                }
            });
        });

        $("body").click(function(){
            $(".nav-item ul").css("display","none");
            $(".nav-item i").removeClass("cur");
        })
    })
</script>
</body>
</html>