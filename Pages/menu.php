<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../Librerias/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<div class="conteiner">
		<div class="menu">
			<img class="menu_img" src="../Images/Logo.png">
			<div class="contenedor_menu">
				<div class="menu1">
					<button onclick="location.href='ventas.php'" style="background: url('../Images/vender.png');width: 150px;height:150px;background-size: 100%;" class="boton_menu"></button>
					<button onclick="location.href='almacen.php'" style="background: url('../Images/productos-congelados.png');width: 150px;height:150px;background-size: 100%;", class="boton_menu"></button>
					<button onclick="location.href='proveedores.php'" style="background: url('../Images/proveedor.png');width: 150px;height:150px;background-size: 100%;", class="boton_menu"></button>
				</div>
				<div class="menu2">
					<button onclick="location.href='usuarios.php'" style="background: url('../Images/usuario.png');width: 150px;height:150px;background-size: 100%;" class="boton_menu"></button>
					<button style="background: url('../Images/analisis.png');width: 150px;height:150px;background-size: 100%;", class="boton_menu"></button>
					<button onclick="location.href='../Librerias/php/salir.php'" style="background: url('../Images/cerrar-sesion.png');width: 150px;height:150px;background-size: 100%;", class="boton_menu"></button>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>