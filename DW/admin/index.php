<?php
    session_start();
    $koneksi = new mysqli("localhost","root","","belajar");

    if (!isset($_SESSION['admin'])) {
      echo "<script>alert('Anda harus lkogin')</script>";
      echo "<script>location='login.php';</script>";
      header('location:login.php');
      exit();
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper" style="background-image: url(images/as.jpg);background-size: cover;
}
background-repeat: no-repeat;">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?halaman=tentang">DW MUSIK</a> 
            </div>
            <div style="color: white;
          padding: 15px 50px 5px 50px;
          float: right;
          font-size: 16px;">
          <!-- Bisa diisi sesuatu --> 
          </div>
        </nav> 

    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">  <!--  Ini side bar -->
                <ul class="nav" id="main-menu">

				<li class="text-center"> <!-- logo aatau gambar admin -->
          <img src="assets/img/find_user.png" class="user-image img-responsive"/>
				</li>
	
      <!-- ----- -->
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      
      <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Data<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li><a href="index.php?halaman=produk"></i>Produk</a></li>
            <!--  <li><a href="index.php?halaman=mekanik"></i>Mekanik</a></li>
              <li><a href="index.php?halaman=supplier"></i>Supplier</a></li> -->
          </ul>
      </li>


               
      <li>
          <a href="#"><i class="fa fa-money fa-fw"></i>Transaksi<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
             <li><a href="index.php?halaman=pembelian">Riwayat Pembelian</a></li>
          </ul>
      </li>

<!--      <li><a href=""><i class="fa fa-wrench fa-fw"></i>Servis<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li><a href="index.php?halaman=servis">Data Servis</a></li>
              <li><a href="#">Transaksi Servis</a></li> 
          </ul>
      </li
-->
     <li><a href=""><i class="fa fa-users"></i> Manajemen User<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="index.php?halaman=pelanggan">pelanggan</a></li>
        </ul>                    
      </li>
      <li><a href="index.php?halaman=jadwal"><i class="fa fa-clock-o "></i>Jadwal</a></li>
      <li><a href="index.php?halaman=tentang"><i class="fa fa-share-alt "></i>Tentang</a></li>
      <li><a href="index.php?halaman=logout"></i>Keluar</a></li>

       </ul>
<!-- Batas untuk sidebar -->
</div>
           
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                 if (isset ($_GET['halaman']))
                 {
                    if ($_GET['halaman']=="produk"){
                        include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="pembelian"){
                        include 'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="pembelian_tambah"){
                        include 'pembelian_tambah.php';
//Mekanik CRUD 
                    } 
                    elseif ($_GET['halaman']=="mekanik"){
                        include 'mekanik.php';
                    }
                    elseif ($_GET['halaman']=="mekanik_tambah"){
                        include 'mekanik_tambah.php';
                    }
                    elseif ($_GET['halaman']=="mekanik_hapus"){
                        include 'mekanik_hapus.php';
                    }
                    elseif ($_GET['halaman']=="mekanik_ubah"){
                        include 'mekanik_ubah.php';
// supplier    
                    } 
                    elseif ($_GET['halaman']=="supplier"){
                        include 'supplier.php';
                    }
                    elseif ($_GET['halaman']=="supplier_tambah"){
                        include 'supplier_tambah.php';
                    }
                    elseif ($_GET['halaman']=="supplier_hapus"){
                        include 'supplier_hapus.php';
                    }
                    elseif ($_GET['halaman']=="supplier_ubah"){
                        include 'supplier_ubah.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan"){
                        include 'pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="jadwal"){
                        include 'jadwal.php';
                    }
                    elseif ($_GET['halaman']=="detail"){
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="detail_tambah"){
                        include 'detail_tambah.php';
//Servis CRUD
                    }
                    elseif ($_GET['halaman']=="servis"){
                        include 'servis.php';
                    }
                    elseif ($_GET['halaman']=="servis_tambah"){
                        include 'servis_tambah.php';
                    }
                    elseif ($_GET['halaman']=="servis_hapus"){
                        include 'servis_hapus.php';
                    }
                    elseif ($_GET['halaman']=="servis_ubah"){
                        include 'servis_ubah.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk"){
                        include 'tambahproduk.php';
                    }
                    elseif ($_GET['halaman']=="delete_produk"){
                      include 'delete_produk.php';
                    }
                    elseif ($_GET['halaman']=="ubah_produk"){
                      include 'ubah_produk.php';
                    }
                    elseif ($_GET['halaman']=="jadwal_tambah"){
                        include 'jadwal_tambah.php';
                    }
                    elseif ($_GET['halaman']=="jadwal_ubah"){
                        include 'jadwal_ubah.php';
                    }
                    elseif ($_GET['halaman']=="jadwal_hapus"){
                        include 'jadwal_hapus.php';
                    }
                    elseif ($_GET['halaman']=="tentang"){
                        include 'tentang.php';
                    }
                    elseif ($_GET['halaman']=="logout"){
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="pembayaran"){
                      include 'pembayaran.php';
                    }
            
                 }
                 else{
                    include'home.php';
                     }
                 ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
