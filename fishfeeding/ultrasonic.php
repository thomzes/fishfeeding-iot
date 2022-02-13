<?php  
	// create connection database
	$conn = mysqli_connect("localhost", "root", "", "fishfeeding");

	$sql = mysqli_query($conn, "SELECT * FROM sensor ORDER BY id DESC");

	$data = mysqli_fetch_array($sql);
	$ultrasonic = $data['jarak'];

	if($ultrasonic == "") $ultrasonic = 0;

	echo $ultrasonic;

?>