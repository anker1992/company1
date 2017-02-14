<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/loanProArticle.css"/>
</head>
<body>
<!--header 开始-->



<div class="header">
    <div class="container clearfix">
        <div class="head-left left">
            <div class="head-logo">
                <a href="<?php echo U('Index/index');?>"><img src="/Public/images/logo.png" alt=""/></a>
            </div>
            <ul>
                <!-- <li><a href="index.php" target="_self">首页</a></li> -->
                <li><a href="<?php echo U('Freemarket/freeMarket');?>">自由市场</a></li>
                <li><a href="<?php echo U('Rongzi/financeproducts');?>">智能投顾</a></li>
                <li><a href="<?php echo U('Daikuan/personalloan');?>">智能信贷</a></li>
                <li><a href="<?php echo U('Dating/datingindex');?>">相亲交友</a></li>
                <li>
                    <a href="javascript:;">关于我们</a>
                    <ol>
                        <li><a href="<?php echo U('Static/aboutUs');?>">公司简介</a></li>
                        <li><a href="<?php echo U('Static/contactUs');?>">联系我们</a></li>
                        <li><a href="<?php echo U('Static/adService');?>">主营业务</a></li>
                        <li><a href="<?php echo U('Static/joinUs');?>">加入我们</a></li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="head-right right">
            <ol>
                <!-- <li class="search"><a href="javascript:void(0)"><i></i>搜索</a></li>-->
                <?php
 if(cookie('think_user_name')) {?>
                <li class="login"><a href="###"><i></i><?php echo cookie('think_user_name'); ?></a></li>
                <li class="login"><a href="<?php echo U('User/logout'); ?>"><i></i>退出</a></li>
                <?php }else{ ?>

                <li class="login login2"><a href="<?php echo U('User/login'); ?>"><i></i>登录</a></li>
                <li class="register login2"><a href="<?php echo U('User/register'); ?>"><i></i>注册</a></li>
                <?php
 }?>
            </ol>
        </div>
    </div>
</div>
<script type="text/javascript">
    function jiaoyou(){
        alert("相亲交友模块暂时未融到框架里");
    }
    function zhaopin(){
        alert("招聘模块暂时未融到框架里");
    }
</script>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/19027900.js"></script>
<noscript><a href="http://www.51.la/?19027900" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/19027900.asp" style="border:none" /></a></noscript>


<!--header结束-->

