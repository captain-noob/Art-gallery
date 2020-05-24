<?php
  include('conn.php');
    if($_GET['del_id']){
        $xxxa=$_GET['del_id'];
        $ss="DELETE FROM `feedback` WHERE `feedback`.`id` = $xxxa";
        $resu=mysqli_query($link,$ss) or die("Error fetching data.".mysqli_error($link));
  
      if($resu){
          header('location:feedback.php?delete=true');
      }else{
          header('location:feedback.php?delete=false');
      }
    }

?>