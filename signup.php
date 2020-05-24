<?php  session_start();
include('header.php');
	require_once('Admin/conn.php');
	

	$form_msg="";
	if(isset($_POST['registerClick']))
	{
		$fnm=trim($_POST['fnm']);
		$lnm=trim($_POST['lnm']);
		$gender=trim($_POST['gender']);
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
			$query="insert into user_reg (fname,lname,gender,contact,email,password,add1,add2,add3) value('$fnm','$lnm','$gender','$contact','$email','$pwd','$add1','$add2','$add3')";
				mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
				header("location:login.php?signup=success&&_try_login");
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
			<div class="panel-heading" style="text-align:center">New Registration</div>
				<div class="panel-body">
					 <form class="form-horizontal" role="form" id="register" method="post" action="signup.php">
					  <div class="form-group">
						<label class="control-label col-sm-3" for="FirstName">First Name</label>
						<div class="col-sm-8">
						  <input type="text" class="form-control" name="fnm" placeholder="Enter First Name">
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
						  <input type="text" class="form-control" name="lnm" placeholder="Enter Last Name">
						</div>
						<div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  
					  <div class="form-group">
						<label class="control-label col-sm-3" for="LastName">Gender</label>
						<div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
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
						  <input type="number" class="form-control" name="contact" placeholder="Enter Contact No">
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
						  <input type="email" class="form-control" name="email" placeholder="Enter email">
						</div>
					  <div class="col-sm-1">
						  <span class="val_err">*</span>
						</div>
					  </div>
					  <div class="form-group">
						<label class="col-sm-offset-3 col-sm-9 pass_err"><?php echo $form_msg; ?></label>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Set Password</label>
						<div class="col-sm-8"> 
						  <input type="password" class="form-control" name="pwd" placeholder="Enter password">
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
						  <input type="password" class="form-control" name="confirmpwd" placeholder="Enter confirm password">
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
						<label class="col-sm-offset-3 col-sm-9 pass_err" style="display:block">Products shipped to this address</label>
						<label class="control-label col-sm-3" for="address">Address</label>
						<div class="col-sm-8"> 
						  <input type="text" class="form-control" name="add1" placeholder="Address 1">
                          <input type="text" class="form-control" name="add2" placeholder="State">
                          <input type="text" class="form-control" name="add3" placeholder="country,pin">
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