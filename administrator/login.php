<?php 
// skrip koneksi
session_start();
$koneksi = new mysqli("localhost","root","","belajar");
 ?>

 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                 
					<form role="form" method="post">
					<div class="form-bg">
						
					<div class="input-group form-group" style="height: 30px">
						<div class="input-group-prepend">
							
						</div>
						<input type="text" class="form-control" placeholder="Nama Pengguna" name="user" style="height: 30px;font-size: 13px">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						
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
								echo "<meta http-equiv='refresh' content='5;url=login.php'>";
							}

						}
				 ?>

					</div>
			
			
			<div class="card-footer" align="center" style="height: 60px">
				<div class="form-group">
						<input type="submit" value="Masuk" name="login" ="login" class="btn center login_btn">
					</div>

			</div></form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
