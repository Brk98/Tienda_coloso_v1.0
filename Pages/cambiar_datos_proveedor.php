<?php



session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}
include '../Librerias/php/conexions.php';

$id = $_POST['id'];
echo $id;

$sql = "SELECT *  FROM proveedor Where idProveedor='$id'";
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
			<form action="../Librerias/php/modificar_proveedor.php" method="POST" name="form">
					<tr>
					<td><label for="fname">ID:</label></td>
					<td><input type="text" id="nombre_empleado" name="id" title="Ingresar nombre" required value="'.$id.'"></td>
				</tr>
				<tr>
					<td><label for="fname">Nombre empleado:</label></td>
					<td><input type="text" id="nombre_empleado" name="nombre_em" title="Ingresar nombre" required value="'.$mostrar['nombre_proveedor'].'"></td>
				</tr>
				<tr>
					<td><label for="fname">Telefono:</label></td>
					<td><input type="tel" id="tel_empleado" name="tel_empleado" required value="'.$mostrar['telefono_proveedor'].'"></td>
				</tr>
				<tr>
					<td><label for="fname">RFC:</label></td>
					<td><input type="text" id="RFC_empleado" name="RFC_empleado" required value="'.$mostrar['RFC_proveedor'].'""></td>
				</tr>
				<tr>
					<td><label for="fname">Direccion:</label></td>
					<td><input type="address" id="Dir_empleado" name="Dir_empleado" required value="'.$mostrar['domicilio_proveedor'].'""></td>
				</tr>
				<tr>
					<td><label for="fname">Credito:</label></td>
					<td><input type="address" id="Dir_empleado" name="credito" required value="'.$mostrar['correo_proveedor'].'""></td>
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