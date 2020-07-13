<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	
}
else
{
	header("location: Pages/menu.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda el coloso</title>
	<link rel="stylesheet" type="text/css" href="Librerias/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<header>
		<img src="Images/Logo.png">
	</header>
		
	
	<div class="cuadro">
		
		<div class="titulo">
			Login
		</div>
		<div class="">
		<form action="Librerias/php/loguear.php" method="POST" class="cuadro3">
			<input type="text" name="usuario" placeholder="Usuario" class="user">
			<input type="password" name="password" placeholder="Contraseña" class="pass">
		</div>
			<div class="botones">
				<input type="submit" value="Ingresar" class="myButton">
				<a href="Pages/registro.html" class="myButton">Registrar</a>
			</div>
		</form>
	</div>
</body>
</html>