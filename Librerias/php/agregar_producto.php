<?php 
include("conexion.php");

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$codigo = $_POST['cproducto'];
$cantidad = $_POST['cantidad'];
$pventa = $_POST['preciov'];
$pcompra = $_POST['precioc'];


	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    $sql = "INSERT INTO producto  (codigo_producto, marca_producto, nombre_producto, cantidad, precio, tipo, precio_venta) ";
    $sql.= "VALUES ('".$codigo."','".$marca."','".$nombre."','".$cantidad."','".$pcompra."','".$categoria."','".$pventa."')";



	if(mysqli_query($con,$sql)==true)
		{
			
    		echo'<script>
				alert("Producto agregado con exito");
				location.href="../../Pages/Almacen.php";
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