<?php
$products=array(
     array("id"=>"1","name"=>"可可芭蕾","price"=>13.00),
	 array("id"=>"2","name"=>"阿华田","price"=>17.00),
	 array("id"=>"3","name"=>"冰淇淋红茶","price"=>8.00),
	 array("id"=>"4","name"=>"百香三重奏","price"=>15.00)
);
session_start();
$sum=0;
if(! empty($_SESSION['cart'])){
	$order=$_SESSION['cart'];
	$sum=array_sum(array_column($order,"num"));
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>PHP购物</title>
	</head>
	<body>
		<div>
			<h1>商品列表</h1>
			<hr>
			<table>
			<tr>
				<th>商品名</th>
				<th>售价</th>
				<th>购物车</th>
			</tr>
			<?php foreach($products as $key => $value):?>
			<tr>
				<td><?php echo $value['name'];?></td>
				<td>￥<?php echo $value['price'];?></td>
				<td><a class="btn" href="addCart.php?upd=add&id=<?php echo $value['id'];?>&name=<?php echo $value['name'];?>&price=<?php echo $value['price'];?>">+</a></td>
			</tr>
			<?php endforeach;?>
			</table>
			<div>
				<a href="addCart.php?upd=cart">我的购物车</a> <span><?php echo $sum;?></span>
			</div>
		</div>
	</body>
</html>