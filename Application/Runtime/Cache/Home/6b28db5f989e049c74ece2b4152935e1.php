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
		.th { font-size: 20px; width: 100%; position: fixed; background-color: #dff0d8; }
		.thr { height: 50px; }
		.th * { padding: 5px; }
		.t1 { font-size: 20px; margin-bottom: 120px; width: 100%; }
		.t1 * { padding: 5px; }
		.t2 { font-size: 18px; width: 100%; margin-bottom: 10px; background-color: #fff; }
		.sum { text-align: center; position: fixed; bottom: 0; background-color: #dff0d8; font-size: 20px; border-radius: 5px; padding: 10px; margin: auto; width: 100%; }
		.info { background-color: #e1f5ff; }
	</style>
</head>
<body>
	<!-- <div class="table-responsive"> -->
	<div class="sum">
		<p>设定预算：<?php echo ($budget); ?> <a href="">修改</a></p>
		<p>总计：<?php echo ($all); ?> &nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary">查看统计</button></p>
		<p>剩余：<?php echo ($budget-$all); ?></p>
		<div id="stat">
		<p>---------------------</p>
		<?php if(is_array($stat)): $i = 0; $__LIST__ = $stat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["term"]); ?>：<?php echo ($vo["sum(price)"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<table class="table-bordered th">
			<thead>
				<tr class="thr">
					<th width="10%">#</th>
					<th width="15%">大类</th>
					<th width="35%">项目</th>
					<th width="25%">小计</th>
					<th width="15%">操作</th>
				</tr>
			</thead>
			</table>
		<table class="table-bordered t1">
			<thead>
				<tr class="thr">
					<th width="10%">&nbsp;</th>
					<th width="15%">&nbsp;</th>
					<th width="35%">&nbsp;</th>
					<th width="25%">&nbsp;</th>
					<th width="15%">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($decoration)): $i = 0; $__LIST__ = $decoration;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="t_<?php echo ($vo["id"]); ?>" class="total">
					<th><?php echo ($vo["id"]); ?></th>
					<td><?php echo ($vo["term"]); ?></td>
					<td><?php echo ($vo["item"]); ?></td>
					<td><?php echo ($vo["total"]); ?></td>
					<td><a href="<?php echo U('create/pay',array('id'=>$vo['id']),'');?>">＋</a></td>
				</tr>
				<tr id="c_<?php echo ($vo["id"]); ?>" class="content">
					<th>内容</th>
					<td colspan="4"><?php echo ($vo["content"]); ?></td>
				</tr>
				<tr id="d_<?php echo ($vo["id"]); ?>" class="detail">
					<td colspan="5">
						<table class="table-bordered t2">
							<thead>
								<tr>
									<th>#</th>
									<th>日期</th>
									<th>金额</th>
									<th>类目</th>
									<th>方式</th>
									<th>备注</th>
									<th>单据</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($payment)): $i = 0; $__LIST__ = $payment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo1["dec_id"]) == $vo["id"]): ?><tr>
									<td><?php echo ($vo1["id"]); ?></td>
									<td><?php echo ($vo1["date"]); ?></td>
									<td><?php echo ($vo1["price"]); ?></td>
									<td><?php echo ($vo1["category"]); ?></td>
									<td><?php echo ($vo1["method"]); ?></td>
									<td><?php echo ($vo1["remark"]); ?></td>
									<td><a href="<?php echo ($vo1["url"]); ?>">查看</a></td>
								</tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</td>
				</tr>
				<tr><td colspan="5"></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	<!-- </div> -->

	<script src="/Public/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.detail').hide()
			$('.content').hide()
			$('#stat').hide()
		})
		$('button').click(function(){
			$('#stat').toggle()
		})
		$('.total').click(function(){
			var id = $(this).attr('id').slice(2)
			$('#d_'+id).toggle()
			$('#c_'+id).toggle()
			if ($(this).attr('class') == 'total') {
				$('#t_'+id).attr('class', 'total info')
				$('#c_'+id).attr('class', 'content info')
				$('#d_'+id).attr('class', 'detail info')
				return
			}
			if ($(this).attr('class') == 'total info') {
				$('#t_'+id).attr('class', 'total')
				$('#c_'+id).attr('class', 'content')
				$('#d_'+id).attr('class', 'detail')
				return
			}
		})
	</script>
</body>
</html>