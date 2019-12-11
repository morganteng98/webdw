
<!-- footer -->
<footer class="footer py-5">
	<div class="container py-sm-4">
	<h3 class="mb-2 pb-1 w3f_title" style="text-align: center">Kategori</h3>
			
		<div class="row">
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
				<ul class="list-agileits">
					<ul class="list-agileits">
					<li>
						<a href="kategori_aki.php">Aki</a>
					</li>
					<li>
						<a href="kategori_baher.php">Baher</a>
					</li>
					<li>
						<a href="kategori_ban.php">Ban</a>
					</li>
					<li>
						<a href="kategori_bearing.php">Bearing</a>
					</li>
					<li>
						<a href="kategori_busi.php">Busi</a>
					</li>
					<li>
						<a href="kategori_cakram.php">Cakram</a>
					</li>
					<li>
						<a href="kategori_dinamo.php">Dinamo</a>
					</li>
					
				</ul>
				</ul>
			
			</div>
<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
				<ul class="list-agileits">
					<ul class="list-agileits">
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
				</ul>
				</ul>
			
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
				<ul class="list-agileits">
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
				</ul>
			
			</div> 	

<div class="col-lg-3 col-md-6 mt-lg-0 mt-5" >
				
			<ul class="list-agileits">
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="#">X</a>
					</li>
					<li>
						<a href="kategori_radiator.php">Radiator</a>
					</li>
					<li>
						<a href="kategori_spion.php">Spion</a>
					</li>
					<li>
						<a href="toko.php">Semua Kategori</a>
					</li>
				</ul>
			</div>

						

			

			
	</div>
	<!-- //footer bottom -->
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="cpy-right text-center">
	<p>© 2018  Bengkel OnlineAll rights reserved | Design by kelompok 4
	</p>
</div>
<!-- //copyright -->

	<!--model-forms-->

    <?php 
    include "modal_login.php";
    include "modal_daftar.php"; ?>
    <!--//model-form-->

	<!-- video Modal Popup -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<iframe src="https://player.vimeo.com/video/33531612"></iframe>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //video Model Popup -->

	<?php include "modal_vertikal.php" ?>

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- search overlay -->
    <script src="js/modernizr-2.6.2.min.js"></script> 
	<!-- //search overlay -->
	
	<!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

	<!-- banner slider js -->
	<script src="js/minimal-slider.js"></script>
	<!-- //banner slider js -->

	<!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 100,
				time: 1000
			});
		});
	</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>