<?php 
include '../koneksi.php';
include 'include/head.php';
?>
    <title>Sign Up</title>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-5">
    <h1>Sign Up</h1><br>
    <form action="signup.php" method="POST">
        <p>Nama</p>
        <input class="form-control" type="text" name="nama" placeholder="Nama" required><br>
        <p><i>Username</i></p>
        <input class="form-control" type="text" name="username" placeholder="Username" required><br>
        <p>Nomor <i>Whatsapp</i></p>
        <input class="form-control" type="text" name="kontak" placeholder="No. Whatsapp" required><br>
        <p><i>Password</i></p>
        <input class="form-control" type="password" name="password" placeholder="Password" required><br>
        <p>Konfirmasi <i>Password</i> Kamu</p>
        <input class="form-control" type="password" name="cPassword" placeholder="Konfirmasi Password" required><br>
        <button type="submit" class="btn btn-primary btn-sm">Daftar</button><br><br>
    </form>
    <p>Sudah punya akun? <a href="login-page.php">Login</a></p>
    </div>
    <div class="col-7 my-5 py-5">
        <h1 class="text-center"></h1>
    </div>
</div>
</div>
</body>
</html>