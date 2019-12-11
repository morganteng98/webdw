<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";
 ?>
<?php
    if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) 
    {
    	echo "<script>alert('keranjang kosong');</script>";
    	echo "<script>location='toko.php';</script>";
    }

 ?>

<body>
	
<!-- welcome -->
<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<h1>Keranjang</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Subharga</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1;?>
					<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<?php
					$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah["harga_produk"]*$jumlah;
					?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $pecah["nama_produk"]; ?></td>
						<td>Rp.<?php echo number_format($pecah["harga_produk"]); ?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp.<?php echo number_format($subharga); ?></td>
						<td>
							<a href="hapuskeranjang.php?id=<?php echo $id_produk?>" class="btn btn-danger">hapus</a>
						</td>
					</tr>
				<?php $nomor++;?>
				<?php endforeach ?>
				</tbody>
			</table>
				<a href="toko.php" class="btn btn-default">Lanjutkan belanja</a>
 				<a href="checkout.php" class="btn btn-primary">Checkout</a>
			</div>	
		</div>	
</section>


<?php include "footer.php" ?>