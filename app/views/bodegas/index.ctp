<div class="bodegas index">
<h2><?php __('Bodegas');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('empresa_id');?></th>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('estaactivo');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($bodegas as $bodega):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $bodega['Bodega']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($bodega['Empresa']['nombre'], array('controller'=> 'empresas', 'action'=>'view', $bodega['Empresa']['id'])); ?>
		</td>
		<td>
			<?php echo $bodega['Bodega']['nombre']; ?>
		</td>
		<td>
			<?php echo $bodega['Bodega']['estaactivo']; ?>
		</td>
		<td>
			<?php echo $bodega['Bodega']['created']; ?>
		</td>
		<td>
			<?php echo $bodega['Bodega']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $bodega['Bodega']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $bodega['Bodega']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $bodega['Bodega']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bodega['Bodega']['id'])); ?>
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
		<li><?php echo $html->link(__('New Bodega', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Empresas', true), array('controller'=> 'empresas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Empresa', true), array('controller'=> 'empresas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Encabezados', true), array('controller'=> 'encabezados', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Encabezado', true), array('controller'=> 'encabezados', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Productos', true), array('controller'=> 'productos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Producto', true), array('controller'=> 'productos', 'action'=>'add')); ?> </li>
	</ul>
</div>