<?php

require 'conexions.php';
session_start();

$user  = $_POST['usuario'];
$pw  = $_POST['password'];



$q = "SELECT COUNT(*) as contar, nombre_empleado FROM empleado WHERE usuario = '$user' and password = '$pw'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);


if ($array['contar']>0) 
{
	$_SESSION['username'] = $user;
	header("location: ../../Pages/menu.php");
	echo $array['contar'];
}
else
{
	echo'<script type="text/javascript">
    alert("Error usuario o contraseña incorrecta");
    window.location.href="index.php";
    javascript:history.back(1);
    </script>';
}

?>
