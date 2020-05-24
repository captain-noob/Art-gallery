<?php 
include('header.php');
	require_once('conn.php');
	
    $form_msg="";
    $lm=$_SESSION['id'];
    $query1="select * from `admin` where id=".$lm;
	$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
    $row=mysqli_fetch_assoc($result1);
    
	if(isset($_POST['sun']))
	{
		$name=$_POST['name'];
		$email=trim($_POST['email']);
		$pwd=trim($_POST['pwd']);
		$confirm=trim($_POST['cpwd']);
		
		
		
		if($name=="" )
		{
			echo $form_msg="Please enter this field";
		}
		else if($email=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($pwd=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($confirm=="")
		{
			echo $form_msg="Please enter this field";
		}
		else
		{
			if($pwd!=$confirm)
			{
				echo $form_msg="Set password and Confirm Password must be same.";
			}
			else
			{
				$query3="UPDATE `admin` SET `full_nm` = '$name', `username` = '$email', `password` = '$pwd' WHERE `admin`.`id` = $lm";
				mysqli_query($link,$query3) or die("Error inserting data.".mysqli_error($link));
				header("location:adminHome.php?update=true");
			}
		}
		
		
	}
	
?>

<div class="container" id="signup" tabindex="" role="dialog" aria-labelledby="myModalLabel" style="margin-top:100px;">
	  <div class="modal-dialog popup" role="document">
		<div class="modal-content">
		  
		  <div class="modal-body">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="panel panel-default">
			<div class="panel-heading" style="text-align:center">Edit And Preview Profile</div>
				<div class="panel-body">
					 <form class="form-horizontal" method="post" action="pro.php">

					 					<label class="control-label col-sm-3" for="FirstName">Name</label>
						 				<input type="text" class="form-control" name="name"  value="<?php echo $row['full_nm']; ?>">

										 <label class="control-label col-sm-3" for="FirstName">Email</label>
						 				<input type="text" class="form-control" name="email"  value="<?php echo $row['username']; ?>">

										 <label class="control-label col-sm-3" for="FirstName">Password</label>
						 				<input type="text" class="form-control" name="pwd"  value="<?php echo $row['password']; ?>">

										 <label class="control-label col-sm-3" for="FirstName">Confirm</label>
						 				<input type="text" class="form-control" name="cpwd"  value="<?php echo $row['password']; ?>">


										<button type="submit" name="sun" class="btn btn-primary">Upload</button>
					</form>
				</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>