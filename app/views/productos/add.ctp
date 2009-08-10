<div class="productos form">
<?php echo $form->create('Producto');?>
	<fieldset>
 		<legend><?php __('Add Producto');?></legend>
	<?php
		echo $form->input('linea_id');
		echo $form->input('nombre');
		echo $form->input('estaactivo');
		echo $form->input('Medida');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Productos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Lineas', true), array('controller'=> 'lineas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Linea', true), array('controller'=> 'lineas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Detalles', true), array('controller'=> 'detalles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Detalle', true), array('controller'=> 'detalles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Medidas', true), array('controller'=> 'medidas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Medida', true), array('controller'=> 'medidas', 'action'=>'add')); ?> </li>
	</ul>
</div>
