<?php
    session_start();
    include '../koneksi.php';
?>
<?php 
    if($_SESSION['level']==""){
    header("location: ../admin/login-page.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Desain 2</title>
</head>
<body>
<div class="text-right">
    <a href="../admin/logout.php" class="btn btn-danger">Logout</a>
</div>
<div class="">
<h1>Desain 2</h1>
<p>Diliat-liat dulu qaqa contoh slidenya...</p>
<div class="card mx-auto">
    <div class="card-body">
    <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="../assets/img/2-1.gif" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/2-2.gif" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/2-3.gif" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/2-4.gif" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div><br>
    </div>
    <form action="../verifikasi.php" method="GET">
        <input type="hidden" name="id_pesanan" value="2">
        <div class="text-center">
        <button class="btn btn-success btn-sm" type="submit"><strong>SAYA MAU PILIH DESAIN INI</strong></button>
        </div>
    </form><br>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>