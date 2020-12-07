<?php
include("Checar_producto.php");


session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}
include '../Librerias/php/conexions.php';

$id = $_POST['id'];

$sql = "SELECT *  FROM producto Where idProducto='$id'";
$result = mysqli_query($conexion,$sql);
$mostrar = mysqli_fetch_array($result);


echo '
<!DOCTYPE html>
<html>
<head>
	<title>Cambiar datos</title>
	<link rel="stylesheet" type="text/css" href="../Librerias/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<div class="conteiner">

		<div class="registro">
			<div class="titulo">
				Cambio de datos
			</div>
			<table class="formulario">
			<form action="../Librerias/php/modificar_producto.php" method="POST" name="form">
					<tr>
					<td><label for="fname">ID:</label></td>
					<td><input type="text" id="nombre_empleado" name="id" title="Ingresar nombre" required value="'.$id.'"></td>
				</tr>
				<tr>
					<td><label for="fname">Nombre de producto:</label></td>
					<td><input type="text" id="nombre_empleado" name="nombre" title="Ingresar nombre" required value="'.$mostrar['nombre_producto'].'"></td>
				</tr>
				<tr>
					<td><label for="fname">Marca:</label></td>
					<td><input type="tel" id="tel_empleado" name="marca" required value="'.$mostrar['marca_producto'].'"></td>
				</tr>
				<tr>
					<td><label for="fname">Categoria:</label></td>
					<td><input type="text" id="RFC_empleado" name="categoria" required value="'.$mostrar['tipo'].'""></td>
				</tr>
				<tr>
					<td><label for="fname">Codigo producto:</label></td>
					<td><input type="address" id="Dir_empleado" name="cproducto" required value="'.$mostrar['codigo_producto'].'""></td>
				</tr>
				<tr>
					<td><label for="fname">Cantidad:</label></td>
					<td><input type="address" id="Dir_empleado" name="cantidad" required value="'.$mostrar['cantidad'].'""></td>
				</tr>
				<tr>
					<td><label for="fname">Precio venta:</label></td>
					<td><input type="address" id="Dir_empleado" name="preciov" required value="'.$mostrar['precio_venta'].'""></td>
				</tr>
				<tr>
					<td><label for="fname">Precio compra:</label></td>
					<td><input type="address" id="Dir_empleado" name="precioc" required value="'.$mostrar['precio'].'""></td>
				</tr>

				<tr>
					<td> <input type="submit" value="Cambiar" class="myButton"> </td>
					<td><a href="usuarios.php" class="myButton">Regresar</a></td>
				</tr>
			</table>
			</form>
		</div>

	</div>
</body>
</html>
';
?>