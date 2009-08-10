<table>
	<tr>
		<th>Fecha</th>
		<th>Cantidad</th>
		<th>Costo</th>
		<th>Acciones</th>
	</tr>
<?php foreach ($detalles as $detalle): ?>
	<tr>
		<td>
			<?php echo $time->niceShort($detalle['Detalle']['fecha']);?>
		</td>
		<td>
			<?php echo $detalle['Detalle']['cantidad'];?>
		</td>
		<td>
			<?php echo $detalle['Detalle']['costo'];?>
		</td>
		<td>
			<?php echo $ajax->link('Editar',
 array( 'controller' => 'detalles', 'action' => 'edit/'.$detalle['Detalle']['id'],  ),
 array( 'update' => 'form' )
 ); ?>
		</td>
	</tr>	
<?php endforeach; ?>
</table>