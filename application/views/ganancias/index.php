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
	       	  		<?php $this->load->view('nav.php'); ?>
	       	  		<div class="espacio"></div>
	       	  		
	       	  		<div class="col-md-6">
	       	  				<p class="small"><b>Filtar por mes:</b></p>
		       	  			<select class="form-control" style="width:150px;" id="meses">
		       	  				<option value="1">Enero</option>
		       	  				<option value="2">Febrero</option>
		       	  				<option value="3">Marzo</option>
		       	  				<option value="4">Abril</option>
		       	  				<option value="5">Mayo</option>
		       	  				<option value="6">Junio</option>
		       	  				<option value="7">Julio</option>
		       	  				<option value="8">Agosto</option>
		       	  				<option value="9">Septiembre</option>
		       	  				<option value="10">Octubre</option>
		       	  				<option value="11">Noviembre</option>
		       	  				<option value="12">Diciembre</option>
		       	  			</select>
		       	  	</div>
		       	  	<div class="col-md-6">
	       	  				<p class="small"><b>Filtrar por fechas:</b></p>
			       			<select class="form-control" style="width:150px;" id="buscar">
			       				<option>Seleccionar</option>
			       				<option value="cliente">Fecha</option>
			       			</select>
				       		<div class="div-cliente">
				       			<ul>
				       				<li><div id="errorCliente" class="alert alert-danger" style="padding:2px; width:200px; margin-bottom:4px"></div><input type="text" id="search-cliente" style="width:200px;" class="form-control" placeholder='Ingresa Nombre ó Apellido'></li>
				       				<li><input type="button" value="Buscar" class="btn btn-success" onclick="return search_cliente_nombre_apellido('<? echo base_url() ?>clientes/get_clientes_nombre_apellido')">&nbsp;<input type="button" value="Cancelar" class="btn btn-warning" onclick="clientes();"></li>
				       			</ul>
				       		</div>
	       	  		</div>
	       			<div class="espacio"></div>
	       			<!--
					begin GRILLA PARA AJAX
	       			-->
	       			<div id="ajaxGrilla">
	       				<?
	       				if(count($ingresos)>0){
	       				?>
		       				<table class="table table-hover">
			       				<thead>
			       					<tr>
				       					<th>Fecha</th>
				       					<th>Ingresos</th>
				       					<th>Egresos</th>
				       					<th>Ganancia Neta</th>
				       				</tr>	
			       				</thead>
			       				<tbody>
			       						<tr>
				       						<td><? echo date("d-m-Y") ?></td>
				       						<td>$ <? echo number_format($ingresos->ingreso, '2'); ?></td>
				       						<td>$ <? echo number_format($egresos->egreso, '2'); ?></td>
				       						<td>$ <? echo number_format($ingresos->ingreso-$egresos->egreso, '2') ?></td>
				       					</tr>
				       			</tbody>
			       			</table>
			       		<?
			       		}else{
			       			echo "<p>No existen registron aun</p>";
			       		}
			       		?>
	       			</div>
	       			<!-- end grilla ajax -->
	       		</div>
	       	</div>
	   </div>
   </center>
</section>
<?php
	$this->load->view('footer.php');
?>