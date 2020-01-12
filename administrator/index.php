<?php
    session_start();
    $koneksi = new mysqli("localhost","root","","belajar");

    if (!isset($_SESSION['admin'])) {
      echo "<script>alert('Anda harus login')</script>";
      echo "<script>location='login.php';</script>";
      header('location:login.php');
      exit();
    }

?>


<?php 
include('header.php');
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">


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
                    elseif ($_GET['halaman']=="hapus_pelanggan"){
                        include 'hapus_pelanggan.php';
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
                    
                /*    elseif ($_GET['halaman']=="jadwal_tambah"){
                        include 'jadwal_tambah.php';
                    }
                    elseif ($_GET['halaman']=="jadwal_ubah"){
                        include 'jadwal_ubah.php';
                    }
                    elseif ($_GET['halaman']=="jadwal_hapus"){
                        include 'jadwal_hapus.php';
                    }
                */  }  elseif ($_GET['halaman']=="tentang"){
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php 
include('footer.php');
?>