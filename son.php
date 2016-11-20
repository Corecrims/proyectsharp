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
            text: 'Contents of Highsoft\'s weekly fruit delivery'
        },
        subtitle: {
            text: '3D donut in Highcharts'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Delivered amount',
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

<!-- es el grafico que se muestra -->
<div id="container" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo2.php">2</a></center>












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
