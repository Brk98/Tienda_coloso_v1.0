<?php 
include("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$codigo = $_POST['cproducto'];
$cantidad = $_POST['cantidad'];
$pventa = $_POST['preciov'];
$pcompra = $_POST['precioc'];

	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    

	$sql = "SELECT * FROM producto WHERE idProducto = '$id'";
	$result = mysqli_query($con,$sql);
	$i = 0;
	while($mostrar = mysqli_fetch_array($result))
	{
		$i = $i + 1;
    }
	if($i>=1)
	{
		
				echo'<script>
					location.href="../../Pages/cambiar_datos_producto.php";
					</script>';
			
	}
	else
	{
		echo"<script>
		alert('El id $id no existe');
		location.href='../../Pages/productos_ver.php';
		</script>";
	}
			   
	?>