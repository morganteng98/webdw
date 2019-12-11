<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";

 ?>
<body>

<section class="Welcome py-5" style="background-image: url(images/as.jpg);background-size: cover;">
	<div class="container" >
		<div class="welcome" style="padding: 200px;margin-top: 0%">
					<div class="row">

				<?php $ambil = $koneksi ->query("SELECT * FROM produk where jenis_produk='spion'"); ?><!-- dari database belajar -->
				<?php while($perproduk = $ambil->fetch_assoc()){  ?>
				
				<div class="col-md-3">
					<div class="thumnail" style="background-color: #eaeaea; border: solid #eaeaea; ">
					<img src="foto/<?php echo $perproduk['foto_produk'];?>" alt"">
				<div class="caption">
					<h3><?php echo $perproduk['nama_produk'];?></h3>
					<h5>Rp.<?php echo number_format($perproduk['harga_produk']);?></h5>
					<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
					<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-info">Detail</a>
				</div>
				</div>
				</div>
					<?php }?>
	

						
				
			</div>	
			</div>	
		</div>	
</section>
<!-- welcome -->

