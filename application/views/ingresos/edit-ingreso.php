<div class="row">
	<div class="col-md-4 col-md-offset-4" style="text-align:left;">
		<div class="div-add-cliente">
			<h3>Edición Ingreso</h3>
			<div id="ajaxFail" class="alert alert-danger"></div>
			<form role="form">
			  <div class="form-group">
				Concepto: <input type="text" id="concept" class="form-control" value="<? echo $ingreso->concepto ?>"/>
			  </div>
			  <div class="form-group">
			  	<label>Descripción:</label>
			  	<textarea class="form-control" id="descripcion"><? echo $ingreso->descripcion ?></textarea>
			  </div>
			  <div class="form-group">
			  	<label>Ingreso $:</label>
				<input type="text" id="ingreso" class="form-control"  value="<? echo $ingreso->ingreso ?>"/>
			  </div>
			  <div class="form-group">
			  	<label>Fecha:</label>
			  	<input type="date" id="fechanueva" class="form-control" value="<? echo $ingreso->fecha ?>"/>
			  	<input type="hidden" id="id_ingreso" value="<? echo $ingreso->id_ingreso ?>">
			  </div>

			  <input type="button" value="Actualizar" class="btn btn-success" onclick="update_ingreso('<? echo base_url() ?>ingresos/update_ingreso');">
			  <button type="submit" class="btn btn-warning">Cancelar</button>
			</form>
		</div>
		<div class="div-success">
			<p><img src="<? echo base_url() ?>public/images/Palomita.png"> Se actualizo el Ingreso correctamente</p>
			<center><input type="button" value="Ir a Registros" class="btn btn-info" onclick="redirect('<? echo base_url()?>ingresos');"></center>
			<br>
		</div>
	</div>
</div>