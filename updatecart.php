<?php session_start();

include('Admin/conn.php');


if($_SESSION){
    

   if($_GET['img_id']){
        $iid=$_GET['img_id'];
        $uid=$_GET['cus_id'];
        $count=$_GET['count'];
        $tot=$_GET['total'];
        $cin=$_GET['carid'];
        $sql="INSERT INTO `purchase` (`id`, `img_id`, `userid`, `count`, `total`, `confirmed`) VALUES (NULL, '$iid', '$uid', '$count', '$tot', '0')";
        $da=mysqli_query($link,$sql);
        if($da){

            $sqls="DELETE FROM `cart` WHERE `cart`.`id` = $cin";
            $das=mysqli_query($link,$sqls);

            if($das){
                $_SESSION['update']="true";
                header("location:cart.php?update=true");
            }else{
                $_SESSION['update']="false";
                header("location:cart.php?update=false");
            }

            
        }else{
            $_SESSION['update']="false";

            header("location:cart.php?update=false");
        }
        
   }elseif($_GET['clear_id']){
        $cin=$_GET['clear_id'];
        $sql="DELETE FROM `cart` WHERE `cart`.`id` = $cin";
        $da=mysqli_query($link,$sql);
        if($da){
            $_SESSION['update']=="remove";
            header("location:cart.php?remove=true");
        }else{
            $_SESSION['update']=="xxx";
            header("location:cart.php?remove=false");
        }
   }else{
    header("location:cart.php");
   }



}else{
    header('location:login.php');
}
?>