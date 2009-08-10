<div class="empresas view">
<h2><?php  __('Empresa');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Direccion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Esactivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['esactivo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Empresa', true), array('action'=>'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Empresa', true), array('action'=>'delete', $empresa['Empresa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Empresas', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Empresa', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Bodegas', true), array('controller'=> 'bodegas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Bodegas');?></h3>
	<?php if (!empty($empresa['Bodega'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Empresa Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Estaactivo'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empresa['Bodega'] as $bodega):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $bodega['id'];?></td>
			<td><?php echo $bodega['empresa_id'];?></td>
			<td><?php echo $bodega['nombre'];?></td>
			<td><?php echo $bodega['estaactivo'];?></td>
			<td><?php echo $bodega['created'];?></td>
			<td><?php echo $bodega['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'bodegas', 'action'=>'view', $bodega['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'bodegas', 'action'=>'edit', $bodega['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'bodegas', 'action'=>'delete', $bodega['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bodega['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
