<?php
include('header.php');
?>
		
			<div  class="switchgroup dashboard">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Request Approve</h3>
								</div>
								<div class="panel-body">
									<!-- Slider  -->
									<?php
										$id=$_GET['id'];
										
										$query1="select * from  uploads where artist_id=$id and approved=2";
										$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
										
										
									?>
									
									<div class="panel panel-default slider-content">
										<div class="panel-heading">
											<h4>Rejected Content</h4>
										</div>
										<div class="panel-body">
										<?php
													while($row = mysqli_fetch_array($result1)) { 
														$image=$row['image'];
														$name=$row['name'];
														$artist=$row['artist'];
														$rate=$row['rate'];
														$id=$row['id'];
                                                        echo('<div style="float:left;padding:2%;">
                                                        <div>
                                                        <img src="../'.$image.'" style="width:300px;height:300px;possion:fixed;">
                                                        </div>
                                                        <div style="float:right;">
                                                        <a href="request.php?req_id='.$id.'" style="float:right;padding:1%; "><button class="btn btn-success">REQUEST</button></a>
                                                        <a href="delete.php?del_id='.$id.'" style="float:right;padding:1%; "><button class="btn btn-danger">DELETE</button></a>
                                                        </div>
                                                        <div style="float:left;">
                                                            <h5><span style="font-weight:bolder;">Art Name :<span>'.$name.'</h5>
                                                            <p ><span style="font-weight:bolder;">Artist :<span>'.$artist.'</p>
                                                            <p style="float:left;">price : ₹'.$rate.'</p>
                                                        </div>
                                                    </div>	');
													}
												?>												
										</div>
									</div>



		
	  </body>
</html>