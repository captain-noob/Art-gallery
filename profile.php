<?php session_start();
$page="";
include('header.php');
	require_once('Admin/conn.php');
	

    $form_msg="";
    $lm=$_SESSION['id'];
    $query1="select * from user_reg where id=".$lm;
	$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
    $row=mysqli_fetch_assoc($result1);
    
	if(isset($_POST['registerClick']))
	{
		$fnm=trim($_POST['fnm']);
		$lnm=trim($_POST['lnm']);
		$contact=trim($_POST['contact']);
		$email=trim($_POST['email']);
		$pwd=trim($_POST['pwd']);
		$confirm=trim($_POST['confirmpwd']);
		$add1=trim($_POST['add1']);
		$add2=trim($_POST['add2']);
		$add3=trim($_POST['add3']);
		
		
		if($fnm=="" )
		{
			echo $form_msg="Please enter this field";
		}
		else if($lnm=="")
		{
			echo $form_msg="Please enter this field";
		}
		else if($contact=="")
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
			$query3="UPDATE `user_reg` SET fname='$fnm',lname='$lnm',contact='$contact',email='$email',password='$pwd',add1='$add1',add2='$add2',add3='$add3' WHERE `user_reg`.`id` = '$lm'";
				mysqli_query($link,$query3) or die("Error inserting data.".mysqli_error($link));
				echo "success";
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
					 <form class="form-horizontal" role="form" id="register" method="post" action="profile.php">
					  <div class="form-group">
						<label class="control-label col-sm-3" for="FirstName">First Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="fnm"  value="<?php echo $row['fname']; ?>">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="LastName">Last Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="lnm" value="<?php echo $row['lname']; ?>">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="ContactNo">Contact No</label>
						<div class="col-sm-8">
						  <input type="number" class="form-control" name="contact" value="<?php echo $row['contact']; ?>">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="email">Email</label>
						<div class="col-sm-8">
						  <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
						</div>
					  <div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3" for="pwd">change Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="pwd" value="<?php echo $row['password']; ?>">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3" for="conpwd">Confirm Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="confirmpwd" value="<?php echo $row['password']; ?>">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
						<div class="form-group">
							<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
						  </div>
						
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err" style="display:none">Set password and Confirm Password must be same.</label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="address">Address</label>
						<div class="col-sm-8"> 
						  <input type="text" class="form-control" name="add1" value="<?php echo $row['add1']; ?>">
                          <input type="text" class="form-control" name="add2" value="<?php echo $row['add2']; ?>">
                          <input type="text" class="form-control" name="add3" value="<?php echo $row['add3']; ?>">
						</div>
					  </div>
					  <div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
						  <button type="submit" name="registerClick" id="registerClick" class="btn btn-primary">Submit</button>
						</div>
					  </div>
					</form>
				</div>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>