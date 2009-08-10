<div class="productos index">
<h2><?php __('Productos'.' '.$usuario);?></h2>
<p>
<table>
	<tr>
		<th>ID</th>
		<th>Linea</th>
		<th>Nombre</th>
		<th>Existencia</th> 
		<th>Acciones</th>
		
	</tr>
<?php
$i = 0;
foreach ($productos as $producto):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $producto['Producto']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($producto['Linea']['nombre'], array('controller'=> 'lineas', 'action'=>'view', $producto['Linea']['id'])); ?>
		</td>
		<td>
			<?php echo $producto['Producto']['nombre']; ?>
		</td>
		<td>
			
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $producto['Producto']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $producto['Producto']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $producto['Producto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $producto['Producto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>