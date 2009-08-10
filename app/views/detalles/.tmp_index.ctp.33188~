<div class="detalles index">
<h2><?php __('Detalles');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('bodega_id');?></th>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('producto_id');?></th>
	<th><?php echo $paginator->sort('cantidad');?></th>
	<th><?php echo $paginator->sort('costo');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($detalles as $detalle):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $detalle['Detalle']['bodega_id']; ?>
		</td>
		<td>
			<?php echo $detalle['Detalle']['id']; ?>
		</td>
		<td>
			<?php echo $detalle['Detalle']['producto_id']; ?>
		</td>
		<td>
			<?php echo $detalle['Detalle']['cantidad']; ?>
		</td>
		<td>
			<?php echo $detalle['Detalle']['costo']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $detalle['Detalle']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $detalle['Detalle']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $detalle['Detalle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $detalle['Detalle']['id'])); ?>
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
		<li><?php echo $html->link(__('New Detalle', true), array('action'=>'add')); ?></li>
	</ul>
</div>
