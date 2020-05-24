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
								
								<div class="panel-body">


                                <div>
    <div>
        <table class="table" style="border:2px solid black;">
        <thead>
        <tr >
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
              
        </tr>
        </thead>
        <tbody>
									<!-- Slider  -->
									<?php
										$query1="SELECT * FROM `feedback` ORDER BY id DESC";
										$result1=mysqli_query($link,$query1) or die("Error fetching data.".mysqli_error($link));
										
										
									?>
									
									<div class="panel panel-default slider-content">
										<div class="panel-heading">
											<h4>Feedback</h4>
										</div>
										<div class="panel-body">
										<?php
													while($row = mysqli_fetch_array($result1)) { 
                                                        $name=$row['name'];
                                                        $email=$row['email'];
                                                        $comment=$row['comment'];
                                                        $id=$row['id'];
                                                        	echo('<tr>
                                                            <td>'.$name.'</td>
                                                            <td>'.$email.'</td>
                                                            <td>'.$comment.'</td>
                                                            <td><a href="maj.php?del_id='.$id.'"><button class="btn btn-danger">Delete</button></a></td>
                                                         </tr>');
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






