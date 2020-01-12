<!-- header -->
<div class="header-top">
	<header>
		<div class="top-head ml-lg-auto text-center">
			<div class="row mr-0">

				<div class="col-lg-4">

				</div>
				<!-- fungsi sercing (buka tutup) -->
				<div class="search col-md-2 col-4">
					<div class="overlay overlay-door">
						<button type="button" class="overlay-close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<form action="#" method="post" class="d-flex">
							<input class="form-control" type="search" placeholder="Cari disini..." required="">
							<button type="submit" class="btn btn-primary submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>
					<!-- fungsi sercing (buka tutup) -->
				</div>

			</div>
		</div>
		<div class="clearfix"></div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<h1>
					<a class="navbar-brand" href="index.php">
					<i class="fa fa-music"></i>  DWI DARA MUSIK</a>
				<!-- fab blue fas white -->
				</h1>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars"></i>
				</span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="toko.php">Toko</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="keranjang.php">Keranjang</a>
					</li>
					<?php if (isset($_SESSION["user"])):  ?>		
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<strong><?php echo $_SESSION['nama'];  ?></strong>
							<i class="fas fa-angle-down"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="Riwayat.php">Riwayat</a>
							<a class="dropdown-item" href="logout.php" title="">keluar</a>
						</div>

					</li>

					<?php else:  ?>
						<li class="nav-item">
						<a class="nav-link" href="login.php"><i class="fas fa-lock"></i> Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="daftar.php"><i class="fas fa-user"></i> Daftar</a>
					</li>

					<?php endif  ?>
				</ul>

			</div>
		</nav>
	</header>
</div>