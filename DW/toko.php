<?php include "kategori_head.php"; ?>
<div class="container" style="background-color: gray">
 <div class="nav-scroller bg-black py-1 mb-2">
    <ul class="nav d-flex justify-content-between">
      <li class="dropdown ">
      	<a href="#" class="dropdown-toggle p-2 text-light" data-toggle="dropdown">Alat Musik <b class="fa fa-caret-down"></b></a>
						<ul class="dropdown-menu"style="background-color: gray">
							<li><a href="#" class="p-2 text-light">Gitar</a></li>
							<li><a href="#" class="p-2 text-light">Keyboard</a></li>
							<li><a href="#" class="p-2 text-light">Drum</a></li>
						</ul>
		</li>
		<li class="dropdown ">
      	<a href="#" class="dropdown-toggle p-2 text-light" data-toggle="dropdown">Sparepart <b class="fa fa-caret-down"></b></a>
						<ul class="dropdown-menu"style="background-color: gray">
							<li><a href="#" class="p-2 text-light">Gitar</a></li>
							<li><a href="#" class="p-2 text-light">Keyboard</a></li>
							<li><a href="#" class="p-2 text-light">Drum</a></li>
						</ul>
		</li>
      <li class="dropdown ">
      	<a href="#" class="dropdown-toggle p-2 text-light" data-toggle="dropdown">Aksesoris<b class="caret"></b></a>
		</li>
		<li class="dropdown ">
      	<a href="#" class="dropdown-toggle p-2 text-light" data-toggle="dropdown">Alat Elektronik<b class="caret"></b></a>
		</li>
    </ul>
  </div>
  </div>


					<div class="row" style="padding: 20px; ">

				<?php $ambil = $koneksi ->query("SELECT * FROM produk  ORDER BY jenis_produk"); ?><!-- dari database belajar -->
				<?php while($perproduk = $ambil->fetch_assoc()){  ?>
				
				<div class="col-md-3" style="margin-bottom: 50px;text-align: center ;">
					<div class="thumnail" style="background-color: #eaeaea; border: solid #eaeaea; ">
					<img src="foto/<?php echo $perproduk['foto_produk'];?>" alt"">
				<div class="caption">
					<h5><?php echo $perproduk['nama_produk'];?></h5>
					<h5>Harga  Rp.<?php echo number_format($perproduk['harga_produk']);?></h5>

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
<?php include 'footer.php'; ?>