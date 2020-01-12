<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";



	if (!isset($_SESSION["user"]) OR empty($_SESSION["user"]))
	{
		echo "<script>alert('silahkan login');</script>";
		echo "<script>location='login.php';</script>";
		
	}

 ?>
<body>

<section class="Welcome py-5">
	<div class="container" style="padding:bottom">
		<div class="welcome" style="margin-top: 100px">
			
			<h3>Riwayat Belanja <?php echo $_SESSION["user"]["nama_pelanggan"] ?> </h3>
			<table class="table table-stripped">
				<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Total</th>
					<th>Opsi</th>
				</tr>
				</thead>
				<tbody>
					<?php 
					$nomor=1;
					$id_pelanggan = $_SESSION["user"]['id_pelanggan'];
					$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan='$id_pelanggan'");
					while ($pecah = $ambil->fetch_assoc()) {
					?>
					
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah["tanggal_pembelian"] ?></td>
						<td><?php echo $pecah["status_pembelian"] ?>
							<br>
							<?php if (!empty($pecah['resi_pengiriman'])):  ?>
							Resi: <?php echo $pecah['resi_pengiriman'];  ?>
							<?php endif ?>
						</td>
						<td><?php echo number_format($pecah["total_pembelian"]) ?></td>
						<td>
							<a href="nota.php?id=<?php echo $pecah["id_pembelian"] ?>" class="btn btn-primary">Nota</a>
							<a href="pembayaran.php?id=<?php echo $pecah["id_pembelian"]; ?>" class="btn btn-info">Pembayaran</a>

						</td>
					</tr>
					<?php $nomor++; ?>
					<?php }  ?>
				</tbody>
				

			</table>
		
			</div>	
		</div>	
</section>


