<?php session_start();
	$page="cart";
	$title="Cart";
	$message="";
	include('Admin/conn.php');
	require_once('header.php');
	

	if($_SESSION){
		$_SESSION['update']="rue";
		$cid=$_SESSION['id'];
		$cart="SELECT * FROM `cart` WHERE `userid`=$cid and `confirmed`=0" ;
		$a=mysqli_query($link,$cart);
		if($_SESSION['update']=="true"){
			$message="your query has being submitted to admin ";
			$message1="admin will verify with in 24hrs (check your msg) ";
		}elseif($_SESSION['update']=="remove"){
			$message="product has being successfully removed from your cart";
			$message1="check art for new collections";
		}else{
			$message1="";
		}

	}else{
		header("location:login.php");
	}
	
	
?>
	  
<div class="container-fluid cart-container">
	<div class="panel panel-default">
		<div class="panel-heading">Cart</div>
		<div class="panel-body">
		


<?php
	if($message != ""){
		echo('<p class="btn btn-confirm">'.$message.'</p>');
		echo('<p class="btn btn-confirm">'.$message1.'</p>');
	}


	while($row=mysqli_fetch_assoc($a)){
		$xid=$row['img_id'];
		$idz=$row['id'];
		$count=$row['count'];
		$data="SELECT * FROM uploads WHERE id=$xid";
		$da=mysqli_query($link,$data);
		$dat=mysqli_fetch_assoc($da);
		$img=$dat['image'];
		$name=$dat['name'];
		$rate=$dat['rate'];
		$total=$row['total'];
		$idx=$dat['id'];
		


		echo('<div style="float:left;padding:2%;">
			<div>
			<img src="'.$img.'" style="width:300px;height:300px;possion:fixed;">
			</div>
			<div style="float:right;">
			
				<a href="updatecart.php?img_id='.$idx.'&&cus_id='.$cid.'&&count='.$count.'&&total='.$total.'&&carid='.$idz.'"><button style="margin:3%;" class="btn btn-primary">Checkout</button></a>	
				<br>		
				<a href="updatecart.php?clear_id='.$idz.'" ><button class="btn btn-danger">DELETE</button></a>
			
			</div>
			<div style="float:left;">
			<h4 >'.$name.'</h4>
			<p style="padding:3%;">price :'.$rate.' </p><p >Total number : '.$count.'</p>
			<p >Total price : ₹'.$total.'</p>
			</div>
			
		</div>	');
	
}

?>  



</div>
	</div>	
</div>
<script type="text/javascript">

function btnClick(x)
{
if(x=='+')
{
	var a=document.getElementById("q_item").innerHTML;
	document.getElementById("q_item").innerHTML=parseInt(a)+1;
}
else
{
	document.getElementById("q_item").innerHTML-=1;
}
}
</script>