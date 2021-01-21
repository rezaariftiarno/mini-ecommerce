      <title>PENGUNJUNG</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    session_start();
    include 'include/head.php';
    include '../koneksi.php';
    ?>
    <?php 
    	if($_SESSION['level']==""){
            header("location: login-page.php");
        }
    ?>
    <div class="text-right">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Pesananku..
    <div class="fa fa-shopping-cart"></div>
    </button>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

<!-- Modal Pesanan -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PESANANKU.. <div class="fa fa-shopping-cart"></div></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <table class="table">
        <thead>
            <tr>
            <th>Pesanan Nomor</th>
            <th>Kode Pembayaran</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $id = 0;
        $user_id = $_SESSION['id'];
        $query = "SELECT * FROM pesanan WHERE user_id = $user_id ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            $id++
        ?>
        <tr>
            <td>
                <?php echo $id ?>
            </td>
            <td>
                <?php echo $row['kode_pembayaran'] ?>
            </td>
            <td>
                <?php if( $row['file_verifikasi'] != NULL){
                    echo $row['status']; 
                    }else{ ?> 
                <form action="../verifikasi-pembayaran.php" method="POST">
                    <a class="btn btn-success btn-sm" href="<?php echo BASE_URL.'verif-page.php?id='.$row['id'] ?>">Upload Bukti Bayar</a>
                </form>
                <?php }?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

<center><h2>Silahkan Pilih Desain yang Tersedia</h2>
<p>(Semua desain diperoleh dari <a href="https://www.free-powerpoint-templates-design.com/">https://www.free-powerpoint-templates-design.com/</a>)</p></center>
<div class="row pb-5 mb-4">
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card-body p-4" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/1-1.gif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Desain 1</h5>
            <a href="<?php echo BASE_URL.'katalog/katalog_1.php' ?>" class="btn btn-outline-success btn-sm">Selengkapnya</a>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card-body p-4" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/2-1.gif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Desain 2</h5>
            <a href="<?php echo BASE_URL.'katalog/katalog_2.php' ?>" class="btn btn-outline-success btn-sm">Selengkapnya</a>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card-body p-4" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/3-1.gif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Desain 3</h5>
            <a href="<?php echo BASE_URL.'katalog/katalog_3.php' ?>" class="btn btn-outline-success btn-sm">Selengkapnya</a>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card-body p-4" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/4-1.gif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Desain 4</h5>
            <a href="<?php echo BASE_URL.'katalog/katalog_4.php' ?>" class="btn btn-outline-success btn-sm">Selengkapnya</a>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card-body p-4" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/5-1.gif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Desain 5</h5>
            <a href="<?php echo BASE_URL.'katalog/katalog_5.php' ?>" class="btn btn-outline-success btn-sm">Selengkapnya</a>
        </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card-body p-4" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/6-1.gif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Desain 6</h5>
            <a href="<?php echo BASE_URL.'katalog/katalog_6.php' ?>" class="btn btn-outline-success btn-sm">Selengkapnya</a>
        </div>
        </div>
    </div>
</div>


<?php include 'include/foot.php'; ?>