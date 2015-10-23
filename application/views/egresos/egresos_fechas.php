<?
if(count($egresos)>0){
?>
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
		$totalmes=0;
		foreach ($egresos as $value) {
			$totalmes+=$value->egreso;
			?>
			<tr>
				<td><? echo $value->fecha; ?></td>
				<td><? echo $value->concepto; ?></td>
				<td><? echo $value->descripcion; ?></td>
				<td>$<? echo number_format($value->egreso, "2"); ?></td>
				<td><a href="javascript:void(0);" title="Editar" onclick="edit_egreso('<? echo base_url()?>egresos/edit_egreso', <? echo $value->id_egreso ?>)"><span class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Eliminar" onclick="delete_registro('<? echo base_url() ?>egresos/delete_egreso/<? echo $value->id_egreso ?>','Realmente deseas eliminar el registro?')"><span class="glyphicon glyphicon-remove"></span></a></td>
			</tr>
			<?
		}
		?>
	</tbody>
</table>
<p>Total de Egresos $<? echo number_format($totalmes, "2"); ?></p>
<?
}else{
	?>
	<p>No se encontraron resultados</p>
	<input type="button" class="btn btn-warning" value="Regresar" onclick="home();">
	<?
}
?>