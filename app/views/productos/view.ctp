<div class="productos view">
<h2><?php  __('Producto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $producto['Producto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Linea'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($producto['Linea']['nombre'], array('controller'=> 'lineas', 'action'=>'view', $producto['Linea']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $producto['Producto']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Existencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $producto['Producto']['estaactivo']; ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php //echo $html->link(__('Edit Producto', true), array('action'=>'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php //echo $html->link(__('Delete Producto', true), array('action'=>'delete', $producto['Producto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $producto['Producto']['id'])); ?> </li>
		<li><?php //echo $html->link(__('List Productos', true), array('action'=>'index')); ?> </li>
		<li><?php //echo $html->link(__('New Producto', true), array('action'=>'add')); ?> </li>
		<li><?php //echo $html->link(__('List Lineas', true), array('controller'=> 'lineas', 'action'=>'index')); ?> </li>
		<li><?php //echo $html->link(__('New Linea', true), array('controller'=> 'lineas', 'action'=>'add')); ?> </li>
		<li><?php //echo $html->link(__('List Detalles', true), array('controller'=> 'detalles', 'action'=>'index')); ?> </li>
		<li><?php //echo $html->link(__('New Detalle', true), array('controller'=> 'detalles', 'action'=>'add')); ?> </li>
		<li><?php //echo $html->link(__('List Medidas', true), array('controller'=> 'medidas', 'action'=>'index')); ?> </li>
		<li><?php //echo $html->link(__('New Medida', true), array('controller'=> 'medidas', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Movimientos de Inventario');?></h3>
	<?php if (!empty($producto['Detalle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Encabezado Id'); ?></th>
		<th><?php __('Producto Id'); ?></th>
		<th><?php __('Cantidad'); ?></th>
		<th><?php __('Costo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($producto['Detalle'] as $detalle):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $detalle['id'];?></td>
			<td><?php echo $detalle['encabezado_id'];?></td>
			<td><?php echo $detalle['producto_id'];?></td>
			<td><?php echo $detalle['cantidad'];?></td>
			<td><?php echo $detalle['costo'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'detalles', 'action'=>'view', $detalle['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'detalles', 'action'=>'edit', $detalle['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'detalles', 'action'=>'delete', $detalle['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $detalle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('Nuevo Movimiento', true), array('controller'=> 'detalles', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Medidas');?></h3>
	<?php if (!empty($producto['Medida'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Estaactivo'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($producto['Medida'] as $medida):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $medida['id'];?></td>
			<td><?php echo $medida['nombre'];?></td>
			<td><?php echo $medida['estaactivo'];?></td>
			<td><?php echo $medida['created'];?></td>
			<td><?php echo $medida['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'medidas', 'action'=>'view', $medida['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'medidas', 'action'=>'edit', $medida['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'medidas', 'action'=>'delete', $medida['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $medida['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Medida', true), array('controller'=> 'medidas', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
