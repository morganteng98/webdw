<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";

 ?>
<body>

<section class="Welcome py-5" style="background-image: url(../images/as.jpg);background-size: cover;">

		<div class="welcome" style="margin-top: 100px">
					<div class="row">

				<?php $ambil = $koneksi ->query("SELECT * FROM produk where jenis_produk='aki'"); ?><!-- dari database belajar -->
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

<!-- footer -->
<footer class="footer py-5">
	<div class="container py-sm-4">
	<h3 class="mb-2 pb-1 w3f_title" style="text-align: center">Kategori</h3>
			
		<div class="row">
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
				<ul class="list-agileits">
					<ul class="list-agileits">
					<li>
						<a href="aki.php">Aki</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
				</ul>
				</ul>
			
			</div>
<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
				<ul class="list-agileits">
					<ul class="list-agileits">
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
				</ul>
				</ul>
			
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
				<ul class="list-agileits">
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
				</ul>
			
			</div> 	

<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
			<ul class="list-agileits">
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
				</ul>
			</div>

						

			

			
	</div>
	<!-- //footer bottom -->
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="cpy-right text-center">
	<p>© 2018  Bengkel OnlineAll rights reserved | Design by kelompok 4
	</p>
</div>
<!-- //copyright -->
