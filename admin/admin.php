    <title>ADMINISTRATOR</title>

</head>
<body>
    <?php
    session_start();
    include 'include/head.php';
    include '../koneksi.php';
    ?>
    <div class="    text-right">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
    <div class="container">
    <h1 style="text-align: center;"><img class="img-fluid" src="../assets/img/kuproy_logo.png" alt=""></h1>
    <h4 style="text-align: center;">Selamat Nguproy, Min</h4>  

        <table class="table">
        <thead>
            <tr>
            <th>User Id</th>
            <th>Kode Pembayaran</th>
            <th>Download File</th>
            <th>Chat Whatsapp Client</th>
            <th>Verifikasi Bayaran</th>
            <th>Gimana? Oke?</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $id = 0;
        if($_SESSION['level'] == 'administrator'){
        $query = "SELECT * FROM pesanan ORDER BY id ASC";
        $result = mysqli_query($koneksi, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            ++$id
        ?>
        <tr>
            <td>
                <?php echo $row['user_id'] ?>
            </td>
            <td>
                <strong><?php echo $row['kode_pembayaran'] ?></strong>
            </td>
            <td>
                <a class="btn btn-succes" href="../dokumen-client/<?php echo $row['file'] ?>"><?php echo $row['file'] ?></a>
            </td>
            <td>
                <input class="btn btn-success btn-sm" type="submit" onclick="var whatsapp = document.getElementById('nomor<?php echo $id ?>').value; var charWa = whatsapp.charAt(0); var slice = whatsapp.slice(1); var sliceTwo = whatsapp.slice(2);             if(charWa == '6'){
                window.open(`https://wa.me/62${sliceTwo}`)
            }else{
                if(charWa == '0'){
                window.open(`https://wa.me/62${slice}`)
                }
            }" id="nomor<?php echo $id ?>" value="<?php echo $row['user_kontak'] ?>">
            </td>
            <td>
                <a target="blank" href="../verifikasi-pembayaran/<?php echo $row['file_verifikasi'] ?>"><?php echo $row['file_verifikasi'] ?></a>
            </td>
            <td>
            <?php if($row['status'] == 'Pembayaran kamu sukses. Sekarang mohon tunggu paling lama 1x24 jam ya... File bakal mimin kirim lewat Whatsapp'){ ?>
                <p>Approved</p>
            <?php }else if($row['file_verifikasi'] == NULL){ ?>
                <p></p>
            <?php }else{ ?>
                <a class="btn btn-success btn-sm" href="<?php echo BASE_URL.'approve.php?id='.$row['id'] ?>">Approve</a>
            <?php } ?>
            </td>
        </tr>
        <?php } ?>
        <?php } else {
            echo ("<script> alert('Login dulu dong cinta'); window.location='login-page.php'</script>");
        } ?>
        </tbody>
        </table>
        </div>
</body>
</html>