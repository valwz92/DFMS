<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>装修记账</title>
	<link rel="stylesheet" type="text/css" href="/Public/dist/css/bootstrap.min.css">
	<style type="text/css">
		body{ background: #fff; font-family: "微软雅黑"; color: #333; padding: 20px 0; font-size: 20px; }
		p{ line-height: 1.8em; font-size: 30px }
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form class="form-horizontal" method="post" action="<?php echo U('create/add','','');?>">
					<p>添加项目</p>
	  			<div class="form-group form-group-lg">
	  			  <label for="term" class="col-sm-2 control-label">大类</label>
	  			  <div class="col-sm-10">
	  			    <select class="form-control" id="term" name="no_term">
	  			    	<?php if(is_array($terms)): $i = 0; $__LIST__ = $terms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["term"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	  			    </select>
	  			  </div>
	  			</div>
	  			<div class="form-group form-group-lg">
					  <label for="item" class="col-sm-2 control-label">项目</label>
					  <div class="col-sm-10">
					    <input type="text" class="form-control" id="item" name="item" placeholder="项目（品牌、供应商）">
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="content" class="col-sm-2 control-label">内容</label>
					  <div class="col-sm-10">
					    <input type="text" class="form-control" id="content" name="content" placeholder="内容（货物、数量）">
					  </div>
					</div>
	  			<div class="form-group form-group-lg">
	  			  <div class="col-sm-offset-2 col-sm-10">
	  			    <button type="submit" class="btn btn-primary btn-lg">提交</button>
	  			  </div>
	  			</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="/Public/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>