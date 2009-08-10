<div class="lineas view">
<h2><?php  __('Linea');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $linea['Linea']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $linea['Linea']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estaactivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $linea['Linea']['estaactivo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $linea['Linea']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $linea['Linea']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Linea', true), array('action'=>'edit', $linea['Linea']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Linea', true), array('action'=>'delete', $linea['Linea']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $linea['Linea']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Lineas', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Linea', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
