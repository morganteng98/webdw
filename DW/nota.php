<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";
 ?>
<body>
	
<!-- welcome -->
<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<?php 
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]' ");
	$detail = $ambil->fetch_assoc(); 
?>
				<div class="row">

					<div class="col-md-4">
					<h3>Pembelian</h3>
							<strong>No. Pembelian: <?php echo $detail['id_pembelian']; ?>  </strong><br>
							Tanggal: <?php echo $detail['tanggal_pembelian']; ?>
						
					</div>

					<div class="col-md-4">
					<h3>Pelanggan</h3>
							<strong> <?php echo $detail['nama_pelanggan']; ?>  </strong><br>
							<?php echo $detail['email_pelanggan']; ?><br>
							<?php echo $detail['nomer_telepon']; ?>
						
					</div>
					<div class="col-md-4">
					<h3>Pengiriman</h3>
							<strong> <?php echo $detail['nama_kota']; ?>  </strong><br>
							Ongkir: Rp. <?php echo number_format($detail['tarif']); ?><br>
							Alamat: <?php echo $detail['alamat_pengiriman']; ?>
						
					</div>

				</div>


<table class="table table-bordered">
<thead>
	<tr>
		<th>no</th>
		<th>nama produk</th>
		<th>harga</th>
		<th>jumlah</th>
		<th>subtotal</th>
	</tr>
</thead>
<tbody>
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk pembelian_produk WHERE id_pembelian='$_GET[id]' ") ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>Rp. <?php echo number_format($pecah['subharga']) ?></td>
		
		</tr>
		<?php $nomor++; ?>
		<?php  }?>
</tbody>
</table>
<h2>TOTAL PEMBAYARAN:  Rp. <?php echo number_format( $detail['total_pembelian']); ?></h2>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-info">
				<center>
				<p>
				 <strong>
				 	Silahkan melakukan pembayaran senilai Rp. <?php echo number_format( $detail['total_pembelian']); ?> ke BANK XXX 6013 - xxxx - xxxx - xxxx AN. BENGKOL<br/>
				 </strong>	
				</p>
				</center>
			</div>
<div class="col-md-12">
			<div class="alert alert-danger">
				<center>
				<p>
				 <strong>
				  Barang akan dikirim jika telah melakukan pembayaran sesuai nominal<br/>
				  Atau	
				 </strong>	
				</p>
				</center>
			</div>
		</div>

		<div class="col-md-12">
			<div class="alert alert-danger">
				<center>
				<p>
				 <strong>
				  Barang akan dikirim jika telah melakukan pembayaran secara tunai!	
				 </strong>	
				</p>
				</center>
			</div>
		</div>
		
	</div>

			</div>	
		</div>	
</section>



<?php include "footer.php" ?>