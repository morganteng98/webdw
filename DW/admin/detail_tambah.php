<h2>Tambah Data</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: none">
			<label>ID</label>
			<input type="text" class="form-control" name="id_pembelian_produk">		
		</div>
	
		<div class="form-group" style="display: none">
			<label>ID</label>
			<input type="text" class="form-control" name="id_pembelian">		
		</div> 

		<div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Produk</label>
          <div class="col-sm-10">
            <select id="kategori" name="id_produk" class="form-control">
         <option></option>
         <?php
            $queryproduk=$koneksi->query("SELECT * FROM produk");
            while($j = $queryproduk->fetch_assoc()){
               echo "<option value='$j[id_produk]'>$j[nama_produk]</option>";
            }
         ?>
      </select>
        </div>
        </div>


		<div class="form-group">
			<label>Tjmlh</label>
			<input type="number" class="form-control" name="jumlah">		
		</div>
		
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST['save'])) {
			$id_pembelian_produk = $_POST['id_pembelian_produk'];
			$id_pembelian = $_POST['id_pembelian'];
		    $id_produk = $_POST['id_produk'];
		    $jumlah = $_POST['jumlah'];
		
		    if ($jumlah=="") {
      
  			?>
  			<div class="alert alert-danger" role="alert">
      Penambahan pembelian_produk <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{

			$koneksi->query("INSERT INTO pembelian_produk (id_pembelian_produk,id_pembelian,id_produk,jumlah) VALUES(null'$id_pembelian','$id_produk','$jumlah');");

				echo "<div class='alert alert-info'> Data berhasil ditambahkan!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=detail'>";
		}
	?>

	<?php } ?>