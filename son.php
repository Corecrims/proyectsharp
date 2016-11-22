<?php

				require_once("conexion/conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Total de Votaciones en el sondeo de nuevos productos de Cascos Sharp'
        },
        subtitle: {
            text: 'Sistema de Donut 3D determina que producto lleva la mayor cantidad de votos'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Cantidad Total de Votos',
            data: [
               <?php
			$sql=mysql_query("select * from producto");
			while($res=mysql_fetch_array($sql)){
			?>
			
                ['<?php echo $res['nom_prod']; ?>', <?php echo $res['clicks'] ?>],
			
			<?php
			}
			?>	
			   
			   
            ]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>



<!-- START #fh5co-header -->
			<header id="fh5co-header-section" role="header" class="" >
				<div class="container">
					
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"><a href="index.html" ><img src ="images/SHARP-1.png" width="110" height="75"></a></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li >
								<a href="index.html">Inicio</a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown"><h5 color= black ;>Menu</h5></a>
								 <ul class="fh5co-sub-menu">
								 	
								 	
									
									
									<li>
										<a href="#" class="fh5co-sub-ddown">Gestion Clientes ...&nbsp </a>
										<ul class="fh5co-sub-menu">
											<li><a href="findclientes.php">Buscar  </a></li>
											<li><a href="right-sidebar.html">Registrar </a></li>
											<li><a href="modclientes.php">Modificar </a></li>
											<li><a href="eliminoclientes.php">Eliminar</a></li>
											<li><a href="listclientes.php">Lista General</a></li>
										</ul>
									</li>
									
									<li>
										<a href="#" class="fh5co-sub-ddown"><h5  > <font color="yellow">Productos ...</font> </h5></a>
										<ul class="fh5co-sub-menu">
											<li><a href="left-sidebar.html">Agregar Nuevo</a></li>
											<li><a href="modprod.php">Modificar</a></li>
											<li><a href="modprodelim.php">Eliminar</a></li>
											<li><a href="elements.php">Catalogo general </a></li>
										</ul>
									</li>
									
									
									<li class="active">
										<a href="#" class="fh5co-sub-ddown">Nuevos Productos ... &nbsp <br></a>
										<ul class="fh5co-sub-menu">
											<li class="active" ><a href="Sondeo.php">Sondeo</a></li>
											<li class="active"><a href="son.php">Resultados</a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li class="active"><a href="elements.php">Catalogo Productos</a></li>
							<li class="active" ><a href="contact.html">Contactenos</a></li>
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

<!-- es el grafico que se muestra -->
<div id="container" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
<br><br>













							
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
</html>
