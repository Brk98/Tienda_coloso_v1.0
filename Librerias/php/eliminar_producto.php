<?php 

include("conexion.php");


$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
mysqli_select_db($con,$db) or die("Error al entrar a la DB");

$id = $_POST['id'];
echo $id;

$sql = "SELECT * FROM producto WHERE idProducto = '$id'";
$result = mysqli_query($con,$sql);
$i = 0;
while($mostrar = mysqli_fetch_array($result))
{
	$i = $i + 1;
}
if($i>=1)
{
	$sql = "DELETE  FROM producto Where idProducto='$id'";
	//$result = mysqli_query($conexion,$q);
	if (mysqli_query($con,$sql)==true) {
		
		echo'<script>
			alert("Proveedor eliminado");
			location.href="../../Pages/productos_ver.php";
			</script>';
}
}
else
{
	echo"<script>
	alert('El id $id no existe');
	location.href='../../Pages/productos_ver.php';
	</script>";
}
		   
?>