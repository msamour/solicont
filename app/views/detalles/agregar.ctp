	<?=$ajax->form('/detalles/add','post',array('update'=>'detalles'));?>
		<?php //echo $ajax->form('edit','post',array('model'=>'Detalle','update'=>'div')); ?>
      
          <fieldset>
             <legend><?php __('Add Jerk');?></legend>
          <?php
              echo $form->input('detalle.fecha', array('style'=>'myinputstyle'));
			   echo $form->input('detalle.Cantidad', array('style'=>'myinputstyle'));
			   echo $form->input('detalle.Costo');
			   
          ?>
		  <?=$form->end('Agregar');?>
          </fieldset>
   		