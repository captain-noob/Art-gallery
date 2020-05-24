<?php session_start();
include('header.php');
include('Admin/conn.php');
if(isset($_POST['login'])){
	$email=$_POST['user'];
	$pass=$_POST['pass'];
	$sql="SELECT * FROM `user_reg` where email='$email' and password ='$pass'";
	$a=mysqli_query($link,$sql);
	$aa=mysqli_num_rows($a);
	$row=mysqli_fetch_assoc($a);
	if($aa==1){
		$_SESSION['id']=$row['id'];
		header('Location:index.php?id='.$row['id']);
		
	}else{
		echo('login failed');
	}
}
?>


<div class="container" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:100px;">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  
		  <div class="modal-body">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="panel panel-default">
			<div class="panel-heading" style="text-align:center">Log In</div>
				<div class="panel-body">
					 <form class="form-horizontal" role="form" action="login.php" method="post">
					  <div class="form-group">
						<label class="control-label col-sm-3">Email</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="user" id="username" placeholder="Enter Email">
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-3">Password</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="pass" placeholder="Enter Password">
						</div>
					  </div>
					  <div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
						  <button type="submit" class="btn btn-primary" name="login">Login</button>
						  <button type="submit" class="btn btn-primary">Cancel</button>
						</div>
					  </div>
					  <div class="form-group">
						<label class="control-label col-sm-12"><a href="#">Forgot Password</a></label>
						</div>
					  
					 </form>
				</div>
			</div>
		</div>
		  </div>
		</div>
	  </div>
	</div>
