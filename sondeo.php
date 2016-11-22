<?php

				require_once("conexion/conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<title>Resultados Nuevos Productos</title>
		
		
		 <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">
		
		 <!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400|Crimson+Text' rel='stylesheet' type='text/css'>
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
		
		
		
<link rel="stylesheet" href="css/stylecata.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		
	</head>
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>




<!-- START #fh5co-header -->
			<header id="fh5co-header-section" role="header" class="" >
				<div class="container">
					
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"><a href="index.html"><img src ="images/SHARP-1.png" width="90" height="70"></a></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.html">Principal</a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Menu</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="left-sidebar.html">Registro de Productos</a></li>
								 	<li><a href="right-sidebar.html">Registrar Clientes</a></li>
									<li class="active" ><a href="#">Resultados Sondeo</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">JavaScript</a>
										<ul class="fh5co-sub-menu">
											<li><a href="#">jQuery</a></li>
											<li><a href="#">Zipto</a></li>
											<li><a href="#">Node.js</a></li>
											<li><a href="#">AngularJS</a></li>
										</ul>
									</li>
									<li><a href="#">CSS3</a></li> 
								</ul>
							</li>
							<li ><a href="elements.php">Lista de Productos</a></li>
							<li><a href="contact.html">Lista de Clientes</a></li>
						</ul>
					</nav>

				</div>
			</header>

			
	<br>
	<br>
	<br>
	
	
	<br>
	<br>
	<br>
<center><h1><MARQUEE BGCOLOR=#ea103c> NUEVOS PRODUCTOS
                    
                </MARQUEE> 
                  </a></h1><center>
				 



 <br>
		 
		 <br>

<h1  > <font color="white">Su opinion es muy importante para nosotros, a continuacion se muestra la nueva linea de productos presione clic encima del producto: </font> </h1>
 <br>
		 <br>
				 
<!-- esto es para enviar archivos a la base de datos -->
<table   >
		<thead >
		<tr>
		    
		</tr>
		
		<tr>
		<th><center><br></br></center></th>
		<th background="img/verde2.png"><center> <br> Nuevo Casco 1<br></br></center></th>
		    <th><center><br></br></center></th>
			<th background="img/verde2.png" ><center> <br> Nuevo Casco 2<br></br></center></th>
			<!-- <th><center>Cantidad<br></br></center></th> -->
			<th><center><br></br></center></th>
			<th background="img/verde2.png"><center><br>Nuevo Casco 3<br></br></center></th>
			<th><center><br></br></center></th>
			<th  background="img/verde2.png" ><center>Nuevo Casco 4<br></br></center></th>
			<th><center><br></br></center></th>
			<th background="img/verde2.png" ><center>Nuevo Casco 5<br></br></center></th>
			<th><center><br></br></center></th>
		</tr>
		 
		</thead>
		
		<tbody  >
		
		 <div id="ok" style="display: none;"> <br>
		 
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 
		 <img src="img/ok.png" width="400" height="200" >
		  <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 
		 
		 <?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM producto WHERE nuevo_prod = '1'";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>
			<tr>
			
				<td></td>
			<td background="img/fondoGris.jpg"> <center> <div id="image1" class="contadorClicks"><img src="img/1.png" value=""width="150" height="150" >
			
			
			
			</div></center>
			 <center><?php echo $row['nom_prod']; ?></center>
			<center>Talla: <?php echo $row['talla_prod']; ?> </center>
			<center>Marca: <?php echo $row['marca_prod']; ?> </center>
			<center>Tipo Casco: <?php echo $row['tipo_prod']; ?> </center>
			<center><?php echo $row['desc_prod']; ?> </center>
			 <center> ...............................</center>
			  <center>Precio: <?php echo $row['prec_prod']; ?> </center>
			</td>
			 
			
			
			</img>
			 
			 <?php
				
			}	
			?>
			
			
			
			<td></td>
			
			
			
			
			
			
			
			
			
			
			 <?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM producto WHERE nuevo_prod = '2'";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>
			
			<td background="img/fondoGris.jpg"> <center> <div id="image2" class="contadorClicks"><img src="img/2.png" width="150" height="150" >
			
			
			
			</div></center>
			 <center><?php echo $row['nom_prod']; ?></center>
			<center>Talla: <?php echo $row['talla_prod']; ?> </center>
			<center>Marca: <?php echo $row['marca_prod']; ?> </center>
			<center>Tipo Casco: <?php echo $row['tipo_prod']; ?> </center>
			<center><?php echo $row['desc_prod']; ?> </center>
			 <center> ...............................</center>
			  <center>Precio: <?php echo $row['prec_prod']; ?> </center>
			</td>
			 
			
			
			</img>
			 
			 <?php
				
			}	
			?>
			
			
			
			
				<td></td>
			
			
			
			
			
			
			
			
			
			
			 <?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM producto WHERE nuevo_prod = '3'";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>
			
			<td background="img/fondoGris.jpg"> <center> <div id="image3" class="contadorClicks"><img src="img/3.png" width="150" height="150" >
			
			
			
			</div></center>
			 <center><?php echo $row['nom_prod']; ?></center>
			<center>Talla: <?php echo $row['talla_prod']; ?> </center>
			<center>Marca: <?php echo $row['marca_prod']; ?> </center>
			<center>Tipo Casco: <?php echo $row['tipo_prod']; ?> </center>
			<center><?php echo $row['desc_prod']; ?> </center>
			 <center> ...............................</center>
			  <center>Precio: <?php echo $row['prec_prod']; ?> </center>
			</td>
			 
			
			
			</img>
			 
			 <?php
				
			}	
			?>
			
			
			
				<td></td>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			 <?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM producto WHERE nuevo_prod = '4'";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>
			
			<td background="img/fondoGris.jpg"> <center> <div id="image4" class="contadorClicks"><img src="img/4.png" width="150" height="150" >
			
			
			
			</div></center>
			 <center><?php echo $row['nom_prod']; ?></center>
			<center>Talla: <?php echo $row['talla_prod']; ?> </center>
			<center>Marca: <?php echo $row['marca_prod']; ?> </center>
			<center>Tipo Casco: <?php echo $row['tipo_prod']; ?> </center>
			<center><?php echo $row['desc_prod']; ?> </center>
			 <center> ...............................</center>
			  <center>Precio: <?php echo $row['prec_prod']; ?> </center>
			</td>
			 
			
			
			</img>
			 
			 <?php
				
			}	
			?>
			
			
			
				<td></td>
			
			
			
			
			
			
			
			
			
		
			
			
			
			
			
			 <?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM producto WHERE nuevo_prod = '5'";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>
			
			<td background="img/fondoGris.jpg"> <center> <div id="image5" class="contadorClicks"><img src="img/5.png" width="150" height="150" >
			
			
			
			</div></center>
			 <center><?php echo $row['nom_prod']; ?></center>
			<center>Talla: <?php echo $row['talla_prod']; ?> </center>
			<center>Marca: <?php echo $row['marca_prod']; ?> </center>
			<center>Tipo Casco: <?php echo $row['tipo_prod']; ?> </center>
			<center><?php echo $row['desc_prod']; ?> </center>
			 <center> ...............................</center>
			  <center>Precio: <?php echo $row['prec_prod']; ?> </center>
			</td>
			 
			
			
			</img>
			 
			 <?php
				
			}	
			?>
			
			
			
				<td></td>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</tr>
			
			
			
			
			
			
			
			
			
			
		
		</div>
		</tbody>
</img></div>

</table>

</center>
									<br>
									<br>
<center><a href="ejemplo4.php"><button> VER RESULTADOS Y ESTADISTICAS</button></a></center>












<div>
				
			
							
<br>
				<footer  style=" background: white;">
					<center><p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2016 <a href="#">Core</a>. Todos los derechos reservados <em>por</em> <a href="#" target="_blank">Sharp</a> <br> <a href="http://unsplash.com/" target="_blank"></a></small></p><center>
			
				</footer>
		
		












<!-- jQuery -->
		
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
	<script src="js/script.js" type="text/javascript"></script>
</html>
