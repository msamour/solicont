<div class="detalles form">
<?php echo $form->create('Detalle');?>
	<fieldset>
 		<legend><?php __('Edit Detalle');?></legend>
	<?php
		echo $form->input('bodega_id');
		echo $form->input('id');
		echo $form->input('producto_id');
		echo $form->input('cantidad');
		echo $form->input('costo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Detalle.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Detalle.id'))); ?></li>
		<li><?php echo $html->link(__('List Detalles', true), array('action'=>'index'));?></li>
	</ul>
</div>
