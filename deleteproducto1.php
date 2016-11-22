<?php

include("conexion.php");

$cod = $_REQUEST['cod_prod'];



$query = "DELETE FROM producto WHERE cod_prod = '$cod'";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Cliente Eliminado <br/> \n ";
	echo $cod;
	echo " Se ha eliminado ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: modprodelim.php');
	echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}



?>