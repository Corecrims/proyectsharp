
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modificando Cliente</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <script type="text/javascript">
//<![CDATA[
// Definimos los campos que se han de verificar, contruimos un array con los id de los mismos
var campos = ["lastnameb"];
function activar() {
var c = 0;
for(var i in campos){
i = parseInt(i);
var cadenaL = document.getElementById(campos[i]).value;
// hacemos un trim previo a la verificación
cadenaL = cadenaL.replace(/^\s+/g,'').replace(/\s+$/g,'')
if(cadenaL != ""){
c++; // incrementamos c por cada campo que no está vacío
}
if(c == (i+1)){ // si c es = al total de los campos habilitamos el submit
document.getElementById('btn1').disabled = false;
}else{
document.getElementById('btn1').disabled = true;
}
}
}
 
// agregamos el evento onkeyup dinamicamente a los campos requeridos
window.onload = function(){
    for(var e in campos){
    var elem = document.getElementById(campos[e])
    if (elem.addEventListener){
    elem.addEventListener("keyup", function(){activar()}, false);
    }else{ // <IE9
        if (elem.attachEvent){
        elem.attachEvent ("onkeyup", function () {activar(elem)});
        }
    }
    }
}
 
//]]>
</script>
	
 

  	<!-- Facebook and Twitter integration -->
	

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400|Crimson+Text' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">

	

	<!-- Theme Style -->
	<link rel="stylesheet" href="css/styleformbus.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body >

	
	
	<?php

$row['num_identificacion'] = "";
$row['tipo_id_clien'] = "";
$row['pri_nombre_clien'] = "...";
$row['sec_nombre_cline'] = "...";
$row['pri_apel_clien']= "...";
$row['sec_apel_clien']= "...";
$row['fecha_nac_clien']= "";
$row['gen_clien']= "";
$sexo = "";
$row['correo_clien'] = "..";
$row['tel_clien']= "...";
$row['movil_clien'] = "...";
$row['suc_cliente']="...";
$row['obs_clien']="...";
$asd= "email";
				$asd1="domicilio";
				$asd2="sms";
$envio= "";				
$row['dir_clien']="...";

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$cod=$_POST["txtbus"];
	
	if($btn=="Buscar"){
		include("conexion.php");
	$cod = $_POST['txtbus'];
		$query = "SELECT * FROM cliente WHERE num_identificacion = '$cod'";
        $resultado = $conexion->query($query);
		$row = $resultado->fetch_assoc();
		$sexo=$row['sexo_clien'];
				$envio=$row['Envio_info_Clien'];
				$asd= "email";
				$asd1="domicilio";
				$asd2="sms";
		if ($row['num_identificacion']){
			
		}else{
			 print '<script language="JavaScript">'; 
             print 'alert(" No se han encontrado registros con ese codigo");'; 
            print '</script>'; 
		}
		 
		
	}
	
}
		?>
	
	
			<!-- START #fh5co-header -->
			<header id="fh5co-header-section" role="header" class="" >
				<div class="container">
					
					<!-- START #fh5co-logo -->
					<h3 
					
					
					
					
					id="fh5co-logo" class="pull-left">
					
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.html">Principal</a>
							</li>
							<li class="active">
								<a href="#" class="fh5co-sub-ddown">Menu</a>
								 <ul class="fh5co-sub-menu">
								 	<li class="active" >
										<a href="#" class="fh5co-sub-ddown">Gestion Clientes...&nbsp </a>
										<ul class="fh5co-sub-menu">
											<li class="active" ><a href="findclientes.php">Buscar</a></li>
											<li><a href="right-sidebar.html">Registrar </a></li>
											<li><a href="modclientes.php">Modificar </a></li>
											<li><a href="modclientes.php">Eliminar</a></li>
											<li><a href="listclientes.php">Lista General</a></li>
										</ul>
									</li>
									
									<li>
										<a href="#" class="fh5co-sub-ddown"><h5  > <font color="yellow">Productos...&nbsp</font> </h5></a>
										<ul class="fh5co-sub-menu">
											<li><a href="left-sidebar.html">Agregar Nuevo</a></li>
											<li><a href="#">Modificar</a></li>
											<li><a href="#">Eliminar</a></li>
											<li><a href="elements.php">Catalogo general</a></li>
										</ul>
									</li>
									
									
									<li>
										<a href="#" class="fh5co-sub-ddown">Nuevos Productos... &nbsp</a>
										<ul class="fh5co-sub-menu">
											<li><a href="Sondeo.php">Sondeo</a></li>
											<li><a href="son.php">Resultados</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="elements.php">Productos</a></li>
							<li class="active" ><a href="listclientes.php">Lista de Clientes</a></li>
						</ul>
					</nav>
					
					
				&nbsp &nbsp	<a href="index.html" > <img src ="images/SHARP-1.png" width="90" height="65"></a></h3>
				
					

				</div>
			</header>
			
			
				

