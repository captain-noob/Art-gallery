<!DOCTYPE html>
<?php session_start();
		
		include('conn.php');
		include('../functions.php');
		if(!($_SESSION['id']))
		{
			header('location:index.php');
		}
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}
		
	
?>


<html>
	  <head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Art Gallery | Admin</title>
			<link href="../images/icon.png" rel="icon">
			<link href="../css/bootstrap.min.css" rel="stylesheet">
			<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
			<link href="style.css" rel="stylesheet">
	  </head>
	  <body>
	  <script src="../js/jquery.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/bootstrap.min.js"></script>

		<div class="container-fluid">
			<div class="row header">
				<div class="col-md-9"><h3>Art Gallery</h3></div>
				<div class="col-md-3">
					<ul class="user-nav">
						<li class="dropdown user-icon">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<span>Hi <?php echo $_SESSION['uname']; ?> </span> <span class="glyphicon glyphicon-user"></span>  <span class="glyphicon glyphicon-triangle-bottom"></span></a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="pro.php"><span class=""></span> User Profile</a></li>
			
								<li class="divider"></li>
								<li class="logout-li"><form method="post"><span class="glyphicon glyphicon-log-out"></span><button type="submit" name="logout" class="btn btn-default logout"> Logout</button></form></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
            <div class="container">
                <div>
                    <a href="adminHome.php"><button class="btn btn-link">Home</button></a>
                    <a href="appreq.php"><button class="btn btn-link">For Approving</button></a>
                    <a href="purchased.php"><button class="btn btn-link">Purchased</button></a>
                    <a href="feedback.php"><button class="btn btn-link">feedback</button></a>
                </div>
            </div>
		<!-- home -->