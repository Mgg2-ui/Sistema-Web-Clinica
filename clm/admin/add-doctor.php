<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$docaddress=$_POST['clinicaddress'];
$docfees=$_POST['docfees'];
$doccontactno=$_POST['doccontact'];
$docemail=$_POST['docemail'];
$password=md5($_POST['npass']);
$sql=mysqli_query($con,"insert into doctor(specilization,doctorName,address,docFees,contactno,docEmail,password) values('$docspecialization','$docname','$docaddress','$docfees','$doccontactno','$docemail','$password')");
if($sql)
{
echo "<script>alert('La informacion del medico se agrego correctamente');</script>";
echo "<script>window.location.href ='Gestionar-medicos.php'</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Agregar Medicos</title>
		
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
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("La contrasena y el campo Confirmar contrasena no coinciden !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>


<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#docemail").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
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
									<h1 class="mainTitle">Admin | Agregar Medico</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Agregar Medico</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Agregar Medico</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="DoctorSpecialization">
															Medico Especializacion
															</label>
							<select name="Doctorspecialization" class="form-control" required="true">
																<option value="">Seleccione especialidad</option>
<?php $ret=mysqli_query($con,"select * from especializacion");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>

<div class="form-group">
															<label for="doctorname">
																Medico nombre
															</label>
					<input type="text" name="docname" class="form-control"  placeholder="Enter Doctor Name" required="true">
														</div>


<div class="form-group">
															<label for="address">
															Direccion de la clinica del Medico
															</label>
					<textarea name="clinicaddress" class="form-control"  placeholder="Enter Doctor Clinic Address" required="true"></textarea>
														</div>
<div class="form-group">
															<label for="fess">
															Horarios de consultoria medico
															</label>
					<input type="text" name="docfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
														</div>
	
<div class="form-group">
									<label for="fess">
																		Medico contacto no
															</label>
					<input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required="true">
														</div>

<div class="form-group">
									<label for="fess">
																Correo electronico del medico
															</label>
<input type="email" id="docemail" name="docemail" class="form-control"  placeholder="Enter Doctor Email id" required="true" onBlur="checkemailAvailability()">
<span id="email-availability-status"></span>
</div>



														
														<div class="form-group">
															<label for="exampleInputPassword1">
																 contrasena
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
														</div>
														
<div class="form-group">
															<label for="exampleInputPassword2">
																Confirmar contrasena
															</label>
									<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
														</div>
														
														
														
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Enviar
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
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
