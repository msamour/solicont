<?php
class Linea extends AppModel {

	var $name = 'Linea';
	var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'linea_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
