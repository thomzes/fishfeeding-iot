<?php  
	// create connection database
	$conn = mysqli_connect("localhost", "root", "", "fishfeeding");

	$sql = mysqli_query($conn, "SELECT * FROM sensor ORDER BY id DESC");

	$data = mysqli_fetch_array($sql);
	$suhu = $data['suhu_air'];

	if($suhu == "") $suhu = 0;

	echo $suhu;

?>