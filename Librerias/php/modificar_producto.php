<?php 
include("conexion.php");

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$codigo = $_POST['cproducto'];
$cantidad = $_POST['cantidad'];
$pventa = $_POST['preciov'];
$pcompra = $_POST['precioc'];
$id = $_POST['id'];


	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    $sql = "UPDATE  producto SET codigo_producto='$codigo', marca_producto='$marca', nombre_producto='$nombre', cantidad='$cantidad', precio='$pcompra', tipo='$categoria', precio_venta='$pcompra' WHERE producto.idProducto ='$id'";



	if(mysqli_query($con,$sql))
		{
			
    		echo'<script>
				alert("Producto modificado con exito");
				location.href="../../Pages/productos_ver.php";
				</script>';
		}
		

else
{
	echo'<script type="text/javascript">
    alert("Error no coinciden las contraseñas");
    window.location.href="index.php";
    javascript:history.back(1);
    </script>';
}
?> 