<?php
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CLINICA LA MORENITA</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1700,
			        speed: 200
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.php" style="font-size: 50px;">CLINICA LA MORENITA</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						
						<li><a href="contacto.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
	
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
								
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/icon1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Pacientes</h3>
						  <p>Registrese y reserve una cita</p>
						  <div class="button"><span><a href="clm/paciente/user-login.php">Haga clic aqui</a></span></div>
				    </div>
				</div>	

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/icon2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Medicos</h3>
						
						  <div class="button"><span><a href="clm/medico/">Haga clic aqui</a></span></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/icon3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3> Administrador</h3>
						
						  <div class="button"><span><a href="clm/admin">Haga clic aqui</a></span></div>
				     </div>
				</div>			
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		<!--start-image-slider---->
		<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider-image0.jpg" alt=""></li>
					      <li><img src="images/slider-image0.jpg" alt=""></li>
					      <li><img src="images/slider-image0.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
			
		   
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

