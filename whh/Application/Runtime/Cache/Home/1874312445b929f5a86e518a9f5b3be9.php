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
    <link rel="stylesheet" href="/Public/css/investorDetail.css">
</head>
<body class="bg-gray">
<div class="header clearfix">
    <a href="javascript:history.go(-1);" class="header-left"></a>
    <p class="title-bar-text">投资人</p>
    <a href="<?php echo U('Product/productList',array('token'=>$_GET['token']));?>" class="header-right"></a>
</div>
<section class="p-detail-part1">
    <div class="part1-img-box">
        <?php if($list['inv_logo']): ?><img src="/admin/<?php echo ($list["inv_logo"]); ?>" alt=""/>
        <?php else: ?>
            <img src="/Public/images/investorList-item-default.png" alt=""/><?php endif; ?>
        <p class="part1-name-text"><span><?php echo ($list["inv_name"]); ?></span><i></i>投资人</p>
        <p class="part1-company-text"><?php echo ($list["inv_in_company"]); ?></p>
        <p class="part1-img-text"><span class="money-text">￥<?php echo ($list["inv_yue_money"]); ?> </span> /次</p>
    </div>
    <div class="part1-text-box">
        <p class="am-fl ml-40"><img src="/Public/images/icon-pd-yuejian.png" alt="">约见 <span class="color-red"><?php echo ($list["inv_yue_num"]); ?>次</span></p>
        <p class="am-fr mr-40"><img src="/Public/images/icon-pd-liulan.png" alt="">浏览 <span class="color-red"><?php echo ($list["inv_seen"]); ?>次</span></p>
    </div>
    <div style="clear:both;"></div>
</section>

<section class="p-detail-part2">
    <div class="part-header">
        <h3>投资人概况</h3>
    </div>
    <div class="part2-items-box">
        <p class="part2-items-l"><span>职位类型</span></p>
        <p class="part2-items-r"><span><?php echo ($list["inv_type"]); ?></span></p>
    </div>
    <div class="part2-items-box">
        <p class="part2-items-l"><span>关注领域</span></p>
        <p class="part2-items-r"><span><?php echo ($list["inv_field"]); ?></span></p>
    </div>
    <div class="part2-items-box">
        <p class="part2-items-l"><span>单笔投资</span></p>
        <p class="part2-items-r"><span>￥<?php echo ($list["inv_min_money"]); ?> - ￥<?php echo ($list["inv_max_money"]); ?>万元</span></p>
    </div>
    <div class="part2-items-box">
        <p class="part2-items-l"><span>个人介绍</span></p>
        <p class="part2-items-r"><?php echo ($list["inv_introduce"]); ?></p>
    </div>
</section>
<!--<section class="p-detail-part5">-->
    <!--<div class="part-header">-->
        <!--<h3>工作经历</h3>-->
    <!--</div>-->
    <!--<div class="part5-content">-->
        <!--<ul>-->
            <!--<li>-->
                <!--<img src="/admin/<?php echo ($list["inv_logo_one"]); ?>" alt=""/>-->
                <!--<p><?php echo ($list["inv_company_one"]); ?></p>-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="/admin/<?php echo ($list["inv_logo_two"]); ?>" alt=""/>-->
                <!--<p><?php echo ($list["inv_company_two"]); ?></p>-->
            <!--</li>-->
        <!--</ul>-->
    <!--</div>-->
<!--</section>-->
<section class="p-detail-part3 padding-b-10">
    <div class="part-header">
        <h3>所在公司</h3>
    </div>
    <div class="company-name">
        <img src="/admin/<?php echo ($list["inv_in_logo"]); ?>" alt=""/>
        <p><?php echo ($list["inv_in_company"]); ?></p>
    </div>
    <div class="part3-text-box height-ellipsis">
        <?php echo ($list["inv_in_com"]); ?>
    </div>
    <p class="see-more">查看更多</p>
    <p class="close-more" hidden>收起</p>
</section>
<section class="p-detail-part4">
    <div class="part-header">
        <h3>相关信息</h3>
    </div>
    <div class="part4-items-box clearfix">
        <div class="part4-item-left"><img src="/Public/images/icon-pd-position.png" alt="">约见地址：</div>
        <div class="part4-item-right"><?php echo ($list["inv_yue_address"]); ?></div>
    </div>
    <!--<div class="part4-items-box clearfix bd-none">-->
        <!--<div class="part4-item-left"><img src="/Public/images/icon-pd-time.png" alt="">约见时间：</div>-->
        <!--<div class="part4-item-right">-->
            <!--<p><?php echo ($list["inv_yue_time"]); ?></p>-->
            <!--&lt;!&ndash;<p>上午9:00-11:00 下午2:00-4:00</p>&ndash;&gt;-->
        <!--</div>-->
    <!--</div>-->
</section>
<section class="before-footer"></section>
<footer>
    <?php if(empty($follow)): ?><a href="javascript:;" class="footer-item footer-item1 weiguanzhu" style="display: block;">
        <img src="/Public/images/collection1.png" alt="">
        <p id="<?php echo ($list["inv_id"]); ?>" class="<?php echo ($_GET['token']); ?>">我要收藏</p>
    </a>
    <?php else: ?>
    <a href="javascript:;" class="footer-item footer-item1 yiguanzhu-box" style="display: block;">
        <img src="/Public/images/collection2.png" alt="">
        <p id="<?php echo ($list["inv_id"]); ?>" class="<?php echo ($_GET['token']); ?>">已收藏</p>
    </a><?php endif; ?>
    <?php if($flag): ?><a id="<?php echo ($flag); ?>" class="footer-item js-modal-open"><i id="<?php echo ($_GET['token']); ?>" class="<?php echo ($list["prod_id"]); ?>"></i>已约见</a>
        <?php else: ?>
    <a id="<?php echo ($flag); ?>" href="javascript:;" class="footer-item footer-item2 js-modal-open"><i id="<?php echo ($_GET['token']); ?>" class="<?php echo ($list["inv_id"]); ?>"></i>我要约见</a><?php endif; ?>
    <!--<a href="javascript:;" class="footer-item footer-item3">查看商业计划书</a>-->
</footer>
<div class="am-modal am-modal-no-btn " tabindex="-1" id="your-modal">
    <div class="am-modal-dialog">
        <!--<div class="am-modal-hd">-->
        <!--<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>-->
        <!--</div>-->
        <div class="am-modal-bd">
            <br>
            <p>很抱歉，您的身份为“投资人”，使用权限只能预约产品方</p>
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
            var inv_id = $(this).find("i").attr("class");
            var $target = $(e.target);
            if (abc) {
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "<?php echo U('appointment');?>",
                    data: {'token': token,'inv_id':inv_id},
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
</script>
<script type="text/javascript">
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