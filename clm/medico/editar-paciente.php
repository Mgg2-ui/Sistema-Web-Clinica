<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	$eid=$_GET['editid'];
	$patname=$_POST['patname'];
$patcontact=$_POST['patcontact'];
$patemail=$_POST['patemail'];
$gender=$_POST['gender'];
$pataddress=$_POST['pataddress'];
$patage=$_POST['patage'];
$medhis=$_POST['medhis'];
$sql=mysqli_query($con,"update tblpaciente set PatientName='$patname',PatientContno='$patcontact',PatientEmail='$patemail',PatientGender='$gender',PatientAdd='$pataddress',PatientAge='$patage',PatientMedhis='$medhis' where ID='$eid'");
if($sql)
{
echo "<script>alert('La informacion del paciente se actualizo correctamente');</script>";
header('location:Gestionar paciente.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Medico | Agregar paciente</title>
		
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
						
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Paciente | Agregar paciente</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Paciente</span>
</li>
<li class="active">
<span>Agregar paciente</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Agregar paciente</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblpaciente where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="form-group">
<label for="doctorname">
Nombre del paciente
</label>
<input type="text" name="patname" class="form-control"  value="<?php  echo $row['PatientName'];?>" required="true">
</div>
<div class="form-group">
<label for="fess">
Contacto con el paciente no
</label>
<input type="text" name="patcontact" class="form-control"  value="<?php  echo $row['PatientContno'];?>" required="true" maxlength="10" pattern="[0-9]+">
</div>
<div class="form-group">
<label for="fess">

Correo electronico del paciente
</label>
<input type="email" id="patemail" name="patemail" class="form-control"  value="<?php  echo $row['PatientEmail'];?>" readonly='true'>
<span id="email-availability-status"></span>
</div>
<div class="form-group">
              <label class="control-label">Genero: </label>
              <?php  if($row['Gender']=="Female"){ ?>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Mujer
              <input type="radio" name="gender" id="gender" value="male">Masculino
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Masculino
              <input type="radio" name="gender" id="gender" value="Female">Mujer
              </label>
             <?php } ?>
            </div>
<div class="form-group">
<label for="address">
Direccion del paciente
</label>
<textarea name="pataddress" class="form-control" required="true"><?php  echo $row['PatientAdd'];?></textarea>
</div>
<div class="form-group">
<label for="fess">
 Edad del paciente
</label>
<input type="text" name="patage" class="form-control"  value="<?php  echo $row['PatientAge'];?>" required="true">
</div>
<div class="form-group">
<label for="fess">
Historial medico
</label>
<textarea type="text" name="medhis" class="form-control"  placeholder="Enter Patient Medical History(if any)" required="true"><?php  echo $row['PatientMedhis'];?></textarea>
</div>	
<div class="form-group">
<label for="fess">
 Fecha de creacion
</label>
<input type="text" class="form-control"  value="<?php  echo $row['CreationDate'];?>" readonly='true'>
</div>
<?php } ?>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Actualizar
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