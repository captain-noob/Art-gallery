<?php session_start();
	$page="arts";
	$title="Arts";
	require_once('header.php');
	include_once('Admin/conn.php');
	
?>	
	<div class="container-fluid">
		  <div class="row art_inner">
			<div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading"></div>
                  <div class="panel-body">
                    <p class="about_us_info">
										<?php
										$select="SELECT * FROM `uploads` where approved='1' ORDER BY `uploads`.`id` DESC ";
										$re=mysqli_query($link,$select);
										while ($rw=mysqli_fetch_assoc($re)) {
                                    $image=$rw['image'];
                                    $id=$rw['id'];
                                    $artist=$rw['artist'];
                                    $name=$rw['name'];
                                    $rate=$rw['rate'];
                                    
                                    echo('<div style="float:left;padding:1%;">
                                    <div>
                                    <img src="'.$image.'" style="width:300px;height:200px;possion:fixed;">
                                    </div>
                                    <div style="float:right;">
                                    
                                    <a href="uploadtocart.php?item_id='.$id.'" style="float:right;padding:10%; "><button class="btn btn-danger">Add to Cart</button></a>
                                                                  </div>
                                                                  <div style="float:left;">
                                                                      <h5><span style="font-weight:bolder;">Art Name :<span>'.$name.'</h5>
                                                                      <p ><span style="font-weight:bolder;">Artist :<span>'.$artist.'</p>
                                        <p style="float:left;">price : ₹'.$rate.'</p>
                                                                  </div>
                                  </div>	');

                                   
                                  
                                }
                                
                                
                                ?>
                    </p>
                  </div>
                </div>
                </div>
            
		  </div>
