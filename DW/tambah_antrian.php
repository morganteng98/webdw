<?php
  if(isset($_POST['buttoninsert'])){
    $plat_nomer = $_POST['platnomer'];
    $warna_kendaraan = $_POST['warna'];
    $tanggal = date("Y-m-d");

    if ($plat_nomer=="" || $warna_kendaraan=="" || $tanggal=="" ) {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan data buku <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO antrian (plat_nomer,warna_kendaraan,waktu) VALUES('$plat_nomer','$warna_kendaraan','$tanggal');";
  
     if(mysqli_query($koneksi,$queryinsert)){
       echo "<meta http-equiv='refresh' content='1;url=antrian.php'>";   
?>
    <div class="alert alert-primary" role="alert">
      Antrian berhasil ditambahkan
    </div>
    
  <?php
      }else{   
        echo "Antrian tidak berhasil ditambahkan";
        }
      }
    }
  ?>

<!-- Modal Tambah Buku --> 

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 00px">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah antrian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row">
          <label for="judul_buku" class="col-sm-4 col-form-label">Plat Nomer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="platnomer" placeholder=" Isi Plat Nomer ">
        </div>

        </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Warna Kendaraan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="warna" placeholder=" Isi Warna Kendaraan">
        </div>

    </div>

      <!-- Footer modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" name="buttoninsert" class="btn btn-primary">Tambahkan</button>
        </div>
  </form>



    </div>
  </div>
</div>