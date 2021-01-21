<?php 
include 'koneksi.php';
session_start();
if($_SESSION['level']==""){
    header("location: admin/login-page.php");
}
  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM pesanan WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verif Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="card mx-auto" style="width: 30rem;">
    <div class="card-body">
    <h2 class="text-center">Silakan Upload Bukti Bayar Kamu di Sini</h2><br>
    <form action="verifikasi-pembayaran.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <input type="hidden" name="kode_pembayaran" value="<?php echo $data['kode_pembayaran'] ?>">
        <input class="form-control" type="file" name="dokumen"><br>
        <p>*Ukuran file maksimal 1 Mb</p>
        <div class="text-center">
            <button class="btn btn-primary btn-sm" type="submit">Upload</button>
        </div><br>
        <a href="admin/client.php">Kembali ke Halaman Depan</a>
    </form>
    </div>
    </div>
</body>
</html>