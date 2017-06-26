<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>装修记账</title>
	<link rel="stylesheet" type="text/css" href="/Public/dist/css/bootstrap.min.css">
	<style type="text/css">
		body{ background: #fff; font-family: "微软雅黑"; color: #333;}
		.t1 { font-size: 18px; }
		.t2 { font-size: 16px; }
	</style>
</head>
<body>
	<!-- <div class="table-responsive"> -->
		<table class="table table-hover table-bordered t1">
			<caption>10-1-1204 装修记账 设定预算：<?php echo ($budget); ?> 当前总计：<?php echo ($all); ?> 剩余：<?php echo ($budget-$all); ?></caption>
			<thead>
				<tr>
					<th>#</th>
					<th>大类</th>
					<th>项目</th>
					<th>内容</th>
					<th>总计</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($decoration)): $i = 0; $__LIST__ = $decoration;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="t_<?php echo ($vo["id"]); ?>" class="total">
					<th scope="row"><?php echo ($vo["id"]); ?></th>
					<td><?php echo ($vo["term"]); ?></td>
					<td><?php echo ($vo["item"]); ?></td>
					<td><?php echo ($vo["content"]); ?></td>
					<td><?php echo ($vo["total"]); ?></td>
					<td><a href="<?php echo U('create/pay',array('id'=>$vo['id']),'');?>">添加</a></td>
				</tr>
				<tr id="d_<?php echo ($vo["id"]); ?>" class="detail">
					<td colspan="6">
						<table class="table table-hover table-bordered t2">
							<thead>
								<tr>
									<th>#</th>
									<th>类目</th>
									<th>金额</th>
									<th>日期</th>
									<th>方式</th>
									<th>备注</th>
									<th>单据</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($payment)): $i = 0; $__LIST__ = $payment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo1["dec_id"]) == $vo["id"]): ?><tr>
									<td><?php echo ($vo1["id"]); ?></td>
									<td><?php echo ($vo1["category"]); ?></td>
									<td><?php echo ($vo1["price"]); ?></td>
									<td><?php echo ($vo1["date"]); ?></td>
									<td><?php echo ($vo1["method"]); ?></td>
									<td><?php echo ($vo1["remark"]); ?></td>
									<td><a href="<?php echo ($vo1["url"]); ?>">查看</a></td>
								</tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	<!-- </div> -->

	<script src="/Public/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.detail').hide()
		})
		$('.total').click(function(){
			var id = $(this).attr('id').slice(2)
			$('#d_'+id).toggle()
			if ($(this).attr('class') == 'total') {
				$(this).attr('class', 'total info')
				return
			}
			if ($(this).attr('class') == 'total info') {
				$(this).attr('class', 'total')
				return
			}
		})
	</script>
</body>
</html>