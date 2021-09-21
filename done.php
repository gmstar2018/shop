<html>
<?php
session_start();
$order=$_SESSION['cart'];
$sum=$_SESSION['sum'];
$num=$_SESSION['num'];
?>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>PHP购物</title>
	</head>
	<body>
		<h1>订单</h1>
		<ul>
			<li>配送至: <?php echo $_POST["address"];?></li>
			<?php foreach($order as $key => $value):?>
			<li>
				<?php echo $value['name'];?>
				<span>￥<?php echo $value['price'];?></span>
			    <span>x<?php echo $value['num'];?></span>
			</li>
			<?php endforeach;?>
			<li>共<?php echo $num;?>件</li>
			<li>合计: ￥<?php echo $sum;?></li>
		</ul>
	</body>
</html>
