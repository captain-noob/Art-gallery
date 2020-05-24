<?php
include('conn.php');
    if ($_GET['req_id']){
        $id=$_GET['req_id'];
        $sql="UPDATE `purchase` SET `confirmed` = '1' WHERE `purchase`.`id` = $id";
        $r2=mysqli_query($link,$sql);
        $f2 = mysqli_fetch_array($r2);
        if($f2){
            header('location:purchased.php?success=true');
        }else{
            header('location:purchased.php?success=false');   
        }

    }elseif($_GET['del_id']){
        $id=$_GET['del_id'];
        $sql="UPDATE `purchase` SET `confirmed` = '2' WHERE `purchase`.`id` = $id";
        $r2=mysqli_query($link,$sql);
        $f2 = mysqli_fetch_array($r2);
        if($f2){
            header('location:purchased.php?success=true');
        }else{
            header('location:purchased.php?success=false');   
        }
    }
?>