<?php 
include 'koneksi.php';
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
}


$id = $_POST['id'];
$kode_pembayaran = $_POST['kode_pembayaran'];
$rand = rand();
$ekstensi =  array('jpg','jpeg','png','JPEG','JPG','pdf');
$filename = $_FILES['dokumen']['name'];
$ukuran = $_FILES['dokumen']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = 'v-'.$kode_pembayaran.'_'.$rand.'_'.$filename;
		move_uploaded_file($_FILES['dokumen']['tmp_name'], 'verifikasi-pembayaran/'.'v-'.$kode_pembayaran.'_'.$rand.'_'.$filename);
        $query = mysqli_query($koneksi, "UPDATE pesanan SET file_verifikasi = '$xx', status = 'Tunggu mimin cek dulu ya...' WHERE id = '$id'");
        header ('location: admin/client.php');
	}else{
		header("location:index.php?alert=gagak_ukuran");
	}
}

?>