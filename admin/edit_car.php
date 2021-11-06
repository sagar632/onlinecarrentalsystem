<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Vehicles
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Update Vehicle</h2>
					</div>

					<?php



								include '../includes/config.php';
								$id = $_REQUEST['id'];
								$query = "SELECT *  FROM cars WHERE car_id = '$id'";
								$result = $conn->query($query);
								$row = $result->fetch_assoc();
								/*$select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status 
										FROM client JOIN cars ON client.car_id=cars.car_id";
								$result = $conn->query($select);
									$row = $result->fetch_assoc();
									echo $row['fname'];*/
								?>
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Vehicle Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_name" required  text
									value="<?php echo $row['car_name']?>"/>
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle Make <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_type" required  value="<?php echo $row['car_type']?>"/>
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle Hire Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required value="<?php echo $row['hire_cost']?>"/>
								</p>
								
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Vehicle Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" required value="<?php echo $row['capacity']?>" />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								
								$id = $_REQUEST['id'];
								
								
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "Update cars SET car_name='$car_name' ,car_type='$car_type' ,hire_cost='$hire_cost',capacity='$capacity' WHERE  car_id='$id'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Updated\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							
						?>
				</div>

			</div>
			
		
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>


	
</body>
</html>	