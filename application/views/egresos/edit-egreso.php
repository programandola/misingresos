<div class="row">
	<div class="col-md-4 col-md-offset-4" style="text-align:left;">
		<div class="div-add-cliente">
			<h3>Edición Egreso</h3>
			<div id="ajaxFail" class="alert alert-danger"></div>
			<form role="form">
			  <div class="form-group">
				Concepto: <input type="text" id="concept" class="form-control" value="<? echo $egreso->concepto ?>"/>
			  </div>
			  <div class="form-group">
			  	<label>Descripción:</label>
			  	<textarea class="form-control" id="descripcion"><? echo $egreso->descripcion ?></textarea>
			  </div>
			  <div class="form-group">
			  	<label>Egreso $:</label>
				<input type="text" id="egreso" class="form-control"  value="<? echo $egreso->egreso ?>"/>
			  </div>
			  <div class="form-group">
			  	<label>Fecha:</label>
			  	<input type="date" id="fechanueva" class="form-control" value="<? echo $egreso->fecha ?>"/>
			  	<input type="hidden" id="id_egreso" value="<? echo $egreso->id_egreso ?>">
			  </div>

			  <input type="button" value="Actualizar" class="btn btn-success" onclick="update_egreso('<? echo base_url() ?>egresos/update_egreso');">
			  <button type="submit" class="btn btn-warning">Cancelar</button>
			</form>
		</div>
		<div class="div-success">
			<p><img src="<? echo base_url() ?>public/images/Palomita.png"> Se actualizo el Egreso correctamente</p>
			<center><input type="button" value="Ir a Registros" class="btn btn-info" onclick="redirect('<? echo base_url()?>egresos');"></center>
			<br>
		</div>
	</div>
</div>