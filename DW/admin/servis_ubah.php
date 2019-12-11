	<center><h2>Ubah servis</h2></center>
<?php
	$ambil=$koneksi->query("SELECT * FROM servis WHERE id_servis='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group" style="display: none">
		<label>No</label>
		<input type="text" name="id_servis" class="form-control" value="<?php echo $pecah['id_servis']?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama_jasa" class="form-control" value="<?php echo $pecah['nama_jasa']?>">
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<input type="text" name="keterangan" class="form-control" value="<?php echo $pecah['keterangan']?>">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="text" name="harga_jasa" class="form-control" value="<?php echo $pecah['harga_jasa']?>">
	</div>
	<div class="form-group">
		<label>Jenis Jasa</label>
		<input type="text" name="jasa" class="form-control" value="<?php echo $pecah['jasa']?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">UBAH</button>
</form>

 <?php
  if(isset($_POST['ubah'])){
  $id_servis = $_POST['id_servis'];
  $nama_jasa = $_POST['nama_jasa'];
  $keterangan = $_POST['keterangan'];

  $harga_jasa = $_POST['harga_jasa'];
  $jasa = $_POST['jasa'];

  $ubah_servis = "UPDATE servis SET nama_jasa='$nama_jasa',keterangan='$keterangan',harga_jasa='$harga_jasa',jasa='$jasa' WHERE id_servis=$id_servis;";?>

                              
 <?php
  if(mysqli_query($koneksi,$ubah_servis)){
  echo "<script>alert('data servis telah di ubah')</script>";
  echo "<script>location='index.php?halaman=servis';</script>";
	}
   }
 ?>