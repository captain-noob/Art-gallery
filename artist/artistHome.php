<?php
include('header.php');
?>
		
			<div  class="switchgroup dashboard">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Home</h3>
								</div>
								<div class="panel-body">
									<!-- Slider  -->
									<?php
										$id=$_GET['id'];
										
										$query1="select * from  uploads where artist_id=$id and approved=1";
										$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
										
										
									?>
									
									<div class="panel panel-default slider-content">
										<div class="panel-heading">
											<h4>Approved Content</h4>
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
															<h4 style="float:left;">'.$name.'</h4>
															<a href="delete.php?del_id='.$id.'" style="float:right;padding:1%; "><button class="btn btn-primary">DELETE</button></a>
															<p style="float:left;padding:3%;">'.$artist.'</p>
															<br><br>
															<p style="float:left;">price : ₹'.$rate.'</p>
														</div>	');
													}
												?>												
										</div>
									</div>


	  </body>
</html>