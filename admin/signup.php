<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$kontak = $_POST['kontak'];
$password = $_POST['password'];
$password = md5($password);
$cPassword = $_POST['cPassword'];
$cPassword = md5($cPassword);

if($password === $cPassword){
    $query = mysqli_query($koneksi,"INSERT INTO user (nama, username, password, kontak, level) VALUES ('$nama', '$username', '$password', '$kontak', 'client')");
    echo "<script> alert(`Selamat datang $username`); window.location='login-page.php';</script>";
}else{
    echo "<script> alert(`Silahkan konfirmasi password dengan benar`);window.location='signup-page.php';</script>";
};

?>