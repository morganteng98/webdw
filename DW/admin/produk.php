<h2>Data Produk</h2>
<div class="table-responsive">
<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Stok</th>
				<th>Foto Produk</th>
				<th>Deskripsi</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['nama_produk'];?></td>
				<td><?php echo $pecah['jenis_produk'];?></td>
				<td><?php echo $pecah['stok'];?></td>
				<td>
					<img src="../foto/<?php echo $pecah['foto_produk'];?>" width="100px" >
				</td>
				<td><?php echo $pecah['deskripsi'];?></td>
				<td>Rp.<?php echo $pecah['harga_produk'];?></td>
				<td>
					<a href="index.php?halaman=delete_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn">hapus</a>
					<a href="index.php?halaman=ubah_produk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-warning btn">ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>


</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>