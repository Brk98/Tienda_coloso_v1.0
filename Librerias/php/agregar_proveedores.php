<?php 
include("conexion.php");

$nombre = $_POST['nombre'];
$rfc = $_POST['rfc'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$credito = $_POST['credito'];



	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    $sql = "INSERT INTO proveedor  (RFC_proveedor, nombre_proveedor, telefono_proveedor, domicilio_proveedor, correo_proveedor) ";
    $sql.= "VALUES ('".$rfc."','".$nombre."','".$telefono."','".$direccion."','".$credito."')";



	if(mysqli_query($con,$sql)==true)
		{
			
    		echo'<script>
				alert("Proveedor agregado con exito");
				location.href="../../Pages/proveedores.php";
				</script>';
		
		

}else
{
	echo'<script type="text/javascript">
    alert("Error no coinciden las contraseñas");
    window.location.href="index.php";
    javascript:history.back(1);
    </script>';
}
?> 