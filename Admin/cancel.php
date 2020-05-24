<?php
    if($_GET){
        include('conn.php');
        $id=$_GET['del_id'];
        $query="UPDATE `uploads` SET `approved` = '2' WHERE `uploads`.`id` = $id ";
        $result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
        if($result){
            header('location:adminHome.php?success=true');
        }else{
            header('location:adminHome.php?success=false');
        }
    }
    else{
        header('location:adminHome.php');
    }
?>