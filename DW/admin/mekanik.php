<h2>Informasi Data Mekanik</h2>
<include >
<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>No Telepon</th>
				<th>Alamat</th>
			<!-- 	<th>Username</th>
			
				<th>Level</th>
			 -->	<th>AKSI</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $nomor='MK1'; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM mekanik"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['nama_mekanik'];?></td>
				<td><?php echo $pecah['no_telepon'];?></td>
				<td><?php echo $pecah['alamat_mk'];?></td>
				 <td>
					<a href="index.php?halaman=mekanik_hapus&id=<?php echo $pecah['id_mekanik']; ?>" class="btn-danger btn">hapus</a>
					<a href="index.php?halaman=mekanik_ubah&id=<?php echo $pecah['id_mekanik']; ?>" class="btn btn-warning btn">ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>


</table>
<a href="index.php?halaman=mekanik_tambah" class="btn btn-primary">Tambah Data</a>