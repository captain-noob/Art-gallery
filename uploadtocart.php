<?php session_start();

include('Admin/conn.php');


if($_SESSION){
    $idz=$_SESSION['id'];
    $page=$_SESSION['page'];
    if($_GET['item_id']){
        $itmid=$_GET['item_id'];

        $qer="SELECT * FROM `uploads` where id='$itmid'";
        $upl=mysqli_query($link,$qer)or die("Error fetching data.".mysqli_error($link));
        $uploads=mysqli_fetch_assoc($upl);
        


        
        $a="SELECT * FROM `cart` WHERE `img_id`='$itmid' AND `userid`='$idz'";
        $b=mysqli_query($link,$a)or die("Error fetching data.".mysqli_error($link));
        $e=mysqli_fetch_assoc($b);
		if($e){
            $t=$uploads['rate'];
            $total=$e['total']+$t;
            $d=$e['id'];
            $e=$e['count']+1;
            $c="UPDATE `cart` SET `count` = '$e',`total`='$total' WHERE `cart`.`id` = '$d'";
            $res=mysqli_query($link,$c) or die("Error fetching data.".mysqli_error($link));
                if($res){
                    header('location:'.$page.'.php?success=true&&id='.$idz);
                }else{
                    header('location:'.$page.'.php?success=false&&id='.$idz);
                }
        }else{
            $total=$uploads['rate'];
            $query="INSERT INTO `cart` (`id`, `img_id`, `userid`,`total`) VALUES (NULL, '$itmid', '$idz','$total')";
            $result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
            if($result){
                 header('location:'.$page.'.php?success=true&&id='.$idz);
             }else{
             header('location:'.$page.'.php?success=false&&id='.$idz);
            }
        }
        
        
    }
    else{
        header('location:'.$page.'.php?id='.$idz);
    }
}else{
    header('location:login.php');
}
?>