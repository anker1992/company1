<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/partofamazeui.css">
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/datingArticle.css"/>
</head>
<body>



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


<!--nav1开始-->
<div class="nav1">
    <div class="container">
        <ul class="clearfix">
            <li><a href="<?php echo U('Dating/datingindex');?>">相亲首页</a></li>
            <li><a href="<?php echo U('Dating/datingexpand');?>">个人中心</a></li>
            <li class="cur"><a href="<?php echo U('Dating/datingsearch');?>">搜索</a></li>
            <li><a href="javascript:;">线下活动</a></li>
            <li><a href="<?php echo U('Dating/datingcase');?>">情感视界</a></li>
        </ul>
    </div>
</div>
<!--nav1结束-->

<div class="datingArticle-part1">
    <div class="container clearfix">
        <div class="part1-left">
            <div class="part1-left-top">
                <img src="<?php echo ($list["touxiang_src"]); ?>" alt=""/>
            </div>
            <div class="part1-left-bottom">
                <div class="list">
                    <ul>
                        <li><img src="<?php echo ($list["touxiang_src"]); ?>" alt=""></li>
                        <?php if(is_array($url)): foreach($url as $key=>$url): ?><li><img src="<?php echo ($url['url']); ?>" alt=""/></li>
                        <!--<li><img src="/Public/images/datingArticle-item02.jpg" alt=""/></li>-->
                        <!--<li><img src="/Public/images/datingArticle-item03.jpg" alt=""/></li>--><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="btn">
                    <span class="btnLeft"></span>
                    <span class="btnRight"></span>
                </div>
            </div>
        </div>
        <div class="part1-right">
            <div class="part1-right-top">
                 <h3><?php echo ($list["nickname"]); ?></h3>
                    <!--<ul>-->
                         <!--<li>ID: <span><?php echo $id ?></span></li>-->
                         <!--<li>诚信值: <span></span></li>-->
                         <!--<li>魅力值: <span></span></li>-->
                     <!--</ul>-->
            </div>
            <div class="part1-right-middle">
                <table>
                    <tbody>
                     <tr>
                         <td>年龄: <span><?php echo ($list["age"]); ?></span></td>
                         <td>身高: <span><?php echo ($list["height"]); ?>CM</span></td>
                         <td>月收入: <span><?php echo ($list["salary"]); ?></span></td>
                     </tr>
                     <tr>
                         <td>婚况: <span><?php echo ($list["maritalstatus"]); ?></span></td>
                         <td>学历: <span><?php echo ($list["education"]); ?></span></td>
                         <td>工作地: <span><?php echo ($list["workarea"]); ?></span></td>
                     </tr>
                     <tr>
                         <td>职业: <span><?php echo ($list["profession"]); ?></span></td>
                         <td>星座: <span><?php echo ($list["constellation"]); ?></span></td>
                         <td>籍贯: <span><?php echo ($list["hukou"]); ?></span></td>
                     </tr>
                     </tbody>
                </table>
            </div>
            <div class="part1-right-bottom">
                <span id="send-message-button" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 740, height: 420}">发消息</span>
                <span data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 487}">打招呼</span>
            </div>
        </div>

        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
                                            <div class="am-modal-dialog sendmessage-popbox">
                                                <div class="sendmessage-left">
                                                    <img class="avatar-img align-center" src="<?php echo ($list["touxiang_src"]); ?>" alt="">
                                                    <p><?php echo ($list["nickname"]); ?></p>
                                                    <a href="#">查看资料</a>
                                                </div>

                                                <div class="sendmessage-right">
                                                    <div class="sendmessage-right-hd">
                                                        <em>i</em><p>提示，请勿在交往中发生经济往来。</p>
                                                        <a href="javascript: void(0)" class="am-close am-close-spin fr" data-am-modal-close>&times;</a>
                                                    </div>
                                                    <div class="chat-content" id="chat-container-box">
                                                        <dd>
                                                            <p class="chat-left">你好，可以交个朋友吗？</p>
                                                        </dd>
                                                        <dd>
                                                            <p class="chat-right">当然可以！</p>
                                                        </dd>
                                                        <dd>
                                                            <p class="chat-right">第一眼见到你的照片就有点心动的感觉，这就是眼缘吧。期待你的回复 可以先看看我的资料，如果还行，希望彼此可以多接触看看。</p>
                                                        </dd>

                                                    </div>
                                                    <div class="chat-input">
                                                        <textarea name="" id="chat-textarea" minlength="1" maxlength="1000" onkeydown="keySend(event);"></textarea>
                                                        <div class="send-bar">
                                                            <p>按“Ctrl+Enter”键发送&nbsp;&nbsp;&nbsp;&nbsp;您还可输入<em id="count-chat">1000</em>字</p>
                                                            <a href="javascript:;" class="red-button" onclick="sendMessage()">发送</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
                                            <div class="am-modal-dialog">
                                                <div class="am-modal-hd">
                                                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                                </div>
                                                <div class="am-modal-bd sayhello-popbox">
                                                    <div class="sayhello-avatar-bar">
                                                        <img class="avatar-img" src="<?php echo ($list["touxiang_src"]); ?>" alt="">
                                                        <div class="personal-data-box">
                                                            <p><?php echo ($list["nickname"]); ?></p>
                                                            <p>年龄 <?php echo ($list["age"]); ?> &nbsp;/&nbsp; <?php echo ($list["height"]); ?> &nbsp;/&nbsp; <?php echo ($list["education"]); ?> &nbsp;/&nbsp; <?php echo ($list["workarea"]); ?></p>
                                                        </div>
                                                        <div style="clear:both;"></div>
                                                    </div>
                                                    <div class="choose-items">
                                                        <label class="am-radio">
                                                            <input type="radio" name="radio1" value="你好，很高兴认识你。" data-am-ucheck checked>
                                                            你好，很高兴认识你。
                                                        </label>
                                                        <label class="am-radio">
                                                            <input type="radio" name="radio1" value="你好，可以交个朋友吗？" data-am-ucheck>
                                                            你好，可以交个朋友吗？
                                                        </label>
                                                        <label class="am-radio">
                                                            <input type="radio" name="radio1" value="看了你的资料和照片很想跟你做个朋友。" data-am-ucheck>
                                                            看了你的资料和照片很想跟你做个朋友。
                                                        </label>
                                                        <label class="am-radio">
                                                            <input type="radio" name="radio1" value="你是我心仪的类型，期待收到你的回复。" data-am-ucheck>
                                                            你是我心仪的类型，期待收到你的回复。
                                                        </label>
                                                        <label class="am-radio">
                                                            <input type="radio" name="radio1" value="第一眼见到你的照片就有点心动的感觉，这就是眼缘吧。" data-am-ucheck>
                                                            第一眼见到你的照片就有点心动的感觉，这就是眼缘吧。
                                                        </label>
                                                        <label class="am-radio">
                                                            <input type="radio" name="radio1" value="期待你的回复 可以先看看我的资料，如果还行，希望彼此可以多接触看看。" data-am-ucheck>
                                                            期待你的回复 可以先看看我的资料，如果还行，希望彼此可以多接触看看。
                                                        </label>
                                                    </div>
                                                    <div class="sayhello-button">
                                                        <a href="javascript:;" data-am-modal-close onclick="sayHello()">打招呼</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

        <div class="datingArticle-part2 pdr-no-scroll">
            <div class="container">
                <ul class="clearfix">
                    <!--<li class="cur">内心独白</li>-->
                    <!--<li>自我描述</li>-->
                </ul>
                <div class="">
                    <p></p>
                </div>
                <div class="hide">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="datingArticle-part3">
            <div class="container">
                <ul>
                    <li class="clearfix">
                        <i class="item01"><img src="/Public/images/datingArticle-part3-item01.png" alt=""/></i>
                        <table>
                            <tr>
                                <td>性别: <span><?php echo ($list["sex"]); ?></span></td>
                                <td>生肖: <span><?php echo ($list["tweleveanimals"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>身高: <span><?php echo ($list["height"]); ?></span></td>
                                <td>星座: <span><?php echo ($list["constellation"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>体重: <span><?php echo ($list["weight"]); ?>KG</span></td>
                                <td>血型: <span><?php echo ($list["bloodtype"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>民族: <span><?php echo ($list["nation"]); ?></span></td>
                                <td>职业: <span><?php echo ($list["profession"]); ?></span></td>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    </li>
                    <li class="clearfix">
                        <i class="item02"><img src="/Public/images/datingArticle-part3-item02.png" alt=""/></i>
                        <table>
                            <tr>
                                <td>是否有房: <span><?php echo ($list["ifbuyhouse"]); ?></span></td>
                                <td>想何时结婚: <span><?php echo ($list["whenmarry"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>是否购车: <span><?php echo ($list["ifbuycar"]); ?></span></td>
                                <td>婚后与父母住吗: <span><?php echo ($list["livewithparents"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>是否吸烟: <span><?php echo ($list["ifsmoke"]); ?></span></td>
                                <td>有无子女: <span><?php echo ($list["ifhaschild"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>是否喝酒: <span><?php echo ($list["ifdrink"]); ?></span></td>
                                <td>兄弟姐妹: <span><?php echo ($list["brotherandsister"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>厨艺: <span><?php echo ($list["cookingskils"]); ?></span></td>
                                <td>家务: <span><?php echo ($list["housework"]); ?></span></td>
                            </tr>
                            <tr>

                                <td><span></span></td>
                            </tr>
                        </table>
                    </li>
                    <li class="clearfix">
                        <i class="item03"><img src="/Public/images/datingArticle-part3-item03.png" alt=""/></i>
                        <table>
                            <tr>
                                <td>喜欢的活动: <span><?php echo ($list["loveactivity"]); ?></span></td>
                                <td>喜欢的食物: <span><?php echo ($list["lovefood"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>喜欢的体育运动: <span><?php echo ($list["lovesport"]); ?></span></td>
                                <td>喜欢的地方: <span><?php echo ($list["lovespace"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>喜欢的音乐: <span><?php echo ($list["lovemusic"]); ?></span></td>
                                <td>喜欢的宠物: <span><?php echo ($list["lovepet"]); ?></span></td>
                            </tr>
                            <tr>
                                <td>喜欢的影视节目: <span><?php echo ($list["lovefilmprogram"]); ?></span></td>
                                <!--<td>职业: <span><?php echo ($list["profession"]); ?></span></td>-->
                            </tr>
                        </table>
                    </li>
                    <li class="clearfix last">
                        <i class="item04"><img src="/Public/images/datingArticle-part3-item04.png" alt=""/></i>
                        <table>
                            <tr>
                                <td>身高: <span><?php echo ($list["zheight"]); ?></span></td>
                                <td>婚况: <span><?php echo ($list["zmarry"]); ?></span></td>
                                <!--<td>是否抽烟: <span><?php echo ($list["zifsmoke"]); ?></span></td>-->
                            </tr>
                            <tr>
                                <td>学历: <span><?php echo ($list["zeducation"]); ?></span></td>
                                <td>购房状况: <span><?php echo ($list["zifbuyhouser"]); ?></span></td>
                                <!--<td>是否喝酒: <span><?php echo ($list["zifdrink"]); ?></span></td>-->
                            </tr>
                            <tr>
                                <td>月收入: <span><?php echo ($list["zsalary"]); ?></span></td>
                                <td>有没有孩子: <span><?php echo ($list["zifhaschild"]); ?></span></td>
                                <!--<td>年龄: <span><?php echo ($list["zage"]); ?></span></td>-->
                            </tr>
                            <tr>
                                <td>工作地区: <span><?php echo ($list["zworkarea"]); ?></span></td>
                            </tr>
                        </table>
                    </li>
                </ul>
                <div class="integrity">
                    <a href="javascript:;">对他(她)有意，我要留言</a>
                </div>
            </div>
        </div>
        <!--footer开始-->
        <div class="footer" id="footer"><div class="container">
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
            <script src="/Public/js/amazeui.js"></script>
            <script type="text/javascript">
                                            $(function(){
                                                $('.nav-right ul li').hover(function(){
                                                    if($(this).find('ol').size()!==0){
                                                        $(this).find("ol").css({
                                                            display:"block"
                                                        })
                                                    }
                                                },function(){
                                                    if($(this).find("ol").size()!==0){
                                                        $(this).find("ol").css({
                                                            display:"none"
                                                        })
                                                    }
                                                })
                                            });

                                            $(function(){
                                                var index = 0;
                                                var oUl = $(".part1-left-bottom .list ul");
                                                var oLis = oUl.find("li");
                                                var len = oLis.length;
                                                var wid = oLis.outerWidth(true);
                                                $(".part1-left-bottom span").click(function(){
                                                    if($(this).attr("class") == "btnLeft"){
                                                        index = index<=0 ? 0 : --index;
                                                    }else if($(this).attr("class") == "btnRight"){
                                                        index = index>=(len-3) ? len-3 : ++index;
                                                    }
                                                    oUl.css({
                                                        left:-1*index*wid
                                                    })
                                                });
                                                /*$(".part1-left-bottom .btnLeft").click(function(){
                                                 index--;
                                                 if(index<=-1){
                                                 index = 0;
                                                 }
                                                 oUl.css({
                                                 left:-1*index*wid
                                                 })
                                                 });
                                                 $(".part1-left-bottom .btnRight").click(function(){
                                                 index++;
                                                 if(index>=(len-3)){
                                                 index = len-3;
                                                 }
                                                 oUl.css({
                                                 left:-1*index*wid
                                                 })
                                                 });
                                                 */
                                                oUl.on("click","li",function(){
                                                    if($(this).attr("class") !== "last"){
                                                        var val = $(this).find("img").attr("src");
                                                        $(this).addClass("cur").siblings().removeClass("cur");
                                                        $(".part1-left-top img").attr("src",val);
                                                    }
                                                })
                                            });

                                            $(function(){
                                                $(".datingArticle-part2 ul li").click(function(){
                                                    var index = $(this).index();
                                                    $(this).addClass("cur").siblings().removeClass("cur");
                                                    $(this).parents(".container").find("div").eq(index).css("display","block").siblings("div").css("display","none");
                                                })
                                            });

                                            //聊天输入剩余字数
                                            $(document).ready(function() {
                                                $(document).keyup(function() {
                                                    var text = $("#chat-textarea").val();
                                                    var counter = text.length;
                                                    $("#count-chat").text(1000 - counter);
                                                });
                                            });
                                            //键盘Ctrl+Enter发送
                                            function keySend(event) {
                                                if (event.ctrlKey && event.keyCode == 13) {
                                                    sendMessage();
                                                }
                                            }
                                            function sendMessage(){
                                                var inputarea=document.getElementById("chat-textarea").value;
                                                if(inputarea !=""){
                                                    var chatbox=document.getElementById("chat-container-box");
                                                    chatbox.innerHTML=chatbox.innerHTML+"<dd><p class='chat-right'>"+inputarea+"</p></dd>";
                                                    chatbox.scrollTop=chatbox.scrollHeight;

                                                    document.getElementById("chat-textarea").value="";
                                                }
                                            }
                                            //打招呼
                                            function sayHello(){
                                                var radio = document.getElementsByName("radio1");
                                                for (i=0; i<radio.length; i++) {
                                                    if (radio[i].checked) {
                                                        alert(radio[i].value);
                                                    }
                                                }
                                            }
                                        </script>
</body>
</html>