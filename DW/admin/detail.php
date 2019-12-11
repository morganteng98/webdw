<center><h2>Detail Pembelian</h2></center>


<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga Beli</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
</thead>
<tbody>
	<?php $nomor=1;?>
	<?php $total=0 ?>
	
	<?php 
		
		$ambil=$koneksi->query("SELECT * FROM pembelian_produk INNER JOIN produk on pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'") ?>
	<!-- pengennya iitu ketika id 14 yg mncul 14 -->

	<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<?php $subtotal= $pecah['harga_produk']*$pecah['jumlah']; ?>
		<?php $total += $subtotal; ?>

		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>Rp.<?php echo $subtotal;  ?></td>

			
		</tr>
	
		<?php $nomor++; ?>
		
		<?php  }?>
		<tr>
			<td colspan="4" style="text-align: right">Total</td>
			<td>Rp.<?php echo $total ?></td>
		</tr>
</tbody>
</table><!-- 
<a href="index.php?halaman=detail_tambah" class="btn btn-primary">Tambah Data</a>
 -->

