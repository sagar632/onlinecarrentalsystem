<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Booking Status</h2>

	<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT client.status, cars.car_name FROM client JOIN cars on client.car_id=cars.car_id WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Booking Status For: <?php echo $rws['car_name'];?></span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
						<hr><br>
				</li>

			<?php
				}
			?>
			</ul>





		
		</div>
	</section>	<!--  end listing section  -->

	
</body>
</html>