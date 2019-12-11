<!--<?php include"function/koneksi.php"; ?>-->
<?php
	session_start();
	if(!empty($_SESSION ['nama'])){
	include "head.php";
	include "header_welcome.php";

}else{
	include "head.php";
	include "header.php";
}
?>
<body style="background-image: url(images/as.jpg);background-size: cover;>


<!-- main image slider container -->
<section class="slide-window">
	<div class="slide-wrapper" style="width:300%;">
		
	</div>
	

<!-- welcome -->
<section class="Welcome py-5">
	<div class="container py-sm-5">
		<div class="welcome-grids row" style="margin-top: 100px">
			
			           <img src="images/dev-team.jpg" align="center" alt="dev team" style="height: 320px;width: 600px;margin-top: -50px;margin-left: 300px">

			</table>

			<table align="center" style="margin-top: 30px;margin-left: 450px;font-family: consolas;font-size: 18px;color:white">
		<tr>
			<td style="text-align: center;">Tim Pengembang</td>
		</tr>
		<tr>
			<td>Arif Adi K</td>
			<td>E41172008</td>

		</tr>
		<tr>
			<td>Morgan Ardianto</td>
			<td>E41172126</td>
		</tr>
		<tr>
			<td>Muhammad Hadana S. &nbsp</td>
			<td>E41172152</td>
		</tr>
		<tr>
			<td>Sandistya Diski A</td>
			<td>E41172079</td>
		</tr>


	</table>
			</div>

		</div>	
</section>
<!-- welcome -->

