<?php
    @session_start();
    error_reporting(0);
        include 'db.php';
        
?>

<style type="text/css">
.jumbotron img{
    width: 200px;
    border: 5px solid rgb(100, 186, 212);
    border-radius: 50%;
}
.carousel img{
    width: 200px;
}
</style>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script data-ad-client="ca-pub-9389138524972034" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <title>Selamat Datang || </title>
  </head>
  <body>
    
    <!--navbar-->
    <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-primary">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                KATEGORI
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="index.php?hal=tmp&kategori=Aksesoris Hp">AKSESORIS HP</a>
                <a class="dropdown-item" href="index.php?hal=tmp&kategori=MakeUp">PERAWATAN DAN KECANTIKAN</a>
                <a class="dropdown-item" href="index.php?hal=tmp&kategori=Baju">BAJU</a>
                <a class="dropdown-item" href="index.php?hal=tmp&kategori=Aksesoris Lainnya">LAINNYA</a> </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="faq.php" >TENTANG</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="" method="POST">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Cari Barang..." aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0 " name="cari" type="submit">Search</button>
            </form>
            
        </div>
        </nav>

      <!--jumbotron-->
        <div class="jumbotron text-center mt-5">
            <img src="img/img.jpg" class="img-fluid" alt="Responsive image">
            <h1><strong><br/>Hanifa Zahrani</strong> </h1>
            <p><em>Co Olshop Hanifa</em> </p>
            <hr class="my-4">
            <h1><strong>TENTANG</strong> </h1>
            <h4>Olshop Hanifa adalah website tempat jual beli secara online yang terpercaya. Pembayaran bisa dilakukan di tempat anda.</h5>
            <h6><em> Alamat : Jalan Raya Gondang, Gang Nusantara 4 Karang Bedil, Desa Gondang Kecamatan Gangga, Kabupaten Lombok Utara.</em></h6>

            <div class="row">
                <div class="col-md-4 col-4">
                    
                </div>
            </div>
        </div>
    <!--end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>    
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>