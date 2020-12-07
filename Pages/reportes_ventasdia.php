<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}
include '../Librerias/php/conexions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reporte empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Librerias/diseño_funciones.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<nav class="menuCSS3">
			<ul>
				<li><a href="ventas.php">Ventas</a></li>
				<li><a href="almacen.php">Almacén</a>
				<li><a href="proveedores.php">Proveedores</a></li>
				<li><a href="usuarios.php">Usuarios</a></li>
				<li><a href="reportes.html">Reportes</a></li>
				<li><a href='../Librerias/php/salir.php'">Salir</a></li>
			</ul>
	</nav> 
	<div class="container">
		<h1>Reporte de usuarios</h1>
		<table class="ttable">
			<thead>
				<tr>
					<th>Numero de venta</th><th>Fecha y hora de venta</th><th>Total</th>
				</tr>
			</thead>
			<?php 
			$date = date("Ymd");

		    $date1 = date("Ymd")+1;

			 $q = "SELECT * FROM `ventas` WHERE fecha BETWEEN '".$date."' AND '".$date1."'";
			$result = mysqli_query($conexion,$q);
			while($mostrar = mysqli_fetch_array($result))
			{
			 echo'
			 <tr>
			 	<td> '.$mostrar['Id_venta'].'</td>
			 	<td> '.$mostrar['fecha'].'</td>
			 	<td> '.$mostrar['total'].'</td>
			 </tr>
			 ';
		    }
		    ?>
		</table>
		<br>
		<button onclick="location.href='reportes.php'">Regresar</button>
	</div>
</body>
</html>