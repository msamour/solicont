<div class="empresas form">
<?php echo $form->create('Empresa');?>
	<fieldset>
 		<legend><?php __('Add Empresa');?></legend>
	<?php
		echo $form->input('nombre');
		echo $form->input('direccion');
		echo $form->input('esactivo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Empresas', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Bodegas', true), array('controller'=> 'bodegas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add')); ?> </li>
	</ul>
</div>
