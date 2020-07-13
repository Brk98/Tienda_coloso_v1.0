<?php 
include("conexion.php");
$pw1 = $_POST['contra1'];
$pw2 = $_POST['contra2'];
$nombre = $_POST['nombre_em'];
$rfc = $_POST['RFC_empleado'];
$direccion = $_POST['Dir_empleado'];
$telefono = $_POST['tel_empleado'];
$tipo = $_POST['tipou'];

if (strcmp($pw1, $pw2) === 0) 
{

	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    $sql = "INSERT INTO empleado  (RFC_empleado, nombre_empleado, telefono_empleado, domicilio_empleado, usuario, tipo, password) ";
    $sql.= "VALUES ('".$rfc."','".$nombre."','".$telefono."','".$direccion."','".$telefono."','".$tipo."','".$pw1."')";



	if(mysqli_query($con,$sql)==true)
		{
			
    		echo'<script>
				alert("Usuario agregado con exito");
				location.href="../../index.php";
				</script>';
		}
		

}else
{
	echo'<script type="text/javascript">
    alert("Error no coinciden las contraseñas");
    window.location.href="index.php";
    javascript:history.back(1);
    </script>';
}
?> 