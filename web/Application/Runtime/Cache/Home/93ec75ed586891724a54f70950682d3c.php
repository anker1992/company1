<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
{*<head>*}
{*<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*}
{*<title>跳转提示</title>*}
{*<style type="text/css">*}
{**{ padding: 0; margin: 0; }*}
{*body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }*}
{*.system-message{ padding: 24px 48px; }*}
{*.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }*}
{*.system-message .jump{ padding-top: 10px}*}
{*.system-message .jump a{ color: #333;}*}
{*.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }*}
{*.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}*}
{*</style>*}
{*</head>*}

<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
	<link rel="stylesheet" href="/Public/css/common.css"/>
	<style type="text/css">
		body{
			background-color: #f8f8f8;
		}
		.header{
			height: 60px;
			background-color: #fc0000;
			line-height: 60px;
		}
		.container{
			width: 1200px;
			min-width: 1200px;
		}
		.header span,.header span img{
			width: 89px;
			height: 43px;
			display: inline-block;
		}
		.header span{
			float: left;
			padding-right: 25px;
			border-right: 2px solid #fff;
			margin-top: 8px;
		}
		.header h3{
			float: left;
			color: #fff;
			font-size: 18px;
			font-weight: normal;
			padding-left: 25px;
		}

		.part1 .container{
			margin-top: 120px;
			height: 520px;
			background-color: #fff;
			border-top: 8px solid #fc0000;
			border-radius: 5px;
			box-shadow: 5px 5px 7px #eee,-6px 6px 7px #eee;
		}
		.part1 .container .part1-con{
			padding-top: 100px;
			width: 100%;
			text-align: center;
		}
		.part1 .container .part1-con h3{
			font-size: 22px;
			margin: 15px 0;
			color: #000;
			font-weight: normal;
		}
		.part1 .container .part1-con p{
			color: #4a4a4a;
			font-size: 16px;
		}
		.part1 .container .part1-con span{
			color: #fa0000;
			font-size: 16px;
			font-weight: bold;
			margin: 0 5px;
		}
	</style>
</head>
<body>
<div class="system-message">
	<div class="header">
		<div class="container">
        <span>
            <a href="">
				<img src="/Public/images/logo.png" alt=""/>
			</a>
        </span>
			<h3>提示页面</h3>
		</div>
	</div>

	<?php if(isset($message)){ ?>
	<div class="part1">
		<div class="container">
			<div class="part1-con">
			<img src="/Public/images/completeInfo-icon1.png" alt=""/>
			<h3><?php echo($message); ?></h3>
			<p class="jump">
			页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
			</p>
			</div>
		</div>
	</div>
	<?php }else{ ?>
	<div class="part1">
		<div class="container">
			<div class="part1-con">
			<img src="/Public/images/icon_quxiao.png" alt=""/>
			<h3><?php echo($error); ?></h3>
			<p class="jump">
			页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
			</p>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>