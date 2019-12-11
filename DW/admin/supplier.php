<h2>Data Supplier</h2>

<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAMA SUPPIER</th>
				<th>ALAMAT</th>
				<th>NO TELEPON</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor='SP1'; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM suplier"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['nama_suplier'];?></td>
				<td><?php echo $pecah['alamat_suplier'];?></td>
				<td><?php echo $pecah['notelp_suplier'];?></td>
			
				<td>
					<a href="index.php?halaman=supplier_hapus&id=<?php echo $pecah['id_suplier']; ?>" class="btn-danger btn">hapus</a>
					<a href="index.php?halaman=supplier_ubah&id=<?php echo $pecah['id_suplier']; ?>" class="btn btn-warning btn">ubah</a>
				</td>

			</tr>


			<?php $nomor++; ?>
			<?php }?>
		</tbody>

</table>
<a href="index.php?halaman=supplier_tambah" class="btn btn-primary">tambah data</a>