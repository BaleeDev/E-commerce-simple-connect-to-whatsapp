<?php
    @session_start();
    error_reporting(0);
        include 'db.php';
        
?>

<style type="text/css">
.row .card:hover{
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .4);
    transform: scale(1.02);
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
            <li class="nav-item active">
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
           
            <li class="nav-item">
                <a class="nav-link " href="faq.php" >TENTANG</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="" method="POST">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Cari Barang..." aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0 " name="cari" type="submit">Search</button>
            </form>
            
        </div>
        </nav>
        <!--end-->
        <!--slide-->
        <div class="container">
        <div class="col-md-12 col-12 ">
        <div class="slide">
        <div id="carouselExampleCaptions" class="carousel slide mb-3" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/wlp.jpg" class="d-block w-100" width="350" height="250" alt="gambar">
                    </div>
                    <div class="carousel-item">
                    <img src="img/wlp1.jpg" class="d-block w-100" width="350" height="250" alt="gambar">
                    </div>
                    <div class="carousel-item">
                    <img src="img/wlp2.jpg" class="d-block w-100" width="350" height="250" alt="gambar">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
        </div>
        </div>
        <!--end-->
        <!--Kategori1-->
        <!--Konten-->
        <div class="container">
            <div class="row">
                <?php
                 $query = $_POST['query'];

                if($query !=''){
                    $tampil = mysqli_query($conn, "SELECT*FROM tbl_barang WHERE nama_barang LIKE '%".$query."%' "); 
                }elseif(isset($_GET['hal'])){
                    if($_GET['hal']= "tmp"){
                        $tampil = mysqli_query($conn, "SELECT*FROM tbl_barang WHERE kategori='$_GET[kategori]' ");
                    }
                }else{
                    $tampil = mysqli_query($conn, "SELECT*FROM tbl_barang order by id desc limit 6");
                }
                    if(mysqli_num_rows($tampil)){
                    while($dat= mysqli_fetch_array($tampil)){
                    ?>
                <div class="col-md-4 col-6 mb-3">
                    <div class="card">
                        <img src="img/<?php echo $dat['img']?>"  width="350" height="250" class="card-img-top" alt="gambar">
                        <div class="card-body">
                        <h5 class="card-title m-1 "><a href="#"class="text-primary"><?php echo $dat['nama_barang']?></a> </h5>
                        <p class="card-text"><?php echo $dat['dsc']?><br/>Rp.<?php echo $dat['harga']?></p>
                        <a href="https://api.whatsapp.com/send?phone=6282341465881&text=Saya%20tertarik%20untuk%20membeli%20<?php echo $dat['nama_barang']?>,%20Apakah%20masih%20Ada?" class="btn btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                    <?php } }else{
                     echo 'Barang Yang di Cari Tidak Ada!';
                    }?>
                
            </div>
        </div>
    <!--Konten-->
    <!--Cari Barang-->
    <!--end-->
        <p class="card-text pr-5"><a href="lainnya.php" class="text-primary">Lihat Lainnya...</a></p>
        <!--end-->
    <!--footer-->
    <footer class="bg-primary text-white">
            <div class="row">
                <div class="foter col-md-3 col-3 pt-2 ml-2">
                    <h6>LAYANAN PELANGGAN</h6>
                    <ul>
                        <li>Pusat Bantuan</li>
                        <li>Cara Pembelian</li>
                    </ul>
                </div>
                <div class="col-md-3 col-3"></div>
                <div class="col-md-3 col-3"></div>
                <div class="col-md-3 col-3"></div>
            </div>
        </footer>
        <!--end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>    
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>