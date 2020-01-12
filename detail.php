<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header_welcome.php";
 ?>
 <?php 
  $id_produk = $_GET["id"];
  $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
  $detail = $ambil->fetch_assoc();
  ?>

<body>
	
<!-- welcome -->
<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<div class="row">
				<div class="col-md-4" style="border: solid #eaeaea; ">
					<img src="foto/<?php echo $detail["foto_produk"]; ?>" alt="" class="img-responsive" style>
				</div>
				<div class="col-md-6" style="margin-top: 20px">
					<h1><?php echo $detail["nama_produk"]; ?></h1><br>
					<h2>Rp. <?php echo number_format($detail["harga_produk"]); ?> </h2>
					<form method="post">
						<div class="form-group">
							<div class="input-group">
								<input type="number" min="1" name="jumlah">
								<div class="input-grop-btn">
									<button class="btn btn-primary" name="beli">Beli</button>
								</div>
							</div>
						</div>

					</form>
					<?php 
						if (isset($_POST["beli"]))
						{
						$jumlah = $_POST["jumlah"];
						$_SESSION["keranjang"][$id_produk] = $jumlah;	

						echo "<script>alert('produk telah masuk keranjang'); </script>";
						echo "<script>location='keranjang.php'</script>";
						}
					 ?>
					<h2><?php echo $detail["deskripsi"]; ?></h2>
				</div>
			</div>		
		</div>	
	</div>	
</section>

<footer>
<div class="cpy-right text-center" style="background-color: #FF8C00;margin-top: 130px">
	<p>DW MUSIK <br/>
</footer>