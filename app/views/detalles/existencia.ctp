<?php
//debug($detalles);
$i = 0;
foreach ($detalles as $detalle):
	//echo $detalle['Detalle']['cantidad'].'<br>';
	$i = $i +  $detalle['Detalle']['cantidad'];	
	
endforeach; ?>
<?php echo $i?>
