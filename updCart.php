<?php
	session_start();
	$upd=$_GET['upd'];
	$id=$_GET['id'];
	$order=$_SESSION['cart'];
	foreach($order as $key => $value){
		if($value['id']==$id){
			switch($upd){
				case 0:
					if($value['num']>1){
						$order[$key]['num']-=1;
					}else{ unset($order[$key]);}  break;
				case 1: 
					$order[$key]['num']+=1; break;
				default:
			} 
			header("location:cart.php");
		}
		if($upd==""){
			$sum+=$value['price'] * $value['num'];
			header("location:order.php");
		}
	}
	$_SESSION['num']=array_sum(array_column($order,"num"));
	$_SESSION['sum']=$sum;
	$_SESSION['cart']=$order;
?>