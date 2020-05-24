<?php session_start();
$page="";
	include('Admin/conn.php');
	$msg="";
	$flag=0;
if($_GET){
	$ems=$_SESSION['id'];
	$title="Reach us";

	$sql="SELECT * FROM `user_reg` where id='$ems'";
	$a=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($a);
	$name=$row['fname'];
	$email=$row['email'];
	require_once('header.php');
}else
	{
		require_once('header.php');
	}

	if(isset($_POST['xxx'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comment=$_POST['comm'];
		$sqq="INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES (NULL, '$name', '$email', '$comment')";
		if($flag=0){
			$aa=mysqli_query($link,$sqq);
			if($aa){
				$msg="feedback submitted successfully check your email";
				$flag=1;
			}
		}else{
			$msg="alredy submitted when admin replay then you can submit again";
		}
		
	}
?>
        
		<div class="container-fluid">
		  <div class="row reach_us_data">
			<div class="col-md-6 comment_form">
				<div class="panel panel-default">
				  <div class="panel-heading">Leave Comment</div>
				  <div class="panel-body">
					<?php if($msg!=""){echo('
					<button class="btn btn-success"style="width:100%;margin-bottom:2%;">'.$msg.'</button>');}?>
						<form class="form-horizontal" method="POST">
						  <div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php if($_GET) {echo($name);}?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail" class="col-sm-2 control-label">Email <span>*</span></label>
							<div class="col-sm-10">
							  <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if($_GET) {echo($email);}?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputComment" class="col-sm-2 control-label">Comment </label>
							<div class="col-sm-10">
							  <textarea class="form-control" rows="3" name="comm"></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default" name="xxx">Comment</button>
							</div>
						  </div>
						</form>
				  </div>
				</div>	
				
			</div>
			<div class="col-md-6 address">
<?php
		$query="select * from reach_us where uid=1";
		$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
		$contactetails=mysqli_fetch_assoc($result);
		mysqli_free_result($result);
?>
			
				<div class="panel panel-default">
				  <div class="panel-heading">Address</div>
				  <div class="panel-body">
					  <div class="jumbotron">
						<p><?php echo $contactetails['nm']; ?></p>
						<p><?php echo $contactetails['add1']; ?></p>
						<p><?php if($contactetails['add2']!="") 
						{
							echo $contactetails['add2'];
						}
						else
							echo "";
						?></p>
						<p><?php echo $contactetails['city']; ?></p>
						<p><?php echo $contactetails['zipcode']; ?></p>
						<p><?php echo $contactetails['state']; ?></p>
						<br/>
						<p>Contact No: <?php echo $contactetails['contact_no']; ?></p>
					  </div>
				</div>
				 </div>
				</div>
			</div>	