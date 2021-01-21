<?php
    session_start();
    include 'koneksi.php';
?>
<?php 
    if($_SESSION['level']==""){
    header("location: admin/login-page.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
    function addZero(i) {
    if (i < 100 && i >= 10) {
        i = "0" + i;
    }else{
        if(i < 10){
        i = "00" + i;
        }
    }
    return i;
    }
    function nilai(){
    var nilai = "30," + addZero(Math.floor(Math.random() * 1000));
    document.getElementById("value").value = nilai
    }
    </script>
</head>
<body onload="nilai()">
<div class="text-right">
    <a href="admin/logout.php" class="btn btn-danger">Logout</a>
</div>
<h1 class="text-center">Silahkan Upload File Skripsi Kamu yang Mau Kita Buatin PPT</h1>
<div class="card mx-auto" style="width: 30rem;">
    <div class="card-body">
    <form action="pembayaran.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_pesenan" value="<?php echo $_GET['id_pesanan'] ?>">
    <input type="hidden" name="kode_pembayaran" id="value">
    <div class="form-group">
    <label for=""><strong>Upload File Skripsi Kamu</strong></label><br>
    <input class="form-group" type="file" name="dokumen" required><br>
    <label for="">(Format file harus .doc atau .docx)</label>
    </div>
    <div class="text-right">
    <button type="submit" class="btn btn-info btn-sm">Lanjut ke Pembayaran</button>
    </div>
    </form>
    </div>
    </div>
</body>
</html>