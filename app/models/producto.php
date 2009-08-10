<?php
class Producto extends AppModel {

	var $name = 'Producto';
	var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Linea' => array(
			'className' => 'Linea',
			'foreignKey' => 'linea_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Detalle' => array(
			'className' => 'Detalle',
			'foreignKey' => 'producto_id',
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

	var $hasAndBelongsToMany = array(
		'Medida' => array(
			'className' => 'Medida',
			'joinTable' => 'productos_medidas',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'medida_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
}
?>