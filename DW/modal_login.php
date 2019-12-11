    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Masuk</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Nama Pengguna</label>
                                <input type="text" name="username" class="form-control" placeholder="isi username">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" placeholder="isi kata sandi">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary submit mb-4">Masuk</button>
                            <p class="text-center pb-10">
                               <a href="modal_daftar" data-toggle="modal" data-target="#exampleModalCenter2">
                                <button class="btn btn-primary submit mb-4"><i class="fas fa-user"></i>silahkan daftar !</a></button>

                            </p>
                        </form>

                        <?php
        include ("function/koneksi.php");

        if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = md5($_POST['password']);

          $sqlselect = "SELECT * FROM user WHERE username='$username' AND password='$password'";
          $result = mysqli_query($connection, $sqlselect);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          if (mysqli_num_rows($result) == 1) {
            session_start(); // mengaktifkan SESSION
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];

            header("location: welcome.php");

            }else {
                echo "<div class='alert alert-danger' role='alert'>Login Gagal!! Periksa kembali username password anda</div>";
            }

          mysqli_close($connection);
        }

      ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--//Login-->
