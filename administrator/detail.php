  <!-- Begin Page Content -->
        <div class="container-fluid">

          <div></br></div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pembelian</h6>
            </div>
            <div class="card-body">

            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

              <div class="table-responsive">
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

