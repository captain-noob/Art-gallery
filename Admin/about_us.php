<!DOCTYPE html>


<?php

		$link=mysqli_connect("localhost","root","","WT_LAB");
		if(mysqli_connect_error())
		{
			echo "Connection error".mysqli_connect_error();
			exit;
		}
		$msg="";
		if(isset($_POST['about_desc']))
		{
			$newdesc=trim($_POST['about_desc']);
			$query="update pages set p_desc='".$newdesc."' where p_title='about'";
			$result=mysqli_query($link,$query);
			if(mysqli_error($link))
			{
				echo "sorry not updated.".mysqli_error($link);
				exit;
			}
			else
			{
				$msg='Update Successfully..';
			}
			
		}
		
		$query="select * from pages where p_title='about'";
		$result=mysqli_query($link,$query);
		if(mysqli_error($link))
		{
			echo "can not fetch page.".mysqli_error($link);
			exit;
		}
		$row=mysqli_fetch_assoc($result);
		$desc=$row['p_desc'];
		
		mysqli_close($link);

		
?>



<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Home</title>
		<link href="../images/icon.png" rel="icon">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="style/style.css" rel="stylesheet">
		<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<form method="post">
				<div class="userInput">About us Content</div>
				<div><textarea name="about_desc"><?php echo $desc; ?></textarea>
				<p style="color:green"><?php echo $msg; ?></p>
				</div>
				<input type="submit" name="update" value="Update">
				<input type="reset" name="reset" value="Cancel">
			</form>
		</div>
	</body>
</html>