<?php include 'kategori_head.php'; ?>
<span class="badge badge-primary" style="font-size: 20px;margin-bottom: 40px">Produk Jenis dinamo</span>

					<div class="row">

				<?php $ambil = $koneksi ->query("SELECT * FROM produk where jenis_produk='dinamo'"); ?><!-- dari database belajar -->
				<?php while($perproduk = $ambil->fetch_assoc()){  ?>
				
				<div class="col-md-3" style="margin-bottom: 50px">
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
<?php include 'kategori_tail.php'; ?>