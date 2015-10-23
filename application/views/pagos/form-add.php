<div class="row">
	<div class="col-md-4 col-md-offset-4" style="text-align:left">
		<div class="div-pago">
			<h3>Agregar Nuevo pago</h3>
			<div id="ajaxFail" class="alert alert-danger">
			</div>
			<form role="form">
			  <div class="wrapper">
				<input type="text" id="auto-completar" class="form-control" autocomplete="off" onpaste="return false" placeholder="Ingresa nombre ó apellido paterno del cliente"/>
				<input type="hidden" id="id_cliente">

				<div class="contenedor"></div>
			</div>
			  <div class="form-group">
			  	<p>Concepto</p>
			  	<textarea id="conceptop" class="form-control" style="text-align:left"></textarea>
			  </div>
			  <div class="form-group">
			    <input type="text" id="montop" class="form-control" placeholder="Monto $">
			  </div>
			  <div class="form-group">
			  	<p>Fecha</p>
			    <input type="date" id="fechap" class="form-control">
			  </div>
			  
			  <input type="button" value="Agregar" class="btn btn-success" onclick="addpago('<? echo base_url() ?>pagos/addpago');">
			  <button type="submit" class="btn btn-warning">Cancelar</button>
			</form>
		</div>
		<div class="div-success">
			<p><img src="<? echo base_url() ?>public/images/Palomita.png"> Se agrego el pago satisfactoriamente</p>
			<center><a href="<? echo base_url() ?>" class="btn btn-info"><< Ir a Registros</a></center>
			<br>
		</div>
	</div>
</div>