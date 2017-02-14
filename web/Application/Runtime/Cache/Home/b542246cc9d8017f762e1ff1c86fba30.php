<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>

<body>
<h1>查询系统</h1>
<Form action="index" method="post">
    请输入汽车名称：
    <input type="text" name = "name" />
    请输入汽车系列：
    <input type="text" name = "brand" />
    <input type="submit" value="查询" />
</Form>

<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td>代号</td>
        <td>名字</td>
        <td>系列</td>
        <td>出厂时间</td>
        <td>油耗</td>
        <td>功率</td>
    </tr>
    <tr>
        <?php if(is_array($attr)): foreach($attr as $key=>$attr): ?><td><?php echo ($attr["phone"]); ?></td>
            <td><?php echo ($attr["id"]); ?></td>
            <td><?php echo ($attr["password"]); ?></td>
            <td><?php echo ($attr["date"]); ?></td>
            <td><?php echo ($attr["last_login_date"]); ?></td><?php endforeach; endif; ?>
    </tr>
    </table>