<div class="lineas form">
<?php echo $form->create('Linea');?>
	<fieldset>
 		<legend><?php __('Edit Linea');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('nombre');
		echo $form->input('estaactivo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Linea.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Linea.id'))); ?></li>
		<li><?php echo $html->link(__('List Lineas', true), array('action'=>'index'));?></li>
	</ul>
</div>
