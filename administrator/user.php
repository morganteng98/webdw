<?php  
include('header.php');
?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataUser</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
                    <tr>
				<td><?php echo $pecah['nama_pelanggan'];?></td>
				<td><?php echo $pecah['email_pelanggan'];?></td>
				<td><?php echo $pecah['nomer_telepon'];?></td>
				<td>
					<a href="" class="btn-danger btn">Hapus</a>
					<a href="" class="btn btn-warning btn">Ubah</a>
				</td>
                    </tr>
                <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<?php 
include('footer.php');
?>