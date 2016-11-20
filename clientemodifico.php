
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modificando Cliente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
 <script type="text/javascript">
<!--
function confirmation() {
    if(confirm("     ATENCION !!   Esta por liminar eliminar este registro   ¿Continuar? "))
    {
        
		
		 if(confirm(" Presione Si para confirmar eliminacion del registro "))
    {
		
		return true;
	}
    }
	alert("Eliminacion Cancelada !! ")
    return false;
}
//-->
</script>
 
 <script type="text/javascript">
<!--
function confirmation1() {
    if(confirm(" Se va actualizar registro, si esta seguro presione Aceptar "))
        
    {
		
		return true;
	}
    
	alert("Eliminacion Cancelada !! ")
    return false;
}
//-->
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
	<link rel="stylesheet" href="css/stylemodi.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body >

	
	
	
	
	<?php
		
		include("conexion.php");
		$cod = $_REQUEST['num_identificacion'];
		$query = "SELECT * FROM cliente WHERE num_identificacion = '$cod'";
        $resultado = $conexion->query($query);
	    $row = $resultado->fetch_assoc();
				$sexo=$row['sexo_clien'];
				$envio=$row['Envio_info_Clien'];
				$asd= "email";
				$asd1="domicilio";
				$asd2="sms";

			
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
								 	<li class="active">
										<a href="#" class="fh5co-sub-ddown">Clientes...</a>
										<ul class="fh5co-sub-menu">
											<li><a href="findclientes.php">Buscar</a></li>
											<li><a href="right-sidebar.html">Registro Clientes</a></li>
											<li class="active" ><a href="modclientes.php">Modificar / Eliminar</a></li>
											<li><a href="listclientes.php">Lista De clientes</a></li>
										</ul>
									</li>
									
									<li>
										<a href="#" class="fh5co-sub-ddown">Productos...</a>
										<ul class="fh5co-sub-menu">
											<li><a href="left-sidebar.html">Agregar</a></li>
											<li><a href="#">Modificar / Eliminar</a></li>
											<li><a href="elements.php">Catalago Productos</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="elements.php">Productos</a></li>
							<li><a href="listclientes.php">Lista de Clientes</a></li>
						</ul>
					</nav>
					
					
					<a href="index.html" > <img src ="images/SHARP-1.png" width="90" height="70"></a></h3>
					
					

				</div>
			</header>
			
		
			
				

<br></br>

<br></br>
<br></br>	
							
							
								
