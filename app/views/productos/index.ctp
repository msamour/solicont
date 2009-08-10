<div class="productos index">
<h2><?php __('Productos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('linea_id');?></th>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('estaactivo');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
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
			<?php echo $producto['Producto']['estaactivo']; ?>
		</td>
		<td>
			<?php echo $producto['Producto']['created']; ?>
		</td>
		<td>
			<?php echo $producto['Producto']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $producto['Producto']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $producto['Producto']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $producto['Producto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $producto['Producto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Producto', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Lineas', true), array('controller'=> 'lineas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Linea', true), array('controller'=> 'lineas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Detalles', true), array('controller'=> 'detalles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Detalle', true), array('controller'=> 'detalles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Medidas', true), array('controller'=> 'medidas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Medida', true), array('controller'=> 'medidas', 'action'=>'add')); ?> </li>
	</ul>
</div>
