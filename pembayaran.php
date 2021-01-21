<?php 
include 'koneksi.php';
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
}

$id_pesanan = $_POST['id_pesenan'];
$kode_pembayaran = $_POST['kode_pembayaran'];
$user_id = $_SESSION['id'];
$user_kontak = $_SESSION['kontak'];
$rand = rand();
$ekstensi =  array('doc','docx');
$filename = $_FILES['dokumen']['name'];
$ukuran = $_FILES['dokumen']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = 'kp-'.$kode_pembayaran.'_'.$rand.'_'.$filename;
		move_uploaded_file($_FILES['dokumen']['tmp_name'], 'dokumen-client/'.'kp-'.$kode_pembayaran.'_'.$rand.'_'.$filename);
        $query = mysqli_query($koneksi,"INSERT INTO pesanan (id_pesanan, kode_pembayaran, file, user_id, user_kontak) VALUES ('$id_pesanan', '$kode_pembayaran', '$xx', '$user_id', '$user_kontak')");
		header("location:pembayaran-page.php");
	}else{
		header("location:index.php?alert=gagak_ukuran");
	}
}

?>