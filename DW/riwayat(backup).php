<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";

 ?>
<body>

<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<pre> <?php print_r($_SESSION)  ?></pre>
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
						<td><?php echo $pecah["status_pembelian"] ?></td>
						<td><?php echo number_format($pecah["total_pembelian"]) ?></td>
						<td>
							<a href="" class="btn btn-info">Nota</a>
							<a href="" class="btn btn-info">Pembayaran</a>

						</td>
					</tr>
					<?php $nomor++; ?>
					<?php }  ?>
				</tbody>
				

			</table>
		
			</div>	
		</div>	
</section>



<?php include "footer.php" ?>