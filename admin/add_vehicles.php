<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}


		function sureToEdit(id){
			if(confirm("Are you sure you want to edit this car?")){
				window.location.href ='edit_car.php?id='+id;
			}
		}
		function search(){
			var carname = prompt("Please enter car name");
			window.location.href ='search.php?carname='+carname;
		}

	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Our Vehicles</h2>
						
											</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Vehicle Type</th>

								<th>Car Name</th>
								<th>Hire Price</th>
								<th> Capacity</th>
								<th width="110" class="ac">Content </th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								<td><a href="#"><?php echo $row['capacity'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a><a href="javascript:sureToEdit(<?php echo $row['car_id'];?>)" class="ico edit">Edit</a>



									<!--<a href="javascript:sureToEdit(<?php echo $row['car_id'];?>)" class="ico edit">Edit</a>--></td>
							</tr>
							<?php
								}
							?>
						</table>
						
					
						
					

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				<a href="javascript:search()" class="ico edit">Search</a>
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="add_cars.php" class="add-button"><span>Add new Vehicles</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->

<!-- End Footer -->
	
</body>
</html>