<div class="content-w3ls">
	<form action="procesomodif.php?num_identificacion=<?php echo $row['num_identificacion']; ?>" method ="POST" enctype="multipart/form-data">
		<div class="form-wthree1 wthree w3-agileits agileits-w3layouts agile w3-agile">
			
			
			<div class="form-control"> 
				<label class="header">Numero Identificacion <span>:</span></label>
				<input type="text" id="firstname" disabled name="identificacion" placeholder="..." value="<?php echo $row['num_identificacion']; ?>" title="Por favor ingrese su primer nombre" required="" pattern="[0-9]{10}" >
			</div>
			
			
			<div class="form-control">	
				<label class="header">Tipo Identificacion <span>:</span></label>	
				<input class="lastname" name="tipo" id="lastname" list="listas3" placeholder="..." value="<?php echo $row['tipo_id_clien']; ?>"  type="text" required="" size="5" Title= "Seleccione un tipo de identificacion" >
   
  <datalist id="listas3">
   <option value="CC">
    <option value="ID" >
    <option value="CE" >
    
    </datalist> 
				
				
			</div>
			
			
			<div class="form-control"> 
				<label class="header">Primer Nombre <span>:</span></label>
				<input type="text" id="firstname" name="p1nombre" placeholder="..." value="<?php echo $row['pri_nombre_clien']; ?>" title="Por favor ingrese su primer nombre" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}" >
			</div>	
			
			<div class="form-control"> 
				<label class="header">Segundo nombre : <span>:</span></label>
				<input type="text" id="middlename" name="s2nombre" placeholder="..."  value="<?php echo $row['sec_nombre_cline']; ?>" title="Por favor ingrese su segundo nombre"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,40}">
			</div>
			
			<div class="form-control"> 
				<label class="header">Primer Apellido <span>:</span></label>
				<input type="text" id="lastname" name="1apellido" placeholder=".." value="<?php echo $row['pri_apel_clien']; ?>" title="Por favor ingrese su primer apellido" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}">
			</div>
			
			<div class="form-control"> 
				<label class="header">Segundo Apellido <span>:</span></label>
				<input type="text" id="lastname" name="2apellido" placeholder=".."  value="<?php echo $row['sec_apel_clien']; ?>" title="Por favor ingrese su segundo apellido"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,40}">
			</div>
			
			
			
			
		
		</div>
		
		
		
		
		<div class="form-wthree2 wthree w3-agileits agileits-w3layouts agile w3-agile">
		
			
			<div class="form-control"> 
				<label class="header">Fecha Nacimiento <span>:</span></label>
				<input type="date" id="lastname" name="fecha" value="<?php echo $row['fecha_nac_clien']; ?>" min="1900-01-01"  max="1999-01-01" value="" size="10" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" ></input>
			</div>
			
			
			<div class="form-control">	
				<label class="header">Genero <span>:</span></label>	
				<input class="lastname" name="genero" id="lastname" list="listas1" placeholder="..." value="<?php echo $row['gen_clien']; ?>"  type="text"  size="5" Title= "Seleccione un tipo de identificacion" >
   
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
				          
          <input required type = "radio" id="lastname2"
                 name = "sexo"
                 id = "sizeSmall"
                value="f" <?php if($sexo =='f') print "checked=true" ?>
                  />
          <label id="identificador_input" class="css-checkbox" style="color: white;" value="" for = "sizeSmall"> F</label>
          <input type = "radio"
                 name = "sexo"
                 id = "sizeMed"
                value="m" <?php if($sexo =='m') print "checked=true"?> />
          <label class="css-label" style="color: white;" value="" for = "sizeMed"> M</label>
        </div>
			
			
			<div class="form-control">	
				<label class="header">Correo electronico <span>:</span></label>
				<input type="email" id="email" name="correo" placeholder="Mail@example.com"  value="<?php echo $row['correo_clien']; ?>" title="Please enter a Valid Email Address" required="">
			</div>
			
			<div class="form-control"> 
				<label class="header">Telefono fijo <span>:</span></label>
				  <input id="lastname" name="telefono" placeholder="Ingrese Numero"  value="<?php echo $row['tel_clien']; ?>"  class="textbox" type="text" maxlength="8" pattern="[0-9]{8}" title= "No se Permiten Simbolos o Numeros negativos"  >

			</div>
			
			
			<div class="form-control"> 
				<label class="header">Telefono movil <span>:</span></label>
				  <input id="lastname" name="movil" placeholder="Ingrese Numero cel.."  value="<?php echo $row['movil_clien']; ?>" class="textbox" type="text" maxlength="10" pattern="[0-9]{10}" title= "No se Permiten Simbolos o Numeros negativos" required="" >
                </div>
			
			
			
			
				
			<div class="form-control"> 
				<label class="header">Sucursal preferida  <span>:</span></label>
				
				<input name="sucursal" list="level1" id="lastname" placeholder="Escoja Sucursal" value="<?php echo $row['suc_cliente']; ?>" class="textbox" type="text" required="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}" >
   
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
			<textarea REQUIRED id="message1" name="direccion" rows="1" size="150" placeholder="ingrese direccion" value="<?php echo $row['pri_apel_clien']; ?>" title="Please enter Your Comments" ><?php echo $row['dir_clien']; ?></textarea>
			<div class="clear"></div>
		</div>
		<div class="form-control">
			<label class="header">Observaciones <span>:</span></label>
			<textarea id="message" name="observacion" placeholder="ingrese comentarios"  value="" title="Please enter Your Comments"><?php echo $row['obs_clien']; ?></textarea>
			<div class="clear"></div>
		</div>
        
        
       <!-- <div class="form-control"> 
				<label class="header">Envio Informacion  <span>:</span></label>
				<input type="text" list="tipo" id="lastname" name="recibir" placeholder="..." value="<?php echo $row['Envio_info_Clien']; ?>"   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,48}" >
			 <datalist id="tipo">
			  <option value="    " />
    <option value="email" />
    <option value="sms" />
    <option value="domicilio" />
    <option value="email domicilio sms" />
    </datalist>  
			
			
			</div>	-->
  


     <fieldset>
        <div class="form-control" >
				
				<legend id="lastname" class="form-control" style="color: white;">Recibir Informacion por:</legend>          
          <input type="checkbox" id="lastname2"
                 name = "chk1"
                 id = "sizeSmall"
                 value = "email" <?php if( strpos( $envio, $asd ) !== false ) print "checked=true" ?>
                  />
          <label id="identificador_input" class="css-checkbox" style="color: white;" for = "sizeSmall"> Correo Electronico. </label>
		   <input type="checkbox"
                 name = "chk2"
                 id = "sizeMed"
                 value = "domicilio" <?php if( strpos( $envio, $asd1 ) !== false ) print "checked=true" ?> /> 
          <label class="css-label" style="color: white;" for = "sizeMed"> Correspondencia Domicilio.</label>
		  <input type="checkbox"
                 name = "chk3"
                 id = "sizeMed"
                 value = "sms" <?php if( strpos( $envio, $asd2 ) !== false ) print "checked=true" ?> />
          <label class="css-label" style="color: white;" for = "sizeMed"> SMS Mensaje de texto movil.</label>
		   </div>
		   <div class="form-control" >
         
       
        </div>
		
		 <div class="form-control" >
          
       <input type="submit" class="register" value="Guardar" name="btenviar1" onClick="return confirmation1()">
	   <a class="register1" onClick="return confirmation()" href="deleteclientes.php?num_identificacion=<?php echo $row['num_identificacion']; ?>" >Eliminar este registro</a>
			<input type="button" class="reset" value="Cancelar" onClick="location.href='http://localhost/sharp/display/modclientes.php'">
			<div class="clear"></div>
        </div>
		 </fieldset> 
		<br>
        
	</form>
</div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
									
							<div>
				
			
							
<br>
				<footer id="fh5co-footer" style=" background: white;">
					<center><p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2016 <a href="#">Core</a>. Todos los derechos reservados <em>por</em> <a href="#" target="_blank">Sharp</a> <br> <a href="http://unsplash.com/" target="_blank"></a></small></p><center>
					<div class="container">
						
							
						<!-- <ul class="fh5co-social-icons">
							<!-- <li><a href="#"><i class="ti-twitter-alt"></i></a></li> -->
							<!-- <li><a href="#"><i class="ti-facebook"></i></a></li>-->
							
							<!-- <li><a href="https://co.linkedin.com/in/sharp-cascos-07980512b"><i class="ti-linkedin"></i></a></li> -->
						<!-- </ul> -->
						

<br>

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
