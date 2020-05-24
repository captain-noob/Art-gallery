<?php
include('header.php');
$name=$_SESSION['name'];
?>

<div class="col-md-10">
					<div class="pages center-container">
						<div  class="switchgroup dashboard">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Upload image</h3>
								</div>
								<div class="panel-body">
								<form action="#" method="post"  enctype="multipart/form-data" >
									<center><h3>Upload Art</h3></center>
									<label>Upload image</label>
									<input type="file"  class="form-control" name="uploadxxx" required>
									<br>
									<label>Name</label>
									<input type="text"  class="form-control"  name="namexxx" required>
									<br>
									<label>Artist</label>
									<input type="text"  class="form-control" name="artistxxx" value="<?php echo $name;?>" readonly>
									<br>
									<label>Rate</label>
									<input type="number"  class="form-control" name="ratexxx" required>
									<br>
									<input type="submit" name="uploaddd" class="btn btn-success">
									</form>

									
									
								</div>
							</div>
						</div>