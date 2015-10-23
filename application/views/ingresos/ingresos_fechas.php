<?
if(count($ingresos)>0){
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
		foreach ($ingresos as $value) {
			?>
			<tr>
				<td><? echo $value->fecha; ?></td>
				<td><? echo $value->concepto; ?></td>
				<td><? echo $value->descripcion; ?></td>
				<td>$<? echo number_format($value->ingreso, "2"); ?></td>
				<td><a href="javascript:void(0);" title="Editar" onclick="edit_ingreso('<? echo base_url()?>home/edit_ingreso', <? echo $value->id_ingreso ?>)"><span class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Eliminar" onclick="delete_registro('<? echo base_url() ?>home/delete_ingreso/<? echo $value->id_ingreso ?>','Realmente deseas eliminar el registro?')"><span class="glyphicon glyphicon-remove"></span></a></td>
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