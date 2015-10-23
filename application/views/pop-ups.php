<!-- popup cerrar sesion -->
<div id="popup-cerrar-sesion" style="display: none;">
    <div class="content-popup">
        <div>
           <h2>Realmente Deseas Cerrar Sesión?</h2>
           		<br>
           		<center>
	           		<input type="button" value="Aceptar"  class="btn btn-success" onclick="cerrar_sesion('<?php echo base_url()?>login/salir');">
	           		<input type="button" value="Cancelar"  class="btn btn-warning" id="boton-cancela">
	           	</center>
        </div>
    </div>
</div>
<!-- end cerrar sesion-->
<!-- popup vista pagos-->
<div id="popup-vista-pagos" style="display: none; font-size:13px">
    <div class="content-popup">
    	<div class="close"><a href="#" id="close-login"><img src="<?php echo base_url();?>public/images/close.png"/></a></div>
        <div>
           <h2>Vista Pagos</h2>
           	  <table>
		           	<tr>
		           		<td><b>Nombre</b><br><input type="text" class="input-view-pagos" id="nombre_cliente"></td>
		           		<td><b>Fecha</b><br><input type="text" class="input-view-pagos" id="fecha"></td>
		           	</tr>
		           	<tr>
		           		<td><b>Monto</b><br>$<input type="text" class="input-view-pagos" id="monto"></td>
		           	</tr>
           	  </table>
           	  <label>Concepto:</label>
           	  <textarea style="width:100%; height: 100px; padding:5px" id="concepto"></textarea>
        </div>
    </div>
</div>
<!-- end vista pagos-->
<!-- popup vista clientes-->
<div id="popup-vista-clientes" style="display: none; font-size:13px">
    <div class="content-popup">
    	<div class="close-clientes"><a href="#" id="close-login"><img src="<?php echo base_url();?>public/images/close.png"/></a></div>
        <div>
           <h2>Vista Clientes</h2>
           	  <table>
		           	<tr>
		           		<td><b>Cliente</b><br><input type="text" class="input-view-pagos" id="cliente"></td>
		           		<td><b>Fecha Alta</b><br><input type="text" class="input-view-pagos" id="fecha"></td>
		           	</tr>
		           	<tr>
		           		<td><b>Correo</b><br><input type="text" class="input-view-pagos" id="correo"></td>
		           		<td><b>Teléfono</b><br><input type="text" class="input-view-pagos" id="telefono"></td>
		           	</tr>
           	  </table>
           	  <label>Dirección:</label>
           	  <textarea style="width:100%; height: 100px; padding:5px" id="direccion"></textarea>
        </div>
    </div>
</div>
<!-- end vista pagos-->



		