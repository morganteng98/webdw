<?php
    include "head.php";
    include ("function/koneksi1.php");
?>



    <body style="background-image: url(images/as.jpg);background-size: cover;
}
background-repeat: no-repeat;">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4" style="color:White">Daftar Sekarang</h5>
                        <form action="#" method="post">
                             <div class="form-group">
                                <label style="color:white">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="isi email" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2" style="color:white">Kata Sandi</label>
                                <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required="">
                            </div>

                            <div class="form-group">
                                <label style="color:white">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Isi Nama Lengkap">
                            </div>

                             <div class="form-group">
                                <label style="color:white">Nomer Telepon</label>
                                <input type="text"  name="telepon" class="form-control" placeholder="isi nomer telepon">
                            </div>

                             <div class="form-group">
                                <label style="color:white">Alamat</label>
                                <textarea type="text"  name="alamat" class="form-control" placeholder="isi alamat lengkap"></textarea> 
                            </div>
                        
                           <center> <button type="submit" class="btn btn-primary submit mb-4"
                            name="daftar">Daftar</button></center>
                            <p class="text-center pb-4" style="color:white">
                                Sudah mendaftar ? Silahkan anda ke 
                                <a href="login.php" style="color: blue"> Menu Login !</a>
                            </p>
                        </form>
                        <?php
          

            if (isset($_POST["daftar"])) {
                $email = $_POST["email"];
                $password = md5($_POST["password"]);
                $nama = $_POST["nama"]; 
                $telepon = $_POST["telepon"];
                $alamat = $_POST["alamat"];

                $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan = '$email' ");

                $yangcocok = $ambil->num_rows;

                if ($yangcocok==1)
                {
                  echo "<script>alert('email sudah digunakan');</script>";
                  echo "<script>location='daftar.php';</script>";
                }
                else
                {
                    $koneksi->query("INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan,nomer_telepon,alamat_pelanggan)
                        VALUES ('$email','$password','$nama','$telepon','$alamat') ");

                  echo "<script>alert('pendaftaran sukses dan silahkan login');</script>";
                  echo "<script>location='login.php'</script>";
                }
               
            }
        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>