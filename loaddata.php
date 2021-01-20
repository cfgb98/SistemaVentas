<?php
    include_once "conexion.php";

	//se hace la conexión ha la base de datos
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die("Error");
	mysqli_select_db($con,DB_NAME) or die("Error en la BD");

	// Se lee el archivo xml desde la ruta FTP
	$fileXML = simplexml_load_file("pedidos.xml") or die("No se encuentra el archivo");
	//print_r($fileXML);

	//Se elabora el query para ir tomando los valores del xml e irlos insertando en la base de datos
	$query = "";
	foreach ($fileXML->children() as $valor) {
		$query= "INSERT INTO bd_pedidos (numpedido, fechapedido, idcliente, cliente, idproducto, producto, cantidad, importe) VALUES ('".$valor->numpedido."',CURRENT_TIMESTAMP,
			'".$valor->idcliente."','".$valor->cliente."',
			'".$valor->idproducto."','".$valor->producto."',

			'".$valor->cantidad."','".$valor->importe."');";
		mysqli_query($con,$query) or die("Error en el query");

	}
echo '<script>alert("Se han insertado los datos exitosamente en la base de datos.");</script>'; 
echo '<script>window.location="newone.php";</script>'; 

?>