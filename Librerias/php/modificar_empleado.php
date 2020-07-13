<?php 
include("conexion.php");
$pw1 = $_POST['contra1'];
$pw2 = $_POST['contra2'];
$nombre = $_POST['nombre_em'];
$rfc = $_POST['RFC_empleado'];
$direccion = $_POST['Dir_empleado'];
$telefono = $_POST['tel_empleado'];
$tipo = $_POST['tipou'];
$id = $_POST['id'];

if (strcmp($pw1, $pw2) === 0) 
{

	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    $sql = "UPDATE  empleado SET RFC_empleado='$rfc', nombre_empleado='$nombre', telefono_empleado='$telefono', domicilio_empleado='$direccion', usuario='$telefono', tipo='$tipo', password='$pw1' WHERE empleado.idEmpleado ='$id'";



	if(mysqli_query($con,$sql))
		{
			
    		echo'<script>
				alert("Usuario modificado con exito");
				location.href="../../Pages/usuarios.php";
				</script>';
		}
		

}else
{
	echo'<script type="text/javascript">
    alert("Error no coinciden las contraseñas");
    window.location.href="index.php";
    javascript:history.back(1);
    </script>';
}
?> 