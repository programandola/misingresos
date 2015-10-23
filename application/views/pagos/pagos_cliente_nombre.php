<?
if(count($pagos)>0){
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Concepto</th>
			<th>Monto</th>
			<th>Fecha</th>
			<th></th>
		</tr>	
	</thead>
	<tbody>
		<?
		foreach ($pagos as $value) {
			?>
			<tr>
				<td><? echo $value->nombre." ".$value->apellido_paterno." ".$value->apellido_materno ; ?></td>
				<td><? echo $value->concepto; ?></td>
				<td><? echo $value->monto; ?></td>
				<td><? echo $value->fecha; ?></td>
				<td><a href="javascript:void(0);" title="Abrir en Ventana" onclick="open_pago()"><span class="glyphicon glyphicon-eye-open"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Editar" onclick="edit_pago()"><span class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Eliminar" onclick="elimina_pago()"><span class="glyphicon glyphicon-remove"></span></a></td>
			</tr>
			<?
		}
		?>
	</tbody>
</table>
<?
}else{
	?>
	<p>No se encontraron resultados</p>
	<input type="button" class="btn btn-warning" value="Regresar" onclick="home();">
	<?
}
?>