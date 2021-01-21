<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman
header("location:login-page.php");
?>