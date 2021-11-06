<?php
	include '../includes/config.php';
	$cname = $_REQUEST['carname'];
		//$query = "DELETE FROM client WHERE client_id = '$id'";
		$query="SELECT * FROM cars where car_name= '$cname' ";
	$result = $conn->query($query);
	
if($result->num_rows > 0){
	
		echo "<script type = \"text/javascript\">
					alert(\"Car  found\");
					window.location = (\"add_vehicles.php\")
				</script>";
	}
	else {
		echo "<script type = \"text/javascript\">
					alert(\"Car  not found\");
					window.location = (\"add_vehicles.php\")
				</script>";
  
}
?>