<div class="encabezados view">
<h2><?php  __('Movimientos de Inventario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $encabezado['Encabezado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($encabezado['Tipo']['nombre'], array('controller'=> 'tipos', 'action'=>'view', $encabezado['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bodega'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($encabezado['Bodega']['nombre'], array('controller'=> 'bodegas', 'action'=>'view', $encabezado['Bodega']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $encabezado['Encabezado']['fecha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $encabezado['Encabezado']['observacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
	</ul>
<div class="related">
	<h3><?php __('Detalle');?></h3>
	<?php if (!empty($encabezado['Detalle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Producto'); ?></th>
		<th><?php __('Cantidad'); ?></th>
		<th><?php __('Costo'); ?></th>
		<th><?php __('Total'); ?></th>
		<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		$IntCosto = 0;
		foreach ($encabezado['Detalle'] as $detalle):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $detalle['Producto']['nombre'];?></td>
			<td><?php echo $detalle['cantidad'];?></td>
			<td><?php echo $detalle['costo'];?></td>
			<?$IntCosto = $IntCosto + $detalle['costo'] *  $detalle['cantidad'] ?>
			<td><?php echo $detalle['cantidad'] * $detalle['costo']?></td>
			<td class="actions">
				<?php echo $html->link(__('Ver', true), array('controller'=> 'detalles', 'action'=>'view', $detalle['id'])); ?>
				<?php echo $html->link(__('Editar', true), array('controller'=> 'detalles', 'action'=>'edit', $detalle['id'])); ?>
				<?php echo $html->link(__('Borrar', true), array('controller'=> 'detalles', 'action'=>'delete', $detalle['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $detalle['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
		<tr><th>Totales</th><td></td><td></td><th><?php echo $IntCosto; ?> </th><td></td> </tr>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Detalle', true), array('controller'=> 'detalles', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div>
	<?//debug($encabezado)?>
</div>
