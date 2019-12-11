<h2>Informasi Jadwal Kerja</h2>
<include >
<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Hari</th>
				<th>Jam Kerja</th>
				<th>AKSI</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jadwal"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['hari'];?></td>
				<td><?php echo $pecah['jam_kerja'];?></td>
				
				 <td>
					<a href="index.php?halaman=jadwal_hapus&id=<?php echo $pecah['id_jadwal']; ?>" class="btn-danger btn">hapus</a>
					<a href="index.php?halaman=jadwal_ubah&id=<?php echo $pecah['id_jadwal']; ?>" class="btn btn-warning btn">ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>


</table>
<a href="index.php?halaman=jadwal_tambah" class="btn btn-primary">Tambah Data</a>