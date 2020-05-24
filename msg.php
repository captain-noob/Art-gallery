<?php session_start();
$page="";
include('header.php');
include('Admin/conn.php');
$id=$_SESSION['id'];
$sqq="SELECT * FROM `purchase`WHERE`userid`=$id ORDER BY `purchase`.`id` DESC";
$result=mysqli_query($link,$sqq);
?>
<div class="container-fluid">
		  <div class="row slider">
			</div>
		  </div>
		
		  <div class="row home_info">
			<div class="col-md-9 recent_product">
                <div class="panel panel-default">
				    <div class="panel-heading">Notification</div>
				        <div class="panel-body">
                        <?php
                            while($rr=mysqli_fetch_assoc($result)){
                                $approve=$rr['confirmed'];
                                if($approve==1){
                                    echo('<div style="margin-top:4px;background:lightgrey;height:68px;">
                                    <span class="glyphicon glyphicon-bell" style="float:left;padding-right:12px;padding-top:2px;"></span><p style="float:left;" style="background:light-grey;">Admin approve to sent the orderd product, it will shipped<br>to your address<br>pay cash on delevary time</p>
                                </div>');
                                }elseif($approve==2){
                                    echo('<div style="margin-top:4px;background:lightgrey;height:62px;">
                                    <span class="glyphicon glyphicon-bell" style="float:left;padding-right:12px;padding-top:2px;"></span><p style="float:left;" style="background:light-grey;">Admin rejected the orderd product, <br>check your address<br>or contact  the admin</p>
                                </div>');
                                }else{
                                    echo('<div style="margin-top:4px;background:lightgrey;height:62px;">
                                    <span class="glyphicon glyphicon-bell" style="float:left;padding-right:12px;padding-top:2px;"></span><p style="float:left;" style="background:light-grey;">The ordered product sent for reviewing<br>in case if exceed 24hrs  contact the  admin</p>
                                </div>');
                                }
                            }
                        ?>
                        

                        <div>
                <div>
            <div>
         <div>