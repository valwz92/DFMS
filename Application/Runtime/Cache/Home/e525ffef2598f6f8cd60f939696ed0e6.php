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
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form class="form-horizontal" method="post" action="<?php echo U('create/add_pay','','');?>" enctype="multipart/form-data">
					<h2>添加付款信息</h2>
	  			<div class="form-group form-group-lg">
					  <label class="col-sm-2 control-label">名目</label>
					  <div class="col-sm-10">
					    <p class="form-control-static"><?php echo ($info["term"]); ?>-<?php echo ($info["item"]); ?>-<?php echo ($info["content"]); ?></p>
					    <input type="hidden" name="dec_id" value="<?php echo ($info["id"]); ?>">
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="category" class="col-sm-2 control-label">款项</label>
					  <div class="col-sm-10">
					    <select class="form-control" id="category" name="category">
	  			    	<option value="定金">定金</option>
	  			    	<option value="中期款">中期款</option>
	  			    	<option value="尾款">尾款</option>
	  			    	<option value="货款">货款</option>
	  			    	<option value="人工费">人工费</option>
	  			    </select>
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="price" class="col-sm-2 control-label">金额</label>
					  <div class="col-sm-10">
					    <input type="text" class="form-control" id="price" name="price" placeholder="金额" required="required">
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="date" class="col-sm-2 control-label">日期</label>
					  <div class="col-sm-10">
					    <input type="date" class="form-control" id="date" name="date" placeholder="付款日期">
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="method" class="col-sm-2 control-label">方式</label>
					  <div class="col-sm-10">
					    <select class="form-control" id="method" name="method">
	  			    	<option value="刷卡">刷卡</option>
	  			    	<option value="转账">转账</option>
	  			    	<option value="微信">微信</option>
	  			    	<option value="网购">网购</option>
	  			    	<option value="代买">代买</option>
	  			    </select>
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="remark" class="col-sm-2 control-label">备注</label>
					  <div class="col-sm-10">
					    <input type="text" class="form-control" id="remark" name="remark" placeholder="备注">
					  </div>
					</div>
					<div class="form-group form-group-lg">
					  <label for="file" class="col-sm-2 control-label">单据</label>
					  <div class="col-sm-10">
					    <input type="file" id="file" name="url">
					    <p class="help-block">上传单据照片</p>
					  </div>
					</div>
	  			<div class="form-group form-group-lg">
	  			  <div class="col-sm-offset-2 col-sm-10">
	  			    <button type="submit" class="btn btn-primary btn-lg">提交</button>
	  			  </div>
	  			</div>
	  			<input type="hidden" name="dec_no_term" value="<?php echo ($info["no_term"]); ?>">
				</form>
			</div>
		</div>
	</div>
	

	<script src="/Public/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>