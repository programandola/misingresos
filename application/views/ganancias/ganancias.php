<?

if(count($egresos)>0){
	
?>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Ingresos</th>
				<th>Egresos</th>
				<th>Ganancia Neta</th>
				<th></th>
			</tr>	
		</thead>
		<tbody>
			<?
			foreach ($egresos as $egreso) {
				$totalmes+=$egreso->egreso;
				?>
				<tr>
					<td><? echo $egreso->fecha?></td>
					<td><? echo $egreso->concepto; ?></td>
					<td><? echo $egreso->descripcion; ?></td>
					<td>$<? echo $egreso->egreso; ?></td>
					<td><a href="javascript:void(0);" title="Abrir en Ventana" onclick="open_view_clientes('');"><span class="glyphicon glyphicon-eye-open"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Editar" onclick="edit_pago()"><span class="glyphicon glyphicon-edit"></a>&nbsp;&nbsp;<a href="javascript:void(0);" title="Eliminar" onclick="elimina_pago()"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
				<?
			}
			?>
		</tbody>
	</table>
	<p>Total de Egresos $<? echo $totalmes; ?></p>
<?
}else{
	echo "<p>No existen registron aun</p>";
}
?>