<div class="part1">
    <div class="container clearfix">
        <h2><?php echo ($listone["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo ($listone["logo2"]); ?>" alt=""></h2>
        <h3><span class="red"><?php echo ($listone["diya"]); ?></span>
            <span><?php echo ($listone["shenqing"]); ?></span>
            <span><?php echo ($listone["fangkuan"]); ?></span>
        </h3>
        <div class="part1-left">
            <p>贷款金额：<span><?php echo ($listone["min_qian"]); ?>万元~<?php echo ($listone["max_qian"]); ?>万元</span></p>
            <p>贷款期限：<span><?php echo ($listone["min_yue"]); ?>个月~<?php echo ($listone["max_yue"]); ?>个月</span></p>
            <p>总利息：<span class="red"><?php echo ($listone["lixi"]); ?></span></p>
            <p>月供：<span class="red"><?php echo ($listone["yuegong"]); ?></span></p>
            <p>利率说明：<span><?php echo ($listone["yuelilv"]); ?></span></p>
        </div>
        <div class="part1-right">
            <a href="<?php echo U('Static/liuyan');?>">留言咨询</a>
        </div>
    </div>
</div>
<div class="part2">
    <div class="container">
        <div class="part2-con">
            <ul class="clearfix">
                <li class="ml15 cur"><a href="#box1">贷款须知</a>|</li>
                <li><a href="#box2">留言互动</a></li>
            </ul>
            <div class="box1" id="box1">
                <ol>
                    <li>
                        <h3>申请条件：</h3>
                        <p><?php echo ($listone["tiaojian"]); ?></p>
                        <!-- <p>收入要求：工资月打卡税后5000元以上；</p>
                        <p>信用要求：信用记录良好；</p> -->
                    </li>
                    <li>
                        <h3>所需材料：</h3>
                        <p><?php echo ($listone["cailiao"]); ?></p>
                    </li>
                    <li>
                        <h3>利率说明：</h3>
                        <table>
                            <?php echo ($listone["lilvshuoming"]); ?>
                        </table>
                    </li>
                </ol>
            </div>
            <div class="box2" id="box2">
                <h3>暂无人留言……</h3>
                <ul class="clearfix">
                    <li>
                        <div class="message clearfix">
                            <img src="/Public/images/loanProArticle-part2-item01.jpg" alt=""/>
                            <div class="message-top-right">
                                <p class="username">用户名</p>
                                <p class="time">2016-9-22 10:32:33</p>
                                <p class="question">我是国企员工，工资打卡4000以上，工作5年了，信用卡有过逾期，能贷款吗?</p>
                            </div>
                        </div>
                        <div class="reply">
                            <p><span class="red">微合伙贷款助理：</span>首先你卡一下自己的逾期情况有多严重，有没有超过九十天，有几次，是不是连续的，不同程度有不同的处理办法，如果只有几次逾期，超过几天，关系影响不大。 </p>
                        </div>
                        <div class="btn">
                            <span class="red support">赞(<i>0</i>)</span>
                            <span class="red comment">评论</span>
                        </div>
                    </li>
                    <li>
                        <div class="message clearfix">
                            <img src="/Public/images/loanProArticle-part2-item01.jpg" alt=""/>
                            <div class="message-top-right">
                                <p class="username">木子</p>
                                <p class="time">2016-9-22 10:32:33</p>
                                <p class="question">您好，我工作5年以上，有稳定工作，社保公积金齐全。但是就是工资扣完没有达到5000以上，可以申请3万的贷款吗?</p>
                            </div>
                        </div>
                        <div class="reply">
                            <p><span class="red">微合伙贷款助理：</span>您好是可以申请贷款业务的，能提供工作证明和工资流水就可以申请，申请贷款是无任何费用的，希望能帮到您，可以联系我</p>
                        </div>
                        <div class="btn">
                            <span class="red support">赞(<i>0</i>)</span>
                            <span class="red comment">评论</span>
                        </div>
                        <!-- <div class="comment-box">
                             <textarea name="comment" id="comment">aa</textarea>
                             <div class="btn-box clearfix">
                                 <input type="button" class="sub" value="提交"/>
                                 <input type="button" class="ret" value="返回"/>
                             </div>
                         </div>-->
                    </li>

                </ul>
                <div class="write-box">
                    <h2>我要留言</h2>
                    <textarea name="con" id="con">内容：</textarea>
                    <input type="button" class="submit" value="发布"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!--footer开始-->
<div class="footer" id="footer">
    <div class="container">
        <div class="attention">
            <img src="/Public/images/weixin.png" alt=""/>
            <p>关注微信公众号</p>
        </div>
        <div class="contact">
            <ul>
                <li class="tel"><span></span>010—58690663</li>
                <li class="email"><span></span>weihehuo@163.com</li>
                <li class="address"><span></span>北京市朝阳区建外SOHO东区B座2703</li>
                <li class="workday"><span></span>周一至周五 9:00——18:00</li>
            </ul>
        </div>
    </div>
</div>
<!--footer结束-->
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    $(function(){
        $(".write-box textarea").focusin(function(){
            if($(this).val() == "内容："){
                $(this).val("").css("color","#000")
            }
        }).blur(function(){
            if($(this).val() == ""){
                $(this).val("内容：").css("color","#ccc")
            }
        });

        /*查看是否有留言,有留言就隐藏h3标签，没有留言就显示h3标签*/
        var oMsg = $('.box2'),oMsgUl = oMsg.find("ul"),oMsgLi = oMsg.find("li");
        if(oMsgLi.length !== 0){
            oMsg.find("h3").addClass("hide");
            oMsgLi.removeClass('hide');
        }else{
            oMsg.find("h3").removeClass("hide");
            oMsgLi.addClass('hide');
        }

        function timeStamp2String(){
            var datetime = new Date();
            //datetime.setTime(time);
            var year = datetime.getFullYear();
            var month = datetime.getMonth() + 1 < 10 ? "0" + (datetime.getMonth() + 1) : datetime.getMonth() + 1;
            var date = datetime.getDate() < 10 ? "0" + datetime.getDate() : datetime.getDate();
            var hour = datetime.getHours()< 10 ? "0" + datetime.getHours() : datetime.getHours();
            var minute = datetime.getMinutes()< 10 ? "0" + datetime.getMinutes() : datetime.getMinutes();
            var second = datetime.getSeconds()< 10 ? "0" + datetime.getSeconds() : datetime.getSeconds();
            return year + "-" + month + "-" + date+" "+hour+":"+minute+":"+second;
        }

        function oMsgText(val){
            var str = "<li>";
            str+="<div class='clearfix message'>";
            str += "<img src='/Public/images/loanProArticle-part2-item01.jpg' />";
            str += "<div class='message-top-right'>";
            str += "<p class='username'>用户名</p>";
            str += "<p class='time'>"+timeStamp2String()+"</p>";
            str += "<p class='question'>"+val+"</p>";
            str += "</div>";
            str += "</div>";
            str += "<div class='btn'>";
            str += "<span class='red support'>赞(<i>0</i>)</span>";
            str += "<span class='red comment'>评论</span>";
            str += "</div>";
            str+="</li>";
            return str;
        }

        function oCommentBox(){
            var str = "<div class='comment-box'>";
            str += "<textarea name='comment' id='comment'></textarea>";
            str += "<div class='btn-box clearfix'>";
            str += "<input type='button' class='sub' value='提交'>";
            str += "<input type='button' class='ret' value='返回'>";
            str += "</div>";
            str += "</div>";
            return str;
        }

        $(".submit").click(function(){
            if(oMsg.find("h3").is(":visible")){
                oMsg.find("h3").addClass("hide");
            }
            var oText = $(".write-box textarea");
            var val = oText.val().trim();
            if(val == '' || val == '内容：'){
                return;
            }

            oMsgUl.append(oMsgText(val));
            oText.val("内容：").css("color","#ccc");

            $(".box2 ul li").on("click","span.comment",function(){
                if($(".comment-box").length==0){
                    $(this).parent().after(oCommentBox());
                }
            });
            $(".box2 ul li").on("click","span.support",function(){
                var oSupport = $(this).find("i");
                var val = parseFloat(oSupport.text());
                oSupport.text(val+1);
            });

            $(".box2 ul li").on("click","input.sub",function(){
                var oText = $(".comment-box textarea");
                var val = oText.val().trim();
                var str1 = "<div class='reply'>";
                str1 += "<p><span class='red'>用户名：</span>"+val+"</p>";
                str1 += "</div>";
                $(this).parent().parent().prev().before(str1);
                $(this).parent().parent().remove();
            });

            $(".box2 ul li").on("click","input.ret",function(){
                $(this).parent().parent().remove();
            })

        });



        var oLis = $(".box2 ul li");
        oLis.on("click","span.comment",function(){
            if($(".comment-box").length == 0){
                $(this).parent().after(oCommentBox());
            }
        });
        oLis.on("click","span.support",function(){
            var val = parseFloat($(this).find("i").text());
            $(this).find("i").text(val+1);
        });

        oLis.on("click","input.sub",function(){
            var oText = $(".comment-box textarea");
            var val = oText.val().trim();
            var str1 = "<div class='reply'>";
            str1 += "<p><span class='red'>用户名：</span>"+val+"</p>";
            str1 += "</div>";
            $(this).parent().parent().prev().before(str1);
            $(this).parent().parent().remove();

        });

        oLis.on("click","input.ret",function(){
            $(this).parent().parent().remove();
        })
    });

    $(function(){

    });


</script>

</body>
</html>