<?php
	session_start();
	include "function/koneksi1.php";
	include "head.php";
	include "header_welcome.php";



	if (!isset($_SESSION["user"]) OR empty($_SESSION["user"]))
	{
		echo "<script>alert('silahkan login');</script>";
		echo "<script>location='login.php';</script>";
		exit();

	}



	$id_pem = $_GET["id"];
	$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian = '$id_pem'");
	$detail_pembayaran = $ambil->fetch_assoc();

	$id_pelanggan_beli = $detail_pembayaran["id_pelanggan"]; 
	$id_pelanggan_login = $_SESSION["user"]["id_pelanggan"];


	if ($id_pelanggan_login !== $id_pelanggan_beli)
	{
		echo "<script>alert('Jangan nakal');</script>";
		echo "<script>location='riwayat.php';</script>";
		exit();
	}

 ?>


 <section class="Welcome py-5">
	<div class="container">
		<div class="welcome" style="margin-top: 100px">
			<h2>Konfirmasi Pembayaran</h2>
			<h5 style="margin-bottom: 15px;">Kirim bukti pembayaran di bawah ini</h5>
			<div class="alert alert-info">Total tagihan anda sebesar <strong> Rp.<?php echo number_format($detail_pembayaran["total_pembelian"]);  ?></strong></div>

		 <form method="post" enctype="multipart/form-data">
                             <div class="form-group" >
                                <label><strong>Nama Penyetor</strong></label>
                                <input type="text" class="form-control" name="nama" placeholder="isi nama penyetor" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2"><strong>Bank</strong></label>
                                <input type="text" class="form-control" name="bank" placeholder="isi nama bank" required="">
                            </div>
                             <div class="form-group">
                                <label class="mb-2"><strong>Jumlah</strong></label>
                                <input type="number" class="form-control" name="jumlah" placeholder="isi jumlah nominal" min="1"required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2"><b>Foto Bukti</b></label>
                                <input type="file" class="form-control" name="bukti" placeholder="isi jumlah nominal" min="1"required="">
                            </div>
                            <p class="text-danger">Foto bukti harus JPG maksimal 4MB</p>
                           <button class="btn btn-primary" name="kirim">Kirim</button>

         </form>
		
			</div>	
		</div>	
</section>
<?php
	if (isset($_POST["kirim"]))
	{
		$namabukti = $_FILES["bukti"]["name"];
		$lokasibukti = $_FILES["bukti"]["tmp_name"];
		$namafiks = date("YmdHis").$namabukti;
		move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

		$nama = $_POST["nama"];
		$bank = $_POST["bank"];
		$jumlah = $_POST["jumlah"];
		$tanggal = date("Y-m-d");

		$koneksi->query("INSERT INTO pembayaran(id_pembelian,nama,bank,jumlah,tanggal,bukti_pembayaran)
			VALUES ('$id_pem','$nama','$bank','$jumlah','$tanggal','$namafiks') ");

		$koneksi->query("UPDATE pembelian SET status_pembelian = 'sudah kirim pembayaran' 
			WHERE id_pembelian = '$id_pem' ");



		echo "<script>alert('terimakasih sudah mengirimkan bukti pembayaran');</script>";
		echo "<script>location='riwayat.php';</script>";


	}
	
?>




 <?php include "footer.php" ?>