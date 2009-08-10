<div class="empresas index">
<h2><?php __('Empresas');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('direccion');?></th>
	<th><?php echo $paginator->sort('esactivo');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($empresas as $empresa):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $empresa['Empresa']['id']; ?>
		</td>
		<td>
			<?php echo $empresa['Empresa']['nombre']; ?>
		</td>
		<td>
			<?php echo $empresa['Empresa']['direccion']; ?>
		</td>
		<td>
			<?php echo $empresa['Empresa']['esactivo']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $empresa['Empresa']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $empresa['Empresa']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $empresa['Empresa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $empresa['Empresa']['id'])); ?>
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
		<li><?php echo $html->link(__('New Empresa', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Bodegas', true), array('controller'=> 'bodegas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add')); ?> </li>
	</ul>
</div>
