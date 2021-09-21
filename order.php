<!DOCTYPE html>
<?php
session_start();
$order=$_SESSION['cart'];
$sum=$_SESSION['sum'];
$num=$_SESSION['num'];
?>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>PHP购物</title>
</head>
<body>
	<div>
		<h1>确认订单</h1>
		<hr>
		<a href="index.php">返回商品列表</a>
		</p>
		<table>
			<?php foreach($order as $key => $value):?>
			<tr>
				<td><?php echo $value['name'];?></td>
				<td>￥<?php echo $value['price'];?> <span>x<?php echo $value['num'];?></span></td>
			</tr>
			<?php endforeach;?>
			<tr>
				<td colspan="2">
					<span>共<?php echo $num;?>件</span>
					小计:￥<?php echo $sum;?>
				</td>
			</tr>
		</table>
		<form action="done.php" method="post" class="address">
			<textarea name="address" placeholder="输入地址" cols="60" required></textarea>
			<input type="submit" value="提交订单">
		</form>
	</div>
</body>
</html>
