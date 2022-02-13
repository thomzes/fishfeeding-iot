<?php
session_start();

if( !isset($_SESSION["signin"]) ) {
    header("Location: signin.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="shortcut icon" href="img/pellets.png">

    <title>Service || FishFeeding</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
      
      $(document).ready( function() {

        setInterval( function() {
          $('#ceksuhu').load("ceksuhu.php");
          $('#ultrasonic').load("ultrasonic.php");
        }, 1000 );


      } );
    </script>

  </head>
  <body style="background-image: url(img/template-web.png); background-position: center; background-size: cover; margin-top: 150px;">

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light text-uppercase fixed-top">
  <div class="container">
        <a class="navbar-brand" href="index.php">FISH FEEDING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">BACK</a>
                    </li>
                </ul>
            </div>
  </div>
</nav>
<!-- Close Navbar -->
    
    <div class="container" style="text-align: center; margin-top: 100px;">
      <h2 style="color: #fff;">Monitoring FishFeeding</h2>
      <div style="display: flex; justify-content: center;">
        <!-- Menampilkan nilai suhu -->
        <div class="card text-center" style="width: 33.33%;">
          <div class="card-header" style="font-size: 25px; font-weight: bold; background-color: #65AEDB;" >
            Water Temperature
          </div>
          <div class="card-body">
            <h1><span id="ceksuhu">0</span></h1>
          </div>
        </div>
        <!-- Akhir dari menampilkan nilai suhu -->

        <!-- Menampilkan nilai sensor ultrasonic -->
        <div class="card text-center" style="width: 33.33%;">
          <div class="card-header" style="font-size: 25px; font-weight: bold; background-color: #B772ED;" >
            Ultrasonic Sensor
          </div>
          <div class="card-body">
            <h1><span id="ultrasonic">0</span></h1>
          </div>
        </div>
        <!-- AKhir dari menampilkan sensor ultrasonic-->
      </div>
   </div>


    <!-- Bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>