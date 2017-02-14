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
    <link rel="stylesheet" href="/Public/css/productDetail.css">
</head>
<body class="bg-gray">
<div class="header clearfix">
    <a href="javascript:history.go(-1);" class="header-left"></a>
    <p class="title-bar-text"><?php echo ($list["proj_name"]); ?></p>
    <a href="<?php echo U('Project/Projectlist',array('token'=>$_GET['token']));?>" class="header-right"></a>
</div>
<section class="p-detail-part1">
    <div class="part1-img-box">
        <img src="/admin/<?php echo ($list["proj_logo"]); ?>" alt="">
        <p class="part1-img-text"><span class="money-text">￥<?php echo ($list["proj_yue_money"]); ?> </span> /次</p>
    </div>
    <div class="part1-text-box">
        <p class="am-fl ml-40"><img src="/Public/images/icon-pd-yuejian.png" alt="">约见 <span class="color-red"><?php echo ($list["proj_yue_num"]); ?>次</span></p>
        <p class="am-fr mr-40"><img src="/Public/images/icon-pd-liulan.png" alt="">浏览 <span class="color-red"><?php echo ($list["proj_seen"]); ?>次</span></p>
    </div>
    <div style="clear:both;"></div>
</section>
<section class="p-detail-part2">
    <div class="part2-items-box">
        <span class="part2-items-l">融资金额</span>
        <span class="part2-items-r"><?php echo ($list["proj_money"]); ?> 元</span>
    </div>
    <div class="part2-items-box">
        <span class="part2-items-l">融资轮次</span>
        <span class="part2-items-r"><?php echo ($list["proj_round"]); ?></span>
    </div>
    <div class="part2-items-box">
        <span class="part2-items-l">所属行业</span>
        <span class="part2-items-r"><?php echo ($list["proj_industry"]); ?></span>
    </div>
    <div class="part2-items-box">
        <span class="part2-items-l">项目类型</span>
        <span class="part2-items-r"><?php echo ($list["proj_type"]); ?></span>
    </div>
</section>
<section class="p-detail-part3 padding-b-10">
    <header class="part3-header-bar">项目介绍</header>
    <div class="part3-text-box height-ellipsis">
        <?php echo ($list["proj_ject"]); ?>
    </div>
    <p class="see-more">查看更多</p>
    <p class="close-more" hidden>收起</p>
</section>
<section class="p-detail-part3 padding-b-10">
    <header class="part5-header-bar clearfix">
        <img src="/admin/<?php echo ($list["proj_ceo_logo"]); ?>" alt="">
        <p class="part5-name"><?php echo ($list["proj_ceo_name"]); ?></p>
        <p class="part5-work"><?php echo ($list["proj_ceo_position"]); ?></p>
    </header>
    <div class="part3-text-box">
        <?php echo ($list["proj_ceo_introduce"]); ?>
    </div>
</section>
<section class="p-detail-part4">
    <header class="part4-header-bar">相关信息</header>
    <a href="http://www.baidu.com">
        <div class="part4-items-box clearfix">
            <div class="part4-item-left"><img src="/Public/images/icon-pd-website.png" alt="">公司官网：</div>
            <div class="part4-item-right"><?php echo ($list["proj_url"]); ?></div>
        </div>
    </a>
    <div class="part4-items-box clearfix">
        <div class="part4-item-left"><img src="/Public/images/icon-pd-position.png" alt="">约见地址：</div>
        <div class="part4-item-right"><?php echo ($list["proj_yue_address"]); ?></div>
    </div>
    <div class="part4-items-box clearfix bd-none">
        <div class="part4-item-left"><img src="/Public/images/icon-pd-time.png" alt="">约见时间：</div>
        <div class="part4-item-right">
            <p><?php echo ($list["proj_yue_time"]); ?></p>
            <p></p>
        </div>
    </div>
