<?php 
include '../koneksi.php';
include 'include/head.php';
?>
    <title>Login</title>
</head>
<body>
    <h1 class="text-center">Silahkan Login</h1>
    <div class="card mx-auto" style="width: 30rem;">
    <div class="card-body">
    <form action="login.php" method="POST">
    <p>Username</p>
    <input class="form-control" type="text" name="username" placeholder="Username" required><br>
    <p>Password</p>
    <input class="form-control" type="password" name="password" placeholder="Password" required><br>
    <div class="text-right">
    <button type="submit" class="btn btn-success">Login</button><br><br>
    </div>
    </form>
    <p>Belum punya akun? <a href="signup-page.php">Daftar Sekarang</a></p>
    </div>
    </div>
</body>
</html>