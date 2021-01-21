<?php 
include 'koneksi.php';
session_start();
if($_SESSION['level']==""){
    header("location: admin/login-page.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pembayaran</title>
</head>
<body>
<div class="text-right">
    <a href="admin/client.php" class="btn btn-warning">Kembali ke Halaman Utama</a>
    <a href="admin/logout.php" class="btn btn-danger">Logout</a>
</div>
<br>
<br>
<?php   
        $user_id = $_SESSION['id'];
        $query = "SELECT * FROM pesanan WHERE user_id = $user_id ORDER BY id DESC LIMIT 0,1";
        $result = mysqli_query($koneksi, $query);
        while($row = mysqli_fetch_assoc($result))
        {
?>
    <div class="card mx-auto" style="width: 30rem;">
    <div class="card-body">
    <p>Silahkan lakukan pembayaran melalui aplikasi <img class="img-fluid" style="width: 10%;" src="assets/img/ovo.png" alt=""> sesuai dengan harga yang tertera sampai 3 digit angka terakhir.</p>
    <h2 class="text-center">Rp <?php echo $row['kode_pembayaran']; ?></h2><br>
    <p class="text-center">Ke Nomor</p><br>
    <h2 class="text-center">085710215088</h2>
    <p>Setelah melakukan pembayaran silahkan konfirmasi pembayaran melalui halaman depan</p>
    </div>
    </div>
<?php } ?>
</body>
</html>