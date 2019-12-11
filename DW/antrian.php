<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header.php";

	 if (!isset($_SESSION["user"])) 
    {
      echo "<script>alert('silahakan login');</script>";
      echo "<script>location='login.php';</script>";
    }


 ?>
 <?php
  $queryselect = "SELECT * FROM antrian";
  $resultselect = mysqli_query($koneksi,$queryselect);
?>

<body>
	

<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<h1>Daftar Antrian</h1>
			<hr>
			<div>
			<button type="button" class="btn  btn-primary active" 
    				data-toggle="modal" data-target="#modaltambah">Masukkan Data Kendaraan</button>
    		<?php
			 include("tambah_antrian.php");  // Menambahkan data buku
		    ?>
    	    </div>
			<hr>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No Antrian</th>
						<th>Plat nomer</th>
						<th>Warna Kendaraan</th>
						<th>Tanggal</th>

					</tr>
				</thead>
				<tbody>
				<?php $nomor=1; $nomor>2; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM antrian"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $pecah['plat_nomer'];?></td>
				<td><?php echo $pecah['warna_kendaraan'];?></td>
				<td><?php echo $pecah['waktu'];?></td>
			</tr>
			<?php $nomor++; ?>
			<?php }?>
		</tbody>
				</tbody>
			</table>
 				
			</div>	
		</div>	
</section>



<?php include "footer.php" ?>