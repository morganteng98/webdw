<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("member/_parsial/head.php") ?>

</head>

<body>

  <!-- Navigation -->
  <?php $this->load->view("member/_parsial/navbar.php") ?>

  <!-- Login -->
  <?php $this->load->view("member/_parsial/login.php") ?>

  <!-- Daftar -->
  <?php $this->load->view("member/_parsial/daftar.php") ?>
  
  <div class="container">
    <div>
      <br>
      <br>
    </div>
      <div class="row col-lg-9">
          <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h5>$24.99</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  </div>
                </div>
          </div>
          <div>
            <h2 class="card-title">
                <a href="#">Item Three</a>
            </h>
            <h4>$24.99</h4>
            <h3>
              Jumlah  
            </h3>
            <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <button class="btn btn-navbar" type="submit">
                  <b>-</b>
                </button>
                <input class="form-control form-control-navbar" type="text" placeholder="1" aria-label="1">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <b>+</b>
                </button>
                </div>
              </div>
            </form>
            <h4>
              Total 
            </h4>
            <h3>$#####</h3>
            <div>
              <button class="btn btn-navbar" type="submit">
                  <a href="toko.html">
                    <b>Beli</b>
                  </a>
              </button>
              <button class="btn btn-navbar" type="submit">
                  <a href="toko.html">
                    <b>Batal</b>
                  </a>
              </button>
            </div>
          </div>
        </div>
      <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Gambar</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Barang</th>
                  <th>Gambar</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah</th>
                  <th>Total</th>
                </tr>
                </tfoot>
              </table>
            </div>
      <!-- /.col-lg-9 -->
   </div>

  <!-- Footer -->
  <?php $this->load->view("member/_parsial/footer.php") ?>

  <!-- Bootstrap core JavaScript -->
  <?php $this->load->view("member/_parsial/body.php") ?>

</body>

</html>
