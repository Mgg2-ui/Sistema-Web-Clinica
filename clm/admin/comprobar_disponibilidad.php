<?php 
require_once("include/config.php");
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	
		$result =mysqli_query($con,"SELECT docEmail FROM doctor WHERE docEmail='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Ya existe el correo electronico .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Correo electronico disponible para registro .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
