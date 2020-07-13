			<?php 
			include '../Librerias/php/conexions.php';

			$q = "SELECT * FROM empleado Where idEmpleado=1";
			$result = mysqli_query($conexion,$q);
			while($mostrar = mysqli_fetch_array($result))
			{
			 echo'
			 <tr>
			 	<td> '.$mostrar['idEmpleado'].'</td>
			 	<td> '.$mostrar['nombre_empleado'].'</td>
			 	<td> '.$mostrar['RFC_empleado'].'</td>
			 	<td> '.$mostrar['telefono_empleado'].'</td>
			 	<td> '.$mostrar['domicilio_empleado'].'</td>
			 	<td> '.$mostrar['usuario'].'</td>
			 </tr>
			 ';
		    }
		    ?>