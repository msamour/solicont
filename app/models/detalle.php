<?php
class Detalle extends AppModel {

	var $name = 'Detalle';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Bodega' => array(
			'className' => 'Bodega',
			'foreignKey' => 'bodega_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>