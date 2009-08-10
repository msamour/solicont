<div class="encabezados form">
<?php echo $form->create('Encabezado');?>
	<fieldset>
 		<legend><?php __('Edit Encabezado');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('tipo_id');
		echo $form->input('bodega_id');
		echo $form->input('fecha');
		echo $form->input('observacion');
		echo $form->input('estaactivo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Encabezado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Encabezado.id'))); ?></li>
		<li><?php echo $html->link(__('List Encabezados', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Tipos', true), array('controller'=> 'tipos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tipo', true), array('controller'=> 'tipos', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Bodegas', true), array('controller'=> 'bodegas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bodega', true), array('controller'=> 'bodegas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Detalles', true), array('controller'=> 'detalles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Detalle', true), array('controller'=> 'detalles', 'action'=>'add')); ?> </li>
	</ul>
</div>
