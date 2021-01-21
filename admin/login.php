<?php 
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_array($login);
	$_SESSION['id'] = $data['id']; 
	$_SESSION['kontak'] = $data['kontak'];

	// cek jika user login sebagai admin
	if($data['level']=="administrator"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "administrator";
		// alihkan ke halaman dashboard admin
		header("location:../admin/admin.php");

	// cek jika user login sebagai client
	}else if($data['level']=="client"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "client";
		// alihkan ke halaman dashboard client
		header("location:../admin/client.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>