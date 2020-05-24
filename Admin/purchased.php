<?php
include('header.php');
?>
		
			<div  class="switchgroup dashboard">
							<div class="panel panel-default">
								
								<div class="panel-body">
									<!-- Slider  -->
									<?php
										$query1="select * from  purchase where confirmed=0";
										$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
										
										
									?>
									
									<div class="panel panel-default slider-content">
										<div class="panel-heading">
											<h4>Approving Purchases</h4>
										</div>
										<div class="panel-body">
										<?php
													while($row = mysqli_fetch_array($result1)) { 
                                                        $id=$row['id'];
														$iid=$row['img_id'];
                                                        $user_id=$row['userid'];
                                                        

                                                                $q1="SELECT * FROM `user_reg` WHERE id =$user_id";
                                                                $r1=mysqli_query($link,$q1);
                                                                $f1 = mysqli_fetch_array($r1);
                                                                
                                                                


                                                                $q2="SELECT * FROM `uploads` WHERE id =$iid";
                                                                $r2=mysqli_query($link,$q2);
                                                                $f2 = mysqli_fetch_array($r2);

                                                                // product detials
                                                                $name=$f2['name'];
                                                                $image=$f2['image'];
                                                                $rate=$f2['rate'];
                                                                $count=$row['count'];
                                                                $total=$row['total'];
                                                                $artist=$f2['artist'];
                                                                
                                                                // shipping detials
                                                                $fname=$f1['fname'];
                                                                $lname=$f1['lname'];
                                                                $ad1=$f1['add1'];
                                                                $ad2=$f1['add2'];
                                                                $ad3=$f1['add3'];



                                                        






															echo('<div style="float:left;padding:.5%;border:2px solid black;;margin:1%">
                                                            <div >
                                                                <div>
                                                                    <img src="../'.$image.'" style="width:300px;height:150px;possion:fixed;">
                                                                </div>
                                                                <div style="float:right;">
                                                                    <a href="aaa.php?req_id='.$id.'" style="float:right;padding:1%; "><button class="btn btn-success">APPROVE</button></a>
                                                                    <a href="aaa.php?del_id='.$id.'" style="float:right;padding:1%; "><button class="btn btn-danger">CANCEL</button></a>
                                                                </div>
                                                                <div style="float:left;">
                                                                    <p><span style="font-weight:bolder;">Art Name :<span>'.$name.'</h5>
                                                                    <p ><span style="font-weight:bolder;">Artist :<span>'.$artist.'</p>
                                                                    <p style="float:left;">price : ₹'.$rate.'</p>
                                                                </div>
                                                                <div style="clear:both;"></div>
                                                            </div>
                                                            <hr>
                                                            <div >
                                                                <h4>Purchase Detials</h4>
                                                                <p >count : '.$count.'</p>
                                                                <p >Total cost : ₹'.$total.'</p>
                                                            </div>
                                                            <hr>
                                                            <div >
                                                                <h4>shipping Detials</h4>
                                                                <p >Name of buyer :'.$fname.' '.$lname.'</p>
                                                                <p >Address :'.$ad1.'</p>
                                                                <p >State : '.$ad1.'</p>
                                                                <p >country and pin: '.$ad1.'</p>
                                                            </div>
                                                        </div>	');
													}
												?>												
										



                                        








</div>
</div>



		
</body>
</html>






