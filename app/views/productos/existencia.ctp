<?php //debug($bodega);?>
<?php //debug($producto);?>
<?php 
	-//Variables 
	$saldo = 0
	
?>
<?foreach ($producto as $key=>$deta):?>

<?php
	//debug($key);
	//debug($deta);
	if ($key == 'Detalle') {
		if( $deta['bodega_id'] = $bodega) {
			
			$saldo = $saldo + $deta['cantidad'];
			//echo $deta['costo'].'<br>';
		}
	}
?>	
<?php endforeach; ?>
<?php echo $saldo;?>

