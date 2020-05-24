<?php session_start();
	$page="index";
  $title="Home";
  include_once('Admin/conn.php');

  require_once('header.php');
      $select="SELECT * FROM `uploads` where approved='1' ORDER BY `uploads`.`id` DESC ";
      $re=mysqli_query($link,$select);
      
  
    

?>		
		<div class="container-fluid">
		  <div class="row slider">
			</div>
		  </div>
		
		  <div class="row home_info">
			<div class="col-md-9 recent_product">
                <div class="panel panel-default">
				    <div class="panel-heading">Recent Products</div>
				        <div class="panel-body">
                            <!-- <div class="container recent_product_container">
                              <div class="row recent_img"> -->
                                <?php
                                 $x=0;
                                  while ($x<=1) {

                                    $rw=mysqli_fetch_assoc($re);
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
                                    $x++;
                                  }   
                                  
                                
                                
                                ?>
                              
                        </div>
                </div>
			</div>
			
		  </div>
