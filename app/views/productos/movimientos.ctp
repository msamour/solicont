 <?php e($ajax->div('form'))?>
<?php e($ajax->divEnd('form'))?>
	
 

<?php 
	echo $ajax->div('div');
	echo "0.00";
	echo $ajax->divEnd('div');
?> 
<script>
	 <?php echo $ajax->remoteFunction(
	 array(
	 'url' => array( 'controller' => 'detalles', 'action' =>'movimientos',1,1),
	 'update' => 'div'
	 )
	 ); ?>
</script>

     
<?php
echo $ajax->link('Agregar',
 array( 'controller' => 'detalles', 'action' => 'agregar',  ),
 array( 'update' => 'form' )
 ); 



?>

