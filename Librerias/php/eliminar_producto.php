<?php 

include("conexion.php");


$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
mysqli_select_db($con,$db) or die("Error al entrar a la DB");

$id = $_POST['id'];
echo $id;

$sql = "DELETE  FROM producto Where idProducto='$id'";
//$result = mysqli_query($conexion,$q);
if (mysqli_query($con,$sql)==true) {
	
	echo'<script>
				alert("Proveedor eliminado");
				location.href="../../Pages/productos_ver.php";
				</script>';
}
else
{
	echo "GG";
}

		   
?>