<?php  include 'head.php'  ?>

  <body style="background-image: url(images/meme.jpg);background-size: cover;
background-repeat: no-repeat;">
<!-- Membuat backround tetep -->
    <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content" style="margin-top: 70px">

                <div class="modal-body" style="background-color: black">

                    <div class="login px-4 mx-auto mw-100" style="color:white">
                        <h2 class="text-center mb-4" style="color:">Menu Login</h2>
                        <form class="form-signin" method="post">
                            <div class="form-group">
                                <label class="mb-2" style="color:white">Nama Pengguna</label>
                                <input type="text" name="username" class="form-control" placeholder="Email Anda">
                            </div>
                            <div class="form-group">
                                <label class="mb-2" style="color:white">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary submit mb-4">Masuk</button>
                            <p class="text-center pb-10">
                              Belum punya akun ? Silahkan anda daftar 
                               <a href="daftar.php" style="color:#007bff">disini</a></button>
                            </p>
                        </form>
                       <?php
        include ("function/koneksi1.php");

        if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = md5($_POST['password']);

          $sqlselect = "SELECT * FROM pelanggan WHERE email_pelanggan='$username' AND password_pelanggan='$password'";
          $result = mysqli_query($koneksi, $sqlselect);
          $akun = mysqli_fetch_array($result, MYSQLI_ASSOC);

          if (mysqli_num_rows($result) == 1) 
          {
            session_start(); // mengaktifkan SESSION
            $_SESSION['user'] = $akun;
            $_SESSION['nama'] = $akun['nama_pelanggan'];

          
            
            if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"])) 
            
            {
             echo "<script>location='checkout.php';</script>";
            }
            else
            {
              echo "<script>location='index.php';</script>";
            }

          }
          else 
          {
                echo "<div class='alert alert-danger' role='alert'>Login Gagal!! Periksa kembali username password anda</div>";
          
          }

          mysqli_close($koneksi);
          }

      ?>
                    </div>
                </div>

            </div>
        </div>
      <hr>
    <footer>
        <p align="center">DW LOGIN USER &copy; 2019</p>
    </footer>

    </div> 
  </body>