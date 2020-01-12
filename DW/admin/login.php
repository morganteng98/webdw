<?php 
// skrip koneksi
session_start();
$koneksi = new mysqli("localhost","root","","belajar");
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Free Bootstrap Admin Template : haha</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<link href="assets/css/custom.css" rel="stylesheet" />
	
<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	
	<link rel="stylesheet" type="text/css" href="styles_login.css">
	<!--Custom styles-->
	

</head>
<body">
		

	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height: 270px;margin-top: auto;margin-bottom: auto;width: 300px">
			<div class="card-header" style="text-align: center;">
				<h3 style="color:black">
					Masuk
				</h3>
				
				
			</div>
			<div class="card-body">

			<form role="form" method="post">
					<div class="form-bg">
						
					<div class="input-group form-group" style="height: 30px">
						<div class="input-group-prepend">
							<span class="input-group-addon"><i class="fa fa-user"  ></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nama Pengguna" name="user" style="height: 30px;font-size: 13px">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Kata Sandi" name="pass" style="height: 30px;font-size: 13px">
					</div>
					<div class="row align-items-center remember" >
						<h4 style="color:black;margin-left: 10px">Silahkan Anda Masuk</h4>
					</div>
						<?php 
							if (isset($_POST['login']))  
						{
						$ambil =	$koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]'");
							$yangcocok = $ambil->num_rows;
							if ($yangcocok==1) 
							{
								$_SESSION['admin'] = $ambil->fetch_assoc();
								echo "<div class='alert alert-info'>Login Sukses</div>";
								echo "<meta http-equiv='refresh' content='1;url=index.php'>";
							}
							else
							{
								echo "<div class='alert alert-danger' >Login GAGAL harap masukkan Nama Pengguna dan Kata Sandi</div>";
								echo "<meta http-equiv='refresh' content='2;url=login.php'>";
							}

						}
				 ?>

					</div>
			
			
			<div class="card-footer" align="center" style="height: 40px">
				<div class="form-group">
						<input type="submit" value="Masuk" name="login" ="login" class="btn float-right login_btn">
					</div>

			</div></form>
		</div>
	</div>
</div>

		</div>


		 <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
		<!-- JQUERY SCRIPTS -->
		<script src="assets/js/jquery-1.10.2.js"></script>
			<!-- BOOTSTRAP SCRIPTS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- METISMENU SCRIPTS -->
		<script src="assets/js/jquery.metisMenu.js"></script>
			<!-- CUSTOM SCRIPTS -->
		<script src="assets/js/custom.js"></script>
	 
</body>
</html>
