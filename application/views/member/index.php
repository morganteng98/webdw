<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("member/_parsial/head.php") ?>

</head>

<body>

  <!-- Navigation -->
  <?php $this->load->view("member/_parsial/navbar.php") ?>

  

  <!-- Login -->
  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Masuk</h4>
          <button type="close" class="btn btn-close" data-dimiss="modal">&times;</button>
        </div>
        <form method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label" for="username">Username</label>
              <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">reset</button>
            <input type="submit" class="btn btn-success" name="tambah" value="simpan">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Daftar -->
  <div id="daftar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Daftar</h4>
          <button type="close" class="btn btn-close" data-dimiss="modal">&times;</button>
        </div>
        <form method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label" for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="alamat">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="username">Username</label>
              <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">reset</button>
            <input type="submit" class="btn btn-success" name="tambah" value="simpan">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
      <div>
        
      </div>

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Toko</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-warehouse fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Penyewaan</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-music fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Studio</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->
   </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>
