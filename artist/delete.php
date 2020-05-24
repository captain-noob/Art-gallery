<?php session_start();
    if($_GET){
		$idz=$_SESSION['id'];
        include('conn.php');
        $id=$_GET['del_id'];
        $query="DELETE FROM `uploads` WHERE `uploads`.`id` = $id ";
        $result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
        if($result){
            header('location:artistHome.php?success=true&&id='.$idz);
        }else{
            header('location:artistHome.php?success=false&&id='.$idz);
        }
    }
    else{
        header('location:artistHome.php?id='.$idz);
    }
?>