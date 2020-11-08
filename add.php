<?php
    @session_start();   
   include 'db.php';

   //jika tombol simpan di klik
   if(isset($_POST['bsimpan'])){
    
            
        if($_GET['hal'] == "edit")
        {
            $vnama = $_FILES['foto']['name'];
            $source = $_FILES['foto']['tmp_name'];
            $folder = './img/';

            move_uploaded_file($source, $folder.$vnama);
    
        // data akan diedit
        $edit= mysqli_query($conn, "UPDATE tbl_barang set
                                            nama_barang = '$_POST[tbarang]',
                                            harga = '$_POST[tharga]',
                                            kategori = '$_POST[tkategori]',
                                            dsc = '$_POST[tdeskripsi]',
                                            img = '$vnama'
                                            WHERE id='$_GET[id]'
            ");
                if($edit){
                    echo "<script>
                        alert('Edit berhasil');
                        document.location='add.php';
                    </script>";
                }else{
                    echo "<script>
                        alert('Edit gagal');
                        document.location='add.php';
                    </script>"; 
                }
        }else
        {
            $vnama = $_FILES['foto']['name'];
            $source = $_FILES['foto']['tmp_name'];
            $folder = './img/';
            move_uploaded_file($source, $folder.$vnama);
    
        // data akan disimpan baru
        $simpan= mysqli_query($conn, "INSERT INTO tbl_barang (nama_barang,harga, kategori,  dsc, img)
        VALUES ('$_POST[tbarang]','$_POST[tharga]' ,'$_POST[tkategori]' , '$_POST[tdeskripsi]' ,'$vnama')
            ");
                if($simpan){
                    echo "<script>
                        alert('Simpan berhasil');
                        document.location='add.php';
                    </script>";
                }else{
                    echo "<script>
                        alert('Simpan gagal');
                        document.location='add.php';
                    </script>"; 
                }
        }
               
   }

   //pengujian jika tombol edit atau hapus di tekan
   if(isset($_GET['hal']))
   {
       //pengujian  jika edit data
       if($_GET['hal'] == "edit")
       {
        $tampil = mysqli_query($conn, "SELECT * FROM tbl_barang WHERE id='$_GET[id]'" );
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            //jika data ditemukan maka data di tampung dulu ke variabel
            $vnama = $data['nama_barang'];
            $vharga = $data['harga'];
            $vkategori = $data['kategori'];
            $vdsc = $data['dsc'];
            $vimg = $data['img'];
        }
       }
   }

   if(@$_SESSION['Admin']){
?>

<style type="text/css">

</style>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Form Tambah Barang</title>
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
            <li class="nav-item">
                <a class="nav-link" href="contac.php">HUBUNGI KAMI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="faq.php" >FAQ (Tanya Jawab)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">KELUAR</a>
            </li>
            </ul>
            
        </div>
        </nav>
        <!--end-->
   <div class="container">
   <h1 class="text-center">TAMBAH BARANG</h1>


    <!--form table-->
    <div class="card">
        <div class="card-header bg-primary text-white">
            Form Tambah Barang
        </div>
        <div class="card-body">
           <form method="post" action="" enctype="multipart/form-data">
           <div class="form-group ">
           <label >Nama Barang</label>
           <input type="text" name="tbarang" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama Barang anda disini" required >
           </div>
           <div class="form-group">
           <label >Kategori Barang</label>
           <select class="form-control" name="tkategori" >
           <option value="<?=@$vkategori?>" ><?=@$vkategori?></option>
           <option value="Baju">Baju</option>
           <option value="Aksesoris Hp">Aksesoris Hp</option>
           <option value="MakeUp">MakeUp</option>
           <option value="Aksesoris Lainnya">Aksesoris Lainnya</option>
           </select>
            </div>
           <div class="form-group">
           <label >Harga</label>
           <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                </div>
                <input type="text" name="tharga" value="<?=@$vharga?>" class="form-control" placeholder="Masukkan Harga Barang.." required >

                </div>
               </div>
           <div class="form-group">
           <label >Deskripsi Barang</label>
           <textarea class="form-control" name="tdeskripsi"  placeholder="Deskripsi Barang" required><?=@$vdsc?></textarea>
           </div>
    
           <input type="file" name="foto">
           <div class="col-md-2 mb-3">
        <span  style="color: #ff0000" class="border</span> <span style="color: #0000ff> </span>
      </div>
            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
           
            <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
            
           </form>
        </div>
        </div>
    <!--end-->
        <!--form table-->
        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                Form Data Barang 
            </div>
            <div class="card-body" >
            <table class="table table-bordered table-striped table-responsive "  >
                <tr>

                    <th >Nama Barang</th>
                    <th >Harga </th>
                    <th >Kategori </th>
                    <th >Deskripsi </th>
                    <th >Img</th>
                    <th >Aksi</th>
                </tr>
                <?php
                  
                    $tampil = mysqli_query($conn, "SELECT * FROM tbl_barang order by id desc");
                    while($data = mysqli_fetch_array($tampil)):
                ?>
                <tr>
                  
                    <td><?=$data['nama_barang']?></td>      
                    <td><?=$data['harga']?></td> 
                    <td><?=$data['kategori']?></td> 
                    <td><?=$data['dsc']?></td> 
                    <td><?=$data['img']?></td> 
                    <td>
                    <a href="add.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger mt-3">Hapus</a>
                    </td> 
                </tr>
                    <?php endwhile; ?>
            </table>
            </div>
        <!--end-->

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>    
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
</html>
<?php
   }else{
       header("location: login.php");
   }
   ?>