<br></br>
<br>

<br>

				
							
								

	<form action="" method ="POST" enctype="multipart/form-data">
		
		
		
		
		<center><div class="form-control"> 
				<label class="header"> Ingrese Codigo <span>:</span></label>
				<input type="text" id="lastnameb" name="txtbus" placeholder="..." value="" title="Ingrese Codigo a Buscar" required="" pattern="[0-9]{10}" >
				<input  id="btn1" type="Submit" value="Buscar" name="btn1" disabled="disabled" >
			</div></center>
		
		<div class="content-w3ls">
		
		<div class="form-wthree1 wthree w3-agileits agileits-w3layouts agile w3-agile">
			
			
			<div class="form-control"> 
				<label class="header">Numero Identificacion <span>:</span></label>
				<input type="text" id="firstname" disabled name="identificacion" placeholder="..." onkeyup = "validar(this.form)" value="<?php echo $row['num_identificacion']; ?>" title="Por favor ingrese su primer nombre" required="" pattern="[0-9]{10}" >
			</div>
			
			
			<div class="form-control">	
				<label class="header">Tipo Identificacion <span>:</span></label>	
				<input class="lastname" name="tipo" id="lastname" disabled list="listas3" placeholder="..." value="<?php echo $row['tipo_id_clien']; ?>"  type="text" required="" size="5" Title= "Seleccione un tipo de identificacion" >
   
  <datalist id="listas3">
   <option value="CC">
    <option value="ID" >
    <option value="CE" >
    
    </datalist> 
				
				
			</div>
			
			
			<div class="form-control"> 
				<label class="header">Primer Nombre <span>:</span></label>
				<input type="text" id="firstname" name="p1nombre"  disabled placeholder="..." value="<?php echo $row['pri_nombre_clien']; ?>" title="Por favor ingrese su primer nombre" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}" >
			</div>	
			
			<div class="form-control"> 
				<label class="header">Segundo nombre : <span>:</span></label>
				<input type="text" id="middlename" name="s2nombre" disabled placeholder="..."  value="<?php echo $row['sec_nombre_cline']; ?>" title="Por favor ingrese su segundo nombre"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,40}">
			</div>
			
			<div class="form-control"> 
				<label class="header">Primer Apellido <span>:</span></label>
				<input type="text" id="lastname" name="1apellido"  disabled placeholder=".." value="<?php echo $row['pri_apel_clien']; ?>" title="Por favor ingrese su primer apellido" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}">
			</div>
			
			<div class="form-control"> 
				<label class="header">Segundo Apellido <span>:</span></label>
				<input type="text" id="lastname" name="2apellido" disabled placeholder=".."  value="<?php echo $row['sec_apel_clien']; ?>" title="Por favor ingrese su segundo apellido"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,40}">
			</div>
			
			
			
			
		
		</div>
		
		
		
		
		<div class="form-wthree2 wthree w3-agileits agileits-w3layouts agile w3-agile">
		
			
			<div class="form-control"> 
				<label class="header">Fecha Nacimiento <span>:</span></label>
				<input type="date" id="lastname" name="fecha" disabled value="<?php echo $row['fecha_nac_clien']; ?>" min="1900-01-01"  max="1999-01-01" value="" size="10" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" ></input>
			</div>
			
			
			<div class="form-control">	
				<label class="header">Genero <span>:</span></label>	
				<input class="lastname" name="genero" id="lastname" list="listas1" disabled placeholder="..." value="<?php echo $row['gen_clien']; ?>"  type="text"  size="5" Title= "Seleccione un tipo de identificacion" >
   
  <datalist id="listas1">
   <option value="Lesbico">
    <option value="Gay" >
    <option value="Hetero" >
    <option value="Bisexual" >
    <option value="Transexual" >
   <option value="Intersexual" >
    
    </datalist> 
				
				
			</div>	
			
			
			<div class="form-control" >
				<label class="header">Sexo<span>:</span></label>
				          
          <input required type = "radio" id="lastname2"   readonly
                 name = "sexo"
                 id = "sizeSmall"
                value="f" <?php if($sexo =='f') print "checked=true" ?>
                  />
          <label id="identificador_input" class="css-checkbox" style="color: white;" value="" for = "sizeSmall"> F</label>
          <input type = "radio" readonly
                 name = "sexo"
                 id = "sizeMed"
                value="m" <?php if($sexo =='m') print "checked=true"?> />
          <label class="css-label" style="color: white;" value="" for = "sizeMed"> M</label>
        </div>
			
			
			<div class="form-control">	
				<label class="header">Correo electronico <span>:</span></label>
				<input type="email" id="email" name="correo" disabled placeholder="Mail@example.com"  value="<?php echo $row['correo_clien']; ?>" title="Please enter a Valid Email Address" required="">
			</div>
			
			<div class="form-control"> 
				<label class="header">Telefono fijo <span>:</span></label>
				  <input id="lastname" name="telefono" disabled placeholder="Ingrese Numero"  value="<?php echo $row['tel_clien']; ?>"  class="textbox" type="text" maxlength="8" pattern="[0-9]{8}" title= "No se Permiten Simbolos o Numeros negativos"  >

			</div>
			
			
			<div class="form-control"> 
				<label class="header">Telefono movil <span>:</span></label>
				  <input id="lastname" name="movil" disabled placeholder="Ingrese Numero cel.."  value="<?php echo $row['movil_clien']; ?>" class="textbox" type="text" maxlength="10" pattern="[0-9]{10}" title= "No se Permiten Simbolos o Numeros negativos" required="" >
                </div>
			
			
			
			
				
			<div class="form-control"> 
				<label class="header">Sucursal preferida  <span>:</span></label>
				
				<input name="sucursal" list="level1" id="lastname" disabled placeholder="Escoja Sucursal" value="<?php echo $row['suc_cliente']; ?>" class="textbox" type="text" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}" >
   
  <datalist id="level1">
    <option value="Centro - Bogota" />
    <option value="valle - Cali" />
    <option value="Antioquia - Medellin" />
    <option value="Meta - Villavicencio" />
   <option value="Santander - Bucaramanga" />
    <option value="Boyaca- Tunja" />
    </datalist>  
				
				</div>
		
			
			
			
			
			
			
			
			
			
			
			
		</div>
		<div class="clear"></div>
		<div class="form-control">
			<label class="header">Direccion domicilio <span>:</span></label>
			<textarea REQUIRED id="message1" name="direccion" rows="1" size="150" disabled placeholder="ingrese direccion" value="<?php echo $row['pri_apel_clien']; ?>" title="Please enter Your Comments" ><?php echo $row['dir_clien']; ?></textarea>
			<div class="clear"></div>
		</div>
		<div class="form-control">
			<label class="header">Observaciones <span>:</span></label>
			<textarea id="message1" name="observacion" disabled placeholder="ingrese comentarios"  value="" title="Please enter Your Comments"><?php echo $row['obs_clien']; ?></textarea>
			<div class="clear"></div>
		</div>
        
        
     


     <fieldset>
        <div class="form-control" >
				
				<legend id="lastname" class="form-control" style="color: white;">Recibir Informacion por:</legend>          
          <input type="checkbox" id="lastname2" disabled
                 name = "chk1"
                 id = "sizeSmall"
                 value = "email" <?php if( strpos( $envio, $asd ) !== false ) print "checked=true" ?>
                  />
          <label id="identificador_input" class="css-checkbox" style="color: white;" for = "sizeSmall"> Correo Electronico. </label>
		   <input type="checkbox" disabled
                 name = "chk2"
                 id = "sizeMed"
                 value = "domicilio" <?php if( strpos( $envio, $asd1 ) !== false ) print "checked=true" ?> /> 
          <label class="css-label" style="color: white;" for = "sizeMed"> Correspondencia Domicilio.</label>
		  <input type="checkbox" disabled
                 name = "chk3"
                 id = "sizeMed"
                 value = "sms" <?php if( strpos( $envio, $asd2 ) !== false ) print "checked=true" ?> />
          <label class="css-label" style="color: white;" for = "sizeMed"> SMS Mensaje de texto movil.</label>
		   </div>
		   <div class="form-control" >
         
       
        </div>
		
		 <div class="form-control" >
          
           <input type="submit"  name="btn1" class="register" value="Modificar"   onClick="location.href='clientemodifico.php?num_identificacion=<?php echo $row['num_identificacion']; ?>'">
			<input type="button" class="reset" value="Cancelar" onClick="location.href='http://localhost/sharp/display/index.html'">
			
			
        </div>
		 </fieldset> 
		<br>
        
	</form>
</div>
							
							
							
							
				<footer id="fh5co-footer" style=" background: white;">
					<center><p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2016 <a href="#">Core</a>. Todos los derechos reservados <em>por</em> <a href="#" target="_blank">Sharp</a> <br> <a href="http://unsplash.com/" target="_blank"></a></small></p><center>
					<div class="container">
						
							
						<!-- <ul class="fh5co-social-icons">
							<!-- <li><a href="#"><i class="ti-twitter-alt"></i></a></li> -->
							<!-- <li><a href="#"><i class="ti-facebook"></i></a></li>-->
							
							<!-- <li><a href="https://co.linkedin.com/in/sharp-cascos-07980512b"><i class="ti-linkedin"></i></a></li> -->
						<!-- </ul> -->
						



					</div>
				</footer>			
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
									
						
			
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
