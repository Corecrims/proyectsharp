<?php

				require_once("conexion/conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
#container {
	height: 400px; 
	min-width: 310px; 
	max-width: 800px;
	margin: 0 auto;
}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Resultados Votaciones de Producto 3D'
        },
        subtitle: {
            text: 'La Cantidad mayor es el mejor producto elegido'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
			<?php
$sql=mysql_query("select * from producto order by clicks");
while($res=mysql_fetch_array($sql)){			
?>					
			
			['<?php echo $res['nom_prod']; ?>'],
<?php
}
?>
			]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Sondeo - Votos',
            data: [
			
			<?php
$sql=mysql_query("select * from producto order by clicks");
while($res=mysql_fetch_array($sql)){			
?>			
			
			[<?php echo $res['clicks'] ?>],
			
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
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>

<center><a href="sondeo.php"><button> REGRESAR A VOTACIONES</button></a></center>
<center><a href="index.html"><button> MENU PRINCIPAL</button></a></center>
	</body>
</html>
