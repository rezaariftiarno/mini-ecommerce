<?php 
session_start();
include 'koneksi.php';

$id = $_GET['id'];

if($_SESSION['level'] == 'administrator'){

$query  = "UPDATE pesanan SET status = 'Pembayaran kamu sukses. Sekarang mohon tunggu paling lama 1x24 jam ya... File bakal mimin kirim lewat Whatsapp'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                     " - ".mysqli_error($koneksi));
} else {
//tampil alert dan akan redirect ke halaman index.php
//silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil diubah.');window.location='admin/admin.php';</script>";
}}else{
  echo "<script>alert('Anda bukan Admin');window.location='admin/client.php';</script>";
}
?>