<?php

include("conexion.php");

$cod = $_REQUEST['cod_prod'];


$mod = $_POST["modelo"];
$nom = $_POST["nombre"];
$pre = $_POST["precio"];
$tal = $_POST["talla"];
$marc = $_POST["marca"];
$tip = $_POST["tipo"];
$desc = $_POST["descrip"];
$img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


if($pre <= 0){ 	
  echo "Revise los datos la cantidad no puede ser inferior a cero";
  print "<br/> \n";
	print "<br/> \n";
echo "<a href='index.html' ><img src ='images/SHARP-1.png' width='90' height='70'></a></h3>";
print "<br/> \n";
	echo "<br/> \n";
echo "<br/> \n";
echo "<br/> \n";	
echo "<input type='button' value='Atras' onClick='history.go(-1);'>"; 
}elseif($pre <0){
	echo "Revise los datos la precio no puede ser negativo";
	print "<br/> \n";
	print "<br/> \n";
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
}else {

$query = "UPDATE producto SET 
mod_prod='$mod',
  img_prod='$img',  
  nom_prod='$nom', 
  prec_prod='$pre', 
  talla_prod='$tal', 
  marca_prod='$marc', 
  tipo_prod='$tip',
  desc_prod='$desc' 
WHERE cod_prod = '$cod'";





// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "El articulo <br/> \n ";
	echo $cod;
	echo " Se ha modificado exitosamente el codigo". $cod;;
	print "<br/> \n";
	print "<br/> \n";
	//header('Location: catalogo.php');
	header('Location: modprod.php');
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}

}

?>