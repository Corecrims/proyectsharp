<?php

include("conexion.php");

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

  $query = "INSERT INTO producto(	
  mod_prod, 
  img_prod,  
  nom_prod, 
  prec_prod, 
  talla_prod, 
  marca_prod, 
  tipo_prod, 
  desc_prod ) 
  VALUES (
  '$mod', '$img', '$nom', '$pre', '$tal','$marc', '$tip', '$desc')";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Insercion de Datos Correcta";
	echo "   ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: elements.php');
	
}
else{
	echo "No se pude Insertar nuevo Producto Casco";
}
}

?>