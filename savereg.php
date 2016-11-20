<?php

include("conexion.php");

$ide = $_POST["identificacion"];
$tip = $_POST["tipo"];
$nom = $_POST["p1nombre"];
$nom2 = $_POST["s2nombre"];
$ape = $_POST["1apellido"];
$ape2 = $_POST["2apellido"];
$fec = $_POST["fecha"];
$sex = $_POST["sexo"];
$gen = $_POST["genero"];
$cor = $_POST["correo"];
$tel = $_POST["telefono"];
$mov = $_POST["movil"];
$dir = $_POST["direccion"];
$suc = $_POST["sucursal"];
$obs = $_POST["observacion"];



if(isset($_POST['btenviar'])){
	$arregloCHK = $_POST["chk1"];
	$arregloCHK1 = $_POST["chk2"];
	$arregloCHK2 = $_POST["chk3"];
	
	$num = count($arregloCHK);
	$num1 = count($arregloCHK1);
	$num2 = count($arregloCHK2);
	
	for ($n=0; $n<$num; $n++){
		
		echo $arregloCHK ;
	
}
for ($n=0; $n<$num1; $n++){
		
		echo $arregloCHK1 ;
	
}

for ($n=0; $n<$num2; $n++){
		
		echo $arregloCHK2 ;
	
}
$fin = $arregloCHK." ".$arregloCHK1." ".$arregloCHK2;
}
  $query = "INSERT INTO cliente(	num_identificacion, 
  tipo_id_clien, 
  pri_nombre_clien, 
  sec_nombre_cline, 
  pri_apel_clien, 
  sec_apel_clien, 
  fecha_nac_clien, 
  sexo_clien, 
  gen_clien, 
  correo_clien, 
  tel_clien, 
  movil_clien, 
  dir_clien, 
  suc_cliente, 
  obs_clien,
  Envio_info_Clien) VALUES (
  '$ide', '$tip', '$nom', '$nom2', '$ape', '$ape2','$fec', '$sex', '$gen','$cor', '$tel','$mov','$dir', '$suc','$obs','$fin')";


// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "Creacion exitosa de Cliente";
	echo "   ";
	print "<br/> \n";
	print "<br/> \n";
	header('Location: listclientes.php');
	echo $arregloCHK ;
}
else{
	echo "No se pude Insertar nuevo Articulo";
}





?>