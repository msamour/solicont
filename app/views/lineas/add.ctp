<div class="lineas form">
<?php echo $form->create('Linea');?>
	<fieldset>
 		<legend><?php __('Add Linea');?></legend>
	<?php
		echo $form->input('nombre');
		echo $form->input('estaactivo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Lineas', true), array('action'=>'index'));?></li>
	</ul>
</div>
