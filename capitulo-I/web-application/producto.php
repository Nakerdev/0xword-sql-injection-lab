<?php
	
    include 'header.inc.php';

    //se indicó el producto, buscarlo
    if(isset($_GET["id"])){
        $sql = "select * from public.productos where id = " . $_GET["id"];

	$resultado = ejecutar_SQL($conexion, $sql);

        if(numero_filas($resultado) == 0){
	    echo "Referencia no encontrada";
	} else {
	    $fila = fila($resultado, 0);
	    echo "<h3>Datos sobre el producto:</h3>";
	    echo "<table border=1>";
	    echo "<tr><td>Referencia</td><td>Nombre</td><td>Precio</td>";
	    echo "<tr><td>" . $fila["referencia"] . "</td><td>" . $fila["nombre"] . "</td><td>" . $fila["precio"] . "</td></tr>";
	    echo "</table>";
	}
    }

    //Mostrar formulario "Buscar"
    echo '<h3>Buscar producto</h3>
	      <form method="GET" action="producto.php">
                    Buscar: <input type "text" id="id" name="id">
                    <input type="submit" value="Buscar">
             </form>';
?>
