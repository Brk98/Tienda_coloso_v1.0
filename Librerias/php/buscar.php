<?php
    $servername = "localhost";
    $username = "root";
  	$password = "123456789";
  	$dbname = "tienda";

	$conn = new mysqli($servername, $username, $password, $dbname);

    $salida = "";

    $query = "SELECT * FROM producto";

    if (isset($_POST['consulta'])) {
    	$q = $conn -> real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM producto WHERE marca_producto LIKE '%$q%' or nombre_producto LIKE '%$q%' or tipo LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='ttable2'>
    			<thead>
    				<tr id='titulo'>
    					<td>Nombre</td>
    					<td>Marca</td>
    					<td>Categoria</td>
    					<td>Precio</td>
    					<td>Select</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['nombre_producto']."</td>
    					<td>".$fila['marca_producto']."</td>
    					<td>".$fila['tipo']."</td>
    					<td>".$fila['precio_venta']."</td>
                        <td><input type='checkbox'></td>
    				</tr>
                    ";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;
?>