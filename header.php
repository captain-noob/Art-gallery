<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Gallery |</title>
    <link href="images/icon.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"/>
	
  </head>
  <body>
  
	  
	

		
      
     <nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Art Gallery</a>
			</div>
			<div>
				<ul class="nav navbar-nav navbar-right signup">
					<?php
					if($_SESSION){
						$_SESSION['page']=$page;
					 $em=$_SESSION['id']; 
						echo('<li><a  href="msg.php?id='.$em.'" id="signlog" style="padding-top:11.5px"><span class="glyphicon glyphicon-bell"></span> Notification</a>
						<li><a  href="profile.php?id='.$em.'" id="signlog" style="padding-top:11.5px"><span class="glyphicon glyphicon-user"></span> Profile</a>
						<li><a href="logout.php" style="padding:0px;margin:0px;"><button id="signlog"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a>
						<li>');
					}else{
						
						echo('<li><a href="signup.php" id="signlog"  style="padding-top:11.5px"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
						<li><a href="login.php" id="signlog""><span class="glyphicon glyphicon-log-in"></span> Login</a>
						<li>
						<li><a href="artist/index.php" id="signlog""><span class="glyphicon glyphicon-log-in"></span>Artist Login</a>
						<li>');
					}
					?>
					 <form class="navbar-form navbar-left">
					  <div class="input-group">
						<input type="text" class="form-control" placeholder="Search for product">
						<div class="input-group-btn">
						  <button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						  </button>
						</div>
					  </div>
					</form>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php 
			if($_SESSION)
			{$em=$_SESSION['id']; 
				echo('
			  <ul class="nav navbar-nav navbar-right top_menu">
				
				<li>
				<a href="index.php?id='.$em.'">Home <span class="sr-only">(current)</span></a>
				
				</li>
				<li><a href="about_us.php?id='.$em.'">about us <span class="sr-only"></span></a></li>
				<li class="dropdown">
				 <a href="arts.php?id='.$em.'"><a"  role="button" aria-haspopup="true" aria-expanded="false">
				 Arts <span class="caret"></span></a>
				  
				</li>
				<li><a href="contact_us.php?id='.$em.'">Reach us</a></li>
				<li><a href="cart.php?id='.$em.'">Cart </a></li>
				</ul>'); }
				else{
					echo('
			  <ul class="nav navbar-nav navbar-right top_menu">
				
				<li>
				<a href="index.php">Home <span class="sr-only">(current)</span></a>
				
				</li>
				<li><a href="about_us.php">about us <span class="sr-only"></span></a></li>
				<li class="dropdown">
				 <a href="arts.php"><a"  role="button" aria-haspopup="true" aria-expanded="false">
				 Arts <span class="caret"></span></a>
				  
				</li>
				<li><a href="contact_us.php">Reach us</a></li>
				<li><a href="cart.php">Cart </a></li>
				</ul>');
				}
				?>
			</div>
		  </div>
		</nav>