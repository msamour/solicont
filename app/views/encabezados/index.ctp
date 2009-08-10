<div class="encabezados index">
<h2><?php __('Encabezados');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('tipo_id');?></th>
	<th><?php echo $paginator->sort('bodega_id');?></th>
	<th><?php echo $paginator->sort('fecha');?></th>
	<th><?php echo $paginator->sort('observacion');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($encabezados as $encabezado):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $encabezado['Encabezado']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($encabezado['Tipo']['nombre'], array('controller'=> 'tipos', 'action'=>'view', $encabezado['Tipo']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($encabezado['Bodega']['nombre'], array('controller'=> 'bodegas', 'action'=>'view', $encabezado['Bodega']['id'])); ?>
		</td>
		<td>
			<?php echo $encabezado['Encabezado']['fecha']; ?>
		</td>
		<td>
			<?php echo $encabezado['Encabezado']['observacion']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $encabezado['Encabezado']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $encabezado['Encabezado']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $encabezado['Encabezado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $encabezado['Encabezado']['id'])); ?>
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
		<li><?php echo $html->link(__('Nuevo Movimientos', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('Salir', true), array('controller'=> '', 'action'=>'index')); ?> </li>
		<li><?//php echo $html->link(__('New Tipo', true), array('controller'=> 'tipos', 'action'=>'add')); ?> </li>
		<li><?//php echo $html->link(__('List Bodegas', true), array('controller'=> 'bodegas', 'action'=>'index')); ?> </li>
		<li><?//php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add')); ?> </li>
		<li><?//php echo $html->link(__('List Detalles', true), array('controller'=> 'detalles', 'action'=>'index')); ?> </li>
		<li><?//php echo $html->link(__('New Detalle', true), array('controller'=> 'detalles', 'action'=>'add')); ?> </li>
	</ul>
</div>
