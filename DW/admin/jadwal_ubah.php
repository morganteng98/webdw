	<center><h2>Ubah Jadwal</h2></center>
<?php
	$ambil=$koneksi->query("SELECT * FROM jadwal WHERE id_jadwal='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group" style="display: none">
		<label>ID</label>
		<input type="text" name="id_jadwal" class="form-control" value="<?php echo $pecah['id_jadwal']?>">
	</div>
	<div class="form-group">
		<label>Hari</label>
		<input type="text" name="hari" class="form-control" value="<?php echo $pecah['hari']?>">
	</div>
	<div class="form-group">
		<label>Jam Kerja</label>
		<input type="text" name="jam_kerja" class="form-control" value="<?php echo $pecah['jam_kerja']?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">UBAH</button>
</form>

 <?php
  if(isset($_POST['ubah'])){
  $id_jadwal = $_POST['id_jadwal'];
  $hari = $_POST['hari'];
  $jam_kerja = $_POST['jam_kerja'];

  $ubahjadwal = "UPDATE jadwal SET hari='$hari',jam_kerja='$jam_kerja' WHERE id_jadwal=$id_jadwal;";?>
                             
 <?php
  if(mysqli_query($koneksi,$ubahjadwal)){
  echo "<script>alert('jadwal telah di ubah')</script>";
  echo "<script>location='index.php?halaman=jadwal';</script>";
	}
   }
 ?>