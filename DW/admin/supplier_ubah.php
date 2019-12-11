	<center><h2>Ubah suplier</h2></center>
<?php
	$ambil=$koneksi->query("SELECT * FROM suplier WHERE id_suplier='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group" style="display: none">
		<label>Id suplier</label>
		<input type="text" name="id_suplier" class="form-control" value="<?php echo $pecah['id_suplier']?>">
	</div>
	
	<div class="form-group">
		<label>Nama suplier</label>
		<input type="text" name="nama_suplier" class="form-control" value="<?php echo $pecah['nama_suplier']?>">
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat_suplier']?>">
	</div>
	
	<div class="form-group">
		<label>Nomer Telepon</label>
		<input type="text" name="nomer" class="form-control" value="<?php echo $pecah['notelp_suplier']?>">
	</div>
	
	<button class="btn btn-primary" name="ubah">UBAH</button>
</form>

 <?php
  if(isset($_POST['ubah'])){
  $id_suplier = $_POST['id_suplier'];
  $nama_suplier = $_POST['nama_suplier'];
  $alamat = $_POST['alamat'];
  $nomer = $_POST['nomer'];


  $ubah_suplier = "UPDATE suplier SET nama_suplier='$nama_suplier',alamat_suplier='$alamat',notelp_suplier='$nomer' WHERE id_suplier=$id_suplier;";?>
                             
 <?php
  if(mysqli_query($koneksi,$ubah_suplier)){
  echo "<script>alert('data suplier telah di ubah')</script>";
  echo "<script>location='index.php?halaman=supplier';</script>";
	}
   }
 ?>