<?php 
session_start();

if( !isset($_SESSION["signin"]) ) {
    header("Location: signin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<!-- Icon -->
    <link rel="shortcut icon" href="img/pellets.png">

	<title>Automatic Fish Feeding</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url(img/template-web.png); background-position: center; background-size: cover;">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light text-uppercase fixed-top">
  <div class="container">
        <a class="navbar-brand" href="index.php">FISH FEEDING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      		<div class="navbar-nav">
				<a class="nav-link" href="service.php">Service</a>
			</div>
		</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
  </div>
</nav>
<!-- Close Navbar -->

<!-- Container -->
<div class="container">
	<h1 class="fs-1" style="margin-top: 220px; margin-left: 100px; color: #c29c5e">Welcome To</h1>
	<h1 class="fs-1" style="margin-top: 170; margin-left: 150px; color: #c29c5e">FishFeeding Project</h1>
</div>
<!-- Close Container -->

<svg style="margin-top:10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,154.7C384,160,480,160,576,160C672,160,768,160,864,176C960,192,1056,224,1152,218.7C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	

</body>
</html>