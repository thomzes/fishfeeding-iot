<?php 
	$conn = mysqli_connect("localhost", "root", "", "fishfeeding");

	$suhu = $_GET['suhu'];
	$jarak = $_GET['ultrasonic'];


	mysqli_query($conn, "ALTER TABLE sensor AUTO_INCREMENT=1");
	$simpan = mysqli_query($conn, "INSERT INTO sensor(suhu_air, jarak)VALUES('$suhu', '$jarak')");

	//Memberikan respon jika berhasil tersimpan
	if($simpan)
		echo "Berhasil Terkirim";
	else
		echo "Gagal Terkirim";

 ?>