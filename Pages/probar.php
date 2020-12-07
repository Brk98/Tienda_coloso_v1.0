<?php 
include("../Librerias/php/conexion.php");
   //Extraer valor de variables
	$can = $_POST["can"];
	$chk = $_POST["chk"];
	$precio = $_POST["precio"];
	
	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
	
	$tiempo = date("Y-m-d H:i:s");
	$total = 0;
	$c = 0;
	for($i=0;$i<count($can);$i++)
		if($chk[$i] !=NULL)
			$c++;
	if($c>0)
	{
		for($i=0;$i<count($can);$i++)
	{
		$total += $precio[$i]*$can[$i];
	}
	$sql = "INSERT INTO `ventas` (`Id_venta`, `fecha`, `total`) VALUES (NULL,'".$tiempo."','".$total."')";
	mysqli_query($con,$sql);
	 $q = "SELECT * FROM `ventas`";
	$result = mysqli_query($con,$q);
	$id =0;
	while($mostrar = mysqli_fetch_array($result))
	{
		
		if($mostrar["fecha"]==$tiempo)
		{
			$id = $mostrar["Id_venta"];
			break;
		}
		
	}

	for($i=0;$i<count($can);$i++)
	{
		$total += $precio[$i];
		$sql = "INSERT INTO `detalle_venta` (`Venta_idVenta`, `Producto_idProducto`, `cantidad`, `precio`) VALUES ('".$id."','".$chk[$i]."','".$can[$i]."','".$precio[$i]."')";
		if($chk[$i] !=NULL)
		mysqli_query($con,$sql);
	}
	echo'<script type="text/javascript">
    alert("Venta realizada");
    javascript:history.back(1);
    </script>';
	}
	else
	{
		echo'<script type="text/javascript">
    alert("Seleccione algun producto");
    javascript:history.back(1);
    </script>';
	}
	


?> 

