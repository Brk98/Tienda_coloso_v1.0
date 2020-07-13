<?php 
include("conexion.php");
$nombre = $_POST['nombre_em'];
$rfc = $_POST['RFC_empleado'];
$direccion = $_POST['Dir_empleado'];
$telefono = $_POST['tel_empleado'];
$tipo = $_POST['correo'];
$id = $_POST['id'];



	$con = mysqli_connect($host,$user,$pw) or die("Problemas al conectar");
	mysqli_select_db($con,$db) or die("Error al entrar a la DB");
    $sql = "UPDATE  proveedor SET RFC_proveedor='$rfc', nombre_proveedor='$nombre', telefono_proveedor='$telefono', domicilio_proveedor='$direccion', correo_proveedor='$tipo' WHERE proveedor.idProveedor ='$id'";



	if(mysqli_query($con,$sql))
		{
			
    		echo'<script>
				alert("Proveedor modificado con exito");
				location.href="../../Pages/proveedores_ver.php";
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