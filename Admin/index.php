<!DOCTYPE html>
<?php

		require_once('conn.php');
		$msg="";
		
		if(isset($_POST['sub']))
		{
			echo "dfhjsdfsd";
			$unm=trim($_POST['uname']);
			$pass=trim($_POST['password']);
			$query="SELECT * FROM `admin` where username='$unm' and password ='$pass'";
			$result=mysqli_query($link,$query);
			$row=mysqli_fetch_assoc($result);
			$dbunm=$row['username'];
			$dbpass=$row['password'];
			if($result){
					session_start();
					$_SESSION['id']=$row['id'];
					$_SESSION['uname']=$row['username'];
					header('Location:adminHome.php');
			}else{
				$msg="Username or pass error";
			}
			
					
				
				
			
			
		}

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
		<link href="../images/icon.png" rel="icon">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>

	<body>
	
		
		<nav class="navbar navbar-inverse top-menu">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Art Gallery</a>
			</div>
			<div>
			  <ul class="nav navbar-nav">
				<li><a href="#">About</a></li>
			  </ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#" style="color:#fff"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container">
			<div class="panel panel-primary admin-login">
				<div class="panel-heading">
					<h3>Login</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal"  method="post" action="index.php">
					<div class="bg-danger error_msg"><?php echo $msg; ?></div>
					  <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-envelope" style="top:0"></span><input type="email" name="uname" class="form-control"placeholder="Enter email">
					  </div>
					  <div class="form-group input-group">
							<span class="input-group-addon glyphicon glyphicon-lock" style="top:0"></span><input type="password" name="password" class="form-control" placeholder="Enter password">
					  </div>
					  
					  <div class="form-group"> 
						  <button type="submit" name="sub" class="btn btn-primary btn-block">Login</button>
					  </div>
					</form>
				</div>
			</div>
		</div>
		
		
	</body>
</html>




