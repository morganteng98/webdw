<h2>Informasi Data servis</h2>
<div class="table-responsive">
<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Jasa</th>
				<th>Keterangan</th>
				<th>Harga Jasa</th>
				<th>Jenis Jasa</th>
				<th>AKSI</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $nomor='SRV1'; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM servis"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['nama_jasa'];?></td>
				<td><?php echo $pecah['keterangan'];?></td>
				<td><?php echo $pecah['harga_jasa'];?></td>
				<td><?php echo $pecah['jasa'];?></td>
				
				 <td>
					<a href="index.php?halaman=servis_hapus&id=<?php echo $pecah['id_servis']; ?>" class="btn-danger btn">hapus</a>
					<a href="index.php?halaman=servis_ubah&id=<?php echo $pecah['id_servis']; ?>" class="btn btn-warning btn">ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>


</table>
<a href="index.php?halaman=servis_tambah" class="btn btn-primary">Tambah Data</a>