<!DOCTYPE html>
<?php
session_start();
$order=$_SESSION['cart'];
$sum=0?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>PHP购物</title>
	</head>
	<body>
		<div>
			<h1>购物车</h1>
			<hr>
			<p><a href="index.php">返回商品列表</a>
			</p>
			<table>
				<tr>
					<th>商品名</th>
					<th>售价</th>
					<th>数量</th>
				</tr>
				<?php foreach($order as $key => $value):?>
				<tr>
					<td><?php echo $value['name'];?></td>
					<td>￥<?php echo $value['price'];?></td>
					<td><a class="btn" href="updCart.php?upd=0&id=<?php echo $value['id'];?>">-</a>
						<?php echo $value['num'];?>
					<a class="btn" href="updCart.php?upd=1&id=<?php echo $value['id'];?>">+</a></td>
				</tr>
				<?php endforeach;?>
				<tr>
					<td colspan="4">
						<form action="updCart.php" method="get">
							<input type="submit" value="结算" />
						</form>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>