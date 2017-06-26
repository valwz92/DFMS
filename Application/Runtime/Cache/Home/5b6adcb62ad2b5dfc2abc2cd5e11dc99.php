<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>装修记账</title>
	<link rel="stylesheet" type="text/css" href="/DFMS/Public/dist/css/bootstrap.min.css">
	<style type="text/css">
		*{ padding: 0; margin: 0; }
		body{ background: #fff; font-family: "微软雅黑"; color: #333;}
		h1{ font-size: 80px; font-weight: normal; margin: 0px; }
		p{ line-height: 1.8em; font-size: 30px }
		a,a:hover{color:blue;}
		form{ border: 1px solid; border-radius: 5px; padding: 10px; background-color: #eee;}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h1>:)</h1>
				<p>欢迎使用 装修记账系统！</p>
				<form method="post" action="<?php echo U('login','','');?>">
  				<div class="form-group">
  	  			<label for="InputPassword">请输入密码：</label>
  	  			<input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password" required="required">
  				</div>
  				<button type="submit" class="btn btn-primary btn-block">登录</button>
				</form>
				<h4>版本 V1.2 &nbsp;&nbsp;&nbsp;&nbsp; 作者 @行走之心</h4>
				<hr>
				<h4>更新信息</h4>
				<h4>---------------</h4>
				<h4>V1.2_170602 <span class="label label-success">New!</span></h4>
				<h5>列表只显示品牌，点击后显示详细内容和付款信息</h5>
				<h5>新增按大类统计功能，点击<span class="label label-primary">查看统计</span>可显示统计，再次点击收起</h5>
				<h4>---------------</h4>
				<h4>V1.1_170513</h4>
				<h5>新增移动端界面，优化手机查看</h5>
				<h4>---------------</h4>
				<h4>V1.0_170510</h4>
				<h5>创世版本</h5>
			</div>
		</div>
	</div>
	
</body>
</html>