</section>
<section class="before-footer"></section>
<footer>
    <?php if(empty($follow)): ?><a href="javascript:;" class="footer-item footer-item1 weiguanzhu" style="display: block;">
            <img src="/Public/images/collection1.png" alt="">
            <p id="<?php echo ($list["proj_id"]); ?>" class="<?php echo ($_GET['token']); ?>">我要收藏</p>
        </a>
        <?php else: ?>
        <a href="javascript:;" class="footer-item footer-item1 yiguanzhu-box" style="display: block;">
            <img src="/Public/images/collection2.png" alt="">
            <p id="<?php echo ($list["proj_id"]); ?>" class="<?php echo ($_GET['token']); ?>">已收藏</p>
        </a><?php endif; ?>
    <?php if($flag): ?><a id="<?php echo ($flag); ?>" class="footer-item js-modal-open"><i id="<?php echo ($_GET['token']); ?>" class="<?php echo ($list["proj_id"]); ?>"></i>已约见</a>
        <?php else: ?>
        <a id="<?php echo ($flag); ?>" href="javascript:;" class="footer-item footer-item2 js-modal-open"><i id="<?php echo ($_GET['token']); ?>" class="<?php echo ($list["proj_id"]); ?>"></i>我要约见</a><?php endif; ?>
    <!--<a href="javascript:;" class="footer-item footer-item2 js-modal-open">约见</a>-->

</footer>
<div class="am-modal am-modal-no-btn " tabindex="-1" id="your-modal">
    <div class="am-modal-dialog">
        <!--<div class="am-modal-hd">-->
        <!--<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>-->
        <!--</div>-->
        <div class="am-modal-bd">
            <br>
            <p>仅认证投资人可约谈创业者，请播打010-58690663，将您的资料提交给我们的工作人员即可完成认证！</p>
            <hr>
            <p data-am-modal-close>确定</p>
        </div>

    </div>
</div>
<div class="am-modal am-modal-no-btn " tabindex="-1" id="your-modal1">
    <div class="am-modal-dialog">
        <!--<div class="am-modal-hd">-->
        <!--<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>-->
        <!--</div>-->
        <div class="am-modal-bd">
            <br>
            <p>已约见，我们的工作人员会尽快联系您，请保持电话畅通。</p>
            <hr>
            <p data-am-modal-close>确定</p>
        </div>

    </div>
</div>


<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
<script>
    //约见
    $(function () {
        var $modal = $('#your-modal');
        var $modal1 = $('#your-modal1');
        var abc = 1;
        //判断是否已认证
        $('.footer-item2').on('click', function (e) {
            var token = $(this).find("i").attr("id");
            var proj_id = $(this).find("i").attr("class");
            var $target = $(e.target);
            if (abc) {
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('appointment');?>",
                    data: {'token': token,'proj_id':proj_id},
                    async: true,
                    error: function (request) {

                    },
                    success: function (data) {
                        if (data == 1) {
                            if (($target).hasClass('js-modal-open')) {
                                $modal1.modal();
                            } else if (($target).hasClass('js-modal-close')) {
                                $modal1.modal('close');
                            } else {
                                $modal1.modal('toggle');
                            }
                            $('.footer-item2').text('已约见');
                            $('.footer-item2').removeClass("footer-item2");
                            abc = 0;
                        }
                        else if(data == '-1')
                        {
                            if (($target).hasClass('js-modal-open')) {
                                $modal.modal();
                            } else if (($target).hasClass('js-modal-close')) {
                                $modal.modal('close');
                            } else {
                                $modal.modal('toggle');
                            }
                        }
                    }
                });
            }
        });
    });

    $(function () {
        $('.footer-item1').click(function() {
            var token = $(this).find("p").attr("class");
            var he_id = $(this).find("p").attr("id");
            if ($(this).hasClass("weiguanzhu")) {
                var status = "1";
            } else {
                var status = "-1";
            }
            //收藏
            $.ajax({
                cache: true,
                type: "POST",
                url: "<?php echo U('do_heart');?>",
                data: {'token': token, 'he_id': he_id, 'status':status },
                async: false,
                error: function (request) {
                    alert("Connection error");
                },
                success: function (data) {
                    if (data == 1) {
                        $('.footer-item1').removeClass('weiguanzhu');
                        $('.footer-item1 img').attr('src', '/Public/images/collection2.png');
                        $('.footer-item1 p').text('已收藏');
                    }
                    else if (data == '-1')
                    {
                        $('.footer-item1').addClass('weiguanzhu');
                        $('.footer-item1 img').attr('src', '/Public/images/collection1.png');
                        $('.footer-item1 p').text('我要收藏');
                    }

                }
            });
        });
    });

    //查看跟多
    $(function () {
        $('.see-more').click(function () {
            $(this).siblings('.part3-text-box').removeClass('height-ellipsis');
            $(this).siblings('p').show();
            $(this).hide();
        });
        $('.close-more').click(function () {
            $(this).siblings('.part3-text-box').addClass('height-ellipsis');
            $(this).siblings('p').show();
            $(this).hide();
        });
    });
</script>

</body>
</html>