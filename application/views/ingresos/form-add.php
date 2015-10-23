<div class="row">
	<div class="col-md-4 col-md-offset-4" style="text-align:left">
		<div class="div-add-cliente">
			<h3>Agregar Ingreso</h3>
			<div id="ajaxFail" class="alert alert-danger"></div>
			<form role="form">
			  <div class="form-group">
				<input type="text" id="concept" class="form-control"  placeholder="Concepto"/>
			  </div>
			  <div class="form-group">
			  	<label>Descripción detallada:</label>
			  	<textarea class="form-control" id="descripcion"></textarea>
			  </div>
			  <div class="form-group">
				<input type="text" id="ingreso" class="form-control"  placeholder="$ Ingreso"/>
			  </div>
			  <div class="form-group">
			  	<p><input type="radio" name="fechaoption" class="option" value="fechactual"> Fecha Actual</p>
			  	<p><input type="radio" name="fechaoption" class="option" value="otrafecha"> Otra Fecha</p>
			  	<input type="hidden" id="fechaelegida" value="<? echo date("Y-m-d") ?>">
			  	<div class="div-hide">
			  		<input type="date" id="fechanueva" class="form-control" onchange="otra_fecha()"/>
			  	</div>
			  </div>

			  <input type="button" value="Agregar" class="btn btn-success" onclick="add_ingreso('<? echo base_url() ?>ingresos/add_ingreso');">
			  <button type="submit" class="btn btn-warning">Cancelar</button>
			</form>
		</div>
		<div class="div-success">
			<p><img src="<? echo base_url() ?>public/images/Palomita.png"> Se agrego el Ingreso correctamente</p>
			<center><input type="button" value="Ir a Registros" class="btn btn-info" onclick="redirect('<? echo base_url() ?>ingresos');"></center>
			<br>
		</div>
	</div>
</div>