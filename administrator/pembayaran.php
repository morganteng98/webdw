
       
          <div></br></div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pembayaran</h6>
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
              	<h2>Pembayaran</h2>

<?php
	
	$id_pembelian = $_GET['id'];


	$ambil = $koneksi->query("SELECT*FROM pembayaran WHERE id_pembelian = '$id_pembelian'");
	$detail = $ambil->fetch_assoc();
?>



<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td><?php echo $detail ['nama'];  ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?php echo $detail ['bank'];  ?></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>Rp.<?php echo number_format($detail ['jumlah']);  ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td><?php echo $detail ['tanggal'];  ?></td>
			</tr>
			
		</table>
	</div>
	<div class="col-md-6">
		<img src="../bukti_pembayaran/<?php echo $detail['bukti_pembayaran'] ?>" alt="" class="img-responsive">
	</div>
</div>

<form method="post">
	<div class="form-group">
		<label>No Resi pengiriman</label>
		<input type="text" class="form-control" name="resi">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			
			<option value="barang dikirim">Barang Dikirim</option>
			<option value="batal">Batal</option>
		</select>
	</div>
	<button class="btn btn-primary" name="proses">Proses</button>
	
</form>

<?php
	if (isset($_POST["resi"])) 
	{
		$resi = $_POST["resi"];
		$status = $_POST["status"];
		$koneksi->query("UPDATE pembelian SET resi_pengiriman = '$resi', status_pembelian = '$status'
			WHERE id_pembelian = '$id_pembelian'");

		echo "<script>alert('data pembelian terbaru'); </script>";
		echo "<script>location='index.php?halaman=pembelian'; </script>";
	}



  ?>