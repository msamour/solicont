<div class="bodegas form">
<?php echo $form->create('Bodega');?>
	<fieldset>
 		<legend><?php __('Add Bodega');?></legend>
	<?php
		echo $form->input('empresa_id');
		echo $form->input('nombre');
		echo $form->input('estaactivo');
		echo $form->input('Producto');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Bodegas', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Empresas', true), array('controller'=> 'empresas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Empresa', true), array('controller'=> 'empresas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Encabezados', true), array('controller'=> 'encabezados', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Encabezado', true), array('controller'=> 'encabezados', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Productos', true), array('controller'=> 'productos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Producto', true), array('controller'=> 'productos', 'action'=>'add')); ?> </li>
	</ul>
</div>
