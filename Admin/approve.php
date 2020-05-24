<?php
    if($_GET){
        include('conn.php');
        $id=$_GET['verify_id'];
        $query="UPDATE `uploads` SET `approved` = '1' WHERE `uploads`.`id` =  $id ";
        $result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
        if($result){
            header('location:appreq.php?success=true');
        }else{
            header('location:appreq.php?success=false');
        }
    }
    else{
        header('location:appreq.php');
    }
?>