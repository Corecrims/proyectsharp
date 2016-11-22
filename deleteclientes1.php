<?php

include("conexion.php");

$cod = $_REQUEST['num_identificacion'];



$query = "DELETE FROM cliente WHERE num_identificacion = '$cod'";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Cliente Eliminado <br/> \n ";
	echo $cod;
	echo " Se ha eliminado ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: eliminoclientes.php');
	echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}



?>