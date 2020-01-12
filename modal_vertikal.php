<?php include "function/koneksi.php"; ?>
				<?php
              $queryselect = "SELECT * FROM jadwal";
              $resultselect = mysqli_query($koneksi,$queryselect);
            ?>

<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalJadwal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><i class="fab fa-cloudversify"></i> Jadwal Bengkel</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<div class="modal-body text-center">
				<img src="images/modal1.jpg" class="img-fluid mb-3" alt="Modal Image" />
				<?php
			  while ($row=mysqli_fetch_array($resultselect)) {
			  ?>
				Untuk jadwal bengkel hari:<h5><?php echo $row['hari']; ?></h5>
				di buka pada jam:<h5><?php echo $row['jam_kerja']; ?></h5>
			<?php } ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->

<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalCara" tabindex="-1" role="dialog" aria-labelledby="exampleModalCara" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><i class="fab fa-cloudversify"></i> Cara Pembayaran</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<div class="modal-body">
				<img src="images/bg.jpg" class="img-fluid mb-3" alt="Modal Image" />
				Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
				ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->


<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalLain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLain" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><i class="fab fa-cloudversify"></i> Bengkel Lainya</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<div class="modal-body">
				<img src="images/bg.jpg" class="img-fluid mb-3" alt="Modal Image" />
				Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
				ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->