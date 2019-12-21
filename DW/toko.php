<?php 	include 'kategori_head.php';
		include 'nav_taufik.php';
 ?>

					<div class="row" style="padding: 100px">

				<?php $ambil = $koneksi ->query("SELECT * FROM produk  ORDER BY jenis_produk"); ?><!-- dari database belajar -->
				<?php while($perproduk = $ambil->fetch_assoc()){  ?>
				
				<div class="col-md-3" style="margin-bottom: 50px;text-align: center;">
					<div class="thumnail" style="background-color: #eaeaea; border: solid #eaeaea; ">
					<img src="foto/<?php echo $perproduk['foto_produk'];?>" alt=@"">
A
				<div class="caption" style="background-color: white;">
					<h5 style="margin-bottom: 5px"><?php echo $perproduk['nama_produk'];?></h5>
					<h5 style="background-color: orange;margin-bottom: 10px"><b>Harga</b> Rp.<?php echo number_format($perproduk['harga_produk']);?></h5>

				
					<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-info">Detail</a>`	

				</div>
				</div>
				</div>
					<?php }?>
	

						
				
			</div>	
			</div>	
		</div>	
</section>
<?php include 'kategori_tail.php'; ?>