<?php
include('header.php');
?>
    <style>
    table, th, td {
  border: 1px solid black;
}
    </style>	
			<div  class="switchgroup dashboard">
							<div class="panel panel-default">
								
							
    <div>
        <table class="table" style="border:2px solid black;">
        <thead>
        <tr >
            <th>contribution</th>
            <th>name</th>
            <th>count</th>
              
        </tr>
        </thead>
        <tbody>
									<!-- Slider  -->
									<?php
										$query1="SELECT * FROM `purchase`   ORDER BY `purchase`.`id` DESC";
										$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
										
									?>
									
									<div class="panel panel-default slider-content">
										
										<div class="panel-body">
										<?php
													while($row = mysqli_fetch_array($result1)) { 
                                                        $img_id=$row['img_id'];
                                                        $count=$row['count'];
                                                        $usid=$row['userid'];
                                                        $quer="SELECT * FROM `uploads` WHERE id =$img_id ";
                                                        $resul=mysqli_query($link,$quer) or die("Error fetching data.".mysqli_error($link));
                                                        while($ro = mysqli_fetch_array($resul)) {
                                                            $artist=$ro['artist_id'];
                                                            if($id==$artist){
                                                                $que="SELECT * FROM `user_reg` WHERE id =$usid";
                                                                $resu=mysqli_query($link,$que) or die("Error fetching data.".mysqli_error($link));
                                                                $roz = mysqli_fetch_array($resu);
                                                                $fname=$roz['fname'];
                                                                $lname=$roz['lname'];
                                                                $image=$ro['image'];
                                                                echo('<tr>
                                                            <td><img src="../'.$image.'" style="width=120px;height:100px;"></td>
                                                            <td>'.$fname.' '.$lname.'</td>
                                                            <td>'.$count.'</td>
                                                         </tr>');
                                                            }

                                                        }
													}
												?>												
										
            
        </tbody>
        </table>
    </div>
</div>


                                        








</div>
</div>



		
</body>
</html>






