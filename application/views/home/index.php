<!DOCTYPE html> 
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	 Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });
    	$('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Ingresos, Egresos y Ganancias'
        },
        subtitle: {
            text: 'Año 2015'
        },
        xAxis: {
            categories: [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'
            ],
            title: {
                text:null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Miles de pesos',
                align:'high'
            },
            labels:{
                overflow: 'justify'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>${point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Ingreso',
            data: (function() {
                   var data = [];
                    <?php
                        foreach ($ingresos as $value) {
                        	?>
                        		data.push([<?php echo $value.",";?>]);
                        		<?
                        	
                        } ?>
                return data;
                })()
        }, {
            name: 'Egreso',
            data: (function() {
                   var data = [];
                    <?php
                        foreach ($egresos as $value) {
                        	?>
                        		data.push([<?php echo $value.",";?>]);
                        		<?
                        	
                        } ?>
                return data;
                })()
        }, {
            name: 'Ganancia',
            data: (function() {
                   var data = [];
                    <?php
                        foreach ($ganancias as $value) {
                        	?>
                        		data.push([<?php echo $value.",";?>]);
                        		<?
                        	
                        } ?>
                return data;
                })()
        }]
    });
  });
 
</script>
 <link rel="stylesheet" id="bootstrap-css" href="<?php echo base_url()?>public/css/bootstrap.min.css" type="text/css" media="all">
 <link rel="stylesheet" href="<?php echo base_url()?>public/css/estilos.css" type="text/css" media="screen">
 <link rel="stylesheet" href="<?php echo base_url()?>public/css/popup.css" type="text/css" media="screen">
 <link rel="icon" href="<?php echo base_url(); ?>public/images/favicon.png" type="image/png">  
</head>
<body>
	<?php
	$this->load->view('pop-ups.php');
?>
<section class="section-main">
	<center>
   		<div class="container">
	       <div class="row">
	    		<?php
					$this->load->view('header.php');
				?>
	       	  	<div class="col-md-12" style="margin-top:30px">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="<? echo base_url() ?>">Home</a></li>
					  <li><a href="<? echo base_url() ?>ingresos">Ingresos</a></li>
					  <li><a href="<? echo base_url() ?>egresos">Egresos</a></li>
					  <li><a href="<? echo base_url() ?>ganancias">Ganancia Neta</a></li>
					</ul>
	       			<!-- begin GRILLA PARA AJAX -->
	       			<div id="ajaxGrilla">
	       				<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	       			</div>
	       			<!-- end grilla ajax -->
	       		</div>
	       	</div>
	   </div>
   </center>
</section>
<script src="<? echo base_url() ?>public/js/highcharts.js"></script>
<script src="<? echo base_url() ?>public/js/exporting.js"></script>
<?php
	$this->load->view('footer.php');
?>
</body>
</html>