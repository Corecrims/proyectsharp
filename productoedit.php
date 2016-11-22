

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html > <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Actualizacion  de Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


  	<!-- Facebook and Twitter integration -->
	
<script   src="https://code.jquery.com/jquery-1.11.0.js"   integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw="   crossorigin="anonymous"></script>

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Webfont -->
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstraplim.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">

	

	<!-- Theme Style -->
	<link rel="stylesheet" href="css/styleformprod2.css">

	
	<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("     ATENCION !!   Esta por eliminar este producto   ¿Continuar? "))
    {
        
		
		 if(confirm(" Presione Si para confirmar eliminacion  "))
    {
		alert("Eliminacion completado !! ")
		return true;
	}
    }
	alert("Eliminacion Cancelada !! ")
    return false;
}
//-->
</script>


<script>
    function nimrda(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "";
       especiales = " -! 1234567890 !#$%&/()=?¡/ ()=? ";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
	
	
	
	
	<script>
    function solonum(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "1234567890";
       especiales = "1234567890";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

	
<script>
function limpia(elemento)
{
elemento.value = "";
}

function verifica(elemento)
{
if(elemento.value == "")
elemento.value = "";
}
</script>
	
	
	
	<script>
function validar(frm) {
  if (frm.precio.value.length < 1) {
    alert('El precio no puede ser cmenor, verifique sus datos debe ser superior a 100');
    frm.precio.focus();
	 return false;
  }
   {
    if(confirm(" Se va ingresar nuevo producto casco, si esta seguro presione [ Aceptar ] "))
        
    {
		
		return true;
	}
    
	alert("Se ha cancelado insercion !! ")
    return false;
}
}
</script>
	
	<script>
function validar(frm) {
  if (frm.imagen.value.length < 1) {
    alert('La imagen aun no se ha seleccionado, revise el formulario');
    frm.imagen.focus();
	 return false;
  }
   {
    if(confirm(" Se va ingresar nuevo producto casco, si esta seguro presione [ Aceptar ] "))
        
    {
		
		return true;
	}
    
	alert("Se ha cancelado insercion !! ")
    return false;
}
}
</script>
	
	
	
	
	
	
	
	
	


	</head>
	<body class="inner-page">
	
	
	
	
	
	
	
	<?php
		
		include("conexion.php");
		$cod = $_REQUEST['cod_prod'];
		
		
		
		$query = "SELECT * FROM producto WHERE cod_prod = '$cod'";
        $resultado = $conexion->query($query);
	    $row = $resultado->fetch_assoc();
			
?>
	
	
	
	
	

	
	

			<!-- START #fh5co-header -->
			<header id="fh5co-header-section" role="header" class="" >
				<div class="container">
					
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.html">Principal</a>
							</li>
							<li class="active">
								<a href="#" class="fh5co-sub-ddown">Menu</a>
								 <ul class="fh5co-sub-menu">
								 
									
									<li>
										<a href="#" class="fh5co-sub-ddown"> <font color="yellow">Gestion Clientes ...&nbsp </font> </a>
										<ul class="fh5co-sub-menu">
											<li><a href="findclientes.php">Buscar  </a></li>
											<li><a href="right-sidebar.html">Registrar </a></li>
											<li><a href="modclientes.php">Modificar </a></li>
											<li><a href="eliminoclientes.php">Eliminar</a></li>
											<li><a href="listclientes.php">Lista General</a></li>
										</ul>
									</li>
									
									<li class="active" >
										<a href="#" class="fh5co-sub-ddown"><h5  > Productos ... </h5></a>
										<ul class="fh5co-sub-menu">
											<li class="active"><a href="#">Agregar Nuevo</a></li>
											<li><a href="modprod.php">Modificar</a></li>
											<li><a href="modprod.php">Eliminar</a></li>
											<li><a href="elements.php">Catalogo general </a></li>
										</ul>
									</li>
									
									
									<li>
										<a href="#" class="fh5co-sub-ddown">Nuevos Productos ... &nbsp <br></a>
										<ul class="fh5co-sub-menu">
											<li><a href="Sondeo.php">Sondeo</a></li>
											<li><a href="son.php">Resultados</a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li><a href="elements.php">Catalogo Productos</a></li>
							<li class="active" ><a href="listclientes.php">Lista de Clientes</a></li>
						</ul>
					</nav>
					<a href="index.html" > <img src ="images/SHARP-1.png" width="90" height="70"></a></h3>

				</div>
			</header>
			
			

		<br>
		<br>
		<br>
		<br>
		
	<center><h1><MARQUEE style=" background-color: rgba(72, 159, 221, 0.9);"> <font  color= "white"  > MODIFICACION Y ELIMINACION DE PRODUCTOS
                    
                </font></MARQUEE> 
                  </a></h1><center>	
				
				<section>

  <div class="jumbotron text-center"  style="background-color: rgba(100, 100, 128, 0.5); text-align:center; margin: 0 auto; text-align: left; " > 
  <form action="modifico_producto.php?cod_prod=<?php echo $row['cod_prod']; ?>" method ="POST" enctype="multipart/form-data" onsubmit = "return validar(this)">
  <table width="300" border="" background="" style="text-align:center; margin: 0 auto; text-align: left; ">
  <tbody>
    <tr>
      <td><div >
    <table width="893" height="342" border="0" >
      <tbody>
        <tr>
          <td width="226">&nbsp;</td>
          <td width="270">&nbsp;</td>
          
                  
	  </tr>
        <tr>
          <td><span class="label label-default" >Nombre</span></td>
          <td><input id="lastname"  type="Text"  name="nombre" REQUIRED placeholder="..." value="<?php echo $row['mod_prod']; ?>" pattern="[a-zA-Z0-9 -]{2,10}" maxlength="10" title= "No se permiten simbolos o números negativos"></td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
	    
	  </tr>
          <tr>
          <td><span class="label label-default" >Talla</span></td>
          <td><input onkeypress="return nimrda(event)" onclick="javascript: limpia(this);" id="lastname"  class="textbox" name="talla" list="listas1" placeholder="..."  type="text" required="" value="<?php echo $row['talla_prod']; ?>" Title= "Escoja talla de menor a mayor medida" pattern="[A-Z]{1-3}">
   
	 <datalist id="listas1">
	 
	  <option value="XXS">
	   <option value="XS" >
	   <option value="S" >
	   <option value="M" >
        <option value="L">
	   <option value="XL" >
	   <option value="XXL" >
    
    </datalist> </td>
          
        </tr>
       
  </div>
</div>
          
	  </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
	  </tr>
        <tr>
          <td><span class="label label-default" >Marca</span></td>
          <td><input onkeypress="return nimrda(event)" onclick="javascript: limpia(this);" id="lastname" type="Text" maxlength="15" name="marca" list="listas2" REQUIRED placeholder="..." value="<?php echo $row['marca_prod']; ?>" pattern="[a-zA-Z0-9 -]{3,15}" maxlength="15" title= "Ingrese la marca del cascos"></td>
	  
	  <datalist id="listas2">
	   <option value="AION" >
	  <option value="AVG">
	  <option value="BMW" >
	   <option value="KAWASAKI" >
	   <option value="MT" >
	    <option value="SHARK" >
		<option value="PREMIER" >
	   <option value="ZEUS" >
	  
	  
	</tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
	  </tr>
        <tr>
          <td><span class="label label-default" >Modelo</span></td>
          <td><input id="lastname" type="Text" maxlength="10" name="modelo" REQUIRED placeholder="EJE-123456"  value="<?php echo $row['mod_prod']; ?>" pattern="[A-Z0-9-]{3,10}"/></td>
	    
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
	    
        </tr>
        <tr>
 <td><span class="label label-default" >Tipo</span></td>
          <td><input id="lastname"  onkeypress="return nimrda(event)" onclick="javascript: limpia(this);" class="textbox" name="tipo" list="listas3" placeholder="..."  type="text" required=""   value="<?php echo $row['tipo_prod']; ?>" Title= "escoja el tipo adecuado">
   
	 <datalist id="listas3">
	  <option value="Abatible" >
	   <option value="Integral" >
	   <option value="Dual" >
	   <option value="JET" >
	   <option value="Modular" >
   
    
    </datalist> </td>
          
        </tr>

       <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
		
		<td><span class="label label-default">Precio</span></td>
          <td><input  onkeypress="return solonum(event)" id="lastname" type="Text" name="precio" REQUIRED placeholder="$..." value="<?php echo $row['prec_prod']; ?>" pattern="[0-9]{1,11}" maxlength="11" title= "Ingrese precio, no se admite numeros negativos"></td>
          
        </tr>
        <tr>
       
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          
        </tr>
        <tr>
          <td><span class="label label-default">Descripción</span></td>
          <td><textarea REQUIRED  rows="5" name="descrip" id="message"  placeholder="...."  size="190" maxlength="190"  title="ingrese descripcion"><?php echo $row['desc_prod']; ?></textarea></td>
             
        </tr>
        <tr>
          <td>&nbsp;</td>
            </tr>
        
         
	  
		
		  
        
      </tbody>
    </table>
    </div></td>
      <td><div>
      <span class="label label-info">Imagen Seleccionada <br> <br><br> <br><br> </span>
	  <br>
       <output id="list" size="300"   value="data:image/jpg;base64,<?php echo base64_encode($row['img_prod']); ?>" ></output>
	     <img height= "90px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_prod']); ?>" />
       <input  id="files" type="file"  class="register2" REQUIRED name="imagen"  value="data:image/jpg;base64,<?php echo base64_encode($row['img_prod']); ?>" >    </input>
	   
	   
      </div></td>
    </tr>
	
	
  </tbody>
  
</table>
<br>
 <center><input type="submit" class="register" value="Guardar" >
 <a class="reset" onClick="return confirmation()" href="deleteproducto.php?cod_prod=<?php echo $row['cod_prod']; ?>" ><br>Eliminar</a>
<input type="button" class="reset" value="Cancelar" onClick="location.href='http://localhost/sharp/display/index.html'"></center>
		 
		 </form>
  </div>
</section>


</div>
				
							
							
							
									
				
				<footer id="fh5co-footer" style=" background: white;">
					<center><p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2016 <a href="#">Core</a>. Todos los derechos reservados <em>por</em> <a href="#" target="_blank">Sharp</a> <br> <a href="http://unsplash.com/" target="_blank"></a></small></p><center>
					<div class="container">
				


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

<script src="js1/bootstrap.min.js"></script>
<!-- esto es para mostrar la imagen escogida -->
<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
	</body>
</html>
