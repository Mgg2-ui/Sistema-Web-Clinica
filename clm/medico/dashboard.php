<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MEDICO  | BIENVENIDO AL SISTEMA</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="admin_lite/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin_lite/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="admin_lite/themify-icons/themify-icons.min.css">
		<link href="admin_lite/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="admin_lite/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="admin_lite/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="admin_lite/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="admin_lite/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="admin_lite/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="admin_lite/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Medico | Bienvenidos</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Usuarios</span>
									</li>
									<li class="active">
										<span>Bienvenidos</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Mi perfil</h2>
											
											<p class="links cl-effect-1">
												<a href="Editar perfil.php">
												Actualizacion del perfil
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Mis citas</h2>
										
											<p class="cl-effect-1">
												<a href="historial de citas.php">
													
														Ver historial de citas
												</a>
											</p>
										</div>
									</div>
								</div>
								
							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="admin_lite/jquery/jquery.min.js"></script>
		<script src="admin_lite/bootstrap/js/bootstrap.min.js"></script>
		<script src="admin_lite/modernizr/modernizr.js"></script>
		<script src="admin_lite/jquery-cookie/jquery.cookie.js"></script>
		<script src="admin_lite/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="admin_lite/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="admin_lite/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="admin_lite/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="admin_lite/autosize/autosize.min.js"></script>
		<script src="admin_lite/selectFx/classie.js"></script>
		<script src="admin_lite/selectFx/selectFx.js"></script>
		<script src="admin_lite/select2/select2.min.js"></script>
		<script src="admin_lite/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="admin_lite/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
