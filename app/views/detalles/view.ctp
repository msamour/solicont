<div class="detalles view">
<h2><?php  __('Detalle');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bodega Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalle['Detalle']['bodega_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalle['Detalle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Producto Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalle['Detalle']['producto_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cantidad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalle['Detalle']['cantidad']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Costo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalle['Detalle']['costo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Detalle', true), array('action'=>'edit', $detalle['Detalle']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Detalle', true), array('action'=>'delete', $detalle['Detalle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $detalle['Detalle']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Detalles', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Detalle', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
