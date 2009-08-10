<div class="empresas form">
<?php echo $form->create('Empresa');?>
	<fieldset>
 		<legend><?php __('Edit Empresa');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('nombre');
		echo $form->input('direccion');
		echo $form->input('esactivo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Empresa.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Empresa.id'))); ?></li>
		<li><?php echo $html->link(__('List Empresas', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Bodegas', true), array('controller'=> 'bodegas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add')); ?> </li>
	</ul>
</div>
