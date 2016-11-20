<?php

include("conexion.php");

$cod = $_REQUEST['num_identificacion'];

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


if(isset($_POST['btenviar1'])){
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

$query = "UPDATE cliente  SET num_identificacion='$ide',
  tipo_id_clien='$tip', 
  pri_nombre_clien='$nom', 
  sec_nombre_cline='$nom2', 
  pri_apel_clien='$ape', 
  sec_apel_clien='$ape2', 
  fecha_nac_clien='$fec', 
  sexo_clien='$sex', 
  gen_clien='$gen', 
  correo_clien='$cor', 
  tel_clien='$tel', 
  movil_clien='$mov', 
  dir_clien='$dir', 
  suc_cliente='$suc', 
  obs_clien='$obs',
  Envio_info_Clien='$fin'  WHERE num_identificacion = '$cod'";



// conexion por variables ejecute query almacene datos
$resultado = $conexion->query($query);

// comprobar el resultado, comparar
if($resultado){
	echo "El articulo <br/> \n ";
	echo $cod;
	echo " Se ha modificado exitosamente ";
	print "<br/> \n";
	print "<br/> \n";
	//header('Location: catalogo.php');
	header('Location: modclientes.php');
}
else{
	echo "******** No se ha modificado el articulo ********** ";
}



?>