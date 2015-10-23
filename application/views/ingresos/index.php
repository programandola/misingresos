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
	       	  		<div class="col-md-4">
	       	  			<button type="button" class="btn btn-primary" onclick="formu_ingreso('<? echo base_url() ?>ingresos/form_add');">Agregar Ingreso</button>
	       	  		</div>
	       	  		<div class="col-md-4">
	       	  			<p class="small"><b>Filtrar por:</b></p>
			       			<select class="form-control" style="width:150px;" id="buscar">
			       				<option>Seleccionar</option>
			       				<option value="fecha">Fecha</option>
			       			</select>
			       		<div class="div-fecha">
			       			<div id="errorFechas" class="alert alert-danger" style="padding:2px; width:200px; margin-bottom:4px"></div>
			       			<ul>
			       				<li>Desde <input type="date" onchange="esconde_div('#errorFechas')" style="width:140px" id="fechaDe" class="form-control"></li>
			       				<li>Hasta <input type="date" onchange="esconde_div('#errorFechas')" style="width:140px" id="fechaA" class="form-control"></li>
			       				<li><input type="button" value="Buscar" onclick="return search_ingresos_fecha('<? echo base_url() ?>home/get_ingresos_fechas');" class="btn btn-success"></li>
			       				<li><input type="button" value="Cancelar" class="btn btn-warning" onclick="home();"></li>
			       			</ul>
			       		</div>
	       	  		</div>
	       	  		<div class="col-md-4">
	       	  			<button type="button" class="btn btn-primary">Imprimir</button>
	       	  		</div>
	       	  		<div class="espacio"></div>
	       			<!--
					begin GRILLA PARA AJAX
	       			-->
	       			<div id="ajaxGrilla">
	       				<?
	       				if(count($ingresos)>0){
	       					?>
	       					<p>Total de Ingresos: $<? echo number_format($sumaingresos->ingreso, "2")?></p>
	       					<table class="table table-hover">
			       				<thead>
			       					<tr>
				       					<th>Fecha</th>
				       					<th>Concepto</th>
				       					<th>Descripción</th>
				       					<th>Ingreso</th>
				       					<th></th>
				       				</tr>	
			       				</thead>
			       				<tbody>
			       					<?
			       					$i=0;
			       					foreach ($ingresos as $value) {
			       						$i++;
			       						?>
			       						<tr>
				       						<td><? echo $value->fecha; ?></td>
				       						<td><? echo $value->concepto;?></td>
				       						<td id="td-detalle<? echo $i ?>"><? echo substr($value->descripcion, 0, 40); ?><a href="javascript:void(0);" onclick="expandir_detalle('#td-detalle<? echo $i ?>', '<? echo $value->descripcion ?>')">&nbsp;leer más</a></td>
				       						<td>$<? echo $value->ingreso; ?></td>
				       						<td><a href="javascript:void(0);" title="Editar" onclick="edit_ingreso('<? echo base_url()?>ingresos/edit_ingreso', <? echo $value->id_ingreso ?>)"><span class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Eliminar" onclick="delete_registro('<? echo base_url() ?>ingresos/delete_ingreso/<? echo $value->id_ingreso ?>','Realmente deseas eliminar el registro?')"><span class="glyphicon glyphicon-remove"></span></a></td>
				       					
				       					</tr>
			       						<?
			       					}
			       					?>
			       					<tr>
			       						<td></td>
			       						<td></td>
			       						<td align="right"><b>Total Ingresos</b></td>
			       						<td><b>$<? echo number_format($sumaingresos->ingreso, "2")?></b></td>
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
