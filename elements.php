<!-- 
//////////////////////////////////////////////////////

FREE HTML5 TEMPLATE 
DESIGNED & DEVELOPED by FREEHTML5.CO

//////////////////////////////////////////////////////
 -->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sharp &mdash; Catalogo Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
 
  <meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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

	

	<!-- Theme Style -->
	<link rel="stylesheet" href="css/stylecata.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="inner-page">

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
							<li class="active">
								<a href="#" class="fh5co-sub-ddown">Menu</a>
								 <ul class="fh5co-sub-menu">
								 	<li>
										<a href="#" class="fh5co-sub-ddown">Clientes...</a>
										<ul class="fh5co-sub-menu">
											<li><a href="#">Buscar</a></li>
											<li><a href="right-sidebar.html">Registro Clientes</a></li>
											<li><a href="modclientes.php">Modificar / Eliminar</a></li>
											<li><a href="listclientes.php">Lista De clientes</a></li>
										</ul>
									</li>
									
									<li class="active">
										<a href="#" class="fh5co-sub-ddown">Productos...</a>
										<ul class="fh5co-sub-menu">
											<li><a href="left-sidebar.html">Agregar</a></li>
											<li><a href="#">Modificar / Eliminar</a></li>
											<li class="active" ><a href="elements.php">Catalago Productos</a></li>
										</ul>
									</li>
									<li><a href="#">CSS3</a></li> 
								</ul>
							</li>
							<li class="active"><a href="elements.php">Lista de Productos</a></li>
							<li><a href="Listclientes.php">Lista de Clientes</a></li>
						</ul>
					</nav>

				</div>
			</header>
			
			<!-- START #fh5co-hero 
			<aside id="fh5co-hero" style="background-image: url(images/hero.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="fh5co-hero-wrap">
								<div class="fh5co-hero-intro">
										<h2>Inner Page<span></span></h2>
										<h1>Right Sidebar</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>  -->

			
					
	
<br></br>
<br></br>
<br></br>
<br></br>	
							

<tr>
		    
		</tr>
<center><h1><MARQUEE BGCOLOR=#9b7909> CATALOGO DE PRODUCTOS
                    
                </MARQUEE> 
                  </a></h1><center>
<!-- esto es para enviar archivos a la base de datos -->
<table  border="5"  >
		<thead background="img/verde1.png">
		<tr>
		    
		</tr>
		
		<tr>
		<th><center>Imagen<br></br></center></th>
		    <th><center>Codigo <br></br></center></th>
			<th><center>Modelo<br></br></center></th>
			<!-- <th><center>Cantidad<br></br></center></th> -->
			<th><center>Nombre<br></br></center></th>
			<th><center>Talla<br></br></center></th>
			<th><center>Marca<br></br></center></th>
			<th><center>Tipo Casco<br></br></center></th>
			<th><center>Precio<br></br></center></th>
			<th><center>Descripcion<br></br></center></th>
			
		</tr>
		 
		</thead>
		
		<tbody background="img/fondoGris.jpg" >
		
		<?php
		
		include("conexion.php");
		
		$query = "SELECT * FROM producto";
        $resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				
		?>		
			<tr>
			<td> <center> <img height= "150px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_prod']); ?>" /> </center></td>
			 <td> <center><h4><?php echo $row['cod_prod']; ?></h4> </center></td>
			 <td> <center><h4><?php echo $row['mod_prod']; ?></h4> </center></td>
			 <!-- <td> <center><h4><?php //echo $row['cant_prod']; ?></h4> </center></td>-->
			 <td> <center><?php echo $row['nom_prod']; ?></center> </td>
			 <td> <center><?php echo $row['talla_prod']; ?> </center></td>
			 <td> <center><?php echo $row['marca_prod']; ?> </center></td>
			 <td> <center><?php echo $row['tipo_prod']; ?> </center></td>
			 <td> <center><?php echo $row['prec_prod']; ?> </center></td>
			 <td> <?php echo $row['desc_prod']; ?> </td>
			 
			 <!--<th> <a class="btn btn-primary btn-lg1" role="main" style="background: Silver;" href="modificando.php?cod_articulo=<?php echo $row['cod_articulo']; ?>">Modificar este Articulo</a> -->		 
			 <!-- <br></br><a href="Eliminando.php?cod_articulo=<?php echo $row['cod_articulo']; ?>" >Eliminar este Articulo</a> </th> -->
			
			</tr>
			<?php
				
			}	
			?>
			
		
		
		
		</tbody>


</table>

</center>
							
							
							
		<br>
<br>
<br>
<br>		
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
