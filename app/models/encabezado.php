<?php
class Encabezado extends AppModel {

	var $name = 'Encabezado';
	var $recursive = 2;
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Bodega' => array(
			'className' => 'Bodega',
			'foreignKey' => 'bodega_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Detalle' => array(
			'className' => 'Detalle',
			'foreignKey' => 'encabezado_id',
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
