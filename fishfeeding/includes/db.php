<?php

	$dsn = "mysql:host=localhost;dbname=fishfeeding";

	try {
		$pdo = new PDO($dsn, 'root', '');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>