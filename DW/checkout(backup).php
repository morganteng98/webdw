<?php
	session_start();
	include "function/koneksi1.php";
 ?>
<?php
    if (!isset($_SESSION["user"])) 
    {
    	echo "<script>alert('silahakan login');</script>";
    	echo "<script>location='login.php';</script>";
    }

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<title>BENGKOL</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords"/>
	<!--// Meta tag Keywords -->
    
	<!-- banner slider css -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<!-- //banner slider css -->

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>
<?php include "header.php"; ?>

<body>
	
<!-- welcome -->
<section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<h1>Keranjang</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Subharga</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1;?>
					<?php $totalbelanja=0;?>
					<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<?php
					$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah["harga_produk"]*$jumlah;
					?>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $pecah["nama_produk"]; ?></td>
						<td>Rp.<?php echo number_format($pecah["harga_produk"]); ?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp.<?php echo number_format($subharga); ?></td>
					</tr>
				<?php $nomor++;?>
				<?php $totalbelanja+=$subharga;?>
				<?php endforeach ?>
				</tbody>
				<tfoot>
						<th colspan="3"></th>
						<th colspan="1">Total Belanja</th>
						<th>Rp.<?php echo number_format($totalbelanja); ?></th>
				</tfoot>
			</table>

			</div>	
			<form method="post">
				<div class="row">

					<div class="col-md-4">
						<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION["user"]["nama_pelanggan"]?>" class="form-control"> 
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION["user"]["nomer_telepon"]?>" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
							<select class="form-control" name="id_ongkir" style="height: 34px;">
								<option value="">Pilih Ongkos Kirim</option>
								<?php $ambil = $koneksi->query("SELECT  * FROM ongkir");
								  while($perongkir = $ambil->fetch_assoc()) { ?>
								<option value="<?php echo $perongkir['id_ongkir'] ?>">
								<?php echo $perongkir['nama_kota'] ?> -
								Rp.<?php echo number_format($perongkir['tarif']) ?>
								<?php } ?>
								</option>

							</select>
					</div>
					<div class="col-md-10">
						<div class="form-group">
						<label>Alamat Lengkap</label>
						<textarea class="form-control" name="alamat_pengiriman" placeholder="Contoh: Jln.xxxx . Lingk.kramat. kodepos:12345"></textarea>
						</div>
					</div>
					
				</div>
			
				<button class="btn btn-primary" name="checkout">Checkout</button>
				<?php
				if (isset($_POST ['checkout'])) 
				{
					//INPUTAN DATA DARI SESSION ARRAY ARRAY APA,AN YA CARI TAU AJA :v
					$id_pelanggan = $_SESSION["user"]["id_pelanggan"];
					$id_ongkir = $_POST["id_ongkir"];
					$tanggal_pembelian = date("Y-m-d");
					$alamat_pengiriman = $_POST['alamat_pengiriman'];

					$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir'");
					$arrayongkir = $ambil->fetch_assoc();
					$nama_kota = $arrayongkir['nama_kota'];
					$tarif = $arrayongkir['tarif'];

					$total_pembelian = $totalbelanja + $tarif;
					//MENYIMPAN DATA KE TABEL PEMBELIAN SOURCE CODE ADA DI BAWAH INI
					$koneksi->query("INSERT INTO pembelian (id_pelanggan, id_ongkir, nama_kota, tarif,  tanggal_pembelian, total_pembelian, alamat_pengiriman)
					VALUES ('$id_pelanggan', '$id_ongkir', '$nama_kota', '$tarif', '$tanggal_pembelian', '$total_pembelian',
					 '$alamat_pengiriman') ");

					// Menyimpan DATA barang bedasarkan id yang telahdi beli

					$id_pembelian_baru = $koneksi->insert_id;

					foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
					{
						$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
						$perproduk = $ambil->fetch_assoc();

						$nama = $perproduk['nama_produk'];
						$harga = $perproduk['harga_produk'];
						$subharga = $perproduk['harga_produk']*$jumlah;

						
						$koneksi->query("INSERT INTO pembelian_produk (id_pembelian, id_produk, nama, harga, subharga, jumlah) 
							VALUES ('$id_pembelian_baru','$id_produk','$nama','$harga','$subharga','$jumlah') ");
					}

					//mengkosongkan NOTA
					unset($_SESSION["keranjang"]);

					//mendirek ke halaman nota

					echo "<script>alert(pembelian sukses);</script>";
					echo "<script>location='nota.php?id=$id_pembelian_baru';</script>";


				}

				 ?>
			</form>
			<pre><?php print_r($_SESSION["user"]) ?></pre>
			<pre><?php print_r($_SESSION["keranjang"]) ?></pre>
		</div>	
</section>
	



<?php include "footer.php" ?>